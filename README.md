# Sistema de Clasificación por Edad – Laravel 12

Este proyecto clasifica a los usuarios según su edad antes de registrarse o autenticarse, como parte de una experiencia informativa previa.

## Requisitos

- PHP >= 8.2
- Composer
- Laravel 12
- MySQL / SQLite

## Instalación

```bash
git clone https://github.com/TU_USUARIO/TU_REPO.git
cd TU_REPO
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
