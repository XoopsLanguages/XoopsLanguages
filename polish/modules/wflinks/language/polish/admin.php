<?php
/**
 * $Id: admin.php,v 1.1 2007/02/10 18:55:53 dap997 Exp $
 * Module: WF-links tłumaczenie by kurak_bu & dap997
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
define( "_AM_WFL_WARNINSTALL1", "WARNING: Katalog %s istnieje na twoim serwerze. <br />Proszę go usunąć ze względów bezpieczeństwa." );
define( "_AM_WFL_WARNINSTALL2", "WARNING: Plik %s istnieje na twoim serwerze. <br />Proszę go usunąć ze względów bezpieczeństwa." );
define( "_AM_WFL_WARNINSTALL3", "WARNING: Folder %s nie istnieje na twoim serwerze. <br />Proszę go utworzyć." );

define( "_AM_WFL_MODULE_NAME" , "WF-Links" );

define( "_AM_WFL_BMODIFY"     , "Edytuj" );
define( "_AM_WFL_BDELETE"     , "Usuń" );
define( "_AM_WFL_BCREATE"     , "Utwórz nowy" );
define( "_AM_WFL_BADD"        , "Dodaj" );
define( "_AM_WFL_BAPPROVE"    , "Akceptuj" );
define( "_AM_WFL_BIGNORE"     , "Ignoruj" );
define( "_AM_WFL_BCANCEL"     , "Anuluj" );
define( "_AM_WFL_BSAVE"       , "Zapisz" );
define( "_AM_WFL_BRESET"      , "Wyczyść" );
define( "_AM_WFL_BMOVE"       , "Przenieś linki" );
define( "_AM_WFL_BUPLOAD"     , "Upload" );
define( "_AM_WFL_BDELETEIMAGE", "Usuń zaznaczony obrazek" );
define( "_AM_WFL_BRETURN"     , "Wróć tam gdzie byłeś!" );
define( "_AM_WFL_DBERROR"     , "Błąd bazy danych: Proszę napisz o tym błędzie administratorowi serwisu" );
// Other Options
define( "_AM_WFL_TEXTOPTIONS"   , "Opcje tekstu:" );
define( "_AM_WFL_DISABLEHTML"   , " Wyłącz tagi HTML" );
define( "_AM_WFL_DISABLESMILEY" , " Wyłącz buźki" );
define( "_AM_WFL_DISABLEXCODE"  , " Wyłącz tagi Xoops'a'" );
define( "_AM_WFL_DISABLEIMAGES" , " Wyłącz obrazki" );
define( "_AM_WFL_DISABLEBREAK"  , " Użyj konwersji Xoopsa dla linii oddzielających?" );
define( "_AM_WFL_UPLOADFILE"    , "Link dodany pomyślnie!" );
define( "_AM_WFL_NOMENUITEMS"   , "Nie ma składników menu bez menu" );
// Admin Bread crumb
define( "_AM_WFL_PREFS"         , "Ustawienia" );
define( "_AM_WFL_BUPDATE"       , "Aktualizuj moduł" );
define( "_AM_WFL_BINDEX"        , "Strona główna opcji" );
define( "_AM_WFL_BPERMISSIONS"  , "Uprawnienia" );
// define( "_AM_WFL_BLOCKADMIN", "Blocks" );
define( "_AM_WFL_BLOCKADMIN"    , "Ustawienia bloków" );
define( "_AM_WFL_GOMODULE"      , "Idź do modułu" );
define( "_AM_WFL_ABOUT"         , "Informacje o module" );
// Admin Summary
define( "_AM_WFL_SCATEGORY"     , "Kategorii: " );
define( "_AM_WFL_SFILES"        , "Linków: " );
define( "_AM_WFL_SNEWFILESVAL"  , "Dodanych: " );
define( "_AM_WFL_SMODREQUEST"   , "Zmodyfikowanych: " );
define( "_AM_WFL_SREVIEWS"      , "Kliknięć: " );

// Admin Main Menu
define( "_AM_WFL_MCATEGORY"     , "Zarządzanie kategoriami" );
define( "_AM_WFL_MLINKS"        , "Zarządzanie linkami" );
define( "_AM_WFL_MLISTBROKEN"   , "Lista uszkodzonych linków" );
define( "_AM_WFL_MLISTPINGTIMES", "Lista pingów dla linków" );
define( "_AM_WFL_INDEXPAGE"     , "Zarządzanie stroną główną" );
define( "_AM_WFL_MCOMMENTS"     , "Komentarze" );
define( "_AM_WFL_MVOTEDATA"     , "Oceny linków" );
define( "_AM_WFL_MUPLOADS"      , "Upload obrazka" );

// Catgeory defines
define( "_AM_WFL_CCATEGORY_CREATENEW"       , "Nowa kategoria" );
define( "_AM_WFL_CCATEGORY_MODIFY"          , "Modifikuj kategorię" );
define( "_AM_WFL_CCATEGORY_MOVE"            , "Przenieś linki z kategorii" );
define( "_AM_WFL_CCATEGORY_MODIFY_TITLE"    , "Nazwa:" );
define( "_AM_WFL_CCATEGORY_MODIFY_FAILED"   , "Nie można przenieść do tej kategorii" );
define( "_AM_WFL_CCATEGORY_MODIFY_FAILEDT"  , "Nie można znaleźć tej kategorii" );
define( "_AM_WFL_CCATEGORY_MODIFY_MOVED"    , "Linki przeniesione i kategoria usunięta" );
define( "_AM_WFL_CCATEGORY_CREATED"         , "Utworzono nową kategorię" );
define( "_AM_WFL_CCATEGORY_MODIFIED"        , "Kategoria zmodyfikowana pomyślnie" );
define( "_AM_WFL_CCATEGORY_DELETED"         , "Kategoria usunięta" );
define( "_AM_WFL_CCATEGORY_AREUSURE"        , "Czy na pewno chcesz usunać tą kategorię i jej linki i komentarze?" );
define( "_AM_WFL_CCATEGORY_NOEXISTS"        , "Najpierw musisz utworzyć nową kategorię żeby móc dodawać linki" );
define( "_AM_WFL_FCATEGORY_GROUPPROMPT"     , "Opcje dostępu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz które grupy będą miały dostęp do tej kategorii.</span></div>" );
define( "_AM_WFL_FCATEGORY_SUBGROUPPROMPT"  , "Opcje dostępu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz które grupy będą mogły dodawać nowe linki do tej kategorii.</span></div>" );
define( "_AM_WFL_FCATEGORY_MODGROUPPROMPT"  , "Opcje dostępu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz które grupy będą mogły moderować tą kategorię.</span></div>" );

define( "_AM_WFL_FCATEGORY_TITLE"           , "Nazwa kategorii:" );
define( "_AM_WFL_FCATEGORY_WEIGHT"          , "Waga kategorii:" );
define( "_AM_WFL_FCATEGORY_SUBCATEGORY"     , "Ustaw jako podkategorię:" );
define( "_AM_WFL_FCATEGORY_CIMAGE"          , "Ustaw obrazek dla kategorii:" );
define( "_AM_WFL_FCATEGORY_DESCRIPTION"     , "Opis kategorii:" );
define( "_AM_WFL_FCATEGORY_SUMMARY"         , "Podsumowanie kategorii:" );
/**
 * Index page Defines
 */
