<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'my_slug';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Dashboard codestar',
  'menu_slug'  => 'csf-demo',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'footer satting option',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'    => 'opt-textarea',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'help'  => 'The help text of the field.',
    ),
	array(
      'id'    => 'logo',
      'type'  => 'upload',
      'title' => 'Select logo',
    ),
    array(
      'id'    => 'image',
      'type'  => 'media',
      'title' => 'Set image',
	  
    ),

  )
) );
//
// Basic Fields

//
// Field: textarea

//
// Field: select

//
// Field: checkbox
//
// Repeater Fields
//
// Combine Fields
//

//
// Field: accordion
//
// Media and Upload Fields
//

// Field: color_group

// Field: image_select
//

// Dependencies
//

// Validate
//

// Others
//
CSF::createSection( $prefix, array(
  'title'       => 'Others',
  'icon'        => 'fas fa-bolt',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/fields?id=others" target="_blank">Others</a>',
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'This is a heading field',
    ),

    array(
      'type'    => 'subheading',
      'content' => 'This is a subheading field',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'success',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'info',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'warning',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'danger',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'warning',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'danger',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a <strong>content</strong> field. You can write some contents here.',
    ),

  )
) );
