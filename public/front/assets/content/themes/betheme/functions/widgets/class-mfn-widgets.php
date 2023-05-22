<?php
if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

if (! class_exists('Mfn_Widgets')) {
  class Mfn_Widgets
  {
		private $widgets = array(
			'comments',
			'flickr',
			'login',
			'menu',
			'posts',
			'tags',
			'attributes', // Shop Attributes widget
		);

  	/**
  	 * Mfn_Widgets constructor
  	 */

  	public function __construct()
  	{
  		// fires after all default WordPress widgets have been registered.
  		add_action('widgets_init', array($this, 'register'));
  	}

  	/**
  	 * Register new widgets
  	 */

  	public function register()
  	{
			foreach ( $this->widgets as $widget ){

				if($widget == 'attributes' && ( mfn_opts_get('variable-swatches') == 0 || !function_exists('is_woocommerce') ) ){
					continue;
				}

				$widget_class = 'Mfn_Widget_'. ucfirst($widget);

				require_once(get_theme_file_path('/functions/widgets/class-mfn-widget-'. $widget .'.php'));
				register_widget($widget_class);

			}
  	}

  }
}

new Mfn_Widgets();