define( "_AM_WFL_IPAGE_UPDATED"     , "Strona główna modułu zmodyfikowana!" );
define( "_AM_WFL_IPAGE_INFORMATION" , "Informacje zawarte na stronie głównej modułu" );
define( "_AM_WFL_IPAGE_MODIFY"      , "Modifikuj stronę główną modułu" );
define( "_AM_WFL_IPAGE_CIMAGE"      , "Obrazek na stronie głównej modułu:" );
define( "_AM_WFL_IPAGE_CTITLE"      , "Tytuł:" );
define( "_AM_WFL_IPAGE_CHEADING"    , "Tekst powitalny:" );
define( "_AM_WFL_IPAGE_CHEADINGA"   , "Umieszczenie tekstu powitalnego:" );
define( "_AM_WFL_IPAGE_CFOOTER"     , "Stopka:" );
define( "_AM_WFL_IPAGE_CFOOTERA"    , "Umieszczenie stopki:" );
define( "_AM_WFL_IPAGE_CLEFT"       , "Wyrównanie do lewej" );
define( "_AM_WFL_IPAGE_CCENTER"     , "Wyrównanie do środka" );
define( "_AM_WFL_IPAGE_CRIGHT"      , "Wyrównanie do prawej" );
/**
 * Permissions defines
 */
