<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 50,
    'post_status' => array('publish'),
    'slider_section' => $args['slider_section'],
);

$query = new WP_Query($args);
$counter = 0;
$slider_section = $args['slider_section'];

if ($query->have_posts()) {
    echo '<div class="testimonials__slider-list">';
    while ($query->have_posts()) {
        $query->the_post();
        $counter++;

        if ($slider_section === 'top' && $counter > 25) {
            break;
        } elseif ($slider_section === 'bottom' && $counter <= 25) {
            continue;
        }
?>
        <div class="testimonial">
            <?php
            $title = get_the_title();
            $testimonials = get_field('testimonials');
            $testimonials_name = $testimonials['testimonials_name'];
            $testimonials_image = $testimonials['testimonials_image'];
            $testimonials_rating = $testimonials['testimonials_rating'];
            $business_review = $testimonials['business_review'];
            ?>
            <p class="testimonial__title"><?= $title; ?></p>

            <div class="testimonial__bottom">
                <div class="testimonial__client">
                    <div class="testimonial__client-photo">
                        <img src="<?= $testimonials_image; ?>" alt="">
                    </div>
                    <div class="testimonial__client-info">
                        <p class="testimonial__client-info-name"><?= $testimonials_name; ?></p>
                        <p class="testimonial__client-info-business"><?= $business_review; ?></p>
                    </div>
                </div>
                <div class="testimonial__rating">
                    <?php
                    if ($testimonials_rating >= 1 && $testimonials_rating <= 5) {
                        echo str_repeat('<img src="' . assets("icons/star.svg") . '" alt="Star">', $testimonials_rating);
                    }
                    ?>
                </div>
            </div>
        </div>
<?php
    }
    echo '</div>';
    wp_reset_postdata();
}
?>