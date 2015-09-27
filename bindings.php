<?php #Bootstrap 3 ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo get_template_directory_uri(); ?>/css/jasny-bootstrap.min.css" rel="stylesheet" />

<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" />

<?php #Less Styles - Weitere Less-Files werden über general.less eingebunden ?>
<?php wp_enqueue_style('general', get_template_directory_uri().'/less/general.less'); ?>