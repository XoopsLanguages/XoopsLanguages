<?php
//Polish translation by kaper@zk-p.pl

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MB_LOADED' ) ) {

define( 'MYALBUM_MB_LOADED' , 1 ) ;

//%%%%%%		Module Name 'myAlbum-P'		%%%%%

// New in myAlbum-P

// only "Y/m/d" , "d M Y" , "M d Y" can be interpreted
define( "_ALBM_DTFMT_YMDHI" , "d M Y H:i" ) ;

//define( "_ALBM_NEXT_BUTTON" , "Next" ) ;
//define( "_ALBM_REDOLOOPDONE" , "Done." ) ;

define( "_ALBM_BTN_SELECTALL" , "Zaznacz wszystkie" ) ;
define( "_ALBM_BTN_SELECTNONE" , "Kasuj zaznaczenia" ) ;
define( "_ALBM_BTN_SELECTRVS" , "Odwróć zaznaczenia" ) ;

define( "_ALBM_FMT_PHOTONUM" , "Zdjęć na stronę: %s" ) ;

//define( "_ALBM_AM_ADMISSION" , "Admit Photos" ) ;
//define( "_ALBM_AM_ADMITTING" , "Admitted photo(s)" ) ;
define( "_ALBM_AM_LABEL_ADMIT" , "Zatwierdź zaznaczone zdjęcia " ) ;
define( "_ALBM_AM_BUTTON_ADMIT" , "Zatwierdź" ) ;
define( "_ALBM_AM_BUTTON_EXTRACT" , "Znajdź wg numeru" ) ;

//define( "_ALBM_AM_PHOTOMANAGER" , "Photo Manager" ) ;
define( "_ALBM_AM_PHOTONAVINFO" , "Zdjęcia nr %s-%s (spośród %s)" ) ;
define( "_ALBM_AM_LABEL_REMOVE" , "" ) ;
define( "_ALBM_AM_BUTTON_REMOVE" , "Usuń zaznaczone" ) ;
define( "_ALBM_AM_JS_REMOVECONFIRM" , "Zaznaczone zdjęcia zostaną usunięte." ) ;
//define( "_ALBM_AM_LABEL_MOVE" , "Change category the photos checked" ) ;
//define( "_ALBM_AM_BUTTON_MOVE" , "Move" ) ;
define( "_ALBM_AM_BUTTON_UPDATE" , "Zmień" ) ;
//define( "_ALBM_AM_DEADLINKMAINPHOTO" , "The main image don't exist" ) ;

define( "_ALBM_RADIO_ROTATETITLE" , "Obrócenie obrazu" ) ;
define( "_ALBM_RADIO_ROTATE0" , "bez zmian" ) ;
define( "_ALBM_RADIO_ROTATE90" , "90 st. w prawo" ) ;
define( "_ALBM_RADIO_ROTATE180" , "180 stopni" ) ;
define( "_ALBM_RADIO_ROTATE270" , "90 st. w lewo" ) ;


// New MyAlbum 1.0.1 (and 1.2.0)
define("_ALBM_MOREPHOTOS","Więcej zdjęć od %s");
//define("_ALBM_REDOTHUMBS","Redo Thumbnails (<a href='redothumbs.php'>re-start</a>)");
//define("_ALBM_REDOTHUMBSINFO","Too large number may lead to server time out.");
//define("_ALBM_REDOTHUMBSNUMBER","Number of thumbs at a time");
//define("_ALBM_REDOING","Redoing: ");
//define("_ALBM_BACK","Return");
define("_ALBM_ADDPHOTO","Dodaj zdjęcie");


// New MyAlbum 1.0.0
define("_ALBM_PHOTOBATCHUPLOAD","Publikacja zdjęć z katalogu na serwerze");
define("_ALBM_PHOTOUPLOAD","Dodaj zdjęcie");
define("_ALBM_PHOTOEDITUPLOAD","Edycja zdjęcia");
define("_ALBM_MAXPIXEL","Dopuszczalna wielkość zdjęcia (px)");
define("_ALBM_MAXSIZE","Dopuszczalna wielkość pliku");
define("_ALBM_PHOTOTITLE","Tytuł");
define("_ALBM_PHOTOPATH","Ścieżka");
define("_ALBM_TEXT_DIRECTORY","Katalog ze zdjęciami");
define("_ALBM_DESC_PHOTOPATH","Ścieżka do katalogu na serwerze");
define("_ALBM_MES_INVALIDDIRECTORY","Błędna ścieżka");
define("_ALBM_MES_BATCHDONE","Opublikowano %s zdjęć.");
define("_ALBM_MES_BATCHNONE","Brak plików zdjęć w katalogu");
define("_ALBM_PHOTODESC","Opis");
define("_ALBM_PHOTOCAT","Kategoria");
define("_ALBM_SELECTFILE","Plik zdjęcia");
define("_ALBM_NOIMAGESPECIFIED","BŁĄD: nie wybrano pliku zdjęcia");
define("_ALBM_FILEERROR","BŁĄD: za duże zdjęcie");
define("_ALBM_FILEREADERROR","Błąd odczytu pliku zdjęcia");

