# LV 5 zadatak - Čvarci.net v3 - Final

### Heroku LINK: 

<hr />https://arcane-shelf-27799.herokuapp.com/

## Opis zadatka

To je to. Sve je spremno za veliku završnicu. Klijenti su zadovoljni vizualizacijom minicarta i skupili su potrebne novce kako bi se implementirala backend logika za naručivanje proizvoda. Ako sve prođe kako treba, Paki će sretno trljati ruke jer se radi o velikom bonusu koji će dobiti, a vama će dati zahvalnicu jer ipak radite za besplatno ove LV zadaće. 

Pošto su klijenti sve novce usmjerili za backend implementaciju, dio novaca koji je usmjeren na dizajn je smanjen.

-  Dizajner je poslao wireframe-ove za navedene slučajeve koje je potrebno implementirani i označeni su brojevima 01-04. Navedeni dijelovi stranica ne moraju se striktno držati wireframe-ova, međutim elementi iz wireframe-ova moraju postojati i držati se dosadašnjeg style-guide-a i boja. 



#### Potrebno je:

Admin login:
-   Email: admin@admin.com
-   Password: admin123

##### Osnovna implementacija (5 bodova max):

- [x] Na **/admin.php** URL-u prikazuje se dio gdje će se korisnik koji je administrator (potrebno je imati predefinirane podatke za administratora u bazi koji su naglašeni u gornjem dijelu) logirati (**FIGMA PAGE 02-admin-login**). Nakon što se administrator uspješno prijavi, logika ga vodi na admin sučelje koje ima url **/dashboard.php** u kojem postoji Meni početna, proizvodi, narudžbe i odjava. Ako administrator ugasi stranicu i ponovno ode na dashboard url, automatski je logiran sve dok mu traje aktivni cookie. Administrator ne smije doći na navedeni URL dashboard-a ako se nije prethodno prijavio. Ako administrator klikne na **Odjavi se** button, potrebno ga je redirektati da se ponovno prijavi i izbrisati mu definirani cookie. Također, administratorova šifra unutar baze podataka mora biti enkriptirana (odabrati MD5 ili SHA256 kriptografsku metodu). (1 bod)

- [x] Ako je administrator unutar dashboarda i klikne na **Proizvodi** unutar menija, otvorit će mu se liste svih trenutno kreiranih proizvoda (ako postoje) s prikazom slike, ime proizvoda, cijena i dostupna količina ***(FIGMA PAGE 03-dashboard-add-item)***. Proizvodi se čitaju iz spremljene tablice u bazi. Kada korisnik stisne na "dodaj novi proizvod" button, logika ga vodi na novi page gdje može ispuniti podatke o željenom novom proizvodu. Administrator potvrđuje svoje podatke o proizvodu tako što će kliknuti na button o potvrdi proizvoda. Kada administrator potvrdi proizvod, logika ga redirekta na prethodni page gdje može vidjeti novi dodani proizvod unutar liste proizvoda. Ako korisnik ili administrator ode na početnu stranicu, prikazat će mu se novo dodani proizvod na "Novo u ponudi" dijelu gdje će se proizvodi dinamički povući iz baze podataka.
    - (Napomena: Umjesto slike (BLOB) potrebno je postaviti URL slike (slika se može postaviti na imgur ili neki slični servis) unutar inputa pošto u FREE Planu Heroku plugina za MYSQL postoji 5mb limit). (2 boda)

- [x] Ako postoje proizvodi unutar sučelja "Proizvodi", korisnik ima mogućnost da klikne na button "Ažuriraj proizvod" **(FIGMA PAGE 03-dashboard-update-or-delete)** koji će ga odvesti na novo sučelje koje je vrlo slično onome kada se dodaje proizvod, međutim u svakom inputu će postoji predefinirane informacije o navedenom proizvodu koje su također povučene iz baze podataka. Korisnik ima mogućnost izmijeniti podatke koje želi, međutim postoje 2 opcije: (2 boda)
    - Prva opcija je da potvrdi i ažurira informacije o proizvodu, gdje će ga logika vratiti na prethodni page u kojem će moći vidjeti ažurirane podatke
    - Druga opcija je da obriše navedeni proizvod tako što klikne na "Obriši proizvod" button, gdje će ga logika vratiti također na prethodni page ali neće moći vidjeti više informacije o obrisanom proizvodu.
    - (Napomena: Sve promjene koje se dešavaju unutar kategorije proizvode moraju se odraziti na prikazane proizvode na početnoj stranici.) 

