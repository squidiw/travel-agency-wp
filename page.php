<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Travel_Template
 */

get_header();
?>
	<div class="container">
		<h1><?php the_title(); ?></h1>

		<?php
			
			get_template_part( 'template-parts/content', 'default' );

			// If comments are open or we have at least one comment, load up the comment template.
			

		 // End of the loop.
		?>
	
	</div>
	<?php get_template_part( 'template-parts/content', 'book_now' ) ?>
<?php

get_footer();

