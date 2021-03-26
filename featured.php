<!--  featured products -->
<div class="container">
    <?php
    $json_products = json_decode($products);
    $featured_products = $json_products;

    foreach ($featured_products as $product):
        $default_open = '';
        if($product->productname == 'Healthy Box: Medium'):
            $default_open = 'defaultOpen';
        endif;
    ?>

        <button class="tablink" onclick="openProduct('<?php echo $product->id; ?>', this, '#f79862')" id="<?php echo $default_open; ?>"><?php echo $product->productname; ?></button>

    <?php endforeach; ?>


    <?php
    foreach ($featured_products as $product):
        $included_products = json_decode($product->included);
        ?>

        <div id="<?php echo $product->id; ?>" class="tabcontent packages">
            <div class="image-box">
                <img class="product-image" src="<?php echo ($product->productimage); ?>" alt="Image of fruit box two" />
            </div>
            <div class="info-box">

                <div class="container">
                    <div class="change-product collapse" id="small-products">
                        <p class="details-header">
                            Remove ingredients from your box:
                        </p>
                        <!--  ingredients list -->
                        <?php foreach ($included_products as $included): ?>
                            <input type="checkbox" id="<?php echo $included->id; ?>" name="<?php echo $included->id; ?>" value="<?php echo $included->name; ?>">
                            <label for="<?php echo $included->id; ?>">
                                <span class="ingredient">
                            <?php echo $included->name; ?>
                                </span>
                            </label>
                        <?php endforeach; ?>
                        <!--/  end ingredients list -->
                    </div>
                </div>

                <div class="product-header">
                    <p class="details-header">These are the ingredients of this box:</p>
                    <p class="ingredients">
                        <?php foreach ($included_products as $included): ?>
                        <?php echo $included->name . ', '; ?>
                        <?php endforeach; ?>
                    </p>
                    <p class="product-weight">≈ <?php echo $product->product_weight; ?></p>
                    <p class="product-name"><?php echo $product->productname; ?></p>
                </div>
            </div>
            <div class="product-details">
                <div class="price-button"><?php echo $product->sale_price; ?></div>
                <div class="product-settings-button" data-toggle="collapse" data-target="#small-products">
                    <i class="fas fa-sliders-h"></i>
                </div>
                <div class="add-button"><i class="fas fa-shopping-basket"></i>
                </div>
            </div>
        </div>

<?php endforeach; ?>
</div>
<!--/ end featured products -->