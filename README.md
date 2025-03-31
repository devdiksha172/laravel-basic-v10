# Laravel 10 Setup

This is a Laravel 10 project. Laravel is a web application framework with expressive, elegant syntax.

## Table of Contents

-   [Requirements](#requirements)
-   [Installation](#installation)
-   [Running the Application](#running-the-application)
-   [Testing the Application](#testing-the-application)

## Requirements

Before you begin, ensure you have met the following requirements:

-   PHP >= 8.1
-   Composer
-   A database (MySQL, PostgreSQL, SQLite, etc.)
-   Node.js and NPM (for frontend assets)

## Installation

1. **Clone the repository:**

    ```bash
    git clonehttps://github.com/devdiksha172/laravel-basic-v10.git
    cd laravel-basic-v10.git
    ```

2. **Install dependencies:**

    Make sure you have [Composer](https://getcomposer.org/) installed on your machine. Composer is a dependency manager for PHP that allows you to manage your project's libraries and packages.

    To install the PHP dependencies for this project, run the following command in your terminal:

    ```bash
    composer install
    ```

3. **Set up your environment file:**

    Copy the .env.example file to .env:

    ```bash
    cp .env.example .env
    ```

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Generate the application key:**
   Open the .env file and set your database connection details:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

6. **Run migrations:**
   If your project has migrations, run the following command to create the necessary tables

    ```bash
    php artisan migrate
    ```

7. **Install frontend dependencies (optional):**
   If your project uses frontend assets, install them using NPM:
    ```bash
    npm install
    ```
    Then, compile the assets:
    ```bash
    npm run dev
    ```
8. **Generate the storage link:**

    ```bash
    php artisan storage:link
    ```    

## Running the Application

You can run the application using the built-in PHP server:

```bash
php artisan serve
```

Visit http://localhost:8000 in your browser to see your application in action.

## Testing the Application

To run the tests for your application, use the following command:

```bash
php artisan test
```
