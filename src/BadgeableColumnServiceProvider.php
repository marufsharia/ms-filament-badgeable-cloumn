<?php

namespace MarufSharia\MSFilamentBadgeableColumn;

use Filament\Facades\Filament;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\HtmlString;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BadgeableColumnServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('ms-filament-badgeable-column')
            ->hasAssets()
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('ms-filament-badgeable-column', __DIR__ . '/../resources/dist/ms-badgeable-column.css')
        ], 'marufsharia/ms-filament-badgeable-column');
    }
}
