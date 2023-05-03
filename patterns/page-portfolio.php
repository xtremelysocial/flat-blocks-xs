<?php
 /**
  * Title: Sample Portfolio Page
  * Slug: flat-blocks/page-portfolio
  * Categories: flatblocks, page, portfolio
  * Block Types: core/post-content
  * Description: A sample portfolio or home page with cover image, image gallery (for recent works), 3-column features, and call-to-action button
  */
?>

<?php echo flatblocks_get_block_pattern( 'cover-geodesic-lights' ); ?>

<!-- wp:heading {"placeholder":"Our Portfolio","textAlign":"left","align":"wide"} -->
<h2 class="alignwide has-text-align-left" id="our-recent-posts">Our Portfolio</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"verticalAlignment":"top","className":"is-style-default"} -->
<div class="wp-block-column is-vertically-aligned-top is-style-default">
<!-- wp:paragraph {"placeholder":"Our recent works..."} -->
<p>Our recent works...</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"placeholder":"See All Works","align":"right"} -->
<p class="has-text-align-right"><a href="$#">&gt; See All Works</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<?php echo flatblocks_get_block_pattern( 'image-gallery' ); ?>

<?php echo flatblocks_get_block_pattern( 'columns-features-3-columns' ); ?>

<?php echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>
