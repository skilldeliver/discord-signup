# Technologies

1. PHP >= 7.3 (http://php.net)
1. MySQL >= 5.6 (http://mysql.com)
1. Laravel >= 8.0 (http://laravel.com)
1. BCMath PHP Extension
1. Ctype PHP Extension
1. JSON PHP Extension
1. Mbstring PHP Extension
1. OpenSSL PHP Extension
1. PDO PHP Extension
1. Tokenizer PHP Extension
1. XML PHP Extension

# Installation

### Setup

1. `cp .env.example .env`
1. `composer install`
1. `php artisan key:generate`
1. `npm install`
1. Create an Application on Discord's Developer Portal (https://discord.com/developers/applications) and fill your `.env` file with its data.
    1. `DISCORD_REDIRECT_URI` example - `http://localhost/discord-signup/public/auth/discord/handle`
___

### For development environment

1. Don't forget to set __database__, and __Discord Developer data__ in `.env` file
1. Generate public and admin panel assets with `npm run dev`
	1. Or just generate only public or only admin panel assets - `npm run dev-front` (public) and `npm run dev-back` (admin panel)
	1. Or just watch them - `npm run watch-poll-front` (public) and `npm run watch-poll-back` (admin panel)
1. Run and seed all migrations - `php artisan migrate:fresh --seed`
	1. Or only run them with `php artisan migrate`
	1. Or only seed them with `php artisan db:seed` if you already migrated them (won't work if they are not migrated)
___

### For production environment

1. Don't forget to __set the environment__ with `APP_ENV=production` in `.env` file
1. Don't forget to __turn off debug mode__ with `APP_DEBUG=false` in `.env` file
1. Don't forget to set __database__, and __Discord Developer data__ in `.env` file
1. Generate public and admin panel assets with `npm run prod`
1. Run and seed all migrations - `php artisan migrate:fresh --seed`
	1. Or only run them with `php artisan migrate`
	1. Or only seed them with `php artisan db:seed` if you already migrated them (won't work if they are not migrated)
