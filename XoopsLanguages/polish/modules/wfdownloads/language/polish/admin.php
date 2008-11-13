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
define("_AM_WFD_BMODIFY", "Modyfikuj");
define("_AM_WFD_BDELETE", "Usu�");
define("_AM_WFD_BADD", "Dodaj");
define("_AM_WFD_BAPPROVE", "Zatwierd�");
define("_AM_WFD_BIGNORE", "Ignoruj");
define("_AM_WFD_BCANCEL", "Anuluj");
define("_AM_WFD_BSAVE", "Zapisz");
define("_AM_WFD_BRESET", "Wyczy��");
define("_AM_WFD_BMOVE", "Przenie� pliki");
define("_AM_WFD_BUPLOAD", "Za�aduj");
define("_AM_WFD_BDELETEIMAGE", "Usu� zaznaczony obraz");
define("_AM_WFD_BRETURN", "Return to where you where!");
define("_AM_WFD_DBERROR", "B��d dost�pu do bazy danych: prosz� zg�osi� ten b��d na stronie www.SmartFactory.ca");
//Banned Users
define("_AM_WFD_NONBANNED", "Nie zablokowany");
define("_AM_WFD_BANNED", "Zablokowany");
define("_AM_WFD_EDITBANNED", "Edytuj zablokowanych u�ytkownik�w");
// Other Options
define("_AM_WFD_TEXTOPTIONS", "Opcje tekstu:");
define("_AM_WFD_DISABLEHTML", "Ukryj tagi HTML");
define("_AM_WFD_DISABLESMILEY", "Ukryj emotikonki");
define("_AM_WFD_DISABLEXCODE", " Ukryj kod XOOPSa");
define("_AM_WFD_DISABLEIMAGES", "Ukryj obrazy");
define("_AM_WFD_DISABLEBREAK", "U�ywaj konwersji �amania tekstu Xoopsa?");
define("_AM_WFD_UPLOADFILE", "Plik zosta� za�adowany pomy�lnie");
define("_AM_WFD_NOMENUITEMS", "No menu items within the menu");

// Admin Bread crumb
define("_AM_WFD_PREFS", "Preferencje");
define("_AM_WFD_PERMISSIONS", "Zezwolenie");
define("_AM_WFD_BINDEX", "Strona g��wna");
define("_AM_WFD_BLOCKADMIN", "Bloki");
define("_AM_WFD_GOMODULE", "Id� do modu�u");
define("_AM_WFD_BHELP", "Pomoc");
define("_AM_WFD_ABOUT", "About");
// Admin Summary
define("_AM_WFD_SCATEGORY", "Kategoria: ");
define("_AM_WFD_SFILES", "Pliki: ");
define("_AM_WFD_SNEWFILESVAL", "Wys�ano: ");
define("_AM_WFD_SMODREQUEST", "Modyfikowane: ");
define("_AM_WFD_SREVIEWS", "Recenzje: ");
// Admin Main Menu
define("_AM_WFD_MCATEGORY", "Zarz�dzanie kategoriami");
define("_AM_WFD_MDOWNLOADS", "Zarz�dzanie plikiem");
define("_AM_WFD_INDEXPAGE", "Zarz�dzanie stron� g��wn�");
define("_AM_WFD_MUPLOADS", "Za�aduj obraz");
define("_AM_WFD_MMIMETYPES", "Zarz�dzanie rodzajami plik�w");
define("_AM_WFD_MCOMMENTS", "Komentarze");
define("_AM_WFS_MVOTEDATA", "Dane g�os�w");
// waiting reviews
define("_AM_WFD_AREVIEWS", "Zarz�dzanie recenzjami");
define("_AM_WFD_AREVIEWS_WAITING", "Recenzje oczekuj�ce na zatwierdzenie:");
define("_AM_WFD_AREVIEWS_INFO", "Informacje zarz�dzania recenzjami");
define("_AM_WFD_AREVIEWS_APPROVE", "<b>Zatwierd�</b> Nowe recenzje bez zatwierdzania.");
define("_AM_WFD_AREVIEWS_EDIT", "<b>Edytuj</b> Nowe recenzja i jej akceptacja.");
define("_AM_WFD_AREVIEWS_DELETE", "<b>Usu�</b> informacj� nowej recenzji.");

