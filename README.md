# Novius TarteAuCitron

[![version]][version]

This application is a Novius's fork of [AmauriC’s tarteaucitron.js lib](https://github.com/AmauriC/tarteaucitron.js) and injects it on the frontend and lets you configure services and settings through the config file.

What changed:  

- Remove PRO version code since we're not using it.
- Complete SCSS refactoring with global variables that you can customize easily.
- Some fixes in tarteaucitron.js
- All assets files are now minified

## CSS Variables

You can customize all TAC styles just by extending CSS variables.  
This package is shipped with these variables that you can extend in your own projct's css/scss :

```css
:root {
  --tac-primary: #505999;
  --tac-white: #fff;
  --tac-gray-100: #424242;
  --tac-gray-200: #535b5f;
  --tac-bg-panel: #ebf8ff;
  --tac-green: #74c286;
  --tac-red: #c27474;
  --tac-yellow: #fbda26;
  --tac-back-panel: #eee;
  --tac-panel-shadow: rgba(0, 0, 0, .25);
  --tac-scrollbar-bg: #90cdf4;
  --tac-btn-allow-bg: #353842;
  --tac-btn-deny-bg: #353842;
  --tac-percent-bg: #387cc6;
  --tac-alert-bg: #ebf8ff;
  --tac-alert-border: #90cdf4;
  --tac-alert-txt: #505999;
  --tac-alert-cta-color: #fff;
  --tac-alert-cta-accept-bg: #74c286;
  --tac-alert-cta-deny-bg: #c27474;
  --tac-alert-cta-perso-bg: #70a2c1;
  --tac-alert-cta-perso-color: #fff;
  --tac-alert-cta-privacy-color: #505999;
  --tac-alert-small-bg: #ebf8ff;
  --tac-alert-small-nb-bg: #dde9ef;
  --tac-activate-bg: #ebf8ff;
  --tac-activate-color: #505999;

  --tac-font: "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
```

**Warning:** if you want to extend these CSS variables in `scss` and want to use "SCSS variables", don't forget to use the right syntax in your project's scss files. For example:  

```scss
:root {
  --tac-primary: #{$blue} !important;
  --tac-bg-panel: #{$blue} !important;
  --tac-back-panel: #{$white} !important;
}
```

## Licence

This package is under [GNU Affero General Public License v3](http://www.gnu.org/licenses/agpl-3.0.html) or (at your option) any later version.

[version]: https://img.shields.io/badge/version-2.0.1-%23d85a94.svg
