<?php
// $Id: images.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
//%%%%%% Image Manager %%%%%


define('_MD_IMGMAIN','Huvudsida för bildhanteraren');

define('_MD_ADDIMGCAT','Lägg till bildkategori:');
define('_MD_EDITIMGCAT','Redigera bildkategori:');
define('_MD_IMGCATNAME','Kategorinamn:');
define('_MD_IMGCATRGRP','Välj grupper för bildhanteraren:<br /><br /><span style="font-weight: normal;">Dessa grupper får använda bildhanteraren för att välja bilder, men ej ladda upp nya. Webbmastern har automatiskt åtkomst.</span>');
define('_MD_IMGCATWGRP','Välj grupper som får ladda upp nya bilder:<br /><br /><span style="font-weight: normal;">Typiskt är att tillåta för moderator- och administratörsgrupper.</span>');
define('_MD_IMGCATWEIGHT','Visningsordning i bildhanteraren:');
define('_MD_IMGCATDISPLAY','Visa denna kategori?');
define('_MD_IMGCATSTRTYPE','Bilder laddas upp till:');
define('_MD_STRTYOPENG','Detta kan inte ändras efteråt!');
define('_MD_INDB',' Spara i databasen (som binär, "blob", data)');
define('_MD_ASFILE',' Spara som filer (i katalogen "uploads")<br />');
define('_MD_RUDELIMGCAT','Är du säker på att du vill radera denna kategori och alla dess bilder?');
define('_MD_RUDELIMG','Är du säker på att du vill radera dessa bildfiler?');

define('_MD_FAILDEL','Misslyckades att radera bilden %s från databasen');
define('_MD_FAILDELCAT','Misslyckades att radera bildkategorin %s från databasen');
define('_MD_FAILUNLINK','Misslyckades att radera bilden %s från serverkatalogen');
?>