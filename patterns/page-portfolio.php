<?php
 /**
  * Title: Sample Portfolio Page
  * Slug: flat-blocks/page-portfolio
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample portfolio or home page with cover image, image gallery (for recent works), 3-column features, and call-to-action button
  */
?>

<?php include_once get_template_directory() . '/inc/pattern-functions.php'; ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'cover-geodesic-lights' ); ?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div id="our-portfolio" class="wp-block-group alignwide">
<!-- wp:heading {"align":"wide","textAlign":"left","placeholder":"Our Portfolio"} -->
<h2 class="wp-block-heading alignwide has-text-align-left" id="our-portfolio">Our Portfolio</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"verticalAlignment":"top","className":"is-style-default"} -->
<div class="wp-block-column is-vertically-aligned-top is-style-default">
<!-- wp:paragraph {"placeholder":"Our recent works...","className":"is-style-alignwide"} -->
<p class="is-style-alignwide">Our recent works...</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"align":"right","placeholder":"See All Works"} -->
<p class="has-text-align-right"><a href="$#">&gt; See All Works</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'image-gallery' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-features-3-columns' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>
