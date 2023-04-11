<?php 
/**
 * Content part
 * 
 * @package Boss
 */

?>

<article id="post-<?php the_ID(  ); ?>" <?php post_class( 'mb-5' ); ?> >
    <?php
        get_template_part( 'template-parts/components/blog/entry-header' );
        get_template_part( 'template-parts/components/blog/entry-meta' );
        get_template_part( 'template-parts/components/blog/entry-content' );
        get_template_part( 'template-parts/components/blog/entry-footer' );
    ?>
</article>







<!-- <h4><?php the_title( ); ?></h4>
<div><?php the_excerpt(  ); ?> </div> -->