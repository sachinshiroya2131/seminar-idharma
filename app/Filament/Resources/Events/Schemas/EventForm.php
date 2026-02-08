<?php

namespace App\Filament\Resources\Events\Schemas;

use Carbon\Carbon;
use Closure;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Text;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Basic Information')
                    ->columnSpanFull()
                    ->schema([
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


                        Grid::make(2)
                            ->schema([
                                DateTimePicker::make('start_datetime')
                                    ->required()
                                    ->maxDate(fn($get) => $get('end_datetime')),

                                DateTimePicker::make('end_datetime')
                                    ->required()
                                    ->minDate(fn($get) => $get('start_datetime')),
                            ]),

                        Grid::make(2)
                            ->schema([

                                TextInput::make('venue'),

                                TextInput::make('city'),

                                Toggle::make('is_online'),

                                TextInput::make('meeting_url')
                                    ->url(),
                            ]),

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

                        auth()->user()?->role == 'organizer'
                            ? Hidden::make('organizer_id')
                            ->default(Auth::user()->id)
                            : Select::make('organizer_id')
                            ->relationship('organizer', 'name')
                            ->required()
                            ->searchable(),


                        Section::make('Who to speak')
                            ->schema([
                                Repeater::make('eventspeaker')
                                    ->label('Event Speaker')
                                    ->relationship()
                                    ->schema([
                                        Select::make('user_id')
                                            ->label('Speaker')
                                            ->relationship('speaker', 'name')
                                            ->required()
                                            ->searchable(),

                                        TextInput::make('about_topic')
                                            ->label('Speak about')
                                            ->placeholder('Speaker speak about a topic')
                                            ->required(),


                                        TimePicker::make('start_time')
                                            ->label('Start Time')
                                            ->required()
                                            ->seconds(false)
                                            ->displayFormat('h:i A') // input format
                                            ->native(false)        // 👈 force Flatpickr instead of browser picker
                                            ->format('H:i')        // save format
                                            ->extraAttributes([
                                                'data-flatpickr' => json_encode([
                                                    'enableTime' => true,
                                                    'noCalendar' => true,
                                                    'time_24hr' => true,
                                                ]),
                                            ])

                                        // TimePicker::make('close_time')
                                        //     ->label('To')
                                        //     ->native(false)
                                        //     ->displayFormat('h:i A') // input format
                                        //     ->format('H:i')
                                        //     ->seconds(false)
                                        //     ->reactive()->required(fn(Get $get): bool => filled($get('open_time')))
                                        //     ->rules([
                                        //         function (Get $get): Closure {
                                        //             return function (string $attribute, $value, Closure $fail) use ($get) {
                                        //                 $open = $get('open_time');

                                        //                 // required-if: open_time present but close_time empty
                                        //                 if (filled($open) && blank($value)) {
                                        //                     $fail('Close time is required when a From time is selected.');
                                        //                     return;
                                        //                 }

                                        //                 // ordering check: close_time must be later than open_time
                                        //                 if (filled($open) && filled($value)) {
                                        //                     try {
                                        //                         $openDt  = Carbon::parse($open);
                                        //                         $closeDt = Carbon::parse($value);

                                        //                         if ($closeDt->lte($openDt)) {
                                        //                             $fail('Close time must be later than From time.');
                                        //                         }
                                        //                     } catch (\Throwable $e) {

                                        //                         $fail('Invalid time format.');
                                        //                     }
                                        //                 }
                                        //             };
                                        //         },
                                        //     ])
                                        //     ->visible(fn($get) => $get('is_open')),
                                    ])
                                    ->columns(3)
                                    ->reorderable(false)
                                    ->collapsible(false),
                            ]),


                    ])
            ]);
    }
}
