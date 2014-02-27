<div class="content-detail">
	<?php foreach($data['products'] as $product) { ?>
	    <h1><?php echo $product->h1 ?></h1>
	    <div class="content"><?php echo $product->content ?></div>
	<?php } ?>
</div>