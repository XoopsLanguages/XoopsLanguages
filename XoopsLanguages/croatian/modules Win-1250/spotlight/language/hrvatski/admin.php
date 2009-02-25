<?php
/**
 * $Id: admin.php, v 2.0 12 March 2004 catzwolf Exp $
 * Module: Spotlight
 * Version: v2.0
 * Release Date: 12 March 2004
 * Author: Catzwolf
 * Orginal Author: Herko (me at herkocoomans dot net) and    
 * 				   Dawilby (willemsen1 at chello dot nl)
 * Licence: GNU
 */

define('_AM_KUHT_NAME_MINI','Mini obavjesti');
define('_AM_KUHT_MINI','Mini obavjest ');
define('_AM_KUHT_MINI_SHOW','Prika�i ovaj �lanak');
define('_AM_KUHT_MINI_TEXT','Teaser teksta (Ostavite prazno da bi omogu�ili automatsko obnavljanje)');
define('_AM_KUHT_NAME_XML','Traka s novostima');
define('_AM_KUHT_XML_NEW_ITEM','Stvori traku s novostima');
define('_AM_KUHT_XML_EDIT_ITEM','Uredi traku s novostima id %u');
define('_AM_KUHT_XML_URL','URL');
define('_AM_KUHT_XML_URL_DESC','{X_SITEURL} �e ispisati '.XOOPS_URL.'/');
define('_AM_KUHT_XML_TITLE','Naslov');
define('_AM_KUHT_XML_TEXT','Teaser tekst');
define('_AM_KUHT_XML_ID','ID');
define('_AM_KUHT_XML_ORDER','Redosljed prikazivanja');
define('_AM_KUHT_XML_MANAGE','Obri�i / Promjeni redosljed');


define('_AM_KUHT_NAME_CONF','Konfiguracija obavjesti');
define('_AM_KUHT_NAME_NEWS','Konfiguracija bloka News');
define('_AM_KUHT_NAME_WFSS','Konfiguracija bloka WF-Section');
define('_AM_KUHT_NAME_UPLOAD','Upload slike');

define('_AM_KUHT_NAME_NEWSBLOCK','Konfiguriraj News Blok');
define('_AM_KUHT_NAME_WFSSBLOCK','Konfiguriraj WF-Section Blok');
define('_AM_KUHT_NAME_CONFIG','Konfiguracija obavjesti');

define('_AM_KUHT_NAME_INTROTEXT','Napi�ite uvodni tekst');
define('_AM_ADMINCONFIGMENU','Neobavezno, mo�ete napisati neka obja�njenja za nekoliko djelova Obavjesti su�elja.');

define('_AM_WRITE_INTRO1','Ovo je tekst koji se nalazi na po�etku bloka.');
define('_AM_WRITE_INTRO2','Ako imate drugih novosti, ovaj tekst �e biti uvod.');
define('_AM_WRITE_INTRO3','Ovo je podno�je, prije same linije sa statistikom, ako je uklju�ena');

define('_AM_SUBMIT','Prijavi');
define('_AM_RESET','Poni�ti');

define('_AM_TITLE','Naslov');
define('_AM_STORYID','ID');
define('_AM_CATEGORYT','Kategorija');
define('_AM_STATUS','Status');
define('_AM_CHANGED','Promjenjeno');
define('_AM_WEIGHT', 'Mjesto');

define('_AM_TOPIC','Kategorija');
define('_AM_POSTER','Napisao');
define('_AM_PUBLISHED','Objavljeno');
define('_AM_ACTION','Akcija');
define('_AM_EDIT','Uredi');
define('_AM_DELETE','Obri�i');
define('_AM_LAST10NEWARTS','Zadnjih 10 News �lanaka');
define('_AM_LAST10WFSARTS','Zadnjih 10 WF-Section �lanaka');
define('_AM_MESSAGE','Baza podataka je uspje�no obnovljena');
define('_AM_NOTFOUND','Nema �lanaka!');
define('_AM_INTROTEXT','Konfiguracija uvodnog teksta');

define('_AM_SELECT_NEWS','News Konfiguracija');
define('_AM_SELECT_SPOTLIGHT_NEWS','Izaberite News pri�u za objavljivanje:');
define('_AM_SELECT_AUTO_NEWS','Objavi posljednje News pri�e?');
define('_AM_SELECT_SPOTLIGHT','Izaberite �lanak za objavljivanje');
define('_AM_SELECT_NEWS_AUTO_IMG','Prika�i sliku kategorije News pri�e?');
define('_AM_SELECT_IMG','Izaberite News sliku objavljivanja:');
define('_AM_SELECT_UPLOADCHANLOGO','Upload slike za objavljivanje:');
define('_AM_IMAGE_ALIGN','(Poravnavanje slike)');
define('_AM_FILEEXISTS','datoteka postoji na serveru, molim izaberite drugu!');

define('_AM_SELECT_WFS','WF-Section Konfiguracija');
define('_AM_SELECT_SPOTLIGHT_WFS','Izaberite WF-Section �lanak za objavljivanje:');
define('_AM_SELECT_AUTO_WFS','Objavi zadnje WF-Section �lanke?');
define('_AM_SELECT_IMG_WFS','Izaberite WF-Section sliku objavljivanja:');
define('_AM_SELECT_WFS_AUTO_IMG','Prika�i sliku kategorije WF-Section �lanka?');

define("_AM_UPLOAD", "Upload postavki");
define("_AM_SERVERSTATUS", "Server Status");
define("_AM_SAFEMODE", "Sigurni mod: ");
define("_AM_UPLOADS", "Server Upload: ");
define("_AM_OFF", "Isklju�eno");
define("_AM_ON", "Uklju�eno");
define("_AM_SAFEMODEPROBLEMS", " (Ovo bi moglo stvarati probleme) ");
define("_AM_UPLOADPATH", "Upload put:");
define("_AM_ANDTHEMAX", "Max Upload veli�ina: ");
define("_AM_DELETEFILE", "WARNING<br/>Obri�i ovu datoteku?");
define("_AM_ERRORDELETEFILE", "Gre�ka pri brisanju datoteke!");;
define("_AM_UPLOADLINKIMAGE", "Datoteka za upload");
define("_AM_UPLOADIMAGE", "Upload slike");
define("_AM_BUTTON", "Slika za objavljivanje:");
define("_AM_CHANIMAGEEXIST", "Datoteka postoji na serveru, molim izaberite drugu!");
define("_AM_CHANNOIMAGEEXIST", "Nema izabrane slike");
define("_AM_FILEDELETED", "Slika je obrisana!");
define("_AM_DELETEIMAGE", "Obri�i sliku");
define("_AM_ERRORMESSAGE", "Gre�ka pri obnavljanju baze podataka.");
define("_AM_NOTERESIZE", "Slici je promjenjena veli�ina");
define("_AM_DIRSELECT", "Izaberite upload mapu:");
define("_AM_NEWSIMAGES", "News mapa slika");
define("_AM_WFSECTIONIMAGES", "WF-Section mapa slika");
define("_AM_UPLOADCHANLOGO", "Logo za ovu stranicu");
define("_AM_FILEUPLOADED", "Datoteka je upload-ana");

define("_AM_SPOT_LEFT", "Lijevo");
define("_AM_SPOT_CENTER", "Centar");
define("_AM_SPOT_RIGHT", "Desno");
define("_AM_SPOT_IMAGEALIGN", "Poravnavanje slike objave:");



?>
