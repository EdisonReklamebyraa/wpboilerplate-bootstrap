# wpboilerplate
Dette er en boilerplate for å komme raskt igang med utvikling av WordPress themes\
Den benytter seg av SCSS, moderne JS (ES6), twig-syntaks for PHP og gulp for hot reload av browser. \
Det følger også med et eksempel på hvordan man implementerer ACF som en Gutenberg-block

## Organisering:
*/assets/css* Her ligger en style.css som importerer alle css-filene. Bare legg til flere importer ved behov. I disse filene kan du skrive SCSS som blir kompilert til vanlig css i style.css som ligger i rotmappa, som er fila som blir lest av WordPress.

*/assets/js* Her ligger scripts.js hvor det importeres js-filer og instansieres objekter. Dette blir kompilert med babel til scripts-bundled.js

*/views* Her ligger alle twig-view'ene, altså markupen til hver sidetype. De har php-filer med korresponderende navn i rotmappa.

*/views/block* Her legger du alt av ACF/Gutenberg-blocker. Følg navnkonvensjonen block-[navn-på-block].twig.\
*/inc/acf-blocks* Her definerer du nye gutenberg-blocker. Bare dupliser acf_register_block(), og bytt ut verdiene med egne.\
*/inc/block-controllers* Her ligger de korresponderende php-filene til view-filene. Benytt samme navnkonvensjon.


## How-to:
- Opprett domene på domeneshop

Plesk: 
  - Opprette domene på Plesk - Notér ned credentials
  - Installer WordPress på domenet (plesk) - notere ned databasenavn, prefix, bruker og pw.

Lokalt:
  - Sett opp en lokal WP installasjon (XAMPP, Laragon, whatever)
  - Gå til wp-config og sett inn db-credentials du fikk fra Plesk.
  - Lag en mappe i wp-content/themes som du gir navnet på din theme.
  - Gå til denne mappen med en terminal og kjør git init.

Klikk "use this template" i dette repoet. Du opprett da et nytt repo med navnet på din theme.

Tilbake i terminalen lokalt, kjør\
```$ git remote add github [url til repoet du laget]```\
```$ git pull github master```

Sett opp git på Plesk. Når det er gjort legger du til denne også som remote:\
```$ git remote add plesk [url til repo]```

For å unngå å skrive credentials hver gang man pusher til plesk (usikret metode)\
```$ git config credential.helper store```\
Gjør en test-push:\
```$ git push plesk master```

Husk å legge inn ACF og Timber som plugins i WordPress

Nå kan vi installere node pakkene som kreves:\
```$ npm i```

For å kunne kjøre gulp, gå til settings.js, og legg inn din lokale url i urlToPreview.\
Deretter kan du kjøre\
```$ gulp watch```

GL HF!


Todo: Rense opp functions