// Catgeory defines
define("_AM_WFD_CCATEGORY_CREATENEW", "Stw�rz now� kategori�");
define("_AM_WFD_CCATEGORY_MODIFY", "Modyfikuj kategori�");
define("_AM_WFD_CCATEGORY_MOVE", "Przenie� pliki do kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE", "Nazwa kategorii:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED", "B��d przeniesienia plik�w: Nie mo�na przenie�� do tej kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT", " B��d przeniesienia plik�w: Nie mo�na znale�� tej kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED", "Przeniesione pliki i kategoria zosta�y usuni�te");
define("_AM_WFD_CCATEGORY_CREATED", "Stworzenie nowej kategorii i uaktualnienie bazy danych przebieg�o pomy�lnie");
define("_AM_WFD_CCATEGORY_MODIFIED", "Zmiana zaznaczonej kategorii i uaktualnienie bazy danych przebieg�o pomy�lnie");
define("_AM_WFD_CCATEGORY_DELETED", "Usuni�cie zanaczonej kategorii  i uaktualnienie bazy danych przebieg�o pomy�lnie");
define("_AM_WFD_CCATEGORY_AREUSURE", "OSTRZE�ENIE: Jeste� pewien, �e chcesz usun�� t� kategori�, jej pliki i komentarze?");
define("_AM_WFD_CCATEGORY_NOEXISTS", "Musisz stworzy� kategori� zanim dodasz nowy plik");
define("_AM_WFD_FCATEGORY_GROUPPROMPT", "Kontrola dost�pu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Zaznacz grup� u�ytkownik�w, kt�rzy maj� mie� dost�p do tej kategorii.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE", "Nazwa kategorii:");
define("_AM_WFD_FCATEGORY_WEIGHT", "Wa�no�� kategorii:");
define("_AM_WFD_FCATEGORY_SUBCATEGORY", "Dodaj jako podkategori�:");
define("_AM_WFD_FCATEGORY_CIMAGE", "Zaznacz obraz kategorii:");
define("_AM_WFD_FCATEGORY_DESCRIPTION", "Dodaj opis kategorii:");
define("_AM_WFD_FCATEGORY_SUMMARY", "Dodaj streszczenie kategorii:");
/*
* Index page Defines
*/
define("_AM_WFD_IPAGE_UPDATED", "Modyfikacja strony g��wnej uaktualnienie bazy danych przebieg�o pomy�lnie!");
define("_AM_WFD_IPAGE_INFORMATION", "Informacje strony g��wnej");
define("_AM_WFD_IPAGE_MODIFY", "Modyfikuj stron� g��wn�");
define("_AM_WFD_IPAGE_CIMAGE", "Wybierz obraz logo:");
define("_AM_WFD_IPAGE_CTITLE", "Tytu� strony:");
define("_AM_WFD_IPAGE_CHEADING", "Nag��wek strony:");
define("_AM_WFD_IPAGE_CHEADINGA", "Wyr�wnanie nag��wka strony:");
define("_AM_WFD_IPAGE_CFOOTER", "stopka strony:");
define("_AM_WFD_IPAGE_CFOOTERA", "Wyr�wnanie stopki:");
define("_AM_WFD_IPAGE_CLEFT", "Wyr�wnanie w lewo");
define("_AM_WFD_IPAGE_CCENTER", "Do �rodka");
define("_AM_WFD_IPAGE_CRIGHT", "Wyr�wnanie w prawo");
/*
*  Permissions defines
*/
define("_AM_WFD_PERM_MANAGEMENT", "Zarz�dzanie dost�pem");
define("_AM_WFD_PERM_PERMSNOTE", "<div><b>UWAGA:</b> Pami�taj, �e nawet je�li ustawisz w�a�ciwe zezwolenia do przegl�dania, grupa mo�e nie widzie� artyku��w lub blok�w je�li dodatkowo nie zezwolisz grupie na dost�p do modu�u.
Aby to zrobi�, id� do <b> System Admin > Grupy</b>, wybierz odpowiedni� grup� i zaznacz pole wyboru aby zezwoli� jej cz�onkom na dost�p.</div>");
define("_AM_WFD_PERM_CPERMISSIONS", "Dost�p do kategorii");
define("_AM_WFD_PERM_CSELECTPERMISSIONS", "Zaznacz kategorie do kt�rej dana grupa u�ytkownik�w ma  mie� dost�p");
define("_AM_WFD_PERM_CNOCATEGORY", "Nie mo�na ustanowi� praw dost�pu: nie zosta�a utworzona jeszcze �adna kategoria!");
define("_AM_WFD_PERM_FPERMISSIONS", "Dost�p do pliku");
define("_AM_WFD_PERM_FNOFILES", "Nie mo�na ustanowi� praw dost�pu: jeszcze �aden plik nie zosta� dodany!");
define("_AM_WFD_PERM_FSELECTPERMISSIONS", "Zaznacz pliki do kt�rych dana grupa u�ytkownik�w b�dzie mia�a dost�p");
/*
* Upload defines
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD", " Obraz zosta� pomy�lnie za�adowany na serwer");
define("_AM_WFD_DOWN_NOIMAGEEXIST", " B��d: Zaznaczony plik  nie zosta� za�adowany.  Spr�buj ponownie!");
define("_AM_WFD_DOWN_IMAGEEXIST", "Obraz ju� istnieje !");
define("_AM_WFD_DOWN_FILEDELETED", "Plik zostanie usuni�ty.");
define("_AM_WFD_DOWN_FILEERRORDELETE", "B��d usuni�cia pliku: plik nie zosta� znaleziony.");
define("_AM_WFD_DOWN_NOFILEERROR", "B��d usuni�cia pliku: �aden plik nie zosta� wybrany do usuni�cia.");
define("_AM_WFD_DOWN_DELETEFILE", "OSTRZE�ENIE: Jeste� pewien, �e chcesz usun�c ten plik?");
define("_AM_WFD_DOWN_IMAGEINFO", "Server Status");
define("_AM_WFD_DOWN_SPHPINI", "<b>Informacja pobrana z PHP ini File:</b>");
define("_AM_WFD_DOWN_SAFEMODESTATUS", "Safe Mode Status: ");
define("_AM_WFD_DOWN_REGISTERGLOBALS", "Register Globals: ");
define("_AM_WFD_DOWN_SERVERUPLOADSTATUS", "Server Uploads Status: ");
define("_AM_WFD_DOWN_MAXUPLOADSIZE", "Maksymalny rozmiar dodawanego pliku: ");
define("_AM_WFD_DOWN_MAXPOSTSIZE", "Maksymalny rozmiar  poczty: ");
define("_AM_WFD_DOWN_SAFEMODEPROBLEMS", " (This May Cause Problems)");
define("_AM_WFD_DOWN_GDLIBSTATUS", "GD Library wsparcie: ");
define("_AM_WFD_DOWN_GDLIBVERSION", "GD Library wersja: ");
define("_AM_WFD_DOWN_GDON", "<b>Aktywne</b> (Miniaturki dost�pne)");
define("_AM_WFD_DOWN_GDOFF", "<b>Nieaktywne</b> (Miniaturki niedost�pne)");
define("_AM_WFD_DOWN_OFF", "<b>WY��CZONE</b>");
define("_AM_WFD_DOWN_ON", "<b>W��CZONE</b>");
define("_AM_WFD_DOWN_CATIMAGE", "Obraz kategorii");
define("_AM_WFD_DOWN_SCREENSHOTS", "Obraz zrzutu");
define("_AM_WFD_DOWN_MAINIMAGEDIR", "Katalog obraz�w");
define("_AM_WFD_DOWN_FCATIMAGE", "�cie�ka dost�pu do katalogu obraz�w kategorii");
define("_AM_WFD_DOWN_FSCREENSHOTS", "�cie�ka dost�pu do katalogu zrzut�w");
define("_AM_WFD_DOWN_FMAINIMAGEDIR", "G��wna sie�ka dost�pu do obraz�w");
define("_AM_WFD_DOWN_FUPLOADIMAGETO", "Dodany obraz: ");
define("_AM_WFD_DOWN_FUPLOADPATH", "�cie�ka dost�pu dodanego pliku: ");
define("_AM_WFD_DOWN_FUPLOADURL", "Dodaj URL: ");
define("_AM_WFD_DOWN_FOLDERSELECTION", "Zaznacz katalog przeznaczenia:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE", "Poka� wybrany obraz:");
define("_AM_WFD_DOWN_FUPLOADIMAGE", "Dodaj nowy obraz do wybranego katalogu przeznaczenia :");

// Main Index defines
define("_AM_WFD_MINDEX_DOWNSUMMARY", "Podsumowanie modu�u Admina");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN", "Opublikowane pliki:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN", "Autopublikowanie plik�w:");
define("_AM_WFD_MINDEX_AUTOEXPIRE", "Autowyga�ni�cie wa�no�ci pilk�w:");
define("_AM_WFD_MINDEX_OFFLINEDOWN", "Pliki offline:");
define("_AM_WFD_MINDEX_ID", "ID");
define("_AM_WFD_MINDEX_TITLE", "Nazwa pliku");
define("_AM_WFD_MINDEX_POSTER", "Dodaj�cy");
define("_AM_WFD_MINDEX_SUBMITTED", " Data dodania");
define("_AM_WFD_MINDEX_ONLINESTATUS", "Status Online");
define("_AM_WFD_MINDEX_PUBLISHED", "Opublikowane");
define("_AM_WFD_MINDEX_ACTION", "Akcja");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND", "UWAGA:  Plik nie spe�nia kryterii");
define("_AM_WFD_MINDEX_PAGE", "<b>Strona:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT', '<ul><li>Detale g��wnej strony WF-Downloads </li><li>Mo�esz �atwo zmienia� logo, nag��wek, nag��wek strony g��wnej i tekst stopki, tak by dostosowa� do w�asnego gustu</li></ul><br /><br />Notka: Do chwili wyboru nowego loga b�dzie u�ywane logo WF-Downloads.');

// Submitted Files
define("_AM_WFD_SUB_SUBMITTEDFILES", "Dodawanie plik�w");
define("_AM_WFD_SUB_FILESWAITINGINFO", "Informacja o oczekuj�cych plikach");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION", "Zatwierdzanie plik�w oczekuj�cych: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE", "<b>Zatwierd�</b> Informacja o nowym pliku bez zatwierdzania.");
define("_AM_WFD_SUB_EDITWAITINGFILE", "<b>Edytuj</b>  Informacja o nowym pliku i jego zatwierdzenie.");
define("_AM_WFD_SUB_DELETEWAITINGFILE", "<b>Usu�</b> Informacja o nowym pliku.");
define("_AM_WFD_SUB_NOFILESWAITING", "Nie ma �adnych plik�w spe�aniaj�cych kryteria");
define("_AM_WFD_SUB_NEWFILECREATED", "Dodanie danych nowego pliku i aktualizacja bazy danych przebieg�y pomy�lnie");
// Mimetypes
define("_AM_WFD_MIME_ID", "ID");
define("_AM_WFD_MIME_EXT", "EXT");
define("_AM_WFD_MIME_NAME", "Typ aplikacji");
define("_AM_WFD_MIME_ADMIN", "Admin");
define("_AM_WFD_MIME_USER", "U�ytkownik");
// Mimetype Form
define("_AM_WFD_MIME_CREATEF", "Stw�rz rozszerzenie");
define("_AM_WFD_MIME_MODIFYF", "Modyfikuj rozszerzenie");
define("_AM_WFD_MIME_EXTF", "Rozszerzenie pliku:");
define("_AM_WFD_MIME_NAMEF", "Typ aplikacji/Nazwa:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz nazw� aplikacji skojarzonej z danym rozszerzeniem.</span></div>");
define("_AM_WFD_MIME_TYPEF", "Rozszerzenie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz rozszerzenie skojarzone z zawarto�ci� pliku. Ka�de rozszerzenie musi by� oddzielone spacj�.</span></div>");
define("_AM_WFD_MIME_ADMINF", "Dopuszczone rozszerzenia plik�w przez Administratora");
define("_AM_WFD_MIME_ADMINFINFO", "<b>Rozszerzenia plik�w dopuszczone do dodawania przez Administratora:</b>");
define("_AM_WFD_MIME_USERF", "Dopuszczone rozszerzenia plik�w u�ytkownika");
define("_AM_WFD_MIME_USERFINFO", "<b>Rozszerzenia plik�w dopuszczone do dodawania przez uzytkownik�w:</b>");
define("_AM_WFD_MIME_NOMIMEINFO", "Nie wybrano rozszerzenia.");
define("_AM_WFD_MIME_FINDMIMETYPE", "Znajd� nowe rozszerzenie:");
define("_AM_WFD_MIME_EXTFIND", "Znajd� zawarto�c pliku:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz zawarto�� pliku, kt�ry chcesz znale��.</span></div>");
define("_AM_WFD_MIME_INFOTEXT", "<ul><li>Nowe rozszerzenie mo�e by� �atwo dodane, edytowane lub usuwane za pomoc� tego formularza.</li>
	<li>Znajd� nowe rozszerzenia poprzez inne strony.</li>
	<li>Podgl�d rozszerzenia dla dodawania przez Admina i u�ytkownik�w.</li>
	<li>Zmie� status dodanego rozszerzenia.</li></ul>
	");

// Mimetype Buttons
define("_AM_WFD_MIME_CREATE", "Utw�rz");
define("_AM_WFD_MIME_CLEAR", "Wyczy��");
define("_AM_WFD_MIME_CANCEL", "Anuluj");
define("_AM_WFD_MIME_MODIFY", "Modyfikuj");
define("_AM_WFD_MIME_DELETE", "Usu�");
define("_AM_WFD_MIME_FINDIT", "Pobierz zawarto��!");
// Mimetype Database
define("_AM_WFD_MIME_DELETETHIS", "Usun�� zaznaczone rozszerzenie?");
define("_AM_WFD_MIME_MIMEDELETED", "Rozszerzenie %s zostanie usuni�te");
define("_AM_WFD_MIME_CREATED", "Informacja o rozszerzeniu zosta�a utworzona");
define("_AM_WFD_MIME_MODIFIED", "Informacja o rozszerzeniu zosta�a zmodyfikowana");
// Vote Information
define("_AM_WFD_VOTE_RATINGINFOMATION", "Informacja o g�osach");
define("_AM_WFD_VOTE_TOTALVOTES", "Wszystkich g�os�w: ");
define("_AM_WFD_VOTE_REGUSERVOTES", "G�osy zarejestrowanych u�ytkownik�w: %s");
define("_AM_WFD_VOTE_ANONUSERVOTES", "G�osy u�ytkownik�w anonimowych: %s");
define("_AM_WFD_VOTE_USER", "U�ytkownik");
define("_AM_WFD_VOTE_IP", "Adres IP");
define("_AM_WFD_VOTE_USERAVG", "�rednia g�os�w u�ytkownika");
define("_AM_WFD_VOTE_TOTALRATE", "Suma ocen");
define("_AM_WFD_VOTE_DATE", "Submitted");
define("_AM_WFD_VOTE_RATING", "Oceny");
define("_AM_WFD_VOTE_NOREGVOTES", "Nie ma g�os�w u�ytkownik�w zarejestrowanych");
define("_AM_WFD_VOTE_NOUNREGVOTES", "Nie ma g�os�w u�ytkownik�w niezarejestrowanych");
define("_AM_WFD_VOTE_VOTEDELETED", "Dane g�osowa� zosta�y usuni�te.");
define("_AM_WFD_VOTE_ID", "ID");
define("_AM_WFD_VOTE_FILETITLE", "Nazwa pliku");
define("_AM_WFD_VOTE_DISPLAYVOTES", "Informacja o danych g�osowania");
define("_AM_WFD_VOTE_NOVOTES", "Nie ma �adnych g�os�w do wy�wietlenia");
define("_AM_WFD_VOTE_DELETE", "Nie ma �adnych g�os�w do wy�wietlenia");
define("_AM_WFD_VOTE_DELETEDSC", "<b>Usuni�to</b> wybrane informacje o g�osowaniu z bazy danych.");

// Modifications
/*
define("_AM_WFD_MOD_TOTMODREQUESTS", "Total Modification Requests: ");
define("_AM_WFD_MOD_MODREQUESTS", "Modified Files");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Modified Files Information");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Title");
define("_AM_WFD_MOD_MODPOSTER", "Original Poster: ");
define("_AM_WFD_MOD_DATE", "Submitted");
define("_AM_WFD_MOD_NOMODREQUEST", "There are no requests that match this critera");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Submitter");
define("_AM_WFD_MOD_ORIGINAL", "Orginal Download Details");
define("_AM_WFD_MOD_REQDELETED", "Modification request removed from the database");
define("_AM_WFD_MOD_REQUPDATED", "Selected Download Modified and Database Updated Successfully");

*/
define("_AM_WFD_MOD_TOTMODREQUESTS", "Suma ��da� modyfikacji: ");
define("_AM_WFD_MOD_MODREQUESTS", "Pliki zmodyfikowane");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Informacje o modyfikacjach plik�w");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Tytu�");
define("_AM_WFD_MOD_MODPOSTER", "Original Poster: ");
define("_AM_WFD_MOD_DATE", "Wys�ane");
define("_AM_WFD_MOD_NOMODREQUEST", "��danie nie spe�nia kryterii");
define("_AM_WFD_MOD_TITLE", "Nazwa pobieranego pliku: ");
define("_AM_WFD_MOD_LID", "Download ID: ");
define("_AM_WFD_MOD_CID", "Kategoria: ");
define("_AM_WFD_MOD_URL", "URL pobierania: ");
define("_AM_WFD_MOD_MIRROR", "Lustro pobierania: ");
define("_AM_WFD_MOD_SIZE", "Rozmiar pobierania: ");
define("_AM_WFD_MOD_PUBLISHER", "Publikuj�cy: ");
define("_AM_WFD_MOD_LICENSE", "Licencja oprogramowania: ");
define("_AM_WFD_MOD_FEATURES", "S�owa kluczowe: ");
define("_AM_WFD_MOD_FORUMID", "Forum: ");
define("_AM_WFD_MOD_LIMITATIONS", "Ograniczenia oprogramowania: ");
define("_AM_WFD_MOD_DHISTORY", "Historia pobierania: ");
define("_AM_WFD_MOD_SCREENSHOT", "Obraz zrzutu ekranu: ");
define("_AM_WFD_MOD_HOMEPAGE", "Strona g��wna: ");
define("_AM_WFD_MOD_HOMEPAGETITLE", "Tytu� strony g��wnej: ");
define("_AM_WFD_MOD_VERSION", "Wersja: ");
define("_AM_WFD_MOD_SHOTIMAGE", "Obraz zrzutu: ");
define("_AM_WFD_MOD_FILESIZE", "Rozmiar  pliku: ");
define("_AM_WFD_MOD_PLATFORM", "Platforma: ");
define("_AM_WFD_MOD_PRICE", "Cena: ");
define("_AM_WFD_MOD_LICENCE", "Licencja: ");
define("_AM_WFD_MOD_DESCRIPTION", "Opis: ");
define("_AM_WFD_MOD_REQUIREMENTS", "Wymagania: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER", "Dodaj�cy: ");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Dodaj�cy");
define("_AM_WFD_MOD_PROPOSED", "Propozycja szczeg��w downloadu");
define("_AM_WFD_MOD_ORIGINAL", "Szczeg�y downloadu");
define("_AM_WFD_MOD_REQDELETED", "��danie modyfikacji zosta�o usuni�te z bazy danych");
define("_AM_WFD_MOD_REQUPDATED", "Wybrana modyfikacja pobierania i uaktualnienie bazy danych przebieg�o pomy�lnie");
define('_AM_WFD_MOD_VIEW','Podgl�d');

