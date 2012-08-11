<?php
/*
 * Module and admin language definition
 * 
 *	_BTN	: text within buttons or action links
 *  _COL	: column headers
 *  _TXT	: "verbose" text (probably within content)
 *  _FLD	: title of form elements
 *  _DESC	: description under the title for form elements
 *  _MSG	: messages, alerts ...
 *
 */


define('_AM_SWIKI_ADMIN_TXT','Administracja modułem');
define('_AM_SWIKI_PAGESFILTER_TXT','Pokaż strony dla których');
define('_AM_SWIKI_LIKE_TXT','zawiera');
define('_AM_SWIKI_PROFILEIS_TXT','jest');
define('_AM_SWIKI_ORDERBY_TXT',', uporządkowane według');
define('_AM_SWIKI_LISTPAGES_RESULTS_TXT','wyniki');
define('_AM_SWIKI_ACLADMIN_TXT','usuwanie profilu uprawnień');

define('_AM_SWIKI_SELECTACL_BOX','');
define('_AM_SWIKI_SELECTACL_TXT','modyfikuj profil :');
define('_AM_SWIKI_CREATEACL_TXT','lub stwórz nowy :');
define('_AM_SWIKI_EDITACL_TXT','Informacja o profilu');
define('_AM_SWIKI_ACLHELP_TXT','
	<P>Uprawnienia są zbiorem nazwanych profili opisujących grupy xoopsowe i z osobna ich uprawnienia do odczytu/zapisu/administracji poszczególnymi stronami.</P>
	<UL>
		<LI>Pisarze&nbsp;mogą modyfikować bieżącą stronę i tworzyć nowe strony należące do tego samego profilu.</LI>
		<LI>Administratorzy mogą zmieniać profil na dowolny w którym mają prawo administracji.</LI></UL>
	<P>Nowe strony mają domyślnie ten sam profil co ich strona nadrzędna (rodzicielska).</P>
	<P>Profile również określają kto może czytać/pisać komentarze. Jest to przydatne np. by umożliwić prywatne komentarze na publicznych stronach ...</P>
	<P>UWAGA : Webmasterzy Xoops zawsze mają pełne prawa do stron SimplyWiki.</P>
	');
define('_AM_SWIKI_DELCONFIRMTITLE_TXT','USUWANIE PROFILU - POTWIERDZENIE');
define('_AM_SWIKI_DELCONFIRM_TXT','Jesteś bliski usunięcia profilu. Jeśli chcesz to zrobić potwierdź proszę zaznaczając checkbox.');
define('_AM_SWIKI_DELREDIR_TXT','Wybierz nowy profil dla stron które były dotychczas powiązane z usuwanym profilem.');

define('_AM_SWIKI_LISTPAGES_BTN','<< Spowrotem do listy stron');
define('_AM_SWIKI_CREATEACL_BTN','Nowa');
define('_AM_SWIKI_EDITACL_SAVE_BTN','Zapisz');
define('_AM_SWIKI_EDITACL_DELETE_BTN','Usuń');
define('_AM_SWIKI_EDITACL_CANCEL_BTN','Anuluj');
define('_AM_SWIKI_CLEANUPDB_BTN','Wyczyść bazę danych');


define('_AM_SWIKI_ACLNAME_FLD','Nazwa profilu');
define('_AM_SWIKI_ACLDESC_FLD','Opis profilu');
define('_AM_SWIKI_READERS_FLD','Grupy z prawem odczytu');
define('_AM_SWIKI_WRITERS_FLD','Grupy z prawem zapisu');
define('_AM_SWIKI_ADMINISTRATORS_FLD','Grupy z prawem administracji');
define('_AM_SWIKI_COMMENTS_FLD','Kto może czytać/wysyłać komentarze :');
define('_AM_SWIKI_HISTORY_FLD','Kto ma dostęp do historii zmian strony :');
define('_AM_SWIKI_DELREDIR_FLD','Profil zastępczy :');

define('_AM_SWIKI_SELECTACL_OPT','(wybierz)');
define('_AM_SWIKI_READERS_OPT','Czytelnicy');
define('_AM_SWIKI_WRITERS_OPT','Pisarze');
define('_AM_SWIKI_ADMINISTRATORS_OPT','Administratorzy');
define('_AM_SWIKI_COMMENTS_NONE_OPT','(bez komentarzy)');
define('_AM_SWIKI_HISTORY_NONE_OPT','(bez historii)');
define('_AM_SWIKI_DELCONFIRM_OPT','TAK, chcę skasować ten profil.');

define('_AM_SWIKI_LISTPAGES_ALLPAGES_OPT','wszystkie strony');
define('_AM_SWIKI_LISTPAGES_KEYWORD_OPT','nazwa');
define('_AM_SWIKI_LISTPAGES_TITLE_OPT','tytuł');
define('_AM_SWIKI_LISTPAGES_BODY_OPT','zawartość');
define('_AM_SWIKI_LISTPAGES_UID_OPT','ostatni autor');
define('_AM_SWIKI_LISTPAGES_PARENT_OPT','strona nadrzędna');
define('_AM_SWIKI_LISTPAGES_PRID_OPT','profil');
define('_AM_SWIKI_LISTPAGES_LASTMODIFIED_OPT','ostatnio zmodyfikowana');
define('_AM_SWIKI_LISTPAGES_ORDERDESC_OPT','malejąco Z-A');
define('_AM_SWIKI_LISTPAGES_ORDERASC_OPT','rosnąco A-Z');

define('_AM_SWIKI_LISTPAGE_NAV','szukaj stron');
define('_AM_SWIKI_HISTORY_NAV','historia');
define('_AM_SWIKI_ACLADMIN_NAV','uprawnienia (ACL)');
define("_AM_SWIKI_BLOCKSNGROUPS_NAV","bloki i grupy");

define('_AM_SWIKI_NOPAGESPECIFIED_MSG','Proszę wybierz stronę');
define('_AM_SWIKI_CONFIRMDEL_MSG','Czy naprawdę chcesz skasować tę stronę SimplyWiki');
define('_AM_SWIKI_CONFIRMFIX_MSG','Czy naprawdę chcesz naprawić tę stronę SimplyWiki');
define('_AM_SWIKI_CONFIRMCLEAN_MSG','Czy naprawdę chcesz wyczyścić bazę danych');
define('_AM_SWIKI_PRFSAVESUCCESS_MSG','Profil pomyślnie zapisany w bazie');
define('_AM_SWIKI_PRFSAVEFAILED_MSG','Błąd podczas zapisu profilu. Baza danych NIE została zaktualizowana');
define('_AM_SWIKI_ERRDELETE_MSG','Błąd : nie mogę usunąć profilu');
define('_AM_SWIKI_PRFDELSUCCESS_MSG','Profil pomyślnie usunięty z bazy danych.');
define('_AM_SWIKI_PRFDELFAILED_MSG','Błąd podczas usuwania profilu. Baza danych NIE została zaktualizowana');
define('_AM_SWIKI_SYS_CFG','Konfiguracja systemu');

//added in version 1.2
define('_AM_SWIKI_GOTO_MODULE','Idź do modułu');
define('_AM_SWIKI_UPDATE_MODULE','Aktualizuj moduł');

?>
