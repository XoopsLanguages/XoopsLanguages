<?php
// $Id: groups.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_AM_EDITADG","Redigera grupper");
define("_AM_MODIFY","Ändra");
define("_AM_DELETE","Radera");
define("_AM_CREATENEWADG","Skapa ny grupp");
define("_AM_NAME","Namn");
define("_AM_DESCRIPTION","Beskrivning");
define("_AM_INDICATES","* markerar obligatoriska fält");
define("_AM_SYSTEMRIGHTS","Administratörsrättigheter för system");
define("_AM_ACTIVERIGHTS","Administratörsrättigheter för modul");
define("_AM_IFADMIN","Om administratörsrättigheter för en modul är ikryssat kommer åtkomsträttigheterna för modulen alltid vara påslagna.");
define("_AM_ACCESSRIGHTS","Åtkomsträttigheter för modul");
define("_AM_UPDATEADG","Uppdatera grupp");
define("_AM_MODIFYADG","Modifiera grupp");
define("_AM_DELETEADG","Radera grupp");
define("_AM_AREUSUREDEL","Är du säker på att du vill radera denna grupp?");
define("_AM_YES","Ja");
define("_AM_NO","Nej");
define("_AM_EDITMEMBER","Ändra medlemmar i denna grupp");
define("_AM_MEMBERS","Medlemmar");
define("_AM_NONMEMBERS","Icke-medlemmar");
define("_AM_ADDBUTTON"," lägg till --> ");
define("_AM_DELBUTTON","<-- radera");
define("_AM_UNEED2ENTER","Du måste fylla i obligatoriska fält!");

// Added in RC3
define("_AM_BLOCKRIGHTS","Åtkomsträttigheter till block");

define('_AM_FINDU4GROUP','Hitta medlemmar i denna grupp');
define('_AM_GROUPSMAIN','Huvudsida för grupper');

define('_AM_ADMINNO','Det måste finnas åtminstone en användare i webmastergruppen');
// Custom block, suggested by trabis
define("_AM_CUSTOMBLOCK","Egenudviklet blok");
?>