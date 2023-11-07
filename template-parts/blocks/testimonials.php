<section class="testimonials">
    <div class="container testimonials__container">
        <div class="row align-center">

            <?php
            $testimonials_title = get_field('testimonials_title');
            $testimonials_description = get_field('testimonials_text');
            $testimonials_word_highlighted = get_field('testimonials_select');
            ?>

            <div class="col-lg-4">
                <h2 class="testimonials__title"><?= get_highlighted_text($testimonials_title, $testimonials_word_highlighted); ?></h2>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <h5><?= $testimonials_description; ?></h5>
            </div>
        </div>
    </div>

    <?php
    $args_top = array(
        'slider_section' => 'top',
    );

    $args_bottom = array(
        'slider_section' => 'bottom',
    );
    ?>

    <div class="testimonials__slider--top">
        <?php get_template_part('template-parts/testimonials', null, $args_top); ?>
    </div>

    <div class="testimonials__slider--bottom">
        <?php get_template_part('template-parts/testimonials', null, $args_bottom); ?>
    </div>
</section>