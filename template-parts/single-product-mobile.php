<?php

                            $products = array(
                                'post_type'=> 'product',
                                'posts_per_page' => -1,
                                'order'        => 'ASC',
                            );    

                            $products_query = new WP_Query( $products );


                                if( $products_query->have_posts() ) :

                                    $index = 0;

                                    echo '<div class="products__container swiper-container swiper-container-products-mobile mobile-only">';

                                    echo '<span class="line line__horizontal line--horizontal-1"></span>';
                                    echo '<span class="line line__horizontal line--horizontal-2"></span>';

                                    echo '<div class="swiper-wrapper">';

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



                                    <div class="swiper-slide">

                                        <div class="products__single-product--grid">
                                            
                                        <?php echo '<h1>'. $product_1_title_part_1 . ' <span class="font-outline__red">'. $product_1_title_part_2 .'</span></h1>'; ?>

                                        <span class="product-holder">

                                            <span class="line line__vertical line--vertical-1"></span>
                                            <span class="line line__vertical line--vertical-2"></span>

                                        <div class="swipers-wrapper">

                                                <div class="swiper-container swiper-container-h-mobile swiper-container-h-mobile--<?php echo $index ?>">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="swiper-container swiper-container-v-mobile swiper-container-v-mobile--<?php echo $index ?>">
                                                                <div class="swiper-wrapper">

                                                                    <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_1_color_1 ?>)"></div>
                                                                    <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_1_color_2 ?>)"></div>
                                                                    <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_1_color_3 ?>)"></div>

                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="swiper-container swiper-container-v-mobile swiper-container-v-mobile--<?php echo $index ?>">
                                                                <div class="swiper-wrapper">

                                                                    <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_2_color_1 ?>)"></div>
                                                                    <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_2_color_2 ?>)"></div>
                                                                    <div class="swiper-slide image-slide" style="background-image: url(<?php echo $product_1_image_2_color_3 ?>)"></div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="swiper-container swiper-container-v-mobile swiper-container-v-mobile--<?php echo $index ?>">
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
                                            <div class="swiper-pagination swiper-pagination-h swiper-pagination-h-mobile--<?php echo $index ?>"></div>
                                        </div>

                                        <!-- Add Pagination V -->
                                        <div class="swiper-pagination-v__holder">
                                            <span class="color-hex-value color-hex-value--0"><?php echo $product_1_image_1_color_hex_1 ?></span>
                                            <span class="color-hex-value color-hex-value--1"><?php echo $product_1_image_2_color_hex_2 ?></span>
                                            <span class="color-hex-value color-hex-value--2"><?php echo $product_1_image_3_color_hex_3 ?></span>
                                            <div class="swiper-pagination swiper-pagination-v swiper-pagination-v-mobile--<?php echo $index ?>"></div>
                                        </div>

                                        </span>

                                        <?php   

                                            echo '<div class="single-product__content-wrapper">';

                                                echo '<div class="single-product__description">'. $product_1_description . '</div>';

                                            echo '</div>';
                                        ?>



                                        </div>

                                    </div> <!-- swiper-slide -->

                                    <?php

                                    $index++;

                                    endwhile; 

                                    echo '</div>'; /* swiper-wrapper */

                                    ?>
                                    <div class="swiper-button-prev square-box square-box__light-grey">
                                        <div class="chevron-wrapper">
                                            <div class="chevron"></div>
                                            <div class="chevron"></div>
                                            <div class="chevron"></div>
                                        </div>
                                    </div>
                    
                                    <div class="swiper-button-next square-box square-box__light-grey">
                                        <div class="chevron-wrapper">
                                            <div class="chevron"></div>
                                            <div class="chevron"></div>
                                            <div class="chevron"></div>
                                        </div>
                                    </div>
                                    <?php

                                    echo '</div>';

                                 endif;
                        ?>


