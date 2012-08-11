<?php
// $Id: modinfo.php,v 1.12 2003/04/11 15:20:05 okazu Exp $
// Module Info

// The name of this module
define("_MI_MYLINKS_NAME","Links");

// A brief description of this module
define("_MI_MYLINKS_DESC","Opretter en sektion for links til hjemmesider, hvor brugere kan søge/tilføje/vuderer enkelte links.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYLINKS_BNAME1","Nyeste links");
define("_MI_MYLINKS_BNAME2","Mest benyttede links");

// Sub menu titles
define("_MI_MYLINKS_SMNAME1","Tilføj");
define("_MI_MYLINKS_SMNAME2","Populær");
define("_MI_MYLINKS_SMNAME3","Mest værdsatte links");

// Names of admin menu items
define("_MI_MYLINKS_ADMENU2","Tilføj/Redigér link");
define("_MI_MYLINKS_ADMENU3","Indsendte links");
define("_MI_MYLINKS_ADMENU4","Defekte links");
define("_MI_MYLINKS_ADMENU5","ændrede links");
define("_MI_MYLINKS_ADMENU6","Link checker");

// Title of config items
define('_MI_MYLINKS_POPULAR','Vælg hvor mange hits et link skal have for at det bliver betegnet som populært');
define('_MI_MYLINKS_NEWLINKS','Vælg det maksimale antal links der skal vises på topsiden');
define('_MI_MYLINKS_PERPAGE','Vælg det maksimale antal links der må vises per side');
define('_MI_MYLINKS_USESHOTS','Væ <b>ja</b> for at vise snapshots ud for hvert link');
define('_MI_MYLINKS_USEFRAMES','ønsker du at vise den linkede side som en del af din site (dvs. inden i en frame)?');
define('_MI_MYLINKS_SHOTWIDTH','Den maksimale bredde for hver snapshot billede');
define('_MI_MYLINKS_ANONPOST','Tillad annonyme brugere at indsende links?');
define('_MI_MYLINKS_AUTOAPPROVE','Automatisk godkendelse af nye links uden administratorens indblandelse?');

// Description of each config items
define('_MI_MYLINKS_POPULARDSC','');
define('_MI_MYLINKS_NEWLINKSDSC','');
define('_MI_MYLINKS_PERPAGEDSC','');
define('_MI_MYLINKS_USEFRAMEDSC','');
define('_MI_MYLINKS_USESHOTSDSC','');
define('_MI_MYLINKS_SHOTWIDTHDSC','');
define('_MI_MYLINKS_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_MYLINKS_GLOBAL_NOTIFY','Global');
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC','Informér om <b>alle</b> ændringer i links sektionen.');

define('_MI_MYLINKS_CATEGORY_NOTIFY','Katagori');
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC','Informér om alle ændringer i denne katagori.');

define('_MI_MYLINKS_LINK_NOTIFY','Link');
define('_MI_MYLINKS_LINK_NOTIFYDSC','Informér om alle ændringer der vedrører dette link.');

define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY','Ny katagori');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Informér mig når der bliver oprettet en ny katagori.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Modtag email eller PM når der bliver oprettet en ny katagori.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} - automatisk information : Der er blevet oprettet en ny link katagori');

define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY','Anmodning om link ændringer');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP','Informér mig når der bliver ønsket link ændringer.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC','Modtag email eller PM når der bliver sendt et ønske om ændringer til et eksisterende link.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk information : Der er modtaget et ønske om ændringer til et link.');

define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY','Defekt link rapporteret');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP','Informér mig når der bliver rapporteret et defekt link.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC','Modtag email eller PM når der bliver rapporteret et defekt link.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk information : Der er blevet repporteret et defekt link.');

define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY','Nyt Link indsendt - global');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP','Informér mig når der bliver indsendt et nyt link til godkendelse.');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC','Modtag email eller PM når der bliver indsendt et link der skal godkendes.');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk information : Der er blevet indsendt et nyt link');

define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY','Nyt link - global');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP','Informér mig når der bliver oprettet et nyt link.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC','Modtag email eller PM når der bliver oprettet et link.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk information : Der er blevet oprettet et nyt link');

define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY','Nyt link indsendt - katagori');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP','Informér mig når der bliver indsendt et nyt link (til godkendelse) i denne katagori.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC','Modtag email eller PM når der bliver indsendt et link (der skal godkendes) til denne katagori.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk information : Der er blevet indsendt et nyt link i katagorien');

define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY','Nyt link - katagori');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP','Informér mig når der bliver oprettet et nyt link i denne katagori.');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC','Modtag email eller PM når der bliver oprettet et link i denne katagori.');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk information : Der er blevet oprettet et nyt link i katagorien.');

define('_MI_MYLINKS_LINK_APPROVE_NOTIFY','Nyt link godkendt');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP','Informér mig når dette link er blevet godkendt.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC','Modtag email eller PM når dette link er blevet godkendt.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} automatisk information : Linket er blevet godkendt.');

?>
