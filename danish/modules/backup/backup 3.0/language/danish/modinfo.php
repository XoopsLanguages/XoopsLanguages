<?php
define("_DB_BACKUP_NAME","XOOPS DB backup & restore");
define("_DB_BACKUP_DESC","Backup og restore din Database");

define("_DB_TARGET","Mål"); 
define("_DB_ZIPTYPE","Gem som fil"); 
define("_DB_EXECTIMELIMIT","Maksimale gennemførelsestid tid i sekunder (0 for ingen grænse)"); 
define("_DB_ALLOWBACKQUOTES","Vedlæg tabel og feltnavne med backquotes"); 
define("_DB_ALLOWDROP","Tilføj 'drop table' "); 

define("_DB_EMAILTO","E-mailadresser, der skal sendes til"); 
define("_DB_EMAILTO_DESC","Adskil ved','"); 
define("_DB_EMAILATTACH","Email sql-fil som vedhæftet fil"); 
define("_DB_EMAILATTACH_DESC","begrænset af filstørrelse"); 
define("_DB_DBFILES","Database filer gemt på serveren"); 
define("_DB_DBFILES_DESC","Gamle filer vil blive fjernet"); 
define("_DB_DBFILES_PATH","Sti til backup-filer"); 
define("_DB_DBFILES_PATH_DESC","Skal være <strong> skrivbar </ strong>"); 
define("_DB_DBFILES_SPLIT","Split-fil"); 
define("_DB_DBFILES_SPLIT_DESC","hver fil for hver enkelt tabel; anbefales til store tabel"); 
define("_DB_POSLINE","Brug linje nummer som indikator for file pointer position"); 
define("_DB_POSLINE_DESC","ftell kunne give et forkert resultat skyldes driften systemer benytter linje nummer er ineffektive, men sikre et korrekt resultat"); 
define("_RESTORE_NONADMIN","Gendan som ikke administrator"); 
define("_DB_POSLINE_DESC","ikke admin er påkrævet for bruger data, sessions eller moduler, der indeholder sikkerhedskopien, når gendannelsen er færdig, deaktivere denne indstilling og opdatere cachen så snart som muligt");
?>