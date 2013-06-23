<?php
/**
 * $Id: admin.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 * Format: UTF-8
 */
 
define("_AM_WFL_WARNINSTALL1","<b>WAARSCHUWING:</b> <u>Map</u> %s bestaat op uw server. <br />Verwijder deze map uit veiligheids overwegingen.");
define("_AM_WFL_WARNINSTALL2","<b>WAARSCHUWING:</b> <u>Bestand</u> %s bestaat op uw server. <br />Verwijder dit bestand uit veiligheids overwegingen.");
define("_AM_WFL_WARNINSTALL3","<b>WAARSCHUWING:</b> <u>Map</u> %s bestaat niet op uw server. <br />Deze map is nodig voor WF-Links.");

define("_AM_WFL_MODULE_NAME","WF-Links");

define("_AM_WFL_BMODIFY","Aanpassen");
define("_AM_WFL_BDELETE","Verwijderen");
define("_AM_WFL_BCREATE","Aanmaken");
define("_AM_WFL_BADD","Toevoegen");
define("_AM_WFL_BAPPROVE","Goedkeuren");
define("_AM_WFL_BIGNORE","Negeren");
define("_AM_WFL_BCANCEL","Annuleren");
define("_AM_WFL_BSAVE","Opslaan");
define("_AM_WFL_BRESET","Reset");
define("_AM_WFL_BMOVE","Verplaats linken");
define("_AM_WFL_BUPLOAD","Uploaden");
define("_AM_WFL_BDELETEIMAGE","Verwijder geselekteerde afbeelding");
define("_AM_WFL_BRETURN","Ga terug naar waar u was!");
define("_AM_WFL_DBERROR","Database toegang fout: Rapporteer deze fout aan de WF-Project Website");
// Other Options
define("_AM_WFL_TEXTOPTIONS","Tekst opties:");
define("_AM_WFL_DISABLEHTML"," Uitschakelen HTML tags");
define("_AM_WFL_DISABLESMILEY"," Uitschakelen Smilies");
define("_AM_WFL_DISABLEXCODE"," Uitschakelen XOOPS codes");
define("_AM_WFL_DISABLEIMAGES"," Uitschakelen afbeeldingen");
define("_AM_WFL_DISABLEBREAK"," Gebruik XOOPS linebreak omzetting?");
define("_AM_WFL_UPLOADFILE","Link succesvol geupload");
define("_AM_WFL_NOMENUITEMS","Geen menu items in het menu");
// Admin Bread crumb
define("_AM_WFL_PREFS","Instellingen");
define("_AM_WFL_BUPDATE","Module bijwerken");
define("_AM_WFL_BINDEX","Hoofd index");
define("_AM_WFL_BPERMISSIONS","Rechten");
// define("_AM_WFL_BLOCKADMIN","Blocks");
define("_AM_WFL_BLOCKADMIN","Blokinstellingen");
define("_AM_WFL_GOMODULE","Ga naar module");
define("_AM_WFL_ABOUT","Informatie");
// Admin Summary
define("_AM_WFL_SCATEGORY","Categorieën: <strong>%s</strong> ");
define("_AM_WFL_SFILES","Linken: <strong>%s</strong> ");
define("_AM_WFL_SNEWFILESVAL","Ingezonden: <strong>%s</strong> ");
define("_AM_WFL_SMODREQUEST","Aangepast: <strong>%s</strong> ");
define("_AM_WFL_SREVIEWS","Beoordelingen: ");

// Admin Main Menu
define("_AM_WFL_MCATEGORY","Categorie management");
define("_AM_WFL_MLINKS","Link management");
define("_AM_WFL_MLISTBROKEN","Gebroken linken index");
define("_AM_WFL_MLISTPINGTIMES","Linken pingtijd index");
define("_AM_WFL_INDEXPAGE","Index pagina management");
define("_AM_WFL_MCOMMENTS","Commenta(a)r(en)");
define("_AM_WFL_MVOTEDATA","Stem data");
define("_AM_WFL_MUPLOADS","Afbeelding uploaden");

// Catgeory defines
define("_AM_WFL_CCATEGORY_CREATENEW","Nieuwe categorie");
define("_AM_WFL_CCATEGORY_MODIFY","Categorie aanpassen");
define("_AM_WFL_CCATEGORY_MOVE","Verplaats linken categorie");
define("_AM_WFL_CCATEGORY_MODIFY_TITLE","Categorie titel:");
define("_AM_WFL_CCATEGORY_MODIFY_FAILED","Linken verplaatsen mislukt: kan niet verplaatsen naar deze categorie");
define("_AM_WFL_CCATEGORY_MODIFY_FAILEDT","Linken verplaatsen mislukt: Kan deze categorie niet vinden");
define("_AM_WFL_CCATEGORY_MODIFY_MOVED","Linken verplaatst en database succesvol geupdate");
define("_AM_WFL_CCATEGORY_CREATED","Nieuwe categorie aangemaakt en database succesvol geupdate");
define("_AM_WFL_CCATEGORY_MODIFIED","Geselekteerde categorie aangemaakt en database succesvol geupdate");
define("_AM_WFL_CCATEGORY_DELETED","Geselekteerde categorie verwijderd en database succesvol geupdate");
define("_AM_WFL_CCATEGORY_AREUSURE","Waarschuwing: Deze categorie en alle linken en inhoud verwijderen?");
define("_AM_WFL_CCATEGORY_NOEXISTS","Eerst een categorie aanmaken voordat een link kan worden toegevoegd");
define("_AM_WFL_FCATEGORY_GROUPPROMPT","Categorie toegangsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgroepen die toegang hebben tot deze categorie.</span></div>");
define("_AM_WFL_FCATEGORY_SUBGROUPPROMPT","Categorie inzendrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgropen die rechten hebben om nieuwe linken voor deze categorie in te zenden.</span></div>");
define("_AM_WFL_FCATEGORY_MODGROUPPROMPT","Categorie aanpassingsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgroepen die rechten hebben om deze categorie te beheren.</span></div>");

