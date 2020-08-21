<?php
require('vendor/autoload.php');
use oldspice\Navigation;
use oldspice\Product;
use oldspice\Category;
use oldspice\WishList;


$navigation = Navigation::getNavigation();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment( $loader );
//load the template
$template = $twig -> load( 'livescore.twig' );
//output the template to page
echo $template -> render([
  'navigation' => $navigation,
  'title' => 'LiveScore'
]);
?>