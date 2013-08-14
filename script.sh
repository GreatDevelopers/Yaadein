#!/bin/bash
########################################################################
# Discription: This script checks the internet connectivity and starts #
#               the installation.   		                           #
#                                                                      # 
#                                                                      #
# Please read Read.md file before you run this script                  #
#                                                                      #
#      Author   :  Deepak Kumar Sharma, deeky.sharma@gmail.com         #
#      License  :  GNU General Public License                          #
#      Copyright:  Copyright (c) 2013, Great Developers                #
#                                                                      #
#      created : 2-July-2013                                           #
#      last update : 1-August-2013                                     #
#      DJANGO VERSION=1.4.5                                            #
#                                                                      #
########################################################################


  #############################################################
  #															  #
  # 	Check whether connected to internet or not		      #
  #															  #
  #############################################################

if (ping google.com -c 1)
then
    echo "##########################################"
    echo "#       CONNECTED TO INTERNET            #"
    echo "##########################################"
else
    echo "###################################################"
    echo "# NOT CONNECTED TO INTERNET, CHECK CONNECTION     #"
    echo "###################################################"
fi

  #############################################################
  #															  #
  # 	        Check apache2 installed or not  		      #
  #															  #
  #############################################################

if (dpkg --get-selections | grep apache)
then
    echo "##########################################"
    echo "#             Apache Installed           #"
    echo "##########################################"
else
    echo "##########################################"
    echo "#   Apache Not Installed, Install It     #"
    echo "##########################################"
fi


  #############################################################
  #															  #
  # 	        Check mysql installed or not    		      #
  #															  #
  #############################################################

    echo "###################################################"
    echo "#                                                #"
    echo "#   phpMyAdmin Check, Enter phpMyAdmin password  #"
    echo "#                                                #"
    echo "###################################################"

mysqladmin -u root -p status

  #############################################################
  #															  #
  # Script check whether files are at correct position or not #
  #															  #
  #############################################################

cd Downloads
tar -zxvf Souvenir-Package.tar.gz
sudo chmod -R 777 souvenir
sudo mv souvenir ~/
cd

  #############################################################
  #															  #
  #         Copy media folder at respective path			  #
  #															  #
  #############################################################
cd souvenir
sudo chmod -R 777 media
sudo cp -R media /var/www/
sudo mv media /usr/local/lib/python2.7/dist-packages/django/contrib/admin/
sudo -R 755 media
cd

  #############################################################
  #															  #
  # 		Copy userprofile at respective path               #
  #															  #
  #############################################################
cd souvenir
sudo chmod -R 777 userprofile
sudo cp -R  userprofile /usr/local/lib/python2.7/dist-packages/
sudo chmod -R 755 userprofile
cd
  #############################################################
  #															  #
  # Change /home/username/ with present working directory     #
  #															  #
  #############################################################
path=$PWD
echo ""
sed -i "s#/home/username#"$path"#g"  souvenir/apache/django.wsgi
cd

  #############################################################
  #															  #
  #          Permissions to various folders                   #
  #															  #
  #############################################################
chmod -R 755 souvenir/
sudo chmod -R 755 /usr/local/lib/python2.7/dist-packages/userprofile/
sudo chmod -R g+s /usr/local/lib/python2.7/dist-packages/userprofile/
sudo chmod -R 755 /usr/local/lib/python2.7/dist-packages/django/
sudo chmod -R g+s /usr/local/lib/python2.7/dist-packages/django/
sudo chmod -R 777 /usr/local/lib/python2.7/dist-packages/django/contrib/admin/media
cd

file=souvenir/settings.py

  #################################################################
  #																  #
  # asking user to input the mysql username						  #
  #																  #
  #################################################################

  a=1
  while [ $a -ne 2 ]
      do
         {

# inputs database name from the user
            read -p "enter mysql username :" db_user
            read -p "enter mysql password :" db_password
            RESULT=`mysql --user="$db_user" --password="$db_password" --skip-column-names -e "SHOW DATABASES LIKE 'mysql'"` 2> /dev/null
            if [ $RESULT ]; then
echo ""
               echo "Username and password match"
               a=2
               break
else
echo ""
               echo "Username and password doesn't match"
               echo "re-enter the details"
               echo ""

            fi
        }
  done
