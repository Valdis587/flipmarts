<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head' );
?>
 <div class="page container">
    <div class="page__col">
        <div class="page__contacts">
            <ul class="page__contacts-list">
            <?php get_template_part( 'template-parts/content', 'contact' ); ?>   
            </ul>
        </div>
        <div class="page__map">
        <?php 
			if($themesetting['map']) { 
                echo $themesetting['map'];
                 } ?>
        </div>
    </div>

<?php
get_footer();