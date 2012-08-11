<?php
/**
 * $Id: admin.php,v 1.1 2007/02/10 18:55:53 dap997 Exp $
 * Module: WF-links t³umaczenie by kurak_bu & dap997
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
define("_AM_WFL_WARNINSTALL1","WARNING: Katalog %s istnieje na twoim serwerze. <br />Proszê go usun±æ ze wzglêdów bezpieczeñstwa." );
define("_AM_WFL_WARNINSTALL2","WARNING: Plik %s istnieje na twoim serwerze. <br />Proszê go usun±æ ze wzglêdów bezpieczeñstwa." );
define("_AM_WFL_WARNINSTALL3","WARNING: Folder %s nie istnieje na twoim serwerze. <br />Proszê go utworzyæ." );

define("_AM_WFL_MODULE_NAME" , "WF-Links" );

define("_AM_WFL_BMODIFY"     , "Edytuj" );
define("_AM_WFL_BDELETE"     , "Usuñ" );
define("_AM_WFL_BCREATE"     , "Utwórz nowy" );
define("_AM_WFL_BADD"        , "Dodaj" );
define("_AM_WFL_BAPPROVE"    , "Akceptuj" );
define("_AM_WFL_BIGNORE"     , "Ignoruj" );
define("_AM_WFL_BCANCEL"     , "Anuluj" );
define("_AM_WFL_BSAVE"       , "Zapisz" );
define("_AM_WFL_BRESET"      , "Wyczy¶æ" );
define("_AM_WFL_BMOVE"       , "Przenie¶ linki" );
define("_AM_WFL_BUPLOAD"     , "Upload" );
define("_AM_WFL_BDELETEIMAGE","Usuñ zaznaczony obrazek" );
define("_AM_WFL_BRETURN"     , "Wróæ tam gdzie by³e¶!" );
define("_AM_WFL_DBERROR"     , "B³±d bazy danych: Proszê napisz o tym b³êdzie administratorowi serwisu" );
// Other Options
define("_AM_WFL_TEXTOPTIONS"   , "Opcje tekstu:" );
define("_AM_WFL_DISABLEHTML"   , " Wy³±cz tagi HTML" );
define("_AM_WFL_DISABLESMILEY" , " Wy³±cz bu¼ki" );
define("_AM_WFL_DISABLEXCODE"  , " Wy³±cz tagi Xoops'a'" );
define("_AM_WFL_DISABLEIMAGES" , " Wy³±cz obrazki" );
define("_AM_WFL_DISABLEBREAK"  , " U¿yj konwersji Xoopsa dla linii oddzielaj±cych?" );
define("_AM_WFL_UPLOADFILE"    , "Link dodany pomy¶lnie!" );
define("_AM_WFL_NOMENUITEMS"   , "Nie ma sk³adników menu bez menu" );
// Admin Bread crumb
define("_AM_WFL_PREFS"         , "Ustawienia" );
define("_AM_WFL_BUPDATE"       , "Aktualizuj modu³" );
define("_AM_WFL_BINDEX"        , "Strona g³ówna opcji" );
define("_AM_WFL_BPERMISSIONS"  , "Uprawnienia" );
// define("_AM_WFL_BLOCKADMIN","Blocks" );
define("_AM_WFL_BLOCKADMIN"    , "Ustawienia bloków" );
define("_AM_WFL_GOMODULE"      , "Id¼ do modu³u" );
define("_AM_WFL_ABOUT"         , "Informacje o module" );
// Admin Summary
define("_AM_WFL_SCATEGORY"     , "Kategorii: " );
define("_AM_WFL_SFILES"        , "Linków: " );
define("_AM_WFL_SNEWFILESVAL"  , "Dodanych: " );
define("_AM_WFL_SMODREQUEST"   , "Zmodyfikowanych: " );
define("_AM_WFL_SREVIEWS"      , "Klikniêæ: " );

// Admin Main Menu
define("_AM_WFL_MCATEGORY"     , "Zarz±dzanie kategoriami" );
define("_AM_WFL_MLINKS"        , "Zarz±dzanie linkami" );
define("_AM_WFL_MLISTBROKEN"   , "Lista uszkodzonych linków" );
define("_AM_WFL_MLISTPINGTIMES","Lista pingów dla linków" );
define("_AM_WFL_INDEXPAGE"     , "Zarz±dzanie stron± g³ówn±" );
define("_AM_WFL_MCOMMENTS"     , "Komentarze" );
define("_AM_WFL_MVOTEDATA"     , "Oceny linków" );
define("_AM_WFL_MUPLOADS"      , "Upload obrazka" );

// Catgeory defines
define("_AM_WFL_CCATEGORY_CREATENEW"       , "Nowa kategoria" );
define("_AM_WFL_CCATEGORY_MODIFY"          , "Modifikuj kategoriê" );
define("_AM_WFL_CCATEGORY_MOVE"            , "Przenie¶ linki z kategorii" );
define("_AM_WFL_CCATEGORY_MODIFY_TITLE"    , "Nazwa:" );
define("_AM_WFL_CCATEGORY_MODIFY_FAILED"   , "Nie mo¿na przenie¶æ do tej kategorii" );
define("_AM_WFL_CCATEGORY_MODIFY_FAILEDT"  , "Nie mo¿na znale¼æ tej kategorii" );
define("_AM_WFL_CCATEGORY_MODIFY_MOVED"    , "Linki przeniesione i kategoria usuniêta" );
define("_AM_WFL_CCATEGORY_CREATED"         , "Utworzono now± kategoriê" );
define("_AM_WFL_CCATEGORY_MODIFIED"        , "Kategoria zmodyfikowana pomy¶lnie" );
define("_AM_WFL_CCATEGORY_DELETED"         , "Kategoria usuniêta" );
define("_AM_WFL_CCATEGORY_AREUSURE"        , "Czy na pewno chcesz usunaæ t± kategoriê i jej linki i komentarze?" );
define("_AM_WFL_CCATEGORY_NOEXISTS"        , "Najpierw musisz utworzyæ now± kategoriê ¿eby móc dodawaæ linki" );
define("_AM_WFL_FCATEGORY_GROUPPROMPT"     , "Opcje dostêpu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz które grupy bêd± mia³y dostêp do tej kategorii.</span></div>" );
define("_AM_WFL_FCATEGORY_SUBGROUPPROMPT"  , "Opcje dostêpu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz które grupy bêd± mog³y dodawaæ nowe linki do tej kategorii.</span></div>" );
define("_AM_WFL_FCATEGORY_MODGROUPPROMPT"  , "Opcje dostêpu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz które grupy bêd± mog³y moderowaæ t± kategoriê.</span></div>" );

define("_AM_WFL_FCATEGORY_TITLE"           , "Nazwa kategorii:" );
define("_AM_WFL_FCATEGORY_WEIGHT"          , "Waga kategorii:" );
define("_AM_WFL_FCATEGORY_SUBCATEGORY"     , "Ustaw jako podkategoriê:" );
define("_AM_WFL_FCATEGORY_CIMAGE"          , "Ustaw obrazek dla kategorii:" );
define("_AM_WFL_FCATEGORY_DESCRIPTION"     , "Opis kategorii:" );
define("_AM_WFL_FCATEGORY_SUMMARY"         , "Podsumowanie kategorii:" );
/**
 * Index page Defines
 */
