# Официальный образ PHP с Apache
FROM php:8.0-apache

# Копируем содержимое папки public в контейнер
COPY ./public/ /var/www/html/

# Устанавливаем права доступа
RUN chown -R www-data:www-data /var/www/html/

# Открываем порт 80 (по умолчанию для Apache)
EXPOSE 80
