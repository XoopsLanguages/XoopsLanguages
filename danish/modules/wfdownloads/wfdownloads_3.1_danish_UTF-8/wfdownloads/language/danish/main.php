<?php 
/**
 * $Id: main.php,v 1.12 2007/04/22 20:32:00 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */
 
//Todo - Still to remove redundat defines from this area. 
define('_MD_WFD_NEEDLOGINVIEW','Du skal logge ind først!');
define('_MD_WFD_NODOWNLOAD','Filen eksisterer ikke!');
define('_MD_WFD_DOWNLOADMINPOSTS','Du skal øge dit antal af indlæg<br />Før du kan downloade filer');
define('_MD_WFD_UPLOADMINPOSTS','Du skal øge dit antal af indlæg<br />Før du kan uploade filer');

define('_MD_WFD_SUBCATLISTING','Kategori liste');
define('_MD_WFD_ISADMINNOTICE','Webmaster: Der er et problem med dette billed.'); 
define('_MD_WFD_THANKSFORINFO','Tak for indsendelsen. Du vil få besked når og hvis det godkendes af webmaster.');
define('_MD_WFD_ISAPPROVED','Tak for dit indsendelsen. Dit ønske er godkendt og vil nu blive vist i listen.');
define('_MD_WFD_THANKSFORHELP','Tak for din hjælp med vedligeholdelsen af dennes sides integritet.');
define('_MD_WFD_FORSECURITY','Af sikkerhedsårsager vil dit brugernavn og din IP adresse blive logget.');
define('_MD_WFD_NOPERMISETOLINK','Denne fil tilhører ikke den side du kom fra <br /><br />Send venligst en email til webmaster fra den side du kom fra med denne besked:<br /><b>Til dig der leecher fra andre sider: !!</b> <br /><br /><b>Definition på en leecher:</b> En person der er for doven til at linke fra hans egen server eller stjæler andres arbejde og får det til at se ud som hans eget arbejde. <br /><br />  Din IP adresse <b>er blevet logget!</b>.');
define('_MD_WFD_SUMMARY','Resumé<br /><br /><span style=\'font-weight: normal;\'>Du kan lade denne stå blank<br />Et resumé vil blive oprettet automatisk, hvis den er tom</span>');
define('_MD_WFD_DESCRIPTION','Beskrivelse');
define('_MD_WFD_SUBMITCATHEAD','Indsend download formular.');
define('_MD_WFD_MAIN','HJEM');
define('_MD_WFD_POPULAR','Populær');
define('_MD_WFD_NEWTHISWEEK','Ny i denne uge');
define('_MD_WFD_UPTHISWEEK','Opdateret i denne uge');
define('_MD_WFD_POPULARITYLTOM','Popularitet (færrest til flest hits)');
define('_MD_WFD_POPULARITYMTOL','Popularitet (flest til færrest hits)');
define('_MD_WFD_TITLEATOZ','Titel (A til Z)');
define('_MD_WFD_TITLEZTOA','Titel (Z til A)');
define('_MD_WFD_DATEOLD','Dato (Ældste filer først)');
define('_MD_WFD_DATENEW','Dato (Nyeste filer først)');
define('_MD_WFD_RATINGLTOH','Bedømmelse (Laveste score til højeste score)');
define('_MD_WFD_RATINGHTOL','Bedømmelse (Højeste score til laveste score)');
define('_MD_WFD_DESCRIPTIONC','Beskrivelse:');
define('_MD_WFD_CATEGORYC','Kategori:');
define('_MD_WFD_VERSION','Version');
define('_MD_WFD_SUBMITDATE','Udgivet');
define('_MD_WFD_DLTIMES','Downloaded %s gange');
define('_MD_WFD_FILESIZE','Fil størrelse');
define('_MD_WFD_SUPPORTEDPLAT','Platform');
define('_MD_WFD_HOMEPAGE','Hjemmeside');
define('_MD_WFD_PUBLISHERC','Indsender:');
define('_MD_WFD_RATINGC','Bedømmelse:');
define('_MD_WFD_ONEVOTE','1 Stemme');
define('_MD_WFD_NUMVOTES','%s Stemmer');
define('_MD_WFD_RATETHISFILE','Bedøm');
define('_MD_WFD_REVIEWTHISFILE','Bedøm');
define('_MD_WFD_REVIEWS','Bedømmelser');
define('_MD_WFD_DOWNLOADHITS','Downloads');
define('_MD_WFD_MODIFY','Redigér');
define('_MD_WFD_REPORTBROKEN','Informér om brudte downloads');
define('_MD_WFD_BROKENREPORT','Informér om brudte ressourcer');
define('_MD_WFD_SUBMITBROKEN','Indsend');
define('_MD_WFD_BEFORESUBMIT','Før du indsender en brudt ressource, check venligst om den aktuelle kilde til filen stadig er der og at hjemmesiden ikke er midlertidig nede.');
define('_MD_WFD_TELLAFRIEND','Anbefal');
define('_MD_WFD_EDIT','Redigér');
define('_MD_WFD_THEREARE','Der er <b>%s</b> <i>kategorier</i> og <b>%s</b> <i>Downloads</i> listet');
define('_MD_WFD_THEREIS','Der er <b>%s</b> <i>kategorier</i> og <b>%s</b> <i>Downloads</i> listet');
define('_MD_WFD_LATESTLIST','Seneste');
define('_MD_WFD_FILETITLE','Download titel:');
define('_MD_WFD_DLURL','Ekstern URL:');
define('_MD_WFD_UPLOAD_FILENAME','Lokalt filnavn');
define('_MD_WFD_UPLOAD_FILETYPE','Fil type:');