define("_AM_WFL_IPAGE_UPDATED"     , "Strona g³ówna modu³u zmodyfikowana!" );
define("_AM_WFL_IPAGE_INFORMATION" , "Informacje zawarte na stronie g³ównej modu³u" );
define("_AM_WFL_IPAGE_MODIFY"      , "Modifikuj stronê g³ówn± modu³u" );
define("_AM_WFL_IPAGE_CIMAGE"      , "Obrazek na stronie g³ównej modu³u:" );
define("_AM_WFL_IPAGE_CTITLE"      , "Tytu³:" );
define("_AM_WFL_IPAGE_CHEADING"    , "Tekst powitalny:" );
define("_AM_WFL_IPAGE_CHEADINGA"   , "Umieszczenie tekstu powitalnego:" );
define("_AM_WFL_IPAGE_CFOOTER"     , "Stopka:" );
define("_AM_WFL_IPAGE_CFOOTERA"    , "Umieszczenie stopki:" );
define("_AM_WFL_IPAGE_CLEFT"       , "Wyrównanie do lewej" );
define("_AM_WFL_IPAGE_CCENTER"     , "Wyrównanie do ¶rodka" );
define("_AM_WFL_IPAGE_CRIGHT"      , "Wyrównanie do prawej" );
/**
 * Permissions defines
 */
