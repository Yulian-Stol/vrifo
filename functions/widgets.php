<?php
add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars() {
    register_sidebar(array(
        'name'          => 'footer',
        'id'            => 'footer',
        'before_widget' => '<div class="footer__box">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer__box-header"><h3>',
        'after_title'   => '</div></h3>',
    ));
}