define('_MD_WFD_HOMEPAGEC','Hjemmeside:');
define('_MD_WFD_UPLOAD_FILEC','Upload fil:');
define('_MD_WFD_VERSIONC','Version:');
define('_MD_WFD_FILESIZEC','Fil størrelse:');
define('_MD_WFD_NUMBYTES','%s bytes');
define('_MD_WFD_PLATFORMC','Platform: ');
define('_MD_WFD_PRICE','Pris');
define('_MD_WFD_LIMITS','Begrænsninger');
define('_MD_WFD_DOWNLICENSE','Licens');
define('_MD_WFD_NOTSPECIFIED','Ikke specificeret');
define('_MD_WFD_MIRRORSITE','Download Mirror');
define('_MD_WFD_MIRROR','Mirror website');
define('_MD_WFD_PUBLISHER','Indsender');
define('_MD_WFD_UPDATEDON','Opdateret den');
define('_MD_WFD_PRICEFREE','Gratis');
define('_MD_WFD_VIEWDETAILS','Vis fulde detaljer');
define('_MD_WFD_OPTIONS','Muligheder:');
define('_MD_WFD_NOTIFYAPPROVE','Informér mig når denne fil er godkendt');
define('_MD_WFD_VOTEAPPRE','Din stemme er værdsat');
define('_MD_WFD_THANKYOU','Tak for at du tog dig tid til at stemme her på %s'); // %s is your site name
define('_MD_WFD_VOTEONCE','Vær venlig ikke at strem på den samme ressource mere end én gang');
define('_MD_WFD_RATINGSCALE','Skalaen er fra 1-10. 1 er lavest og 10 er højest');
define('_MD_WFD_BEOBJECTIVE','Vær objektiv, hvis alle giver 1 eller 10 er det ikke særlig brugbart');
define('_MD_WFD_DONOTVOTE','Du kan ikke stemme på egen ressourcer');
define('_MD_WFD_RATEIT','Bedøm dette!');
define('_MD_WFD_INTFILEFOUND','Her er en god fil %s'); // %s is your site name
define('_MD_WFD_RANK','Rang');
define('_MD_WFD_CATEGORY','Kategori');
define('_MD_WFD_HITS','Hits');
define('_MD_WFD_RATING','Bedømmelse');
define('_MD_WFD_VOTE','Stem');
define('_MD_WFD_SORTBY','Sortér efter:');
define('_MD_WFD_TITLE','Titel');
define('_MD_WFD_DATE','Dato');
define('_MD_WFD_POPULARITY','Popularitet');
define('_MD_WFD_TOPRATED','Bedømmelse');
define('_MD_WFD_CURSORTBY','Er nu sorteret efter: %s');
define('_MD_WFD_CANCEL','Fortryd');
define('_MD_WFD_ALREADYREPORTED','Du har allerede anmeldt denne ressource som brudt.');
define('_MD_WFD_MUSTREGFIRST','Desværre. Du har ikke rettigheder til denne handling.<br />Registrer dig som bruger eller log ind.');
define('_MD_WFD_NORATING','Ingen bedømmelse valgt.');
define('_MD_WFD_CANTVOTEOWN','Du kan ikke stemme på en ressource du har indsendt.<br />Alle stemmer logges og kontroleres.');
define('_MD_WFD_SUBMITDOWNLOAD','Indsend download');
define('_MD_WFD_SUB_SNEWMNAMEDESC','<ul><li>Alle nye downloads\'s er  genstand for godkendelse og det kan tage nogen tid før de kan ses i listen.</li><li>Vi forebeholder os ret til at afvise et hvert indsendt download eller ændre indholdet uden godkendelse.</li></ul>');
define('_MD_WFD_MAINLISTING','Hoved kategori liste');
define('_MD_WFD_LASTWEEK','Sidste uge');
define('_MD_WFD_LAST30DAYS','Sidse 30 dage');
define('_MD_WFD_1WEEK','1 Uge');
define('_MD_WFD_2WEEKS','2 Uger');
define('_MD_WFD_30DAYS','30 Dage');
define('_MD_WFD_SHOW','Vis ');
define('_MD_WFD_DAYS','dage');
define('_MD_WFD_NEWDOWNLOADS','Nye downloads');
define('_MD_WFD_TOTALNEWDOWNLOADS','Totalt antal nye downloads');
define('_MD_WFD_DTOTALFORLAST','Totalt antal nye downloads for de sidste');
define('_MD_WFD_AGREE','Jeg er ening');
define('_MD_WFD_DOYOUAGREE','Er du ening i ovenstående betingelser?');
define('_MD_WFD_DISCLAIMERAGREEMENT','Ansvarsfraskrivelse');
define('_MD_WFD_DUPLOADSCRSHOT','Upload screenshot billed:');
define('_MD_WFD_RESOURCEID','Ressource  id#: ');
define('_MD_WFD_REPORTER','Oprindelig reporter');
define('_MD_WFD_DATEREPORTED','Raporteret den: ');
define('_MD_WFD_RESOURCEREPORTED','Ressourcen rapporteret som brudt.');
define('_MD_WFD_BROWSETOTOPIC','<b>Browse Downloads efter alfabetisk rækkefølge</b>');
define('_MD_WFD_WEBMASTERACKNOW','Rapport over brudte ressourcer: ');
define('_MD_WFD_WEBMASTERCONFIRM','Rapport over brudt ressource godkendt');
define('_MD_WFD_DELETE','Slet');
define('_MD_WFD_DISPLAYING','Vis efter');
define('_MD_WFD_LEGENDTEXTNEW','Nye i dag');
define('_MD_WFD_LEGENDTEXTNEWTHREE','Nye sidste 3 dage');
define('_MD_WFD_LEGENDTEXTTHISWEEK','Nye denne uge');
define('_MD_WFD_LEGENDTEXTNEWLAST','Over 1 uge');
define('_MD_WFD_THISFILEDOESNOTEXIST','Fejl: Filen eksisterer ikke.');
define('_MD_WFD_BROKENREPORTED','Brudt fil rapporteret.');
define('_MD_WFD_LEGENDTEXTRSS','RSS Feeds');
define('_MD_WFD_LEGENDTEXTCATRSS','RSS kategori Feed');

