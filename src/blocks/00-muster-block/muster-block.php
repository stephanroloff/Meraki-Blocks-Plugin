<?php

add_action('init', function(){    
    register_block_type( 'ourplugin/muster-block', array(
        // 'api_version' => 2,
        'render_callback' => function($attributes){
            ob_start(); ?>
            <h2 class="muster-block">MUSTER BLOCK</h2>
            <?php return ob_get_clean();
        }     
    ) ); 
} );
    