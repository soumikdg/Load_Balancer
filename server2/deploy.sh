#!/bin/sh
sudo apt-get update -y 
sudo apt-get install apache2 -y
sudo apt-get install php libapache2-mod-php -y
sudo chmod 777 /var/www/html
sudo rm /var/www/html/index.html
sudo cp index.php /var/www/html/index.php
#etc.
