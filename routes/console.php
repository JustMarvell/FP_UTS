<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('Whenyah', function () {
    $this->comment('When Yah Is Everywhere');
})->purpose('This is whenyah');