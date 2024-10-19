# Student Management System

## Overview

The Student Management System is a web application built using the Laravel framework. It provides an intuitive interface for managing students, courses, and enrollments in a school or educational institution. This project allows administrators to perform CRUD operations on students and courses and manage enrollments efficiently.

## Features

- User-friendly dashboard with links to key sections: Students, Enrollment, and Courses.
- Full CRUD functionality for managing students and courses.
- Many-to-many relationship management through an enrollment pivot table.
- Responsive design using Bootstrap for a seamless user experience.
- Form validation to ensure data integrity and error handling.
- Enhanced visual appearance with Font Awesome icons.

## Project Structure

1. Project Initialization
   - Set up a new Laravel project for the Student Management System.

2. Routing and Views
   - Defined routes for the main dashboard and resource routes for students, courses, and enrollments.
   - Created blade templates for layout and specific pages.

3. Database Setup
   - Designed the database with three main tables:
     - Students: Stores student details.
     - Courses: Stores course details.
     - Enrollment: Tracks relationships between students and courses.

4. Models and Relationships
   - Created models for Student, Course, and the Enrollment pivot table.
   - Defined relationships:
     - Students have many courses through enrollment.
     - Courses have many students through enrollment.

5. Controllers
   - Set up resource controllers for handling CRUD operations:
     - StudentController: Manages student records.
     - CourseController: Manages course records.
     - StudentsCoursesController: Manages student enrollments.

6. Frontend Design
   - Implemented responsive design using Bootstrap.
   - Enhanced navigation and interface with Font Awesome icons.

## Getting Started

### Prerequisites

- PHP (version 7.3 or higher)
- Composer
- Laravel (version 8.x or higher)
- A web server (Apache)
- A database server (MySQL)

### Installation

1. Clone the repository:
   git clone https://github.com/amira-alomar/StudentManagement
   cd student-management-system

2. Install the dependencies:
   composer install

3. Set up your .env file:
   - Copy the .env.example file to .env.
   - Configure your database settings in the .env file.

4. Run the migrations:
   php artisan migrate

5. Start the development server:
   php artisan serve

6. Access the application at http://localhost:8000.

## Usage

- Navigate to the dashboard to view options for managing students, courses, and enrollments.
- Use the provided forms to add, edit, and delete records.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue.



## Acknowledgments

- Laravel - The framework used for this project.
- Bootstrap - For responsive design.
- Font Awesome - For icons and visual enhancements.
