    </div><!-- #site-container -->
  </div><!-- #site-content -->
  <div id="scroll-to-top-wrapper" class="hidden-print scroll-top-wrapper">
  	<div class="btn btn-default scroll-top-inner">
  		<i class="fa fa-fw fa-chevron-up"></i> <span class="title"><?php _e('Back to Top','tw'); ?></span>
  	</div>
  </div>

  <footer id="site-footer" class="hidden-print site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <div class="footer-container container">
      <div class="row">
        <div id="copyright" class="col-xs-12 col-sm-6 col-md-6">
          <?php tw_copyright(); ?>
        </div>
        <div id="credit" class="col-xs-12 col-sm-6 col-md-6">
          <?php tw_credit(); ?>
        </div><!-- #credit -->

      </div>
    </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>