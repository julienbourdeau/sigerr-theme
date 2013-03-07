<?php
/**
 *
 * This class helps when you want to add buttons in the visual editor
 * Its base on Marquex's work: http://marquex.es/387/adding-a-select-box-to-wordpress-tinymce-editor
 *
 * @since _s 1.0
 */
if(!class_exists('TinyMceAdder')):
 
class TinyMceAdder {

	var $buttonName;
	var $pluginJsUri;

	function __construct($name, $js) {
		$this->buttonName = $name;
		$this->pluginJsUri = $js;
	}

	function addSelector(){
		// Don't bother doing this stuff if the current user lacks permissions
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
 
	   // Add only in Rich Editor mode
	    if ( get_user_option('rich_editing') == 'true') {
	      add_filter('mce_external_plugins', array($this, 'registerTmcePlugin'));
	      //you can use the filters mce_buttons_2, mce_buttons_3 and mce_buttons_4 
	      //to add your button to other toolbars of your tinymce
	      add_filter('mce_buttons', array($this, 'registerButton'));
	    }
	}
 
	function registerButton($buttons){
		array_push($buttons, "separator", $this->buttonName);
		return $buttons;
	}
 
	function registerTmcePlugin($plugin_array){
		$plugin_array[$this->buttonName] = $this->pluginJsUri ;
		return $plugin_array;
	}
}
 
endif;