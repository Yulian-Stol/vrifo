<section class="text-with-image">
    <div class="container">

        <?php
        $image_position = get_field('image_position');
        $position = ($image_position === 'left') ? 'row-reverse' : '';
        ?>

        <div class="row justify-center align-center <?= $position; ?>">
            <div class="col-xl-6">

                <?php
                $title = get_field('title');
                $subtitle = get_field('subtitle');
                $word_highlighted = get_field('select');

                $args = array(
                    'position' => 'left',
                    'section-title' => $title,
                    'section-subtitle' => $subtitle,
                    'section-word-highlighted' => $word_highlighted,
                );

                get_template_part('template-parts/section-header', null, $args);
                ?>


                <?php
                if (have_rows('flexible_content')) :
                    while (have_rows('flexible_content')) : the_row();
                ?>
                        <div class="text-with-image__content">
                            <?php
                            switch (get_row_layout()) {
                                case 'content_text':
                                    $text = get_sub_field('text');
                            ?>
                                    <?= $text; ?>
                                <?php
                                    break;

                                case 'content_btn':
                                    $btn_text = get_sub_field('button');
                                    $link = get_sub_field('button_link');
                                ?>
                                    <a href="<?= $link; ?>" class="btn"><?= $btn_text; ?></a>
                                <?php
                                    break;

                                case 'content_list':
                                ?>
                                    <div class="text-with-image__list">
                                        <?php if (have_rows('list')) : ?>
                                            <?php while (have_rows('list')) : the_row();
                                                $text = get_sub_field('list_text');
                                            ?>
                                                <div class="item">
                                                    <img src="<?= assets("icons/icon-star.svg") ?>" alt="">
                                                    <?= $text; ?>
                                                </div>
                                        <?php endwhile;
                                        endif; ?>
                                    </div>
                                <?php
                                    break;

                                case 'content_list_image':
                                ?>
                                    <div class="text-with-image__benefits">
                                        <?php if (have_rows('list_image')) : ?>
                                            <?php while (have_rows('list_image')) : the_row();
                                                $title = get_sub_field('list_image_title');
                                                $description = get_sub_field('list_image_text');
                                                $icon = get_sub_field('list_image_icon');
                                            ?>
                                                <div class="item">
                                                    <img src="<?= $icon; ?>" alt="">
                                                    <div class="item__content">
                                                        <p class="item__content-title"><?= $title; ?></p>
                                                        <p class="item__content-description">
                                                            <?= $description; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                        <?php endwhile;
                                        endif; ?>
                                    </div>
                            <?php
                                    break;
                            }
                            ?>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>

            </div>

            <div class="col-xl-6">
                <?php
                $image_url = get_field('image');
                ?>
                <div class="text-with-image__img">
                    <img src="<?= $image_url; ?>" alt="">
                </div>
            </div>

        </div>
    </div>
    </div>
</section>