<?php
/**
* $ Id: admin.php mod 1,00 21 juni 2005 John N Exp $
* Modul: WF-links
* Version: v1.0.3
* Udgivelsesdato: 21. juni 2005
* Udvikler: John N
* Team: WF-projekter
* Licens: GNU
* Format: UTF-8
*/

define("_AM_WFL_WARNINSTALL1","<b> ADVARSEL: </b><u> Directoriet </u> %s findes på din server. <br/> Fjern denne mappe af sikkerhedsmæssige årsager.");
define("_AM_WFL_WARNINSTALL2","<b> ADVARSEL: </b><u> Filen </u> %s findes på din server. <br/> Fjern denne mappe af sikkerhedsmæssige årsager.");
define("_AM_WFL_WARNINSTALL3","<b> ADVARSEL: </b><u> Mappen </u> %s findes ikke på din server. <br /> Denne mappe er påkrævet af WF-Links.");

define("_AM_WFL_MODULE_NAME","WF-Links");

define("_AM_WFL_BMODIFY","Rediger");
define("_AM_WFL_BDELETE","Slet");
define("_AM_WFL_BCREATE","Opret");
define("_AM_WFL_BADD","Tilføj");
define("_AM_WFL_BAPPROVE","Godkend");
define("_AM_WFL_BIGNORE","Ignorer");
define("_AM_WFL_BCANCEL","Annuller");
define("_AM_WFL_BSAVE","Gem");
define("_AM_WFL_BRESET","Reset");
define("_AM_WFL_BMOVE","Flyt Links");
define("_AM_WFL_BUPLOAD","Upload");
define("_AM_WFL_BDELETEIMAGE","Slet valgte Image");
define("_AM_WFL_BRETURN","Tilbage til hvor du var!");
define("_AM_WFL_DBERROR","Database Access Fejl: Rapporter venligst denne fejl til WF-Projektets hjemmeside");
// Andre indstillinger
define("_AM_WFL_TEXTOPTIONS","Tekst Valg:");
define("_AM_WFL_DISABLEHTML","Deaktiver HTML-tags");
define("_AM_WFL_DISABLESMILEY","Deaktiver Smilie Ikoner");
define("_AM_WFL_DISABLEXCODE","Deaktiver XOOPS Codes");
define("_AM_WFL_DISABLEIMAGES","Deaktiver Billeder");
define("_AM_WFL_DISABLEBREAK","Brug XOOPS linebreak konvertering?");
define("_AM_WFL_UPLOADFILE","Link uploadet");
define("_AM_WFL_NOMENUITEMS","Ingen menupunkter i menuen");
// Admin Brød crumb
define("_AM_WFL_PREFS","Indstillinger");
define("_AM_WFL_BUPDATE","Update");
define("_AM_WFL_BINDEX","Hoved Index");
define("_AM_WFL_BPERMISSIONS","Tilladelser");
// define("_AM_WFL_BLOCKADMIN","Blocks");
define("_AM_WFL_BLOCKADMIN","Blocks");
define("_AM_WFL_TEMPLATESADMIN","skabeloner");
define("_AM_WFL_GOMODULE","Modul Hjem");
define("_AM_WFL_HELP","Hjælp");
define("_AM_WFL_ABOUT","Om");
define("_AM_WFL_INDEX","Index");

// Admin Summary
define("_AM_WFL_SCATEGORY","Kategori:");
define("_AM_WFL_SFILES","Links:");
define("_AM_WFL_SNEWFILESVAL","Indgivet:");
define("_AM_WFL_SMODREQUEST","Ændret:");
define("_AM_WFL_SREVIEWS","Anmeldelser:");
// Admin Main Menu
define("_AM_WFL_MCATEGORY","Kategori");
define("_AM_WFL_MLINKS","Links");
define("_AM_WFL_MLISTBROKEN","Brudte Links");
define("_AM_WFL_MLISTPINGTIMES","Liste Links Pingrid");
define("_AM_WFL_INDEXPAGE","Indexside");
define("_AM_WFL_MCOMMENTS","Kommentarer");
define("_AM_WFL_MVOTEDATA","Stemme Data");
define("_AM_WFL_MUPLOADS","kommentarer");
// Catgeory definerer
define("_AM_WFL_CCATEGORY_CREATENEW","Ny Kategori");
define("_AM_WFL_CCATEGORY_MODIFY","Rediger kategori");
define("_AM_WFL_CCATEGORY_MOVE","Flyt Kategori Links");
define("_AM_WFL_CCATEGORY_MODIFY_TITLE","Kategori Titel:");
define("_AM_WFL_CCATEGORY_MODIFY_FAILED","Flytning af links fejlede: Kan ikke flytte til denne kategori");
define("_AM_WFL_CCATEGORY_MODIFY_FAILEDT","Flytning af links fejlede: Kan ikke finde denne kategori");
define("_AM_WFL_CCATEGORY_MODIFY_MOVED","Links Flyttet og database opdateret med succes");
define("_AM_WFL_CCATEGORY_CREATED","Ny kategori Oprettet og database opdateret med succes");
define("_AM_WFL_CCATEGORY_MODIFIED","Valgt kategori Ændret og database opdateret med succes");
define("_AM_WFL_CCATEGORY_DELETED","Udvalgte Kategori slettet og database opdateret med succes");
define("_AM_WFL_CCATEGORY_AREUSURE","ADVARSEL: Er du sikker på du vil slette denne kategori og ALLE dens Links og kommentarer?");
define("_AM_WFL_CCATEGORY_NOEXISTS","Du skal oprette et kategori, før du kan tilføje en ny forbindelse");
define("_AM_WFL_FCATEGORY_GROUPPROMPT","Kategori Adgangstilladelser: <div style='padding-top: 8px;'><span style='font-weight: normal;'> Vælg brugergrupper, som vil have adgang til denne kategori. </span></div> ");
define("_AM_WFL_FCATEGORY_SUBGROUPPROMPT","Kategori Submission tilladelser: <div style='padding-top: 8px;'><span style='font-weight: normal;'> Vælg brugergrupper, som vil have tilladelse til at indsende nye links til denne kategori. </span></div> ");
define("_AM_WFL_FCATEGORY_MODGROUPPROMPT","Kategori Moderation tilladelser: <div style='padding-top: 8px;'><span style='font-weight: normal;'> Vælg brugergrupper, som skal have tilladelse til moderat denne kategori. </ span></div> ");