//Reviews defines
define("_AM_WFD_REV_SNEWMNAMEDESC", "Zatwierdzenie komentarza: ");
define("_AM_WFD_REV_ID", "ID");
define("_AM_WFD_REV_TITLE", "Tytu�");
define("_AM_WFD_REV_POSTER", "Wysy�aj�cy");
define("_AM_WFD_REV_SUBMITDATE", "Wys�ano");
define("_AM_WFD_REV_FTITLE", "Tytu� komentarza: ");
define("_AM_WFD_REV_FRATING", "Ocena: ");
define("_AM_WFD_REV_FDESCRIPTION", "Opis: ");
define("_AM_WFD_REV_FAPPROVE", "Zatwierdzenie: ");
define("_AM_WFD_REV_ACTION", "Akcja");
define("_AM_WFD_REV_NOWAITINGREVIEWS", "Nie znaleziono �adnych komentarzy oczekuj�cych na zatwierdzenie");
define("_AM_WFD_REV_REVIEW_UPDATED", "Modyfikacja zaznaczonych komentarzy i uaktualnienie bazy danych przebieg�o pomy�lnie");

//File management
define("_AM_WFD_FILE_ID", "ID pliku: ");
define("_AM_WFD_FILE_IP", "Adres IP dodaj�cego: ");
define("_AM_WFD_FILE_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Dopuszczone rozszerzenia plik�w</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE", "Modyfikacje pliku");
define("_AM_WFD_FILE_CREATENEWFILE", "Dodaj nowy plik");
define("_AM_WFD_FILE_TITLE", "Nazwa pliku: ");
define("_AM_WFD_FILE_DLURL", "Adres URL: ");
define("_AM_WFD_FILE_MIRRORURL", "Mirror pliku: ");
define("_AM_WFD_FILE_DESCRIPTION", "Opis pliku: ");
define("_AM_WFD_FILE_DUPLOAD", "Dodanie pliku:");
define("_AM_WFD_FILE_CATEGORY", "Wybierz kategori�: ");
define("_AM_WFD_FILE_HOMEPAGETITLE", "Tytu� strony g��wnej: ");
define("_AM_WFD_FILE_HOMEPAGE", "Strona g��wna: ");
define("_AM_WFD_FILE_SIZE", "Rozmiar pliku: ");
define("_AM_WFD_FILE_VERSION", "Wersja: ");
define("_AM_WFD_FILE_PUBLISHER", "Publikuj�cy plik: ");
define("_AM_WFD_FILE_PLATFORM", "Platforma: ");
define("_AM_WFD_FILE_LICENCE", "Licencja: ");
define("_AM_WFD_FILE_LIMITATIONS", "Ograniczenia: ");
define("_AM_WFD_FILE_PRICE", "Cena: ");
define("_AM_WFD_FILE_KEYFEATURES", "S�owa kluczowe:<br /><br /><span style='font-weight: normal;'>S�owa oddzielaj znakiem  |</span>");
define("_AM_WFD_FILE_REQUIREMENTS", "Wymagania systemowe:<br /><br /><span style='font-weight: normal;'>Wymagania oddzielaj znakiem |</span>");
define("_AM_WFD_FILE_HISTORY", "Edycja historii pobierania:<br /><br /><span style='font-weight: normal;'>Dodaj now� histori� i u�ywaj tego pola tylko je�li  potrzebujesz edytowa� poprzedni� histori�.</span>");
define("_AM_WFD_FILE_HISTORYD", "Dodaj now� histori� pobierania:<br /><br /><span style='font-weight: normal;'>Numer wersji i data b�dzie utworzona automatycznie</span>");
define("_AM_WFD_FILE_HISTORYVERS", "<b>Wersja: </b>");
define("_AM_WFD_FILE_HISTORDATE", " <b>Aktualizowano:</b> ");
define("_AM_WFD_FILE_FILESSTATUS", "Dodaj pobieranie offline?<br /><br /><span style='font-weight: normal;'>Pobieranie nie b�dzie widoczne dla wszystkich u�ytkownik�w.</span>");
define("_AM_WFD_FILE_SETASUPDATED", " Dodaj status pobierania i aktualizacj�?<br /><br /><span style='font-weight: normal;'>Dzia� b�dzie pokazywa� ikon� aktualizacji.</span>");
define("_AM_WFD_FILE_SHOTIMAGE", "Wybierz obraz zrzutu: ");
define("_AM_WFD_FILE_DISCUSSINFORUM", "Doda� dyskusj� na forum?");
define("_AM_WFD_FILE_PUBLISHDATE", "Data publikacji pliku:");
define("_AM_WFD_FILE_EXPIREDATE", "Data wa�no�ci pliku:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE", "<br /><br />Usu� dat� publikacji:");
define("_AM_WFD_FILE_CLEAREXPIREDATE", "<br /><br />Usu� dat� wa�no�ci:");
define("_AM_WFD_FILE_PUBLISHDATESET", "Dodaj dat� publikacji: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH", "Dodaj dat�/czas publikacji");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE", " Dodaj dat�/czas wa�no�ci");
define("_AM_WFD_FILE_SETPUBLISHDATE", "<b>Dodaj dat� publikacji: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE", "<b>Dodaj now� dat� publikacji: </b><br />Opublikowano:");
define("_AM_WFD_FILE_SETPUBDATESETS", "<b>Dodaj dat� publikacji: </b><br />Data publikacji:");
define("_AM_WFD_FILE_EXPIREDATESET", " Dodaj dat� wa�no�ci: ");
define("_AM_WFD_FILE_SETEXPIREDATE", "<b>Dodaj dat� wa�no�ci: </b>");
define("_AM_WFD_FILE_MUSTBEVALID", "Obraz rzutu musi by� prawid�owym formatem obrazu w  katalogu %s  (np: shot.gif). Zostaw puste pole je�li nie ma tam �adnego pliku.");
define("_AM_WFD_FILE_EDITAPPROVE", "Zatwierdzenie:");
define("_AM_WFD_FILE_NEWFILEUPLOAD", "Dodanie nowego pliku i aktualizacja bazy danych przebieg�o pomy�lnie");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE", "Modyfikacja zaznaczonego pliku i aktualizacja bazy danych przebieg�a pomy�lnie");
define("_AM_WFD_FILE_REALLYDELETEDTHIS", "Naprawd� chcesz usun�� zaznaczony plik?");
define("_AM_WFD_FILE_FILEWASDELETED", "Plik %s zosta� pomy�lnie usuni�ty z bazy danych!");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE", " U�yj nazwy dodawanego pliku jako nazwy pliku.");
define("_AM_WFD_FILE_FILEAPPROVED", "Zatwierdzenie pliku i aktualizacja bazy danych przebieg�a pomy�lnie");
define("_AM_WFD_FILE_CREATENEWSSTORY", "<b>Stworzenie dzia�u Nowo�ci z dzia�u Pobierania</b>");
define("_AM_WFD_FILE_SUBMITNEWS", "Doda� nowy plik jako element Nowo�ci?");
define("_AM_WFD_FILE_NEWSCATEGORY", "Zaznacz kategori� Nowo�ci do subskrybcji Nowo�ci pobierania:");
define("_AM_WFD_FILE_NEWSTITLE", "Nazwa pliku w dziale Nowo�ci:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Zostaw puste pole aby u�y� nazwy pliku</span></div>");

