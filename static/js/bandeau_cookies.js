(function($) {
    if (typeof $ == 'undefined' || typeof $.cookie == 'undefined') {
        return ;
    }
    $(function() {
        // Fermeture du bandeau cookie et ajout du cookie qui l'indique
        $('a#bandeauClose').click(function(e){
            e.preventDefault();
            $.cookie("novius_cookies_banner",'true', {expires: 365, path: '/' });
            $('#bandeaucookie-wrapper').slideUp(function(){
                $(this).remove();
            });
        });
        // Ouverture/fermeture du bandeau par défaut en fonction du cookie
        if (typeof $.cookie("novius_cookies_banner") != 'undefined') {
            $('#bandeaucookie-wrapper').remove();
        } else {
            $('#bandeaucookie-wrapper').show();
        }
    });
})(jQuery);
