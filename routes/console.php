<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('creator', function () {
    $this->info('HI.! This Project is Created By Jaber Masud.');
})->purpose('Creator Of Project');
