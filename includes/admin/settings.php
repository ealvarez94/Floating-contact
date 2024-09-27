<?php
// Función para mostrar el menú de configuración
function floating_contact_settings() {
    ?>
    <div class="wrap">
        <h2>Ajustes</h2>
        <form method="post" action="options.php">
            <?php settings_fields('floating-contact-settings'); ?>
            <?php do_settings_sections('floating-contact-settings'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Número de teléfono</th>
                    <td><input type="text" name="floating_contact_phone" value="<?php echo get_option('floating_contact_phone'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Número de Whatsapp</th>
                    <td><input type="text" name="floating_contact_whats_phone" value="<?php echo get_option('floating_contact_whats_phone'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Mensaje por defecto</th>
                    <td><input type="text" name="floating_contact_message" value="<?php echo get_option('floating_contact_message'); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// Función para mostrar el menú de configuración avanzada
function floating_contact_advanced_settings() {
    ?>
    <div class="wrap">
        <h2>Ajustes Avanzados</h2>
        <form method="post" action="options.php">
            <?php settings_fields('floating-contact-advanced-settings'); ?>
            <?php do_settings_sections('floating-contact-advanced-settings'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">CSS Personalizado</th>
                    <td><textarea name="floating_contact_custom_css" rows="10" cols="50"><?php echo get_option('floating_contact_custom_css'); ?></textarea></td>
                </tr>
                <tr valign="top">
                    <th scope="row">JS Personalizado</th>
                    <td><textarea name="floating_contact_custom_js" rows="10" cols="50"><?php echo get_option('floating_contact_custom_js'); ?></textarea></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// Función para registrar las opciones de configuración
function floating_contact_register_settings() {
    register_setting('floating-contact-settings', 'floating_contact_phone');
    register_setting('floating-contact-settings', 'floating_contact_whats_phone');
    register_setting('floating-contact-settings', 'floating_contact_message');
}
add_action('admin_init', 'floating_contact_register_settings');

// Función para registrar las opciones avanzadas
function floating_contact_register_advanced_settings() {
    register_setting('floating-contact-advanced-settings', 'floating_contact_custom_css');
    register_setting('floating-contact-advanced-settings', 'floating_contact_custom_js');
}
add_action('admin_init', 'floating_contact_register_advanced_settings');