<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogsResource\Pages;
use App\Filament\Resources\BlogsResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\View\TablesRenderHook;
use Illuminate\Support\Str;

class BlogsResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('author')
                    ->label('Penulis')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('content')
                    ->label('Deskripsi')
                    ->required(),
                DatePicker::make('date')
                    ->displayFormat('d/m/Y')
                    ->format('Y-m-d')
                    ->label('Tanggal'),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->required()
                    ->maxSize(4048),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    // ->primary()
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author')
                    ->label('Penulis')
                    ->searchable()
                    ->sortable(),
            Tables\Columns\TextColumn::make('content')
                ->label('Konten')
                ->searchable()
                ->sortable()
                ->formatStateUsing(function ($state) {
                    return Str::limit(strip_tags($state), 30); // Batas 100 karakter dan hapus tag HTML
                }),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    // ->thumbnail()
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // delete action
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlogs::route('/create'),
            'edit' => Pages\EditBlogs::route('/{record}/edit'),
        ];
    }
}