define("_AM_WFL_FCATEGORY_TITLE","Kategori Titel:");
define("_AM_WFL_FCATEGORY_WEIGHT","Kategori Vægt:");
define("_AM_WFL_FCATEGORY_SUBCATEGORY","Set Som Sub-Kategori:");
define("_AM_WFL_FCATEGORY_CIMAGE","Vælg kategori Billede:");
define("_AM_WFL_FCATEGORY_DESCRIPTION","Set Kategori Beskrivelse:");
define("_AM_WFL_FCATEGORY_SUMMARY","Set Kategori Resumé:");
/**
* Index page Definerer
*/
define("_AM_WFL_IPAGE_UPDATED","Index side ændret og database opdateret med succes!");
define("_AM_WFL_IPAGE_INFORMATION","Indexside Information");
define("_AM_WFL_IPAGE_MODIFY","Rediger indeks Side");
define("_AM_WFL_IPAGE_CIMAGE","Vælg Index Image:");
define("_AM_WFL_IPAGE_CTITLE","Index Titel:");
define("_AM_WFL_IPAGE_CHEADING","Indeks Tekst:");
define("_AM_WFL_IPAGE_CHEADINGA","Indeks Tekst Alignment:");
define("_AM_WFL_IPAGE_CFOOTER","Index Footer:");
define("_AM_WFL_IPAGE_CFOOTERA","Index Footer Alignment:");
define("_AM_WFL_IPAGE_CLEFT","Venstre");
define("_AM_WFL_IPAGE_CCENTER","Centrer");
define("_AM_WFL_IPAGE_CRIGHT","Højrejusteret");
/**
* Tilladelser definerer
*/
define("_AM_WFL_PERM_MANAGEMENT","Tilladelsesstyring");
define("_AM_WFL_PERM_PERMSNOTE","<div><b> NB: </b>Vær opmærksom på, at selvom du har angivet korrekt visning tilladelser her, kan en gruppe ikke se artikler eller blokke, hvis du ikke også give denne gruppe tilladelser til at få adgang til modulet. For at gøre dette, skal du gå til <b> System admin Grupper </b>, vælg den ønskede gruppe, og klik afkrydsningsfelterne til at give sine medlemmer adgang. </div> ");
define("_AM_WFL_PERM_CPERMISSIONS","Kategori Permissions");
define("_AM_WFL_PERM_CSELECTPERMISSIONS","Vælg kategorier, som hver gruppe får lov til at se");
define("_AM_WFL_PERM_CNOCATEGORY","Kan ikke sætte tilladelse's: Ingen kategorier er blevet oprettet endnu!");
define("_AM_WFL_PERM_FPERMISSIONS","Link Tilladelser");
define("_AM_WFL_PERM_FNOFILES","Kan ikke sætte tilladelser: Ingen links er blevet oprettet endnu!");
define("_AM_WFL_PERM_FSELECTPERMISSIONS","Vælg det link, hver gruppe kan se");
/**
* Upload definerer
*/
define("_AM_WFL_LINK_IMAGEUPLOAD","Billede uploadet til server");
define("_AM_WFL_LINK_NOIMAGEEXIST","Fejl: Ingen link udvalgt til at uploade. Prøv igen!");
define("_AM_WFL_LINK_IMAGEEXIST","Billede findes allerede i upload området!");
define("_AM_WFL_LINK_FILEDELETED","Link er blevet slettet.");
define("_AM_WFL_LINK_FILEERRORDELETE","Fejl ved sletning Link: Link ikke fundet på serveren.");
define("_AM_WFL_LINK_NOFILEERROR","Fejl ved sletning af Link: Ingen Link Valgt for sletning.");
define("_AM_WFL_LINK_DELETEFILE","ADVARSEL: Er du sikker på du vil slette denne Image link?");
define("_AM_WFL_LINK_IMAGEINFO","Server Status");
define("_AM_WFL_LINK_SPHPINI","<b>Oplysninger taget fra PHP ini Link: </b>");
define("_AM_WFL_LINK_SAFEMODESTATUS","Safe Mode Status:");
define("_AM_WFL_LINK_REGISTERGLOBALS","Register Globals:");
define("_AM_WFL_LINK_SERVERUPLOADSTATUS","Server Uploads Status:");
define("_AM_WFL_LINK_MAXUPLOADSIZE","Max Upload Size tilladt:");
define("_AM_WFL_LINK_MAXPOSTSIZE","Max Post Størrelse tilladt:");
define("_AM_WFL_LINK_SAFEMODEPROBLEMS","(Dette kan forårsage problemer)");
define("_AM_WFL_LINK_GDLIBSTATUS","GD Library Support:");
define("_AM_WFL_LINK_GDLIBVERSION","GD Library Version:");
define("_AM_WFL_LINK_GDON","<b>Aktiveret</b> (Thumbs Nails Available)");
define("_AM_WFL_LINK_GDOFF","<b>Handikappede</b> (nr. Thumb nails tilgængelige)");
define("_AM_WFL_LINK_OFF","<b> Deaktiveret </b>");
define("_AM_WFL_LINK_ON","<b> Aktiveret </b>");
define("_AM_WFL_LINK_CATIMAGE","Kategori Billeder");
define("_AM_WFL_LINK_SCREENSHOTS","Screenshot Billeder");
define("_AM_WFL_LINK_MAINIMAGEDIR","Main billeder");
define("_AM_WFL_LINK_FCATIMAGE","Kategori image sti");
define("_AM_WFL_LINK_FSCREENSHOTS","Screenshot image sti");
define("_AM_WFL_LINK_FMAINIMAGEDIR","Main image sti");
define("_AM_WFL_LINK_FUPLOADIMAGETO","Opload billede:");
define("_AM_WFL_LINK_FUPLOADPATH","Sti:");
define("_AM_WFL_LINK_FUPLOADURL","Upload URL:");
define("_AM_WFL_LINK_FOLDERSELECTION","Vælg Upload Destination:");
define("_AM_WFL_LINK_FSHOWSELECTEDIMAGE","Vis Udvalgte Billede:");
define("_AM_WFL_LINK_FUPLOADIMAGE","Upload nyt billede, der valgte destination:");
// Main Index definerer
define("_AM_WFL_MINDEX_LINKSUMMARY","Module Admin Resume");
define("_AM_WFL_MINDEX_PUBLISHEDLINK","Udgivet Links:");
define("_AM_WFL_MINDEX_AUTOPUBLISHEDLINK","Auto Udgivet Links:");
define("_AM_WFL_MINDEX_AUTOEXPIRE","Auto Udløbet Links:");
define("_AM_WFL_MINDEX_EXPIRED","Udløbet Links:");
define("_AM_WFL_MINDEX_OFFLINELINK","Off-line Links:");
define("_AM_WFL_MINDEX_ID","ID");
define("_AM_WFL_MINDEX_TITLE","Link Title");
define("_AM_WFL_MINDEX_POSTER","Indsender");
define("_AM_WFL_MINDEX_ONLINE","Status");
define("_AM_WFL_MINDEX_ONLINESTATUS","Online Status");
define("_AM_WFL_MINDEX_PUBLISH","Offentliggjort");
define("_AM_WFL_MINDEX_PUBLISHED","Offentliggjort");
define("_AM_WFL_MINDEX_EXPIRE","udløbet");
define("_AM_WFL_MINDEX_NOTSET","Dato Ikke sat");
define("_AM_WFL_MINDEX_SUBMITTED","Dato indgivet");

