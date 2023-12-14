<?php
/*
Template Name: О нас
*/
get_header();
get_template_part( 'template-parts/content', 'head' );
?>

<div class="page container">
    <div class="page__col">
        <div class="page__left">
        <div class="page__img">
        <?php 
			if($themesetting['onas-url']) { ?>
            <img src="<?php echo $themesetting['onas-url']['url'] ?>" alt="<?php bloginfo('name'); ?>">
            <?php } ?>
        </div>
    </div>
        <div class="page__text">
            <p>
            <?php 
			if($themesetting['onastext']) { 
                echo $themesetting['onastext'];
                 } ?>
            </p>
        </div>
    </div>
</div>
<?php
get_footer();