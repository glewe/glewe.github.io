<?php
/**
 * config.site.php
 *
 * @package LeweSite
 * @version 0.2.000
 * @author George Lewe (http://www.lewe.com)
 * @copyright Copyright (c) 2019 by Lewe.com
 */

if (!defined('VALID_ROOT')) header('Location: index.php');

/**
 * Site owner and contact details
 */
define( 'SITE_NAME', 'LeweSite' );
define( 'SITE_OWNER', 'George Lewe' );
define( 'SITE_OWNER_EMAIL', 'george@lewe.com' );

/**
 * Site purpose (used on the About page)
 */
define( 'SITE_PURPOSE', 'to convert ChordPro formatted texts to other platorm code (e.g. HTML or Confluence page source code)' ); // Complete the sentence "This site offers..."
define( 'SITE_COMMERCIAL', 'free' ); // E.g. 'free' or 'paid'

/**
 * Define the content layout
 * 'container'       => fixed width
 * 'container-fluid' => container width
 */
define( 'NAVBAR_LAYOUT', 'container-fluid' );
define( 'CAROUSEL_LAYOUT', 'container' );
define( 'CONTENT_LAYOUT', 'container' );
define( 'FOOTER_LAYOUT', 'container-fluid' );

/**
 * Theme Settings
 * Default is 'bootstrap'
 */
define( 'THEME', 'slate' );

/**
 * Navbar Settings
 */
define( 'NAVBAR_BACKGROUND', 'dark' ); // Choose between 'default', 'light' or 'dark'
define( 'NAVBAR_ICON', true );
define( 'NAVBAR_SITENAME', false );

?>