##### Dodatna implementacija (5 bodova max):
- [x] Kada korisnik doda proizvode u minicart i klikne na button "Kupi sad", logika ga treba odvesti na cart page gdje će mu se u većoj varijanti košarice prikazati svi detalji koji su se nalazili unutar minicarta - naziv proizvoda, cijena, količina itd. **(FIGMA PAGE 01-cart-page)**. Korisnik osim povećane verzije košarice, s desne ili lijeve strane ima informacije o narudžbi koje mora popuniti, kao i skraćeni prikaz njegove ukupne narudžbe unutar košarice (potrebno je samo definirati ukupnu cijenu košarice) gdje postoji veliki dizajnirani button da potvrdi svoju kupovinu. Korisnik ne može kliknuti na button ako sve informacije unutar forme za narudžbu nisu validirane i ispunjene. (2 boda)

- [] Kada korisnik ispuni sve podatke i klikne na button za naručiti, ako postoje tražene količine proizvoda na stanju, logika će ga prebaciti na stranicu koja mu potvrđuje njegovu narudžbu (tkz. success page). Na navedenoj stranici potrebno je definirati kako je njegova narudžba zaprimljena i prikazati kreiranu narudžbu koju je korisnik naručio **(FIGMA PAGE 01-cart-page)**. Ako ne postoje tražene količine proizvoda na stanju, potrebno je korisniku prikazati poruku (još uvijek na cart page-u) kako trenutna količina koju on želi je nedostupna. Nakon što se operacija izvrši, također je potrebno smanjiti  dostupnu količinu (QTY) određenog proizvoda koji je naručen (potrebno je testirati i pogledati prikaz unutar sekcije "Proizvodi"). (2 boda)

- [] Nakon što korisnik napravi narudžbu, administrator unutar njegovog dashboarda odlaskom na sekciju "Nardužbe" **(FIGMA PAGE 05-dashboard-orders)** može pogledati napravljenu narudžbu tako što će imati prikaz o informacijama narudžbe (ime, prezime, telefon, adresa itd.) i naručene proizvode koje je potrebno samo tekstualno ispisati pod odgovarajućim stupcem (pr. 1x Čvarci domaći, 2x Čvarci pileći Cijena ukupno: xxxx itd.). (1 bod)


##### Dodatna napomena:

- Ako zadatci iz osnovne implementacije nisu ostvareni, neće se uzeti u obzir  implementirani zadatci iz dodatne implementacije. Kada ostvarite navedeni zadatak, potrebno je unutar README.md označiti ga da je riješen (pr iz [] u [x]). Zadatci koji nisu označeni da su riješeni neće se pregledavati.

- 2 dodatna boda moguće je ostvariti (mogu se dodati prethodnim LV zadaćama) ako svi dijelovi navedene zadaće su responzivnog dizajna. Dodatna 2 boda se uzimaju također u obzir samo ako su zadatci iz osnovne implementacije ostvareni.

- Ukoliko u određenom zadatku nisu sanitizirani ulazne informacije s input-a ili HTML sadržaj koji se generira s backend strane, oduzima se 0,5 bodova odrađenog zadatka.

#### Figma link: 

[Link](https://www.figma.com/file/7SbptVA0VLvOwY5LBDuAYJ/%C4%8Dvarci.net-v3-FINAL?node-id=4803%3A264)

Napravljen zadatak potrebno je postaviti na Heroku Servis i gore na "Heroku LINK:" dodati poveznicu na navedeni zadatak. Zadatak koji nije postavljen na Heroku servis bodovat će se s 0 bodova.

### Korisni linkovi prilikom rješavanja zadatka

LV4-LV5:
- priprema.pdf

#### Figma

- https://www.smashingmagazine.com/2020/09/figma-developers-guide/
- https://www.figma.com/best-practices/tips-on-developer-handoff/an-overview-of-figma-for-developers/
- https://www.youtube.com/watch?v=hs_cXHkuHAM

#### CSS - općenito
- https://developer.mozilla.org/en-US/docs/Learn/CSS/First_steps/Getting_started
- https://css-tricks.com/where-do-you-learn-html-css-in-2020/
- Box model - https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/The_box_model
- Position - https://developer.mozilla.org/en-US/docs/Web/CSS/position
- Display - https://developer.mozilla.org/en-US/docs/Web/CSS/display

#### CSS - responzivni web dizajn
- https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Responsive_Design
- https://kinsta.com/blog/responsive-web-design/
- https://www.youtube.com/watch?v=p0bGHP-PXD4

#### CSS - Grid i Flexbox
- https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout
- Grid - https://www.youtube.com/watch?v=0-DY8J_skZ0
- https://css-tricks.com/snippets/css/a-guide-to-flexbox/
- https://www.youtube.com/watch?v=JJSoEo8JSnc
- Kako kreirati svoj grid sistem - https://zellwk.com/blog/responsive-grid-system/
