<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSettings extends Settings
{
    public ?string $logo = null;

    public static function group(): string
    {
        return 'site';
    }
}
