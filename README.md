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
### Docker setup
1. `cp src/.env.example src/.env`
1. Fill the `.env` file
    1. Password for the db `DB_PASSWORD`
    1. Create an Application on Discord's Developer Portal (https://discord.com/developers/applications) and fill your `.env` file with its data.`DISCORD_REDIRECT_URI` example - `http://localhost/discord-signup/public/auth/discord/handle`
1. `docker-compose --env-file src/.env up -d --build site`
1. `cd src`
1. Follow the installation steps in ###Setup using these docker commands:
    composer - `docker-compose run --rm composer`
    php aritsan -`docker-compose run --rm artisan`
    npm - `docker-compose run --rm npm`

#### Caveats
For windows users WSL2 has some issues with mounted volumes.
Make sure that your Docker files have the correct owner.
`docker-compose exec php chown -R laravel:laravel .`

### Setup
1. `cd src`
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
1. Run all migrations - `php artisan migrate:fresh`
