<?php
/*
 |----------------------------------------------------------------
 |  Site Logo
 |----------------------------------------------------------------
 */
function anvil_site_logo($class = 'site-logo') {
    printf(
        '<a href="%1$s" title="%2$s" rel="home"><img src="%3$s" alt="%2$s" class="%4$s" /></a>',
        home_url(),
        esc_attr(get_bloginfo('name')),
        trailingslashit(get_stylesheet_directory_uri()) . Anvil::instance()->config('site_logo'),
        $class
    );
}

/*
 |----------------------------------------------------------------
 |  Button Base HTML Structure
 |----------------------------------------------------------------
 */
function anvil_button($button_text, $button_link, $additional_class = 'default', $additional_attrs = '') {
    if (is_array($additional_class)) {
        $additional_class = implode(' ', array_map('trim', $additional_class));
    }

    $attrs = '';

    foreach (wp_parse_args($additional_attrs) as $attr => $value) {
        $attrs .= sprintf('%s="%s" ', $attr, esc_attr($value));
    }

    return sprintf(
        '<a href="%s" class="button %s" %s>%s</a>',
        esc_url($button_link),
        $additional_class,
        $attrs,
        $button_text
    );
}

/*
 |----------------------------------------------------------------
 |  Button Base HTML Structure
 |----------------------------------------------------------------
 */
// add_filter('gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button($button, $form) {
    return "<button class='button gf_submit default' id='gform_submit_button_{$form['id']}'>{$form['button']['text']}</button>";
}

/*
 |----------------------------------------------------------------
 |  Background Helpers
 |----------------------------------------------------------------
 */
function forge_bg($attachmentId = null, $preset = null, $pseudo = '') {
    if (is_null($attachmentId)) {
        $attachmentId = get_post_thumbnail_id(get_the_ID());
    }

    wp_bg_helper($attachmentId, $preset, $pseudo);
}

add_action('wp_footer', 'forge_bg_styles', 50);
function forge_bg_styles() {
    wp_bg_helper_print_styles(true);
}

/*
 |--------------------------------------------------------------------------
 | Post Helper
 |--------------------------------------------------------------------------
*/
function forge_title_link($post = null) {
    echo forge_get_title_link($post);
}

function forge_get_title_link($post = null) {
    return sprintf(
        '<a href="%s" title="%s">%s</a>',
        get_permalink($post),
        the_title_attribute(['post' => $post, 'echo' => false]),
        get_the_title($post)
    );
}

function forge_thumbnail_link($size = 'medium_large', $post = null) {
    echo forge_get_thumbnail_link($size, $post);
}

function forge_get_thumbnail_link($size = 'medium_large', $post = null) {
    if (! has_post_thumbnail($post)) return '';

    return sprintf(
        '<a href="%s" title="%s">%s</a>',
        get_permalink($post),
        the_title_attribute(['post' => $post, 'echo' => false]),
        get_the_post_thumbnail($post, $size)
    );
}

/*
 |--------------------------------------------------------------------------
 | Terms Helper
 |--------------------------------------------------------------------------
*/
function forge_get_terms($taxonomy, $args = []) {
    $taxonomy = get_taxonomy($taxonomy);

    $args = wp_parse_args($args, [
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => [
            'relation' => 'OR',
            [
                'key' => $taxonomy->object_type[0] . '_order',
                'compare' => 'NOT EXISTS'
            ],
            [
                'key' => $taxonomy->object_type[0] . '_order',
                'value' => 0,
                'compare' => '>='
            ]
        ]
    ]);

    return get_terms($taxonomy->name, $args)? : [];
}

function forge_get_the_terms($taxonomy, $args = []) {
    return forge_get_terms($taxonomy, wp_parse_args($args, [
        'object_ids' => get_the_ID()
    ]));
}

function forge_the_primary_term($taxonomy, $post_id = null, $args = []) {
    if (! $post_id) $post_id = get_the_ID();

    if (class_exists('WPSEO_Primary_Term')) {
        $wpseo_primary_term = new WPSEO_Primary_Term($taxonomy, $post_id);
        $wpseo_primary_term = $wpseo_primary_term->get_primary_term();

        if ($wpseo_primary_term && $term = get_term($wpseo_primary_term)) {
            return $term;
        }
    }

    $terms = forge_get_the_terms($taxonomy, $post_id)? : [];

    return $terms? array_shift($terms) : false;
}

function forge_term_link($term) {
    echo forge_get_term_link($term);
}

function forge_get_term_link($term) {
    return sprintf('<a href="%s">%s</a>', get_term_link($term), $term->name);
}

/*
 |----------------------------------------------------------------
 |  Section Name
 |----------------------------------------------------------------
 */
