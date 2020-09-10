<?php
require('vendor/autoload.php');
require_once 'GFirestore.php';
include_once __DIR__ . '/default_bootstrap.php';

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

// Get all sports.
//$sports = $db->getSports();
//print_r($sports);

$arr = $fs->getWhere('id', '>' , 0);
//print_r($arr);
$navigation = Navigation::getNavigation();
//Twig
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment( $loader );
//load the template
$template = $twig -> load( 'home.twig' );
$newarr = array();
foreach($arr as $key){
  $newarr = array_push($key);
}
//output the template to page
echo $twig -> render('home.twig',
  array(
    'navigation' => $navigation,
    'title' => 'Home Page',
    'products' => $arr,
    //'products' => array(array('author' => 'bbaiubfasb', 'title' => 'nfanufa')),
  )
);
?>
