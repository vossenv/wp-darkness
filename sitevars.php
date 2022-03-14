<?php

function get_env() {
    $is_dev = strpos(get_site_url(), 'atph.caragianbadlands.com');
    return $is_dev ? 'dev' : 'prod';
}

function get_sv($page){

    $sitevars = [
        'dev' => [
            'epk' => [
                'pages' => [101,99,100],
                //'albums' => [102,103,104,105,106,107,108],
            ],
            'front_page' => [
                'social_id' => '8',
                'photos_id' => '3',
            ]
        ],
        'prod' => [
            'epk' => [114,116,117],
            'front_page' => [
                'social_id' => '6',
                'photos_id' => '3',
            ]
        ],
    ];

    return $sitevars[get_env()][$page];
}

