<?php
/**
 * Template Name: Homepage
 *
 * Description: Il template di pagina per la mia home page
 *
 * @package Aino
 * @since Aino 0.0.5
 */

get_header(); ?> <!-- vatti a prendere la testata e mostrala -->

<!-- quello che segue è il LOOP -->

<!-- finché (while) hai post, mostrali, vai a prendere la parte del template dentro alla cartella "template-parts", dentro alla cartella "page", col file che si chiama "content-page.php" e poi finisci (endwhile) -->
<?php
while (
	have_posts() ) :
	the_post();

	get_template_part( 'template-parts/page/content', 'homepage' );

endwhile; // End of the loop.
?>


<!-- vatti a prendere il piede e mostralo -->
<?php
get_footer(); 
