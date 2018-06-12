<?php

return array(

    'style' => 'static/apps/novius_tarteaucitron/css/tarteaucitron.css',
    'script' => 'static/apps/novius_tarteaucitron/tarteaucitron.js',

    'settings' => array(
        // Panel selector
        'hashtag' => '#tarteaucitron',
        // Auto consent feature
        'highPrivacy' => false,
        // Position of the banner. Can be 'top' or 'bottom'
        'orientation' => 'top',
        // Display a message if an adblocker is detected
        'adblocker' => false,
        // Show a small banner on bottom right
        'showAlertSmall' => true,
        // Display the list of cookies installed
        'cookieslist' => true,
        // Remove the credit link to tarteaucitron
        'removeCredit' => false,
        // Domain on which the cookie will be placed
        //'cookieDomain' => '.example.com'
    ),
);
