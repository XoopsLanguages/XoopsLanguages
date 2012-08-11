<?php
/**
* $ Id: main.php mod 1,00 21 juni 2005 John N Exp $
* Modul: WF-links
* Version: v1.0.3
* Udgivelsesdato: 21. juni 2005
* Udvikler: John N
* Team: WF-projekter
* Licens: GNU
* Format: UTF-8
*/

define('_MD_WFL_DEVELOPERFORHIRE','udviklere søges');
define("_MD_WFL_NOLINK","Dette link eksisterer ikke!");
define("_MD_WFL_SUBCATLISTING","Kategori oversigt");
define("_MD_WFL_ISADMINNOTICE","Webmaster: Der er et problem med dette billede.");
define("_MD_WFL_THANKSFORINFO","Tak for din indsendelse. <br/> Du vil få besked, når din anmodning er godkendt af webmaster.");
define("_MD_WFL_ISAPPROVED","Tak for din indsendelse. <br/> Din anmodning er blevet godkendt, og vil nu blive vist i vores liste.");
define("_MD_WFL_THANKSFORHELP","Tak for at bidrage til at opretholde denne mappes integritet.");
define("_MD_WFL_FORSECURITY","Af sikkerhedsmæssige årsager dit brugernavn og IP-adresse vil også blive midlertidigt registreres.");
define("_MD_WFL_DESCRIPTION","Beskrivelse");
define("_MD_WFL_SUBMITCATHEAD","Send linket Form");
define("_MD_WFL_MAIN","Hjem");
define("_MD_WFL_POPULAR","Popular");
define("_MD_WFL_NEWTHISWEEK","Nye i denne uge");
define("_MD_WFL_UPTHISWEEK","Updatede i denne uge");
define("_MD_WFL_POPULARITYLTOM","Popularitet (mindst til flest hits)");
define("_MD_WFL_POPULARITYMTOL","Popularitet (Flest til færrest hits)");
define("_MD_WFL_TITLEATOZ","Titel (A til Z)");
define("_MD_WFL_TITLEZTOA","Title (Z til A)");
define("_MD_WFL_DATEOLD","Dato (Ældste links først)");
define("_MD_WFL_DATENEW","Dato (Nye links først)");
define("_MD_WFL_RATINGLTOH","Bedømmelse (laveste score til højeste score)");
define("_MD_WFL_RATINGHTOL","Bedømmelse (Højeste score til laveste score)");
define("_MD_WFL_DESCRIPTIONC","Beskrivelse:");
define("_MD_WFL_CATEGORYC","Kategori:");
define("_MD_WFL_VERSION","Version");
define("_MD_WFL_SUBMITDATE","Sendt");
define("_MD_WFL_LINKHITS","<b> Linked: </b>%s gange");
define("_MD_WFL_URLRATING","<b> ICRA </b>:%s");
define("_MD_WFL_PUBLISHERC","Udgiver:");
define("_MD_WFL_RATINGC","Bedømmelse:");
define("_MD_WFL_PAGERANK","PageRank ™:");
define("_MD_WFL_PAGERANKALT","Google PageRank ™:");
define("_MD_WFL_ONEVOTE","1 Stemme");
define("_MD_WFL_NUMVOTES","%s stemmer");
define("_MD_WFL_RATETHISFILE","Bedøm");
define("_MD_WFL_MODIFY","Rediger");
define("_MD_WFL_REPORTBROKEN","Reporter brudt");
define("_MD_WFL_BROKENREPORT","Rapporter fejl i filen");
define("_MD_WFL_SUBMITBROKEN","Send");
define("_MD_WFL_BEFORESUBMIT","Før du indsender en ødelagt ressource anmodning, skal du kontrollere, at den egentlige kilde til det link, du ønsker rapportering brudt, ikke længere er der, og at hjemmesiden ikke er tidsmæssigt linket.");
define("_MD_WFL_TELLAFRIEND","Anbefal");
define("_MD_WFL_EDIT","Rediger");
define("_MD_WFL_THEREARE","Der er <b>%s </b> <i>Kategorier</i> og <b>%s</b><i> Links </i>, der er anført");
define("_MD_WFL_THEREIS","Der er <b>%s</b><i> Kategorier </i> og <b>%s </b><i> Links </i>, der er anført");
define("_MD_WFL_LATESTLIST","Seneste Fil");
define("_MD_WFL_FILETITLE","link Titel:");
define("_MD_WFL_DLURL","link URL:");
define("_MD_WFL_LINK_DIRCA","Internet indholds score:");
define("_MD_WFL_HOMEPAGEC","Hjemmeside:");
define("_MD_WFL_NOTSPECIFIED","ikke oplyst");
define("_MD_WFL_SUBMITTER","Udgiver");
define("_MD_WFL_UPDATEDON","opdateret");
define("_MD_WFL_PRICEFREE","Gratis");
define("_MD_WFL_VIEWDETAILS","Se alle detaljer");
define("_MD_WFL_OPTIONS","Valg: ");
define("_MD_WFL_NOTIFYAPPROVE","Giv mig, når dette link er godkendt ");
define("_MD_WFL_VOTEAPPRE","Din stemme er værdsat.");
define("_MD_WFL_THANKYOU","Tak fordi du tog dig tid til at stemme her ved %s"); //%s er dit websted navn
define("_MD_WFL_VOTEONCE","Vær venlig ikke at stemme for den samme mere end en gang.");
define("_MD_WFL_RATINGSCALE","Skalaen er 1 - 10, hvor 1 er det laveste og 10 det højeste.");
define("_MD_WFL_BEOBJECTIVE","Du kan være objektiv, hvis alle modtager 1 eller 10, kan vurderingerne ikke bruges til noget.");
define("_MD_WFL_DONOTVOTE","Gå ikke stemme på din egen ressource.");
define("_MD_WFL_RATEIT","Giv karakter!");
define("_MD_WFL_INTFILEFOUND","Her er et godt link til link ved %s"); //%s er dit websted navn
define("_MD_WFL_RANK","Placering");
define("_MD_WFL_CATEGORY","Kategori");
define("_MD_WFL_HITS","hits");
define("_MD_WFL_RATING","Karakter");
define("_MD_WFL_VOTE","Stem");
define("_MD_WFL_SORTBY","Sorter efter:");
define("_MD_WFL_TITLE","Title");
define("_MD_WFL_DATE","Dato");
define("_MD_WFL_POPULARITY","Popularitet");
define("_MD_WFL_TOPRATED","Rating");
define("_MD_WFL_CURSORTBY","Links øjeblikket sorteret efter: %s");
define("_MD_WFL_CANCEL","Annuller");
define("_MD_WFL_ALREADYREPORTED","Du har allerede indsendt en brudt rapport for denne ressource.");
define("_MD_WFL_MUSTREGFIRST","Undskyld, du ikke har tilladelse til at udføre denne handling. <br/> Please register eller login first!");
define("_MD_WFL_NORATING","Ingen rating valgt.");
define("_MD_WFL_VOTEFORTITLE","Dette Link:");
define("_MD_WFL_CANTVOTEOWN","Du kan ikke stemme på den ressource, du sendte. <br/> Alle stemmer gemmes og gennemses.");
define("_MD_WFL_SUBMITLINK","Send link");
define("_MD_WFL_SUB_SNEWMNAMEDESC","<ul><li> Alle nye forbindelser er underlagt validering og kan tage op til 24 timer, før de vises i vores liste. </li> <li> Vi forbeholder os ret til at afvise enhver form for indsendte link eller ændre indholdet uden godkendelse. </li> </ul> ");
define("_MD_WFL_MAINLISTING","Hovedmenu kategoriliste");
define("_MD_WFL_LASTWEEK","Sidste uge");
define("_MD_WFL_LAST30DAYS","Seneste 30 Dage");
define("_MD_WFL_1WEEK","1 Uge");
define("_MD_WFL_2WEEKS","2 Uger");
define("_MD_WFL_30DAYS","30 Dage");
define("_MD_WFL_SHOW","Vis");
define("_MD_WFL_DAYS","dage");
define("_MD_WFL_NEWLINKS","Nye links");
define("_MD_WFL_TOTALNEWLINKS","Antal nye links");
define("_MD_WFL_DTOTALFORLAST","Antal nye links de sidste");
define("_MD_WFL_AGREE","Jeg accepterer");
define("_MD_WFL_DOYOUAGREE","Er du enig i ovenstående vilkår?");
define("_MD_WFL_DISCLAIMERAGREEMENT","Ansvarsfraskrivelse");
define("_MD_WFL_DUPLOADSCRSHOT","Upload Screenshot Billede:");
define("_MD_WFL_RESOURCEID","Resource id #:");
define("_MD_WFL_REPORTER","Original Reporter:");
define("_MD_WFL_DATEREPORTED","Dato Rapporteret:");
define("_MD_WFL_RESOURCEREPORTED","Resource Indberettet Brudt");
define("_MD_WFL_RESOURCEREPORTED2","Dette link er allerede blevet rapporteret som brudt, vi arbejder på at løse problemet");
define("_MD_WFL_BROWSETOTOPIC","<b> Gennemse links i alfabetiske liste </b>");
define("_MD_WFL_WEBMASTERACKNOW","Brudt rapportering anerkendt:");
define("_MD_WFL_WEBMASTERCONFIRM","Brudt rapportering Bekræftet:");
define("_MD_WFL_ERRORSENDEMAIL","brudt rapport bekræftes, men Fejl ved afsendelse af meddelelse e-mail til webmaster.");

