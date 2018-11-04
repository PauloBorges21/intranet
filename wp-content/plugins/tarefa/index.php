<?php

/**
 * Created by PhpStorm.
 * User: Paulo
 * Date: 04/11/2018
 * Time: 11:01
 */

/*
Plugin Name: Tarefas
Description: Um Plugin simples para adicionar tarefas.
Version: 1.0
Author: Rai
Author URI:
Text Domain: tarefas
 */

if(!function_exists('add_action')){ //proteção WP
    echo 'Isso é um plugin';
    exit;

}

//Setup


//Includes

include('includes/activate.php');

//Hooks
register_activation_hook(__FILE__, 'rai_activate_plugin');
add_action('init', 'rai_tarefas_init'); //ao iniciar o Wp será carregado primeiro





//Shortcodes