define("_AM_WFL_MINDEX_ACTION","Handling");
define("_AM_WFL_MINDEX_NOLINKSFOUND","BEMÆRK: Der er ingen links, der matcher dette kriterium");
define("_AM_WFL_MINDEX_PAGE","<b> Side: <b>");
define('_AM_WFL_MINDEX_PAGEINFOTXT','<ul><li> WF-links forsiden detaljer. </li><li> Du kan let ændre det billede, logo, overskrift, til hovedindeks sidehoved og sidefod teksten passer til dit eget look </li></ul><br/> Bemærk: Logo valgte billede vil blive brugt i hele WF-links. ');
define("_AM_WFL_MINDEX_RESPONSE","Responstid");
// Skrevet Links
define("_AM_WFL_SUB_SUBMITTEDFILES","Forelagt Links");
define("_AM_WFL_SUB_FILESWAITINGINFO","Ventende Links Information");
define("_AM_WFL_SUB_FILESWAITINGVALIDATION","Links der venter Validering:");
define("_AM_WFL_SUB_APPROVEWAITINGFILE","<b> Godkend </b> nyt link oplysninger uden validering.");
define("_AM_WFL_SUB_EDITWAITINGFILE","<b> Rediger </b> nyt link oplysninger og derefter godkende.");
define("_AM_WFL_SUB_DELETEWAITINGFILE","<b> Slet </b> det nye link oplysninger.");
define("_AM_WFL_SUB_NOFILESWAITING","Der er ingen links, der matcher dette kriterium");
define("_AM_WFL_SUB_NEWFILECREATED","Ny Link data oprettet og database opdateret med succes");
// Afstemning Information
define("_AM_WFL_VOTE_RATINGINFOMATION","Stemme Information");
define("_AM_WFL_VOTE_TOTALVOTES","Totale stemmer:");
define("_AM_WFL_VOTE_REGUSERVOTES","Registerede brugerstemmer: %s");
define("_AM_WFL_VOTE_ANONUSERVOTES","Anonyme brugers stemmer: %r");
define("_AM_WFL_VOTE_USER","Bruger");
define("_AM_WFL_VOTE_IP","IP adresse");
define("_AM_WFL_VOTE_DATE","Sendt");
define("_AM_WFL_VOTE_RATING","Karakter");
define("_AM_WFL_VOTE_NOREGVOTES","Ingen registrerede brugerstemmer");
define("_AM_WFL_VOTE_NOUNREGVOTES","Ingen uregistrede brugerstemmer");
define("_AM_WFL_VOTE_VOTEDELETED","Afstemnings slettede data.");
define("_AM_WFL_VOTE_ID","ID");
define("_AM_WFL_VOTE_FILETITLE","Link Title");
define("_AM_WFL_VOTE_DISPLAYVOTES","Afstemningen Datainformation");
define("_AM_WFL_VOTE_NOVOTES","Ingen brugerstemmer at vise");
define("_AM_WFL_VOTE_DELETE","Ingen brugerstemmer at vise");
define("_AM_WFL_VOTE_DELETEDSC","<b> Slet </b> den valgte stemmes oplysninger fra databasen.");
define("_AM_WFL_VOTEDELETED","Valgte Afstemning fjernet opdateret database");

