# ElmCorner - Online Islamic Academy Landing Page

A modern, professional landing page for ElmCorner online academy teaching Quran, Islamic Studies, and Arabic languages.

## Features

- **Modern UI/UX**: Beautiful, responsive design with Islamic design elements
- **Multi-language Support**: English and Arabic with RTL support
- **Advanced Animations**: Smooth scroll animations, hover effects, and interactive elements
- **Enrollment System**: Complete enrollment form with validation and database storage
- **Islamic Design**: Custom color palette, geometric patterns, and Islamic backgrounds
- **Responsive**: Mobile-first design that works on all devices

## Tech Stack

- **Backend**: Laravel 10+ (MVC architecture)
- **Frontend**: Tailwind CSS 3+, Alpine.js 3+
- **Build Tool**: Vite
- **Database**: MySQL (configurable)

## Installation

1. **Install PHP dependencies:**
   ```bash
   composer install
   ```

2. **Install Node dependencies:**
   ```bash
   npm install
   ```

3. **Configure environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Update `.env` file with your database credentials:**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=elmcorner
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Run migrations:**
   ```bash
   php artisan migrate
   ```

6. **Build assets:**
   ```bash
   npm run build
   ```

7. **Start development server:**
   ```bash
   php artisan serve
   npm run dev
   ```

## Project Structure

```
website/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   └── EnrollmentController.php
│   ├── Http/Middleware/
│   │   └── SetLocale.php
│   └── Models/
│       └── Enrollment.php
├── database/
│   └── migrations/
│       └── create_enrollments_table.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   └── pages/
│   │       └── home.blade.php
│   ├── lang/
│   │   ├── en/
│   │   └── ar/
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── public/
│   └── images/
│       ├── logo.png
│       ├── 1.png
│       ├── 2.png
│       └── 3.png
└── routes/
    └── web.php
```

## Usage

### Access the Landing Page

- English: `http://localhost:8000/en` or `http://localhost:8000/`
- Arabic: `http://localhost:8000/ar`

### Enrollment Form

The enrollment form collects:
- Name, Email, Phone, Age, Country
- Course Interest (Quran, Islamic Studies, Arabic Language)
- Preferred Schedule (Morning, Afternoon, Evening, Flexible)
- Experience Level (Beginner, Intermediate, Advanced)

Submissions are stored in the `enrollments` table.

## Customization

### Colors

Edit `tailwind.config.js` to customize the Islamic color palette:
- `islamic-teal`: Teal shades
- `islamic-green`: Green shades
- `islamic-gold`: Gold/yellow shades
- `islamic-dark`: Dark teal shades

### Translations

Edit translation files in:
- `resources/lang/en/messages.php` (English)
- `resources/lang/ar/messages.php` (Arabic)

## License

MIT
