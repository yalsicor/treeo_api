# treeo api

Powered by [Laravel](https://github.com/laravel/laravel) and [apiato](https://github.com/apiato/apiato)

## Getting started

### System requirements
* GIT
* PHP >= 7.1.3
* PHP Extensions:
  * OpenSSL PHP Extension
  * PDO PHP Extension
  * Mbstring PHP Extension
  * Tokenizer PHP Extension
  * BCMath PHP Extension (required when the Hash ID feature is enabled)
  * Intl Extension (required when you use the Localization Container)
* Composer
* Node (required for the API Docs generator feature)
* Web Server (Nginx, Apache)
* Postgres Database Engine
* Cache Engine

### Project setup
* clone repository
```
git clone https://github.com/yalsicor/treeo_api
```
* install composer: 
```
composer install
```
* create .env file and change settings with your local database settings etc.
```
cp .env.example .env
```
* Generate random App_KEY
```
php artisan key:generate
```
* migrate the database
```
php artisan migrate
```
* seed the database
```
php artisan db:seed
```
* create OAuth access tokens
```
php artisan passport:install
```
* Documentation setup (optional): see [apiato docs](http://docs.apiato.io/getting-started/installation/#4-documentation-setup)
* Development Environment Setup: see [apiato docs](http://docs.apiato.io/getting-started/installation/#b-development-environment-setup)


## Related Applications

[Mobile App](https://github.com/b-lack/treeo_app)

[Admin Tool](https://github.com/fxhinze/treeo_admin)

## License

[Apache License Version 2.0](./LICENSE)
