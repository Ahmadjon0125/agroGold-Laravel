<?php

namespace App\Filament\Admin\Resources\VideosResource\Pages;

use App\Filament\Admin\Resources\VideosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVideos extends EditRecord
{
    protected static string $resource = VideosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
