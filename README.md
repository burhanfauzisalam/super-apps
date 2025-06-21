---
## ⚙️ Requirements

- PHP 8.2 or higher
- Composer
- MySQL or PostgreSQL
- Node.js & npm (for frontend assets)
- Laravel CLI
---

## 🛠️ Installation

1. **Clone Repository**

```bash
git clone link_of_this_repository
cd ./super-apps

composer install
cp .env.example .env
php artisan key:generate
```

2. **DB Configuration**

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

3. **Migration**

```bash
php artisan migrate
```
