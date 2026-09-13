<?php
/**
 * Helper Functions
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Get container class with max-width
 */
function ulx_container($extra_classes = '') {
    $classes = 'mx-auto px-4 sm:px-6 lg:px-8 w-full max-w-[var(--container-width)]';
    if ($extra_classes) {
        $classes .= ' ' . $extra_classes;
    }
    return $classes;
}

/**
 * Echo container class
 */
function ulx_container_class($extra = '') {
    echo esc_attr(ulx_container($extra));
}

/**
 * Get SVG icon
 *
 * Includes width/height HTML attributes derived from the Tailwind class
 * to prevent FOUC (large icons flash) before CSS loads.
 */
function ulx_icon($name, $class = 'w-5 h-5') {
    // Tailwind spacing scale → px (prevents FOUC before CSS loads)
    $size_map = [3 => 12, 4 => 16, 5 => 20, 6 => 24, 8 => 32, 10 => 40];
    $w = 20;
    $h = 20;
    if (preg_match('/\bw-(\d+)\b/', $class, $m)) {
        $w = $size_map[(int) $m[1]] ?? 20;
    }
    if (preg_match('/\bh-(\d+)\b/', $class, $m)) {
        $h = $size_map[(int) $m[1]] ?? 20;
    }

    $attrs = 'class="' . esc_attr($class) . '" width="' . $w . '" height="' . $h . '" focusable="false" aria-hidden="true"';

    $icons = [
        'cart'         => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>',
        'search'       => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>',
        'user'         => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>',
        'menu'         => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/></svg>',
        'close'        => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/></svg>',
        'chevron-down' => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/></svg>',
        'arrow-right'  => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>',
        'star'         => '<svg ' . $attrs . ' fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>',
        'phone'        => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>',
        'location'     => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
        'email'        => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>',
        'check'        => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>',
        'factory'      => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>',
        'shield'       => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>',
        'truck'        => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10l1 1h9zM13 8h3l2 3v4h-5V8z"/></svg>',
        'custom'       => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/></svg>',
        'palette'      => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>',
        'zap'          => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>',
        'facebook'     => '<svg ' . $attrs . ' fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>',
        'instagram'    => '<svg ' . $attrs . ' fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>',
        'tiktok'       => '<svg ' . $attrs . ' fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>',
        'youtube'      => '<svg ' . $attrs . ' fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>',
        'trophy'       => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3h14l-1.405 8.838a4 4 0 01-3.96 3.412h-3.27a4 4 0 01-3.96-3.412L5 3zm0 0H3a1 1 0 00-1 1v1a3 3 0 003 3h.5M19 3h2a1 1 0 011 1v1a3 3 0 01-3 3h-.5M12 15.25V19m-3 0h6m-3 0v2"/></svg>',
        'file-text'    => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></svg>',
        'globe'        => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke-width="1.5"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 12h20M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>',
        'clipboard'    => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>',
        'package'      => '<svg ' . $attrs . ' fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>',
        'whatsapp'     => '<svg ' . $attrs . ' fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>',
    ];

    return $icons[$name] ?? '';
}

/**
 * Get breadcrumb (simple, no plugin required)
 */
function ulx_breadcrumb($dark = false) {
    if (is_front_page()) return;

    $link   = $dark ? 'text-white/35 hover:text-white/55 transition-colors' : 'text-muted hover:text-primary transition-colors';
    $active = $dark ? 'text-white/75 font-medium'                          : 'text-text font-medium';
    // Explicit separator element — avoids Tailwind JIT missing before:content-[] in PHP strings
    $sep    = '<li aria-hidden="true" class="' . ($dark ? 'text-white/30' : 'text-muted/50') . ' select-none">/</li>';

    echo '<nav class="text-sm mb-6" aria-label="Breadcrumb">';
    echo '<ol class="flex items-center gap-1.5">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="' . $link . '">' . esc_html__('Home', 'ulx') . '</a></li>';

    // Parent page breadcrumb (e.g., Home > Capabilities > CNC Milling)
    if (is_page() && !is_front_page()) {
        $post = get_post();
        if ($post && $post->post_parent) {
            $parent = get_post($post->post_parent);
            if ($parent) {
                echo $sep . '<li><a href="' . esc_url(get_permalink($parent)) . '" class="' . $link . '">' . esc_html(get_the_title($parent)) . '</a></li>';
            }
        }
    }

    if (is_page() && !is_front_page()) {
        echo $sep . '<li class="' . $active . '">' . esc_html(get_the_title()) . '</li>';
    }

    // Blog listing page (home.php): Home > Blog
    if (is_home()) {
        $blog_page_id = (int) get_option('page_for_posts');
        $blog_label   = $blog_page_id ? get_the_title($blog_page_id) : __('Blog', 'ulx');
        echo $sep . '<li class="' . $active . '">' . esc_html($blog_label) . '</li>';
    }

    // Category / Tag / Date archives: Home > Blog > {Archive}
    if (is_archive()) {
        $blog_page_id = (int) get_option('page_for_posts');
        if ($blog_page_id) {
            echo $sep . '<li><a href="' . esc_url(get_permalink($blog_page_id)) . '" class="' . $link . '">' . esc_html(get_the_title($blog_page_id)) . '</a></li>';
        }
        if (is_category()) {
            echo $sep . '<li class="' . $active . '">' . esc_html(single_cat_title('', false)) . '</li>';
        } elseif (is_tag()) {
            echo $sep . '<li class="' . $active . '">' . esc_html(single_tag_title('', false)) . '</li>';
        } elseif (is_author()) {
            echo $sep . '<li class="' . $active . '">' . esc_html(get_the_author()) . '</li>';
        } elseif (is_date()) {
            echo $sep . '<li class="' . $active . '">' . esc_html(get_the_date()) . '</li>';
        }
    }

    if (is_single()) {
        echo $sep . '<li><a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '" class="' . $link . '">' . esc_html__('Blog', 'ulx') . '</a></li>';
        echo $sep . '<li class="' . $active . ' truncate max-w-[200px]">' . esc_html(get_the_title()) . '</li>';
    }

    echo '</ol>';
    echo '</nav>';
}

