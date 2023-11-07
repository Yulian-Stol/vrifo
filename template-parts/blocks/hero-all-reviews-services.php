<?php
$image = get_field('image');
$btn = get_field('button');
$btn_link = get_field('button_link');
?>

<section class="hero-all-reviews-services">
    <div class="container">
        <div class="row justify-center align-center text-left">
            <div class="col-xl-6">

                <?php
                $title = get_field('title');
                $subtitle = get_field('subtitle');
                $word_title_highlighted_indexes = get_field('select');
                $word_subtitle_highlighted_indexes = get_field('subtitle_select');

                $word_title_highlighted = indexes_to_words($title, $word_title_highlighted_indexes);
                $word_subtitle_highlighted = indexes_to_words($subtitle, $word_subtitle_highlighted_indexes);

                $args = array(
                    'position' => 'left',
                    'section-title' => $title,
                    'section-subtitle' => $subtitle,
                    'section-word-highlighted' => $word_title_highlighted,
                    'section-subtitle-word-highlighted' => $word_subtitle_highlighted,
                );

                get_template_part('template-parts/section-header', null, $args);
                ?>

                <div class="hero-all-reviews-services__btn">
                    <a href="<?= $btn_link; ?>" class="btn"><?= $btn; ?></a>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="hero-all-reviews-services__img">
                    <img src="<?= $image; ?>" alt="">
                </div>
            </div>

        </div>
    </div>
</section>