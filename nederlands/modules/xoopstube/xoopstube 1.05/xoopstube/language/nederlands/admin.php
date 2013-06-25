<?php

/**
 * Module: XoopsTube
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * PHP version 5
 *
 * @category        Module
 * @package         Xoopstube
 * @author          XOOPS Development Team
 * @copyright       2001-2013 The XOOPS Project
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @version         $Id$
 * @link            http://sourceforge.net/projects/xoops/
 * @since           1.0.6
 */


define("_AM_XTUBE_WARNINSTALL1", "WAARSCHUWING: Map %s bestaat op uw server. <br />Verwijder deze map om veiligheidsrederen aub.");
define("_AM_XTUBE_WARNINSTALL2", "WAARSCHUWING: Bestand %s bestaat op uw server. <br />Verwijder deze map om veiligheidsrederen aub.");
define("_AM_XTUBE_WARNINSTALL3", "WAARSCHUWING: Map %s bestaat niet op uw server. <br />Deze map is nodig voor XoopsTube.");

define("_AM_XTUBE_MODULE_NAME", "XoopsTube");

define("_AM_XTUBE_BMODIFY", "Aanpassen");
define("_AM_XTUBE_BDELETE", "Verwijderen");
define("_AM_XTUBE_BCREATE", "Aanmaken");
define("_AM_XTUBE_BADD", "Toevoegen");
define("_AM_XTUBE_BAPPROVE", "Goedkeuren");
define("_AM_XTUBE_BIGNORE", "Negeren");
define("_AM_XTUBE_BCANCEL", "Annuleren");
define("_AM_XTUBE_BSAVE", "Opslaan");
define("_AM_XTUBE_BRESET", "Reset");
define("_AM_XTUBE_BMOVE", "Verplaats videos");
define("_AM_XTUBE_BUPLOAD", "Uploaden");
define("_AM_XTUBE_BDELETEIMAGE", "Verwijder geselekteerde afbeelding");
define("_AM_XTUBE_BRETURN", "Ga terug naar waar u was!");
define("_AM_XTUBE_DBERROR", "Database toegang fout: Rapporteer deze fout.");

// Other Options
define("_AM_XTUBE_TEXTOPTIONS", "Tekst opties:");
define("_AM_XTUBE_DISABLEHTML", " Uitschakelen HTML tags");
define("_AM_XTUBE_DISABLESMILEY", " Uitschakelen Smilies");
define("_AM_XTUBE_DISABLEXCODE", " Uitschakelen XOOPS codes");
define("_AM_XTUBE_DISABLEIMAGES", " Uitschakelen afbeeldingen");
define("_AM_XTUBE_DISABLEBREAK", " Gebruik XOOPS linebreak omzetting?");
define("_AM_XTUBE_UPLOADFILE", "Video succesvol geupload");
define("_AM_XTUBE_NOMENUITEMS", "Geen menu items in het menu");

// Admin Bread crumb
define("_AM_XTUBE_PREFS", "Instellingen");
define("_AM_XTUBE_BUPDATE", "Module bijwerken");
define("_AM_XTUBE_BINDEX", "Hoofd index");
define("_AM_XTUBE_BPERMISSIONS", "Rechten");
define("_AM_XTUBE_BLOCKADMIN", "Blokinstellingen");
define("_AM_XTUBE_GOMODULE", "Ga naar module");
define("_AM_XTUBE_ABOUT", "Over");

// Admin Summary
define("_AM_XTUBE_SCATEGORY", "Categorie: ");
define("_AM_XTUBE_SFILES", "Videos: ");
define("_AM_XTUBE_SNEWFILESVAL", "Ingezonden: ");
define("_AM_XTUBE_SMODREQUEST", "Aangepast: ");
define("_AM_XTUBE_SREVIEWS", "Beoordelingen: ");

// Admin Main Menu
define("_AM_XTUBE_MCATEGORY", "Categorie management");
define("_AM_XTUBE_MVIDEOS", "Video management");
define("_AM_XTUBE_MLISTBROKEN", "Gebroken videos index");
define("_AM_XTUBE_MLISTPINGTIMES", "Videos pingtijd index");
define("_AM_XTUBE_INDEXPAGE", "Index pagina management");
define("_AM_XTUBE_MCOMMENTS", "Commenta(a)r(en)");
define("_AM_XTUBE_MVOTEDATA", "Stem data");
define("_AM_XTUBE_MUPLOADS", "Afbeelding upload");

