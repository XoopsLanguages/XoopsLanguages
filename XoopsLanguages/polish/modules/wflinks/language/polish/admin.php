<?php
/**
 * $Id: admin.php,v 1.1 2007/02/10 18:55:53 dap997 Exp $
 * Module: WF-links t�umaczenie by kurak_bu & dap997
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
define( "_AM_WFL_WARNINSTALL1", "WARNING: Katalog %s istnieje na twoim serwerze. <br />Prosz� go usun�� ze wzgl�d�w bezpiecze�stwa." );
define( "_AM_WFL_WARNINSTALL2", "WARNING: Plik %s istnieje na twoim serwerze. <br />Prosz� go usun�� ze wzgl�d�w bezpiecze�stwa." );
define( "_AM_WFL_WARNINSTALL3", "WARNING: Folder %s nie istnieje na twoim serwerze. <br />Prosz� go utworzy�." );

define( "_AM_WFL_MODULE_NAME" , "WF-Links" );

define( "_AM_WFL_BMODIFY"     , "Edytuj" );
define( "_AM_WFL_BDELETE"     , "Usu�" );
define( "_AM_WFL_BCREATE"     , "Utw�rz nowy" );
define( "_AM_WFL_BADD"        , "Dodaj" );
define( "_AM_WFL_BAPPROVE"    , "Akceptuj" );
define( "_AM_WFL_BIGNORE"     , "Ignoruj" );
define( "_AM_WFL_BCANCEL"     , "Anuluj" );
define( "_AM_WFL_BSAVE"       , "Zapisz" );
define( "_AM_WFL_BRESET"      , "Wyczy��" );
define( "_AM_WFL_BMOVE"       , "Przenie� linki" );
define( "_AM_WFL_BUPLOAD"     , "Upload" );
define( "_AM_WFL_BDELETEIMAGE", "Usu� zaznaczony obrazek" );
define( "_AM_WFL_BRETURN"     , "Wr�� tam gdzie by�e�!" );
define( "_AM_WFL_DBERROR"     , "B��d bazy danych: Prosz� napisz o tym b��dzie administratorowi serwisu" );
// Other Options
define( "_AM_WFL_TEXTOPTIONS"   , "Opcje tekstu:" );
define( "_AM_WFL_DISABLEHTML"   , " Wy��cz tagi HTML" );
define( "_AM_WFL_DISABLESMILEY" , " Wy��cz bu�ki" );
define( "_AM_WFL_DISABLEXCODE"  , " Wy��cz tagi Xoops'a'" );
define( "_AM_WFL_DISABLEIMAGES" , " Wy��cz obrazki" );
define( "_AM_WFL_DISABLEBREAK"  , " U�yj konwersji Xoopsa dla linii oddzielaj�cych?" );
define( "_AM_WFL_UPLOADFILE"    , "Link dodany pomy�lnie!" );
define( "_AM_WFL_NOMENUITEMS"   , "Nie ma sk�adnik�w menu bez menu" );
// Admin Bread crumb
define( "_AM_WFL_PREFS"         , "Ustawienia" );
define( "_AM_WFL_BUPDATE"       , "Aktualizuj modu�" );
define( "_AM_WFL_BINDEX"        , "Strona g��wna opcji" );
define( "_AM_WFL_BPERMISSIONS"  , "Uprawnienia" );
// define( "_AM_WFL_BLOCKADMIN", "Blocks" );
define( "_AM_WFL_BLOCKADMIN"    , "Ustawienia blok�w" );
define( "_AM_WFL_GOMODULE"      , "Id� do modu�u" );
define( "_AM_WFL_ABOUT"         , "Informacje o module" );
// Admin Summary
define( "_AM_WFL_SCATEGORY"     , "Kategorii: " );
define( "_AM_WFL_SFILES"        , "Link�w: " );
define( "_AM_WFL_SNEWFILESVAL"  , "Dodanych: " );
define( "_AM_WFL_SMODREQUEST"   , "Zmodyfikowanych: " );
define( "_AM_WFL_SREVIEWS"      , "Klikni��: " );

// Admin Main Menu
define( "_AM_WFL_MCATEGORY"     , "Zarz�dzanie kategoriami" );
define( "_AM_WFL_MLINKS"        , "Zarz�dzanie linkami" );
define( "_AM_WFL_MLISTBROKEN"   , "Lista uszkodzonych link�w" );
define( "_AM_WFL_MLISTPINGTIMES", "Lista ping�w dla link�w" );
define( "_AM_WFL_INDEXPAGE"     , "Zarz�dzanie stron� g��wn�" );
define( "_AM_WFL_MCOMMENTS"     , "Komentarze" );
define( "_AM_WFL_MVOTEDATA"     , "Oceny link�w" );
define( "_AM_WFL_MUPLOADS"      , "Upload obrazka" );

// Catgeory defines
define( "_AM_WFL_CCATEGORY_CREATENEW"       , "Nowa kategoria" );
define( "_AM_WFL_CCATEGORY_MODIFY"          , "Modifikuj kategori�" );
define( "_AM_WFL_CCATEGORY_MOVE"            , "Przenie� linki z kategorii" );
define( "_AM_WFL_CCATEGORY_MODIFY_TITLE"    , "Nazwa:" );
define( "_AM_WFL_CCATEGORY_MODIFY_FAILED"   , "Nie mo�na przenie�� do tej kategorii" );
define( "_AM_WFL_CCATEGORY_MODIFY_FAILEDT"  , "Nie mo�na znale�� tej kategorii" );
define( "_AM_WFL_CCATEGORY_MODIFY_MOVED"    , "Linki przeniesione i kategoria usuni�ta" );
define( "_AM_WFL_CCATEGORY_CREATED"         , "Utworzono now� kategori�" );
define( "_AM_WFL_CCATEGORY_MODIFIED"        , "Kategoria zmodyfikowana pomy�lnie" );
define( "_AM_WFL_CCATEGORY_DELETED"         , "Kategoria usuni�ta" );
define( "_AM_WFL_CCATEGORY_AREUSURE"        , "Czy na pewno chcesz usuna� t� kategori� i jej linki i komentarze?" );
define( "_AM_WFL_CCATEGORY_NOEXISTS"        , "Najpierw musisz utworzy� now� kategori� �eby m�c dodawa� linki" );
define( "_AM_WFL_FCATEGORY_GROUPPROMPT"     , "Opcje dost�pu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz kt�re grupy b�d� mia�y dost�p do tej kategorii.</span></div>" );
define( "_AM_WFL_FCATEGORY_SUBGROUPPROMPT"  , "Opcje dost�pu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz kt�re grupy b�d� mog�y dodawa� nowe linki do tej kategorii.</span></div>" );
define( "_AM_WFL_FCATEGORY_MODGROUPPROMPT"  , "Opcje dost�pu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wybierz kt�re grupy b�d� mog�y moderowa� t� kategori�.</span></div>" );

define( "_AM_WFL_FCATEGORY_TITLE"           , "Nazwa kategorii:" );
define( "_AM_WFL_FCATEGORY_WEIGHT"          , "Waga kategorii:" );
define( "_AM_WFL_FCATEGORY_SUBCATEGORY"     , "Ustaw jako podkategori�:" );
define( "_AM_WFL_FCATEGORY_CIMAGE"          , "Ustaw obrazek dla kategorii:" );
define( "_AM_WFL_FCATEGORY_DESCRIPTION"     , "Opis kategorii:" );
define( "_AM_WFL_FCATEGORY_SUMMARY"         , "Podsumowanie kategorii:" );
/**
 * Index page Defines
 */
