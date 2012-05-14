<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="imagecontent">
            
            <div id="show_image">
                <div>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php echo wp_get_attachment_image( $post->ID, 'large' ); ?>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
            <div id="imagetitle"><?php the_title(); ?></div>
            <?php echo do_shortcode('[gallery id='.$post->post_parent.' orderby="ID" order="DESC"]'); ?>

        </div><!-- maincontent -->

        
        <div id="sidebar">
            
            <?php get_sidebar(); ?>
            
        </div><!-- sidebar -->
        
<?php get_footer() ?>
<!-- end index.php -->