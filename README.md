# This will send email to admin functionality in laravel and save the value in a database.  
# PHP 7.0 is required
# update system.env file with admin email configuration 
 MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
# Run laravel migration command
php artisan migrate
# Route www.test.com/contact

