<?php
error_reporting(E_ALL);

ini_set('display_errors', '1');
/* 
 * Portal access
 * 
 */
require_once '../vendor/autoload.php';

try{
    $fireman_gateway = new control();

}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    
}
