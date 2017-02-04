//Bileşen Yapımı (functions.php yazılacak kodlar)
<?php
/*
 * Plugin Name: Kategori Bileşeni
 * Plugin URI: http://baransomakli.com
 * Description: Bu bileşen ile çift kategori oluşturacaksınız.
 * Version: 1.0
 * Author: Baran Somaklı
 * Author URI: http://baransomakli.com
 */
  
add_action( 'widgets_init', 'bs_kategori_widgets' );
  
function bs_kategori_widgets() {
 register_widget( 'bs_kategori_widget' );
}
  
class bs_kategori_widget extends WP_Widget {
  
function bs_kategori_widget() {
  
 /* Widget settings */
 $widget_ops = array( 'classname' => 'widget_kategori', 'description' => __('Bu bileşen ile kategori da ki abone ol butonu yapabilirsiniz.', 'bs') );
  
/* Create the widget */
 $this->WP_Widget( 'bs_kategori_widget', __('Çift Kategori Bileşeni', 'bs'), $widget_ops );
 }
  
function widget( $args, $instance ) {
  
 ?> 
       ...BİLEŞEN KODLARI BURAYA YAZILACAK...
 
 <?php
 echo $after_widget;
 }
  
function update( $new_instance, $old_instance ) {$instance = array();return $instance;}
  
function form( $instance ) {
  
 $instance = wp_parse_args( (array) $instance, $defaults ); ?>
  
 <p>
 Bileşenin Ayalarını Tema Panelinden Yapınız!
 </p>
  <?php
 }
}

//Kategori Listeleme
<?php wp_list_cats('title_li='); ?>s