define("_AM_WFL_PERM_MANAGEMENT"          , "Zarz±dzanie grupami" );
define("_AM_WFL_PERM_PERMSNOTE"           , "<div><b>NOTE:</b> Pamiêtaj, ¿e grupy uprawnienia dawane tutaj nie koniecznie musz± siê zgadzaæ z tymi w <b>System admin > Grupy</b>.</div>" );
define("_AM_WFL_PERM_CPERMISSIONS"        , "Kategorie" );
define("_AM_WFL_PERM_CSELECTPERMISSIONS"  , "Wybierz które kategorie s± dostêpne dla danej grupy" );
define("_AM_WFL_PERM_CNOCATEGORY"         , "Nie mo¿na nadawaæ uprawnieñ bo nie ma jeszcze ¿adnej kategorii!" );
define("_AM_WFL_PERM_FPERMISSIONS"        , "Linki" );
define("_AM_WFL_PERM_FNOFILES"            , "Nie mo¿na nadawaæ uprawnieñ bo nie ma jeszcze ¿adnego linku!" );
define("_AM_WFL_PERM_FSELECTPERMISSIONS"  , "Wybierz które linki s± dostêpne dla danej grupy" );
/**
 * Upload defines
 */
define("_AM_WFL_LINK_IMAGEUPLOAD"      , "Obrazek poprawdnie wgrany" );
define("_AM_WFL_LINK_NOIMAGEEXIST"     , "B³±d: nie wybrano ¿adnego obrazka!" );
define("_AM_WFL_LINK_IMAGEEXIST"       , "Taki obrazek ju¿ istnieje!" );
define("_AM_WFL_LINK_FILEDELETED"      , "Link zosta³ usuniêty!" );
define("_AM_WFL_LINK_FILEERRORDELETE"  , "Nie znaleziono linku na serwerze." );
define("_AM_WFL_LINK_NOFILEERROR"      , "Nie zaznaczono obiektu do usuniêcia." );
define("_AM_WFL_LINK_DELETEFILE"       , "Czy na pewno chcesz usun±æ ten obrazek?" );
define("_AM_WFL_LINK_IMAGEINFO"        , "Status serwera" );
define("_AM_WFL_LINK_SPHPINI"          , "<b>Informacja wziêta z PHP ini:</b>" );
define("_AM_WFL_LINK_SAFEMODESTATUS"   , "Tryb bezpieczny: " );
define("_AM_WFL_LINK_REGISTERGLOBALS"  , "Register Globals: " );
define("_AM_WFL_LINK_SERVERUPLOADSTATUS","Status uploadu serwera: " );
define("_AM_WFL_LINK_MAXUPLOADSIZE"    , "Maksymalny rozmiar obrazka: " );
define("_AM_WFL_LINK_MAXPOSTSIZE"      , "Maksymalny rozmiar postu: " );
define("_AM_WFL_LINK_SAFEMODEPROBLEMS" , " (To mo¿e stwarzaæ problemy)" );
define("_AM_WFL_LINK_GDLIBSTATUS"      , "Wsparcie GD: " );
define("_AM_WFL_LINK_GDLIBVERSION"     , "Wersja GD: " );
define("_AM_WFL_LINK_GDON"             , "<b>W³±czone</b> (Miniaturki w³±czone)" );
define("_AM_WFL_LINK_GDOFF"            , "<b>Wy³±czone</b> (Miniaturki wy³±czone)" );
define("_AM_WFL_LINK_OFF"              , "<b>W³±czone</b>" );
define("_AM_WFL_LINK_ON"               , "<b>Wy³±czone</b>" );
define("_AM_WFL_LINK_CATIMAGE"         , "Obrazki kategorii" );
define("_AM_WFL_LINK_SCREENSHOTS"      , "Screenshoty" );
define("_AM_WFL_LINK_MAINIMAGEDIR"     , "G³ówne obrazki" );
define("_AM_WFL_LINK_FCATIMAGE"        , "¦cie¿ka do obrazka kategorii" );
define("_AM_WFL_LINK_FSCREENSHOTS"     , "¦cie¿ka do obrazka screenshotu" );
define("_AM_WFL_LINK_FMAINIMAGEDIR"    , "¦cie¿ka do obrazka g³ównego" );
define("_AM_WFL_LINK_FUPLOADIMAGETO"   , "Upload obrazka: " );
define("_AM_WFL_LINK_FUPLOADPATH"      , "¦cie¿ka: " );
define("_AM_WFL_LINK_FUPLOADURL"       , "URL: " );
define("_AM_WFL_LINK_FOLDERSELECTION"  , "Wybierz rodzaj uploadu:" );
define("_AM_WFL_LINK_FSHOWSELECTEDIMAGE","Poka¿ obrazek:" );
define("_AM_WFL_LINK_FUPLOADIMAGE"     , "Upload nowego obrazka do wybranej kategorii:" );

