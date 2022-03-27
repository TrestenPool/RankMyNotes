<?php

// important paths
define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
define("CLASSES_PATH", realpath(dirname(__FILE__) . '/classes'));

// flash types
define ('FLASH_SUCCESS', 'success');
define ('FLASH_WARNING', 'warning');
define ('FLASH_DANGER', 'danger');

define ('FLASH_PRIMARY', 'primary');
define ('FLASH_SECONDARY', 'secondary');

define ('FLASH_INFO', 'info');
define ('FLASH_LIGHT', 'light');
define ('FLASH_DARK', 'dark');


$config = array(

    "db" => array(
        "db1" => array(
            "dbname" => "InventoryManagementSystem",
            "username" => "grader",
            "password" => "grader_password123",
            "host" => "localhost"
        )
    ),

    "urls" => array(
        "baseUrl" => "http://34.129.109.248"
    ),

    "paths" => array(
        // NOT public files, backend code. Holds config.php,library,pages,templates
        "resources" => "/var/www/resources",

        // where we store the code for the rendering of the pages
        "pages" => "/var/www/resources/pages",

        // css files
        "css" => "/css",

        // javascript files
        "js" =>  "/js",

        // images files
        "images" => "/images",
    ),

    "classes" => array(
      // works with the user that is signed in 
      // "session" => CLASSES_PATH . '/session_class.php'
    ),

    "pagination" => array(
      "entries" => 10
    ),

    "Hashing_Algorithm" => PASSWORD_BCRYPT,
);
 


/*
    Error reporting.
*/
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


  


/****************************************************************************************/
/****************************************************************************************/
/****** THE FOLLOWING PHP WILL BE RENDERED ON ALL PHP FILES THAT INCLUDE THE CONFIG ****/
/****************************************************************************************/

  // the library functions
  // require_once LIBRARY_PATH . '/mysql_functions.php';
  require_once LIBRARY_PATH . '/webUtility_functions.php';
  // require_once LIBRARY_PATH . '/user_functions.php';
  // require_once LIBRARY_PATH . '/inventory_functions.php';

  // classes
  // require_once CLASSES_PATH . '/session_class.php';
  // require_once CLASSES_PATH . '/flash_class.php';
  // require_once CLASSES_PATH . '/filter_class.php';

  // initialize the session everytime a page is loaded
  // initSession();
?>
