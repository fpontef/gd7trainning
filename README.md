# Rotas:
## Web:
- http://127.0.0.1:8000/ -> redireciona -> http://127.0.0.1:8000/login
- http://127.0.0.1:8000/movie
- http://127.0.0.1:8000/addmovie

## Api:
* Considerar verbos HTTP: GET, POST, PUT, DELETE
- http://127.0.0.1:8000/api/movie
- http://127.0.0.1:8000/api/user

# Rodando o projeto:

```console
php artisan serve
```

## PHP.ini

extension=pdo_mysql

# Criando novas migrations e tabelas

```bash
php artisan make:migration create_table_users --create=users
```

# Regras do Laravel aplicadas:

- 'Movie' quando trata de entidade, fica no singular.

# Comandos úteis:
```console
php artisan serve

php artisan migrate
php artisan migrate:rollback

php artisan make:factory MovieFactory
php artisan make:seeder MovieTableSeeder
php artisan make:model Movie
php artisan db:seed
php artisan tinker ....
(no tinker) \App\Models\Movie::all()

// se fizer: --api, deixa mais limpo somente para api
// se fizer: --resource , adiciona campos para web, formulário etc.
php artisan make:controller MovieController --api

php artisan route:list
```
# JWT Token:
```
Exemplo: 123456.778899.001100
1) Token Header: Algoritmo usado para o hash, id único algumas vezes.

2) Token Payload (Content ou body): Fica entre o header e a assinatura, pode conter informações (dados: email, nome) que podemos adicionar no token, também consta a chave de expiração.

3) Token Sign: é a chave de segurança, a assinatura de confiabilidade, feita a partir do hash do header + hash do conteúdo + chave exclusiva para identificação.

Pacote: 
https://github.com/tymondesigns/jwt-auth

Usar a versão: dev-develop p/ laravel 8.4x e adiante
composer require tymon/jwt-auth:dev-develop

Instalação e Documentação:
https://jwt-auth.readthedocs.io/en/develop/laravel-installation/

Youtube dicas:
https://www.youtube.com/watch?v=Ri-DLFeepbM

https://dev.to/wenlopes/laravel-8-e-autenticacao-jwt-tymon-jwt-auth-com-model-customizada-2l7k

https://www.techiediaries.com/laravel-8-rest-api-authentication-jwt-tutorial-example/

https://medium.com/@ripoche.b/create-a-spa-with-role-based-authentication-with-laravel-and-vue-js-ac4b260b882f

BASE64 Token Creation
{
  "TYP": "JWT",
  "ALGO": "HS256",
  "JTI": "4F12323", // identificador único do JWT
  "EXP": 1234,      // Timestamp da expiração (em segudos)
  "IAT": 1234,      // Data que foi gerado
  "NBF": 1234,      // "not before" é um tempo futuro para o token ser ativado
  "USER_ID": 100
}

Outros: 
"sub": subject of the token (raramente usado)
"aud": audience of the token (também usado raramente)


```
From: https://medium.com/@ripoche.b/create-a-spa-with-role-based-authentication-with-laravel-and-vue-js-ac4b260b882f

```

composer require tymon/jwt-auth:dev-develop
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

# Gerar JWT SECRET que vai pro .env
php artisan jwt:secret


This will create ‘config/jwt.php’ file.
Then, create JWT secret key with this command:
php artisan jwt:secret

Then, in the ‘config/auth.php’ file, replace default guard by ‘api’:
'defaults' => [
    'guard' => 'api',
    'passwords' => 'users',
],

Then the driver of the API guard by ‘jwt’:
'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    'api' => [
        'driver' => 'jwt',
        'provider' => 'users',
    ],
],
```

# Fonte de pesquisa para uso do módulo JWT:
https://jwt-auth.readthedocs.io/en/develop/quick-start/
