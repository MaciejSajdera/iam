<section class="testimonials">

    <div class="testimonials__content">

        <div class="testimonials__content--upper">

            <div class="testimonials__title">
                <h1>TESTI<span class="font-outline__red">MONIALS</span></h1>
            </div>

            <div class="testimonials__description">
                <p>
                These companies have already adopted <span class="text__red">[I'am]</span> app. <br /> See what they have to say about our solution.
                </p>

                <a href="#" class="button button__cta">SEE ALL TESTIMONIALS</a>
            </div>

        </div>

        <div class="testimonials__content--grid">

            <span class="line line__vertical line--vertical-1"></span>
            <span class="line line__vertical line--vertical-2"></span>
            <span class="line line__vertical line--vertical-3 desktop-only"></span>

            <span class="line line__horizontal line--horizontal-1"></span>

            <div class="swiper-container-testimonials">

                <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">

                        <?php
                            $lookbook = array(
                                'post_type'=> 'testimonials',
                                'posts_per_page' => -1,
                                'order'        => 'ASC',
                            );    

                            $your_query = new WP_Query( $lookbook );


                           $count = 0; ?>
                            <?php if( $your_query->have_posts() ) :

                                    echo '<div class="swiper-slide">';

                                    while ( $your_query->have_posts() ) : $your_query->the_post();

                                        if ($count < 4){ 
                                            echo '<div class="single-testimony" style="background-image: url(' .get_the_post_thumbnail_url(). '); background-repeat: no-repeat;"></div>';
                                        } else {
                                            echo '</div><div class="swiper-slide">';         
                                            echo '<div class="single-testimony" style="background-image: url(' .get_the_post_thumbnail_url(). '); background-repeat: no-repeat;"></div>';
                                            $count = 0;
                                        }

                                        $count = $count + 1;

                                    endwhile; 

                                    echo '</div>';

                                 endif;
                        ?>

                    </div>

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

        </div>


    </div>


</section>