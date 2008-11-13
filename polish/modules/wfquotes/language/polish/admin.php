<?php
/* 
* $Id: admin.php,v 1.1 2007/02/10 18:55:43 dap997 Exp $
* Module: WF-Quote
* Version: v1.00
* Release Date: 15 August 2003
* Author: hsalazar, after Catzwolf
* Licence: GNU
*/

//Main Admin Section

define('_AM_QUOTEINTRO'       ,'Witaj w panelu kontroli modu³u WF-Quote');

/*
* Uni Lang defines
*/
define('_AM_CREATE'           ,'Utwórz');
define('_AM_YES'              ,'Tak');
define('_AM_NO'               ,'Nie');
define('_AM_DELETE'           ,'Skasuj');
define('_AM_MODIFY'           ,'Zmieñ');
define('_AM_UPDATED'          ,'Baza danych zosta³a uaktualniona');
define('_AM_NOTUPDATED'       ,'W czasie zapisu do bazy danych wyst±pi³y b³êdy!');
define('_AM_CATCREATED'       ,'Kategoria zosta³a utworzona i zapisana!');
define('_AM_CATMODIFY'        ,'Kategoria zosta³a zmieniona i zapisana!');
/*
* Lang defines for functions.php
*/
define('_AM_QUOTEADMINHEAD'   ,'Zarz±dzanie cytatami');
define('_AM_QUOTEADMINCATH'   ,'Zarz±dzanie kategoriami cytatów');
define('_AM_QUOTENEWCAT'      ,'Spis kategorii cytatów');
define('_AM_QUOTENEWCATTXT'   ,'Utwórz, zmieñ, skasuj kategoriê cytatów do strony g³ównej cytatów.');
define('_AM_QUOTENEWQUOTE'    ,'Spis cytatów');
define('_AM_QUOTENEWQUOTETXT' ,'Utwórz, zmieñ, skasuj cytat lub wróæ do strony g³ównej cytatów.');
define('_AM_QUOTEVALIDATE'    ,'Sprawd¼ nades³ane cytaty');
define('_AM_QUOTEVALTXT'      ,'Pozwala skasowaæ lub dodaæ nades³ane cytaty.');
/*
* Lang defines for Category.php
*/
define('_AM_QUOTERECOUNT'     ,'Przelicz cytaty');
define('_AM_QUOTERECOUNTTXT'  ,'Pozwala na ponowne przeliczenie ilo¶ci cytatów w ka¿dej z kategorii.');
define('_AM_CREATIN'          ,'Utwórz w');
define('_AM_CATNAME'          ,'Nazwa kategorii');
define('_AM_CATDESCRIPT'      ,'Opis kategorii');
define('_AM_NOCATTOEDIT'      ,'Proszê najpierw utworzyæ kategoriê, a nastêpnie j± zmieniaæ.');
define('_AM_MODIFYCAT'        ,'Zmieñ kategoriê');
define('_AM_DELCAT'           ,'Skasuj kategoriê');
define('_AM_ADDCAT'           ,'Dodaj kategoriê');
define('_AM_MODIFYTHISCAT'    ,'Zmieniæ tê kategoriê?');
define('_AM_DELETETHISCAT'    ,'Skasowaæ tê kategoriê?');
define('_AM_CATISDELETED'     ,'Kategoria %s zosta³a skasowana');

/*
* Lang defines for topics.php
*/
define('_AM_TOPICSADMIN'      ,'Administrator cytatów');
define('_AM_NOTCTREATEDACAT'  ,'Nie mo¿esz dodaæ cytatu je¶li nie ma przynajmniej jednej kategorii!');
define('_AM_ADDQUOTE'         ,'Dodaj nowy cytat');
define('_AM_GROUPPROMPT'      ,'Ustaw paraw dostêpu dla:'); //updated 14/07/03
define('_AM_TOPICW'           ,'Waga:'); //updated 14/07/03
define('_AM_CREATEIN'         ,'Utwórz w');
define('_AM_QUOTETITLE'       ,'Cyatat');
define('_AM_QUOTEBODY'        ,'Autor');
define('_AM_SUMMARY'          ,'Odsy³acz');
define('_AM_MODIFYQUOTE'      ,'Zmieñ cytat');
define('_AM_MODIFYEXSITQUOTE' ,'Zmieñ cytat');
define('_AM_MODIFYTHISQUOTE'  ,'Zmieñ ten cytat');
define('_AM_DELQUOTE'         ,'Skasuj cytat');
define('_AM_DELTHISQUOTE'     ,'Skasuj ten cytat');
define('_AM_NOQUOTETOEDIT'    ,'W bazie danych nie ma cytatów, które mo¿na zmieniæ');
define('_AM_DELETETHISQUOTE'  ,'Skasuj ten cytat?');
define('_AM_QUOTEISDELETED'   ,'Cytat %s zosta³ skasowany');
define('_AM_QUOTECREATED'     ,'Cytat zosta³ utworzony i zapisany');
define('_AM_QUOTENOTCREATED'  ,'B£¡D: Cytat nie zosta³ utworzony ani zapisany');
define('_AM_QUOTEMODIFY'      ,'Cytat zosta³ zmieniony i zapisany');
define('_AM_QUOTENOTMODIFY'   ,'B£¡D: Cytat zosta³ zmieniony i zapisany');

define('_AM_SUBALLOW'         ,'Zezwól');
define('_AM_SUBDELETE'        ,'Skasuj');
define('_AM_SUBRETURN'        ,'Wróæ do administracji');
define('_AM_SUBRETURNTO'      ,'Wróæ do nowo dodanych cytatów');
define('_AM_AUTHOR'           ,'Autor');
define('_AM_PUBLISHED'        ,'Opublikowany');
define('_AM_SUBPREVIEW'       ,'Administracyjny pogdl±d cytatów');
define('_AM_SUBADMINPREV'     ,'Administracyjny podgl±d tego cytatu.');
define('_AM_DBUPDATED'        ,'Baza danych cytatów zosta³a uaktualniona');
define('_AM_NOFAQFOESUB'      ,'Nie ma nowych cytatów do sprawdzenia'); //Updated 14/07/03
define('_AM_NEWSUBMISSION'    ,'Nades³ane cytaty'); //Updated 14/07/03

/* hsalazar */
define("_AM_VISIBLE"          ,"Widzialne");
define("_DISABLEXCODES"       ,"Wy³±cz kody XOOPS");
/*
*  Copyright and Support.  Please do not remove this line as this is part of the only copyright agreement for using WF-Snippets 
*/
define('_AM_VISITSUPPORT'     ,'(Strona ju¿ nie aktualna 04-03-2006) - Visit the WF-Section website for information, updates and help on its usage.<br /> WF-Quotes v1 Hsalazar/Catzwolf &copy; 2003 <a href="http://wfsections.xoops2.com/" target="_blank">WF-Quotes</a>');
?>