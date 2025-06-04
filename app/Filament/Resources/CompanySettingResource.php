<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanySettingResource\Pages;
use App\Filament\Resources\CompanySettingResource\RelationManagers;
use App\Models\CompanySetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class CompanySettingResource extends Resource
{
    protected static ?string $model = CompanySetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('logo_path')
                    ->label('Company Logo')
                    ->image()
                    ->disk('public')
                    ->directory('company/logo')
                    ->preserveFilenames(),

                Textarea::make('address')
                    ->label('Office Address')
                    ->rows(4)
                    ->required(),

                Forms\Components\Group::make([
                    TextInput::make('contact_name')->label('Contact Person'),
                    TextInput::make('contact_number')->label('Contact Number'),
                ])->columns(2),

                Forms\Components\Group::make([
                    TextInput::make('facsimile')->label('Facsimile'),
                    TextInput::make('website')->label('Website URL'),
                ])->columns(2),

                Forms\Components\Group::make([
                    Textarea::make('remarks')->label('Remarks')->rows(5),
                ])->columns(1)->columnSpan('full'),

                Forms\Components\Group::make([
                    Textarea::make('general_notes')->label('General Notes')->rows(5),
                ])->columns(1)->columnSpan('full'),

                Forms\Components\Group::make([
                    TextInput::make('studio_principal_name')->label('Studio Principal'),
                    TextInput::make('drawn_by_name')->label('Drawn By'),
                    TextInput::make('checked_by_name')->label('Checked By'),
                ])->columns(1),

                Repeater::make('emails')
                    ->label('Email Addresses')
                    ->simple(
                        TextInput::make('value')
                            ->label('')
                            ->email(),
                    )
                    ->default([
                        ['value' => 'milouni@houseofelm.design'],
                        ['value' => 'swati@houseofelm.design'],
                        ['value' => 'mahavira@houseofelm.design'],
                    ])
                    ->columns(1)
                    ->minItems(1)
                    ->maxItems(3)
                    ->addActionLabel('Add Email')
                    ->reorderable(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('contact_name')->label('Contact Name'),
                TextColumn::make('website')->label('Website'),
                TextColumn::make('updated_at')->label('Last Updated')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // No delete
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
        $id = \App\Models\CompanySetting::first()?->id ?? '1';
        return [
            'index' => Pages\ListCompanySettings::route('/' . $id),
            // 'create' => Pages\CreateCompanySetting::route('/create'),
            'edit' => Pages\EditCompanySetting::route('/{record}/edit'),
        ];
    }
}
