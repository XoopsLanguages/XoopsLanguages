<?php
/**
 * $Id: main.php v 1.22 02 july 2004 Liquid Exp $
 * Module: PD-Downloads
 * Version: v1.0
 * Release Date: 04. März 2005
 * Author: Power-Dreams Team
 * Licence: GNU
 */

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MD_PDD_NODOWNLOAD' ) ) {

	define("_MD_PDD_NODOWNLOAD","Denne download eksisterer ikke!"); 
	define("_MD_PDD_NOCAT","Denne kategori eksisterer ikke!"); 
	define("_MD_PDD_NOUSER","Denne bruger eksisterer ikke!");
	define("_MD_PDD_SUBCATLISTING","Kategori oversigt"); 
  define("_MD_PDD_ISADMINNOTICE","Webmaster: Der er et problem med dette billede."); 
  define("_MD_PDD_THANKSFORINFO","Tak for din indsendelse. Du vil få besked, når din anmodning er godkendt af webmaster."); 
  define("_MD_PDD_ISAPPROVED","Tak for din indsendelse. Din anmodning er blevet godkendt og vil nu vises i vores fortegnelse."); 
  define("_MD_PDD_THANKSFORHELP","Tak for at hjælpen, med at opretholde denne mappes integritet."); 
  define("_MD_PDD_FORSECURITY","Af sikkerhedsmæssige årsager vil dit brugernavn og din IP-adresse også blive midlertidigt registreres."); 
  define("_MD_PDD_NOPERMISETOLINK","Denne fil hører ikke til det websted, du kom fra <br/><br/> venligst e-mail webmasteren for det websted, du kom fra og fortælle ham: <br/><b> IKKE AT STJÆLE ANDRES LINKS! </b><br/><br/><b> Definition af en Leecher: </b> En der er doven til at linke fra sin egen server eller stjæler andre folks hårde arbejde og gør det til at ligne hans egen <br/><br/> Din IP-adresse <b> er blevet logget </b>.");
	define("_MD_PDD_DESCRIPTION","Beskrivelse"); 
  define("_MD_PDD_SUBMITCATHEAD","Indsend download formular"); 
  define("_MD_PDD_MAIN","HJEM"); 
  define("_AM_PDD_MYTOTAL","Total"); 
  define("_MD_PDD_POPULAR","Populær"); 
  define("_MD_PDD_NEWTHISWEEK","Nye i denne uge"); 
  define("_MD_PDD_UPTHISWEEK","Opdateret i denne uge");
  define("_MD_PDD_POPULARITYLTOM","Popularitet (færrest til flest træffere)"); 
  define("_MD_PDD_POPULARITYMTOL","Popularitet (flest til færrest træffere)"); 
  define("_MD_PDD_TITLEATOZ","Titel (A til Z)"); 
  define("_MD_PDD_TITLEZTOA","Titel (Z til A)"); 
  define("_MD_PDD_DATEOLD","Dato (Gamle filer listet først)"); 
  define("_MD_PDD_DATENEW","Dato (Nye filer listet først)"); 
  define("_MD_PDD_RATINGLTOH","Karakter (laveste score til højeste score)"); 
  define("_MD_PDD_RATINGHTOL","Karakter (højeste score til laveste score)"); 
  define("_MD_PDD_DESCRIPTIONC","Beskrivelse:"); 
  define("_MD_PDD_CATEGORYC","Kategori:"); 
  define("_MD_PDD_VERSION","Version"); 
  define("_MD_PDD_SUBMITDATE","Udsendt"); 
  define("_MD_PDD_DLTIMES","Downloaded %s gange"); 
  define("_MD_PDD_FILESIZE","File Størrelse"); 
  define("_MD_PDD_SUPPORTEDPLAT","Platform"); 
  define("_MD_PDD_HOMEPAGE","Hjemmeside"); 
  define("_MD_PDD_PUBLISHERC","Udgiver:"); 
  define("_MD_PDD_RATINGC","Bedømmelse:"); 
  define("_MD_PDD_ONEVOTE","1 stemme"); 
  define("_MD_PDD_NUMVOTES"," %s stemmer");
  define("_MD_PDD_RATETHISFILE","Bedøm"); 
  define("_MD_PDD_DOWNLOADHITS","Downloads:"); 
  define("_MD_PDD_MODIFY","Rediger"); 
  define("_MD_PDD_REPORTBROKEN","Rapporter fejl"); 
  define("_MD_PDD_BROKENREPORT","Rapporter fejl i filen"); 
  define("_MD_PDD_SUBMITBROKEN","Send");
  define("_MD_PDD_BEFORESUBMIT","Inden du indsender en rapport om fejl, skal du kontrollere, at den egentlige kilde til den fil, du agter at fejlmedlde, ikke længere er der, og at hjemmesiden ikke er tidsmæssigt nede."); 
  define("_MD_PDD_TELLAFRIEND","anbefale"); 
  define("_MD_PDD_EDIT","Rediger"); 
  define("_MD_PDD_THEREARE","Der er <b>%s</b> <i>Kategorier</i> og <b>%s</b> <i>downloads</i> tilgængeligt."); 
  define("_MD_PDD_THEREIS","Der er <b>%s</b> <i>Kategorier</i> og <b>%s</b> <i>downloads</i> tilgængelige."); 
  define("_MD_PDD_LATESTLIST","Seneste Fil"); 
  define("_MD_PDD_FILETITLE","Download Titel:"); 
  define("_MD_PDD_DLURL","Download URL:"); 
  define("_MD_PDD_HOMEPAGEC","Hjemmeside:"); 
  define("_MD_PDD_UPLOAD_FILEC","Upload Fil:"); 
  define("_MD_PDD_UPLOAD_FILESIZE","<br/> <br/> Tilladt Filstørrelse:"); 
  define("_MD_PDD_VERSIONC","Version:"); 
  define("_MD_PDD_FILESIZEC","Filstørrelse i KB:"); 
  define("_AM_PDD_SHOTIMAGE","Screenshot:"); 
  define("_AM_PDD_UPLOADSHOTIMAGE","Upload skærmbillede:"); 
  define("_MD_PDD_NUMBYTES","%s bytes"); 
  define("_MD_PDD_PLATFORMC","Platform:"); 
  define("_MD_PDD_NOTSPECIFIED","Ikke angivet"); 
  define("_MD_PDD_PUBLISHER","Udgiver"); 
  define("_MD_PDD_UPDATEDON","opdateret"); 
  define("_MD_PDD_VIEWDETAILS","Vis Detaljer"); 
  define("_MD_PDD_OPTIONS","Muligheder: "); 
  define("_MD_PDD_NOTIFYAPPROVE","Giv mig besked, når denne fil er godkendt"); 
  define("_MD_PDD_VOTEAPPRE","Din stemme er værdsat.");
  define("_MD_PDD_THANKYOU","Tak fordi du tog dig tid til afstemning her på %s"); //%s er dit websted navn 
  define("_MD_PDD_VOTEONCE","Vær venlig ikke at stemme for den samme ressource mere end én gang."); 
  define("_MD_PDD_RATINGSCALE","Skalaen er 1 - 10, hvor 1 er det laveste og 10 det højeste."); 
  define("_MD_PDD_BEOBJECTIVE","Du kan være objektiv, hvis alle modtager 1 eller 10, kan vurderingerne ikke bruges til noget."); 
  define("_MD_PDD_DONOTVOTE","Stem ikke på din egen ressource."); 
  define("_MD_PDD_RATEIT","Stem!"); 
	define("_MD_PDD_INTFILEFOUND","Her er en god fil til download på %s"); //%s er dit websted navn 
  define("_MD_PDD_RANK","Rank"); 
  define("_MD_PDD_CATEGORY","Kategori"); 
  define("_MD_PDD_HITS","Hits"); 
  define("_MD_PDD_RATING","Bedømmelse"); 
  define("_MD_PDD_VOTE","Afstemning"); 
  define("_MD_PDD_SORTBY","Sorter efter:"); 
  define("_MD_PDD_TITLE","Title"); 
  define("_MD_PDD_DATE","Dato"); 
  define("_MD_PDD_POPULARITY","Popularitet"); 
  define("_MD_PDD_TOPRATED","Bedømmelse"); 
  define("_MD_PDD_CURSORTBY","Filerne sorteres i øjeblikket efter: %s"); 
  define("_MD_PDD_CANCEL","Fortryd");
  define("_MD_PDD_ALREADYREPORTED","Du har allerede sendt en rapport for denne ressource."); 
  define("_MD_PDD_MUSTREGFIRST","Beklager, du ikke har tilladelse til at udføre denne handling. <br/> Registrer dig som bruger eller log ind!"); 
  define("_MD_PDD_NORATING","Ingen bedømmelse valgt."); 
  define("_MD_PDD_CANTVOTEOWN","Du kan ikke stemme på en ressource, du selv har indsendt. <br/> Alle stemmer bliver logget og revideres."); 
  define("_MD_PDD_SUBMITDOWNLOAD","Indsend Download"); 
  define("_MD_PDD_SUB_SNEWMNAMEDESC","<ul> <li> Alle nye downloads bliver valideret og det kan tage op til 24 timer, før de vises i vores fortegnelse. </li> <li> Vi forbeholder os ret til at afvise enhver indendt download eller ændre indholdet uden godkendelse. </li> </ul> "); 
  define("_MD_PDD_MAINLISTING","Hoved Kategori lister"); 
  define("_MD_PDD_LASTWEEK","Sidste uge"); 
  define("_MD_PDD_LAST30DAYS","Sidste 30 Dage"); 
  define("_MD_PDD_1WEEK","1 Uge"); 
  define("_MD_PDD_2WEEKS","2 Uger"); 
  define("_MD_PDD_30DAYS","30 Dage"); 
  define("_MD_PDD_SHOW","Vis"); 
  define("_MD_PDD_DAYS","dage"); 
  define("_MD_PDD_NEWDOWNLOADS","Nye Downloads"); 
  define("_MD_PDD_TOTALNEWDOWNLOADS","Totalt antal nye Downloads"); 
  define("_MD_PDD_DTOTALFORLAST","Totalt antal nye downloads til sidste"); 
  define("_MD_PDD_AGREE","Jeg accepterer"); 
  define("_MD_PDD_DOYOUAGREE","Er du enig i at ovenstående betingelser?"); 
  define("_MD_PDD_DISCLAIMERAGREEMENT","Forbehold"); 
  define("_MD_PDD_DUPLOADSCRSHOT","Upload Screenshot Billede:"); 
  define("_MD_PDD_RESOURCEID","Resource id #:"); 
  define("_MD_PDD_REPORTER","Original Reporter:"); 
  define("_MD_PDD_DATEREPORTED","Dato rapporteret:"); 
  define("_MD_PDD_RESOURCEREPORTED","Resource Rapporteret brudt"); 
  define("_MD_PDD_RESOURCEREPORTED2","Denne ressource er allerede blevet rapporteret som brudt, vi arbejder på en rettelse"); 
  define("_MD_PDD_BROWSETOTOPIC","<b> Gennemse Downloads i alfabetiske liste </b>"); 
  define("_MD_PDD_WEBMASTERACKNOW","Brudt rapport anerkendt:"); 
  define("_MD_PDD_WEBMASTERCONFIRM","Brudt rapport bekræftede:"); 
  define("_MD_PDD_DELETE","Slet"); 
  define("_MD_PDD_DISPLAYING","Vist ved:"); 
  define("_MD_PDD_LEGENDTEXTNEW","Nye i dag"); 
  define("_MD_PDD_LEGENDTEXTNEWTHREE","Nye de sidste 3 Dage"); 
  define("_MD_PDD_LEGENDTEXTTHISWEEK","Nye i denne uge"); 
  define("_MD_PDD_LEGENDTEXTNEWLAST","Over 1 Uge"); 
  define("_MD_PDD_THISFILEDOESNOTEXIST","Fejl: Denne fil findes ikke!"); 
  define("_MD_PDD_BROKENREPORTED","Brudt Fil Rapporteret"); 
  define("_MD_PDD_SELCAT","Du skal vælge en kategori!");
	// visit
	define("_MD_PDD_DOWNINPROGRESS","Download i gang"); 
  define("_MD_PDD_DOWNSTARTINSEC","Dit download skulle starte om 5 sekunder ... <b>vent venligst </b>."); 
  define("_MD_PDD_DOWNSTARTINSEC1","Dit download skulle starte om 1 sekunder ... <b>vent venligst </b>."); 
  define("_MD_PDD_DOWNNOTSTART","Hvis dit download ikke starter,"); 
  define("_MD_PDD_CLICKHERE","Klik her!"); 
  define("_MD_PDD_BROKENFILE","Fejl i Download"); 
  define("_MD_PDD_PLEASEREPORT","Vær rar at rapporterer denne fejl til webmasteren,"); 
  define("_MD_PDD_KEYFEATURESC","Nøglefunktioner: <br/><br/><span style='font-weight:normal;'>Adskil hver funktion med en <b>#</b> </span>" ); 
  define("_MD_PDD_HISTORYC","Hent historie:"); 
  define("_MD_PDD_HISTORYD","Tilføj ny Download Historie:<br/><br/><span style='font-weight:normal;'>Datoen vil automatisk blive tilføjet til dette.</span>"); 
  define("_MD_PDD_HOMEPAGETITLEC","Hjemmeside titel:"); 
  define("_MD_PDD_REQUIREMENTS","Systemkrav:"); 
  define("_MD_PDD_FEATURES","Muligheder:"); 
  define("_MD_PDD_HISTORY","Hent historie:"); 
  define("_MD_PDD_SCREENSHOT","Screenshot:"); 
  define("_MD_PDD_SCREENSHOTCLICK","Vis fulde billede"); 
  define("_MD_PDD_OTHERBYUID","andre filer hos:"); 
  define("_MD_PDD_DOWNTIMES","Antal Download:"); 
  define("_MD_PDD_MAINTOTAL","Total antal files:"); 
  define("_MD_PDD_DOWNLOADNOW","Download nu"); 
  define("_MD_PDD_PAGES","<b>Sider</b>"); 
  define("_MD_PDD_SUBMITTER","afsender"); 
  define("_MD_PDD_ERROR","Fejl Ajourføring af Database: Oplysninger ikke gemt"); 
  define("_MD_PDD_COPYRIGHT","copyright"); 
  define("_MD_PDD_INFORUM","diskuter i Forum");

	//submit.php
	define("_MD_PDD_NOTALLOWESTOSUBMIT","Du har ikke lov til at sende filer"); 
  define("_MD_PDD_INFONOSAVEDB","Oplysninger, der ikke blev gemt i databasen: <br /> <br />");
 
	//
  define("_MD_PDD_NEWLAST","Nye filer indsendt den seneste uge"); 
  define("_MD_PDD_NEWTHIS","Nye filer indsendt i denne uge"); 
  define("_MD_PDD_THREE","Nye filer indsendt de sidste tre dage"); 
  define("_MD_PDD_TODAY","Nye filer indsendt i dag"); 
  define("_MD_PDD_NO_FILES","Ingen filer endnu"); 
  define("_AM_PDD_IMAGEEXIST","Screenshot findes allerede!");



}
?>
