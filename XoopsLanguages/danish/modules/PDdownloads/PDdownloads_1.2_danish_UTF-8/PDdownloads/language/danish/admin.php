<?php
/**
 * $Id: admin.php v 1.22 02 july 2004 Liquid Exp $
 * Module: PD-Downloads
 * Version: v1.0
 * Release Date: 04. März 2005
 * Author: Power-Dreams Team
 * Licence: GNU
 */

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_PDD_BMODIFY' ) ) {

	define("_MD_PDD_NODOWNLOAD","Denne fil eksisterer ikke!");

	// Buttons
	define("_AM_PDD_BMODIFY","Rediger"); 
	define("_AM_PDD_BDELETE","Slet"); 
	define("_AM_PDD_BADD","Tilføj"); 
	define("_AM_PDD_BAPPROVE","Godkend"); 
	define("_AM_PDD_BIGNORE","Ignorer"); 
	define("_AM_PDD_BCANCEL","Fortryd"); 
	define("_AM_PDD_BSAVE","Gem"); 
	define("_AM_PDD_BRESET","Reset"); 
	define("_AM_PDD_BMOVE","Flyt Filer"); 
	define("_AM_PDD_BUPLOAD","Upload"); 
	define("_AM_PDD_BDELETEIMAGE","Slet valgte billede"); 
	define("_AM_PDD_BRETURN","Vend tilbage til hvor du kom fra!"); 
	define("_AM_PDD_DBERROR","Database Access Error: Rapporter denne fejl til Webstedet");
	//Banned Users
	define("_AM_PDD_NONBANNED","Ikke uønsket"); 
	define("_AM_PDD_BANNED","Uønsket"); 
	define("_AM_PDD_EDITBANNED","Rediger uønskede brugere");
	// Other Options
	define("_AM_PDD_TEXTOPTIONS","Tekst Valg:"); 
	define("_AM_PDD_DISABLEHTML","Deaktiver HTML-tags"); 
	define("_AM_PDD_DISABLESMILEY","Deaktiver Smilie Ikoner"); 
	define("_AM_PDD_DISABLEXCODE","Deaktiver XOOPS Koder"); 
	define("_AM_PDD_DISABLEIMAGES","Deaktiver billeder"); 
	define("_AM_PDD_DISABLEBREAK","Brug XOOPS linieskift?"); 
	define("_AM_PDD_UPLOADFILE","Fil uploadet"); 
	define("_AM_PDD_NOMENUITEMS","Ingen menupunkter i menuen");
	// Admin Bread crumb
	define("_AM_PDD_PREFS","Indstillinger"); 
	define("_AM_PDD_PERMISSIONS","Tilladelser"); 
	define("_AM_PDD_BINDEX","Indeks"); 
	define("_MI_PDD_BLOCKADMIN","Blok Indstillinger"); 
	define("_AM_PDD_BLOCKADMIN","Blokke"); 
	define("_AM_PDD_GOMODULE","Gå til modul"); 
	define("_AM_PDD_ABOUT","Om"); 
	define("_AM_PDD_UANDITOOL","Opgradering og import værktøj");
	
	// Admin Summary
	define("_AM_PDD_SCATEGORY","Kategori:"); 
	define("_AM_PDD_SFILES","Filer:"); 
	define("_AM_PDD_SNEPDILESVAL","Sendt:"); 
	define("_AM_PDD_SMODREQUEST","Redigeret:");
	// Admin Main Menu
	define("_AM_PDD_MCATEGORY","Kategori vedligehold"); 
	define("_AM_PDD_MDOWNLOADS","Opret nyt Download"); 
	define("_AM_PDD_INDEXPAGE","Indeks side vedligehold"); 
	define("_AM_PDD_MMIMETYPES","Filtype vedligehold"); 
	define("_AM_PDD_MVOTEDATA","Afstemnings Data"); 
	define("_AM_PDD_MUPLOADS","Upload billede"); 
	define("_AM_PDD_STATISTIC","Statistik");
	// Catgeory defines
	define("_AM_PDD_CCATEGORY_CREATENEW","Opret ny kategori"); 
	define("_AM_PDD_CCATEGORY_MODIFY","Rediger Kategori"); 
	define("_AM_PDD_CCATEGORY_MOVE","Flyt Kategori Filer"); 
	define("_AM_PDD_CCATEGORY_MODIFY_TITLE","Kategori Titel:"); 
	define("_AM_PDD_CCATEGORY_MODIFY_FAILED","Kunne ikke flytte filer: Kan ikke flytte til denne kategori"); 
	define("_AM_PDD_CCATEGORY_MODIFY_FAILEDT","Kunne ikke flytte filer: Kan ikke finde denne kategori"); 
	define("_AM_PDD_CCATEGORY_MODIFY_MOVED","Filer flyttet og kategori slettet"); 
	define("_AM_PDD_CCATEGORY_CREATED","Ny kategori oprettet og Database opdateret"); 
	define("_AM_PDD_CCATEGORY_MODIFIED","Valgte kategori redigeret og Database opdateret"); 
	define("_AM_PDD_CCATEGORY_DELETED","Valgte kategori slettet og Database opdateret"); 
	define("_AM_PDD_CCATEGORY_AREUSURE","ADVARSEL: Er du sikker på du vil slette denne kategori og alle tilhørende filer og kommentarer?"); 
	define("_AM_PDD_CCATEGORY_NOEXISTS","Du skal oprette en kategori, før du kan tilføje en ny fil"); 
	define("_AM_PDD_FCATEGORY_GROUPPROMPT","Kategori adgangstilladelser: <div style='padding-top: 8px;'><span style='font-weight: normal;'>Vælg brugergrupper, der vil have adgang til denne kategori. </span></div>"); 
	define("_AM_PDD_FCATEGORY_TITLE","Kategori Titel:"); 
	define("_AM_PDD_FCATEGORY_WEIGHT","Kategori Vægt:"); 
	define("_AM_PDD_FCATEGORY_SUBCATEGORY","Sæt som underkategori:"); 
	define("_AM_PDD_FCATEGORY_CIMAGE","Vælg kategoi ikon:"); 
	define("_AM_PDD_FCATEGORY_DESCRIPTION","Set Kategori Beskrivelse:");
	// Index page Defines
	define("_AM_PDD_IPAGE_UPDATED","Indeks side redigeret og Database opdateret!"); 
	define("_AM_PDD_IPAGE_INFORMATION","Indeks side Information"); 
	define("_AM_PDD_IPAGE_MODIFY","Rediger indeks side"); 
	define("_AM_PDD_IPAGE_CIMAGE","Vælg indeks ikon:");
	define("_AM_PDD_IPAGE_CTITLE","Indeks Titel:"); 
	define("_AM_PDD_IPAGE_CHEADING","Indeks Tekst:"); 
	define("_AM_PDD_IPAGE_CHEADINGA","Indeks Tekst justering:"); 
	define("_AM_PDD_IPAGE_CFOOTER","Indeks sidefod:"); 
	define("_AM_PDD_IPAGE_CFOOTERA","Indeks sidefod justering:"); 
	define("_AM_PDD_IPAGE_CLEFT","Venstrejusteret"); 
	define("_AM_PDD_IPAGE_CCENTER","Centreret"); 
	define("_AM_PDD_IPAGE_CRIGHT","Højrejusteret");
	//Permissions defines
	define("_AM_PDD_PERM_MANAGEMENT","Tilladelser"); 
	define("_AM_PDD_PERM_PERMSNOTE","<div><b>BEMÆRK:</b>Vær opmærksom på, at selvom du har indstillet korrekt visning af tilladelser her, kan en gruppe måske ikke se artikler eller blokke, hvis du ikke også give denne gruppe tilladelser til at få adgang til modulet. For at gøre dette skal du gå til <b>Systemadministraton > Grupper </b>, her skal du vælge den relevante gruppe og klikke på afkrydsningsfelterne til at give sine medlemmer adgang. </div>"); 
	define("_AM_PDD_PERM_CPERMISSIONS","Kategori-tilladelser"); 
	define("_AM_PDD_PERM_CSELECTPERMISSIONS","Vælg kategorier, som hver gruppe får lov til at se"); 
	define("_AM_PDD_PERM_CNOCATEGORY","Kan ikke indstille tilladelser: Ingen Kategorier er blevet oprettet endnu!"); 
	define("_AM_PDD_PERM_FPERMISSIONS","Fil Tilladelser"); 
	define("_AM_PDD_PERM_FNOFILES","Kan ikke indstille tilladelser: Ingen filer er blevet oprettet endnu!"); 
	define("_AM_PDD_PERM_FSELECTPERMISSIONS","Vælg de filer, hver gruppe får lov til at se");
	// Upload defines
	define("_AM_PDD_DOWN_IMAGEUPLOAD","Billede er uploadet til serveren"); 
	define("_AM_PDD_DOWN_NOIMAGEEXIST","Fejl: Ingen fil blev udvalgt til at upload. Prøv igen!"); 
	define("_AM_PDD_DOWN_IMAGEEXIST","Billedet eksisterer allerede i upload område!"); 
	define("_AM_PDD_DOWN_FILEDELETED","Filen er blevet slettet."); 
	define("_AM_PDD_DOWN_FILEERRORDELETE","Fejl ved sletning af fil: Filen blev ikke fundet på serveren."); 
	define("_AM_PDD_DOWN_NOFILEERROR","Fejl ved sletning File: Ingen filer valgt for sletning."); 
	define("_AM_PDD_DOWN_DELETEFILE","ADVARSEL: Er du sikker på du vil slette denne billedfil?"); 
	define("_AM_PDD_DOWN_IMAGEINFO","Server Status"); 
	define("_AM_PDD_DOWN_SPHPINI","<b>Oplysninger taget fra PHP ini-filen:</b>"); 
	define("_AM_PDD_DOWN_SAFEMODESTATUS","Safe Mode Status:"); 
	define("_AM_PDD_DOWN_REGISTERGLOBALS","Register Globals:"); 
	define("_AM_PDD_DOWN_SERVERUPLOADSTATUS","Server Uploads Status:"); 
	define("_AM_PDD_DOWN_MAXUPLOADSIZE","Maks Upload Størrelse tilladt:"); 
	define("_AM_PDD_DOWN_MAXPOSTSIZE","Maks Post Størrelse tilladt:"); 
	define("_AM_PDD_DOWN_MAXEXECTIME","Maxks Tid til at køre scripts:"); 
	define("_AM_PDD_DOWN_SAFEMODEPROBLEMS","(Dette kan forårsage problemer)"); 
	define("_AM_PDD_DOWN_GDLIBSTATUS","GD Library Support:"); 
	define("_AM_PDD_DOWN_GDLIBVERSION","GD Library Version:"); 
	define("_AM_PDD_DOWN_GDON","<b>Aktiveret</b> (Frimærker (Thumbnails) tilgængelig)"); 
	define("_AM_PDD_DOWN_GDOFF","<b>deaktiveret</b> (Frimærker (Thumbnails) ikke tilgængelig)"); 
	define("_AM_PDD_DOWN_OFF","<b>OFF</b>"); 
	define("_AM_PDD_DOWN_ON","<b>ON</b>"); 
	define("_AM_PDD_DOWN_CATIMAGE","Kategori Billeder"); 
	define("_AM_PDD_DOWN_SCREENSHOTS","Screenshot Billeder"); 
	define("_AM_PDD_DOWN_MAINIMAGEDIR","Mappe til billeder"); 
	define("_AM_PDD_DOWN_FCATIMAGE","Kategori billed mappe"); 
	define("_AM_PDD_DOWN_FSCREENSHOTS","Screenshot billed mappe"); 
	define("_AM_PDD_DOWN_FMAINIMAGEDIR","Hoved mappe til billeder"); 
	define("_AM_PDD_DOWN_FUPLOADIMAGETO","Upload billed:"); 
	define("_AM_PDD_DOWN_FUPLOADPATH","Upload mappe:"); 
	define("_AM_PDD_DOWN_FUPLOADURL","Upload URL:"); 
	define("_AM_PDD_DOWN_FOLDERSELECTION","Vælg Upload destination:"); 
	define("_AM_PDD_DOWN_FSHOWSELECTEDIMAGE","Vis valgte billede:"); 
	define("_AM_PDD_DOWN_FUPLOADIMAGE","Upload nyt billede til den valgte destination:");
	
	// Main Index defines
	define("_AM_PDD_MINDEX_DOWNSUMMARY","Modul Admin Resumé"); 
	define("_AM_PDD_MINDEX_PUBLISHEDDOWN","Offentliggjort Filer:"); 
	define("_AM_PDD_MINDEX_AUTOPUBLISHEDDOWN","Auto Offentliggjort Filer:"); 
	define("_AM_PDD_MINDEX_AUTOEXPIRE","Auto udløbe Filer:"); 
	define("_AM_PDD_MINDEX_EXPIRED","Udløbet Filer:"); 
	define("_AM_PDD_MINDEX_OFFLINEDOWN","Offline filer:"); 
	define("_AM_PDD_MINDEX_ID","ID"); 
	define("_AM_PDD_MINDEX_TITLE","Fil Titel"); 
	define("_AM_PDD_MINDEX_POSTER","Indsender"); 
	define("_AM_PDD_MINDEX_SUBMITTED","Indsendelses dato"); 
	define("_AM_PDD_MINDEX_ONLINESTATUS","Online Status"); 
	define("_AM_PDD_MINDEX_PUBLISHED","udgivelse"); 
	define("_AM_PDD_MINDEX_ACTION","Handling"); 
	define("_AM_PDD_MINDEX_NODOWNLOADSFOUND","MEDDELELSE: Der er ingen filer, der matcher dette kriterium"); 
	define("_AM_PDD_MINDEX_PAGE","<b>Side:<b>"); 
	define("_AM_PDD_MINDEX_PAGEINFOTXT","<ul><li>Modulets detaljer.</li><li>Du kan nemt ændre billede, logo, overskrift, sidehoved og sidefod tekst, så de passer til dit eget udseende </li> </ul> <br/> <br/> Bemærk: Det logobillede der er valgt, vil blive anvendt i hele modulet."); 
	define("_AM_PDD_MINDEX_DOWNSEC","i vores downloadsection"); 
	define("_MD_PDD_NUMBYTES","%s bytes"); 
	define("_MD_PDD_AVAILABLE"," til rådighed"); 
	define("_MD_PDD_NOTAVAILABLE","<font color=red> er ikke tilgængelige </font>"); 
	define("_MD_PDD_CREATEMANUAL","<b>BEMÆRK - Safe Mode er på </B>, du er du nødt til at oprette mappen dig selv."); 
	define("_MD_PDD_CHMODMANUAL","<b> BEMÆRK - Safe Mode er på </B>, du er du nødt til at indstille tilladelse dig selv."); 
	define("_MD_PDD_NOTWRITABLE","<font color=red> ikke skrivbar </font>"); 
	define("_MD_PDD_UPLOADPATH","%s vil blive gemt i denne mappe"); 
	define("_MD_PDD_UPLOADPATHINFO","Information om upload-mapper"); 
	define("_MD_PDD_CREATETHEDIR","Opret");  
	define("_MD_PDD_SETMPERM","Sæt tilladelse"); 
	define("_MD_PDD_DIRCREATED","Mappen blev oprettet"); 
	define("_MD_PDD_DIRNOTCREATED","Mappen kunne ikke oprettes"); 
	define("_MD_PDD_PERMSET","Permission blev sat"); 
	define("_MD_PDD_PERMNOTSET","Permission kunne ikke være indstillet"); 
	define("_AM_PDD_UPLOADS","uploads");
	// Submitted Files
	define("_AM_PDD_SUB_SUBMITTEDFILES","Indsendte Filer"); 
	define("_AM_PDD_SUB_FILESWAITINGINFO","Information om ventende Filer"); 
	define("_AM_PDD_SUB_FILESWAITINGVALIDATION","Filer der afventer validering:"); 
	define("_AM_PDD_SUB_APPROVEWAITINGFILE","<b>Godkend</b> nye filer uden validering."); 
	define("_AM_PDD_SUB_EDITWAITINGFILE","<b>Rediger</b> nye filer og godkend derefter."); 
	define("_AM_PDD_SUB_DELETEWAITINGFILE","<b>Slet</b> den nye filer."); 
	define("_AM_PDD_SUB_NOFILESWAITING","Der er ingen filer, der matcher dette kriterium"); 
	define("_AM_PDD_SUB_NEPDILECREATED","Nye Fildata oprettet og Database opdateret"); 
	define("_AM_PDD_SUB_WANTTOAPPROVE","Vil du virkelig godkende download uden at kontrollere det før?");
	// Mimetypes
	define("_AM_PDD_MIME_ID","ID"); 
	define("_AM_PDD_MIME_EXT","EXT"); 
	define("_AM_PDD_MIME_NAME","Anvendelse Type"); 
	define("_AM_PDD_MIME_ADMIN","Administrator"); 
	define("_AM_PDD_MIME_USER","Bruger");
	// Mimetype Form
	define("_AM_PDD_MIME_CREATEF","Opret Filtype"); 
	define("_AM_PDD_MIME_MODIFYF","Rediger Filtype"); 
	define("_AM_PDD_MIME_EXTF","Fil Extension:"); 
	define("_AM_PDD_MIME_NAMEF","Anvendelse Type/Navn:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Indtast anvendelse i forbindelse med denne extension.</span></div>"); 
	define("_AM_PDD_MIME_TYPEF","Filtyper:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Angiv hver filtype der er forbundet med filtypenavnet. Hver filtype skal adskilles med et mellemrum.</span></div>"); 
	define("_AM_PDD_MIME_ADMINF","Tilladte administrator filtyper"); 
	define("_AM_PDD_MIME_ADMINFINFO","<b>Filtyper, der er tilgængelige for Administrator uploads:</b>"); 
	define("_AM_PDD_MIME_USERF","Tilladte bruger filtyper"); 	
	define("_AM_PDD_MIME_USERFINFO","<b>Filtyper, der er tilgængelige for Bruger uploads:</b>"); 
	define("_AM_PDD_MIME_NOMIMEINFO","Ingen filtyper valgt."); 
	define("_AM_PDD_MIME_FINDMIMETYPE","Find nye filtyper:"); 
	define("_AM_PDD_MIME_EXTFIND","Søg filtypenavn:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Indtast filens extension som du ønsker at søge. </span></div> "); 
	define("_AM_PDD_MIME_INFOTEXT","<ul><li>Nye filtyper kan oprettes, redigeres eller slettes nemt via denne formular. </li> 
	<li>Søg efter en ny filtyper via en ekstern hjemmeside. </li> 
	<li>Vis viste filtyper for Administrator og Bruger uploads. </li> 
	<li>Skift filtype upload status.</Li></ul>");
	// Mimetype Buttons
	define("_AM_PDD_MIME_CREATE","Opret"); 
	define("_AM_PDD_MIME_CLEAR","Ryd"); 
	define("_AM_PDD_MIME_CANCEL","Fortryd"); 
	define("_AM_PDD_MIME_MODIFY","Rediger"); 
	define("_AM_PDD_MIME_DELETE","Slet"); 
	define("_AM_PDD_MIME_FINDIT","Hent extension!");
	// Mimetype Database
	define("_AM_PDD_MIME_DELETETHIS","Slet markerede filtyper?"); 
	define("_AM_PDD_MIME_MIMEDELETED","Filtype %s er blevet slettet"); 
	define("_AM_PDD_MIME_CREATED","Filtype information oprettet"); 
	define("_AM_PDD_MIME_MODIFIED","Filtype information redigeret");
	// Vote Information
	define("_AM_PDD_VOTE_RATINGINFOMATION","Afstemninger"); 
	define("_AM_PDD_VOTE_TOTALVOTES","Stemmer i alt:"); 
	define("_AM_PDD_VOTE_REGUSERVOTES","Registreret bruger afstemninger: %s"); 
	define("_AM_PDD_VOTE_ANONUSERVOTES","Anonyme bruger afstemninger: %s"); 
	define("_AM_PDD_VOTE_USER","Bruger"); 
	define("_AM_PDD_VOTE_IP","IP adresse"); 
	define("_AM_PDD_VOTE_USERAVG","Gennemsnitlig bruger bedømmelse"); 
	define("_AM_PDD_VOTE_TOTALRATE","Samlet bedømmelse"); 
	define("_AM_PDD_VOTE_DATE","Sendt"); 
	define("_AM_PDD_VOTE_RATING","Bedømmelse"); 
	define("_AM_PDD_VOTE_NOREGVOTES","Ingen registreret bruger afstemninger"); 
	define("_AM_PDD_VOTE_NOUNREGVOTES","Ingen uregistreret bruger afstemninger"); 
	define("_AM_PDD_VOTE_VOTEDELETED","Afstemnings data slettes."); 
	define("_AM_PDD_VOTE_ID","ID"); 
	define("_AM_PDD_VOTE_FILETITLE","Fil titel"); 
	define("_AM_PDD_VOTE_DISPLAYVOTES","Vis stemme information"); 
	define("_AM_PDD_VOTE_NOVOTES","Ingen bruger Afstemninger at vise"); 
	define("_AM_PDD_VOTE_DELETE","Ingen bruger Afstemninger at vise"); 
	define("_AM_PDD_VOTE_DELETEDSC","<b>Sletter</b> den valgte stemme fra databasen."); 
	define("_AM_PDD_VOTEDELETED","Afstemningen blev slettet med succes.");
	// Modifications
	define("_AM_PDD_MOD_TOTMODREQUESTS","Totale antal ændringsønsker:"); 
	define("_AM_PDD_MOD_MODREQUESTS","Redigerede Filer"); 
	define("_AM_PDD_MOD_MODREQUESTSINFO","Ændrede filer"); 
	define("_AM_PDD_MOD_MODID","ID"); 
	define("_AM_PDD_MOD_MODTITLE","Titel"); 
	define("_AM_PDD_MOD_MODPOSTER","Original insender:"); 
	define("_AM_PDD_MOD_DATE","Sendt"); 
	define("_AM_PDD_MOD_NOMODREQUEST","Der er ingen anmodninger, der matcher dette kriterium"); 
	define("_AM_PDD_MOD_TITLE","Download Titel:"); 
	define("_AM_PDD_MOD_LID","Download ID:"); 
	define("_AM_PDD_MOD_CID","Kategori:"); 
	define("_AM_PDD_MOD_URL","Download Url:"); 
	define("_AM_PDD_MOD_SIZE","Download Størrelse:"); 
	define("_AM_PDD_MOD_PUBLISHER","Udgiver:"); 
	define("_AM_PDD_MOD_FEATURES","Nøglefunktioner:"); 
	define("_AM_PDD_MOD_FORUMID","Forum:"); 
	define("_AM_PDD_MOD_DHISTORY","Historie:"); 
	define("_AM_PDD_MOD_SCREENSHOT","Screenshot Billede:"); 
	define("_AM_PDD_MOD_HOMEPAGE","Hjemmeside:"); 
	define("_AM_PDD_MOD_HOMEPAGETITLE","Hjemmeside Titel:"); 
	define("_AM_PDD_MOD_VERSION","Version:"); 
	define("_AM_PDD_MOD_SHOTIMAGE","Screenshot Billede:"); 
	define("_AM_PDD_MOD_FILESIZE","Filstørrelse:"); 
	define("_AM_PDD_MOD_PLATFORM","Software Platform:"); 
	define("_AM_PDD_MOD_DESCRIPTION","Beskrivelse:"); 
	define("_AM_PDD_MOD_REQUIREMENTS","Krav:"); 
	define("_AM_PDD_MOD_MODIFYSUBMITTER","afsender:"); 
	define("_AM_PDD_MOD_MODIFYSUBMIT","afsender"); 
	define("_AM_PDD_MOD_PROPOSED","Foreslået Download Detaljer"); 
	define("_AM_PDD_MOD_ORIGINAL","Original Download Detaljer"); 
	define("_AM_PDD_MOD_REQDELETED","Anmodning om ændring fjernet fra databasen"); 
	define("_AM_PDD_MOD_REQUPDATED","Valgte download er redigeret og Database opdateret"); 
	define("_AM_PDD_MOD_VIEW","Vis");
	//File management
	define("_AM_PDD_FILE_ID","Fil ID:"); 
	define("_AM_PDD_FILE_IP","Uploaders IP-adresse:"); 
	define("_AM_PDD_FILE_ALLOWEDAMIME","<div style='padding-top: 4px; padding-bottom: 4px;'><b>Tilladte Administrort Filtyper</b>:</div>"); 
	define("_AM_PDD_FILE_MODIFYFILE","Rediger Filoplysninger"); 
	define("_AM_PDD_FILE_CREATENEPDILE","Opret ny Fil"); 
	define("_AM_PDD_FILE_TITLE","Fil Titel:"); 
	define("_AM_PDD_FILE_DLURL","Fil URL:"); 
	define("_AM_PDD_FILE_MIRRORURL","Fil Mirror:"); 
	define("_AM_PDD_FILE_DESCRIPTION","Fil Beskrivelse:"); 
	define("_AM_PDD_FILE_DUPLOAD","Upload Fil:"); 
	define("_AM_PDD_FILE_DUPLOADSIZE","<br/><br/> Tilladt Filstørrelse:"); 
	define("_AM_PDD_FILE_CATEGORY","Vælg kategori:"); 	
	define("_AM_PDD_FILE_HOMEPAGETITLE","Hjemmeside Titel:"); 
	define("_AM_PDD_FILE_HOMEPAGE","Hjemmeside:"); 
	define("_AM_PDD_FILE_SIZE","Filstørrelse i KB:"); 
	define("_AM_PDD_FILE_VERSION","File Version:"); 
	define("_AM_PDD_FILE_PUBLISHER","File Udgiver:"); 
	define("_AM_PDD_FILE_PLATFORM","Software Platform:"); 
	define("_AM_PDD_FILE_KEYFEATURES","Nøglefunktioner: <br/><br/><span style='font-weight: normal;'>Adskil hver mulighed med en <b>#</ b></span>" ); 
	define("_AM_PDD_FILE_DELEDITMESS","Slet Brudte Rapport? <br/><br/><span style='font-weight: normal;'>Når du vælger <b>Ja</b> Den brudte rapport vil automatisk slettes, og du bekræfte, at downloade nu virker igen. </span> "); 
	define("_AM_PDD_FILE_HISTORY","Download historie redigering: <br/><br/><span style='font-weight: normal;'>Tilføj ny Download historie og kun bruge dette felt til at hvis du har brug for at redigere den forrige historie . </ span> "); 
	define("_AM_PDD_FILE_HISTORYD","Tilføj ny Download Historie: <br/><br/><span style='font-weight: normal;'> versionsnummeret og dato vil blive tilføjet automatisk </span>"); 
	define("_AM_PDD_FILE_HISTORYVERS","<b>Version:</ b>"); 
	define("_AM_PDD_FILE_HISTORDATE","<b>Opdateret:</b>"); 
	define("_AM_PDD_FILE_FILESSTATUS","Set Download offline?<br/><br/><span style='font-weight: normal;'>Det vil ikke være muligt at downloade for alle brugere. </ span>"); 
	define("_AM_PDD_FILE_SETASUPDATED","Set download status som ajourført? <br/><br/><span style='font-weight: normal;'>Download vil vise opdaterede ikon.</span>"); 
	define("_AM_PDD_FILE_RESETCALLS","Reset download-tæller?"); 
	define("_AM_PDD_FILE_SHOTIMAGE","Vælg Screenshot Billede:"); 
	define("_AM_PDD_FILE_DISCUSSINFORUM","Tilføj diskussion i dette forum?");
	define("_AM_PDD_FILE_PUBLISHDATE","Filens udgivelses dato:");
	define("_AM_PDD_FILE_EXPIREDATE","Filens udløbs dato:");
	define("_AM_PDD_FILE_CLEARPUBLISHDATE","<br/><br/>Fjern udgivelses dato::");
	define("_AM_PDD_FILE_CLEAREXPIREDATE","<br/><br/>Fjern udløbs dato:");
	define("_AM_PDD_FILE_PUBLISHDATESET","Udgiv dato:"); 
	define("_AM_PDD_FILE_SETDATETIMEPUBLISH","Indstil dato/klokkeslæt for udgivelse"); 
	define("_AM_PDD_FILE_SETDATETIMEEXPIRE","Indstil dato/klokkeslæt for udløb");
	define("_AM_PDD_FILE_SETPUBLISHDATE","<b>Angiv Udgivelses dato: </b>"); 
	define("_AM_PDD_FILE_SETNEWPUBLISHDATE","<b>fastsætte ny udgivelses dato: </b><br/>udgivelse:"); 
	define("_AM_PDD_FILE_SETPUBDATESETS","<b>Udgiv fastsat dato: </b><br/>offentliggør på Dato:"); 
	define("_AM_PDD_FILE_EXPIREDATESET","udløbsdato sæt:"); 
	define("_AM_PDD_FILE_SETEXPIREDATE","<b>Angiv udløbsdato: </b>");
	define("_AM_PDD_FILE_MUSTBEVALID","Screenshot billedet skal være en gyldig billedfil i %s mappe (f.eks shot.gif). Lad det stå tomt hvis der ikke er en billedfil."); 
	define("_AM_PDD_FILE_EDITAPPROVE","Godkend download:"); 
	define("_AM_PDD_FILE_NEPDILEUPLOAD","Ny fil oprettet og Database opdateret"); 
	define("_AM_PDD_FILE_FILEMODIFIEDUPDATE","Valgte fil redigeret og Database opdateret");
	define("_AM_PDD_FILE_REALLYDELETEDTHIS","Vil du slette den valgte fil?"); 
	define("_AM_PDD_FILE_FILEWASDELETED","Fil %s blev fjernet fra databasen!"); 
	define("_AM_PDD_FILE_USE_UPLOAD_TITLE","Brug upload filnavn for filen titel."); 
	define("_AM_PDD_FILE_FILEAPPROVED","Fil godkendt og Database opdateret"); 	
	define("_AM_PDD_FILE_CREATENEWSSTORY","<b>Opret nyhedshistorie Fra Download </b>"); 
	define("_AM_PDD_FILE_SUBMITNEWS","Indsend ny fil som Nyheds-element?"); 
	define("_AM_PDD_FILE_NEWSCATEGORY","Vælg nyheds kategori for at indsende Nyhed:"); 
	define("_AM_PDD_FILE_NEWSTITLE","Nyhedstitel: <div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'> Efterlad blank for at bruge Filens titel </span></div>"); 
	define("_AM_PDD_ONETHING","Det er kun muligt at angive én nyhed i et nyhedsmodul på samme tid!"); 
	define("_AM_PDD_FILE_SELCAT","Du skal vælge en kategori!"); 
	define("_AM_PDD_FILE_GROUPPROMPT","Download adgangstilladelser: <div style='padding-top: 8px;'><span style='font-weight: normal;'>Vælg brugergrupper, der vil have adgang til dette download.</span></div>");


	// Broken downloads defines
	define("_AM_PDD_SBROKENSUBMIT","Brudte filer:"); 
	define("_AM_PDD_BROKEN_FILE","Rapporter brudte filer"); 
	define("_AM_PDD_BROKEN_FILEIGNORED","Brudte filer rapport ignoreret og fjernet fra databasen!"); 
	define("_AM_PDD_BROKEN_NOWACK","Anerkendte status ændres, og databasen opdateres!"); 
	define("_AM_PDD_BROKEN_NOWCON","Status er blevet indstillet til at *Igang værende*, vil du blive videresendt til rediger-download-siden."); 
	define("_AM_PDD_BROKEN_REPORTINFO","Brudte filer indberettede oplysninger"); 
	define("_AM_PDD_BROKEN_REPORTSNO","Brudte filer rapporter venter:"); 
	define("_AM_PDD_BROKEN_IGNOREDESC","<b>Ignorerer</b> rapporterne og kun sletter brudte filer rapport."); 
	define("_AM_PDD_BROKEN_DELETEDESC","<b>Sletter</b> de rapporterede brudte data og filrapporter om filen."); 
	define("_AM_PDD_BROKEN_EDITDESC","<b>Rediger</b> download for at løse problemet."); 
	define("_AM_PDD_BROKEN_ACKDESC","<b>Igang værende</b> download er blevet redigeret, men det er ikke klart, om det virkelig fungerer."); 
	define("_AM_PDD_BROKEN_CONFIRMDESC","<b>Opretholdt</b> Indstil bekræftet tilstand af brudte fil rapport."); 
	define("_AM_PDD_BROKEN_ID","ID"); 
	define("_AM_PDD_BROKEN_TITLE","Titel"); 
	define("_AM_PDD_BROKEN_REPORTER","Reporter"); 
	define("_AM_PDD_BROKEN_FILESUBMITTER","afsender"); 
	define("_AM_PDD_BROKEN_DATESUBMITTED","Indsendt Dato"); 
	define("_AM_PDD_BROKEN_ACTION","Handling"); 
	define("_AM_PDD_BROKEN_NOFILEMATCH","Der er ingen brudte fil rapporter, der matcher dette kriterium"); 
	define("_AM_PDD_BROKENFILEDELETED","Download fjernet fra databasen og brudt fil rapporten fjernes");
	// About defines
	define("_AM_PDD_BY","af");
	// Upgrade and Import Tool defines
	define("_UI_PDD_INFO","Information"); 
	define("_UI_PDD_INFOTEXT","<b><u>Opdater:</u></b><ul><li>Data fra det markerede modul vil blive importeret i dette modul. </li> 
	<li>Det valgte modul vil automatisk blive deaktiveret og afinstallet.</li><li>Efter det behøver du kun at slette det valgte modul fra din webserver. </li></ul><br> 
	<b><u>IMPORT:</u></b><ul><li>Data fra det markerede modul vil blive importeret i dette modul. </li><li>Ingen ændringer vil blive foretaget på det valgte modul og du kan bruge det samtidig. </li></ul><br> 
	<b>Du bør kun bruge Upgrade-Funktion, når du 100% ved, hvad du laver!</b>"); 
	define("_UI_PDD_SELMODULE","Modul udvælgelse"); 
	define("_UI_PDD_CHOOSEMODULE","Vælg et modul: <div style='padding-top: 8px;'><span style='font-weight: normal;'> Vælg det modul, du ønsker at opgradere eller importere data fra. </span></div>"); 
	define("_UI_PDD_ACTUALMODUL","Data vil blive gemt i dette modul:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Data fra ovenstående valgte modul vil blive opbevaret i dette modul. </span></div>"); 
	define("_UI_PDD_UPGRADE","Opgrader"); 
	define("_UI_PDD_IMPORT","Importer"); 
	define("_UI_PDD_SUREUPGADE","OBS: Mener du virkelig at du vil opgradere? <br> Det valgte modul vil blive afinstallet og alle lagrede data fra den valgte modul vil blive slettet."); 
	define("_UI_PDD_SUREIMPORT","OBS: Alle gemte data fra dette modul vil blive slettet."); 
	define("_UI_PDD_PART","arbejder ..."); 
	define("_UI_PDD_OPTIONS","Yderligere valgmuligheder:"); 
	define("_UI_PDD_WANTCOM","Flyt også kommentarer"); 
	define("_UI_PDD_WANTNOT","Flyt også anmeldelser"); 
	define("_UI_PDD_WANTPERM","Flyt også tilladelses indstillinger <br><small>(virker kun med WF-eller PD-Downloads)</small>");
	//block defines
	define("_AM_PDD_BADMIN","Blok Administration"); 
	define("_AM_PDD_BLKDESC","Beskrivelse"); 
	define("_AM_PDD_TITLE","Titel"); 
	define("_AM_PDD_SIDE","Justering"); 
	define("_AM_PDD_WEIGHT","Vægt"); 
	define("_AM_PDD_VISIBLE","Synlig"); 
	define("_AM_PDD_ACTION","Handling"); 
	define("_AM_PDD_SBLEFT","Venstre"); 
	define("_AM_PDD_SBRIGHT","Højre"); 
	define("_AM_PDD_CBLEFT","Center Venstre"); 
	define("_AM_PDD_CBRIGHT","Center Højre"); 
	define("_AM_PDD_CBCENTER","Center Midt"); 
	define("_AM_PDD_ACTIVERIGHTS","Aktive Rettigheder"); 
	define("_AM_PDD_ACCESSRIGHTS","Adgangsrettighed");
	//image admin icon
	define("_AM_PDD_ICO_EDIT","Rediger dette emne"); 
	define("_AM_PDD_ICO_DELETE","Slet dette emne"); 
	define("_AM_PDD_ICO_ONLINE","Online"); 
	define("_AM_PDD_ICO_OFFLINE","offline"); 
	define("_AM_PDD_ICO_APPROVED","godkendt"); 
	define("_AM_PDD_ICO_NOTAPPROVED","ikke godkendt");
	define("_AM_PDD_ICO_LINK","Related Link"); 
	define("_AM_PDD_ICO_URL","Tilføj relaterede URL"); 
	define("_AM_PDD_ICO_ADD","Tilføj"); 
	define("_AM_PDD_ICO_APPROVE","Godkend"); 
	define("_AM_PDD_ICO_STATS","Statistik");
	define("_AM_PDD_ICO_IGNORE","Ignorer"); 
	define("_AM_PDD_ICO_ACK","Brudte fil Rapporter anerkendt"); 
	define("_AM_PDD_ICO_REPORT","Anerkende brudte fil rapport?"); 
	define("_AM_PDD_ICO_CONFIRM","Brudte fil rapport bekræftede"); 
	define("_AM_PDD_ICO_CONBROKEN","Bekræft brudte fil rapport?");
	
	// Statistic defines
	define("_AM_PDD_VIEW","Kald"); 
	define("_AM_PDD_ENTRIES","Entries"); 
	define("_AM_PDD_EXPIRED","Udløbet Entries"); 
	define("_AM_PDD_USENDFROM","Unikt creator"); 
	define("_AM_PDD_TOTAL","alt"); 
	define("_AM_PDD_DLSTAT","Downloads statistikker"); 
	define("_AM_PDD_DLSTAT1","Flest kaldte downloads"); 
	define("_AM_PDD_DLSTAT2","Mindre kaldte downloads"); 
	define("_AM_PDD_DLSTAT3","Populære downloads"); 
	define("_AM_PDD_CREATERSTAT","Skabere statistikker"); 
	define("_AM_PDD_CREATERSTAT1","De fleste kaldte skabere"); 
	define("_AM_PDD_CREATERSTAT2","Populære skabere"); 
	define("_AM_PDD_CREATERSTAT3","Største bidragsydere"); 
	define("_AM_PDD_CREATERSTAT4","Antal poster"); 
}
?>
