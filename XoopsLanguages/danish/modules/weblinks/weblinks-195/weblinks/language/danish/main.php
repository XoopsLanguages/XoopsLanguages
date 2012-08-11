<?php
// $Id: main.php,v 1.28 2008/02/26 16:01:42 ohwada Exp $

// 2008-02-17 K.OHWADA
// pagerank, pagerank_update

// 2007-11-01 K.OHWADA
// _WEBLINKS_ERROR_LENGTH
// remove _WEBLINKS_INIT_NOT

// 2007-09-01 K.OHWADA
// waiting list
// change _WLS_NOTIFYAPPROVE

// 2007-08-01 K.OHWADA
// _WEBLINKS_GM_CURRENT_ADDRESS
// <br> => <br />

// 2007-04-08 K.OHWADA
// _WEBLINKS_GM_TYPE

// 2007-03-25 K.OHWADA
// _WEBLINKS_ALBUM_ID

// 2007-02-20 K.OHWADA
// forum

// 2007-01-20 K.OHWADA
// _WEBLINKS_CAT_AUX_TEXT_1

// 2006-12-11 K.OHWADA
// google map: googleGeocode
// _WEBLINKS_TIME_PUBLISH

// 2006-11-26 K.OHWADA
// google map: JP Geocode

// 2006-11-04 K.OHWADA
// google map: JP inverse Geocoder
// google map: inline mode

// 2006-10-01 K.OHWADA
// conflict with rssc
// add _WEBLINKS_RSSC_LID
// google map

// 2006-05-15 K.OHWADA
// weblinks ver 1.1
// _WEBLINKS_MID, etc

// 2006-01-01 K.OHWADA
// weblinks ver 1.0
// module depulication

//=========================================================
// WebLinks Module
// language main
// 2004-10-24 K.OHWADA
//=========================================================

