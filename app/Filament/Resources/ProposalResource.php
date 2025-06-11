<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProposalResource\Pages;
use App\Models\CompanySetting;
use App\Models\Proposal;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProposalResource extends Resource
{
    protected static ?string $model = Proposal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Split::make([
                    Section::make('Left')->schema([
                        Hidden::make('user_id')
                            ->default(fn() => Auth::id())
                            ->required(),

                        Grid::make(3)
                            ->schema([
                                TextInput::make('project_name')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('project_location')->label('Project Location'),

                                TextInput::make('project_code')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(50),
                            ]),
                        Grid::make(3)
                            ->schema([
                                DatePicker::make('issue_date')
                                    ->required()
                                    ->default(now()),

                                TextInput::make('revision_label')
                                    ->placeholder('e.g. REV-1'),

                                Select::make('status')
                                    ->required()
                                    ->default('draft')
                                    ->options([
                                        'draft' => 'Draft',
                                        'pending' => 'Pending',
                                        'approved' => 'Approved',
                                        'rejected' => 'Rejected',
                                    ]),
                            ]),

                        Grid::make(3)
                            ->schema([
                                TextInput::make('spec_name')->label('Specification Name'),
                                TextInput::make('spec_series')->label('Specification Series'),
                                TextInput::make('spec_area')->label('Specification Area'),
                            ]),


                        // Furniture Items
                        Repeater::make('items')
                            ->relationship('items')
                            ->label('Furniture / Artwork Items')
                            ->collapsible()
                            ->defaultItems(1)
                            ->collapsed()
                            ->columns(3)
                            ->schema([

                                Grid::make(4)->schema([


                                    Grid::make(1)->schema([
                                        TextInput::make('item_code')->required()->label('Code'),
                                        TextInput::make('item_name')->required()->label('Name'),
                                        TextInput::make('manufacturer_details')->label('Manufacturer Details'),
                                    ])->columnSpan(1),

                                    Grid::make(1)->schema([
                                        TextInput::make('item_description')->label('Description'),

                                        TextInput::make('item_category')
                                            ->label('Category')
                                            ->required()
                                            ->reactive() // so we can modify state immediately
                                            ->afterStateUpdated(function (callable $set, $state) {
                                                if ($state === null) {
                                                    $set('item_category', null);
                                                    return;
                                                }

                                                // Collapse multiple whitespace into one,
                                                // then trim, then Title Case:
                                                $collapsed = preg_replace('/\s+/', ' ', $state);
                                                $trimmed  = trim($collapsed);
                                                $titleCased = mb_convert_case($trimmed, MB_CASE_TITLE, 'UTF-8');

                                                $set('item_category', $titleCased);
                                            }),
                                        TextInput::make('product_code')->label('Product Code'),

                                    ])->columnSpan(1),

                                    Grid::make(1)->schema([
                                        TextInput::make('location')->label('Area/Location'),
                                        TextInput::make('item_quantity')->numeric()->required()->label('Quantity'),
                                        TextInput::make('revision')->label('Revision'),
                                    ])->columnSpan(1),


                                    FileUpload::make('thumbnail_path')
                                        ->label('Thumbnail')
                                        ->image()
                                        ->disk('public')
                                        ->directory('proposals/thumbnails')
                                        ->required()
                                        ->openable(),

                                ]),

                                // TextInput::make('item_category')->label('Category'),

                                // TextInput::make('materials')->label('Materials'),

                                Section::make([
                                    Grid::make(4)->schema([
                                        TextInput::make('model_name')->label('Model Name'),
                                        TextInput::make('model_number')->label('Model Number'),

                                        TextInput::make('item_width')->numeric()->label('Width (mm)'),
                                        TextInput::make('item_length')->numeric()->label('Length (mm)'),
                                        TextInput::make('item_height')->numeric()->label('Height (mm)'),

                                        TextInput::make('item_material')->label('Materials'),
                                        TextInput::make('item_details')->label('Details'),
                                        TextInput::make('item_note')
                                            ->label('Note')
                                            ->default('Supplier to coordinate the items structure and stability.'),

                                    ]),
                                ])->columnSpan(4),


                                Grid::make(3)->schema([

                                    FileUpload::make('drawings')
                                        ->label('Drawings')
                                        ->image()
                                        ->multiple()
                                        ->reorderable()
                                        ->disk('public')
                                        ->directory('proposals/drawings')
                                        ->panelLayout('grid')
                                        ->openable()
                                        ->columnSpan(1)
                                        ->extraAttributes(['class' => 'image-preview-width']),

                                    // Swatches
                                    Repeater::make('swatches')
                                        ->relationship('swatches')
                                        ->label('Swatches')
                                        ->schema([
                                            FileUpload::make('image_path')
                                                ->label('Image')
                                                ->image()
                                                ->disk('public')
                                                ->directory('proposals/swatches')
                                                ->panelLayout('square')
                                                ->openable()
                                                ->imagePreviewHeight('80')->columnSpan(1),

                                            Grid::make(1)->schema([
                                                TextInput::make('name')->label('Name'),
                                                TextInput::make('code')->label('Code'),
                                            ])->columnSpan(2)
                                        ])
                                        ->itemLabel(fn(array $state): ?string => isset($state['name']) ? $state['name'] : null)
                                        ->columns(3)
                                        ->collapsible()
                                        ->defaultItems(1)
                                        ->columnSpan(2),
                                ])
                            ])
                            ->columnSpanFull()
                            ->reorderable()
                            ->itemLabel(fn(array $state): ?string => isset($state['item_name'], $state['item_category']) ? $state['item_name'] . ' (' . $state['item_category']  . ')' : null),

                    ]),

                    Section::make()
                        ->compact()->schema([
                            \Filament\Forms\Components\View::make('pdf.proposal-preview')
                                ->label(false)
                                ->viewData([
                                    'company' => CompanySetting::first(),
                                    'usePublicPath' => false,
                                    'proposal' => $form->getRecord(),
                                ]),
                        ])
                    // Section::make()
                    //     ->compact()
                    //     ->schema([
                    //         \Filament\Forms\Components\View::make('pdf.html-preview')
                    //             ->label(false)
                    //             ->viewData([
                    //                 'company' => CompanySetting::first(),
                    //                 'usePublicPath' => false,
                    //                 'proposal' => $form->getRecord(), // you may need to pass this too!
                    //             ])
                    //     ])
                ])->columnSpanFull()
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
                Tables\Actions\Action::make('pdf')
                    ->label('PDF')
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn(Proposal $record) => route('proposals.pdf', $record))
                    ->openUrlInNewTab(),

                Tables\Actions\Action::make('preview')
                    ->label('Preview')
                    ->icon('heroicon-o-eye')
                    ->url(fn(Proposal $record) => route('filament.admin.resources.proposals.previewPdf', $record))
                    ->openUrlInNewTab(),

                Tables\Actions\Action::make('htmlPreview')
                    ->label('HTML Preview')
                    ->icon('heroicon-o-code-bracket')
                    ->url(fn(Proposal $record) => route('filament.admin.resources.proposals.htmlPreview', $record))
                    ->openUrlInNewTab(),

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
            'previewPdf' => Pages\ProposalPreviewPdf::route('/{record}/preview'),
            'htmlPreview' => Pages\HtmlPreview::route('/{record}/htmlpreview'),
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
