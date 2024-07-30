# Use the official Nginx image
FROM nginx:latest

# Copy the custom Nginx configuration file to the container
#COPY nginx.conf /etc/nginx/nginx.conf

# Copy the PHP source files to the Nginx HTML directory
COPY shangilia /var/www/html/shangilia

# Expose port 80 for Nginx
EXPOSE 80