// Main Index defines
define("_AM_WFL_MINDEX_LINKSUMMARY"         , "Statystyka" );
define("_AM_WFL_MINDEX_PUBLISHEDLINK"       , "Linków w bazie:" );
define("_AM_WFL_MINDEX_AUTOPUBLISHEDLINK"   , "Automatycznie dodaych linków w bazie:" );
define("_AM_WFL_MINDEX_AUTOEXPIRE"          , "Automatycznie wygasaj±ce linki:" );
define("_AM_WFL_MINDEX_EXPIRED"             , "Wygas³e linki:" );
define("_AM_WFL_MINDEX_OFFLINELINK"         , "Nieaktywne linki:" );
define("_AM_WFL_MINDEX_ID"                  , "ID" );
define("_AM_WFL_MINDEX_TITLE"               , "Nazwa" );
define("_AM_WFL_MINDEX_POSTER"              , "Autor" );
define("_AM_WFL_MINDEX_ONLINE"              , "Status" );
define("_AM_WFL_MINDEX_ONLINESTATUS"        , "Status online" );
define("_AM_WFL_MINDEX_PUBLISH"             , "Opublikuj" );
define("_AM_WFL_MINDEX_PUBLISHED"           , "Opublikowano" );
define("_AM_WFL_MINDEX_EXPIRE"              , "Wy³±cz" );
define("_AM_WFL_MINDEX_NOTSET"              , "Nie podano daty" );

define("_AM_WFL_MINDEX_ACTION"        , "Akcja" );
define("_AM_WFL_MINDEX_NOLINKSFOUND"  , "Nie ma linków spe³niaj±cych podane kryteria" );
define("_AM_WFL_MINDEX_PAGE"          , "<b>Strona:<b> " );
define('_AM_WFL_MINDEX_PAGEINFOTXT'   , '<ul><li>Opcje strony g³ównej WF-links.</li><li>Tutaj mo¿esz ³atwo zmieniæ logo wy¶wietlane na stronie g³ównej modu³u lub tekst powitalny oraz podsumowanie (tekst wy¶wietlany na dole)</li></ul><br />Logo które wybierzesz bêdzie widoczne w ca³ym module WF-Links.' );
define("_AM_WFL_MINDEX_RESPONSE"      , "Czas reakcji" );
// Submitted Links
define("_AM_WFL_SUB_SUBMITTEDFILES"           , "Linki dodane" );
define("_AM_WFL_SUB_FILESWAITINGINFO"         , "Linki oczekuj±ce" );
define("_AM_WFL_SUB_FILESWAITINGVALIDATION"   , "Linki oczekuj±ce na akceptacjê: " );
define("_AM_WFL_SUB_APPROVEWAITINGFILE"       , "<b>Akceptuj</b> nowy link bez sprawdzania (akceptowania)." );
define("_AM_WFL_SUB_EDITWAITINGFILE"          , "<b>Edytuj</b> nowy link i potem zaakceptuj." );
define("_AM_WFL_SUB_DELETEWAITINGFILE"        , "<b>Usuñ</b> nowy link." );
define("_AM_WFL_SUB_NOFILESWAITING"           , "Nie ma ¿adych linków spe³niaj±cych podane kryteria" );
define("_AM_WFL_SUB_NEWFILECREATED"           , "Pomy¶lnie dodano nowy link" );
// Vote Information
define("_AM_WFL_VOTE_RATINGINFOMATION"  , "Ocenianie" );
define("_AM_WFL_VOTE_TOTALVOTES"        , "Ilo¶æ ocen: " );
define("_AM_WFL_VOTE_REGUSERVOTES"      , "Przez zarejestrowanych: %s" );
define("_AM_WFL_VOTE_ANONUSERVOTES"     , "Przez anonimowych: %s" );
define("_AM_WFL_VOTE_USER"              , "U¿ytkownik" );
define("_AM_WFL_VOTE_IP"                , "Adres IP" );
define("_AM_WFL_VOTE_DATE"              , "Data" );
define("_AM_WFL_VOTE_RATING"            , "Ocena" );
define("_AM_WFL_VOTE_NOREGVOTES"        , "Brak g³ósów u¿ytkowników" );
define("_AM_WFL_VOTE_NOUNREGVOTES"      , "Brak g³ósów niezarejestrowanych" );
define("_AM_WFL_VOTE_VOTEDELETED"       , "G³os usuniêty." );
define("_AM_WFL_VOTE_ID"                , "ID" );
define("_AM_WFL_VOTE_FILETITLE"         , "Tytu³ linku" );
define("_AM_WFL_VOTE_DISPLAYVOTES"      , "Informacje o ocenianiu" );
define("_AM_WFL_VOTE_NOVOTES"           , "Nie ma jeszcze ¿adnych ocen" );
define("_AM_WFL_VOTE_DELETE"            , "Nie ma jeszcze ¿adnych ocen" );
define("_AM_WFL_VOTE_DELETEDSC"         , "<b>Usuñ</b> wybrany g³os." );
define("_AM_WFL_VOTEDELETED"            , "Wybrane g³osy usuniêto poprawnie" );

