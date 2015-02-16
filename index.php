<?php
/*****************************************/
// Template Title:  Third Wunder Generic Template
// Plugin: Landing Pages - Inboundnow.com
/*****************************************/

/* Step 1: Declare Template Key. This will be automatically detected for you */
$key = lp_get_parent_directory(dirname(__FILE__));
$path = LANDINGPAGES_UPLOADS_URLPATH ."$key/";
$url = plugins_url();

do_action('lp_init');

/* Load Regular WordPress $post data and start the loop */
if (have_posts()) : while (have_posts()) : the_post();


endwhile; endif;