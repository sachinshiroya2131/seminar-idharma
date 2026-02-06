<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', \Str::slug($state));
                    })
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                RichEditor::make('description')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'link',
                        'bulletList',
                        'orderedList',
                        'h2',
                        'h3',
                        'blockquote',
                        'codeBlock',
                        'undo',
                        'redo',
                    ])

                    ->extraAttributes([
                        'style' => 'min-height: 200px;',
                    ])
                    ->columnSpanFull(),

                DateTimePicker::make('start_datetime')
                    ->required()
                    ->maxDate(fn($get) => $get('end_datetime')),

                DateTimePicker::make('end_datetime')
                    ->required()
                    ->minDate(fn($get) => $get('start_datetime')),

                TextInput::make('venue'),

                TextInput::make('city'),

                Toggle::make('is_online'),

                TextInput::make('meeting_url')
                    ->url(),

                TextInput::make('capacity')
                    ->numeric(),

                TextInput::make('price')
                    ->numeric()
                    ->prefix('₹'),

                DateTimePicker::make('registration_deadline'),

                FileUpload::make('banner')
                    ->image()
                    ->disk('public')
                    ->image()
                    ->imageEditor()
                    ->maxSize(5120)
                    ->directory('events'),

                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'cancelled' => 'Cancelled',
                        'completed' => 'Completed',
                    ])
                    ->required(),

                Select::make('organizer_id')
                    ->relationship('organizer', 'name')
                    ->searchable(),
            ]);
    }
}
