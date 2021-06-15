<?php
$how_does_it_work = get_field("how_does_it_work");

$how_does_it_work_title_1 = $how_does_it_work["title_part_1"];
$how_does_it_work_title_2 = $how_does_it_work["title_part_2"];
$how_does_it_work_description = $how_does_it_work["description"];

$step_number_1 = $how_does_it_work["step_number_1"];
$step_title_1 = get_field("step_title_1", get_option( 'page_on_front' ));

$step_number_2 = get_field("step_number_2");
$step_title_2 = get_field("step_title_2");

$step_number_3 = get_field("step_number_3");
$step_title_3 = get_field("step_title_3");

$step_number_4 = get_field("step_number_4");
$step_title_4 = get_field("step_title_4");

$step_number_5 = get_field("step_number_5");
$step_title_5 = get_field("step_title_5");

$step_number_6 = get_field("step_number_6");
$step_title_6 = get_field("step_title_6");



?>

<section class="how-does-it-work how-does-it-work--home-page">
    <div class="how-does-it-work__content">

        <div class="how-does-it-work__title">
            <h1><?php echo $how_does_it_work_title_1 ?> <br /><span class="font-outline__red"><?php echo $how_does_it_work_title_2 ?></span></h1>
        </div>

        <div class="how-does-it-work__description">
            <p>
                <?php echo $how_does_it_work_description ?>
            </p>

            <a href="<?php echo get_permalink(get_page_by_title( 'How does it work' )) ?>" class="button button__cta desktop-only">Read more</a>

        </div>

        <div class="how-does-it-work__structure">

            <?php get_template_part( 'template-parts/partials/how-does-it-work-structure-mobile'); ?>

            <?php get_template_part( 'template-parts/partials/how-does-it-work-structure-desktop'); ?>

        </div>

        <a href="<?php echo get_permalink(get_page_by_title( 'How does it work' )) ?>" class="button button__cta mobile-only">Read more</a>

    </div>
</section>