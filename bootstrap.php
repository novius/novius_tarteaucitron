<?php
/**
 * Event triggered before cache is written
 */
Event::register_function('front.display', function (&$html) {
    $config = \Config::load('novius_tarteaucitron::config', false, true);
    $code = '<script type="text/javascript">tarteaucitron.lang = '. json_encode(\Arr::get($config, 'translations', [])) .'</script>';

    //make code at the end of the script
    if (!empty($code) && preg_match('/<\/body>/i', $html, $matches)) {
        $html = str_replace($matches[0], "\n\n".$code."\n\n".$matches[0], $html);
    }
});

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