define( "_AM_WFL_PERM_MANAGEMENT"          , "Zarządzanie grupami" );
define( "_AM_WFL_PERM_PERMSNOTE"           , "<div><b>NOTE:</b> Pamiętaj, że grupy uprawnienia dawane tutaj nie koniecznie muszą się zgadzać z tymi w <b>System admin > Grupy</b>.</div>" );
define( "_AM_WFL_PERM_CPERMISSIONS"        , "Kategorie" );
define( "_AM_WFL_PERM_CSELECTPERMISSIONS"  , "Wybierz które kategorie są dostępne dla danej grupy" );
define( "_AM_WFL_PERM_CNOCATEGORY"         , "Nie można nadawać uprawnień bo nie ma jeszcze żadnej kategorii!" );
define( "_AM_WFL_PERM_FPERMISSIONS"        , "Linki" );
define( "_AM_WFL_PERM_FNOFILES"            , "Nie można nadawać uprawnień bo nie ma jeszcze żadnego linku!" );
define( "_AM_WFL_PERM_FSELECTPERMISSIONS"  , "Wybierz które linki są dostępne dla danej grupy" );
/**
 * Upload defines
 */
define( "_AM_WFL_LINK_IMAGEUPLOAD"      , "Obrazek poprawdnie wgrany" );
define( "_AM_WFL_LINK_NOIMAGEEXIST"     , "Błąd: nie wybrano żadnego obrazka!" );
define( "_AM_WFL_LINK_IMAGEEXIST"       , "Taki obrazek już istnieje!" );
define( "_AM_WFL_LINK_FILEDELETED"      , "Link został usunięty!" );
define( "_AM_WFL_LINK_FILEERRORDELETE"  , "Nie znaleziono linku na serwerze." );
define( "_AM_WFL_LINK_NOFILEERROR"      , "Nie zaznaczono obiektu do usunięcia." );
define( "_AM_WFL_LINK_DELETEFILE"       , "Czy na pewno chcesz usunąć ten obrazek?" );
define( "_AM_WFL_LINK_IMAGEINFO"        , "Status serwera" );
define( "_AM_WFL_LINK_SPHPINI"          , "<b>Informacja wzięta z PHP ini:</b>" );
define( "_AM_WFL_LINK_SAFEMODESTATUS"   , "Tryb bezpieczny: " );
define( "_AM_WFL_LINK_REGISTERGLOBALS"  , "Register Globals: " );
define( "_AM_WFL_LINK_SERVERUPLOADSTATUS", "Status uploadu serwera: " );
define( "_AM_WFL_LINK_MAXUPLOADSIZE"    , "Maksymalny rozmiar obrazka: " );
define( "_AM_WFL_LINK_MAXPOSTSIZE"      , "Maksymalny rozmiar postu: " );
define( "_AM_WFL_LINK_SAFEMODEPROBLEMS" , " (To może stwarzać problemy)" );
define( "_AM_WFL_LINK_GDLIBSTATUS"      , "Wsparcie GD: " );
define( "_AM_WFL_LINK_GDLIBVERSION"     , "Wersja GD: " );
define( "_AM_WFL_LINK_GDON"             , "<b>Włączone</b> (Miniaturki włączone)" );
define( "_AM_WFL_LINK_GDOFF"            , "<b>Wyłączone</b> (Miniaturki wyłączone)" );
define( "_AM_WFL_LINK_OFF"              , "<b>Włączone</b>" );
define( "_AM_WFL_LINK_ON"               , "<b>Wyłączone</b>" );
define( "_AM_WFL_LINK_CATIMAGE"         , "Obrazki kategorii" );
define( "_AM_WFL_LINK_SCREENSHOTS"      , "Screenshoty" );
define( "_AM_WFL_LINK_MAINIMAGEDIR"     , "Główne obrazki" );
define( "_AM_WFL_LINK_FCATIMAGE"        , "Ścieżka do obrazka kategorii" );
define( "_AM_WFL_LINK_FSCREENSHOTS"     , "Ścieżka do obrazka screenshotu" );
define( "_AM_WFL_LINK_FMAINIMAGEDIR"    , "Ścieżka do obrazka głównego" );
define( "_AM_WFL_LINK_FUPLOADIMAGETO"   , "Upload obrazka: " );
define( "_AM_WFL_LINK_FUPLOADPATH"      , "Ścieżka: " );
define( "_AM_WFL_LINK_FUPLOADURL"       , "URL: " );
define( "_AM_WFL_LINK_FOLDERSELECTION"  , "Wybierz rodzaj uploadu:" );
define( "_AM_WFL_LINK_FSHOWSELECTEDIMAGE", "Pokaż obrazek:" );
define( "_AM_WFL_LINK_FUPLOADIMAGE"     , "Upload nowego obrazka do wybranej kategorii:" );

