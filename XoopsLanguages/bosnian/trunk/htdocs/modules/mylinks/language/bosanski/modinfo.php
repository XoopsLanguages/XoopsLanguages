<?php
// $Id: modinfo.php,v 1.15 2004/12/26 19:11:57 onokazu Exp $
// Module Info

// The name of this module
define("_MI_MYLINKS_NAME","Web Linkovi");

// A brief description of this module
define("_MI_MYLINKS_DESC","Kreiraj web linkove sekciju gdje &#268;lanovi i gosti mogu linkove  tra&#382;iti/slati/ocjenjivati.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYLINKS_BNAME1","Najnoviji linkovi");
define("_MI_MYLINKS_BNAME2","Top linkovi");

// Sub menu titles
define("_MI_MYLINKS_SMNAME1","Po&scaron;alji");
define("_MI_MYLINKS_SMNAME2","Popularni");
define("_MI_MYLINKS_SMNAME3","Top ocjenjeni");

// Names of admin menu items
define("_MI_MYLINKS_ADMENU2","Dodaj/Uredi Linkove");
define("_MI_MYLINKS_ADMENU3","Poslati Linkovi");
define("_MI_MYLINKS_ADMENU4","Prijavljeni Linkovi");
define("_MI_MYLINKS_ADMENU5","Izmjenjeni Linkovi");
define("_MI_MYLINKS_ADMENU6","Link provjera");

// Title of config items
define('_MI_MYLINKS_POPULAR','Odredi broj klikova da bi link bio popularan');
define('_MI_MYLINKS_NEWLINKS','Odredi koliko linkova treba prikazati na top stranici');
define('_MI_MYLINKS_PERPAGE','Izaberi koliko linkova treba prikazati na svakoj stranici');
define('_MI_MYLINKS_USESHOTS','Izaberi DA da bi se screenshot slika od linka prikazala ');
define('_MI_MYLINKS_USEFRAMES','&#381;eli&scaron; li prikazati povezane linkove unutar stranice?');
define('_MI_MYLINKS_SHOTWIDTH','Max &scaron;irina screenshot slike za link baner');
define('_MI_MYLINKS_ANONPOST','&#381;eli&scaron; li da i gosti &scaron;alju linkove?');
define('_MI_MYLINKS_AUTOAPPROVE','Automatski odobriti linkove bez intervencije i provjere oed strane webmastera?');

// Description of each config items
define('_MI_MYLINKS_POPULARDSC','');
define('_MI_MYLINKS_NEWLINKSDSC','');
define('_MI_MYLINKS_PERPAGEDSC','');
define('_MI_MYLINKS_USEFRAMEDSC','');
define('_MI_MYLINKS_USESHOTSDSC','');
define('_MI_MYLINKS_SHOTWIDTHDSC','');
define('_MI_MYLINKS_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_MYLINKS_GLOBAL_NOTIFY','Globalno');
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC','Globalne obavijesti opcije za linkove.');

define('_MI_MYLINKS_CATEGORY_NOTIFY','Kategorija');
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC','Opcija obavijesti koja se odnosi na trenutnu link kategoriju.');

define('_MI_MYLINKS_LINK_NOTIFY','Link');
define('_MI_MYLINKS_LINK_NOTIFYDSC','Opcija obavijesti kada se linkovi odobre.');

define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY','Nova kategorija');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Obavijesti me ako je nova kategorija za linkove kreirana.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Primi obavijest kada se nova kategorija za linkove kreira.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova link kategorija');

define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY','Zahtjev za promjenu linka');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP','Obavijesti me ako bude bilo kakav zahtjev poslat za promjene linkova.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC','Primi obavijest kada neko po&scaron;alje zahtjev za promjenu linka.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Link zahtjev za promjenu je poslat');

define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY','Prijave za neispravne linkove');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP','Obavijesti me ako neko po&scaron;alje prijavu za neispravan link.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC','Primi obavijest kada neko po&scaron;alje prijavu za neispravan link.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Prijava za neispravan link');

define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY','Novi link je poslat');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP','Obavijesti me ako neko novi link po&scaron;alje .');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC','Primi obavijest kada neko novi link po&scaron;alje.');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi link je poslat');

define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY','Novi Link');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP','Obavijesti me ako je novi link poslat.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC','Primi obavijest ako je novi link poslat.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi link');

define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY','Novi link je poslat');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP','Obavijesti me ako je novi link poslat u trenutnu kategoriju.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC','Primi obavijest ako je novi link trenutnu kategoriju poslat.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi link je poslat u kategoriju');

define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY','Novi Link');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP','Obavijesti me ako neko po&scaron;alje novi link u kategoriju.');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC','Primajte obavijesti kad novi link se &scaron;alje u trenutnu kategoriju.');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova link kategorija');

define('_MI_MYLINKS_LINK_APPROVE_NOTIFY','Link je odobren');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP','Obavijesti me kada ovaj link bude odobren.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC','Primite obavijest kada ovaj link bude odobren.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Link je odobren');


?>
