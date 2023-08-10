<?php
 /**
  * Title: Sample Services Page
  * Slug: flat-blocks/page-services
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample services page with cover image, title and text, what we do, 4-column features, 4-column pricing table, and call-to-action button
  */
?>

<?php include_once get_template_directory() . '/inc/pattern-functions.php'; ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'cover-desk-meeting' ); ?>

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'text-title-and-text' ); ?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"align":"wide","textAlign":"left","placeholder":"What We Do"} -->
<h2 class="wp-block-heading alignwide has-text-align-left" id="what-we-do">What We Do</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"left","className":"is-style-alignwide"} -->
<p class="has-text-align-left is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-features-4-columns' ); ?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"align":"wide","textAlign":"left","placeholder":"Our Pricing"} -->
<h2 class="wp-block-heading alignwide has-text-align-left" id="our-pricing">Our Pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"left","className":"is-style-alignwide"} -->
<p class="has-text-align-left is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'columns-pricing-table-3-columns' ); ?>

<?php if ( function_exists( 'flatblocks_get_block_pattern' ) ) echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>
