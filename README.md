Laratrust est un package qui vous permet d'ajouter des rôles et des autorisations dans votre application Laravel

Installation Laratrust
=> composer require santigarcor/laratrust
=> php artisan vendor:publish --tag="laratrust"
=> php artisan laratrust:setup
=> composer dump-autoload
=> php artisan migrate

Gérer les seeders
=> php artisan laratrust:seeder
=> php artisan vendor:publish --tag="laratrust-seeder"
=> composer dump-autoload
=> php artisan db:seed

Module Administration
=> php artisan make:controller Admin/DashboardController
=> php artisan make:controller Admin/CategoryController
=> php artisan make:controller Admin/SubCategoryController
=> php artisan make:controller Admin/ProductController
=> php artisan make:controller Admin/OrderController
