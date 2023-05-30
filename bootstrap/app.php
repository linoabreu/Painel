<?php

/*
|--------------------------------------------------------------------------
| Create The Application/Criar o aplicativo

|--------------------------------------------------------------------------
|
| A primeira coisa que faremos é criar uma nova instância do aplicativo Laravel
| que serve como "cola" para todos os componentes do Laravel, e é
| o contêiner IoC para o sistema vinculando todas as várias partes.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces/Ligar Interfaces Importantes
|--------------------------------------------------------------------------
|
| Em seguida, precisamos vincular algumas interfaces importantes ao contêiner para
| poderemos resolvê-los quando necessário. Os kernels servem
| solicitações recebidas para este aplicativo da Web e da CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application/Devolva o aplicativo
|--------------------------------------------------------------------------
|
| Este script retorna a instância do aplicativo. A instância é dada a
| o script de chamada para separarmos a construção das instâncias
| da execução real do aplicativo e envio de respostas.
|
*/

return $app;
