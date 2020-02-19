<?php
return [
    //  Настройки приложения
    'app' => [
        'name' => 'Домашнее задание',
        'host' => 'php.geek',
        'logPath' => ROOT . "/data/logs",
        'templatesPath' => ROOT . '/templates',

        'assets' => [
            'css' => [
                '/css/bootstrap.min.css',
                '/css/style.css',
                '/css/gallery.css',
            ],
            'js' => [
                '/js/vendor/jquery-3.3.1.min.js',
                '/js/vendor/popper.min.js',
                '/js/vendor/bootstrap.min.js',
                '/js/app.js',
                '/js/gallery.js'
            ],
            'img' => [
                '/img/1.jpg',
                '/img/2.jpg',
                '/img/3.jpg',
            ],
        ],
    ]
]; 