<?php
/*
Template Name: showreels
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>

        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $showreels = get_posts('category=10&numberposts=-1&order=DSC&orderby=ID');
            $numberOfPosts=0;
            $postCounter=0;
            foreach($showreels as $post) : setup_postdata($post);
                $numberOfPosts++;
            endforeach;
            foreach($showreels as $post) : setup_postdata($post); 
            $postCounter++;
            if($postCounter==$numberOfPosts) { ?>
            <div>
            <?php } else { ?>
            <div class="sedcard_row">
            <?php } ?>
                    <?php echo the_content(); ?>
            </div>
             <?php endforeach; ?>
            
        </div><!-- maincontent -->
        
        <div id="sidebar">
            
            <?php get_sidebar(); ?>
            
        </div><!-- sidebar -->

<!-- end index.php -->
<?php get_footer() ?>