<?php

namespace App\Filament\Admin\Resources\MapResource\Pages;

use App\Filament\Admin\Resources\MapResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMap extends EditRecord
{
    protected static string $resource = MapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
