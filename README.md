📌 Project Overview

This project is a personal portfolio website built using the Laravel framework with an integrated Content Management System (CMS). The CMS allows the administrator to easily manage portfolio content such as projects, skills, experiences, and contact information without directly modifying the code.

The system is designed to showcase professional work while providing a simple and user-friendly admin interface for content updates.

🛠️ Technologies Used
Laravel (PHP Framework)
PHP
MySQL / MariaDB
Blade Templating Engine
Bootstrap / Tailwind CSS
HTML, CSS, JavaScript

✨ Features
Public Portfolio
Home page with introduction
About Me section
Projects / Portfolio showcase
Skills and experience display
Contact information or contact form
Responsive design
Admin CMS
Secure admin login
Create, update, and delete portfolio projects
Manage skills, experiences, and personal details
Update content dynamically without code changes
Database-driven content management

👤 User Roles
Admin
Manages all portfolio content through the CMS
Visitor
Views the portfolio website

⚙️ Installation & Setup
Clone the repository:
git clone https://github.com/your-username/laravel-portfolio-cms.git

Navigate to the project directory:
cd laravel-portfolio-cms

Install dependencies:
composer install

Copy the environment file:
cp .env.example .env
Configure the database in the .env file.

Generate application key:
php artisan key:generate

Run migrations:
php artisan migrate

Start the development server:
php artisan serve

🗄️ Database Structure
Users (Admin authentication)
Projects
Skills
Experiences
Portfolio Settings / Profile Information

🎯 Purpose of the Project
The main purpose of this project is to:
Demonstrate Laravel development skills
Apply MVC architecture
Implement a functional CMS
Create a professional portfolio website suitable for academic or career use

📄 License
This project is for educational and personal portfolio purposes only.
