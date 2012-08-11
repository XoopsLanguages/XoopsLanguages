<?php
/**
 * $Id: modinfo.php,v 1.1 2005/12/03 16:34:43 malanciault Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */

// Module Info
// The name of this module
define("_MI_WFD_NAME","WF-Downloads");

// A brief description of this module
define("_MI_WFD_DESC","Stvara zapremski dio gdje korisnici mogu zapremati/podnašati/ocjenjivati razne datoteke.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFD_BNAME1","Nedavne zapreme");
define("_MI_WFD_BNAME2","Najpopularnije zapreme");

// Sub menu titles
define("_MI_WFD_SMNAME1","Podnesi");
define("_MI_WFD_SMNAME2","Popularno");
define("_MI_WFD_SMNAME3","Najbolje ocjenjeno");

// Names of admin menu items
define("_MI_WFD_BINDEX","Temeljna stranica");
define("_MI_WFD_INDEXPAGE","Upravljanje temeljnom stranicom");
define("_MI_WFD_MCATEGORY","Upravljanje kategorijama");
define("_MI_WFD_MDOWNLOADS","Upravljanje datotekama");
define("_MI_WFD_MUPLOADS","Otprema slika");
define("_MI_WFD_MMIMETYPES","Upravljanje <i>mimetypeovima</i>");
define("_MI_WFD_PERMISSIONS","Postavke dozvola");
define("_MI_WFD_BLOCKADMIN","Postavke blokova");
define("_MI_WFD_MVOTEDATA","Glasanja");

// Title of config items
define('_MI_WFD_POPULAR','Popularnost zapreme po pregledavanjima');
define('_MI_WFD_POPULARDSC','Broj pregledavanja prije nego što se zaprema smatra popularnom.');

//Display Icons
define("_MI_WFD_ICONDISPLAY","Downloads Popular and New:");
define("_MI_WFD_DISPLAYICONDSC","Select how to display the popular and new icons in download listing.");
define("_MI_WFD_DISPLAYICON1","Prikaži kao ikone");
define("_MI_WFD_DISPLAYICON2","Prikaži kao tekst");
define("_MI_WFD_DISPLAYICON3","Ne prikazuj");

define("_MI_WFD_DAYSNEW","Nova zaprema po danima:");
define("_MI_WFD_DAYSNEWDSC","Broj dana koliko æe se zaprema smatrati novom.");
define("_MI_WFD_DAYSUPDATED","Ažurirana zaprema po danima:");
define("_MI_WFD_DAYSUPDATEDDSC","Broj dana koliko æe se zaprema smatrati ažuriranom.");

define('_MI_WFD_PERPAGE','Kolièina u kategorijskoj listi');
define('_MI_WFD_PERPAGEDSC','Broj zaprema za prikaz u pojedinoj kategorijskoj listi.');

define('_MI_WFD_USESHOTS','Prikaži zaslonske slike?');
define('_MI_WFD_USESHOTSDSC','Izaberite da za prikaz zaslonskih slika uz svaku zapremu');
define('_MI_WFD_SHOTWIDTH','Širina slike');
define('_MI_WFD_SHOTWIDTHDSC','Širina prikaza zaslonske slike');
define('_MI_WFD_SHOTHEIGHT','Visina slike');
define('_MI_WFD_SHOTHEIGHTDSC','Širina prikaza zaslonske slike');
define('_MI_WFD_CHECKHOST','Onemoguæi izravno linkanje zaprema? (parazitiranje)');
define('_MI_WFD_REFERERS','Ove strane mogu izravno linkati zapreme <br />Odvojite sa | ');
define("_MI_WFD_ANONPOST","Anonimno podnašanje:");
define("_MI_WFD_ANONPOSTDSC","Dozvolite anonimnim korisnicima da podnašaju i otpremaju na vašu stranu?");
define('_MI_WFD_AUTOAPPROVE','Automatski odobri podnešene zapreme');
define('_MI_WFD_AUTOAPPROVEDSC','Izaberite za automatski odobrenje podnešenih zaprema bez provjere i odobrenja.');

