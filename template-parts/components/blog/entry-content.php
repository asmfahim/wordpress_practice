<?php 
/**
 * Template for content part
 * 
 * @package  Boss
 */
?>
<div class="entry-content">
    <?php
    if(is_single(  )){
        the_content(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. */
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'boss' ),
					[
						'span' => [
							'class' => []
						]
					]
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			)
		);
    }else{
        boss_the_excerpt( 200 );
        echo boss_excerpt_more();
    }
     ?>
</div>