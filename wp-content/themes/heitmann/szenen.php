<?php
/*
Template Name: szenen
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="imagecontent">
            
            <div id="show_image">
                <div>
                 <?php if (have_posts()): while (have_posts()) : the_post();
                 $attachments = get_children( array(
                                    'post_parent'    => '30',
                                    'post_type'      => 'attachment',
                                    'numberposts'    => 1, // show all -1
                                    'post_status'    => 'inherit',
                                    'post_mime_type' => 'image',
                                    'order'          => 'DESC',
                                    'orderby'        => 'ID DESC'
                                    ) );
                 foreach ( $attachments as $attachment_id => $attachment ) {
                     echo wp_get_attachment_image( $attachment_id, 'large' );
                     $attitle = apply_filters( 'the_title', $attachment->post_title );
                 }
                 endwhile;
                 endif; ?>
                </div>
            </div>
            
            <div id="imagetitle"><?php echo $attitle; ?></div>
            <?php echo do_shortcode('[gallery id=30 orderby="ID" order="DESC"]'); ?>
            
        </div><!-- maincontent -->
        
        <div id="sidebar">
            
            <?php get_sidebar(); ?>
            
        </div><!-- sidebar -->
        
<?php get_footer() ?>
<!-- end sedcard.php -->