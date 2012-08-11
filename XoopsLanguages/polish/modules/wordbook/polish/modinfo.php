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
define("_MI_WB_MD_NAME","Wordbook");

// A brief description of this module
define("_MI_WB_MD_DESC","S³ownik");

// Sub menus in main menu block
define("_MI_WB_SUB_SMNAME1","Dodaj wyra¿enie");
define("_MI_WB_SUB_SMNAME2","Popro¶ o definicjê");
define("_MI_WB_SUB_SMNAME3","Szukaj definicji");

define("_MI_WB_RANDOMTERM","Losowe wyra¿enie");

// A brief description of this module
define("_MI_WB_ALLOWSUBMIT","1. U¿ytkownicy mog± dodawaæ definicje?");
define("_MI_WB_ALLOWSUBMITDSC","Je¿eli wybierzesz 'Tak' to u¿ytkownicy bêd± mieli dostêp do formularza dodaj±cego nowe definicje");

define("_MI_WB_ANONSUBMIT","2. Czy niezarejetrowani og± dodawaæ definicje?");
define("_MI_WB_ANONSUBMITDSC","Je¿eli wybierzesz 'Tak' to niezarejetrowani bêd± mieli dostêp do formularza dodaj±cego nowe definicje");

define("_MI_WB_DATEFORMAT","3. Wybierz format daty");
define("_MI_WB_DATEFORMATDSC","W pliku language/polish/global.php ustaw format daty. Na przyk³ad: 'd-M-Y H:i' wy¶wietli '23-Mar-2004 22:35'");

define("_MI_WB_PERPAGE","4. Liczba definicji na stronie (Po stronie panelu admina)");
define("_MI_WB_PERPAGEDSC","Liczba definicji które bêd± wy¶wietlane Administratorowi.");

define("_MI_WB_PERPAGEINDEX","5. Liczba definicji na stronie (Po stronie u¿ytkownika)");
define("_MI_WB_PERPAGEINDEXDSC","Liczba definicji które bêd± wy¶wietlane u¿ytkownikowi.");

define("_MI_WB_AUTOAPPROVE","6. Automatyczne akceptowanie definicji?");
define("_MI_WB_AUTOAPPROVEDSC","Je¿eli wybierzesz 'Tak', XOOPS bêdzie publikowa³ proponowane definicje natychmiast bez udzia³u Administratora.");

define("_MI_WB_MULTICATS","7. Chcesz mieæ kategorie w s³owniku?");
define("_MI_WB_MULTICATSDSC","Je¿eli wybierzesz 'Tak', bêdziesz mia³ w s³owniku kategorie. Je¿eli ustawisz 'Nie', bêdziesz mia³ tylko jedn±, ogóln± kategoriê.");

define("_MI_WB_CATSINMENU","8. Wy¶wietlaæ kategorie w menu?"); 
define("_MI_WB_CATSINMENUDSC","Je¿eli wybierzesz 'Tak' to w menu zostan± wy¶wietlone linki do kategorii."); 

define("_MI_WB_CATSPERINDEX","9. Liczba kategorii na stronie (Po stronie u¿ytkownika)?"); 
define("_MI_WB_CATSPERINDEXDSC","iczba kategorii które bêd± wy¶wietlane u¿ytkownikowi na stronie g³ównej."); 

define("_MI_WB_ALLOWADMINHITS","10. Czy wej¶cia admina maj± byæ zliczane?");
define("_MI_WB_ALLOWADMINHITSDSC","Je¿eli wybierzesz 'Tak', licznik bêdzie tak¿e liczy³ wej¶cia admina do ka¿dej definicji.");

define("_MI_WB_MAILTOADMIN","11. Wys³aæ e-mail do admina po dodaniu nowej propozycji?");  
define("_MI_WB_MAILTOADMINDSC","Je¿eli wybierzesz 'Tak', otrzymasz e-mail po ka¿dym dodaniu nowej definicji przez u¿ytkownika.");  
define("_MI_WB_RANDOMLENGTH","12. Liczba znaków do wy¶wietlania w losowych definicjach.");  
define("_MI_WB_RANDOMLENGTHDSC","Ile znaków ma byæ wy¶wietlanych w obszarze losowych definicji oraz w bloku na stronie g³ównej? (Domy¶lnie: 150)");

define("_MI_WB_LINKTERMS","13. Pokazywaæ linki do innych wpisów w definicji?");  
define("_MI_WB_LINKTERMSDSC","Je¿eli wybierzesz 'Tak', system automatycznie doda linki do definicji we wpisach które ju¿ s± w s³owniku.");

// Names of admin menu items
define("_MI_WB_ADMENU1","Indeks");
define("_MI_WB_ADMENU2","Kategorie");
define("_MI_WB_ADMENU3","Wpisy");
define("_MI_WB_ADMENU4","Bloki");
define("_MI_WB_ADMENU5","Id¼ do modu³u");
//mondarse
define("_MI_WB_ADMENU6","Import");

//Names of Blocks and Block information
define("_MI_WB_ENTRIESNEW","Najnowsze wpisy");
define("_MI_WB_ENTRIESTOP","Najpopularniejsze wpisy");

?>
