<?php
// $Id: node-product.tpl.php,v 1.1.2.2 2009/11/11 05:25:58 sociotech Exp $
?>

<div id="node-<?php print $node->nid; ?>" class="node clear-block <?php print $node_classes; ?>">
	  <div class="inner">
		<?php if ($page == 0): ?>
		<h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
		<?php endif; ?>


		<?php if ($node_top && !$teaser): ?>
		<div id="node-top" class="node-top row nested">
		  <div id="node-top-inner" class="node-top-inner inner">
			<?php print $node_top; ?>
		  </div><!-- /node-top-inner -->
		</div><!-- /node-top -->
		<?php endif; ?>

		<div id="product-group" class="product-group">

		  <div class="content clearfix">
		  
			<div id="pruduct_side">
				<div id="product_pic">
					<?php print $field_image_cache [0]['view'];?>
				</div>
				<div id="product_index">
					<?php print $field_index_link [0]['view'];?>
				</div>
				<div id="product_links2">
					<?php if ($links && !$teaser): ?>
					<div class="links clear">
					  <?php print $links; ?>
					</div>
					<?php endif; ?>
				</div>
				
			</div>
			
			<div id="product_main">
				<div id="product_links">
					<?php if ($terms): ?>
					<div class="link_title">
						<?php print 'קטגוריה:'; ?>
					</div>
					<div class="terms">
					  <?php print $terms; ?>
					</div>
					<?php endif;?>
				</div>
				<div id="product_header">
					<font color="#FF7400">
					<?php print $field_heading [0]['view'];?>
				</div>
				<div id="buy">
					<div id="price">
						<font color="#777777">
						<?php print uc_currency_format($node->sell_price); ?>
					</div>

					<div id="cartButtons">
						<font color="#777777">
						<?php // add to cart buttons ?>
						<?php print $node->content['add_to_cart']["#value"]; ?>
					</div>
				</div>
				<div id="product_text">
					<?php print $field_text [0]['view'];?>
				</div>
			</div>





		  </div><!-- /content -->
		</div><!-- /product-group -->
	  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div>
