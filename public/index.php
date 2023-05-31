<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| Assim que tivermos o aplicativo, podemos lidar com a solicitação recebida usando
| o kernel HTTP do aplicativo. Em seguida, enviaremos a resposta de volta
| para o navegador deste cliente, permitindo-lhes desfrutar da nossa aplicação.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| O Composer fornece um carregador de classes conveniente e gerado automaticamente para
| esta aplicação. Nós só precisamos utilizá-lo! Vamos simplesmente exigi-lo
| no script aqui para que não precisemos carregar manualmente nossas classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Assim que tivermos o aplicativo, podemos lidar com a solicitação recebida usando
| o kernel HTTP do aplicativo. Em seguida, enviaremos a resposta de volta
| para o navegador deste cliente, permitindo-lhes desfrutar da nossa aplicação.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
