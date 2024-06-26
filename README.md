<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

![Login Page](imgs/login.png)
![Teacher dashBoard](imgs/2024-06-21-164123.png)
![Teacher Side-Bar](imgs/2024-06-21-164224.png)
![Import-students](imgs/2024-06-21-164631.png)
![Manage-subjectsl](imgs/2024-06-21-164412.png)

# Responsive Website for Managing Students and Teachers

## Project Overview
This project is a responsive website developed using the Laravel framework. It is designed to efficiently manage students and teachers in a synchronized manner, offering a user-friendly interface for administrative tasks.

## Technologies Used
- **Frontend:**
  - HTML
  - CSS & Bootstrap 5
  - JavaScript

- **Backend:**
  - Laravel 11

- **Database:**
  - SQL
  - MySQL

- **Development Environment:**
  - XAMPP
  - Vscode

## Key Features
1. **Responsive Design:**
   - Utilizes Bootstrap 5 for a mobile-friendly interface.
   - Ensures accessibility and ease of use across various devices.

2. **User Management:**
   - Teachers can manage student information and monitor performance.
   - Teachers can import multiple users using a CSV file.
   - Teachers can send notifications and specify a deadline for sending reports.
   - Students can access their profiles and academic information.
   - Students can evaluate their teachers anonymously.

3. **Authentication & Authorization:**
   - Secure login system with role-based access control.
   - Different access levels for teachers and students.

4. **Synchronization:**
   - Real-time data synchronization between the database and the user interface.
   - Ensures that updates made by one user are immediately reflected for all users.

5. **Database Management:**
   - Efficient data storage and retrieval using MySQL.
   - Supports complex queries and transactions for robust data management.

## Setup Instructions
1. **Install XAMPP:**
   - Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).
   - Start Apache and MySQL from the XAMPP control panel.

2. **Clone the Repository:**
   - Clone the project repository to your local machine:
     ```bash
     git clone https://github.com/massinNiss/TDIA-Service.git
     ```

3. **Configure the Environment:**
   - Copy `.env.example` to `.env` and configure your database settings:
     ```bash
     cp .env.example .env
     ```
   - Run `composer install` to install PHP dependencies.
   - Run `npm install` to install JavaScript dependencies.

5. **Database Migration:**
   - Run `php artisan migrate` to set up the database tables.
   - Run `php artisan db:seed` to seed the database with initial data.

6. **Other Important Stuff:**
   - Run `rm public/storage`
   - Run `php artisan storage:link`

7. **Serve the Application:**
   - Run `php artisan serve` to start the Laravel development server.
   - Access the website at `http://localhost:8000`.

## Usage

- **Teacher Portal:**
  - Connect using Credentials  [username:{teacher2@uae.ac.ma}; password: {password}]
  - Import/Create student profiles
  - Manage student records, assignments, and grades.

- **Student Portal:**
  - View personal academic information and progress.

## Future Enhancements
- **Enhanced Reporting:**
  - Advanced reporting tools for academic performance and attendance.

- **Notifications:**
  - Real-time notifications for assignments, grades, and announcements.

- **API Integration:**
  - RESTful API for third-party integrations and mobile applications.{Not completed yet}

- **Advanced Security:**
  - Implementation of data encryption and prevention of SQL injections.

This project aims to provide a comprehensive and efficient solution for managing educational institutions, enhancing both administrative efficiency and user experience.
\
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
