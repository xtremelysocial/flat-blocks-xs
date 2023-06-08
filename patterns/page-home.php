<?php
 /**
  * Title: Sample Home Page
  * Slug: flat-blocks/page-home
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample home page with cover image, image gallery, 3-column features, call-to-action button, recent posts, 3-column colored social media icons, a map and address
  */
?>

<?php echo flatblocks_get_block_pattern( 'cover-scroll-home-header' ); ?>

<!-- wp:paragraph {"textAlign":"center","className":"is-style-default"} -->
<p class="has-text-align-center is-style-default">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<?php echo flatblocks_get_block_pattern( 'columns-features-3-columns' ); ?>

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

<?php echo flatblocks_get_block_pattern( 'image-gallery' ); ?>

<?php echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>

<?php echo flatblocks_get_block_pattern( 'columns-recent-posts-3-columns' ); ?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"align":"wide","textAlign":"left","placeholder":"Stay Connected"} -->
<h2 class="has-text-align-left alignwide" id="stay-connected">Stay Connected</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"left","className":"is-style-alignwide"} -->
<p class="has-text-align-left is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-social-media-3-columns' ); ?>

<?php echo flatblocks_get_block_pattern( 'columns-map-static' ); ?>
