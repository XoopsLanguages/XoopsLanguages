<?php
// $Id: modinfo.php,v 1.1.2.13 2005/07/05 17:33:07 mithyt2 Exp $
define("_PROFILE_MI_NAME", "Pro�ireni profili");
define("_PROFILE_MI_DESC", "Modul za upravljanje s korisni�kim profilima");

//Main menu links
define("_PROFILE_MI_EDITACCOUNT", "Ure�ivanje ra�una");
define("_PROFILE_MI_CHANGEPASS", "Promijeni lozinku");
define("_PROFILE_MI_CHANGEMAIL", "Promijeni email adresu");

//Admin links
define("_PROFILE_MI_INDEX", "Sadr�aj");
define("_PROFILE_MI_CATEGORIES", "Kategorije");
define("_PROFILE_MI_FIELDS", "Polja");
define("_PROFILE_MI_USERS", "Korisnici");
define("_PROFILE_MI_PERMISSIONS", "Dozvole");

//User Profile Category
define("_PROFILE_MI_CATEGORY_TITLE", "Korisni�ki profil");
define("_PROFILE_MI_CATEGORY_DESC", "Za korisni�ka polja");

//User Profile Fields
define("_PROFILE_MI_AIM_TITLE", "AIM");
define("_PROFILE_MI_AIM_DESCRIPTION", "America Online Instant Messenger Client ID");
define("_PROFILE_MI_ICQ_TITLE", "ICQ");
define("_PROFILE_MI_ICQ_DESCRIPTION", "ICQ Instant Messenger ID");
define("_PROFILE_MI_YIM_TITLE", "YIM");
define("_PROFILE_MI_YIM_DESCRIPTION", "Yahoo! Instant Messenger ID");
define("_PROFILE_MI_MSN_TITLE", "MSN");
define("_PROFILE_MI_MSN_DESCRIPTION", "Microsoft Messenger ID");
define("_PROFILE_MI_FROM_TITLE", "Lokacija");
define("_PROFILE_MI_FROM_DESCRIPTION", "Napi�ite mjesto, grad ili dr�avu iz koje dolazite");
define("_PROFILE_MI_SIG_TITLE", "Potpis");
define("_PROFILE_MI_SIG_DESCRIPTION", "Ovdje mo�ete upisati potpis, koji �e biti prikazan u va�im objavama na forumu, novostima ...");
define("_PROFILE_MI_VIEWEMAIL_TITLE", "Dopusti ostalim korisnicima da vide va�u email adresu.");
define("_PROFILE_MI_BIO_TITLE", "Dodatne informacije");
define("_PROFILE_MI_BIO_DESCRIPTION", "Dodatne informacije o vama koji bi mogle biti korisne.");
define("_PROFILE_MI_INTEREST_TITLE", "Interesi");
define("_PROFILE_MI_INTEREST_DESCRIPTION", "Napi�ite �ime se bavite u slobodno vrijeme.");
define("_PROFILE_MI_OCCUPATION_TITLE", "Zanimanje");
define("_PROFILE_MI_OCCUPATION_DESCRIPTION", "Napi�ite smjer i �kolu koju ste zavr�ili.");
define("_PROFILE_MI_URL_TITLE", "Web stranica");
define("_PROFILE_MI_URL_DESCRIPTION", "Upi�ite adresu vlastite web stranice");
define("_PROFILE_MI_NEWEMAIL_TITLE", "Nova email adresa");
define("_PROFILE_MI_NEWEMAIL_DESCRIPTION", "Varijabla za pohranjivanje je predlo�ena nova email adresa sve dok potvrde pristi�u po�tanski je poslano prema starim. Vidi modules/profile/changemail.php");

//Configuration categories
define("_PROFILE_MI_CAT_SETTINGS", "Op�enite postavke");
define("_PROFILE_MI_CAT_SETTINGS_DSC", "");
define("_PROFILE_MI_CAT_USER", "Korisni�ke postavke");
define("_PROFILE_MI_CAT_USER_DSC", "");

