<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php session_start();
if($_POST['hs']=='TRUE') {
    $_SESSION['hideside']=$_POST['hs'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">
    <?php if(is_null($post->post_parent) || $post->ID==2 || $post->post_parent==2 || $post->post_parent==13) {?>
body {background-image: url(<?php bloginfo("template_url"); ?>/pics/background/profil.jpg)}
    <?php } elseif ($post->ID==26 || $post->post_parent==26
                            || $post->post_parent==28 || $post->post_parent==30) {?>
body {background-image: url(<?php bloginfo("template_url"); ?>/pics/background/bilder.jpg)}
    <?php } elseif ($post->ID==32) { ?>
body {background-image: url(<?php bloginfo("template_url"); ?>/pics/background/showreel.jpg)}
    <?php } elseif ($post->ID==34) { ?>
body {background-image: url(<?php bloginfo("template_url"); ?>/pics/background/news.jpg)}
    <?php } elseif ($post->ID==36) { ?>
body {background-image: url(<?php bloginfo("template_url"); ?>/pics/background/kontakt.jpg)}
    <?php } else { ?>
body {background-image: url(<?php bloginfo("template_url"); ?>/pics/background/profil.jpg)}
    <?php } ?>
    <?php if($_SESSION['hideside']=='TRUE') { ?>
#sidebar {display: none; }
    <?php } ?>
</style>

<?php wp_enqueue_script('jquery'); ?>

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/js.js"></script>

</head>
    <body <?php body_class(); ?>>
    
    <div id="lang">

        <?php include 'lang.php'; ?>

    </div>
        
    <div id="page">
 
<!-- end header.php -->