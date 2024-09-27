<?php
// Función para agregar el HTML y el CSS al frontend
function floating_contact_html() {
    $phone = get_option('floating_contact_phone');
    $whats_phone = get_option('floating_contact_whats_phone');
    $message = get_option('floating_contact_message');
    $whats_phone = str_replace('+', '', $whats_phone);
    $whats_phone = str_replace(' ', '', $whats_phone);

    ?>
    <div class="floating-contact">
        <div class="floating-contact-phone-number"><div class="callMiniTitle">Llámanos al</div><?php echo $phone; ?></div>
        <div class="floating-contact-whatsapp-number"><div class="callMiniTitle">Contáctanos usando</div> WhatsApp</div>

        <a href="tel:<?php echo $phone; ?>" class="floating-contact-phone">
            <i class="fas fa-phone"></i>
        </a>

        <a href="https://wa.me/<?php echo $whats_phone; ?>?text=<?php echo $message; ?>" class="floating-contact-whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <div class="floating-contact-mobile">
        <a href="tel:<?php echo $phone; ?>" class="floating-contact-phone">
            <i class="fas fa-phone"></i> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $phone; ?>
        </a>
        <a href="https://wa.me/<?php echo $whats_phone; ?>?text=<?php echo $message; ?>" class="floating-contact-whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <?php
}
add_action('wp_footer', 'floating_contact_html');

// Encolar el archivo CSS
function enqueue_floating_contact_styles() {
    wp_enqueue_style('floating-contact-css', plugin_dir_url(__FILE__) . '../css/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_floating_contact_styles');