define("_AM_WFL_VOTE_USERAVG","Gennemsnitlig Brugervurdering");
define("_AM_WFL_VOTE_TOTALRATE","Antal stemmer");
define("_AM_WFL_VOTE_MAXRATE","Max Stem");
define("_AM_WFL_VOTE_MINRATE","Min Stem");
define("_AM_WFL_VOTE_MOSTVOTEDTITLE","Mest stemt for");
define("_AM_WFL_VOTE_LEASTVOTEDTITLE","Mindst stemte for");
define("_AM_WFL_VOTE_MOSTVOTERSUID","Mest aktive Voter");
define("_AM_WFL_VOTE_REGISTERED","registrerede stemmer");
define("_AM_WFL_VOTE_NONREGISTERED","Anonyme Stemmer");
// Ændringer
define("_AM_WFL_MOD_TOTMODREQUESTS","Total Ændring Anmodning:");
define("_AM_WFL_MOD_MODREQUESTS","Modified Links");
define("_AM_WFL_MOD_MODREQUESTSINFO","Modified Links Information");
define("_AM_WFL_MOD_MODID","ID");
define("_AM_WFL_MOD_MODTITLE","Title");
define("_AM_WFL_MOD_MODPOSTER","Original Plakat:");
define("_AM_WFL_MOD_DATE","Sendt");
define("_AM_WFL_MOD_NOMODREQUEST","Der findes ingen hits, der matcher dette critera");
define("_AM_WFL_MOD_TITLE","link Titel:");
define("_AM_WFL_MOD_LID","link ID:");
define("_AM_WFL_MOD_CID","Kategori:");
define("_AM_WFL_MOD_URL","Link URL:");
define("_AM_WFL_MOD_PUBLISHER","Udgiver:");
define("_AM_WFL_MOD_FORUMID","Forum:");
define("_AM_WFL_MOD_SCREENSHOT","Screenshot Billede:");
define("_AM_WFL_MOD_HOMEPAGE","Home Page:");
define("_AM_WFL_MOD_HOMEPAGETITLE","Home Page Titel:");
define("_AM_WFL_MOD_SHOTIMAGE","Screenshot Billede:");
define("_AM_WFL_MOD_DESCRIPTION","Beskrivelse:");
define("_AM_WFL_MOD_MODIFYSUBMITTER","afsender:");
define("_AM_WFL_MOD_MODIFYSUBMIT","afsender");
define("_AM_WFL_MOD_PROPOSED","Proposed linket Detaljer");
define("_AM_WFL_MOD_ORIGINAL","Original link Detaljer");
define("_AM_WFL_MOD_REQDELETED","Ændring anmodning fjernet fra databasen");
define("_AM_WFL_MOD_REQUPDATED","Udvalgte link Modified og database opdateret med succes");
define('_AM_WFL_MOD_VIEW','Vis');
// Link management
define("_AM_WFL_LINK_ID","Link ID:");
define("_AM_WFL_LINK_IP","Indsenders IP-adresse:");
define("_AM_WFL_LINK_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b> tilladte Admin Linkudvidelser </b>: </div>");
define("_AM_WFL_LINK_MODIFYFILE","Rediger Link Information");
define("_AM_WFL_LINK_CREATENEWFILE","Opret nyt Link");
define("_AM_WFL_LINK_TITLE","Link Titel:");
define("_AM_WFL_LINK_DLURL","Link URL:");
define("_AM_WFL_LINK_DIRCA","Internet Content Rating:");
define("_AM_WFL_LINK_DESCRIPTION","Link Beskrivelse:");
define("_AM_WFL_LINK_CATEGORY","Link Hovedkategori:");
define("_AM_WFL_LINK_FILESSTATUS","Sæt link offline? <br/><br/> style='font-weight: normal;'> link vil ikke være synlig for alle brugere. </span>");
define("_AM_WFL_LINK_SETASUPDATED","Sæt linkets Status som Opdateret? <br/><br/> style='font-weight: normal;'> link vises opdateret ikon. </span>");
define("_AM_WFL_LINK_SHOTIMAGE","Link Screenshot Billede:");
define("_AM_WFL_LINK_DISCUSSINFORUM","Tilføj Diskuter i dette forum?");
define("_AM_WFL_LINK_PUBLISHDATE","Link Udgivelses Dato:");
define("_AM_WFL_LINK_EXPIREDATE","Link udløbsdato:");
define("_AM_WFL_LINK_CLEARPUBLISHDATE","<br/><br/> Fjern Udgivelsesdato:");
define("_AM_WFL_LINK_CLEAREXPIREDATE","<br/><br/> fjern Udløbsdato:");
define("_AM_WFL_LINK_PUBLISHDATESET","Udgivelses dato:");
define("_AM_WFL_LINK_SETDATETIMEPUBLISH","Indstil dato/tidspunkt for offentliggørelse");
define("_AM_WFL_LINK_SETDATETIMEEXPIRE","Indstil udløbs dato/tidspunkt");
define("_AM_WFL_LINK_SETPUBLISHDATE","<b> Set Publish Date: </ b>");
define("_AM_WFL_LINK_SETNEWPUBLISHDATE","<b> sæt ny udgivelsesdato: </b><br/> udgivelse:");
define("_AM_WFL_LINK_SETPUBDATESETS","<b> Udgivelsesdato: </b><br/> offentliggør på Dato:");
define("_AM_WFL_LINK_EXPIREDATESET","Sæt udløbsdato:");
define("_AM_WFL_LINK_SETEXPIREDATE","<b>Sæt udløbsdato: </b>");
define("_AM_WFL_LINK_DELEDITMESS","Slet brudt rapportering? <br/><br/> style='font-weight: normal;'> Når du vælger <b> JA </b> Brudt rapporten vil automatisk blive slettet og du bekræfter, at linket nu fungerer igen. </span> ");
define("_AM_WFL_LINK_MUSTBEVALID","Screenshot billedet skal være et gyldigt billede linket under %s bibliotek (ex. shot.gif). Lad det stå tomt, hvis der ikke er noget billede link.");
define("_AM_WFL_LINK_EDITAPPROVE","Godkend link:");
define("_AM_WFL_LINK_NEWFILEUPLOAD","Nyt Link Oprettet og database opdateret med succes");
define("_AM_WFL_LINK_FILEMODIFIEDUPDATE","Udvalgte Link ændret og database opdateret med succes");
define("_AM_WFL_LINK_REALLYDELETEDTHIS","Vil du slette det valgte link?");
define("_AM_WFL_LINK_FILEWASDELETED","Link fjernet fra databasen!");
define("_AM_WFL_LINK_FILEAPPROVED","link godkendt og database opdateret med succes");

