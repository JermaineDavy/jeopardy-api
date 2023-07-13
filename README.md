# Jeopardy API

## Requirements

- PHP 8.1 or higher.
- Composer 2.5 or higher.

## Getting started

Using the API is simple by following these steps:

1. Clone the repository.

2. `cd` into the cloned repo.

3. Change the name of the file `.env.example` to `.env`.

4. Edit the `.env` to use the credentials of a database that you have access to.

5. Run the following commands in order:
    - `composer install` -- Installs the required Laravel dependencies.
    - `php artisan migrate --seed` -- Creates the required database tables and seeds them with data. If prompted to created a new database, click `yes`.
    - `php artisan serve` -- This should start a local server which you could view in your browser but copying and pasting the URL of the commands output.

6. You're now done. The API documentation can be view by opening up the URL produced by the `php artisan serve` command.