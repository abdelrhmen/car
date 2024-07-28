# Task Car Dashboard And website


### Installation


Clone the repository

    git clone https://github.com/AbdelrahmanEldesoky/task_car.git



Switch to the repo folder

    cd task_car

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Create a new Database and configure it at .env file

     CREATE DATABASE car ;

Generate a new application key

    php artisan key:generate
    

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate

**Make sure you set the connection between storage and public directory (run only once in project lifetime)**

    php artisan storage:link 


You can now access the server at http://localhost:8000

    php artisan serve


***Enjoy*** 
    
    
