# Laravel Learning Boilerplate

A comprehensive Laravel 11 boilerplate project designed for learning and referencing core back-end development concepts. This project includes authentication, CRUD operations, file uploads, notifications, and API endpoints.

## Features

### 🔐 Authentication & Authorization

-   User authentication with Laravel Breeze
-   Role-based access control (admin, user)
-   Protected admin routes

### 📦 CRUD Operations

-   Full CRUD functionality for Posts and Categories
-   Soft deletes implementation
-   Form validation and error handling

### 🔗 Eloquent Relationships

-   One-to-many (User → Posts)
-   Many-to-many (Post → Tags)
-   Category relationships

### 🔄 API Endpoints

-   RESTful API with Laravel Sanctum authentication
-   JSON resources
-   Protected routes with middleware

### 📁 File Uploads

-   User avatar upload functionality
-   Image validation and storage

### 🔄 Queues & Notifications

-   New post notifications
-   Admin notification system
-   Database and email channels

## Requirements

-   PHP 8.2+
-   Composer
-   Node.js & NPM
-   MySQL

## Installation

1. Clone the repository:

```bash
git clone <repository-url>
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install NPM dependencies:

```bash
npm install
```

4. Copy the environment file:

```bash
cp .env.example .env
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Configure your database in `.env`

7. Run migrations:

```bash
php artisan migrate
```

8. Build assets:

```bash
npm run build
```

9. Start the development server:

```bash
php artisan serve
```

## Testing

Run the test suite:

```bash
php artisan test
```