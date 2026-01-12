<?php

namespace App\Filament\Admin\Resources\VideosResource\Pages;

use App\Filament\Admin\Resources\VideosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVideos extends ListRecords
{
    protected static string $resource = VideosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
