    <?
      $redux_solawi = get_option('redux_solawi'); 
    ?>
    <footer class="color-inverted">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">

            <?php if($redux_solawi['opt-switch-facebook'] == '1') {?>
            <div class="footer-link">
              <a href="<?php echo $redux_solawi['opt-text-facebooklink'] ?>">
                LinkFacebook
              </a>
            </div>
            <?php } ?>

            <?php if($redux_solawi['opt-switch-twitter'] == '1') {?>
            <div class="footer-link">
              <a href="<?php echo $redux_solawi['opt-text-twitterlink'] ?>">
                LinkTwitter
              </a>
            </div>
            <?php } ?>

            <?php if($redux_solawi['opt-switch-gplus'] == '1') {?>
            <div class="footer-link">
              <a href="<?php echo $redux_solawi['opt-text-gpluslink'] ?>">
                LinkGplus
              </a>
            </div>
            <?php } ?>

            <div class="footer-link">
              Free Theme mady by <a href="//www.graphic-concepts.de">GraphicConcepts</a>
            </div>

          </div>
        </div>
      </div>
    </footer>

      <div class="vars"><?php 
          echo var_dump($redux_solawi);
        ?></div>

    <?php get_template_part('bindings-js'); ?>
    <?php wp_footer(); ?>
	</body>
</html>