<?php
// $Id: global.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","Vennligst vent");
define("_FETCHING","Laster...");
define("_TAKINGBACK","Tar deg tilbake....");
define("_LOGOUT","Logg ut");
define("_SUBJECT","Emne");
define("_MESSAGEICON","Meldings-ikon");
define("_COMMENTS","kommentarer");
define("_POSTANON","Send anonymt");
define("_DISABLESMILEY","Deaktiver smiley");
define("_DISABLEHTML","Deaktiver html");
define("_PREVIEW","Forhåndsvisning");

define("_GO","Utfør!");
define("_NESTED","Sammenfoldet");
define("_NOCOMMENTS","Ingen kommentarer");
define("_FLAT","Vis alle");
define("_THREADED","Sammenfoldet");
define("_OLDESTFIRST","Eldste først");
define("_NEWESTFIRST","Nyeste først");
define("_MORE","Mer...");
define("_MULTIPAGE","To have your article span multiple pages, insert the word <font color=red>[pagebreak]</font> (with brackets) in the article.");
define("_IFNOTRELOAD","Desom siden ikke automatisk laster, klikk <a href='%s'>her</a>");
define("_WARNINSTALL2","ADVARSEL: Mappen %s finnes på din server. <br />Slett denne av sikkerhetsgrunner!");
define("_WARNINWRITEABLE","ADVARSEL: Filen %s er skrivbar. <br />Endre skrivetilgang på denne av sikkerhetsgrunner!<br /> I Unix (444), i Win32 (read-only)");

// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED","%s er påkrevd" );
define("_XOBJ_ERR_SHORTERTHAN","%s må være kortere enn %d tegn." );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Innsendt av");
define("_VISITWEBSITE","Besøk hjemmeside");
define("_SENDPMTO","Send Privat Melding til %s");
define("_SENDEMAILTO","Send Epost til %s");
define("_ADD","Legg til");
define("_REPLY","Svar");
define("_DATE","Dato");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Hoved");
define("_MANUAL","Manual");
define("_INFO","Info");
define("_CPHOME","Kontrollpanel");
define("_YOURHOME","Hjemmesiden");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Hvem er pålogget");
define('_GUESTS','Gjester');
define('_MEMBERS','Medlemmer');
define("_ONLINEPHRASE","<strong>%s</strong> bruker(e) er pålogget");
define("_ONLINEPHRASEX","<strong>%s</strong> bruker(e) ser på <strong>%s</strong>");
define("_CLOSE","Lukk");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Sitat:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Beklager, du har ikke adgang til dette området.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Nei");
define("_YES","Ja");
define("_EDIT","Rediger");
define("_DELETE","Slett");
define("_SUBMIT","Innsend");
define("_MODULENOEXIST","Valgte modul eksisterer ikke!");
define("_ALIGN","Plassering");
define("_LEFT","Venstre");
define("_CENTER","Sentrer");
define("_RIGHT","Høyre");
define("_FORM_ENTER","Skriv %s");
// %s represents file name
define("_MUSTWABLE","Filen %s må være skrivbar for serveren!");
// Module info
define('_PREFERENCES','Preferanser');
define("_VERSION","Versjon");
define("_DESCRIPTION","Beskrivelse");
define("_AUTHOR","Forfatter");
define("_CREDITS","Kreditter");
define("_LICENCE","Lisens");
define("_ERRORS","Feil");
define("_NONE","Ingen");
define('_ON','på');
define('_READS','visninger');
define('_WELCOMETO','Velkommen til %s');
define('_SEARCH','Søk');
define('_ALL','Alt');
define('_TITLE','Tittel');
define('_OPTIONS','Valg');
define('_QUOTE','Sitat');
define('_LIST','Liste');
define('_LOGIN','Logg inn');
define('_USERNAME','Brukernavn: ');
define('_PASSWORD','Passord: ');
define("_SELECT","Velg");
define("_IMAGE","Bilde");
define("_SEND","Send");
define("_CANCEL","Avbryt");
define("_ASCENDING","Stigende rekkefølge");
define("_DESCENDING","Synkende rekkefølge");
define('_BACK','Tilbake');
define('_NOTITLE','Ingen tittel');

/* Image manager */
define('_IMGMANAGER','Bilde Manager');
define('_NUMIMAGES','%s bilder');
define('_ADDIMAGE','Legg til bildefil');
define('_IMAGENAME','navn:');
define('_IMGMAXSIZE','Maks størrelse tillatt (bytes):');
define('_IMGMAXWIDTH','Maks bredde tillatt (pixels):');
define('_IMGMAXHEIGHT','Maks høyde tillatt (pixels):');
define('_IMAGECAT','Kategori:');
define('_IMAGEFILE','Bildefil:');
define('_IMGWEIGHT','Visningsrekkefølge i bilde manager:');
define('_IMGDISPLAY','Vis dette bildet?');
define('_IMAGEMIME','MIME type:');
define('_FAILFETCHIMG','Kunne ikke hente den opplastede filen %s');
define('_FAILSAVEIMG','Feil ved lagring av %s i databasen');
define('_NOCACHE','Ingen Cache');
define('_CLONE','Clone');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH","Begynner med");
define("_ENDSWITH","Slutter med");
define("_MATCHES","Treff");
define("_CONTAINS","Inneholder");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Registrer");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","ST�RRELSE");  // font size
define("_FONT","FONT");  // font family
define("_COLOR","FARGE");  // font color
define("_EXAMPLE","EKSEMPEL");
define("_ENTERURL","Skriv URLen på linken du vil legge til:");
define("_ENTERWEBTITLE","Hjemmesidens tittel:");
define("_ENTERIMGURL","Skriv URLen på bildet du vil legge til.");
define("_ENTERIMGPOS","Velg posisjon for bildet.");
define("_IMGPOSRORL","'R' eller 'r' for høyre, 'L' eller 'l' for venstre, eller la det stå tomt.");
define("_ERRORIMGPOS","FEIL! Velg posisjon.");
define("_ENTEREMAIL","Legg til epost adresse.");
define("_ENTERCODE","Legg til kode.");
define("_ENTERQUOTE","Legg til teksten du vil sitere.");
define("_ENTERTEXTBOX","Skriv i tekstboksen.");
define("_ALLOWEDCHAR","Maks antall tegn: ");
define("_CURRCHAR","Brukt til nå: ");
define("_PLZCOMPLETE","Vennligst skriv i tittel og meldingsfeltet.");
define("_MESSAGETOOLONG","Din melding er for lang.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 sekund');
define('_SECONDS','%s sekunder');
define('_MINUTE','1 minutt');
define('_MINUTES','%s minutter');
define('_HOUR','1 time');
define('_HOURS','%s timer');
define('_DAY','1 dag');
define('_DAYS','%s dager');
define('_WEEK','1 uke');
define('_MONTH','1 måned');

define("_DATESTRING","Y/n/j G:i:s");
define("_MEDIUMDATESTRING","Y/n/j G:i");
define("_SHORTDATESTRING","Y/n/j");
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th","nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET','UTF-8');
define('_LANGCODE','no');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","0");
?>