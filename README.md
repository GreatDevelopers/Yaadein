# Yaadein  [![Stories in Ready](https://badge.waffle.io/GreatDevelopers/Yaadein.svg?label=ready&title=Ready)](http://waffle.io/GreatDevelopers/Yaadein) 
----------------------------
<p>This application is used to make booklet for all pass out student who have completed their degrees. This will remind you, your youthful days when you value friendship above all. </p>

## Requirement 
* LAMP Server
  * sudo apt-get install apache2
  * sudo apt-get install php5 libapache2-mod-php5
  * sudo apt-get install mysql-server mysql-server
  * sudo apt-get install phpmyadmin
  * sudo apt-get install libapache2-mod-auth-mysql php5-mysql
  * sudo /etc/init.d/apache2 restart

## Installation 
  * Clone Yaadein : git clone https://github.com/GreatDevelopers/Yaadein.git
  * Place Yaadein in /var/www

## Configuration
  * Create database in phpmyadmin and import "Yaadein.sql" file in it.
  * In application/config/database.php set your DB_USERNAME, DB_PASSORD and DB_NAME of phpmyadmin.
  * Sign-Up or Sing-up Process
    * Inside application / models / email_model.php set E-mail and Password to send configuration E-mail
  * Forgot Password
    * Inside application / models / forgot_model.php set E-mail and Password
  * Feedback Form
    * Inside application / models / forgot_model.php set E-mail and Password

## Run
 * To generate the Souvenir pdf, go to Yaadein/ Data_Retrieve/ souvenir.
 * Run the following command:<br/>
    $ sh script.sh
 * A pdf file named final.pdf will be generated. The file can be viewed as:
 *  $ evince final.pdf
 
## Graph
[![Throughput Graph](https://graphs.waffle.io/GreatDevelopers/Yaadein/throughput.svg)](https://waffle.io/GreatDevelopers/Yaadein/metrics) 