// Main Index defines
define( "_AM_WFL_MINDEX_LINKSUMMARY"         , "Statystyka" );
define( "_AM_WFL_MINDEX_PUBLISHEDLINK"       , "Linków w bazie:" );
define( "_AM_WFL_MINDEX_AUTOPUBLISHEDLINK"   , "Automatycznie dodaych linków w bazie:" );
define( "_AM_WFL_MINDEX_AUTOEXPIRE"          , "Automatycznie wygasające linki:" );
define( "_AM_WFL_MINDEX_EXPIRED"             , "Wygasłe linki:" );
define( "_AM_WFL_MINDEX_OFFLINELINK"         , "Nieaktywne linki:" );
define( "_AM_WFL_MINDEX_ID"                  , "ID" );
define( "_AM_WFL_MINDEX_TITLE"               , "Nazwa" );
define( "_AM_WFL_MINDEX_POSTER"              , "Autor" );
define( "_AM_WFL_MINDEX_ONLINE"              , "Status" );
define( "_AM_WFL_MINDEX_ONLINESTATUS"        , "Status online" );
define( "_AM_WFL_MINDEX_PUBLISH"             , "Opublikuj" );
define( "_AM_WFL_MINDEX_PUBLISHED"           , "Opublikowano" );
define( "_AM_WFL_MINDEX_EXPIRE"              , "Wyłącz" );
define( "_AM_WFL_MINDEX_NOTSET"              , "Nie podano daty" );

define( "_AM_WFL_MINDEX_ACTION"        , "Akcja" );
define( "_AM_WFL_MINDEX_NOLINKSFOUND"  , "Nie ma linków spełniających podane kryteria" );
define( "_AM_WFL_MINDEX_PAGE"          , "<b>Strona:<b> " );
define( '_AM_WFL_MINDEX_PAGEINFOTXT'   , '<ul><li>Opcje strony głównej WF-links.</li><li>Tutaj możesz łatwo zmienić logo wyświetlane na stronie głównej modułu lub tekst powitalny oraz podsumowanie (tekst wyświetlany na dole)</li></ul><br />Logo które wybierzesz będzie widoczne w całym module WF-Links.' );
define( "_AM_WFL_MINDEX_RESPONSE"      , "Czas reakcji" );
// Submitted Links
define( "_AM_WFL_SUB_SUBMITTEDFILES"           , "Linki dodane" );
define( "_AM_WFL_SUB_FILESWAITINGINFO"         , "Linki oczekujące" );
define( "_AM_WFL_SUB_FILESWAITINGVALIDATION"   , "Linki oczekujące na akceptację: " );
define( "_AM_WFL_SUB_APPROVEWAITINGFILE"       , "<b>Akceptuj</b> nowy link bez sprawdzania (akceptowania)." );
define( "_AM_WFL_SUB_EDITWAITINGFILE"          , "<b>Edytuj</b> nowy link i potem zaakceptuj." );
define( "_AM_WFL_SUB_DELETEWAITINGFILE"        , "<b>Usuń</b> nowy link." );
define( "_AM_WFL_SUB_NOFILESWAITING"           , "Nie ma żadych linków spełniających podane kryteria" );
define( "_AM_WFL_SUB_NEWFILECREATED"           , "Pomyślnie dodano nowy link" );
// Vote Information
define( "_AM_WFL_VOTE_RATINGINFOMATION"  , "Ocenianie" );
define( "_AM_WFL_VOTE_TOTALVOTES"        , "Ilość ocen: " );
define( "_AM_WFL_VOTE_REGUSERVOTES"      , "Przez zarejestrowanych: %s" );
define( "_AM_WFL_VOTE_ANONUSERVOTES"     , "Przez anonimowych: %s" );
define( "_AM_WFL_VOTE_USER"              , "Użytkownik" );
define( "_AM_WFL_VOTE_IP"                , "Adres IP" );
define( "_AM_WFL_VOTE_DATE"              , "Data" );
define( "_AM_WFL_VOTE_RATING"            , "Ocena" );
define( "_AM_WFL_VOTE_NOREGVOTES"        , "Brak głósów użytkowników" );
define( "_AM_WFL_VOTE_NOUNREGVOTES"      , "Brak głósów niezarejestrowanych" );
define( "_AM_WFL_VOTE_VOTEDELETED"       , "Głos usunięty." );
define( "_AM_WFL_VOTE_ID"                , "ID" );
define( "_AM_WFL_VOTE_FILETITLE"         , "Tytuł linku" );
define( "_AM_WFL_VOTE_DISPLAYVOTES"      , "Informacje o ocenianiu" );
define( "_AM_WFL_VOTE_NOVOTES"           , "Nie ma jeszcze żadnych ocen" );
define( "_AM_WFL_VOTE_DELETE"            , "Nie ma jeszcze żadnych ocen" );
define( "_AM_WFL_VOTE_DELETEDSC"         , "<b>Usuń</b> wybrany głos." );
define( "_AM_WFL_VOTEDELETED"            , "Wybrane głosy usunięto poprawnie" );