/**
 * Truncate text with ellipsis
 */
function ulx_truncate($text, $length = 120) {
    if (strlen($text) <= $length) return $text;
    return rtrim(substr($text, 0, $length)) . '...';
}

/**
 * Navigation fallback — desktop header
 * Renders a flat list of published top-level pages when no menu is assigned.
 */
function ulx_nav_fallback() {
    $pages = get_pages([
        'sort_column' => 'menu_order',
        'post_status' => 'publish',
        'parent'      => 0,
        'number'      => 8,
    ]);

    if (empty($pages)) return;

    echo '<ul class="flex items-center gap-1">';
    foreach ($pages as $page) {
        $active = (get_queried_object_id() === $page->ID) ? ' !text-white' : '';
        echo '<li><a href="' . esc_url(get_permalink($page->ID)) . '"'
            . ' class="px-4 py-2 text-sm font-medium text-white/80 hover:text-white transition-colors' . $active . '">'
            . esc_html($page->post_title)
            . '</a></li>';
    }
    echo '</ul>';
}

/**
 * Navigation fallback — mobile menu
 */
function ulx_mobile_nav_fallback() {
    $pages = get_pages([
        'sort_column' => 'menu_order',
        'post_status' => 'publish',
        'parent'      => 0,
        'number'      => 8,
    ]);

    if (empty($pages)) return;

    echo '<ul class="space-y-1">';
    foreach ($pages as $page) {
        echo '<li><a href="' . esc_url(get_permalink($page->ID)) . '"'
            . ' class="block py-3 text-base font-medium border-b border-border/50">'
            . esc_html($page->post_title)
            . '</a></li>';
    }
    echo '</ul>';
}

/**
 * Inject anchor IDs into H2 tags in post content.
 * Runs early (priority 8) so ulx_get_toc_headings() can match them.
 *
 * @param  string $content Filtered post content.
 * @return string
 */
function ulx_inject_heading_ids( $content ) {
    return preg_replace_callback(
        '/<h2([^>]*)>(.*?)<\/h2>/is',
        function ( $matches ) {
            // Skip if an id attribute already exists.
            if ( preg_match( '/\bid=["\']/', $matches[1] ) ) {
                return $matches[0];
            }
            $text = wp_strip_all_tags( $matches[2] );
            $id   = sanitize_title( $text );
            return '<h2' . $matches[1] . ' id="' . esc_attr( $id ) . '">' . $matches[2] . '</h2>';
        },
        $content
    );
}
add_filter( 'the_content', 'ulx_inject_heading_ids', 8 );

/**
 * Extract H2 headings from a post for the Table of Contents sidebar.
 * Returns an array of ['id' => '...', 'text' => '...'].
 *
 * @param  int|null $post_id Defaults to current post.
 * @return array<int, array{id: string, text: string}>
 */
function ulx_get_toc_headings( $post_id = null ) {
    $raw     = get_post_field( 'post_content', $post_id ?? get_the_ID() );
    $content = apply_filters( 'the_content', $raw );

    preg_match_all( '/<h2[^>]+id="([^"]+)"[^>]*>(.*?)<\/h2>/is', $content, $matches, PREG_SET_ORDER );

    $headings = [];
    foreach ( $matches as $match ) {
        $headings[] = [
            'id'   => $match[1],
            'text' => wp_strip_all_tags( $match[2] ),
        ];
    }
    return $headings;
}

/**
 * Contact channels — single source of truth for phone / WhatsApp / email.
 *
 * Override with the 'ulx_contact_channels' filter.
 *
 * @return array{phone: string, whatsapp: string, email: string}
 */
function ulx_contact_channels() {
    return apply_filters( 'ulx_contact_channels', [
        'phone'    => '+86 15889750371',
        'whatsapp' => '+86 15889750371',
        'email'    => 'sales@kmwcnc.com',
    ] );
}

/**
 * Get a single contact channel value.
 */
function ulx_contact( $key ) {
    $channels = ulx_contact_channels();
    return $channels[ $key ] ?? '';
}

/**
 * Build a wa.me chat link, optionally with a prefilled message.
 *
 * @param  string $text Prefilled message (plain text).
 * @return string
 */
function ulx_whatsapp_link( $text = '' ) {
    $number = preg_replace( '/\D/', '', ulx_contact( 'whatsapp' ) );
    $url    = 'https://wa.me/' . $number;

    if ( $text !== '' ) {
        $url .= '?text=' . rawurlencode( $text );
    }
    return $url;
}
