# Install Laravel 12

- composer create laravel/laravel:^12.0 .

# Setup .env

- Edit .env file

APP_ENV=local
#APP_ENV=production

APP_URL=http://localhost:8080/public
#APP_URL=https://laravel-142436171314.europe-west1.run.app:8080

DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite
#DB_DATABASE=/var/www/html/database/database.sqlite

# Setup SQLite

- php artisan migrate:fresh
- php artisan db:seed

# Install Filament

composer require filament/filament:"^3.3" -W
php artisan filament:install --panels
php artisan make:filament-user
php artisan filament:optimize

# Run Laravel Localhost

php artisan serve --port=8080
php artisan serve --host=0.0.0.0 --port=8080
http://127.0.0.1:8080