define( "_AM_WFL_IPAGE_UPDATED"     , "Strona g��wna modu�u zmodyfikowana!" );
define( "_AM_WFL_IPAGE_INFORMATION" , "Informacje zawarte na stronie g��wnej modu�u" );
define( "_AM_WFL_IPAGE_MODIFY"      , "Modifikuj stron� g��wn� modu�u" );
define( "_AM_WFL_IPAGE_CIMAGE"      , "Obrazek na stronie g��wnej modu�u:" );
define( "_AM_WFL_IPAGE_CTITLE"      , "Tytu�:" );
define( "_AM_WFL_IPAGE_CHEADING"    , "Tekst powitalny:" );
define( "_AM_WFL_IPAGE_CHEADINGA"   , "Umieszczenie tekstu powitalnego:" );
define( "_AM_WFL_IPAGE_CFOOTER"     , "Stopka:" );
define( "_AM_WFL_IPAGE_CFOOTERA"    , "Umieszczenie stopki:" );
define( "_AM_WFL_IPAGE_CLEFT"       , "Wyr�wnanie do lewej" );
define( "_AM_WFL_IPAGE_CCENTER"     , "Wyr�wnanie do �rodka" );
define( "_AM_WFL_IPAGE_CRIGHT"      , "Wyr�wnanie do prawej" );
/**
 * Permissions defines
 */
