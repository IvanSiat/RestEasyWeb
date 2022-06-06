<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();



  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'siativan@yahoo.com';

	$email_subject = $subject;

	$email_body = $message

  $to = "siativan@yahoo.com";

  $headers = "From: $email_from \r\n";


  mail($to,$email_subject,$email_body,$headers);*/

  $sender = 'admin@resteasycleaningservices.ca';
  $recipient = 'siati17@yahoo.com';
  
  $subject = "php mail test";
  $message = "php test message";
  $headers = 'From:' . $sender;
  
  if (mail($recipient, $subject, $message, $headers))
  {
      echo "Message accepted";
  }
  else
  {
      echo "Error: Message not accepted";
  }
  ?>
  
?>
