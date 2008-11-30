<?php
// $Id: images.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
//%%%%%% Image Manager %%%%%


define('_MD_IMGMAIN','Kép kezelõ fõoldal');

define('_MD_ADDIMGCAT','Kép kategória hozzáadása:');
define('_MD_EDITIMGCAT','Kép kategória szerkesztése:');
define('_MD_IMGCATNAME','Kategória neve:');
define('_MD_IMGCATRGRP','Válaszd ki a csoportokat a kép kezelõ használatára:<br /><br /><span style="font-weight: normal;">Ezek a csoportok hozzáférnek a kép kezelõhöz, de nem tölthetnek fel képeket. A Webmester automatikusan kap jogot hozzá.</span>');
define('_MD_IMGCATWGRP','Válaszd ki a csoportokat akik tölthetnek fel képeket:<br /><br /><span style="font-weight: normal;">Általában a moderátor és admin csoportokat állítják be.</span>');
define('_MD_IMGCATWEIGHT','Megjelenítési sorrend a kép kezelõben:');
define('_MD_IMGCATDISPLAY','Kategória megjelenítése?');
define('_MD_IMGCATSTRTYPE','A képek feltöltve:');
define('_MD_STRTYOPENG','Ezt késõbb nem lehet módosítani!');
define('_MD_INDB',' Tárolás az adatbázisban (bináris adatként)');
define('_MD_ASFILE','Tárolás fájlként (az uploads könyvtárakban)<br />');
define('_MD_RUDELIMGCAT','Biztosan törölni akarod ezt a kategóriát a benne található összes képpel együtt?');
define('_MD_RUDELIMG','Biztosan törölni akarod ezt a képfájlt?');

define('_MD_FAILDEL', 'A %s képet nem sikerült törölni az adatbázisból');
define('_MD_FAILDELCAT', 'A %s kép kategóriát nem sikerült törölni az adatbázisból');
define('_MD_FAILUNLINK', 'A %s képet nem sikerült törölni a könytárból');
?>