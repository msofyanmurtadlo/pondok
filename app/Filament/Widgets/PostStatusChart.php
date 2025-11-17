<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\ChartWidget;

class PostStatusChart extends ChartWidget
{
    protected ?string $heading = 'Post Status';

    protected ?string $description = 'Draft vs Published posts';
    protected int | string | array $columnSpan = 'full';

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        $draft = Post::where('status', 'draft')->count();
        $published = Post::where('status', 'published')->count();

        return [
            'labels' => [
                'Draft',
                'Published',
            ],
            'datasets' => [
                [
                    'label' => 'Posts',
                    'data' => [
                        $draft,
                        $published,
                    ],
                    'backgroundColor' => [
                        '#f59e0b',
                        '#10b981',
                    ],
                    'hoverOffset' => 4,
                ],
            ],
        ];
    }

    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                ],
            ],
        ];
    }
}
