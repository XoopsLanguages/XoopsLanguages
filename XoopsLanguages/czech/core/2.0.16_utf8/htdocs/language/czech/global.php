<?php
// $Id: global.php,v 1.12 2003/04/11 15:20:01 okazu Exp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","Čekejte prosím");
define("_FETCHING","Nahrávám...");
define("_TAKINGBACK","Zpět na předchozí stránku...");
define("_LOGOUT","Odhlásit");
define("_SUBJECT","Předmět");
define("_MESSAGEICON","Ikona");
define("_COMMENTS","Komentáře");
define("_POSTANON","Poslat anonymě");
define("_DISABLESMILEY","Zakázat emotikony");
define("_DISABLEHTML","Zakázat HTML");
define("_PREVIEW","Náhled");

define("_GO","Uložit");
define("_NESTED","Vložené");
define("_NOCOMMENTS","Nejsou komentáře");
define("_FLAT","Ploché");
define("_THREADED","Strom");
define("_OLDESTFIRST","Starší dříve");
define("_NEWESTFIRST","Novější dříve");
define("_MORE","více...");
define("_MULTIPAGE","Aby byl Váš článek rozložen na více stránek, vložte na příslušné místo <b><font color=red>[pagebreak]</font></b> (včetně hranatých závorek).");
define("_IFNOTRELOAD","Pokud nebudete automaticky přesměrováni během několika sekund,<br />klikněte prosím <a href='%s'>zde</a>");
define("_WARNINSTALL2","POZOR: Adresář <b>%s</b> ještě existuje na vašem serveru. <br />Z bezpečnostních důvodů doporučujeme jej smazat..");
define("_WARNINWRITEABLE","POPZOR: Soubor <b>%s</b> je přístupný pro zápis serverem. <br />Změňte práva přístupu k tomuto souboru.<br /> na Unixu (444), na Win32 (read-only)");

// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED","%s je povinný údaj" );
define("_XOBJ_ERR_SHORTERTHAN","%s musí být kratší než %d znaků." );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profil");
define("_POSTEDBY","Zasláno od");
define("_VISITWEBSITE","Navštívit stránku");
define("_SENDPMTO","Poslat soukromou zprávu pro %s");
define("_SENDEMAILTO","Poslat e-mail pro %s");
define("_ADD","Přidat");
define("_REPLY","Odpověď");
define("_DATE","Datum");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Hlavní");
define("_MANUAL","Manuál");
define("_INFO","Info");
define("_CPHOME","Řídící panel");
define("_YOURHOME","Hlavní stránka");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Kdo je přítomen");
define('_GUESTS','Návštěvníci');
define('_MEMBERS','Reg. uživatelé');
define("_ONLINEPHRASE","Uživatelů on-line: <b>%s</b><br />");
define("_ONLINEPHRASEX","<b>%s</b> v sekci <b>%s</b>");
define("_CLOSE","Zavřít");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Cituji:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Nejste oprávněni pro vstup do této oblasti.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Ne");
define("_YES","Ano");
define("_EDIT","Upravit");
define("_DELETE","Smazat");
define("_SUBMIT","Odeslat");
define("_MODULENOEXIST","Vybraný modul neexistuje!");
define("_ALIGN","Zarovnat");
define("_LEFT","Vlevo");
define("_CENTER","Střed");
define("_RIGHT","Vpravo");
define("_FORM_ENTER","Vložte %s");
// %s represents file name
define("_MUSTWABLE","Do souboru <b>%s</b> musí mít server právo zápisu!");
// Module info
define('_PREFERENCES','Nastavení');
define("_VERSION","Verze");
define("_DESCRIPTION","Popis");
define("_ERRORS","Chyby");
define("_NONE","Nic");
define('_ON','dne');
define('_READS','otevření');
define('_WELCOMETO','Vítejte na <b>%s</b>');
define('_SEARCH','Hledat');
define('_ALL','Vše');
define('_TITLE','Titulek');
define('_OPTIONS','Možnosti');
define('_QUOTE','Citace');
define('_LIST','Seznam');
define('_LOGIN','Přihlášení');
define('_USERNAME','Uživatel: ');
define('_PASSWORD','Heslo: ');
define("_SELECT","Vybrat");
define("_IMAGE","Obrázek");
define("_SEND","Odeslat");
define("_CANCEL","Zrušit");
define("_ASCENDING","Vzestupné řazení");
define("_DESCENDING","Sestupné řazení");
define('_BACK','Zpět');
define('_NOTITLE','Bez titulku');

/* Image manager */
define('_IMGMANAGER','Správce obrázků');
define('_NUMIMAGES','<b>%s</b> obrázků');
define('_ADDIMAGE','Přidat obrázek');
define('_IMAGENAME','Název:');
define('_IMGMAXSIZE','Max. velikost (kb):');
define('_IMGMAXWIDTH','Max. šířka (pixely):');
define('_IMGMAXHEIGHT','Max. výška (pixely):');
define('_IMAGECAT','Kategorie:');
define('_IMAGEFILE','Soubor');
define('_IMGWEIGHT','Váha ve správci obrázků:');
define('_IMGDISPLAY','Zobrazit obrázek?');
define('_IMAGEMIME','MIME type:');
define('_FAILFETCHIMG','Nelze získat nahraný soubor %s');
define('_FAILSAVEIMG','Selhalo vložení obrázku %s do databáze');
define('_NOCACHE','Bez Cache');
define('_CLONE','Klonovat');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH","Začíná na");
define("_ENDSWITH","Končí na");
define("_MATCHES","Je rovno");
define("_CONTAINS","Obsahuje");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Registrace");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","VELIKOST");  // font size
define("_FONT","FONT");  // font family
define("_COLOR","BARVA");  // font color
define("_EXAMPLE","NÁHLED");
define("_ENTERURL","URL odkazu, který chcete přidat:");
define("_ENTERWEBTITLE","Titulek serveru:");
define("_ENTERIMGURL","URL orázku.");
define("_ENTERIMGPOS","Pozice obrázku.");
define("_IMGPOSRORL","'R' nebo 'r' pro 'vpravo','L' nebo 'l' pro 'vlevo', nebo nechte prázdné.");
define("_ERRORIMGPOS","CHYBA! Zadejte pozici obrázku.");
define("_ENTEREMAIL","Zadejte e-mailovou adresu.");
define("_ENTERCODE","Zadejte XOOPS kód.");
define("_ENTERQUOTE","Zadejte text, který chcete citovat.");
define("_ENTERTEXTBOX","Napište text do textového pole.");
define("_ALLOWEDCHAR","Max. počet znaků: ");
define("_CURRCHAR","Současný počet znaků: ");
define("_PLZCOMPLETE","Vyplňte prosím předmět a text zprávy.");
define("_MESSAGETOOLONG","Vaše zpráva je příliš dlouhá.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 sekunda');
define('_SECONDS','%s sekund');
define('_MINUTE','1 minuta');
define('_MINUTES','%s minut');
define('_HOUR','1 hodina');
define('_HOURS','%s hodin');
define('_DAY','1 den');
define('_DAYS','%s dnů');
define('_WEEK','1 týden');
define('_MONTH','1 měsíc');

define("_DATESTRING","j.n.Y \v G:i:s");
define("_MEDIUMDATESTRING","G:i j.n.Y");
define("_SHORTDATESTRING","j.n.Y");
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
define('_LANGCODE','cs');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","0");
?>
