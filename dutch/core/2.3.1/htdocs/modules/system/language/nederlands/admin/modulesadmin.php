<?php

////////////////////////////////////////////////////////////////
//############################################################//
//## Translated by : Dylian Melgert                         ##//
//## Website       : http://www.dylian.melgert.net/software ##//
//## XOOPS version : 2.3 RC3                                ##//
//############################################################//
////////////////////////////////////////////////////////////////

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","Module Beheer");
define("_MD_AM_MODULE","Module");
define("_MD_AM_VERSION","Versie");
define("_MD_AM_LASTUP","Laatste Update");
define("_MD_AM_DEACTIVATED","Gedeactieveerd");
define("_MD_AM_ACTION","Actie");
define("_MD_AM_DEACTIVATE","Deactiveer");
define("_MD_AM_ACTIVATE","Activeer");
define("_MD_AM_UPDATE","Update");
define("_MD_AM_DUPEN","Dubbele ingang in de modules tabel!");
define("_MD_AM_DEACTED","De geselecteerde module is succesvol gedeactiveerd. Je kan de module nu veilig deinstaleren");
define("_MD_AM_ACTED","De geselcteerde module is geactiveerd.");
define("_MD_AM_UPDTED","De geselecteerde module is gedeactiveerd.");
define("_MD_AM_SYSNO","De systeem module kan niet worden gedeactiveerd.");
define("_MD_AM_STRTNO","Deze module is ingesteld al je homepagina. Verander eerst je start module aub.");

// added in RC2
define("_MD_AM_PCMFM","AUB Controleren:");

// added in RC3
define("_MD_AM_ORDER","Volegorde");
define("_MD_AM_ORDER0","(0 = verberg)");
define("_MD_AM_ACTIVE","Actief");
define("_MD_AM_INACTIVE","Inactief");
define("_MD_AM_NOTINSTALLED","Niet geinstaleerd");
define("_MD_AM_NOCHANGE","Geen veranderingen");
define("_MD_AM_INSTALL","Instaleer");
define("_MD_AM_UNINSTALL","Deinstaleer");
define("_MD_AM_SUBMIT","Verstuur");
define("_MD_AM_CANCEL","Anuleer");
define("_MD_AM_DBUPDATE","De database is succesvol geinstaleer!");
define("_MD_AM_BTOMADMIN","Terug naar de Module Administratie pagina");

// %s represents module name
define("_MD_AM_FAILINS","Het was niet mogelijk om %s te instaleren.");
define("_MD_AM_FAILACT","Het was niet mogelijk om %s te activeren.");
define("_MD_AM_FAILDEACT","Het was niet mogelijk om %s te deactiveren.");
define("_MD_AM_FAILUPD","Het was niet mogelijk om %s te updaten.");
define("_MD_AM_FAILUNINS","Het was niet mogelijk om %s te deinstaleren.");
define("_MD_AM_FAILORDER","Het was niet mogelijk om de volegorde voor %s te veranderen.");
define("_MD_AM_FAILWRITE","Het was niet mogelijk om het Hoofd Menu aan te passen.");
define("_MD_AM_ALEXISTS","De module %s bestaat al.");
define("_MD_AM_ERRORSC","FOUT(EN):");
define("_MD_AM_OKINS","De module %s is succesvol geinstaleerd.");
define("_MD_AM_OKACT","De module %s is succesvol geactiveerd.");
define("_MD_AM_OKDEACT","De module %s is succesvol gedeactiveerd.");
define("_MD_AM_OKUPD","De module %s is succesvol geupdate.");
define("_MD_AM_OKUNINS","De module %s is succesvol gedeinstaleerd.");
define("_MD_AM_OKORDER","De module %s is succesvol veranderd.");

define('_MD_AM_RUSUREINS','Klik op de knop hieronder om de module te instaleren');
define('_MD_AM_RUSUREUPD','Klik op de knop hieronder om de module te updaten');
define('_MD_AM_RUSUREUNINS','Weet je zeker dat je de module wilt deinstaleren?');
define('_MD_AM_LISTUPBLKS','De volgende blokken zullen geupdate worden.<br />Selecteer de blokken waarvan de inhoud overschreven mag worden.<br />');
define('_MD_AM_NEWBLKS','Nieuwe Blokken');
define('_MD_AM_DEPREBLKS','Afgekeurde Blokken');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Instaren... ');
define('_MD_AM_TABLE_RESERVED','%s is een gereserveerde tabel!');
define('_MD_AM_CREATE_TABLES','Tabellen aanmaken...');
define('_MD_AM_TABLE_CREATED','Tabel %s aangemaakt');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Data toegevoegd aan tabel %s');
define('_MD_AM_INSERT_DATA_FAILD','Kan %s niet toevoegen aan de database.');
define('_MD_AM_INSERT_DATA_DONE','Module data succesvol toegevoegd.');
define('_MD_AM_MODULEID',' Module ID: %s');
define('_MD_AM_SQL_FOUND','SQL bestand gevonden in %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL bestand niet gevonden in %s');
define('_MD_AM_SQL_NOT_CREATE','FOUT: Kon %s niet aanmaken');
define('_MD_AM_SQL_NOT_VALID','%s is geen gevalideerde SQL!');