define( "_AM_WFL_PERM_MANAGEMENT"          , "Zarz�dzanie grupami" );
define( "_AM_WFL_PERM_PERMSNOTE"           , "<div><b>NOTE:</b> Pami�taj, �e grupy uprawnienia dawane tutaj nie koniecznie musz� si� zgadza� z tymi w <b>System admin > Grupy</b>.</div>" );
define( "_AM_WFL_PERM_CPERMISSIONS"        , "Kategorie" );
define( "_AM_WFL_PERM_CSELECTPERMISSIONS"  , "Wybierz kt�re kategorie s� dost�pne dla danej grupy" );
define( "_AM_WFL_PERM_CNOCATEGORY"         , "Nie mo�na nadawa� uprawnie� bo nie ma jeszcze �adnej kategorii!" );
define( "_AM_WFL_PERM_FPERMISSIONS"        , "Linki" );
define( "_AM_WFL_PERM_FNOFILES"            , "Nie mo�na nadawa� uprawnie� bo nie ma jeszcze �adnego linku!" );
define( "_AM_WFL_PERM_FSELECTPERMISSIONS"  , "Wybierz kt�re linki s� dost�pne dla danej grupy" );
/**
 * Upload defines
 */
define( "_AM_WFL_LINK_IMAGEUPLOAD"      , "Obrazek poprawdnie wgrany" );
define( "_AM_WFL_LINK_NOIMAGEEXIST"     , "B��d: nie wybrano �adnego obrazka!" );
define( "_AM_WFL_LINK_IMAGEEXIST"       , "Taki obrazek ju� istnieje!" );
define( "_AM_WFL_LINK_FILEDELETED"      , "Link zosta� usuni�ty!" );
define( "_AM_WFL_LINK_FILEERRORDELETE"  , "Nie znaleziono linku na serwerze." );
define( "_AM_WFL_LINK_NOFILEERROR"      , "Nie zaznaczono obiektu do usuni�cia." );
define( "_AM_WFL_LINK_DELETEFILE"       , "Czy na pewno chcesz usun�� ten obrazek?" );
define( "_AM_WFL_LINK_IMAGEINFO"        , "Status serwera" );
define( "_AM_WFL_LINK_SPHPINI"          , "<b>Informacja wzi�ta z PHP ini:</b>" );
define( "_AM_WFL_LINK_SAFEMODESTATUS"   , "Tryb bezpieczny: " );
define( "_AM_WFL_LINK_REGISTERGLOBALS"  , "Register Globals: " );
define( "_AM_WFL_LINK_SERVERUPLOADSTATUS", "Status uploadu serwera: " );
define( "_AM_WFL_LINK_MAXUPLOADSIZE"    , "Maksymalny rozmiar obrazka: " );
define( "_AM_WFL_LINK_MAXPOSTSIZE"      , "Maksymalny rozmiar postu: " );
define( "_AM_WFL_LINK_SAFEMODEPROBLEMS" , " (To mo�e stwarza� problemy)" );
define( "_AM_WFL_LINK_GDLIBSTATUS"      , "Wsparcie GD: " );
define( "_AM_WFL_LINK_GDLIBVERSION"     , "Wersja GD: " );
define( "_AM_WFL_LINK_GDON"             , "<b>W��czone</b> (Miniaturki w��czone)" );
define( "_AM_WFL_LINK_GDOFF"            , "<b>Wy��czone</b> (Miniaturki wy��czone)" );
define( "_AM_WFL_LINK_OFF"              , "<b>W��czone</b>" );
define( "_AM_WFL_LINK_ON"               , "<b>Wy��czone</b>" );
define( "_AM_WFL_LINK_CATIMAGE"         , "Obrazki kategorii" );
define( "_AM_WFL_LINK_SCREENSHOTS"      , "Screenshoty" );
define( "_AM_WFL_LINK_MAINIMAGEDIR"     , "G��wne obrazki" );
define( "_AM_WFL_LINK_FCATIMAGE"        , "�cie�ka do obrazka kategorii" );
define( "_AM_WFL_LINK_FSCREENSHOTS"     , "�cie�ka do obrazka screenshotu" );
define( "_AM_WFL_LINK_FMAINIMAGEDIR"    , "�cie�ka do obrazka g��wnego" );
define( "_AM_WFL_LINK_FUPLOADIMAGETO"   , "Upload obrazka: " );
define( "_AM_WFL_LINK_FUPLOADPATH"      , "�cie�ka: " );
define( "_AM_WFL_LINK_FUPLOADURL"       , "URL: " );
define( "_AM_WFL_LINK_FOLDERSELECTION"  , "Wybierz rodzaj uploadu:" );
define( "_AM_WFL_LINK_FSHOWSELECTEDIMAGE", "Poka� obrazek:" );
define( "_AM_WFL_LINK_FUPLOADIMAGE"     , "Upload nowego obrazka do wybranej kategorii:" );

