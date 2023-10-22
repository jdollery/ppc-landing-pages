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

$current_page = "thanks";
$page_title = "Thank you for your enquiry, a member of our team will be in touch.";

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler'); else ob_start(); //enable gzip compression

require_once ('inc/variables.php'); 
require_once ('inc/header.php'); 
include ("inc/hero.php"); 
include ("inc/location.php"); 
require_once ('inc/footer.php');

ob_end_flush();