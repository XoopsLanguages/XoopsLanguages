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
define("_AM_WFD_BDELETE", "Usuń");
define("_AM_WFD_BADD", "Dodaj");
define("_AM_WFD_BAPPROVE", "Zatwierdź");
define("_AM_WFD_BIGNORE", "Ignoruj");
define("_AM_WFD_BCANCEL", "Anuluj");
define("_AM_WFD_BSAVE", "Zapisz");
define("_AM_WFD_BRESET", "Wyczyść");
define("_AM_WFD_BMOVE", "Przenieś pliki");
define("_AM_WFD_BUPLOAD", "Załaduj");
define("_AM_WFD_BDELETEIMAGE", "Usuń zaznaczony obraz");
define("_AM_WFD_BRETURN", "Return to where you where!");
define("_AM_WFD_DBERROR", "Błąd dostępu do bazy danych: proszę zgłosić ten błąd na stronie www.SmartFactory.ca");
//Banned Users
define("_AM_WFD_NONBANNED", "Nie zablokowany");
define("_AM_WFD_BANNED", "Zablokowany");
define("_AM_WFD_EDITBANNED", "Edytuj zablokowanych użytkowników");
// Other Options
define("_AM_WFD_TEXTOPTIONS", "Opcje tekstu:");
define("_AM_WFD_DISABLEHTML", "Ukryj tagi HTML");
define("_AM_WFD_DISABLESMILEY", "Ukryj emotikonki");
define("_AM_WFD_DISABLEXCODE", " Ukryj kod XOOPSa");
define("_AM_WFD_DISABLEIMAGES", "Ukryj obrazy");
define("_AM_WFD_DISABLEBREAK", "Używaj konwersji łamania tekstu Xoopsa?");
define("_AM_WFD_UPLOADFILE", "Plik został załadowany pomyślnie");
define("_AM_WFD_NOMENUITEMS", "No menu items within the menu");

// Admin Bread crumb
define("_AM_WFD_PREFS", "Preferencje");
define("_AM_WFD_PERMISSIONS", "Zezwolenie");
define("_AM_WFD_BINDEX", "Strona główna");
define("_AM_WFD_BLOCKADMIN", "Bloki");
define("_AM_WFD_GOMODULE", "Idź do modułu");
define("_AM_WFD_BHELP", "Pomoc");
define("_AM_WFD_ABOUT", "About");
// Admin Summary
define("_AM_WFD_SCATEGORY", "Kategoria: ");
define("_AM_WFD_SFILES", "Pliki: ");
define("_AM_WFD_SNEWFILESVAL", "Wysłano: ");
define("_AM_WFD_SMODREQUEST", "Modyfikowane: ");
define("_AM_WFD_SREVIEWS", "Recenzje: ");
// Admin Main Menu
define("_AM_WFD_MCATEGORY", "Zarządzanie kategoriami");
define("_AM_WFD_MDOWNLOADS", "Zarządzanie plikiem");
define("_AM_WFD_INDEXPAGE", "Zarządzanie stroną główną");
define("_AM_WFD_MUPLOADS", "Załaduj obraz");
define("_AM_WFD_MMIMETYPES", "Zarządzanie rodzajami plików");
define("_AM_WFD_MCOMMENTS", "Komentarze");
define("_AM_WFS_MVOTEDATA", "Dane głosów");
// waiting reviews
define("_AM_WFD_AREVIEWS", "Zarządzanie recenzjami");
define("_AM_WFD_AREVIEWS_WAITING", "Recenzje oczekujące na zatwierdzenie:");
define("_AM_WFD_AREVIEWS_INFO", "Informacje zarządzania recenzjami");
define("_AM_WFD_AREVIEWS_APPROVE", "<b>Zatwierdź</b> Nowe recenzje bez zatwierdzania.");
define("_AM_WFD_AREVIEWS_EDIT", "<b>Edytuj</b> Nowe recenzja i jej akceptacja.");
define("_AM_WFD_AREVIEWS_DELETE", "<b>Usuń</b> informację nowej recenzji.");

