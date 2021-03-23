# Novius TarteAuCitron

[![version]][version]

Cette application est un fork de [tarteaucitron.js](https://github.com/AmauriC/tarteaucitron.js) et utilise notre CDN pour l'injecter sur votre site en vous donnant la possibilité de la configurer via le back-office.

![tac](/screenshot.png)

## Exemple d'installation:

Sur votre site, en front, il faudra ajouter le script suivant :

```html
<script>
    function cdnNoviusTacLoaded() {
        window.tarteaucitron.init({
            showAlertSmall: false,
            acceptAllCta: true,
            orientation: 'middle',
            privacyUrl: '/politique-de-confidentialite.html',
            mandatory: true,
            adblocker: true,
            showIcon: true,
        });

        window.tarteaucitron.overrideLang = window.tacOverrideLang;
        window.dataLayer = window.dataLayer || [];
        window.tarteaucitron.user.googletagmanagerId = 'GTM-XXXXXXX';
        (window.tarteaucitron.job = window.tarteaucitron.job || []).push('googletagmanager');
    }
</script>
```

La globale `window.tarteaucitron.overrideLang` est importante car elle permet de modifier les textes via l'application de texte paramétrable.  
Concrètement dans le core de tarteaucitron.js, s'il trouve cette variable, il n'utilise pas ses propres fichiers JS de langue. S'il ne la trouve pas, il utilisera les fichiers de langue originaux de TAC.

## Montée en version du CDN

La version de tarteaucitron.js disponible actuellement sur le CDN est la version `1.3.x`. Tant qu'il n'y a pas de montée en version majeure il n'y aura rien besoin de changer sur cette application.  
Lorsqu'il y aura une montée de version sur le CDN (1.4.x ou 2.0.x), il faudra modifier l'url qui se trouve dans `config/config.php` sur cette application ou la surcharger sur votre projet.  

**Exemple :**  

![image](https://user-images.githubusercontent.com/1554207/111596693-b9c9fd00-87cd-11eb-89bb-73680d781d58.png)

## Licence

This package is under [GNU Affero General Public License v3](http://www.gnu.org/licenses/agpl-3.0.html) or (at your option) any later version.

[version]: https://img.shields.io/badge/version-3.0.0-%23d85a94.svg
