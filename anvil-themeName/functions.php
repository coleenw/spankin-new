<?php
/*
 |----------------------------------------------------------------
 |  Bootstrap the Theme Setup
 |----------------------------------------------------------------
 */
require_once 'anvil/core/Anvil.php';
require_once 'anvil/core/Chisel.php';
$anvil = Anvil::instance();

/*
 |----------------------------------------------------------------
 |  Theme Related Functions
 |----------------------------------------------------------------
 */
require_once 'functions/theme_functions.php';

/*
 |----------------------------------------------------------------
 |  Plugin Activation
 |----------------------------------------------------------------
 */
require_once 'functions/class-tgm-plugin-activation.php';
require_once 'functions/plugin_activation.php';

/*
 |----------------------------------------------------------------
 |  Helpers
 |----------------------------------------------------------------
 */
require_once 'functions/404_functions.php';
require_once 'functions/excerpt_functions.php';
require_once 'functions/template_helper.php';
