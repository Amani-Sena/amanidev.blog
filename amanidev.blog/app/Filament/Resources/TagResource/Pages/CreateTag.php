<?php

namespace App\Filament\Resources\TagResource\Pages;

use App\Filament\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTag extends CreateRecord
{
    protected static string $resource = TagResource::class;
<<<<<<< HEAD

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
=======
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
}
