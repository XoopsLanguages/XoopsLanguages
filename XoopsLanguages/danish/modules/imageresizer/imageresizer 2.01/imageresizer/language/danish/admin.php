<?php
// Module  by Rune Hauge (Runeher)
// color of the header
define('_IR_XOIMGRESIZER_HEADERCOLOR','#6c8090'); // Blålig - Skift til dine præferencer
// color of the sizes
define('_IR_XOIMGRESIZER_RCLICKCOLOR','#339933'); // Grøn - Skift til dine præferencer
define('_IR_XOIMGRESIZER_ERRORCOLOR','#FF0000'); // Rød - Skift til dine præferencer
define('_IR_XOIMGRESIZER_BY','Module af');
define('_IR_XOIMGRESIZER_HELP','Hjælp');
//Popup-admin-help
define('_IR_XOIMGRESIZER_POPUP1','Hjælp');
define('_IR_XOIMGRESIZER_POPUP2','<p>Hvis du vil redigere billedet eller miniature output størrelse, åbn index.php og kigge efter:</p>
<p>$modwidth = 550;</p>
<p>and </p>
<p>$modwidth = 120;</p>
<p>Ændre den til dine præferencer i pixel.</p>
<p>At aktivere/deaktivere thumbnails/avatarer kig i index.php omkring linje 115.</p>
<p>Hvad hvis nogen indsende en ikke-billedfil? Det betyder ikke noget, da enhver fil der
indsendes, vil blive tildelt jpg. Dette betyder, at du vil være i stand til at slette den fra admin menuen.</p>');
// admin things
define('_IR_XOIMGRESIZER_DELETED','Alle billeder er blevet fjernet!');
define('_IR_XOIMGRESIZER_SHOWDIR','VIS FILER I RESIZE FOLDEREN!');
define('_IR_XOIMGRESIZER_CLICKHERE','SLET FILER I RESIZE FOLDEREN!');
define('_IR_XOIMGRESIZER_ADMIN','Image Resizer Admin');
define('_IR_XOIMGRESIZER_FILES','Filer:');
define('_IR_XOIMGRESIZER_DETAIL','Indhold af mappen :');// Details of the path
// Note! The files remove.php and showdir.php located in the resizedimages directory can / should / will NOT be deleted!
define('_IR_XOIMGRESIZER_NOTE1','Bemærk! Filerne remove.php og showdir.php i resizeedimages mappen bliver/skal ikks slettes!');
define('_IR_XOIMGRESIZER_BYTES','Bytes');
define('_IR_XOIMGRESIZER_KB','KB');
define('_IR_XOIMGRESIZER_MB','MB');
define('_IR_XOIMGRESIZER_GB','GB');
define('_IR_XOIMGRESIZER_TOTSIZE','Total Størrelse:');
define('_IR_XOIMGRESIZER_TOTFILES','Antal filer:'); // No. of files:
define('_IR_XOIMGRESIZER_TOTDIR','Antal mapper:'); // No. of directories:

?>