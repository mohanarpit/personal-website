<?php
	//define the receiver of the email
	
	define('TO_NAME','Arpit Mohan');
	define('TO_EMAIL','me@arpitmohan.com');
	define('SUBJECT','Contact from your website');	
	
	define('TEMPLATE_PATH','template/default.php');
 
	define('SMTP_ENABLE',true); // True to enable SMTP
	define('SMTP_HOST',getenv('SMTP_HOST'));
	define('SMTP_USERNAME',getenv('SMTP_USERNAME'));
	define('SMTP_PASSWORD',getenv('SMTP_PASSWORD'));

	// Messages
	define('MSG_INVALID_NAME','Please enter your name.');
	define('MSG_INVALID_EMAIL','Please enter a valid e-mail.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');