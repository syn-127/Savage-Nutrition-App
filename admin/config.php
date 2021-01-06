<?php



/* URL PROJECT */

define ('SITE_URL', 'https://savage-nutrition.azurewebsites.net/');

/* DATABASE CONFIGURATION */

$database = array(
'host' => 'app-savage-nutrition-mysqldbserver',
'db' => 'mysqldatabase13199',
'user' => 'winterseye',
'pass' => 'Betfred00!'
);

$email_config = array(
'email_address' => 'contactus@savagenutrition.co.uk',
'email_password' => 'Betfred77!',
'email_subject' => 'No Reply',
'email_name' => 'Customer Service',
'smtp_host' => 'mail.savagenutrition.co.uk ',
'smtp_port' => '465',
'smtp_encrypt' => 'tls'
);

$items_config = array(
    
    'items_per_page' => '8',
    'images_folder' => 'images/'
);


?>