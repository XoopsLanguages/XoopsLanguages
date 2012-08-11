<?php
// $Id: install.php,v 1.8 2003/10/08 10:23:22 okazu Exp $ + CZ Translation (http://xoops.zpc.cz)
define("_INSTALL_L0","Vítá Vás průvodce instalací pro XOOPS 2.0");
define("_INSTALL_L70","Je nezbytné, aby během instalace byl soubor mainfile.php nastaven pro zápis serverem (např. chmod 777 mainfile.php na UNIX/LINUX serveru nebo na Windowsech nastavte soubor mainfile.php tak, aby nebyl nastaven \"Pouze pro čtení\"). Až to uděláte znovunačtěte tuto stránku.");
//define("_INSTALL_L71","Click on the button below to begin the installation.");
define("_INSTALL_L1","Otevřete soubor mainfile.php ve Vašem textovém editoru a najděte následující kód na řádku 31:");
define("_INSTALL_L2","Změňte tuto řádku na toto:");
define("_INSTALL_L3","Nyní, na řádce 35, změňte %s na %s");
define("_INSTALL_L4","Hotovo! Nastavil jsem předepsané hodnoty, zkusme to znovu!");
define("_INSTALL_L5","POZOR!");
define("_INSTALL_L6","Existuje jistý rozdíl mezi Vaším nastavením XOOPS_ROOT_PATH na řádce 31 v souboru mainfile.php a tím, co detekoval instalační program.");
define("_INSTALL_L7","Vaše nastavení: ");
define("_INSTALL_L8","Instalační program detekoval: ");
define("_INSTALL_L9","(Na platformách Microsoft se občas stává, že získáte toto chybové oznámení, ačkoliv Vaše nastavení je správné. Pokud je to tento případ, prosíme, pokračujte stiknutím tlačítka Dále)");
define("_INSTALL_L10","Prosíme, stiskněte tlačítko níže pokud je toto opravdu v pořádku.");
define("_INSTALL_L11","Cesta na serveru do kořenového adresáře XOOPS: ");
define("_INSTALL_L12","URL do kořenového adresáře XOOPS: ");
define("_INSTALL_L13","Pokud je toto nastavení v pořádku, kliněte na tlačítko Dále.");
define("_INSTALL_L14","Dále");
define("_INSTALL_L15","Prosíme, otevřete soubor mainfile.php a vepište tam nezbytná nastavení databáze");
define("_INSTALL_L16","%s je název (nebo adresa) Vašeho databázového serveru.");
define("_INSTALL_L17","%s je uživatelské jméno pro přístup do databáze.");
define("_INSTALL_L18","%s je heslo nezbytné pro přístup do Vaší databáze.");
define("_INSTALL_L19","%s je jméno databáze, ve které bude XOOPS vytvářet své tabulky.");
define("_INSTALL_L20","%s je předpona názvů tabulek, které budou vytvořeny během instalace.");
define("_INSTALL_L21","Následující databáze nebyla na serveru nalezena:");
define("_INSTALL_L22","Má se instalační program pokusit ji vytvořit?");
define("_INSTALL_L23","Ano");
define("_INSTALL_L24","Ne");
define("_INSTALL_L25","Instalační program detekoval následující nastavení databáze ze souboru mainfile.php. Prosíme, překontrolujte je a případně je upravte.");
define("_INSTALL_L26","Nastavení databáze");
define("_INSTALL_L51","Databáze");
define("_INSTALL_L66","Vyberte databázi, kterou chcete pro Xoops použít.");
define("_INSTALL_L27","Databázový server");
define("_INSTALL_L67","Jméno databázového serveru. Pokud si nejste jisti, 'localhost' bývá standardním nastavením.");
define("_INSTALL_L28","Uživatelské jméno");
define("_INSTALL_L65","Vaše uživatelské jméno pro přístup na databázový server do databáze.");
define("_INSTALL_L29","Jméno databáze");
define("_INSTALL_L64","Jméno databáze na serveru. Pokud databáze neexistuje, instalační průvodce se ji pokusí vytvořit.");
define("_INSTALL_L52","Heslo");
define("_INSTALL_L68","Vaše heslo pro přístup na databázový server do databáze.");
define("_INSTALL_L30","Označení tabulek");
define("_INSTALL_L63","Předpona (prefix) tabulek kvůli zamezení konfliktů při vytváření tabulek pro Xoops. Pokud si nejste jisti, prosté 'xoops' by mělo fungovat bez potíží.");
define("_INSTALL_L54","Použít persistentní spojení?");
define("_INSTALL_L69","Standard je 'NE'. Vyberte 'NE' pokud si nejste jisti.");
define("_INSTALL_L55","Fyzická cesta k XOOPS");
define("_INSTALL_L59","Fyzická cesta na server ke kořenovému adresáři XOOPS bez lomítka na konci.");
define("_INSTALL_L56","Virtuální adresa XOOPS (URL)");
define("_INSTALL_L58","Virtuální cesta ke kořenovému adresáři XOOPS bez lomítka na konci.");