/**
* Brudte links definerer
*/
define("_AM_WFL_SBROKENSUBMIT","Brudt:");
define("_AM_WFL_BROKEN_FILE","Rapporter brudt");
define("_AM_WFL_BROKEN_FILEIGNORED","Brudt rapporten ignoreres, og nu slettet fra databasen!");
define("_AM_WFL_BROKEN_NOWACK","Status ændret og opdateret database!");
define("_AM_WFL_BROKEN_NOWCON","Bekræftet status ændret og opdateret database!");
define("_AM_WFL_BROKEN_REPORTINFO","Brudt indberette oplysninger");
define("_AM_WFL_BROKEN_REPORTSNO","Brudt Rapporter Venter:");
define("_AM_WFL_BROKEN_IGNOREDESC","<b>Ignorerer </b> rapporten, og kun sletter brudt link rapporten.");
define("_AM_WFL_BROKEN_DELETEDESC","<b>Sletter </b> de rapporterede linket data og brudt link rapporter for linket.");
define("_AM_WFL_BROKEN_EDITDESC","<b>Rediger </b> linket for at løse problemet.");
define("_AM_WFL_BROKEN_ACKDESC","<b>Godkendt </b> Sæt godkendt filrapport.");
define("_AM_WFL_BROKEN_CONFIRMDESC","<b>Bekræftet </b> Sæt bekræftet brudt link rapport.");
define("_AM_WFL_BROKEN_ACKNOWLEDGED","Godkendte");
define("_AM_WFL_BROKEN_DCONFIRMED","Bekræftet");

