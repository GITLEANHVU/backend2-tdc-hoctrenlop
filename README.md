# backend2-tdc-hoctrenlop

- Git, GitHub, packagist, seeder
- Migration, MVC, router, controller
- Model, view, middleware

# week 10, 30/5/2021/ le anh vu



## tuan 11
1. Create migrations 
  php artisan make:migration categories
  php artisan make:migration company_category
  php artisan make:migration companies
  php artisan make:migration trainers
  php artisan make:migration users
  php artisan make:migration diary
  php artisan make:migration weeks
  php artisan make:migration diarycontent
  php artisan make:migration type
  php artisan make:migration user_permission
  php artisan make:migration permission
  php artisan make:migration grouppermission
  php artisan make:migration group_permission
  php artisan make:migration class_user
  php artisan make:migration classes
  php artisan make:migration courses

  run: 
    php artisan migrate


2. Create seeders
  php artisan make:seeder CategoriesSeeder
  php artisan make:seeder company_categorySeeder
  php artisan make:seeder CompaniesSeeder
  php artisan make:seeder TrainersSeeder
  php artisan make:seeder UsersSeeder
  php artisan make:seeder DiarySeeder
  php artisan make:seeder WeeksSeeder
  php artisan make:seeder DiarycontentSeeder
  php artisan make:seeder TypeSeeder
  php artisan make:seeder User_permissionSeeder
  php artisan make:seeder PermissionSeeder
  php artisan make:seeder GrouppermissionSeeder
  php artisan make:seeder Group_permissionSeeder
  php artisan make:seeder Class_userSeeder
  php artisan make:seeder ClassesSeeder
  php artisan make:seeder CoursesSeeder

  run: php artisan db:seed --class=...Seeder
    php artisan db:seed --class=CategorySeeder
    php artisan db:seed --class=company_categorySeeder
    php artisan db:seed --class=CompanySeeder
    php artisan db:seed --class=TrainerSeeder
    php artisan db:seed --class=UsersSeeder
    php artisan db:seed --class=DiarySeeder
    php artisan db:seed --class=WeeksSeeder
    php artisan db:seed --class=DiarycontentSeeder
    php artisan db:seed --class=TypeSeeder
    php artisan db:seed --class=User_permissionSeeder
    php artisan db:seed --class=PermissionSeeder
    php artisan db:seed --class=GrouppermissionSeeder
    php artisan db:seed --class=Group_permissionSeeder
    php artisan db:seed --class=Class_userSeeder
    php artisan db:seed --class=ClassesSeeder
    php artisan db:seed --class=CoursesSeeder



3. Test SQL


-- week 12
- [ ] kernel.php -> Http
- [ ] app.php -> config
- [ ] security
