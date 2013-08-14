############################################################################
#																		   #
# SOUVENIR ( YAADEIN-SOFTWARE)          								   #
#																		   #
############################################################################

This application is used to make booklet for all pass out student who have completed their degrees. This will remind you, your youthful days when you value friendship above all. 

============================================================================

############################################################################
#																		   #
#            DIFFERENT WAYS OF INSTALLING SOUVENIR     					   #
#																		   #
############################################################################

----------------------------SCRIPT------------------------------------------

Installation of souvenir can be done both ways by using script as well as manually.

If you are installation it through script go to particular folder where script
is present and run script. Scroll down to learn how to run script process.

---------------------------MANUALLY------------------------------------------

If you are installation manually than read README files 

Eg: 1) For souvenir installation, in souvenir folder there is file named "INSTALL.TXT" follow it.
    
    2) For data_retrieving process, in Data_retrieve/souvenir folder there is file named "UserGuide.pdf" follow it.
    
    3) For Imposition process, in cover folder there is file named "UserGuide.pdf" follow it.

############################################################################
#																		   #
#                        INSTALLATION	PROCEDURE     					   #
#																		   #
############################################################################

Follow Step by step procedure to produce souvenir booklet.

############################################################################
#																		   #
#                   1).   INSTALL LAMP SERVER							   #
#																		   #
############################################################################

============================================================================

1. sudo apt-get install apache2

2. sudo apt-get install php5 libapache2-mod-php5

3. sudo apt-get install mysql-server mysql-server

4. sudo apt-get install phpmyadmin

5. sudo apt-get install libapache2-mod-auth-mysql php5-mysql

6. sudo /etc/init.d/apache2 restart

============================================================================

############################################################################
#																		   #
#                2).   DJANGO INSTALLATION 								   #
#																		   #
############################################################################

============================================================================

1.) Extract Django folder then
   
    tar -zxvf Django-1.4.5.tar.gz 
    cd Django-1.4.5
    sudo python setup.py install

============================================================================

############################################################################
#																		   #
#		          3).   SOUVENIR INSTALLATION                               #
#																		   #
############################################################################

Souvenir can be installed both through script as well as manual process which 
is as follows : 

############################################################################
#																		   #
#		                USING SCRIPT                                       #
#																		   #
############################################################################

============================================================================

1). PLACE "Souvenir-Package.tar.gz" folder "WITHOUT EXTRACTING" in "DOWNLOAD" FOLDER.

2). PLACE "script.sh" File in home folder. Change permissions " chmod 777 script.sh "

3). Run script $ sh script.sh 

============================================================================

############################################################################
#																		   #
#                      MANUAL INSTALLATION 								   #
#																		   #
############################################################################

============================================================================

1). Extract "Souvenir-Package.tar.gz" FOLDER and read INSTALL.TXT file.

============================================================================

############################################################################
#																		   #
#                  4).   SMTP MAIL SERVER							   #
#																		   #
############################################################################

===========================MANUALLY ONLY==============================

Simple Mail Transfer Protocol (SMTP) is an Internet standard for electronic 
mail (e-mail) transmission across Internet Protocol (IP) networks. This will
send a verification mail to users to verify their registration and this will 
also help in recovering password if by chance any user lost it.

Follow below link to install it :

http://deekysharma.wordpress.com/2013/07/09/postfix-mail-server-on-ubuntu-13-04/

After installing and confuguring it go to your souvenir folder, under it their 
is file named "setting.py" in that file do following:

SITE_ID = 1

DEFAULT_FROM_EMAIL = 'YOUR_E-MAIL_ID'              # eg: something@gmail.com

EMAIL_HOST = 'smtp.gmail.com'

EMAIL_HOST_USER = 'YOUR_E-MAIL_ID'                 # eg: something@gmail.com

EMAIL_HOST_PASSWORD = 'PASSWORD'                   # Your e-mail password

EMAIL_USE_TLS = True 

EMAIL_PORT = "587"


############################################################################
#																		   #
#                  5).   DATA_RETRIEVING_PROCESS							   #
#																		   #
############################################################################

Data_retrieving_process can be installed both through script as well as manual 
process which is as follows : 

============================================================================

############################################################################
#																		   #
#		                USING SCRIPT                                       #
#																		   #
############################################################################

1.) Extract data_retriev folder and push that folder at experimental
    
    Eg:   scp /home/username/data_retrieve/souvenir xxxx@202.164.53.122:~/public_html/

    Run script :- ""  sh script.sh ""

############################################################################
#																		   #
#                      MANUAL INSTALLATION 								   #
#																		   #
############################################################################

    For manual process read " UserGuide.pdf "

============================================================================

############################################################################
#																		   #
#                       6).   IMPOSITION	 								   #
#																		   #
############################################################################

===========================USING SCRIPT ONLY==================================


1.) Inside COVER folder there is a folder named "IMPOSITION". To get imposition,
    change " PDF " files (according to your requirement) to any pdf files and 
    change name into "script.sh" too which is inside COVER folder.

    eg: By default it contains files named "fronside.pdf","backside.pdf","front-
    outside.pdf","Back-outside.pdf" change that pdf files to your pdf files and
    do same changes in scrip.sh file too and run script using command
    "sh script.sh".

   NOTE: To covert .jpg file into .pdf use this
    
   \documentclass{article}
   \usepackage[pdftex]{color,graphicx,epsfig}
   \usepackage[final]{pdfpages} % for including pdf file
   \begin{document}
   \includepdf[pages=-]{.JPG_FILE_NAME}
   \end{document}

============================================================================



AUTHORS:

Mentor and Manager

Dr. Hardeep Singh Rai

Website: http://gndec.ac.in/~hsrai

Developer

Deepak Kumar Sharma

Blog: deekysharma.wordpress.com

Email: deeky.sharma@gmail.com

