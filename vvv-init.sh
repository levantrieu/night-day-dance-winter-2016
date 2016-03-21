
if [ ! -d "htdocs/wp-admin" ]; then
	echo 'Installing WordPress (release version) in night_day_dance/htdocs...'
	if [ ! -d "./htdocs" ]; then
		mkdir ./htdocs
	fi
	cd ./htdocs
	wp core download --locale=en_US --allow-root 
	wp core config --dbname="night_day_dance" --dbuser=wp --dbpass=wp --dbhost="localhost" --dbprefix=wp_ --locale=en_US --allow-root --extra-php <<PHP
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);
PHP
	wp core install --url=night_day_dance.dev --title="night_day_dance" --admin_user=Levan --admin_password=redacademy --admin_email=le_van_trieu@hotmail.com --allow-root
	
	
  wp theme delete twentythirteen --allow-root; wp theme delete twentyfourteen --allow-root; wp theme delete twentyfifteen --allow-root; wp theme delete twentysixteen --allow-root; wp plugin delete hello --allow-root; wp plugin delete akismet --allow-root; git checkout HEAD .
  
	
	
	cd -

fi