define("_AM_WFL_VOTE_USERAVG"         , "¦rednia ocen" );
define("_AM_WFL_VOTE_TOTALRATE"       , "£±czna ilo¶æ ocen" );
define("_AM_WFL_VOTE_MAXRATE"         , "Max. ilo¶æ ocen na plik" );
define("_AM_WFL_VOTE_MINRATE"         , "Min. ilo¶æ ocen na plik" );
define("_AM_WFL_VOTE_MOSTVOTEDTITLE"  , "Najczê¶ciej g³osowano" );
define("_AM_WFL_VOTE_LEASTVOTEDTITLE" , "Najrzadziej g³osowano" );
define("_AM_WFL_VOTE_MOSTVOTERSUID"   , "Najaktywniejszy g³osuj±cy" );
define("_AM_WFL_VOTE_REGISTERED"      , "Liczba g³ósów u¿ytkowników" );
define("_AM_WFL_VOTE_NONREGISTERED"   , "Liczba g³ósów niezarejestrowanych" );
// Modifications
define("_AM_WFL_MOD_TOTMODREQUESTS"   , "Liczba propozycji modyfikacji: " );
define("_AM_WFL_MOD_MODREQUESTS"      , "Zmodyfikowanych linków" );
define("_AM_WFL_MOD_MODREQUESTSINFO"  , "Informacje o zmodyfikowanych linkach" );
define("_AM_WFL_MOD_MODID"            , "ID" );
define("_AM_WFL_MOD_MODTITLE"         , "Tytu³" );
define("_AM_WFL_MOD_MODPOSTER"        , "Autor: " );
define("_AM_WFL_MOD_DATE"             , "Dodano" );
define("_AM_WFL_MOD_NOMODREQUEST"     , "Nie ma ¿adych linków spe³niaj±cych podane kryteria" );
define("_AM_WFL_MOD_TITLE"            , "Tytu³ linku: " );
define("_AM_WFL_MOD_LID"              , "ID linku: " );
define("_AM_WFL_MOD_CID"              , "Kategoria: " );
define("_AM_WFL_MOD_URL"              , "URL linku: " );
define("_AM_WFL_MOD_PUBLISHER"        , "Dodaj±cy: " );
define("_AM_WFL_MOD_FORUMID"          , "Forum: " );
define("_AM_WFL_MOD_SCREENSHOT"       , "Screenshot: " );
define("_AM_WFL_MOD_HOMEPAGE"         , "Strona domowa: " );
define("_AM_WFL_MOD_HOMEPAGETITLE"    , "Nazwa strony domowej: " );
define("_AM_WFL_MOD_SHOTIMAGE"        , "Screenshot: " );
define("_AM_WFL_MOD_DESCRIPTION"      , "Opis: " );
define("_AM_WFL_MOD_MODIFYSUBMITTER"  , "Dodaj±cy: " );
define("_AM_WFL_MOD_MODIFYSUBMIT"     , "Dodaj±cy" );
define("_AM_WFL_MOD_PROPOSED"         , "Proponowane szczegó³y linku" );
define("_AM_WFL_MOD_ORIGINAL"         , "Orginalne szczegó³y linku" );
define("_AM_WFL_MOD_REQDELETED"       , "Propozycja modyfikacji odrzucona" );
define("_AM_WFL_MOD_REQUPDATED"       , "Propozycja modyfikacji zatwierdzona" );
define('_AM_WFL_MOD_VIEW'             , 'Zobacz' );
// Link management
define("_AM_WFL_LINK_ID"            , "ID: " );
define("_AM_WFL_LINK_IP"            , "IP uploadera: " );
define("_AM_WFL_LINK_ALLOWEDAMIME"  , "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Dozwolone rozszerzenia plików</b>:</div>" );
define("_AM_WFL_LINK_MODIFYFILE"    , "Zmieñ informacje o linku" );
define("_AM_WFL_LINK_CREATENEWFILE" , "Dodaj nowy link" );
define("_AM_WFL_LINK_TITLE"         , "Tytu³ linku: " );
define("_AM_WFL_LINK_DLURL"         , "URL: " );
define("_AM_WFL_LINK_DIRCA"         , "Dozwolone dla: " );
define("_AM_WFL_LINK_DESCRIPTION"   , "Opis linku: " );
define("_AM_WFL_LINK_CATEGORY"      , "G³ówna kategoria linku: " );
define("_AM_WFL_LINK_FILESSTATUS"   , "Wy³±czyæ link?<br /><br /><span style='font-weight: normal;'>link nie bêdzie widoczny dla wszystkiech u¿ytkowników.</span>" );
define("_AM_WFL_LINK_SETASUPDATED"  , "Ustawiæ jako uaktualniony?<br /><br /><span style='font-weight: normal;'>wtedy zostanie wy¶wietlona odpowiednia ikona przy linku.</span>" );
define("_AM_WFL_LINK_SHOTIMAGE"     , "Screenshot: " );
define("_AM_WFL_LINK_DISCUSSINFORUM","Dodaæ temat na forum?" );
define("_AM_WFL_LINK_PUBLISHDATE"   , "Data publikacji:" );
define("_AM_WFL_LINK_EXPIREDATE"    , "Data wga¶niêcia:" );
define("_AM_WFL_LINK_CLEARPUBLISHDATE"   , "<br /><br />Bez daty publikacji:" );
define("_AM_WFL_LINK_CLEAREXPIREDATE"    , "<br /><br />Bez daty wyga¶niêcia:" );
define("_AM_WFL_LINK_PUBLISHDATESET"     , " Ustaw datê publikacji: " );
define("_AM_WFL_LINK_SETDATETIMEPUBLISH" , " W³±czyæ datê publikacji" );
define("_AM_WFL_LINK_SETDATETIMEEXPIRE"  , " W³±czyæ datê wyga¶niêcia" );
define("_AM_WFL_LINK_SETPUBLISHDATE"     , "<b>Set Ustaw datê publikacji: </b>" );
define("_AM_WFL_LINK_SETNEWPUBLISHDATE"  , "<b>Set Nowa data publikacji: </b><br />Opublikowano:" );
define("_AM_WFL_LINK_SETPUBDATESETS"     , "<b>Ustaw datê publikacji: </b><br />Opublikowane zostanie:" );
define("_AM_WFL_LINK_EXPIREDATESET"      , " Ustaw datê wyga¶niêcia: " );
define("_AM_WFL_LINK_SETEXPIREDATE"      , "<b>Ustaw datê wyga¶niêcia: </b>" );
define("_AM_WFL_LINK_DELEDITMESS"        , "Usu±æ raport o uszkodzonym linku?<br /><br /><span style='font-weight: normal;'>Kiedy klikniesz <b>TAK</b> raport zostanie usuniêty i tym samym potwierdzisz, ¿e link dzia³a poprawnie.</span>" );
define("_AM_WFL_LINK_MUSTBEVALID"        , "Screenshot musi siê znajdowaæ w katalogu %s . Zostaw to pole puste je¿eli nie chcesz dodawaæ screenshotu." );
define("_AM_WFL_LINK_EDITAPPROVE"        , "Link akceptacji:" );
define("_AM_WFL_LINK_NEWFILEUPLOAD"      , "Dodano nowy link" );
define("_AM_WFL_LINK_FILEMODIFIEDUPDATE" , "Link zmodyfikowany pomy¶lnie" );
define("_AM_WFL_LINK_REALLYDELETEDTHIS"  , "Czy na pewno chcesz usun±æ ten link?" );
define("_AM_WFL_LINK_FILEWASDELETED"     , "Link %s zosta³ usuniêty!" );
define("_AM_WFL_LINK_FILEAPPROVED"       , "Link zosta³ zaakceptowany" );
define("_AM_WFL_LINK_CREATENEWSSTORY"    , "<b>Utwórz newsa</b>" );
define("_AM_WFL_LINK_SUBMITNEWS"         , "Utwórz newsa z linku?" );
define("_AM_WFL_LINK_NEWSCATEGORY"       , "Wybierz kategoriê newsów:" );
define("_AM_WFL_LINK_NEWSTITLE"          , "Tytu³ newsa:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Zostaw puste aby u¿yæ nazwy pliku</span></div>" );
define("_AM_WFL_LINK_PUBLISHER"          , "Autor: " );

