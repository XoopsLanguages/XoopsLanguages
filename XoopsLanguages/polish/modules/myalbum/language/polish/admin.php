<?php
// Polish translation by kaper@zk-p.pl


if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_AM_LOADED' ) ) {

define( 'MYALBUM_AM_LOADED' , 1 ) ;

// Index (Categories)
define( "_AM_H3_FMT_CATEGORIES" , "%s - Zarządzanie kategoriami" ) ;
define( "_AM_CAT_TH_TITLE" , "Nazwa" ) ;
define( "_AM_CAT_TH_PHOTOS" , "Zdjęć" ) ;
define( "_AM_CAT_TH_OPERATION" , "Czynność" ) ;
define( "_AM_CAT_TH_IMAGE" , "Banner" ) ;
define( "_AM_CAT_TH_PARENT" , "Kategoria nadrzędna" ) ;
define( "_AM_CAT_TH_IMGURL" , "URL bannera" ) ;
define( "_AM_CAT_MENU_NEW" , "Utwórz kategorię" ) ;
define( "_AM_CAT_MENU_EDIT" , "Edytuj kategorię" ) ;
define( "_AM_CAT_INSERTED" , "Utworzono kategorię." ) ;
define( "_AM_CAT_UPDATED" , "Zmieniono kategorię." ) ;
define( "_AM_CAT_BTN_BATCH" , "Zastosuj" ) ;
define( "_AM_CAT_LINK_MAKETOPCAT" , "Utwórz nową kategorię główną" ) ;
define( "_AM_CAT_LINK_ADDPHOTOS" , "Dodaj zdjęcie w kategorii" ) ;
define( "_AM_CAT_LINK_EDIT" , "Edytuj kategorię" ) ;
define( "_AM_CAT_LINK_MAKESUBCAT" , "Utwórz podkategorię" ) ;
define( "_AM_CAT_FMT_NEEDADMISSION" , "Do zatwierdzenia: %s zdjęć" ) ;
define( "_AM_CAT_FMT_CATDELCONFIRM" , "Kategoria %s zostanie usunięta wraz z podkategoriami, zdjęciami i komentarzami do nich. " ) ;


// Admission
define( "_AM_H3_FMT_ADMISSION" , "%s - zatwierdzanie nadesłanych zdjęć" ) ;
define( "_AM_TH_SUBMITTER" , "Nadesłał" ) ;
define( "_AM_TH_TITLE" , "Tytuł" ) ;
define( "_AM_TH_DESCRIPTION" , "Opis" ) ;
define( "_AM_TH_CATEGORIES" , "Kategoria" ) ;
define( "_AM_TH_DATE" , "Ostatnia zmiana" ) ;


// Photo Manager
define( "_AM_H3_FMT_PHOTOMANAGER" , "%s - Zarządzanie zdjęciami" ) ;
define( "_AM_TH_BATCHUPDATE" , "Zmień zaznaczone zdjęcia" ) ;
define( "_AM_OPT_NOCHANGE" , "- BEZ ZMIAN -" ) ;
define( "_AM_JS_UPDATECONFIRM" , "Zaznaczone zdjęcia zostaną zmienione." ) ;


// Module Checker
define( "_AM_H3_FMT_MODULECHECKER" , "%s - Sprawdzenie środowiska" ) ;

define( "_AM_H4_ENVIRONMENT" , "Środowisko" ) ;
define( "_AM_MB_PHPDIRECTIVE" , "Dyrektywa PHP" ) ;
define( "_AM_MB_BOTHOK" , "dowolna wartość" ) ;
define( "_AM_MB_NEEDON" , "powinna być włączona" ) ;


