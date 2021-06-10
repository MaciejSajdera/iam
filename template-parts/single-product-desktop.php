<?php

                            $products = array(
                                'post_type'=> 'product',
                                'posts_per_page' => -1,
                                'order'        => 'ASC',
                            );    

                            $products_query = new WP_Query( $products );


                                if( $products_query->have_posts() ) :

                                    $index = 0;

                                    echo '<div class="products__container desktop-only">';

                                    while ( $products_query->have_posts() ) : $products_query->the_post();

                                    $product_1 = get_field("product", get_the_ID());

                                    $product_1_title_part_1 = $product_1["title_part_1"];
                                    $product_1_title_part_2 = $product_1["title_part_2"];
                                    $product_1_description = $product_1["description"];
                                    $product_1_images = $product_1["images"];
                                    $product_color_variants = $product_1["color_variants"];

                                    $product_1_image_1 =  $product_1_images["image_1"];
                                    $product_1_image_1_color_1 =  $product_1_image_1["image_1_color_1"];
                                    $product_1_image_1_color_2 =  $product_1_image_1["image_1_color_2"];
                                    $product_1_image_1_color_3 =  $product_1_image_1["image_1_color_3"];


                                    $product_1_image_2 =  $product_1_images["image_2"];
                                    $product_1_image_2_color_1 =  $product_1_image_2["image_2_color_1"];
                                    $product_1_image_2_color_2 =  $product_1_image_2["image_2_color_2"];
                                    $product_1_image_2_color_3 =  $product_1_image_2["image_2_color_3"];


                                    $product_1_image_3 =  $product_1_images["image_3"];
                                    $product_1_image_3_color_1 =  $product_1_image_3["image_3_color_1"];
                                    $product_1_image_3_color_2 =  $product_1_image_3["image_3_color_2"];
                                    $product_1_image_3_color_3 =  $product_1_image_3["image_3_color_3"];


                                    $product_1_image_1_color_hex_1 =   $product_color_variants["color_1"];
                                    $product_1_image_2_color_hex_2 =   $product_color_variants["color_2"];
                                    $product_1_image_3_color_hex_3 =   $product_color_variants["color_3"];

                                    ?>

                                        <div class="products__single-product--grid">

                                            <span class="line line__vertical line--vertical-1"></span>
                                            <span class="line line__vertical line--vertical-2"></span>
                                            <span class="line line__vertical line--vertical-3 mobile-only"></span>

                                            <span class="line line__horizontal line--horizontal-1"></span>
                                            <span class="line line__horizontal line--horizontal-2"></span>
                                            <span class="line line__horizontal line--horizontal-3"></span>
                                            <span class="line line__horizontal line--horizontal-4"></span>

                                        <?php   

                                            echo '<div class="single-product__content-wrapper">';

                                                echo '<h1>'. $product_1_title_part_1 . ' <span class="font-outline__red">'. $product_1_title_part_2 .'</span></h1>';

                                                echo '<div class="single-product__description">'. $product_1_description . '</div>';

                                            echo '</div>';
                                        ?>

                                            <span class="product-holder">

                                                <div class="swipers-wrapper">

                                                        <div class="swiper-container swiper-container-h-desktop swiper-container-h-desktop--<?php echo $index ?>">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="swiper-container swiper-container-v-desktop swiper-container-v-desktop--<?php echo $index ?>">
                                                                        <div class="swiper-wrapper">

                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_1_color_1 ?>)"></div>
                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_1_color_2 ?>)"></div>
                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_1_color_3 ?>)"></div>

                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="swiper-container swiper-container-v-desktop swiper-container-v-desktop--<?php echo $index ?>">
                                                                        <div class="swiper-wrapper">

                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_2_color_1 ?>)"></div>
                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_2_color_2 ?>)"></div>
                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_2_color_3 ?>)"></div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="swiper-container swiper-container-v-desktop swiper-container-v-desktop--<?php echo $index ?>">
                                                                        <div class="swiper-wrapper">

                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_3_color_1 ?>)"></div>
                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_3_color_2 ?>)"></div>
                                                                            <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_3_color_3 ?>)"></div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>

                                                <!-- Add Pagination H -->
                                                <div class="swiper-pagination-h__holder swiper-pagination-h--<?php echo $index ?>__holder">
                                                    <div class="swiper-pagination swiper-pagination-h swiper-pagination-h-desktop--<?php echo $index ?>"></div>
                                                </div>

                                                <!-- Add Pagination V -->
                                                <div class="swiper-pagination-v__holder">
                                                    <span class="swiper-pagination-v__description">Color:</span>
                                                    <span class="color-hex-value color-hex-value--0"><?php echo $product_1_image_1_color_hex_1 ?></span>
                                                    <span class="color-hex-value color-hex-value--1"><?php echo $product_1_image_2_color_hex_2 ?></span>
                                                    <span class="color-hex-value color-hex-value--2"><?php echo $product_1_image_3_color_hex_3 ?></span>
                                                    <div class="swiper-pagination swiper-pagination-v swiper-pagination-v-desktop--<?php echo $index ?>"></div>
                                                </div>

                                            </span>

                                        </div>

                                    <?php

                                    $index++;

                                    endwhile; 



                                    echo '</div>';

                                 endif;
                        ?>


