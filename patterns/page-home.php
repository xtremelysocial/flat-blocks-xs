<?php
 /**
  * Title: Sample Home Page
  * Slug: flat-blocks/page-home
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample home page with cover image, image gallery, 3-column features, call-to-action button, recent posts, 3-column colored social media icons, a map and address
  */
?>

<?php echo flatblocks_get_block_pattern( 'cover-desk-light' ); ?>

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<?php echo flatblocks_get_block_pattern( 'image-gallery' ); ?>

<?php echo flatblocks_get_block_pattern( 'columns-features-3-columns' ); ?>

<?php echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"textAlign":"left","placeholder":"Stay Connected","align":"wide"} -->
<h2 class="alignwide has-text-align-left" id="stay-connected">Stay Connected</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-social-media-3-columns' ); ?>

<?php echo flatblocks_get_block_pattern( 'columns-recent-posts-3-columns' ); ?>

<?php echo flatblocks_get_block_pattern( 'columns-map-static' ); ?>
