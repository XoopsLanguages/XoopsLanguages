<?php
// $Id: $
//%%%%%%		File Name auth.php 		%%%%%
// german v 1.4 2008/01/08 sato-san / Rene Sato / www.XOOPS-magazine.com $
// Code : UTF-8
// Letzte Bearbeitung 18.09.2008 / Feichtl
define('_AUTH_MSG_AUTH_METHOD',"mit %s Authentifizierungsmethode");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP ist nicht geladen (Es muss die Datei php.ini auf die Konfiguration geprüft werden)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"Es kann keine Verbindung zum Server aufgebaut werden");
define('_AUTH_LDAP_USER_NOT_FOUND',"Mitglied %s wurde am Directory Server (%s) in %s nicht gefunden");
define('_AUTH_LDAP_CANT_READ_ENTRY',"Eintrag %s nicht lesbar");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"Leider wurde keine passende Benutzerinformation in der Datenbank für diese Verbindung gefunden: %s <br>" .
		"Bitte kontrolieren Sie Ihre Benutzerdaten oder benutzen die automatische Hinzufügung");
define('_AUTH_LDAP_START_TLS_FAILED',"Es konnte keine TLS Verbindung geöffnet werden");
?>