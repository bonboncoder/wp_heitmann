<span id="close_ticker"><img src="<?php bloginfo("template_url"); ?>/pics/close_window.jpg" /></span>
<div class="ticker_head">Ticker</div>
<div class="ticker_sep">//</div>
<?php
    $ausbildung_infos = get_posts('category=12&numberposts=1&order=DSC&orderby=ID');
    foreach($ausbildung_infos as $post) : setup_postdata($post); ?>
    <div class="ticker_title"><?php the_title(); ?></div>
    <br>
    <div class="ticker_entry">
        <?php 
                the_content();
        ?>
    </div>
<?php endforeach; ?>
<div class="ticker_sep_last">//</div>