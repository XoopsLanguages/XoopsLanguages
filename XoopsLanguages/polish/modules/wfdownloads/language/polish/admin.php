<?php
/**
 * $Id: admin.php,v 1.1 2007/02/10 18:55:42 dap997 Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
   Tlumaczenie: MJM nemo2004 for portal.polhost.net
 *dodatki do wersji 3.02rc1 kurak_bu*/

// %%%%%%	Module NMDe 'MyDownloads' (Admin)	  %%%%%
// Buttons
define("_AM_WFD_BMODIFY","Modyfikuj");
define("_AM_WFD_BDELETE","Usuñ");
define("_AM_WFD_BADD","Dodaj");
define("_AM_WFD_BAPPROVE","Zatwierd¼");
define("_AM_WFD_BIGNORE","Ignoruj");
define("_AM_WFD_BCANCEL","Anuluj");
define("_AM_WFD_BSAVE","Zapisz");
define("_AM_WFD_BRESET","Wyczy¶æ");
define("_AM_WFD_BMOVE","Przenie¶ pliki");
define("_AM_WFD_BUPLOAD","Za³aduj");
define("_AM_WFD_BDELETEIMAGE","Usuñ zaznaczony obraz");
define("_AM_WFD_BRETURN","Return to where you where!");
define("_AM_WFD_DBERROR","B³±d dostêpu do bazy danych: proszê zg³osiæ ten b³±d na stronie www.SmartFactory.ca");
//Banned Users
define("_AM_WFD_NONBANNED","Nie zablokowany");
define("_AM_WFD_BANNED","Zablokowany");
define("_AM_WFD_EDITBANNED","Edytuj zablokowanych u¿ytkowników");
// Other Options
define("_AM_WFD_TEXTOPTIONS","Opcje tekstu:");
define("_AM_WFD_DISABLEHTML","Ukryj tagi HTML");
define("_AM_WFD_DISABLESMILEY","Ukryj emotikonki");
define("_AM_WFD_DISABLEXCODE"," Ukryj kod XOOPSa");
define("_AM_WFD_DISABLEIMAGES","Ukryj obrazy");
define("_AM_WFD_DISABLEBREAK","U¿ywaj konwersji ³amania tekstu Xoopsa?");
define("_AM_WFD_UPLOADFILE","Plik zosta³ za³adowany pomy¶lnie");
define("_AM_WFD_NOMENUITEMS","No menu items within the menu");

// Admin Bread crumb
define("_AM_WFD_PREFS","Preferencje");
define("_AM_WFD_PERMISSIONS","Zezwolenie");
define("_AM_WFD_BINDEX","Strona g³ówna");
define("_AM_WFD_BLOCKADMIN","Bloki");
define("_AM_WFD_GOMODULE","Id¼ do modu³u");
define("_AM_WFD_BHELP","Pomoc");
define("_AM_WFD_ABOUT","About");
// Admin Summary
define("_AM_WFD_SCATEGORY","Kategoria: ");
define("_AM_WFD_SFILES","Pliki: ");
define("_AM_WFD_SNEWFILESVAL","Wys³ano: ");
define("_AM_WFD_SMODREQUEST","Modyfikowane: ");
define("_AM_WFD_SREVIEWS","Recenzje: ");
// Admin Main Menu
define("_AM_WFD_MCATEGORY","Zarz±dzanie kategoriami");
define("_AM_WFD_MDOWNLOADS","Zarz±dzanie plikiem");
define("_AM_WFD_INDEXPAGE","Zarz±dzanie stron± g³ówn±");
define("_AM_WFD_MUPLOADS","Za³aduj obraz");
define("_AM_WFD_MMIMETYPES","Zarz±dzanie rodzajami plików");
define("_AM_WFD_MCOMMENTS","Komentarze");
define("_AM_WFS_MVOTEDATA","Dane g³osów");
// waiting reviews
define("_AM_WFD_AREVIEWS","Zarz±dzanie recenzjami");
define("_AM_WFD_AREVIEWS_WAITING","Recenzje oczekuj±ce na zatwierdzenie:");
define("_AM_WFD_AREVIEWS_INFO","Informacje zarz±dzania recenzjami");
define("_AM_WFD_AREVIEWS_APPROVE","<b>Zatwierd¼</b> Nowe recenzje bez zatwierdzania.");
define("_AM_WFD_AREVIEWS_EDIT","<b>Edytuj</b> Nowe recenzja i jej akceptacja.");
define("_AM_WFD_AREVIEWS_DELETE","<b>Usuñ</b> informacjê nowej recenzji.");