// Main Index defines
define( "_AM_WFL_MINDEX_LINKSUMMARY"         , "Statystyka" );
define( "_AM_WFL_MINDEX_PUBLISHEDLINK"       , "Link�w w bazie:" );
define( "_AM_WFL_MINDEX_AUTOPUBLISHEDLINK"   , "Automatycznie dodaych link�w w bazie:" );
define( "_AM_WFL_MINDEX_AUTOEXPIRE"          , "Automatycznie wygasaj�ce linki:" );
define( "_AM_WFL_MINDEX_EXPIRED"             , "Wygas�e linki:" );
define( "_AM_WFL_MINDEX_OFFLINELINK"         , "Nieaktywne linki:" );
define( "_AM_WFL_MINDEX_ID"                  , "ID" );
define( "_AM_WFL_MINDEX_TITLE"               , "Nazwa" );
define( "_AM_WFL_MINDEX_POSTER"              , "Autor" );
define( "_AM_WFL_MINDEX_ONLINE"              , "Status" );
define( "_AM_WFL_MINDEX_ONLINESTATUS"        , "Status online" );
define( "_AM_WFL_MINDEX_PUBLISH"             , "Opublikuj" );
define( "_AM_WFL_MINDEX_PUBLISHED"           , "Opublikowano" );
define( "_AM_WFL_MINDEX_EXPIRE"              , "Wy��cz" );
define( "_AM_WFL_MINDEX_NOTSET"              , "Nie podano daty" );

define( "_AM_WFL_MINDEX_ACTION"        , "Akcja" );
define( "_AM_WFL_MINDEX_NOLINKSFOUND"  , "Nie ma link�w spe�niaj�cych podane kryteria" );
define( "_AM_WFL_MINDEX_PAGE"          , "<b>Strona:<b> " );
define( '_AM_WFL_MINDEX_PAGEINFOTXT'   , '<ul><li>Opcje strony g��wnej WF-links.</li><li>Tutaj mo�esz �atwo zmieni� logo wy�wietlane na stronie g��wnej modu�u lub tekst powitalny oraz podsumowanie (tekst wy�wietlany na dole)</li></ul><br />Logo kt�re wybierzesz b�dzie widoczne w ca�ym module WF-Links.' );
define( "_AM_WFL_MINDEX_RESPONSE"      , "Czas reakcji" );
// Submitted Links
define( "_AM_WFL_SUB_SUBMITTEDFILES"           , "Linki dodane" );
define( "_AM_WFL_SUB_FILESWAITINGINFO"         , "Linki oczekuj�ce" );
define( "_AM_WFL_SUB_FILESWAITINGVALIDATION"   , "Linki oczekuj�ce na akceptacj�: " );
define( "_AM_WFL_SUB_APPROVEWAITINGFILE"       , "<b>Akceptuj</b> nowy link bez sprawdzania (akceptowania)." );
define( "_AM_WFL_SUB_EDITWAITINGFILE"          , "<b>Edytuj</b> nowy link i potem zaakceptuj." );
define( "_AM_WFL_SUB_DELETEWAITINGFILE"        , "<b>Usu�</b> nowy link." );
define( "_AM_WFL_SUB_NOFILESWAITING"           , "Nie ma �adych link�w spe�niaj�cych podane kryteria" );
define( "_AM_WFL_SUB_NEWFILECREATED"           , "Pomy�lnie dodano nowy link" );
// Vote Information
define( "_AM_WFL_VOTE_RATINGINFOMATION"  , "Ocenianie" );
define( "_AM_WFL_VOTE_TOTALVOTES"        , "Ilo�� ocen: " );
define( "_AM_WFL_VOTE_REGUSERVOTES"      , "Przez zarejestrowanych: %s" );
define( "_AM_WFL_VOTE_ANONUSERVOTES"     , "Przez anonimowych: %s" );
define( "_AM_WFL_VOTE_USER"              , "U�ytkownik" );
define( "_AM_WFL_VOTE_IP"                , "Adres IP" );
define( "_AM_WFL_VOTE_DATE"              , "Data" );
define( "_AM_WFL_VOTE_RATING"            , "Ocena" );
define( "_AM_WFL_VOTE_NOREGVOTES"        , "Brak g��s�w u�ytkownik�w" );
define( "_AM_WFL_VOTE_NOUNREGVOTES"      , "Brak g��s�w niezarejestrowanych" );
define( "_AM_WFL_VOTE_VOTEDELETED"       , "G�os usuni�ty." );
define( "_AM_WFL_VOTE_ID"                , "ID" );
define( "_AM_WFL_VOTE_FILETITLE"         , "Tytu� linku" );
define( "_AM_WFL_VOTE_DISPLAYVOTES"      , "Informacje o ocenianiu" );
define( "_AM_WFL_VOTE_NOVOTES"           , "Nie ma jeszcze �adnych ocen" );
define( "_AM_WFL_VOTE_DELETE"            , "Nie ma jeszcze �adnych ocen" );
define( "_AM_WFL_VOTE_DELETEDSC"         , "<b>Usu�</b> wybrany g�os." );
define( "_AM_WFL_VOTEDELETED"            , "Wybrane g�osy usuni�to poprawnie" );

