<?php
 /**
  * Title: Sample About Page
  * Slug: flat-blocks/page-about
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample about page with cover image, about us, 3-column features, 4-person team, and call-to-action button
  */
?>

<?php echo flatblocks_get_block_pattern( 'cover-desk-light' ); ?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"align":"wide","textAlign":"left","placeholder":"About Us"} -->
<h2 class="wp-block-heading alignwide has-text-align-left" id="about-us">About Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"left","className":"is-style-alignwide"} -->
<p class="has-text-align-left is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-features-3-columns' ); ?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"align":"wide","textAlign":"left","placeholder":"Meet our Team"} -->
<h2 class="alignwide has-text-align-left" id="stay-connected">Meet our Team</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"left","className":"is-style-alginwide"} -->
<p class="has-text-align-left is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-team-4-people' ); ?>

<?php echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>


