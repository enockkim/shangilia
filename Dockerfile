# Use the official PHP image with Nginx
FROM php:8.0-fpm

# Install Nginx
RUN apt-get update && apt-get install -y nginx

# Install any additional PHP extensions you need
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your Nginx configuration file
COPY nginx.conf /etc/nginx/nginx.conf

# Copy the PHP source code to the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Start Nginx and PHP-FPM
CMD service nginx start && php-fpm
