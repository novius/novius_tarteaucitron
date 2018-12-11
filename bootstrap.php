<?php

Event::register('front.pageFound', function($params)
{
    $config = \Config::load('novius_tarteaucitron::config', false, true);

    // Load style
    if ($css = \Arr::get($config, 'style')) {
        \Nos\Nos::main_controller()->addCss($css.'?'.md5_file($css));
    }

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
