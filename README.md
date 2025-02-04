BlogApp Manager with Laravel

BlogApp Manager with Laravel is a blog management application built using the Laravel framework. It allows users to create new posts, edit existing ones, and delete posts through a simple and user-friendly interface. The application also includes features like user authentication and other advanced functionalities.

Features

User authentication (login, register, logout)
Create, edit, and delete blog posts
View a list of blog posts
View a single blog post
Responsive design using Bootstrap
Form validation for creating and editing posts
Installation

To install and run this project locally, follow these steps:

Clone the repository:

git clone https://github.com/yourusername/BlogApp-Manager-with-Laravel.git
Navigate to the project directory:

cd BlogApp-Manager-with-Laravel
Install the required dependencies:

composer install
Create a .env file and set your database configurations. You can copy the .env.example file to create .env:

cp .env.example .env
Generate the application key:

php artisan key:generate
Run database migrations to create necessary tables:

php artisan migrate
Serve the application:

php artisan serve
Now, you can access the application at http://localhost:8000.

Usage

Login: After signing in, you will be directed to the dashboard.
Create Post: Click the "Create New Post" button to add a new blog post.
View Posts: You can view all posts and navigate to a single post page to see more details.
Edit/Delete Posts: You can edit or delete your posts from the dashboard.
Contributing

Feel free to fork the repository, make changes, and create pull requests if you want to contribute to the project!

License

This project is open-source and available under the MIT License.
