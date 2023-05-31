<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name/Nome da Aplicação
    |--------------------------------------------------------------------------
    |
    | Esse valor é o nome do seu aplicativo. Este valor é usado quando o
    | framework precisa colocar o nome do aplicativo em uma notificação ou
    | qualquer outro local conforme exigido pelo aplicativo ou seus pacotes.
    |
    */

    'name' => env('APP_NAME', 'Painel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment/Ambiente da Aplicação
    |--------------------------------------------------------------------------
    |
    | Esse valor determina o "ambiente" em que seu aplicativo está
    | em execução. Isso pode determinar como você prefere configurar vários
    | serviços que o aplicativo utiliza. Defina isso em seu arquivo ".env".
    |
    */

    'env' => env('APP_ENV', 'development'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode/
    |--------------------------------------------------------------------------
    |
    | Quando seu aplicativo está no modo de depuração, mensagens de erro detalhadas com
    | rastreamentos de pilha serão mostrados em cada erro que ocorrer dentro do seu
    | aplicativo. Se desativado, uma página de erro genérica simples é exibida.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL/URL do aplicativo
    |--------------------------------------------------------------------------
    |
    | Este URL é usado pelo console para gerar URLs corretamente ao usar
    | a ferramenta de linha de comando Artisan. Você deve definir isso para a raiz de
    | seu aplicativo para que seja usado ao executar tarefas do Artisan.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone/Fuso horário do aplicativo
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar o fuso horário padrão para seu aplicativo, que
    | será usado pelas funções de data e hora do PHP. Nós tínhamos ido
    | à frente e defina isso para um padrão sensato para você fora da caixa.
    |
    */

    'timezone' => 'America/Sao_Paulo',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration/Configuração da localidade do aplicativo
    |--------------------------------------------------------------------------
    |
    | A localidade do aplicativo determina a localidade padrão que será usada
    | pelo prestador de serviços de tradução. Você é livre para definir este valor
    | para qualquer uma das localidades que serão suportadas pelo aplicativo.
    |
    */

    'locale' => 'pt_BR',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale/Localidade alternativa do aplicativo
    |--------------------------------------------------------------------------
    |
    | A localidade de fallback determina a localidade a ser usada quando a atual
    | não está disponível. Você pode alterar o valor para corresponder a qualquer um dos
    | as pastas de idiomas fornecidas por meio de seu aplicativo.
    |
    */

    'fallback_locale' => 'pt_BR',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale/localidade falsa
    |--------------------------------------------------------------------------
    |
    | Esta localidade será usada pela biblioteca Faker PHP ao gerar fake
    | dados para suas sementes de banco de dados. Por exemplo, isso será usado para obter
    | números de telefone localizados, informações de endereço e muito mais.
    |
    */

    'faker_locale' => 'pt_BR',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key/Chave de encriptação
    |--------------------------------------------------------------------------
    |
    | Esta chave é usada pelo serviço de criptografia Illuminate e deve ser definida
    | para uma string aleatória de 32 caracteres, caso contrário, essas strings criptografadas
    | não será seguro. Faça isso antes de implantar um aplicativo!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver/Driver do modo de manutenção
    |--------------------------------------------------------------------------
    |
    | Essas opções de configuração determinam o driver usado para determinar e
    | gerenciar o status do "modo de manutenção" do Laravel. O driver "cache" irá
    | permitem que o modo de manutenção seja controlado em várias máquinas.
    |
    | Drivers suportados: "arquivo", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers/Provedores de serviços carregados automaticamente
    |--------------------------------------------------------------------------
    |
    | Os provedores de serviços listados aqui serão carregados automaticamente no
    | solicite ao seu aplicativo. Sinta-se à vontade para adicionar seus próprios serviços a
    | esta matriz para conceder funcionalidade expandida para seus aplicativos.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\FortifyServiceProvider::class,
        App\Providers\JetstreamServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Class Aliases/Aliases de classe
    |--------------------------------------------------------------------------
    |
    | Esta matriz de aliases de classe será registrada quando este aplicativo
    | começou. No entanto, sinta-se à vontade para registrar quantos desejar,
    | os aliases são carregados "preguiçosamente" para não atrapalhar o desempenho.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];