/*
* Broken downloads defines
*/
define("_AM_WFD_SBROKENSUBMIT", "Linki uszkodzone: ");
define("_AM_WFD_BROKEN_FILE", "Raport uszkodzonych link�w");
define("_AM_WFD_BROKEN_FILEIGNORED", "Raport b��d�w niepotwierdzonych zosta� usuni�ty z bazy danych!");
define("_AM_WFD_BROKEN_NOWACK", "Status potwierdzenia zmieniono i zaktualizowano baz� danych!");
define("_AM_WFD_BROKEN_NOWCON", "Status niepoprawno�ci zmieniono i zaktualizowano baz� danych!");
define("_AM_WFD_BROKEN_REPORTINFO", "Informacja raportu uszkodzonych link�w");
define("_AM_WFD_BROKEN_REPORTSNO", "Oczekuj�ce raporty:");
define("_AM_WFD_BROKEN_IGNOREDESC", "<b>Ignoruj</b> raport i tylko usu� go z bazy.");
define("_AM_WFD_BROKEN_DELETEDESC", "<b>Usu�</b> the reported download data and i raporty o uszkodzonych linkach dla pliku broken file reports for the file.");
define("_AM_WFD_BROKEN_EDITDESC", "<b>Edytuj</b> Download by usun�� problem.");
define("_AM_WFD_BROKEN_ACKDESC", "<b>Potwierd�</b> Ustaw status powierdzenia raportu.");
define("_AM_WFD_BROKEN_CONFIRMDESC", "<b>Niepotwierdzony</b> Ustaw status niepotwierdzenia raportu.");

