<?php

$app = new Consolle\Foundation\Application(realpath(__DIR__.'/../'));

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
*/

$app->singleton(
	'Consolle\Contracts\Kernel',
	'App\Application'
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
*/

return $app;
