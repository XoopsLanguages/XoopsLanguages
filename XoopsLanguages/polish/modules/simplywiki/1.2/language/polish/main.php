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

define('_MD_SWIKI_MODIFIED_TXT', 'Ostatnio modyfikowane:');		
define('_MD_SWIKI_BY','by');								
define('_MD_SWIKI_HISTORY_TXT','Historia strony');		
define('_MD_SWIKI_EDIT_TXT','Edytuj stronę');
define('_MD_SWIKI_BODY_TXT','Zawartość strony');
define('_MD_SWIKI_DIFF_TXT','Różnice między bieżącą a poprzednią wersją strony');
define('_MD_SWIKI_THISPAGE','Bieżąca strona');

define('_MD_SWIKI_SUBMITREVISION_BTN','Zapisz nową wersję');
define('_MD_SWIKI_QUIETSAVE_BTN','Zapisz');
define('_MD_SWIKI_HISTORY_BTN','Historia');				
define('_MD_SWIKI_PAGEVIEW_BTN','Powrót do podglądu');	
define('_MD_SWIKI_VIEW_BTN','Podgląd');
define('_MD_SWIKI_RESTORE_BTN','Przywróć');
define('_MD_SWIKI_FIX_BTN','Napraw');
define('_MD_SWIKI_COMPARE_BTN','Porównaj');
define('_MD_SWIKI_SELEDITOR_BTN','(kliknij prawym klawiszem myszki aby wybrać inny edytor)');

define('_MD_SWIKI_TITLE_FLD','Tytuł');					
define('_MD_SWIKI_BODY_FLD','Zawartość');
define('_MD_SWIKI_VISIBLE_FLD','Widoczna');
define('_MD_SWIKI_CONTEXTBLOCK_FLD','Side content');
define('_MD_SWIKI_PARENT_FLD','Strona nadrzędna');
define('_MD_SWIKI_PROFILE_FLD','Profil uprawnień');

define('_MD_SWIKI_TITLE_COL','Tytuł');					
define('_MD_SWIKI_MODIFIED_COL','Zmodyfikowana');				
define('_MD_SWIKI_AUTHOR_COL','Autor');
define('_MD_SWIKI_ACTION_COL','Akcja');
define('_MD_SWIKI_KEYWORD_COL','ID strony');

define('_MD_SWIKI_PAGENOTFOUND_MSG',"Ta strona jeszcze nie istnieje.");
define('_MD_SWIKI_DBUPDATED_MSG','Baza danych została pomyślnie zaktualizowana!');
define('_MD_SWIKI_ERRORINSERT_MSG','Błąd podczas aktualizacji bazy danych!');
define('_MD_SWIKI_EDITCONFLICT_MSG','Konflikt modyfikacji! - Wszystkie zmiany zostały odrzucone!');
define('_MD_SWIKI_NOREADACCESS_MSG','<br><h4>Przepraszamy, brak uprawnień do strony.</h4><br>');
define('_MD_SWIKI_NOWRITEACCESS_MSG','<br><h4>Przepraszamy, nie masz uprawnień do zapisu tej strony.</h4><br>');

// Simply Wiki special pages -
// Change these names, if you want a different homepage and error page
// for this language - just make sure that they are legal WiwiLink names.
if (!defined('_MI_SWIKI_HOME')){define('_MI_SWIKI_HOME','HomePage');}// Also need in modinfo.php
define('_MI_SWIKI_404','IllegalName');

// Added in version 1.1
define('_MI_SWIKI_REVISION_SUMMARY', 'Podsumowanie wersji');
define('_MI_SWIKI_ALLOW_COMMENTS','Dopuść komentarze');
define('_MD_SWIKI_ADDPAGE_BTN','Dodaj stronę');
define('_MD_SWIKI_ADDPAGE','Utwórz nową stronę');
define('_MD_SWIKI_PDF_ERROR_MSG','Błąd przy tworzeniu PDFa');
define('_MD_SWIKI_NOPAGE_MSG','Nie mogę utworzyć PDFa - przynajmniej jedna ze stron nie istnieje');
define('_MD_SWIKI_CREATED','Ta strona została utworzona %2$s przez %1$s');
define('_MD_SWIKI_REVISIONS','Ta strona była aktualizowana %u raz(y)');
define('_MD_SWIKI_LASTVIEWED','Ta strona była ostatnio oglądana %s');
define('_MD_SWIKI_VIEWED','Ta strona była oglądana %u raz(y)');

//Added in version 1.2
define('_MD_SWIKI_VIEWS', 'Widoki');

?>