/**
 * Broken links defines
 */
define("_AM_WFL_SBROKENSUBMIT"           , "Uszkodzonych: " );
define("_AM_WFL_BROKEN_FILE"             , "Raporty" );
define("_AM_WFL_BROKEN_FILEIGNORED"      , "Raport zosta³ zignorowany i usuniêty!" );
define("_AM_WFL_BROKEN_NOWACK"           , "Raport zosta³ zaakceptowany!" );
define("_AM_WFL_BROKEN_NOWCON"           , "Status zmieniony!" );
define("_AM_WFL_BROKEN_REPORTINFO"       , "Raporty dotycz±ce zg³oszeñ o linkach" );
define("_AM_WFL_BROKEN_REPORTSNO"        , "Raporty czekaj±ce na wgl±d admina:" );
define("_AM_WFL_BROKEN_IGNOREDESC"       , "<b>Ignoruj</b> raport." );
define("_AM_WFL_BROKEN_DELETEDESC"       , "<b>Usuñ</b> link oraz raport go dotycz±cy." );
define("_AM_WFL_BROKEN_EDITDESC"         , "<b>Edytuj</b> raport aby naprawiæ problem." );
define("_AM_WFL_BROKEN_ACKDESC"          , "<b>Potwierd¼</b> Ustaw status potwierdzone dla tego raportu." );
define("_AM_WFL_BROKEN_CONFIRMDESC"      , "<b>Zatwierd¼</b> Ustaw status zatwierdzone dla tego raportu." );
define("_AM_WFL_BROKEN_ACKNOWLEDGED"     , "Potwierdzone" );
define("_AM_WFL_BROKEN_DCONFIRMED"       , "Zatwierdzone" );