define( "_AM_WFL_VOTE_USERAVG"         , "Średnia ocen" );
define( "_AM_WFL_VOTE_TOTALRATE"       , "Łączna ilość ocen" );
define( "_AM_WFL_VOTE_MAXRATE"         , "Max. ilość ocen na plik" );
define( "_AM_WFL_VOTE_MINRATE"         , "Min. ilość ocen na plik" );
define( "_AM_WFL_VOTE_MOSTVOTEDTITLE"  , "Najczęściej głosowano" );
define( "_AM_WFL_VOTE_LEASTVOTEDTITLE" , "Najrzadziej głosowano" );
define( "_AM_WFL_VOTE_MOSTVOTERSUID"   , "Najaktywniejszy głosujący" );
define( "_AM_WFL_VOTE_REGISTERED"      , "Liczba głósów użytkowników" );
define( "_AM_WFL_VOTE_NONREGISTERED"   , "Liczba głósów niezarejestrowanych" );
// Modifications
define( "_AM_WFL_MOD_TOTMODREQUESTS"   , "Liczba propozycji modyfikacji: " );
define( "_AM_WFL_MOD_MODREQUESTS"      , "Zmodyfikowanych linków" );
define( "_AM_WFL_MOD_MODREQUESTSINFO"  , "Informacje o zmodyfikowanych linkach" );
define( "_AM_WFL_MOD_MODID"            , "ID" );
define( "_AM_WFL_MOD_MODTITLE"         , "Tytuł" );
define( "_AM_WFL_MOD_MODPOSTER"        , "Autor: " );
define( "_AM_WFL_MOD_DATE"             , "Dodano" );
define( "_AM_WFL_MOD_NOMODREQUEST"     , "Nie ma żadych linków spełniających podane kryteria" );
define( "_AM_WFL_MOD_TITLE"            , "Tytuł linku: " );
define( "_AM_WFL_MOD_LID"              , "ID linku: " );
define( "_AM_WFL_MOD_CID"              , "Kategoria: " );
define( "_AM_WFL_MOD_URL"              , "URL linku: " );
define( "_AM_WFL_MOD_PUBLISHER"        , "Dodający: " );
define( "_AM_WFL_MOD_FORUMID"          , "Forum: " );
define( "_AM_WFL_MOD_SCREENSHOT"       , "Screenshot: " );
define( "_AM_WFL_MOD_HOMEPAGE"         , "Strona domowa: " );
define( "_AM_WFL_MOD_HOMEPAGETITLE"    , "Nazwa strony domowej: " );
define( "_AM_WFL_MOD_SHOTIMAGE"        , "Screenshot: " );
define( "_AM_WFL_MOD_DESCRIPTION"      , "Opis: " );
define( "_AM_WFL_MOD_MODIFYSUBMITTER"  , "Dodający: " );
define( "_AM_WFL_MOD_MODIFYSUBMIT"     , "Dodający" );
define( "_AM_WFL_MOD_PROPOSED"         , "Proponowane szczegóły linku" );
define( "_AM_WFL_MOD_ORIGINAL"         , "Orginalne szczegóły linku" );
define( "_AM_WFL_MOD_REQDELETED"       , "Propozycja modyfikacji odrzucona" );
define( "_AM_WFL_MOD_REQUPDATED"       , "Propozycja modyfikacji zatwierdzona" );
define( '_AM_WFL_MOD_VIEW'             , 'Zobacz' );
// Link management
define( "_AM_WFL_LINK_ID"            , "ID: " );
define( "_AM_WFL_LINK_IP"            , "IP uploadera: " );
define( "_AM_WFL_LINK_ALLOWEDAMIME"  , "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Dozwolone rozszerzenia plików</b>:</div>" );
define( "_AM_WFL_LINK_MODIFYFILE"    , "Zmień informacje o linku" );
define( "_AM_WFL_LINK_CREATENEWFILE" , "Dodaj nowy link" );
define( "_AM_WFL_LINK_TITLE"         , "Tytuł linku: " );
define( "_AM_WFL_LINK_DLURL"         , "URL: " );
define( "_AM_WFL_LINK_DIRCA"         , "Dozwolone dla: " );
define( "_AM_WFL_LINK_DESCRIPTION"   , "Opis linku: " );
define( "_AM_WFL_LINK_CATEGORY"      , "Główna kategoria linku: " );
define( "_AM_WFL_LINK_FILESSTATUS"   , "Wyłączyć link?<br /><br /><span style='font-weight: normal;'>link nie będzie widoczny dla wszystkiech użytkowników.</span>" );
define( "_AM_WFL_LINK_SETASUPDATED"  , "Ustawić jako uaktualniony?<br /><br /><span style='font-weight: normal;'>wtedy zostanie wyświetlona odpowiednia ikona przy linku.</span>" );
define( "_AM_WFL_LINK_SHOTIMAGE"     , "Screenshot: " );
define( "_AM_WFL_LINK_DISCUSSINFORUM", "Dodać temat na forum?" );
define( "_AM_WFL_LINK_PUBLISHDATE"   , "Data publikacji:" );
define( "_AM_WFL_LINK_EXPIREDATE"    , "Data wgaśnięcia:" );
define( "_AM_WFL_LINK_CLEARPUBLISHDATE"   , "<br /><br />Bez daty publikacji:" );
define( "_AM_WFL_LINK_CLEAREXPIREDATE"    , "<br /><br />Bez daty wygaśnięcia:" );
define( "_AM_WFL_LINK_PUBLISHDATESET"     , " Ustaw datę publikacji: " );
define( "_AM_WFL_LINK_SETDATETIMEPUBLISH" , " Włączyć datę publikacji" );
define( "_AM_WFL_LINK_SETDATETIMEEXPIRE"  , " Włączyć datę wygaśnięcia" );
define( "_AM_WFL_LINK_SETPUBLISHDATE"     , "<b>Set Ustaw datę publikacji: </b>" );
define( "_AM_WFL_LINK_SETNEWPUBLISHDATE"  , "<b>Set Nowa data publikacji: </b><br />Opublikowano:" );
define( "_AM_WFL_LINK_SETPUBDATESETS"     , "<b>Ustaw datę publikacji: </b><br />Opublikowane zostanie:" );
define( "_AM_WFL_LINK_EXPIREDATESET"      , " Ustaw datę wygaśnięcia: " );
define( "_AM_WFL_LINK_SETEXPIREDATE"      , "<b>Ustaw datę wygaśnięcia: </b>" );
define( "_AM_WFL_LINK_DELEDITMESS"        , "Usuąć raport o uszkodzonym linku?<br /><br /><span style='font-weight: normal;'>Kiedy klikniesz <b>TAK</b> raport zostanie usunięty i tym samym potwierdzisz, że link działa poprawnie.</span>" );
define( "_AM_WFL_LINK_MUSTBEVALID"        , "Screenshot musi się znajdować w katalogu %s . Zostaw to pole puste jeżeli nie chcesz dodawać screenshotu." );
define( "_AM_WFL_LINK_EDITAPPROVE"        , "Link akceptacji:" );
define( "_AM_WFL_LINK_NEWFILEUPLOAD"      , "Dodano nowy link" );
define( "_AM_WFL_LINK_FILEMODIFIEDUPDATE" , "Link zmodyfikowany pomyślnie" );
define( "_AM_WFL_LINK_REALLYDELETEDTHIS"  , "Czy na pewno chcesz usunąć ten link?" );
define( "_AM_WFL_LINK_FILEWASDELETED"     , "Link %s został usunięty!" );
define( "_AM_WFL_LINK_FILEAPPROVED"       , "Link został zaakceptowany" );
define( "_AM_WFL_LINK_CREATENEWSSTORY"    , "<b>Utwórz newsa</b>" );
define( "_AM_WFL_LINK_SUBMITNEWS"         , "Utwórz newsa z linku?" );
define( "_AM_WFL_LINK_NEWSCATEGORY"       , "Wybierz kategorię newsów:" );
define( "_AM_WFL_LINK_NEWSTITLE"          , "Tytuł newsa:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Zostaw puste aby użyć nazwy pliku</span></div>" );
define( "_AM_WFL_LINK_PUBLISHER"          , "Autor: " );

