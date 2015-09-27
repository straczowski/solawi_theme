<?php 
  
  #Redux Framework!
  if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' ) ) {
      require_once( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' );
  }
  if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/sample/solawi-config.php' ) ) {
      require_once( dirname( __FILE__ ) . '/ReduxFramework/sample/solawi-config.php' );
  }



	# Word-Press Less Initialisieren
	require_once(get_template_directory().'/less/lessc.inc.php');
	require_once(get_template_directory().'/less/wp-less.php');

	#Entfernt Admin Toolbar bei Homepage Ansicht
	add_filter('show_admin_bar', '__return_false');



  #Menue Bearbeitungsfunktion
  function register_my_menu() {
    register_nav_menu('primary',__( 'Kopfzeile Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  #Content-Bilder mit Klassen versehen
  function image_tag_class($class) {
      $class .= ' img-responsive img-full img-shadow';
      return $class;
  }
  add_filter('get_image_tag_class', 'image_tag_class' );


?>