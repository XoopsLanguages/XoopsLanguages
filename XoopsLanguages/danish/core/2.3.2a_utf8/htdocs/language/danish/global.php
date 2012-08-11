<?php
// $Id: global.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%	File Name mainfile.php 	%%%%%
define('_PLEASEWAIT','Vent venligst');
define('_FETCHING','Indlæser....');
define('_TAKINGBACK','Sender dig tilbage hvor du kom fra....');
define('_LOGOUT','Log ud');
define('_SUBJECT','Emne');
define('_MESSAGEICON','Meddelelses ikon');
define('_COMMENTS','Kommentar');
define('_POSTANON','Indsend anonymt');
define('_DISABLESMILEY','Deaktiver smiley\'s');
define('_DISABLEHTML','Deaktiver html');
define('_PREVIEW','Prøvevisning');

define('_GO','Gem!');
define('_NESTED','Nedarvet');
define('_NOCOMMENTS','Ingen kommentar');
define('_FLAT','Flad');
define('_THREADED','Tråd');
define('_OLDESTFIRST','Ældste først');
define('_NEWESTFIRST','Nyeste først');
define('_MORE','Mere ...');
define('_MULTIPAGE','For at få den artikel bredt ud over flere sider, indsæt  <font color=red>[pagebreak]</font> (with brackets) i artiklen');
define('_IFNOTRELOAD','Hvis siden ikke vises automatisk, klik <a href=\'%s\'>her</a>');
define('_WARNINSTALL2','ADVARSEL: Mappen %s eksisterer på din server. <br />Fjer denne mappe af sikkerhedsmæssige årsager.');
define('_WARNINWRITEABLE','ADVARSEL: Filen %s er skrivbar af serveren. <br />Skift rettighederne på denne fil af sikkerhedsmæssige Årsager..<br /> i Unix (444), i Win32 (skrivebeskyttet)');

// Error messages issued by XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED','%s kræves');
define('_XOBJ_ERR_SHORTERTHAN','%s skal være kortere end %d karakterer.');

//%%%%%%	File Name themeuserpost.php 	%%%%%
define('_PROFILE','Profil');
define('_POSTEDBY','Indsendt af');
define('_VISITWEBSITE','Besøg hjemmeside');
define('_SENDPMTO','Send privat meddelelse til %s');
define('_SENDEMAILTO','Send E-mail til %s');
define('_ADD','Tilføj');
define('_REPLY','Besvar');
define('_DATE','Dato');   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define('_MAIN','Hoved');
define('_MANUAL','Manual');
define('_INFO','Information');
define('_CPHOME','Kontrolpanel');
define('_YOURHOME','Forside');

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define('_WHOSONLINE','Hvem er online');
define('_GUESTS','Gæster');
define('_MEMBERS','Medlemmer');
define('_ONLINEPHRASE','<b>%s</b> bruger(e) er online');
define('_ONLINEPHRASEX','<b>%s</b> bruger(e) kigger i <b>%s</b>');
define('_CLOSE','Luk');  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define('_QUOTEC','Citat:');

//%%%%%%	File Name admin.php 	%%%%%
define('_NOPERM','Desværre, du har ikke rettigheder til denne del');

//%%%%%		Common Phrases		%%%%%
define('_NO','Nej');
define('_YES','Ja');
define('_EDIT','Redigér');
define('_DELETE','Slet');
define('_SUBMIT','OK');
define('_MODULENOEXIST','Det valgte modul eksisterer ikke!');
define('_ALIGN','Justering');
define('_LEFT','Venstre');
define('_CENTER','Centreret');
define('_RIGHT','Højre');
define('_FORM_ENTER','Indtast venligst %s');
// %s represents file name
define('_MUSTWABLE','Filen %s skal være skrivbar for serveren!');
// Module info
define('_PREFERENCES','Indstillinger');
define('_VERSION','Version');
define('_DESCRIPTION','Beskrivelse');
define('_AUTHOR','Forfatter');
define('_CREDITS','Credits');
define('_LICENCE','Licens');
define('_ERRORS','Fejl');
define('_NONE','Ingen');
define('_ON','den');
define('_READS','læsninger');
define('_WELCOMETO','Velkommen til %s');
define('_SEARCH','Søg');
define('_ALL','Alle');
define('_TITLE','Titel');
define('_OPTIONS','Muligheder');
define('_QUOTE','Citat');
define('_LIST','List');
define('_LOGIN','Bruger login');
define('_USERNAME','Brugernavn:');
define('_PASSWORD','Password:');
define('_SELECT','Vælg');
define('_IMAGE','Billed');
define('_SEND','Send');
define('_CANCEL','Fortryd');
define('_ASCENDING','Stigende');
define('_DESCENDING','Faldende');
define('_BACK','Tilbage');
define('_NOTITLE','Ingen titel');

