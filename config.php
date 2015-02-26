<?php
/**
* WordPress Landing Page Config File
* Template Name:  Third Wunder Generic Template
*
* @package  WordPress Landing Pages
* @author 	Mohamed Hamad
*/

do_action('lp_global_config'); // The lp_global_config function is for global code added by 3rd party extensions

//gets template directory name to use as identifier - do not edit - include in all template files
$key = lp_get_parent_directory(dirname(__FILE__));

$lp_data[$key]['info'] =
array(
	'data_type' => "template", // Template
	'version' => "1.0.0", // Version Number
	'label' => "Third Wunder Generic Template", // Nice Name
	'category' => 'Third Wunder, Responsive', // Template Category
	'demo' => 'http://www.thirdwunder.com/', // Demo Link
	'description'	=> 'This is a Third Wunder Landing Page Generic Template' // template description
);

//************************************************
// Add User Options to Your Landing Page Template
//************************************************
$lp_data[$key]['settings'][] =
        array(
          'label' => "Tracking Code",
          'description' => "Tracking Code",
          'id' => "tracking-code",
          'type'  => 'text',
          'default'  => '',
          'context'  => 'normal'
        );
$lp_data[$key]['settings'][] =
      array(
        'label' => "Video URL",
        'description' => "URL of a promotional video to show in the header",
        'id'  => 'video_url',
        'type'  => 'text',
        //'default'  => 'off',
        //'options' => array('off'=>'Turn off','on'=>'Trun On'),
        'context'  => 'normal'
  );
/****** Third Wunder Options ******/