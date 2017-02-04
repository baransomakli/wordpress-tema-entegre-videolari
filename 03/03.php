//While Döngüsü Başlangıç
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
//While Döngüsü Bitiş
<?php endwhile; else: ?>
 
<?php _e('Sonuç Bulunamadı.'); ?>
 
<?php endif; ?>
//Yazı Kategorisi
<?php the_category(', ,') ?>
//Yazı Başlığı
<?php the_title(); ?>
//Yazı Adresi
<?php the_permalink(); ?>
//Thumbnail
<?php if (has_post_thumbnail()) { the_post_thumbnail('anasayfa',array('class'=>'makale-resim'));
 }
 else{
 ?>
 <img src="<?php bloginfo("template_url"); ?>/img/yoksa.jpg" alt="Yazı Resmi" height="155" width="265">
 <?php } ?>
//Thumbnail Funtions (functions.php yazılacak)
add_theme_support( 'post-thumbnails' );
add_image_size( 'anasayfa', 155, 265, true );
//The Excerpt
<?php the_excerpt(); ?>
The Exceprt Functions (functions.php yazılacak)
function new_excerpt_length($length) {
return 12;
}
add_filter('excerpt_length', 'new_excerpt_length');
//Yazı Tarihi
<?php the_time('d F Y'); ?>
