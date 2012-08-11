<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define('_MD_AM_MODADMIN','Administracija Modula');
define('_MD_AM_MODULE','Moduli');
define('_MD_AM_VERSION','Verzija');
define('_MD_AM_LASTUP','Zadnje aktuliziranje');
define('_MD_AM_DEACTIVATED','Isklju&#269;en');
define('_MD_AM_ACTION','Akcija');
define('_MD_AM_DEACTIVATE','Isklju&#269;i');
define('_MD_AM_ACTIVATE','Aktiviraj');
define('_MD_AM_UPDATE','Aktualiziraj');
define('_MD_AM_DUPEN','Dupli upis u Modul-tabeli!');
define('_MD_AM_DEACTED','Izabrani Modul je isklju&#269;en. Sada mo&#382;e&scaron; Modul bez problema deinstalirati');
define('_MD_AM_ACTED','Izabrani Modul je aktiviran!');
define('_MD_AM_UPDTED','Izabrani Modul je aktuliziran!');
define('_MD_AM_SYSNO','System Modul se nemo&#382;e isklju&#269;iti.');
define('_MD_AM_STRTNO','Ovaj Modul bi&#263;e na Start stranici vidan. Molim te izaberi sebi gdje Modul treba(netreba) biti vidan.');

// added in RC2
define('_MD_AM_PCMFM','Molim te potvrdi:');

// added in RC3
define('_MD_AM_ORDER','Pozicija');
define('_MD_AM_ORDER0','(0 = skriven)');
define('_MD_AM_ACTIVE','Aktivan');
define('_MD_AM_INACTIVE','Inaktivan');
define('_MD_AM_NOTINSTALLED','Nije instaliran');
define('_MD_AM_NOCHANGE','Nema promjene');
define('_MD_AM_INSTALL','Instaliraj');
define('_MD_AM_UNINSTALL','Deinstaliraj');
define('_MD_AM_SUBMIT','Po&scaron;alji');
define('_MD_AM_CANCEL','Obustavi');
define('_MD_AM_DBUPDATE','Baza podataka je uspje&scaron;no aktulizirana!');
define('_MD_AM_BTOMADMIN','Nazad u Administraciju Modula');

// %s represents module name
define('_MD_AM_FAILINS','%s se nemo&#382;e instalirati.');
define('_MD_AM_FAILACT','%s se nemo&#382;e aktivirati.');
define('_MD_AM_FAILDEACT','%s se nemo&#382;e isklju&#269;iti.');
define('_MD_AM_FAILUPD','%s se nemo&#382;e aktulizirati.');
define('_MD_AM_FAILUNINS','%s se nemo&#382;e deinstalirati.');
define('_MD_AM_FAILORDER','%s se nemo&#382;e sortirati.');
define('_MD_AM_FAILWRITE','Nemo&#382;e se u Glavni meni dodati.');
define('_MD_AM_ALEXISTS','Modul %s ve&#263; postoji.');
define('_MD_AM_ERRORSC','Gre&scaron;ka:');
define('_MD_AM_OKINS','Modul %s je uspje&scaron;no instaliran.');
define('_MD_AM_OKACT','Modul %s je uspje&scaron;no aktiviran.');
define('_MD_AM_OKDEACT','Modul %s wurde erfolgreich isklju&#269;en.');
define('_MD_AM_OKUPD','Modul %s je uspje&scaron;no aktuliziran.');
define('_MD_AM_OKUNINS','Modul %s je uspje&scaron;no deinstaliran.');
define('_MD_AM_OKORDER','Modul %s je uspje&scaron;no promijenjen.');

define('_MD_AM_RUSUREINS','Modulsku instalaciju potvrdi molim');
define('_MD_AM_RUSUREUPD','Da bi se Modul aktulizirao potvrdi molim');
define('_MD_AM_RUSUREUNINS','Treba li stvarno Modul deinstalirati?');
define('_MD_AM_LISTUPBLKS','Sljede&#263;i Blokovi bi&#263;e aktulizirani. Izaberi Blok za promjenu (Template i Opcije).');
define('_MD_AM_NEWBLKS','Novi Blokovi');
define('_MD_AM_DEPREBLKS','Odba&#269;eni Blokovi');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Instalacija ');
define('_MD_AM_TABLE_RESERVED','%s je rezervisana tabela!');
define('_MD_AM_CREATE_TABLES','Kreiranje tabela...');
define('_MD_AM_TABLE_CREATED','Tabla %s je kreirana');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Podaci su une&scaron;eni u tabele %s');
define('_MD_AM_INSERT_DATA_FAILD','Nemogu se unijeti podaci %s u bazu podataka.');
define('_MD_AM_INSERT_DATA_DONE','Od Modula podaci su uspje&scaron;no une&scaron;eni.');
define('_MD_AM_MODULEID',' Modula ID: %s');
define('_MD_AM_SQL_FOUND','SQL podatak je pronadjen za %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL podatak nije pronadjen za %s');
define('_MD_AM_SQL_NOT_CREATE','Gre&scaron;ka: Kreiranje nije uspjelo %s ');
define('_MD_AM_SQL_NOT_VALID','%s nije ispravan podatak SQL!');

