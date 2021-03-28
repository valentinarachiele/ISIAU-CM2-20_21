<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package Aino
 */

?>

<!-- se è un template di pagina che si chiama "pagina-diversa.php" -->
<!-- <?php if(is_page_template( 'pagina-diversa.php' )) {?>
	
<?php }?> -->

<?php if(is_page_template( 'pagina-diversa.php' )) : ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php else: ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php endif ?>
	<header class="entry-header push-center outer-margins">

<?php if(is_page_template( 'pagina-diversa.php' )) : ?>
 <!-- non fare nulla -->
<?php else: ?>
 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<?php endif ?>

		<?php aino_edit_link(); ?>

	</header><!-- .entry-header -->
	<div class="entry-content col push-center default-margins">
		<?php
			the_content();
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aino' ),
					'after'  => '</div>',
				)
			);
			?>
	</div><!-- .entry-content -->

<?php if(is_page_template( 'pagina-diversa.php' )) : ?>
	</div>
<?php else: ?>
</article><!-- #post-## -->
<?php endif ?>