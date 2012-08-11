<?php 
// $Id: modinfo.php,v 1.15 2004/12/26 19:11:57 onokazu Exp $
// Module Info 
 
// The name of this module 
define("_MI_MYLINKS_NAME","Web Linkovi"); 
 
// A brief description of this module 
define("_MI_MYLINKS_DESC","Stvara odjel gdje korisnici mogu stavljati i ocjenjivati linkove"); 
 
// Names of blocks for this module (Not all module has blocks) 
define("_MI_MYLINKS_BNAME1","Nedavni linkovi"); 
define("_MI_MYLINKS_BNAME2","Najpopularniji Linkovi"); 
 
// Sub menu titles 
define("_MI_MYLINKS_SMNAME1","Podnesi"); 
define("_MI_MYLINKS_SMNAME2","Popularno"); 
define("_MI_MYLINKS_SMNAME3","Najbolje ocjenjeno"); 
 
// Names of admin menu items 
define("_MI_MYLINKS_ADMENU2","Dodaj/Uredi linkove"); 
define("_MI_MYLINKS_ADMENU3","Podneseni linkovi"); 
define("_MI_MYLINKS_ADMENU4","Neispravni linkovi"); 
define("_MI_MYLINKS_ADMENU5","Prijedlozi za linkove"); 
define("_MI_MYLINKS_ADMENU6","Provjera linkova"); 
 
// Title of config items 
define('_MI_MYLINKS_POPULAR','Broj pregledavanja prije nego što se linka smatra popularnim'); 
define('_MI_MYLINKS_NEWLINKS','Maksimalan broj novih linkova prikazanih na vrhu stranice'); 
define('_MI_MYLINKS_PERPAGE','Maksimalan broj linkova prikazanih na svim stranicama'); 
define('_MI_MYLINKS_USESHOTS','Izaberite "da" za prikaz zauzetog zaslona slike za svaki link'); 
define('_MI_MYLINKS_USEFRAMES','Želite li da odabrana stranica bude unutar okvira?'); 
define('_MI_MYLINKS_SHOTWIDTH','Maksimalnadozvoljena širina slike zauzetog zaslona'); 
define('_MI_MYLINKS_ANONPOST','Dopusti anonimnim korisnicima da objavljuju linkove?'); 
define('_MI_MYLINKS_AUTOAPPROVE','Automatski dozvoli stavljanje novih linkova bez odobrenja administratora?'); 
 
// Description of each config items 
define('_MI_MYLINKS_POPULARDSC',''); 
define('_MI_MYLINKS_NEWLINKSDSC',''); 
define('_MI_MYLINKS_PERPAGEDSC',''); 
define('_MI_MYLINKS_USEFRAMEDSC',''); 
define('_MI_MYLINKS_USESHOTSDSC',''); 
define('_MI_MYLINKS_SHOTWIDTHDSC',''); 
define('_MI_MYLINKS_AUTOAPPROVEDSC',''); 
 
// Text for notifications 
 
define('_MI_MYLINKS_GLOBAL_NOTIFY','Opæenito'); 
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC','Opcije opæenite link obavijesti.'); 
 
define('_MI_MYLINKS_CATEGORY_NOTIFY','Kategorija'); 
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC','Opcije obaviještavanja koje se odnose unutar pojedine kategorije.'); 
 
define('_MI_MYLINKS_LINK_NOTIFY','Link'); 
define('_MI_MYLINKS_LINK_NOTIFYDSC','Opcije obaviještavanja koje se odnose na trenutni link.'); 
 
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY','Nova kategorija'); 
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Obavijesti me kada se stvori nova kategorija linkova.'); 
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Primi obavijest kada se stvori nova kategorija za linkove.'); 
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova kategorija linkova'); 
 
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY','Zatražena promjena linkova'); 
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP','Obavijesti me o bilo kojem zahtjevu za promijenu.'); 
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC','Primi obavijest kada se zatraži bilo koji zahtjev za promijenu'); 
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Zatražena promjena linkova'); 
 
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY','Prijavljen neispravni link'); 
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP','Obavijesti me o prijavi neispravnome linku.'); 
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC','Primi obavijest o bilo kojoj prijavi o neispravnome linku'); 
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Prijavljen neispravni link'); 
 
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY','Link podnešen'); 
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP','Obavijesti me o podnašanju bilo kojeg novog linka (èeka odobrenje).'); 
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC','Primi obavijest o podnašanju bilo kojeg novog linka (èeka odobrenje).'); 
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi link ponešen'); 
 
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY','Novi Link'); 
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP','Obavijesti me o objavljivanju novog linka'); 
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC','Primi obavijest o objavljivanju bilo kojeg novog linka.'); 
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest: Novi link'); 
 
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY','Link podnesen'); 
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP',' Obavijesti me o podnašanju bilo kojeg novog linka (èeka odobrenje) u trenutnoj kategoriji.'); 
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC','Primi obavijest o podnašanju bilo kojeg novog linka (èeka odobrenje) u trenutnoj kategoriji.'); 
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest: Novi link podnesen u kategoriji'); 
 
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY','Novi link'); 
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP',' Obavijesti me o objavljivanju bilo kojeg novog linka u trenutnoj kategoriji.'); 
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC',' Primi obavijest o objavljivanju bilo kojeg novog linka trenutnoj kategoriji.'); 
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest: Novi link u kategoriji'); 
 
define('_MI_MYLINKS_LINK_APPROVE_NOTIFY','Link odobren'); 
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP',' Obavijesti me kada se ovaj link link odobi.'); 
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC',' Primi obavijest kada se ovaj link odobi.'); 
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest: Link odobren'); 
 
?> 