sed -i "16 s/database/$db_user/" $file
  sed -i "17 s/password/$db_password/" $file
  ##################################################################
  #                                                                #                                                           
  #                     length of the array						   #
  #																   #
  ##################################################################


  len=${#array[*]}
  i=0
  while [ $i -lt $len ]; do
read -p "${array[$i]}" ${array1[$i]} #this reads input from the user
     sed -i "${array2[$i]} s/${array1[$i]}/${!array1[$i]}/" $file #uses sed command to replace word from file to be replaced by user inputs
     let i++
  done #end of for loop

# this part checks if database name entered is created before or not.
  a=1
  while [ $a -ne 2 ]
     do
      {

# inputs database name from the user
         read -p "enter database name you want to create :" db_name

#checks the existance of database
         RESULT=`mysql --user="$db_user" --password="$db_password" --skip-column-names -e "SHOW DATABASES LIKE '$db_name'"`
         if [ $RESULT ]; then
echo "The Database exist, choose another name for database."
         else
a=2
            break
fi
      }
  done
sed -i "15 s/database_name/$db_name/" $file

  #################################################################################
  #																				  #
  #          here the username automatically gets input from the system			  #
  #																			      #
  #################################################################################
                                                                                                                              
  NAME=$(who am i | awk '{print $1}')
  sed -i "111 s/user_name/$NAME/" $file
  echo "the username is $NAME"

  mysqlbash_path='/usr/bin/mysql' #mysql path address
  mysqlbash="$mysqlbash_path --user=$db_user --password=$db_password -e" #declaring a variable
  $mysqlbash "create database $db_name " #creates databases with the name defined by the user
cd

sed -i "97 s#/home/username#"$path"#g" souvenir/settings.py

echo "#################################################################"
echo "#                                                               #"
echo "#             LIBAPACHE2-MOD-WSGI INSTALLATION                  #"
echo "#                                                               #"
echo "#################################################################"

while true; do
    read -p "Do you wish to install this program (y/n)?" yn
    case $yn in
        [Yy]* ) sudo apt-get install libapache2-mod-wsgi; break;;
        [Nn]* ) exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

cd
sed -i "10 s#/home/username#"$path"#g" souvenir/httpd.conf
sed -i "12 s#/home/username#"$path"#g" souvenir/httpd.conf
sudo mv  httpd.conf /etc/apache2/
cd

echo "#################################################################"
echo "#                                                               #"
echo "#                  PYTHON-MySQLdb INSTALLATION                  #"
echo "#                                                               #"
echo "#################################################################"

while true; do
    read -p "Do you wish to install this program (y/n)?" yn
    case $yn in
        [Yy]* ) sudo apt-get install python-mysqldb; break;;
        [Nn]* ) exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

cd souvenir/
python manage.py syncdb

cd
sed -i "s#<link rel="stylesheet" type="text/css" href="{% block stylesheet %}{% static "admin/css/base.css" %}{% endblock %}" />#"<link rel="stylesheet" type="text/css" href="{% block stylesheet %}{% static "localhost/base.css" %}{% endblock %}" />"#g"  sed -i "s#<link rel="stylesheet" type="text/css" href="{% block stylesheet %}{% static "admin/css/base.css" %}{% endblock %}" />#"<link rel="stylesheet" type="text/css" href="{% block stylesheet %}{% static "http://localhost/media/css/base.css" %}{% endblock %}" />"#g"  /usr/local/lib/python2.7/dist-packages/django/contrib/admin/templates/admin/base.html
cd
cd /var/www/
sudo chmod 755 base.css
cd

cd souvenir
sed -i "10 s#/home/username#"$path"#g" ~/souvenir/site
sed -i "12 s#/home/username#"$path"#g" ~/souvenir/site
cd
cd ~/souvenir
sudo mv site /etc/apache2/sites-available/
cd
sudo a2ensite site && sudo a2dissite default
sudo /etc/init.d/apache2 restart
cd
