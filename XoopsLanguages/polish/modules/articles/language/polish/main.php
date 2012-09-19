<?php
// $Id: main.php,v 1.1 2005/07/03 08:50:31 dap997 Exp $
// Polish version by 'plxoops project'.

// Cat/Article listing index.
define("_MD_CATLIST_CAPTION",  "Artykuły");			// Caption of category/article list
define("_MD_INDEX_PAGE_TITLE", "Tytuł strony głównej");	// Title of category/article list page (not used in shipped package)
define("_MD_ARTICLE_VIEW_CAP",	"odsłon");				// Caption for number of views
define("_MD_NUM_ARTICLE_CAP", "artykułów");			// Caption for number of articles for category

// Article page
define("_MD_INDEXLINKTEXT",   "Powrót");		// Text for return to index page
define("_MD_INDEXLINKPRINT",  "Drukuj");		// Text for printable version
define("_MD_POSTEDON",          "Napisany");	// Posted on text
define("_MD_READS",                "odsłon");		// Text for reads
define("_MD_EMAIL",                 "E-mail");		// Text for email friend.
define("_MD_NOARTICLE",         "Przepraszamy ale artykuł którego szukasz nie istnieje.");		// Text for email friend.
define("_MD_PAGENEXT",          "następny");
define("_MD_PAGEPREV",          "poprzedni");
define("_MD_PAGENUM",           "strona");
define("_MD_PAGEOF",              "z");
define("_MD_ART_POSTER",      "przez");


// E-mail page
define("_MD_EMAILHEADTTL", 		 "Wyślij ten artykuł mailem do znajomego");
define("_MD_EMAILYOURNAME",		 "Twoje imię:");
define("_MD_EMAILYOUREMAIL",	     "Twój e-mail:");
define("_MD_EMAILRECIPIENT",       "Odbiorca:");
define("_MD_EMAILMESSAGE",        "Wiadomość:");
define("_MD_EMAILMESSAGEDESC", "To będzie dołączone do maila.");
define("_MD_EMAILSEND",               "wyślij");
define("_MD_EMAILSET",                 "wyczyść");
define("_MD_EMAILSECNOTE",		"<strong>Please note:</strong> Some security information will be sent along with the e-mail to help trace anyone who abuses this service."); 

// Print page
define("_MD_ARTPRINTTITLE",		"Tytuł artykułu:");
define("_MD_ARTPRINTPOSTED",	"Pierwszy nadesłany:");
define("_MD_ARTPRINTDESCRIP",	"Opis:");
define("_MD_ARTPRINTTEXT",		"Tekst artykułu:");
define("_MD_ARTPRINTPUB",		"Ten artykuł został opublikowany na:");
define("_MD_ARTPRINTSITENAME",	"Strona:");
define("_MD_ARTPRINTSITEURL",	"URL:");

// General
define("_MD_MOD_WHOBY",		"<span style=\"font-size: smaller; text-align: center;\">Articles Copyright &copy 2003 <a href=\"ajmills@sirium.net\">Andrew Mills</a></span>");

// Confirmation messages
define("_MD_DBUPDATED",					"Zaktualizowano Bazę Danych!");
define("_MD_DBNOTUPDATED",				"Nie zaktualizowano Bazy Danych!");
define("_MD_ITEMDELETED",				"Element został usunięty!");
define("_MD_ITEMNOTDELETED",			"Element nie został usunięty!");
define("_MD_ITEM_DELETED_CANCELLED",	"Anulowano usuwanie!");
define("_MD_CONFIRMDELETE",             "Czy na pewno chcesz usunąć ten element?");
define("_MD_DBSUBMITTED",				"Dziękujemy za nadesłanie nam artykułu, opublikujemy go tak szybko jak to będzie możliwe.");

// Errors
define("_MD_NOACCESSHERE",	"Nie masz uprawnień do przeglądania tej strony.");
define("_MD_LOGGEDIN",		"Musisz być zalogowany aby mieć dostęp do tej strony.");
define("_MD_EMLMAXCHARS",	"Wpisałeś za dużo znaków.");
define("_MD_NOTALLOWED",	"Nie masz dostępu do tej strony.");

// Submit page
define("_MD_ART_SUBINTRO",		"Wykorzystaj poniższy formularz aby przesłać nam swój artykuł. Pamiętaj że będzie on musiał być zatwierdzony przez redakcję przed opublikowaniem.");
define("_MD_SUBMIT_PAGE_TITLE", "Przedstaw nam swój artykuł");
define("_MD_ART_SUBALERTTITLE",	"Tytuł musi się składać z przynajmniej 3 znaków.");
define("_MD_ART_SUBALERTCAT",	"Wybierz kategorię.");
define("_MD_ART_SUBTITLE",		"Tytuł:");
define("_MD_ART_SUBCAT",		"Kategoria:");
define("_MD_ART_SUBDESC",		"Opis:");
define("_MD_ART_SUBTART",		"Artykuł:");
define("_MD_ART_SUBTNOTIFY",	"Powiadamianie:");
define("_MD_ART_SUBTNOTIFYDES",	"Powiadomić Cię gdy artykuł zostanie opublikowany?");
define("_MD_ART_SUBMIT",		" Przedstaw artykuł ");
define("_MD_ART_SUBRESET",		" Wyczyść ");
define("_MD_ART_PREVIEW",		" Podgląd ");
define("_MD_SUBMITTEDMSG",		"Artykuł przedstawiony");
define("_MD_SUBMITTEDMSGDESC",	"Dziękujemy za nadesłanie nam artykułu, opublikujemy go tak szybko jak to będzie możliwe.");
define("_MD_FORMCAPTIONPAGEBRK",	"Użyj <strong>[pagebreak]</strong> aby podzielić artykuł na strony.");
define("_MD_FORMCAPTIONNOHTML",		"Wyłącz tagi HTML");
define("_MD_FORMCAPTIONNOSMILEY",	"Wyłącz ikonki emotikonów");
define("_MD_FORMCAPTIONNOXCODE",	"Wyłącz kody XOOPSa");
define("_MD_FORMCAPTIONNOIMAGE",	"Wyłącz obrazki (gdy używasz kodów XOOPSa)");
define("_MD_FORMCAPTIONNOBR",		"Wyłącz automatyczne załamywanie wierszy");
define("_MD_FORMCAPTIONSELECT",		"Wybierz kategorię");


?>
