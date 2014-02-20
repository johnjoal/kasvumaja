<div class="content-custom">
    <h3 class="text-center"><?php echo $data['page']->title ?></h3>
    
    <ul class="products">
        <?php foreach($data['products'] as $product) { ?>
        <li>
            <h4><?php echo $product->title ?></h4>
            <div><?php echo $product->description ?></div>
        </li>
        <?php } ?>
    </ul>
    
    <?php echo $data['page']->content ?>
</div>