<?php
// $Id: modinfo.php,v 1.16 2004/12/26 19:11:56 onokazu Exp $
// Module Info

// The name of this module
define('_MI_MYDOWNLOADS_NAME','Downloads');

// A brief description of this module
define('_MI_MYDOWNLOADS_DESC','Opretter en downloadsektion, hvor brugere kan tilføje downloads, og stemme på disse.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_MYDOWNLOADS_BNAME1','Nyeste Downloads');
define('_MI_MYDOWNLOADS_BNAME2','Top Downloads');

// Sub menu titles
define('_MI_MYDOWNLOADS_SMNAME1','Indsend download');
define('_MI_MYDOWNLOADS_SMNAME2','Populær');
define('_MI_MYDOWNLOADS_SMNAME3','Bedst bedømte');

// Names of admin menu items
define('_MI_MYDOWNLOADS_ADMENU2','Tilføj/redigér downloads');
define('_MI_MYDOWNLOADS_ADMENU3','Indsendte Downloads');
define('_MI_MYDOWNLOADS_ADMENU4','Defekte Downloads');
define('_MI_MYDOWNLOADS_ADMENU5','Ændrede Downloads');

// Title of config items
define('_MI_MYDOWNLOADS_POPULAR','Antallet af hits før et download bliver markeret som populært');
define('_MI_MYDOWNLOADS_NEWDLS','Max. antal nye downloads vist på hovedsiden');
define('_MI_MYDOWNLOADS_PERPAGE','Max. antal downloads vist på hver side');
define('_MI_MYDOWNLOADS_USESHOTS','Vælg ja for at få vist screenshot billeder ved hver fil.');
define('_MI_MYDOWNLOADS_SHOTWIDTH','Indtast max brede på screenshot billed');
define('_MI_MYDOWNLOADS_CHECKHOST','Forbyd direct download link? (leeching)');
define('_MI_MYDOWNLOADS_REFERERS','Dette site kan linke direkte til dine filer <br />Adskild hver side med | ');
define('_MI_MYDOWNLOADS_ANONPOST','Tillad anonyme bruger at indsende downloads.');
define('_MI_MYDOWNLOADS_AUTOAPPROVE','Godkend automatisk nye downloads uden godkendelse fra admin?');
define('_MI_MYDOWNLOADS_TOPORDER','Hvordan skal visningen være på indexsiden ?');
define('_MI_MYDOWNLOADS_TOPORDERDSC','Du kan vælge hvilke downloads der skal vises på indexsiden');
define('_MI_MYDOWNLOADS_TOPORDER1','Dato (nyeste først)');
define('_MI_MYDOWNLOADS_TOPORDER2','Dato (ældste først)');
define('_MI_MYDOWNLOADS_TOPORDER3','Hits (flest hits først)');
define('_MI_MYDOWNLOADS_TOPORDER4','Hits (færrest hits først)');
define('_MI_MYDOWNLOADS_TOPORDER5','Bedømmelser (flest ratings først)');
define('_MI_MYDOWNLOADS_TOPORDER6','Bedømmelser (færrest ratings først)');

// Description of each config items
define('_MI_MYDOWNLOADS_POPULARDSC','');
define('_MI_MYDOWNLOADS_NEWDLSDSC','');
define('_MI_MYDOWNLOADS_PERPAGEDSC','');
define('_MI_MYDOWNLOADS_USESHOTSDSC','');
define('_MI_MYDOWNLOADS_SHOTWIDTHDSC','');
define('_MI_MYDOWNLOADS_REFERERSDSC','');
define('_MI_MYDOWNLOADS_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_MYDOWNLOADS_GLOBAL_NOTIFY','Global');
define('_MI_MYDOWNLOADS_GLOBAL_NOTIFYDSC','Overordnet downloads besked muligheder');

define('_MI_MYDOWNLOADS_CATEGORY_NOTIFY','Kategori');
define('_MI_MYDOWNLOADS_CATEGORY_NOTIFYDSC','Besked muligheder for denne fil kategori');

