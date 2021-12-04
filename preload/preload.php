<?php

use Illuminate\Filesystem\Cache;
use Illuminate\Http\Testing\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Log\LogManager;
use Illuminate\Support\Carbon;

(new Preloader())
    ->paths(__DIR__ . '../vendor/laravel')
    ->ignore(
        Cache::class,
        LogManager::class,
        File::class,
        UploadedFile::class,
        Carbon::class,
    )
    ->load();
