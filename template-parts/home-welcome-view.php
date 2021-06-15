<?php

$welcome_view = get_field('welcome_view');

$welcome_view__title_outline = $welcome_view['title_outline'];
$welcome_view__title = $welcome_view['title'];
$welcome_view__ipad_image = $welcome_view['image_1'];
$welcome_view__content_image = $welcome_view['image_2'];
$welcome_view__description = $welcome_view['description'];

?>


<section class="welcome-view">
    <div class="welcome-view__content">

        <div class="welcome-view__titles">
            <h1 class="font-outline font-outline__red smaller-title">
                <?php echo $welcome_view__title_outline ?>
            </h1>
            <h1>
                <?php echo $welcome_view__title ?>
            </h1>
        </div>

        <div class="welcome-view__images">
            <div class="ipad-image">

            <img src="<?php echo $welcome_view__ipad_image ?>" />


                <div class="content-image" >
                    <div class="video-wrapper">

                        <video
                            id="my-video"
                            class="video-js vjs-static-controls vjs-lime"
                            controls
                            playsinline
                            preload="auto"
                            poster="<?php echo get_field('video_thumbnail', get_page_by_title( 'How does it work' )) ?>"
                            data-setup="{}"
                        >
                            <source src="<?php echo get_field('video', get_page_by_title( 'How does it work' )) ?>" type="video/mp4" />
                            <!-- <source src="MY_VIDEO.webm" type="video/webm" /> -->
                            <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank"
                                >supports HTML5 video</a
                            >
                            </p>
                        </video>

                    </div>
                </div>
            </div>
        </div>


        <div class="welcome-view__description">

            <p><?php echo $welcome_view__description ?></p>

        </div>

        <div class="welcome-view__cta-wrapper">
            <a href="#" class="button button__cta">Read more</a>
        </div>

    </div>

    <div class="welcome-view__scroll-down square-box square-box__black">
        <div class="chevron-wrapper">
            <div class="chevron"></div>
            <div class="chevron"></div>
            <div class="chevron"></div>
        </div>
    </div>

</section>