define( "_AM_H4_TABLE" , "Tabele" ) ;
define( "_AM_MB_PHOTOSTABLE" , "Zdjęcia" ) ;
define( "_AM_MB_DESCRIPTIONTABLE" , "DOpisy" ) ;
define( "_AM_MB_CATEGORIESTABLE" , "Kategorie" ) ;
define( "_AM_MB_VOTEDATATABLE" , "Głosowanie" ) ;
define( "_AM_MB_COMMENTSTABLE" , "Komentarze" ) ;
define( "_AM_MB_NUMBEROFPHOTOS" , "Liczba zdjęć" ) ;
define( "_AM_MB_NUMBEROFDESCRIPTIONS" , "Liczba opisów" ) ;
define( "_AM_MB_NUMBEROFCATEGORIES" , "Liczba kategorii" ) ;
define( "_AM_MB_NUMBEROFVOTEDATA" , "Liczba głosów" ) ;
define( "_AM_MB_NUMBEROFCOMMENTS" , "Liczba komentarzy" ) ;


define( "_AM_H4_CONFIG" , "Konfiguracja" ) ;
define( "_AM_MB_PIPEFORIMAGES" , "Filtr obrazów" ) ;
define( "_AM_MB_DIRECTORYFORPHOTOS" , "Katalog zdjęć" ) ;
define( "_AM_MB_DIRECTORYFORTHUMBS" , "Katalog miniatur" ) ;
define( "_AM_ERR_LASTCHAR" , "Błąd: ścieżka nie powinna kończyć się znakiem '/'" ) ;
define( "_AM_ERR_FIRSTCHAR" , "Błąd: ścieżka nie powinna rozpoczynać się znakiem '/'" ) ;
define( "_AM_ERR_PERMISSION" , "Błąd: Brak katalogu lub złe uprawnienia (powinny być 777)" ) ;
define( "_AM_ERR_NOTDIRECTORY" , "Błąd: to nie katalog" ) ;
define( "_AM_ERR_READORWRITE" , "Błąd: brak dostępu do katalogu. Uprawnienia powinny być 777" ) ;
define( "_AM_ERR_SAMEDIR" , "Błąd: zdjęcia i miniatury powinny być w różnych katalogach" ) ;
define( "_AM_LNK_CHECKGD2" , "Sprawdzanie czy biblioteka GD dołączona do PHP prawidłowo obsługuje GD2" ) ;
define( "_AM_MB_CHECKGD2" , "Jeśli wskazana tu strona nie wyświetla się poprawnie, to nie należy wykorzystywać biblioteki GD w trybie truecolor" ) ;
define( "_AM_MB_GD2SUCCESS" , "GD2 (truecolor) powinno działać poprawnie" ) ;


define( "_AM_H4_PHOTOLINK" , "Sprawdzanie dostępu do plików zdjęć i miniatur" ) ;
define( "_AM_MB_NOWCHECKING" , "Trwa sprawdzanie" ) ;
define( "_AM_FMT_PHOTONOTREADABLE" , "Zdjęcie (%s) niedostępne" ) ;
define( "_AM_FMT_THUMBNOTREADABLE" , "Miniatura (%s) niedostępna" ) ;
define( "_AM_FMT_NUMBEROFDEADPHOTOS" , "Niedostępnych zdjęć: %s" ) ;
define( "_AM_FMT_NUMBEROFDEADTHUMBS" , "Miniatur do utworzenia: %s" ) ;
define( "_AM_FMT_NUMBEROFREMOVEDTMPS" , "Usuniętych niepotrzebnych plików: %s" ) ;
define( "_AM_LINK_REDOTHUMBS" , "Ponownie utwórz miniatury" ) ;
define( "_AM_LINK_TABLEMAINTENANCE" , "Ustaw tabele" ) ;



// Redo Thumbnail
define( "_AM_H3_FMT_RECORDMAINTENANCE" , "%s - zarządzanie miniaturami" ) ;

define( "_AM_FMT_CHECKING" , "sprawdzanie %s ..." ) ;

define( "_AM_FORM_RECORDMAINTENANCE" , "Zarządzanie miniaturami" ) ;

