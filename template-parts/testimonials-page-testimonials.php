<section class="testimonials testimonials-page">

    <div class="testimonials__content testimonials-page__content">

        <div class="testimonials__content--upper testimonials-page__content--upper">

            <div class="testimonials__title testimonials-page__title">

                <svg width="70" height="72" viewBox="0 0 70 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M52.5001 13.2631C55.2698 13.2631 57.6619 15.5368 57.6619 18.4421V53.6842C57.6619 56.4631 55.3957 58.8631 52.5001 58.8631H32.4821C29.7123 58.8631 27.3202 56.5895 27.3202 53.6842V18.5684C27.3202 15.6631 29.7123 13.2631 32.608 13.2631H52.5001ZM52.5001 11.3684H32.7339C28.7051 11.3684 25.5576 14.6526 25.5576 18.5684V53.5579C25.5576 57.4737 28.7051 60.6316 32.608 60.6316H52.626C56.5288 60.6316 59.6763 57.4737 59.6763 53.5579V18.4421C59.5504 14.5263 56.4029 11.3684 52.5001 11.3684Z" fill="#FFFBFB"/>
                    <path d="M52.8777 1.89474C61.1871 1.89474 67.9856 8.71579 67.9856 17.0526V54.8211C67.9856 63.1579 61.1871 69.9789 52.8777 69.9789H16.9964C8.68705 69.9789 1.88849 63.1579 1.88849 54.8211V17.0526C1.88849 8.71579 8.68705 1.89474 16.9964 1.89474H52.8777ZM52.8777 0H16.9964C7.67986 0 0 7.70526 0 17.0526V54.8211C0 64.2947 7.67986 72 16.9964 72H52.8777C62.3201 72 69.8741 64.2947 69.8741 54.9474V17.0526C70 7.70526 62.3201 0 52.8777 0Z" fill="#FFFBFB"/>
                    <path d="M37.3916 60.6316H17.3736C13.4707 60.6316 10.3232 57.4737 10.3232 53.5579V18.5684C10.3232 14.6526 13.5966 11.3684 17.6254 11.3684H37.5175C41.4204 11.3684 44.5678 14.5263 44.5678 18.4421V53.6842C44.4419 57.4737 41.2945 60.6316 37.3916 60.6316Z" fill="#9E0202"/>
                    <path d="M34.3702 21.4737H15.4854" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M34.3702 36H15.4854" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M34.3702 50.5263H15.4854" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M39.7839 28.8L15.4854 28.6737" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                    <path d="M39.7839 43.2H15.4854" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                </svg>

                <h1>TESTI<span class="font-outline__red">MONIALS</span></h1>
            </div>

            <div class="testimonials__description testimonials-page__description">
                <h2>
                These companies have already adopted <span class="text__red">[I'am]</span> app.
                </h2>
            
                <p>Read their testimonials to find out how it helped them in transitioning to digital workflow, and how it affected their bussines.</p>
            </div>

        </div>

        <div class="testimonials__content--grid testimonials-page__content--grid">

            <span class="line line__vertical line--vertical-1"></span>
            <span class="line line__vertical line--vertical-2"></span>
            <span class="line line__vertical line--vertical-3 desktop-only"></span>

            <span class="line line__horizontal line--horizontal-1"></span>

            <div class="swiper-container-testimonials-page">

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

                                    while ( $your_query->have_posts() ) : $your_query->the_post();

                                        echo '<div class="swiper-slide single-testimony">';

                                            echo '<div class="single-testimony__image-holder">';
                                                // echo '<img src="'.get_the_post_thumbnail_url().'">';
                                                echo '<div class="single-testimony__image" style="background-image: url(' .get_the_post_thumbnail_url(). '); background-repeat: no-repeat;"></div>';
                                            echo '</div>';

                                            echo '<div class="single-testimony__content-holder">';
                                                echo '<div class="single-testimony__content">';
                                                   echo '<p>'. get_the_content() .'</p>';
                                                echo '</div>';
                                            echo '</div>';

                                        echo '</div>';

                                    endwhile; 

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