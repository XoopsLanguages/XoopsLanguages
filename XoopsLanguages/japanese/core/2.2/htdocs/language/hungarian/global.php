<?php
// $Id: global.php,v 1.15 2004/06/14 14:22:14 skalpa Exp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","K�rlek v�rj");
define("_FETCHING","Bet�lt�s...");
define("_TAKINGBACK","Visszaker�lsz oda, ahol volt�l....");
define("_LOGOUT","Kijelentkez�s");
define("_SUBJECT","T�ma");
define("_MESSAGEICON","�zenet ikon");
define("_COMMENTS","Hozz�sz�l�sok");
define("_POSTANON","Ismeretlen k�ld�");
define("_DISABLESMILEY","Smiley-k n�lk�l");
define("_DISABLEHTML","HTML n�lk�l");
define("_PREVIEW","El�zetes...");

define("_GO","Mehet!");
define("_NESTED","L�pcs�zetes");
define("_NOCOMMENTS","Nincs hozz�sz�l�s");
define("_FLAT","Norm�l");
define("_THREADED","C�mekben");
define("_OLDESTFIRST","R�gi az els�");
define("_NEWESTFIRST","�j az els�");
define("_MORE","tov�bb...");
define("_MULTIPAGE","Ha azt szeretn�d, hogy az irom�ny t�bb oldalas legyen, sz�rd be ezt a sz�t: <font color=red>[pagebreak]</font> (a [ ] jelekkel egy�tt) a sz�vegbe a megfelel� helyre.");
define("_IFNOTRELOAD","Ha az oldal nem friss�l automatikusan, kattints <a href='%s'>ide</a>");
define("_WARNINSTALL2","FIGYELEM: A %s k�nyvt�r megtal�lhat� a szerveren. <br />Biztons�gi okokb�l t�vol�tsd el ezt a k�nyvt�rat.");
define("_WARNINWRITEABLE","FIGYELEM: A %s f�jl b�rki �ltal �rhat�. <br />Biztons�gi okokb�l �ll�tsd �t a f�jl jogosults�gokat.<br /> Unix rendszeren (444), Windowson (read-only / �r�sv�dett)");

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Bek�ldte");
define("_VISITWEBSITE","Weboldal megtekint�se");
define("_SENDPMTO","Priv�t �zenet k�ld�se %s r�sz�re.");
define("_SENDEMAILTO","E-mail k�ld�se %s r�sz�re");
define("_ADD","Hozz�ad");
define("_REPLY","V�lasz");
define("_DATE","D�tum");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","F�");
define("_MANUAL","Manual");
define("_INFO","Info");
define("_CPHOME","Vez�rl�pult f�oldala");
define("_YOURHOME","F�oldal");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Ki van itt");
define('_GUESTS', 'Vend�gek');
define('_MEMBERS', 'Tagok');
define("_ONLINEPHRASE","<b>%s</b> online");
define("_ONLINEPHRASEX","<b>%s</b> felhaszn�l� n�zi <b>%s</b>");
define("_CLOSE","Bez�r");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Id�zet:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Nincs jogosults�god ehhez a ter�lethez.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Nem");
define("_YES","Igen");
define("_EDIT","Szerkeszt�s");
define("_DELETE","T�rl�s");
define("_SUBMIT","Elk�ld");
define("_MODULENOEXIST","A kiv�lasztott modul nem tal�lhat�!");
define("_ALIGN","Igaz�t�s");
define("_LEFT","Balra");
define("_CENTER","K�z�pre");
define("_RIGHT","Jobbra");
define("_FORM_ENTER", "K�rlek add meg: %s");
// %s represents file name
define("_MUSTWABLE","A %s f�jlnak b�rki �ltal �rhat�nak kell lennie!");
// Module info
define('_PREFERENCES', 'Be�ll�t�sok');
define("_VERSION", "Verzi�");
define("_DESCRIPTION", "Le�r�s");
define("_ERRORS", "Hib�k");
define("_NONE", "Egyik sem");
define('_ON','Bek�ldve');
define('_READS','olvas');
define('_WELCOMETO','�dv�zl�nk %s');
define('_SEARCH','Keres�s');
define('_ALL', '�sszes');
define('_TITLE', 'C�m');
define('_OPTIONS', 'Opci�k');
define('_QUOTE', 'Id�z');
define('_LIST', 'Lista');
define('_LOGIN','Bejelentkez�s');
define('_USERNAME','Felhaszn�l�n�v: ');
define('_PASSWORD','Jelsz�: ');
define("_SELECT","V�laszt");
define("_IMAGE","K�p");
define("_SEND","Elk�ld");
define("_CANCEL","M�gse");
define("_ASCENDING","N�vekv� sorrend");
define("_DESCENDING","Cs�kken� sorrend");
define('_BACK', 'Vissza');
define('_NOTITLE', 'Nincs c�m');