define("_MD_WFL_DELETE","Slet");
define("_MD_WFL_DISPLAYING","Vist ved:");
define("_MD_WFL_LEGENDTEXTNEW","Ny i dag");
define("_MD_WFL_LEGENDTEXTNEWTHREE","Ny 3 Days");
define("_MD_WFL_LEGENDTEXTTHISWEEK","Nye denne uge");
define("_MD_WFL_LEGENDTEXTNEWLAST","Over 1 uge");
define("_MD_WFL_THISFILEDOESNOTEXIST","Fejl: Dette link eksisterer ikke!");
define("_MD_WFL_BROKENREPORTED","Broken link rapporteret");

define("_MD_WFL_REV_SNEWMNAMEDESC","
Venligst udfyld nedenstående formular, og vi vil tilføje din anmeldelse så hurtigt som muligt. <br/><br/>
Tak fordi du tog dig tid til at indsende din mening. Vi ønsker at give vores brugere en mulighed for at finde kvalitet software hurtigere. <br/><br/> Alle bedømmelser vil blive gennemgået af en af vores webmastere, før de kommer op på hjemmesiden.
");
define("_MD_WFL_ISNOTAPPROVED","Din fremlæggelse skal være godkendt af en moderator først.");
define("_MD_WFL_HOMEPAGETITLEC","Home Page Titel:");
define("_MD_WFL_SCREENSHOT","Screenshot:");
define("_MD_WFL_SCREENSHOTCLICK","Vis fulde billede");
define("_MD_WFL_OTHERBYUID","Andre links efter:");
define("_MD_WFL_LINKTIMES","link tider:");
define("_MD_WFL_MAINTOTAL","Totale Links:");
define("_MD_WFL_LINKNOW","Besøg Link");
define("_MD_WFL_PAGES","<b> Sider </b>");
define("_MD_WFL_RATEDRESOURCE","Bedømt Resource");
define("_MD_WFL_PUBLISHER","afsender");
define("_MD_WFL_ERROR","Fejl Opdatering Database: Oplysninger ikke gemt");
define("_MD_WFL_COPYRIGHT","ophavsret");
define("_MD_WFL_INFORUM","drøft i forummet");
// Added frankblack
define("_MD_WFL_NOTALLOWESTOSUBMIT","Du er ikke tilladt at indsende links");
define("_MD_WFL_INFONOSAVEDB","Information ikke gemt i databasen: <br/><br/>");

define("_MD_WFL_NEWLAST","Nye indgivet Sidste uge");
define("_MD_WFL_NEWTHIS","Nye indgivet denne uge");
define("_MD_WFL_THREE","Nye indgives indenfor sidste tre dage");
define("_MD_WFL_TODAY","Nye idag");
define("_MD_WFL_NO_FILES","Endnu ingen links");

define("_MD_WFL_NOPERMISSIONTOPOST","Du har ikke tilladelse til at skrive i denne kategori.");

define("_MD_WFL_PUBLISHDATE","Offentliggjorte");
define("_MD_WFL_APPROVE","Godkend");
define("_MD_WFL_MODERATOR_OPTIONS","Moderator Indstillinger");
// Tilføjet af McDonald
define("_MD_WFL_COUNTRY","Land:");
define("_MD_WFL_COUNTRYB","<b> Land: </b>");
define("_MD_WFL_KEYWORDS","Nøgleord:");
define("_MD_WFL_KEYWORDS_NOTE","bør Nøgleord adskilles med et komma (keyword1, keyword2, keyword3, ..)");
define("_MD_WFL_NOLINKLOAD","Tak for dit indlæg!");
define("_MD_WFL_LINKID","Link id");
define("_MD_WFL_COUNTRYSORT","Land");
define("_MD_WFL_COUNTRYLTOH","Land (A til å)");
define("_MD_WFL_COUNTRYHTOL","Land (å til A)");
define("_MD_WFL_BACKBUTTON","Tilbage");
define("_MD_WFL_ADMINSECTION","Administrativ Sektion");
define("_MD_WFL_ADDTO","Tilføj til:");
define("_MD_WFL_INFORMATION","Information");
define("_MD_WFL_ADDRESS","Kontakt detaljer:");
define("_MD_WFL_LINK_GOOGLEMAP","Google Maps");
define("_MD_WFL_LINK_YAHOOMAP","Yahoo Maps");
define("_MD_WFL_LINK_MULTIMAP","Multimap");
define("_MD_WFL_LINK_CHECKMAP","Check kort");
define("_MD_WFL_STREET1","Adresse 1");
define("_MD_WFL_STREET2","Adresse 2 (valgfri)");
define("_MD_WFL_TOWN","By");
define("_MD_WFL_STATE","stat");
define("_MD_WFL_ZIPCODE","postnummer");
define("_MD_WFL_TELEPHONE","Telefon");
define("_MD_WFL_TEL","Tlf.");
define("_MD_WFL_FAX","Fax");
define("_MD_WFL_GETMAP","Hent kort");
// Version 1.05 RC5
define("_MD_WFL_VOIP","VoIP");
define("_MD_WFL_PRINT","Udskriv");
define("_MD_WFL_NOITEMSELECTED","Du har ikke vælge et gyldigt link!");
define("_MD_WFL_MOBILE","mobil");
// Version 1.05 RC6
define("_MD_WFL_VAT","moms");
define("_MD_WFL_VATWIKI","For mere information se <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'> Wikipedia </a> ");
define("_MD_WFL_EMAIL","Email");
define("_MD_WFL_LINK_CREATEADDRESS",'<b> Adresse form </b>');
// Version 1.06 RC2
define('_MD_WFL_STOPIT','STOP DET!!! idiot!');

?> 