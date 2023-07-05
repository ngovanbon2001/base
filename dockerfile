FROM php:8.1.15-apache-buster

# Sao chép các tệp vào container
# COPY . /app

# Thiết lập thư mục làm việc mặc định
WORKDIR /var/www/
ADD ./000-default.conf /etc/apache2/sites-enabled/

# Cài đặt các gói phụ thuộc
RUN apt-get update && \
    apt-get install -y zip unzip && \
    apt-get install -y libzip-dev && \
    docker-php-ext-install zip

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1

# Set chown
RUN chown -R www-data:www-data /var/www

# RUN /startup.sh

CMD apache2-foreground