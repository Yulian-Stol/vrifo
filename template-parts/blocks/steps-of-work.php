<section class="steps-of-work">
    <div class="container">

        <?php
        $work_title = get_field('work_title');
        $work_subtitle = get_field('work_subtitle');
        $work_word_highlighted = get_field('work_select');

        $args = array(
            'position' => 'center',
            'section-title' => $work_title,
            'section-subtitle' => $work_subtitle,
            'section-word-highlighted' => $work_word_highlighted,
        );

        get_template_part('template-parts/section-header', null, $args);
        ?>

        <div class="row">
            <div class="col">
                <div class="steps-of-work__list">

                    <?php if (have_rows('steps')) : ?>
                        <?php $total_steps = count(get_field('steps')); ?>
                        <?php $current_step = 0; ?>
                        <?php while (have_rows('steps')) : the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $current_step++;
                        ?>
                            <div class="steps-of-work__item">
                                <div class="steps-of-work__item-img">
                                    <img src="<?= $image; ?>" alt="">
                                </div>

                                <p class="steps-of-work__item-number-step">
                                    STEP <?= $current_step; ?>
                                </p>

                                <h5 class="steps-of-work__item-title">
                                    <?= $title; ?>
                                </h5>
                            </div>

                            <?php if ($current_step < $total_steps) : ?>
                                <div class="steps-of-work__bullets">
                                    <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>