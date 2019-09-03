<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'pretty_uri' => false,
        'site_url' => 'https://my-first-project-cpsc-4125.herokuapp.com/',
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