define("_AM_WFL_FCATEGORY_TITLE","Categorie titel:");
define("_AM_WFL_FCATEGORY_WEIGHT","Categorie gewicht:");
define("_AM_WFL_FCATEGORY_SUBCATEGORY","Instellen als sub-categorie van:");
define("_AM_WFL_FCATEGORY_CIMAGE","Selekteer categorie afbeelding:");
define("_AM_WFL_FCATEGORY_DESCRIPTION","Categorie omschrijving:");
define("_AM_WFL_FCATEGORY_SUMMARY","Categorie samenvatting:");
/**
 * Index page Defines
 */
define("_AM_WFL_IPAGE_UPDATED","Indexpagina aangepast en database succelvol geupdate!");
define("_AM_WFL_IPAGE_INFORMATION","Indexpagina informatie");
define("_AM_WFL_IPAGE_MODIFY","Indexpagin aanpassen");
define("_AM_WFL_IPAGE_CIMAGE","Index afbeelding:");
define("_AM_WFL_IPAGE_CTITLE","Index Titel:");
define("_AM_WFL_IPAGE_CHEADING","Index koptekst:");
define("_AM_WFL_IPAGE_CHEADINGA","Koptekst uitlijning:");
define("_AM_WFL_IPAGE_CFOOTER","Index voettekst:");
define("_AM_WFL_IPAGE_CFOOTERA","Voettekst uitlijning:");
define("_AM_WFL_IPAGE_CLEFT","Uitlijnen links");
define("_AM_WFL_IPAGE_CCENTER","Uitlijnen midden");
define("_AM_WFL_IPAGE_CRIGHT","Uitlijnen rechts");
/**
 * Permissions defines
 */
define("_AM_WFL_PERM_MANAGEMENT","Rechten instellingen");
define("_AM_WFL_PERM_PERMSNOTE","<div><b>Opmerking:</b> Stel hier de juiste rechten in, anders kunnen gebruikersgroepen mogelijk bepaalde artikelen en blokken niet of juist wel zien. Let tevens op de module toegangsrechten! Om deze in te stellen ga naar <b>System admin > Groepen</b>, kies de gewenste groep en selekteer de checkboxen om de toegang toe te wijzen.</div>");
define("_AM_WFL_PERM_CPERMISSIONS","Categorie rechten");
define("_AM_WFL_PERM_CSELECTPERMISSIONS","Selekteer categorieën die alle groepen mogen zien");
define("_AM_WFL_PERM_CNOCATEGORY","Kan geen rechten instellen: Er zijn geen categorieën aangemaakt!");
define("_AM_WFL_PERM_FPERMISSIONS","Link rechten");
define("_AM_WFL_PERM_FNOFILES","Kan geen rechten instellen: er zijn geen linken aangemaakt!");
define("_AM_WFL_PERM_FSELECTPERMISSIONS","Selekteer linken die alle groepen mogen zien");
/**
 * Upload defines
 */