define("_ALBM_BATCHBLANK","Puste pole - nazwa pliku jako tytuł <br>Tekst - tytuł w postaci <b>tekst numer</b> (1, 2, ...)");
//define("_ALBM_DELETEPHOTO","Delete?");
define("_ALBM_VALIDPHOTO","Aktywne");
define("_ALBM_PHOTODEL","Usunąć zdjęcie?");
define("_ALBM_DELETINGPHOTO","Usunięto zdjęcie.");
//define("_ALBM_MOVINGPHOTO","Moving photo");

//define("_ALBM_POSTERC","Poster: ");
//define("_ALBM_DATEC","Date: ");
//define("_ALBM_EDITNOTALLOWED","You're not allowed to edit this comment!");
//define("_ALBM_ANONNOTALLOWED","Anonymous user not allowed to post.");
//define("_ALBM_THANKSFORPOST","Thanks for your submission!");
//define("_ALBM_DELNOTALLOWED","You're not allowed to delete this comment!");
//define("_ALBM_GOBACK","Go Back");
//define("_ALBM_AREYOUSURE","Are you sure you want to delete this comment and all its child comments?");
//define("_ALBM_COMMENTSDEL","Comment(s) Deleted Successfully!");

// End New

//define("_ALBM_THANKSFORINFO","Thanks for the information. We'll look into your request shortly.");
//define("_ALBM_BACKTOTOP","Back to Photo Top");
//define("_ALBM_THANKSFORHELP","Thank you for helping to maintain this directory's integrity.");
//define("_ALBM_FORSECURITY","For security reasons your user name and IP address will also be temporarily recorded.");

define("_ALBM_MATCH","Match");
define("_ALBM_ALL","ALL");
define("_ALBM_ANY","ANY");
define("_ALBM_NAME","Name");
define("_ALBM_DESCRIPTION","Description");

define("_ALBM_MAIN","Zdjęcia");
define("_ALBM_NEW","Nowe");
define("_ALBM_UPDATED","Zmienione");
define("_ALBM_POPULAR","Popularne");
define("_ALBM_TOPRATED","Najpopularniejsze");

define("_ALBM_POPULARITYLTOM","Popularność (rosnąco)");
define("_ALBM_POPULARITYMTOL","Popularność (malejąco)");
define("_ALBM_TITLEATOZ","Tytuł (A-Z)");
define("_ALBM_TITLEZTOA","Tytuł (Z-A)");
define("_ALBM_DATEOLD","Data (od najstarszych)");
define("_ALBM_DATENEW","Data (od najnowszych)");
define("_ALBM_RATINGLTOH","Ocena (od najniższych)");
define("_ALBM_RATINGHTOL","Ocena (od najwyższych)");

define("_ALBM_NOSHOTS","Brak miniatury");
define("_ALBM_EDITTHISPHOTO","Edytuj");

define("_ALBM_DESCRIPTIONC","Opis: ");
//define("_ALBM_EMAILC","Email: ");
define("_ALBM_CATEGORYC","Kategoria: ");
define("_ALBM_SUBCATEGORY","Podkategorie: ");
define("_ALBM_LASTUPDATEC","Aktualizacja: ");
define("_ALBM_HITSC","Odsłon: ");
define("_ALBM_RATINGC","Ocena: ");
define("_ALBM_ONEVOTE","1 głos");
define("_ALBM_NUMVOTES","%s głosów");
//define("_ALBM_ONEPOST","1 post");
//define("_ALBM_NUMPOSTS","%s posts");
define("_ALBM_COMMENTSC","Komentarzy: ");
define("_ALBM_RATETHISPHOTO","Oceń");
//define("_ALBM_MODIFY","Modify");
//define("_ALBM_VSCOMMENTS","View/Send Comments");

define("_ALBM_DIRECTCATSEL","WYBIERZ KATEGORIĘ");
define("_ALBM_THEREARE","Wszystkich zdjęć: <b>%s</b>");
define("_ALBM_LATESTLIST","Najnowsze zdjęcia");

