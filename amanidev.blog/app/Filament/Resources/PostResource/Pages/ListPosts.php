<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Filament\Resources\PostResource\Widgets\StatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

<<<<<<< HEAD
=======
    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class
        ];
    }

>>>>>>> 37b3945 (Atualizações de performance e do Readme)
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
<<<<<<< HEAD

    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }


=======
>>>>>>> 37b3945 (Atualizações de performance e do Readme)
}
