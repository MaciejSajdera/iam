<?php
    $products = get_field("products");

    $product_image_1 = $products["product_image_1"];
    $product_title_1 = $products["product_title_1"];

    $product_image_2 = $products["product_image_2"];
    $product_title_2 = $products["product_title_2"];

    $product_image_3 = $products["product_image_3"];
    $product_title_3 = $products["product_title_3"];

    $product_image_4 = $products["product_image_4"];
    $product_title_4 = $products["product_title_4"];
?>


<section class="home-products">
    <div class="home-products__content">

        <div class="home-products__content--upper">

            <div class="home-products__title">
                <h1>PRO<span class="font-outline__red">DUCTS</span></h1>
            </div>

            <div class="home-products__description">
                <p>
                Everything you need to expand your clinic offer is already here.
                </p>

                <a href="#" class="button button__cta desktop-only">VIEW PRODUCTS</a>
            </div>

        </div>

        <div class="home-products__content--grid">
            <span class="line line__vertical line--vertical-1"></span>
            <span class="line line__vertical line--vertical-2"></span>
            <span class="line line__vertical line--vertical-3 mobile-only"></span>

            <span class="line line__horizontal line--horizontal-1"></span>
            <span class="line line__horizontal line--horizontal-2"></span>
            <span class="line line__horizontal line--horizontal-3"></span>
            <span class="line line__horizontal line--horizontal-4"></span>

            <span class="product-holder red-rectangle">
                <img src="<?php echo $product_image_1 ?>" alt="">
                <p> <?php echo $product_title_1 ?></p>
            </span>

            <span class="product-holder model-x3">
                <img src="<?php echo $product_image_2 ?>" alt="">
                <p> <?php echo $product_title_2 ?></p>
            </span>

            <span class="product-holder model-sail">

                <span class="image-holder">
                    <img src="<?php echo $product_image_3 ?>" alt="">
                </span>
                
                <p> <?php echo $product_title_3 ?></p>
            </span>

            <span class="product-holder model-white">
                <img src="<?php echo $product_image_4 ?>" alt="">
                <p> <?php echo $product_title_4 ?></p>
            </span>

        </div>


        <a href="#" class="button button__cta mobile-only">VIEW PRODUCTS</a>

    </div>

</section>