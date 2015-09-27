<?php $redux_solawi = get_option('redux_solawi'); ?>
<? if ($redux_solawi['opt-switch-headerpicture'] == '1'){ ?>
  <section id="masthead" class="container typo-head">
    <div class="row">
      <div id="masthead__logo" class="col-md-12 col-sm-12 col-xs-12">
        <div class="logo-big img-responsive"></div>
      </div>
      <div id="masthead__title" class="col-md-12 col-sm-12 col-xs-12">
        <?php bloginfo( 'name' ); ?>
      </div>      
      <div id="masthead__shortnav" class="col-md-12 col-sm-12 col-xs-12">
        <?php if ($redux_solawi['opt-switch-news'] == '1'){ ?>
          <a href="#news">Neuigkeiten</a>
        <?php } ?>
        <?php if ($redux_solawi['opt-switch-contact'] == '1'){ ?>
          <a href="#contact">Kontakt</a>
        <?php } ?>
      </div>
      <div id="masthead__button" class="col-md-12 col-sm-12 col-xs-12">
        <a href="#navigation" class="solawi-btn--white">Zur Website</a>
      </div>
    </div>
  </section>
<?php } ?>