define("_AM_WFL_LINK_IMAGEUPLOAD","Afbeelding succesvol geupload");
define("_AM_WFL_LINK_NOIMAGEEXIST","FOUT: geen link geselekteerd om te uploaden. Probeer het nogmaals!");
define("_AM_WFL_LINK_IMAGEEXIST","Afbeelding bestaat al in he uploadgedeelte!");
define("_AM_WFL_LINK_FILEDELETED","Link is verwijderd.");
define("_AM_WFL_LINK_FILEERRORDELETE","FOUT link verwijderen: Link is niet gevonden op server.");
define("_AM_WFL_LINK_NOFILEERROR","FOUT link verwijderen: Geen link geselekteerd om te verwijderen.");
define("_AM_WFL_LINK_DELETEFILE","WAARSCHUWING: deze link afbeelding verwijderen?");
define("_AM_WFL_LINK_IMAGEINFO","Server status");
define("_AM_WFL_LINK_SPHPINI","<b>Informatie uit PHP.ini link:</b>");
define("_AM_WFL_LINK_SAFEMODESTATUS","Veilige mode status: ");
define("_AM_WFL_LINK_REGISTERGLOBALS","Register globals: ");
define("_AM_WFL_LINK_SERVERUPLOADSTATUS","Server uploads status: ");
define("_AM_WFL_LINK_MAXUPLOADSIZE","Max upload grootte toegestaan: ");
define("_AM_WFL_LINK_MAXPOSTSIZE","Max inzending grootte toegestaan: ");
define("_AM_WFL_LINK_SAFEMODEPROBLEMS"," (Dit kan problemen veroorzaken)");
define("_AM_WFL_LINK_GDLIBSTATUS","GD Library support: ");
define("_AM_WFL_LINK_GDLIBVERSION","GD Library versie: ");
define("_AM_WFL_LINK_GDON","<b>ingeschakeld</b> (Thumbs Nails beschikbaar)");
define("_AM_WFL_LINK_GDOFF","<b>uitgeschakeld</b> (Thumb Nails niet beschikbaar)");
define("_AM_WFL_LINK_OFF","<b>uit</b>");
define("_AM_WFL_LINK_ON","<b>aan</b>");
define("_AM_WFL_LINK_CATIMAGE","categorie afbeeldingen");
define("_AM_WFL_LINK_SCREENSHOTS","Screenshot afbeeldingen");
define("_AM_WFL_LINK_MAINIMAGEDIR","Hoofd afbeeldingen");
define("_AM_WFL_LINK_FCATIMAGE","categorie afbeeldingen pad");
define("_AM_WFL_LINK_FSCREENSHOTS","Screenshot afbeeldingen pad");
define("_AM_WFL_LINK_FMAINIMAGEDIR","Hoofd afbeeldingen pad");
define("_AM_WFL_LINK_FUPLOADIMAGETO","Upload afbeelding: ");
define("_AM_WFL_LINK_FUPLOADPATH","Upload pad: ");
define("_AM_WFL_LINK_FUPLOADURL","Upload URL: ");
define("_AM_WFL_LINK_FOLDERSELECTION","Selekteer upload bestemming:");
define("_AM_WFL_LINK_FSHOWSELECTEDIMAGE","Toon geselekteerde afbeelding:");
define("_AM_WFL_LINK_FUPLOADIMAGE","Upload nieuwe afbeelding naar geselekteerde bestemming:");

// Main Index defines
define("_AM_WFL_MINDEX_LINKSUMMARY","Module administatie samenvatting");
define("_AM_WFL_MINDEX_PUBLISHEDLINK","Gepubliceerde linken:");
define("_AM_WFL_MINDEX_AUTOPUBLISHEDLINK","Automatisch gepubliseerde linken:");
define("_AM_WFL_MINDEX_AUTOEXPIRE","Automatisch verlopen linken:");
define("_AM_WFL_MINDEX_EXPIRED","Verlopen linken:");
define("_AM_WFL_MINDEX_OFFLINELINK","Offline linken:");
define("_AM_WFL_MINDEX_ID","ID");
define("_AM_WFL_MINDEX_TITLE","Link titel");
define("_AM_WFL_MINDEX_POSTER","Inzender");
define("_AM_WFL_MINDEX_ONLINE","Status");
define("_AM_WFL_MINDEX_ONLINESTATUS","Online status");
define("_AM_WFL_MINDEX_PUBLISH","Publiceren");
define("_AM_WFL_MINDEX_PUBLISHED","Gepubliceerd");
define("_AM_WFL_MINDEX_EXPIRE","Verlopen");
define("_AM_WFL_MINDEX_NOTSET","Geen datum ingesteld");
define("_AM_WFL_MINDEX_SUBMITTED","Inzenddatum");