define("_INSTALL_L31","Nepodařilo se vytvořit databázi. Kontaktujte administrátora serveru pro další pomoc.");
define("_INSTALL_L32","Instalace Dokončena");
define("_INSTALL_L33","Kliknětře <a href='../index.php'>TADY</a> a uvidíte titulní stránku Vašeho serveru.");
define("_INSTALL_L35","Pokud jste narazili na nějaké chyby, prosíme, oznamte to vývojovému týmu na <a href='http://www.xoops.org/' target='_blank'>XOOPS.org</a> nebo na <a href='http://xoops.zpc.cz/' target='_blank'>Oficiální české XOOPS podpoře</a>");
define("_INSTALL_L36","Zadejte administrátorské jméno a heslo pro Váš XOOPS server.");
define("_INSTALL_L37","Jméno administrátora");
define("_INSTALL_L38","E-mail administrátora");
define("_INSTALL_L39","Heslo administrátora");
define("_INSTALL_L74","Znovu heslo");
define("_INSTALL_L40","Vytvořit tabulky");
define("_INSTALL_L41","Prosím, vraťte se zpět a dopište veškeré potřebné informace.");
define("_INSTALL_L42","Zpět");
define("_INSTALL_L57","Prosím zadejte %s");

// %s is database name
define("_INSTALL_L43","Databáze %s vytvořena!");

// %s is table name
define("_INSTALL_L44","Nepodařilo se vytvořit tabulku %s");
define("_INSTALL_L45","Tabulka %s vytvořena.");

define("_INSTALL_L46","Kvůli provtnímu nastavení modulů obsažených v systému XOOPS musejí být následující soubory nastaveny pro zápis serverem. Je nezbytné, aby během instalace byl soubor mainfile.php nastaven pro zápis serverem (např. chmod 777 mainfile.php na UNIX/LINUX serveru nebo na Windowsech nastavte soubor mainfile.php tak, aby nebyl nastaven \"Pouze pro čtení\"). Až to uděláte znovunačtěte tuto stránku.");
define("_INSTALL_L47","Dále");

define("_INSTALL_L53","Prosím, potvrďte tyto vložené údaje:");

define("_INSTALL_L60","Nepodařilo se zapsat data do souboru mainfile.php. Prosíme, překontrolujte přístupová práva, příp. nastavení \"Pouze pro čtení\", a zkuste znovu data uložit.");
define("_INSTALL_L61","Nepodařilo se zapsat data do souboru mainfile.php. Kontaktujte administrátora serveru pro další pomoc.");
define("_INSTALL_L62","Nastavení bylo v pořádku uloženo do souboru mainfile.php.");
define("_INSTALL_L72","Následující adresáře musejí být vytvořeny s právem zápisu serverem. (např. 'chmod 777 jmeno_adresare' na UNIX/LINUX serveru)");
define("_INSTALL_L73","Chybný e-mail");

// add by haruki
define("_INSTALL_L80","úvod");
define("_INSTALL_L81","prověření přístupových práv");
define("_INSTALL_L82","Prověření přístupových práv k souborům a adresářům..");
define("_INSTALL_L83","Soubor %s NENÍ nastaven pro zápis.");
define("_INSTALL_L84","Soubor %s je nastaven pro zápis.");
define("_INSTALL_L85","Adresář %s NENÍ nastaven pro zápis.");
define("_INSTALL_L86","Adresář %s je nastaven pro zápis.");
define("_INSTALL_L87","Žádné problémy nebyly zjištěny.");
define("_INSTALL_L89","hlavní nastavení");
define("_INSTALL_L90","Hlavní nastavení");
define("_INSTALL_L91","potvrdit");
define("_INSTALL_L92","uložit nastavení");
define("_INSTALL_L93","upravit nastavení");
define("_INSTALL_L88","Ukládání nastavení..");
define("_INSTALL_L94","prověření cesty & URL");
define("_INSTALL_L127","Prověření cest a adresy..");
define("_INSTALL_L95","Nepodařilo se detekovat fyzickou cestu do Vašeho kořenového adresáře XOOPS.");
define("_INSTALL_L96","Je určitý konfikt mezi detekovanou fyzickou cestou (%s) a tou, kterou jste zadali.");
define("_INSTALL_L97","<b>Fyzická cesta</b> je v pořádku.");

