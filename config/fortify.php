<?php

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Features;

return [

    /*
    |--------------------------------------------------------------------------
    | Fortify Guard/Fortificar guarda
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar qual proteção de autenticação o Fortify usará enquanto
    | autenticação de usuários. Este valor deve corresponder a um de seus
    | guards que já está presente em seu arquivo de configuração "auth".
    |
    */

    'guard' => 'web',

    /*
    |--------------------------------------------------------------------------
    | Fortify Password Broker
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar qual corretor de senhas o Fortify pode usar quando um usuário
    | está redefinindo sua senha. Este valor configurado deve corresponder a um
    | de seus corretores de senha configurados em seu arquivo de configuração "auth".
    |
    */

    'passwords' => 'users',

    /*
    |--------------------------------------------------------------------------
    | Username / Email
    |--------------------------------------------------------------------------
    |
    | Este valor define qual atributo de modelo deve ser considerado como seu
    | campo "nome de usuário" do aplicativo. Normalmente, este pode ser o e-mail
    | endereço dos usuários, mas você é livre para alterar este valor aqui.
    |
    | Fora da caixa, Fortify espera senha esquecida e senha redefinida
    | solicita um campo chamado 'email'. Se o aplicativo usar
    | outro nome para o campo você pode definir abaixo conforme necessário.
    |
    */

    'username' => 'email',

    'email' => 'email',

    /*
    |--------------------------------------------------------------------------
    | Home Path
    |--------------------------------------------------------------------------
    |
    | Aqui você pode configurar o caminho para onde os usuários serão redirecionados durante
    | autenticação ou redefinição de senha quando as operações são bem-sucedidas
    | e o usuário é autenticado. Você é livre para alterar este valor.
    |
    */

    'home' => RouteServiceProvider::HOME,

    /*
    |--------------------------------------------------------------------------
    | Fortify Routes Prefix / Subdomain
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar qual prefixo o Fortify atribuirá a todas as rotas
    | que ele registra com o aplicativo. Se necessário, você pode alterar
    | subdomínio sob o qual todas as rotas do Fortify estarão disponíveis.
    |
    */

    'prefix' => '',

    'domain' => null,

    /*
    |--------------------------------------------------------------------------
    | Fortify Routes Middleware
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar qual middleware o Fortify atribuirá às rotas
    | que ele registra com o aplicativo. Se necessário, você pode alterar
    | esses middleware, mas normalmente esse padrão fornecido é o preferido.
    |
    */

    'middleware' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | Rate Limiting
    |--------------------------------------------------------------------------
    |
    | Por padrão, o Fortify limitará os logins a cinco solicitações por minuto para
    | cada combinação de e-mail e endereço IP. No entanto, se você gostaria de
    | especificar um limitador de taxa personalizado para chamar, então você pode especificá-lo aqui.
    |
    */

    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],

    /*
    |--------------------------------------------------------------------------
    | Register View Routes
    |--------------------------------------------------------------------------
    |
    | Aqui você pode especificar se as rotas que retornam visualizações devem ser desativadas como
    | você pode não precisar deles ao criar seu próprio aplicativo. isso pode ser
    | especialmente verdadeiro se você estiver escrevendo um aplicativo personalizado de página única.
    |
    */

    'views' => true,

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Alguns dos recursos do Fortify são opcionais. Você pode desabilitar os recursos
    | removendo-os desta matriz. Você é livre para remover apenas alguns dos
    | esses recursos ou você pode até remover todos eles, se necessário.
    |
    */

    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        // Features::emailVerification(),
        Features::updateProfileInformation(),
        Features::updatePasswords(),
        Features::twoFactorAuthentication([
            'confirm' => true,
            'confirmPassword' => true,
            // 'window' => 0,
        ]),
    ],

];