define("_AM_WFL_MINDEX_ACTION","Aktie");
define("_AM_WFL_MINDEX_NOLINKSFOUND","OPMERKING: Er zijn geen linken overeenkomend met deze criteria");
define("_AM_WFL_MINDEX_PAGE","<b>Pagina:<b> ");
define('_AM_WFL_MINDEX_PAGEINFOTXT','<ul><li>WF-links Hoofdpagina details.</li><li>U kunt eenvoudig veranderingen aanbrengen aan het logo, de afbeelding, de kop- en voetteksten om de pagina aan uw wensen te laten voldoen.</li></ul><br />Opmerking: Het gekozen logo wordt door de gehele WF-Links module toegepast.');
define("_AM_WFL_MINDEX_RESPONSE","Reaktietijd");
// Submitted Links
define("_AM_WFL_SUB_SUBMITTEDFILES","Ingezonden linken");
define("_AM_WFL_SUB_FILESWAITINGINFO","Wachtende linken informatie");
define("_AM_WFL_SUB_FILESWAITINGVALIDATION","Linken wachtend op goedkeuring: ");
define("_AM_WFL_SUB_APPROVEWAITINGFILE","Nieuwe linken informatie <b>accepteren zonder goedkeuring</b>.");
define("_AM_WFL_SUB_EDITWAITINGFILE","<b>Wijzig</b> nieuwe link informatie en keur daarna goed.");
define("_AM_WFL_SUB_DELETEWAITINGFILE","<b>Verwijder</b> nieuwe link informatie.");
define("_AM_WFL_SUB_NOFILESWAITING","Er zijn geen linken overeenkomend met deze criteria.");
define("_AM_WFL_SUB_NEWFILECREATED","Nieuwe link data aangemaakt en database succesvol bijgewerkt.");
// Vote Information
define("_AM_WFL_VOTE_RATINGINFOMATION","Stemmen informatie");
define("_AM_WFL_VOTE_TOTALVOTES","Totaal aantal stemmen: ");
define("_AM_WFL_VOTE_REGUSERVOTES","Stemmen van geregistreerde gebruikers: %s");
define("_AM_WFL_VOTE_ANONUSERVOTES","Stemmen van anonieme gebruikers: %s");
define("_AM_WFL_VOTE_USER","Gebruiker");
define("_AM_WFL_VOTE_IP","IP Adres");
define("_AM_WFL_VOTE_DATE","Ingezonden op");
define("_AM_WFL_VOTE_RATING","Beoordeling");
define("_AM_WFL_VOTE_NOREGVOTES","Geen stemmen van geregistreerde gebruikers");
define("_AM_WFL_VOTE_NOUNREGVOTES","Geen stemmen van anonieme gebruikers");
define("_AM_WFL_VOTE_VOTEDELETED","Stem data verwijderd.");
define("_AM_WFL_VOTE_ID","ID");
define("_AM_WFL_VOTE_FILETITLE","Link titel");
define("_AM_WFL_VOTE_DISPLAYVOTES","Stem data informatie");
define("_AM_WFL_VOTE_NOVOTES","Geen te tonen stemmen van geregistreerde gebruikers");
define("_AM_WFL_VOTE_DELETE","Geen te tonen stemmen van geregistreerde gebruikers");
define("_AM_WFL_VOTE_DELETEDSC","<b>Verwijderd</b> de gekozen stem informatie uit de database.");
define("_AM_WFL_VOTEDELETED","Geselekteerde stem verwijderd, database is bijgewerkt.");

