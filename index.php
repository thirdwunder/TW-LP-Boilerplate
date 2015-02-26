<?php
/*****************************************/
// Template Title:  Third Wunder Generic Template
// Plugin: Landing Pages - Inboundnow.com
/*****************************************/

/* Step 1: Declare Template Key. This will be automatically detected for you */
$key = lp_get_parent_directory(dirname(__FILE__));
$path = LANDINGPAGES_UPLOADS_URLPATH ."$key/";
$url = plugins_url();

$video_url    = lp_get_value($post, $key, 'video_url') ?
trim(lp_get_value($post, $key, 'video_url')) : null;
$video_poster = null;
$video_bg  = null;
$image_sizes = array('4x3-small','16x6-medium','16x6-large');
$image_id = get_post_thumbnail_id(get_the_id());
if(has_post_thumbnail()){
  $video_poster = tw_get_image_src($image_id, $image_sizes);
  //$video_poster = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), $img_size);
  $video_bg = "background: url('$video_poster');";
}


$conversion_area = lp_get_value($post, $key, 'conversion-area-content');
$image_sizes = array('4x3-small','16x6-medium','16x6-large');
do_action('lp_init');

/* Load Regular WordPress $post data and start the loop */
if (have_posts()) : while (have_posts()) : the_post();
  include_once('header.php');

    ob_start();
    lp_conversion_area();
    $form_output = ob_get_contents();
    ob_end_clean();
  ?>


  <div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12">
    	<main id="main" class="site-main" role="main" itemprop="mainContentOfPage">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php echo tw_html_tag_schema('Article'); ?>>


          <header class="entry-header">
             <?php if(!is_null($video_url) && $video_url!=='' ): ?>
             <div id="section-video-<?php the_ID(); ?>" class="section-video" style="<?php echo $video_bg; ?>">
               <div id="video-<?php the_ID(); ?>" class="video embed-responsive embed-responsive-16by9" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
                 <!-- <?php echo html_entity_decode(tw_videoURL_to_embedCode($video_url, true)); ?> -->
               </div>
             </div>

             <?php elseif( has_post_thumbnail()): ?>
              <figure class="entry-image">
                <?php echo tw_the_post_thumbnail($image_sizes, array('itemprop'=>'image')); ?>
              </figure>
              <?php endif; ?>

            <?php the_title('<h1 class="entry-title" itemprop="headline">','</h1>'); ?>
          </header>


          <div class="container">
            <section class="entry-content row" itemprop="articleBody">
              <?php if($form_output): ?>
                <div class="col-xs-12 col-sm-7 col-md-8 content"><?php the_content(); ?></div>
                 <div id="lp-form" class="col-xs-12 col-sm-5 col-md-4 form">
                  <div id="lp_container" class="form-container">
                    <?php lp_conversion_area(); /* Print out form content */  ?>
                  </div>
                </div>
              <?php else: ?>
                <div class="col-xs-12 col-sm-12 col-md-12 content"><?php the_content(); ?></div>
              <?php endif; ?>
            </section>
          </div>
        </article>
      </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php include_once('footer.php');
endwhile; endif; ?>