//Configuration items
define("_PROFILE_MI_PROFILE_SEARCH", "Prika�i zadnji submissals kod korisnika na korisni�kom profilu");
define("_PROFILE_MI_MAX_UNAME", "Maksimalna du�ina korisni�kog imena");
define("_PROFILE_MI_MAX_UNAME_DESC", "Ovdje upisujete maksimalan broj znakova za korisni�ko ime");
define("_PROFILE_MI_MIN_UNAME", "Minimalna du�ina korisni�kog imena");
define("_PROFILE_MI_MIN_UNAME_DESC", "Ovdje upisujete minimalan broj znakova za korisni�ko ime");
define("_PROFILE_MI_DISPLAY_DISCLAIMER", "Prikazivanje uvjeta pridr�avanja");
define("_PROFILE_MI_DISPLAY_DISCLAIMER_DESC", "Ako je ova opcija omogu�ena, uvjeti �e biti prikazani pri registraciji");
define("_PROFILE_MI_DISCLAIMER", "Tekst uvjeta pridr�avanja");
define("_PROFILE_MI_DISCLAIMER_DESC", "Ovaj tekst �e biti prikazan pri registraciji, ako ste uklju�ili opciju gore");
define("_PROFILE_MI_BAD_UNAMES", "Upi�ite rije�i koja se ne mogu koristiti kao korisni�ko ime ili nadimak");
define("_PROFILE_MI_BAD_UNAMES_DESC", "Odvoji svaku sa <b>|</b>, neosjetljiv slu�aj, regex uklju�en.");
define("_PROFILE_MI_BAD_EMAILS", "Upi�i email adrese koje ne mogu biti izabrane");
define("_PROFILE_MI_BAD_EMAILS_DESC", "Odvoji svaku sa <b>|</b>, neosjetljiv slu�aj, regex uklju�en.");
define("_PROFILE_MI_MINPASS", "Minimalna du�ina lozinke");
define("_PROFILE_MI_NEWUNOTIFY", "Obavijesti me emailom kada je novi korisnik registriran?");
define("_PROFILE_MI_NOTIFYTO", "Izaberite grupu koja �e dobivati obavijesti o novim korinicima");
define("_PROFILE_MI_ACTVTYPE", "Izaberite vrstu aktivacije novoregistriranih korisnika");
define("_PROFILE_MI_USERACTV","Zahtjev registracije od korisnika (preporu�eno)");
define("_PROFILE_MI_AUTOACTV","Aktiviraj automatski");
define("_PROFILE_MI_ADMINACTV","Aktivacija od strane administratora");
define("_PROFILE_MI_ACTVGROUP", "Izaberi grupu prema kojoj �e biti poslan aktivaciski email");
define("_PROFILE_MI_ACTVGROUP_DESC", "Valjano samo kada je odabrana aktivacija od strane administratora");
define("_PROFILE_MI_UNAMELVL","Izaberi razinu strogosti za filtriranje korisni�kog imena");
define("_PROFILE_MI_STRICT","Strogo (samo abecede i brojevi)");
define("_PROFILE_MI_MEDIUM","Prosje�no");
define("_PROFILE_MI_LIGHT","Lagano (preporu�eno za multi-bajt skup znakova)");
define("_PROFILE_MI_ALLOWREG", "Dopusti nove korisni�ke registracije?");
define("_PROFILE_MI_ALLOWREG_DESC", "Izaberite da, ako prihva�ate nove korisni�ke registracije");
define("_PROFILE_MI_AVATARALLOW", "Dopusti upload avatara?");
define("_PROFILE_MI_AVATARALLOW_DESC", "Ovdje omogu�avate korisnicima upload vlastitog avatara.");
define("_PROFILE_MI_AVATARWIDTH", "Maksimalna �irina slike avatara (pixela)");
define("_PROFILE_MI_AVATARWIDTH_DESC", "");
define("_PROFILE_MI_AVATARHEIGHT", "Maksimalna visina slike avatara (pixela)");
define("_PROFILE_MI_AVATARHEIGHT_DESC", "");
define("_PROFILE_MI_AVATARMAX", "Maksimalna veli�ina slike avatara (bajtova)");
define("_PROFILE_MI_AVATARMAX_DESC", "");
define("_PROFILE_MI_SELFDELETE", "Dopusti korisnicima brisanje vlastitog ra�una?");
define("_PROFILE_MI_SELFDELETE_DESC", "");
define("_PROFILE_MI_AVATARMINPOSTS", "Minimalan broj objava");
define("_PROFILE_MI_AVATARMINPOSTS_DESC", "Minimalan broj objava za upload avatara");
define("_PROFILE_MI_ALLOWCHGMAIL", "Dopusti korisnicima promijenu email adrese?");
define("_PROFILE_MI_ALLOWCHGMAIL_DESC", "");
define("_PROFILE_MI_ALLOWVIEWACC", "Dopusti pogled na ra�un");
define("_PROFILE_MI_ALLOWVIEWACC_DESC", "Individualna polja mogu biti vidljiva ili nevidljiva prema korisnicima u poljima administracije,<br />ali ako vi �elite dopustiti pristup drugim korisni�kim ra�unima pouzdanim grupama,<br /> sve dok se anonimni korisnici mogu registrirati,<br /> odaberite grupu ovdje");

//Pages
define("_PROFILE_MI_PAGE_INFO", "Informacije korisnika");
define("_PROFILE_MI_PAGE_EDIT", "Ure�ivanje korisnika");
define("_PROFILE_MI_PAGE_SEARCH", "Tra�i");
?>