define( "_AM_WFL_VOTE_USERAVG"         , "�rednia ocen" );
define( "_AM_WFL_VOTE_TOTALRATE"       , "��czna ilo�� ocen" );
define( "_AM_WFL_VOTE_MAXRATE"         , "Max. ilo�� ocen na plik" );
define( "_AM_WFL_VOTE_MINRATE"         , "Min. ilo�� ocen na plik" );
define( "_AM_WFL_VOTE_MOSTVOTEDTITLE"  , "Najcz�ciej g�osowano" );
define( "_AM_WFL_VOTE_LEASTVOTEDTITLE" , "Najrzadziej g�osowano" );
define( "_AM_WFL_VOTE_MOSTVOTERSUID"   , "Najaktywniejszy g�osuj�cy" );
define( "_AM_WFL_VOTE_REGISTERED"      , "Liczba g��s�w u�ytkownik�w" );
define( "_AM_WFL_VOTE_NONREGISTERED"   , "Liczba g��s�w niezarejestrowanych" );
// Modifications
define( "_AM_WFL_MOD_TOTMODREQUESTS"   , "Liczba propozycji modyfikacji: " );
define( "_AM_WFL_MOD_MODREQUESTS"      , "Zmodyfikowanych link�w" );
define( "_AM_WFL_MOD_MODREQUESTSINFO"  , "Informacje o zmodyfikowanych linkach" );
define( "_AM_WFL_MOD_MODID"            , "ID" );
define( "_AM_WFL_MOD_MODTITLE"         , "Tytu�" );
define( "_AM_WFL_MOD_MODPOSTER"        , "Autor: " );
define( "_AM_WFL_MOD_DATE"             , "Dodano" );
define( "_AM_WFL_MOD_NOMODREQUEST"     , "Nie ma �adych link�w spe�niaj�cych podane kryteria" );
define( "_AM_WFL_MOD_TITLE"            , "Tytu� linku: " );
define( "_AM_WFL_MOD_LID"              , "ID linku: " );
define( "_AM_WFL_MOD_CID"              , "Kategoria: " );
define( "_AM_WFL_MOD_URL"              , "URL linku: " );
define( "_AM_WFL_MOD_PUBLISHER"        , "Dodaj�cy: " );
define( "_AM_WFL_MOD_FORUMID"          , "Forum: " );
define( "_AM_WFL_MOD_SCREENSHOT"       , "Screenshot: " );
define( "_AM_WFL_MOD_HOMEPAGE"         , "Strona domowa: " );
define( "_AM_WFL_MOD_HOMEPAGETITLE"    , "Nazwa strony domowej: " );
define( "_AM_WFL_MOD_SHOTIMAGE"        , "Screenshot: " );
define( "_AM_WFL_MOD_DESCRIPTION"      , "Opis: " );
define( "_AM_WFL_MOD_MODIFYSUBMITTER"  , "Dodaj�cy: " );
define( "_AM_WFL_MOD_MODIFYSUBMIT"     , "Dodaj�cy" );
define( "_AM_WFL_MOD_PROPOSED"         , "Proponowane szczeg�y linku" );
define( "_AM_WFL_MOD_ORIGINAL"         , "Orginalne szczeg�y linku" );
define( "_AM_WFL_MOD_REQDELETED"       , "Propozycja modyfikacji odrzucona" );
define( "_AM_WFL_MOD_REQUPDATED"       , "Propozycja modyfikacji zatwierdzona" );
define( '_AM_WFL_MOD_VIEW'             , 'Zobacz' );
// Link management
define( "_AM_WFL_LINK_ID"            , "ID: " );
define( "_AM_WFL_LINK_IP"            , "IP uploadera: " );
define( "_AM_WFL_LINK_ALLOWEDAMIME"  , "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Dozwolone rozszerzenia plik�w</b>:</div>" );
define( "_AM_WFL_LINK_MODIFYFILE"    , "Zmie� informacje o linku" );
define( "_AM_WFL_LINK_CREATENEWFILE" , "Dodaj nowy link" );
define( "_AM_WFL_LINK_TITLE"         , "Tytu� linku: " );
define( "_AM_WFL_LINK_DLURL"         , "URL: " );
define( "_AM_WFL_LINK_DIRCA"         , "Dozwolone dla: " );
define( "_AM_WFL_LINK_DESCRIPTION"   , "Opis linku: " );
define( "_AM_WFL_LINK_CATEGORY"      , "G��wna kategoria linku: " );
define( "_AM_WFL_LINK_FILESSTATUS"   , "Wy��czy� link?<br /><br /><span style='font-weight: normal;'>link nie b�dzie widoczny dla wszystkiech u�ytkownik�w.</span>" );
define( "_AM_WFL_LINK_SETASUPDATED"  , "Ustawi� jako uaktualniony?<br /><br /><span style='font-weight: normal;'>wtedy zostanie wy�wietlona odpowiednia ikona przy linku.</span>" );
define( "_AM_WFL_LINK_SHOTIMAGE"     , "Screenshot: " );
define( "_AM_WFL_LINK_DISCUSSINFORUM", "Doda� temat na forum?" );
define( "_AM_WFL_LINK_PUBLISHDATE"   , "Data publikacji:" );
define( "_AM_WFL_LINK_EXPIREDATE"    , "Data wga�ni�cia:" );
define( "_AM_WFL_LINK_CLEARPUBLISHDATE"   , "<br /><br />Bez daty publikacji:" );
define( "_AM_WFL_LINK_CLEAREXPIREDATE"    , "<br /><br />Bez daty wyga�ni�cia:" );
define( "_AM_WFL_LINK_PUBLISHDATESET"     , " Ustaw dat� publikacji: " );
define( "_AM_WFL_LINK_SETDATETIMEPUBLISH" , " W��czy� dat� publikacji" );
define( "_AM_WFL_LINK_SETDATETIMEEXPIRE"  , " W��czy� dat� wyga�ni�cia" );
define( "_AM_WFL_LINK_SETPUBLISHDATE"     , "<b>Set Ustaw dat� publikacji: </b>" );
define( "_AM_WFL_LINK_SETNEWPUBLISHDATE"  , "<b>Set Nowa data publikacji: </b><br />Opublikowano:" );
define( "_AM_WFL_LINK_SETPUBDATESETS"     , "<b>Ustaw dat� publikacji: </b><br />Opublikowane zostanie:" );
define( "_AM_WFL_LINK_EXPIREDATESET"      , " Ustaw dat� wyga�ni�cia: " );
define( "_AM_WFL_LINK_SETEXPIREDATE"      , "<b>Ustaw dat� wyga�ni�cia: </b>" );
define( "_AM_WFL_LINK_DELEDITMESS"        , "Usu�� raport o uszkodzonym linku?<br /><br /><span style='font-weight: normal;'>Kiedy klikniesz <b>TAK</b> raport zostanie usuni�ty i tym samym potwierdzisz, �e link dzia�a poprawnie.</span>" );
define( "_AM_WFL_LINK_MUSTBEVALID"        , "Screenshot musi si� znajdowa� w katalogu %s . Zostaw to pole puste je�eli nie chcesz dodawa� screenshotu." );
define( "_AM_WFL_LINK_EDITAPPROVE"        , "Link akceptacji:" );
define( "_AM_WFL_LINK_NEWFILEUPLOAD"      , "Dodano nowy link" );
define( "_AM_WFL_LINK_FILEMODIFIEDUPDATE" , "Link zmodyfikowany pomy�lnie" );
define( "_AM_WFL_LINK_REALLYDELETEDTHIS"  , "Czy na pewno chcesz usun�� ten link?" );
define( "_AM_WFL_LINK_FILEWASDELETED"     , "Link %s zosta� usuni�ty!" );
define( "_AM_WFL_LINK_FILEAPPROVED"       , "Link zosta� zaakceptowany" );
define( "_AM_WFL_LINK_CREATENEWSSTORY"    , "<b>Utw�rz newsa</b>" );
define( "_AM_WFL_LINK_SUBMITNEWS"         , "Utw�rz newsa z linku?" );
define( "_AM_WFL_LINK_NEWSCATEGORY"       , "Wybierz kategori� news�w:" );
define( "_AM_WFL_LINK_NEWSTITLE"          , "Tytu� newsa:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Zostaw puste aby u�y� nazwy pliku</span></div>" );
define( "_AM_WFL_LINK_PUBLISHER"          , "Autor: " );

