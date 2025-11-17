<?php

namespace App\Filament\Widgets;

use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CountOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', fn () => User::count())
                ->label('Total Users'),
            Stat::make('Total Posts', fn () => Post::count())
                ->label('Total Posts'),
            Stat::make('Total Categories', fn () => Category::count())
                ->label('Total Categories'),
            Stat::make('Total Pages', fn () => Page::count())
                ->label('Total Pages'),
        ];
    }
}
