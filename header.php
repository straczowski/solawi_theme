<!DOCTYPE html>
<html lang="de">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    
		<?php get_template_part('bindings'); ?>

		<?php wp_head(); #Template-Hook ?>

    <?
      $redux_solawi = get_option('redux_solawi'); 
    ?>

    <style>
    <?php if ($redux_solawi['opt-switch-typoheadline'] != '1'){ ?>
      @import url(https://fonts.googleapis.com/css?family=Coustard);
      .typo-head {
          font-family: 'Coustard', serif;
      }
    <?php } ?>

    <?php #### CSS For Typography #### ?>
    <?php if ($redux_solawi['opt-switch-typoparagraph'] != '1'){ ?>
      @import url(https://fonts.googleapis.com/css?family=Open+Sans);
      .typo-para {
          font-family: 'Open Sans', sans-serif;
      }
    <?php } ?>

    <?php #### CSS Color Code #### ?>
      .color {
        color: <?php echo $redux_solawi['opt-color-alpha'] ?>;
        background-color: <?php echo $redux_solawi['opt-color-beta'] ?>;
      }
      .color-inverted {
        color: <?php echo $redux_solawi['opt-color-beta'] ?>;
        background-color: <?php echo $redux_solawi['opt-color-alpha'] ?>;        
      }
      .color-type {
        color: <?php echo $redux_solawi['opt-color-alpha'] ?>;
      }
      .color-type-inverted {
        color: <?php echo $redux_solawi['opt-color-beta'] ?>;       
      }
      .color-background {
        background-color: <?php echo $redux_solawi['opt-color-beta'] ?>;
      }
      .color-background-inverted {
        background-color: <?php echo $redux_solawi['opt-color-alpha'] ?>;       
      }
      .menu-item {
        border-bottom: 1px solid <?php echo $redux_solawi['opt-color-alpha'] ?>;
        padding: 8px 16px;
        transition: all 0.5s ease;
      }
      .menu-item:hover{
        color: <?php echo $redux_solawi['opt-color-beta'] ?>;
        background-color: <?php echo $redux_solawi['opt-color-alpha'] ?>;
        padding: 16px 16px;
      }
      .offcanvas a:hover,
      .offcanvas a:visited,
      .offcanvas a:focus,
      .offcanvas a:active {
        color: <?php echo $redux_solawi['opt-color-beta'] ?>;
      }
      a.color-type,
      a.color-type:hover,
      a.color-type:visited,
      a.color-type:focus,
      a.color-type:active {
        color: <?php echo $redux_solawi['opt-color-alpha'] ?>;
      }
      a.color-type-inverted,
      a.color-type-inverted:hover,
      a.color-type-inverted:visited,
      a.color-type-inverted:focus,
      a.color-type-inverted:active {
        color: <?php echo $redux_solawi['opt-color-beta'] ?>;       
      }
    
    </style>
	</head>
	<body class="color-type">