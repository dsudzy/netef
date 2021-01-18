<?php
putenv("DB_DATABASE=wordpress");
putenv("DB_USERNAME=root");
putenv("DB_PASSWORD=password");
putenv("DB_HOST=127.0.0.1:33306");
putenv('WP_FORCE_ADMIN=0');
putenv('WP_HOME=http://127.0.0.1:8000/wordpress/');
putenv('WP_SITEURL=http://127.0.0.1:8000/wordpress/');