<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
 $serverBase = $_SERVER["DOCUMENT_ROOT"];
 echo $serverBase;
function config($key = 'https://csuphpdemo.herokuapp.com')
{
    $config = [
        'name' => 'Simple PHP Website',
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
