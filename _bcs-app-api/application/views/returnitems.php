<div class="order-history">
    <div class="grid_1" style="padding:15px 15px 10px 15px;">
        <h3 class="uppercase">Order History</h3>
    </div>
    <div class="clear"></div>
    <?php foreach($query as $q){ ?>
    <div class="order-cards">
        <div style="float:right;padding:5px;color:#666;"><?php echo $q->ups; ?><span style="background:<?php if($q->ups == "Delivered") { echo "#999"; }else{ echo "#39C"; } ?>;margin:0 -4px 0 8px;width:8px;height:8px;border-radius:10px;display:inline-block;"></span></div>
        <h3 style="text-transform:uppercase;color:#39C;margin-bottom:-5px;"><?php echo $q->status; ?></h3>    
        <div class="hint" style="color:#666;"><i><?php echo $q->placed; ?></i></div>
        <div style="background:#f4f4f4;padding:10px;margin:0 -10px;line-height:14px;font-size:14px;">
            <?php if($q->status == "Shipping") { ?>
            <a href="#" class="button-tiny black-outline track-shipment expand" style="position:relative;padding-right:26px;">Track Shipment <span class="icons" style="position:absolute;right:-7px;">&#59232;</span></a>
            <?php } ?>
            <div><strong>Order:</strong> #<?php echo $q->number; ?></div>
            <div><strong>Method:</strong> <?php echo $q->method; ?></div>
        </div>
        <?php if($q->status == "Shipping") { ?>
            <?php if($q->method != "USPS Priority Mail") { ?>
            <div class="order-tracking">
                <div class="tracking-state">
                    Delivered
                    <small>February 27, 2015 2:21 PM, Salt Lake City UT US</small>
                </div>
                <div class="tracking-state">
                    Out for delivery
                    <small>February 27, 2015 9:41 AM, Salt Lake City UT US</small>
                </div>
                <div class="tracking-state">
                    Package arrived at a carrier facility
                    <small>February 27, 2015 8:27 AM, Salt Lake City UT US</small>
                </div>
                <p>
                    <a href="#" class="button-small black-outline">Track with UPS</a>
                </p>
            </div>
            <?php }else{ ?>
                <div class="order-tracking">
                    <p style="width:80%;margin:10px auto;text-align:center"><i>Please visit the USPS website for tracking details.</i></p>
                    <p><a href="#" class="button-small black-outline">Track with USPS</a></p>
                </div>
            <?php } ?>
        <?php } ?>
        <div class="order-history-info">
        </div>
        <?php foreach($q->product as $p) { ?>
        <div class="order-item">
            <div class="cart-item">
                <a href="" class="direct-product product-image"><img src="<?php echo $p->image; ?>" alt="" /></a>
                <div class="product-info">
                    <a href="<?php echo $p->sku; ?>" class="direct-product product-name"><?php echo $p->brand; ?> <?php echo $p->title; ?></a>
                    <div class="product-details"><?php echo $p->variant; ?></div>
                    <div class="product-each">Price: <span>$<?php echo $p->price; ?></span></div>
                    <div class="product-each">Qty: <?php echo $p->qty; ?></div>
                    <?php if($q->status != "Shipping") { ?>
                        <div class="product-actions">
                            <?php if($p->label) { ?>
                                <div style="color:#000;font-size:14px;"><strong>Return Requested:</strong> &nbsp;RMA# 102070589</div>
                                <div style="color:#000;font-size:14px;margin-bottom:15px;">
                                    <strong style="margin-right:7px;">Return Shipping Label:</strong>
                                    <a href="<?php echo $p->rma; ?>" style="float:none;" target="_blank">Print</a>
                                    <a href="#" style="float:none;">Email</a>
                                </div>
                                <a href="#" class="button-tiny black-outline">Write a Review</a>
                            <?php }else{ ?>
                                <a href="#" qty="<?php echo $p->qty; ?>" sku="<?php echo $p->sku; ?>" data="<?php echo $q->number; ?>" class="returns button-tiny black-outline">Return this Item</a>
                                <a href="<?php echo $p->sku; ?>" class="direct-product button-tiny black-outline" style="margin-right:9px;">Write a Review</a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
    <div class="clear"></div>
</div>