<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Oprávnění');
define('_MD_A_MYMENU_MYPREFERENCES','Nastavení');
// index.php
define('_AM_TH_DATETIME',"Čas");
define('_AM_TH_USER',"Uživatel");
define('_AM_TH_IP',"IP");
define('_AM_TH_AGENT',"Prohlížeč");
define('_AM_TH_TYPE',"Typ");
define('_AM_TH_DESCRIPTION',"Popis útoku");
define('_AM_TH_BADIPS','Černá listina (blokované IP adresy)<br /><br /><span style="font-weight:normal;">Kažou IP adresu napište na jeden řádek.<br />Prázné pole povolí přístup ze všech IP adres.</span>');
define('_AM_TH_GROUP1IPS','Povolené IP adresy pro administrátorskou skupinu.<br /><br /><span style="font-weight:normal;">Každou IP adresu napište na jeden řádek.<br />192.168. means 192.168.*<br />Prázné pole povolí přístup ze všech IP adres.</span>');
define('_AM_LABEL_COMPACTLOG',"Pročistit záznam a tím jej zmenšit:");
define('_AM_BUTTON_COMPACTLOG',"Pročistit");
define('_AM_JS_COMPACTLOGCONFIRM',"Smaže vícenásobné záznamy.");
define('_AM_LABEL_REMOVEALL',"Smazat všechny záznamy");
define('_AM_BUTTON_REMOVEALL',"Smazat vše");
define('_AM_JS_REMOVEALLCONFIRM',"Myslíte to vážně? Opravdu chcete smazat celý záznam?");
define('_AM_LABEL_REMOVE',"Smazat zaškrtnuté záznamy:");
define('_AM_BUTTON_REMOVE',"Smazat");
define('_AM_JS_REMOVECONFIRM',"Myslíte to vážně? Opravdu chcete smazat zaškrtnuté záznamy?");
define('_AM_MSG_IPFILESUPDATED',"Soubory se seznamy IP adres byly v pořádku aktualizovány.");
define('_AM_MSG_BADIPSCANTOPEN',"Nemohu otevřít soubor pro zápis černé listiny."); // The file for bad IP cannot be opened
define('_AM_MSG_GROUP1IPSCANTOPEN',"Nemohu otevřít soubor pro zápis bezpečných adres."); // The file for allowing group=1 cannot be opened
define('_AM_MSG_REMOVED',"Záznamy byly smazány.");
define('_AM_FMT_CONFIGSNOTWRITABLE',"Povolte zápis do adresáře: %s");
// prefix_manager.php
define('_AM_H3_PREFIXMAN',"Správce prefixů");
define('_AM_MSG_DBUPDATED',"Databáze byla v pořádku aktualizována.");
define('_AM_CONFIRM_DELETE',"Myslíte to vážně? Opravdu chcete smazat VEŠKERÁ data?");
define('_AM_TXT_HOWTOCHANGEDB',"Pokud chcete změnit prefix systémové databáze, je potřeba ručně upravit soubor %s/mainfile.php následujícím způsobem: <br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE',"Toto není bezpečné");
define('_AM_ADV_TRUSTPATHPUBLIC',"Jestliže vidíte obázek -NG- nebo se po klinutí na odkaz dostanete na nějakou stránku, je Vaše XOOPS_TRUST_PATH špatně umístěná. Nejlépe je umístit XOOPS_TRUST_PATH mimo adresářovou strukturu webového serveru (DocumentRoot).</br>Pokud toto nemůžete z nějakého důvodu udělat, použijte druhý způsob zabezpečení a to tak, že do souboru .htaccess vložíte záznam DENY FROM ALL těsně před XOOPS_TRUST_PATH.");
define('_AM_ADV_TRUSTPATHPUBLICLINK',"Kliknutím sem zkontrolujtete, jestli jsou soubory v TRUST_PATH nastavené pouze pro čtení. Po kliknutí musíte dostat chybovou hlášku 404, 403 nebo 500."); // Check that PHP files inside TRUST_PATH are set to read-only (it must be 404,403 or 500 error)
define('_AM_ADV_REGISTERGLOBALS',"Toto nastavení přímo zve k různým útoků. Pokud můžete, nastavte v php.ini proměnnou 'register_globals off'. Pokud nemůžete, vytvořte, nebo upravte soubor .htaccess v adresáři XOOPSu:");
define('_AM_ADV_ALLOWURLFOPEN',"Toto nastavení dovoluje útočníků spustit libovoný škodlivý kód na vzdáleném serveru.<br />Toto nastavení může změnit pouze administrátor serveru.<br />Jestliže jste to vy, upravte soubor php.ini nebo httpd.conf.<br /><b>Například pro httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Nebo tuto změnu požadujte od svých administrátorů.");
define('_AM_ADV_USETRANSSID',"Toto nastavení dovoluje zobrazení SESSION ID například pomocí tagů.<br />Jako prevence proti unesení session přidejte jeden řádek do souboru .htaccess umístěného v XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Toto nastavení umožňuje 'SQL Injections'.<br />Nezapomeňte zapnout volbu 'Force sanitizing *' v nastavení Protectoru.");
define('_AM_ADV_LINK_TO_PREFIXMAN',"Přejít na Správce prefixů");
define('_AM_ADV_MAINUNPATCHED',"Jak upravit soubor mainfile.php se dozvíte například v souboru README.");
define('_AM_ADV_DBFACTORYPATCHED',"Váš soubor \"databasefactory\" je připraven na útoky typy DBLayer Trapping anti-SQL-Injection");
define('_AM_ADV_DBFACTORYUNPATCHED',"Váš soubor \"databasefactory\" není připraven pro útoky typu DBLayer Trapping anti-SQL-Injection. Bude potřeba jej opravit.");
define('_AM_ADV_SUBTITLECHECK',"Zde si můžete ověřit, že Protector dobře funguje");
define('_AM_ADV_CHECKCONTAMI',"Kontaminace odkazu");
define('_AM_ADV_CHECKISOCOM',"Izolovaný komentář"); // Isolated Comments
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2',"and place in it the line below:");
