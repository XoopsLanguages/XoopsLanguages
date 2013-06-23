<?php
/**
 * $Id: main.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 * Format: UTF-8
 */

define("_MD_WFL_NOLINK","Deze link bestaat niet!");
define("_MD_WFL_SUBCATLISTING","Categorie index");
define("_MD_WFL_ISADMINNOTICE","Webmaster: er is een probleem met deze afbeelding.");
define("_MD_WFL_THANKSFORINFO","Bedankt voor deze inzending.<br />Er wordt een bericht verzonden wanneer de inzending is goedgekeurd door de webmaster.");
define("_MD_WFL_ISAPPROVED","Bedankt voor deze inzending.<br />De inzending is goedgekeurd en zal worden opgenomen in de index.");
define("_MD_WFL_THANKSFORHELP","Bedankt voor uw bijdrage aan het up-to-date houden van het bestand.");
define("_MD_WFL_FORSECURITY","Vanwege veiligheidsredenen worden gebruikersnaam en IP-adres tijdelijk worden opgeslagen.");
define("_MD_WFL_DESCRIPTION","Omschrijving");
define("_MD_WFL_SUBMITCATHEAD","Inzend formulier");
define("_MD_WFL_MAIN","Website");
define("_MD_WFL_POPULAR","Populair");
define("_MD_WFL_NEWTHISWEEK","Nieuw deze week");
define("_MD_WFL_UPTHISWEEK","Deze week bijgewerkt");
define("_MD_WFL_POPULARITYLTOM","Populariteit (laagste naar hoogste aantal kliks)");
define("_MD_WFL_POPULARITYMTOL","Populariteit (hoogste naar laagste aantal kliks)");
define("_MD_WFL_TITLEATOZ","Titel (A - Z)");
define("_MD_WFL_TITLEZTOA","Titlel (Z - A)");
define("_MD_WFL_DATEOLD","Datum (Oudste links eerst)");
define("_MD_WFL_DATENEW","Date (Nieuwste links eerst)");
define("_MD_WFL_RATINGLTOH","Beoordeling (Laagste score eerst)");
define("_MD_WFL_RATINGHTOL","Beoordeling (Hoogste score eerst)");
define("_MD_WFL_DESCRIPTIONC","Omschrijving: ");
define("_MD_WFL_CATEGORYC","Categorie: ");
define("_MD_WFL_VERSION","Versie");
define("_MD_WFL_SUBMITDATE","Ingezonden op");
define("_MD_WFL_LINKHITS","<b>Bekeken:</b> %s keer");
define("_MD_WFL_PUBLISHERC","Inzender: ");
define("_MD_WFL_RATINGC","Beoordeling: ");
define("_MD_WFL_ONEVOTE","1 stem");
define("_MD_WFL_NUMVOTES","%s stemmen");
define("_MD_WFL_RATETHISFILE","Beoordeel website");
define("_MD_WFL_MODIFY","Aanpassen");
define("_MD_WFL_REPORTBROKEN","Rapporteer gebroken link");
define("_MD_WFL_BROKENREPORT","Rapporteer gebroken bron");
define("_MD_WFL_SUBMITBROKEN","Verstuur");
define("_MD_WFL_BEFORESUBMIT","Voordat u een gebroken bestand of bron rapporteerd, controleer dan eerst of de link of bron daadwerkelijk niet meer bestaat of dat het een tijdelijk probleem betreft.");
define("_MD_WFL_TELLAFRIEND","Aanbevelen");
define("_MD_WFL_EDIT","Aanpassen");
define("_MD_WFL_THEREARE","Er zijn <b>%s</b> <i>categorieën</i> en <b>%s</b> <i>linken</i> geïndexeerd");
define("_MD_WFL_THEREIS","Er is <b>%s</b> <i>categorie</i> en <b>%s</b> <i>link</i> geïndexeerd");
define("_MD_WFL_LATESTLIST","Recente linken");
define("_MD_WFL_FILETITLE","Link titel: ");
define("_MD_WFL_DLURL","Link URL: ");
define("_MD_WFL_LINK_DIRCA"," Internet inhoud beoordeling: ");
define("_MD_WFL_HOMEPAGEC","Website: ");
define("_MD_WFL_NOTSPECIFIED","Niet opgegeven");
define("_MD_WFL_SUBMITTER","Uitgever");
define("_MD_WFL_UPDATEDON","Bijgewerkt op");
define("_MD_WFL_PRICEFREE","gratis");
define("_MD_WFL_VIEWDETAILS","Toon volledige details");
define("_MD_WFL_OPTIONS", 'Opties: ');
define("_MD_WFL_NOTIFYAPPROVE", 'Informeer mij wanneer de link is goedgekeurd');
define("_MD_WFL_VOTEAPPRE","Uw stem wordt gewaardeerd.");
define("_MD_WFL_THANKYOU","Dank u, dat u de tijd heeft genomen hier op %s uw stem uit te brengen"); // %s is your site name
define("_MD_WFL_VOTEONCE","Stemt u alstublieft niet meer dan eenmaal op de zelfde link.");
define("_MD_WFL_RATINGSCALE","De schaal is 1 - 10, waarbij 1 slecht is en 10 uitstekend.");
define("_MD_WFL_BEOBJECTIVE","Wees objectief, zodat de informatie nuttig is.");
define("_MD_WFL_DONOTVOTE","Stem niet op uw eigen link.");
define("_MD_WFL_RATEIT","Geef een cijfer!");
define("_MD_WFL_INTFILEFOUND","Hier is een goede link om te bekijken via %s"); // %s is your site name
define("_MD_WFL_RANK","Score");
define("_MD_WFL_CATEGORY","Categorie");
define("_MD_WFL_HITS","Kliks");
define("_MD_WFL_RATING","Beoordeling");
define("_MD_WFL_VOTE","Stem");
define("_MD_WFL_SORTBY","Gerangschikt op:");
define("_MD_WFL_TITLE","Titel");
define("_MD_WFL_DATE","Datum");
define("_MD_WFL_POPULARITY","Populariteit");
define("_MD_WFL_TOPRATED","Beoordeling");
define("_MD_WFL_CURSORTBY","Links zijn gesorteerd op: %s");
define("_MD_WFL_CANCEL","Annuleren");
define("_MD_WFL_ALREADYREPORTED","U heeft reeds een rapport verzonden met betrekking tot deze gebroken link.");
define("_MD_WFL_MUSTREGFIRST","Voor deze actie dient u in te loggen of zich te registreren.");
define("_MD_WFL_NORATING","Geen waardering gegeven.");
define("_MD_WFL_VOTEFORTITLE","Waardeer deze link: ");
define("_MD_WFL_CANTVOTEOWN","U kunt niet stemmen op eigen inzendingen.<br />Alle stemmen worden opgeslagen en gecontroleerd.");
define("_MD_WFL_SUBMITLINK","Link inzenden");
define("_MD_WFL_SUB_SNEWMNAMEDESC","<ul><li>Alle nieuwe inzendingen zijn onderwerp van beoordeling. Er kan enige tijd overheen gaan voordat ze in de index worden opgenomen.</li><li>Wij behouden ons het recht voor om ingezonden linken te weigeren of de inhoud te wijzigen zonder overleg of goedkeuring.</li></ul>");
define("_MD_WFL_MAINLISTING","Categorie index");
define("_MD_WFL_LASTWEEK","Afgelopen week");
define("_MD_WFL_LAST30DAYS","Afgelopen 30 dagen");
define("_MD_WFL_1WEEK","1 week");
define("_MD_WFL_2WEEKS","2 weken");
define("_MD_WFL_30DAYS","30 dagen");
define("_MD_WFL_SHOW","Toon");
define("_MD_WFL_DAYS","dagen");
define("_MD_WFL_NEWLINKS","Nieuwe linken");
define("_MD_WFL_TOTALNEWLINKS","Overzicht nieuwe linken");
define("_MD_WFL_DTOTALFORLAST","Overzicht nieuwe linken van de laatste");
define("_MD_WFL_AGREE","Ik ga akkoord");
define("_MD_WFL_DOYOUAGREE","Gaat u akkoord met de bovenstaande condities?");
define("_MD_WFL_DISCLAIMERAGREEMENT","Disclaimer");
define("_MD_WFL_DUPLOADSCRSHOT","Upload screenshot:");
define("_MD_WFL_RESOURCEID","Bron ID: ");
define("_MD_WFL_REPORTER","Originele rapporteur: ");
define("_MD_WFL_DATEREPORTED","Rapporteer datum: ");
define("_MD_WFL_RESOURCEREPORTED","Gerapporteerde gebroken bron(nen)");
define("_MD_WFL_RESOURCEREPORTED2","Deze link is reeds gemeld als gebroken, we proberen het zo snel mogelijk op te lossen.");
define("_MD_WFL_BROWSETOTOPIC","<b>Linken bekijken op alfabetische volgorde</b>");
define("_MD_WFL_WEBMASTERACKNOW","Gebroken rapportage ontvangen: ");
define("_MD_WFL_WEBMASTERCONFIRM","Gebroken rapportage bevestigd: ");
define("_MD_WFL_ERRORSENDEMAIL","Gebroken rapportage bevestigd; Fout bij informatie email aan de webmaster.");

