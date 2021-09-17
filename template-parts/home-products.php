<?php
    $products = get_field("products");

    $product_image_1 = $products["product_image_1"];
    $product_title_1 = $products["product_title_1"];

    $product_image_2 = $products["product_image_2"];
    $product_title_2 = $products["product_title_2"];

    $product_image_3 = $products["product_image_3"];
    $product_title_3_1 = $products["product_title_3_1"];
    $product_title_3_2 = $products["product_title_3_2"];

    $product_image_4 = $products["product_image_4"];
    $product_title_4 = $products["product_title_4"];
?>


<section class="home-products">
    <span id="observer-holder"></span>
    <div class="home-products__content">

        <div class="home-products__content--upper">

            <div class="home-products__title">
                <h1>PRO<span class="font-outline__red">DUCTS</span></h1>
            </div>

            <div class="home-products__description">
                <p>
                Everything you need to expand your clinic offer is already here.
                </p>

                <a href="<?php echo get_permalink(get_page_by_title( 'Products' )) ?>" class="button button__cta desktop-only">VIEW PRODUCTS</a>
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
                <div class="product-wrapper">
                    <img loading="lazy" height src="<?php echo $product_image_1 ?>" alt="">
                    <p> <?php echo $product_title_1 ?></p>
                </div>
            </span>

            <span class="product-holder model-x3">
                <div class="product-wrapper">
                    <img loading="lazy" src="<?php echo $product_image_2 ?>" alt="">
                    <p> <?php echo $product_title_2 ?></p>
                </div>
            </span>

            <span class="product-holder model-sail">
                <div class="product-wrapper">
                    <span class="image-holder">
                        <img loading="lazy" src="<?php echo $product_image_3 ?>" alt="">
                    </span>
                
                    <p> <?php echo $product_title_3_1 ?><br />
                        <?php echo $product_title_3_2 ?>
                    </p>
                </div>
            </span>

            <span class="product-holder model-white">
                <div class="product-wrapper">
                    <img loading="lazy" src="<?php echo $product_image_4 ?>" alt="">
                    <p> <?php echo $product_title_4 ?></p>
                </div>
            </span>

        </div>


        <a href="<?php echo get_permalink(get_page_by_title( 'Products' )) ?>" class="button button__cta mobile-only">VIEW PRODUCTS</a>

    </div>

</section>