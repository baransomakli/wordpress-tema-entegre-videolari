<?php 

// Header Çağırma:
<?php get_header(); ?>
// Footer Çağırma:
<?php get_footer(); ?>
// Karakter Kodlaması
<?php bloginfo( 'charset' ); ?>
//Blog Adı
<?php bloginfo('name'); ?>
//Blog Adresi:
<?php bloginfo('url'); ?>
//Title
<?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>
//Tema Yolu
<?php bloginfo('template_url'); ?>
//Stil Dosyası
<?php bloginfo('stylesheet_url'); ?>
//Menü Oluşturma
<?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
//Menü Oluşturma Functions.php
add_theme_support('menus');
register_nav_menus(array(
 'menu' => 'Header Menü'
));


?>