/**
 * Broken links defines
 */
define( "_AM_WFL_SBROKENSUBMIT"           , "Uszkodzonych: " );
define( "_AM_WFL_BROKEN_FILE"             , "Raporty" );
define( "_AM_WFL_BROKEN_FILEIGNORED"      , "Raport zosta� zignorowany i usuni�ty!" );
define( "_AM_WFL_BROKEN_NOWACK"           , "Raport zosta� zaakceptowany!" );
define( "_AM_WFL_BROKEN_NOWCON"           , "Status zmieniony!" );
define( "_AM_WFL_BROKEN_REPORTINFO"       , "Raporty dotycz�ce zg�osze� o linkach" );
define( "_AM_WFL_BROKEN_REPORTSNO"        , "Raporty czekaj�ce na wgl�d admina:" );
define( "_AM_WFL_BROKEN_IGNOREDESC"       , "<b>Ignoruj</b> raport." );
define( "_AM_WFL_BROKEN_DELETEDESC"       , "<b>Usu�</b> link oraz raport go dotycz�cy." );
define( "_AM_WFL_BROKEN_EDITDESC"         , "<b>Edytuj</b> raport aby naprawi� problem." );
define( "_AM_WFL_BROKEN_ACKDESC"          , "<b>Potwierd�</b> Ustaw status potwierdzone dla tego raportu." );
define( "_AM_WFL_BROKEN_CONFIRMDESC"      , "<b>Zatwierd�</b> Ustaw status zatwierdzone dla tego raportu." );
define( "_AM_WFL_BROKEN_ACKNOWLEDGED"     , "Potwierdzone" );
define( "_AM_WFL_BROKEN_DCONFIRMED"       , "Zatwierdzone" );