/**
 * Broken links defines
 */
define( "_AM_WFL_SBROKENSUBMIT"           , "Uszkodzonych: " );
define( "_AM_WFL_BROKEN_FILE"             , "Raporty" );
define( "_AM_WFL_BROKEN_FILEIGNORED"      , "Raport został zignorowany i usunięty!" );
define( "_AM_WFL_BROKEN_NOWACK"           , "Raport został zaakceptowany!" );
define( "_AM_WFL_BROKEN_NOWCON"           , "Status zmieniony!" );
define( "_AM_WFL_BROKEN_REPORTINFO"       , "Raporty dotyczące zgłoszeń o linkach" );
define( "_AM_WFL_BROKEN_REPORTSNO"        , "Raporty czekające na wgląd admina:" );
define( "_AM_WFL_BROKEN_IGNOREDESC"       , "<b>Ignoruj</b> raport." );
define( "_AM_WFL_BROKEN_DELETEDESC"       , "<b>Usuń</b> link oraz raport go dotyczący." );
define( "_AM_WFL_BROKEN_EDITDESC"         , "<b>Edytuj</b> raport aby naprawić problem." );
define( "_AM_WFL_BROKEN_ACKDESC"          , "<b>Potwierdź</b> Ustaw status potwierdzone dla tego raportu." );
define( "_AM_WFL_BROKEN_CONFIRMDESC"      , "<b>Zatwierdź</b> Ustaw status zatwierdzone dla tego raportu." );
define( "_AM_WFL_BROKEN_ACKNOWLEDGED"     , "Potwierdzone" );
define( "_AM_WFL_BROKEN_DCONFIRMED"       , "Zatwierdzone" );

