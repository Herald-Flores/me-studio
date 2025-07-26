<?php
/**
  * Title: Hero Call to Action
  * Slug: me-studio/hero-call-to-action
  * Categories: me-studio-fse
  */
?>

<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"80vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="min-height:80vh"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained","contentSize":"1160px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
  <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
  <div class="wp-block-columns are-vertically-aligned-center">
    
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"xx-huge"} -->
      <h2 class="wp-block-heading has-xx-huge-font-size" style="font-style:normal;font-weight:700;line-height:1;text-transform:uppercase">Trabajemos juntos en tu próxima idea</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"20px","bottom":"30px"}}},"fontSize":"big"} -->
      <p class="has-big-font-size" style="margin-top:20px;margin-bottom:30px">Desarrollador WordPress con experiencia en creación de temas, plugins, rendimiento, seguridad y accesibilidad.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill"} -->
        <div class="wp-block-button is-style-fill">
          <a class="wp-block-button__link wp-element-button" href="#">Mis proyectos</a>
        </div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
      <!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"16px"}}} -->
      <figure class="wp-block-image aligncenter size-large" style="border-radius:16px">
        <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/image-hero.jpg' ) ); ?>" alt="Hero" />
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->