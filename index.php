<?php
require('vendor/autoload.php');
require_once 'GFirestore.php';

use GPBMetadata\Google\Firestore\V1Beta1\Firestore;
use oldspice\Navigation;
use oldspice\Product;
use oldspice\Category;
use oldspice\WishList;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$fs = new GFirestore('news');

//print_r($fs->getDocument('VuJmnirTcpxJiGjXjwYx'));
//print_r($fs->getWhere('id', '=' , 1));

$arr = array($fs->getWhere('id', '=' , 1));
//print_r($arr);
$navigation = Navigation::getNavigation();
//Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment( $loader );
//load the template
$template = $twig -> load( 'home.twig' );
//output the template to page
echo $template -> render([
  array(
    'navigation' => $navigation,
    'title' => 'Home Page',
    'products' => array($arr)
  )
]);
?>
