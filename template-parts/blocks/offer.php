<section class="offer">
    <div class="container">

        <?php
        $offer_title = get_field('offer_title');
        $offer_link = get_field('offer_button_link');
        $offer_btn = get_field('offer_button_name');
        $offer_word_highlighted = get_field('offer_select');
        ?>

        <div class="row">
            <div class="col-lg-8">
                <h2 class="offer__title"><?= get_highlighted_text($offer_title, $offer_word_highlighted); ?></h2>
            </div>

            <div class="col-lg-4">
                <div class="offer__btn">
                    <a href="<?= $offer_link; ?>" class="btn btn--big btn--mob-full-width"><?= $offer_btn; ?></a>
                </div>

            </div>
        </div>
    </div>
</section>