<section class="hero">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-10 text-center">

                <?php
                $hero_title = get_field('hero_title');
                $hero_subtitle = get_field('hero_subtitle');
                $hero_word_highlighted = get_field('hero_select');
                ?>

                <div class="hero__header">
                    <h1 class="hero__title"><?= get_highlighted_text($hero_title, $hero_word_highlighted); ?></h1>
                    <h3 class="hero__subtitle h5"><?= $hero_subtitle; ?></h3>
                </div>
            </div>
        </div>

        <div class="row justify-center">
            <div class="col">
                <ul class="hero__company-quick-info">
                    <li class="btn btn--white"><img src="<?= assets("icons/calendar.svg") ?>" alt=""> 3 Years of Experience</li>
                    <li class="btn btn--white"><img src="<?= assets("icons/star.svg") ?>" alt=""> 22k+ Posted reviews</li>
                    <div class="flex-row-break"></div>
                    <li class="btn btn--white"><img src="<?= assets("icons/like.svg") ?>" alt=""> 1.5k Happy Customer</li>
                    <li class="btn btn--white"><img src="<?= assets("icons/suport.svg") ?>" alt=""> 24h Support</li>
                </ul>
            </div>
        </div>
    </div>
</section>