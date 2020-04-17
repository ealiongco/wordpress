<?php
/**
 * @package FibonacciPlugin
 */
/*
Plugin Name: Fibonacci Plugin
Plugin URI: http://localhost/wordpress
Description: To create a Wordpress plugin that displays the Fibonacci sequence on a front-facing webpage.
Version: 1.0.0
Author: Erika Liongco
Author URI: http://localhost/wordpress
License: GPLv2 or later
Text Domain: fibonacci-plugin
 */

defined('ABSPATH') or die('Are you sure?!');

/*class FibonacciPlugin
{
    function __construct()
    {
        add_action('init', array($this, 'fibonacci'));
    }

    function activate()
    {
        // echo "activated";
        // self::fibonacci();
        flush_rewrite_rules();
    }

    function deactivate()
    {
        flush_rewrite_rules();
    }

    function uninstall()
    {

    }
}

if(class_exists('FibonacciPlugin')){
    $fibonacciPlugin = new FibonacciPlugin();
}*/

/*register_activation_hook( __FILE__, array($fibonacciPlugin, 'activate'));
register_deactivation_hook(__FILE__, array($fibonacciPlugin, 'deactivate'));*/

if (!function_exists('fibonacci')) {
    function fibonacci()
    {
        $num1 = 0;
        $num2 = 1;
        $str = "0";

        for ($count = 0; $count < 9; $count++) {
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $str .= " " . $num3;
        }

        return $str;
    }
}