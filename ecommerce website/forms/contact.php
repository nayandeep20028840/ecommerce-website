

<?php

$receiving_email_address = 'contact@example.com';

if (file_exists($php_email_form = '../vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new $php_email_form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

$contact->add_message($_POST['name'], 'From');
$contact->add_message($_POST['email'], 'Email');
$contact->add_message($_POST['message'], 'Message', 10);
echo $contact->send();

//<?php
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
//header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin, Authorization');
//
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    $receiving_email_address = 'contact@example.com';
//
//    if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
//        include($php_email_form);
//    } else {
//        die('Unable to load the "PHP Email Form" Library!');
//    }
//
//    $contact = new PHP_Email_Form;
//    $contact->ajax = true;
//
//    $contact->to = $receiving_email_address;
//    $contact->from_name = $_POST['name'];
//    $contact->from_email = $_POST['email'];
//    $contact->subject = $_POST['subject'];
//
//    $contact->add_message($_POST['name'], 'From');
//    $contact->add_message($_POST['email'], 'Email');
//    $contact->add_message($_POST['message'], 'Message', 10);
//
//    echo $contact->send();
//} else {
//    echo 'Method not allowed';
//}
//?>
//
//