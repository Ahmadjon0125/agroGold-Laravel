<?php

namespace App\Filament\Admin\Resources\PhotosResource\Pages;

use App\Filament\Admin\Resources\PhotosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhotos extends EditRecord
{
    protected static string $resource = PhotosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
