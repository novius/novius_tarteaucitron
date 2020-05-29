<?php

return array(

    'style' => 'static/apps/novius_tarteaucitron/css/tarteaucitron.css',
    'script' => 'static/apps/novius_tarteaucitron/tarteaucitron.js',

    'settings' => array(
        'adblocker' => false,
        'hashtag' => '#tarteaucitron',
        'cookieName' => 'tarteaucitron',
        'highPrivacy' => true,
        'orientation' => 'bottom',
        'bodyPosition' => 'bottom',
        'removeCredit' => true,
        'showAlertSmall' => false,
        'cookieslist' => true,
        'handleBrowserDNTRequest' => false,
        'acceptAllCta' => true,
        'denyAllCta' => true,
        'moreInfoLink' => true,
        'privacyUrl' => '',
        'useExternalCss' => false,
        'useExternalJs' => false,
    ),

    'translations' => array(
        'middleBarHead' => __('☝ 🍪'),
        'adblock' => __('Bonjour! Ce site joue la transparence et vous donne le choix des services tiers à activer.'),
        'adblock_call' => __('Merci de désactiver votre adblocker pour commencer la personnalisation.'),
        'reload' => __('Recharger la page'),

        'alertBigScroll' => __('En continuant de défiler,'),
        'alertBigClick' => __('En poursuivant votre navigation,'),
        'alertBig' => __("vous acceptez l'utilisation de services tiers pouvant installer des cookies"),

        'alertBigPrivacy' => __('Ce site utilise des cookies et vous donne le contrôle sur ce que vous souhaitez activer'),
        'alertSmall' => __('Gestion des services'),
        'acceptAll' => __('Tout accepter'),
        'personalize' => __('Personnaliser'),
        'close' => __('Fermer'),

        'privacyUrl' => __('Politique de confidentialité'),

        'all' => __('Préférences pour tous les services'),

        'info' => __('Protection de votre vie privée'),
        'disclaimer' => __('Ce site utilise différents cookies, afin de nous permettre de réaliser des statistiques de visite et d’optimiser votre parcours de navigation. Pour en savoir plus, vous pouvez consultez notre charte cookies :'),
        'allow' => __('Autoriser'),
        'deny' => __('Interdire'),
        'noCookie' => __('Ce service ne dépose aucun cookie.'),
        'useCookie' => __('Ce service peut déposer'),
        'useCookieCurrent' => __('Ce service a déposé'),
        'useNoCookie' => __("Ce service n'a déposé aucun cookie."),
        'more' => __('En savoir plus'),
        'source' => __('Voir le site officiel'),
        'credit' => __('Gestion des cookies par tarteaucitron.js'),
        'noServices' => __("Ce site n'utilise aucun cookie nécessitant votre consentement."),

        'toggleInfoBox' => __('Afficher/masquer les informations sur le stockage des cookies'),
        'title' => __('Panneau de gestion des cookies'),
        'cookieDetail' => __('Détail des cookies'),
        'ourSite' => __('sur notre site'),
        'newWindow' => __('(nouvelle fenêtre)'),
        'allowAll' => __('Autoriser tous les cookies'),
        'denyAll' => __('Tout refuser'),

        'fallback' => __('est désactivé.'),


        'ads' => array(
            'title' => __('Régies publicitaires'),
            'details' => __('Les régies publicitaires permettent de générer des revenus en commercialisant les espaces publicitaires du site.')
        ),
        'analytic' => array(
            'title' => __("Mesure d'audience"),
            'details' => __("Les services de mesure d'audience permettent de générer des statistiques de fréquentation utiles à l'amélioration du site.")
        ),
        'social' => array(
            'title' => __('Réseaux sociaux'),
            'details' => __("Les réseaux sociaux permettent d'améliorer la convivialité du site et aident à sa promotion via les partages.")
        ),
        'video' => array(
            'title' => __('Vidéos'),
            'details' => __("Les services de partage de vidéo permettent d'enrichir le site de contenu multimédia et augmentent sa visibilité.")
        ),
        'comment' => array(
            'title' => __('Commentaires'),
            'details' => __('Les gestionnaires de commentaires facilitent le dépôt de vos commentaires et luttent contre le spam.')
        ),
        'support' => array(
            'title' => __('Support'),
            'details' => __("Les services de support vous permettent d'entrer en contact avec l'équipe du site et d'aider à son amélioration.")
        ),
        'api' => array(
            'title' => __('APIs'),
            'details' => __('Les APIs permettent de charger des scripts : géolocalisation, moteurs de recherche, traductions, ...')
        ),
        'other' => array(
            'title' => __('Autre'),
            'details' => __('Services visant à afficher du contenu web.')
        )
    )
);
