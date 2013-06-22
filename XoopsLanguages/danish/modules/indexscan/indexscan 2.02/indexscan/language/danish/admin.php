<?php
//%%%%%%		Admins language for index scan admin.php 		%%%%%
define("_AM_INDEXSCAN_NOW","Skan for manglende index filer");
define("_AM_INDEXSCAN_CREATE","Opret manglende indexfiler");
define("_AM_INDEXSCAN_CHMODNOW","Chmod dine xoops dirs til 775");
define("_AM_INDEXSCAN_HELP","Hjælp");
define("_AM_INDEXSCAN_CONFIG","Konfigurer");
define("_AM_INDEXSCAN_HEADER","Disse mapper mangler index filer");
define("_AM_INDEXSCAN_NOTFOUND","Index files <b>not</b> found<br>\n");
define("_AM_INDEXSCAN_FOUNDMISSING","<b>manglende</b> index files fundet\n");
define("_AM_INDEXSCAN_MAKINGHEADER","Laver manglende index.html filer");
define("_AM_INDEXSCAN_CREATED","index.html oprettet");
define("_AM_INDEXSCAN_CREATEDINDEXFILES","indexfiler oprettet");

// Added in 1.01
define("_AM_INDEXSCAN_CHECKFORFILES","<tr class='header'><center><h2>Skanner filer for IFRAME Infection</h2></tr></center><center><small>Ikke al brug af irame er injection.<br>Se koden til fundne filer før du sletter.<br><hr></small></center>");
define("_AM_INDEXSCAN_UNABLETOREADFILE","Kan ikke åbne fil: ");
define("_AM_INDEXSCAN_INFECTED","!!Iframe fundet!!");
define("_AM_INDEXSCAN_CLEAN","OK");
define("_AM_INDEXSCAN_INJECTIONSCAN","Skan for iframe injection");

//added in 2.00
define("_AM_INDEXSCAN_SCANNING4MISS","<br>Skanner for manglende Indexfiler.<br>Vent venligst.");
define("_AM_INDEXSCAN_CREATINGMISS","<br>Opretter manglende indexfiler.<br>Vent venligst.");
define("_AM_INDEXSCAN_SCANNING4IFRAME","<br>Skanner filer for iframe og javascript hijacking.");
define("_AM_INDEXSCAN_FINISDINJECTIONS"," filer indeholder ordene *iframe* eller *fromCharCode* som kan indikere iframe insert eller kodet javascript insert.<br> Check for at se indholdet af de fundne filer ved at klikke på den røde bar, før du handler yderliger med disse filer.<br><br> Filer der blev skannet ialt: ");

// Added in 2.01
define("_AM_INDEXSCAN_NOTVERIFY"," : Checksummen af denne fil er forskellig fra originalen!");
define("_AM_INDEXSCAN_VERIFIED"," Checksummen for admin/index.php er verificeret.");

// Added in 2.02
define("_AM_INDEXSCAN_CHECKILLEGALFILES","Check filer");
define("_AM_INDEXSCAN_SCANNING4ILLEGALFILES","Skanner webfiler");
define("_AM_INDEXSCAN_MAYBEOK","Muligvis ok fil");
define("_AM_INDEXSCAN_NOTINXOOPSINSTALL","Ikke en Xoopsfil");
define("_AM_INDEXSCAN_FINISDILLEGAL"," filer blev indetificeret til ikke at være Xoops filer. Antal filer scannet totalt: ");
define("_AM_INDEXSCAN_ILLEGAL_DESC","Filerne der blev fundet som ikke er Xoops filer blev matchet imod checkfile.txt i adminmappen, og imod filer i config som er defineret som lovlige filtyper.<br/>Disse filer kan være alt fra tmp filer til Thumbs.db eller info.txt filer.<br/>Hvis du ikke ønsker disse filer så tilføj dem til listen over 'automatisk slet listen' i config, og de vil blive slettet næste gang du kører denne skanning.");
define("_AM_INDEXSCAN_REALLYDELETE","Er du sikker ?, slet fil.: ");
define("_AM_INDEXSCAN_CREATEZIP","Lav zip for download");
define("_AM_INDEXSCAN_CREATINGZIP","Laver backup med tomme mapper<br/>plus index filer.<br/>");
define("_AM_INDEXSCAN_BACKEDUPDELETEDFROMBACKUP","Slettede filer i mappen fra backup undtaget index.html filer");
define("_AM_INDEXSCAN_BACKEDUP2","Lavede backup fra mappe.: ");
define("_AM_INDEXSCAN_DOWNLOADZIP","Download indexfiler zip");
define("_AM_INDEXSCAN_CREATINGZIPFORDOWNLOAD","Laver zipfil for download.");
define("_AM_INDEXSCAN_CREATEDINDEXINBACKUP","Lavede indexfiler i backupmappen.");
define("_AM_INDEXSCAN_CLEANUPDONE","Rydder op...Ok!");
define("_AM_INDEXSCAN_FILESARECOPIED"," Filer blev kopieret til backup-mappen.");
define("_AM_INDEXSCAN_FILESDELETED"," Filer blev igen slettet fra backup-mappen.");
define("_AM_INDEXSCAN_FILESCREATED"," Index.html filer blev dannet i backup-mappen.");
?>