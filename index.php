<?php get_header(); ?>
  <?
    $redux_solawi = get_option('redux_solawi'); 
  ?>
  
  <!-- Content besteht eigentlich aus parts -->
  <?php get_template_part('parts/masthead'); ?>
  <?php get_template_part('parts/navigation'); ?>
  <?php get_template_part('parts/news'); ?>
  <?php get_template_part('parts/contact'); ?>

  <?php 
    echo var_dump($redux_solawi);
  ?>

<?php get_footer(); ?>