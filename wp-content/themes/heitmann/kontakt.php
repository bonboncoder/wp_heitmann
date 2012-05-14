<?php
/*
Template Name: kontakt
 */
?>
<?php get_header(); ?>

        <div id="navi">
            
            <?php include 'navilist.php';?>
            
        </div><!-- navi -->
        
        <div id="maincontent">
            
            <?php
            $kontaktname = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Name', true))));
            //get_post_meta($post->ID, "Kontakt_Name", $single=true);
            $filmkontaktname = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Film_Name', true))));
            //get_post_meta($post->ID, "Kontakt_Film_Name", $single=true);
            $filmkontaktco = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Film_co', true))));
            //get_post_meta($post->ID, "Kontakt_Film_co", $single=true);
            $filmadresse = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Film_Adresse', true))));
            //get_post_meta($post->ID, "Kontakt_Film_Adresse", $single=true);
            $filmemail = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Film_Email', true))));
            //get_post_meta($post->ID, "Kontakt_Film_Email", $single=true);
            $filmhomepage = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Film_Homepage', true))));
            //get_post_meta($post->ID, "Kontakt_Film_Homepage", $single=true);
            $filmtel = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Film_Telefon', true))));
            //get_post_meta($post->ID, "Kontakt_Film_Telefon", $single=true);
            $theaterkontaktname = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Theater_Name', true))));
            //get_post_meta($post->ID, "Kontakt_Theater_Name", $single=true);
            $theaterkontaktco = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Theater_co', true))));
            //get_post_meta($post->ID, "Kontakt_Theater_co", $single=true);
            $theateradresse = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Theater_Adresse', true))));
            //get_post_meta($post->ID, "Kontakt_Theater_Adresse", $single=true);
            $theateremail = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Theater_Email', true))));
            //get_post_meta($post->ID, "Kontakt_Theater_Email", $single=true);
            $theaterhomepage = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Theater_Homepage', true))));
            //get_post_meta($post->ID, "Kontakt_Theater_Homepage", $single=true);
            $theatertel = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Theater_Telefon', true))));
            //get_post_meta($post->ID, "Kontakt_Theater_Telefon", $single=true);
            $kontaktemail = __(apply_filters(' ', _(get_post_meta($post->ID, 'Kontakt_Email', true))));
            //get_post_meta($post->ID, "Kontakt_Email", $single=true);
            
            if (qtrans_getLanguage() == 'en') {
                $vertretendurch = "is represented by";
            } else {
                $vertretendurch = "wird vertreten durch";
            }
            ?>
            
            <span class="kontakt_entry">
                <span class="entry_bold"><?php echo $kontaktname; ?></span><br>
                <?php echo $vertretendurch; ?><br>
                <br>
                Film<br>
                <span class="entry_bold"><?php echo $filmkontaktname; ?></span><br>
                <?php if($filmkontaktco != "") { ?>
                <span class="entry_bold"><?php echo $filmkontaktco; ?></span><br>
                <?php } ?>
                <?php echo $filmadresse; ?><br>
                <a href="mailto:<?php echo $filmemail; ?>"><?php echo $filmemail; ?></a><br>
                <?php if($filmhomepage != "") { ?>
                <a href="<?php echo $filmhomepage; ?>" target="_blank"><?php echo $filmhomepage; ?></a><br>
                <?php } ?>
                Tel: <?php echo $filmtel; ?><br>
                <br>
                Theater<br>
                <span class="entry_bold"><?php echo $theaterkontaktname; ?></span><br>
                <?php if($theaterkontaktco != "") { ?>
                <span class="entry_bold"><?php echo $theaterkontaktco; ?></span><br>
                <?php } ?>
                <?php echo $theateradresse; ?><br>
                <a href="mailto:<?php echo $theateremail; ?>"><?php echo $theateremail; ?></a><br>
                <?php if($theaterhomepage != "") { ?>
                <a href="<?php echo $theaterhomepage; ?>" target="_blank"><?php echo $theaterhomepage; ?></a><br>
                <?php } ?>
                Tel:<?php echo $theatertel; ?><br>
                <br>
                <br>
                Anfragen f&uuml;r Presse- und Bewerbungsunterlagen<br>
                <a href="mailto:<?php echo $kontaktemail; ?>"><?php echo $kontaktemail; ?></a><br>
                <br>
                <br>
            </span>
            <span>
                <span class="sedcard_title">Impressum</span><br>
                <br>
                Konzeption, Gestaltung, Code<br>
                <a href="http://bonbonbuero.de" target="_blank">Bon Bon B&uuml;ro</a><br>
                <br>
                Fotografie<br>
                <a href="#" target="_blank">Thomas Leidig</a><br>
                <br>
                <span class="kontakt_fuss"><?php the_post(); the_content(); ?></span>
            </span>    
            
        </div><!-- maincontent -->
        
        <div id="sidebar">
            
            <?php get_sidebar(); ?>
            
        </div><!-- sidebar -->
        
<?php get_footer() ?>
<!-- end sedcard.php -->