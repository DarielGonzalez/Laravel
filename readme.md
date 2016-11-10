## Generate aplication in Laravel with and homestead   

cd projects
sudo composer create-project laravel/laravel nombre
sudo composer require laravel/homestead   ##para vagrant
sudo vendor/bin/homestead make

sudo composer require --dev laravel/homestead

sudo ./vendor/bin/homestead make
vagrant up 

## Mysql Command

database local
mysql -h localhost -u root -p 


#connection database name "mibasedatos"
mysql> use mibasedatos; 

#List databases

mysql>show databases; 

#Create database
mysql> create database miprueba; 

#Used database created
mysql> use miprueba; 
