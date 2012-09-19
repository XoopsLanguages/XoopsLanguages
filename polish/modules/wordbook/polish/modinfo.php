<?php
/**
 * $Id: modinfo.php,v 1.1 2007/02/10 18:55:24 dap997 Exp $
 * Module: Wordbook - a multicategory glossary
 * Version: v 1.00
 * Release Date: 8 May 2004
 * Author: hsalazar
 * Licence: GNU
 */

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_WB_MD_NAME", "Wordbook");

// A brief description of this module
define("_MI_WB_MD_DESC", "Słownik");

// Sub menus in main menu block
define("_MI_WB_SUB_SMNAME1", "Dodaj wyrażenie");
define("_MI_WB_SUB_SMNAME2", "Poproś o definicję");
define("_MI_WB_SUB_SMNAME3", "Szukaj definicji");

define("_MI_WB_RANDOMTERM", "Losowe wyrażenie");

// A brief description of this module
define("_MI_WB_ALLOWSUBMIT", "1. Użytkownicy mogą dodawać definicje?");
define("_MI_WB_ALLOWSUBMITDSC", "Jeżeli wybierzesz 'Tak' to użytkownicy będą mieli dostęp do formularza dodającego nowe definicje");

define("_MI_WB_ANONSUBMIT", "2. Czy niezarejetrowani ogą dodawać definicje?");
define("_MI_WB_ANONSUBMITDSC", "Jeżeli wybierzesz 'Tak' to niezarejetrowani będą mieli dostęp do formularza dodającego nowe definicje");

define("_MI_WB_DATEFORMAT", "3. Wybierz format daty");
define("_MI_WB_DATEFORMATDSC", "W pliku language/polish/global.php ustaw format daty. Na przykład: 'd-M-Y H:i' wyświetli '23-Mar-2004 22:35'");

define("_MI_WB_PERPAGE", "4. Liczba definicji na stronie (Po stronie panelu admina)");
define("_MI_WB_PERPAGEDSC", "Liczba definicji które będą wyświetlane Administratorowi.");

define("_MI_WB_PERPAGEINDEX", "5. Liczba definicji na stronie (Po stronie użytkownika)");
define("_MI_WB_PERPAGEINDEXDSC", "Liczba definicji które będą wyświetlane użytkownikowi.");

define("_MI_WB_AUTOAPPROVE", "6. Automatyczne akceptowanie definicji?");
define("_MI_WB_AUTOAPPROVEDSC", "Jeżeli wybierzesz 'Tak', XOOPS będzie publikował proponowane definicje natychmiast bez udziału Administratora.");

define("_MI_WB_MULTICATS", "7. Chcesz mieć kategorie w słowniku?");
define("_MI_WB_MULTICATSDSC", "Jeżeli wybierzesz 'Tak', będziesz miał w słowniku kategorie. Jeżeli ustawisz 'Nie', będziesz miał tylko jedną, ogólną kategorię.");

define("_MI_WB_CATSINMENU","8. Wyświetlać kategorie w menu?"); 
define("_MI_WB_CATSINMENUDSC","Jeżeli wybierzesz 'Tak' to w menu zostaną wyświetlone linki do kategorii."); 

define("_MI_WB_CATSPERINDEX","9. Liczba kategorii na stronie (Po stronie użytkownika)?"); 
define("_MI_WB_CATSPERINDEXDSC","iczba kategorii które będą wyświetlane użytkownikowi na stronie głównej."); 

define("_MI_WB_ALLOWADMINHITS", "10. Czy wejścia admina mają być zliczane?");
define("_MI_WB_ALLOWADMINHITSDSC", "Jeżeli wybierzesz 'Tak', licznik będzie także liczył wejścia admina do każdej definicji.");

define("_MI_WB_MAILTOADMIN", "11. Wysłać e-mail do admina po dodaniu nowej propozycji?");  
define("_MI_WB_MAILTOADMINDSC", "Jeżeli wybierzesz 'Tak', otrzymasz e-mail po każdym dodaniu nowej definicji przez użytkownika.");  
define("_MI_WB_RANDOMLENGTH", "12. Liczba znaków do wyświetlania w losowych definicjach.");  
define("_MI_WB_RANDOMLENGTHDSC", "Ile znaków ma być wyświetlanych w obszarze losowych definicji oraz w bloku na stronie głównej? (Domyślnie: 150)");

define("_MI_WB_LINKTERMS", "13. Pokazywać linki do innych wpisów w definicji?");  
define("_MI_WB_LINKTERMSDSC", "Jeżeli wybierzesz 'Tak', system automatycznie doda linki do definicji we wpisach które już są w słowniku.");

// Names of admin menu items
define("_MI_WB_ADMENU1", "Indeks");
define("_MI_WB_ADMENU2", "Kategorie");
define("_MI_WB_ADMENU3", "Wpisy");
define("_MI_WB_ADMENU4", "Bloki");
define("_MI_WB_ADMENU5", "Idź do modułu");
//mondarse
define("_MI_WB_ADMENU6", "Import");

//Names of Blocks and Block information
define("_MI_WB_ENTRIESNEW", "Najnowsze wpisy");
define("_MI_WB_ENTRIESTOP", "Najpopularniejsze wpisy");

?>
