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

define('_MD_WIWI_MODIFIED_TXT'        ,'Ostatnia modyfikacja:');		
define('_MD_WIWI_BY'                  ,'przez');								
define('_MD_WIWI_HISTORY_TXT'         ,'Historia strony');		
define('_MD_WIWI_EDIT_TXT'            ,'Edytuj stronę');
define('_MD_WIWI_BODY_TXT'            ,'Zawartość strony');
define('_MD_WIWI_DIFF_TXT'            ,'Różnice między ostatnią i przedostatnią wersją');
define('_MD_WIWI_THISPAGE'            ,'Ta strona');

//define('_MD_WIWI_EDIT_BTN','Edit');						
//define('_MD_WIWI_PREVIEW_BTN','Preview');
define('_MD_WIWI_SUBMITREVISION_BTN'  ,'Zmień');
define('_MD_WIWI_QUIETSAVE_BTN'       ,'Zapisz');
define('_MD_WIWI_HISTORY_BTN'         ,'Historia');				
define('_MD_WIWI_PAGEVIEW_BTN'        ,'Powrót do strony');	
define('_MD_WIWI_VIEW_BTN'            ,'Widok');
define('_MD_WIWI_RESTORE_BTN'         ,'Odtwórz');
define('_MD_WIWI_FIX_BTN'             ,'Napraw');
define('_MD_WIWI_COMPARE_BTN'         ,'Porównaj');
define('_MD_WIWI_SELEDITOR_BTN'       ,'(Kliknij PPM (prawym przyciskiem myszki) aby zmienic edytor)');

define('_MD_WIWI_TITLE_FLD'           ,'Tytuł');					
define('_MD_WIWI_BODY_FLD'            ,'Zawartość');
define('_MD_WIWI_VISIBLE_FLD'         ,'Widoczność');
define('_MD_WIWI_CONTEXTBLOCK_FLD'    ,'Blok boczny');
define('_MD_WIWI_PARENT_FLD'          ,'Nadrzędna strona');
define('_MD_WIWI_PROFILE_FLD'         ,'Uprawnienia');

define('_MD_WIWI_TITLE_COL'           ,'Tytuł');					
define('_MD_WIWI_MODIFIED_COL'        ,'Modyfikowano');				
define('_MD_WIWI_AUTHOR_COL'          ,'Autor');
define('_MD_WIWI_ACTION_COL'          ,'Akcja');
define('_MD_WIWI_KEYWORD_COL'         ,'ID strony');


define('_MD_WIWI_PAGENOTFOUND_MSG'    ,"Ta strona nie została jeszcze utworzona.");
define('_MD_WIWI_DBUPDATED_MSG'       ,'Baza zaktualizowana poprawnie!');
define('_MD_WIWI_ERRORINSERT_MSG'     ,'Błąd aktualizacji bazy!');
define('_MD_WIWI_EDITCONFLICT_MSG'    ,'Konflikt modyfikacji! - Zmiany usunięte!');
define('_MD_WIWI_NOREADACCESS_MSG'    ,'<br><h4>Przykro nam - nie masz dostępu.</h4><br>');
define('_MD_WIWI_NOWRITEACCESS_MSG'   ,'<br><h4>Przepraszamy - nie masz uprawnień do zapisu.</h4><br>');


// Wiwi special pages - DO NOT TRANSLATE -
// Change these names, if you want a different homepage and error page
// for this language - just make sure that they are legal WiwiLink names.
define('_MI_WIWIMOD_WIWIHOME'         ,'Wiwi');
define('_MI_WIWIMOD_WIWI404'          ,'Zła nazwa');


?>