define('_MI_WFD_MAXFILESIZE','Velièina otpreme (KB)');
define('_MI_WFD_MAXFILESIZEDSC','Maksimalna velièina datoteke dozvoljena kod otpreme datoteka.');
define('_MI_WFD_IMGWIDTH','Širina otpremske slike');
define('_MI_WFD_IMGWIDTHDSC','Maksimalna širina slike dozvoljena kod otpreme slikovnih datoteka.');
define('_MI_WFD_IMGHEIGHT','Visina otpremske slike');
define('_MI_WFD_IMGHEIGHTDSC','Maksimalna visina slike dozvoljena kod otpreme slikovnih datoteka');

define('_MI_WFD_AUTOSUMMARY','Omoguæi automatski sažetak');
define('_MI_WFD_AUTOSUMMARYDESC','Automatski stvori sažetak na osnovi x kolièine znakova definiranih');
define('_MI_WFD_AUTOSUMMARYLENGTH','Dužina sažetka');
define('_MI_WFD_AUTOSUMMARYLENGTHDESC','Maksimalan broj znakova u sažetku');

define('_MI_WFD_UPLOADDIR','Mapa otpremanja (bez zadnje kose crte)');
define('_MI_WFD_DOWNLOADMINPOSTS',"Minimalan broj poruka");
define('_MI_WFD_DOWNLOADMINPOSTS_DESC',"Unesite minimalan broj poruka potreban za otpremu/zapremu datoteka");
define('_MI_WFD_ALLOWSUBMISS','Korisnièka podnašanja:');
define('_MI_WFD_ALLOWSUBMISSDSC','Dozvoli korisnicima da podnašaju zapreme');
define('_MI_WFD_ALLOWUPLOADS','Korisnièka otpremanja:');
define('_MI_WFD_ALLOWUPLOADSDSC','Dozvoli korisnicima da direktno otpremaju datoteke na vašu stranu');
define('_MI_WFD_SCREENSHOTS','Mapa otpremanja zaslonskih slika');
define('_MI_WFD_CATEGORYIMG','Mapa otpremanja kategorijskih slika');
define('_MI_WFD_MAINIMGDIR','Mapa glavnih slika');
define('_MI_WFD_USETHUMBS','Koristi umanjene slièice:');
define("_MI_WFD_USETHUMBSDSC","Podržane vrste datoteka: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Section æe koristiti umanjene slièice za slike. Podesite na 'ne' da koristite izvornu sliku ako poslužitelj ne podržava ovu opciju.</div>");
define('_MI_WFD_DATEFORMAT','Vremenski žig:');
define('_MI_WFD_DATEFORMATDSC','Predodreðeni vremenski žig za WF-Downloads:');
define('_MI_WFD_SHOWDISCLAIMER','Prikaži odrješitelja prije korisnièkog podnašanja?');
define('_MI_WFD_SHOWDOWNDISCL','Prikaži odrješitelja prije korisnièkog zapremanja?');
define('_MI_WFD_DISCLAIMER','Unesite tekst odrješitelja za podnašanje:');
define('_MI_WFD_DOWNDISCLAIMER','Unesite tekst odrješitelja za zapremanje:');
define('_MI_WFD_PLATFORM','Unesite platforme:');
define('_MI_WFD_SUBCATS','Podkategorije:');
define('_MI_WFD_VERSIONTYPES','Stanje inaèice:');
define('_MI_WFD_LICENSE','Unesite licence:');
define('_MI_WFD_LIMITS','Unesite datoteèna ogranièenja:');

define("_MI_WFD_SUBMITART","Podnašanje zapreme:");
define("_MI_WFD_SUBMITARTDSC","Izaberite grupe koje mogu podnašati zapreme.");

