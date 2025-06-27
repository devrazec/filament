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

- php artisan migrate:fresh --seed

or

- php artisan migrate:fresh
- php artisan db:seed

or

- php artisan db:seed --class=LeadEventSeeder

or

php artisan migrate:rollback --path=database/migrations/2025_06_12_185508_create_lead_sources_table.php
php artisan db:seed --class=LeadSourceSeeder

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

- Create Migration and Factory
php artisan make:model User -mf
php artisan make:model LeadSource -mf
php artisan make:model LeadStatus -mf
php artisan make:model Lead -mf
php artisan make:model LeadNote -mf
php artisan make:model LeadEvent -mf

- Create Factory
php artisan make:factory RoleFactory

- Create Seeder
php artisan make:seeder UserSeeder
php artisan make:seeder LeadSourceSeeder
php artisan make:seeder LeadStatusSeeder
php artisan make:seeder LeadSeeder
php artisan make:seeder LeadNoteSeeder
php artisan make:seeder LeadActivtySeeder

php artisan make:seeder RoleSeeder

- Create Table
php artisan make:migration create_lead_source_table
php artisan make:migration create_lead_status_table
php artisan make:migration create_lead_table
php artisan make:migration create_lead_note_table
php artisan make:migration create_lead_activity_table

- Database Schema
database/migrations/

- Define Fields and Relationships in the Model
app/Models/

- Populate the table and define factory for the model
database/factories/

# Create Resource

php artisan make:filament-resource User
php artisan make:filament-resource LeadSource
php artisan make:filament-resource LeadStatus
php artisan make:filament-resource Lead
php artisan make:filament-resource LeadNote
php artisan make:filament-resource LeadEvent

php artisan make:filament-resource Customer --view
php artisan make:filament-resource Customer --soft-deletes

php artisan make:filament-resource LeadSource --generate --soft-deletes --view
php artisan make:filament-resource User --generate --soft-deletes --view
php artisan make:filament-resource LeadEvent --generate --soft-deletes --view
php artisan make:filament-resource LeadNote --generate --soft-deletes --view
php artisan make:filament-resource LeadStatus --generate --soft-deletes --view
php artisan make:filament-resource Lead --generate --soft-deletes --view





php artisan optimize:clear
php artisan filament:cache

# Clean Cache

php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
composer dump-autoload

# Install Permission Package

composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
hp artisan optimize:clear
php artisan filament:cache
php artisan migrate

use Spatie\Permission\Traits\HasRoles;
HasRoles


php artisan make:seeder RoleAndPermissionSeeder
php artisan db:seed --class=RoleAndPermissionSeeder

composer require bezhansalleh/filament-shield
php artisan vendor:publish --tag="filament-shield-config"
php artisan shield:setup


# Enable API
php artisan install:api

# Create Controller

php artisan make:controller LeadSourceController --resource --api --model=LeadSource

# Create Route

Route::apiResource('categories', CategoryController::class);

# Icons

https://heroicons.dev/?strictJsx=true&exportComponent=true