/* Image manager */
define('_IMGMANAGER','K�p-kezel�');
define('_NUMIMAGES', '%s k�p');
define('_ADDIMAGE','K�p hozz�ad�sa');
define('_IMAGENAME','N�v:');
define('_IMGMAXSIZE','Maximum m�ret (byte):');
define('_IMGMAXWIDTH','Maximum sz�less�g (pixel):');
define('_IMGMAXHEIGHT','Maximum magass�g (pixel):');
define('_IMAGECAT','Kateg�ria:');
define('_IMAGEFILE','K�pf�jl:');
define('_IMGWEIGHT','Kijelz�si sorrend a k�p-kezel�ben:');
define('_IMGDISPLAY','K�p mutat�sa?');
define('_IMAGEMIME','MIME tipus:');
define('_FAILFETCHIMG', 'A felt�lt�tt f�jl %s nem el�rhet�');
define('_FAILSAVEIMG', 'A %s k�pet nem siker�lt t�rolni az adatb�zisban');
define('_NOCACHE', 'No Cache');
define('_CLONE', 'M�solat');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "Ezzel kezd�dj�n");
define("_ENDSWITH", "Ezzel v�gz�dj�n");
define("_MATCHES", "Egyezzen");
define("_CONTAINS", "Tartalmazza");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Regisztr�ci�");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","M�RET");  // font size
define("_FONT","BET�TIPUS");  // font family
define("_COLOR","SZ�N");  // font color
define("_EXAMPLE","P�LDA");
define("_ENTERURL","A hozz�adand� link URL-je:");
define("_ENTERWEBTITLE","A weboldal neve:");
define("_ENTERIMGURL","A hozz�adand� k�p URL-je:");
define("_ENTERIMGPOS","Most add meg a k�p poz�ci�j�t.");
define("_IMGPOSRORL","'R' vagy 'r' = jobbra, 'L' vagy 'l' = balra, vagy hagyd �resen.");
define("_ERRORIMGPOS","HIBA! Add meg a k�p poz�ci�j�t.");
define("_ENTEREMAIL","Add meg a hozz�adand� E-mail c�met.");
define("_ENTERCODE","Add meg a hozz�adand� k�dokat.");
define("_ENTERQUOTE","Add meg az id�zni k�v�nt sz�veget");
define("_ENTERTEXTBOX","K�rlek �rj sz�veget a sz�vegdobozba.");
define("_ALLOWEDCHAR","Enged�lyezett maxim�lis karaktersz�m: ");
define("_CURRCHAR","Jelenlegi karaktereksz�m: ");
define("_PLZCOMPLETE","K�rlek t�ltsd ki a t�ma �s az �zenet mez�ket.");
define("_MESSAGETOOLONG","Az �zeneted t�l hossz�.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 m�sodperc');
define('_SECONDS', '%s m�sodperc');
define('_MINUTE', '1 perc');
define('_MINUTES', '%s perc');
define('_HOUR', '1 �ra');
define('_HOURS', '%s �ra');
define('_DAY', '1 nap');
define('_DAYS', '%s nap');
define('_WEEK', '1 h�t');
define('_MONTH', '1 h�nap');

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


define('_NOERRORMESSAGE', 'Nincs meghat�rozott hiba�zenet');
define('_SELECTEDITOR', 'Szerkeszt� v�laszt�s');
define('_REMOVE', 'Elt�vol�t');
define('_REQUIRED', 'Sz�ks�ges');
define('_SITEDEFAULT', 'Oldal alap�rtelmez�s');


// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES", "0");
?>