define("_AM_WFD_BROKEN_ID", "ID");
define("_AM_WFD_BROKEN_TITLE", "Tytu�");
define("_AM_WFD_BROKEN_REPORTER", "Autor raportu");
define("_AM_WFD_BROKEN_FILESUBMITTER", "Wysy�aj�cy");
define("_AM_WFD_BROKEN_DATESUBMITTED", "Data wys�ania");
define("_AM_WFD_BROKEN_ACTION", "Akcja");
define("_AM_WFD_BROKEN_NOFILEMATCH", "Nie ma �adnych raport�w spe�niaj�cych te kryteria");
define("_AM_WFD_BROKENFILEDELETED", "Opis pobierania i raport zosta�y usuni�te z bazy");

/*
* About defines
*/
define("_AM_WFD_BY", "przez");

//block defines
define("_AM_WFD_BADMIN","Blok administracji");
define("_AM_WFD_BLKDESC","Opis");
define("_AM_WFD_TITLE","Nazwa");
define("_AM_WFD_SIDE","Wyr�wnanie");
define("_AM_WFD_WEIGHT","Znaczenie");
define("_AM_WFD_VISIBLE","Widoczny");
define("_AM_WFD_ACTION","Akcja");
define("_AM_WFD_SBLEFT","lewy");
define("_AM_WFD_SBRIGHT","prawy");
define("_AM_WFD_CBLEFT","Centralny lewy");
define("_AM_WFD_CBRIGHT","Centralny prawy");
define("_AM_WFD_CBCENTER","Centralny �rodkowy");
define("_AM_WFD_ACTIVERIGHTS","Prawa aktywne");
define("_AM_WFD_ACCESSRIGHTS","Prawo dost�pu");

