<?php
/*
Template Name: film
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $film_infos = get_posts('category=7&numberposts=-1&order=DSC&orderby=title');
            $numberOfPosts=0;
            $postCounter=0;
            foreach($film_infos as $post) : setup_postdata($post);
                $numberOfPosts++;
            endforeach;
            if (qtrans_getLanguage() == 'en') {
                $vonof = "OF";
                $regieby = "DIRECTED BY";
            } else {
                $vonof = "VON";
                $regieby = "REGIE";
            }
            foreach($film_infos as $post) : setup_postdata($post); 
            $postCounter++;
            if($postCounter==$numberOfPosts) { ?>
            <div>
            <?php } else { ?>
            <div class="sedcard_row">
            <?php } ?>
                <div class="ref_title"><?php the_title(); ?></div>
                <div class="sedcard_entry">
                    <?php $filmtitel = __(apply_filters(' ', _(get_post_meta($post->ID, 'Film_Titel', true))));
                    //get_post_meta($post->ID, "Film_Titel", $single=true);
                            $regie = __(apply_filters(' ', _(get_post_meta($post->ID, 'Film_Regie', true))));
                    //get_post_meta($post->ID, "Film_Regie", $single=true);
                            $produktion = __(apply_filters(' ', _(get_post_meta($post->ID, 'Film_Produktion', true))));
                    //get_post_meta($post->ID, "Film_Produktion", $single=true);
                            $eintrag = "";
                            if ($filmtitel != "") {
                                $eintrag = $eintrag."<span class=\"entry_bold\">".$filmtitel."</span>";
                            }
                            if ($regie != "") {
                                $eintrag = $eintrag." ".$regieby." <span class=\"entry_bold\">".$regie."</span><br>";
                            } else {
                                $eintrag = $eintrag." ";
                            }
                            if ($produktion != "") {
                                $eintrag = $eintrag."<span class=\"entry_italic\">".$produktion."</span> ";
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