define('_MD_AM_GROUP_ID',' Groep ID: %s ');
define('_MD_AM_NAME',' Naam: ');
define('_MD_AM_VALUE',' Inhoud: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Templates toevoegen...');
define('_MD_AM_TEMPLATES_DELETE','Templates verwijderen...');
define('_MD_AM_TEMPLATES_UPDATE','Templates updaten...');

define('_MD_AM_TEMPLATE_ID','Template ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','De template %s is toegevoegd aan de database');
define('_MD_AM_TEMPLATE_ADD_ERROR','FOUT: Kan de template %s niet toevoegen aan de database.');
define('_MD_AM_TEMPLATE_COMPILED','De template %s gecompileerd ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','FOUT: De template %s niet gecompileerd');
define('_MD_AM_TEMPLATE_DELETE_DATA','De template %s is verwijderd uit de database. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','FOUT: De template %s is niet verwijderd uit de database. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','De template %s is ingevoegd in de database. ');
define('_MD_AM_TEMPLATE_RECOMPILE','De template %s gehercompileerd.');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','FOUT: De template %s is niet gehercompileerd.');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','FOUT: Kan de template %s niet hercompileren');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','FOUT: Kan de oude template %s niet verwijderen. Bijwerken van dit bestand anuleren. ');
define('_MD_AM_TEMPLATE_UPDATE','De template %s is bijgewerkt. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','FOUT: De template %s is niet bijgewerkt. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Blokken toevoegen...');
define('_MD_AM_BLOCKS_DELETE','Blokken verwijderen...');
define('_MD_AM_BLOCKS_REBUILD','Blokken herbouwen...');

define('_MD_AM_BLOCK_ID',' Blok ID: %s ');

define('_MD_AM_BLOCK_ACCESS','Blok toegangsrechten toegevoegd');
define('_MD_AM_BLOCK_ACCESS_ERROR','FOUT: Blok toegansrechten niet toegevoegd');
define('_MD_AM_BLOCK_ADD','Het blok %s is toegevoegd ');
define('_MD_AM_BLOCK_ADD_ERROR','FOUT: Het blok %s is niet toegevoegd ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Database fout: %s ');
define('_MD_AM_BLOCK_CREATED','Het blok %s is aangemaakt ');
define('_MD_AM_BLOCK_DELETE','Het blok %s is verwijderd. ');
define('_MD_AM_BLOCK_DELETE_ERROR','FOUT: Het blok %s is niet verwijderd');
define('_MD_AM_BLOCK_DELETE_DATA','Blok template %s is verwijderd uit de database. ');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','FOUT: Blok template %s is niet verwijderd uit de database');
define('_MD_AM_BLOCK_DEPRECATED','Blok template %s is afgekeurd ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','FOUT: Kan het afgekeurde blok template niet verwijderren.  ');
define('_MD_AM_BLOCK_UPDATE','Blok %s is bijgewerkt. ');

/* Configs */
define('_MD_AM_GONFIG_ID','Configuratie ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Module configuratie opslaan...');
define('_MD_AM_MODULE_DATA_DELETE','Module configuratie verwijderen...');
define('_MD_AM_MODULE_DATA_UPDATE','Module data bijgewerkt.');

define('_MD_AM_CONFIG_ADD',' Configuratie optie toegevoegd');
define('_MD_AM_CONFIG_DATA_ADD',' Configuratie %s is toegevoegd aan database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' FOUT: Configuratie %s is niet toegevoegd aan de database. ');
define('_MD_AM_GONFIG_DATA_DELETE','Configuratie data verwijderd uit de database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','FOUT: Configuratie data niet verwijderd uit de database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Groepsrechten instellen...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','FOUT: Groepsrechten niet verwijderd ');
define('_MD_AM_GROUP_PERMS_DELETED','Groepsrechten verwijderd ');

define('_MD_AM_ACCESS_ADMIN_ADD','Administratie rechten toegevoegd voor Groep ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','FOUT: Administratie rechten niet toegevoegd voor Groep ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Toegangsrechten toegevoegd voor Groep ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','FOUT: Toegangsrechten niet toegevoegd voor Groep ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Het script %s is niet uitgevoerd');
define('_MD_AM_FAILED_SUCESS','Het script %s is succesvol uitgevoerd.');

define('_MD_AM_DELETE_ERROR','FOUT: Kan %s niet verwijderen');
define('_MD_AM_UPDATE_ERROR','FOUT: Kan %s niet bijwerken');
define('_MD_AM_DELETE_MOD_TABLES','Module tabellen verwijderen...');

define('_MD_AM_COMMENTS_DELETE','Commenta(a)r(en) verwijderen...');
define('_MD_AM_COMMENTS_DELETE_ERROR','FOUT: Commenta(a)r(en) niet verwijderd');
define('_MD_AM_COMMENTS_DELETED','Commenta(a)r(en) verwijderd');

define('_MD_AM_NOTIFICATIONS_DELETE','Notificaties verwijderen...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','FOUT: Notificaties niet verwijderd');
define('_MD_AM_NOTIFICATIONS_DELETED','Notificaties verwijderd');

define('_MD_AM_TABLE_DROPPED','Tabellen %s verwijderd!');
define('_MD_AM_TABLE_DROPPED_ERROR','FOUT: Kan de de tabel %s niet verwijderen');
define('_MD_AM_TABLE_DROPPED_FAILDED','FOUT: Geen fout om de tabel %s te verwijderen!');
?>
