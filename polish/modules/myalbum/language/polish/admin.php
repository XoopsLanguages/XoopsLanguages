<?php
// Polish translation by kaper@zk-p.pl


if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_AM_LOADED' ) ) {

define('MYALBUM_AM_LOADED' , 1 ) ;

// Index (Categories)
define("_AM_H3_FMT_CATEGORIES" , "%s - Zarz±dzanie kategoriami" ) ;
define("_AM_CAT_TH_TITLE" , "Nazwa" ) ;
define("_AM_CAT_TH_PHOTOS" , "Zdjêæ" ) ;
define("_AM_CAT_TH_OPERATION" , "Czynno¶æ" ) ;
define("_AM_CAT_TH_IMAGE" , "Banner" ) ;
define("_AM_CAT_TH_PARENT" , "Kategoria nadrzêdna" ) ;
define("_AM_CAT_TH_IMGURL" , "URL bannera" ) ;
define("_AM_CAT_MENU_NEW" , "Utwórz kategoriê" ) ;
define("_AM_CAT_MENU_EDIT" , "Edytuj kategoriê" ) ;
define("_AM_CAT_INSERTED" , "Utworzono kategoriê." ) ;
define("_AM_CAT_UPDATED" , "Zmieniono kategoriê." ) ;
define("_AM_CAT_BTN_BATCH" , "Zastosuj" ) ;
define("_AM_CAT_LINK_MAKETOPCAT" , "Utwórz now± kategoriê g³ówn±" ) ;
define("_AM_CAT_LINK_ADDPHOTOS" , "Dodaj zdjêcie w kategorii" ) ;
define("_AM_CAT_LINK_EDIT" , "Edytuj kategoriê" ) ;
define("_AM_CAT_LINK_MAKESUBCAT" , "Utwórz podkategoriê" ) ;
define("_AM_CAT_FMT_NEEDADMISSION" , "Do zatwierdzenia: %s zdjêæ" ) ;
define("_AM_CAT_FMT_CATDELCONFIRM" , "Kategoria %s zostanie usuniêta wraz z podkategoriami, zdjêciami i komentarzami do nich. " ) ;


// Admission
define("_AM_H3_FMT_ADMISSION" , "%s - zatwierdzanie nades³anych zdjêæ" ) ;
define("_AM_TH_SUBMITTER" , "Nades³a³" ) ;
define("_AM_TH_TITLE" , "Tytu³" ) ;
define("_AM_TH_DESCRIPTION" , "Opis" ) ;
define("_AM_TH_CATEGORIES" , "Kategoria" ) ;
define("_AM_TH_DATE" , "Ostatnia zmiana" ) ;


// Photo Manager
define("_AM_H3_FMT_PHOTOMANAGER" , "%s - Zarz±dzanie zdjêciami" ) ;
define("_AM_TH_BATCHUPDATE" , "Zmieñ zaznaczone zdjêcia" ) ;
define("_AM_OPT_NOCHANGE" , "- BEZ ZMIAN -" ) ;
define("_AM_JS_UPDATECONFIRM" , "Zaznaczone zdjêcia zostan± zmienione." ) ;


// Module Checker
define("_AM_H3_FMT_MODULECHECKER" , "%s - Sprawdzenie ¶rodowiska" ) ;

define("_AM_H4_ENVIRONMENT" , "¦rodowisko" ) ;
define("_AM_MB_PHPDIRECTIVE" , "Dyrektywa PHP" ) ;
define("_AM_MB_BOTHOK" , "dowolna warto¶æ" ) ;
define("_AM_MB_NEEDON" , "powinna byæ w³±czona" ) ;