define('_MD_WFD_BYTES',' B');
define('_MD_WFD_KILOBYTES',' Kb');
define('_MD_WFD_MEGABYTES',' Mb');
define('_MD_WFD_GIGABYTES',' Gb');
define('_MD_WFD_TERRABYTES',' Tb');


// visit
define('_MD_WFD_DOWNINPROGRESS','Download i gang');
define('_MD_WFD_DOWNSTARTINSEC','Dit download skulle starte om 3 sekunder...<b>vent venligst</b>');
define('_MD_WFD_DOWNNOTSTART','Hvis dit download ikke starter, ');
define('_MD_WFD_CLICKHERE','Klik her!');
define('_MD_WFD_BROKENFILE','Brudt fil');
define('_MD_WFD_PLEASEREPORT','Vær venlig at rapporterer denne brudte fil til webmaster,');
// Reviews
define('_MD_WFD_REV_TITLE','Bedømmelse titel:');
define('_MD_WFD_REV_RATING','Bedømmelse rang:');
define('_MD_WFD_REV_DESCRIPTION','Bedømmelse');
define('_MD_WFD_REV_SUBMITREV','Indsend bedømmelse');
define('_MD_WFD_ERROR_CREATEREVIEW','Fejl ved oprettelse af bedømmelsen');

