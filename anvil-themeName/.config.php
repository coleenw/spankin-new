<?php

return [
    /*
     |----------------------------------------------------------------
     |  Theme Related
     |----------------------------------------------------------------
     */
    'theme_slug' => 'anvil',

    /*
     |----------------------------------------------------------------
     |  Theme Assets
     |----------------------------------------------------------------
     */
    'site_logo'  => 'images/logo.png',
    'admin_logo' => 'images/logo.png',
    'favicon'    => null, // 'images/favicon.png',
    'phone_icon' => null, //'images/phone-icon.png',
    'typekit_id' => null,

    /*
     |----------------------------------------------------------------
     |  Theme Menus
     |----------------------------------------------------------------
     */
    'menus' => [
        'utility' => 'Utility Menu',
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
        'privacy' => 'Privacy Menu',
    ],

    /*
     |----------------------------------------------------------------
     |  Thumbnail Sizes
     |----------------------------------------------------------------
     | 'size-name' => ['width', 'height', 'crop']
     */
    'thumbnail_sizes' => [
        'fs-max'     => [1800, null],
        'fs-full'    => [1200, null],
        'fs-desktop' => [980, null],
        'fs-tablet'  => [768, null],
        'fs-mobile'  => [480, null],
        // 'hp-service' => [480, 320, true],
    ],

    /*
     |----------------------------------------------------------------
     |  Custom Post Types
     |----------------------------------------------------------------
     */
    'custom_post_types' => [
        'service' => [
            'singular'  => 'Service',
            'plural'    => 'Services',
            'url_slug'  => 'our-services',
            'menu_icon' => 'dashicons-nametag',
        ],
    ],

    /*
     |----------------------------------------------------------------
     |  Taxonomies
     |----------------------------------------------------------------
     */
    'custom_taxonomies' => [
        'service_type' => [
            'singular'   => 'Service Type',
            'plural'     => 'Service Types',
            'url_slug'   => 'service-types',
            'post_types' => 'service',
        ],
    ],

    /*
     |----------------------------------------------------------------
     |  Google Fonts
     |----------------------------------------------------------------
     */
    'google_fonts' => 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i',

    /*
     |----------------------------------------------------------------
     |  Frontend Scripts
     |----------------------------------------------------------------
     */
    'frontend_scripts' => [
        'modernizr'    => 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
        // 'fancybox'     => 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js',
        // 'slick'        => 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js',
        // 'wow'          => 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',
        'theme-script' => 'scripts/site-js.js',
    ],

    /*
     |----------------------------------------------------------------
     |  Frontend Styles
     |----------------------------------------------------------------
     */
    'frontend_styles' => [
        'fontawesome' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
        // 'fancybox'    => 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css',
        // 'slick'       => 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css',
        // 'animate'     => 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',
        'theme-style' => 'styles/css/main-style.css',
    ],

    /*
     |----------------------------------------------------------------
     |  Admin Scripts
     |----------------------------------------------------------------
     */
    'admin_scripts' => [
        'theme-admin' => 'scripts/admin-js.js',
    ],

    /*
     |----------------------------------------------------------------
     |  Admin Styles
     |----------------------------------------------------------------
     */
    'admin_styles' => [
        'fontawesome' => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css',
        'theme-admin' => 'styles/css/admin-style.css',
    ],

    /*
     |----------------------------------------------------------------
     |  Editor Styles
     |----------------------------------------------------------------
     */
    'editor_styles' => [
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
        'styles/css/wysiwyg.css',
    ],

    /*
     |----------------------------------------------------------------
     |  ACF Option Pages
     |----------------------------------------------------------------
     */
    'acf_option_pages' => [
        'General',
        'Banner',
        'Header',
        'Footer',
    ],

    /*
     |----------------------------------------------------------------
     |  TinyMCE Additional Styles
     |----------------------------------------------------------------
     */
    'enable_tinymce_additional_styles' => true,
    'tinymce_additional_styles' => [
        [
            'title'   => 'Intro Paragraph',
            'block'   => 'p',
            'classes' => 'intro',
            'wrapper' => false,
        ],
    ],

    /*
     |----------------------------------------------------------------
     |  TinyMCE Text Color
     |----------------------------------------------------------------
     */
    'enable_tinymce_text_colors' => false,
    'tinymce_text_colors' => [
        '262626', 'Black',
        '2f9ba8', 'Blue',
    ],

    /*
     |----------------------------------------------------------------
     |  ACF Banner Manager
     |----------------------------------------------------------------
     */
    'enable_acf_banner_manager' => true,
    'acf_banner_manager_setting' => [
        'auto_import_default_banner_field_group' => true,
        'acf_option_page_name' => 'Banner'
    ],

    /*
     |----------------------------------------------------------------
     |  Menu Active State Helper
     |----------------------------------------------------------------
     */
    'enable_menu_active_state_control' => true,

    /*
     |--------------------------------------------------------------------------
     | Background Helper
     |--------------------------------------------------------------------------
    */
    'enable_responsive_background_control' => true,
    'responsive_background_setting' => [
        'max_screen_size' => 1800,
        'max_thumbnail_size' => 'fs-full',
        'breakpoints' => [
            'xs' => 480,
            'sm' => 640,
            'md' => 768,
            'lg' => 980,
            'xl' => 1200,
            'xxl' => 1400
        ],
        'preset' => [
            'db-full-width' => 'md:2+'
        ],
    ],

];