define( "_AM_MB_FAILEDREADING" , "błąd odczytu" ) ;
define( "_AM_MB_CREATEDTHUMBS" , "utworzono miniaturę" ) ;
define( "_AM_MB_BIGTHUMBS" , "Błąd tworzenia miniatury. Skopiowano" ) ;
define( "_AM_MB_SKIPPED" , "pominięto" ) ;
define( "_AM_MB_SIZEREPAIRED" , "poprawiono zapis rozmiaru miniatury" ) ;
define( "_AM_MB_RECREMOVED" , "rekord usunięty" ) ;
define( "_AM_MB_PHOTONOTEXISTS" , "brak zdjęcia" ) ;
define( "_AM_MB_PHOTORESIZED" , "przeskalowano zdjęcie" ) ;

define( "_AM_TEXT_RECORDFORSTARTING" , "Przetwarzać od rekordu" ) ;
define( "_AM_TEXT_NUMBERATATIME" , "Liczba rekordów do przetworzenia" ) ;
define( "_AM_LABEL_DESCNUMBERATATIME" , "Przetwarzanie zbyt wielu rekordów może spowodować przekroczenie timeout-u serwera WWW i nie przetworzenie wszystkich rekordów. Dobierz właściwą liczbę eksperymentalnie." ) ;

define( "_AM_RADIO_FORCEREDO" , "Nadpisz istniejące miniatury" ) ;
define( "_AM_RADIO_REMOVEREC" , "Usuń rekordy nie mające zdjęcia" ) ;
define( "_AM_RADIO_RESIZE" , "Przeskaluj zdjęcia większe od określonych w ustawieniach" ) ;

define( "_AM_MB_FINISHED" , "Zakończono." ) ;
define( "_AM_LINK_RESTART" , "Od początku" ) ;
define( "_AM_SUBMIT_NEXT" , "Dalej" ) ;



// Batch Register
define( "_AM_H3_FMT_BATCHREGISTER" , "%s - wgrywanie wsadowe" ) ;


// GroupPerm Global
define( "_AM_ALBM_GROUPPERM_GLOBAL" , "Uprawnienia" ) ;
define( "_AM_ALBM_GROUPPERM_GLOBALDESC" , "Uprawnienia grup do modułu" ) ;
define( "_AM_ALBM_GPERMUPDATED" , "Ustawiono uprawnienia." ) ;


// Import
define( "_AM_H3_FMT_IMPORTTO" , 'Import obrazów do modułu %s' ) ;
define( "_AM_FMT_IMPORTFROMMYALBUMP" , 'Import z modułu "%s" zgodnego z modułem MyAlbum-P' ) ;
define( "_AM_FMT_IMPORTFROMIMAGEMANAGER" , 'Import z Mededżera Obrazów XOOPS' ) ;
define( "_AM_CB_IMPORTRECURSIVELY" , 'Importuj wraz z podkategoriami' ) ;
define( "_AM_RADIO_IMPORTCOPY" , 'Kopiuj obrazy (bez komentarzy)' ) ;
define( "_AM_RADIO_IMPORTMOVE" , 'Przenieś obrazy (wraz z komentzrzami)' ) ;
define( "_AM_MB_IMPORTCONFIRM" , 'Importuj' ) ;
define( "_AM_FMT_IMPORTSUCCESS" , 'Zaimportowano %s obrazów.' ) ;


// Export
define( "_AM_H3_FMT_EXPORTTO" , 'Eksport obrazów z modułu %s' ) ;
define( "_AM_FMT_EXPORTTOIMAGEMANAGER" , 'Eksport do Menedżera Obrazów XOOPS' ) ;
define( "_AM_FMT_EXPORTIMSRCCAT" , 'Kategoria źródłowa' ) ;
define( "_AM_FMT_EXPORTIMDSTCAT" , 'Kategoria docelowa' ) ;
define( "_AM_CB_EXPORTRECURSIVELY" , 'Eksportuj wraz z podkategoriami' ) ;
define( "_AM_CB_EXPORTTHUMB" , 'Eksportuj miniatury, nie główne obrazy' ) ;
define( "_AM_MB_EXPORTCONFIRM" , 'Eksportuj' ) ;
define( "_AM_FMT_EXPORTSUCCESS" , 'Weksportowano %s obrazów' ) ;


}

?>
