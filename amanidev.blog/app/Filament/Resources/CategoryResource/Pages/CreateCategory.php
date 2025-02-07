<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
<<<<<<< HEAD

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
=======
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
}
