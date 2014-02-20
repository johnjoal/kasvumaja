
<?php foreach($data['products'] as $product) { ?>
    <h1><?php echo $product->title ?></h1>
    <div class="content"><?php echo $product->content ?></div>
<?php } ?>