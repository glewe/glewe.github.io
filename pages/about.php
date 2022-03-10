<?php
/**
 * about.php
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
ABOUT 
-->
<div class="spacer-40"></div>
<div class="<?=CONTENT_LAYOUT?>">

   <div class="row">
      <div class="col">
         <h2>About <?=SITE_NAME?></h2>

         <div class="spacer-20"></div>
         <h3>Purpose</h3>
         <p>The purpose of <?=SITE_NAME?> is to provide a convenient way to <?=SITE_PURPOSE?>. This website is a <?=SITE_COMMERCIAL?> service.</p>

         <div class="spacer-20"></div>
         <h3>Content</h3>
         <p>The content of <?=SITE_NAME?> was carefully created and prepared. Where this is not the case it is properly indicated. 
         If you feel that any material is used inappropriately, please let the owner of the website know (see Contact section below).</p>

         <div class="spacer-20"></div>
         <h3>Links</h3>
         <p>All links on <?=SITE_NAME?> are provided as a convenience and for informational purposes only; 
         they do not constitute an endorsement or an approval by <?=SITE_NAME?> of any of the products, services or opinions of the corporation or organization or individual. 
         <?=SITE_NAME?> bears no responsibility for the accuracy, legality or content of the external site or for that of subsequent links. 
         Contact the external site for answers to questions regarding its content.</p>

         <div class="spacer-20"></div>
         <h3>Copyright</h3>
         <p>None of the content of <?=SITE_NAME?>, as a whole or in parts may be reproduced, copied or reused in any form or by any means, electronic or mechanical, for any purpose, 
            without the express written permission of George Lewe.</p>

         <div class="spacer-20"></div>
         <h3>Contact</h3>
         <p>You contact the owner of this website via email at <a href="mailto:<?=SITE_OWNER_EMAIL?>??Subject=<?=SITE_NAME?>%20Inquiry"><?=SITE_OWNER_EMAIL?></a>.</p>

         <div class="spacer-20"></div>
         <h3>Credits go to:</h3>
         <ul>
            <li>Bootstrap Team for <a href="http://getbootstrap.com/" target="_blank">Bootstrap Framework</a></li>
            <li>Thomas Park for <a href="http://bootswatch.com/" target="_blank">Bootswatch Themes</a></li>
            <li>jQuery Team for <a href="http://www.jquery.com/" target="_blank">jQuery</a> and <a href="http://www.jqueryui.com/" target="_blank">jQuery UI</a></li>
            <li>David Vignoni for <a href="http://www.icon-king.com/projects/nuvola/" target="_blank">Nuvola Icons</a></li>
            <li>Microsoft for <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a></li>
         </ul>
      </div>

   </div>

</div>