define( "_AM_WFL_BROKEN_ID"               , "ID" );
define( "_AM_WFL_BROKEN_TITLE"            , "Tytu�" );
define( "_AM_WFL_BROKEN_REPORTER"         , "Autor raportu" );
define( "_AM_WFL_BROKEN_FILESUBMITTER"    , "Autor linka" );
define( "_AM_WFL_BROKEN_DATESUBMITTED"    , "Data" );
define( "_AM_WFL_BROKEN_ACTION"           , "Akcja" );
define( "_AM_WFL_BROKEN_NOFILEMATCH"      , "Nie ma raport�w spe�niaj�cych podane kryteria." );
define( "_AM_WFL_BROKENFILEDELETED"       , "Link oraz raport zosta�y usuni�te." );
/**
 * About defines
 */
define( "_AM_WFL_BY"       , "przez" );
// block defines
define( "_AM_WFL_BADMIN"       , "Administracja blokami" );
define( "_AM_WFL_BLKDESC"      , "Opis" );
define( "_AM_WFL_TITLE"        , "Tytu�" );
define( "_AM_WFL_SIDE"         , "Wyr�wnanie" );
define( "_AM_WFL_WEIGHT"       , "Waga" );
define( "_AM_WFL_VISIBLE"      , "Widoczny" );
define( "_AM_WFL_ACTION"       , "Akcja" );
define( "_AM_WFL_SBLEFT"       , "Lewa" );
define( "_AM_WFL_SBRIGHT"      , "Prawa" );
define( "_AM_WFL_CBLEFT"       , "�rodek-lewa" );
define( "_AM_WFL_CBRIGHT"      , "�rodek-prawa" );
define( "_AM_WFL_CBCENTER"     , "�rodek" );
define( "_AM_WFL_ACTIVERIGHTS" , "Aktywne prawa" );
define( "_AM_WFL_ACCESSRIGHTS" , "Prawa dost�pu" );
// image admin icon
define( "_AM_WFL_ICO_EDIT"     , "Edytuj to" );
define( "_AM_WFL_ICO_DELETE"   , "Usu� to" );
define( "_AM_WFL_ICO_RESOURCE" , "Edytuj ten zas�b" );

define( "_AM_WFL_ICO_ONLINE"       , "Online" );
define( "_AM_WFL_ICO_OFFLINE"      , "Offline" );
define( "_AM_WFL_ICO_APPROVED"     , "Zatwierdzone" );
define( "_AM_WFL_ICO_NOTAPPROVED"  , "Niezatwierdzone" );

define( "_AM_WFL_ICO_LINK"     , "Powi�zany link" );
define( "_AM_WFL_ICO_URL"      , "Dodaj powi�zanie URL" );
define( "_AM_WFL_ICO_ADD"      , "Dadaj" );
define( "_AM_WFL_ICO_APPROVE"  , "Akceptuj" );
define( "_AM_WFL_ICO_STATS"    , "Statystyki" );
define( "_AM_WFL_ICO_VIEW"     , "Poka� ten obiekt" );

