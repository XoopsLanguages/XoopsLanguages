<?php
//Polish translation by kaper@zk-p.pl

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MB_LOADED' ) ) {

define('MYALBUM_MB_LOADED' , 1 ) ;

//%%%%%%		Module Name 'myAlbum-P'		%%%%%

// New in myAlbum-P

// only "Y/m/d" , "d M Y" , "M d Y" can be interpreted
define("_ALBM_DTFMT_YMDHI" , "d M Y H:i" ) ;

//define("_ALBM_NEXT_BUTTON" , "Next" ) ;
//define("_ALBM_REDOLOOPDONE" , "Done." ) ;

define("_ALBM_BTN_SELECTALL" , "Zaznacz wszystkie" ) ;
define("_ALBM_BTN_SELECTNONE" , "Kasuj zaznaczenia" ) ;
define("_ALBM_BTN_SELECTRVS" , "Odwróæ zaznaczenia" ) ;

define("_ALBM_FMT_PHOTONUM" , "Zdjêæ na stronê: %s" ) ;

//define("_ALBM_AM_ADMISSION" , "Admit Photos" ) ;
//define("_ALBM_AM_ADMITTING" , "Admitted photo(s)" ) ;
define("_ALBM_AM_LABEL_ADMIT" , "Zatwierd¼ zaznaczone zdjêcia " ) ;
define("_ALBM_AM_BUTTON_ADMIT" , "Zatwierd¼" ) ;
define("_ALBM_AM_BUTTON_EXTRACT" , "Znajd¼ wg numeru" ) ;

//define("_ALBM_AM_PHOTOMANAGER" , "Photo Manager" ) ;
define("_ALBM_AM_PHOTONAVINFO" , "Zdjêcia nr %s-%s (spo¶ród %s)" ) ;
define("_ALBM_AM_LABEL_REMOVE" , "" ) ;
define("_ALBM_AM_BUTTON_REMOVE" , "Usuñ zaznaczone" ) ;
define("_ALBM_AM_JS_REMOVECONFIRM" , "Zaznaczone zdjêcia zostan± usuniête." ) ;
//define("_ALBM_AM_LABEL_MOVE" , "Change category the photos checked" ) ;
//define("_ALBM_AM_BUTTON_MOVE" , "Move" ) ;
define("_ALBM_AM_BUTTON_UPDATE" , "Zmieñ" ) ;
//define("_ALBM_AM_DEADLINKMAINPHOTO" , "The main image don't exist" ) ;

define("_ALBM_RADIO_ROTATETITLE" , "Obrócenie obrazu" ) ;
define("_ALBM_RADIO_ROTATE0" , "bez zmian" ) ;
define("_ALBM_RADIO_ROTATE90" , "90 st. w prawo" ) ;
define("_ALBM_RADIO_ROTATE180" , "180 stopni" ) ;
define("_ALBM_RADIO_ROTATE270" , "90 st. w lewo" ) ;


// New MyAlbum 1.0.1 (and 1.2.0)
define("_ALBM_MOREPHOTOS","Wiêcej zdjêæ od %s");
//define("_ALBM_REDOTHUMBS","Redo Thumbnails (<a href='redothumbs.php'>re-start</a>)");
//define("_ALBM_REDOTHUMBSINFO","Too large number may lead to server time out.");
//define("_ALBM_REDOTHUMBSNUMBER","Number of thumbs at a time");
//define("_ALBM_REDOING","Redoing: ");
//define("_ALBM_BACK","Return");
define("_ALBM_ADDPHOTO","Dodaj zdjêcie");


// New MyAlbum 1.0.0
define("_ALBM_PHOTOBATCHUPLOAD","Publikacja zdjêæ z katalogu na serwerze");
define("_ALBM_PHOTOUPLOAD","Dodaj zdjêcie");
define("_ALBM_PHOTOEDITUPLOAD","Edycja zdjêcia");
define("_ALBM_MAXPIXEL","Dopuszczalna wielko¶æ zdjêcia (px)");
define("_ALBM_MAXSIZE","Dopuszczalna wielko¶æ pliku");
define("_ALBM_PHOTOTITLE","Tytu³");
define("_ALBM_PHOTOPATH","¦cie¿ka");
define("_ALBM_TEXT_DIRECTORY","Katalog ze zdjêciami");
define("_ALBM_DESC_PHOTOPATH","¦cie¿ka do katalogu na serwerze");
define("_ALBM_MES_INVALIDDIRECTORY","B³êdna ¶cie¿ka");
define("_ALBM_MES_BATCHDONE","Opublikowano %s zdjêæ.");
define("_ALBM_MES_BATCHNONE","Brak plików zdjêæ w katalogu");
define("_ALBM_PHOTODESC","Opis");
define("_ALBM_PHOTOCAT","Kategoria");
define("_ALBM_SELECTFILE","Plik zdjêcia");
define("_ALBM_NOIMAGESPECIFIED","B£¡D: nie wybrano pliku zdjêcia");
define("_ALBM_FILEERROR","B£¡D: za du¿e zdjêcie");
define("_ALBM_FILEREADERROR","B³±d odczytu pliku zdjêcia");

define("_ALBM_BATCHBLANK","Puste pole - nazwa pliku jako tytu³ <br>Tekst - tytu³ w postaci <b>tekst numer</b> (1, 2, ...)");
//define("_ALBM_DELETEPHOTO","Delete?");
define("_ALBM_VALIDPHOTO","Aktywne");
define("_ALBM_PHOTODEL","Usun±æ zdjêcie?");
define("_ALBM_DELETINGPHOTO","Usuniêto zdjêcie.");
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

