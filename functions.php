<?php

register_nav_menus(array( // Регистрируем 2 меню
    'top' => 'Верхнее', // Верхнее
    'bottom' => 'Внизу' // Внизу
));

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_scripts() { // добавление скриптов
        if(is_admin()) return false; // если мы в админке - ничего не делаем
        //wp_deregister_script('jquery'); // выключаем стандартный jquery
        wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.2.1.min.js','','',true); // добавляем свой
        wp_enqueue_script('jquery-migrate',get_template_directory_uri().'/js/jquery-migrate-3.0.1.min.js','','',true); // добавляем свой
        wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js','','',true); // добавляем свой
        wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js','','',true); // добавляем свой
        wp_enqueue_script('jquery-easing',get_template_directory_uri().'/js/jquery.easing.1.3.js','','',true); // добавляем свой
        wp_enqueue_script('jquery-waypoints',get_template_directory_uri().'/js/jquery.waypoints.min.js','','',true); // добавляем свой
        wp_enqueue_script('jquery-stellar',get_template_directory_uri().'/js/jquery.stellar.min.js','','',true); // добавляем свой
        wp_enqueue_script('owl',get_template_directory_uri().'/js/owl.carousel.min.js','','',true); // добавляем свой
        wp_enqueue_script('jquery-magnific-popup',get_template_directory_uri().'/js/jquery.magnific-popup.min.js','','',true); // добавляем свой
        wp_enqueue_script('aos',get_template_directory_uri().'/js/aos.js','','',true); // добавляем свой
        wp_enqueue_script('jquery-animateNumber',get_template_directory_uri().'/js/jquery.animateNumber.min.js','','',true); // добавляем свой
        wp_enqueue_script('bootstrap-datepicker',get_template_directory_uri().'/js/bootstrap-datepicker.js','','',true); // добавляем свой
        //wp_enqueue_script('jquery-timepicker',get_template_directory_uri().'/js/jquery.timepicker.min.js','','',true); // добавляем свой
        wp_enqueue_script('scrollax',get_template_directory_uri().'/js/scrollax.min.js','','',true); // добавляем свой
        //wp_enqueue_script('maps','//maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false','','',true); // добавляем свой
        //wp_enqueue_script('google-map',get_template_directory_uri().'/js/google-map.js','','',true); // добавляем свой
        wp_enqueue_script('main',get_template_directory_uri().'/js/main.js','','',true); // добавляем свой

    }
}
add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_styles() { // добавление стилей
        if(is_admin()) return false; // если мы в админке - ничего не делаем
        wp_enqueue_style( 'bs', get_template_directory_uri().'/css/open-iconic-bootstrap.min.css' ); // бутстрап
        wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' ); // основные стили шаблона
        wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/css/owl.carousel.min.css' );
        wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri().'/css/owl.theme.default.min.css' );
        wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css' );
        wp_enqueue_style( 'aos', get_template_directory_uri().'/css/aos.css' );
        wp_enqueue_style( 'ionicons', get_template_directory_uri().'/css/ionicons.min.css' );
        wp_enqueue_style( 'bootstrap-datepicker', get_template_directory_uri().'/css/bootstrap-datepicker.css' );
        wp_enqueue_style( 'jquery-timepicker', get_template_directory_uri().'/css/jquery.timepicker.css' );
        wp_enqueue_style( 'flaticon', get_template_directory_uri().'/css/flaticon.css' );
        wp_enqueue_style( 'icomoon', get_template_directory_uri().'/css/icomoon.css' );
    }
}
