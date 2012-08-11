<?php
// $Id: main.php,v 1.7 2003/03/27 12:11:08 w4z004 Exp $
//%%%%%%		Module Name 'MyLinks'		%%%%%

define("_MD_THANKSFORINFO","Tak for informationen. Vi vil kikke nærmere på det snarest.");
define("_MD_THANKSFORHELP","Tak fordi du hjælper med at vedligeholde denne liste.");
define("_MD_FORSECURITY","Af sikkerhedsgrunde vil dit navn og IP-adresse blive midlertidig gemt.");

define("_MD_SEARCHFOR","Søg efter");
define("_MD_ANY","ALT");
define("_MD_SEARCH","Søg");

define("_MD_MAIN","Hovedoversigt");
define("_MD_SUBMITLINK","Tilføg Link");
define("_MD_SUBMITLINKHEAD","Send Link Form");
define("_MD_POPULAR","Populær");
define("_MD_TOPRATED","Afstemning");

define("_MD_NEWTHISWEEK","Nye i denne uge");
define("_MD_UPTHISWEEK","ændret i denne uge");

define("_MD_POPULARITYLTOM","Popularitet (Færest til flest visninger)");
define("_MD_POPULARITYMTOL","Popularity (Flest til færest visninger)");
define("_MD_TITLEATOZ","Titel (A til Z)");
define("_MD_TITLEZTOA","Titel (Z til A)");
define("_MD_DATEOLD","Dato (Gamle links vist førest)");
define("_MD_DATENEW","Dato (Nye links vist førest)");
define("_MD_RATINGLTOH","Vudering (Mindste score først)");
define("_MD_RATINGHTOL","Vudering (Størst score først)");

define("_MD_NOSHOTS","Der er intet billede tilgængelig");
define("_MD_EDITTHISLINK","Rediger dette link");

define("_MD_DESCRIPTIONC","Beskrivelse: ");
define("_MD_EMAILC","Email: ");
define("_MD_CATEGORYC","Katagori: ");
define("_MD_LASTUPDATEC","Sidste rettelse: ");
define("_MD_HITSC","Antal visninger: ");
define("_MD_RATINGC","Vudering: ");
define("_MD_ONEVOTE","1 stemme");
define("_MD_NUMVOTES","%s stemmer");
define("_MD_RATETHISSITE","Bedøm dette link");
define("_MD_MODIFY","Ret");
define("_MD_REPORTBROKEN","Anmeld et defekt link");
define("_MD_TELLAFRIEND","Fortæl til en ven");

define("_MD_THEREARE","Der er ialt <b>%s</b> Links i vores database");
define("_MD_LATESTLIST","Sidste visning");

define("_MD_REQUESTMOD","Anbefal link ændringer");
define("_MD_LINKID","Link ID: ");
define("_MD_SITETITLE","Website Titel: ");
define("_MD_SITEURL","Website URL: ");
define("_MD_OPTIONS","Valgmuligheder: ");
define("_MD_NOTIFYAPPROVE","Informer mig når dette link bliver godkendt");
define("_MD_SHOTIMAGE","Website billede: ");
define("_MD_SENDREQUEST","Afsend");

define("_MD_VOTEAPPRE","Din stemme bliver vædsat.");
define("_MD_THANKURATE","Tak fordi du brugte tid på at stemme på %s.");
define("_MD_VOTEFROMYOU","Stemmer fra brugere såsom dig selv, vil hjælpe andre besøgende til lettere at beslutte hvilke links de skal benytte.");
define("_MD_VOTEONCE","Vær venlig kun at stemme en gang for hver link.");
define("_MD_RATINGSCALE"," Skalaen går fra 1 til 10, med 1 som dårlig og 10 som bedst.");
define("_MD_BEOBJECTIVE","Vær objektiv - hvis alle modtager enten 1 eller 10, så bliver vuderingen ikke særlig brugbar.");
define("_MD_DONOTVOTE","Stem ikke for dine egne links.");
define("_MD_RATEIT","STEM!");

