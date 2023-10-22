<?php 

$path = './libraries';
require_once $path . '/minify/src/Minify.php';
require_once $path . '/minify/src/CSS.php';
require_once $path . '/minify/src/JS.php';
require_once $path . '/minify/src/Exception.php';
require_once $path . '/minify/src/Exceptions/BasicException.php';
require_once $path . '/minify/src/Exceptions/FileImportException.php';
require_once $path . '/minify/src/Exceptions/IOException.php';
require_once $path . '/path-converter/src/ConverterInterface.php';
require_once $path . '/path-converter/src/Converter.php';
require_once $path . '/functions.php';

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler'); else ob_start(); //enable gzip compression

require_once ('inc/variables.php'); 

$current_page = "home";
$page_title = $hero_heading;

require_once ('inc/header.php'); 
include ("inc/hero.php"); 
include ("inc/offer.php"); 
include ("inc/emergency.php"); 
include ("inc/finance.php");
include ("inc/treatments.php"); 
include ("inc/cta.php"); 
include ("inc/faq.php"); 
include ("inc/why.php");
include ("inc/location.php"); 
require_once ('inc/footer.php');

ob_end_flush();