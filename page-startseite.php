<?php
/*
 * Template Name: Startseite
 */
?>
<?php get_header(); ?>
  <?
    $redux_solawi = get_option('redux_solawi'); 
  ?>
  
  <?php get_template_part('parts/masthead'); ?>
  <?php get_template_part('parts/navigation'); ?>
  <?php get_template_part('parts/content'); ?>
  <?php get_template_part('parts/contact'); ?>
  <?php get_template_part('parts/news'); ?>

<?php get_footer(); ?>