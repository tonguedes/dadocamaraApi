#!/bin/sh

echo "⏳ Aguardando o MySQL (db:3306) estar disponível..."

while ! nc -z db 3306; do
  sleep 1
done

echo "✅ MySQL está pronto."

# Opcional: php artisan migrate --force

php-fpm
