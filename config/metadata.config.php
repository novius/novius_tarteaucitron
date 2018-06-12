<?php
$version = \Config::load('nos::version', true);
if (\Str::starts_with(\Arr::get($version, 'fullname'), 'Chiba')) {
    $extends = array(
        'application' => 'noviusos_page',
        'extend_configuration' => false,
    );
} else {
    $extends = array(
        'noviusos_page',
    );
}

return array(
    'name'    => 'adsasdasd',
    'version' => '0.1',
    'icons' => array(
        16 => 'static/apps/novius_tarteaucitron/img/icons/16.png',
        32 => 'static/apps/novius_tarteaucitron/img/icons/32.png',
        64 => 'static/apps/novius_tarteaucitron/img/icons/64.png',
    ),
    'provider' => array(
        'name' => 'Novius',
    ),
    'namespace' => 'Novius\Tarteaucitron',
    'permission' => array(
    ),
    'extends' => $extends,
    'requires' => array(),
    'launchers' => array(
    ),
);
