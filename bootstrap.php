<?php

Event::register('front.pageFound', function($params)
{
    $config = \Config::load('novius_tarteaucitron::config', false, true);

    // Load style
    \Nos\Nos::main_controller()->addCss(\Arr::get($config, 'style'));

    // Load script
    \Nos\Nos::main_controller()->addJavascriptInline(
        \View::forge(
            'novius_tarteaucitron::script',
            compact('config'),
            false
        )->render(),
        false
    );
});