define("_MD_INTRESTLINK","Interesant link: %s");  // %s is your site name
define("_MD_INTLINKFOUND","Her er en interesant hjemmeside jeg har fundet på %s");  // %s is your site name

define("_MD_RECEIVED","Vi har modtaget dine hjemmeside informationer. Tak!");
define("_MD_WHENAPPROVED","Du vil modtage en email eller PM når linket er blevet godkendt.");
define("_MD_SUBMITONCE","Send kun dit link ind en gang.");
define("_MD_ALLPENDING","Alle links der bliver indsendt skal godkendes før de bliver offentliggjort på vores site.");
define("_MD_DONTABUSE","Brugernavn og IP-adresse er registreret, så misbrug venligst ikke systemet.");
define("_MD_TAKESHOT","Vi vil lave et billede af din hjemmeside. Det kan nogle gange tage flere dage før dit link bliver godkendt og tilføjet databasen.");

define("_MD_RANK","Rang");
define("_MD_CATEGORY","Katagori");
define("_MD_HITS","Visninger");
define("_MD_RATING","Rating");
define("_MD_VOTE","Stem");
define("_MD_TOP10","%s Top 10"); // %s is a link category title

define("_MD_SEARCHRESULTS","Søgeresultat for <b>%s</b>:"); // %s is search keywords
define("_MD_SORTBY","Sorter efter:");
define("_MD_TITLE","Titel");
define("_MD_DATE","Dato");
define("_MD_POPULARITY","Popularitet");
define("_MD_CURSORTEDBY","Links bliver nu sorteret efter: %s");
define("_MD_PREVIOUS","Foregående");
define("_MD_NEXT","Næste");
define("_MD_NOMATCH","Der var ingen reslutater der passede til dine søgeparametre");

define("_MD_SUBMIT","Send");
define("_MD_CANCEL","Afbryd");

define("_MD_ALREADYREPORTED","Du har allerede én gang før rapporteret dette defekte link.");
define("_MD_MUSTREGFIRST","Beklager, men du har ikke rettigheder til at udføre denne handling.<br />Vær venlig at registrerer eller at logge ind for at opnå de fornødne rettigheder.!");
define("_MD_NORATING","Du har ikke markéret dit valg.");
define("_MD_CANTVOTEOWN","Det er ikke muligt at stemme på et link du selv har indsendt..<br />Alle stemmer bliver registreret og vil - i tilfælde hvor snyd mistænkes - blive gennemset.");
define("_MD_VOTEONCE2","Stem på den markerede ressource kun én gang.<br />Alle stemmer er logget og revideres.");

//%%%%%%	Module Name 'MyLinks' (Admin)	  %%%%%

