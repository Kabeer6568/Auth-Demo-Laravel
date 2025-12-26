# Auth Demo (Laravel)

A simple authentication system built using Laravel from scratch. This project demonstrates user registration and login functionality with custom authentication implementation.

---

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Project Overview](#project-overview)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Authentication Flow](#authentication-flow)
- [Contributing](#contributing)
- [License](#license)

---

## Features

### User Authentication
- **User Registration**
  - Custom signup form
  - Password encryption
  - Form validation
  - Automatic login after registration

- **User Login**
  - Secure login system
  - Session management
  - Remember me functionality
  - Error handling for invalid credentials

- **Session Management**
  - Secure session handling
  - User logout functionality
  - Protected routes

---

## Technologies Used

- **Framework:** Laravel
- **Backend:** PHP
- **Database:** MySQL
- **Template Engine:** Blade Templates
- **Frontend:** HTML, CSS, Bootstrap
- **Security:** Laravel's built-in encryption and hashing

---

## Project Overview

This authentication demo showcases a fully functional user authentication system built from scratch without using Laravel's built-in authentication scaffolding. The project demonstrates:

1. **Custom Authentication Implementation**
   - Manual user registration with validation
   - Secure password hashing
   - Session-based authentication
   - Custom login logic

2. **User Registration Flow**
   - User fills out registration form
   - Data validation on server-side
   - Password encryption using bcrypt
   - Store user credentials in database
   - Automatic login after successful registration

3. **User Login Flow**
   - User enters credentials
   - Validation of input data
   - Authentication against database
   - Session creation on successful login
   - Redirect to dashboard/home page

4. **Security Features**
   - Password hashing
   - CSRF protection
   - Input sanitization
   - SQL injection prevention
   - Session security

---

## Installation

Follow these steps to set up the project locally:

### 1. Clone the Repository

```bash
git clone https://github.com/Kabeer6568/Auth-Demo-Laravel.git
```

### 2. Navigate to Project Directory

```bash
cd Auth-Demo-Laravel
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Create Environment File

**Linux/Mac:**
```bash
cp .env.example .env
```

**Windows:**
```bash
copy .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Configure Database

Open the `.env` file and configure your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 7. Run Migrations

```bash
php artisan migrate
```

### 8. Start Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

---

## Usage

### Registration Process

1. Navigate to `http://localhost:8000/register`
2. Fill in the registration form with:
   - Name
   - Email address
   - Password
   - Password confirmation
3. Click "Register"
4. You'll be automatically logged in and redirected to the home page

### Login Process

1. Navigate to `http://localhost:8000/login`
2. Enter your credentials:
   - Email address
   - Password
3. (Optional) Check "Remember Me" to stay logged in
4. Click "Login"
5. Upon successful authentication, you'll be redirected to the dashboard

### Logout

1. Click the "Logout" button in the navigation
2. Your session will be terminated
3. You'll be redirected to the login page

---

## Project Structure

```
Auth-Demo-Laravel/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php
│   │   │   └── HomeController.php
│   │   └── Middleware/
│   └── Models/
│       └── User.php
├── database/
│   └── migrations/
│       └── create_users_table.php
├── resources/
│   └── views/
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       ├── layouts/
│       │   └── app.blade.php
│       └── home.blade.php
├── routes/
│   └── web.php
├── .env.example
├── composer.json
└── README.md
```

---

## Authentication Flow

### Registration Flow Diagram

```
User Submits Form → Validate Input → Hash Password → Save to Database → Create Session → Redirect to Home
```

### Login Flow Diagram

```
User Submits Credentials → Validate Input → Check Database → Verify Password → Create Session → Redirect to Dashboard
```

### Key Components

**1. Controllers**
- `AuthController.php` - Handles registration and login logic
- `HomeController.php` - Manages authenticated user pages

**2. Middleware**
- Authentication middleware to protect routes
- Redirect middleware for authenticated users

**3. Routes**
- Guest routes (login, register)
- Protected routes (dashboard, home)

**4. Models**
- User model with password hashing

---

## Routes

| Method | URI | Action | Description |
|--------|-----|--------|-------------|
| GET | `/register` | Show registration form | Display signup page |
| POST | `/register` | Process registration | Handle user registration |
| GET | `/login` | Show login form | Display login page |
| POST | `/login` | Process login | Authenticate user |
| POST | `/logout` | Logout user | Terminate session |
| GET | `/home` | Show home page | Protected route for authenticated users |

---

## Security Features

- **Password Hashing:** All passwords are hashed using bcrypt
- **CSRF Protection:** All forms include CSRF tokens
- **Input Validation:** Server-side validation for all user inputs
- **SQL Injection Prevention:** Using Laravel's Eloquent ORM
- **Session Security:** Secure session configuration
- **XSS Protection:** Blade template engine auto-escapes output

---

## Database Schema

### Users Table

| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| name | varchar(255) | User's full name |
| email | varchar(255) | Unique email address |
| password | varchar(255) | Hashed password |
| remember_token | varchar(100) | Remember me token |
| created_at | timestamp | Registration timestamp |
| updated_at | timestamp | Last update timestamp |

---

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -m 'Add authentication feature'`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Open a Pull Request

---

## Future Enhancements

- Email verification
- Password reset functionality
- Two-factor authentication
- Social media login (OAuth)
- Profile management
- Role-based access control

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Support

For issues, questions, or suggestions, please open an issue on the [GitHub repository](https://github.com/Kabeer6568/Auth-Demo-Laravel/issues).

---

## Author

**Kabeer**  
GitHub: [@Kabeer6568](https://github.com/Kabeer6568)

---

## Acknowledgments

- Laravel Framework for providing excellent documentation
- Bootstrap for UI components
- The Laravel community for support and resources

---

## Learning Resources

If you're learning Laravel authentication, here are some helpful resources:

- [Laravel Official Documentation](https://laravel.com/docs)
- [Laravel Authentication Guide](https://laravel.com/docs/authentication)
- [PHP Security Best Practices](https://www.php.net/manual/en/security.php)

---

**Happy Coding! 🔐**
