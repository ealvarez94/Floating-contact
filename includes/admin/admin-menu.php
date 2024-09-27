<?php
// Función para agregar el menú de configuración al panel de administración
function floating_contact_menu() {
    add_menu_page('Contacto Flotante', 'Contacto Flotante', 'manage_options', 'floating-contact', 'floating_contact_settings', 'dashicons-phone', 100);
}
add_action('admin_menu', 'floating_contact_menu');

// Función para agregar el menú de configuración avanzada
function floating_contact_advanced_menu() {
    add_submenu_page('floating-contact', 'Floating Contact Advanced', 'Ajustes Avanzados', 'manage_options', 'floating-contact-advanced', 'floating_contact_advanced_settings');
}
add_action('admin_menu', 'floating_contact_advanced_menu');