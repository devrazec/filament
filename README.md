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

# Create Laravel Resource

- Migration and Factory
php artisan make:model User -mf
php artisan make:model LeadSource -mf
php artisan make:model LeadStatus -mf
php artisan make:model Lead -mf
php artisan make:model LeadNote -mf
php artisan make:model LeadEvent -mf



- Create Seeder
php artisan make:seeder UserSeeder
php artisan make:seeder LeadSourceSeeder
php artisan make:seeder LeadStatusSeeder
php artisan make:seeder LeadSeeder
php artisan make:seeder LeadNoteSeeder
php artisan make:seeder LeadActivtySeeder

- Create Table
php artisan make:migration create_lead_source_table
php artisan make:migration create_lead_status_table
php artisan make:migration create_lead_table
php artisan make:migration create_lead_note_table
php artisan make:migration create_lead_activity_table

- Database Schema
database/migrations/2025_06_12_161804_create_lead_table.php

- Define Fields and Relationships in the Model
app/Models/Lead.php

- Populate the table and define factory for the model
database/factories/LeadFactory.php




php artisan make:filament-resource Leads


php artisan migrate
php artisan migrate:fresh
php artisan migrate:fresh --seed
php artisan db:seed
php artisan db:seed --class=LeadEventSeeder


php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
composer dump-autoload