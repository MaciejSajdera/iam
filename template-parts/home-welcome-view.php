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
            <div class="ipad-image" style="background-image: url(<?php echo $welcome_view__ipad_image ?>); background-repeat: no-repeat;">
                <div class="content-image" style="background-image: url(<?php echo $welcome_view__content_image ?>); background-repeat: no-repeat;"></div>
            </div>
        </div>


        <div class="welcome-view__description">

            <p><?php echo $welcome_view__description ?></p>

        </div>

        <div class="welcome-view__cta-wrapper">
            <a href="#" class="button button__cta">Read more</a>
        </div>

    </div>
</section>