define("_AM_WFL_BROKEN_ID","ID");
define("_AM_WFL_BROKEN_TITLE","Title");
define("_AM_WFL_BROKEN_REPORTER","Reporter");
define("_AM_WFL_BROKEN_FILESUBMITTER","afsender");
define("_AM_WFL_BROKEN_DATESUBMITTED","Send Dato");
define("_AM_WFL_BROKEN_ACTION","Handling");
define("_AM_WFL_BROKEN_NOFILEMATCH","Der er ingen brudte rapporter, der matcher dette kriterium");
define("_AM_WFL_BROKENFILEDELETED","link fjernet fra databasen og brudtrapporten fjernes");
/**
* Om definerer
*/
define("_AM_WFL_BY","af");
// Blok definerer
define("_AM_WFL_BADMIN","Block Administration");
define("_AM_WFL_BLKDESC","Beskrivelse");
define("_AM_WFL_TITLE","Title");
define("_AM_WFL_SIDE","Justering");
define("_AM_WFL_WEIGHT","Vægt");
define("_AM_WFL_VISIBLE","Synlige");
define("_AM_WFL_ACTION","Handling");
define("_AM_WFL_SBLEFT","Left");
define("_AM_WFL_SBRIGHT","Højre");
define("_AM_WFL_CBLEFT","Center Left");
define("_AM_WFL_CBRIGHT","Center Højre");
define("_AM_WFL_CBCENTER","Center midt");
define("_AM_WFL_ACTIVERIGHTS","Aktive Rettigheder");
define("_AM_WFL_ACCESSRIGHTS","adgangsret");
// Billede af admin ikon
define("_AM_WFL_ICO_EDIT","Rediger element");
define("_AM_WFL_ICO_DELETE","Slet element");
define("_AM_WFL_ICO_RESOURCE","Rediger denne ressource");

define("_AM_WFL_ICO_ONLINE","Online");
define("_AM_WFL_ICO_OFFLINE","Offline");
define("_AM_WFL_ICO_APPROVED","Godkendt");
define("_AM_WFL_ICO_NOTAPPROVED","Ikke godkendt");

define("_AM_WFL_ICO_LINK","Relaterede links");
define("_AM_WFL_ICO_URL","Tilføj relaterede URL");
define("_AM_WFL_ICO_ADD","Tilføj");
define("_AM_WFL_ICO_APPROVE","Godkend");
define("_AM_WFL_ICO_STATS","Stats");
define("_AM_WFL_ICO_VIEW","Vis denne post");

define("_AM_WFL_ICO_IGNORE","Ignorer");
define("_AM_WFL_ICO_ACK","Brudt Report anerkendt");
define("_AM_WFL_ICO_REPORT","Anerkend brudt rapport?");
define("_AM_WFL_ICO_CONFIRM","Brudt rapport bekræftede");
define("_AM_WFL_ICO_CONBROKEN","Bekræft Brudt rapport?");
define("_AM_WFL_ICO_RES","Rediger Ressourcer / Links til denne post");
define("_AM_WFL_MOD_URLRATING","Internet Content Rating:");
// Alternate kategori
define("_AM_WFL_ALTCAT_CREATEF","Tilføj Alternativ Kategori");
define("_AM_WFL_MALTCAT","Alternativ Kategoristyring");
define("_AM_WFL_ALTCAT_MODIFYF","Alternativ kategoristyring");
define("_AM_WFL_ALTCAT_INFOTEXT","<ul><li> kan Suppleant kategorier kan tilføjes eller fjernes nemt via denne formular. </li></ul>");
define('_AM_WFL_ALTCAT_CREATED','Alternativ kategorier blev reddet!');

