<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  <aside id="primary-sidebar" class="primary-sidebar widget-area col-md-4" role="complementary" style="float: right;">
    <?php dynamic_sidebar( 'sidebar' ); ?>
  </aside>
<?php endif; ?>