<?php
// $Id: modinfo.php 8255 2009-04-11 18:20:13Z skenow $
// Module Info

// The name of this module
define('_MI_SWIKI_NAME','SimplyWiki');

// A brief description of this module
define('_MI_SWIKI_DESC','Narzędzie dzięki któremu można tworzyć i modyfikowć strony tak prosto jak w Wordzie.');

// Admin menu
define('_MI_SWIKI_ADMENU1','Strony');
define('_MI_SWIKI_ADMENU2','Uprawnienia');
define('_MI_SWIKI_ADMENU3','Bloki/Grupy');
define('_MI_SWIKI_ADMENU4','O module...');
define('_MI_SWIKI_ADMENU5','Pomoc');


// Admin options
define('_MI_SWIKI_EDITOR','Którego edytora powinien używać SimplyWiki');
define('_MI_SWIKI_EDITOR_DESC','');
define('_MI_SWIKI_DEFAULTPROFILE','Domyślny profil');
// Default profile description was added in re-release, see below

define('_MI_SWIKI_ALLOWPDF','Pokazać przycisk PDF na stronach?');
define('_MI_SWIKI_ALLOWPDF_DESC','Generacja PDFa ze stron HTML jest ciągle w fazie eksperymentalnej (aczkolwiek już dość długo).');

define('_MI_SWIKI_SHOWTITLES','Pokaż tytuły stron zamiast nazw stron');
define('_MI_SWIKI_SHOWTITLES_DESC','Pokaż tytuły stron zamiast nazw w odnośnikach (linkach) simplywiki');

define('_MI_SWIKI_USECAMELCASE','Używaj CamelCase (bez odstępów i duże litery na początku wyrazu) ');
define('_MI_SWIKI_USECAMELCASE_DESC','Interpretuj słowa CamelCase jako linki do innych stron simplywiki.');

define('_MI_SWIKI_XOOPSEDITOR','Wybierz "XoopsEditor"');
define('_MI_SWIKI_XOOPSEDITOR_DESC','Ma znaczenie tylko gdy został powyżej wybrany XoopsEditor');

// Notification options
define('_MI_SWIKI_PAGENOTIFYCAT_TITLE','Strona');
define('_MI_SWIKI_PAGENOTIFYCAT_DESC','Powiadomienia które dotyczą bieżącej strony');
define('_MI_SWIKI_PAGENOTIFY_TITLE','Strona zaktualizowana');
define('_MI_SWIKI_PAGENOTIFY_CAPTION','Powiadom mnie kiedy bieżąca strona zostanie zaktualizowana');
define('_MI_SWIKI_PAGENOTIFY_DESC','Wyślij powiadomienie gdy ktokolwiek zaktualizuje stronę.');
define('_MI_SWIKI_PAGENOTIFY_SUBJECT','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : strona zaktualizowana');

/* Added in version 0.83 Re-release */
define('_MI_SWIKI_GLOBALNOTIFYCAT_TITLE','Globalne');
define('_MI_SWIKI_GLOBALNOTIFYCAT_DESC','Powiadomienia które dotyczą wszystkich stron');
define('_MI_SWIKI_GLOBALNOTIFY_TITLE','Strona zaktualizowana');
define('_MI_SWIKI_GLOBALNOTIFY_CAPTION','Powiadom mnie kiedy jakakolwiek stona zostanie zaktualizowana');
define('_MI_SWIKI_GLOBALNOTIFY_DESC','Otrzymasz powiadomienie kiedy ktokolwiek zmodyfikuje jakąkolwiek stronę.');
define('_MI_SWIKI_GLOBALNOTIFY_SUBJECT','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : stona zaktualizowana');
define('_MI_SWIKI_TEMPLATE_VIEW_DESC','Obejrzyj stronę wiki');
define('_MI_SWIKI_TEMPLATE_EDIT_DESC','Edytuj stronę wiki');
define('_MI_SWIKI_TEMPLATE_HISTORY_DESC','Zobacz historię aktualizacji strony');
define('_MI_SWIKI_TEMPLATE_PDF_DESC','SimplyWiki - pdf');
define('_MI_SWIKI_BLOCK_TOC_NAME','Wiki Spis Treści');
define('_MI_SWIKI_BLOCK_TOC_DESC','Wiki wybrane strony wejściowe');
define('_MI_SWIKI_BLOCK_RECENT_NAME','Wiki ostatnie');
define('_MI_SWIKI_BLOCK_RECENT_DESC','Wiki ostatnio aktualizowane');
define('_MI_SWIKI_BLOCK_RELATED_NAME','WikiEkstraTreści');
define('_MI_SWIKI_BLOCK_RELATED_DESC','Blok na treści ekstra na stonach Wiki');
define('_MI_SWIKI_BLOCK_SHOWPAGE_NAME','WikiShowPage');
define('_MI_SWIKI_BLOCK_SHOWPAGE_DESC','Pokaż wybraną stronę wiki');
define('_MI_SWIKI_AUTHOR_WORD','<h4>Informacje o module SimpyWiki</h4><br />Tłumaczenie modułu i uwagi odnośnie tłumacznia: Tomasz Stempkowicz xoops@prometech.com.pl <br /><br />SimplyWiki jest oprogramowaniem GPL ; odwiedź stronę wsparcia na  <a href="http://community.impresscms.org/" target="_blank">community.impresscms.org</a> aby uzyskać pomoc.<br /><br />Jeśli właśnie przmigrowałeś ze starszych wersji Wiwi (0.7.1 lub niższych), proszę kilknij tutaj : <input type="button" value="UPGRADE" onclick="document.location.href=\'../update.php\';"><br /><br /><a href=\'../manual.html\' target=\'_blank\'>Read the Manual</a> i tu <a href=\'../ReadMe.txt\' target=\'_blank\'>release notes</a> aby rozpocząć.');
define('_MI_SWIKI_DEFAULTPROFILE_DESC','Domyślny profil przypisany do nowych stron');
if (!defined('_MI_SWIKI_HOME')){define('_MI_SWIKI_HOME','HomePage');}

