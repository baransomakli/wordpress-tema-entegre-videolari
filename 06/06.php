//sidebar.php yazılacak kodlar
<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
Bileşen Eklenmedi
<?php endif; ?>
</ul>

//Functions.php yazılacak kodlar 
register_sidebars(1, array('name'=>'sidebar'));
//Sidebar.php Çağırma Kodu:
<?php get_sidebar(); ?>