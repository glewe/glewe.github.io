<?php
/**
 * index.php
 *
 * @package LeweSite
 * @version 0.2.000
 * @author George Lewe (http://www.lewe.com)
 * @copyright Copyright (c) 2019 by Lewe.com
 */

/**
 * Set parent flag to control access to child scripts
 */
define( 'VALID_ROOT', 1 );

/**
 * Get the absolute website root path. That's the DIR of this file
 */
define( 'WEBSITE_ROOT', __DIR__ );

/**
 * Load site config
 */
require_once WEBSITE_ROOT . '/includes/config.site.php';

/**
 * Load other functions
 */
include_once WEBSITE_ROOT . '/includes/functions.php';

/**
 * Set HTML title
 */
$subtitle = '';
if (isset ( $_REQUEST ['page'] ))
{
   switch ($_REQUEST ['page'])
   {
      case "about": $subtitle = " - About"; break;
      case "home":  $subtitle = " - Home";  break;
   }
}

/**
 * Include global content
 */
require ("includes/header.php");
require ("includes/navbar.php");

/**
 * Include requested content
 */
if (isset ( $_REQUEST ['page'] ))
{
   include ("pages/".$_REQUEST ['page'].".php");
}
else 
{
   include ("pages/home.php");
}

/**
 * Include footer
 */
require ("includes/footer.php");
?>
      