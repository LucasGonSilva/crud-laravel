## Requisitos

* PHP 8.2 ou superior
* Composer
* GIT

## Como rodar o projeto baixado

Instalar as dependências

```
composer install
```

Duplicar o arquivo ".env.example" e renomear para ".env"

Gerar a chave

```
php artisan key:generate
```

Iniciar o projeto criado com laravel

```
php artisan serve
```

Acessar o conteúdo padrão do Laravel

```
http://127.0.0.1:8000
```

## Sequência para criar o projeto

Criar o projeto com Laravel

```
composer create-project laravel/laravel laravel-my-project
```

Acessar o diretorio onde está o projeto

```
cd laravel-my-project
```

Iniciar o projeto criado com Laravel

```
php artisan server
```

Acessar o conteudo padrão do Laravel

```
http://127.0.0.1:8000
```

Criar Controller

```
php artisan make:controller NomeDaController
```

Criar a View

```
php artisan make:view nomeDaView
```

```
php artisan make:view accounts/index
```

```
php artisan make:view accounts/create
```

Criar Migrate (O comando cria tambem a base de dados)

```
php artisan migrate
```

Criar uma migration

```
php artisan make:migration create_accounts_table
```

Executar as migration

```
php artisan migrate
```

Criar a Model

```
php artisan make:model Account
```

Criar um Request com validações

```
php artisan make:request AccountRequest
```
