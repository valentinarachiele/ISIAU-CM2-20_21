// il punto esclamativo nella riga di codice che segue sta per "NOT". Quindi, traducendolo in italiano: "Se NON ti trovi nella pagina Tal dei tali, allora mostra il menu"
<?php if ( ! is_page('Titolo della pagina') ) {?>

//qui ci va il codice che genera il menu
wp_nav_menu( array(
    'menu' => 'nomedelmenu'
) );

<?php } ?>
