<?php
/*
Template Name: buehne
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $buehne_all = get_posts('category=6&numberposts=-1&orderby=title&order=ASC');
            foreach($buehne_all as $post) : setup_postdata($post); ?>
            <div class="sedcard_row">
                <div class="ref_title"><?php the_title(); ?></div>
                <div class="sedcard_entry">
                    <?php $allgemein = __(apply_filters(' ', _(get_post_meta($post->ID, "Bühne_Allgemein", $single=true))));
                    //get_post_meta($post->ID, "Bühne_Allgemein", $single=true);
                            $ort = __(apply_filters(' ', _(get_post_meta($post->ID, "Bühne_Ort", $single=true))));
                    //get_post_meta($post->ID, "Bühne_Ort", $single=true);
                            $eintrag = "";
                            if ($allgemein != "") {
                                $eintrag = $eintrag."<span>".$allgemein."</span><br>";
                            }
                            if ($ort != "") {
                                $eintrag = $eintrag."<span class=\"entry_italic\">".$ort."</span> ";
                            }
                            echo $eintrag;
                            the_content();
                    ?>
                </div>
            </div>
            <?php endforeach;
            $buehne_infos = get_posts('category=5&numberposts=-1&orderby=title&order=DESC');
            $numberOfPosts=0;
            $postCounter=0;
            foreach($buehne_infos as $post) : setup_postdata($post);
                $numberOfPosts++;
            endforeach;
            if (qtrans_getLanguage() == 'en') {
                $vonof = "OF";
                $regieby = "DIRECTED BY";
            } else {
                $vonof = "VON";
                $regieby = "REGIE";
            }
            foreach($buehne_infos as $post) : setup_postdata($post); 
            $postCounter++;
            if($postCounter==$numberOfPosts) { ?>
            <div>
            <?php } else { ?>
            <div class="sedcard_row">
            <?php } ?>
                <div class="ref_title"><?php the_title(); ?></div>
                <div class="sedcard_entry">
                    <?php $rolle = __(apply_filters(' ', _(get_post_meta($post->ID, 'Bühne_Rolle', true))));
                    //get_post_meta($post->ID, "Bühne_Rolle", $single=true);
                            $autor = __(apply_filters(' ', _(get_post_meta($post->ID, 'Bühne_Autor', true))));
                    //get_post_meta($post->ID, "Bühne_Autor", $single=true);
                            $regie = __(apply_filters(' ', _(get_post_meta($post->ID, 'Bühne_Regie', true))));
                    //get_post_meta($post->ID, "Bühne_Regie", $single=true);
                            $stueck = __(apply_filters(' ', _(get_post_meta($post->ID, 'Bühne_Stück', true))));
                    //get_post_meta($post->ID, "Bühne_Stück", $single=true);
                            $ort = __(apply_filters(' ', _(get_post_meta($post->ID, 'Bühne_Ort', true))));
                    //get_post_meta($post->ID, "Bühne_Ort", $single=true);
                            $eintrag = "";
                            if ($rolle != "") {
                                $eintrag = $eintrag."<span class=\"entry_bold\">".$rolle."</span> ";
                            }
                            if ($stueck != "") {
                                $eintrag = $eintrag."IN <span class=\"entry_bold\">".$stueck."</span> ";
                            }
                            if ($autor != "") {
                                $eintrag = $eintrag.$vonof." <span class=\"entry_bold\">".$autor."</span> ";
                            }
                            if ($regie != "") {
                                $eintrag = $eintrag.$regieby." <span class=\"entry_bold\">".$regie."</span>";
                            }
                            if ($ort != "") {
                                $eintrag = $eintrag."<br><span class=\"entry_italic\">".$ort."</span> ";
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