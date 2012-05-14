<?php
/*
Template Name: musik
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $musik_infos = get_posts('category=9&numberposts=-1&order=DSC&orderby=title');
            $numberOfPosts=0;
            $postCounter=0;
            foreach($musik_infos as $post) : setup_postdata($post);
                $numberOfPosts++;
            endforeach;
            foreach($musik_infos as $post) : setup_postdata($post); 
            $postCounter++;
            if($postCounter==$numberOfPosts) { ?>
            <div>
            <?php } else { ?>
            <div class="sedcard_row">
            <?php } ?>
                <div class="ref_title"><?php the_title(); ?></div>
                <div class="sedcard_entry">
                    <?php $gruppe = __(apply_filters(' ', _(get_post_meta($post->ID, 'Musik_Gruppe', true))));
                    //get_post_meta($post->ID, "Musik_Gruppe", $single=true);
                            $musiktitel = __(apply_filters(' ', _(get_post_meta($post->ID, 'Musik_Titel', true))));
                    //get_post_meta($post->ID, "Musik_Titel", $single=true);
                            $ort = __(apply_filters(' ', _(get_post_meta($post->ID, 'Musik_Ort', true))));
                    //get_post_meta($post->ID, "Musik_Ort", $single=true);
                            $eintrag = "";
                            if ($gruppe != "") {
                                $eintrag = $eintrag."<span class=\"entry_bold\">".$gruppe."</span><br>";
                            }
                            if ($musiktitel != "") {
                                $eintrag = $eintrag."<span class=\"entry_bold\">".$musiktitel."</span><br>";
                            }
                            if ($ort != "") {
                                $eintrag = $eintrag."<span class=\"entry_italic\">".$ort."</span> ";
                            }
                            echo $eintrag;
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