define('_MI_MYDOWNLOADS_FILE_NOTIFY','Fil');
define('_MI_MYDOWNLOADS_FILE_NOTIFYDSC','Besked muligheder for denne fil');

define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY','Ny kategori');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Send mig en besked når der oprettes en ny kategori');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Modtag besked når en ny fil kategori oprettes');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ny fil-kategori');

define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY','Rediger fil kategori');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP','Send mig en besked ved ændringer af filer');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC','Modtag en besked når der ønskes ændringer til filer');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ønske om ændring af fil.');

define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY','Defekt fil indsendt');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP','Giv mig besked når der rapporteres om defekte filer');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC','Modtag en besked når der indsendes defekte filer');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Rapport over defekte filer');

define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY','Fil indsendt');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP','Giv mig besked når en hvilken som helst ny fil indsendes (afventer godkendelse)');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC','Modtag besked når en hvilken som helst ny fil er indsendt (afventer godkendelse)');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ny fil indsendt');

define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFY','Ny fil');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP','Giv mig besked når en ny fil godkendes.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC','Modtag besked når en ny fil er godkendt');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ny fil');

define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY','Fil indsendt');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP','Giv mig besked når en ny fil er indsendt (afventer godkendelse)');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC','Modtage besked når en ny fil er indsendt (afventer godkendelse) til aktuel kategori');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked : Ny fil indsendt i kategori');

define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFY','Ny fil');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP','Giv mig besked når en ny fil indsendes i den aktuelle kategori');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC','Modtage besked når en ny fil indsendes i den aktuelle kategori');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Ny fil i kategori');

define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFY','Fil godkendt');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYCAP','Giv mig besked når denne fil er godkendt');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYDSC','Modtag besked når denne fil er godkendt.');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Fil godkendt');

// ajout Hervé
define('_MI_MYDOWNLOADS_MIMETYPE','Filtyper');
define('_MI_MYDOWNLOADS_MIMETYPE_DSC','Angiv hvilke filtyper der må uploades (adskil med | )');
define('_MI_MYDOWNLOADS_MAXUPLOAD_SIZE','Maksimal filstørrelse på uploads');
define('_MI_MYDOWNLOADS_USE_EDITOR','Brug Kiovi?');
define('_MI_MYDOWNLOADS_AUTO_SUMMARY','Automatisk resumé');

// Added in v1.4
define('_MI_MYDOWNLOADS_UPLOAD_FOLDER','Vælg folder til uploads (STIEN)');
define('_MI_MYDOWNLOADS_UPLOAD_URL','Vælg den matchende URL');
define('_MI_MYDOWNLOADS_RENAME_FILES','Omdøb filer ved upload?');

// Added in v1.44
define('_MI_MYDOWNLOADS_SHOW_UPDATED',"Vis billederne 'opdateret' og 'ny'?");

// Added in v1.45
define("_MI_MYDOWNLOADS_FORM_OPTIONS","Form Option");
define("_MI_MYDOWNLOADS_FORM_COMPACT","Compact");
define("_MI_MYDOWNLOADS_FORM_DHTML","DHTML");
define("_MI_MYDOWNLOADS_FORM_SPAW","Spaw Editor");
define("_MI_MYDOWNLOADS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_MYDOWNLOADS_FORM_FCK","FCK Editor");
define("_MI_MYDOWNLOADS_FORM_KOIVI","Koivi Editor");
define("_MI_MYDOWNLOADS_FORM_TINYEDITOR","TinyEditor");
define("_MI_MYDOWNLOADS_ADMENU1","Indeks");

define('_MI_MYDL_SHOTSUPLOAD_FOLDER',"Vælg upload mappe (STIEN) til screenshots (uden skråstreg )");
define('_MI_MYDL_SHOTSUPLOAD_URL',"Vælg den tilsvarende URL til screenshots (uden skråstreg)");
define("_MI_MYDOWNLOADS_PLATFORM","Platform");
// Added in version 1.5
define("_MI_MYDOWNLOADS_PAGER","Brugerside på modulets indeks side?");
define("_MI_MYDOWNLOADS_ADMENU6","Rettigheder");
?>