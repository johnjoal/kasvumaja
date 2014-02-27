<div class="content-custom">
    <h3 class="text-center"><?php echo $data['page']->title ?></h3>
    
    <?php if(isset($data['products'])) { ?>
    <ul class="products">
        <?php foreach($data['products'] as $product) { ?>
        <li>
            <a href="<?php echo action('PageController@getDetail', array($product->id)) ?>">
                <h4><?php echo $product->title ?></h4>
                <div><?php echo $product->description ?></div>
            </a>
        </li>
        <?php } ?>
    </ul>
    <?php } ?>
    
    <?php echo $data['page']->content ?>
</div>