#!/bin/bash
## --user=XXXXXX --password=XXXXXX *may* not be necessary if run as root or you have unsecured DBs but
##   using them makes this script a lot more portable.  Thanks @billkarwin
# RESULT=`mysqlshow --user=bjms_user --password=Password123## bjms | grep -v Wildcard | grep -o bjms`
# if [ "$RESULT" == "bjms" ]; then
#     mysql -u bjms_user -p"Password123##" -e "DROP DATABASE bjms"
#     mysql -u bjms_user -p"Password123##" -e "CREATE DATABASE IF NOT EXISTS bjms"
#     mysql -u forge -piaHwkNFYl3jAEsWrBMXr -e "GRANT ALL PRIVILEGES ON bjms.* To 'bjms_user'@'localhost' IDENTIFIED BY 'Password123##'"
#     mysql -u bjms_user -p"Password123##" bjms < database/bjms-database.sql
# fi

composer install
php artisan run:install http://bjmsonline.procyon.co.id
php artisan storage:link > link.log
# Copying assets to public directory because symlink doesn't work.
cp -R storage/app/public/* public
git pull origin master
echo "" | sudo -S service php7.1-fpm reload
