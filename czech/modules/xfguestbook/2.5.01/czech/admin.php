<?php
// Common
	define("_AM_XFGB_ALLMSG","Všechny zápisy");
	define("_AM_XFGB_PUBMSG","Publikované zápisy ");
	define("_AM_XFGB_WAITMSG","Zápisy čekající na schválení");
	define("_AM_XFGB_NOMSG","Vašemu výběru neodpovídá žádný záznam.");
	//add v2.30
	define("_AM_XFGB_DISPLAY","Zobrazit");
	define("_AM_XFGB_SELECT_SORT","Řadit");
	define("_AM_XFGB_SORT_ASC","Vzestupně");
	define("_AM_XFGB_SORT_DESC","Sestupně");
	//add v2.40
	define("_AM_XFGB_BAN","Moderate");
// cp_functions
// function admin_menu
	define("_AM_XFGB_CONFIG","Nastavení");
	define("_AM_XFGB_GENERALSET","Předvolby");
	define("_AM_XFGB_MSGMANAGE","Správce záznamů");
	define("_AM_XFGB_FORMOPT","Nastavení formuláře");
	define("_AM_XFGB_COUNTRYMANAGE","Správce zemí");
	define("_AM_XFGB_GOINDEX","Přejít na modul");
	//add v2.30
	define("_AM_XFGB_INSTALL_IMG","Vlajky");
	define("_AM_XFGB_UPGRADE","Aktualizace");
	define("_AM_XFGB_MSGIMG","Údržba");
        //add v2.40
	define("_AM_XFGB_BADIPSMANAGE","Moderovat IP adresy");
// Redirect
	define("_AM_XFGB_DBUPDATED","Nastavení jsou uložena.");
	define("_AM_XFGB_VALIDATE","Zpráva schválena.");
	define("_AM_XFGB_ERRORVALID","Lituji, ale nemohu schválit tuto zprávu.");
	define("_AM_XFGB_MSGMOD","Zpráva upravena.");
	define("_AM_XFGB_MSGDELETED","Zpráva smazána.");
	define("_AM_XFGB_ERRORDEL","Lituji, ale nemohu smazat tuto zprávu z databáze.");
	define("_AM_XFGB_COUNTRY_EXIST","Tato země již existuje.");
	define("_AM_XFGB_COUNTRY_UPDATED","Země aktualizována");
	define("_AM_XFGB_COUNTRY_ADDED","Do databáze byla vložena nová země.");
	define("_AM_XFGB_COUNTRYDELETED","Země byla vymazána z databáze.");
	define("_AM_XFGB_MSGERROR","Lituji, ale nemohu aktualizovat tuto zprávu.");
        //add V2.30
	define("_AM_XFGB_MUST_UPDATE","You have installeeacute;  files of version 2.30. <br /> Veuillez faire une mise &agrave; jour du module");
	//add V2.40
	define("_AM_XFGB_BANISHED","IP adresa byla uložena do databáze.");
	define("_AM_XFGB_ERRORBANISHED","Chyba");
// Admin form
	define("_AM_XFGB_NAME","Autor");
	define("_AM_XFGB_EMAIL","Email");
	define("_AM_XFGB_URL","WWW");
	define("_AM_XFGB_TITLE","Nadpis");
	define("_AM_XFGB_MESSAGE","Zpráva");
	define("_AM_XFGB_NOTE","Poznámka administrátora");
	define("_AM_XFGB_COUNTRY","Země");
	define("_AM_XFGB_MALE"," Muž");
	define("_AM_XFGB_FEMALE"," Žena");
	define("_AM_XFGB_GENDER","Pohlaví");
	define("_AM_XFGB_GENDER_UNKNOW"," Nezadáno");
	define("_AM_XFGB_APPROVE","Schváleno");
	define("_AM_XFGB_DATE","Vloženo");
	define("_AM_XFGB_IP","IP addresa");
