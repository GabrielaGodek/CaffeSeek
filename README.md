# Coffee Seek
Database-driven application with MySQL and Tailwind CSS styling, displaying a list of coffees with details. The system incorporates user authentication and registration functionalities, ensuring secure access and features data filtering by tags and searching by keyword.

## Installation
1. Copy this repo: `https://github.com/GabrielaGodek/CoffeeSeek`
2. Copy `.env.example` to your `.env` file
3. Install all dependencies `composer install`
4. Open terminal and type `php artisan db:seed`
5. Run application  `php artisan serve`
6. Type at your browser `http://127.0.0.1:8000/` 

## Technologies
- Vite: `^5.0.0`
- Laravel: `^10.10`
- MySQL: `8.3.0`
- Tailwind.css: `3.4.1`

## Security
###  Cross-Site Request Forgery
This middleware helps protect against unauthorized cross-site requests, enhancing the overall security of the application. Additionally, it is crucial to incorporate CSRF tokens into the application's forms, ensuring an additional layer of defense against potential threats. 

### Middleware
Auth, only authorize users can go to details about specific coffee, you need to register or log in with this demo credentials:
```php
Email: test@test.com
Password: 123456
```

## Preview
![Coffee Seek Preview](public/coffeeseek_preview.png)
