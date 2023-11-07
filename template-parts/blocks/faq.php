<section class="faq">
    <div class="container">

        <?php
        $faq_title = get_field('faq_title');
        $faq_subtitle = get_field('faq_subtitle');
        $faq_word_highlighted = get_field('faq_select');

        $args = array(
            'position' => 'center',
            'section-title' => $faq_title,
            'section-subtitle' => $faq_subtitle,
            'section-word-highlighted' => $faq_word_highlighted,
        );

        get_template_part('template-parts/section-header', null, $args);
        ?>

        <div class="row">
            <div class="faq__list">
                <?php if (have_rows('questions')) : ?>
                    <?php while (have_rows('questions')) : the_row();
                        $question = get_sub_field('questions_title');
                        $answer = get_sub_field('answer');
                    ?>
                        <div class="faq__accordion">
                            <div class="faq__accordion-header js-faq-header">
                                <h5><?= $question; ?></h5>
                                <span class="faq__accordion-btn"></span>
                            </div>

                            <div class="faq__accordion-content js-faq-content">
                                <p><?= $answer; ?></p>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>

            </div>
        </div>
    </div>
</section>