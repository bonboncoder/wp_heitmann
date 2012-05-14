<?php
/*
Template Name: sedcard
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $sedcard_infos = get_posts('category=3&numberposts=-1&order=ASC');
            foreach($sedcard_infos as $post) : setup_postdata($post); ?>
            <div class="sedcard_row">
                <div class="sedcard_title"><?php the_title(); ?></div>
                <div class="sedcard_entry">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php endforeach; ?>
            <div><a href="http://philippalfonsheitmann.de/wp-content/uploads/2010/10/Sedcard_Philipp_Alfons_Heitmann.pdf" title="Sedcard Philipp Alfons Heitmann" target="_blank">download sedcard</a></div>
            
        </div><!-- maincontent -->
        
        <div id="sidebar">
            
            <?php get_sidebar(); ?>
            
        </div><!-- sidebar -->
        
<?php get_footer() ?>
<!-- end sedcard.php -->