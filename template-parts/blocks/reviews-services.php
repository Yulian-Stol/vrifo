<section class="reviews-services">
    <div class="container">

        <?php
        $service_title = get_field('service_title');
        $service_subtitle = get_field('service_subtitle');
        $service_word_highlighted = get_field('service_select');

        $args = array(
            'position' => 'center',
            'section-title' => $service_title,
            'section-subtitle' => $service_subtitle,
            'section-word-highlighted' => $service_word_highlighted,
        );

        get_template_part('template-parts/section-header', null, $args);
        ?>

        <div class="row">
            <div class="col">
                <ul class="reviews-services__list">
                    <?php if (have_rows('service_list')) : ?>
                        <?php
                        $service_item = 0;
                        while (have_rows('service_list')) : the_row();
                            $icon = get_sub_field('service_icon');
                            $title = get_sub_field('service_item_title');
                            $link = get_sub_field('service_link');
                            $service_item++;
                        ?>
                            <li><a class="service" href="<?= $link; ?>"><img src="<?= $icon; ?>" alt=""><?= $title; ?></a></li>

                            <?php if ($service_item == 4 || $service_item == 9) : ?>
                                <div class="flex-row-break"></div>
                            <?php endif; ?>

                    <?php endwhile;
                    endif; ?>

                    <?php if ($service_item >= 12) : ?>
                        <?php
                        $more_link = get_field('link_service_more');
                        ?>
                        <li>
                            <a class="service" href="<?= $more_link; ?>">
                                <img src="<?= assets("icons/more.svg") ?>" alt="">
                                More
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>