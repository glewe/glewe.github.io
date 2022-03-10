<?php
/**
 * navbar.php
 *
 * @package LeweSite
 * @version 0.2.000
 * @author George Lewe (http://www.lewe.com)
 * @copyright Copyright (c) 2019 by Lewe.com
 */

if (!defined('VALID_ROOT')) header('Location: index.php');
?>

<!-- ==================================================================== 
NAVBAR 
-->
<div class="<?=NAVBAR_LAYOUT?>">

   <?php
   $navbarBg = '';
   switch (NAVBAR_BACKGROUND) {
      case 'dark': $navbarBg = "navbar-dark bg-dark"; break;
      case 'light': $navbarBg = "navbar-light bg-light"; break;
   }
   ?>
   <nav class="navbar navbar-expand-lg <?=$navbarBg?>">
      <a class="navbar-brand" href="#"><?=NAVBAR_ICON?"<img class=\"navbar-logo\" src=\"images/logo/logo-32.png\" alt=\"\">":""?><?=NAVBAR_SITENAME?SITE_NAME:""?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            
            <!-- Home -->
            <li class="nav-item">
               <a class="nav-link" href="index.php?page=home">Home</a>
            </li>

            <!-- Action -->
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"><i class="far fa-window-maximize fa-menu"></i>Action</a>
                  <a class="dropdown-item" href="#"><i class="far fa-window-maximize fa-menu"></i>Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"><i class="far fa-window-maximize fa-menu"></i>Something else here</a>
               </div>
            </li>

            <!-- Help -->
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Help
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="index.php?page=about"><i class="fas fa-question-circle fa-menu"></i>About</a>
                  <a class="dropdown-item" href="index.php?page=data-privacy"><i class="fas fa-user-shield fa-menu"></i>Data Privacy</a>
               </div>
            </li>
         </ul>
      </div>
   </nav>

</div>
