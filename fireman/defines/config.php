<?php

/* 
 *This where all the Constatns will be written
 * Absoluth paths and other definition that are used alot
 */
date_default_timezone_set('America/Los_Angeles');
define("ABSOLUTH_PATH_PUBLIC_HTML", $_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR ."public_html/");
define("ABSOLUTH_PATH_CLASSES", ABSOLUTH_PATH_PUBLIC_HTML."classes/");
define("ABSOLUTH_PATH_FORMS", ABSOLUTH_PATH_CLASSES."forms/");
define("ABSOLUTH_PATH_MODULES", ABSOLUTH_PATH_CLASSES."modules/");
define("ABSOLUTH_PATH_SEO_REPORTS", ABSOLUTH_PATH_MODULES."SEO_reports/");
define("ABSOLUTH_PATH_ADD_PAGES", ABSOLUTH_PATH_MODULES."add_pages/");
define("ABSOLUTH_PATH_BACKUP_MANAGER", ABSOLUTH_PATH_MODULES."backup_manager/");
define("ABSOLUTH_PATH_CRON", ABSOLUTH_PATH_MODULES."cron/");
define("ABSOLUTH_PATH_CUST_NAV", ABSOLUTH_PATH_MODULES."custom_nav_manager/");
define("ABSOLUTH_PATH_IMAGE_MANAGER", ABSOLUTH_PATH_MODULES."manage_images/");
define("ABSOLUTH_PATH_PRODUCT_MANAGER", ABSOLUTH_PATH_MODULES."product_manager/");
define("ABSOLUTH_PATH_RETAILER_REPORT", ABSOLUTH_PATH_MODULES."retailer_reports/");
define("ABSOLUTH_PATH_SEARCH", ABSOLUTH_PATH_MODULES."search/");
define("ABSOLUTH_PATH_SHOPPING_CART", ABSOLUTH_PATH_MODULES."shopping_cart");
define("ABSOLUTH_PATH_TEMPLATES", ABSOLUTH_PATH_CLASSES."templates/");

define("START_SESSION", session_start());

define("ABSOLUTH_PATH_CSS","../assets/css/");
define("ABSOLUTH_PATH_JS", "../assets/js/");
define("ABSOLUTH_PATH_FONTS", "../assets/fonts/");
define("ABSOLUTH_PATH_IMAGES", "../assets/images/");




define("TEST_ENVIRONMENT", true);




