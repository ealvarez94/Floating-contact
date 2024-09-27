<?php
// Función para agregar el código personalizado CSS y JS al frontend
function floating_contact_custom_css() {
    $custom_css = get_option('floating_contact_custom_css');
    if ($custom_css) {
        echo '<style>' . $custom_css . '</style>';
    }
}
add_action('wp_head', 'floating_contact_custom_css');

function floating_contact_custom_js() {
    $custom_js = get_option('floating_contact_custom_js');
    if ($custom_js) {
        echo '<script>' . $custom_js . '</script>';
    }
}
add_action('wp_footer', 'floating_contact_custom_js');