define( "_AM_WFL_BROKEN_ID"               , "ID" );
define( "_AM_WFL_BROKEN_TITLE"            , "Tytuł" );
define( "_AM_WFL_BROKEN_REPORTER"         , "Autor raportu" );
define( "_AM_WFL_BROKEN_FILESUBMITTER"    , "Autor linka" );
define( "_AM_WFL_BROKEN_DATESUBMITTED"    , "Data" );
define( "_AM_WFL_BROKEN_ACTION"           , "Akcja" );
define( "_AM_WFL_BROKEN_NOFILEMATCH"      , "Nie ma raportów spełniających podane kryteria." );
define( "_AM_WFL_BROKENFILEDELETED"       , "Link oraz raport zostały usunięte." );
/**
 * About defines
 */
define( "_AM_WFL_BY"       , "przez" );
// block defines
define( "_AM_WFL_BADMIN"       , "Administracja blokami" );
define( "_AM_WFL_BLKDESC"      , "Opis" );
define( "_AM_WFL_TITLE"        , "Tytuł" );
define( "_AM_WFL_SIDE"         , "Wyrównanie" );
define( "_AM_WFL_WEIGHT"       , "Waga" );
define( "_AM_WFL_VISIBLE"      , "Widoczny" );
define( "_AM_WFL_ACTION"       , "Akcja" );
define( "_AM_WFL_SBLEFT"       , "Lewa" );
define( "_AM_WFL_SBRIGHT"      , "Prawa" );
define( "_AM_WFL_CBLEFT"       , "Środek-lewa" );
define( "_AM_WFL_CBRIGHT"      , "Środek-prawa" );
define( "_AM_WFL_CBCENTER"     , "Środek" );
define( "_AM_WFL_ACTIVERIGHTS" , "Aktywne prawa" );
define( "_AM_WFL_ACCESSRIGHTS" , "Prawa dostępu" );
// image admin icon
define( "_AM_WFL_ICO_EDIT"     , "Edytuj to" );
define( "_AM_WFL_ICO_DELETE"   , "Usuń to" );
define( "_AM_WFL_ICO_RESOURCE" , "Edytuj ten zasób" );

define( "_AM_WFL_ICO_ONLINE"       , "Online" );
define( "_AM_WFL_ICO_OFFLINE"      , "Offline" );
define( "_AM_WFL_ICO_APPROVED"     , "Zatwierdzone" );
define( "_AM_WFL_ICO_NOTAPPROVED"  , "Niezatwierdzone" );

define( "_AM_WFL_ICO_LINK"     , "Powiązany link" );
define( "_AM_WFL_ICO_URL"      , "Dodaj powiązanie URL" );
define( "_AM_WFL_ICO_ADD"      , "Dadaj" );
define( "_AM_WFL_ICO_APPROVE"  , "Akceptuj" );
define( "_AM_WFL_ICO_STATS"    , "Statystyki" );
define( "_AM_WFL_ICO_VIEW"     , "Pokaż ten obiekt" );

