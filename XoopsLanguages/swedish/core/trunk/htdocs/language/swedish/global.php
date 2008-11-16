<?php
// $Id: global.php,v 1.17 2005/08/08 06:29:25 skalpa Exp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","Vänligen vänta");
define("_FETCHING","Laddar...");
define("_TAKINGBACK","Tar dig tillbaka till där du var....");
define("_LOGOUT","Logga ut");
define("_SUBJECT","Ämne");
define("_MESSAGEICON","Meddelandeikon");
define("_COMMENTS","Kommentarer");
define("_POSTANON","Posta annonymt");
define("_DISABLESMILEY","Stäng av smilies");
define("_DISABLEHTML","Stäng av html");
define("_PREVIEW","Förhandsgranska");

define("_GO","Gå!");
define("_NESTED","Nästlat");
define("_NOCOMMENTS","Inga kommentarer");
define("_FLAT","Platt");
define("_THREADED","Trådat");
define("_OLDESTFIRST","Äldsta f�rst");
define("_NEWESTFIRST","Nyaste först");
define("_MORE","mer...");
define("_MULTIPAGE","För att få din artikel att spänna över flera sidor, sätt in ordet <font color=red>[pagebreak]</font> (med klamrar) i artikeln.");
define("_IFNOTRELOAD","Om sidan inte laddas om automatiskt, klicka <a href='%s'>här</a>");
define("_WARNINSTALL2","VARNING: Katalogen %s existerar på din server. <br />Vänligen radera denna katalog av säkerhetsskäl.");
define("_WARNINWRITEABLE","VARNING: Filen %s är skrivbar av servern. <br />Väligen ändra rättigheterna på filen av säkerhetsskäl.<br /> i Unix (444), i Win32 (read-only)");

// Error messages issued by XoopsObject::cleanVars()
define( "_XOBJ_ERR_REQUIRED", "%s är nödvändig" );
define( "_XOBJ_ERR_SHORTERTHAN", "%s måste vara kortare än %d tecken." );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Postat av");
define("_VISITWEBSITE","Besök webbplats");
define("_SENDPMTO","Skicka privat meddelande till %s");
define("_SENDEMAILTO","Skicka email till %s");
define("_ADD","Lägg till");
define("_REPLY","Besvara");
define("_DATE","Datum");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Index");
define("_MANUAL","Manual");
define("_INFO","Info");
define("_CPHOME","Kontrollpanel Hem");
define("_YOURHOME","Hemsida");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Vem är online");
define('_GUESTS', 'Gäster');
define('_MEMBERS', 'Medlemmar');
define("_ONLINEPHRASE","<b>%s</b> användare är online");
define("_ONLINEPHRASEX","<b>%s</b> användare surfar <b>%s</b>");
define("_CLOSE","Stäng");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Citat:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Beklagar, du är inte behörig att komma åt den här avdelningen");

//%%%%%		Common Phrases		%%%%%
define("_NO","Nej");
define("_YES","Ja");
define("_EDIT","Ändra");
define("_DELETE","Radera");
define("_SUBMIT","Posta");
define("_MODULENOEXIST","Den valda modulen finns inte!");
define("_ALIGN","Justera");
define("_LEFT","Vänster");
define("_CENTER","Centrerat");
define("_RIGHT","Höger");
define("_FORM_ENTER", "Skriv in %s");
// %s represents file name
define("_MUSTWABLE","Filen %s måste vara skrivbar för servern!");
// Module info
define('_PREFERENCES', 'Inställningar');
define("_VERSION", "Version");
define("_DESCRIPTION", "Beskrivning");
define("_AUTHOR", "Författare");
define("_CREDITS", "Beröm");
define("_LICENCE", "Licens");
define("_ERRORS", "Fel");
define("_NONE", "Inga");
define('_ON','på');
define('_READS','läsningar');
define('_WELCOMETO','Välkommen till %s');
define('_SEARCH','Sök');
define('_ALL', 'Alla');
define('_TITLE', 'Titel');
define('_OPTIONS', 'Alternativ');
define('_QUOTE', 'Citat');
define('_LIST', 'Lista');
define('_LOGIN','Logga in');
define('_USERNAME','Användarnamn: ');
define('_PASSWORD','Lösenord: ');
define("_SELECT","Välj");
define("_IMAGE","Bild");
define("_SEND","Skicka");
define("_CANCEL","Avbryt");
define("_ASCENDING","Stigande ordning");
define("_DESCENDING","Fallande ordning");
define('_BACK', 'Tillbaka');
define('_NOTITLE', 'Ingen rubrik');

