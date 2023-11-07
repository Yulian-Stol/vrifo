<?php
/* Template name: All reviews services */
?>


<?php
$header_class = 'header-primary';
get_template_part('header', null, ['header_class' => $header_class]);
?>

<!-- Steps of work -->
<?= get_template_part('template-parts/blocks/steps-of-work'); ?>

<!-- Hero all reviews services -->
<?php get_template_part( 'template-parts/blocks/hero-all-reviews-services' ); ?>

<?php get_footer(); ?>