define('_MD_AM_GROUP_ID',' Grupe ID: %s ');
define('_MD_AM_NAME',' Naziv: ');
define('_MD_AM_VALUE',' Vrijednost: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Dodavanje Templati...');
define('_MD_AM_TEMPLATES_DELETE','Brisanje Templati...');
define('_MD_AM_TEMPLATES_UPDATE','Update Template...');

define('_MD_AM_TEMPLATE_ID','Template ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Template %s je dodat u Bazu podataka');
define('_MD_AM_TEMPLATE_ADD_ERROR','Gre&scaron;ka: Could not insert template %s to the database.');
define('_MD_AM_TEMPLATE_COMPILED','Template %s je kompiliran ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','Gre&scaron;ka: Kompiliranje Template %s nije uspjelo');
define('_MD_AM_TEMPLATE_DELETE_DATA','Template %s je izbrisan iz Baze podataka. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','Gre&scaron;ka: Brisanje Template %s nije uspjelo iz Baze podataka. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Template %s je unijet u Bazu podataka. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Template %s je rekompiliran');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','Gre&scaron;ka: Template %s rekompiliranje nije uspjelo');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','Gre&scaron;ka: Rekompiliranje Template %s nije uspjelo');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','Gre&scaron;ka: Brisanje strijih Template %s nije uspjelo. Prekinuta aktulizacija ovoga podatka. ');
define('_MD_AM_TEMPLATE_UPDATE','Template %s je aktuliziran. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','Gre&scaron;ka: Aktulizacija Template %s nije uspjela. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Dodavanje Blokova...');
define('_MD_AM_BLOCKS_DELETE','Brisanje Blokova...');
define('_MD_AM_BLOCKS_REBUILD','Rebuilding Blokova...');

define('_MD_AM_BLOCK_ID',' Blok ID: %s ');

define('_MD_AM_BLOCK_ACCESS','Added block access right');
define('_MD_AM_BLOCK_ACCESS_ERROR','Gre&scaron;ka: Could not add block access right');
define('_MD_AM_BLOCK_ADD','Block %s added ');
define('_MD_AM_BLOCK_ADD_ERROR','Gre&scaron;ka: Could not add block %s to the database! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Database error: %s ');
define('_MD_AM_BLOCK_CREATED','Block %s created ');
define('_MD_AM_BLOCK_DELETE','Block %s deleted. ');
define('_MD_AM_BLOCK_DELETE_DATA','Block template %s deleted from the database. ');
define('_MD_AM_BLOCK_DELETE_ERROR','Gre&scaron;ka: Could not delete block %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','Gre&scaron;ka: Could not delete block template %s from the database');
define('_MD_AM_BLOCK_DEPRECATED','Block template %s deprecated ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','Gre&scaron;ka: Could not remove deprecated block template.  ');
define('_MD_AM_BLOCK_UPDATE','Block %s updated. ');

/* Configs */
define('_MD_AM_GONFIG_ID','Config ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Adding module config data...');
define('_MD_AM_MODULE_DATA_DELETE','Deleting module config options...');
define('_MD_AM_MODULE_DATA_UPDATE','Module data updated.');

define('_MD_AM_CONFIG_ADD',' Config option added');
define('_MD_AM_CONFIG_DATA_ADD',' Config %s added to the database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' Gre&scaron;ka: Could not insert config %s to the database. ');
define('_MD_AM_GONFIG_DATA_DELETE','Config data deleted from the database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','Gre&scaron;ka: Could not delete config data from the database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Setting group rights...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','Gre&scaron;ka: Could not delete group permissions ');
define('_MD_AM_GROUP_PERMS_DELETED','Group permissions deleted ');

define('_MD_AM_ACCESS_ADMIN_ADD','Added admin access right for Group ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','Gre&scaron;ka: Could not add admin access right for Group ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Added user access right for Group ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','Gre&scaron;ka: Could not add user access right for Group ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Failed to execute %s');
define('_MD_AM_FAILED_SUCESS','%s executed successfully.');

define('_MD_AM_DELETE_ERROR','Gre&scaron;ka: Could not delete %s');
define('_MD_AM_UPDATE_ERROR','Gre&scaron;ka: Could not update %s');
define('_MD_AM_DELETE_MOD_TABLES','Deleting module tables...');

define('_MD_AM_COMMENTS_DELETE','Deleting comments...');
define('_MD_AM_COMMENTS_DELETE_ERROR','Gre&scaron;ka: Could not delete comments');
define('_MD_AM_COMMENTS_DELETED','Comments deleted');

define('_MD_AM_NOTIFICATIONS_DELETE','Deleting notifications...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','ERROR: Could not delete notifications');
define('_MD_AM_NOTIFICATIONS_DELETED','Notifications deleted');

define('_MD_AM_TABLE_DROPPED','Table %s dropped!');
define('_MD_AM_TABLE_DROPPED_ERROR','ERROR: Could not drop table %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','ERROR: Not allowed to drop table %s !');
?>