define("_AM_H4_TABLE" , "Tabele" ) ;
define("_AM_MB_PHOTOSTABLE" , "Zdjêcia" ) ;
define("_AM_MB_DESCRIPTIONTABLE" , "DOpisy" ) ;
define("_AM_MB_CATEGORIESTABLE" , "Kategorie" ) ;
define("_AM_MB_VOTEDATATABLE" , "G³osowanie" ) ;
define("_AM_MB_COMMENTSTABLE" , "Komentarze" ) ;
define("_AM_MB_NUMBEROFPHOTOS" , "Liczba zdjêæ" ) ;
define("_AM_MB_NUMBEROFDESCRIPTIONS" , "Liczba opisów" ) ;
define("_AM_MB_NUMBEROFCATEGORIES" , "Liczba kategorii" ) ;
define("_AM_MB_NUMBEROFVOTEDATA" , "Liczba g³osów" ) ;
define("_AM_MB_NUMBEROFCOMMENTS" , "Liczba komentarzy" ) ;


define("_AM_H4_CONFIG" , "Konfiguracja" ) ;
define("_AM_MB_PIPEFORIMAGES" , "Filtr obrazów" ) ;
define("_AM_MB_DIRECTORYFORPHOTOS" , "Katalog zdjêæ" ) ;
define("_AM_MB_DIRECTORYFORTHUMBS" , "Katalog miniatur" ) ;
define("_AM_ERR_LASTCHAR" , "B³±d: ¶cie¿ka nie powinna koñczyæ siê znakiem '/'" ) ;
define("_AM_ERR_FIRSTCHAR" , "B³±d: ¶cie¿ka nie powinna rozpoczynaæ siê znakiem '/'" ) ;
define("_AM_ERR_PERMISSION" , "B³±d: Brak katalogu lub z³e uprawnienia (powinny byæ 777)" ) ;
define("_AM_ERR_NOTDIRECTORY" , "B³±d: to nie katalog" ) ;
define("_AM_ERR_READORWRITE" , "B³±d: brak dostêpu do katalogu. Uprawnienia powinny byæ 777" ) ;
define("_AM_ERR_SAMEDIR" , "B³±d: zdjêcia i miniatury powinny byæ w ró¿nych katalogach" ) ;
define("_AM_LNK_CHECKGD2" , "Sprawdzanie czy biblioteka GD do³±czona do PHP prawid³owo obs³uguje GD2" ) ;
define("_AM_MB_CHECKGD2" , "Je¶li wskazana tu strona nie wy¶wietla siê poprawnie, to nie nale¿y wykorzystywaæ biblioteki GD w trybie truecolor" ) ;
define("_AM_MB_GD2SUCCESS" , "GD2 (truecolor) powinno dzia³aæ poprawnie" ) ;


define("_AM_H4_PHOTOLINK" , "Sprawdzanie dostêpu do plików zdjêæ i miniatur" ) ;
define("_AM_MB_NOWCHECKING" , "Trwa sprawdzanie" ) ;
define("_AM_FMT_PHOTONOTREADABLE" , "Zdjêcie (%s) niedostêpne" ) ;
define("_AM_FMT_THUMBNOTREADABLE" , "Miniatura (%s) niedostêpna" ) ;
define("_AM_FMT_NUMBEROFDEADPHOTOS" , "Niedostêpnych zdjêæ: %s" ) ;
define("_AM_FMT_NUMBEROFDEADTHUMBS" , "Miniatur do utworzenia: %s" ) ;
define("_AM_FMT_NUMBEROFREMOVEDTMPS" , "Usuniêtych niepotrzebnych plików: %s" ) ;
define("_AM_LINK_REDOTHUMBS" , "Ponownie utwórz miniatury" ) ;
define("_AM_LINK_TABLEMAINTENANCE" , "Ustaw tabele" ) ;



// Redo Thumbnail
define("_AM_H3_FMT_RECORDMAINTENANCE" , "%s - zarz±dzanie miniaturami" ) ;

define("_AM_FMT_CHECKING" , "sprawdzanie %s ..." ) ;

define("_AM_FORM_RECORDMAINTENANCE" , "Zarz±dzanie miniaturami" ) ;

