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

define('_AM_QUOTEINTRO'       ,'Witaj w panelu kontroli modułu WF-Quote');

/*
* Uni Lang defines
*/
define('_AM_CREATE'           ,'Utwórz');
define('_AM_YES'              ,'Tak');
define('_AM_NO'               ,'Nie');
define('_AM_DELETE'           ,'Skasuj');
define('_AM_MODIFY'           ,'Zmień');
define('_AM_UPDATED'          ,'Baza danych została uaktualniona');
define('_AM_NOTUPDATED'       ,'W czasie zapisu do bazy danych wystąpiły błędy!');
define('_AM_CATCREATED'       ,'Kategoria została utworzona i zapisana!');
define('_AM_CATMODIFY'        ,'Kategoria została zmieniona i zapisana!');
/*
* Lang defines for functions.php
*/
define('_AM_QUOTEADMINHEAD'   ,'Zarządzanie cytatami');
define('_AM_QUOTEADMINCATH'   ,'Zarządzanie kategoriami cytatów');
define('_AM_QUOTENEWCAT'      ,'Spis kategorii cytatów');
define('_AM_QUOTENEWCATTXT'   ,'Utwórz, zmień, skasuj kategorię cytatów do strony głównej cytatów.');
define('_AM_QUOTENEWQUOTE'    ,'Spis cytatów');
define('_AM_QUOTENEWQUOTETXT' ,'Utwórz, zmień, skasuj cytat lub wróć do strony głównej cytatów.');
define('_AM_QUOTEVALIDATE'    ,'Sprawdź nadesłane cytaty');
define('_AM_QUOTEVALTXT'      ,'Pozwala skasować lub dodać nadesłane cytaty.');
/*
* Lang defines for Category.php
*/
define('_AM_QUOTERECOUNT'     ,'Przelicz cytaty');
define('_AM_QUOTERECOUNTTXT'  ,'Pozwala na ponowne przeliczenie ilości cytatów w każdej z kategorii.');
define('_AM_CREATIN'          ,'Utwórz w');
define('_AM_CATNAME'          ,'Nazwa kategorii');
define('_AM_CATDESCRIPT'      ,'Opis kategorii');
define('_AM_NOCATTOEDIT'      ,'Proszę najpierw utworzyć kategorię, a następnie ją zmieniać.');
define('_AM_MODIFYCAT'        ,'Zmień kategorię');
define('_AM_DELCAT'           ,'Skasuj kategorię');
define('_AM_ADDCAT'           ,'Dodaj kategorię');
define('_AM_MODIFYTHISCAT'    ,'Zmienić tę kategorię?');
define('_AM_DELETETHISCAT'    ,'Skasować tę kategorię?');
define('_AM_CATISDELETED'     ,'Kategoria %s została skasowana');

/*
* Lang defines for topics.php
*/
define('_AM_TOPICSADMIN'      ,'Administrator cytatów');
define('_AM_NOTCTREATEDACAT'  ,'Nie możesz dodać cytatu jeśli nie ma przynajmniej jednej kategorii!');
define('_AM_ADDQUOTE'         ,'Dodaj nowy cytat');
define('_AM_GROUPPROMPT'      ,'Ustaw paraw dostępu dla:'); //updated 14/07/03
define('_AM_TOPICW'           ,'Waga:'); //updated 14/07/03
define('_AM_CREATEIN'         ,'Utwórz w');
define('_AM_QUOTETITLE'       ,'Cyatat');
define('_AM_QUOTEBODY'        ,'Autor');
define('_AM_SUMMARY'          ,'Odsyłacz');
define('_AM_MODIFYQUOTE'      ,'Zmień cytat');
define('_AM_MODIFYEXSITQUOTE' ,'Zmień cytat');
define('_AM_MODIFYTHISQUOTE'  ,'Zmień ten cytat');
define('_AM_DELQUOTE'         ,'Skasuj cytat');
define('_AM_DELTHISQUOTE'     ,'Skasuj ten cytat');
define('_AM_NOQUOTETOEDIT'    ,'W bazie danych nie ma cytatów, które można zmienić');
define('_AM_DELETETHISQUOTE'  ,'Skasuj ten cytat?');
define('_AM_QUOTEISDELETED'   ,'Cytat %s został skasowany');
define('_AM_QUOTECREATED'     ,'Cytat został utworzony i zapisany');
define('_AM_QUOTENOTCREATED'  ,'BŁĄD: Cytat nie został utworzony ani zapisany');
define('_AM_QUOTEMODIFY'      ,'Cytat został zmieniony i zapisany');
define('_AM_QUOTENOTMODIFY'   ,'BŁĄD: Cytat został zmieniony i zapisany');

define('_AM_SUBALLOW'         ,'Zezwól');
define('_AM_SUBDELETE'        ,'Skasuj');
define('_AM_SUBRETURN'        ,'Wróć do administracji');
define('_AM_SUBRETURNTO'      ,'Wróć do nowo dodanych cytatów');
define('_AM_AUTHOR'           ,'Autor');
define('_AM_PUBLISHED'        ,'Opublikowany');
define('_AM_SUBPREVIEW'       ,'Administracyjny pogdląd cytatów');
define('_AM_SUBADMINPREV'     ,'Administracyjny podgląd tego cytatu.');
define('_AM_DBUPDATED'        ,'Baza danych cytatów została uaktualniona');
define('_AM_NOFAQFOESUB'      ,'Nie ma nowych cytatów do sprawdzenia'); //Updated 14/07/03
define('_AM_NEWSUBMISSION'    ,'Nadesłane cytaty'); //Updated 14/07/03

/* hsalazar */
define("_AM_VISIBLE"          ,"Widzialne");
define("_DISABLEXCODES"       ,"Wyłącz kody XOOPS");
/*
*  Copyright and Support.  Please do not remove this line as this is part of the only copyright agreement for using WF-Snippets 
*/
define('_AM_VISITSUPPORT'     ,'(Strona już nie aktualna 04-03-2006) - Visit the WF-Section website for information, updates and help on its usage.<br /> WF-Quotes v1 Hsalazar/Catzwolf &copy; 2003 <a href="http://wfsections.xoops2.com/" target="_blank">WF-Quotes</a>');
?>