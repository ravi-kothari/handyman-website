FROM php:8.2-apache

# Copy all files to the Apache document root
COPY . /var/www/html/

# Ensure the assets directory exists and is writable (for caching)
RUN mkdir -p /var/www/html/assets && chmod -R 777 /var/www/html/assets

# Expose port 80 (Apache default)
EXPOSE 80
