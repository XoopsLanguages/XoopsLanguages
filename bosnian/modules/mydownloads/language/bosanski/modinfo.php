<?php
// $Id: modinfo.php,v 1.16 2004/12/26 19:11:56 onokazu Exp $
// Module Info

// The name of this module
define("_MI_MYDOWNLOADS_NAME","Download");

// A brief description of this module
define("_MI_MYDOWNLOADS_DESC","Napravi Download rubriku gdje mogu registrovani  downloadati podatke/slati podatke/ocjenjivati i imati koristi.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYDOWNLOADS_BNAME1","Aktuelni Downloadi");
define("_MI_MYDOWNLOADS_BNAME2","Top Downloadi");

// Sub menu titles
define("_MI_MYDOWNLOADS_SMNAME1","Po&scaron;alji");
define("_MI_MYDOWNLOADS_SMNAME2","Popularni");
define("_MI_MYDOWNLOADS_SMNAME3","Top ocjenjeni");

// Names of admin menu items
define("_MI_MYDOWNLOADS_ADMENU2","Dodaj/Uredi Download");
define("_MI_MYDOWNLOADS_ADMENU3","Poslati Downloadi");
define("_MI_MYDOWNLOADS_ADMENU4","Neispravni Downloadi");
define("_MI_MYDOWNLOADS_ADMENU5","Zahtjevi za izmjenu Downloada");

// Title of config items
define('_MI_MYDOWNLOADS_POPULAR','Odredi koliko pojedini Download treba biti klikovan da bi bio popularan');
define('_MI_MYDOWNLOADS_NEWDLS','Max.broj novih Downloada na top stranici');
define('_MI_MYDOWNLOADS_PERPAGE','Max.broj Downloada na ostalim stranicama');
define('_MI_MYDOWNLOADS_USESHOTS','Izaberi DA i onda svaki Download mo&#382;e imati preglednu sliku');
define('_MI_MYDOWNLOADS_SHOTWIDTH','Odredi max.&scaron;irinu pregledne slike');
define('_MI_MYDOWNLOADS_CHECKHOST','Dozvoljava&scaron; li direktni download link za druge web stranice?');
define('_MI_MYDOWNLOADS_REFERERS','Unesi ovdje domene webstranica koje smiju odavde direktno koristiti svaki Download <br />Rastavi sa ovom oznakom | ');
define("_MI_MYDOWNLOADS_ANONPOST","Dozvoljava&scaron; li gostima da &scaron;alju Downloade?");
define('_MI_MYDOWNLOADS_AUTOAPPROVE','Auto odobrenje za svaki Download bez nadzora Administratora?');
define('_MI_MYDOWNLOADS_TOPORDER',"Kako treba prikazati Downloade na index stranici ?");
define('_MI_MYDOWNLOADS_TOPORDERDSC','Izaberi opciju za prikazivanje Downloada na index stranici.');
define('_MI_MYDOWNLOADS_TOPORDER1',"Datum (DESC)");
define('_MI_MYDOWNLOADS_TOPORDER2',"Datum (ASC)");
define('_MI_MYDOWNLOADS_TOPORDER3',"Klikovi (DESC)");
define('_MI_MYDOWNLOADS_TOPORDER4',"Klikovi (ASC)");
define('_MI_MYDOWNLOADS_TOPORDER5',"Ocjene (DESC)");
define('_MI_MYDOWNLOADS_TOPORDER6',"Ocjene (ASC)");

// Description of each config items
define('_MI_MYDOWNLOADS_POPULARDSC','');
define('_MI_MYDOWNLOADS_NEWDLSDSC','');
define('_MI_MYDOWNLOADS_PERPAGEDSC','');
define('_MI_MYDOWNLOADS_USESHOTSDSC','');
define('_MI_MYDOWNLOADS_SHOTWIDTHDSC','');
define('_MI_MYDOWNLOADS_REFERERSDSC','');
define('_MI_MYDOWNLOADS_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_MYDOWNLOADS_GLOBAL_NOTIFY','Globalne obavijesti');
define('_MI_MYDOWNLOADS_GLOBAL_NOTIFYDSC','Globalne opcije obavijesti.');

