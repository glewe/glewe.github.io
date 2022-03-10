<?php
/**
 * footer.php
 *
 * @package LeweSite
 * @version 0.2.000
 * @author George Lewe (http://www.lewe.com)
 * @copyright Copyright (c) 2019 by Lewe.com
 */

if (!defined('VALID_ROOT')) header('Location: index.php');
?>

<!-- ==================================================================== 
FOOTER 
-->
<div class="spacer-80"></div>
<div class="<?=FOOTER_LAYOUT?>">

   <footer>
      <div class="row">
         <div class="col">
            &copy; <?=date("Y")?> by <a href="http://www.lewe.com"><?=SITE_NAME?></a>
         </div>
         <div class="col">
            <a href="index.php">Home</a><br>
            <a href="index.php?page=about">About</a>
         </div>
         <div class="col text-right">
         </div>
      </div>
   </footer>

</div>

<script>
/**
   * Back to Top Icon
   * Only enable if the document has a long scroll bar
   * Note the window height + offset
*/
$(document).ready(function(){
   $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
         $('#back-to-top').fadeIn();
      } else {
         $('#back-to-top').fadeOut();
      }
   });
   // scroll body to 0px on click
   $('#back-to-top').click(function () {
      $('body,html').animate({
         scrollTop: 0
      }, 400);
      return false;
   });
});
</script>

<!-- Back to Top -->
<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

   </body>
</html>
