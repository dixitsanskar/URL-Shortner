# URL Shortener - Laravel 11

Welcome to the URL Shortener project! This project is built using Laravel 11, providing a simple and efficient way to shorten URLs.

## Features

- Shorten long URLs to make them easier to share.
- RESTful API for URL shortening and management.

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL or another supported database
- Node.js and npm (for frontend assets)

## Installation

Follow these steps to install and set up the project:

### Step 1: Clone the Repository

```bash
git clone https://github.com/dixitsanskar/URL-Shortner.git
cd URL-Shortner
```

### Step 2: Install Dependencies

```bash
composer install
npm install
npm run build
```

### Step 3: Set Up Environment Configuration

Copy the `.env.example` file to create your own `.env` file:

```bash
cp .env.example .env
```

### Step 4: Generate Application Key

```bash
php artisan key:generate
```

### Step 5: Configure the .env File

Open the `.env` file and set your database credentials and other configuration details. Below is an example of the necessary configurations:

```env
APP_NAME=URL Shortener
APP_ENV=local
APP_KEY=base64:YOUR_GENERATED_KEY
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
```

### Step 6: Run Database Migrations

```bash
php artisan migrate
```

### Step 7: Start the Development Server

```bash
php artisan serve
```

Your application should now be running at `http://localhost:8000`.

## Usage

1. Visit the homepage of the application.
3. Use the provided form to shorten a long URL.
4. Manage your shortened URLs through the dashboard.


## Contributing

Feel free to contribute to the project by submitting pull requests or opening issues. Make sure to follow the contribution guidelines.


Thank you for using the URL Shortener project! If you encounter any issues, please open an issue on GitHub.