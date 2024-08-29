<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductosResource\Pages;
use App\Models\Productos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductosResource extends Resource
{
    protected static ?string $model = Productos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Productos';

    protected static ?string $modelLabel = 'Productos';

    protected static ?string $navigationGroup = 'Productos';

    protected static ?string $slug = 'productos';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información general')
                    ->description("En esta seccion podras dar de alta productos nuevos, actualizar los que tengas registrados o eliminar alguno.")
                    ->schema([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('categoria_id')
                            ->relationship('categoria','nombre')
                            ->required(),
                        Forms\Components\MarkdownEditor::make('descripcion')
                        ->columnSpanFull(),
                    ])
                    ->columns(3)
                    ->collapsible(),
                Forms\Components\Section::make('Inventario, precio y estatus del producto')
                    ->schema([
                        Forms\Components\Toggle::make('activo')
                            ->required(),
                        Forms\Components\TextInput::make('inventario')
                            ->required()
                            ->numeric()
                            ->default(0),
                        Forms\Components\TextInput::make('precio')
                            ->required()
                            ->numeric()
                            ->prefix('$')
                            ->inputMode('decimal'),
                        Forms\Components\TextInput::make('codigo_de_barras')
                    ])
                    ->columns(4)
                    ->collapsible(),
                Forms\Components\Section::make('Imagen')
                    ->schema([
                        Forms\Components\FileUpload::make('imagen')
                            ->multiple()
                            ->directory('productos')
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('imagen')
                    ->stacked()
                    ->wrap()
                    ->limit(3)
                    ->limitedRemainingText(),
                Tables\Columns\IconColumn::make('activo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('precio')
                    ->prefix('$')
                    ->searchable(),
                Tables\Columns\TextColumn::make('inventario')
                    ->label('Inventario general')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('codigo_de_barras')
                    ->searchable(),
                Tables\Columns\TextColumn::make('categoria_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
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
            'index' => Pages\ListProductos::route('/'),
            'create' => Pages\CreateProductos::route('/create'),
            'edit' => Pages\EditProductos::route('/{record}/edit'),
        ];
    }
}
