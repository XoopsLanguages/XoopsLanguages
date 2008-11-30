<?php
// $Id: global.php,v 1.15 2004/06/14 14:22:14 skalpa Exp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","Kérlek várj");
define("_FETCHING","Betöltés...");
define("_TAKINGBACK","Visszakerülsz oda, ahol voltál....");
define("_LOGOUT","Kijelentkezés");
define("_SUBJECT","Téma");
define("_MESSAGEICON","Üzenet ikon");
define("_COMMENTS","Hozzászólások");
define("_POSTANON","Ismeretlen küldõ");
define("_DISABLESMILEY","Smiley-k nélkül");
define("_DISABLEHTML","HTML nélkül");
define("_PREVIEW","Elõzetes...");

define("_GO","Mehet!");
define("_NESTED","Lépcsõzetes");
define("_NOCOMMENTS","Nincs hozzászólás");
define("_FLAT","Normál");
define("_THREADED","Címekben");
define("_OLDESTFIRST","Régi az elsõ");
define("_NEWESTFIRST","Új az elsõ");
define("_MORE","tovább...");
define("_MULTIPAGE","Ha azt szeretnéd, hogy az iromány több oldalas legyen, szúrd be ezt a szót: <font color=red>[pagebreak]</font> (a [ ] jelekkel együtt) a szövegbe a megfelelõ helyre.");
define("_IFNOTRELOAD","Ha az oldal nem frissül automatikusan, kattints <a href='%s'>ide</a>");
define("_WARNINSTALL2","FIGYELEM: A %s könyvtár megtalálható a szerveren. <br />Biztonsági okokból távolítsd el ezt a könyvtárat.");
define("_WARNINWRITEABLE","FIGYELEM: A %s fájl bárki által írható. <br />Biztonsági okokból állítsd át a fájl jogosultságokat.<br /> Unix rendszeren (444), Windowson (read-only / írásvédett)");

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Beküldte");
define("_VISITWEBSITE","Weboldal megtekintése");
define("_SENDPMTO","Privát Üzenet küldése %s részére.");
define("_SENDEMAILTO","E-mail küldése %s részére");
define("_ADD","Hozzáad");
define("_REPLY","Válasz");
define("_DATE","Dátum");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Fõ");
define("_MANUAL","Manual");
define("_INFO","Info");
define("_CPHOME","Vezérlõpult fõoldala");
define("_YOURHOME","Fõoldal");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Ki van itt");
define('_GUESTS', 'Vendégek');
define('_MEMBERS', 'Tagok');
define("_ONLINEPHRASE","<b>%s</b> online");
define("_ONLINEPHRASEX","<b>%s</b> felhasználó nézi <b>%s</b>");
define("_CLOSE","Bezár");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Idézet:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Nincs jogosultságod ehhez a területhez.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Nem");
define("_YES","Igen");
define("_EDIT","Szerkesztés");
define("_DELETE","Törlés");
define("_SUBMIT","Elküld");
define("_MODULENOEXIST","A kiválasztott modul nem található!");
define("_ALIGN","Igazítás");
define("_LEFT","Balra");
define("_CENTER","Középre");
define("_RIGHT","Jobbra");
define("_FORM_ENTER", "Kérlek add meg: %s");
// %s represents file name
define("_MUSTWABLE","A %s fájlnak bárki által írhatónak kell lennie!");
// Module info
define('_PREFERENCES', 'Beállítások');
define("_VERSION", "Verzió");
define("_DESCRIPTION", "Leírás");
define("_ERRORS", "Hibák");
define("_NONE", "Egyik sem");
define('_ON','Beküldve');
define('_READS','olvas');
define('_WELCOMETO','Üdvözlünk %s');
define('_SEARCH','Keresés');
define('_ALL', 'Összes');
define('_TITLE', 'Cím');
define('_OPTIONS', 'Opciók');
define('_QUOTE', 'Idéz');
define('_LIST', 'Lista');
define('_LOGIN','Bejelentkezés');
define('_USERNAME','Felhasználónév: ');
define('_PASSWORD','Jelszó: ');
define("_SELECT","Választ");
define("_IMAGE","Kép");
define("_SEND","Elküld");
define("_CANCEL","Mégse");
define("_ASCENDING","Növekvõ sorrend");
define("_DESCENDING","Csökkenõ sorrend");
define('_BACK', 'Vissza');
define('_NOTITLE', 'Nincs cím');