//image admin icon
define("_AM_WFD_ICO_EDIT","Edytuj");
define("_AM_WFD_ICO_DELETE","Usu�");
define("_AM_WFD_ICO_ONLINE","Online");
define("_AM_WFD_ICO_OFFLINE","Offline");
define("_AM_WFD_ICO_APPROVED","Zatwierd�");
define("_AM_WFD_ICO_NOTAPPROVED","Nie zatwierdzaj");

define("_AM_WFD_ICO_LINK","Pokrewny link");
define("_AM_WFD_ICO_URL","Dodaj pokrewny URL");
define("_AM_WFD_ICO_ADD","Dodaj");
define("_AM_WFD_ICO_APPROVE","Zatwierd�");
define("_AM_WFD_ICO_STATS","Statystyka");

define("_AM_WFD_ICO_IGNORE","Ignoruj");
define("_AM_WFD_ICO_ACK","Potwierdzenie odbioru raportu b��d�w");
define("_AM_WFD_ICO_REPORT","Potwierdza� odbi�r raportu?");
define("_AM_WFD_ICO_CONFIRM","Potwierdzanie raportu b��d�w");
define("_AM_WFD_ICO_CONBROKEN","Potwierdzi� raport b��d�w?");

//3.1
define("_AM_WFD_CCATEGORY_CHILDASPARENT", "Nie mo�esz ustawi� jako kategorii podrz�dnej gdy jest ona g��wn�");
define("_AM_WFD_FILE_SUBMITTERID", "ID dodaj�cego:<br /><br />Zostaw to jak jest, chyba, ze chcesz zmieni� dodaj�cego plik");

