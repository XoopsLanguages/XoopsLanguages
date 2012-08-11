<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Notification Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: notification.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: ba
// _CHARSET : ISO-8859-2
// Translator: saba
// RMV-NOTIFY
// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Opcije obavje&scaron;tavanja');
define('_NOT_UPDATENOW','Sada aktuliziraj');
define('_NOT_UPDATEOPTIONS','Opciju obavje&scaron;tavanja aktuliziraj');
define('_NOT_CLEAR','Vrati kako je bilo');
define('_NOT_CHECKALL','Sve obilje&#382;i');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategorija');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Naziv');
define('_NOT_EVENT','Doga&#273;aj');
define('_NOT_EVENTS','Doga&#273;aji');
define('_NOT_ACTIVENOTIFICATIONS','Aktivne obavijesti');
define('_NOT_NAMENOTAVAILABLE','Naziv nije dostupan');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Naziv objekta nije dostupan');
define('_NOT_ITEMTYPENOTAVAILABLE','Typ objekta nije dostupan');
define('_NOT_ITEMURLNOTAVAILABLE','Objekt-URL nije dostupan');
define('_NOT_DELETINGNOTIFICATIONS','Obavijesti izbri&scaron;i');
define('_NOT_DELETESUCCESS','Obavijest(i) je(su) izbrisana(e).');
define('_NOT_UPDATEOK','Opciju obavje&scaron;tavanja aktuliziraj');
define('_NOT_NOTIFICATIONMETHODIS','Metoda obavje&scaron;tavanja je');
define('_NOT_EMAIL','E-Mail');
define('_NOT_PM','Privatna poruka');
define('_NOT_DISABLE','Isklju&#269;i');
define('_NOT_CHANGE','Promjeni');
define('_NOT_NOACCESS','Nema&scaron; potrebno odobrenje da pristupi&scaron; ovom djelu stranice.');
// Text for module config options
define('_NOT_ENABLE','Aktiviraj');
define('_NOT_NOTIFICATION','Obavijest');
define('_NOT_CONFIG_ENABLED','Obavijest aktiviraj');
define('_NOT_CONFIG_ENABLEDDSC','Ovaj Modul omogu&#263;ava &#269;lanovima, da razne doga&#273;aje prate i da budu obavije&scaron;teni. Izaberi "Da" i ovu funkciju aktiviraj.');
define('_NOT_CONFIG_EVENTS','Specijalne doga&#273;aje aktiviraj');
define('_NOT_CONFIG_EVENTSDSC','Izaberi, doga&#273;aje &#269;lanovi mogu izabrati za svoju obavijest.');
define('_NOT_CONFIG_ENABLE','Obavijest aktiviraj');
define('_NOT_CONFIG_ENABLEDSC','Ovaj Modul omogu&#263;ava &#269;lanovima, da budu o raznim doga&#273;ajima informisani. Izaberi, dali &#269;lanovi mogu opciju obavijesti u bloku  (Blok-Stil), unutar Modula (Inline-Stil) izabrati, ili obje vrste im treba prikazati. Za Blok-Stil-Obavijesti mora se blok obavijesti za ovaj Modul aktivrati.');
define('_NOT_CONFIG_DISABLE','Obavijest isklju&#269;i');
define('_NOT_CONFIG_ENABLEBLOCK','Samo Blok-Stil aktiviraj');
define('_NOT_CONFIG_ENABLEINLINE','Samo Inline-Stil aktiviraj');
define('_NOT_CONFIG_ENABLEBOTH','Obavijesti aktiviraj (Obje vrste Stila)');
// For notification about comment events
define('_NOT_COMMENT_NOTIFY','Komentar dodat');
define('_NOT_COMMENT_NOTIFYCAP','Obavijesti me, ako novi Komentar bude upisane.');
define('_NOT_COMMENT_NOTIFYDSC','Dobi&#263;e&scaron; obavijest, ako ovde neko doda svoj komentar (ili ako webmaster odobri od nekoga) .');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Komentar na {X_ITEM_TYPE} je dat');
define('_NOT_COMMENTSUBMIT_NOTIFY','Komentar poslat');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Obavijesti me, ako ovde neko dodao svoj komentar (koji je na &#269;ekanju za odobrenje).');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Dobi&#263;e&scaron; obavijest, ako neko komentar doda (koji je na &#269;ekanju za odobrenje).');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Komentar na {X_ITEM_TYPE} je poslat');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define('_NOT_BOOKMARK_NOTIFY','Prati Obavijesti');
define('_NOT_BOOKMARK_NOTIFYCAP','Prati Obavijesti uklju&#269;i (bez obavijesti).');
define('_NOT_BOOKMARK_NOTIFYDSC','Prati Obavijesti bez dobijanja obavijesti.');
// For user profile
// FIXME: These should be reworded a little...
define('_NOT_NOTIFYMETHOD','Metoda obavje&scaron;tavanja: Ako npr. Forum treba pratiti, kako &#382;eli&scaron; obavijest aktivirati?');
define('_NOT_METHOD_EMAIL','E-Mail (E-Mail-Adresa u Profilu koja je upisana)');
define('_NOT_METHOD_PM','Privatnom porukom');
define('_NOT_METHOD_DISABLE','Isklju&#269;i za sada');
define('_NOT_NOTIFYMODE','Metode obavje&scaron;tavanja ovako je pode&scaron;eno');
define('_NOT_MODE_SENDALWAYS','Obavijesti me o svim obilje&#382;enim aktivnostima');
define('_NOT_MODE_SENDONCE','Samo me jednom obavjesti');
define('_NOT_MODE_SENDONCEPERLOGIN','Jednom me obavjesti, onda posle slede&#263;eg mog Ulogovanja ne obavje&scaron;tavaj me vi&scaron;e');
define('_NOT_NOTHINGTODELETE','Nema ni&scaron;ta za brisanje!');

?>