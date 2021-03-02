# Novius TarteAuCitron

[![version]][version]

This application is a Novius's fork of [AmauriC’s tarteaucitron.js lib](https://github.com/AmauriC/tarteaucitron.js) and injects it on the frontend and lets you configure services and settings through the config file.

![tac](/screenshot.png)

What changed:  

- Remove PRO version code since we're not using it.
- Complete SCSS refactoring with global variables that you can customize easily.
- Some fixes in tarteaucitron.js
- All assets files are now minified

## Installation example:

```html
<script>
    // Tarteaucitron init
    window.tarteaucitron.init({
        showAlertSmall: false,
        acceptAllCta: true,
        orientation: 'middle',
        privacyUrl: '/politique-de-confidentialite',
        mandatory: true,
        adblocker: true,
        showIcon: true,
    });

    window.dataLayer = window.dataLayer || [];
    window.tarteaucitron.user.googletagmanagerwithfallbackId = 'GTM-XXXXXXX';
    (window.tarteaucitron.job = window.tarteaucitron.job || []).push('googletagmanagerwithfallback');
</script>
```

## Licence

This package is under [GNU Affero General Public License v3](http://www.gnu.org/licenses/agpl-3.0.html) or (at your option) any later version.

[version]: https://img.shields.io/badge/version-2.1.3-%23d85a94.svg
