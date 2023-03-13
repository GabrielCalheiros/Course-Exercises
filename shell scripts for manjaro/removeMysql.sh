#!/bin/bash

# Stop and remove MariaDB
sudo systemctl stop mariadb.service
sudo pacman -R mariadb

# Stop and remove MySQL
sudo systemctl stop mysqld.service
sudo pacman -R mysql

# Remove MariaDB and MySQL data directories
sudo rm -rf /var/lib/mysql/
sudo rm -rf /etc/mysql/
sudo rm -rf /usr/lib/mysql/
sudo rm -rf /var/log/mysql/

# Remove any remaining MariaDB and MySQL config files
sudo rm -f /etc/my.cnf
sudo rm -f /etc/mysql.cnf
sudo rm -f /etc/mysql/my.cnf

# Remove any remaining MySQL/MariaDB user files
sudo rm -rf /root/.mysql_history
sudo rm -rf /root/.my.cnf
sudo rm -rf /var/lib/mysql-files/
sudo rm -rf /var/lib/mysql-keyring/
sudo rm -rf /var/lib/mysql-connector-java/
sudo rm -rf /var/lib/mysql-upgrade/
sudo rm -rf /var/lib/mysql-workbench/
sudo rm -rf /var/lib/mysql-cluster/
sudo rm -rf /var/lib/mysqlrouter/
sudo rm -rf /var/lib/mysqlrouter-*

# Remove any remaining MySQL/MariaDB log files
sudo rm -rf /var/log/mysql/
sudo rm -rf /var/log/mariadb/
sudo rm -rf /var/log/mysql.log
sudo rm -rf /var/log/mysql.err
sudo rm -rf /var/log/mysql/mysqld.log
sudo rm -rf /var/log/mysql/mysqld.err

# Remove any remaining MySQL/MariaDB socket and pid files
sudo rm -f /var/run/mariadb/mariadb.pid
sudo rm -f /var/run/mysqld/mysqld.pid
sudo rm -f /var/lib/mysql/mysql.sock
sudo rm -f /var/lib/mysql/mysql.sock.lock

# Remove any remaining MySQL/MariaDB temporary files
sudo rm -rf /tmp/mysql*
sudo rm -rf /tmp/ib*
