# Pondok Application

This is a web application built with the Laravel framework. It appears to be a content management system, potentially for an educational institution, featuring posts, pages, categories, tags, and academic information. It uses Filament for the admin panel and Livewire for interactive frontend components.

## About The Project

This project is a skeleton application for Laravel, extended with features for content management.

### Built With

*   [Laravel](https://laravel.com/)
*   [Filament](https://filamentphp.com/)
*   [Livewire](https://livewire.laravel.com/)
*   [Tailwind CSS](https://tailwindcss.com/)
*   [Vite](https://vitejs.dev/)

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

*   PHP >= 8.2
*   Composer
*   Node.js & npm
*   A database (SQLite is used by default)

### Installation

1.  **Clone the repository:**
    ```sh
    git clone https://github.com/your_username/pondok.git
    cd pondok
    ```

2.  **Install PHP dependencies:**
    ```sh
    composer install
    ```

3.  **Install NPM dependencies:**
    ```sh
    npm install
    ```

4.  **Create your environment file:**
    Copy the example `.env` file.
    ```sh
    cp .env.example .env
    ```

5.  **Generate an application key:**
    ```sh
    php artisan key:generate
    ```

6.  **Run database migrations:**
    The default configuration uses SQLite, which will be created automatically.
    ```sh
    php artisan migrate
    ```

7.  **Build frontend assets:**
    ```sh
    npm run build
    ```

## Configuration

The main configuration is done in the `.env` file. Here are the key variables:

*   `APP_NAME`: The name of your application.
*   `APP_URL`: The base URL of your application.
*   `DB_CONNECTION`: The database driver (default is `sqlite`).
*   `DB_DATABASE`: If not using SQLite, specify the database name.
*   `MAIL_...`: Configure your mail settings for sending emails.

After configuring, it's a good idea to cache your configuration for better performance:
```sh
php artisan config:cache
```

## Running the Application

You can run the development server using the `serve` artisan command:

```sh
php artisan serve
```

For a more complete development experience including Vite and the queue listener, you can use the `dev` script defined in `composer.json`:

```sh
composer run dev
```

This will concurrently run the PHP development server, the queue worker, and the Vite development server.

## Running Tests

To run the feature and unit tests, use the `test` artisan command or the composer script:

```sh
php artisan test
```
or
```sh
composer test
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
