<?php
// $Id: modinfo.php,v 1.1.1.1 2005/02/16 17:32:36 ohwada Exp $

// 2005-01-20 K.OHWADA
// add _MI_WEBLINKS_NEWDAYS
// delete _MI_WEBLINKS_RSS_NEW

// 2004-11-28 K.OHWADA
// add _MI_WEBLINKS_BNAME5
// delete _MI_WEBLINKS_POST

// 2004-11-20 K.OHWADA
// update of admin menu

// 2004-10-24 K.OHWADA
// broken link check
// URL-less mode
// category list block 
// admin can change the display number of subcategory
// description_type
// ratelink_use
// RSS/ATOM URL

// 2004-10-19 cb750
// translation for V0.7

//=========================================================
// language for Module Info
//=========================================================

//---------------------------------------------------------
// same as mylinks
//---------------------------------------------------------
// The name of this module
define("_MI_WEBLINKS_NAME","Web Links");

// A brief description of this module
define("_MI_WEBLINKS_DESC","Opretter en sektion med web links, hvor brugerne kan søge/indsende og bedømme forskellige websteder.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WEBLINKS_BNAME1","Nyt Link"); 
define("_MI_WEBLINKS_BNAME2","Top Links"); 
define("_MI_WEBLINKS_BNAME3","Populære Links");

// Sub menu titles
define("_MI_WEBLINKS_SMNAME1","Indsend"); 
define("_MI_WEBLINKS_SMNAME2","Populært site"); 
define("_MI_WEBLINKS_SMNAME3","Højt bedømt site");

// Names of admin menu items
define("_MI_WEBLINKS_ADMENU1","Indstillinger"); 
define("_MI_WEBLINKS_ADMENU2","Vedligehold af kategorier"); 
define("_MI_WEBLINKS_ADMENU3","Vedligehold af link"); 
define("_MI_WEBLINKS_ADMENU4","Tilføj nyt link"); 
define("_MI_WEBLINKS_ADMENU5","Nye links der afventer godkendelse"); 
define("_MI_WEBLINKS_ADMENU6","Redigerede links der afveter godkendelse"); 
define("_MI_WEBLINKS_ADMENU7","Defekte links anmeldt");
//define("_MI_WEBLINKS_ADMENU8","Link Checker");

//-------------------------------------
// Title of config items
//-------------------------------------
define('_MI_WEBLINKS_LOGOSHOW','Vis modul logo'); 
define('_MI_WEBLINKS_LOGOSHOWDSC','Vælg "JA" for at vise modul logo billed.');

define('_MI_WEBLINKS_TITLESHOW','Vis titel'); 
define('_MI_WEBLINKS_TITLESHOWDSC','Vælg "JA" for at vise titel');

define('_MI_WEBLINKS_NEWDAYS','Vælg det antal dage som nye links står markeret som nye'); 
define('_MI_WEBLINKS_NEWDAYS_DSC','Indtast antallet af hits til at vise "NYT"-ikon. <br /> Indtast 0, for ikke at vise ikonet.');

define('_MI_WEBLINKS_DESCSHORT','Maksimum antal tegn anvendes til link listen forklaring'); 
define('_MI_WEBLINKS_DESCSHORTDSC','Indtast det maksimale antal tegn, der skal anvendes til link listen forklaring.');

define('_MI_WEBLINKS_ORDERBY','Default værdien til at sortere link efter'); 
define('_MI_WEBLINKS_ODERBYTDSC','Indtast standardværdi for sortering af link.'); 
define("_MI_WEBLINKS_ORDERBY0","Titel (A til Z)"); 
define("_MI_WEBLINKS_ORDERBY1","Titel (Z til A)"); 
define("_MI_WEBLINKS_ORDERBY2","Dato (Registrering i stigende orden)"); 
define("_MI_WEBLINKS_ORDERBY3","Dato (Registrering i rækkefølge)"); 
define("_MI_WEBLINKS_ORDERBY4","Bedømmelse (stigende rækkefølge)"); 
define("_MI_WEBLINKS_ORDERBY5","Bedømmelse (faldende rækkefølge)"); 
define("_MI_WEBLINKS_ORDERBY6","Popularitet (stigende rækkefølge)"); 
define("_MI_WEBLINKS_ORDERBY7","Popularitet (faldende rækkefølge)");
//-------------------------------------
// Title of config items
// Description of each config items
//-------------------------------------
define('_MI_WEBLINKS_POPULAR','Vælg antallet af hits for links, der skal markeres som populært'); 
define('_MI_WEBLINKS_POPULARDSC','Indtast det mindste antal hits for at vise "populære"-ikon. <br /> Hvis værdien sættes til 0, vises ikonet ikke.'); 
define('_MI_WEBLINKS_NEWLINKS','Vælg det maksimale antal nye links vises på top siden');