define("_MD_WEBLINKSCONF","Web Links Konfiguration");
define("_MD_GENERALSET","My Links Generelle indstillinger");
define("_MD_ADDMODDELETE","Tilføj, Redigér, og Slet Katagorier/Links");
define("_MD_LINKSWAITING","Links der afventer godkendelse");
define("_MD_BROKENREPORTS","Rapporterede defekte links");
define("_MD_MODREQUESTS","ønskede ændringer til eksisterende links.");
define("_MD_SUBMITTER","Afsender: ");
define("_MD_VISIT","Besøg");
define("_MD_SHOTMUST","Snapshots af web-sider skal være i et normalt billedformat, og placeret i skuffen %s (f.eks. shot.gif). Efterlades tomt hvis der ingen billede skal benyttes.");
define("_MD_APPROVE","Godkend");
define("_MD_DELETE","Slet");
define("_MD_NOSUBMITTED","Der er ikke tilsendt nye links.");
define("_MD_ADDMAIN","Tilføj en ny hovedkatagori.");
define("_MD_TITLEC","Titel: ");
define("_MD_IMGURL","Billede URL (Hvis et billede benyttes, vil højden blive justeret til 50 pixels): ");
define("_MD_ADD","Tilføj");
define("_MD_ADDSUB","Tilføj en underkatagori");
define("_MD_IN","i");
define("_MD_ADDNEWLINK","Tilføj et nyt link");
define("_MD_MODCAT","Modificér katagori");
define("_MD_MODLINK","Modificér Link");
define("_MD_TOTALVOTES","Linkets modtagene stemmer (Ud af %s afgivende stemmer)");
define("_MD_USERTOTALVOTES","Stemmer afgivet af registrerede brugere (Ud af %s afgivende stemmer)");
define("_MD_ANONTOTALVOTES","Stemmer afgivet af anonyme brugere (Ud af %s afgivende stemmer)");
define("_MD_USER","Bruger");
define("_MD_IP","IP Addresse");
define("_MD_USERAVG","Gennemsnitlig brugervudering");
define("_MD_TOTALRATE","Totalt afgivne vuderinger");
define("_MD_NOREGVOTES","Ingen registrerede brugere har afgivet stemme");
define("_MD_NOUNREGVOTES","Ingen uregistrerede brugere har afgivet stemme");
define("_MD_VOTEDELETED","Afstemningsdate er blevet slettet!");
define("_MD_NOBROKEN","Ingen rapporterede defekte links.");
define("_MD_IGNOREDESC","Ignorér (Ignorér rapporten og slet rapporten fra <b>listen over defekte links</b>)");
define("_MD_DELETEDESC","Slet (Sletter <b>alle data om det rapporterede link</b> samt <b>listen over defekte links</b>.)");
define("_MD_REPORTER","Rapport er afsendt af");
define("_MD_LINKSUBMITTER","Link er indsendt af");
define("_MD_IGNORE","Ignorér");
define("_MD_LINKDELETED","Link er nu slettet.");
define("_MD_BROKENDELETED","listen over defekte links er nu slettet.");
define("_MD_USERMODREQ","Brugerafgivende ønsker om ændringer til links.");
define("_MD_ORIGINAL","Original");
define("_MD_PROPOSED","Foreslået");
define("_MD_OWNER","Ejer: ");
define("_MD_NOMODREQ","Der er ingen forslag til ændringer af links.");
define("_MD_DBUPDATED","Databasen er blevet opdateret uden problemer!");
define("_MD_MODREQDELETED","Forslag om ændringer slettet.");
                         
define("_MD_IMGURLMAIN","Billede URL (Billeder kan kun benyttes for hovedkatagorier. Hvis et billede benyttes, vil højden blive justeret til 50 pixels): ");
define("_MD_PARENT","Foregående katagori:");
define("_MD_SAVE","Gem ændringer");
define("_MD_CATDELETED","Kattagori er nu slettet.");
define("_MD_WARNING","ADVARSEL: Er du <b>helt</b> sikker på at du vil slette denne katagori inklusiv <b>ALLE</b> dens tilknyttede links og kommentare?");
define("_MD_YES","Ja");
define("_MD_NO","Nej");
define("_MD_NEWCATADDED","Den nye katagori er blevet tilføjet uden problemer!");
define("_MD_ERROREXIST","FEJL: Det angivne ling findes allerede i databasen!");
define("_MD_ERRORTITLE","FEJL: Du <b>skal</b> angive en titel!");
define("_MD_ERRORDESC","FEJL: Du <b>skal</b> angive en beskrivelse!");
define("_MD_NEWLINKADDED","Det nye link er blevet tilføjet databasen.");
define("_MD_YOURLINK","Dit link på %s");
define("_MD_YOUCANBROWSE","Du kan gennemse vores links på %s");
define("_MD_HELLO","Hej %s");
define("_MD_WEAPPROVED","Vi har godkendt dit indsændte link, og tilføjet det til vores database.");
define("_MD_THANKSSUBMIT","Tak for dit forslag!");
define("_MD_ISAPPROVED","Vi har godkendt dit indsændte link.");
?>