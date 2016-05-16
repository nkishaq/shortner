## Shortner

A URL shortner service is that takes a long URL and generates a shorter version of it. When the short URL is typed in the browser window, it redirects to the actual URL.

## Technology
	
* Laravel 5.1
* Angularjs


## Installation

Execute composer command.

	composer install
	
Add your base url(domain name) in public/app/app.js Line 10

	default domain  http://shortner.com/api/v1/
	
	example: http://cp.in.com/api/v1/

	constant('API_URL', 'http://shortner.com/api/v1/');
	
change database name,Db user and Db password in .enc or config/database.php


Execute migrate command.


	php artisan migrate
	

	