define( "_AM_WFL_ICO_IGNORE"    , "Ignoruj" );
define( "_AM_WFL_ICO_ACK"       , "Potwierdzone raporty" );
define( "_AM_WFL_ICO_REPORT"    , "Potwierdzić raport??" );
define( "_AM_WFL_ICO_CONFIRM"   , "Zatwierdzone raporty" );
define( "_AM_WFL_ICO_CONBROKEN" , "Zatwierdzić raport??" );
define( "_AM_WFL_ICO_RES"       , "Edytuj linki dla tego obiektu" );
define( "_AM_WFL_MOD_URLRATING" , "Ocena w internecie:" );
// Alternate category
define( "_AM_WFL_ALTCAT_CREATEF"   , "Dodaj kategorię zastępczą" );
define( "_AM_WFL_MALTCAT"          , "Zarządzanie kategoriami zastępczymi" );
define( "_AM_WFL_ALTCAT_MODIFYF"   , "Zarządzanie kategoriami zastępczymi" );
define( "_AM_WFL_ALTCAT_INFOTEXT"  , "<ul><li>Kategorie zastępcze mogą być łatwo usuwane i modyfikowane stąd</li></ul>" );
define( '_AM_WFL_ALTCAT_CREATED'   , 'Kategoria zapisana!' );

define( "_AM_WFL_MRESOURCES"   , "Zarządzanie zasobami" );
define( "_AM_WFL_RES_CREATED"  , "Zarządzanie zasobami" );
define( "_AM_WFL_RES_ID"       , "ID" );
define( "_AM_WFL_RES_DESC"     , "Opis" );
define( "_AM_WFL_RES_NAME"     , "Nazwa" );
define( "_AM_WFL_RES_TYPE"     , "Typ" );
define( "_AM_WFL_RES_USER"     , "Użytkownik" );
define( "_AM_WFL_RES_CREATEF"  , "Dodaj zasób" );
define( "_AM_WFL_RES_MODIFYF"  , "Edytuj zasób" );
define( "_AM_WFL_RES_NAMEF"    , "Nazwa zasobu:" );
define( "_AM_WFL_RES_DESCF"    , "Opis zasobu:" );
define( "_AM_WFL_RES_URLF"     , "URL zasobu:" );
define( "_AM_WFL_RES_ITEMIDF"  , "ID zasobu:" );
define( "_AM_WFL_RES_INFOTEXT" , "<ul><li>Nowe zasoby mogą byc edytowane lub usuwane stąd.</li>
	<li>Pokaż wszystkei zasoby dla tego linku</li>
	<li>Modyfikuj nazwe i opis zasobu</li></ul>
	" );
define( "_AM_WFL_LISTBROKEN"  , "Pokazuje linki które mogą być uszkodzone. Te linki niekoniecznie muszą być uszkodzone.<br /><br />Zanim coś z nimi zrobisz sprawdź ich poprawność.<br /><br />" );
define( "_AM_WFL_PINGTIMES"   , "Pokazuje ping dla danego linku.<br /><br />Te informacje nie muszą być poprawne i powinieneś je traktować z dystansem.<br /><br />" );

define( "_AM_WFL_NO_FORUM" , "Nie wybrano żadnego forum" );
define( "_MD_WFL_IRCA1", "Dla dzieci" );
define( "_MD_WFL_IRCA2", "Dla każdego" );
define( "_MD_WFL_IRCA3", "Dla nastolatków" );
define( "_MD_WFL_IRCA4", "Dla dojrzałych" );
define( "_MD_WFL_IRCA5", "Tylko dla dorosłych" );
define( "_MD_WFL_IRCA6", "Homo-niewiadomo" );

define( "_AM_WFL_PERM_RATEPERMISSIONS", "Ocenianie" );
define( "_AM_WFL_PERM_RATEPERMISSIONS_TEXT", "Wybierz grupy które będą mogły oceniać linki w danych kategoriach." );

define( "_AM_WFL_PERM_AUTOPERMISSIONS", "Super dodawanie" );
define( "_AM_WFL_PERM_AUTOPERMISSIONS_TEXT", "Wybierz grupy które będą mogły dodawać linki bez potrzeby akceptacji admina." );

define( "_AM_WFL_PERM_SPERMISSIONS", "Dodawanie" );
define( "_AM_WFL_PERM_SPERMISSIONS_TEXT", "Wybierz grupy które będą mogły dodawać linkinfo w danych kategoriach w danych kategoriach)." );

define( "_AM_WFL_PERM_APERMISSIONS", "Moderator Groups" );
define( "_AM_WFL_PERM_APERMISSIONS_TEXT", "Wybierz grupy, które mają uprawdnienia moderatora w wybranych kategoriach." );
?>