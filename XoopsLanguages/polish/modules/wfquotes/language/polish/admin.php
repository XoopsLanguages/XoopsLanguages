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

define('_AM_QUOTEINTRO'       ,'Witaj w panelu kontroli modu�u WF-Quote');

/*
* Uni Lang defines
*/
define('_AM_CREATE'           ,'Utw�rz');
define('_AM_YES'              ,'Tak');
define('_AM_NO'               ,'Nie');
define('_AM_DELETE'           ,'Skasuj');
define('_AM_MODIFY'           ,'Zmie�');
define('_AM_UPDATED'          ,'Baza danych zosta�a uaktualniona');
define('_AM_NOTUPDATED'       ,'W czasie zapisu do bazy danych wyst�pi�y b��dy!');
define('_AM_CATCREATED'       ,'Kategoria zosta�a utworzona i zapisana!');
define('_AM_CATMODIFY'        ,'Kategoria zosta�a zmieniona i zapisana!');
/*
* Lang defines for functions.php
*/
define('_AM_QUOTEADMINHEAD'   ,'Zarz�dzanie cytatami');
define('_AM_QUOTEADMINCATH'   ,'Zarz�dzanie kategoriami cytat�w');
define('_AM_QUOTENEWCAT'      ,'Spis kategorii cytat�w');
define('_AM_QUOTENEWCATTXT'   ,'Utw�rz, zmie�, skasuj kategori� cytat�w do strony g��wnej cytat�w.');
define('_AM_QUOTENEWQUOTE'    ,'Spis cytat�w');
define('_AM_QUOTENEWQUOTETXT' ,'Utw�rz, zmie�, skasuj cytat lub wr�� do strony g��wnej cytat�w.');
define('_AM_QUOTEVALIDATE'    ,'Sprawd� nades�ane cytaty');
define('_AM_QUOTEVALTXT'      ,'Pozwala skasowa� lub doda� nades�ane cytaty.');
/*
* Lang defines for Category.php
*/
define('_AM_QUOTERECOUNT'     ,'Przelicz cytaty');
define('_AM_QUOTERECOUNTTXT'  ,'Pozwala na ponowne przeliczenie ilo�ci cytat�w w ka�dej z kategorii.');
define('_AM_CREATIN'          ,'Utw�rz w');
define('_AM_CATNAME'          ,'Nazwa kategorii');
define('_AM_CATDESCRIPT'      ,'Opis kategorii');
define('_AM_NOCATTOEDIT'      ,'Prosz� najpierw utworzy� kategori�, a nast�pnie j� zmienia�.');
define('_AM_MODIFYCAT'        ,'Zmie� kategori�');
define('_AM_DELCAT'           ,'Skasuj kategori�');
define('_AM_ADDCAT'           ,'Dodaj kategori�');
define('_AM_MODIFYTHISCAT'    ,'Zmieni� t� kategori�?');
define('_AM_DELETETHISCAT'    ,'Skasowa� t� kategori�?');
define('_AM_CATISDELETED'     ,'Kategoria %s zosta�a skasowana');

/*
* Lang defines for topics.php
*/
define('_AM_TOPICSADMIN'      ,'Administrator cytat�w');
define('_AM_NOTCTREATEDACAT'  ,'Nie mo�esz doda� cytatu je�li nie ma przynajmniej jednej kategorii!');
define('_AM_ADDQUOTE'         ,'Dodaj nowy cytat');
define('_AM_GROUPPROMPT'      ,'Ustaw paraw dost�pu dla:'); //updated 14/07/03
define('_AM_TOPICW'           ,'Waga:'); //updated 14/07/03
define('_AM_CREATEIN'         ,'Utw�rz w');
define('_AM_QUOTETITLE'       ,'Cyatat');
define('_AM_QUOTEBODY'        ,'Autor');
define('_AM_SUMMARY'          ,'Odsy�acz');
define('_AM_MODIFYQUOTE'      ,'Zmie� cytat');
define('_AM_MODIFYEXSITQUOTE' ,'Zmie� cytat');
define('_AM_MODIFYTHISQUOTE'  ,'Zmie� ten cytat');
define('_AM_DELQUOTE'         ,'Skasuj cytat');
define('_AM_DELTHISQUOTE'     ,'Skasuj ten cytat');
define('_AM_NOQUOTETOEDIT'    ,'W bazie danych nie ma cytat�w, kt�re mo�na zmieni�');
define('_AM_DELETETHISQUOTE'  ,'Skasuj ten cytat?');
define('_AM_QUOTEISDELETED'   ,'Cytat %s zosta� skasowany');
define('_AM_QUOTECREATED'     ,'Cytat zosta� utworzony i zapisany');
define('_AM_QUOTENOTCREATED'  ,'B��D: Cytat nie zosta� utworzony ani zapisany');
define('_AM_QUOTEMODIFY'      ,'Cytat zosta� zmieniony i zapisany');
define('_AM_QUOTENOTMODIFY'   ,'B��D: Cytat zosta� zmieniony i zapisany');

define('_AM_SUBALLOW'         ,'Zezw�l');
define('_AM_SUBDELETE'        ,'Skasuj');
define('_AM_SUBRETURN'        ,'Wr�� do administracji');
define('_AM_SUBRETURNTO'      ,'Wr�� do nowo dodanych cytat�w');
define('_AM_AUTHOR'           ,'Autor');
define('_AM_PUBLISHED'        ,'Opublikowany');
define('_AM_SUBPREVIEW'       ,'Administracyjny pogdl�d cytat�w');
define('_AM_SUBADMINPREV'     ,'Administracyjny podgl�d tego cytatu.');
define('_AM_DBUPDATED'        ,'Baza danych cytat�w zosta�a uaktualniona');
define('_AM_NOFAQFOESUB'      ,'Nie ma nowych cytat�w do sprawdzenia'); //Updated 14/07/03
define('_AM_NEWSUBMISSION'    ,'Nades�ane cytaty'); //Updated 14/07/03

/* hsalazar */
define("_AM_VISIBLE"          ,"Widzialne");
define("_DISABLEXCODES"       ,"Wy��cz kody XOOPS");
/*
*  Copyright and Support.  Please do not remove this line as this is part of the only copyright agreement for using WF-Snippets 
*/
define('_AM_VISITSUPPORT'     ,'(Strona ju� nie aktualna 04-03-2006) - Visit the WF-Section website for information, updates and help on its usage.<br /> WF-Quotes v1 Hsalazar/Catzwolf &copy; 2003 <a href="http://wfsections.xoops2.com/" target="_blank">WF-Quotes</a>');
?>