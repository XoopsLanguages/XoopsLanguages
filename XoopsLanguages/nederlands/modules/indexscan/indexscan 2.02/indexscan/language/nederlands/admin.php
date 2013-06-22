<?php
//%%%%%%		Nederlands taalbestand voor index scan / administratie 		%%%%%
define("_AM_INDEXSCAN_NOW","Scan op ontbrekende index bestanden");
define("_AM_INDEXSCAN_CREATE","Maak index bestanden aan waar deze ontbreken");
define("_AM_INDEXSCAN_HELP","Help");
define("_AM_INDEXSCAN_CONFIG","Configuratie");
define("_AM_INDEXSCAN_HEADER","In deze mappen ontbreken index bestanden");
define("_AM_INDEXSCAN_NOTFOUND","Index bestanden <b>niet</b> gevonden<br>\n");
define("_AM_INDEXSCAN_FOUNDMISSING","<b>ontbrekende</b> index bestanden gevonden\n");
define("_AM_INDEXSCAN_MAKINGHEADER","Bezig ontbrekende index.html bestanden aan te maken");
define("_AM_INDEXSCAN_CREATED","index.html aangemaakt");
define("_AM_INDEXSCAN_CREATEDINDEXFILES","index bestand aangemaakt");

// Added in 1.01
define("_AM_INDEXSCAN_CHECKFORFILES","<tr class='header'><center><h2>Checking files for IFRAME Infection</h2></tr></center><center><small>Not that not all uses of Ifram is injections.<br>Check the code in the files found before you delete.<br><hr></small></center>");
define("_AM_INDEXSCAN_UNABLETOREADFILE","Unable to open file ");
define("_AM_INDEXSCAN_INFECTED","!!Word IFRAME found!!");
define("_AM_INDEXSCAN_CLEAN","OK");
define("_AM_INDEXSCAN_INJECTIONSCAN","Scan for ifram injections");

//added in 2.00
define("_AM_INDEXSCAN_SCANNING4MISS","<br>Looking for missin index files.<br>Please wait.");
define("_AM_INDEXSCAN_CREATINGMISS","<br>Creating missing index files.<br>Please wait.");
define("_AM_INDEXSCAN_SCANNING4IFRAME","<br>Looking for iframes and encoded javascript.<br>Please wait.");
define("_AM_INDEXSCAN_FINISDINJECTIONS"," files contain the word *iframe* or *fromCharCode* indicating ifram insert or encoded javascript <br> Check to see if this is the case by clicking the red bar to see source code. Before taking any action.<br><br> Total number of files scanned:");
?>