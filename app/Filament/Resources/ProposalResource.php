<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProposalResource\Pages;
use App\Models\Proposal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProposalResource extends Resource
{
    protected static ?string $model = Proposal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(fn() => auth()->id())
                    ->required(),

                TextInput::make('project_name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('project_code')
                    ->unique()
                    ->required()
                    ->maxLength(50),

                TextInput::make('client_name')
                    ->required()
                    ->maxLength(255),

                DatePicker::make('issue_date')
                    ->required()
                    ->default(now()),

                TextInput::make('revision_label')
                    ->maxLength(50)
                    ->placeholder('e.g. REV-1')
                    ->default(null),

                Select::make('status')
                    ->required()
                    ->default('pending')
                    ->options([
                        'pending'  => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ]),

                Textarea::make('notes')
                    ->columnSpanFull(),

                // Repeater for items 
                Repeater::make('proposalItems')
                    ->relationship('items')      // links to Proposal::items() relation
                    ->label('Furniture / Artwork Items')
                    ->collapsible()               // allow collapsing each item panel
                    ->defaultItems(1)             // start with one blank item
                    ->schema([
                        TextInput::make('code')
                            ->label('Item Code')
                            ->required()
                            ->maxLength(50),

                        TextInput::make('name')
                            ->label('Item Name')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('description')
                            ->label('Description')
                            ->rows(2),

                        TextInput::make('quantity')
                            ->label('Quantity')
                            ->required()
                            ->numeric(),

                        TextInput::make('section')
                            ->label('Location / Section')
                            ->required()
                            ->maxLength(255),

                        FileUpload::make('thumbnail_path')
                            ->label('Thumbnail')
                            ->image()
                            ->required()
                            ->directory('proposals/thumbnails')
                            // ->visibility('public')  // ← For shared hosting
                            ->disk('public'), // ← Crucial,

                        FileUpload::make('materials')
                            ->label('Material Swatches')
                            ->image()
                            ->multiple()               // allow multiple files
                            ->reorderable()       // let users drag to reorder swatches
                            ->directory('proposals/materials')
                            ->disk('public')
                            // ->visibility('public')  // ← For shared hosting
                            ->panelLayout('grid'),    // optional: display as a grid

                        FileUpload::make('drawings')
                            ->label('Technical Drawings')
                            ->image()                  // or ->file() if PDFs/DWG
                            ->multiple()
                            ->reorderable()
                            ->directory('proposals/drawings')
                            ->disk('public')
                            // ->visibility('public')
                            ->panelLayout('stacked'),

                        Textarea::make('remarks')
                            ->label('Remarks')
                            ->rows(2),
                    ])
                    ->columns(2)   // two columns per item for compactness
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('User')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('project_name')
                    ->searchable(),
                TextColumn::make('project_code')
                    ->searchable(),
                TextColumn::make('client_name')
                    ->searchable(),
                TextColumn::make('issue_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('revision_label')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProposals::route('/'),
            'create' => Pages\CreateProposal::route('/create'),
            'view' => Pages\ViewProposal::route('/{record}'),
            'edit' => Pages\EditProposal::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
