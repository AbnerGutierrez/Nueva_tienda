# Starter kit Laravel 13 + Blade

Proyecto MVC tradicional con autenticación mediante sesiones, controladores de Laravel y vistas Blade. Incluye registro, inicio y cierre de sesión, recuperación de contraseña y un panel protegido.

## Requisitos

- PHP 8.3 o superior (se probó con PHP 8.5) con PDO SQLite, mbstring, OpenSSL y fileinfo.
- Composer.

## Iniciar

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
New-Item database/database.sqlite -ItemType File -Force
php artisan migrate
php artisan serve
```

Abre `http://127.0.0.1:8000`. En esta copia del proyecto ya se generó `.env`, la clave de aplicación y la base SQLite; puedes iniciar directamente con `php artisan serve`.

En este equipo, abre una terminal nueva de PowerShell 7 y comprueba `php -v`: el perfil del usuario selecciona PHP 8.5.12 para la línea de comandos. El módulo PHP incluido en Apache de XAMPP sigue siendo 8.2; para este proyecto usa `php artisan serve`.

## Estructura

- `routes/web.php`: rutas públicas, de invitados y protegidas.
- `app/Http/Controllers/Auth`: controladores de autenticación.
- `app/Http/Controllers/DashboardController.php`: panel privado.
- `resources/views`: plantillas Blade y diseño compartido.
- `app/Models/User.php`: modelo de usuario.

El correo de recuperación se escribe en `storage/logs/laravel.log` porque `MAIL_MAILER=log` está configurado para desarrollo. Configura un servidor SMTP en `.env` para enviar correos reales.

Ejecuta las pruebas con `php artisan test`.
