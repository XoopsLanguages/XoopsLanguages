<?php
// $Id: global.php 12041 2013-09-14 14:06:17Z beckmi $
// _LANGCODE: cs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_PLEASEWAIT','Počkejte prosím');
define('_FETCHING','Nahrávám...');
define('_TAKINGBACK','Přesměrovávám zpět...');
define('_LOGOUT','Odhlásit');
define('_SUBJECT','Předmět');
define('_MESSAGEICON','Ikona zprávy');
define('_COMMENTS','Komentáře');
define('_POSTANON','Poslat anonymně');
define('_DISABLESMILEY','Vypnout smajlíky');
define('_DISABLEHTML','Vypnout HTML');
define('_PREVIEW','Náhled');
define('_GO','Provést');
define('_NESTED','Vnořené');
define('_NOCOMMENTS','Bez komentářů');
define('_FLAT','Ploché');
define('_THREADED','Podle vláken');
define('_OLDESTFIRST','Starší dříve');
define('_NEWESTFIRST','Novější dříve');
define('_MORE','více...');
define('_MULTIPAGE','Pokud chcete článek rozdělit na více stránek, vložte řídící slovo <span color=red>[pagebreak]</span> (včetně závorek) na místo, kde chcete provést rozdělení.');
define('_IFNOTRELOAD','Pokud se dlouho nic neděje, <a href=\'%s\'>klikněte na tento text</a>.');
// Error messages issued by XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED','%s je vyžadován');
define('_XOBJ_ERR_SHORTERTHAN','%s musí být kratší než %d znaků.');
// %%%%%%    File Name themeuserpost.php     %%%%%
define('_PROFILE','Profil');
define('_POSTEDBY','Napsal/a'); // Posted by
define('_VISITWEBSITE','Přejít na WWW stránky');
define('_SENDPMTO','Poslat soukromou zprávu %s');
define('_SENDEMAILTO','Poslat email pro %s');
define('_ADD','Přidat');
define('_REPLY','Odpovědět');
define('_DATE','Odesláno'); // Posted date
// %%%%%%    File Name admin_functions.php     %%%%%
define('_MAIN','Hlavní stránka');
define('_MANUAL','Ručně');
define('_INFO','Info');
define('_CPHOME','Řídící panel'); // Control Panel Home
define('_YOURHOME','Domácí stránka'); // Home Page
// %%%%%%    File Name misc.php (who's-online popup)    %%%%%
define('_WHOSONLINE','Kdo je online?');
define('_GUESTS','Hosté');
define('_MEMBERS','Uživatelé');
define('_ONLINEPHRASE','<strong>%s</strong> uživatel(ů) je online');
define('_ONLINEPHRASEX','<strong>%s</strong> uživatel(ů) si prohlíží <strong>%s</strong>');
define('_CLOSE','Zavřít okno'); // Close window
// %%%%%%    File Name module.textsanitizer.php     %%%%%
define('_QUOTEC','Citát:');
// %%%%%%    File Name admin.php     %%%%%
define('_NOPERM','Lituji, ale nemáte oprvánění k přístupu do této části.');
// %%%%%        Common Phrases        %%%%%
define('_NO','Ne');
define('_YES','Ano');
define('_EDIT','Upravit');
define('_DELETE','Smazat');
define('_SUBMIT','Odeslat');
define('_MODULENOEXIST','CHYBA! Vybraný modul neexistuje.');
define('_ALIGN','Zarovnání');
define('_LEFT','Vlevo');
define('_CENTER','Na střed');
define('_RIGHT','Vpravo');
define('_FORM_ENTER','Prosím zadejte %s');
define('_MUSTWABLE','Server musí mít možnost zapisovat do souboru  %s!'); // %s represents file name
// Module info
define('_PREFERENCES','Nastavení');
define('_VERSION','Verze');
define('_DESCRIPTION','Popis');
define('_AUTHOR','Autor');
define('_CREDITS','Poděkování');
define('_LICENCE','Licence');
define('_ERRORS','Chyby');
define('_NONE','Nic');
define('_ON','v');
define('_READS','přečtení');
define('_WELCOMETO','Vítejte v %s');
define('_SEARCH','hledání');
define('_ALL','Vše');
define('_TITLE','Nadpis');
define('_OPTIONS','Možnosti');
define('_QUOTE','Citát');
define('_LIST','Seznam');
define('_LOGIN','Přihlášení uživatele');
define('_USERNAME','Uživatelské jméno: ');
define('_PASSWORD','Heslo: ');
define('_SELECT','Vybrat');
define('_IMAGE','Obrázek');
define('_SEND','Poslat');
define('_CANCEL','Zrušit');
define('_ASCENDING','Vzestupné řazení');
define('_DESCENDING','Sestupné řazení');
define('_BACK','Zpět');
define('_NOTITLE','Bez nadpisu');
/**
* Image manager
*/
define("_MD_ADDIMGCAT","Přidat kategorii");
define("_MD_IMGCATNAME","Název kategorie");
define("_MD_IMGCATRGRP","Skupiny, které mohou používat Správce obrázků");
define("_MD_IMGCATWGRP","Skupiny, které mohou nahrávat obrázky na server");
define("_MD_IMGCATWEIGHT","Zobrazit pořadí ve Správce obrázků"); // Display order in image manager
define("_MD_IMGCATDISPLAY","Zobrazit");
define("_MD_IMGCATSTRTYPE","Obrázky budou uloženy do:");
define("_MD_STRTYOPENG","POZOR! Tuto volbu nelze v budoucnu změnit!");
define("_MD_ASFILE","Uložit jako soubor (do zvoleného adresáře)");
define("_MD_INDB","Uložit do databáze (jako binární \"blob\" data)");
define("_MD_IMGMAIN","Kategorie");
define("_MD_EDITIMGCAT","Nastavení obrázků");
define('_IMGMANAGER','Správce obrázků');
define('_NUMIMAGES','%s obrázků');
define('_ADDIMAGE','Přidat soubor obrázku');
define('_IMAGENAME','Název:');
define('_IMGMAXSIZE','Maximální velikost souboru (bytů):');
define('_IMGMAXWIDTH','Maximální šířka obrázku (pixely):');
define('_IMGMAXHEIGHT','Maximální výška obrázků (pixely):');
define('_IMAGECAT','Kategorie:');
define('_IMAGEFILE','Soubor obrázku:');
define('_IMGWEIGHT','Pořadí ve Správce obrázků:');
define('_IMGDISPLAY','Zobrazit tento obrázek?');
define('_IMAGEMIME','MIME typ:');
define('_FAILFETCHIMG','CHYBA! Nelze nahrát soubor %s');
define('_FAILSAVEIMG','CHYBA! Během ukládání obrázku %s do databáze došlo k chybě.');
define('_NOCACHE','Bez vyrovnávací paměti');
define('_CLONE','Duplikovat');
// %%%%%    For xoopsform files %%%%%
define('_STARTSWITH','Začíná');
define('_ENDSWITH','Končí');
define('_MATCHES','Je podobné');
define('_CONTAINS','Obsahuje');
define('_REQUIRED','Vyžadováno');
// %%%%%%    File Name commentform.php     %%%%%
define('_REGISTER','Registrovat');
// %%%%%%    File Name xoopscodes.php     %%%%%
define('_SIZE','VELIKOST'); // font size
define('_FONT','FONT'); // font family
define('_COLOR','BARVA'); // font color
define('_EXAMPLE','PŘÍKLAD');
define('_ENTERURL','Vložte adresu WWW stránky na kterou chcete odkazovat:'); // Enter the URL of the link you want to add
define('_ENTERWEBTITLE','Napište jméno stránky:');
define('_ENTERIMGURL','Vložte adresu obrázku na který chcete odkazovat.');
define('_ENTERIMGPOS','Nyní zvolte zarovnání obrázku.');
define('_IMGPOSRORL','\'R\' nebo \'r\' pro zarovnání doprava, \'L\' nebo \'l\' pro zarovnání doleva, případně nechte pole volné.');
define('_ERRORIMGPOS','CHYBA! Je potřeba vybrat zarovnání obrázku.');
define('_ENTEREMAIL','Napište emailovou adresu, kterou chcete vložit do textu.');
define('_ENTERCODE','Napište kód, který chcete vložit do textu.');
define('_ENTERQUOTE','Napište text, který chcete vložit jako citaci.');
define('_ENTERTEXTBOX','Napište text do textového pole.'); // Please input text into the textbox
define('_ALLOWEDCHAR','Maximální délka textu je: ');
define('_CURRCHAR','Napsáno je: ');
define('_PLZCOMPLETE','Vyplňte políčka Předmět i Zpráva.');
define('_MESSAGETOOLONG','Váš text je příliš dlouhý.');
/**
* xoops smilie
*/
define('_AM_ADDSMILE','Přidat nového smajlíka');
define('_AM_SMILECODE','Kód');
define('_AM_SMILEEMOTION','Popis');
define('_AM_DISPLAYF','Zobrazit ve formuláři?');
// %%%%%        TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 sekunda');
define('_SECONDS','%s sekund(y)');
define('_MINUTE','1 minuta');
define('_MINUTES','%s minut(y)');
define('_HOUR','1 hodina');
define('_HOURS','%s hodin(y)');
define('_DAY','1 den');
define('_DAYS','%s dní');
define('_WEEK','1 víkend');
define('_MONTH','1 měsíc');
define('_DATESTRING','j. n. Y G:i:s'); // Y/n/j G:i:s
define('_MEDIUMDATESTRING','j. n. Y. G:i'); // Y/n/j G:i
//define('_SHORTDATESTRING','n/j/Y');
define('_SHORTDATESTRING','d. m. Y'); // m/d/Y
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
define('_CHARSET','UTF-8');
define('_LANGCODE','cs');
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES','0');
/**
* Additions to 2.4.0
**/
define('_RESET','Vymazat');
define('_RE','Odp:');
/**
 * Additions to 2.5.5
**/
define('_DBDATESTRING','d. m. Y');
define('_DBTIMESTRING','H:i:s');
define('_DBTIMESTAMPSTRING','d. m. Y v H:i:s');
