<?php

namespace App\Filament\Pages;

//use App\Domain\Setting\Models\SettingMedia;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\SettingsPage;
use Livewire\TemporaryUploadedFile;

abstract class BasaSetting extends SettingsPage
{
    protected function mutateFormDataBeforeSave(array $data): array
    {
        ray($data);

        return $data;
    }

    protected static function fileUploadField(string $field): FileUpload
    {
        return FileUpload::make($field)
            ->disk(
                'public'
//                config('media-library.disk_name')
            )
            ->saveUploadedFileUsing(function ($state) use ($field): string {
                /** @var TemporaryUploadedFile|null $uploadedFile */
                $uploadedFile = array_values($state)[0] ?? null;

                if ($uploadedFile === null) {
                    return '';
                }

//                $media = SettingMedia::firstOrCreate([
//                    'group' => self::$settings::group(),
//                    'name' => $field,
//                ]);
//
//                $media->addMedia($uploadedFile)
//                    ->toMediaCollection();
//
//                return $media->getFirstMediaUrl();

                ray($uploadedFile)->green();

                return '/sample/file.jpg';
            })
            ->image()
            ->preserveFilenames();
    }
}
