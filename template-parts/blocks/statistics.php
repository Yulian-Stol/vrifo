<section class="statistics">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="statistics__list">

                    <?php if (have_rows('statistic')) : ?>
                        <?php $total_steps = count(get_field('statistic')); ?>
                        <?php $current_step = 0; ?>
                        <?php while (have_rows('statistic')) : the_row();
                            $number = get_sub_field('number');
                            $description = get_sub_field('description');
                            $current_step++;
                        ?>

                            <div class="statistics__item">
                                <p class="statistics__item-number h1">
                                    <?= $number; ?>
                                </p>

                                <p class="statistics__item-info h5">
                                    <?= $description; ?>
                                </p>
                            </div>


                            <?php if ($current_step < $total_steps) : ?>
                                <span class="statistics__line"></span>
                            <?php endif; ?>
                    <?php endwhile;
                    endif;  ?>

                </div>
            </div>
        </div>
    </div>
</section>