// Added in SimplyWiki 1.1
define('_MI_SWIKI_BLOCK_LISTPAGES_NAME','Lista stron');
define('_MI_SWIKI_BLOCK_LISTPAGES_DESC','Wyświetla listę stron');
define('_MI_SWIKI_BLOCK_ADDPAGE_NAME','Dodaj stronę');
define('_MI_SWIKI_BLOCK_ADDPAGE_DESC','Dodaje stronę simpywiki z dowolnego miejsca twojej witryny');
define('_MI_SWIKI_BLOCK_TAGCLOUD_NAME','Wiki Tag Cloud');
define('_MI_SWIKI_BLOCK_TAGCLOUD_DESC','Chmura tagów (linków) dla SimplyWiki');
define('_MI_SWIKI_BLOCK_TAG_NAME','Wiki Top Tags');
define('_MI_SWIKI_BLOCK_TAG_DESC','Lista top tagów (linków) dla SimplyWiki');
define('_MI_SWIKI_PAGEINFO','Pokaż informacje o stronie');
define('_MI_SWIKI_PAGEINFO_DESC','Wybierz jakie informacje pokazywać na stronie');
define('_MI_SWIKI_SHOWREVISIONS','Pokaż liczbę aktualizacji');
define('_MI_SWIKI_SHOWVIEWS','Pokaż liczbę odsłon');
define('_MI_SWIKI_SHOWCREATED','Pokaż datę utworzenia i pierwszego autora');
define('_MI_SWIKI_SHOWLASTREVISED','Pokaż datę ostatniej aktualizacji');
define('_MI_SWIKI_LASTVIEWED','Pokaż datę ostatniej odsłony');
define('_MI_SWIKI_USECAPTCHA','Włącz CAPTCHA (Antyspam)');
define('_MI_SWIKI_USECAPTCHA_DESC','Wyświetl obrazek "przepisz litery z obrazka" w formularzu edycji');
define('_MI_SWIKI_SHOWQUICKADD','Włącz mechanizm Szybko Dodaj');
define('_MI_SWIKI_SHOWQUICKADD_DESC','Ustawienie <em>Tak (Yes)</em> powoduje wyświetlanie pola Szybko Dodaj, pozwalającego pisarzom(autorom) wpisać nazwę strony i od razu przejść do jej edycji');
define('_MI_SWIKI_TOPPAGE','Indeks stron');
define('_MI_SWIKI_TOPPAGE_DESC','Strona do pokazania na na głównej stronie modułu');

// Added in SimplyWiki 1.2
define('_MI_SWIKI_PAGERESTORE_TITLE','Ta strona przywrócona');
define('_MI_SWIKI_PAGERESTORE_CAPTION','Powiadom mnie kiedy zostanie przyrócona wcześniejsza wersja tej strony');
define('_MI_SWIKI_PAGERESTORE_DESC','Otrzymasz powiadomienie kiedy ktoś przywróci wcześniejszą wersję tej strony');
define('_MI_SWIKI_PAGERESTORE_SUBJECT','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : obserwowana strona przywrócona');
define('_MI_SWIKI_GLOBALPAGERESTORE_TITLE','Jakakolwiek strona przywrócona');
define('_MI_SWIKI_GLOBALPAGERESTORE_CAPTION','Powiadom mnie kiedy zostanie przyrócona wcześniejsza wersja jakiejkolwiek strony z tego modułu');
define('_MI_SWIKI_GLOBALPAGERESTORE_DESC','Otrzymasz powiadomienie kiedy ktoś przywróci wcześniejszą wersję jakiejkolwiek strony z tego modułu');
define('_MI_SWIKI_GLOBALPAGERESTORE_SUBJECT','[{X_SITENAME}] {X_MODULE} auto-powiadomienie : strona przywrócona');


?>