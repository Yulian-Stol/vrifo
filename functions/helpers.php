<?php

function assets($asset) {
    return get_template_directory_uri() . '/frontend/' . $asset;
}

// Finding CPT in templates folder
function custom_single_template($template) {
    global $post;

    $custom_template_location = 'templates/single-' . $post->post_type . '.php';

    if ( $theme_file = locate_template( array( $custom_template_location ) ) ) {
        $template = $theme_file;
    }

    return $template;
}

add_filter('single_template', 'custom_single_template');


function populate_word_select( $field ) {
    $fields_to_populate = array(
        'hero_select' => 'hero_title',
        'select' => 'title',
        'offer_select' => 'offer_title',
        'service_select' => 'service_title',
        'testimonials_select' => 'testimonials_title',
        'faq_select' => 'faq_title',
        'subtitle_select' => 'subtitle',
    );

    if( array_key_exists( $field['name'], $fields_to_populate ) ) {
        $text = get_field( $fields_to_populate[ $field['name'] ] );
        
        if( !$text ) return $field;

        $words = explode(' ', $text);

        // Reset choices to an empty array
        $field['choices'] = array();

        foreach( $words as $index => $word ) {
            $field['choices'][ $index ] = $word;  // Use the index so we don't lose duplicates
        }

        $field['multiple'] = true;
    }

    return $field;
}
add_filter('acf/load_field', 'populate_word_select');


function get_highlighted_text($text = '', $selected_phrases = array()) {
    if (is_string($text) && !empty($selected_phrases)) {
        foreach ($selected_phrases as $selected_phrase) {
            // We're combining the words into a single phrase for matching purposes
            $phrase = implode(' ', $selected_phrase);
            if (strpos($text, $phrase) !== false) {
                $text = str_replace($phrase, '<span class="highlighted">' . $phrase . '</span>', $text);
            }
        }
    }
    return $text;
}

function indexes_to_words($text, $indexes) {
    $words = explode(' ', $text);
    $selected_words = array();

    foreach ($indexes as $index) {
        if (isset($words[$index])) {
            $selected_words[] = $words[$index];
        }
    }

    return $selected_words;
}