define("_AM_WFL_VOTE_USERAVG","Gemiddelde gebruikers beoordeling");
define("_AM_WFL_VOTE_TOTALRATE","Totaal aantal stemmen");
define("_AM_WFL_VOTE_MAXRATE","Hoogste item stem");
define("_AM_WFL_VOTE_MINRATE","Laagste item stem");
define("_AM_WFL_VOTE_MOSTVOTEDTITLE","Meeste gestemd op");
define("_AM_WFL_VOTE_LEASTVOTEDTITLE","Minste gestemd op");
define("_AM_WFL_VOTE_MOSTVOTERSUID","Aktiefste stemmer");
define("_AM_WFL_VOTE_REGISTERED","Geregistreerde stemmen");
define("_AM_WFL_VOTE_NONREGISTERED","Anonieme stemmen");
// Modifications
define("_AM_WFL_MOD_TOTMODREQUESTS","Totaal aantal wijzigingsaanvragen: ");
define("_AM_WFL_MOD_MODREQUESTS","Gewijzigde linken");
define("_AM_WFL_MOD_MODREQUESTSINFO","Gewijzigde linken informatie");
define("_AM_WFL_MOD_MODID","ID");
define("_AM_WFL_MOD_MODTITLE","Titel");
define("_AM_WFL_MOD_MODPOSTER","Originele inzender: ");
define("_AM_WFL_MOD_DATE","Ingezonden op");
define("_AM_WFL_MOD_NOMODREQUEST","Er zijn geen verzoeken die overeenkomen met deze criteria");
define("_AM_WFL_MOD_TITLE","Link titel: ");
define("_AM_WFL_MOD_LID","link ID: ");
define("_AM_WFL_MOD_CID","categorie: ");
define("_AM_WFL_MOD_URL","link URL: ");
define("_AM_WFL_MOD_PUBLISHER","Uitgever: ");
define("_AM_WFL_MOD_FORUMID","Forum: ");
define("_AM_WFL_MOD_SCREENSHOT","Screenshot afbeelding: ");
define("_AM_WFL_MOD_HOMEPAGE","Website: ");
define("_AM_WFL_MOD_HOMEPAGETITLE","Website naam: ");
define("_AM_WFL_MOD_SHOTIMAGE","Screenshot afbeelding: ");
define("_AM_WFL_MOD_DESCRIPTION","Omschrijving: ");
define("_AM_WFL_MOD_MODIFYSUBMITTER","Inzender: ");
define("_AM_WFL_MOD_MODIFYSUBMIT","Inzender");
define("_AM_WFL_MOD_PROPOSED","Voorgestelde link details");
define("_AM_WFL_MOD_ORIGINAL","Orginele link details");
define("_AM_WFL_MOD_REQDELETED","Verzoek om aanpassing verwijderd uit de database");
define("_AM_WFL_MOD_REQUPDATED","Geselekteerde link aangepast en database succesvol bijgewerkt");
define('_AM_WFL_MOD_VIEW','Bekijken');
// Link management
define("_AM_WFL_LINK_ID","Link ID: ");
define("_AM_WFL_LINK_IP","IP Adres van uploader: ");
define("_AM_WFL_LINK_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b>Toegestane beheerder link formaten</b>:</div>");
define("_AM_WFL_LINK_MODIFYFILE","Aangepaste link informatie");
define("_AM_WFL_LINK_CREATENEWFILE","Nieuwe link aanmaken");
define("_AM_WFL_LINK_TITLE","Link titel: ");
define("_AM_WFL_LINK_DLURL","Link URL: ");
define("_AM_WFL_LINK_DIRCA"," Internet inhoud beoordeling (ICR): ");
define("_AM_WFL_LINK_DESCRIPTION","Link omschrijving: ");
define("_AM_WFL_LINK_CATEGORY","Link categorie: ");
define("_AM_WFL_LINK_FILESSTATUS"," Link offline plaatsen?<br /><br /><span style='font-weight: normal; font-size: smaller;'>Link zal niet zichbaar zijn.</span>");
define("_AM_WFL_LINK_SETASUPDATED"," Link Status weergeven als bijgewerkt?<br /><br /><span style='font-weight: normal; font-size: smaller;'>Link zal een 'bijgewerkt' icoon weergeven.</span>");
define("_AM_WFL_LINK_SHOTIMAGE","Link screenshot afbeelding: ");
define("_AM_WFL_LINK_DISCUSSINFORUM","Discussieer in dit forum toevoegen?");
define("_AM_WFL_LINK_PUBLISHDATE","Link publikatiedatum:");
define("_AM_WFL_LINK_EXPIREDATE","Link verloopdatum:");
define("_AM_WFL_LINK_CLEARPUBLISHDATE","<br /><br />Verwijder publikatiedatum:");
define("_AM_WFL_LINK_CLEAREXPIREDATE","<br /><br />Verwijder verloopdatum:");
define("_AM_WFL_LINK_PUBLISHDATESET"," Instellen publikatiedatum: ");
define("_AM_WFL_LINK_SETDATETIMEPUBLISH"," Stel de datum/tijd van publikatie in");
define("_AM_WFL_LINK_SETDATETIMEEXPIRE"," Stel de datum/tijd van verlopen in");
define("_AM_WFL_LINK_SETPUBLISHDATE","<b>Stel publikatiedatum in: </b>");
define("_AM_WFL_LINK_SETNEWPUBLISHDATE","<b>Stel nieuwe publikatiedatum in: </b><br />Gepubliceerd op:");
define("_AM_WFL_LINK_SETPUBDATESETS","<b>Stel publikatiedatum in: </b><br />Gepubliceerd op:");
define("_AM_WFL_LINK_EXPIREDATESET"," Stel verloopdatum in: ");
define("_AM_WFL_LINK_SETEXPIREDATE","<b>Stel verloopdatum in: </b>");
define("_AM_WFL_LINK_DELEDITMESS","Verwijder gebroken link rapport?<br /><br /><span style='font-weight: normal;'>Kies <b>Ja</b> en het gebroken link rapport wordt automatisch verwijderd tevens wordt bevestigd dat de link weer werkt.</span>");
define("_AM_WFL_LINK_MUSTBEVALID","Screenshot afbeelding moet een geldige afbeeldingslink zijn in het %s bestand (bijv. shot.gif). Laat het veld leeg als er geen screenshot link is.");
define("_AM_WFL_LINK_EDITAPPROVE","Goedkeuren link:");
define("_AM_WFL_LINK_NEWFILEUPLOAD","Nieuwe link aangemaakt en database succesvol bijgewerkt");
define("_AM_WFL_LINK_FILEMODIFIEDUPDATE","Geselekteerde link aangepast en database succesvol bijgewerkt");
define("_AM_WFL_LINK_REALLYDELETEDTHIS","Geselekteerde link verwijderen?");
define("_AM_WFL_LINK_FILEWASDELETED","Link %s succesvol verwijderd uit de database!");
define("_AM_WFL_LINK_FILEAPPROVED","Link goedgekeurd en database succesvol bijgewerkt");
define("_AM_WFL_LINK_CREATENEWSSTORY","<b>Maak een nieuwsbericht van de link</b>");
define("_AM_WFL_LINK_SUBMITNEWS","Nieuwe link inzenden als nieuwsbericht?");
define("_AM_WFL_LINK_NEWSCATEGORY","Selekteer nieuwscategorie om nieuwsbericht in te zenden:");
define("_AM_WFL_LINK_NEWSTITLE","Nieuwstitel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leeg laten om de linknaam te gebruiken</span></div>");
define("_AM_WFL_LINK_PUBLISHER","Link inzender: ");

/**
 * Broken links defines
 */
