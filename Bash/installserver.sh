#!/bin/bash

# This script cleans the machine. So I can configure a Yii 2 project

# Stop and disable Apache service
sudo systemctl stop httpd.service
sudo systemctl disable httpd.service

# Stop and disable MySQL service
sudo systemctl stop mysqld.service
sudo systemctl disable mysqld.service

# Stop and disable MariaDB service
sudo systemctl stop mariadb.service
sudo systemctl disable mariadb.service

# Stop and disable PostgreSQL service
sudo systemctl stop postgresql.service
sudo systemctl disable postgresql.service

# Stop and disable PHP-FPM service
sudo systemctl stop php-fpm.service
sudo systemctl disable php-fpm.service

# Stop and disable phpMyAdmin service
sudo systemctl stop phpmyadmin.service
sudo systemctl disable phpmyadmin.service

# Uninstall Apache
yes | sudo pacman -Rns apache

# Uninstall MySQL
yes | sudo pacman -Rns mysql

# Uninstall MariaDB
yes | sudo pacman -Rns mariadb

# Uninstall PostgreSQL
yes | sudo pacman -Rns postgresql

# Uninstall PHP
yes | sudo pacman -Rns php

# Uninstall Composer
yes | sudo pacman -Rns composer

# Uninstall phpMyAdmin
yes | sudo pacman -Rns phpmyadmin

# Remove Apache configuration files
sudo rm -rf /etc/httpd/

# Remove MySQL configuration files
sudo rm -rf /etc/mysql/

# Remove MariaDB configuration files
sudo rm -rf /etc/mariadb/

# Remove PostgreSQL configuration files
sudo rm -rf /var/lib/postgres/

# Remove PHP configuration files
sudo rm -rf /etc/php/

# Remove phpMyAdmin configuration files
sudo rm -rf /etc/webapps/phpmyadmin/

# Remove any remaining configuration files
sudo rm -rf /etc/my.cnf
sudo rm -rf /etc/php.ini
sudo rm -rf /usr/lib/systemd/system/mysqld.service
sudo rm -rf /usr/lib/systemd/system/mariadb.service
sudo rm -rf /usr/lib/systemd/system/postgresql.service
sudo rm -rf /usr/lib/systemd/system/php-fpm.service
sudo rm -rf /usr/lib/systemd/system/phpmyadmin.service
sudo rm -rf /usr/share/webapps/phpMyAdmin/

# Clean up any remaining packages
yes | sudo pacman -Rns $(pacman -Qdtq)

echo "Server configuration has been completely removed."

