<?php
/**
 * Enqueue Scripts and Styles
 *
 * Handles Vite dev server integration and production asset loading.
 *
 * @package ULX
 */

defined('ABSPATH') || exit;

/**
 * Get Vite manifest
 */
function ulx_get_vite_manifest() {
    $manifest_path = ULX_DIR . '/dist/.vite/manifest.json';

    if (!file_exists($manifest_path)) {
        return false;
    }

    return json_decode(file_get_contents($manifest_path), true);
}

/**
 * Enqueue theme assets
 */
function ulx_enqueue_assets() {

    if (ULX_VITE_DEV) {
        // ── Development: Vite HMR ──
        // phpcs:ignore WordPress.WP.EnqueuedResourceParameters
        wp_enqueue_script('vite-client', 'http://localhost:5173/@vite/client', [], null, false);
        // phpcs:ignore WordPress.WP.EnqueuedResourceParameters
        wp_enqueue_script('ulx-app', 'http://localhost:5173/assets/js/app.js', [], null, true);

        // Vite client needs type="module"
        add_filter('script_loader_tag', function ($tag, $handle) {
            if (in_array($handle, ['vite-client', 'ulx-app'])) {
                return str_replace(' src=', ' type="module" src=', $tag);
            }
            return $tag;
        }, 10, 2);

    } else {
        // ── Production: compiled assets ──
        $manifest = ulx_get_vite_manifest();

        if ($manifest && isset($manifest['assets/js/app.js'])) {
            $entry = $manifest['assets/js/app.js'];

            // CSS extracted from JS entry
            if (!empty($entry['css'])) {
                $css_index = 0;
                foreach ($entry['css'] as $css_file) {
                    $handle = $css_index === 0 ? 'ulx-style' : 'ulx-style-' . $css_index;
                    wp_enqueue_style($handle, ULX_URI . '/dist/' . $css_file, [], ULX_VERSION);
                    $css_index++;
                }
            }

            // Main JS
            wp_enqueue_script(
                'ulx-app',
                ULX_URI . '/dist/' . $entry['file'],
                [],
                ULX_VERSION,
                true
            );

            // Add module type
            add_filter('script_loader_tag', function ($tag, $handle) {
                if ($handle === 'ulx-app') {
                    return str_replace(' src=', ' type="module" src=', $tag);
                }
                return $tag;
            }, 10, 2);
        }
    }

    // Comment reply script (only when needed)
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'ulx_enqueue_assets');

/**
 * Preload critical fonts (Barlow for headings, Inter for body)
 */
function ulx_preload_fonts() {
    $fonts = [
        'barlow-700.woff2',
        'inter-regular.woff2',
        'inter-500.woff2',
    ];

    foreach ($fonts as $font) {
        if (!file_exists(ULX_DIR . '/assets/fonts/' . $font)) {
            continue;
        }
        echo '<link rel="preload" href="' . esc_url(ULX_URI . '/assets/fonts/' . $font) . '" as="font" type="font/woff2" crossorigin>' . "\n";
    }
}
add_action('wp_head', 'ulx_preload_fonts', 1);
