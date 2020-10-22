<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## How to install app?

To install app run following commands:

- git clone https://github.com/sanzharanarbay/chocotest.git.
- cp .env.example  .env.
- Open .env and configure DB settings.
- composer install.
- php artisan key:generate.
- php artisan migrate.
- php artisan db:seed.
- php artisan optimize(optionally).
- php artisan serve.

## Users Admin,Moderator and User

Admin:
 - login - admin@gmail.com.
 - password - admin123.

Moderator:
 - login - moderator@gmail.com.
 - password - moderator123.

User:
 - login - user@gmail.com.
 - password - user123.

## API
- /api/register - Register (дополнительно)
- /api/login -   Login
- /api/categories - Получение списка всех категорий
- /api/category/products/{id} - Получение списка товаров в конкретной категории
- /api/products - Получение списка всех продуктов
- /api/products?color=Blue&weight=12&price=1000 - получение товара по фильтру
- /api/category/create - Добавление категории
 - /api/category/update/{id} -Редактирование категории
 - /api/category/delete/{id} - Удаление категории
 - /api/product/create - Добавление товара
 - /api/product/update/{id} - Редактирование товара
 - /api/product/delete/{id} - Удаление товара
 - /api/user - Получения информации авторизованного пользователя
 - /api/logout - Logout

## Информация

- Добавления доступно для (admin, moderator, user)
 - Редактирование доступно для (admin, moderator)
 - Удаление доступно для (admin)
 - Данный пункт отсутствует (Приложение должно быть завернуто в docker контейнер)
 - на  проекта ушло времени - 4.5 - 5 часов (много времени заняло docker, хотя все равно не получилось)   