define("_AM_WFD_SMIRRORS", "Mirrory: ");
define("_AM_WFD_AREVIEWS_APPROVED", "Recenzja zosta�a zatwierdzona.");
define("_AM_WFD_DOWN_NOTSET", "Nie zdefiniowana �cie�ka uploadu");
define("_AM_WFD_DOWN_SERVERPATH", "�cie�ka do katalogu g��wnego XOOPS: ");
define("_AM_WFD_DOWN_UPLOADPATH", "Obecna �cie�ka uploadu: ");
define("_AM_WFD_DOWN_UPLOADPATHDSC", "Uwaga, �cie�ka uploadu *MUSI* zawiera� pe�n� fizyczn� �cie�k�.");
define("_AM_WFD_REV_REVIEWTITLE", "Tytu� recenzji");
define("_AM_WFD_REVIEW_APPROVETHIS", "Zatwierd� recenzj�");
define("_AM_WFD_REV_NOPUBLISHEDREVIEWS", "Nie ma �adnych recenzji");
define("_AM_WFD_REV_REVIEW_TOTAL", "Liczba recenzji:");
define("_AM_WFD_REV_REVIEW_WAITING", "Recenzje oczekuj�ce");
define("_AM_WFD_REV_REVIEW_PUBLISHED", "Opublikowane recenzje");
define("_AM_WFD_FILE_FILENAME", "Nazwa pliku:<br /><br /><span style='font-weight: normal;'>Uwaga: je�eli u�ywasz pliku lokalnego, musisz wpisa� poprawny typ pliku poni�ej!</span>");
define("_AM_WFD_FILE_FILETYPE", "Typ pliku: ");
define("_AM_WFD_AMIRRORS", "Zarz�dzanie mirrorami");
define("_AM_WFD_AMIRRORS_WAITING", "Mirrory oczekuj�ce na walidacj�:");
define("_AM_WFD_AMIRRORS_INFO", "Informacje o zarz�dzaniu mirrorami");
define("_AM_WFD_AMIRRORS_APPROVE", "<b>Zatwierd�</b> nowy mirror bez walidacji.");
define("_AM_WFD_AMIRRORS_EDIT", "<b>Edytuj</b> nowy mirror i potem zatwierd�.");
define("_AM_WFD_AMIRRORS_DELETE", "<b>Usu�</b> nowy mirror.");
define("_AM_WFD_MIRROR_MIRRORTITLE", "Mirror Host");
define("_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS", "Nie ma �adnych mirror�w");
define("_AM_WFD_MIRROR_MIRROR_TOTAL", "Liczba mirror�w:");
define("_AM_WFD_MIRROR_MIRROR_WAITING", "Oczekuj�ce mirrory");
define("_AM_WFD_MIRROR_MIRROR_PUBLISHED", "Opublikowane mirrory");
define("_AM_WFD_MIRROR_SNEWMNAMEDESC", "Zatwierd� mirror: ");
define("_AM_WFD_MIRROR_ID", "ID");
define("_AM_WFD_MIRROR_TITLE", "Tytu�");
define("_AM_WFD_MIRROR_MUSTBEVALID", "Logo strony domowej musi by� obrazem umieszczonym w katalogu %s (np. shot.gif). Pozostaw puste, je�eli nie chcesz u�ywa� obrazka.");
define("_AM_WFD_MIRROR_POSTER", "Dodaj�cy");
define("_AM_WFD_MIRROR_SUBMITDATE", "Dodano");
define("_AM_WFD_MIRROR_FHOMEURLTITLE", "Tytu� strony domowej: ");
define("_AM_WFD_MIRROR_FHOMEURL", "URL strony domowej: ");
define("_AM_WFD_MIRROR_UPLOADIMAGE", "Wrzu� logo strony:<br /><br />Ma�e logo reprezentuj�ce twoj� stron�.");
define("_AM_WFD_MIRROR_MIRRORIMAGE", "Logo strony:");
define("_AM_WFD_MIRROR_CONTINENT", "Kontynent:");
define("_AM_WFD_MIRROR_LOCATION", "Po�o�enie:<br /><br />np: Pozna�, PL");
define("_AM_WFD_MIRROR_DOWNURL", "URL pliku:<br /><br />Wpisz url do pliku.");
define("_AM_WFD_MIRROR_FAPPROVE", "Zatwierd� mirror: ");
define("_AM_WFD_MIRROR_ACTION", "Akcja");
define("_AM_WFD_MIRROR_NOWAITINGMIRRORS", "Nie ma �adnych oczekuj�cych mirror�w.");
define("_AM_WFD_MIRROR_MIRROR_UPDATED", "Zaznaczony mirror pomy�lnie dodany.");
define("_AM_WFD_MIRROR_APPROVETHIS", "Zatwierd� mirror");
define("_AM_WFD_CONT1","Aftyka");
define("_AM_WFD_CONT2","Antarktyda");
define("_AM_WFD_CONT3","Azja");
define("_AM_WFD_CONT4","Europa");
define("_AM_WFD_CONT5","Ameryka P�nocna");
define("_AM_WFD_CONT6","Ameryka Po�udniowa");
define("_AM_WFD_CONT7","Oceania");
define("_AM_WFD_HELP","Pomoc");