define("_ALBM_MAIN","Zdjêcia");
define("_ALBM_NEW","Nowe");
define("_ALBM_UPDATED","Zmienione");
define("_ALBM_POPULAR","Popularne");
define("_ALBM_TOPRATED","Najpopularniejsze");

define("_ALBM_POPULARITYLTOM","Popularno¶æ (rosn±co)");
define("_ALBM_POPULARITYMTOL","Popularno¶æ (malej±co)");
define("_ALBM_TITLEATOZ","Tytu³ (A-Z)");
define("_ALBM_TITLEZTOA","Tytu³ (Z-A)");
define("_ALBM_DATEOLD","Data (od najstarszych)");
define("_ALBM_DATENEW","Data (od najnowszych)");
define("_ALBM_RATINGLTOH","Ocena (od najni¿szych)");
define("_ALBM_RATINGHTOL","Ocena (od najwy¿szych)");

define("_ALBM_NOSHOTS","Brak miniatury");
define("_ALBM_EDITTHISPHOTO","Edytuj");

define("_ALBM_DESCRIPTIONC","Opis: ");
//define("_ALBM_EMAILC","Email: ");
define("_ALBM_CATEGORYC","Kategoria: ");
define("_ALBM_SUBCATEGORY","Podkategorie: ");
define("_ALBM_LASTUPDATEC","Aktualizacja: ");
define("_ALBM_HITSC","Ods³on: ");
define("_ALBM_RATINGC","Ocena: ");
define("_ALBM_ONEVOTE","1 g³os");
define("_ALBM_NUMVOTES","%s g³osów");
//define("_ALBM_ONEPOST","1 post");
//define("_ALBM_NUMPOSTS","%s posts");
define("_ALBM_COMMENTSC","Komentarzy: ");
define("_ALBM_RATETHISPHOTO","Oceñ");
//define("_ALBM_MODIFY","Modify");
//define("_ALBM_VSCOMMENTS","View/Send Comments");

define("_ALBM_DIRECTCATSEL","WYBIERZ KATEGORIÊ");
define("_ALBM_THEREARE","Wszystkich zdjêæ: <b>%s</b>");
define("_ALBM_LATESTLIST","Najnowsze zdjêcia");

define("_ALBM_VOTEAPPRE","Dziêkujemy za oddany g³os!");
define("_ALBM_THANKURATE","Twój g³os przyczynia siê do rozwoju serwisu %s.");
define("_ALBM_VOTEONCE","Mo¿esz oddaæ jeden g³os na jedno zdjêcie");
define("_ALBM_RATINGSCALE","Skala ocen: 1 - najni¿sza, 10 - najwy¿sza");
define("_ALBM_BEOBJECTIVE","Oceniaj rzetelnie i uczciwie");
define("_ALBM_DONOTVOTE","Nie mo¿esz g³osowaæ na materia³ nades³any przez siebie.");
define("_ALBM_RATEIT","G³osuj!");

define("_ALBM_RECEIVED","Dziêkujemy za nades³ane zdjêcie!");
define("_ALBM_ALLPENDING","Nades³any materia³ zosta³ przekazany do zatwierdzenia.");

define("_ALBM_RANK","L.P.");
define("_ALBM_CATEGORY","Kategoria");
define("_ALBM_HITS","Liczba ods³on");
define("_ALBM_RATING","Ocena");
define("_ALBM_VOTE","Liczba g³osów");
define("_ALBM_TOP10","%s "); // %s is a photo category title

define("_ALBM_SORTBY","Porz±dkuj wg:");
define("_ALBM_TITLE","Tytu³");
define("_ALBM_DATE","Data");
define("_ALBM_POPULARITY","L. ods³on");
define("_ALBM_CURSORTEDBY","Bie¿±ce uporz±dkowanie: %s");
define("_ALBM_FOUNDIN","Found in:");
define("_ALBM_PREVIOUS","Poprzednie");
define("_ALBM_NEXT","Nastêpne");
define("_ALBM_NOMATCH","Brak wskazanego zdjêcia.");

define("_ALBM_CATEGORIES","Categories");

define("_ALBM_SUBMIT","Submit");
define("_ALBM_CANCEL","Cancel");

define("_ALBM_MUSTREGFIRST","Brak uprawnieñ. Zarejestruj / zaloguj siê!");
define("_ALBM_MUSTADDCATFIRST","Brak kategorii.<br>Przed dodawaniem zdjêæ utwórz kategorie!");
define("_ALBM_NORATING","Nie wskazano oceny!");
define("_ALBM_CANTVOTEOWN","Nie mo¿esz g³osowaæ na w³asny materia³.");
define("_ALBM_VOTEONCE2","Na ka¿de zdjêcie mo¿esz g³osowaæ tylko raz.");

//%%%%%%	Module Name 'MyAlbum' (Admin)	  %%%%%

define("_ALBM_PHOTOSWAITING","Photos Waiting for Validation");
define("_ALBM_PHOTOMANAGER","Photo Management");
define("_ALBM_CATEDIT","Add, Modify, and Delete Categories");
define("_ALBM_GROUPPERM_GLOBAL","Global Permissions");
define("_ALBM_CHECKCONFIGS","Check Configs&Environments");
define("_ALBM_BATCHUPLOAD","Batch Register");
define("_ALBM_GENERALSET","Preferences about myAlbum-P");
define("_ALBM_REDOTHUMBS2","Rebuild Thumbnails");

define("_ALBM_SUBMITTER","Nades³a³");
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