//V2.20
	define("_AM_XFGB_DELIMG"," Smazat obrázek");
	define("_AM_XFGB_WM","Webmaster");
	define("_AM_XFGB_NBMSG","Velikost zprávy: "); // Messages quantity
//add V2.30
	define("_AM_XFGB_IMG","fotografie");
	define("_AM_XFGB_REPLACEIMG"," <b>nebo</b> nahradit <br>");
	define("_AM_XFGB_IF_OTHER"," if other : ");
// function show
	define("_AM_XFGB_ACTION","Operace");
	define("_AM_XFGB_SAVEANDPUB","Uložit a schválit");
	define("_AM_XFGB_SAVE","Uložit");
	define("_AM_XFGB_PUB","Schválit");
// config
	define("_AM_XFGB_MAILTRUE","Email");
	define("_AM_XFGB_GENDER_OPT","Ptát se na pohlaví?");
	define("_AM_XFGB_COUNTRYDEF","Výchozí země:");
	define("_AM_XFGB_OPT1","Textové pole: ikony url, mail, obrázků...");
	define("_AM_XFGB_OPT2","Textové pole: font, velikost, barva...)");
	define("_AM_XFGB_OPT3","Textové pole: smajlíci");
	// add v2.30
	define("_AM_XFGB_COUNTRY_OPT","Ptát se na zemi?");
	define("_AM_XFGB_SEL_R0","Neptat se");
	define("_AM_XFGB_SEL_R1","Volitelná položka");
	define("_AM_XFGB_SEL_R2","Nutná položka");
	define("_AM_XFGB_URL_OPT","Co dělat s odkazy?");
	define("_AM_XFGB_SEL_A0","Nic");
	define("_AM_XFGB_SEL_A1","Neindexovat");
	define("_AM_XFGB_SEL_A2","Zakázat");
	define("_AM_XFGB_CODE_OPT","Ptát se na bezpečnostní kód?");
	define("_AM_XFGB_WARNING_MSG2","<font color=\"#FF0000\">Pokud zvolíte 'ANO', musíte nainstalovat nějakou <a href=\"".XOOPS_URL."/modules/xfguestbook/admin/flags_install.php\">sadu obrázků</a>.</font>");
	// add v2.40
    define("_AM_XFGB_WEBSITE_OPT","Kdo smí vložit svojí WWW stránku?"); // Field website authorised
	define("_AM_XFGB_SEL_W0","Nikdo");
	define("_AM_XFGB_SEL_W1","Registrovaní");
	define("_AM_XFGB_SEL_W2","Všichni");
// country manage
	define("_AM_XFGB_FLAGIMG","Vlajka");
	define("_AM_XFGB_FLAGCODE","Kód");
	define("_AM_XFGB_FLAGNAME","Název");
	define("_AM_XFGB_ADDCOUNTRY","Vložit zemi");
	define("_AM_XFGB_MODCOUNTRY","Upravit zemi");
	define("_AM_XFGB_DISPCOUNTRY","Smazat zemi");
	define("_AM_XFGB_UPLOADFLAG","Nahrát");
	define("_AM_XFGB_DELETEFLAG","Smazat");
	define("_AM_XFGB_CONFDELCOUNTRY","Myslíte to vážně? Opravdu chcete smazat tuto zemi a její vlaku?");
	define("_AM_XFGB_SUBMITFLAG","Nahrát vlajku");
	define("_AM_XFGB_ADDIMG","Vyberte obrázek");
	define("_AM_XFGB_FILEERROR","Lituji, ale obrázek vlajky se nepodařilo nahrát.");
	define("_MD_XFGB_NOIMGSELECTED","CHYBA: Není vybrán žádný soubor.");
	define("_AM_XFGB_FILEUPLOADED","Obrázek je nahraný na serveru.");
	define("_AM_XFGB_CONFDELFLAG","Myslíte to vážně? Opravdu chcete smazat tuto vlajku?");
	define("_AM_XFGB_FLAGDELETED","Vlajka byla vymazána.");
	define("_AM_XFGB_FLAGDSC","Omezení obrázku: velikost souboru: %s , šířka %s pixelů, výška %s pixelů, pouze formát %s ");
	define("_AM_XFGB_NOFLAG","Země není zadaná");