define("_AM_WFL_BROKEN_ID"               , "ID" );
define("_AM_WFL_BROKEN_TITLE"            , "Tytu³" );
define("_AM_WFL_BROKEN_REPORTER"         , "Autor raportu" );
define("_AM_WFL_BROKEN_FILESUBMITTER"    , "Autor linka" );
define("_AM_WFL_BROKEN_DATESUBMITTED"    , "Data" );
define("_AM_WFL_BROKEN_ACTION"           , "Akcja" );
define("_AM_WFL_BROKEN_NOFILEMATCH"      , "Nie ma raportów spe³niaj±cych podane kryteria." );
define("_AM_WFL_BROKENFILEDELETED"       , "Link oraz raport zosta³y usuniête." );
/**
 * About defines
 */
define("_AM_WFL_BY"       , "przez" );
// block defines
define("_AM_WFL_BADMIN"       , "Administracja blokami" );
define("_AM_WFL_BLKDESC"      , "Opis" );
define("_AM_WFL_TITLE"        , "Tytu³" );
define("_AM_WFL_SIDE"         , "Wyrównanie" );
define("_AM_WFL_WEIGHT"       , "Waga" );
define("_AM_WFL_VISIBLE"      , "Widoczny" );
define("_AM_WFL_ACTION"       , "Akcja" );
define("_AM_WFL_SBLEFT"       , "Lewa" );
define("_AM_WFL_SBRIGHT"      , "Prawa" );
define("_AM_WFL_CBLEFT"       , "¦rodek-lewa" );
define("_AM_WFL_CBRIGHT"      , "¦rodek-prawa" );
define("_AM_WFL_CBCENTER"     , "¦rodek" );
define("_AM_WFL_ACTIVERIGHTS" , "Aktywne prawa" );
define("_AM_WFL_ACCESSRIGHTS" , "Prawa dostêpu" );
// image admin icon
define("_AM_WFL_ICO_EDIT"     , "Edytuj to" );
define("_AM_WFL_ICO_DELETE"   , "Usuñ to" );
define("_AM_WFL_ICO_RESOURCE" , "Edytuj ten zasób" );

define("_AM_WFL_ICO_ONLINE"       , "Online" );
define("_AM_WFL_ICO_OFFLINE"      , "Offline" );
define("_AM_WFL_ICO_APPROVED"     , "Zatwierdzone" );
define("_AM_WFL_ICO_NOTAPPROVED"  , "Niezatwierdzone" );

define("_AM_WFL_ICO_LINK"     , "Powi±zany link" );
define("_AM_WFL_ICO_URL"      , "Dodaj powi±zanie URL" );
define("_AM_WFL_ICO_ADD"      , "Dadaj" );
define("_AM_WFL_ICO_APPROVE"  , "Akceptuj" );
define("_AM_WFL_ICO_STATS"    , "Statystyki" );
define("_AM_WFL_ICO_VIEW"     , "Poka¿ ten obiekt" );

