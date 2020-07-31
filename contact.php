<?php
require('vendor/autoload.php');

use oldspice\Navigation;




if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  $name = $_POST['name'];
  $msg = $_POST['email'];
  $message =$_POST['message'];

  
  $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
  $email = new \SendGrid\Mail\Mail();
  $email->setFrom( $msg, $name);
  $email->setSubject("website contact form");
  $email->addTo("6750@ait.nsw.edu.au", "Anand Bohara");
  $email->addContent("text/plain",$message );

  try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
  } catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
  }
  
  
}
else{
  $register = '';
  $email = '';
}

$navigation = Navigation::getNavigation();

//Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment( $loader );
//load the template
$template = $twig -> load( 'contact.twig' );
//output the template to page
echo $template -> render([
  'navigation' => $navigation,
  'email' => $email,
  'title' => 'Contact us'
]);