<?php
// The name and description of this module
define("_MI_CATADS_NAME","Ogłoszenia");
define("_MI_CATADS_DESC","Moduł do zarządzania ogłoszeniami");

// xoopsversion config
define("_MI_CATADS_MODERATE","Ogłoszenia moderowane:");
define("_MI_CATADS_ANONCANPOST","Anonim może ogłaszać:");
define("_MI_CATADS_NBPERPAGE","Ogłoszeń na stronę :");
define("_MI_CATADS_NBPERPAGE_ADMIN","Ogłoszeń na stronę (administracja)");
define("_MI_CATADS_DISPLAYNEW","Ilość nowych ogłoszeń :");
define("_MI_CATADS_BBCODE","Formularz : zezwól na bbcode ");
define("_MI_CATADS_MAXSIZEIMG","Obraz : max wielkość (bajty)");
define("_MI_CATADS_MAXSIZEIMG_DESC","0 aby zabronić na uplaod");
define("_MI_CATADS_MAXHEIGHTIMG","Obraz : max. wysokość");
define("_MI_CATADS_MAXWIDTHIMG","Obraz : max. szerokość");
//define("_MI_CATADS_NBDAY_VALID","# dni wyświetlania");
define("_MI_CATADS_NBPUB_AGAIN","Liczba dozwolonych rozszerzeń");
define("_MI_CATADS_NBDAY_NEW","Czas uznawania ogłoszenia za nowe ");
define("_MI_CATADS_TPLTYPE","Strona główna : sposób wyświetlania kategorii");
define("_MI_CATADS_COL","Kolumny");
define("_MI_CATADS_LIN","Wiersze");
define("_MI_CATADS_NBCOL","Strona główn : # kolumn");
// 2004/10/24
define("_MI_CATADS_MAXLENTXT","Dodany tekst: max. ilość znaków.");
//add v1.3
define("_MI_CATADS_NBDAYS_BEFORE","Maksymalny czsa przed publikacją");
//add v1.4
define("_MI_CATADS_CANEDIT","Zezwolenie na edycję");
define("_MI_CATADS_CANDELETE","Zezwolenie na skasowanie");
define("_MI_CATADS_EMAIL_REQUIRED","Adres email w formularzu");
define("_MI_CATADS_ZIPCODE_REQUIRED","Kod pocztowy w formularzu");
define("_MI_CATADS_REQUIRED","Wymagane");
define("_MI_CATADS_OPTIONAL","Opcjonalne");
define("_MI_CATADS_NOASK","Nie wymagane;");
define("_MI_CATADS_NBCOLS_IMG","Ogłoszenie : # obrazków w wierszu");
define("_MI_CATADS_DISP_PSEUDO","Ogłoszenie : Wyświetl Nick");

// Names of blocks for this module 
define("_MI_CATADS_BNAME1","Ostatnio dodane");
define("_MI_CATADS_BNAME2","Dodaj");
define("_MI_CATADS_BNAME3","Moje ogłoszenia");

//submenu
define("_MI_CATADS_SMENU1","Moje ogłoszenia");
define("_MI_CATADS_SMENU2","Wyślij");

// Popup
define("_MI_CATADS_ADMENU1", "Zarządzanie kategoriami");
define("_MI_CATADS_ADMENU2", "Zarządzanie polami");
define("_MI_CATADS_ADMENU3", "Zarządzanie ogłoszeniami");

// Text for notifications

define("_MI_CATADS_GLOBAL_NOTIFY", "Globalne");
define("_MI_CATADS_GLOBAL_NOTIFYDSC", "Globalne opcje powiadomień");

define("_MI_CATADS_CATEGORY_NOTIFY", "Kategoria");
define("_MI_CATADS_CATEGORY_NOTIFYDSC", "Opcje powiadomień w kategoriach");

define("_MI_CATADS_ADS_NOTIFY", "Ads");
define("_MI_CATADS_ADS_NOTIFYDSC", "Opcje powiadomień dla tego ogłoszenia");
// Event 1
define("_MI_CATADS_GLOBAL_ADSSUBMIT_NOTIFY", "Ad submitted");
define("_MI_CATADS_GLOBAL_ADSSUBMIT_NOTIFYCAP", "Informacja o wysłanym nowym ogłoszeniu (oczekującym)");
define("_MI_CATADS_GLOBAL_ADSSUBMIT_NOTIFYDSC", "Be notified when a new ad is submitted");
define("_MI_CATADS_GLOBAL_ADSSUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-info : Nowe ogłoszenie");
// Event 2
define("_MI_CATADS_GLOBAL_NEWADS_NOTIFY", "Nowe ogłoszenie");       
define("_MI_CATADS_GLOBAL_NEWADS_NOTIFYCAP", "Informacja o opublikowanym nowym ogłoszeniu");                           
define("_MI_CATADS_GLOBAL_NEWADS_NOTIFYDSC", "Powiadom mnie o opublikowanym nowym ogłoszeniu.");                
define("_MI_CATADS_GLOBAL_NEWADS_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-info : nowe ogłoszenie");                              
// Event 3
define("_MI_CATADS_CATEGORY_SUBMIT_NOTIFY", "Dodano nowe ogłoszenie");       
define("_MI_CATADS_CATEGORY_SUBMIT_NOTIFYCAP", "Informacja o wysłanym nowym ogłoszeniu (oczekującym) w tej kategorii");
define("_MI_CATADS_CATEGORY_SUBMIT_NOTIFYDSC", "Powiadom mnie o wysłanym nowym ogłoszeniu (oczekującym) w tej kategorii.");
define("_MI_CATADS_CATEGORY_SUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : nowe ogłoszenie");                              
// Event 4
define("_MI_CATADS_CATEGORY_NEWADS_NOTIFY", "Dodano nowe ogłoszenie");       
define("_MI_CATADS_CATEGORY_NEWADS_NOTIFYCAP", "Informacja o opublikowanym nowym ogłoszeniu w tej kategorii");
define("_MI_CATADS_CATEGORY_NEWADS_NOTIFYDSC", "Powiadom mnie o wysłanym nowym ogłoszeniu (oczekującym) w tej kategorii.");
define("_MI_CATADS_CATEGORY_NEWADS_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : nowe ogłoszenie");                              
// Event 5
define("_MI_CATADS_ADS_APPROVE_NOTIFY", "Opublikowano nowe ogłoszenie");
define("_MI_CATADS_ADS_APPROVE_NOTIFYCAP", "Powiadom mnie gdy moje ogłoszenie zostanie opublikowane.");
define("_MI_CATADS_ADS_APPROVE_NOTIFYDSC", "Powiadom mnie gdy moje ogłoszenie zostanie opublikowane.");
define("_MI_CATADS_ADS_APPROVE_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : Opublikowano nowe ogłoszenie");

?>