//define('_MI_WEBLINKS_NEWLINKSDSC','Enter the maximum number of links to be displayed in the "New Links" block. ');
define('_MI_WEBLINKS_NEWLINKSDSC','Indtast det maksimale antal links, der skal vises på hovedsiden.'); 

define('_MI_WEBLINKS_PERPAGE','Vælg det maksimale antal links der skal vises på hver side'); 
define('_MI_WEBLINKS_PERPAGEDSC','Indtast det maksimale antal links, der skal vises med oplysninger per side');

//define('_MI_WEBLINKS_USESHOTS','Select yes to display screenshot images for each link');
//define('_MI_WEBLINKS_USESHOTSDSC','');
//define('_MI_WEBLINKS_SHOTWIDTH','Maximum allowed width of each screenshot image');
//define('_MI_WEBLINKS_SHOTWIDTHDSC','');

//define('_MI_WEBLINKS_ANONPOST','Allow anonymous users to post links?');
//define('_MI_WEBLINKS_AUTOAPPROVE','Auto approve new links without admin intervention?');
//define('_MI_WEBLINKS_AUTOAPPROVEDSC','');


//-------------------------------------
// Text for notifications
//-------------------------------------
define('_MI_WEBLINKS_GLOBAL_NOTIFY','Global'); 
define('_MI_WEBLINKS_GLOBAL_NOTIFYDSC','Globale link besked muligheder.');

define('_MI_WEBLINKS_CATEGORY_NOTIFY','Kategori'); 
define('_MI_WEBLINKS_CATEGORY_NOTIFYDSC','Besked muligheder, der gælder for den aktuelle link kategori.');

define('_MI_WEBLINKS_LINK_NOTIFY','Link');
define('_MI_WEBLINKS_LINK_NOTIFYDSC','Besked muligheder der vedrører det aktuelle link.');

define('_MI_WEBLINKS_GLOBAL_NEWCATEGORY_NOTIFY','Ny kategori'); 
define('_MI_WEBLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Giv mig besked, når en ny kategori er oprettet.'); 
define('_MI_WEBLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Få besked,når en ny link kategori er oprettet.'); 
define('_MI_WEBLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Ny link kategori');

define('_MI_WEBLINKS_GLOBAL_LINKMODIFY_NOTIFY','Ændring af link ønsket'); 
define('_MI_WEBLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP','Giv mig besked om eventuelle link modifikation anmodning.'); 
define('_MI_WEBLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC','få besked, når nogen ønsker et link modifikations anmodningen er indsendt.'); 
define('_MI_WEBLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Link ændring ønsket');

define('_MI_WEBLINKS_GLOBAL_LINKBROKEN_NOTIFY','Brudte link indsendt'); 
define('_MI_WEBLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP','Giv mig besked om eventuelle brudte link der rapporteres.'); 
define('_MI_WEBLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC','få besked, når et brudt link rapporteres.'); 
define('_MI_WEBLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Brudte link rapporteret');

define('_MI_WEBLINKS_GLOBAL_LINKSUBMIT_NOTIFY','Nye link indsendt'); 
define('_MI_WEBLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP','Giv mig besked, når et nyt link er indsendt (afventer godkendelse ).'); 
define('_MI_WEBLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC','få besked, når et nyt link er indsendt (afventer godkendelse ).'); 
define('_MI_WEBLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt link indsendt');

