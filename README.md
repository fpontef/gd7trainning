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

