<?php
/**
 * Main template file
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
                             ?>


                            <div class="row">
                            <?php
                                $index = 0; //index
                                $no_of_col = 3;
                                while (have_posts(  ) ): the_post(  ); 

                                if(0 === $index % $no_of_col){
                                    ?>
                                        <div class=" col-lg-4 col-md-6 col-sm-12">
                                            
                                    <?php
                                         }
                                         
                                         get_template_part( 'template-parts/content' );

                                        $index +=1;

                                    if(0 !== $index && 0 === $index % $no_of_col ){
                                        ?>
                                        </div>
                                        <?php
                                    }
                                endwhile;
                            ?>
                            </div>
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