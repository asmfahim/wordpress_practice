<?php
/**
 * Single post template file
 * 
 *@package Boss
 */
get_header();
?>

    <div id="primary">
        <main id="main" class="site-main mt-3" role="main">
            <?php
                if(have_posts(  )) :
                    ?>
                        <div class="container">
                            <?php
                                if( is_home(  ) && ! is_front_page(  ) ){
                                    ?>
                                        <div class="mb-5">
                                            <h1 class="page-title sr-only sr-only-focusable">
                                                <?php single_post_title( ); ?>
                                            </h1>
                                        </div>
                                    <?php
                                }
                                
                                while (have_posts(  ) ): the_post(  );  

                                    get_template_part( 'template-parts/content' );

                                endwhile;
                            ?>
                        </div>
                    <?php 
                    else :
                        get_template_part( 'template-parts/content-none' );
                endif; 
            ?>
        </main>
    </div>
   
<?php 
get_footer( ); 