// --- define language begin ---
if( !defined('WEBLINKS_LANG_MB_LOADED') ) 
{

define('WEBLINKS_LANG_MB_LOADED', 1);

//======	 singlelink.php	======
define("_WLS_CATEGORY","Kategori");
define("_WLS_HITS","Hits");
define("_WLS_RATING","Bedømmelse");
define("_WLS_VOTE","Stem");
define("_WLS_ONEVOTE","1 stemme");
define("_WLS_NUMVOTES","%s stemmer");
define("_WLS_RATETHISSITE","Bedøm denne side");
define("_WLS_REPORTBROKEN","Anmeld brudt link");
define("_WLS_TELLAFRIEND","Send til en ven");
define("_WLS_EDITTHISLINK","Redigér dette link");
define("_WLS_MODIFY","Redigér");

//======	submit.php	======
define("_WLS_SUBMITLINKHEAD","Indsend nyt link");
define("_WLS_SUBMITONCE","Indsend kun dit link én gang.");
define("_WLS_DONTABUSE","Brugernavn og IP-adresse gemmes, så misbrug ikke systemet.");
define("_WLS_TAKESHOT","Vi vil tage et skærmdump af din side og det kan tage flere dage før din side tilføjes vores database.");
define("_WLS_ALLPENDING","Indsendelse af link er registreret <b>midlertidigt</b>, og det offentliggøres efter et gennemsyn fra webmaster.");
define("_WLS_WHENAPPROVED","Du vil modtage en E-mail når den er godkendt.");
define("_WLS_RECEIVED","Vi har modtaget dine informationer. Tak!");

//======	modlink.php	======
define("_WLS_REQUESTMOD","Bed om link redigering");
define("_WLS_THANKSFORINFO","Tak for informationen. Vi kigger på linket snarest.");


define("_WLS_THANKSFORHELP","Tak for din hjælp med at vedligeholde linksamlingen.");
define("_WLS_FORSECURITY","Af sikkerhedsmæssige årsager bliver din brugernavn og IP-adressen også midlertidigt gemt.");

define("_WLS_SEARCHFOR","Søg efter"); //-no use
define("_WLS_ANY","Enhver");
define("_WLS_SEARCH","Søg");

define("_WLS_MAIN","Hoved");
define("_WLS_SUBMITLINK","Indsend link");
define("_WLS_POPULAR","Populære");
define("_WLS_TOPRATED","Højst bedomt");

define("_WLS_NEWTHISWEEK","Nye i denne uge");
define("_WLS_UPTHISWEEK","Opdateret i denne uge");

define("_WLS_POPULARITYLTOM","Popularitet (Færrest til flest hits)");
define("_WLS_POPULARITYMTOL","Popularitet (Flest til færrest hits)");
define("_WLS_TITLEATOZ","Titel (A to Z)");
define("_WLS_TITLEZTOA","Titel (Z to A)");
define("_WLS_DATEOLD","Dato (Ældste links først)");
define("_WLS_DATENEW","Dato (Nyeste links først)");
define("_WLS_RATINGLTOH","Bedømmelse (Laveste til højeste bedømmelse)");
define("_WLS_RATINGHTOL","Bedømmelse (Højeste til laveste bedømmelse)");

//define("_WLS_NOSHOTS","No Screenshots Available");
//define("_WLS_DESCRIPTIONC","Description: ");
//define("_WLS_EMAILC","Email: ");
//define("_WLS_CATEGORYC","Category: ");
//define("_WLS_LASTUPDATEC","Last Update: ");
//define("_WLS_HITSC","Hits: ");
//define("_WLS_RATINGC","Rating: ");

define("_WLS_THEREARE","Der er <b>%s</b> links i vores Database");
define("_WLS_LATESTLIST","Seneste registreringer");

//define("_WLS_LINKID","Link ID: ");
//define("_WLS_SITETITLE","Website Title: ");
//define("_WLS_SITEURL","Website URL: ");
//define("_WLS_OPTIONS","Options: ");
define("_WLS_LINKID","Link ID");
define("_WLS_SITETITLE","Website titel");
define("_WLS_SITEURL","Website URL");
define("_WLS_OPTIONS","Muligheder");

define("_WLS_NOTIFYAPPROVE","Giv mig besked når dette link er godkendt");
//define("_WLS_SHOTIMAGE","Screenshot Img: ");
define("_WLS_SENDREQUEST","Indsend ønske");

define("_WLS_VOTEAPPRE","Din stemme er værdsat.");
define("_WLS_THANKURATE","Tak fordi du tog dig tid til at stemme her på %s.");
define("_WLS_VOTEFROMYOU","Indput for brugere, som dig, vil hjælpe andre brugere med bedre at vælge link.");
define("_WLS_VOTEONCE","Vær venlig ikke at stemme på det samme link mere end én gang.");
define("_WLS_RATINGSCALE","Skalaen går fra 1 til 10, hvor 1 er den laveste og 10 er bedst.");
define("_WLS_BEOBJECTIVE","Du skal være objektive, hvis alle modtager 1 eller 10, er bedømmelsen ikke brugbar.");
define("_WLS_DONOTVOTE","Vær venlig ikke at stemme på dit eget link.");
define("_WLS_RATEIT","Bedøm!");

define("_WLS_INTRESTLINK","Interessant website link på %s");  // %s is your site name
define("_WLS_INTLINKFOUND","Her er en interessant website link jeg har fundet på %s");  // %s is your site name

define("_WLS_RANK","Rank");
define("_WLS_TOP10","%s Top 10"); // %s is a link category title

define("_WLS_SEARCHRESULTS","Søge resultat for <b>%s</b>:"); // %s is search keywords
define("_WLS_SORTBY","Sortér efter:");
define("_WLS_TITLE","Titel");
define("_WLS_DATE","Dato");
define("_WLS_POPULARITY","Popularitet");
define("_WLS_CURSORTEDBY","Sider i øjeblikket sorteret efter: %s");
define("_WLS_PREVIOUS","Forrige");
define("_WLS_NEXT","Næste");
define("_WLS_NOMATCH","Ingen resultater fundet til din søgning");

define("_WLS_SUBMIT","Indsend");
define("_WLS_CANCEL","Fortryd");

define("_WLS_ALREADYREPORTED","Du har allerede indsendt en brudt rapport for dette link.");
define("_WLS_MUSTREGFIRST","Beklager, du ikke har tilladelse til at udføre denne handling.<br />Register dig som bruger eller login først!");
define("_WLS_NORATING","Ingen bedømmelse valgt.");
define("_WLS_CANTVOTEOWN","Du kan ikke stemme på et link, du selv har indsendt.<br />Alle stemmer er logget og gennemses.");
define("_WLS_VOTEONCE2","Stem kun på links én gang.<br />Alle stemmer er logget og gennemses.");

//%%%%%%	Admin	  %%%%%

define("_WLS_WEBLINKSCONF","Link Konfiguration");
define("_WLS_GENERALSET","Link generelle indstillinger.");
//define("_WLS_ADDMODDELETE","Add, Modify, and Delete Categories/Links");
define("_WLS_LINKSWAITING","Nye links der afventer godkendelse");
define("_WLS_MODREQUESTS","Redigerede link der afventer godkendelse");
define("_WLS_BROKENREPORTS","Brudte link rapport");

//define("_WLS_SUBMITTER","Submitter: ");
define("_WLS_SUBMITTER","Indsender");

define("_WLS_VISIT","Besøg");

//define("_WLS_SHOTMUST","Screenshot image must be a valid image file under %s directory (ex. shot.gif). Leave it blank if no image file.");
define("_WLS_LINKIMAGEMUST","Indtast link billed filnavn under %s mappen. (f.eks. shot.gif) Efterlad blankt hvis der ikke er noget billed. ");

define("_WLS_APPROVE","Godkend");
define("_WLS_DELETE","Slet");
define("_WLS_NOSUBMITTED","Ingen nye links indsendt.");
define("_WLS_ADDMAIN","Tilføj en hoved kategori");
define("_WLS_TITLEC","Titel: ");
define("_WLS_IMGURL","Billed URL (MULIGHED Billed højde vil blive sat til 50): ");
define("_WLS_ADD","Tilføj");
define("_WLS_ADDSUB","Tilføj en under kategori");
define("_WLS_IN","i");
define("_WLS_ADDNEWLINK","Tilføj et nyt link");
define("_WLS_MODCAT","Redigér kategori");
define("_WLS_MODLINK","Redigér link");
define("_WLS_TOTALVOTES","Link stemmer (total antal stemmer: %s)");
define("_WLS_USERTOTALVOTES","Stemmer fra registerede brugere (total antal stemmer: %s)");
define("_WLS_ANONTOTALVOTES","Stemmer fra anonyme brugere (total antal stemmer: %s)");
define("_WLS_USER","Bruger");
define("_WLS_IP","IP Adresse");
define("_WLS_USERAVG","Brugers gennemsnitslige bedømmelse");
define("_WLS_TOTALRATE","Total antal bedømmelser");
define("_WLS_NOREGVOTES","Ingen stemmer fra registerede brugere ");
define("_WLS_NOUNREGVOTES","Ingen stemmer fra uregisterede brugere");
define("_WLS_VOTEDELETED","Stemmer slettet.");
define("_WLS_NOBROKEN","Ingen brudte link rapporter.");
define("_WLS_IGNOREDESC","Ignorer (Ignorerer rapporten og sletter kun <b>brudte link rapporten</b>)");
define("_WLS_DELETEDESC","Slet (Sletter <b>det rapporterede data</b> og <b>brudte link rapporten</b> for dette link.)");
define("_WLS_REPORTER","Rapporter afsender");

//define("_WLS_IGNORE","Ignore");
define("_WLS_IGNORE","Ignorer (Slet)");

define("_WLS_LINKDELETED","Link slettet.");
define("_WLS_BROKENDELETED","Brudte link rapport slettet.");
define("_WLS_USERMODREQ","Brugers link redigerings ønsker");
define("_WLS_ORIGINAL","Original");
define("_WLS_PROPOSED","Foreslag");

//define("_WLS_OWNER","Owner: ");
define("_WLS_OWNER","Ejer");

define("_WLS_NOMODREQ","Ingen ønsker om redigering af link.");
define("_WLS_DBUPDATED","Databasen blev opdateret!");
define("_WLS_MODREQDELETED","Redigeringsønske slettet.");
define("_WLS_IMGURLMAIN","Billed URL (MULIGHED og kun muligt for hovedkategorier. Billedhøjde vil blive reduceret til 50): ");
define("_WLS_PARENT","Øvre kategori:");
define("_WLS_SAVE","Gem ændringer");
define("_WLS_CATDELETED","Kategori slettet.");
define("_WLS_WARNING","ADVARSEL: Er du sikker på at du vil slette denne kategori og alle dets link og kommentar?");
define("_WLS_YES","Ja");
define("_WLS_NO","Nej");
define("_WLS_NEWCATADDED","Ny kategori tilføjet!");
define("_WLS_ERROREXIST","FEJL: Linket du sendte findes allerede i databasen!");
define("_WLS_ERRORTITLE","FEJL: Du skal indtaste en titel!");
define("_WLS_ERRORDESC","FEJL: Du skal indtaste en beskrivelse!");
define("_WLS_NEWLINKADDED","Nyt link tilføjet databasen.");
define("_WLS_YOURLINK","Det link på %s");
define("_WLS_YOUCANBROWSE","Du kan se det link på %s");
define("_WLS_HELLO","Hej %s");
define("_WLS_WEAPPROVED","Vi har godkendt dit link.");
define("_WLS_THANKSSUBMIT","Tak for din indsendelse af link!");
define("_WLS_ISAPPROVED","Vi har godkendt dit link");


//---------------------------------------------------------
// weblinks
//---------------------------------------------------------

//======	index.php	======
// guidance bar
define("_WLS_SUBMIT_NEW_LINK","Indsend nyt link");
define("_WLS_SITE_POPULAR","Populær site");
define("_WLS_SITE_HIGHRATE","Højt bedømt site");
define("_WLS_SITE_NEW","Seneste site");
define("_WLS_SITE_UPDATE","Opdateret site");

// corrected typo
define("_WLS_SITE_RECOMMEND","Anbefal site");

define("_WLS_SITE_MUTUAL","Fælles side");
define("_WLS_SITE_RANDOM","Tilfældig side");
define("_WLS_NEW_SITELIST","Seneste side");
define("_WLS_NEW_ATOMFEED","Seneste RSS/ATOM Feed");
define("_WLS_SITE_RSS","RSS/ATOM Site");
define("_WLS_ATOMFEED","RSS/ATOM Feed");

define("_WLS_LASTUPDATE","Seneste opdatering");
define("_WLS_MORE","Flere detaljer");

//======	 singlelink.php	======
define("_WLS_DESCRIPTION","Beskrivelse");
define("_WLS_PROMOTER","Gensidigt");
define("_WLS_ZIP","Postnummer");
define("_WLS_ADDR","Adresse");
define("_WLS_TEL","Telefon nummer");
define("_WLS_FAX","Fax nummer");

//======	 submit.php	======
define("_WLS_BANNERURL","Banner URL");
define("_WLS_NAME","Navn");
define("_WLS_EMAIL","Email");
define("_WLS_COMPANY","Virksomhed/organisation");
define("_WLS_STATE","Stat");
define("_WLS_CITY","By");
define("_WLS_ADDR2","Adresse 2");
define("_WLS_PUBLIC","Udgiv");
define("_WLS_NOTPUBLIC","Udgiv ikke");
define("_WLS_NOTSELECT","Ikke specificeret");
define("_WLS_SUBMIT_INDISPENSABLE","Markerede '<b>*</b>' felter, skal udfyldes.");
define("_WLS_SUBMIT_USER_COMMENT",'"Kommentar til Admin" bruges til udtalelser, anmodninger, etc.<br />Denne kolonne vises ikke på siden.<br />Udfyld URL på din side, hvis den linker til denne side,  når du ønsker at markere "gensidigt link".');
define("_WLS_USER_COMMENT","Kommentar til Admin");
define("_WLS_NOT_DISPLAY","Denne kolonne vises ikke på siden.");

//======	modlink.php	======
define("_WLS_MODIFYAPPROVED","Din forespørsel på redigering af link er godkendt. ");
define("_WLS_MODIFY_NOT_OWNER","Du må ikke bedømme de link du selv har indsendt.");
define("_WLS_MODIFY_PENDING","Ændring af linket er registreret <b>midlertidigt</b>, og det offentliggøres efter kontrol fra webmaster. <br />
Det kan tage noget tid, før linket er offentliggjort.");
define("_WLS_LINKSUBMITTER","Link indsender");

//======	user.php	======
define('_WLS_PLEASEPASSWORD','Indtast dit password');
define('_WLS_REGSTERED','Registeret bruger');
define('_WLS_REGSTERED_DSC','Alle kan redigerer link informationer. <br>Webmaster vil checke redigeringer før offentliggørelse.');
define('_WLS_EMAILNOTFOUND',"E-mail adresse stemmer ikke.");


// error message
define("_WLS_ERROR_FILL","Fejl: Indtast %s");
define("_WLS_ERROR_ILLEGAL","Fejl: Forkert format %s");
define("_WLS_ERROR_CID",  "Fejl: Vælg kategori");
define("_WLS_ERROR_URL_EXIST","Fejl: Linket er allerede registreret. ");
define("_WLS_WARNING_URL_EXIST","Advarsel: Et ligende link er allerede registreret. ");
define("_WLS_ERRORNOLINK","Fejl: Et sådan link findes ikke");


define("_WLS_CATLIST","Kategori liste");
define("_WLS_LINKIMAGE","Link billed: ");
define("_WLS_USERID","Bruger ID: ");
define("_WLS_CATEGORYID","Kategori ID: ");
define("_WLS_CREATEC","Registrerings dato: ");
define("_WLS_TIMEUPDATE","Opdater");
define("_WLS_NOTTIMEUPDATE","Ingen opdatering");
define("_WLS_LINKFLAG","Opret en link herunder ");
define("_WLS_NOTLINKFLAG","Opret ikke et link herunder");
define("_WLS_GOTOADMIN","Gå til aministration side");

// category delete
define("_WLS_DELCAT","Slet kategori");
define("_WLS_SUBCATEGORY","Underkategori");
define("_WLS_SUBCATEGORY_NON","Ingen kategori");
define("_WLS_LINK_BELONG","Relaterede links");
define("_WLS_LINK_BELONG_NUMBER","Antal relaterede links");
define("_WLS_LINK_BELONG_NON","Ingen relaterede links");
define("_WLS_LINK_MAYBE_DELETE","Links der skal slettes");
define("_WLS_LINK_MAYBE_DELETE_DSC","Resultatet er ikke helt korrekt, hvis der er underkategorier. Andre links slettes muligvis også. ");
define("_WLS_LINK_DELETE_NON","Ingen links skulle slettes");
define("_WLS_CATEGORY_LINK_DELETE_EXCUTE","Slet kategori og relaterede links");
define("_WLS_CATEGORY_LINK_DELETED","Kategori og relaterede links blev slettet.");
define("_WLS_CATEGORY_DELETED","Slettede kategotier");
define("_WLS_LINK_DELETED","Slettede links");

define("_WLS_ERROR_CATEGORY","Fejl: Kategori ikke er valgt"); 
define("_WLS_ERROR_MAX_SUBCAT","Fejl: Antal udvalgte kategorier overstiger det maksimale antal der kan slettes på én gang"); 
define("_WLS_ERROR_MAX_LINK_BELONG","Fejl: Antal valgte relaterede links overstiger det maksimale antal, der kan slettes på en gang."); 
define("_WLS_ERROR_MAX_LINK_DEL","Fejl: Antal udvalgte links overstiger det maksimale antal, der kan slettes på en gang.");

// recommend site, mutual site
define("_WLS_MARK","mærk");
define("_WLS_ADMINCOMMENT","admin kommentar");

// broken link check
define("_WLS_BROKEN_COUNTER","Brudte link tæller");

// RSS/ATOM URL
define("_WLS_RSS_URL","URL af RSS/Atom"); 
define("_WLS_RSS_URL_0","ingen brug"); 
define("_WLS_RSS_URL_1","RSS-type"); 
define("_WLS_RSS_URL_2","ATOM type"); 
define("_WLS_RSS_URL_3","auto opdagelse");

define("_WLS_ATOMFEED_DISTRIBUTE","Distribution af RSS/Atom feeds, som vises her.");
define("_WLS_ATOMFEED_FIREFOX","Hvis du benytter <a href='http://www.mozilla.org/products/firefox/' target='_blank'>Firefox</a>, så gem ikke denne side under favoritte, du kan browse RSS/ATOM feed. ");

// 2005-10-20
define("_WLS_EMAIL_APPROVE","Giv besked hvis kodkendt");
define("_WLS_TOPTEN_TITLE","%s Top %u");
// %s is a link category title
// %u is number of links
define("_WLS_TOPTEN_ERROR","Der er for mange top kategorier. Stoppede for at vise %u");
// %u is munber of categories

// 2006-04-02
if( !defined('_WEBLINKS_MID') ) {define('_WEBLINKS_MID','Rediger ID'); }
if( !defined('_WEBLINKS_USERID') ) {define('_WEBLINKS_USERID','Bruger ID');}
if( !defined('_WEBLINKS_CREATE') ) {define('_WEBLINKS_CREATE','Oprettet');}

// conflict with rssc
//define('_HOME',  'Home');
//define('_SAVE',  'Save');
//define('_SAVED','Saved');
//define('_CREATE','Create');
//define('_CREATED','Created');
//define('_FINISH',   'Finish');
//define('_FINISHED','Finished');
//define('_EXECUTE','Execute');
//define('_EXECUTED','Executed');
//define('_PRINT','Print');
//define('_SAMPLE','Sample');

define('_NO_MATCH_RECORD','Der er ingen matches');
define('_MANY_MATCH_RECORD','Der er 2 eller flere matches');
define('_NO_CATEGORY','Ingen kategori');	
define('_NO_LINK','Intet link');
define('_NO_TITLE','Ingen titel');
define('_NO_URL','Ingen URL');
define('_NO_DESCRIPTION','Ingen beskrivelse');

//define('_GOTO_MAIN',   'Go to Main');
//define('_GOTO_MODULE','Go to Module');

// config
//define('_WEBLINKS_INIT_NOT','The config table is not initialized');
//define('_WEBLINKS_INIT_EXEC','Config Table Initialized');
//define('_WEBLINKS_VERSION_NOT','This module is not version  %s yet. Update now');
//define('_WEBLINKS_UPGRADE_EXEC','Upgrade the config table');

// html tag
define('_WEBLINKS_OPTIONS','indstillinger');
define('_WEBLINKS_DOHTML',' Brug HTML tags');
define('_WEBLINKS_DOIMAGE',' Brug billeder');
define('_WEBLINKS_DOBREAK',' Brug linebreak');
define('_WEBLINKS_DOSMILEY',' Brug smiley icons');
define('_WEBLINKS_DOXCODE',' Brug XOOPS codes');

define('_WEBLINKS_PASSWORD_INCORRECT','Forkert Password');
define('_WEBLINKS_ETC','osv');
define('_WEBLINKS_AUTH_UID',    'Bruger ID Match');
define('_WEBLINKS_AUTH_PASSWD','Password Match');
define('_WEBLINKS_BANNER_SIZE','Banner Size');

// === 2006-10-01 ===
// conflict with rssc
//if( !defined('_SAVE') ) 
//{
//	define('_HOME',  'Home');
//	define('_SAVE',  'Save');
//	define('_SAVED','Saved');
//	define('_CREATE','Create');
//	define('_CREATED','Created');
//	define('_EXECUTE','Execute');
//	define('_EXECUTED','Executed');
//}

define('_WEBLINKS_MAP_USE','Brug Map Ikon');

// rssc
define('_WEBLINKS_RSSC_LID',  'RSSC Lid');
define('_WEBLINKS_RSS_MODE',  'RSS Mode');
define('_WEBLINKS_RSSC_NOT_INSTALLED','RSSC modul ( %s ) er ikke installeret');
define('_WEBLINKS_RSSC_INSTALLED',     'RSSC modul ( %s ) ver %s er installeret');
define('_WEBLINKS_RSSC_REQUIRE','Skal bruge RSSC modul ver %s eller nyere');
define('_WEBLINKS_GOTO_SINGLELINK','GÅ til Link Info');

// warnig
define('_WEBLINKS_WARN_NOT_READ_URL','Advarsel: Kan ikke læse url');
define('_WEBLINKS_WARN_BANNER_NOT_GET_SIZE','Advarsel: Kan ikke hente banner størrelse');

// google map: hacked by wye <http://never-ever.info/>
define('_WEBLINKS_GM_LATITUDE',  'Breddegrad');
define('_WEBLINKS_GM_LONGITUDE','Længdegrad');
define('_WEBLINKS_GM_ZOOM',      'Zoom niveau');
define('_WEBLINKS_GM_GET_LOCATION','Lokalitetens info er hentet med GoogleMaps');
//define('_WEBLINKS_GM_GET_BUTTON','Get Latitude/Longitude/Zoom');
define('_WEBLINKS_GM_DEFAULT_LOCATION','Default lokalitet');
define('_WEBLINKS_GM_CURRENT_LOCATION','Nuværende Lokalitet');

// === 2006-11-04 ===
// google map inline mode
define('_WEBLINKS_GOOGLE_MAPS','Google Maps');
define('_WEBLINKS_JAVASCRIPT_INVALID','Din browser kan ikke bruge JavaScript');
define('_WEBLINKS_GM_NOT_COMPATIBLE',  'Din browser kan ikke bruge GoogleMaps');
define('_WEBLINKS_GM_NEW_WINDOW','Vis i nyt vindue');
define('_WEBLINKS_GM_INLINE',   'Vis Inline');
define('_WEBLINKS_GM_DISP_OFF','Slå display fra');

// google map: inverse Geocoder
define('_WEBLINKS_GM_GET_LATITUDE','Hent breddegrad/Længdegrad/Zoom');
define('_WEBLINKS_GM_GET_ADDR','Hent Addresse');

// === 2006-12-11 ===
// google map: Geocode
define('_WEBLINKS_GM_SEARCH_MAP_FROM_ADDRESS','Søg kort fra adressen');
define('_WEBLINKS_GM_NO_MATCH_PLACE','Der er intet sted der matcher adressen');
define('_WEBLINKS_GM_JP_SEARCH_MAP_FROM_ADDRESS','Søg kort for adresse i Japan');
define('_WEBLINKS_GM_JP_TOKYO_AC_GEOCODE','Japan Tokyo University');
define('_WEBLINKS_GM_JP_MLIT_ISJ','Japan Ministry of Land Infrastructure and Transport');

// link item
define('_WEBLINKS_TIME_PUBLISH','Tid udgivet');
define('_WEBLINKS_TIME_EXPIRE',  'Tid udløbet');
define('_WEBLINKS_TEXTAREA',     'Textarea');

define('_WEBLINKS_WARN_TIME_PUBLISH','Udgivelses tiden er ikke endu');
define('_WEBLINKS_WARN_TIME_EXPIRE',  'Udløbstiden er overskredet');
define('_WEBLINKS_WARN_BROKEN','Dette link er muligvis brudt');

// === 2007-02-20 ===
// forum
define('_WEBLINKS_LATEST_FORUM','Seneste Forum');
define('_WEBLINKS_FORUM',  'Forum');
define('_WEBLINKS_THREAD','Tråd');
define('_WEBLINKS_POST',   'Post');
define('_WEBLINKS_FORUM_ID',  'Forum ID');
define('_WEBLINKS_FORUM_SEL','Forum vælg');
define('_WEBLINKS_COMMENT_USE',  'Brug XOOPS kommentar');

// aux
define('_WEBLINKS_CAT_AUX_TEXT_1','aux_text_1');
define('_WEBLINKS_CAT_AUX_TEXT_2','aux_text_2');
define('_WEBLINKS_CAT_AUX_INT_1',  'aux_int_1');
define('_WEBLINKS_CAT_AUX_INT_2',  'aux_int_2');

// captcha
define('_WEBLINKS_CAPTCHA','Captcha');
define('_WEBLINKS_CAPTCHA_DESC','Anti-Spam');
define('_WEBLINKS_ERROR_CAPTCHA','Fejl: Fejl i Captcha');
define('_WEBLINKS_ERROR','Fejl');

// hack for multi site
define('_WEBLINKS_CAT_TITLE_JP','Japansk Titel');
define('_WEBLINKS_DISABLE_FEATURE','Slå denne fra');
define('_WEBLINKS_REDIRECT_JP_SITE','Spring til japans side');

// === 2007-03-25 ===
define('_WEBLINKS_ALBUM_ID',  'Album ID');
define('_WEBLINKS_ALBUM_SEL','Album Vælg');

// === 2007-04-08 ===
define('_WEBLINKS_GM_TYPE',  'Google kort Type');
define('_WEBLINKS_GM_TYPE_MAP',       'Kort');
define('_WEBLINKS_GM_TYPE_SATELLITE','Sattelit');
define('_WEBLINKS_GM_TYPE_HYBRID',    'Hybrid');

// === 2007-08-01 ===
define('_WEBLINKS_GM_CURRENT_ADDRESS','Nuværende adresse');
define('_WEBLINKS_GM_SEARCH_LIST','Søgeresultater');

// === 2007-09-01 ===
// waiting list
define('_WEBLINKS_ADMIN_WAITING_LIST',"Admin's ventende liste");
define('_WEBLINKS_USER_WAITING_LIST',  'Din ventende liste');
define('_WEBLINKS_USER_OWNER_LIST',    'Din indsendt liste');

// submit form
define('_WEBLINKS_TIME_PUBLISH_SET','Sæt udgivelsestiden');
define('_WEBLINKS_TIME_PUBLISH_DESC','Hvis du ikke angiver vil udgivelsesdatoen blive udateret');
define('_WEBLINKS_TIME_EXPIRE_SET',  'Sæt udløbsdato');
define('_WEBLINKS_TIME_EXPIRE_DESC','Hvis du ikke angiver noget forbliver udløbsdatoen udateret');
define('_WEBLINKS_DEL_LINK_CONFIRM','Godkend slet');
define('_WEBLINKS_DEL_LINK_REASON','Årsag til slet');

// === 2007-11-01 ===
define('_WEBLINKS_ERROR_LENGTH',"Fejl: %s skal være mindre end %s tegn");

// === 2008-02-17 ===
// linkitem
define('_WEBLINKS_PAGERANK','PageRank');
define('_WEBLINKS_PAGERANK_UPDATE','Pagerank Opdateringstid');
define('_WEBLINKS_GM_KML_DEBUG','Debug visning af KML');

// gmap
define('_WEBLINKS_SITE_GMAP','GoogleMaps Side');
define('_WEBLINKS_KML_LIST',  'KML Liste');
define('_WEBLINKS_KML_LIST_DESC','Download KML og vis i GoogleEarth');
define('_WEBLINKS_KML_PERPAGE','Antal der skal adskilles');

// pagerank
define('_WEBLINKS_SITE_PAGERANK','Højt PageRank side');

}
// --- define language end ---

?>