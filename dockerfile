# Menggunakan image PHP official sebagai base image
FROM php:7.4-apache

# Menyalin file PHP ke dalam container
COPY index.php /var/www/html/

# Expose port 80
EXPOSE 80

