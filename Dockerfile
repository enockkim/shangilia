# Use the official PHP image as a base
FROM php:7.4-fpm

# Install necessary PHP extensions (if needed)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Copy the application code to the container
COPY . .

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
