#/bin/sh

mkdir -p /home/admin/tools/
wget -O /home/admin/tools/s3backup.zip https://github.com/graphicgenie/directadmin-s3-backup/archive/master.zip
cd /home/admin/tools
unzip s3backup.zip
mv directadmin-s3-backup-master directadmin-s3-backup
cd directadmin-s3-backup
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'c31c1e292ad7be5f49291169c0ac8f683499edddcfd4e42232982d0fd193004208a58ff6f353fde0012d35fdd72bc394') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php composer.phar update
mkdir -p /usr/local/directadmin/scripts/custom
wget -O /usr/local/directadmin/scripts/custom/ftp_upload.php https://raw.githubusercontent.com/graphicgenie/directadmin-s3-backup/master/upload-script.sh
chmod +x /usr/local/directadmin/scripts/custom/ftp_upload.php
cp config.sample.php config.php