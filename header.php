<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= the_title() ?></title>
    <?php wp_head(); ?>
</head>

<?php
$header_primary = isset($args['header_class']) ? esc_attr($args['header_class']) : '';
?>

<body class="<?php echo $header_primary; ?>">

    <header class="header">
        <div class="container">
            <div class="row justify-center">
                <div class="col">
                    <div class="header__wrap">
                        <a href="#" class="header__logo">
                            <?php if ($header_primary) : ?>
                                <img src="<?= assets("img/logo-primary.svg") ?>" alt="logo">
                            <?php else : ?>
                                <img src="<?= assets("img/logo.svg") ?>" alt="logo">
                            <?php endif; ?>
                        </a>

                        <nav class="header__nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Testimonials</a> <span>53</span></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <a href="#" class="btn btn--secondary btn--small d-to--lg">Contact us</a>
                        </nav>

                        <a href="#" class="btn btn--secondary btn--small d-from--lg">Contact us</a>

                        <button class="hamburger" type="button">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>