define("_ALBM_VOTEAPPRE","Dziękujemy za oddany głos!");
define("_ALBM_THANKURATE","Twój głos przyczynia się do rozwoju serwisu %s.");
define("_ALBM_VOTEONCE","Możesz oddać jeden głos na jedno zdjęcie");
define("_ALBM_RATINGSCALE","Skala ocen: 1 - najniższa, 10 - najwyższa");
define("_ALBM_BEOBJECTIVE","Oceniaj rzetelnie i uczciwie");
define("_ALBM_DONOTVOTE","Nie możesz głosować na materiał nadesłany przez siebie.");
define("_ALBM_RATEIT","Głosuj!");

define("_ALBM_RECEIVED","Dziękujemy za nadesłane zdjęcie!");
define("_ALBM_ALLPENDING","Nadesłany materiał został przekazany do zatwierdzenia.");

define("_ALBM_RANK","L.P.");
define("_ALBM_CATEGORY","Kategoria");
define("_ALBM_HITS","Liczba odsłon");
define("_ALBM_RATING","Ocena");
define("_ALBM_VOTE","Liczba głosów");
define("_ALBM_TOP10","%s "); // %s is a photo category title

define("_ALBM_SORTBY","Porządkuj wg:");
define("_ALBM_TITLE","Tytuł");
define("_ALBM_DATE","Data");
define("_ALBM_POPULARITY","L. odsłon");
define("_ALBM_CURSORTEDBY","Bieżące uporządkowanie: %s");
define("_ALBM_FOUNDIN","Found in:");
define("_ALBM_PREVIOUS","Poprzednie");
define("_ALBM_NEXT","Następne");
define("_ALBM_NOMATCH","Brak wskazanego zdjęcia.");

define("_ALBM_CATEGORIES","Categories");

define("_ALBM_SUBMIT","Submit");
define("_ALBM_CANCEL","Cancel");

define("_ALBM_MUSTREGFIRST","Brak uprawnień. Zarejestruj / zaloguj się!");
define("_ALBM_MUSTADDCATFIRST","Brak kategorii.<br>Przed dodawaniem zdjęć utwórz kategorie!");
define("_ALBM_NORATING","Nie wskazano oceny!");
define("_ALBM_CANTVOTEOWN","Nie możesz głosować na własny materiał.");
define("_ALBM_VOTEONCE2","Na każde zdjęcie możesz głosować tylko raz.");

//%%%%%%	Module Name 'MyAlbum' (Admin)	  %%%%%

define("_ALBM_PHOTOSWAITING","Photos Waiting for Validation");
define("_ALBM_PHOTOMANAGER","Photo Management");
define("_ALBM_CATEDIT","Add, Modify, and Delete Categories");
define("_ALBM_GROUPPERM_GLOBAL","Global Permissions");
define("_ALBM_CHECKCONFIGS","Check Configs&Environments");
define("_ALBM_BATCHUPLOAD","Batch Register");
define("_ALBM_GENERALSET","Preferences about myAlbum-P");
define("_ALBM_REDOTHUMBS2","Rebuild Thumbnails");

define("_ALBM_SUBMITTER","Nadesłał");
define("_ALBM_DELETE","Delete");
define("_ALBM_NOSUBMITTED","No New Submitted Photos.");
define("_ALBM_ADDMAIN","Add a MAIN Category");
define("_ALBM_IMGURL","Image URL (OPTIONAL Image height will be resized to 50): ");
define("_ALBM_ADD","Add");
define("_ALBM_ADDSUB","Add a SUB-Category");
define("_ALBM_IN","in");
define("_ALBM_MODCAT","Modify Category");
define("_ALBM_DBUPDATED","Database Updated Successfully!");
define("_ALBM_MODREQDELETED","Modification Request Deleted.");
define("_ALBM_IMGURLMAIN","Image URL (OPTIONAL and Only valid for main categories. Image height will be resized to 50): ");
define("_ALBM_PARENT","Parent Category:");
define("_ALBM_SAVE","Save Changes");
define("_ALBM_CATDELETED","Category Deleted.");
define("_ALBM_CATDEL_WARNING","WARNING: Are you sure you want to delete this Category and ALL its Photos and Comments?");
define("_ALBM_YES","Yes");
define("_ALBM_NO","No");
define("_ALBM_NEWCATADDED","New Category Added Successfully!");
define("_ALBM_ERROREXIST","ERROR: The Photo you provided is already in the database!");
define("_ALBM_ERRORTITLE","ERROR: You need to enter TITLE!");
define("_ALBM_ERRORDESC","ERROR: You need to enter DESCRIPTION!");
define("_ALBM_WEAPPROVED","We approved your link submission to photo database.");
define("_ALBM_THANKSSUBMIT","Thanks for your submission!");
define("_ALBM_CONFUPDATED","Configuration Updated Successfully!");

}

?>
