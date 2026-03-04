# MyPHPAdmin - Login System

A basic PHP login system with MySQL database and Tailwind CSS styling.

## Features

- User authentication (login/logout)
- User registration
- Secure password hashing
- Session management
- Responsive design with Tailwind CSS
- Dashboard with user information

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx) or PHP built-in server

## Installation

1. **Create the Database**
   
   Import the `database.sql` file into your MySQL server:
   ```bash
   mysql -u root -p < database.sql
   ```
   
   Or manually create the database using phpMyAdmin or MySQL Workbench.

2. **Configure Database Connection**
   
   Edit `config.php` and update the database credentials if needed:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'myphpadmin');
   ```

3. **Run the Application**
   
   Using PHP built-in server:
   ```bash
   php -S localhost:8000
   ```
   
   Or place the files in your web server's document root (e.g., `htdocs` for XAMPP).

4. **Access the Application**
   
   Open your browser and navigate to:
   - `http://localhost:8000/login.php` (if using PHP built-in server)
   - `http://localhost/your-folder/login.php` (if using XAMPP/WAMP)

## Default Credentials

- **Username:** admin
- **Password:** admin123

## File Structure

```
.
├── config.php          # Database configuration
├── database.sql        # Database schema
├── login.php          # Login page
├── register.php       # Registration page
├── dashboard.php      # User dashboard
├── logout.php         # Logout handler
└── README.md          # This file
```

## Security Notes

1. Change the default admin password after first login
2. Use HTTPS in production
3. Keep PHP and MySQL updated
4. Consider adding CSRF protection for production use
5. Implement rate limiting for login attempts
6. Add input sanitization and validation

## Features to Add (Optional)

- [ ] Password reset functionality
- [ ] Email verification
- [ ] Remember me functionality
- [ ] Profile editing
- [ ] Role-based access control
- [ ] Activity logging
- [ ] Two-factor authentication

## Troubleshooting

**Can't connect to database:**
- Verify MySQL is running
- Check database credentials in `config.php`
- Ensure the database exists

**Login doesn't work:**
- Clear browser cookies/cache
- Check PHP session configuration
- Verify the users table has data

**Page not found:**
- Check file permissions
- Verify web server configuration
- Ensure PHP is properly installed

## License

This is a basic example for educational purposes. Feel free to modify and use as needed.