define("_INSTALL_L99","<b>Fyzická cesta</b> musí být adresář.");
define("_INSTALL_L100","<b>Virtuální cesta</b> je funkční adresa.");
define("_INSTALL_L101","<b>Virtuální cestah</b> není správná adresa.");
define("_INSTALL_L102","Potvrzení nastavení databáze");
define("_INSTALL_L103","znovu od začátku");
define("_INSTALL_L104","Prověření databáze");
define("_INSTALL_L105","pokusit se vytvořit databázi");
define("_INSTALL_L106","Nepodařilo se připojit na databázový server.");
define("_INSTALL_L107","Prosíme, zkontrolujte databázový server a jeho nastavení.");
define("_INSTALL_L108","Spojení na databázový server je v pořádku.");
define("_INSTALL_L109","Databáze %s neexistuje.");
define("_INSTALL_L110","Databáze %s existuje a je připravena ke spojení.");
define("_INSTALL_L111","Spojení do databáze je v pořádku.<br />Kliněte na tlačítko Dále pro vytvoření tabulek.");
define("_INSTALL_L112","nastavení administrátorského účtu");
define("_INSTALL_L113","Tabulka %s vymazána.");
define("_INSTALL_L114","Nepodařilo se vytvořit tabulky v databázi.");
define("_INSTALL_L115","Tabulky v databázi vytvořeny.");
define("_INSTALL_L116","vložit údaje");
define("_INSTALL_L117","dokončit");

define("_INSTALL_L118","Nepodařilo se vytvořit tabulku %s.");
define("_INSTALL_L119","%d řádkú vloženo do tabulky %s.");
define("_INSTALL_L120","Nepodařilo se vložit %d řádků do tabulky %s.");

define("_INSTALL_L121","Proměnná %s uložena jako %s.");
define("_INSTALL_L122","Nepodařilo se uložit proměnnou %s.");

define("_INSTALL_L123","Soubor %s uložen do adresáře cache/.");
define("_INSTALL_L124","Nepodařilo se uložit soubor %s do adresáře cache/.");

define("_INSTALL_L125","Soubor %s přepsán souborem %s.");
define("_INSTALL_L126","Nebylo možné zapsat do souboru %s.");

define("_INSTALL_L130","Instalační program detekoval v databázi tabulky pro XOOPS 1.3.x.<br />Program se nyní pokusí tyto tabulky adaptovat pro systém XOOPS2.");
define("_INSTALL_L131","Tabulky pro XOOPS2 již ve Vaší databázi existují.");
define("_INSTALL_L132","adaptovat tabulky");
define("_INSTALL_L133","Tabulka %s adaptována.");
define("_INSTALL_L134","Nepodařilo se adaptovat tabulku %s.");
define("_INSTALL_L135","Nepodařilo se adaptovat tabulky.");
define("_INSTALL_L136","Tabulky byly adaptovány.");
define("_INSTALL_L137","adaptovat moduly");
define("_INSTALL_L138","adaptovat komentáře");
define("_INSTALL_L139","adaptovat ikony");
define("_INSTALL_L140","adaptovat emotikony");
define("_INSTALL_L141","Instalační program nyní převede všechny moduly, aby fungovaly v systému XOOPS2.<br />Ujistěte se, že jste na server nahráli všechna data z balíku XOOPS2.<br />Je možné, že to chvilku potrvá.");
define("_INSTALL_L142","Adaptování modulů..");
define("_INSTALL_L143","Instalační program nyní převede nastavení z XOOPS 1.3.x do nového XOOPS2.");
define("_INSTALL_L144","převést nastavení");
define("_INSTALL_L145","Komentář (ID: %s) vložen do databáze.");
define("_INSTALL_L146","Nepodačilo se vložit komentář (ID: %s) do databáze.");
define("_INSTALL_L147","Adaptování komentářů..");
define("_INSTALL_L148","Převod dokončen.");
define("_INSTALL_L149","Instalační program nyní převede komentáře z XOOPS 1.3.x do nového XOOPS2.<br />Je možné, že to chvilku potrvá.");
define("_INSTALL_L150","Instalační program nyní převede emotikony a uživatelská zařazení do nového XOOPS2.<br />Je možné, že to chvilku potrvá.");
define("_INSTALL_L151","Instalační program nyní převede ikony do nového XOOPS2.<br />Je možné, že to chvilku potrvá.");
define("_INSTALL_L155","Převod emotikonů/obrázků uživatelských zařazení..");
define("_INSTALL_L156","Převod uživatelských ikon..");
define("_INSTALL_L157","Pro každou skupinu vyberte odpovídající druh uživatelské skupiny");
define("_INSTALL_L158","Skupiny v 1.3.x");
define("_INSTALL_L159","Administrátoři");
define("_INSTALL_L160","Registrovaní uživatelé");
define("_INSTALL_L161","Anonymní uživatelé");
define("_INSTALL_L162","Musíte vybrat pro každou skupinu odpovídající druh uživatelské skupiny.");
define("_INSTALL_L163","Tabulky %s odstraněna.");
define("_INSTALL_L164","Nepodařilo se odstranit tabulku %s.");
define("_INSTALL_L165","Server je z důvodů úprav prozatímně uzavřen. Prosíme, navštivte nás později.");

// %s is filename
define("_INSTALL_L152","Nepodařilo se otevřít %s.");
define("_INSTALL_L153","Nepodařilo se aktualizovat %s.");
define("_INSTALL_L154","%s aktualizován.");

define('_INSTALL_L128','Vyberte si jazyk pro použití během instalace');
define('_INSTALL_L200','Obnovit');


define('_INSTALL_CHARSET','UTF-8');
?>