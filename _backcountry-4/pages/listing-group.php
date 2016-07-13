<div class="wall">
    <div class="actions">
        <div class="results">5,901 in "Jackets"</div>
    </div>
    <div class="wall-container">
        <div class="group">
            <?php
                $data = array(
                    "id" => "ARC004F",
                    "title" => "Atom LT Hooded Insulated Jacket - Men's",
                    "brand" => array(
                            "name" => "Arc'teryx"
                    ),
                    "lowestListPrice" => 248.95,
                    "lowestSalePrice" => 248.95,
                    "onSale" => 0,
                    "percentOff" => 0,
                    "storeCredits" => 50,
                    "thumbnail" => "http://content.backcountry.com/images/items/medium/MAR/MAR00G4/RADOR.jpg",
                    "isOutlet" => 0               
                );

                load('components/listing-block.php', $data);

            ?>
            <?php include('components/listing-title.php'); ?>
            <?php include('components/listing-block.php'); ?>
            <div class="clear"></div>
        </div>
    </div>
</div>