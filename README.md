<div align='center'>

# Devskill Task

</div>


## Technologies
- <b>Programming Language:</b> PHP 8.1
- <b>Framework:</b> Laravel 10
- <b>Database:</b> MySQL

## How to run this project

### 1. Clone the Project
```bash
git clone git@github.com:Irfan-Chowdhury/dev-skill-task.git
cd <repository_directory>
``` 

### 2. Install dependencies: 
```bash
composer install
```

### 3. Set up your `.env` file and configure the database:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Run migrations: 
```bash
php artisan migrate
```

### 5. Run the development server:
```bash
php artisan serve
```

### 6. Seeder 
```bash
php artisan db:seed
```


### 7. Access the application at 
```bash
http://localhost:8000
```


## Credentials 

- Username : admin
- Password : admin123