/* Image manager */
define('_IMGMANAGER','Billed håndtering');
define('_NUMIMAGES','%s billeder');
define('_ADDIMAGE','Tilføj billed');
define('_IMAGENAME','Navn:');
define('_IMGMAXSIZE','Maks. størrelse tilladt (bytes):');
define('_IMGMAXWIDTH','Maks. bredde tilladt (pixels):');
define('_IMGMAXHEIGHT','Maks. højde tilladt (pixels):');
define('_IMAGECAT','Kategori:');
define('_IMAGEFILE','Billedfil:');
define('_IMGWEIGHT','Visningsrækkefølge i billedhåndteringen:');
define('_IMGDISPLAY','Vis dette billed?');
define('_IMAGEMIME','Billed type:');
define('_FAILFETCHIMG','Kunne ikke hente filen %s');
define('_FAILSAVEIMG','Fejl ved lagring af billed %s i databasen');
define('_NOCACHE','Ingen cache');
define('_CLONE','Klon');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define('_STARTSWITH','Begynder med');
define('_ENDSWITH','Ender med');
define('_MATCHES','Er lig med');
define('_CONTAINS','Indeholder');

//%%%%%%	File Name commentform.php 	%%%%%
define('_REGISTER','Registrer');

//%%%%%%	File Name xoopscodes.php 	%%%%%
define('_SIZE','STØRRELSE');  // font size
define('_FONT','SKRIFTTYPE');  // font family
define('_COLOR','FARVE');  // font color
define('_EXAMPLE','PRØVE');
define('_ENTERURL','Indtast URL på det link du vil tilføje');
define('_ENTERWEBTITLE','Indtast hjemmesidens titel:');
define('_ENTERIMGURL','Indtast URL på det billed du vil tilføje');
define('_ENTERIMGPOS','Indtast positionen på billedet');
define('_IMGPOSRORL','\'R\' eller \'r\' for højre, \'L\' eller \'l\' for venstre, eller blank.');
define('_ERRORIMGPOS','FEJL! Indtast positionen på billedet');
define('_ENTEREMAIL','Indtast den email-adresse du ønsker at tilføje');
define('_ENTERCODE','Indtast de koder du vil tilføje');
define('_ENTERQUOTE','Indtast teksten du vil have citeret');
define('_ENTERTEXTBOX','Indtast tekst i tekstboksen');
define('_ALLOWEDCHAR','Mask. antal tilladte karakterer:');
define('_CURRCHAR','Aktuelle antal karakterer:');
define('_PLZCOMPLETE','Vær venlig at indtaste emne og meddelelsesfelt');
define('_MESSAGETOOLONG','Din meddelelse er for lang');

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 sekund');
define('_SECONDS','%s sekunder');
define('_MINUTE','1 minut');
define('_MINUTES','%s minutter');
define('_HOUR','1 time');
define('_HOURS','%s timer');
define('_DAY','1 dag');
define('_DAYS','%s dage');
define('_WEEK','1 uge');
define('_MONTH','1 måned');

define('_DATESTRING','j/n/Y G:i:s');
define('_MEDIUMDATESTRING','j/n/Y G:i');
define('_SHORTDATESTRING','j/n/Y');
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
define('_LANGCODE','da');

// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES','0');
?>