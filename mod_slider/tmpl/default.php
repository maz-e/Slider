<?php
// No direct access
defined('_JEXEC') or die;
?>
<div class="slider fullscreen">
   <ul class="slides">
      <?php for ($i=0; $i < 6 ; $i++) : ?>
         <?php if($params->get("show_slide_$i") == 1) : ?>
            <li>
               <img src="<?php echo $params->get("imageslider_$i"); ?>" alt="<?php ?>" />
               <div class="caption <?php ?> right-align">
                  <h3 class="mega red-text"><?php echo $params->get("title_$i"); ?></h3>
                  <h5 class="mega light grey-text text-lighten-5"><?php echo $params->get("slogan_$i"); ?></h5>
               </div>
            </li>
         <?php endif; ?>
      <?php endfor; ?>
   </ul>
</div>
