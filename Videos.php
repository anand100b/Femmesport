<?php
require('vendor/autoload.php');
use oldspice\Navigation;


$navigation = Navigation::getNavigation();

//Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment( $loader );
//load the template
$template = $twig -> load( 'video.twig' );
//output the template to page
echo $template -> render([
  'navigation' => $navigation,
  'title' => 'teams'
]);
?>