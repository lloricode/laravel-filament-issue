<?php

namespace App\Filament\Pages;

use App\Settings\SiteSettings;

class ManageSite extends BasaSetting
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = SiteSettings::class;

    protected function getFormSchema(): array
    {
        return [
            self::fileUploadField('logo'),
        ];
    }
}
