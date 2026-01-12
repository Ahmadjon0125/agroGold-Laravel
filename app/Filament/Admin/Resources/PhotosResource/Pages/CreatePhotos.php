<?php

namespace App\Filament\Admin\Resources\PhotosResource\Pages;

use App\Filament\Admin\Resources\PhotosResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePhotos extends CreateRecord
{
    protected static string $resource = PhotosResource::class;
}
