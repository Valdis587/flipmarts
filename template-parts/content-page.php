<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flipmarts
 */

?>

<div id="post-<?php the_ID(); ?>">


	<?php flipmarts_post_thumbnail(); 


		the_content(); ?>

	
</div><!-- #post-<?php the_ID(); ?> -->
