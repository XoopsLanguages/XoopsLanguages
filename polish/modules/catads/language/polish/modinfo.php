<?php
// The name and description of this module
define("_MI_CATADS_NAME","Og³oszenia");
define("_MI_CATADS_DESC","Modu³ do zarz±dzania og³oszeniami");

// xoopsversion config
define("_MI_CATADS_MODERATE","Og³oszenia moderowane:");
define("_MI_CATADS_ANONCANPOST","Anonim mo¿e og³aszaæ:");
define("_MI_CATADS_NBPERPAGE","Og³oszeñ na stronê :");
define("_MI_CATADS_NBPERPAGE_ADMIN","Og³oszeñ na stronê (administracja)");
define("_MI_CATADS_DISPLAYNEW","Ilo¶æ nowych og³oszeñ :");
define("_MI_CATADS_BBCODE","Formularz : zezwól na bbcode ");
define("_MI_CATADS_MAXSIZEIMG","Obraz : max wielko¶æ (bajty)");
define("_MI_CATADS_MAXSIZEIMG_DESC","0 aby zabroniæ na uplaod");
define("_MI_CATADS_MAXHEIGHTIMG","Obraz : max. wysoko¶æ");
define("_MI_CATADS_MAXWIDTHIMG","Obraz : max. szeroko¶æ");
//define("_MI_CATADS_NBDAY_VALID","# dni wy¶wietlania");
define("_MI_CATADS_NBPUB_AGAIN","Liczba dozwolonych rozszerzeñ");
define("_MI_CATADS_NBDAY_NEW","Czas uznawania og³oszenia za nowe ");
define("_MI_CATADS_TPLTYPE","Strona g³ówna : sposób wy¶wietlania kategorii");
define("_MI_CATADS_COL","Kolumny");
define("_MI_CATADS_LIN","Wiersze");
define("_MI_CATADS_NBCOL","Strona g³ówn : # kolumn");
// 2004/10/24
define("_MI_CATADS_MAXLENTXT","Dodany tekst: max. ilo¶æ znaków.");
//add v1.3
define("_MI_CATADS_NBDAYS_BEFORE","Maksymalny czsa przed publikacj±");
//add v1.4
define("_MI_CATADS_CANEDIT","Zezwolenie na edycjê");
define("_MI_CATADS_CANDELETE","Zezwolenie na skasowanie");
define("_MI_CATADS_EMAIL_REQUIRED","Adres email w formularzu");
define("_MI_CATADS_ZIPCODE_REQUIRED","Kod pocztowy w formularzu");
define("_MI_CATADS_REQUIRED","Wymagane");
define("_MI_CATADS_OPTIONAL","Opcjonalne");
define("_MI_CATADS_NOASK","Nie wymagane;");
define("_MI_CATADS_NBCOLS_IMG","Og³oszenie : # obrazków w wierszu");
define("_MI_CATADS_DISP_PSEUDO","Og³oszenie : Wy¶wietl Nick");

// Names of blocks for this module 
define("_MI_CATADS_BNAME1","Ostatnio dodane");
define("_MI_CATADS_BNAME2","Dodaj");
define("_MI_CATADS_BNAME3","Moje og³oszenia");

//submenu
define("_MI_CATADS_SMENU1","Moje og³oszenia");
define("_MI_CATADS_SMENU2","Wy¶lij");

// Popup
define("_MI_CATADS_ADMENU1","Zarz±dzanie kategoriami");
define("_MI_CATADS_ADMENU2","Zarz±dzanie polami");
define("_MI_CATADS_ADMENU3","Zarz±dzanie og³oszeniami");

// Text for notifications

define("_MI_CATADS_GLOBAL_NOTIFY","Globalne");
define("_MI_CATADS_GLOBAL_NOTIFYDSC","Globalne opcje powiadomieñ");

define("_MI_CATADS_CATEGORY_NOTIFY","Kategoria");
define("_MI_CATADS_CATEGORY_NOTIFYDSC","Opcje powiadomieñ w kategoriach");

define("_MI_CATADS_ADS_NOTIFY","Ads");
define("_MI_CATADS_ADS_NOTIFYDSC","Opcje powiadomieñ dla tego og³oszenia");
// Event 1
define("_MI_CATADS_GLOBAL_ADSSUBMIT_NOTIFY","Ad submitted");
define("_MI_CATADS_GLOBAL_ADSSUBMIT_NOTIFYCAP","Informacja o wys³anym nowym og³oszeniu (oczekuj±cym)");
define("_MI_CATADS_GLOBAL_ADSSUBMIT_NOTIFYDSC","Be notified when a new ad is submitted");
define("_MI_CATADS_GLOBAL_ADSSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-info : Nowe og³oszenie");
// Event 2
define("_MI_CATADS_GLOBAL_NEWADS_NOTIFY","Nowe og³oszenie");       
define("_MI_CATADS_GLOBAL_NEWADS_NOTIFYCAP","Informacja o opublikowanym nowym og³oszeniu");                           
define("_MI_CATADS_GLOBAL_NEWADS_NOTIFYDSC","Powiadom mnie o opublikowanym nowym og³oszeniu.");                
define("_MI_CATADS_GLOBAL_NEWADS_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-info : nowe og³oszenie");                              
// Event 3
define("_MI_CATADS_CATEGORY_SUBMIT_NOTIFY","Dodano nowe og³oszenie");       
define("_MI_CATADS_CATEGORY_SUBMIT_NOTIFYCAP","Informacja o wys³anym nowym og³oszeniu (oczekuj±cym) w tej kategorii");
define("_MI_CATADS_CATEGORY_SUBMIT_NOTIFYDSC","Powiadom mnie o wys³anym nowym og³oszeniu (oczekuj±cym) w tej kategorii.");
define("_MI_CATADS_CATEGORY_SUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notify : nowe og³oszenie");                              
// Event 4
define("_MI_CATADS_CATEGORY_NEWADS_NOTIFY","Dodano nowe og³oszenie");       
define("_MI_CATADS_CATEGORY_NEWADS_NOTIFYCAP","Informacja o opublikowanym nowym og³oszeniu w tej kategorii");
define("_MI_CATADS_CATEGORY_NEWADS_NOTIFYDSC","Powiadom mnie o wys³anym nowym og³oszeniu (oczekuj±cym) w tej kategorii.");
define("_MI_CATADS_CATEGORY_NEWADS_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notify : nowe og³oszenie");                              
// Event 5
define("_MI_CATADS_ADS_APPROVE_NOTIFY","Opublikowano nowe og³oszenie");
define("_MI_CATADS_ADS_APPROVE_NOTIFYCAP","Powiadom mnie gdy moje og³oszenie zostanie opublikowane.");
define("_MI_CATADS_ADS_APPROVE_NOTIFYDSC","Powiadom mnie gdy moje og³oszenie zostanie opublikowane.");
define("_MI_CATADS_ADS_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notify : Opublikowano nowe og³oszenie");

?>
