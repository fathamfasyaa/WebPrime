<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('k1')
                    ->label('Kategori 1')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('k2')
                    ->label('Kategori 2')
                    ->required()
                    ->maxLength(50),
                RichEditor::make('content')
                    ->label('Deskripsi')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Utama')
                    ->image()
                    ->required()
                    ->maxSize(4048),
                Forms\Components\FileUpload::make('image1')
                    ->label('Gambar Deskripsi 1')
                    ->image()
                    ->required()
                    ->maxSize(2048),
                Forms\Components\FileUpload::make('image2')
                    ->label('Gambar Deskripsi 2')
                    ->image()
                    ->required()
                    ->maxSize(2048),
                Forms\Components\FileUpload::make('image3')
                    ->label('Gambar Deskripsi 3')
                    ->image()
                    ->required()
                    ->maxSize(2048),
                Forms\Components\FileUpload::make('image4')
                    ->label('Gambar Deskripsi 4')
                    ->image()
                    ->required()
                    ->maxSize(2048),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k1')
                    ->label('Kategori 1')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('k2')
                    ->label('Kategori 2')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Deskripsi')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return Str::limit(strip_tags($state), 30); // Batas 100 karakter dan hapus tag HTML
                    }),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar Utama')
                    // ->thumbnail()
                    ->sortable(),  // tambahkan koma di sini
                Tables\Columns\ImageColumn::make('image1')
                    ->label('Gambar Deskripsi 1')
                    // ->thumbnail()
                    ->sortable(),  // pastikan koma ada di sini juga
                Tables\Columns\ImageColumn::make('image2')
                    ->label('Gambar Deskripsi 2')
                    ->sortable(),  // tambahkan koma
                Tables\Columns\ImageColumn::make('image3')
                    ->label('Gambar Deskripsi 3')
                    ->sortable(),  // tambahkan koma
                Tables\Columns\ImageColumn::make('image4')
                    ->label('Gambar Deskripsi 4')
                    ->sortable(),  // tambahkan koma
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolios::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
