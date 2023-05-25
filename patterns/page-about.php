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

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","placeholder":"About Us"} -->
<h2 class="wp-block-heading has-text-align-center" id="about-us">About Us</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-alignwide"} -->
<p class="has-text-align-center is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-features-3-columns' ); ?>

<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","placeholder":"Meet our Team"} -->
<h2 class="has-text-align-center" id="stay-connected">Meet our Team</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","className":"is-style-alginwide"} -->
<p class="has-text-align-center is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-team-4-people' ); ?>

<?php echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>


