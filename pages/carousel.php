<?php
/**
 * carousel.php
 *
 * @package LeweSite
 * @version 0.2.000
 * @author George Lewe (http://www.lewe.com)
 * @copyright Copyright (c) 2019 by Lewe.com
 */
if (!defined('VALID_ROOT')) header('Location: index.php');
?>

<!-- ==================================================================== 
CAROUSEL
-->
<div class="<?=CAROUSEL_LAYOUT?>">

   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src="images/slides/01.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <div class="carousel-caption-header">First slide label</div>
               <div class="carousel-caption-text">Nulla vitae elit libero, a pharetra augue mollis interdum.</div>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/slides/02.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <div class="carousel-caption-header">Second slide label</div>
               <div class="carousel-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/slides/03.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <div class="carousel-caption-header">Third slide label</div>
               <div class="carousel-caption-text">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</div>
            </div>
         </div>
         <div class="carousel-item">
            <img src="images/slides/04.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <div class="carousel-caption-header">Third slide label</div>
               <div class="carousel-caption-text">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</div>
            </div>
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>

</div>
