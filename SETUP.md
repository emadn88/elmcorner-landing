# Quick Setup Guide

## Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL database

## Installation Steps

1. **Install PHP dependencies:**
   ```bash
   composer install
   ```

2. **Install Node dependencies:**
   ```bash
   npm install
   ```

3. **Copy environment file:**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Configure database in `.env`:**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=elmcorner
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

6. **Create database:**
   ```sql
   CREATE DATABASE elmcorner;
   ```

7. **Run migrations:**
   ```bash
   php artisan migrate
   ```

8. **Build assets for production:**
   ```bash
   npm run build
   ```

   Or for development with hot reload:
   ```bash
   npm run dev
   ```

9. **Start Laravel server:**
   ```bash
   php artisan serve
   ```

10. **Access the application:**
    - English: http://localhost:8000/en or http://localhost:8000
    - Arabic: http://localhost:8000/ar

## Development

For development with hot module replacement, run both:

```bash
# Terminal 1: Laravel server
php artisan serve

# Terminal 2: Vite dev server
npm run dev
```

## Features Implemented

✅ Modern, responsive landing page
✅ Multi-language support (English/Arabic)
✅ Hero section with animations
✅ Features section
✅ Courses section with images
✅ Testimonials carousel
✅ Enrollment form with validation
✅ Database storage for enrollments
✅ Islamic design elements and color scheme
✅ Smooth scroll animations
✅ Mobile-responsive navigation

## File Structure

- Images are located in `public/images/` (logo.png, 1.png, 2.png, 3.png)
- Views are in `resources/views/`
- Translations are in `resources/lang/en/` and `resources/lang/ar/`
- CSS/JS are in `resources/css/` and `resources/js/`

## Notes

- The enrollment form submits via AJAX
- All form submissions are stored in the `enrollments` table
- Language switching is handled via route prefixes (`/en` or `/ar`)
- RTL support is automatically applied for Arabic
