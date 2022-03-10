<?php
/**
 * home.php
 *
 * @package LeweSite
 * @version 0.2.000
 * @author George Lewe (http://www.lewe.com)
 * @copyright Copyright (c) 2019 by Lewe.com
 */

if (!defined('VALID_ROOT')) header('Location: index.php');

include ('carousel.php');
?>

<!-- ==================================================================== 
CONTENT - HOME 
-->
<div class="spacer-40"></div>
<div class="<?=CONTENT_LAYOUT?>">

   <div class="row">
      <div class="col">
         <h2>Welcome to LeweSite</h2>
         <p class="small italic">Written by George, 2019-10-03</p>
         <img src="images/logo/logo-128.png" alt="" class="img_floatleft" style="margin-right: 24px;">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel lobortis lectus, ut lacinia dui. 
         Curabitur ut tellus justo. Sed ornare interdum metus id porta. Fusce et scelerisque leo. Sed posuere pulvinar 
         tortor et elementum. Proin velit augue, ornare sit amet arcu feugiat, rutrum rutrum leo. Proin consectetur 
         nunc eu ante ultricies, tempor pulvinar ex ultricies. Nunc quis leo nunc. Ut a vestibulum mi, et placerat erat. 
         Maecenas pellentesque fringilla dui quis mollis. Curabitur eget tellus odio. Mauris at venenatis ipsum, quis 
         rutrum ligula. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla 
         vel lectus a augue interdum porttitor. Aliquam semper consectetur libero eu finibus.</p>
      </div>
   </div>
   <p>&nbsp;</p>
   
   <div class="row">
      <div class="col">
         <h2>Article 1</h2>
         <img src="images/logo/logo-64.png" alt="" class="img_floatleft" style="margin-right: 24px;">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel lobortis lectus, ut lacinia dui. 
         Curabitur ut tellus justo. Sed ornare interdum metus id porta. Fusce et scelerisque leo. Sed posuere pulvinar 
         tortor et elementum. Proin velit augue, ornare sit amet arcu feugiat, rutrum rutrum leo.</p> 
         <a class="btn btn-info" href="index.php?page=game">Read more...</a>
      </div>
      
      <div class="col">
         <h2>Article 2</h2>
         <img src="images/logo/logo-64.png" alt="" class="img_floatleft" style="margin-right: 24px;">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel lobortis lectus, ut lacinia dui. 
         Curabitur ut tellus justo. Sed ornare interdum metus id porta. Fusce et scelerisque leo. Sed posuere pulvinar 
         tortor et elementum. Proin velit augue, ornare sit amet arcu feugiat, rutrum rutrum leo.</p> 
         <a class="btn btn-info" href="index.php?page=game">Read more...</a>
      </div>
                  
   </div>

</div>
