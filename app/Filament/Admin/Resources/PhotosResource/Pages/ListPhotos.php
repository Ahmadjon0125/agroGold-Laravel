<?php

namespace App\Filament\Admin\Resources\PhotosResource\Pages;

use App\Filament\Admin\Resources\PhotosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhotos extends ListRecords
{
    protected static string $resource = PhotosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
