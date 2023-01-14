<?php
/*
Plugin Name: React Dashboard Widget
Plugin URI: https://example.com/react-dashboard-widget
Description: A React.js dashboard widget for WordPress
Version: 1.0
Author: Shihab Ahmed Pranto
Author URI: https://example.com
*/

if(!defined('ABSPATH')){
   exit;
}

function react_dashboard_widget_init() {
    wp_add_dashboard_widget(
        'react_dashboard_widget',         // Widget slug.
        'React Dashboard Widget',         // Title.
        'react_dashboard_widget_display'  // Display function.
    );
}
add_action( 'wp_dashboard_setup', 'react_dashboard_widget_init' );

function react_dashboard_widget_display() {
    echo '<div id="react-dashboard-widget"></div>';
    $sampleData = array(
        array(
            'name' => 'Page A',
            'pv' => 2400,
            'uv' => 1000,
        ),
        array(
            'name' => 'Page B',
            'pv' => 1398,
            'uv' => 800,
        ),
        array(
            'name' => 'Page C',
            'pv' => 9800,
            'uv' => 2000,
        ),
        array(
            'name' => 'Page D',
            'pv' => 3908,
            'uv' => 800,
        ),
        array(
            'name' => 'Page E',
            'pv' => 4800,
            'uv' => 1200,
        ),
        array(
            'name' => 'Page F',
            'pv' => 3800,
            'uv' => 800,
        ),
        array(
            'name' => 'Page G',
            'pv' => 4300,
            'uv' => 1700,
        ),
    );
    wp_localize_script( 'react-dashboard-widget', 'sampleData', json_encode( $sampleData ) );
}

function react_dashboard_widget_scripts() {
    wp_enqueue_script( 'react', 'https://unpkg.com/react/umd/react.production.min.js', array() );
    wp_enqueue_script( 'react-dom', 'https://unpkg.com/react-dom/umd/react-dom.production.min.js' );
    wp_enqueue_script( 'prop-types', 'https://unpkg.com/prop-types/prop-types.min.js' );
    wp_enqueue_script( 'recharts', 'https://unpkg.com/recharts/umd/Recharts.js' );
    wp_enqueue_script( 'react-dashboard-widget', plugin_dir_url( __FILE__ ) . '/index.js' );
}
add_action( 'admin_enqueue_scripts', 'react_dashboard_widget_scripts' );