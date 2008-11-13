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


define('_AM_WIWI_ADMIN_TXT'              ,'Administracja modu�em');
define('_AM_WIWI_PAGESFILTER_TXT'        ,'Poka� strony kt�re');
define('_AM_WIWI_LIKE_TXT'               ,'zawieraj�');
define('_AM_WIWI_PROFILEIS_TXT'          ,'jest');
define('_AM_WIWI_ORDERBY_TXT'            ,', w kolejno�ci wed�ug');
define('_AM_WIWI_LISTPAGES_RESULTS_TXT'  ,'rezultaty');

define('_AM_WIWI_SELECTACL_BOX'          ,'');
define('_AM_WIWI_SELECTACL_TXT'          ,'modyfikuj profil :');
define('_AM_WIWI_CREATEACL_TXT'          ,'lub stw�rz nowy :');
define('_AM_WIWI_EDITACL_TXT'            ,'Informacje o profilu');
define('_AM_WIWI_ACLHELP_TXT'            ,'
	<P>Wiwi privileges are a set of named profiles describing xoops groups that enventually have read/write/administrate access to corresponding pages.</P>
	<UL>
		<LI>Writers&nbsp;can modify the current page, and create new pages with the same profile.</LI>
		<LI>Administrators&nbsp;can change page profiles to whichever profiles they have "admin" privilege for.</LI></UL>
	<P>New pages default to their parent\'s profile.</P>
	<P>Profile also define who can read/post comments. This is useful to allow private comments on public pages ...</P>
	<P>Note : Xoops webmasters allways have full privileges to Wiwi pages.</P>
	');
define('_AM_WIWI_DELCONFIRMTITLE_TXT','Potwierdzenie kasowania profilu');
define('_AM_WIWI_DELCONFIRM_TXT','Chcesz skasowa� ten profil. Potwierd� swoj� decyzj� zaznaczaj�c pole.');
define('_AM_WIWI_DELREDIR_TXT','Wybierz nowy profil kt�ry b�dzie przypisany do stron.');

define('_AM_WIWI_LISTPAGES_BTN'          ,'<< Powr�t do listy stron');
define('_AM_WIWI_CREATEACL_BTN'          ,'Nowy');
define('_AM_WIWI_EDITACL_SAVE_BTN'       ,'Zapisz');
define('_AM_WIWI_EDITACL_DELETE_BTN'     ,'Skasuj');
define('_AM_WIWI_EDITACL_CANCEL_BTN'     ,'Anuluj');
define('_AM_WIWI_CLEANUPDB_BTN'          ,'Wyczy�� baz�');


define('_AM_WIWI_ACLNAME_FLD'            ,'Nazwa profilu');
define('_AM_WIWI_ACLDESC_FLD'            ,'Opis profilu');
define('_AM_WIWI_READERS_FLD'            ,'Grupy mog�ce czyta�');
define('_AM_WIWI_WRITERS_FLD'            ,'Grupy mog�ce pisa�');
define('_AM_WIWI_ADMINISTRATORS_FLD'     ,'Grupy z uprawnieniami administracyjnymi');
define('_AM_WIWI_COMMENTS_FLD'           ,'Kto mo�e czyta�/pisa� komentarze :');
define('_AM_WIWI_HISTORY_FLD'            ,'Kto ma dost�p do historii zmian :');
define('_AM_WIWI_DELREDIR_FLD'           ,'Zast�powanie profilu :');

define('_AM_WIWI_SELECTACL_OPT'          ,'(wybierz)');
define('_AM_WIWI_READERS_OPT'            ,'Czytaj�cy');
define('_AM_WIWI_WRITERS_OPT'            ,'Pisz�cy');
define('_AM_WIWI_ADMINISTRATORS_OPT'     ,'Administratorzy');
define('_AM_WIWI_COMMENTS_NONE_OPT'      ,'(bez komentarzy)');
define('_AM_WIWI_HISTORY_NONE_OPT'       ,'(bez historii)');
define('_AM_WIWI_DELCONFIRM_OPT'         ,'Tak, chc� skasowa� ten profil.');

define('_AM_WIWI_LISTPAGES_ALLPAGES_OPT' ,'wszystkie strony');
define('_AM_WIWI_LISTPAGES_KEYWORD_OPT'  ,'nazwa');
define('_AM_WIWI_LISTPAGES_TITLE_OPT'    ,'tytu�');
define('_AM_WIWI_LISTPAGES_BODY_OPT'     ,'zawarto��');
define('_AM_WIWI_LISTPAGES_UID_OPT'      ,'ostatni autor');
define('_AM_WIWI_LISTPAGES_PARENT_OPT'   ,'parent');
define('_AM_WIWI_LISTPAGES_PRID_OPT'     ,'profil');
define('_AM_WIWI_LISTPAGES_LASTMODIFIED_OPT','ostatnia modyfikacja');
define('_AM_WIWI_LISTPAGES_ORDERDESC_OPT','malej�co');
define('_AM_WIWI_LISTPAGES_ORDERASC_OPT' ,'rosn�co');

define('_AM_WIWI_LISTPAGE_NAV'           ,'przegl�daj strony');
define('_AM_WIWI_HISTORY_NAV'            ,'historia');
define('_AM_WIWI_ACLADMIN_NAV'           ,'uprawnienia (ACL)');
define("_AM_WIWI_BLOCKSNGROUPS_NAV"      , "bloki i grupy");

define('_AM_WIWI_NOPAGESPECIFIED_MSG'    ,'Prosz� wybra� stron�');
define('_AM_WIWI_CONFIRMDEL_MSG'         ,'Czy na pewno chcesz skasowa� t� stron� Wiwi?');
define('_AM_WIWI_CONFIRMFIX_MSG'         ,'Czy na pewno chcesz naprawi� t� stron� Wiwi?');
define('_AM_WIWI_CONFIRMCLEAN_MSG'       ,'Czy na pewno chcesz wyczy�ci� ca�� baz�');
define('_AM_WIWI_PRFSAVESUCCESS_MSG'     ,'Profil poprawnie zapisany w bazie');
define('_AM_WIWI_PRFSAVEFAILED_MSG'      ,'B��d podczas wysy�ania profilu. Baza bez zmian');
define('_AM_WIWI_ERRDELETE_MSG'          ,'B��d : nie mo�na skasowa� profilu');
define('_AM_WIWI_PRFDELSUCCESS_MSG'      ,'Profil poprawnie skasowany z bazy.');
define('_AM_WIWI_PRFDELFAILED_MSG'       ,'B��d podczas kasowania profilu. Baza bez zmian');




?>
