# Sistema de Clasificación por Edad – Laravel 12

Este proyecto clasifica a los usuarios según su edad antes de registrarse o autenticarse, como parte de una experiencia informativa previa.

## Requisitos

- PHP >= 8.2
- Composer
- Laravel 12
- MySQL / SQLite

## Instalación

```bash
git clone https://github.com/VAlejandro22/Edades_SoftwareSeguro.git
cd Edades_SoftwareSeguro
composer install
cp .env.example .env
php artisan migrate
php artisan serve
