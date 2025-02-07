<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Posts', Post::all()->count()),
            Stat::make('Published', Post::where('is_published', true)->count()),
            Stat::make('Un Published', Post::where('is_published', false)->count()),
        ];
    }
}
