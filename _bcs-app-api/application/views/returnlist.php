<?php foreach($query as $p){ ?>
<a href="#" class="product">
    <img src="<?php echo $p->image;?>" class="product-image" />
    <div class="product-info">
        <div class="product-title"><?php echo $p->brand;?> <?php echo $p->title;?></div>
        <div class="product-details"><?php echo $p->variant;?></div>
        <div class="product-each">Price:<span>$<?php echo $p->price;?></span></div>
        <div class="product-each">Qty:<?php echo $p->qty;?></div>
    </div>
</a>
<?php } ?>

