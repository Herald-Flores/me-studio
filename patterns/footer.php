<?php
/**
  * Title: Footer
  * Slug: me-studio/footer
  * Description: Footer pattern for the Me Studio theme.
  */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"120px","right":"var:preset|spacing|normal","left":"var:preset|spacing|normal"}}},"backgroundColor":"primary","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:40px;padding-right:var(--wp--preset--spacing--normal);padding-bottom:120px;padding-left:var(--wp--preset--spacing--normal)">
  <!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide">
    
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"textColor":"secondary"} -->
      <h2 class="wp-block-heading has-secondary-color has-text-color">Páginas</h2>
      <!-- /wp:heading -->

      <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"12px"}}} -->
      <!-- wp:navigation-link {"label":"Inicio","url":"#","textColor":"accent"} /-->
      <!-- wp:navigation-link {"label":"Sobre el evento","url":"#","textColor":"accent"} /-->
      <!-- wp:navigation-link {"label":"Agenda","url":"#","textColor":"accent"} /-->
      <!-- wp:navigation-link {"label":"Ponentes","url":"#","textColor":"accent"} /-->
      <!-- wp:navigation-link {"label":"Contacto","url":"#","textColor":"accent"} /-->
      <!-- /wp:navigation -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"textColor":"secondary"} -->
      <h2 class="wp-block-heading has-secondary-color has-text-color">Contacto</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"textColor":"secondary"} -->
      <p class="has-secondary-color has-text-color">Email: <a href="mailto:info@wordcampnicaragua.org" class="has-accent-color">info@wordcampnicaragua.org</a></p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"textColor":"secondary"} -->
      <p class="has-secondary-color has-text-color">Teléfono: 505-1234-5678</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"textColor":"secondary"} -->
      <p class="has-secondary-color has-text-color">Ubicación: Estelí, Nicaragua</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"spacing":{"blockGap":"33px"}}} -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-start","verticalAlignment":"center"}} -->
      <div class="wp-block-group" style="gap:6px">
        <!-- wp:site-logo {"width":85,"shouldSyncIcon":true,"className":"is-style-default"} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:paragraph {"textColor":"secondary"} -->
      <p class="has-secondary-color has-text-color">Este theme fue desarrollado con fines educativos como parte del WordCamp Nicaragua 2025. Explora el ecosistema moderno de WordPress, temas de bloques y Full Site Editing.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"textColor":"secondary"} -->
      <p class="has-secondary-color has-text-color">© 2025 WordCamp Nicaragua. Todos los derechos reservados.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->