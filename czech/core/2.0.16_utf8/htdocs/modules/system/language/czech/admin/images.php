<?php
// $Id: images.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
//%%%%%% Image Manager %%%%%


define('_MD_IMGMAIN','Správce obrázků');

define('_MD_ADDIMGCAT','Přidat kategorii:');
define('_MD_EDITIMGCAT','Upravit kategorii:');
define('_MD_IMGCATNAME','Název:');
define('_MD_IMGCATRGRP','Uživatelská skupina, která smí používat správce obrázků:<br /><br /><span style="font-weight: normal;">Tato skupina smí používat správce obrázků pro výběr obrázků, ale nesmí obrázky přidávat. Administrátor má přístup automaticky.</span>');
define('_MD_IMGCATWGRP','Uživatelská skupina s oprávněním přidávat obrázky:<br /><br /><span style="font-weight: normal;">Typicky moderátoři či administrátoři.</span>');
define('_MD_IMGCATWEIGHT','Váha kategorie ve správci obrázků:');
define('_MD_IMGCATDISPLAY','Zobrazit tuto kategorii?');
define('_MD_IMGCATSTRTYPE','Obrázek byl nahrán do:');
define('_MD_STRTYOPENG','Toto nebude možno později změnit!');
define('_MD_INDB',' uložit do databáze (jako binární "blok" data)');
define('_MD_ASFILE',' uložit jako soubor (v určeném adresáři)<br />');
define('_MD_RUDELIMGCAT','Opravdu chcete smazat tuto kategorii a všechny v ní obsažené soubory obrázků?');
define('_MD_RUDELIMG','Opravdu chcete smazat tento soubor obrázku?');

define('_MD_FAILDEL','Chyba při mazání obrázku <b>%s</b> z databáze');
define('_MD_FAILDELCAT','Chyba při mazání kategorie <b>%s</b> z databáze');
define('_MD_FAILUNLINK','Chyba při mazání obrázku <b>%s</b> z adresáře na serveru');
?>