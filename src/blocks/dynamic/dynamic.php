<?php

add_action('init', function(){  
   register_block_type( 'ourplugin/dynamic', array(
       // 'api_version' => 2,
       'render_callback' => function($attributes){
         ob_start(); ?>
         <h3 class=text-paragraph-frontend>Today the sky is Green</h3>
         <?php return ob_get_clean();
      }    
   ));
});
  

 
