<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id: install.php 12598 2014-06-15 03:34:59Z beckmi $
 */
// _LANGCODE: cz
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP',"Zobrazit/skrýt text nápovědy");
// License
define('LICENSE_NOT_WRITEABLE','%s do souboru License se nedá zapisovat! <br/><span style="colour:#ff0000">Nastavte práva souboru ../include/license.php tak, aby do nich mohl server zapisovat</span>.');
define('LICENSE_IS_WRITEABLE','%s do souboru Licence lze zapisovat.');
// Configuration check page
define('SERVER_API',"Server API");
define('PHP_EXTENSION',"%s rozšíření");
define('CHAR_ENCODING',"Kódování znaků");
define('XML_PARSING',"XML parsing");
define('REQUIREMENTS',"Požadavky");
define('_PHP_VERSION',"PHP verze");
define('RECOMMENDED_SETTINGS',"Doporučená nastavení");
define('RECOMMENDED_EXTENSIONS',"Doporučená rozšíření");
define('SETTING_NAME',"Jméno nastavení");
define('RECOMMENDED',"Doporučeno");
define('CURRENT',"Současné nastavení");
define('RECOMMENDED_EXTENSIONS_MSG',"Toto rozšíření není nutné pro normální provoz, ale může být vyžadováno pro provoz
    některých specifických vlastností (např. podpora více jazyků nebo RSS čteček). Proto doporučujeme jeho instalaci.");
define('NONE',"Není");
define('SUCCESS',"Hotovo");
define('WARNING',"Varování");
define('FAILED',"Selhalo");
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD',"Průvodce instalací systému XOOPS");
define('LANGUAGE_SELECTION',"Jazyk");
define('LANGUAGE_SELECTION_TITLE',"Vyberte jazyk");        // L128
define('INTRODUCTION',"Úvod");
define('INTRODUCTION_TITLE',"Vítejte v průvodci instalací systému XOOPS");        // L0
define('CONFIGURATION_CHECK',"Kontrola konfigurace");
define('CONFIGURATION_CHECK_TITLE',"Kontroluji konfiguraci serveru");
define('PATHS_SETTINGS',"Nastavení cest");
define('PATHS_SETTINGS_TITLE',"Nastavení cest");
define('DATABASE_CONNECTION',"Připojení databáze");
define('DATABASE_CONNECTION_TITLE',"Připojení databáze");
define('DATABASE_CONFIG',"Nastavení databáze");
define('DATABASE_CONFIG_TITLE',"Nastavení databáze");
define('CONFIG_SAVE',"Uložit nastavení");
define('CONFIG_SAVE_TITLE',"Uloží vaše nastavení");
define('TABLES_CREATION',"Vytvoření tabulek");
define('TABLES_CREATION_TITLE',"Vytvoření tabulek v databázi");
define('INITIAL_SETTINGS',"Počáteční nastavení");
define('INITIAL_SETTINGS_TITLE',"Zadejte prosím počáteční nastavení");
define('DATA_INSERTION',"Vložení dat");
define('DATA_INSERTION_TITLE',"Uložení dat do databáze");
define('WELCOME',"Vítejte");
define('WELCOME_TITLE',"Vítejte na své nové stránce se systémem XOOPS");        // L0
// Settings (labels and help text)
define('XOOPS_PATHS',"Fyzické cesty XOOPSu");
define('XOOPS_URLS',"Umístění webu");
define('XOOPS_ROOT_PATH_LABEL',"Fyzická cesta ke kořenovému adresáři XOOPSu");
define('XOOPS_ROOT_PATH_HELP',"Physical path to the XOOPS documents (served) directory WITHOUT trailing slash");
define('XOOPS_LIB_PATH_LABEL',"Adresář s knihovnou XOOPSu");
define('XOOPS_LIB_PATH_HELP',"Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure.");
define('XOOPS_DATA_PATH_LABEL',"Adresář s daty XOOPSu");
define('XOOPS_DATA_PATH_HELP',"Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure.");
define('XOOPS_URL_LABEL',"Adresa webu (URL)"); // L56
define('XOOPS_URL_HELP',"Main URL that will be used to access your XOOPS installation"); // L58
define('LEGEND_CONNECTION',"Připojení serveru");
define('LEGEND_DATABASE',"Databáze"); // L51
define('DB_HOST_LABEL',"Název serveru");    // L27 Server hostname
define('DB_HOST_HELP',"Název databázového serveru. Pokud si nejste jisti, ponechejte <em>localhost</em>, což téměř vždy funguje."); // L67
define('DB_USER_LABEL',"Uživatelské jméno");    // L28 User name
define('DB_USER_HELP',"Uživatelské jméno uživatele databázového serveru."); // L65
define('DB_PASS_LABEL',"Heslo");    // L52
define('DB_PASS_HELP',"Heslo k databázovému serveru."); // L68
define('DB_NAME_LABEL',"Jméno databáze");    // L29
define('DB_NAME_HELP',"Jméno databáze na databázovem serveru. Pokud instalátor databázi nenajde, pokusí se ji vytvořit."); // L64
define('DB_CHARSET_LABEL',"Kódová stránka databáze");
define('DB_CHARSET_HELP',"MySQL podporuje ukládání dat v růných kódovánícho a také jejich různé řazení.");
define('DB_COLLATION_LABEL',"Řazení databáze");
define('DB_COLLATION_HELP',"Toto nastavení určije způsob řazení slov a písmen.");
define('DB_PREFIX_LABEL',"Prefix tabulek");    // L30
define('DB_PREFIX_HELP',"Tento prefix se přidává před název tabulek, je to z důvodu předcházení konfliktů jmen tabulek v databázi. Pokud si nejste jisti, tak ponechejte výchozí hodnotu."); // L63
define('DB_PCONNECT_LABEL',"Použít trvalé připojení");    // L54
define('DB_PCONNECT_HELP',"Výchozí nastavení je 'Ne'. Pokud si nejste jisti, tak ponechejte volné."); // L69
define('DB_DATABASE_LABEL',"Databáze");
define('LEGEND_ADMIN_ACCOUNT',"Účet administrátora");
define('ADMIN_LOGIN_LABEL',"Administrátorské jméno"); // L37
define('ADMIN_EMAIL_LABEL',"Administrátorský e-mail"); // L38
define('ADMIN_PASS_LABEL',"Administrtárské heslo"); // L39
define('ADMIN_CONFIRMPASS_LABEL',"Potvrzení hesla"); // L74
// Buttons
define('BUTTON_PREVIOUS',"Předchozí"); // L42
define('BUTTON_NEXT',"Další"); // L47
// Messages
define('XOOPS_FOUND',"%s existuje");
define('CHECKING_PERMISSIONS',"Kontrola oprávnění souborů a adresářů..."); // L82
define('IS_NOT_WRITABLE',"do %s nelze zapisovat."); // L83
define('IS_WRITABLE',"do %s lze zapisovat."); // L84
define('XOOPS_PATH_FOUND',"Cesta existuje.");
define('READY_CREATE_TABLES',"Nebyly nalezeny žádné tabulky systému XOOPS.<br />Instalátor je proto nyní vytvoří.<br />Klikněte na <em>další</em>.");
define('XOOPS_TABLES_FOUND',"V databázi již existují systémové tabulky XOOPSu.<br />Klikněte na <em>další</em> a pokračujte dalším krokem."); // L131
define('XOOPS_TABLES_CREATED',"V databázi byly vytvořeny systémové tabulky.<br />Klikěnte na <em>další</em> a pokračujte dlaším krokem.");
define('READY_INSERT_DATA',"Instalátor nyní do databáze uloží výchozí nastavení a data.");
define('READY_SAVE_MAINFILE',"Instalátor nyní uloží do souboru <em>mainfile.php</em> potřebná nastavení.<br />Klikněte na <em>další</em>.");
define('SAVED_MAINFILE',"Nastavení jsou uložena do souboru mainfile.php");
define('SAVED_MAINFILE_MSG',"Instalátor uložit specifická nastavení do souborů <em>mainfile.php</em> a <em>secure.php</em>. Klikněte na <em>další</em> a pokračujte dalším krokem.");
define('DATA_ALREADY_INSERTED',"Data jsou již v datábázi uložena.<br />Klikněte na <em>další</em> a pokračujte dalším krokem.");
define('DATA_INSERTED',"Počáteční data byla vložena do databáze.<br />Klikěnte na <em>další</em> a pkračujte dalším krokem.");
// %s is database name
define('DATABASE_CREATED',"Vytvořena databáze %s."); // L43
// %s is table name
define('TABLE_NOT_CREATED',"Nemohu vytvořit tabulku %s"); // L118
define('TABLE_CREATED',"Vytvořena tabulka %s."); // L45
define('ROWS_INSERTED',"Do tabulky %s bylo oloženo %d položek."); // L119 %d entries inserted to table %s
define('ROWS_FAILED',"Během zapisu do tabulky %s došlo k %d chybám."); // L120 Failed inserting %d entries to table %s."); 
define('TABLE_ALTERED',"Tabulka %s byla aktualizována."); // L133
define('TABLE_NOT_ALTERED',"Během aktualizace tabulky %s došlo k chybě."); // L134
define('TABLE_DROPPED',"Tabulka %s byla odstraněna."); // L163
define('TABLE_NOT_DROPPED',"Během mazání tabulky %s došlo k chybě."); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS',"CHYBA! Nemohu číst adresáře. Zkontrolujte prosím jestli existuje a jestli z něj server může číst.");
define('ERR_NO_XOOPS_FOUND',"CHYBA! V zadaném adresáři nebyla nalezena instalace XOOPSu.");
define('ERR_INVALID_EMAIL',"CHYBA! Chybný email."); // L73
define('ERR_REQUIRED',"CHYBA! Tato informace je nutná."); // L41 Information is required
define('ERR_PASSWORD_MATCH',"CHYBA! Zadaná hesla jsou rozdílná"); // The two passwords do not match
define('ERR_NEED_WRITE_ACCESS',"CHYBA! Server nutně potřebuje mít možnost zápisu do těchto souborů a adresářů<br />(v UNIXu/LINUXu provedete nastavení například pomocí <em>chmod 777 directory_name</em>)<br />Pokud neexistují, vytvořte je prosím ručně a nastavte potřebná práva.");
define('ERR_NO_DATABASE',"CHYBA! Nemohu vytvořit databázi. Kontaktujte administrátora serveru a zjistěte proč."); // L31
define('ERR_NO_DBCONNECTION',"CHYBA! Nemohu se připojit k databázovému serveru."); // L106
define('ERR_WRITING_CONSTANT',"CHYBA! Během zápisu konstatnty %s došlo k chybě."); // L122
define('ERR_COPY_MAINFILE',"CHYBA! Nemohu kopírovat distribuční soubor do souboru mainfile.php");
define('ERR_WRITE_MAINFILE',"CHYBA! Nemohu zapisovat do souboru mainfile.php. Zkontrolujte nastavení a zkuste to ještě jednou.");
define('ERR_READ_MAINFILE',"CHYBA! Nemohu otevřít soubor mainfile.php.");
define('ERR_INVALID_DBCHARSET',"CHYBA! Kódová stránka '%s' není podporována.");
define('ERR_INVALID_DBCOLLATION',"CHYBA! Řazení '%s' není podporováno.");
define('ERR_CHARSET_NOT_SET',"CHYBA! Nastavení výchozí kódové stránky nebylo uloženo do databáze.");
define('_INSTALL_CHARSET',"UTF-8");
define('SUPPORT',"Podpora"); // Supports
define('LOGIN',"Ověření pravosti"); // Authentication
define('LOGIN_TITLE',"Ověření pravosti");
define('USER_LOGIN',"Přihlášení administrátora");
define('USERNAME',"Uživatelské jméno :");
define('PASSWORD',"Heslo :");
define('ICONV_CONVERSION',"Konverze znakové sady"); // Character set conversion
define('ZLIB_COMPRESSION',"Komprimace Zlib");
define('IMAGE_FUNCTIONS',"Obrázkové funkce");
define('IMAGE_METAS',"Image meta data (exif)");
define('FILTER_FUNCTIONS',"Filter functions");
define('ADMIN_EXIST',"Administrátorský účet již existuje.<br />Klikněte na <strong>další</strong> a pokračujte dalším krokem.");
define('CONFIG_SITE',"Nastavení stránek");
define('CONFIG_SITE_TITLE',"Nastavení stránek");
define('MODULES',"Instalace modulů");
define('MODULES_TITLE',"Instalace modulů");
define('THEME',"Vyberte vzhled");
define('THEME_TITLE',"Vyberte výchozí vzhled");
define('INSTALLED_MODULES',"Vybrané moduly byly nainstalovány.<br />Klikněte na <strong>další</strong> a pokračujte dalším krokem.");
define('NO_MODULES_FOUND',"Nejsou dostupné žádné moduly.<br />Klikněte na <strong>další</strong> a pokračujte dalším krokem.");
define('NO_INSTALLED_MODULES',"Nebyly nainstalovány žádné moduly.<br />Klikněte na <strong>další</strong> a pokračujte dalším krokem.");
define('THEME_NO_SCREENSHOT',"Náhled není k dispozici");
define('IS_VALOR'," => ");
// password message
define('PASSWORD_LABEL',"Síla hesla : ");
define('PASSWORD_DESC',"Heslo nezadáno");
define('PASSWORD_GENERATOR',"Generátor hesla");
define('PASSWORD_GENERATE',"Vytvoř");
define('PASSWORD_COPY',"Copírovat");
define('PASSWORD_VERY_WEAK',"Velmi slabé");
define('PASSWORD_WEAK',"Slabé");
define('PASSWORD_BETTER',"Ucházející");
define('PASSWORD_MEDIUM',"Střední");
define('PASSWORD_STRONG',"Silné");
define('PASSWORD_STRONGEST',"Velmi silné");
//2.5.7
define('WRITTEN_LICENSE',"Zapsané %s Licenční číslo: <strong>%s</strong>");
