<?php
require('vendor/autoload.php');

use oldspice\Navigation;
use oldspice\Product;
use oldspice\Category;
use oldspice\WishList;
use Kreait\Firebase\Factory;
$factory = (new Factory)->withServiceAccount('/path/to/firebase_credentials.json');



$navigation = Navigation::getNavigation();
//Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment( $loader );
//load the template
$template = $twig -> load( 'home.twig' );
//output the template to page
echo $template -> render([
  'navigation' => $navigation,
  'title' => 'Home Page'
]);
?>
