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

    'translations' => array(
        'adblock' => __('Hello! This site is transparent and lets you chose the 3rd party services you want to allow.'),
        'adblock_call' => __('Please disable your adblocker to start customizing.'),
        'reload' => __('Refresh the page'),

        'alertBigScroll' => __('By continuing to scroll,'),
        'alertBigClick' => __('If you continue to browse this website,'),
        'alertBig' => __('you are allowing all third-party services'),

        'alertBigPrivacy' => __('This site uses cookies and gives you control over what you want to activate'),
        'alertSmall' => __('Manage services'),
        'acceptAll' => __('OK, accept all'),
        'personalize' => __('Personalize'),
        'close' => __('Close'),

        'all' => __('Preference for all services'),

        'info' => __('Protecting your privacy'),
        'disclaimer' => __('By allowing these third party services, you accept their cookies and the use of tracking technologies necessary for their proper functioning.'),
        'allow' => __('Allow'),
        'deny' => __('Deny'),
        'noCookie' => __('This service does not use cookie.'),
        'useCookie' => __('This service can install'),
        'useCookieCurrent' => __('This service has installed'),
        'useNoCookie' => __('This service has not installed any cookie.'),
        'more' => __('Read more'),
        'source' => __('View the official website'),
        'credit' => __('Cookies manager by tarteaucitron.js'),

        'fallback' => __('is disabled.'),

        'ads' => array(
            'title' => __('Advertising network'),
            'details' => __('Ad networks can generate revenue by selling advertising space on the site.')
        ),
        'analytic' => array(
            'title' => __('Audience measurement'),
            'details' => __('The audience measurement services used to generate useful statistics attendance to improve the site.')
        ),
        'social' => array(
            'title' => __('Social networks'),
            'details' => __('Social networks can improve the usability of the site and help to promote it via the shares.')
        ),
        'video' => array(
            'title' => __('Videos'),
            'details' => __('Video sharing services help to add rich media on the site and increase its visibility.')
        ),
        'comment' => array(
            'title' => __('Comments'),
            'details' => __('Comments managers facilitate the filing of comments and fight against spam.')
        ),
        'support' => array(
            'title' => __('Support'),
            'details' => __('Support services allow you to get in touch with the site team and help to improve it.')
        ),
        'api' => array(
            'title' => __('APIs'),
            'details' => __('APIs are used to load scripts: geolocation, search engines, translations, ...')
        ),
        'other' => array(
            'title' => __('Other'),
            'details' => __('Services to display web content.')
        )
    )
);