/* Image manager */
define('_IMGMANAGER','Kép-kezelõ');
define('_NUMIMAGES', '%s kép');
define('_ADDIMAGE','Kép hozzáadása');
define('_IMAGENAME','Név:');
define('_IMGMAXSIZE','Maximum méret (byte):');
define('_IMGMAXWIDTH','Maximum szélesség (pixel):');
define('_IMGMAXHEIGHT','Maximum magasság (pixel):');
define('_IMAGECAT','Kategória:');
define('_IMAGEFILE','Képfájl:');
define('_IMGWEIGHT','Kijelzési sorrend a kép-kezelõben:');
define('_IMGDISPLAY','Kép mutatása?');
define('_IMAGEMIME','MIME tipus:');
define('_FAILFETCHIMG', 'A feltõltött fájl %s nem elérhetõ');
define('_FAILSAVEIMG', 'A %s képet nem sikerült tárolni az adatbázisban');
define('_NOCACHE', 'No Cache');
define('_CLONE', 'Másolat');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "Ezzel kezdõdjön");
define("_ENDSWITH", "Ezzel végzõdjön");
define("_MATCHES", "Egyezzen");
define("_CONTAINS", "Tartalmazza");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Regisztráció");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","MÉRET");  // font size
define("_FONT","BETÛTIPUS");  // font family
define("_COLOR","SZÍN");  // font color
define("_EXAMPLE","PÉLDA");
define("_ENTERURL","A hozzáadandó link URL-je:");
define("_ENTERWEBTITLE","A weboldal neve:");
define("_ENTERIMGURL","A hozzáadandó kép URL-je:");
define("_ENTERIMGPOS","Most add meg a kép pozícióját.");
define("_IMGPOSRORL","'R' vagy 'r' = jobbra, 'L' vagy 'l' = balra, vagy hagyd üresen.");
define("_ERRORIMGPOS","HIBA! Add meg a kép pozícióját.");
define("_ENTEREMAIL","Add meg a hozzáadandó E-mail címet.");
define("_ENTERCODE","Add meg a hozzáadandó kódokat.");
define("_ENTERQUOTE","Add meg az idézni kívánt szöveget");
define("_ENTERTEXTBOX","Kérlek írj szöveget a szövegdobozba.");
define("_ALLOWEDCHAR","Engedélyezett maximális karakterszám: ");
define("_CURRCHAR","Jelenlegi karakterekszám: ");
define("_PLZCOMPLETE","Kérlek töltsd ki a téma és az üzenet mezõket.");
define("_MESSAGETOOLONG","Az üzeneted túl hosszú.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 másodperc');
define('_SECONDS', '%s másodperc');
define('_MINUTE', '1 perc');
define('_MINUTES', '%s perc');
define('_HOUR', '1 óra');
define('_HOURS', '%s óra');
define('_DAY', '1 nap');
define('_DAYS', '%s nap');
define('_WEEK', '1 hét');
define('_MONTH', '1 hónap');

define("_DATESTRING","Y.m.j. G:i:s");
define("_MEDIUMDATESTRING","Y.m.j. G:i");
define("_SHORTDATESTRING","Y.m.j.");

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
// insert double '\' before 't', 'r', 'n'
define("_TODAY", "\M\a G:i:s");
define("_YESTERDAY", "\Te\g\\n\ap G:i:s");
define("_MONTHDAY", "n.j G:i:s");
define("_YEARMONTHDAY", "Y.n.j G:i");


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
define('_CHARSET', 'ISO-8859-2');
define('_LANGCODE', 'hu');


define('_NOERRORMESSAGE', 'Nincs meghatározott hibaüzenet');
define('_SELECTEDITOR', 'Szerkesztõ választás');
define('_REMOVE', 'Eltávolít');
define('_REQUIRED', 'Szükséges');
define('_SITEDEFAULT', 'Oldal alapértelmezés');


// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES", "0");
?>