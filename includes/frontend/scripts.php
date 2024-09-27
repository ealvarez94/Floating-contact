<?php
// Función para manejar el hover y mostrar los números de contacto
function floating_contact_hover() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            $('.floating-contact-phone').hover(function() {
                $('.floating-contact-phone-number').fadeIn();
            }, function() {
                $('.floating-contact-phone-number').fadeOut();
            });

            $('.floating-contact-whatsapp').hover(function() {
                $('.floating-contact-whatsapp-number').fadeIn();
            }, function() {
                $('.floating-contact-whatsapp-number').fadeOut();
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'floating_contact_hover');

// Cargar FontAwesome para los iconos
function floating_contact_load_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css');
}
add_action('wp_enqueue_scripts', 'floating_contact_load_font_awesome');