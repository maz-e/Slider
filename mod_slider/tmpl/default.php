<?php
// No direct access
defined('_JEXEC') or die;
?>
<div class="slider fullscreen">
   <ul class="slides">
      <?php for ($i=1; $i <= 6 ; $i++) : ?>
         <?php if($params->get("show_slide_$i") == 1) : ?>
            <li>
               <img src="<?php echo $params->get("imageslider_$i"); ?>" alt="<?php echo $params->get("alt_text_$i"); ?>" />
               <div class="caption <?php echo $params->get("text_direction_$i"); ?>">
                  <?php if($params->get("url_slide_$i")) : ?>
                     <a href="<?php echo $params->get("url_slide_$i"); ?>">
                  <?php endif; ?>
                     <h3 class="mega <?php echo $params->get("color_title_$i"); ?>-text">
                        <?php echo $params->get("title_$i"); ?>
                     </h3>
                  <?php if($params->get("url_slide_$i")) : ?>
                     </a>
                  <?php endif; ?>
                  <?php
                  $mode = $params->get("color_slogan_$i",'light');
                  switch ($mode) {
                     case 'dark':
                        echo '<h5 class="mega light grey-text text-darken-4">';
                        break;
                     case 'light':
                     default:
                        echo '<h5 class="mega light grey-text text-lighten-5">';
                        break;
                  } ?>
                     <?php echo $params->get("slogan_$i"); ?>
                  </h5>
               </div>
            </li>
         <?php endif; ?>
      <?php endfor; ?>
   </ul>
</div>