define("_AM_WFL_ICO_IGNORE"    , "Ignoruj" );
define("_AM_WFL_ICO_ACK"       , "Potwierdzone raporty" );
define("_AM_WFL_ICO_REPORT"    , "Potwierdziæ raport??" );
define("_AM_WFL_ICO_CONFIRM"   , "Zatwierdzone raporty" );
define("_AM_WFL_ICO_CONBROKEN" , "Zatwierdziæ raport??" );
define("_AM_WFL_ICO_RES"       , "Edytuj linki dla tego obiektu" );
define("_AM_WFL_MOD_URLRATING" , "Ocena w internecie:" );
// Alternate category
define("_AM_WFL_ALTCAT_CREATEF"   , "Dodaj kategoriê zastêpcz±" );
define("_AM_WFL_MALTCAT"          , "Zarz±dzanie kategoriami zastêpczymi" );
define("_AM_WFL_ALTCAT_MODIFYF"   , "Zarz±dzanie kategoriami zastêpczymi" );
define("_AM_WFL_ALTCAT_INFOTEXT"  , "<ul><li>Kategorie zastêpcze mog± byæ ³atwo usuwane i modyfikowane st±d</li></ul>" );
define('_AM_WFL_ALTCAT_CREATED'   , 'Kategoria zapisana!' );

define("_AM_WFL_MRESOURCES"   , "Zarz±dzanie zasobami" );
define("_AM_WFL_RES_CREATED"  , "Zarz±dzanie zasobami" );
define("_AM_WFL_RES_ID"       , "ID" );
define("_AM_WFL_RES_DESC"     , "Opis" );
define("_AM_WFL_RES_NAME"     , "Nazwa" );
define("_AM_WFL_RES_TYPE"     , "Typ" );
define("_AM_WFL_RES_USER"     , "U¿ytkownik" );
define("_AM_WFL_RES_CREATEF"  , "Dodaj zasób" );
define("_AM_WFL_RES_MODIFYF"  , "Edytuj zasób" );
define("_AM_WFL_RES_NAMEF"    , "Nazwa zasobu:" );
define("_AM_WFL_RES_DESCF"    , "Opis zasobu:" );
define("_AM_WFL_RES_URLF"     , "URL zasobu:" );
define("_AM_WFL_RES_ITEMIDF"  , "ID zasobu:" );
define("_AM_WFL_RES_INFOTEXT" , "<ul><li>Nowe zasoby mog± byc edytowane lub usuwane st±d.</li>
	<li>Poka¿ wszystkei zasoby dla tego linku</li>
	<li>Modyfikuj nazwe i opis zasobu</li></ul>
	" );
define("_AM_WFL_LISTBROKEN"  , "Pokazuje linki które mog± byæ uszkodzone. Te linki niekoniecznie musz± byæ uszkodzone.<br /><br />Zanim co¶ z nimi zrobisz sprawd¼ ich poprawno¶æ.<br /><br />" );
define("_AM_WFL_PINGTIMES"   , "Pokazuje ping dla danego linku.<br /><br />Te informacje nie musz± byæ poprawne i powiniene¶ je traktowaæ z dystansem.<br /><br />" );

define("_AM_WFL_NO_FORUM" , "Nie wybrano ¿adnego forum" );
define("_MD_WFL_IRCA1","Dla dzieci" );
define("_MD_WFL_IRCA2","Dla ka¿dego" );
define("_MD_WFL_IRCA3","Dla nastolatków" );
define("_MD_WFL_IRCA4","Dla dojrza³ych" );
define("_MD_WFL_IRCA5","Tylko dla doros³ych" );
define("_MD_WFL_IRCA6","Homo-niewiadomo" );

define("_AM_WFL_PERM_RATEPERMISSIONS","Ocenianie" );
define("_AM_WFL_PERM_RATEPERMISSIONS_TEXT","Wybierz grupy które bêd± mog³y oceniaæ linki w danych kategoriach." );

define("_AM_WFL_PERM_AUTOPERMISSIONS","Super dodawanie" );
define("_AM_WFL_PERM_AUTOPERMISSIONS_TEXT","Wybierz grupy które bêd± mog³y dodawaæ linki bez potrzeby akceptacji admina." );

define("_AM_WFL_PERM_SPERMISSIONS","Dodawanie" );
define("_AM_WFL_PERM_SPERMISSIONS_TEXT","Wybierz grupy które bêd± mog³y dodawaæ linkinfo w danych kategoriach w danych kategoriach)." );

define("_AM_WFL_PERM_APERMISSIONS","Moderator Groups" );
define("_AM_WFL_PERM_APERMISSIONS_TEXT","Wybierz grupy, które maj± uprawdnienia moderatora w wybranych kategoriach." );
?>