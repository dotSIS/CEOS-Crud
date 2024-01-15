# CEOS-Crud

## Overview

This project consists of a Vue.js frontend and a Laravel backend. Follow the steps below to clone, install, and run the servers locally.

## Prerequisites

- [Node.js](https://nodejs.org/) (v14 or later)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/) (v7.4 or later)
- [MySQL](https://www.mysql.com/) (or any other database of your choice)

## Clone the Repository

```bash
git clone https://github.com/dotSIS/CEOS-Crud.git
cd CEOS-Crud
```

## Frontend Setup

### 1. Navigate to the Frontend Folder

```bash
cd frontend
```

### 2. Install Dependencies

```bash
npm install
```

### 3. Run the Frontend Server

```bash
npm run serve
```

Vue.js frontend will be accessible at http://localhost:8080.

## Backend Setup

### 1. Navigate to the Backend Folder

```bash
cd ../backend
```

### 2. Install Laravel Dependencies

```bash
composer install
```

### 3. Create a Copy of the Environment File

```bash
cp .env.example .env
```

### 4. Configure Environment Variables

Open the .env file and set the database connection details.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud-app
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Database Migrations

```bash
php artisan migrate
```

### 7. Run the Backend Server

```bash
php artisan serve
```

Laravel backend will be accessible at http://localhost:8000.

## API endpoints

```bash
http://localhost:8000/api/students/create
http://localhost:8000/api/students/read
http://localhost:8000/api/students/update/{id}
http://localhost:8000/api/students/delete/{id}
```

## Access the Application

Visit http://localhost:8080 to access the Vue.js frontend, which communicates with the Laravel backend at http://localhost:8000.