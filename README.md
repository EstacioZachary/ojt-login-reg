# TechCraft 🎮⚙️

TechCraft is a Laravel-based web application inspired by Laravel Bootcamp’s *Chirper* project.  
It serves as a platform where users can showcase games they’ve created by posting a title and description, while adopting proper authentication, authorization, and validation.

This project was developed as part of an **On-the-Job Training (OJT)** activity/requirement.

---

## ✨ Features

- Public landing page and feed (viewable by all users)
- User authentication (Register / Login / Logout)
- Proper session handling
- CRUD operations for game posts (“Crafts”)
- Authorization (users can only edit/delete their own posts)
- Input validation with proper error messages
- Basic UI **Tailwind CSS + DaisyUI**
- SQLite database (local setup)

---

## 🛠 Tech Stack

- **Backend:** Laravel
- **Frontend:** Blade, Tailwind CSS, DaisyUI
- **Database:** SQLite
- **Authentication:** Laravel Auth (custom, no Breeze)
- **Build Tool:** Vite
- **Version Control:** Git & GitHub

---

## 📋 Requirements

Make sure you have the following installed:

- PHP **8.2+**
- Composer
- Node.js **18+**
- npm
- Git

> ✅ On Ubuntu, PHP extensions are usually installed automatically  
> ✅ On Windows, Laravel Herd is recommended

---

## 🚀 Installation & Setup

### 1️⃣ Clone the repository

```bash
git clone https://github.com/your-username/techcraft.git
cd techcraft
```

---

### 2️⃣ Install PHP dependencies

```bash
composer install
```

---

### 3️⃣ Install Node dependencies

```bash
npm install
```

---

### 4️⃣ Environment configuration

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

---

### 5️⃣ Database setup (SQLite)

Create the SQLite database file:

```bash
touch database/database.sqlite
```

Ensure `.env` contains:

```env
DB_CONNECTION=sqlite
```

---

### 6️⃣ Run migrations

```bash
php artisan migrate
```

---

### 7️⃣ Run the application

#### Start the backend server
```bash
php artisan serve
```

#### Start the frontend build tool
```bash
npm run dev
```

Visit the app at:

```
http://127.0.0.1:8000
```
Or if current port is not responding, try:

```bash
php -S 127.0.0.1:9000 -t public
```
---

## 🔐 Authentication & Security Notes

- Sessions are properly invalidated on logout
- CSRF protection is enabled
- Protected routes are guarded using middleware
- Unauthorized users cannot:
  - Create posts
  - Edit/delete posts they do not own
  - Access protected actions after logout

---

## 📁 Project Structure (Key Parts)

```
app/
 ├── Http/Controllers
 │    ├── CraftController.php
 │    └── Auth/
 ├── Models/
 │    ├── User.php
 │    └── Craft.php
 ├── Policies/
 │    └── CraftPolicy.php

resources/
 ├── views/
 │    ├── home.blade.php
 │    ├── landing.blade.php
 │    ├── crafts/
 │    └── auth/
```

---

## 🧪 Tested On

- Windows 11
- Ubuntu 24.04.3 LTS
- PHP 8.2+
- Laravel 11

---

## 📌 Additional Notes

- `.env` is intentionally ignored in `.gitignore`
- Run `php artisan migrate:fresh` if database issues occur
- SQLite database file is local-only and not pushed to GitHub

---

## 👨‍💻 Author

Developed by **Zachary Andrae V. Estacio**  
For OJT / academic purposes

---

## 📄 License

This project is for educational purposes only.