define('_MI_WEBLINKS_GLOBAL_NEWLINK_NOTIFY','Nyt link'); 
define('_MI_WEBLINKS_GLOBAL_NEWLINK_NOTIFYCAP','Giv mig besked, når et nyt link er offentliggjort.'); 
define('_MI_WEBLINKS_GLOBAL_NEWLINK_NOTIFYDSC','få besked, når noget nyt link er offentliggjort.'); 
define('_MI_WEBLINKS_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt link');

define('_MI_WEBLINKS_CATEGORY_LINKSUBMIT_NOTIFY','Nyt link indsendt'); 
define('_MI_WEBLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP','Giv mig besked, når et nyt link er indsendt (afventer godkendelse) i den aktuelle kategori.'); 
define('_MI_WEBLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC','få besked, når et nyt link er indsendt (afventer godkendelse) i den aktuelle kategori.'); 
define('_MI_WEBLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt link indsendt i kategorien');

define('_MI_WEBLINKS_CATEGORY_NEWLINK_NOTIFY','Nyt link'); 
define('_MI_WEBLINKS_CATEGORY_NEWLINK_NOTIFYCAP','Giv mig besked, når et nyt link er lagt ud til den aktuelle kategori.'); 
define('_MI_WEBLINKS_CATEGORY_NEWLINK_NOTIFYDSC','få besked, når et nyt link er lagt ud til den aktuelle kategori.'); 
define('_MI_WEBLINKS_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Nyt link i kategorien');

define('_MI_WEBLINKS_LINK_APPROVE_NOTIFY','Link Godkendt'); 
define('_MI_WEBLINKS_LINK_APPROVE_NOTIFYCAP','Giv mig besked, når dette link er godkendt.'); 
define('_MI_WEBLINKS_LINK_APPROVE_NOTIFYDSC','få besked, når dette link er godkendt.'); 
define('_MI_WEBLINKS_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-besked: Link godkendt');

//---------------------------------------------------------
// weblinks
//---------------------------------------------------------
// === Names of blocks for this module ===
define("_MI_WEBLINKS_BNAME4","Kategori liste for Web links"); 
define("_MI_WEBLINKS_BNAME5","Seneste RSS/Atom feeds af Web links"); 
define("_MI_WEBLINKS_BNAME6","Vis blog af Web links");


define('_MI_WEBLINKS_SEARCH_LINKS','Antal links, der vises på et søgeresultat side'); 
define('_MI_WEBLINKS_SEARCH_LINKSDSC','Indtast det maksimale antal links, der skal vises på en søgeresultatside');

define('_MI_WEBLINKS_SEARCH_MIN','Mindste antal tegn til en søgning'); 
define('_MI_WEBLINKS_SEARCH_MINDSC','Indtast det mindste antal tegn for en søgning');

define('_MI_WEBLINKS_USEFRAMES','Vil du vise siden i en ramme?'); 
define('_MI_WEBLINKS_USEFRAMEDSC','Ønsker du at vise siden i en ramme (IFRAME)');

define('_MI_WEBLINKS_BROKEN','Antal brudte link for at stoppe en visning'); 
define('_MI_WEBLINKS_BROKENDSC','Indtast det antal antal brudte link der skal til for at stoppe en visning af et link. <br /> Når antallet er under denne værdi, vil det blive betragtet som en midlertidig fejl, og der gøres ikke noget. <br /> Når det er over denne talværdi, betragtes det som en fast fejl, og visningen af linket stopper.');

define('_MI_WEBLINKS_LISTIMAGE_USE','Brug link billeder til link listen'); 
define('_MI_WEBLINKS_LISTIMAGE_WIDTH','Største bredde på et link billede'); 
define('_MI_WEBLINKS_LISTIMAGE_HEIGHT','Største højde på et link billede'); 
define('_MI_WEBLINKS_LISTIMAGE_USEDSC','Vælg "JA" for at vise billeder, når der vises en liste med links');

define('_MI_WEBLINKS_LINKIMAGE_USE','Brug link billeder for link detaljer'); 
define('_MI_WEBLINKS_LINKIMAGE_WIDTH','Største bredde på et billede for link detaljer'); 
define('_MI_WEBLINKS_LINKIMAGE_HEIGHT','Største højde på et billede for link detaljer'); 
define('_MI_WEBLINKS_LINKIMAGE_USEDSC','Vælg "JA" for at vise link billeder, når link detaljer vises.');



?>