define( "_AM_WFL_ICO_IGNORE"    , "Ignoruj" );
define( "_AM_WFL_ICO_ACK"       , "Potwierdzone raporty" );
define( "_AM_WFL_ICO_REPORT"    , "Potwierdzi� raport??" );
define( "_AM_WFL_ICO_CONFIRM"   , "Zatwierdzone raporty" );
define( "_AM_WFL_ICO_CONBROKEN" , "Zatwierdzi� raport??" );
define( "_AM_WFL_ICO_RES"       , "Edytuj linki dla tego obiektu" );
define( "_AM_WFL_MOD_URLRATING" , "Ocena w internecie:" );
// Alternate category
define( "_AM_WFL_ALTCAT_CREATEF"   , "Dodaj kategori� zast�pcz�" );
define( "_AM_WFL_MALTCAT"          , "Zarz�dzanie kategoriami zast�pczymi" );
define( "_AM_WFL_ALTCAT_MODIFYF"   , "Zarz�dzanie kategoriami zast�pczymi" );
define( "_AM_WFL_ALTCAT_INFOTEXT"  , "<ul><li>Kategorie zast�pcze mog� by� �atwo usuwane i modyfikowane st�d</li></ul>" );
define( '_AM_WFL_ALTCAT_CREATED'   , 'Kategoria zapisana!' );

define( "_AM_WFL_MRESOURCES"   , "Zarz�dzanie zasobami" );
define( "_AM_WFL_RES_CREATED"  , "Zarz�dzanie zasobami" );
define( "_AM_WFL_RES_ID"       , "ID" );
define( "_AM_WFL_RES_DESC"     , "Opis" );
define( "_AM_WFL_RES_NAME"     , "Nazwa" );
define( "_AM_WFL_RES_TYPE"     , "Typ" );
define( "_AM_WFL_RES_USER"     , "U�ytkownik" );
define( "_AM_WFL_RES_CREATEF"  , "Dodaj zas�b" );
define( "_AM_WFL_RES_MODIFYF"  , "Edytuj zas�b" );
define( "_AM_WFL_RES_NAMEF"    , "Nazwa zasobu:" );
define( "_AM_WFL_RES_DESCF"    , "Opis zasobu:" );
define( "_AM_WFL_RES_URLF"     , "URL zasobu:" );
define( "_AM_WFL_RES_ITEMIDF"  , "ID zasobu:" );
define( "_AM_WFL_RES_INFOTEXT" , "<ul><li>Nowe zasoby mog� byc edytowane lub usuwane st�d.</li>
	<li>Poka� wszystkei zasoby dla tego linku</li>
	<li>Modyfikuj nazwe i opis zasobu</li></ul>
	" );
define( "_AM_WFL_LISTBROKEN"  , "Pokazuje linki kt�re mog� by� uszkodzone. Te linki niekoniecznie musz� by� uszkodzone.<br /><br />Zanim co� z nimi zrobisz sprawd� ich poprawno��.<br /><br />" );
define( "_AM_WFL_PINGTIMES"   , "Pokazuje ping dla danego linku.<br /><br />Te informacje nie musz� by� poprawne i powiniene� je traktowa� z dystansem.<br /><br />" );

define( "_AM_WFL_NO_FORUM" , "Nie wybrano �adnego forum" );
define( "_MD_WFL_IRCA1", "Dla dzieci" );
define( "_MD_WFL_IRCA2", "Dla ka�dego" );
define( "_MD_WFL_IRCA3", "Dla nastolatk�w" );
define( "_MD_WFL_IRCA4", "Dla dojrza�ych" );
define( "_MD_WFL_IRCA5", "Tylko dla doros�ych" );
define( "_MD_WFL_IRCA6", "Homo-niewiadomo" );

define( "_AM_WFL_PERM_RATEPERMISSIONS", "Ocenianie" );
define( "_AM_WFL_PERM_RATEPERMISSIONS_TEXT", "Wybierz grupy kt�re b�d� mog�y ocenia� linki w danych kategoriach." );

define( "_AM_WFL_PERM_AUTOPERMISSIONS", "Super dodawanie" );
define( "_AM_WFL_PERM_AUTOPERMISSIONS_TEXT", "Wybierz grupy kt�re b�d� mog�y dodawa� linki bez potrzeby akceptacji admina." );

define( "_AM_WFL_PERM_SPERMISSIONS", "Dodawanie" );
define( "_AM_WFL_PERM_SPERMISSIONS_TEXT", "Wybierz grupy kt�re b�d� mog�y dodawa� linkinfo w danych kategoriach w danych kategoriach)." );

define( "_AM_WFL_PERM_APERMISSIONS", "Moderator Groups" );
define( "_AM_WFL_PERM_APERMISSIONS_TEXT", "Wybierz grupy, kt�re maj� uprawdnienia moderatora w wybranych kategoriach." );
?>