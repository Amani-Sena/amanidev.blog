<?php

namespace App\Filament\Resources\TagResource\Pages;

<<<<<<< HEAD
=======
use App\Filament\Resources\PostResource\Widgets\StatsOverview;
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
use App\Filament\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTags extends ListRecords
{
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
