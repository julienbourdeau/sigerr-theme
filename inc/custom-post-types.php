
<?php

register_post_type('answers', 
  array(	
    'label' => 'Questions & Answers',
    'description' => 'These posts are simple short question and answers. It is meant to help you everyday as a developer.',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array(
      'slug' => 'questions-anwers'
    ),
    'query_var' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'menu_position' => 4,
    'supports' => array('title','editor','trackbacks','custom-fields','comments','revisions','thumbnail','author',),
    'labels' => array (
      'name' => 'Questions & Answers',
      'singular_name' => 'Question & Answers',
      'menu_name' => 'Q&As',
      'add_new' => 'Add Q&A',
      'add_new_item' => 'Add New Q&A',
      'edit' => 'Edit',
      'edit_item' => 'Edit Q&A',
      'new_item' => 'New Q&A',
      'view' => 'View Q&A',
      'view_item' => 'View Q&A',
      'search_items' => 'Search Q&A',
      'not_found' => 'No Q&A found',
      'not_found_in_trash' => 'No Q&A found in Trash',
      'parent' => 'Parent Q&A',
    ),
  ) 
);


/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'sigr_';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
  // Meta box id, UNIQUE per meta box. Optional since 4.1.5
  'id' => 'answers-details',

  // Meta box title - Will appear at the drag and drop handle bar. Required.
  'title' => 'Questions & Answers details',

  // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
  'pages' => array( 'answers' ),

  // Where the meta box appear: normal (default), advanced, side. Optional.
  'context' => 'normal',

  // Order of meta box: high (default), low. Optional.
  'priority' => 'high',

  // List of meta fields
  'fields' => array(

    // TEXT
    array(
      // Field name - Will be used as label
      'name'  => 'Question',
      // Field ID, i.e. the meta key
      'id'    => "{$prefix}question",
      // Field description (optional)
      'type'  => 'text',
      // Default value (optional)
      'std'   => '',
      // Size (optional)
      'size'  => '80',
      // CLONES: Add to make the field cloneable (i.e. have multiple value)
      'clone' => false,
    ),

    // TEXT
    array(
      // Field name - Will be used as label
      'name'  => 'Answers',
      // Field ID, i.e. the meta key
      'id'    => "{$prefix}answer",
      // Field description (optional)
      'type'  => 'text',
      // Default value (optional)
      'std'   => '',
      // Size (optional)
      'size'  => '80',
      // CLONES: Add to make the field cloneable (i.e. have multiple value)
      'clone' => false,
    ),

    // WYSIWYG/RICH TEXT EDITOR
    array(
      'name' => 'Question details',
      'id'   => "{$prefix}question_details",
      'type' => 'wysiwyg',
      'std'  => '',

      // Editor settings, see wp_editor() function: look4wp.com/wp_editor
      'options' => array(
        'textarea_rows' => 4,
        'teeny'         => true,
        'media_buttons' => false,
      ),

    ),

  ),
  'validation' => array(
    'rules' => array(
      "{$prefix}password" => array(
        'required'  => true,
        'minlength' => 7,
      ),
    ),
    // optional override of default jquery.validate messages
    'messages' => array(
      "{$prefix}password" => array(
        'required'  => 'Password is required',
        'minlength' => 'Password must be at least 7 characters',
      ),
    )
  )
);




/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function sigr_register_meta_boxes()
{
  // Make sure there's no errors when the plugin is deactivated or during upgrade
  if ( !class_exists( 'RW_Meta_Box' ) )
    return;

  global $meta_boxes;
  foreach ( $meta_boxes as $meta_box )
  {
    new RW_Meta_Box( $meta_box );
  }
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'sigr_register_meta_boxes' );