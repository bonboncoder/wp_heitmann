<?php
/*
Template Name: news
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $news = get_posts('category=11&numberposts=-1&order=DSC&orderby=ID');
            $numberOfPosts=0;
            $postCounter=0;
            foreach($news as $post) : setup_postdata($post);
                $numberOfPosts++;
            endforeach;
            foreach($news as $post) : setup_postdata($post); 
            $postCounter++;
            if($postCounter==$numberOfPosts) { ?>
            <div>
            <?php } else { ?>
            <div class="sedcard_row">
            <?php } ?>
                <div class="news_title"><?php the_title(); ?></div>
                <br>
                <div class="news_entry">
                    <?php 
                            the_content();
                    ?>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div><!-- maincontent -->
        
        <div id="sidebar">
            
            <?php get_sidebar(); ?>
            
        </div><!-- sidebar -->
        
<?php get_footer() ?>
<!-- end sedcard.php -->