// Catgeory defines
define("_AM_XTUBE_CCATEGORY_CREATENEW", "Nieuwe categorie");
define("_AM_XTUBE_CCATEGORY_MODIFY", "Categorie aanpassen");
define("_AM_XTUBE_CCATEGORY_MOVE", "Verplaats videos categorie");
define("_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "categorie titel:");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Videos verplaatsen mislukt: kan niet verplaatsen naar deze categorie");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Videos verplaatsen mislukt: Kan deze categorie niet vinden");
define("_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "Videos verplaatst en categorie verwijderd");
define("_AM_XTUBE_CCATEGORY_CREATED", "Nieuwe categorie aangemaakt en database succesvol geupdate");
define("_AM_XTUBE_CCATEGORY_MODIFIED", "Geselekteerde categorie aangemaakt en database succesvol geupdate");
define("_AM_XTUBE_CCATEGORY_DELETED", "Geselekteerde categorie verwijderd en database succesvol geupdate");
define("_AM_XTUBE_CCATEGORY_AREUSURE", "Waarschuwing: Deze categorie en alle videos en inhoud verwijderen?");
define("_AM_XTUBE_CCATEGORY_NOEXISTS", "Eerst een categorie aanmaken voordat een video kan worden toegevoegd");
define("_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Categorie toegangsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgroepen die toegang hebben tot deze categorie.</span></div>");
define("_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Categorie inzendrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgropen die rechten hebben om nieuwe videos voor deze categorie in te zenden.</span></div>");
define("_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Categorie aanpassingsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgroepen die rechten hebben om deze categorie te beheren.</span></div>");

define("_AM_XTUBE_FCATEGORY_TITLE", "Categorie titel:");
define("_AM_XTUBE_FCATEGORY_WEIGHT", "Categorie gewicht:");
define("_AM_XTUBE_FCATEGORY_SUBCATEGORY", "Instellen als sub-categorie van:");
define("_AM_XTUBE_FCATEGORY_CIMAGE", "Selekteer categorie afbeelding:");
define("_AM_XTUBE_FCATEGORY_DESCRIPTION", "Categorie omschrijving:");
define("_AM_XTUBE_FCATEGORY_SUMMARY", "Categorie samenvatting:");
/**
 * Index page Defines
 */
define("_AM_XTUBE_IPAGE_UPDATED", "Index pagina aangepast en database succelvol geupdate!");
define("_AM_XTUBE_IPAGE_INFORMATION", "Index pagina informatie");
define("_AM_XTUBE_IPAGE_MODIFY", "Index pagina aanpassen");
define("_AM_XTUBE_IPAGE_CIMAGE", "Index afbeelding:");
define("_AM_XTUBE_IPAGE_CTITLE", "Index titel:");
define("_AM_XTUBE_IPAGE_CHEADING", "Index koptekst:");
define("_AM_XTUBE_IPAGE_CHEADINGA", "Koptekst uitlijning:");
define("_AM_XTUBE_IPAGE_CFOOTER", "Index voettekst:");
define("_AM_XTUBE_IPAGE_CFOOTERA", "Voettekst uitlijning:");
define("_AM_XTUBE_IPAGE_CLEFT", "Uitlijnen links");
define("_AM_XTUBE_IPAGE_CCENTER", "Uitlijnen midden");
define("_AM_XTUBE_IPAGE_CRIGHT", "Uitlijnen rechts");
/**
 * Permissions defines
 */
define("_AM_XTUBE_PERM_MANAGEMENT", "Rechten instellingen");
define("_AM_XTUBE_PERM_PERMSNOTE", "<div><span style='font-weight: bold;'>Opmerking:</span> Stel hier de juiste rechten in, anders kunnen gebruikersgroepen mogelijk bepaalde artikelen en blokken niet of juist wel zien. Let tevens op de module toegangsrechten! Om deze in te stellen ga naar <span style='font-weight: bold;'>System admin > Groepen</span>, kies de gewenste groep en selekteer de checkboxen om de toegang te wijzigen.</div>");
define("_AM_XTUBE_PERM_CPERMISSIONS", "Categorie rechten");
define("_AM_XTUBE_PERM_CSELECTPERMISSIONS", "Selekteer categorieën die alle groepen mogen zien");
define("_AM_XTUBE_PERM_CNOCATEGORY", "Kan geen rechten instellen: Er zijn geen categorieën aangemaakt!");
define("_AM_XTUBE_PERM_FPERMISSIONS", "Video rechten");
define("_AM_XTUBE_PERM_FNOFILES", "Kan geen rechten instellen: er zijn geen videos aangemaakt!");
define("_AM_XTUBE_PERM_FSELECTPERMISSIONS", "Selekteer videos die alle groepen mogen zien");
/**
 * Upload defines
 */
define("_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Afbeelding succesvol geupload");
define("_AM_XTUBE_VIDEO_NOIMAGEEXIST", "FOUT: geen video geselekteerd om te uploaden. Probeer het nogmaals!");
define("_AM_XTUBE_VIDEO_IMAGEEXIST", "Afbeelding bestaat al in het uploadgedeelte!");
define("_AM_XTUBE_VIDEO_FILEDELETED", "Afbeelding is verwijderd.");
define("_AM_XTUBE_VIDEO_FILEERRORDELETE", "FOUT video verwijderen: Afbeelding is niet gevonden op server.");
define("_AM_XTUBE_VIDEO_NOFILEERROR", "FOUT video verwijderen: Geen afbeelding geselekteerd om te verwijderen.");
define("_AM_XTUBE_VIDEO_DELETEFILE", "WAARSCHUWING: deze afbeelding verwijderen?");
define("_AM_XTUBE_VIDEO_IMAGEINFO", "Server status");
define("_AM_XTUBE_VIDEO_SPHPINI", "<span style='font-weight: bold;'>Informatie uit PHP.ini link:</span>");
define("_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Veilige mode status: ");
define("_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Register globals: ");
define("_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Server uploads status: ");
define("_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "Max upload grootte toegestaan: ");
define("_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Max inzending grootte toegestaan: ");
define("_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (Dit kan problemen veroorzaken)");
define("_AM_XTUBE_VIDEO_GDLIBSTATUS", "GD Library support: ");
define("_AM_XTUBE_VIDEO_GDLIBVERSION", "GD Library versie: ");
define("_AM_XTUBE_VIDEO_GDON", "<span style='font-weight: bold;'>ingeschakeld</span> (thumbsnails beschikbaar)");
define("_AM_XTUBE_VIDEO_GDOFF", "<span style='font-weight: bold;'>uitgeschakeld</span> (thumbnails niet beschikbaar)");
define("_AM_XTUBE_VIDEO_OFF", "<span style='font-weight: bold;'>uit</span>");
define("_AM_XTUBE_VIDEO_ON", "<span style='font-weight: bold;'>aan</span>");
define("_AM_XTUBE_VIDEO_CATIMAGE", "categorie afbeeldingen");
define("_AM_XTUBE_VIDEO_SCREENSHOTS", "Screenshot afbeeldingen");
define("_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Hoofd afbeeldingen");
define("_AM_XTUBE_VIDEO_FCATIMAGE", "categorie afbeeldingen pad");
define("_AM_XTUBE_VIDEO_FSCREENSHOTS", "Screenshot fbeeldingen pad");
define("_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Hoofd afbeeldingen pad");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Upload afbeelding: ");
define("_AM_XTUBE_VIDEO_FUPLOADPATH", "Upload pad: ");
define("_AM_XTUBE_VIDEO_FUPLOADURL", "Upload URL: ");
define("_AM_XTUBE_VIDEO_FOLDERSELECTION", "Selekteer upload bestemming:");
define("_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Toon geselekteerde afbeelding:");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Upload nieuwe afbeelding naar geselekteerde bestemming:");

// Main Index defines
define("_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Module administatie samenvatting");
define("_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "Gepubliceerde videos:");
define("_AM_XTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Automatisch gepubliseerde videos:");
define("_AM_XTUBE_MINDEX_AUTOEXPIRE", "Automatisch verlopen videos:");
define("_AM_XTUBE_MINDEX_EXPIRED", "Verlopen videos:");
define("_AM_XTUBE_MINDEX_OFFLINEVIDEO", "Offline videos:");
define("_AM_XTUBE_MINDEX_ID", "ID");
define("_AM_XTUBE_MINDEX_TITLE", "Video titel");
define("_AM_XTUBE_MINDEX_POSTER", "Inzender");
define("_AM_XTUBE_MINDEX_ONLINE", "Status");
define("_AM_XTUBE_MINDEX_ONLINESTATUS", "Online status");
define("_AM_XTUBE_MINDEX_PUBLISH", "Publiceren");
define("_AM_XTUBE_MINDEX_PUBLISHED", "Gepubliceerd");
define("_AM_XTUBE_MINDEX_EXPIRE", "Verlopen");
define("_AM_XTUBE_MINDEX_NOTSET", "Geen datum ingesteld");
define("_AM_XTUBE_MINDEX_SUBMITTED", "Inzenddatum");

define("_AM_XTUBE_MINDEX_ACTION", "Aktie");
define("_AM_XTUBE_MINDEX_NOLINKSFOUND", "OPMERKING: Er zijn geen videos overeenkomend met deze kriteria");
define("_AM_XTUBE_MINDEX_PAGE", "<span style='font-weight: bold;'>Pagina:<span style='font-weight: bold;'> ");
define('_AM_XTUBE_MINDEX_PAGEINFOTXT', '<ul><li>XoopsTube Hoofdpagina details.</li><li>U kunt eenvoudig veranderingen aanbrengen aan het logo, de afbeelding, de kop en voetteksten om de pagina aan uw wensen te laten voldoen.</li></ul><br />Opmerking: Het gekozen logo wordt door de gehele XoopsTube module toegepast.');
define("_AM_XTUBE_MINDEX_RESPONSE", "Reaktietijd");

// Submitted Links
define("_AM_XTUBE_SUB_SUBMITTEDFILES", "Ingezonden videos");
define("_AM_XTUBE_SUB_FILESWAITINGINFO", "Wachtende videos informatie");
define("_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "Videos wachtend op goedkeuring: ");
define("_AM_XTUBE_SUB_APPROVEWAITINGFILE", "Nieuwe videos informatie <span style='font-weight: bold;'>accepteren zonder goedkeuring</span>.");
define("_AM_XTUBE_SUB_EDITWAITINGFILE", "<span style='font-weight: bold;'>Wijzig</span> nieuwe video informatie en keur daarna goed.");
define("_AM_XTUBE_SUB_DELETEWAITINGFILE", "<span style='font-weight: bold;'>Verwijder</span> nieuwe video informatie.");
define("_AM_XTUBE_SUB_NOFILESWAITING", "Er zijn geen videos overeenkomend met deze kriteria.");
define("_AM_XTUBE_SUB_NEWFILECREATED", "Nieuwe video data aangemaakt en database succesvol bijgewerkt.");

// Vote Information
define("_AM_XTUBE_VOTE_RATINGINFOMATION", "Stemmen informatie");
define("_AM_XTUBE_VOTE_TOTALVOTES", "Totaal aantal stemmen: ");
define("_AM_XTUBE_VOTE_REGUSERVOTES", "Stemmen van geregistreerde gebruikers: %s");
define("_AM_XTUBE_VOTE_ANONUSERVOTES", "Stemmen van anonieme gebruikers: %s");
define("_AM_XTUBE_VOTE_USER", "Gebruiker");
define("_AM_XTUBE_VOTE_IP", "IP Adres");
define("_AM_XTUBE_VOTE_DATE", "Ingezonden op");
define("_AM_XTUBE_VOTE_RATING", "Beoordeling");
define("_AM_XTUBE_VOTE_NOREGVOTES", "Geen stemmen van geregistreerde gebruikers");
define("_AM_XTUBE_VOTE_NOUNREGVOTES", "Geen stemmen van anonieme gebruikers");
define("_AM_XTUBE_VOTE_VOTEDELETED", "Stem data verwijderd.");
define("_AM_XTUBE_VOTE_ID", "ID");
define("_AM_XTUBE_VOTE_FILETITLE", "Video titel");
define("_AM_XTUBE_VOTE_DISPLAYVOTES", "Stem data informatie");
define("_AM_XTUBE_VOTE_NOVOTES", "Geen te tonen stemmen van geregistreerde gebruikers");
define("_AM_XTUBE_VOTE_DELETE", "Geen te tonen stemmen van geregistreerde gebruikers");
define("_AM_XTUBE_VOTE_DELETEDSC", "<span style='font-weight: bold;'>Verwijderd</span> de gekozen stem informatie uit de database.");
define("_AM_XTUBE_VOTEDELETED", "Geselekteerde stem verwijderd, database is bijgewerkt.");

define("_AM_XTUBE_VOTE_USERAVG", "Gemiddelde gebruikers beoordeling");
define("_AM_XTUBE_VOTE_TOTALRATE", "Totaal aantal stemmen");
define("_AM_XTUBE_VOTE_MAXRATE", "Hoogste item stem");
define("_AM_XTUBE_VOTE_MINRATE", "Laagste item stem");
define("_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "Meeste gestemd op");
define("_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "Minste gestemd op");
define("_AM_XTUBE_VOTE_MOSTVOTERSUID", "Actiefste stemmer");
define("_AM_XTUBE_VOTE_REGISTERED", "Geregistreerde stemmen");
define("_AM_XTUBE_VOTE_NONREGISTERED", "Anonieme stemmen");

// Modifications
define("_AM_XTUBE_MOD_TOTMODREQUESTS", "Totaal aantal wijzigingsaanvragen: ");
define("_AM_XTUBE_MOD_MODREQUESTS", "Gewijzigde videos");
define("_AM_XTUBE_MOD_MODREQUESTSINFO", "Gewijzigde videos informatie");
define("_AM_XTUBE_MOD_MODID", "ID");
define("_AM_XTUBE_MOD_MODTITLE", "Titel");
define("_AM_XTUBE_MOD_MODPOSTER", "Originele inzender: ");
define("_AM_XTUBE_MOD_DATE", "Ingezonden op");
define("_AM_XTUBE_MOD_NOMODREQUEST", "Er zijn geen verzoeken die overeenkomen met deze kriteria");
define("_AM_XTUBE_MOD_TITLE", "Video titel: ");
define("_AM_XTUBE_MOD_LID", "video ID: ");
define("_AM_XTUBE_MOD_CID", "categorie: ");
define("_AM_XTUBE_MOD_URL", "video code: ");
define("_AM_XTUBE_MOD_PUBLISHER", "Uitgever: ");
define("_AM_XTUBE_MOD_FORUMID", "Forum: ");
define("_AM_XTUBE_MOD_SCREENSHOT", "Screenshot afbeelding: ");
define("_AM_XTUBE_MOD_HOMEPAGE", "Website: ");
define("_AM_XTUBE_MOD_HOMEPAGETITLE", "Website naam: ");
define("_AM_XTUBE_MOD_SHOTIMAGE", "Screenshot afbeelding: ");
define("_AM_XTUBE_MOD_DESCRIPTION", "Omschrijving: ");
define("_AM_XTUBE_MOD_MODIFYSUBMITTER", "Inzender: ");
define("_AM_XTUBE_MOD_MODIFYSUBMIT", "Inzender");
define("_AM_XTUBE_MOD_PROPOSED", "Voorgestelde video details");
define("_AM_XTUBE_MOD_ORIGINAL", "Orginele video details");
define("_AM_XTUBE_MOD_REQDELETED", "Verzoek om aanpassing verwijderd uit de database");
define("_AM_XTUBE_MOD_REQUPDATED", "Geselekteerde video aangepast en database succesvol bijgewerkt");
define('_AM_XTUBE_MOD_VIEW', 'Bekijken');

// Video management
define("_AM_XTUBE_VIDEO_ID", "video ID: ");
define("_AM_XTUBE_VIDEO_IP", "Uploader IP: ");
define("_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: bold;'>Toegestane beheerder video formaten</span>:</div>");
define("_AM_XTUBE_VIDEO_MODIFYFILE", "Aangepaste video informatie");
define("_AM_XTUBE_VIDEO_CREATENEWFILE", "Nieuwe video aanmaken");
define("_AM_XTUBE_VIDEO_TITLE", "Video titel: ");
define("_AM_XTUBE_VIDEO_DLVIDID", "Video id-code: ");
define("_AM_XTUBE_VIDEO_DLVIDID_NOTE", "
<span style='font-size: small;'><span style='font-weight: bold;'>YouTube:</span> http://www.youtube.com/watch?v=<span style='color: #FF0000;'>IsOtq-qCqZ4</span><br />
<span style='font-weight: bold;'>MetaCafe:</span> http://www.metacafe.com/watch/<span style='color: #FF0000;'>191543/sperm_whale_encounters_underwater_robot</span>/<br />
<span style='font-weight: bold;'>SPIKE/ifilm:</span> http://www.ifilm.com/video/<span style='color: #FF0000;'>2718605</span><br />
<span style='font-weight: bold;'>Photobucket:</span> http://i39.photobucket.com/albums/<span style='color: #FF0000;'>e168/vailtom/th_BigSquid</span>.jpg<br />
<span style='font-weight: bold;'>Google Video:</span> http://video.google.com/videoplay?docid=<span style='color: #FF0000;'>4761076111111865377</span>&q=rov&total=913&start=...<br />
<span style='font-weight: bold;'>MySpace TV:</span> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<span style='color: #FF0000;'>13171141</span><br />
<span style='font-weight: bold;'>DailyMotion:</span> http://www.dailymotion.com/video/<span style='color: #FF0000;'>x40bhg</span>_blondesecretary_fun<br />
<span style='font-weight: bold;'>Blip.tv </span>embed code<span style='font-weight: bold;'>:</span> http://blip.tv/play/<span style='color: #FF0000;'>Abe6EwA</span> ...<br />
<span style='font-weight: bold;'>ClipFish:</span> http://www.clipfish.de/player.php?videoid=<span style='color: #FF0000;'>MTg1NTYyfDM1Ng</span>%3D%3D<br />
<span style='font-weight: bold;'>LiveLeak:</span> http://www.liveleak.com/view?i=<span style='color: #FF0000;'>a59_1205566630</span><br />
<span style='font-weight: bold;'>Maktoob:</span> file=http://<span style='color: #FF0000;'>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</span>.flv (from embed-code)<br />
<span style='font-weight: bold;'>Veoh:</span> http://www.veoh.com/videos/<span style='color: #FF0000;'>v15069875yApCz7r3</span>?jsonParams=...<br />
<span style='font-weight: bold;'>Vimeo:</span> http://www.vimeo.com/<span style='color: #FF0000;'>2246499</span><br />
<span style='font-weight: bold;'>Megavideo:</span> http://www.megavideo.com/?v=<span style='color: #FF0000;'>J6YSRE0T</span><br />
<span style='font-weight: bold;'>Viddler:</span> http://www.viddler.com/player/<span style='color: #FF0000;'>d32d2b94</span>/ (see embed code)<br />
<span style='font-weight: bold;'>XoopsTube:</span> <span style='color: #FF0000;'>Take over from above selection menu</span></span>");
define("_AM_XTUBE_VIDEO_PICURL", "Afbeeldings url");
define("_AM_XTUBE_VIDEO_PICURLNOTE", "<span style='font-size: small;'>Afbeeldings url als de bron Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler of Maktoob is.</span>");
define("_AM_XTUBE_VIDEO_DESCRIPTION", "Video omschrijving: ");
define("_AM_XTUBE_VIDEO_CATEGORY", "Video categorie: ");
define("_AM_XTUBE_VIDEO_FILESSTATUS", " Video offline plaatsen?<br /><br /><span style='font-size: small;'><span style='font-weight: normal;'>Video zal niet zichbaar zijn.</span></span>");
define("_AM_XTUBE_VIDEO_SETASUPDATED", " Video status weergeven als bijgewerkt?<br /><br /><span style='font-size: small;'><span style='font-weight: normal;'>Video zal een 'bijgewerkt' icoon weergeven.</span></span>");
define("_AM_XTUBE_VIDEO_SHOTIMAGE", "Video screenshot afbeelding: ");
define("_AM_XTUBE_VIDEO_DISCUSSINFORUM", "Discussieer in dit forum toevoegen?");
define("_AM_XTUBE_VIDEO_PUBLISHDATE", "Video publikatiedatum:");
define("_AM_XTUBE_VIDEO_EXPIREDATE", "Video verloopdatum:");
define("_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Verwijder publikatiedatum:");
define("_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Verwijder verloopdatum:");
define("_AM_XTUBE_VIDEO_PUBLISHDATESET", " Instellen publikatiedatum: ");
define("_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Stel de datum/tijd van publikatie in");
define("_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Stel de datum/tijd van verlopen in");
define("_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<span style='font-weight: bold;'>Stel publikatiedatum in: </span>");
define("_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<span style='font-weight: bold;'>Stel nieuwe publikatiedatum in: </span><br />Gepubliceerd op:");
define("_AM_XTUBE_VIDEO_SETPUBDATESETS", "<span style='font-weight: bold;'>Stel publikatiedatum in: </span><br />Gepubliceerd op:");
define("_AM_XTUBE_VIDEO_EXPIREDATESET", " Stel verloopdatum in: ");
define("_AM_XTUBE_VIDEO_SETEXPIREDATE", "<span style='font-weight: bold;'>Stel verloopdatum in: </span>");
define("_AM_XTUBE_VIDEO_DELEDITMESS", "Verwijder gebroken video rapport?<br /><br /><span style='font-weight: normal;'>Kies <span style='font-weight: bold;'>Ja</span> en het gebroken video rapport wordt automatisch verwijderd tevens wordt bevestigd dat de video weer werkt.</span>");
define("_AM_XTUBE_VIDEO_MUSTBEVALID", "Screenshot afbeelding moet een geldige afbeeldingslink zijn in het %s bestand (bijv. shot.gif). Laat het veld leeg als er geen screenshot link is.");
define("_AM_XTUBE_VIDEO_EDITAPPROVE", "Goedkeuren video:");
define("_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "Nieuwe video aangemaakt en database succesvol bijgewerkt");
define("_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "Geselekteerde video aangepast en database succesvol bijgewerkt");
define("_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "Geselekteerde video verwijderen?");
define("_AM_XTUBE_VIDEO_FILEWASDELETED", "Video %s succesvol verwijderd uit de database!");
define("_AM_XTUBE_VIDEO_FILEAPPROVED", "Video goedgekeurd en database succesvol bijgewerkt");
define("_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<span style='font-weight: bold;'>Maak een nieuwsbericht van de video</span>");
define("_AM_XTUBE_VIDEO_SUBMITNEWS", "Nieuwe video inzenden als nieuwsbericht?");
define("_AM_XTUBE_VIDEO_NEWSCATEGORY", "Selekteer nieuwscategorie om nieuwsbericht in te zenden:");
define("_AM_XTUBE_VIDEO_NEWSTITLE", "Nieuwstitel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leeg laten om de linknaam te gebruiken</span></div>");
define("_AM_XTUBE_VIDEO_PUBLISHER", "Video publicist: ");
define("_AM_XTUBE_VIDSOURCE", "Video bron:");
define("_AM_XTUBE_VIDSOURCE2", "Video bron");

/**
 * Broken videos defines
 */
define("_AM_XTUBE_SBROKENSUBMIT", "Gebroken: ");
define("_AM_XTUBE_BROKEN_FILE", "Gebroken rapportage(s)");
define("_AM_XTUBE_BROKEN_FILEIGNORED", "Gebroken video rapportage genegeerd en succesvol verwijderd uit de database!");
define("_AM_XTUBE_BROKEN_NOWACK", "Toegekende status gewijzigd en database geupdate!");
define("_AM_XTUBE_BROKEN_NOWCON", "Gewijzigde status is bevestigd en database geupdate!");
define("_AM_XTUBE_BROKEN_REPORTINFO", "Gebroken rapportage informatie");
define("_AM_XTUBE_BROKEN_REPORTSNO", "Wachtende gebroken video rapportage:");
define("_AM_XTUBE_BROKEN_IGNOREDESC", "<span style='font-weight: bold;'>Negeert</span> het rapport en verwijderd allen de gebroken video rapportage.");
define("_AM_XTUBE_BROKEN_DELETEDESC", "<span style='font-weight: bold;'>Verwijdert</span> de gerapporteerde videodata en gebroken video rapportage van de video.");
define("_AM_XTUBE_BROKEN_EDITDESC", "de video <span style='font-weight: bold;'>Aanpassen</span> om het probleem te verhelpen.");
define("_AM_XTUBE_BROKEN_ACKDESC", "<span style='font-weight: bold;'>Toegekend</span> Stelt de toegekende status van de gebroken bestandsrapportage in.");
define("_AM_XTUBE_BROKEN_CONFIRMDESC", "<span style='font-weight: bold;'>Bevestigd</span> Stelt de status van de gebroken videorapportage in als bevestigd.");
define("_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Toegekend");
define("_AM_XTUBE_BROKEN_DCONFIRMED", "Bevestigd");
define("_AM_XTUBE_BROKEN_VIDSOURCE", "Video bron");

define("_AM_XTUBE_BROKEN_ID", "ID");
define("_AM_XTUBE_BROKEN_TITLE", "Titel");
define("_AM_XTUBE_BROKEN_REPORTER", "Rapporteur");
define("_AM_XTUBE_BROKEN_FILESUBMITTER", "Inzender");
define("_AM_XTUBE_BROKEN_DATESUBMITTED", "Inzenddatum");
define("_AM_XTUBE_BROKEN_ACTION", "Aktie");
define("_AM_XTUBE_BROKEN_NOFILEMATCH", "Geen gebroken (video) rapportages die overeenkomen met deze kriteria");
define("_AM_XTUBE_BROKENFILEDELETED", "Video verwijderd uit de database en gebroken rapportage verwijderd");

/**
 * About defines
 */
define("_AM_XTUBE_BY", "door");

// block defines
define("_AM_XTUBE_BADMIN", "Blok administratie");
define("_AM_XTUBE_BLKDESC", "Omschrijving");
define("_AM_XTUBE_TITLE", "Titel");
define("_AM_XTUBE_SIDE", "Uitlijning");
define("_AM_XTUBE_WEIGHT", "Gewicht");
define("_AM_XTUBE_VISIBLE", "Zichtbaar");
define("_AM_XTUBE_ACTION", "Aktie");
define("_AM_XTUBE_SBLEFT", "Links");
define("_AM_XTUBE_SBRIGHT", "Rechts");
define("_AM_XTUBE_CBLEFT", "Midden links");
define("_AM_XTUBE_CBRIGHT", "Midden rechts");
define("_AM_XTUBE_CBCENTER", "Midden midden");
define("_AM_XTUBE_ACTIVERIGHTS", "Aktieve rechten");
define("_AM_XTUBE_ACCESSRIGHTS", "Toegangsrechten");

// image admin icon
define("_AM_XTUBE_ICO_EDIT", "Dit item aanpassen");
define("_AM_XTUBE_ICO_DELETE", "Dit item verwijderen");
define("_AM_XTUBE_ICO_RESOURCE", "Deze bron aanpassen");

define("_AM_XTUBE_ICO_ONLINE", "Online");
define("_AM_XTUBE_ICO_OFFLINE", "Offline");
define("_AM_XTUBE_ICO_APPROVED", "Goedgekeurd");
define("_AM_XTUBE_ICO_NOTAPPROVED", "Afgekeurd");

define("_AM_XTUBE_ICO_VIDEO", "Gerelateerde video");
define("_AM_XTUBE_ICO_URL", "Gerelateerde URL toevoegen");
define("_AM_XTUBE_ICO_ADD", "Toevoegen");
define("_AM_XTUBE_ICO_APPROVE", "Goedkeuren");
define("_AM_XTUBE_ICO_STATS", "Statistieken");
define("_AM_XTUBE_ICO_VIEW", "Bekijk dit item");

define("_AM_XTUBE_ICO_IGNORE", "Negeren");
define("_AM_XTUBE_ICO_ACK", "Gebroken rapportage toegekend");
define("_AM_XTUBE_ICO_REPORT", "Gebroken rapportage toekennen?");
define("_AM_XTUBE_ICO_CONFIRM", "Gebroken rapportage bevestigd");
define("_AM_XTUBE_ICO_CONBROKEN", "Gebroken rapportage bevestigen?");
define("_AM_XTUBE_ICO_RES", "Bronnen/videos bij dit item aanpassen");

// Alternate category
define("_AM_XTUBE_ALTCAT_CREATEF", "Alternatieve categorie toevoegen");
define("_AM_XTUBE_MALTCAT", "Alternatieve categorie management");
define("_AM_XTUBE_ALTCAT_MODIFYF", "Alternatieve categorie management");
define("_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Alternatieve categorieën kunnen via dit formulier eenvoudig worden toegevoegd of verwijderd.</li></ul>");
define('_AM_XTUBE_ALTCAT_CREATED', 'Alternatieve categorie(ën) is(zijn) opgeslagen!');

define("_AM_XTUBE_MRESOURCES", "Bronnen management");
define("_AM_XTUBE_RES_CREATED", "Bronnen management");
define("_AM_XTUBE_RES_ID", "ID");
define("_AM_XTUBE_RES_DESC", "Omschrijving");
define("_AM_XTUBE_RES_NAME", "Bron Naam");
define("_AM_XTUBE_RES_TYPE", "Bron type");
define("_AM_XTUBE_RES_USER", "Gebruiker");
define("_AM_XTUBE_RES_CREATEF", "Bron toevoegen");
define("_AM_XTUBE_RES_MODIFYF", "Bron aanpassen");
define("_AM_XTUBE_RES_NAMEF", "Naam bron:");
define("_AM_XTUBE_RES_DESCF", "Omschrijving bron:");
define("_AM_XTUBE_RES_URLF", "Bron URL:");
define("_AM_XTUBE_RES_ITEMIDF", "Bron item ID:");
define("_AM_XTUBE_RES_INFOTEXT", "<ul><li>Nieuwe bronnen kunnen via dit formulier eenvoudig worden toegevoegd, aangepast of verwijderd.</li>
    <li>Indexeer alle gelinkte bronnen bij een video</li>
    <li>Bronnaam en omschrijving aanpassen</li></ul>
    ");
define("_AM_XTUBE_LISTBROKEN", "Toon videos die mogelijk zijn gebroken. NB: Deze gegevens zijn mogelijk niet korrect/kompleet en moeten worden gezien als grove handreiking.<br /><br />Kontroleer eerst of de video bestaat voordat aktie wordt ondernomen.<br /><br />");

define("_AM_XTUBE_PERM_RATEPERMISSIONS", "Beoordelingsrechten");
define("_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "Selekteer de groepen die videos mogen beoordelen in de geselekteerde categorie(ën).");

define("_AM_XTUBE_PERM_AUTOPERMISSIONS", "Videos automatisch goedkeuren");
define("_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "Selekteer de groepen waarvan de ingezonden videos automatisch worden goedgekeurd.");

define("_AM_XTUBE_PERM_SPERMISSIONS", "Inzend rechten");
define("_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "Selekteer de groepen die nieuwe videos mogen inzenden in de geselekteerde categorie(ën).");

define("_AM_XTUBE_PERM_APERMISSIONS", "Beheerder groepen");
define("_AM_XTUBE_PERM_APERMISSIONS_TEXT", "Selekteer de groepen die beheerdersrechten hebben voor de geselekteerde categorie(ën).");

define("_AM_XTUBE_TIME", "Tijd:");
define("_AM_XTUBE_KEYWORDS", "Keywords:");
define("_AM_XTUBE_KEYWORDS_NOTE", "<span style='font-size: small;'>Keywords dienen gescheiden te worden door een komma (<em>keyword1, keyword2, keyword3</em>).</span>");
define("_AM_XTUBE_YOUTUBE", "YouTube");
define("_AM_XTUBE_METACAFE", "MetaCafe");
define("_AM_XTUBE_IFILM", "Spike");
define("_AM_XTUBE_PHOTOBUCKET", "Photobucket");
define("_AM_XTUBE_GOOGLEVIDEO", "Google Video");
define("_AM_XTUBE_MYSPAVETV", "MySpace TV");
define("_AM_XTUBE_DAILYMOTION", "DailyMotion");

// Version 1.04 RC-1
define("_AM_XTUBE_BLIPTV", "Blip.tv");
define("_AM_XTUBE_XOOPSTUBE", "XoopsTube");
define("_AM_XTUBE_ICO_EXPIRE", "Verlopen");
define("_AM_XTUBE_MXOOPSTUBE", "XoopsTube Clip");
define("_AM_XTUBE_VIDEO_CATVIDEOIMG", "Video afbeeldingen");
define("_AM_XTUBE_VIDEO_FCATVIDEOIMG", "Video afbeelding pad");
define("_AM_XTUBE_VUPLOAD_VIDEOEXIST", "Video bestaat al");
define("_AM_XTUBE_VUPLOAD_VIDEOUPLOAD", "Video geupload");
define("_AM_XTUBE_VUPLOAD_NOVIDEOEXIST", "Geen Video aanwezig");
define("_AM_XTUBE_VUPLOAD_FILEDELETED", "Video verwijdert");
define("_AM_XTUBE_VUPLOAD_FILEERRORDELETE", "Error");
define("_AM_XTUBE_VUPLOAD_NOFILEERROR", "Geen bestand");
define("_AM_XTUBE_VUPLOAD_DELETEFILE", "Verwijder video bestand");
define("_AM_XTUBE_VUPLOAD_CATVIDEO", "Video bestanden");
define("_AM_XTUBE_VUPLOAD_FCATVIDEO", "Video upload map");
define("_AM_XTUBE_VUPLOADS", "Video Upload");
define("_AM_XTUBE_VUPLOAD_FUPLOADPATH", "Video upload pad:");
define("_AM_XTUBE_VUPLOAD_FUPLOADURL", "Video upload url:");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEOTO", "Upload video: ");
define("_AM_XTUBE_VUPLOAD_FOLDERSELECTION", "Selekteer upload doel");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEO", "Video om te uploaden");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Selekteer een video bestand");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Video bestand dient de extensie FLV te hebben");
define("_AM_XTUBE_BDELETEVIDEO", "Verwijder video");
define("_AM_XTUBE_NOVIDEO", "Geen Video");
define("_AM_XTUBE_NOIMAGE", "Geen Afbeelding");
define("_AM_XTUBE_NOSELECT", "Geen Selektie");
define("_AM_XTUBE_NOFILESELECT", "Geen Bestand Geselekteerd");
define("_AM_XTUBE_XOOPSTUBEVIDEO", "XoopsTube Video Bestand:");
define("_AM_WFL_WARNINSTALL4", "<span style='font-weight: bold;'>WAARSCHUWING:</span> <span style='text-decoration: underline;'>Map</span> %s is niet beschrijfbaar. <br />Deze map dient schrijfbaar (CHMOD 777) te zijn voor XoopsTube.");
// Uploader class
define("_AM_XTUBE_READWRITEERROR", "U hebt geen bestand om te uploaden gekozen of de server heeft niet de juist schrijf/lees bevoegdheden om dit bestand te uploaden!");
define("_AM_XTUBE_INVALIDFILESIZE", "Onjuiste Bestands Grootte");
define("_AM_XTUBE_FILENAMEEMPTY", "Bestandsnaam Is Leeg");
define("_AM_XTUBE_NOFILEUPLOAD", "Geen bestand geupload, dit is een error");
define("_AM_XTUBE_UPLOADERRORZERO", "Er was een probleem met uw upload. Error: 0");
define("_AM_XTUBE_UPLOADERRORONE", "Het bestand dat u probeert te uploaden is te groot. Error: 1");
define("_AM_XTUBE_UPLOADERRORTWO", "Het bestand dat u probeert te uploaden is te groot. Error: 2");
define("_AM_XTUBE_UPLOADERRORTHREE", "Het bestand dat u probeert te uploaden is alleen deels geupload. Error: 3");
define("_AM_XTUBE_UPLOADERRORFOUR", "Geen bestand voor uploaden geselekteerd. Error: 4");
define("_AM_XTUBE_UPLOADERRORFIVE", "Geen bestand voor uploaden geselekteerd. Error: 5");
define("_AM_XTUBE_NOUPLOADDIR", "Upload map niet gedefinieerd.");
define("_AM_XTUBE_FAILOPENDIR", "Open van map gefaald: ");
define("_AM_XTUBE_FAILOPENDIRWRITEPERM", "Open van map met schrijfrechten gefaald: ");
define("_AM_XTUBE_FILESIZEMAXSIZE", "Bestandsgrootte: %u. Maximum Grootte Toegestaan: %u");
define("_AM_XTUBE_FILESIZEMAXWIDTH", "Bestandsbreedte: %u. Maximum Breedte Toegestaan: %u");
define("_AM_XTUBE_FILESIZEMAXHEIGHT", "Bestandshoogte: %u. Maximum Hoogte Toegestaan: %u");
define("_AM_XTUBE_MIMENOTALLOW", "MIME type not toegestaan: ");
define("_AM_XTUBE_FAILEDUPLOADING", "Uploaden bestand gefaald: ");
define("_AM_XTUBE_ALREADYEXISTTRYAGAIN", " bestaat al op de server. Hernoem dit bestand en probeer het opnieuw.<br />");
define("_AM_XTUBE_ERRORSRETURNUPLOAD", "<h4>Errors Ontstaan Tijdens Uploaden</h4>");
define("_AM_XTUBE_DOESNOTEXIST", " bestaat niet!");

// Version 1.04 RC-2
define("_AM_XTUBE_CLIPFISH", "ClipFish");
define("_AM_XTUBE_LIVELEAK", "LiveLeak");
define("_AM_XTUBE_FILE", "File ");
define('_AM_XTUBE_MAKTOOB', 'Maktoob');
define('_AM_XTUBE_VEOH', 'Veoh');
define("_AM_XTUBE_INFORMATION", "Video Informatie");
define("_AM_XTUBE_VIDEO_DLVIDIDDSC", "Neem rood aangegeven gedeelte uit onderste voorbeelden over");
define("_AM_XTUBE_VIDEO_VIEWS", "Bekeken: ");
define("_AM_XTUBE_ERROR_CATISCAT", "Je kan een categorie NIET als sub-categorie van zichzelf maken!");

// Version 1.04 RC-3
define("_AM_XTUBE_MOD_VIDID", "Video id-code: ");
define("_AM_XTUBE_MOD_VIDSOURCE", "Video bron: ");
define("_AM_XTUBE_MOD_TIME", "Tijd: ");
define("_AM_XTUBE_MOD_KEYWORDS", "Keywords: ");
define("_AM_XTUBE_MOD_ITEM_TAG", "Tags: ");
define("_AM_XTUBE_MOD_PICURL", "Afbeeldings url: ");
define("_AM_XTUBE_IPAGE_SHOWLATEST", "Laat Laatste Videos zien?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL", "Hoeveel videos laten zien?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL_DSC", "0 schakelt deze optie uit.");

// Version 1.05 RC-1
define('_AM_XTUBE_VIMEO', 'Vimeo');
define('_AM_XTUBE_MEGAVIDEO', 'Megavideo');
define('_AM_XTUBE_CATTITLE', 'Categorie');

// 1.06 Beta 2

//Definitions for FileCheck
define("_AM_XTUBE_FILECHECKS",		"Information");
define("_AM_XTUBE_UPLOADMAX",		"Maximum upload size: ");
define("_AM_XTUBE_POSTMAX",			"Maximum post size: ");
define("_AM_XTUBE_UPLOADS",			"Uploads allowed: ");
define("_AM_XTUBE_UPLOAD_ON",		"On");
define("_AM_XTUBE_UPLOAD_OFF",		"Off");
define("_AM_XTUBE_GDIMGSPPRT",		"GD image lib supported: ");
define("_AM_XTUBE_GDIMGON",			"Yes");
define("_AM_XTUBE_GDIMGOFF",		"No");
define("_AM_XTUBE_GDIMGVRSN",		"GD image lib version: ");
define("_AM_XTUBE_UPDATE_SUCCESS", "Updated Successfully");

define("_AM_XTUBE_WARNING", "Warning: ");
define("_AM_XTUBE_NOT_EXISTS", "does NOT exist");
define("_AM_XTUBE_UNABLE_TO_WRITE", "I am unable to write to: ");