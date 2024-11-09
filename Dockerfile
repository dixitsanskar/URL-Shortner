# Use richarvey/nginx-php-fpm image
FROM richarvey/nginx-php-fpm:3.1.6

# Copy application code
COPY . .

# Image configuration
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel configuration
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Install MongoDB PHP driver
RUN apk update && \
    apk add --no-cache autoconf g++ make && \
    pecl install mongodb && \
    docker-php-ext-enable mongodb && \
    apk del autoconf g++ make

# Add MongoDB extension to php.ini
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

# Expose port 80 for Nginx
EXPOSE 80

# Start the container
CMD ["/start.sh"]