// upgrade add v2.30
	define("_AM_XFGB_TABLE","Tabulka ");
	define("_AM_XFGB_FIELD","Položka ");
	define("_AM_XFGB_VALUE","Hodnota ");
	define("_AM_XFGB_ADDED","Přidána dne ");
	define("_AM_XFGB_DELETED","Smazána dne ");
	define("_AM_XFGB_NOCHANGE","Bez úprav");
	define("_AM_XFGB_CHANGED","Změněna dne ");
	define("_AM_XFGB_UPGRADE_GO","Aktualizace");
	define("_AM_XFGB_WARNING_UPGRADE","VAROVÁNÍ: Tato operace pozmění obsah některých tabulek.<br />Před spuštěním doporučujeme udělat zálohu databáze.");
	define("_AM_XFGB_ERROR","CHYBA: ");
	define("_AM_XFGB_UPGRADE_SUCCESS","Aktualizace dokončena.");
	define("_AM_XFGB_NO_UPGRADE","Aktualizace není potřebná.");
//flags_install add V2.30
	define("_AM_XFGB_INSTALL_FLAGS","Instalace obrázků (vlajky, znaky...)");
	define("_AM_XFGB_SELECT_PACK","Zvolte balíček, který chcete nainstalovat");
	define("_AM_XFGB_WARNING","<b>&nbsp;Varování</b>");
	define("_AM_XFGB_WARNING_MSG1","<font color=\"#FF0000\">&nbsp;Tato operace <b>smaže</b> obsah databázových tabulek</font> %s <font color=\"#FF0000\"> a nahradí je novým obsahem.</font>");
	define("_AM_XFGB_GOFORMOPT"," Přejít na nastavení formuláře");
	define("_AM_XFGB_GO_UPGRADE"," Pokud chcete obnovit obsah tabulek databáze, klikněte na \"Aktualizace\"."); //To restore the table, go to Upgrade
	define("_AM_XFGB_ERROR_FLAGS","<font color=\"#FF0000\"> Během ukládání dat ze souboru %s.sql došlo k chybě.<br /> Tabulka %s byla vymazána.</font>");
// img_manager add v2.30
	define("_AM_XFGB_IMG_DELETED"," obrázek vymazán");
	define("_AM_XFGB_IMG_FILE","Soubor");
	define("_AM_XFGB_IMG_ORPHEAN","obrázek sirotek");
	define("_AM_XFGB_NO_ORPHEAN","V systému nejsou osiřelé obrázky."); // No orphan images
	define("_AM_XFGB_ORPHEAN_DSC","Na této stránce můžete spravovat obrázky, které nejsou přiřazené k žádné správě (osiřelé obrázky). Také je můžete vymazat."); // This page enables you to post the images which are not attached to a message (orphan).<br />&nbsp;Celŕ peut se produire en cas d'incident lors de l'envoi d'un message.<br />&nbsp;Erase these useless images
// ip manager add V2.40
	define("_AM_XFGB_DISP_BADIPS","Počet automaticky schválených IP adres");
	define("_AM_XFGB_IPS","IP Addresa");
	define("_AM_XFGB_ADD_BADIP","Přidat IP adresu ");
	define("_AM_XFGB_MOD_BADIP","Upravit IP adresu");
	define("_AM_XFGB_BADIP_VALUE","Hodnota");
	define("_AM_XFGB_BADIP_EXIST","Tato IP addresa je již zaznamenána.");
	define("_AM_XFGB_BADIP_ADDED","IP addresa byla uložena do databáze.");
	define("_AM_XFGB_BADIP_UPDATED","IP addresa byla upravena.");
	define("_AM_XFGB_BADIP_DELETED","IP addresa byla vymazána."); //s presuming !
	define("_AM_XFGB_NOBADIP","Vašemu zadání neodpovídá žádná IP adresa."); //Not an IP address !
?>