<?php
$position = $args['position'];
$title = $args['section-title'];
$subtitle = $args['section-subtitle'];
$word_title_highlighted = $args['section-word-highlighted'];
$word_subtitle_highlighted = $args['section-subtitle-word-highlighted'];
?>

<div class="section-header">
    <?php if ($position === 'left') : ?>
        <div class="section-header--<?= $position ?>">
            <h2 class="section-header__title"><?= get_highlighted_text($title, array($word_title_highlighted)); ?></h2>
            <?php if ($subtitle) : ?>
                <h3 class="section-header__subtitle h6"><?= get_highlighted_text($subtitle, array($word_subtitle_highlighted)); ?> </h3>
            <?php endif; ?>
        </div>
    <?php else : ?>
        <div class="row justify-center">
            <div class="col-lg-7 text-<?= $position ?>">
                <div class="section-header--<?= $position ?>">
                    <h2 class="section-header__title"><?= get_highlighted_text($title, $word_highlighted); ?></h2>
                    <?php if ($subtitle) : ?>
                        <h3 class="section-header__subtitle h6"><?= $subtitle ?></h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>