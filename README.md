# Blog System

This is a blog system built with Laravel.

## Requirements

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/your-username/blog-system.git
    cd blog-system
    ```

2. Install PHP dependencies:
    ```sh
    composer install
    ```

3. Install JavaScript dependencies:
    ```sh
    npm install
    ```

4. Copy the `.env.example` file to `.env`:
    ```sh
    cp .env.example .env
    ```

5. Generate an application key:
    ```sh
    php artisan key:generate
    ```

6. Configure your database settings in the `.env` file:
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

7. Run the database migrations:
    ```sh
    php artisan migrate
    ```

8. Start the development server:
    ```sh
    php artisan serve
    ```

9. Start Vite to compile your assets:
    ```sh
    npm run dev
    ```

## Usage

- Access the application in your browser at `http://localhost:8000`.

## Contributing

1. Fork the repository.
2. Create a new branch: `git checkout -b my-feature-branch`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin my-feature-branch`.
5. Submit a pull request.

## License

This project is licensed under the MIT License. See the LICENSE file for details.
