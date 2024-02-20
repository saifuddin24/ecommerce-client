<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\ConsoleOutput;


/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

$outputBuffer = new ConsoleOutput();

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('se', function () use ($outputBuffer) {

    Artisan::call('serve', [
        '--port' => 8589,
        '--host' => env('APP_HOST', gethostbyname(trim(`hostname`)))
    ], $outputBuffer);

})->purpose('Running server on port=8586 host=' . env('APP_HOST', gethostbyname(trim(`hostname`))));

Artisan::command('se2', function () use ($outputBuffer) {

    $port_last = rand(00, 95);

    Artisan::call('serve', [
        '--port' => (int)('85' . $port_last),
        '--host' => gethostbyname(trim(`hostname`))
    ], $outputBuffer);

})->purpose('Running server on port=[random(8500-8595)], host=' . gethostbyname(trim(`hostname`)));
