<?php
    if($post->ID==2 || $post->ID==11) { //PROFIL || SEDCARD
        echo wp_list_pages('title_li=&sort_order=ASC&sort_column=menu_order&include=2,11,13');
    } elseif ($post->ID==13 || $post->post_parent==13) { //REFERENZ
        echo wp_list_pages('title_li=&sort_order=ASC&sort_column=menu_order&include=2,11,13,15,17,19,21,24');
    } else
        echo wp_list_pages('title_li=&sort_order=ASC&sort_column=menu_order&include=2');
    if($post->ID==26 || $post->ID==28 || $post->ID==30
            || $post->post_parent==28 || $post->post_parent==30) { //BILDER || PORTRAITS || SZENEN
        echo wp_list_pages('title_li=&sort_order=ASC&sort_column=menu_order&include=26,28,30');
    } else
        echo wp_list_pages('title_li=&sort_order=ASC&sort_column=menu_order&include=26');
    echo wp_list_pages('title_li=&sort_order=ASC&sort_column=menu_order&include=32,34,36');
?>