define("_MD_WFL_DELETE","Verwijderen");
define("_MD_WFL_DISPLAYING","Getoond door: ");
define("_MD_WFL_LEGENDTEXTNEW","Vandaag");
define("_MD_WFL_LEGENDTEXTNEWTHREE","sinds 3 dagen");
define("_MD_WFL_LEGENDTEXTTHISWEEK","sinds deze week");
define("_MD_WFL_LEGENDTEXTNEWLAST","ouder dan een week");
define("_MD_WFL_THISFILEDOESNOTEXIST","FOUT: deze link bestaat niet!");
define("_MD_WFL_BROKENREPORTED","Gebroken link gerapporteerd");

define("_MD_WFL_REV_SNEWMNAMEDESC"," 
Vul het onderstaande formulier volledig in. We zullen uw beoordeling zo spoedig mogelijk toevoegen.<br /><br />
Hartelijk dank dat u de tijd heeft willen nemen om uw beoordeling in te zenden. Wij willen onze gebruikers de mogelijkheid bieden om sneller kwalitatieve websites en overige producten te vinden.<br /><br />Alle beoordelingen zullen worden nagekeken door een van onze webmasters of moderatoren voordat ze aan de website worden toegevoegd. 
");
define("_MD_WFL_ISNOTAPPROVED","De inzending dient te worden goedgekeurd door een moderator.");
define("_MD_WFL_HOMEPAGETITLEC","Website naam: ");
define("_MD_WFL_SCREENSHOT","Screenshot:");
define("_MD_WFL_SCREENSHOTCLICK","Toon volledige afbeelding");
define("_MD_WFL_OTHERBYUID","Overige ingezonden linken door: ");
define("_MD_WFL_LINKTIMES","Aantal keren gelinkt: ");
define("_MD_WFL_MAINTOTAL","Totaal aantal linken: ");
define("_MD_WFL_LINKNOW","Bezoek deze link");
define("_MD_WFL_PAGES","<b>Pagina's</b>");
define("_MD_WFL_RATEDRESOURCE","Beoordeelde bron(nen)");
define("_MD_WFL_PUBLISHER","Inzender");
define("_MD_WFL_ERROR","FOUT Database updaten: Informatie is niet opgeslagen");
define("_MD_WFL_COPYRIGHT","copyright");
define("_MD_WFL_INFORUM","Discussieer in het forum");
// added frankblack
define("_MD_WFL_NOTALLOWESTOSUBMIT","U heeft geen rechten om linken in te zenden");
define("_MD_WFL_INFONOSAVEDB","Informatie is niet opgeslagen in de database: <br /><br />");

define("_MD_WFL_NEWLAST","Nieuwe inzendingen voor afgelopen week");
define("_MD_WFL_NEWTHIS","Nieuwe inzendingen van deze week");
define("_MD_WFL_THREE","Nieuwe inzendingen van de afgelopen 3 dagen");
define("_MD_WFL_TODAY","Nieuwe inzendingen van vandaag");
define("_MD_WFL_NO_FILES","Nog geen linken aanwezig");

define("_MD_WFL_NOPERMISSIONTOPOST","U heeft geen rechten om in deze categorie in te zenden.");
define("_MD_WFL_RESOURCES","Bronnen");

define("_MD_WFL_PUBLISHDATE","Gepubliceerd op");
define("_MD_WFL_APPROVE","Goedkeuren");
define("_MD_WFL_MODERATOR_OPTIONS","Moderator Opties");

// added by McDonald
define("_MD_WFL_NOLINKLOAD","Dank u voor uw inzending!");
define("_MD_WFL_ADDTO","Toevoegen aan: ");
define("_MD_WFL_INFORMATION","Informatie");
define("_MD_WFL_ADMINSECTION","Administratie Sectie");
define("_MD_WFL_COUNTRY","Land:");
define("_MD_WFL_COUNTRYB","<b>Land:</b>");
define("_MD_WFL_COUNTRYSORT","Land");
define("_MD_WFL_COUNTRYLTOH","Land (A - Z)");
define("_MD_WFL_COUNTRYHTOL","Land (Z - A)");
define("_MD_WFL_KEYWORDS","Keywords:");
define("_MD_WFL_KEYWORDS_NOTE","Keywords dienen gescheiden te worden door een komma (keyword1, keyword2, keyword3).");
define("_MD_WFL_PAGERANK","PageRank™: ");
define("_MD_WFL_PAGERANKALT","Google PageRank™: ");
define("_MD_WFL_QUICKVIEW","Snelle blik");
define("_MD_WFL_ADDRESS","Kontakt gegevens:");
define("_MD_WFL_LINK_GOOGLEMAP","Google Kaarten");
define("_MD_WFL_LINK_YAHOOMAP","Yahoo Kaarten");
define("_MD_WFL_LINK_MULTIMAP","Multimap Kaarten");
define("_MD_WFL_LINK_CHECKMAP","Kontrolleer kaart");
define("_MD_WFL_STREET1","Straat 1");
define("_MD_WFL_STREET2","Straat 2 (optioneel)");
define("_MD_WFL_TOWN","Plaats");
define("_MD_WFL_STATE","Provincie");
define("_MD_WFL_ZIPCODE","Postcode");
define("_MD_WFL_TELEPHONE","Telefoon");
define("_MD_WFL_TEL","Tel. ");
define("_MD_WFL_FAX","Fax. ");
define("_MD_WFL_GETMAP","Naar kaart");

// Version 1.05 RC5
define("_MD_WFL_VOIP","VoIP ");
define("_MD_WFL_PRINT","Print");
define("_MD_WFL_NOITEMSELECTED","Geen geldige link geselekteerd!");
define("_MD_WFL_MOBILE","Mobiel");

// Version 1.05 RC6
define("_MD_WFL_VAT","KvK nr.");
define("_MD_WFL_VATWIKI", '<small>Voor meer informatie zie <a href="http://en.wikipedia.org/wiki/Value_added_tax_identification_number" target="_blank">Wikipedia</a> (engels)</small>');
define("_MD_WFL_EMAIL","Email");
define("_MD_WFL_LINK_CREATEADDRESS", '<b>Adres formulier</b>');

//Version 1.06 RC2
define('_MD_WFL_STOPIT','HOUDT DAAR ONMIDDELIJK MEE OP!!');
?>