define('_MD_WFD_REV_SNEWMNAMEDESC',' 
Venligst udfyld formularen herunder og vi vil tilføje din bedømmelse så snart vi kan.<br /><br />
Tak fordi du tog dig tid til at give din mening til kende - det vil hjælpe andre bruger i deres valg.<br /><br />Alle bedømmelser gennemlæses af webmaster før de offentliggøres på siden.');
define('_MD_WFD_ISNOTAPPROVED','Dit indlæg skal godkendes af ordstyrer først');
define('_MD_WFD_LICENCEC','Software Licens:');
define('_MD_WFD_LIMITATIONS','Software begrænsninger:');
define('_MD_WFD_KEYFEATURESC','Væsentlige muligheder:<br /><br /><span style=\'font-weight: normal;\'>Adskil hver mulighed med |</span>');
define('_MD_WFD_REQUIREMENTSC','System behov:<br /><br /><span style=\'font-weight: normal;\'>Adskil hvert behov med |</span>');
define('_MD_WFD_HISTORYC','Download historie');
define('_MD_WFD_HISTORYD','Tilføj ny download historie:<br /><br /><span style=\'font-weight: normal;\'>Datoen for indsendelse vil automatisk blive tilføjet til denne.</span>');
define('_MD_WFD_HOMEPAGETITLEC','Hjemmeside titel:');
define('_MD_WFD_REQUIREMENTS','System behov:');
define('_MD_WFD_FEATURES','Egenskaber:');
define('_MD_WFD_HISTORY','Download Historie:');
define('_MD_WFD_PRICEC','Pris:');
define('_MD_WFD_SCREENSHOT','Screenshot 1:');
define('_MD_WFD_SCREENSHOT2','Screenshot 2:');
define('_MD_WFD_SCREENSHOT3','Screenshot 3:');
define('_MD_WFD_SCREENSHOT4','Screenshot 4:');
define('_MD_WFD_SCREENSHOTCLICK','Vil hele billedet');
define('_MD_WFD_OTHERBYUID','Andre filer af:');
define('_MD_WFD_DOWNTIMES','Antal downloads');
define('_MD_WFD_MAINTOTAL','Total antal filer.');
define('_MD_WFD_DOWNLOADNOW','Download Nu');
define('_MD_WFD_PAGES','<b>Sider</b>');
define('_MD_WFD_REVIEWER','Anmelder');
define('_MD_WFD_RATEDRESOURCE','Bedøm ressource');
define('_MD_WFD_SUBMITTER','Indsender');
define('_MD_WFD_REVIEWTITLE','Bruger bedømmelser');
define('_MD_WFD_REVIEWTOTAL','<b>Antal bedømmelser:</b> %s');
define('_MD_WFD_USERREVIEWSTITLE','Bruger bedømmelser');
define('_MD_WFD_USERREVIEWS','Læs bruger bedømmelser på %s');
define('_MD_WFD_NOUSERREVIEWS','Vær den første person til at bedømme %s');
define('_MD_WFD_ERROR','Fejl ved opdatering af databasen: Informationer ikke gemt');
define('_MD_WFD_COPYRIGHT','copyright');
define('_MD_WFD_INFORUM','Diskutér i forum');

//added frankblack

//submit.php
define('_MD_WFD_NOTALLOWESTOSUBMIT','Du har ikke rettigheder til at indsende filer.');
define('_MD_WFD_INFONOSAVEDB','Informationerne er ikke gemt i databasen: <br /><br />');
define('_MD_WFD_NOTALLOWEDTOMOD','Du har ikke rettigheder til at redigerer dette download');

//review.php
define('_MD_WFD_ERROR_CREATCHANNEL','Opret kanal først');
define('_MD_WFD_REVIEW_CATPATH','Kategori sti:');
define('_MD_WFD_ADDREVIEW','Tilføj bedømmelse');

//
define('_MD_WFD_NEWLAST','Nye indsendt før sidste uge');
define('_MD_WFD_NEWTHIS','Nye indsendt i denne uge');
define('_MD_WFD_THREE','Nye indsendt de sidste 3 dage');
define('_MD_WFD_TODAY','Nye indsendt i dag');
define('_MD_WFD_NO_FILES','Ingen filer endnu');

//mirror.php
define('_MD_WFD_MIRROR_AVAILABLE','Mirrors tilgængelige:');
define('_MD_WFD_MIRROR_CATPATH','Kategori sti:');
define('_MD_WFD_MIRROR_FILENAME','Filnavn:');
define('_MD_WFD_DOWNLOADMIRRORS','Download Mirrors');
define('_MD_WFD_MIRROR_NOTALLOWESTOSUBMIT','Du har ikke rettigheder til at tilmelde mirrors');
define('_MD_WFD_MIRRORS','Download Mirrors:');
define('_MD_WFD_USERMIRRORSTITLE','Tilgængelige download mirrors');
define('_MD_WFD_USERMIRRORS','Vis tilgængelige download mirrors på %s');
define('_MD_WFD_NOUSERMIRRORS','Tilføj nyt download mirror på %s');
define('_MD_WFD_TOTALMIRRORS','Antal mirrors');
define('_MD_WFD_ADDMIRROR','Tilføj mirror');
define('_MD_WFD_MIRROR_TOTAL','<b>Antal Mirrors:</b> %s');
define('_MD_WFD_MIRROR_HOMEURLTITLE','Hjemmeside titel:');
define('_MD_WFD_MIRROR_HOMEURL','Hjemmeside URL:<br /><br />Indtast din hjemmeside URL.');
define('_MD_WFD_MIRROR_UPLOADMIRRORIMAGE','Upload Side Logo:<br /><br />Et lille logo der repræsenterer din hjemmeside');
define('_MD_WFD_MIRROR_MIRRORIMAGE','Side logo:');
define('_MD_WFD_MIRROR_CONTINENT','Verdensdel');
define('_MD_WFD_MIRROR_LOCATION','Sted:<br /><br />Eksempel: London, UK');
define('_MD_WFD_MIRROR_DOWNURL','Download URL:<br /><br />Indtast URL til filen');
define('_MD_WFD_MIRROR_SUBMITMIRROR','Indsend mirror');
define('_MD_WFD_ERROR_CREATEMIRROR','Fejl ved oprettelsen af mirror');
define('_MD_WFD_MIRROR_SNEWMNAMEDESC',' 
Venligst udfyld hele formularen herunder og vi vil tilføje dit mirror så hurtigt så muligt.<br /><br />
Tak for hjælpen med at tilbyde en anden lokation for download af disse filer.<br /><br />Alle eksterne steder vil blive gennemset af webmaster før de offentliggøres.');
define('_MD_WFD_MIRROR_HHOST','Vært');
define('_MD_WFD_MIRROR_HLOCATION','Lokation');
define('_MD_WFD_MIRROR_HCONTINENT','Verdensdel');
define('_MD_WFD_MIRROR_HDOWNLOAD','Download');
define('_MD_WFD_MIRROR_OFFLINE','Vært er offline.');
define('_MD_WFD_MIRROR_ONLINE','Vært er online');
define('_MD_WFD_MIRROR_DISABLED','Check af vært er disablet');
//continents (used in mirrors page)
define('_MD_WFD_CONT1','Afrika');
define('_MD_WFD_CONT2','Antarktis');
define('_MD_WFD_CONT3','Asien');
define('_MD_WFD_CONT4','Europa');
define('_MD_WFD_CONT5','Nordamerika');
define('_MD_WFD_CONT6','Sydamerika');
define('_MD_WFD_CONT7','Oceanien');


define('_MD_WFD_ADMIN_PAGE',':: Administration ::');
define('_MD_WFD_DOWNLOADS_LIST','Download liste (%s)');
define('_MD_WFD_NEWDOWNLOADS_ALL','Alle');
define('_MD_WFD_NEWDOWNLOADS_INTHELAST','I de sidste %s dage');
define('_MD_WFD_DOWNLOAD_MOST_POPULAR','Populæreste download');
define('_MD_WFD_DOWNLOAD_MOST_RATED','Bedst bedømte download');


// added - start - March 4 2006 - jpc
define('_MD_WFD_FFS_SUBMITCATEGORYHEAD','Hvilken kategori af filer ønsker du at indsende?');
define('_MD_WFD_FFS_DOWNLOADDETAILS','Download detaljer:');
define('_MD_WFD_FFS_DOWNLOADCUSTOMDETAILS','Speciel download:');
define('_MD_WFD_FFS_BACK','Tilbage');
define('_MD_WFD_FFS_DOWNLOADTITLE','Indsend en \'{category}\' fil.');
// added - end - March 4 2006 - jpc
?>