define("_AM_WFL_SBROKENSUBMIT","Gebroken: <strong>%s</strong> ");
define("_AM_WFL_BROKEN_FILE","Gebroken rapportage(s)");
define("_AM_WFL_BROKEN_FILEIGNORED","Gebroken link rapportage genegeerd en succesval verwijderd uit de database!");
define("_AM_WFL_BROKEN_NOWACK","Toegekende status gewijzigd en database geupdate!");
define("_AM_WFL_BROKEN_NOWCON","Gewijzigde status is bevestigd en database geupdate!");
define("_AM_WFL_BROKEN_REPORTINFO","Gebroken rapportage informatie");
define("_AM_WFL_BROKEN_REPORTSNO","Wachtende gebroken link rapportage:");
define("_AM_WFL_BROKEN_IGNOREDESC","<b>Negeert</b> het rapport en verwijderd allen de gebroken link rapportage.");
define("_AM_WFL_BROKEN_DELETEDESC","<b>Verwijdert</b> de gerapporteerde linkdata en gebroken link rapportage van de link.");
define("_AM_WFL_BROKEN_EDITDESC","de link <b>Aanpassen</b> om het probleem te verhelpen.");
define("_AM_WFL_BROKEN_ACKDESC","<b>Toegekend</b> Stelt de toegekende status van de gebroken bestandsrapportage in.");
define("_AM_WFL_BROKEN_CONFIRMDESC","<b>Bevestigd</b> Stelt de status van de gebroken linkrapportage in als bevestigd.");
define("_AM_WFL_BROKEN_ACKNOWLEDGED","Toegekend");
define("_AM_WFL_BROKEN_DCONFIRMED","Bevestigd");

define("_AM_WFL_BROKEN_ID","ID");
define("_AM_WFL_BROKEN_TITLE","Titel");
define("_AM_WFL_BROKEN_REPORTER","Rapporteur");
define("_AM_WFL_BROKEN_FILESUBMITTER","Inzender");
define("_AM_WFL_BROKEN_DATESUBMITTED","Inzenddatum");
define("_AM_WFL_BROKEN_ACTION","Aktie");
define("_AM_WFL_BROKEN_NOFILEMATCH","Geen gebroken (link) rapportages die overeenkomen met deze criteria");
define("_AM_WFL_BROKENFILEDELETED","Link verwijderd uit de database en gebroken rapportage verwijderd");
/**
 * About defines
 */
define("_AM_WFL_BY","door");
// block defines
define("_AM_WFL_BADMIN","Blok administratie");
define("_AM_WFL_BLKDESC","Omschrijving");
define("_AM_WFL_TITLE","Titel");
define("_AM_WFL_SIDE","Uitlijning");
define("_AM_WFL_WEIGHT","Gewicht");
define("_AM_WFL_VISIBLE","Zichtbaar");
define("_AM_WFL_ACTION","Aktie");
define("_AM_WFL_SBLEFT","Links");
define("_AM_WFL_SBRIGHT","Rechts");
define("_AM_WFL_CBLEFT","Midden links");
define("_AM_WFL_CBRIGHT","Midden rechts");
define("_AM_WFL_CBCENTER","Midden midden");
define("_AM_WFL_ACTIVERIGHTS","Aktieve rechten");
define("_AM_WFL_ACCESSRIGHTS","Toegangsrechten");
// image admin icon
define("_AM_WFL_ICO_EDIT","Dit item aanpassen");
define("_AM_WFL_ICO_DELETE","Dit item verwijderen");
define("_AM_WFL_ICO_RESOURCE","Deze bron aanpassen");

define("_AM_WFL_ICO_ONLINE","Online");
define("_AM_WFL_ICO_OFFLINE","Offline");
define("_AM_WFL_ICO_APPROVED","Goedgekeurd");
define("_AM_WFL_ICO_NOTAPPROVED","Afgekeurd");

define("_AM_WFL_ICO_LINK","Gerelateerde link");
define("_AM_WFL_ICO_URL","Gerelateerde URL toevoegen");
define("_AM_WFL_ICO_ADD","Toevoegen");
define("_AM_WFL_ICO_APPROVE","Goedkeuren");
define("_AM_WFL_ICO_STATS","Statistieken");
define("_AM_WFL_ICO_VIEW","Bekijk dit item");

define("_AM_WFL_ICO_IGNORE","Negeren");
define("_AM_WFL_ICO_ACK","Gebroken rapportage toegekend");
define("_AM_WFL_ICO_REPORT","Gebroken rapportage toekennen?");
define("_AM_WFL_ICO_CONFIRM","Gebroken rapportage bevestigd");
define("_AM_WFL_ICO_CONBROKEN","Gebroken rapportage bevestigen?");
define("_AM_WFL_ICO_RES","Bronnen/linken bij dit item aanpassen");
define("_AM_WFL_MOD_URLRATING","Webinhoud beoordeling (ICR):");
// Alternate category
define("_AM_WFL_ALTCAT_CREATEF","Alternatieve categorie toevoegen");
define("_AM_WFL_MALTCAT","Alternatieve categorie management");
define("_AM_WFL_ALTCAT_MODIFYF","Alternatieve categorie management");
define("_AM_WFL_ALTCAT_INFOTEXT","<ul><li>Alternatieve categorieën kunnen via dit formulier eenvoudig worden toegevoegd of verwijderd.</li></ul>");
define('_AM_WFL_ALTCAT_CREATED','Alternatieve categorie(ën) is(zijn) opgeslagen!');

