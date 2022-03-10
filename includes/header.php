<?php
/**
 * header.php
 *
 * @package LeweSite
 * @version 0.2.000
 * @author George Lewe (http://www.lewe.com)
 * @copyright Copyright (c) 2019 by Lewe.com
 */

if (!defined('VALID_ROOT')) header('Location: index.php');
?>
<!DOCTYPE html>
<!--
===========================================================================
Website:     <?=SITE_NAME?>

Version:     0.1.000
Copyright:   (c) 2004-<?=date("Y")?> by <?=SITE_NAME?>. All rights reserved.
Website by:  George Lewe (http://www.lewe.com)
===========================================================================
-->
<html lang="en">
   <head>
      <title><?=SITE_NAME?><?=$subtitle?></title>
      <meta http-equiv="Content-type" content="text/html;charset=utf8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="description" content="The official LeweSite" />
      <link rel="shortcut icon" href="images/logo/logo-16.png">
      
      <!-- Theme CSS -->
      <?php
      switch (THEME)
      {
         case "bootstrap":
         ?>
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
         <?php 
         break;
         default: 
         ?>
   <link rel="stylesheet" href="themes/bootswatch/<?=THEME?>/bootstrap.min.css">
         <?php 
         break;
      }
      ?>
      
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css">
      
      <!-- Theme Javascript -->
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <script src="js/bootswatch.js"></script>

      <!-- Font Awesome -->
      <link href="add-ons/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
      
      <!-- Blueimp Gallery -->
      <link rel="stylesheet" href="add-ons/blueimp-Gallery-2.35.0/css/blueimp-gallery.min.css">
      <link rel="stylesheet" href="add-ons/blueimp-Gallery-2.35.0/css/blueimp-gallery-indicator.css">      
      <link rel="stylesheet" href="add-ons/blueimp-Gallery-2.35.0/css/blueimp-gallery-video.css">      

      <!-- Magnific Popup -->
      <link rel="stylesheet" href="magnific/magnific-popup.css" type="text/css">
      <script src="magnific/jquery.magnific-popup.min.js"></script>
      
      <script>
         /**
          * Google Analytics
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         ga('create', 'UA-53253131-1', 'auto');
         ga('send', 'pageview');
         */
      </script>
   </head>

   <body>