/* Image manager */
define('_IMGMANAGER','Bildhanterare');
define('_NUMIMAGES', '%s bilder');
define('_ADDIMAGE','Lägg till bildfil');
define('_IMAGENAME','Namn:');
define('_IMGMAXSIZE','Tillåten maxstorlek (kb):');
define('_IMGMAXWIDTH','Tillåten maxbredd (pixlar):');
define('_IMGMAXHEIGHT','Tillåten maxhöjd (pixlar):');
define('_IMAGECAT','Kategori:');
define('_IMAGEFILE','Bildfil:');
define('_IMGWEIGHT','Visningsordning i bildhanteraren:');
define('_IMGDISPLAY','Visa denna bild?');
define('_IMAGEMIME','MIME-typ:');
define('_FAILFETCHIMG', 'Kunde inte hämta den uppladdade filen %s');
define('_FAILSAVEIMG', 'Misslyckades att spara bilden %s i databasen');
define('_NOCACHE', 'Inget cache');
define('_CLONE', 'Klona');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "Börjar med");
define("_ENDSWITH", "Slutar med");
define("_MATCHES", "Matchar");
define("_CONTAINS", "Innehåller");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Registrera");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","STORLEK");  // font size
define("_FONT","TYPSNITT");  // font family
define("_COLOR","FÄRG");  // font color
define("_EXAMPLE","PROV");
define("_ENTERURL","Skriv in adressen till länken du vill lägga till:");
define("_ENTERWEBTITLE","Skriv in webbplatsens namn:");
define("_ENTERIMGURL","Skriv in adressen till bilden du vill lägga till.");
define("_ENTERIMGPOS","Skriv nu in bildens position.");
define("_IMGPOSRORL","'R' eller 'r' för höger, 'L' eller 'l' för vänster, eller lämna blankt.");
define("_ERRORIMGPOS","FEL! Skriv in bildens position.");
define("_ENTEREMAIL","Skriv in emailadressen du vill lägga till.");
define("_ENTERCODE","Skriv in koderna du vill lägga till.");
define("_ENTERQUOTE","Skriv in texten du vill citera.");
define("_ENTERTEXTBOX","Vänligen skriv in text i textfältet.");
define("_ALLOWEDCHAR","Tillåten textlängd: ");
define("_CURRCHAR","Aktuell textlängd: ");
define("_PLZCOMPLETE","Vänligen fyll i ämnes och meddelandefälten.");
define("_MESSAGETOOLONG","Ditt meddelande är för långt.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 sekund');
define('_SECONDS', '%s sekunder');
define('_MINUTE', '1 minut');
define('_MINUTES', '%s minuter');
define('_HOUR', '1 timme');
define('_HOURS', '%s timmar');
define('_DAY', '1 dag');
define('_DAYS', '%s dagar');
define('_WEEK', '1 vecka');
define('_MONTH', '1 månad');

define("_DATESTRING","y-m-d H:i:s");
define("_MEDIUMDATESTRING","y-m-d H:i");
define("_SHORTDATESTRING","y-m-d");
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
S - English ordinal suffix, textual, 2 characters; i.e. "th", "nd"
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
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'se');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES", "0");
?>
