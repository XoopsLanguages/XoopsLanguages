<?php
// $Id: modinfo.php,v 1.2 2005/08/10 coded by frankblack
// ------------------------------------------------------------------------- //
// German Xoops-Support-Site                  		
// < http://www.myxoops.org >
// ------------------------------------------------------------------------- //
// Vorlage : XoopsChat V1.21
// Author: DHCST Dirk herrmann
// Licence Type : Public GNU/GPL
// ------------------------------------------------------------------------- //

// The name of this module
define("_MI_DHCHAT_NAME","Chat");

// A brief description of this module
define("_MI_DHCHAT_DESC","Chatmodul für ImpressCMS");
define("_MI_DHCHAT_GUESTS","Gast_");

// Names of admin menu items
define("_MI_DHCHATCHATFRAME","Höhe des gesamten Chatframes");
define("_MI_DHCHATCHATFRAMEDESC","Hier wird die Höhe des Frames in Pixeln festgelegt, in dem die Nachrichten angezeigt werden");
define("_MI_DHCHATUSERFRAME","Höhe der Raumliste");
define("_MI_DHCHATUSERFRAMEDESC","Hier wird die Höhe des Frames in Pixeln festgelegt, in dem die Raum angezeigt wird");
define("_MI_DHCHATMSGFRAME","Höhe Eingabeframe");
define("_MI_DHCHATMSGFRAMEDESC","Hier wird die Höhe des Frames in Pixeln festgelegt, in dem die Nachrichten eingegeben werden");
define("_MI_DHCHATSTATISTIKFRAME","Breite Userlistframe");
define("_MI_DHCHATSTATISTIKFRAMEDESC","Hier wird die Breite des Frames in Pixeln festgelegt, in dem die Userliste angezeigt wird");
define("_MI_DHCHAT_INPLENGTH","Länge Eingabefeld Chat");
define("_MI_DHCHAT_INPLENGTHDESC","Hier wird die Länge des Eingabefelds für den Chat festgelegt");
define("_MI_DHCHAT_INPHEIGHT","Zeilen Eingabefeld Chat");
define("_MI_DHCHAT_INPHEIGHTDESC","Hier wird die Anzahl der Zeilen des Eingabefelds für den Chat festgelegt");
define("_MI_DHCHAT_MAXLENGTH","Max. Zeichen Chat");
define("_MI_DHCHAT_MAXLENGTHDESC","Hier wird festgelegt wie lang (in Zeichen) die Chatnachricht sein darf");
define("_MI_DHCHAT_GUESTNAME","Präfix für Namen des Gastes festlegen");
define("_MI_DHCHAT_GUESTNAMEDESC","Hier wird festgelegt, welchen Präfix Gäste im Chat erhalten. Der Username sieht dann z.B. so aus <b>"._GUESTS."12345</b>");
define("_MI_DHCHAT_GUESTLOGIN","genereller Zugang für Besucher/Gäste");
define("_MI_DHCHAT_GUESTLOGINDESC","Hier wird festgelegt, ob Gäste den Chat besuchen dürfen<br /><i>Es wird empfohlen den Chat nur für Mitglieder frei zu geben!</i>");
define("_MI_DHCHAT_GUESTLOGIN_NO","kein Zugang");
define("_MI_DHCHAT_GUESTLOGIN_PREFIX","automatischer Benutzername");
define("_MI_DHCHAT_GUESTLOGIN_NAME","eigenen Benutzernamen angeben");
define("_MI_DHCHAT_MAXMESSAGE","Anzahl der max Nachrichten");
define("_MI_DHCHAT_MAXMESSAGEDESC","Hier wird der Wert festgelegt, wieviel Nachrichten maximal im Chatfenster angezeigt werden sollen (0 für alle)");
define("_MI_DHCHAT_ORDER","Reihenfolge Chatnachrichten");
define("_MI_DHCHAT_ORDERDESC","Hier wird festgelegt, ob die neueste Chatnachricht unten oder oben angezeigt wird");
define("_MI_DHCHATASC","unten");
define("_MI_DHCHATDESC","oben");

define("_MI_DHCHAT_ADMENU1","Chatindex");
define("_MI_DHCHAT_ADMENU2","Räume verwalten");
define("_MI_DHCHAT_ADMENU3","Logdatei");
define("_MI_DHCHAT_ADMENU4","gesperrte User");

define("_MI_DHCHATWHOSCHATTING","Wer ist im Chat?");
define("_MI_DHCHATWHOSCHATTINGDESC","Anzeige wer momentan chattet");

define("_MI_DHCHAT_AUTODEL","Löschung Chatnachrichten");
define("_MI_DHCHAT_AUTODELDESC","Hier wird festgelegt, nach wieviel Stunden die Chatnachrichten automatisch gelöscht werden sollen");

define("_MI_DHCHAT_VIEWENTRYMSG","Nachrichtenanzeige bei Chateintritt");
define("_MI_DHCHAT_VIEWENTRYMSGDESC","Wieviel vom bisherigen Geschehen im Chat angezeigt werden soll, wenn der User den Chat betritt (Angaben in Sekunden / 0 für keine)");
define("_MI_DHCHAT_SYSMSGGO","Ein-/Austrittsmeldungen anzeigen");
define("_MI_DHCHAT_SYSMSGGODESC","Hier können die Meldungen wenn User den Chat betreten oder verlassen ein- bzw. ausgeschaltet werden.");

define("_MI_DHCHAT_IMG_SET","Imageset");
define("_MI_DHCHAT_IMG_SET_DESC","Auswahl des Imagesets");

define("_MI_DHCHAT_EXITCOLOR","Hintergrundfarbe Raumaswahlframe");
define("_MI_DHCHAT_EXITCOLORDESC","Auswahl der Hintergrundfarbe für den Raumauswahlframe (z.B. #FFFFFF für weiss)");
define("_MI_DHCHAT_INPUTCOLOR","Hintergrundfarbe Eingabeframe");
define("_MI_DHCHAT_INPUTCOLORDESC","Auswahl der Hintergrundfarbe für den Eingabeframe (z.B. #FFFFFF für weiss)");
define("_MI_DHCHAT_MSGCOLOR","Hintergrundfarbe Nachrichtenframe");
define("_MI_DHCHAT_MSGCOLORDESC","Auswahl der Hintergrundfarbe für den Nachrichtenframe (z.B. #FFFFFF für weiss)");
define("_MI_DHCHAT_USERCOLOR","Hintergrundfarbe User im Chat");
define("_MI_DHCHAT_USERCOLORDESC","Auswahl der Hintergrundfarbe für den Userlistframe (z.B. #FFFFFF für weiss)");
?>