<?php

function get_sv($page){

    $site = explode("/", get_site_url());
    $site = end($site);

    $sitevars = [
        'atph.caragianbadlands.com' => [
            'epk' => [96,99,100]
        ],
        'atphbandcom.stage.site' => [
            'epk' => [114,116,117]
        ],
        'atphband.com' => [
            'epk' => [114,116,117]
        ],
    ];

return $sitevars[$site][$page];

}

