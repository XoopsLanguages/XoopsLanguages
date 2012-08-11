<?php
// $Id: global.php 8066 2011-11-06 05:09:33Z beckmi $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define("_PLEASEWAIT","Vent venligst");
define("_FETCHING","Indlæser ...");
define("_TAKINGBACK","Bringer dig tilbage til hvor du var ....");
define("_LOGOUT","Log ud");
define("_SUBJECT","Om");
define("_MESSAGEICON","Meddelelses ikon");
define("_COMMENTS","Kommentarer");
define("_POSTANON","Post anonymt");
define("_DISABLESMILEY","Deaktiver smiley");
define("_DISABLEHTML","Deaktiver html");
define("_PREVIEW","Prøvevisning");
define("_GO","OK!");
define("_NESTED","Nedarvet");
define("_NOCOMMENTS","Ingen kommentarer");
define("_FLAT","Flad");
define("_THREADED","Tråd");
define("_OLDESTFIRST","Ældste først");
define("_NEWESTFIRST","Nyeste først");
define("_MORE","mere ...");
define("_MULTIPAGE","For at få din artikel til at strækker sig over flere sider, indsætte ordet <font color=red>[pagebreak]</font> (med specialtegn) i artiklen.");
define("_IFNOTRELOAD","Hvis siden ikke automatisk indlæser, klik <a href=\'%s\'>her</a>");
// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED","%s er påkrævet");
define("_XOBJ_ERR_SHORTERTHAN","%s skal være kortere end %d tegn.");
// %%%%%%    File Name themeuserpost.php     %%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Indsendt af");
define("_VISITWEBSITE","Besøg hjemmeside");
define("_SENDPMTO","Send privat besked til %s");
define("_SENDEMAILTO","Send email til %s");
define("_ADD","Tilføj");
define("_REPLY","Svar");
define("_DATE","Dato"); // Posted date
// %%%%%%    File Name admin_functions.php     %%%%%
define("_MAIN","Hoved");
define("_MANUAL","Manuel");
define("_INFO","Info");
define("_CPHOME","Kontrolpanel");
define("_YOURHOME","Hjemmeside");
// %%%%%%    File Name misc.php (who's-online popup)    %%%%%
define("_WHOSONLINE","Hvem er Online");
define("_GUESTS","Gæster");
define("_MEMBERS","Medlemmer");
define("_ONLINEPHRASE","<strong>%s</strong> bruger(e) er online");
define("_ONLINEPHRASEX","<strong>%s</strong> bruger(e) kigger på <strong>%s </strong>");
define("_CLOSE","Luk"); // Close window
// %%%%%%    File Name module.textsanitizer.php     %%%%%
define("_QUOTEC","Citat:");
// %%%%%%    File Name admin.php     %%%%%
define("_NOPERM","Beklager, du har ikke rettighed til dette område.");
// %%%%%        Common Phrases        %%%%%
define("_NO","Nej");
define("_YES","Ja");
define("_EDIT","Redigér");
define("_DELETE","Slet");
define("_SUBMIT","Indsend");
define("_MODULENOEXIST","Valgte modul findes ikke!");
define("_ALIGN","Juster");
define("_LEFT","Venstre");
define("_CENTER","Center");
define("_RIGHT","Højre");
define("_FORM_ENTER","Indtast venligst %s");
define("_MUSTWABLE","Fil %s skal være skrivbar af serveren!"); // %s represents file name
// Module info
define("_PREFERENCES","Indstillinger");
define("_VERSION","Version");
define("_DESCRIPTION","Beskrivelse");
define("_AUTHOR","Forfatter");
define("_CREDITS","Medvirkende");
define("_LICENCE","Licens");
define("_ERRORS","Fejl");
define("_NONE","Ingen");
define("_ON","den");
define("_READS","læst");
define("_WELCOMETO","Velkommen til %s");
define("_SEARCH","Søg");
define("_ALL","Alle");
define("_TITLE","Titel");
define("_OPTIONS","Muligheder");
define("_QUOTE","Citat");
define("_LIST","Liste");
define("_LOGIN","Bruger log ind");
define("_USERNAME","Brugernavn:");
define("_PASSWORD","Password:");
define("_SELECT","Vælg");
define("_IMAGE","Billed");
define("_SEND","Send");
define("_CANCEL","Annuller");
define("_ASCENDING","Stigende orden");
define("_DESCENDING","Faldende orden");
define("_BACK","Tilbage");
define("_NOTITLE","Ingen titel");
/**
* Image manager
*/
define("_MD_ADDIMGCAT","Tilføj kategori");
define("_MD_IMGCATNAME","Kategori navn");
define("_MD_IMGCATRGRP","Vælg grupper der kan bruge billedmanager");
define("_MD_IMGCATWGRP","Vælg grupper der kan oploade billeder");
define("_MD_IMGCATWEIGHT","visnings orden i billed manager");
define("_MD_IMGCATDISPLAY","vis");
define("_MD_IMGCATSTRTYPE","Billeder oploades til:");
define("_MD_STRTYOPENG","Dette kan ikke ændres senere!");
define("_MD_ASFILE","Gem som filer (i oploadsmappen)");
define("_MD_INDB","Gem i databasen (som binary \"blob\" data)");
define("_MD_IMGMAIN","Kategori"); 
define("_MD_EDITIMGCAT","Billed instillinger");
define('_IMGMANAGER','Billed manager');
define('_NUMIMAGES','%s billeder');
define('_ADDIMAGE','Tilføj billed');
define('_IMAGENAME','Navn:');
define('_IMGMAXSIZE','Max tilladte størrelse (bytes):');
define('_IMGMAXWIDTH','Max tilladte bredte (pixels):');
define('_IMGMAXHEIGHT','Max tilladte højde (pixels):');
define('_IMAGECAT','Kategori:');
define('_IMAGEFILE','Billed fil:');
define('_IMGWEIGHT','visnings orden i billed manager:');
define('_IMGDISPLAY','Vis dette billede?');
define('_IMAGEMIME','MIME type:');
define('_FAILFETCHIMG','Kunne ikke hente oploadet fil %s');
define('_FAILSAVEIMG','FEJL ved gemning af billed %s i databasen');
define('_NOCACHE','Ingen Cache');
define('_CLONE','Clone');
// %%%%%    For xoopsform files %%%%%
define("_STARTSWITH","Begynder med");
define("_ENDSWITH","Slutter med");
define("_MATCHES","Er lig med");
define("_CONTAINS","Indeholder");
define("_REQUIRED","Påkrævet");
// %%%%%%    File Name commentform.php     %%%%%
define("_REGISTER","Registrer");
// %%%%%%    File Name xoopscodes.php     %%%%%
define('_SIZE','STØRRELSE'); // font size
define('_FONT','FONT'); // font family
define('_COLOR','FARVE'); // font color
define('_EXAMPLE','PRØVE');
define('_ENTERURL','Skriv URL på det link du vil tilføje:');
define('_ENTERWEBTITLE','Skriv sidens titel:');
define('_ENTERIMGURL','Skriv URL på det billed du vil tilføje.');
define('_ENTERIMGPOS','Position på billedet.');
define('_IMGPOSRORL','\'R\' eller \'r\' for right, \'L\' eller \'l\' for left, eller lad være tomt.');
define('_ERRORIMGPOS','FEJÆ! Skriv position på billedet.');
define('_ENTEREMAIL','Skriv email addressen du vil tilføje.');
define('_ENTERCODE','Skriv coderne du vil tilføje.');
define('_ENTERQUOTE','Skriv tekst du vil ha citeret.');
define('_ENTERTEXTBOX','Skriv venligst tekst i boksen.');
define('_ALLOWEDCHAR','Tilladt max tegnslængde: ');
define('_CURRCHAR','Nuværende tegnlængde: ');
define('_PLZCOMPLETE','Udfyld venligst emne og besked felt.');
define('_MESSAGETOOLONG','Din besked er for lang.');
/**
* xoops smilie
*/
define('_AM_ADDSMILE',' Tilføj en ny smilie');
define('_AM_SMILECODE','Kode');
define('_AM_SMILEEMOTION','Beskrivelse');
define('_AM_DISPLAYF','Vis i formen');
// %%%%%        TIME FORMAT SETTINGS   %%%%%
define("_SECOND","1 sekund");
define("_SECONDS","%s sekunder");
define("_MINUTE","1 minut");
define("_MINUTES","%s minutter");
define("_HOUR","1 time");
define("_HOURS","%s timer");
define("_DAY","1 dag");
define("_DAYS","%s dage");
define("_WEEK","1 uge");
define("_MONTH","1 måned");
define("_DATESTRING","j/n/Y G:i:s");
define("_MEDIUMDATESTRING","j/n/Y G:i");
define("_SHORTDATESTRING","j/n/Y");
/**
* The following characters are recognized in the format string:
* a - 'am' or 'pm'
* A - 'AM' or 'PM'
* d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
* D - day of the week, textual, 3 letters; i.e. 'Fri'
* F - month, textual, long; i.e. 'January'
* h - hour, 12-hour format; i.e. '01' to '12'
* H - hour, 24-hour format; i.e. '00' to '23'
* g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
* G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
* i - minutes; i.e. '00' to '59'
* j - day of the month without leading zeros; i.e. '1' to '31'
* l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
* L - boolean for whether it is a leap year; i.e. '0' or '1'
* m - month; i.e. '01' to '12'
* n - month without leading zeros; i.e. '1' to '12'
* M - month, textual, 3 letters; i.e. 'Jan'
* s - seconds; i.e. '00' to '59'
* S - English ordinal suffix, textual, 2 characters; i.e. 'th','nd'
* t - number of days in the given month; i.e. '28' to '31'
* T - Timezone setting of this machine; i.e. 'MDT'
* U - seconds since the epoch
* w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
* Y - year, 4 digits; i.e. '1999'
* y - year, 2 digits; i.e. '99'
* z - day of the year; i.e. '0' to '365'
* Z - timezone offset in seconds (i.e. '-43200' to '43200')
*/
// %%%%%        LANGUAGE SPECIFIC SETTINGS   %%%%%
define("_CHARSET","UTF-8");
define("_LANGCODE","da");
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES','0');
/**
* Additions to 2.4.0
**/
define('_RESET','Reset');
define('_RE','Re:');
/**
 * Additions to 2.5.5
**/
define('_DBDATESTRING','m-d-Y');
define('_DBTIMESTRING','H:i:s');
define('_DBTIMESTAMPSTRING','m-d-Y H:i:s');
?><?php // Translation done by culex - 2012-03-15 19:15 ?>