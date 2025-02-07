<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Filament\Resources\PostResource\RelationManagers\TagsRelationManager;
use App\Filament\Resources\PostResource\Widgets\StatsOverview;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Select::make('category_id')->relationship('category', 'name'),
                    TextInput::make('title')->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->required(),
                    FileUpload::make('image')->image()->directory('posts'),
                    RichEditor::make('content'),
                    Toggle::make('is_published'),
                    
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                ImageColumn::make('image'),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('slug'),
                IconColumn::make('is_published'),
            ])
            ->filters([
                Filter::make('Published')
                ->query(function (Builder $query): Builder {
                   return $query->where('is_published', true);
                }),

                Filter::make('UnPublished')
                ->query(function (Builder $query): Builder {
                   return $query->where('is_published', false);
                }),
                SelectFilter::make('category')->relationship('category', 'name'),
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
            TagsRelationManager::class
        ];
    }

    public static function getWidgets(): array {
        return [
            StatsOverview::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