// Catgeory defines
define("_AM_WFD_CCATEGORY_CREATENEW","Stwórz now± kategoriê");
define("_AM_WFD_CCATEGORY_MODIFY","Modyfikuj kategoriê");
define("_AM_WFD_CCATEGORY_MOVE","Przenie¶ pliki do kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE","Nazwa kategorii:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED","B³±d przeniesienia plików: Nie mo¿na przenie¶æ do tej kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT"," B³±d przeniesienia plików: Nie mo¿na znale¼æ tej kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED","Przeniesione pliki i kategoria zosta³y usuniête");
define("_AM_WFD_CCATEGORY_CREATED","Stworzenie nowej kategorii i uaktualnienie bazy danych przebieg³o pomy¶lnie");
define("_AM_WFD_CCATEGORY_MODIFIED","Zmiana zaznaczonej kategorii i uaktualnienie bazy danych przebieg³o pomy¶lnie");
define("_AM_WFD_CCATEGORY_DELETED","Usuniêcie zanaczonej kategorii  i uaktualnienie bazy danych przebieg³o pomy¶lnie");
define("_AM_WFD_CCATEGORY_AREUSURE","OSTRZE¯ENIE: Jeste¶ pewien, ¿e chcesz usun±æ tê kategoriê, jej pliki i komentarze?");
define("_AM_WFD_CCATEGORY_NOEXISTS","Musisz stworzyæ kategoriê zanim dodasz nowy plik");
define("_AM_WFD_FCATEGORY_GROUPPROMPT","Kontrola dostêpu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Zaznacz grupê u¿ytkowników, którzy maj± mieæ dostêp do tej kategorii.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE","Nazwa kategorii:");
define("_AM_WFD_FCATEGORY_WEIGHT","Wa¿no¶æ kategorii:");
define("_AM_WFD_FCATEGORY_SUBCATEGORY","Dodaj jako podkategoriê:");
define("_AM_WFD_FCATEGORY_CIMAGE","Zaznacz obraz kategorii:");
define("_AM_WFD_FCATEGORY_DESCRIPTION","Dodaj opis kategorii:");
define("_AM_WFD_FCATEGORY_SUMMARY","Dodaj streszczenie kategorii:");
/*
* Index page Defines
*/
define("_AM_WFD_IPAGE_UPDATED","Modyfikacja strony g³ównej uaktualnienie bazy danych przebieg³o pomy¶lnie!");
define("_AM_WFD_IPAGE_INFORMATION","Informacje strony g³ównej");
define("_AM_WFD_IPAGE_MODIFY","Modyfikuj stronê g³ówn±");
define("_AM_WFD_IPAGE_CIMAGE","Wybierz obraz logo:");
define("_AM_WFD_IPAGE_CTITLE","Tytu³ strony:");
define("_AM_WFD_IPAGE_CHEADING","Nag³ówek strony:");
define("_AM_WFD_IPAGE_CHEADINGA","Wyrównanie nag³ówka strony:");
define("_AM_WFD_IPAGE_CFOOTER","stopka strony:");
define("_AM_WFD_IPAGE_CFOOTERA","Wyrównanie stopki:");
define("_AM_WFD_IPAGE_CLEFT","Wyrównanie w lewo");
define("_AM_WFD_IPAGE_CCENTER","Do ¶rodka");
define("_AM_WFD_IPAGE_CRIGHT","Wyrównanie w prawo");
/*
*  Permissions defines
*/
define("_AM_WFD_PERM_MANAGEMENT","Zarz±dzanie dostêpem");
define("_AM_WFD_PERM_PERMSNOTE","<div><b>UWAGA:</b> Pamiêtaj, ¿e nawet je¶li ustawisz w³a¶ciwe zezwolenia do przegl±dania, grupa mo¿e nie widzieæ artyku³ów lub bloków je¶li dodatkowo nie zezwolisz grupie na dostêp do modu³u.
Aby to zrobiæ, id¼ do <b> System Admin > Grupy</b>, wybierz odpowiedni± grupê i zaznacz pole wyboru aby zezwoliæ jej cz³onkom na dostêp.</div>");
define("_AM_WFD_PERM_CPERMISSIONS","Dostêp do kategorii");
define("_AM_WFD_PERM_CSELECTPERMISSIONS","Zaznacz kategorie do której dana grupa u¿ytkowników ma  mieæ dostêp");
define("_AM_WFD_PERM_CNOCATEGORY","Nie mo¿na ustanowiæ praw dostêpu: nie zosta³a utworzona jeszcze ¿adna kategoria!");
define("_AM_WFD_PERM_FPERMISSIONS","Dostêp do pliku");
define("_AM_WFD_PERM_FNOFILES","Nie mo¿na ustanowiæ praw dostêpu: jeszcze ¿aden plik nie zosta³ dodany!");
define("_AM_WFD_PERM_FSELECTPERMISSIONS","Zaznacz pliki do których dana grupa u¿ytkowników bêdzie mia³a dostêp");
/*
* Upload defines
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD"," Obraz zosta³ pomy¶lnie za³adowany na serwer");
define("_AM_WFD_DOWN_NOIMAGEEXIST"," B³±d: Zaznaczony plik  nie zosta³ za³adowany.  Spróbuj ponownie!");
define("_AM_WFD_DOWN_IMAGEEXIST","Obraz ju¿ istnieje !");
define("_AM_WFD_DOWN_FILEDELETED","Plik zostanie usuniêty.");
define("_AM_WFD_DOWN_FILEERRORDELETE","B³±d usuniêcia pliku: plik nie zosta³ znaleziony.");
define("_AM_WFD_DOWN_NOFILEERROR","B³±d usuniêcia pliku: ¿aden plik nie zosta³ wybrany do usuniêcia.");
define("_AM_WFD_DOWN_DELETEFILE","OSTRZE¯ENIE: Jeste¶ pewien, ¿e chcesz usun±c ten plik?");
define("_AM_WFD_DOWN_IMAGEINFO","Server Status");
define("_AM_WFD_DOWN_SPHPINI","<b>Informacja pobrana z PHP ini File:</b>");
define("_AM_WFD_DOWN_SAFEMODESTATUS","Safe Mode Status: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS","Register Globals: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS","Server Uploads Status: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE","Maksymalny rozmiar dodawanego pliku: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE","Maksymalny rozmiar  poczty: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS"," (This May Cause Problems)");
define("_AM_WFD_DOWN_GDLIBSTATUS","GD Library wsparcie: ");
define("_AM_WFD_DOWN_GDLIBVERSION","GD Library wersja: ");
define("_AM_WFD_DOWN_GDON","<b>Aktywne</b> (Miniaturki dostêpne)");
define("_AM_WFD_DOWN_GDOFF","<b>Nieaktywne</b> (Miniaturki niedostêpne)");
define("_AM_WFD_DOWN_OFF","<b>WY£¡CZONE</b>");
define("_AM_WFD_DOWN_ON","<b>W£¡CZONE</b>");
define("_AM_WFD_DOWN_CATIMAGE","Obraz kategorii");
define("_AM_WFD_DOWN_SCREENSHOTS","Obraz zrzutu");
define("_AM_WFD_DOWN_MAINIMAGEDIR","Katalog obrazów");
define("_AM_WFD_DOWN_FCATIMAGE","¦cie¿ka dostêpu do katalogu obrazów kategorii");
define("_AM_WFD_DOWN_FSCREENSHOTS","¦cie¿ka dostêpu do katalogu zrzutów");
define("_AM_WFD_DOWN_FMAINIMAGEDIR","G³ówna sie¿ka dostêpu do obrazów");
define("_AM_WFD_DOWN_FUPLOADIMAGETO","Dodany obraz: ");
define("_AM_WFD_DOWN_FUPLOADPATH","¦cie¿ka dostêpu dodanego pliku: ");
define("_AM_WFD_DOWN_FUPLOADURL","Dodaj URL: ");
define("_AM_WFD_DOWN_FOLDERSELECTION","Zaznacz katalog przeznaczenia:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE","Poka¿ wybrany obraz:");
define("_AM_WFD_DOWN_FUPLOADIMAGE","Dodaj nowy obraz do wybranego katalogu przeznaczenia :");

// Main Index defines
define("_AM_WFD_MINDEX_DOWNSUMMARY","Podsumowanie modu³u Admina");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN","Opublikowane pliki:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN","Autopublikowanie plików:");
define("_AM_WFD_MINDEX_AUTOEXPIRE","Autowyga¶niêcie wa¿no¶ci pilków:");
define("_AM_WFD_MINDEX_OFFLINEDOWN","Pliki offline:");
define("_AM_WFD_MINDEX_ID","ID");
define("_AM_WFD_MINDEX_TITLE","Nazwa pliku");
define("_AM_WFD_MINDEX_POSTER","Dodaj±cy");
define("_AM_WFD_MINDEX_SUBMITTED"," Data dodania");
define("_AM_WFD_MINDEX_ONLINESTATUS","Status Online");
define("_AM_WFD_MINDEX_PUBLISHED","Opublikowane");
define("_AM_WFD_MINDEX_ACTION","Akcja");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND","UWAGA:  Plik nie spe³nia kryterii");
define("_AM_WFD_MINDEX_PAGE","<b>Strona:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT','<ul><li>Detale g³ównej strony WF-Downloads </li><li>Mo¿esz ³atwo zmieniaæ logo, nag³ówek, nag³ówek strony g³ównej i tekst stopki, tak by dostosowaæ do w³asnego gustu</li></ul><br /><br />Notka: Do chwili wyboru nowego loga bêdzie u¿ywane logo WF-Downloads.');

// Submitted Files
define("_AM_WFD_SUB_SUBMITTEDFILES","Dodawanie plików");
define("_AM_WFD_SUB_FILESWAITINGINFO","Informacja o oczekuj±cych plikach");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION","Zatwierdzanie plików oczekuj±cych: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE","<b>Zatwierd¼</b> Informacja o nowym pliku bez zatwierdzania.");
define("_AM_WFD_SUB_EDITWAITINGFILE","<b>Edytuj</b>  Informacja o nowym pliku i jego zatwierdzenie.");
define("_AM_WFD_SUB_DELETEWAITINGFILE","<b>Usuñ</b> Informacja o nowym pliku.");
define("_AM_WFD_SUB_NOFILESWAITING","Nie ma ¿adnych plików spe³aniaj±cych kryteria");
define("_AM_WFD_SUB_NEWFILECREATED","Dodanie danych nowego pliku i aktualizacja bazy danych przebieg³y pomy¶lnie");
// Mimetypes
define("_AM_WFD_MIME_ID","ID");
define("_AM_WFD_MIME_EXT","EXT");
define("_AM_WFD_MIME_NAME","Typ aplikacji");
define("_AM_WFD_MIME_ADMIN","Admin");
define("_AM_WFD_MIME_USER","U¿ytkownik");
// Mimetype Form
define("_AM_WFD_MIME_CREATEF","Stwórz rozszerzenie");
define("_AM_WFD_MIME_MODIFYF","Modyfikuj rozszerzenie");
define("_AM_WFD_MIME_EXTF","Rozszerzenie pliku:");
define("_AM_WFD_MIME_NAMEF","Typ aplikacji/Nazwa:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz nazwê aplikacji skojarzonej z danym rozszerzeniem.</span></div>");
define("_AM_WFD_MIME_TYPEF","Rozszerzenie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz rozszerzenie skojarzone z zawarto¶ci± pliku. Ka¿de rozszerzenie musi byæ oddzielone spacj±.</span></div>");
define("_AM_WFD_MIME_ADMINF","Dopuszczone rozszerzenia plików przez Administratora");
define("_AM_WFD_MIME_ADMINFINFO","<b>Rozszerzenia plików dopuszczone do dodawania przez Administratora:</b>");
define("_AM_WFD_MIME_USERF","Dopuszczone rozszerzenia plików u¿ytkownika");
define("_AM_WFD_MIME_USERFINFO","<b>Rozszerzenia plików dopuszczone do dodawania przez uzytkowników:</b>");
define("_AM_WFD_MIME_NOMIMEINFO","Nie wybrano rozszerzenia.");
define("_AM_WFD_MIME_FINDMIMETYPE","Znajd¼ nowe rozszerzenie:");
define("_AM_WFD_MIME_EXTFIND","Znajd¼ zawarto¶c pliku:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz zawarto¶æ pliku, który chcesz znale¼æ.</span></div>");
define("_AM_WFD_MIME_INFOTEXT","<ul><li>Nowe rozszerzenie mo¿e byæ ³atwo dodane, edytowane lub usuwane za pomoc± tego formularza.</li>
	<li>Znajd¼ nowe rozszerzenia poprzez inne strony.</li>
	<li>Podgl±d rozszerzenia dla dodawania przez Admina i u¿ytkowników.</li>
	<li>Zmieñ status dodanego rozszerzenia.</li></ul>
	");

// Mimetype Buttons
define("_AM_WFD_MIME_CREATE","Utwórz");
define("_AM_WFD_MIME_CLEAR","Wyczy¶æ");
define("_AM_WFD_MIME_CANCEL","Anuluj");
define("_AM_WFD_MIME_MODIFY","Modyfikuj");
define("_AM_WFD_MIME_DELETE","Usuñ");
define("_AM_WFD_MIME_FINDIT","Pobierz zawarto¶æ!");
// Mimetype Database
define("_AM_WFD_MIME_DELETETHIS","Usun±æ zaznaczone rozszerzenie?");
define("_AM_WFD_MIME_MIMEDELETED","Rozszerzenie %s zostanie usuniête");
define("_AM_WFD_MIME_CREATED","Informacja o rozszerzeniu zosta³a utworzona");
define("_AM_WFD_MIME_MODIFIED","Informacja o rozszerzeniu zosta³a zmodyfikowana");
// Vote Information
define("_AM_WFD_VOTE_RATINGINFOMATION","Informacja o g³osach");
define("_AM_WFD_VOTE_TOTALVOTES","Wszystkich g³osów: ");
define("_AM_WFD_VOTE_REGUSERVOTES","G³osy zarejestrowanych u¿ytkowników: %s");
define("_AM_WFD_VOTE_ANONUSERVOTES","G³osy u¿ytkowników anonimowych: %s");
define("_AM_WFD_VOTE_USER","U¿ytkownik");
define("_AM_WFD_VOTE_IP","Adres IP");
define("_AM_WFD_VOTE_USERAVG","¦rednia g³osów u¿ytkownika");
define("_AM_WFD_VOTE_TOTALRATE","Suma ocen");
define("_AM_WFD_VOTE_DATE","Submitted");
define("_AM_WFD_VOTE_RATING","Oceny");
define("_AM_WFD_VOTE_NOREGVOTES","Nie ma g³osów u¿ytkowników zarejestrowanych");
define("_AM_WFD_VOTE_NOUNREGVOTES","Nie ma g³osów u¿ytkowników niezarejestrowanych");
define("_AM_WFD_VOTE_VOTEDELETED","Dane g³osowañ zosta³y usuniête.");
define("_AM_WFD_VOTE_ID","ID");
define("_AM_WFD_VOTE_FILETITLE","Nazwa pliku");
define("_AM_WFD_VOTE_DISPLAYVOTES","Informacja o danych g³osowania");
define("_AM_WFD_VOTE_NOVOTES","Nie ma ¿adnych g³osów do wy¶wietlenia");
define("_AM_WFD_VOTE_DELETE","Nie ma ¿adnych g³osów do wy¶wietlenia");
define("_AM_WFD_VOTE_DELETEDSC","<b>Usuniêto</b> wybrane informacje o g³osowaniu z bazy danych.");

// Modifications
/*
define("_AM_WFD_MOD_TOTMODREQUESTS","Total Modification Requests: ");
define("_AM_WFD_MOD_MODREQUESTS","Modified Files");
define("_AM_WFD_MOD_MODREQUESTSINFO","Modified Files Information");
define("_AM_WFD_MOD_MODID","ID");
define("_AM_WFD_MOD_MODTITLE","Title");
define("_AM_WFD_MOD_MODPOSTER","Original Poster: ");
define("_AM_WFD_MOD_DATE","Submitted");
define("_AM_WFD_MOD_NOMODREQUEST","There are no requests that match this critera");
define("_AM_WFD_MOD_MODIFYSUBMIT","Submitter");
define("_AM_WFD_MOD_ORIGINAL","Orginal Download Details");
define("_AM_WFD_MOD_REQDELETED","Modification request removed from the database");
define("_AM_WFD_MOD_REQUPDATED","Selected Download Modified and Database Updated Successfully");

*/
define("_AM_WFD_MOD_TOTMODREQUESTS","Suma ¿±dañ modyfikacji: ");
define("_AM_WFD_MOD_MODREQUESTS","Pliki zmodyfikowane");
define("_AM_WFD_MOD_MODREQUESTSINFO","Informacje o modyfikacjach plików");
define("_AM_WFD_MOD_MODID","ID");
define("_AM_WFD_MOD_MODTITLE","Tytu³");
define("_AM_WFD_MOD_MODPOSTER","Original Poster: ");
define("_AM_WFD_MOD_DATE","Wys³ane");
define("_AM_WFD_MOD_NOMODREQUEST","¯±danie nie spe³nia kryterii");
define("_AM_WFD_MOD_TITLE","Nazwa pobieranego pliku: ");
define("_AM_WFD_MOD_LID","Download ID: ");
define("_AM_WFD_MOD_CID","Kategoria: ");
define("_AM_WFD_MOD_URL","URL pobierania: ");
define("_AM_WFD_MOD_MIRROR","Lustro pobierania: ");
define("_AM_WFD_MOD_SIZE","Rozmiar pobierania: ");
define("_AM_WFD_MOD_PUBLISHER","Publikuj±cy: ");
define("_AM_WFD_MOD_LICENSE","Licencja oprogramowania: ");
define("_AM_WFD_MOD_FEATURES","S³owa kluczowe: ");
define("_AM_WFD_MOD_FORUMID","Forum: ");
define("_AM_WFD_MOD_LIMITATIONS","Ograniczenia oprogramowania: ");
define("_AM_WFD_MOD_DHISTORY","Historia pobierania: ");
define("_AM_WFD_MOD_SCREENSHOT","Obraz zrzutu ekranu: ");
define("_AM_WFD_MOD_HOMEPAGE","Strona g³ówna: ");
define("_AM_WFD_MOD_HOMEPAGETITLE","Tytu³ strony g³ównej: ");
define("_AM_WFD_MOD_VERSION","Wersja: ");
define("_AM_WFD_MOD_SHOTIMAGE","Obraz zrzutu: ");
define("_AM_WFD_MOD_FILESIZE","Rozmiar  pliku: ");
define("_AM_WFD_MOD_PLATFORM","Platforma: ");
define("_AM_WFD_MOD_PRICE","Cena: ");
define("_AM_WFD_MOD_LICENCE","Licencja: ");
define("_AM_WFD_MOD_DESCRIPTION","Opis: ");
define("_AM_WFD_MOD_REQUIREMENTS","Wymagania: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER","Dodaj¹cy: ");
define("_AM_WFD_MOD_MODIFYSUBMIT","Dodaj¹cy");
define("_AM_WFD_MOD_PROPOSED","Propozycja szczegó³ów downloadu");
define("_AM_WFD_MOD_ORIGINAL","Szczegó³y downloadu");
define("_AM_WFD_MOD_REQDELETED","¯±danie modyfikacji zosta³o usuniête z bazy danych");
define("_AM_WFD_MOD_REQUPDATED","Wybrana modyfikacja pobierania i uaktualnienie bazy danych przebieg³o pomy¶lnie");
define('_AM_WFD_MOD_VIEW','Podgl±d');

//Reviews defines
define("_AM_WFD_REV_SNEWMNAMEDESC","Zatwierdzenie komentarza: ");
define("_AM_WFD_REV_ID","ID");
define("_AM_WFD_REV_TITLE","Tytu³");
define("_AM_WFD_REV_POSTER","Wysy³aj±cy");
define("_AM_WFD_REV_SUBMITDATE","Wys³ano");
define("_AM_WFD_REV_FTITLE","Tytu³ komentarza: ");
define("_AM_WFD_REV_FRATING","Ocena: ");
define("_AM_WFD_REV_FDESCRIPTION","Opis: ");
define("_AM_WFD_REV_FAPPROVE","Zatwierdzenie: ");
define("_AM_WFD_REV_ACTION","Akcja");
define("_AM_WFD_REV_NOWAITINGREVIEWS","Nie znaleziono ¿adnych komentarzy oczekuj±cych na zatwierdzenie");
define("_AM_WFD_REV_REVIEW_UPDATED","Modyfikacja zaznaczonych komentarzy i uaktualnienie bazy danych przebieg³o pomy¶lnie");

//File management
define("_AM_WFD_FILE_ID","ID pliku: ");
define("_AM_WFD_FILE_IP","Adres IP dodaj±cego: ");
define("_AM_WFD_FILE_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b>Dopuszczone rozszerzenia plików</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE","Modyfikacje pliku");
define("_AM_WFD_FILE_CREATENEWFILE","Dodaj nowy plik");
define("_AM_WFD_FILE_TITLE","Nazwa pliku: ");
define("_AM_WFD_FILE_DLURL","Adres URL: ");
define("_AM_WFD_FILE_MIRRORURL","Mirror pliku: ");
define("_AM_WFD_FILE_DESCRIPTION","Opis pliku: ");
define("_AM_WFD_FILE_DUPLOAD","Dodanie pliku:");
define("_AM_WFD_FILE_CATEGORY","Wybierz kategoriê: ");
define("_AM_WFD_FILE_HOMEPAGETITLE","Tytu³ strony g³ównej: ");
define("_AM_WFD_FILE_HOMEPAGE","Strona g³ówna: ");
define("_AM_WFD_FILE_SIZE","Rozmiar pliku: ");
define("_AM_WFD_FILE_VERSION","Wersja: ");
define("_AM_WFD_FILE_PUBLISHER","Publikuj±cy plik: ");
define("_AM_WFD_FILE_PLATFORM","Platforma: ");
define("_AM_WFD_FILE_LICENCE","Licencja: ");
define("_AM_WFD_FILE_LIMITATIONS","Ograniczenia: ");
define("_AM_WFD_FILE_PRICE","Cena: ");
define("_AM_WFD_FILE_KEYFEATURES","S³owa kluczowe:<br /><br /><span style='font-weight: normal;'>S³owa oddzielaj znakiem  |</span>");
define("_AM_WFD_FILE_REQUIREMENTS","Wymagania systemowe:<br /><br /><span style='font-weight: normal;'>Wymagania oddzielaj znakiem |</span>");
define("_AM_WFD_FILE_HISTORY","Edycja historii pobierania:<br /><br /><span style='font-weight: normal;'>Dodaj now± historiê i u¿ywaj tego pola tylko je¶li  potrzebujesz edytowaæ poprzedni± historiê.</span>");
define("_AM_WFD_FILE_HISTORYD","Dodaj now± historiê pobierania:<br /><br /><span style='font-weight: normal;'>Numer wersji i data bêdzie utworzona automatycznie</span>");
define("_AM_WFD_FILE_HISTORYVERS","<b>Wersja: </b>");
define("_AM_WFD_FILE_HISTORDATE"," <b>Aktualizowano:</b> ");
define("_AM_WFD_FILE_FILESSTATUS","Dodaj pobieranie offline?<br /><br /><span style='font-weight: normal;'>Pobieranie nie bêdzie widoczne dla wszystkich u¿ytkowników.</span>");
define("_AM_WFD_FILE_SETASUPDATED"," Dodaj status pobierania i aktualizacjê?<br /><br /><span style='font-weight: normal;'>Dzia³ bêdzie pokazywa³ ikonê aktualizacji.</span>");
define("_AM_WFD_FILE_SHOTIMAGE","Wybierz obraz zrzutu: ");
define("_AM_WFD_FILE_DISCUSSINFORUM","Dodaæ dyskusjê na forum?");
define("_AM_WFD_FILE_PUBLISHDATE","Data publikacji pliku:");
define("_AM_WFD_FILE_EXPIREDATE","Data wa¿no¶ci pliku:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE","<br /><br />Usuñ datê publikacji:");
define("_AM_WFD_FILE_CLEAREXPIREDATE","<br /><br />Usuñ datê wa¿no¶ci:");
define("_AM_WFD_FILE_PUBLISHDATESET","Dodaj datê publikacji: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH","Dodaj datê/czas publikacji");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE"," Dodaj datê/czas wa¿no¶ci");
define("_AM_WFD_FILE_SETPUBLISHDATE","<b>Dodaj datê publikacji: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE","<b>Dodaj now± datê publikacji: </b><br />Opublikowano:");
define("_AM_WFD_FILE_SETPUBDATESETS","<b>Dodaj datê publikacji: </b><br />Data publikacji:");
define("_AM_WFD_FILE_EXPIREDATESET"," Dodaj datê wa¿no¶ci: ");
define("_AM_WFD_FILE_SETEXPIREDATE","<b>Dodaj datê wa¿no¶ci: </b>");
define("_AM_WFD_FILE_MUSTBEVALID","Obraz rzutu musi byæ prawid³owym formatem obrazu w  katalogu %s  (np: shot.gif). Zostaw puste pole je¶li nie ma tam ¿adnego pliku.");
define("_AM_WFD_FILE_EDITAPPROVE","Zatwierdzenie:");
define("_AM_WFD_FILE_NEWFILEUPLOAD","Dodanie nowego pliku i aktualizacja bazy danych przebieg³o pomy¶lnie");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE","Modyfikacja zaznaczonego pliku i aktualizacja bazy danych przebieg³a pomy¶lnie");
define("_AM_WFD_FILE_REALLYDELETEDTHIS","Naprawdê chcesz usun±æ zaznaczony plik?");
define("_AM_WFD_FILE_FILEWASDELETED","Plik %s zosta³ pomy¶lnie usuniêty z bazy danych!");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE"," U¿yj nazwy dodawanego pliku jako nazwy pliku.");
define("_AM_WFD_FILE_FILEAPPROVED","Zatwierdzenie pliku i aktualizacja bazy danych przebieg³a pomy¶lnie");
define("_AM_WFD_FILE_CREATENEWSSTORY","<b>Stworzenie dzia³u Nowo¶ci z dzia³u Pobierania</b>");
define("_AM_WFD_FILE_SUBMITNEWS","Dodaæ nowy plik jako element Nowo¶ci?");
define("_AM_WFD_FILE_NEWSCATEGORY","Zaznacz kategoriê Nowo¶ci do subskrybcji Nowo¶ci pobierania:");
define("_AM_WFD_FILE_NEWSTITLE","Nazwa pliku w dziale Nowo¶ci:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Zostaw puste pole aby u¿yæ nazwy pliku</span></div>");

/*
* Broken downloads defines
*/
define("_AM_WFD_SBROKENSUBMIT","Linki uszkodzone: ");
define("_AM_WFD_BROKEN_FILE","Raport uszkodzonych linków");
define("_AM_WFD_BROKEN_FILEIGNORED","Raport b³êdów niepotwierdzonych zosta³ usuniêty z bazy danych!");
define("_AM_WFD_BROKEN_NOWACK","Status potwierdzenia zmieniono i zaktualizowano bazê danych!");
define("_AM_WFD_BROKEN_NOWCON","Status niepoprawno¶ci zmieniono i zaktualizowano bazê danych!");
define("_AM_WFD_BROKEN_REPORTINFO","Informacja raportu uszkodzonych linków");
define("_AM_WFD_BROKEN_REPORTSNO","Oczekuj±ce raporty:");
define("_AM_WFD_BROKEN_IGNOREDESC","<b>Ignoruj</b> raport i tylko usuñ go z bazy.");
define("_AM_WFD_BROKEN_DELETEDESC","<b>Usuñ</b> the reported download data and i raporty o uszkodzonych linkach dla pliku broken file reports for the file.");
define("_AM_WFD_BROKEN_EDITDESC","<b>Edytuj</b> Download by usun±æ problem.");
define("_AM_WFD_BROKEN_ACKDESC","<b>Potwierd¼</b> Ustaw status powierdzenia raportu.");
define("_AM_WFD_BROKEN_CONFIRMDESC","<b>Niepotwierdzony</b> Ustaw status niepotwierdzenia raportu.");

define("_AM_WFD_BROKEN_ID","ID");
define("_AM_WFD_BROKEN_TITLE","Tytu³");
define("_AM_WFD_BROKEN_REPORTER","Autor raportu");
define("_AM_WFD_BROKEN_FILESUBMITTER","Wysy³aj±cy");
define("_AM_WFD_BROKEN_DATESUBMITTED","Data wys³ania");
define("_AM_WFD_BROKEN_ACTION","Akcja");
define("_AM_WFD_BROKEN_NOFILEMATCH","Nie ma ¿adnych raportów spe³niaj±cych te kryteria");
define("_AM_WFD_BROKENFILEDELETED","Opis pobierania i raport zosta³y usuniête z bazy");

/*
* About defines
*/
define("_AM_WFD_BY","przez");

//block defines
define("_AM_WFD_BADMIN","Blok administracji");
define("_AM_WFD_BLKDESC","Opis");
define("_AM_WFD_TITLE","Nazwa");
define("_AM_WFD_SIDE","Wyrównanie");
define("_AM_WFD_WEIGHT","Znaczenie");
define("_AM_WFD_VISIBLE","Widoczny");
define("_AM_WFD_ACTION","Akcja");
define("_AM_WFD_SBLEFT","lewy");
define("_AM_WFD_SBRIGHT","prawy");
define("_AM_WFD_CBLEFT","Centralny lewy");
define("_AM_WFD_CBRIGHT","Centralny prawy");
define("_AM_WFD_CBCENTER","Centralny ¶rodkowy");
define("_AM_WFD_ACTIVERIGHTS","Prawa aktywne");
define("_AM_WFD_ACCESSRIGHTS","Prawo dostêpu");

//image admin icon
define("_AM_WFD_ICO_EDIT","Edytuj");
define("_AM_WFD_ICO_DELETE","Usuñ");
define("_AM_WFD_ICO_ONLINE","Online");
define("_AM_WFD_ICO_OFFLINE","Offline");
define("_AM_WFD_ICO_APPROVED","Zatwierd¼");
define("_AM_WFD_ICO_NOTAPPROVED","Nie zatwierdzaj");

define("_AM_WFD_ICO_LINK","Pokrewny link");
define("_AM_WFD_ICO_URL","Dodaj pokrewny URL");
define("_AM_WFD_ICO_ADD","Dodaj");
define("_AM_WFD_ICO_APPROVE","Zatwierd¼");
define("_AM_WFD_ICO_STATS","Statystyka");

define("_AM_WFD_ICO_IGNORE","Ignoruj");
define("_AM_WFD_ICO_ACK","Potwierdzenie odbioru raportu b³êdów");
define("_AM_WFD_ICO_REPORT","Potwierdzaæ odbiór raportu?");
define("_AM_WFD_ICO_CONFIRM","Potwierdzanie raportu b³êdów");
define("_AM_WFD_ICO_CONBROKEN","Potwierdziæ raport b³êdów?");

//3.1
define("_AM_WFD_CCATEGORY_CHILDASPARENT","Nie mo¿esz ustawiæ jako kategorii podrzêdnej gdy jest ona g³ówn±");
define("_AM_WFD_FILE_SUBMITTERID","ID dodaj±cego:<br /><br />Zostaw to jak jest, chyba, ze chcesz zmieniæ dodaj±cego plik");

define("_AM_WFD_SMIRRORS","Mirrory: ");
define("_AM_WFD_AREVIEWS_APPROVED","Recenzja zosta³a zatwierdzona.");
define("_AM_WFD_DOWN_NOTSET","Nie zdefiniowana ¶cie¿ka uploadu");
define("_AM_WFD_DOWN_SERVERPATH","¦cie¿ka do katalogu g³ównego XOOPS: ");
define("_AM_WFD_DOWN_UPLOADPATH","Obecna ¶cie¿ka uploadu: ");
define("_AM_WFD_DOWN_UPLOADPATHDSC","Uwaga, ¶cie¿ka uploadu *MUSI* zawieraæ pe³n± fizyczn± ¶cie¿kê.");
define("_AM_WFD_REV_REVIEWTITLE","Tytu³ recenzji");
define("_AM_WFD_REVIEW_APPROVETHIS","Zatwierd¼ recenzjê");
define("_AM_WFD_REV_NOPUBLISHEDREVIEWS","Nie ma ¿adnych recenzji");
define("_AM_WFD_REV_REVIEW_TOTAL","Liczba recenzji:");
define("_AM_WFD_REV_REVIEW_WAITING","Recenzje oczekuj±ce");
define("_AM_WFD_REV_REVIEW_PUBLISHED","Opublikowane recenzje");
define("_AM_WFD_FILE_FILENAME","Nazwa pliku:<br /><br /><span style='font-weight: normal;'>Uwaga: je¿eli u¿ywasz pliku lokalnego, musisz wpisaæ poprawny typ pliku poni¿ej!</span>");
define("_AM_WFD_FILE_FILETYPE","Typ pliku: ");
define("_AM_WFD_AMIRRORS","Zarz±dzanie mirrorami");
define("_AM_WFD_AMIRRORS_WAITING","Mirrory oczekuj±ce na walidacjê:");
define("_AM_WFD_AMIRRORS_INFO","Informacje o zarz±dzaniu mirrorami");
define("_AM_WFD_AMIRRORS_APPROVE","<b>Zatwierd¼</b> nowy mirror bez walidacji.");
define("_AM_WFD_AMIRRORS_EDIT","<b>Edytuj</b> nowy mirror i potem zatwierd¼.");
define("_AM_WFD_AMIRRORS_DELETE","<b>Usuñ</b> nowy mirror.");
define("_AM_WFD_MIRROR_MIRRORTITLE","Mirror Host");
define("_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS","Nie ma ¿adnych mirrorów");
define("_AM_WFD_MIRROR_MIRROR_TOTAL","Liczba mirrorów:");
define("_AM_WFD_MIRROR_MIRROR_WAITING","Oczekuj±ce mirrory");
define("_AM_WFD_MIRROR_MIRROR_PUBLISHED","Opublikowane mirrory");
define("_AM_WFD_MIRROR_SNEWMNAMEDESC","Zatwierd¼ mirror: ");
define("_AM_WFD_MIRROR_ID","ID");
define("_AM_WFD_MIRROR_TITLE","Tytu³");
define("_AM_WFD_MIRROR_MUSTBEVALID","Logo strony domowej musi byæ obrazem umieszczonym w katalogu %s (np. shot.gif). Pozostaw puste, je¿eli nie chcesz u¿ywaæ obrazka.");
define("_AM_WFD_MIRROR_POSTER","Dodaj±cy");
define("_AM_WFD_MIRROR_SUBMITDATE","Dodano");
define("_AM_WFD_MIRROR_FHOMEURLTITLE","Tytu³ strony domowej: ");
define("_AM_WFD_MIRROR_FHOMEURL","URL strony domowej: ");
define("_AM_WFD_MIRROR_UPLOADIMAGE","Wrzuæ logo strony:<br /><br />Ma³e logo reprezentuj±ce twoj± stronê.");
define("_AM_WFD_MIRROR_MIRRORIMAGE","Logo strony:");
define("_AM_WFD_MIRROR_CONTINENT","Kontynent:");
define("_AM_WFD_MIRROR_LOCATION","Po³o¿enie:<br /><br />np: Poznañ, PL");
define("_AM_WFD_MIRROR_DOWNURL","URL pliku:<br /><br />Wpisz url do pliku.");
define("_AM_WFD_MIRROR_FAPPROVE","Zatwierd¼ mirror: ");
define("_AM_WFD_MIRROR_ACTION","Akcja");
define("_AM_WFD_MIRROR_NOWAITINGMIRRORS","Nie ma ¿adnych oczekuj±cych mirrorów.");
define("_AM_WFD_MIRROR_MIRROR_UPDATED","Zaznaczony mirror pomy¶lnie dodany.");
define("_AM_WFD_MIRROR_APPROVETHIS","Zatwierd¼ mirror");
define("_AM_WFD_CONT1","Aftyka");
define("_AM_WFD_CONT2","Antarktyda");
define("_AM_WFD_CONT3","Azja");
define("_AM_WFD_CONT4","Europa");
define("_AM_WFD_CONT5","Ameryka Pó³nocna");
define("_AM_WFD_CONT6","Ameryka Po³udniowa");
define("_AM_WFD_CONT7","Oceania");
define("_AM_WFD_HELP","Pomoc");

//3.2
define("_AM_WFD_FFS_SUBMITBROKEN","Dodaj");
define("_AM_WFD_FFS_STANDARD_FORM","Nie, u¿yj standardowego formularza");
define("_AM_WFD_FFS_CUSTOM_FORM","U¿yj w³asnego formularza dla tej kategorii?");
define("_AM_WFD_FFS_DOWNLOADTITLE","Dodawanie pliku '{category}'.");
define("_AM_WFD_FFS_EDITDOWNLOADTITLE","Edytowanie pliku '{category}'.");
define("_AM_WFD_FFS_BACK","Powrót");
define("_AM_WFD_FFS_RELOAD","Od¶wie¿");
define("_MD_WFD_CATEGORYC","Kategoria: "); // _MD to reuse the category form
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD","Jak± kategoriê pliku chciaby¶ dodaæ?");
define("_MD_WFD_FFS_DOWNLOADDETAILS","Szczegó³owe informacje:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS","W³asne informacje:");
define("_MD_WFD_FILETITLE","Tytu³ downloadu: ");
define("_MD_WFD_DLURL","URL: ");
define("_MD_WFD_UPLOAD_FILEC","Wrzuæ plik: ");
define("_MD_WFD_DESCRIPTION","Opis");
define("_AM_WFD_DOWN_METAVERSION","<b>Wersja WF-Downloads Meta:<b> ");

define("_AM_WFD_GOMOD","Id¼ do modu³u");
define("_AM_WFD_UPDATE_MODULE","Aktualizuj modu³");
define("_AM_WFD_DB_IMPORT","Importuj");
define("_AM_WFD_FILE_SUMMARY","Podsumowanie");

//3.2rc2
define("_AM_WFD_MOD_VERSIONTYPES","Status: ");
define("_AM_WFD_FILE_VERSIONTYPES","Status: ");
?>