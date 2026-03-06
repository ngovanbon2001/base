set -e

echo ">> Starting Laravel setup..."

cp .env.example .env || true
composer install --no-interaction --prefer-dist --optimize-autoloader
php artisan key:generate
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan storage:link

echo ">> Laravel is ready!"

exec apache2-foreground

