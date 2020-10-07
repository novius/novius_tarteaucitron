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
    'name'    => 'Tarte Au Citron',
    'version' => '2.0.1',
    'provider' => array(
        'name' => 'Novius',
    ),
    'namespace' => 'Novius\Tarteaucitron',
    'extends' => $extends,
);