define("_MI_WFD_IMGUPDATE","Ažurirati umanjene slièice?");
define("_MI_WFD_IMGUPDATEDSC","Ako izaberete, umanjene slièice æe biti ažurirane kod uèitavanja stranica, inaèe æe prva slièica biti korištena bez obzira. <br /><br />");
define("_MI_WFD_QUALITY","Kvaliteta umanjenih slièica:");
define("_MI_WFD_QUALITYDSC","Najniža kvaliteta: 0 Najviša: 100");
define("_MI_WFD_KEEPASPECT","Zadrži omjer velièine?");
define("_MI_WFD_KEEPASPECTDSC","");
define("_MI_WFD_ADMINPAGE","Broj administracijskih temeljnih datoteka:");
define("_MI_WFD_AMDMINPAGEDSC","Broj datoteka za prikaz u modulnom administracijskom dijelu.");
define("_MI_WFD_ARTICLESSORT","Predodreðeni slijed zaprema:");
define("_MI_WFD_ARTICLESSORTDSC","Izaberite predodreðeni slijed zaprema na listama.");
define("_MI_WFD_TITLE","Naslov");
define("_MI_WFD_RATING","Ocjena");
define("_MI_WFD_WEIGHT","Redoslijed");
define("_MI_WFD_POPULARITY","Popularnost");
define("_MI_WFD_SUBMITTED2","Datum podnašanja");
define('_MI_WFD_COPYRIGHT','Napomena autorskih prava:');
define('_MI_WFD_COPYRIGHTDSC','Izaberite za prikaz autorskih prava na zapremskoj stranici.');
// Description of each config items
define('_MI_WFD_PLATFORMDSC','Lista platforma za unos <br />Odvojite za | VAŽNO: Ne mijenjajte ovo jednom kada strana postane javna, dodajte novo na kraju liste!');
define('_MI_WFD_SUBCATSDSC','Izaberite "da" za prikaz podkategorija. Izborom "ne" podkategorije æe biti sakrivene na listama');
define('_MI_WFD_LICENSEDSC','Lista platforma za unos <br />SOdvojite sa |');

// Text for notifications
define('_MI_WFD_GLOBAL_NOTIFY','Globalno');
define('_MI_WFD_GLOBAL_NOTIFYDSC','Opcije globalnih zapremskih obaviještavanja.');

define('_MI_WFD_CATEGORY_NOTIFY','Kategorija');
define('_MI_WFD_CATEGORY_NOTIFYDSC','Opcije obaviještavanja koje se odnose na trenutnu podatkovnu kategoriju.');

define('_MI_WFD_FILE_NOTIFY','Datoteka');
define('_MI_WFD_FILE_NOTIFYDSC','Opcije obaviještavanja koje se odnose na trenutnu datoteku.');

define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY','Nova kategorija');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP','Obavijesti me kada se stvori nova podatkovna kategorija.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC','Primi obavijest kada se stvori nova podatkovna kategorija.');
define('_MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto.-obav.: Nova podatkovna kategorija');

define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFY','Zatražena preinaka datoteke');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP','Obavijesti me o bilo kojem zahtjevu za preinaku.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC','Primi obavijest kada se zatraži bilo koji zahtjev za preinaku.');
define('_MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto.-obav.: Zatražena preinaka datoteke');

define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFY','Prijavljena slomljena datoteka');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP','Obavijesti me o prijavi slomljene datoteke.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC','Primi obavijest o bilo kojoj prijavi slomljene datoteke.');
define('_MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto.-obav.: Prijavljena slomljena datoteka');

define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFY','Datoteka podnešena');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP','Obavijesti me o podnašanju bilo koje nove datoteke (èeka odobrenje).');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC','Primi obavijest o podnašanju bilo koje nove datoteke (èeka odobrenje).');
define('_MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto.-obav.: Nova datoteka podnešena');

define('_MI_WFD_GLOBAL_NEWFILE_NOTIFY','Nova datoteka');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP','Obavijesti me o objavljanju bilo koje nove datoteke.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC','Primi obavijest o objavljivanju bilo koje nove datoteke.');
define('_MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto.-obav.: Nova datoteka');

define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFY','Datoteka podnešena');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP','Obavijesti me o podnašanju bilo koje nove datoteke (èeka odobrenje) u trenutnoj kategoriji.');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC','Primi obavijest o podnašanju bilo koje nove datoteke (èeka odobrenje) u trenutnoj kategoriji.');
define('_MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto.-obav.: Nova datoteka podnešena u kategoriji');

define('_MI_WFD_CATEGORY_NEWFILE_NOTIFY','Nova datoteka');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP','Obavijesti me o objavljivanju bilo koje nove datoteke u trenutnoj kategoriji.');   
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC','Primi obavijest o objavljivanju bilo koje nove datoteke u trenutnoj kategoriji.');
define('_MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto.-obav.: Nova datoteka u kategoriji');

define('_MI_WFD_FILE_APPROVE_NOTIFY','Datoteka odobrena');
define('_MI_WFD_FILE_APPROVE_NOTIFYCAP','Obavijesti me kada se ova datoteka odobri.');
define('_MI_WFD_FILE_APPROVE_NOTIFYDSC','Primi obavijest kada se ova datoteka odobri.');
define('_MI_WFD_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto.-obav.: Datoteka odobrena');

