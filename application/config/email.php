<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Example of setting up an SMTP config set
 * ( not used anywhere in the example application )
 */
$config['smtp_example_config'] = array(
	'protocol'     => 'smtp',
	'smtp_host'    => 'smtp.totalinterativa.com.br',
	'smtp_user'    => 'contato@totalinterativa.com.br',
	'smtp_pass'    => 'interativa#123',
	'smtp_port'    => '587',
	'smtp_timeout' => '5',
	'from_email'   => 'admin@example.com',
	'from_name'    => 'Admin',
	'to'           => 'nailton.rc@gmail.com' 
);

/**
 * Admin Email Config Set
 */
$config['admin_email_config'] = array(
	'from_email' => 'admin@example.com',
	'from_name'  => WEBSITE_NAME
);

/**
 * No Reply Config Set
 */
$config['no_reply_email_config'] = array(
	'from_email' => 'no-reply@example.com',
	'from_name'  => WEBSITE_NAME
);

$config['contact_form_recipient_email_address'] = 'customer-service@example.com';

$config['registration_review_email_address']    = 'registration@example.com';

/* End of file email.php */
/* Location: /application/config/email.php */