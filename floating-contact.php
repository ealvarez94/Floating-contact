<?php
/*
Plugin Name: Contacto Flotante
Plugin URI: https://introvisual.com
Description: Crea unos botones flotantes para facilitar al usuario contactar contigo.
Version: 1.1
Author: Enol Alvarez Molinuevo y Juanma Rodríguez
Author URI: https://introvisual.com
License: GPL3
*/

// Cargar archivos de administración
require_once plugin_dir_path(__FILE__) . 'includes/admin/settings.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin/admin-menu.php';

// Cargar archivos del frontend
require_once plugin_dir_path(__FILE__) . 'includes/frontend/helpers.php';
require_once plugin_dir_path(__FILE__) . 'includes/frontend/scripts.php';
require_once plugin_dir_path(__FILE__) . 'includes/frontend/frontend-display.php';