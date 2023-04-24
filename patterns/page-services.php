<?php
 /**
  * Title: Sample Services Page
  * Slug: flat-blocks/page-services
  * Categories: flatblocks, page, services
  * Block Types: core/post-content
  * Description: A sample services page with cover image, title and text, we do, 4-column features, 4-column pricing table, and call-to-action button
  */
?>

<?php echo flatblocks_get_block_pattern( 'cover-desk-light' ); ?>

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<?php echo flatblocks_get_block_pattern( 'text-title-and-text' ); ?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"textAlign":"left","placeholder":"What We Do","align":"wide"} -->
<h2 class="alignwide has-text-align-left" id="what-we-do">What We Do</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-features-4-columns' ); ?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"textAlign":"left","placeholder":"Our Pricing","align":"wide"} -->
<h2 class="alignwide has-text-align-left" id="what-we-do">Our Pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem Ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<?php echo flatblocks_get_block_pattern( 'columns-pricing-table-4-columns' ); ?>

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<?php echo flatblocks_get_block_pattern( 'buttons-call-to-action' ); ?>
