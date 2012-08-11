<?php
// $Id: images.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
//%%%%%% Image Manager %%%%%


define('_MD_IMGMAIN','Billedhåndtering Hovedside');

define('_MD_ADDIMGCAT','Tilføj billedkategori:');
define('_MD_EDITIMGCAT','Regigér billedkategori:');
define('_MD_IMGCATNAME','Kategorinavn:');
define('_MD_IMGCATRGRP','Vælg grupper der kan bruge denne billedhåndtering:<br /><br /><span style="font-weight: normal;">Disse grupper har adgang til at bruge billedhåndteringen til at vælge billeder med, men kan ikke uploade billeder. Webmasters har automatisk adgang.</span>');
define('_MD_IMGCATWGRP','Vælg grupper, der har adgang til at uploade billeder:<br /><br /><span style="font-weight: normal;">Typiske brugere er moderator- og administratorgrupper.</span>');
define('_MD_IMGCATWEIGHT','Fremvisningsrækkefølge i billedhåndteringen:');
define('_MD_IMGCATDISPLAY','Vis denne kategori?');
define('_MD_IMGCATSTRTYPE','Billeder uploades til:');
define('_MD_STRTYOPENG','Dette kan ikke ændres efterfølgende!');
define('_MD_INDB',' Gem i databasen (som binær "blob" data)');
define('_MD_ASFILE',' Gem som filer (i uploads directory)<br />');
define('_MD_RUDELIMGCAT','Er du sikker på, at du vil slette denne kategori og alle tilhørende billedfiler?');
define('_MD_RUDELIMG','Er du sikker på, at du vil slette dette billede?');

define('_MD_FAILDEL','Det lykkedes ikke at slette billedet %s fra databasen');
define('_MD_FAILDELCAT','Det lykkedes ikke at slette billedkategorien %s fra databasen');
define('_MD_FAILUNLINK','Det lykkedes ikke at slette billedet %s fra serverens directory');
?>