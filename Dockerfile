FROM php:7.4-apache
# Sử dụng image có PHP và Apache
FROM yiisoftware/yii2-php:7.4-apache

# Thiết lập thư mục làm việc
WORKDIR /var/www/html

# Sao chép mã nguồn của ứng dụng Yii2 vào container
COPY . .

# Thiết lập rewrite cho Apache
RUN a2enmod rewrite

# Cài đặt PHPMyAdmin
RUN apt-get update && apt-get install -y phpmyadmin

# Tạo symbolic link cho PHPMyAdmin
RUN ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin

# Expose cổng 80 để truy cập Yii2 và PHPMyAdmin
EXPOSE 80