<?php
// $Id: modinfo.php,v 1.16 2004/12/26 19:11:56 onokazu Exp $
// Module Info
// The name of this module
define("_MI_MYDOWNLOADS_NAME","Download");

// A brief description of this module
define("_MI_MYDOWNLOADS_DESC","Stvara download dio gdje korisnici mogu downloadati/podna�ati/ocjenjivati razne datoteke.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYDOWNLOADS_BNAME1","Nedavni downloadi");
define("_MI_MYDOWNLOADS_BNAME2","Najpopularniji downloadi");
// Sub menu titles
define("_MI_MYDOWNLOADS_SMNAME1","Podnesi");
define("_MI_MYDOWNLOADS_SMNAME2","Popularno");
define("_MI_MYDOWNLOADS_SMNAME3","Najbolje ocjenjeno");

// Names of admin menu items
define("_MI_MYDOWNLOADS_ADMENU2","Dodaj/Uredi Downloade");
define("_MI_MYDOWNLOADS_ADMENU3","Podne�eni Downloadi");
define("_MI_MYDOWNLOADS_ADMENU4","Slomljeni Downloadi");
define("_MI_MYDOWNLOADS_ADMENU5","Prijedlozi za Download");

// Title of config items
define('_MI_MYDOWNLOADS_POPULAR', 'Broj pregledavanja prije nego �to se download smatra popularnim');
define('_MI_MYDOWNLOADS_NEWDLS', 'Maksimalan broj novih predmeta za download prikazanih na vrhu stranice');
define('_MI_MYDOWNLOADS_PERPAGE', 'Maksimalan broj downloada prikazanih na svim stranicama');
define('_MI_MYDOWNLOADS_USESHOTS', 'Izaberite "da" za prikaz zaslonskih slika uz svaki download');
define('_MI_MYDOWNLOADS_SHOTWIDTH', 'Upi�i slike');
define('_MI_MYDOWNLOADS_CHECKHOST', 'Uskrati direktno povezivanje downloada? (leeching)');
define('_MI_MYDOWNLOADS_REFERERS', 'Ove stranice mogu biti direktan link datoteke<br />odvoji svaku stranicu s |');
define("_MI_MYDOWNLOADS_ANONPOST","Dopusti anonimnim korisnicima download?");
define('_MI_MYDOWNLOADS_AUTOAPPROVE','Automatski dozvoli nove predmete za download bez intervencije administratora?');

// Description of each config items
define('_MI_MYDOWNLOADS_POPULARDSC', '');
define('_MI_MYDOWNLOADS_NEWDLSDSC', '');
define('_MI_MYDOWNLOADS_PERPAGEDSC', '');
define('_MI_MYDOWNLOADS_USESHOTSDSC', '');
define('_MI_MYDOWNLOADS_SHOTWIDTHDSC', '');
define('_MI_MYDOWNLOADS_REFERERSDSC', '');
define('_MI_MYDOWNLOADS_AUTOAPPROVEDSC', '');

// Text for notifications

define('_MI_MYDOWNLOADS_GLOBAL_NOTIFY', 'Op�enito');
define('_MI_MYDOWNLOADS_GLOBAL_NOTIFYDSC', 'Opcije op�enite download obavijesti.');

define('_MI_MYDOWNLOADS_CATEGORY_NOTIFY', 'Kategorija');
define('_MI_MYDOWNLOADS_CATEGORY_NOTIFYDSC', 'Opcije obavije�tavanja koje se odnose na trenutnu kategoriju dadoteke.');

define('_MI_MYDOWNLOADS_FILE_NOTIFY', 'Datoteka');
define('_MI_MYDOWNLOADS_FILE_NOTIFYDSC', 'Opcije obavije�tavanja koje se odnose na trenutnu datoteku.');

define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nova kategorija');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Obavijesti me kada se stvori nova kategorija dadoteki.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Primi obavijest kada se stvori nova kategorija datoteki.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova kategorija dadoteki');                              

define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY', 'Zatra�ena promjena datoteke');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Obavijesti me o bilo kojem zahtjevu za promijenu.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC', 'Primi obavijest kada se zatra�i bilo koji zahtjev za promijenu.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Zatra�ena promjena datoteke');

define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY', 'Prijavljena slomljena datoteka');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Obavijesti me o prijavi slomljene datoteke.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Primi obavijest o bilo kojoj prijavi slomljene datoteke.');
define('_MI_MYDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Prijavljena slomljena datoteka');

define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY', 'Datoteka podne�ena');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP', 'Obavijesti me o podna�anju bilo koje nove datoteke (�eka odobrenje).');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Primi obavijest o podna�anju bilo koje nove datoteke (�eka odobrenje).');
define('_MI_MYDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova datoteka podne�ena');

define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFY', 'Nova datoteka');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP', 'Obavijesti me o objavljivanju bilo koje nove datoteke.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC', 'Primi obavijest o objavljivanju bilo koje nove datoteke.');
define('_MI_MYDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova datoteka');

define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY', 'Datoteka podne�ena');
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Obavijesti me o podna�anju bilo koje nove datoteke (�eka odobrenje) u trenutnoj kategoriji.');   
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Primi obavijest o podna�anju bilo koje nove datoteke (�eka odobrenje) u trenutnoj kategoriji.');      
define('_MI_MYDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova datoteka podne�ena u kategoriji'); 

define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFY', 'Nova datoteka');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP', 'Obavijesti me o objavljivanju bilo koje nove datoteke u trenutnoj kategoriji.');
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC', 'Primi obavijest o objavljivanju bilo koje nove datoteke u trenutnoj kategoriji.');      
define('_MI_MYDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest: Nova datoteka u kategoriji');

define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFY', 'Datoteka odobrena');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYCAP', 'Obavijesti me kada se ova datoteka odobri.');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYDSC', 'Primi obavijest kada se ova datoteka odobri.');
define('_MI_MYDOWNLOADS_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest: Datoteka odobrena');
?>