//3.2
define("_AM_WFD_FFS_SUBMITBROKEN", "Dodaj");
define("_AM_WFD_FFS_STANDARD_FORM", "Nie, u�yj standardowego formularza");
define("_AM_WFD_FFS_CUSTOM_FORM", "U�yj w�asnego formularza dla tej kategorii?");
define("_AM_WFD_FFS_DOWNLOADTITLE", "Dodawanie pliku '{category}'.");
define("_AM_WFD_FFS_EDITDOWNLOADTITLE", "Edytowanie pliku '{category}'.");
define("_AM_WFD_FFS_BACK", "Powr�t");
define("_AM_WFD_FFS_RELOAD", "Od�wie�");
define("_MD_WFD_CATEGORYC", "Kategoria: "); // _MD to reuse the category form
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Jak� kategori� pliku chciaby� doda�?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Szczeg�owe informacje:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "W�asne informacje:");
define("_MD_WFD_FILETITLE", "Tytu� downloadu: ");
define("_MD_WFD_DLURL", "URL: ");
define("_MD_WFD_UPLOAD_FILEC", "Wrzu� plik: ");
define("_MD_WFD_DESCRIPTION", "Opis");
define("_AM_WFD_DOWN_METAVERSION", "<b>Wersja WF-Downloads Meta:<b> ");

define("_AM_WFD_GOMOD", "Id� do modu�u");
define("_AM_WFD_UPDATE_MODULE", "Aktualizuj modu�");
define("_AM_WFD_DB_IMPORT", "Importuj");
define("_AM_WFD_FILE_SUMMARY", "Podsumowanie");

//3.2rc2
define("_AM_WFD_MOD_VERSIONTYPES", "Status: ");
define("_AM_WFD_FILE_VERSIONTYPES", "Status: ");
?>