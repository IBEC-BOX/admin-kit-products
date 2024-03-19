<?php

namespace AdminKit\Products\UI\Filament\Resources;

use AdminKit\Core\Forms\Components\TranslatableTabs;
use AdminKit\Products\Models\Product;
use AdminKit\Products\UI\Filament\Resources\ProductResource\Pages;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Resource;
use Filament\Tables;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('photo')
                    ->label(__('admin-kit-products::products.resource.photo'))
                    ->collection('photo')
                    ->image()
                    ->required()
                    ->optimize('webp')
                    ->resize(30),
                TranslatableTabs::make(fn ($locale) => Tab::make($locale)->schema([
                    Forms\Components\TextInput::make('title.'.$locale)
                        ->label(__('admin-kit-products::products.resource.name'))
                        ->required(),
                    Forms\Components\RichEditor::make('text.'.$locale)
                        ->label(__('admin-kit-products::products.resource.text'))
                        ->required(),
                    Forms\Components\SpatieMediaLibraryFileUpload::make('attachments.'.$locale)
                        ->label(__('admin-kit-products::products.resource.attachments'))
                        ->collection('attachments.'.$locale)
                        ->multiple()
                        ->image()
                        ->optimize('webp')
                        ->resize(30),
                ])),
            ])
            ->columns(1);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin-kit-products::products.resource.id')),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('photo')
                    ->label(__('admin-kit-products::products.resource.photo'))
                    ->width(50)
                    ->height(50)
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('admin-kit-products::products.resource.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-products::products.resource.created_at')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->reorderable('sort')
            ->defaultSort('sort');
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
            'index' => Pages\ListProduct::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-products::products.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-products::products.resource.plural_label');
    }
}
