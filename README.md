# wpboilerplate
Dette er en boilerplate for å komme raskt igang med WordPress theme utvikling.
Den benytter seg av SCSS, moderne JS (ES6), twig-syntaks for PHP, og et eksempel på hvordan implementere ACF i gutenberg. 

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

Tilbake i terminalen lokalt, kjør 
$ git remote add github [url til repoet du laget]
$ git pull github master

Sett opp git på Plesk. Når det er gjort legger du til denne også som remote:
$ git remote add plesk [url til repo]

For å unngå å skrive credentials hver gang man pusher til plesk (usikret metode)
$ git config credential.helper store
Gjør en test-push:
$ git push plesk master

Husk å legge inn ACF og Timber som plugins i WordPress

til slutt må du kjøre
$ npm i

GL HF!
