<!DOCTYPE html>
<html lang="de">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    
		<?php get_template_part('bindings'); ?>

		<?php wp_head(); #Template-Hook ?>


    <style>
    <? if ($redux_solawi['opt-switch-typoheadline'] != '1'){ ?>
      @import url(https://fonts.googleapis.com/css?family=Coustard);
      .typo-head {
          font-family: 'Coustard', serif;
      }
    <?php } ?>

    <? if ($redux_solawi['opt-switch-typoparagraph'] != '1'){ ?>
      @import url(https://fonts.googleapis.com/css?family=Open+Sans);
      .typo-para {
          font-family: 'Open Sans', sans-serif;
      }
    <?php } ?>

    <? if ($redux_solawi['opt-switch-biglogo'] != '1'){ ?>
      .logo-big {
        font-family: 'Glyphicons Halflings';
        font-size: 20vh;
      }
      .logo-big:before {
        content: "\e239";
      }
    <?php } ?>
    
    </style>
	</head>
	<body>