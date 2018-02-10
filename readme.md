# Ticketsystem - Sistema de criação de tickets com laravel 5.5 e com o template adminLTE.

## Instalação

1. Configure o arquivo `.env` com as configurações do ambiente local

2. Instalando as dependências via composer (na raiz do projeto)
```composer install```

3. Dentro do diretório da nova aplicação gere a nova key (na raiz do projeto)
```php artisan key:generate```

4. Crie a base de dados que foi configurada no `.env`

5. Rode as migrations
```php artisan migrate```

6. Gere os seeds para a aplicação (se necessário adicione mais seeds)
```php artisan db:seed```

7. Rode a aplicação
```php artisan serve```