define("_AM_WFL_MRESOURCES","Bronnen management");
define("_AM_WFL_RES_CREATED","Bronnen management");
define("_AM_WFL_RES_ID","ID");
define("_AM_WFL_RES_DESC","Omschrijving");
define("_AM_WFL_RES_NAME","Bron Naam");
define("_AM_WFL_RES_TYPE","Bron type");
define("_AM_WFL_RES_USER","Gebruiker");
define("_AM_WFL_RES_CREATEF","Bron toevoegen");
define("_AM_WFL_RES_MODIFYF","Bron aanpassen");
define("_AM_WFL_RES_NAMEF","Naam bron:");
define("_AM_WFL_RES_DESCF","Omschrijving bron:");
define("_AM_WFL_RES_URLF","Bron URL:");
define("_AM_WFL_RES_ITEMIDF","Bron Item ID:");
define("_AM_WFL_RES_INFOTEXT","<ul><li>Nieuwe bronnen kunnen via dit formulier eenvoudig worden toegevoegd, aangepast of verwijderd.</li>
	<li>Indexeer alle gelinkte bronnen bij een link</li>
	<li>Bronnaam en omschrijving aanpassen</li></ul>
	");
define("_AM_WFL_LISTBROKEN","Toon linken die mogelijk zijn gebroken. NB: Deze gegevens zijn mogelijk niet correct/compleet en moeten worden gezien als grove handreiking.<br /><br />Controleer eerst of de link bestaat voordat aktie wordt ondernomen.<br /><br />");
define("_AM_WFL_PINGTIMES","Displays the first estimated round ping time to each link.<br /><br />NB: These results may not be accurate and should be taken as a rough guide.<br /><br />");

define("_AM_WFL_NO_FORUM","Geen forum geselekteerd");

define("_AM_WFL_PERM_RATEPERMISSIONS","Beoordelingsrechten");
define("_AM_WFL_PERM_RATEPERMISSIONS_TEXT","Selekteer de groepen die linken mogen beoordelen in de geselekteerde categorie(ën).");

define("_AM_WFL_PERM_AUTOPERMISSIONS","Linken automatisch goedkeuren");
define("_AM_WFL_PERM_AUTOPERMISSIONS_TEXT","Selekteer de groepen waarvan de ingezonden linken automatisch worden goedgekeurd.");

define("_AM_WFL_PERM_SPERMISSIONS","Inzend rechten");
define("_AM_WFL_PERM_SPERMISSIONS_TEXT","Selekteer de groepen die nieuwe linken mogen inzenden in de geselekteerde categorie(ën).");

define("_AM_WFL_PERM_APERMISSIONS","Beheerder groepen");
define("_AM_WFL_PERM_APERMISSIONS_TEXT","Selekteer de groepen die beheerdersrechten hebben voor de geselekteerde categorie(ën).");

define("_AM_WFL_COUNTRY","Land:");
define("_AM_WFL_KEYWORDS","Keywords:");
define("_AM_WFL_KEYWORDS_NOTE","Keywords dienen gescheiden te worden door een komma (keyword1, keyword2, keyword3).");
define("_AM_WFL_CHECKURL","Check URL");
define("_AM_WFL_CATTITLE","Categorie");
define("_AM_WFL_LINK_GOOGLEMAP","Google Kaarten");
define("_AM_WFL_LINK_YAHOOMAP","Yahoo Kaarten");
define("_AM_WFL_LINK_MULTIMAP","Multimap Kaarten");
define("_AM_WFL_LINK_CHECKMAP","Kontrolleer kaart");
define("_AM_WFL_STREET1","Straat 1");
define("_AM_WFL_STREET2","Straat 2 (optioneel)");
define("_AM_WFL_TOWN","Plaats");
define("_AM_WFL_STATE","Provincie");
define("_AM_WFL_ZIPCODE","Postcode");
define("_AM_WFL_TELEPHONE","Telefoon");
define("_AM_WFL_FAX","Fax");

// Version 1.05 RC2
define("_AM_WFL_WARNINSTALL4","<b>WAARSCHUWING:</b> <u>Map</u> %s is niet beschrijfbaar. <br />Deze map dient schrijfbaar (CHMOD 777) te zijn voor WF-Links.");

// Version 1.05 RC5
define("_AM_WFL_VOIP","VoIP");
define("_AM_WFL_LINK_SUBMITTER","Link publicist: ");
define("_AM_WFL_MOBILE","GSM");
define("_AM_WFL_CATSPONSOR","Kies categorie sponsor:");
define("_AM_WFL_CATSPONSORDSC","Als u een sponsor kiest wordt de hieronder gekozen banner id niet opgeslagen!");
define("_AM_WFL_BANNERID","Kies banner id:");
define("_AM_WFL_BANNERIDDSC","Als u hierboven een sponsor gekozen heeft, dan wordt de banner id niet opgeslagen!");

// Version 1.05 RC6
define("_AM_WFL_VAT","BTW nr.");
define("_AM_WFL_VATWIKI","Zie voor meer informatie op <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a> (engelstalig)");
define("_AM_WFL_EMAIL","E-Mail");
define("_AM_WFL_ICO_EXPIRE","Verlopen");
define("_AM_WFL_LINK_NORESPONSE", 'Geen Reaktie');
define("_AM_WFL_LINK_CREATEADDRESS", '&nbsp;<b>Adres formulier</b>');
define("_AM_WFL_LINK_MISCLINKSETTINGS", '&nbsp;<b>Diverse Link instellingen</b>');

// Version 1.06 RC1
define("_AM_WFL_READWRITEERROR","U hebt geen bestand om te uploaden gekozen of de server heeft niet de juist schrijf/lees bevoegdheden om dit bestand te uploaden!");
define("_AM_WFL_INVALIDFILESIZE","Onjuiste Bestands Grootte");
define("_AM_WFL_FILENAMEEMPTY","Bestandsnaam Is Leeg");
define("_AM_WFL_NOFILEUPLOAD","Geen bestand geupload, dit is een error");
define("_AM_WFL_UPLOADERRORZERO","Er was een probleem met uw upload. Error: 0");
define("_AM_WFL_UPLOADERRORONE","Het bestand dat u probeert te uploaden is te groot. Error: 1");
define("_AM_WFL_UPLOADERRORTWO","Het bestand dat u probeert te uploaden is te groot. Error: 2");
define("_AM_WFL_UPLOADERRORTHREE","Het bestand dat u probeert te uploaden is alleen deels geupload. Error: 3");
define("_AM_WFL_UPLOADERRORFOUR","Geen bestand voor uploaden geselekteerd. Error: 4");
define("_AM_WFL_UPLOADERRORFIVE","Geen bestand voor uploaden geselekteerd. Error: 5");
define("_AM_WFL_NOUPLOADDIR","Upload map niet gedefinieerd.");
define("_AM_WFL_FAILOPENDIR","Open van map gefaald: ");
define("_AM_WFL_FAILOPENDIRWRITEPERM","Open van map met schrijfrechten gefaald: ");
define("_AM_WFL_FILESIZEMAXSIZE","Bestandsgrootte: %u. Maximum Grootte Toegestaan: %u");
define("_AM_WFL_FILESIZEMAXWIDTH","Bestandsbreedte: %u. Maximum Breedte Toegestaan: %u");
define("_AM_WFL_FILESIZEMAXHEIGHT","Bestandshoogte: %u. Maximum Hoogte Toegestaan: %u");
define("_AM_WFL_MIMENOTALLOW","MIME type not toegestaan: ");
define("_AM_WFL_FAILEDUPLOADING","Uploaden bestand gefaald: ");
define("_AM_WFL_FILE","Bestand ");
define("_AM_WFL_ALREADYEXISTTRYAGAIN"," bestaat al op de server. Hernoem dit bestand en probeer het opnieuw.<br />");
define("_AM_WFL_ERRORSRETURNUPLOAD","<h4>Errors Ontstaan Tijdens Uploaden</h4>");
define("_AM_WFL_DOESNOTEXIST"," bestaat niet!");
define("_AM_WFL_INFORMATION","Link Informatie");
define("_AM_WFL_HITS","Hits: ");
define("_AM_WFL_PAGERANK","PageRank™: ");
define("_AM_WFL_ERROR_CATISCAT","Je kan een categorie NIET als sub-categorie van zichzelf maken!");
define("_AM_WFL_MOD_COUNTRY","Land:");
define("_AM_WFL_MOD_KEYWORDS","Keywords:");
define("_AM_WFL_MOD_ITEM_TAG","Tags:");
define("_AM_WFL_MOD_GOOGLEMAP","Google Maps:");
define("_AM_WFL_MOD_YAHOOMAP","Yahoo Maps:");
define("_AM_WFL_MOD_MULTIMAP","Multimap:");
define("_AM_WFL_MOD_STREET1","Straat 1:");
define("_AM_WFL_MOD_STREET2","Straat 2 (optioneel):");
define("_AM_WFL_MOD_TOWN","Plaats:");
define("_AM_WFL_MOD_STATE","Provincie:");
define("_AM_WFL_MOD_ZIP","Postcode:");
define("_AM_WFL_MOD_TEL","Telefoon:");
define("_AM_WFL_MOD_FAX","Fax:");
define("_AM_WFL_MOD_VOIP","VoIP:");
define("_AM_WFL_MOD_MOBILE","GSM:");
define("_AM_WFL_MOD_EMAIL","E-Mail:");
define("_AM_WFL_MOD_VAT","BTW nr.");

// version 1.06 RC-2
define("_AM_WFL_IPAGE_SHOWLATEST","Laat laatste lijst zien?");
define("_AM_WFL_IPAGE_LATESTTOTAL","Hoeveel links laten zien?");
define("_AM_WFL_IPAGE_LATESTTOTAL_DSC","0 Schakelt deze optie uit.");

//version 1.06 Final
define("_AM_WFL_DOCUMENTATION","Documentatie");
define("_AM_WFL_SHOWNOIMAGE","Geen afbeelding");
define("_AM_WFL_NOSELECTION","Geen selektie");
define("_AM_WFL_NOFILESELECT","Geen bestand gekozen");
?>