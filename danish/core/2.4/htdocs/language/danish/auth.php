<?php
// $Id: $
//%%%%%%		File Name auth.php 		%%%%%
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: Anders Kristiansen (anderssk) 
defined('XOOPS_ROOT_PATH') or die('Begrænset adgang');

define('_AUTH_MSG_AUTH_METHOD',"Bruger %s godkendelses metode");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP udvidelse ikke indlæst (Kontrollér din PHP konfiguration i filen php.ini)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"Kan ikke forbinde til server");
define('_AUTH_LDAP_USER_NOT_FOUND',"Bruger %s blev ikke fundet i serveren  (%s) i %s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"Kan ikke læse %s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"Desværre, ingen tilsvarende bruger oplysninger er fundet i XOOPS databasen for forbindelsen:  %s <br>" .
		"Kontrollér at dine brugeres data eller ret den automatiske godkendelse.");
define('_AUTH_LDAP_START_TLS_FAILED','Fejl ved åbning af TLS forbindelse');		
		
?>