define("_AM_WFL_MRESOURCES","Resourcestyring");
define("_AM_WFL_RES_CREATED","Resourcestyring");
define("_AM_WFL_RES_ID","ID");
define("_AM_WFL_RES_DESC","Beskrivelse");
define("_AM_WFL_RES_NAME","Resourcenavn");
define("_AM_WFL_RES_TYPE","Resourcetype");
define("_AM_WFL_RES_USER","Bruger");
define("_AM_WFL_RES_CREATEF","Tilføj Resource");
define("_AM_WFL_RES_MODIFYF","Rediger Resource");
define("_AM_WFL_RES_NAMEF","Ressource navn:");
define("_AM_WFL_RES_DESCF","Resourcebeskrivelse:");
define("_AM_WFL_RES_URLF","Resource URL:");
define("_AM_WFL_RES_ITEMIDF","Resource emne ID:");
define("_AM_WFL_RES_INFOTEXT","<ul><li> Nye midler kan tilføjes, redigeres eller fjernes nemt via denne formular. </li>
<li> List alle ressourcer i forbindelse med et link, </li>
<li> Rediger ressource navn og beskrivelse </li> </ul>
");
define("_AM_WFL_LISTBROKEN","viser links, som muligvis er brudt. NB: Disse resultater kan ikke være præcise og skal tages som vejledende. <br/><br/> venligst chek at linket eksisterer først, inden nogen handling . <br/> <br/> ");
define("_AM_WFL_PINGTIMES","Viser de første anslåede pingtider til hvert link. <br/><br/> NB: Disse resultater kan ikke være præcise og skal tages som en grov vejledning. <br/><br/> ");
define("_AM_WFL_NO_FORUM","Ingen forum Selected");
define("_AM_WFL_PERM_RATEPERMISSIONS","Karakter tilladelser");
define("_AM_WFL_PERM_RATEPERMISSIONS_TEXT","Vælg grupper, som kan stemme på et link i de valgte kategorier.");
define("_AM_WFL_PERM_AUTOPERMISSIONS","Auto Godkend Links");
define("_AM_WFL_PERM_AUTOPERMISSIONS_TEXT","Vælg de grupper, som vil have nye links automatisk godkendt uden admin intervention.");
define("_AM_WFL_PERM_SPERMISSIONS","Submitter Permissions");
define("_AM_WFL_PERM_SPERMISSIONS_TEXT","Vælg de grupper, der kan indsende nye links til udvalgte kategorier.");
define("_AM_WFL_PERM_APERMISSIONS","Moderator grupper");
define("_AM_WFL_PERM_APERMISSIONS_TEXT","Vælg de grupper, der har moderator privligages for de valgte kategorier.");
// Tilføjet af McDonald
define("_AM_WFL_COUNTRY","Land:");
define("_AM_WFL_KEYWORDS","Nøgleord:");
define("_AM_WFL_KEYWORDS_NOTE","Nøgleord bør adskilles med et komma (keyword1, keyword2, keyword3, ..)");
define("_AM_WFL_CHECKURL","Check URL");
define("_AM_WFL_CATTITLE","Kategori");
define("_AM_WFL_LINK_GOOGLEMAP","Google Maps");
define("_AM_WFL_LINK_YAHOOMAP","Yahoo Maps");
define("_AM_WFL_LINK_MULTIMAP","Multimap");
define("_AM_WFL_LINK_CHECKMAP","Check kort");
define("_AM_WFL_STREET1","Adresse 1");
define("_AM_WFL_STREET2","Adresse 2 (valgfri)");
define("_AM_WFL_TOWN","By");
define("_AM_WFL_STATE","stat");
define("_AM_WFL_ZIPCODE","postnummer");
define("_AM_WFL_TELEPHONE","Telefon");
define("_AM_WFL_FAX","Fax");
// Version 1.05 RC2
define("_AM_WFL_WARNINSTALL4","<b> Advarsel: </b> <u> Mappe </u> %s er ikke skrivbar. <br/> Denne mappe skal være skrivbar (CHMOD 777) for WF-Links");
// Version 1.05 RC5
define("_AM_WFL_VOIP","VoIP");
define("_AM_WFL_LINK_SUBMITTER","Link senders navn:");
define("_AM_WFL_MOBILE","mobil");
define("_AM_WFL_CATSPONSOR","Vælg kategori Sponsor:");
define("_AM_WFL_CATSPONSORDSC","Hvis du vælger en klient banneret id fra nedenstående formular vil ikke blive gemt!");
define("_AM_WFL_BANNER","Banner");
define("_AM_WFL_FBANNER","Banner");
define("_AM_WFL_BANNERID","Vælg Banner ID:");
define("_AM_WFL_BANNERIDDSC","Hvis du har valgt en klient i form over banneret id vil ikke blive gemt!");
// Version 1.05 RC6
define("_AM_WFL_VAT","MOMS Reg. No");
define("_AM_WFL_VATWIKI","For mere information se <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'> Wikipedia </a>");
define("_AM_WFL_EMAIL","E-Mail");
define("_AM_WFL_ICO_EXPIRE","udløbet");
define("_AM_WFL_LINK_NORESPONSE","Intet svar ");
define("_AM_WFL_LINK_CREATEADDRESS","<b> Adresseform </b>");
define("_AM_WFL_LINK_MISCLINKSETTINGS","<b> Diverse Link indstillinger </b> ");
// Version 1.06 RC1
define("_AM_WFL_READWRITEERROR","Du enten ikke vælge en fil at uploade eller serveren er utilstrækkelig læsning/skrivning til at uploade denne fil!");
define("_AM_WFL_INVALIDFILESIZE","Invalid Filstørrelse");
define("_AM_WFL_FILENAMEEMPTY","Filnavn er tomt");
define("_AM_WFL_NOFILEUPLOAD","Ingen fil uploadet, dette er en fejl");
define("_AM_WFL_UPLOADERRORZERO","Der var et problem med dit upload. Error: 0");
define("_AM_WFL_UPLOADERRORONE","Den fil, du forsøger at uploade er for stort. Error: 1");
define("_AM_WFL_UPLOADERRORTWO","Den fil, du forsøger at uploade er for stort. Error: 2");
define("_AM_WFL_UPLOADERRORTHREE","Den fil, du forsøger upload blev kun delvist uploaded. Error: 3");
define("_AM_WFL_UPLOADERRORFOUR","Ingen fil valgt til upload. Fejl: 4");
define("_AM_WFL_UPLOADERRORFIVE","Ingen fil valgt til upload. Error: 5");
define("_AM_WFL_NOUPLOADDIR","Oploaddirectory ikke indstillet");
define("_AM_WFL_FAILOPENDIR","Kunne ikke åbne mappen:");
define("_AM_WFL_FAILOPENDIRWRITEPERM","Fejl: Åbning af mappe med skriverettigheder:");
define("_AM_WFL_FILESIZEMAXSIZE","Filstørrelse: %u. maksimalt tilladte størrelse: %u");
define("_AM_WFL_FILESIZEMAXWIDTH","Filbredde: %u. Største bredde tilladt: %u");
define("_AM_WFL_FILESIZEMAXHEIGHT","Filhøjde: %u. Største højde tilladt: %u");
define("_AM_WFL_MIMENOTALLOW","MIME-type ikke tilladt:");
define("_AM_WFL_FAILEDUPLOADING","Kunne ikke uploade filen:");
define("_AM_WFL_FILE","Fil");
define("_AM_WFL_ALREADYEXISTTRYAGAIN","findes allerede på serveren. Du kan omdøbe denne fil, og prøv igen. <br/>");
define("_AM_WFL_ERRORSRETURNUPLOAD","<h4> fejl returneret under upload </h4>");
define("_AM_WFL_DOESNOTEXIST","eksisterer ikke!");
define("_AM_WFL_INFORMATION","Link information");
define("_AM_WFL_HITS","Hits:");
define("_AM_WFL_PAGERANK","PageRank ™:");
define("_AM_WFL_ERROR_CATISCAT","Du kan ikke angive en kategori som en underkategori af sig selv!");
define("_AM_WFL_MOD_COUNTRY","Land:");
define("_AM_WFL_MOD_KEYWORDS","Nøgleord:");
define("_AM_WFL_MOD_ITEM_TAG","Tags:");
define("_AM_WFL_MOD_GOOGLEMAP","Google Maps:");
define("_AM_WFL_MOD_YAHOOMAP","Yahoo Maps:");
define("_AM_WFL_MOD_MULTIMAP","Multimap:");
define("_AM_WFL_MOD_STREET1","Adresse 1:");
define("_AM_WFL_MOD_STREET2","Adresse 2 (valgfri):");
define("_AM_WFL_MOD_TOWN","By:");
define("_AM_WFL_MOD_STATE","Stat:");
define("_AM_WFL_MOD_ZIP","Post Nummer:");
define("_AM_WFL_MOD_TEL","Telefon:");
define("_AM_WFL_MOD_FAX","Fax:");
define("_AM_WFL_MOD_VOIP","VoIP:");
define("_AM_WFL_MOD_MOBILE","Mobil:");
define("_AM_WFL_MOD_EMAIL","E-Mail:");
define("_AM_WFL_MOD_VAT","moms:");
// Version 1.06 RC-2
define("_AM_WFL_IPAGE_SHOWLATEST","Vis seneste lister ?");
define("_AM_WFL_IPAGE_LATESTTOTAL","Hvor mange links skal vises ?");
define("_AM_WFL_IPAGE_LATESTTOTAL_DSC","0 Slår denne funktion fra.");
// Version 1.06 Final
define("_AM_WFL_DOCUMENTATION","Dokumentation");
define("_AM_WFL_SHOWNOIMAGE","Vis intet image");
define("_AM_WFL_NOSELECTION","Ingen valgt");
define("_AM_WFL_NOFILESELECT","Ingen valgt fil");

?>