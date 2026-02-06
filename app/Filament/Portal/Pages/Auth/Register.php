<?php

namespace App\Filament\Portal\Pages\Auth;

use Filament\Pages\Page;

use Filament\Auth\Pages\Register as BaseRegister;
use Filament\Forms\Form;
use Filament\Forms\Components\Radio;
use Filament\Schemas\Schema;

class Register extends BaseRegister
{

    public function mount(): void
    {
        // dd('Custom register loaded');
    }

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            Radio::make('role')
                ->options([
                    'organizer' => 'Organizer',
                    'speaker' => 'Speaker',
                ])
                ->required()
                ->inline(),

            $this->getNameFormComponent(),
            $this->getEmailFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),
        ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Never allow admin role
        if (! in_array($data['role'], ['organizer', 'speaker'])) {
            $data['role'] = 'organizer';
        }

        return $data;
    }
}