define('_MI_WFD_AUTHOR_INFO',"Developer Information");
define('_MI_WFD_AUTHOR_NAME',"Developer");
define('_MI_WFD_AUTHOR_DEVTEAM',"Development Team");
define('_MI_WFD_AUTHOR_WEBSITE',"Developer website");
define('_MI_WFD_AUTHOR_EMAIL',"Developer email");
define('_MI_WFD_AUTHOR_CREDITS',"Credits");
define('_MI_WFD_MODULE_INFO',"Module Development Information");
define('_MI_WFD_MODULE_STATUS',"Development Status");
define('_MI_WFD_MODULE_DEMO',"Demo Site");
define('_MI_WFD_MODULE_SUPPORT',"Official support site");
define('_MI_WFD_MODULE_BUG',"Report a bug for this module");
define('_MI_WFD_MODULE_FEATURE',"Suggest a new feature for this module");
define('_MI_WFD_MODULE_DISCLAIMER',"Disclaimer");
define('_MI_WFD_RELEASE',"Release Date: ");

define('_MI_WFD_MODULE_MAILLIST',"WF-Section <i>mailing</i> liste");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTS',"Objavna <i>mailing</i> lista");
define('_MI_WFD_MODULE_MAILBUGS',"<i>Mailing</i> lista <i>bugova</i>");
define('_MI_WFD_MODULE_MAILFEATURES',"<i>Mailing</i> lista moguænosti");

define('_MI_WFD_MODULE_MAILANNOUNCEMENTSDSC',"Primite zadnje WF-Section objave.");
define('_MI_WFD_MODULE_MAILBUGSDSC',"<i>Mailing</i> lista traženja i prijavljivanja <i>bugova</i>.");
define('_MI_WFD_MODULE_MAILFEATURESDSC',"<i>Mailing</i> lista zahtjeva novih moguænosti.");

define('_MI_WFD_WARNINGTEXT',"OVAJ SOFTVER JE OMOGUÆIO WF-SECTIONS \"BEZ JAMSTAVA\" I \"SA SVIM GREŠKAMA.\"
WF-SECTIONS NE STVARA NIKAKVO JAMSTVO BILO KOJE VRSTE U VEZI S
KVALITETOM, SIGURNOŠÆU ILI PRIKLADNOŠÆU SOFTVERA, ILI IZRIÈITOG ILI
PODRAZUMIJEVANOG, UKLJUÈUJUÆI, ALI BEZ OGRANIÈENJA NA BILO KAKVA IMPLICIRANA JAMSTVA
PRODAJE, PRIKLADNOSTI ZA ODREÐENU SVRHU ILI NEPREKRŠAJA.
NADALJE, ABLEMEDIA NE STVARA NIKAKVA JAMSTVA ISTINITOSTI,
TOÈNOSTI ILI POTPUNOSTI BILO KOJIH TVRDNJA, PODATAKA ILI MATERIJALA KOJI SE
ODNOSE NA SOFTVER KOJI JE SADRŽAN NA WF-SECTIONS INTERNET STRANI. U NIJEDNOM
SLUÈAJU SE ABLEMEDIA NEÆE DRŽATI ODGOVORNOM ZA BILO KOJE NEPOSREDNE, KAZNENE, POSEBNE,
NESRETNE ILI POSLJEDIÈNE ŠTETE BILO KAKO ONE ISKRSNULE ÈAK I AKO JE
WF-SECTIONS BIO PRIJE UPOZOREN O MOGUÆNOSTI TAKVIH ŠTETA...");

define('_MI_WFD_AUTHOR_CREDITSTEXT',"WF-Sections ekipa želi zahvaliti sljedeæim ljudima na njihovoj pomoæi i podršci tijekom razvojnog stupnja ovog modula:<br /><br />
tom, mking, paco1969, mharoun, Talis, m0nty, steenlnielsen, Clubby, Geronimo, bd_csmc, herko, LANG, Stewdio, tedsmith, veggieryan, carnuke, MadFish.
<br /><br />I na osobnom nivou, želio bih zahvaliti posebnoj djevojci u mom životu koju veoma volim i koja mi daje snage i podrške da sve ovo radim.
");
define('_MI_WFD_AUTHOR_BUGFIXES',"Povijest popravaka <i>bugova</i>");

define('_MI_WFD_COPYRIGHTIMAGE',"Slike su autorsko pravo WF-Projecta i mogu se koristiti samo uz dozvolu");

?>
