Installation Instructions.


1. Clone the project

2. Run "composer install" in project root

3. Make a copy of .env.example to .env 

4. Run command "php artisan key:generate"

5. Create a database in your localhost and set your database name, database user name and password (if any) in .env

6. Run "php artisan migrate:fresh --seed"

7. Run "php aritsan serve"

That's all.