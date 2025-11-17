<?php

namespace App\Filament\Resources\Posts\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Utilities\Set;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Group::make()
                ->columnSpan(2)
                ->schema([
                    Section::make('Konten Utama')
                        ->schema([
                            TextInput::make('title')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                ->maxLength(255),
                            TextInput::make('slug')
                                ->required()
                                ->unique(ignoreRecord: true)
                                ->maxLength(255),
                            RichEditor::make('content')
                                ->required()
                                ->columnSpanFull(),
                        ])->columns(2),
                ]),
            Group::make()
                ->columnSpan(1)
                ->schema([
                    Section::make('Pengaturan Tambahan')
                        ->schema([
                            Textarea::make('excerpt')
                                ->rows(3)
                                ->maxLength(500)
                                ->required(),
                            FileUpload::make('image')
                                ->image()
                                ->disk('public')
                                ->directory('post-images')
                                ->required(),
                            Select::make('status')
                                ->options([
                                    'draft' => 'Draft',
                                    'published' => 'Published',
                                ])
                                ->default('draft')
                                ->required(),
                            Select::make('category_id')
                                ->relationship('category', 'name')
                                ->required(),
                            Select::make('user_id')
                                ->label('Author')
                                ->relationship('user', 'name')
                                ->default(auth()->id())
                                ->required(),
                            Select::make('tags')
                                ->multiple()
                                ->relationship('tags', 'name')
                                ->preload(),
                        ])->columns(1),
                ]),
        ])->columns(3);
    }
}
