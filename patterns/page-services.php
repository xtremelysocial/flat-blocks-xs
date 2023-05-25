<?php
 /**
  * Title: Sample Services Page
  * Slug: flat-blocks/page-services
  * Categories: flatblocks, page
  * Block Types: core/post-content
  * Description: A sample services page with cover image, title and text, we do, 4-column features, 4-column pricing table, and call-to-action button
  */
?>

<?php echo flatblocks_get_block_pattern( 'cover-desk-meeting' ); ?>

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<?php echo flatblocks_get_block_pattern( 'text-title-and-text' ); ?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","placeholder":"What We Do"} -->
<h2 class="wp-block-heading has-text-align-center" id="what-we-do">What We Do</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-text-align-center is-style-alignwide"} -->
<p class="has-text-align-center is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-features-4-columns' ); ?>

<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:heading {"align":"center","placeholder":"Our Pricing"} -->
<h2 class="has-text-align-center" id="our-pricing">Our Pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textAlign":"center","className":"is-style-alignwide"} -->
<p class="has-text-align-center is-style-alignwide">Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-pricing-table-4-columns' ); ?>

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<?php echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>