define('_MI_MYDOWNLOADS_CATEGORY_NOTIFY','Kategorija');
define('_MI_MYDOWNLOADS_CATEGORY_NOTIFYDSC','Obavijesti koje se odnose na aktuelne kategorije.');

define('_MI_MYDOWNLOADS_FILE_NOTIFY','Podatak');
define('_MI_MYDOWNLOADS_FILE_NOTIFYDSC','Obavijesti koje se odnose na aktuelne podatke.');

define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY','Nova kategorija');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Obavijesti me ako bude nova kategorija kreirana.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Dobi&#263;e&scaron; obavijest ako bude nova kategorija kreirana.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova kategorija');

define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY','Zahtjevi za promjenu Downloada');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP','Obavijesti me ako neko bude poslao zahtjev za promjenu Downloada.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC','Dobi&#263;e&scaron; obavijest ako neko bude poslao zahtjev za promjenu Downloada.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Zahtjev je podne&scaron;en za promjenu Downloada');

define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY','Prijava za neispravan Download podatak');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP','Obavjesti me ako neko prijavi neispravan Download podatak.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC','Dobi&#263;e&scaron; obavijest ako neko bude prijavio neispravan Download podatak.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Ima prijavljen neispravan Download podatak.');

define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY','File Submitted');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP','Notify me when any new file is submitted (awaiting approval).');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC','Receive notification when any new file is submitted (awaiting approval).');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New file submitted');

define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFY','New File');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP','Notify me when any new file is posted.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC','Receive notification when any new file is posted.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New file');

define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY','File Submitted');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP','Notify me when a new file is submitted (awaiting approval) to the current category.');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC','Receive notification when a new file is submitted (awaiting approval) to the current category.');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New file submitted in category');

define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFY','New File');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP','Notify me when a new file is posted to the current category.');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC','Receive notification when a new file is posted to the current category.');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New file in category');

define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFY','File Approved');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYCAP','Notify me when this file is approved.');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYDSC','Receive notification when this file is approved.');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : File Approved');

// ajout Hervé
define('_MI_MYDOWNLOADS_MIMETYPE',"Mime Types");
define('_MI_MYDOWNLOADS_MIMETYPE_DSC',"Enter the authorized mime types separated by a |");
define('_MI_MYDOWNLOADS_MAXUPLOAD_SIZE',"Max uploaded files size");
define('_MI_MYDOWNLOADS_USE_EDITOR',"Use Kiovi?");
define('_MI_MYDOWNLOADS_AUTO_SUMMARY',"Automatic Summary ?");

// Added in v1.4
define('_MI_MYDOWNLOADS_UPLOAD_FOLDER',"Select upload folder (THE PATH)");
define('_MI_MYDOWNLOADS_UPLOAD_URL',"Select the matching URL");
define('_MI_MYDOWNLOADS_RENAME_FILES',"Rename file while uploading them ?");

// Added in v1.44
define('_MI_MYDOWNLOADS_SHOW_UPDATED',"Show the 'updated' and 'new' picture ?");

// Added in v1.45
define("_MI_MYDOWNLOADS_FORM_OPTIONS","Form Option");
define("_MI_MYDOWNLOADS_FORM_COMPACT","Compact");
define("_MI_MYDOWNLOADS_FORM_DHTML","DHTML");
define("_MI_MYDOWNLOADS_FORM_SPAW","Spaw Editor");
define("_MI_MYDOWNLOADS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_MYDOWNLOADS_FORM_FCK","FCK Editor");
define("_MI_MYDOWNLOADS_FORM_KOIVI","Koivi Editor");
define("_MI_MYDOWNLOADS_FORM_TINYEDITOR","TinyEditor");
define("_MI_MYDOWNLOADS_ADMENU1","Index");

define('_MI_MYDL_SHOTSUPLOAD_FOLDER',"Select upload folder (THE PATH) for screenshots (without trailing slash)");
define('_MI_MYDL_SHOTSUPLOAD_URL',"Select the matching URL for screenshots (without trailing slash)");
?>