define("_AM_MB_FAILEDREADING" , "b³±d odczytu" ) ;
define("_AM_MB_CREATEDTHUMBS" , "utworzono miniaturê" ) ;
define("_AM_MB_BIGTHUMBS" , "B³±d tworzenia miniatury. Skopiowano" ) ;
define("_AM_MB_SKIPPED" , "pominiêto" ) ;
define("_AM_MB_SIZEREPAIRED" , "poprawiono zapis rozmiaru miniatury" ) ;
define("_AM_MB_RECREMOVED" , "rekord usuniêty" ) ;
define("_AM_MB_PHOTONOTEXISTS" , "brak zdjêcia" ) ;
define("_AM_MB_PHOTORESIZED" , "przeskalowano zdjêcie" ) ;

define("_AM_TEXT_RECORDFORSTARTING" , "Przetwarzaæ od rekordu" ) ;
define("_AM_TEXT_NUMBERATATIME" , "Liczba rekordów do przetworzenia" ) ;
define("_AM_LABEL_DESCNUMBERATATIME" , "Przetwarzanie zbyt wielu rekordów mo¿e spowodowaæ przekroczenie timeout-u serwera WWW i nie przetworzenie wszystkich rekordów. Dobierz w³a¶ciw± liczbê eksperymentalnie." ) ;

define("_AM_RADIO_FORCEREDO" , "Nadpisz istniej±ce miniatury" ) ;
define("_AM_RADIO_REMOVEREC" , "Usuñ rekordy nie maj±ce zdjêcia" ) ;
define("_AM_RADIO_RESIZE" , "Przeskaluj zdjêcia wiêksze od okre¶lonych w ustawieniach" ) ;

define("_AM_MB_FINISHED" , "Zakoñczono." ) ;
define("_AM_LINK_RESTART" , "Od pocz±tku" ) ;
define("_AM_SUBMIT_NEXT" , "Dalej" ) ;



// Batch Register
define("_AM_H3_FMT_BATCHREGISTER" , "%s - wgrywanie wsadowe" ) ;


// GroupPerm Global
define("_AM_ALBM_GROUPPERM_GLOBAL" , "Uprawnienia" ) ;
define("_AM_ALBM_GROUPPERM_GLOBALDESC" , "Uprawnienia grup do modu³u" ) ;
define("_AM_ALBM_GPERMUPDATED" , "Ustawiono uprawnienia." ) ;


// Import
define("_AM_H3_FMT_IMPORTTO" , 'Import obrazów do modu³u %s' ) ;
define("_AM_FMT_IMPORTFROMMYALBUMP" , 'Import z modu³u "%s" zgodnego z modu³em MyAlbum-P' ) ;
define("_AM_FMT_IMPORTFROMIMAGEMANAGER" , 'Import z Meded¿era Obrazów XOOPS' ) ;
define("_AM_CB_IMPORTRECURSIVELY" , 'Importuj wraz z podkategoriami' ) ;
define("_AM_RADIO_IMPORTCOPY" , 'Kopiuj obrazy (bez komentarzy)' ) ;
define("_AM_RADIO_IMPORTMOVE" , 'Przenie¶ obrazy (wraz z komentzrzami)' ) ;
define("_AM_MB_IMPORTCONFIRM" , 'Importuj' ) ;
define("_AM_FMT_IMPORTSUCCESS" , 'Zaimportowano %s obrazów.' ) ;


// Export
define("_AM_H3_FMT_EXPORTTO" , 'Eksport obrazów z modu³u %s' ) ;
define("_AM_FMT_EXPORTTOIMAGEMANAGER" , 'Eksport do Mened¿era Obrazów XOOPS' ) ;
define("_AM_FMT_EXPORTIMSRCCAT" , 'Kategoria ¼ród³owa' ) ;
define("_AM_FMT_EXPORTIMDSTCAT" , 'Kategoria docelowa' ) ;
define("_AM_CB_EXPORTRECURSIVELY" , 'Eksportuj wraz z podkategoriami' ) ;
define("_AM_CB_EXPORTTHUMB" , 'Eksportuj miniatury, nie g³ówne obrazy' ) ;
define("_AM_MB_EXPORTCONFIRM" , 'Eksportuj' ) ;
define("_AM_FMT_EXPORTSUCCESS" , 'Weksportowano %s obrazów' ) ;


}

?>
