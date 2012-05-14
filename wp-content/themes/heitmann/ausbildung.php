<?php
/*
Template Name: ausbildung
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $ausbildung_infos = get_posts('category=4&numberposts=-1&order=ASC&orderby=title');
            $numberOfPosts=0;
            $postCounter=0;
            foreach($ausbildung_infos as $post) : setup_postdata($post);
                $numberOfPosts++;
            endforeach;
            foreach($ausbildung_infos as $post) : setup_postdata($post); 
            $postCounter++;
            if($postCounter==$numberOfPosts) { ?>
            <div>
            <?php } else { ?>
            <div class="sedcard_row">
            <?php } ?>
                <div class="ref_title"><?php the_title(); ?></div>
                <div class="sedcard_entry">
                    <?php $aktivitaet = __(apply_filters(' ', _(get_post_meta($post->ID, 'Ausbildung_Aktivität', true))));
                    //get_post_meta($post->ID, "Ausbildung_Aktivität", $single=true);
                            $referenz = __(apply_filters(' ', _(get_post_meta($post->ID, 'Ausbildung_Referenz', true))));
                    //get_post_meta($post->ID, "Ausbildung_Referenz", $single=true);
                            $ort = __(apply_filters(' ', _(get_post_meta($post->ID, 'Ausbildung_Ort', true))));
                    //get_post_meta($post->ID, "Ausbildung_Ort", $single=true);
                            $eintrag = "";
                            if ($aktivitaet != "") {
                                $eintrag = $eintrag.$aktivitaet."<br>";
                            }
                            if ($referenz != "") {
                                $eintrag = $eintrag."<span class=\"entry_bold\">".$referenz."</span><br>";
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