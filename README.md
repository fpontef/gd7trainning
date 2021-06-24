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

# Banco de Dados

## Usando Docker:

```console

```

# Regras do Laravel aplicadas:

- 'Movie' quando trata de entidade, fica no singular.

# Comandos úteis:

php artisan serve

php artisan migrate
php artisan make:factory MovieFactory
php artisan make:seeder MovieTableSeeder
php artisan make:model Movie
php artisan db:seed
php artisan tinker ....
(no tinker) \App\Models\Movie::all()

php artisan make:controller Api/MovieController
