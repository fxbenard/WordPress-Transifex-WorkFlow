<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   TX_Workflow
 * @author    FxB | fxbenard <fxb@wp-translations.org>
 * @license   GPL-2.0+
 * @link      http://wp-translations.org
 * @copyright 2013 WP-Translations
 */
?>
<div class="wrap">

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<!-- Dashboard. -->
  <div class="wrap about-wrap">

    <h1><?php _e( 'Welcome to TX Workflow Page', 'tx-workflow' ); ?></h1>
  
  <div class="about-text">
    <?php _e('Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.' ); ?>
  </div>

  <h2 class="nav-tab-wrapper">
    <a href="#" class="nav-tab nav-tab-active">
      <?php _e( 'Hello Wor(l)d' ); ?>
    </a><a href="#" class="nav-tab">
      <?php _e( 'Credits' ); ?>
    </a>
  </h2>
  
  <div class="changelog">
    <h3><?php _e( 'Morbi leo risus, porta ac consectetur' ); ?></h3>
  
    <div class="feature-section images-stagger-right">
      <img src="<?php echo plugins_url( 'assets/theme-customizer.png', dirname(__FILE__) ); ?>" class="image-50" />
      <h4><?php _e( 'Risus Consectetur Elit Sollicitudin' ); ?></h4>
      <p><?php _e( 'Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.' ); ?></p>
  
      <h4><?php _e( 'Mattis Justo Purus' ); ?></h4>
      <p><?php _e( 'Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.

Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.' ); ?></p>
    </div>
  </div>

</div>
</div>