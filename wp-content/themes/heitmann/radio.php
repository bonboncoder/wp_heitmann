<?php
/*
Template Name: radio
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $radio_infos = get_posts('category=8&numberposts=-1&order=DSC&orderby=title');
            $numberOfPosts=0;
            $postCounter=0;
            foreach($radio_infos as $post) : setup_postdata($post);
                $numberOfPosts++;
            endforeach;
            if (qtrans_getLanguage() == 'en') {
                $regieby = "DIRECTED BY";
            } else {
                $regieby = "REGIE";
            }
            foreach($radio_infos as $post) : setup_postdata($post); 
            $postCounter++;
            if($postCounter==$numberOfPosts) { ?>
            <div>
            <?php } else { ?>
            <div class="sedcard_row">
            <?php } ?>
                <div class="ref_title"><?php the_title(); ?></div>
                <div class="sedcard_entry">
                    <?php $aktivitaet = __(apply_filters(' ', _(get_post_meta($post->ID, 'Radio_Aktivität', true))));
                    //get_post_meta($post->ID, "Radio_Aktivität", $single=true);
                            $regie = __(apply_filters(' ', _(get_post_meta($post->ID, 'Radio_Regie', true))));
                    //get_post_meta($post->ID, "Radio_Regie", $single=true);
                            $sender = __(apply_filters(' ', _(get_post_meta($post->ID, 'Radio_Sender', true))));
                    //get_post_meta($post->ID, "Radio_Sender", $single=true);
                            $eintrag = "";
                            if ($aktivitaet != "") {
                                $eintrag = $eintrag."<span class=\"entry_bold\">".$aktivitaet."</span><br>";
                            }
                            if ($regie != "") {
                                $eintrag = $eintrag." ".$regieby." <span class=\"entry_bold\">".$regie."</span><br>";
                            }
                            if ($sender != "") {
                                $eintrag = $eintrag."<span class=\"entry_italic\">".$sender."</span> ";
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