// Catgeory defines
define("_AM_WFD_CCATEGORY_CREATENEW", "Stwórz nową kategorię");
define("_AM_WFD_CCATEGORY_MODIFY", "Modyfikuj kategorię");
define("_AM_WFD_CCATEGORY_MOVE", "Przenieś pliki do kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_TITLE", "Nazwa kategorii:");
define("_AM_WFD_CCATEGORY_MODIFY_FAILED", "Błąd przeniesienia plików: Nie można przenieść do tej kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_FAILEDT", " Błąd przeniesienia plików: Nie można znaleźć tej kategorii");
define("_AM_WFD_CCATEGORY_MODIFY_MOVED", "Przeniesione pliki i kategoria zostały usunięte");
define("_AM_WFD_CCATEGORY_CREATED", "Stworzenie nowej kategorii i uaktualnienie bazy danych przebiegło pomyślnie");
define("_AM_WFD_CCATEGORY_MODIFIED", "Zmiana zaznaczonej kategorii i uaktualnienie bazy danych przebiegło pomyślnie");
define("_AM_WFD_CCATEGORY_DELETED", "Usunięcie zanaczonej kategorii  i uaktualnienie bazy danych przebiegło pomyślnie");
define("_AM_WFD_CCATEGORY_AREUSURE", "OSTRZEŻENIE: Jesteś pewien, że chcesz usunąć tę kategorię, jej pliki i komentarze?");
define("_AM_WFD_CCATEGORY_NOEXISTS", "Musisz stworzyć kategorię zanim dodasz nowy plik");
define("_AM_WFD_FCATEGORY_GROUPPROMPT", "Kontrola dostępu do kategorii:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Zaznacz grupę użytkowników, którzy mają mieć dostęp do tej kategorii.</span></div>");
define("_AM_WFD_FCATEGORY_TITLE", "Nazwa kategorii:");
define("_AM_WFD_FCATEGORY_WEIGHT", "Ważność kategorii:");
define("_AM_WFD_FCATEGORY_SUBCATEGORY", "Dodaj jako podkategorię:");
define("_AM_WFD_FCATEGORY_CIMAGE", "Zaznacz obraz kategorii:");
define("_AM_WFD_FCATEGORY_DESCRIPTION", "Dodaj opis kategorii:");
define("_AM_WFD_FCATEGORY_SUMMARY", "Dodaj streszczenie kategorii:");
/*
* Index page Defines
*/
define("_AM_WFD_IPAGE_UPDATED", "Modyfikacja strony głównej uaktualnienie bazy danych przebiegło pomyślnie!");
define("_AM_WFD_IPAGE_INFORMATION", "Informacje strony głównej");
define("_AM_WFD_IPAGE_MODIFY", "Modyfikuj stronę główną");
define("_AM_WFD_IPAGE_CIMAGE", "Wybierz obraz logo:");
define("_AM_WFD_IPAGE_CTITLE", "Tytuł strony:");
define("_AM_WFD_IPAGE_CHEADING", "Nagłówek strony:");
define("_AM_WFD_IPAGE_CHEADINGA", "Wyrównanie nagłówka strony:");
define("_AM_WFD_IPAGE_CFOOTER", "stopka strony:");
define("_AM_WFD_IPAGE_CFOOTERA", "Wyrównanie stopki:");
define("_AM_WFD_IPAGE_CLEFT", "Wyrównanie w lewo");
define("_AM_WFD_IPAGE_CCENTER", "Do środka");
define("_AM_WFD_IPAGE_CRIGHT", "Wyrównanie w prawo");
/*
*  Permissions defines
*/
define("_AM_WFD_PERM_MANAGEMENT", "Zarządzanie dostępem");
define("_AM_WFD_PERM_PERMSNOTE", "<div><b>UWAGA:</b> Pamiętaj, że nawet jeśli ustawisz właściwe zezwolenia do przeglądania, grupa może nie widzieć artykułów lub bloków jeśli dodatkowo nie zezwolisz grupie na dostęp do modułu.
Aby to zrobić, idź do <b> System Admin > Grupy</b>, wybierz odpowiednią grupę i zaznacz pole wyboru aby zezwolić jej członkom na dostęp.</div>");
define("_AM_WFD_PERM_CPERMISSIONS", "Dostęp do kategorii");
define("_AM_WFD_PERM_CSELECTPERMISSIONS", "Zaznacz kategorie do której dana grupa użytkowników ma  mieć dostęp");
define("_AM_WFD_PERM_CNOCATEGORY", "Nie można ustanowić praw dostępu: nie została utworzona jeszcze żadna kategoria!");
define("_AM_WFD_PERM_FPERMISSIONS", "Dostęp do pliku");
define("_AM_WFD_PERM_FNOFILES", "Nie można ustanowić praw dostępu: jeszcze żaden plik nie został dodany!");
define("_AM_WFD_PERM_FSELECTPERMISSIONS", "Zaznacz pliki do których dana grupa użytkowników będzie miała dostęp");
/*
* Upload defines
*/
define("_AM_WFD_DOWN_IMAGEUPLOAD", " Obraz został pomyślnie załadowany na serwer");
define("_AM_WFD_DOWN_NOIMAGEEXIST", " Błąd: Zaznaczony plik  nie został załadowany.  Spróbuj ponownie!");
define("_AM_WFD_DOWN_IMAGEEXIST", "Obraz już istnieje !");
define("_AM_WFD_DOWN_FILEDELETED", "Plik zostanie usunięty.");
define("_AM_WFD_DOWN_FILEERRORDELETE", "Błąd usunięcia pliku: plik nie został znaleziony.");
define("_AM_WFD_DOWN_NOFILEERROR", "Błąd usunięcia pliku: żaden plik nie został wybrany do usunięcia.");
define("_AM_WFD_DOWN_DELETEFILE", "OSTRZEŻENIE: Jesteś pewien, że chcesz usunąc ten plik?");
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
define("_AM_WFD_DOWN_GDON", "<b>Aktywne</b> (Miniaturki dostępne)");
define("_AM_WFD_DOWN_GDOFF", "<b>Nieaktywne</b> (Miniaturki niedostępne)");
define("_AM_WFD_DOWN_OFF", "<b>WYŁĄCZONE</b>");
define("_AM_WFD_DOWN_ON", "<b>WŁĄCZONE</b>");
define("_AM_WFD_DOWN_CATIMAGE", "Obraz kategorii");
define("_AM_WFD_DOWN_SCREENSHOTS", "Obraz zrzutu");
define("_AM_WFD_DOWN_MAINIMAGEDIR", "Katalog obrazów");
define("_AM_WFD_DOWN_FCATIMAGE", "Ścieżka dostępu do katalogu obrazów kategorii");
define("_AM_WFD_DOWN_FSCREENSHOTS", "Ścieżka dostępu do katalogu zrzutów");
define("_AM_WFD_DOWN_FMAINIMAGEDIR", "Główna sieżka dostępu do obrazów");
define("_AM_WFD_DOWN_FUPLOADIMAGETO", "Dodany obraz: ");
define("_AM_WFD_DOWN_FUPLOADPATH", "Ścieżka dostępu dodanego pliku: ");
define("_AM_WFD_DOWN_FUPLOADURL", "Dodaj URL: ");
define("_AM_WFD_DOWN_FOLDERSELECTION", "Zaznacz katalog przeznaczenia:");
define("_AM_WFD_DOWN_FSHOWSELECTEDIMAGE", "Pokaż wybrany obraz:");
define("_AM_WFD_DOWN_FUPLOADIMAGE", "Dodaj nowy obraz do wybranego katalogu przeznaczenia :");

// Main Index defines
define("_AM_WFD_MINDEX_DOWNSUMMARY", "Podsumowanie modułu Admina");
define("_AM_WFD_MINDEX_PUBLISHEDDOWN", "Opublikowane pliki:");
define("_AM_WFD_MINDEX_AUTOPUBLISHEDDOWN", "Autopublikowanie plików:");
define("_AM_WFD_MINDEX_AUTOEXPIRE", "Autowygaśnięcie ważności pilków:");
define("_AM_WFD_MINDEX_OFFLINEDOWN", "Pliki offline:");
define("_AM_WFD_MINDEX_ID", "ID");
define("_AM_WFD_MINDEX_TITLE", "Nazwa pliku");
define("_AM_WFD_MINDEX_POSTER", "Dodający");
define("_AM_WFD_MINDEX_SUBMITTED", " Data dodania");
define("_AM_WFD_MINDEX_ONLINESTATUS", "Status Online");
define("_AM_WFD_MINDEX_PUBLISHED", "Opublikowane");
define("_AM_WFD_MINDEX_ACTION", "Akcja");
define("_AM_WFD_MINDEX_NODOWNLOADSFOUND", "UWAGA:  Plik nie spełnia kryterii");
define("_AM_WFD_MINDEX_PAGE", "<b>Strona:<b> ");
define('_AM_WFD_MINDEX_PAGEINFOTXT', '<ul><li>Detale głównej strony WF-Downloads </li><li>Możesz łatwo zmieniać logo, nagłówek, nagłówek strony głównej i tekst stopki, tak by dostosować do własnego gustu</li></ul><br /><br />Notka: Do chwili wyboru nowego loga będzie używane logo WF-Downloads.');

// Submitted Files
define("_AM_WFD_SUB_SUBMITTEDFILES", "Dodawanie plików");
define("_AM_WFD_SUB_FILESWAITINGINFO", "Informacja o oczekujących plikach");
define("_AM_WFD_SUB_FILESWAITINGVALIDATION", "Zatwierdzanie plików oczekujących: ");
define("_AM_WFD_SUB_APPROVEWAITINGFILE", "<b>Zatwierdź</b> Informacja o nowym pliku bez zatwierdzania.");
define("_AM_WFD_SUB_EDITWAITINGFILE", "<b>Edytuj</b>  Informacja o nowym pliku i jego zatwierdzenie.");
define("_AM_WFD_SUB_DELETEWAITINGFILE", "<b>Usuń</b> Informacja o nowym pliku.");
define("_AM_WFD_SUB_NOFILESWAITING", "Nie ma żadnych plików spełaniających kryteria");
define("_AM_WFD_SUB_NEWFILECREATED", "Dodanie danych nowego pliku i aktualizacja bazy danych przebiegły pomyślnie");
// Mimetypes
define("_AM_WFD_MIME_ID", "ID");
define("_AM_WFD_MIME_EXT", "EXT");
define("_AM_WFD_MIME_NAME", "Typ aplikacji");
define("_AM_WFD_MIME_ADMIN", "Admin");
define("_AM_WFD_MIME_USER", "Użytkownik");
// Mimetype Form
define("_AM_WFD_MIME_CREATEF", "Stwórz rozszerzenie");
define("_AM_WFD_MIME_MODIFYF", "Modyfikuj rozszerzenie");
define("_AM_WFD_MIME_EXTF", "Rozszerzenie pliku:");
define("_AM_WFD_MIME_NAMEF", "Typ aplikacji/Nazwa:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz nazwę aplikacji skojarzonej z danym rozszerzeniem.</span></div>");
define("_AM_WFD_MIME_TYPEF", "Rozszerzenie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz rozszerzenie skojarzone z zawartością pliku. Każde rozszerzenie musi być oddzielone spacją.</span></div>");
define("_AM_WFD_MIME_ADMINF", "Dopuszczone rozszerzenia plików przez Administratora");
define("_AM_WFD_MIME_ADMINFINFO", "<b>Rozszerzenia plików dopuszczone do dodawania przez Administratora:</b>");
define("_AM_WFD_MIME_USERF", "Dopuszczone rozszerzenia plików użytkownika");
define("_AM_WFD_MIME_USERFINFO", "<b>Rozszerzenia plików dopuszczone do dodawania przez uzytkowników:</b>");
define("_AM_WFD_MIME_NOMIMEINFO", "Nie wybrano rozszerzenia.");
define("_AM_WFD_MIME_FINDMIMETYPE", "Znajdź nowe rozszerzenie:");
define("_AM_WFD_MIME_EXTFIND", "Znajdź zawartośc pliku:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wpisz zawartość pliku, który chcesz znaleźć.</span></div>");
define("_AM_WFD_MIME_INFOTEXT", "<ul><li>Nowe rozszerzenie może być łatwo dodane, edytowane lub usuwane za pomocą tego formularza.</li>
	<li>Znajdź nowe rozszerzenia poprzez inne strony.</li>
	<li>Podgląd rozszerzenia dla dodawania przez Admina i użytkowników.</li>
	<li>Zmień status dodanego rozszerzenia.</li></ul>
	");

// Mimetype Buttons
define("_AM_WFD_MIME_CREATE", "Utwórz");
define("_AM_WFD_MIME_CLEAR", "Wyczyść");
define("_AM_WFD_MIME_CANCEL", "Anuluj");
define("_AM_WFD_MIME_MODIFY", "Modyfikuj");
define("_AM_WFD_MIME_DELETE", "Usuń");
define("_AM_WFD_MIME_FINDIT", "Pobierz zawartość!");
// Mimetype Database
define("_AM_WFD_MIME_DELETETHIS", "Usunąć zaznaczone rozszerzenie?");
define("_AM_WFD_MIME_MIMEDELETED", "Rozszerzenie %s zostanie usunięte");
define("_AM_WFD_MIME_CREATED", "Informacja o rozszerzeniu została utworzona");
define("_AM_WFD_MIME_MODIFIED", "Informacja o rozszerzeniu została zmodyfikowana");
// Vote Information
define("_AM_WFD_VOTE_RATINGINFOMATION", "Informacja o głosach");
define("_AM_WFD_VOTE_TOTALVOTES", "Wszystkich głosów: ");
define("_AM_WFD_VOTE_REGUSERVOTES", "Głosy zarejestrowanych użytkowników: %s");
define("_AM_WFD_VOTE_ANONUSERVOTES", "Głosy użytkowników anonimowych: %s");
define("_AM_WFD_VOTE_USER", "Użytkownik");
define("_AM_WFD_VOTE_IP", "Adres IP");
define("_AM_WFD_VOTE_USERAVG", "Średnia głosów użytkownika");
define("_AM_WFD_VOTE_TOTALRATE", "Suma ocen");
define("_AM_WFD_VOTE_DATE", "Submitted");
define("_AM_WFD_VOTE_RATING", "Oceny");
define("_AM_WFD_VOTE_NOREGVOTES", "Nie ma głosów użytkowników zarejestrowanych");
define("_AM_WFD_VOTE_NOUNREGVOTES", "Nie ma głosów użytkowników niezarejestrowanych");
define("_AM_WFD_VOTE_VOTEDELETED", "Dane głosowań zostały usunięte.");
define("_AM_WFD_VOTE_ID", "ID");
define("_AM_WFD_VOTE_FILETITLE", "Nazwa pliku");
define("_AM_WFD_VOTE_DISPLAYVOTES", "Informacja o danych głosowania");
define("_AM_WFD_VOTE_NOVOTES", "Nie ma żadnych głosów do wyświetlenia");
define("_AM_WFD_VOTE_DELETE", "Nie ma żadnych głosów do wyświetlenia");
define("_AM_WFD_VOTE_DELETEDSC", "<b>Usunięto</b> wybrane informacje o głosowaniu z bazy danych.");

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
define("_AM_WFD_MOD_TOTMODREQUESTS", "Suma żądań modyfikacji: ");
define("_AM_WFD_MOD_MODREQUESTS", "Pliki zmodyfikowane");
define("_AM_WFD_MOD_MODREQUESTSINFO", "Informacje o modyfikacjach plików");
define("_AM_WFD_MOD_MODID", "ID");
define("_AM_WFD_MOD_MODTITLE", "Tytuł");
define("_AM_WFD_MOD_MODPOSTER", "Original Poster: ");
define("_AM_WFD_MOD_DATE", "Wysłane");
define("_AM_WFD_MOD_NOMODREQUEST", "Żądanie nie spełnia kryterii");
define("_AM_WFD_MOD_TITLE", "Nazwa pobieranego pliku: ");
define("_AM_WFD_MOD_LID", "Download ID: ");
define("_AM_WFD_MOD_CID", "Kategoria: ");
define("_AM_WFD_MOD_URL", "URL pobierania: ");
define("_AM_WFD_MOD_MIRROR", "Lustro pobierania: ");
define("_AM_WFD_MOD_SIZE", "Rozmiar pobierania: ");
define("_AM_WFD_MOD_PUBLISHER", "Publikujący: ");
define("_AM_WFD_MOD_LICENSE", "Licencja oprogramowania: ");
define("_AM_WFD_MOD_FEATURES", "Słowa kluczowe: ");
define("_AM_WFD_MOD_FORUMID", "Forum: ");
define("_AM_WFD_MOD_LIMITATIONS", "Ograniczenia oprogramowania: ");
define("_AM_WFD_MOD_DHISTORY", "Historia pobierania: ");
define("_AM_WFD_MOD_SCREENSHOT", "Obraz zrzutu ekranu: ");
define("_AM_WFD_MOD_HOMEPAGE", "Strona główna: ");
define("_AM_WFD_MOD_HOMEPAGETITLE", "Tytuł strony głównej: ");
define("_AM_WFD_MOD_VERSION", "Wersja: ");
define("_AM_WFD_MOD_SHOTIMAGE", "Obraz zrzutu: ");
define("_AM_WFD_MOD_FILESIZE", "Rozmiar  pliku: ");
define("_AM_WFD_MOD_PLATFORM", "Platforma: ");
define("_AM_WFD_MOD_PRICE", "Cena: ");
define("_AM_WFD_MOD_LICENCE", "Licencja: ");
define("_AM_WFD_MOD_DESCRIPTION", "Opis: ");
define("_AM_WFD_MOD_REQUIREMENTS", "Wymagania: ");
define("_AM_WFD_MOD_MODIFYSUBMITTER", "Dodajšcy: ");
define("_AM_WFD_MOD_MODIFYSUBMIT", "Dodajšcy");
define("_AM_WFD_MOD_PROPOSED", "Propozycja szczegółów downloadu");
define("_AM_WFD_MOD_ORIGINAL", "Szczegóły downloadu");
define("_AM_WFD_MOD_REQDELETED", "Żądanie modyfikacji zostało usunięte z bazy danych");
define("_AM_WFD_MOD_REQUPDATED", "Wybrana modyfikacja pobierania i uaktualnienie bazy danych przebiegło pomyślnie");
define('_AM_WFD_MOD_VIEW','Podgląd');

//Reviews defines
define("_AM_WFD_REV_SNEWMNAMEDESC", "Zatwierdzenie komentarza: ");
define("_AM_WFD_REV_ID", "ID");
define("_AM_WFD_REV_TITLE", "Tytuł");
define("_AM_WFD_REV_POSTER", "Wysyłający");
define("_AM_WFD_REV_SUBMITDATE", "Wysłano");
define("_AM_WFD_REV_FTITLE", "Tytuł komentarza: ");
define("_AM_WFD_REV_FRATING", "Ocena: ");
define("_AM_WFD_REV_FDESCRIPTION", "Opis: ");
define("_AM_WFD_REV_FAPPROVE", "Zatwierdzenie: ");
define("_AM_WFD_REV_ACTION", "Akcja");
define("_AM_WFD_REV_NOWAITINGREVIEWS", "Nie znaleziono żadnych komentarzy oczekujących na zatwierdzenie");
define("_AM_WFD_REV_REVIEW_UPDATED", "Modyfikacja zaznaczonych komentarzy i uaktualnienie bazy danych przebiegło pomyślnie");

//File management
define("_AM_WFD_FILE_ID", "ID pliku: ");
define("_AM_WFD_FILE_IP", "Adres IP dodającego: ");
define("_AM_WFD_FILE_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Dopuszczone rozszerzenia plików</b>:</div>");
define("_AM_WFD_FILE_MODIFYFILE", "Modyfikacje pliku");
define("_AM_WFD_FILE_CREATENEWFILE", "Dodaj nowy plik");
define("_AM_WFD_FILE_TITLE", "Nazwa pliku: ");
define("_AM_WFD_FILE_DLURL", "Adres URL: ");
define("_AM_WFD_FILE_MIRRORURL", "Mirror pliku: ");
define("_AM_WFD_FILE_DESCRIPTION", "Opis pliku: ");
define("_AM_WFD_FILE_DUPLOAD", "Dodanie pliku:");
define("_AM_WFD_FILE_CATEGORY", "Wybierz kategorię: ");
define("_AM_WFD_FILE_HOMEPAGETITLE", "Tytuł strony głównej: ");
define("_AM_WFD_FILE_HOMEPAGE", "Strona główna: ");
define("_AM_WFD_FILE_SIZE", "Rozmiar pliku: ");
define("_AM_WFD_FILE_VERSION", "Wersja: ");
define("_AM_WFD_FILE_PUBLISHER", "Publikujący plik: ");
define("_AM_WFD_FILE_PLATFORM", "Platforma: ");
define("_AM_WFD_FILE_LICENCE", "Licencja: ");
define("_AM_WFD_FILE_LIMITATIONS", "Ograniczenia: ");
define("_AM_WFD_FILE_PRICE", "Cena: ");
define("_AM_WFD_FILE_KEYFEATURES", "Słowa kluczowe:<br /><br /><span style='font-weight: normal;'>Słowa oddzielaj znakiem  |</span>");
define("_AM_WFD_FILE_REQUIREMENTS", "Wymagania systemowe:<br /><br /><span style='font-weight: normal;'>Wymagania oddzielaj znakiem |</span>");
define("_AM_WFD_FILE_HISTORY", "Edycja historii pobierania:<br /><br /><span style='font-weight: normal;'>Dodaj nową historię i używaj tego pola tylko jeśli  potrzebujesz edytować poprzednią historię.</span>");
define("_AM_WFD_FILE_HISTORYD", "Dodaj nową historię pobierania:<br /><br /><span style='font-weight: normal;'>Numer wersji i data będzie utworzona automatycznie</span>");
define("_AM_WFD_FILE_HISTORYVERS", "<b>Wersja: </b>");
define("_AM_WFD_FILE_HISTORDATE", " <b>Aktualizowano:</b> ");
define("_AM_WFD_FILE_FILESSTATUS", "Dodaj pobieranie offline?<br /><br /><span style='font-weight: normal;'>Pobieranie nie będzie widoczne dla wszystkich użytkowników.</span>");
define("_AM_WFD_FILE_SETASUPDATED", " Dodaj status pobierania i aktualizację?<br /><br /><span style='font-weight: normal;'>Dział będzie pokazywał ikonę aktualizacji.</span>");
define("_AM_WFD_FILE_SHOTIMAGE", "Wybierz obraz zrzutu: ");
define("_AM_WFD_FILE_DISCUSSINFORUM", "Dodać dyskusję na forum?");
define("_AM_WFD_FILE_PUBLISHDATE", "Data publikacji pliku:");
define("_AM_WFD_FILE_EXPIREDATE", "Data ważności pliku:");
define("_AM_WFD_FILE_CLEARPUBLISHDATE", "<br /><br />Usuń datę publikacji:");
define("_AM_WFD_FILE_CLEAREXPIREDATE", "<br /><br />Usuń datę ważności:");
define("_AM_WFD_FILE_PUBLISHDATESET", "Dodaj datę publikacji: ");
define("_AM_WFD_FILE_SETDATETIMEPUBLISH", "Dodaj datę/czas publikacji");
define("_AM_WFD_FILE_SETDATETIMEEXPIRE", " Dodaj datę/czas ważności");
define("_AM_WFD_FILE_SETPUBLISHDATE", "<b>Dodaj datę publikacji: </b>");
define("_AM_WFD_FILE_SETNEWPUBLISHDATE", "<b>Dodaj nową datę publikacji: </b><br />Opublikowano:");
define("_AM_WFD_FILE_SETPUBDATESETS", "<b>Dodaj datę publikacji: </b><br />Data publikacji:");
define("_AM_WFD_FILE_EXPIREDATESET", " Dodaj datę ważności: ");
define("_AM_WFD_FILE_SETEXPIREDATE", "<b>Dodaj datę ważności: </b>");
define("_AM_WFD_FILE_MUSTBEVALID", "Obraz rzutu musi być prawidłowym formatem obrazu w  katalogu %s  (np: shot.gif). Zostaw puste pole jeśli nie ma tam żadnego pliku.");
define("_AM_WFD_FILE_EDITAPPROVE", "Zatwierdzenie:");
define("_AM_WFD_FILE_NEWFILEUPLOAD", "Dodanie nowego pliku i aktualizacja bazy danych przebiegło pomyślnie");
define("_AM_WFD_FILE_FILEMODIFIEDUPDATE", "Modyfikacja zaznaczonego pliku i aktualizacja bazy danych przebiegła pomyślnie");
define("_AM_WFD_FILE_REALLYDELETEDTHIS", "Naprawdę chcesz usunąć zaznaczony plik?");
define("_AM_WFD_FILE_FILEWASDELETED", "Plik %s został pomyślnie usunięty z bazy danych!");
define("_AM_WFD_FILE_USE_UPLOAD_TITLE", " Użyj nazwy dodawanego pliku jako nazwy pliku.");
define("_AM_WFD_FILE_FILEAPPROVED", "Zatwierdzenie pliku i aktualizacja bazy danych przebiegła pomyślnie");
define("_AM_WFD_FILE_CREATENEWSSTORY", "<b>Stworzenie działu Nowości z działu Pobierania</b>");
define("_AM_WFD_FILE_SUBMITNEWS", "Dodać nowy plik jako element Nowości?");
define("_AM_WFD_FILE_NEWSCATEGORY", "Zaznacz kategorię Nowości do subskrybcji Nowości pobierania:");
define("_AM_WFD_FILE_NEWSTITLE", "Nazwa pliku w dziale Nowości:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Zostaw puste pole aby użyć nazwy pliku</span></div>");

/*
* Broken downloads defines
*/
define("_AM_WFD_SBROKENSUBMIT", "Linki uszkodzone: ");
define("_AM_WFD_BROKEN_FILE", "Raport uszkodzonych linków");
define("_AM_WFD_BROKEN_FILEIGNORED", "Raport błędów niepotwierdzonych został usunięty z bazy danych!");
define("_AM_WFD_BROKEN_NOWACK", "Status potwierdzenia zmieniono i zaktualizowano bazę danych!");
define("_AM_WFD_BROKEN_NOWCON", "Status niepoprawności zmieniono i zaktualizowano bazę danych!");
define("_AM_WFD_BROKEN_REPORTINFO", "Informacja raportu uszkodzonych linków");
define("_AM_WFD_BROKEN_REPORTSNO", "Oczekujące raporty:");
define("_AM_WFD_BROKEN_IGNOREDESC", "<b>Ignoruj</b> raport i tylko usuń go z bazy.");
define("_AM_WFD_BROKEN_DELETEDESC", "<b>Usuń</b> the reported download data and i raporty o uszkodzonych linkach dla pliku broken file reports for the file.");
define("_AM_WFD_BROKEN_EDITDESC", "<b>Edytuj</b> Download by usunąć problem.");
define("_AM_WFD_BROKEN_ACKDESC", "<b>Potwierdź</b> Ustaw status powierdzenia raportu.");
define("_AM_WFD_BROKEN_CONFIRMDESC", "<b>Niepotwierdzony</b> Ustaw status niepotwierdzenia raportu.");

define("_AM_WFD_BROKEN_ID", "ID");
define("_AM_WFD_BROKEN_TITLE", "Tytuł");
define("_AM_WFD_BROKEN_REPORTER", "Autor raportu");
define("_AM_WFD_BROKEN_FILESUBMITTER", "Wysyłający");
define("_AM_WFD_BROKEN_DATESUBMITTED", "Data wysłania");
define("_AM_WFD_BROKEN_ACTION", "Akcja");
define("_AM_WFD_BROKEN_NOFILEMATCH", "Nie ma żadnych raportów spełniających te kryteria");
define("_AM_WFD_BROKENFILEDELETED", "Opis pobierania i raport zostały usunięte z bazy");

/*
* About defines
*/
define("_AM_WFD_BY", "przez");

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
define("_AM_WFD_CBCENTER","Centralny środkowy");
define("_AM_WFD_ACTIVERIGHTS","Prawa aktywne");
define("_AM_WFD_ACCESSRIGHTS","Prawo dostępu");

//image admin icon
define("_AM_WFD_ICO_EDIT","Edytuj");
define("_AM_WFD_ICO_DELETE","Usuń");
define("_AM_WFD_ICO_ONLINE","Online");
define("_AM_WFD_ICO_OFFLINE","Offline");
define("_AM_WFD_ICO_APPROVED","Zatwierdź");
define("_AM_WFD_ICO_NOTAPPROVED","Nie zatwierdzaj");

define("_AM_WFD_ICO_LINK","Pokrewny link");
define("_AM_WFD_ICO_URL","Dodaj pokrewny URL");
define("_AM_WFD_ICO_ADD","Dodaj");
define("_AM_WFD_ICO_APPROVE","Zatwierdź");
define("_AM_WFD_ICO_STATS","Statystyka");

define("_AM_WFD_ICO_IGNORE","Ignoruj");
define("_AM_WFD_ICO_ACK","Potwierdzenie odbioru raportu błędów");
define("_AM_WFD_ICO_REPORT","Potwierdzać odbiór raportu?");
define("_AM_WFD_ICO_CONFIRM","Potwierdzanie raportu błędów");
define("_AM_WFD_ICO_CONBROKEN","Potwierdzić raport błędów?");

//3.1
define("_AM_WFD_CCATEGORY_CHILDASPARENT", "Nie możesz ustawić jako kategorii podrzędnej gdy jest ona główną");
define("_AM_WFD_FILE_SUBMITTERID", "ID dodającego:<br /><br />Zostaw to jak jest, chyba, ze chcesz zmienić dodającego plik");

define("_AM_WFD_SMIRRORS", "Mirrory: ");
define("_AM_WFD_AREVIEWS_APPROVED", "Recenzja została zatwierdzona.");
define("_AM_WFD_DOWN_NOTSET", "Nie zdefiniowana ścieżka uploadu");
define("_AM_WFD_DOWN_SERVERPATH", "Ścieżka do katalogu głównego XOOPS: ");
define("_AM_WFD_DOWN_UPLOADPATH", "Obecna ścieżka uploadu: ");
define("_AM_WFD_DOWN_UPLOADPATHDSC", "Uwaga, ścieżka uploadu *MUSI* zawierać pełną fizyczną ścieżkę.");
define("_AM_WFD_REV_REVIEWTITLE", "Tytuł recenzji");
define("_AM_WFD_REVIEW_APPROVETHIS", "Zatwierdź recenzję");
define("_AM_WFD_REV_NOPUBLISHEDREVIEWS", "Nie ma żadnych recenzji");
define("_AM_WFD_REV_REVIEW_TOTAL", "Liczba recenzji:");
define("_AM_WFD_REV_REVIEW_WAITING", "Recenzje oczekujące");
define("_AM_WFD_REV_REVIEW_PUBLISHED", "Opublikowane recenzje");
define("_AM_WFD_FILE_FILENAME", "Nazwa pliku:<br /><br /><span style='font-weight: normal;'>Uwaga: jeżeli używasz pliku lokalnego, musisz wpisać poprawny typ pliku poniżej!</span>");
define("_AM_WFD_FILE_FILETYPE", "Typ pliku: ");
define("_AM_WFD_AMIRRORS", "Zarządzanie mirrorami");
define("_AM_WFD_AMIRRORS_WAITING", "Mirrory oczekujące na walidację:");
define("_AM_WFD_AMIRRORS_INFO", "Informacje o zarządzaniu mirrorami");
define("_AM_WFD_AMIRRORS_APPROVE", "<b>Zatwierdź</b> nowy mirror bez walidacji.");
define("_AM_WFD_AMIRRORS_EDIT", "<b>Edytuj</b> nowy mirror i potem zatwierdź.");
define("_AM_WFD_AMIRRORS_DELETE", "<b>Usuń</b> nowy mirror.");
define("_AM_WFD_MIRROR_MIRRORTITLE", "Mirror Host");
define("_AM_WFD_MIRROR_NOPUBLISHEDMIRRORS", "Nie ma żadnych mirrorów");
define("_AM_WFD_MIRROR_MIRROR_TOTAL", "Liczba mirrorów:");
define("_AM_WFD_MIRROR_MIRROR_WAITING", "Oczekujące mirrory");
define("_AM_WFD_MIRROR_MIRROR_PUBLISHED", "Opublikowane mirrory");
define("_AM_WFD_MIRROR_SNEWMNAMEDESC", "Zatwierdź mirror: ");
define("_AM_WFD_MIRROR_ID", "ID");
define("_AM_WFD_MIRROR_TITLE", "Tytuł");
define("_AM_WFD_MIRROR_MUSTBEVALID", "Logo strony domowej musi być obrazem umieszczonym w katalogu %s (np. shot.gif). Pozostaw puste, jeżeli nie chcesz używać obrazka.");
define("_AM_WFD_MIRROR_POSTER", "Dodający");
define("_AM_WFD_MIRROR_SUBMITDATE", "Dodano");
define("_AM_WFD_MIRROR_FHOMEURLTITLE", "Tytuł strony domowej: ");
define("_AM_WFD_MIRROR_FHOMEURL", "URL strony domowej: ");
define("_AM_WFD_MIRROR_UPLOADIMAGE", "Wrzuć logo strony:<br /><br />Małe logo reprezentujące twoją stronę.");
define("_AM_WFD_MIRROR_MIRRORIMAGE", "Logo strony:");
define("_AM_WFD_MIRROR_CONTINENT", "Kontynent:");
define("_AM_WFD_MIRROR_LOCATION", "Położenie:<br /><br />np: Poznań, PL");
define("_AM_WFD_MIRROR_DOWNURL", "URL pliku:<br /><br />Wpisz url do pliku.");
define("_AM_WFD_MIRROR_FAPPROVE", "Zatwierdź mirror: ");
define("_AM_WFD_MIRROR_ACTION", "Akcja");
define("_AM_WFD_MIRROR_NOWAITINGMIRRORS", "Nie ma żadnych oczekujących mirrorów.");
define("_AM_WFD_MIRROR_MIRROR_UPDATED", "Zaznaczony mirror pomyślnie dodany.");
define("_AM_WFD_MIRROR_APPROVETHIS", "Zatwierdź mirror");
define("_AM_WFD_CONT1","Aftyka");
define("_AM_WFD_CONT2","Antarktyda");
define("_AM_WFD_CONT3","Azja");
define("_AM_WFD_CONT4","Europa");
define("_AM_WFD_CONT5","Ameryka Północna");
define("_AM_WFD_CONT6","Ameryka Południowa");
define("_AM_WFD_CONT7","Oceania");
define("_AM_WFD_HELP","Pomoc");

//3.2
define("_AM_WFD_FFS_SUBMITBROKEN", "Dodaj");
define("_AM_WFD_FFS_STANDARD_FORM", "Nie, użyj standardowego formularza");
define("_AM_WFD_FFS_CUSTOM_FORM", "Użyj własnego formularza dla tej kategorii?");
define("_AM_WFD_FFS_DOWNLOADTITLE", "Dodawanie pliku '{category}'.");
define("_AM_WFD_FFS_EDITDOWNLOADTITLE", "Edytowanie pliku '{category}'.");
define("_AM_WFD_FFS_BACK", "Powrót");
define("_AM_WFD_FFS_RELOAD", "Odśwież");
define("_MD_WFD_CATEGORYC", "Kategoria: "); // _MD to reuse the category form
define("_MD_WFD_FFS_SUBMITCATEGORYHEAD", "Jaką kategorię pliku chciabyś dodać?");
define("_MD_WFD_FFS_DOWNLOADDETAILS", "Szczegółowe informacje:");
define("_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS", "Własne informacje:");
define("_MD_WFD_FILETITLE", "Tytuł downloadu: ");
define("_MD_WFD_DLURL", "URL: ");
define("_MD_WFD_UPLOAD_FILEC", "Wrzuć plik: ");
define("_MD_WFD_DESCRIPTION", "Opis");
define("_AM_WFD_DOWN_METAVERSION", "<b>Wersja WF-Downloads Meta:<b> ");

define("_AM_WFD_GOMOD", "Idź do modułu");
define("_AM_WFD_UPDATE_MODULE", "Aktualizuj moduł");
define("_AM_WFD_DB_IMPORT", "Importuj");
define("_AM_WFD_FILE_SUMMARY", "Podsumowanie");

//3.2rc2
define("_AM_WFD_MOD_VERSIONTYPES", "Status: ");
define("_AM_WFD_FILE_VERSIONTYPES", "Status: ");
?>