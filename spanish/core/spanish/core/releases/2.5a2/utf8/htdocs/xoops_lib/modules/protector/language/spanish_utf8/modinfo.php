<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Protector Xoops");

// A brief description of this module
define($constpref."_DESC","Este módulo proteje su sitio Xoops de varios tipos de ataques, como DoS , Inyecciones de SQL y contaminación de variables.");

// Menu
define($constpref."_ADMININDEX","Centro de Protección");
define($constpref."_ADVISORY","Asesor de Seguridad");
define($constpref."_PREFIXMANAGER","Administrador de Prefijos");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Permisos') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Deshabilitado temporalmente');
define($constpref.'_GLOBAL_DISBLDSC','Todas las protecciones fueron deshabilitadas temporaralmente.<br />No olvide apagar esta opción luego de resolver el problema.');

define($constpref.'_DEFAULT_LANG','Idioma por defecto');
define($constpref.'_DEFAULT_LANGDSC','Indique cuál será el idioma por defecto para mostrar mensajes antes de procesar common.php');

define($constpref.'_RELIABLE_IPS','IPs confiables');
define($constpref.'_RELIABLE_IPSDSC','Fijar IPs confiables separadas con | . ^ iguala el inicio de la serie; $ iguala el final de la serie.');

define($constpref.'_LOG_LEVEL','Nivel de registro');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Bloquear IP durante un tiempo (seg)');

define($constpref.'_LOGLEVEL0','Ninguno');
define($constpref.'_LOGLEVEL15','Callado');
define($constpref.'_LOGLEVEL63','callado');
define($constpref.'_LOGLEVEL255','Completo');

define($constpref.'_HIJACK_TOPBIT','Bits de IP protegidos para la sesión');
define($constpref.'_HIJACK_TOPBITDSC','Contra Secuestro de Sesión:<br />Por defecto 32(bit). (Todos los bits son protegidos)<br />Cuando su IP no es estable, fije el rango de IP por número de bits.<br />Por ejemplo, si su IP Puede moverse en el rango de 192.168.0.0 - 192.168.0.255, fije 24 (bits).');
define($constpref.'_HIJACK_DENYGP','Grupos cuya IP no puede modificarse durante la sesión.');
define($constpref.'_HIJACK_DENYGPDSC','Contra Secuestro de Sesión:<br />Seleccione grupos cuyo IP no puede modificarse durante la sesión.<br />(Recomiendo encender Administradores.)');
define($constpref.'_SAN_NULLBYTE','Limpiar bytes nulos');
define($constpref.'_SAN_NULLBYTEDSC','El caracter de terminación "\\0" con frecuencia es empleado en ataques maliciosos.<br />Los bytes nulos serán cambiados por un espacio.<br />(Altamente recomendado: Encender)');
define($constpref.'_DIE_NULLBYTE','Salir si se detectan bytes nulos');
define($constpref.'_DIE_NULLBYTEDSC','El caracter de terminación "\\0" con frecuencia es empleado en ataques maliciosos.<br />(Altamente recomendado: Encender)');
define($constpref.'_DIE_BADEXT','Salir si se suben archivos malignos');
define($constpref.'_DIE_BADEXTDSC','Si alguien trata de subir archivos con extensiones prohibidas como .php , este módulo lo saca de su sitio XOOPS.<br />Si con frecuencia agrega archivos php en módulos como B-Wiki o PukiWikiMod, apague esta opción.');
define($constpref.'_CONTAMI_ACTION','Acción al detectar una contaminación.');
define($constpref.'_CONTAMI_ACTIONDS','Seleccione la acción frente a una contaminación de variables globales del sistema en su sitio XOOPS.<br />(Opción recomendada: pantalla en blanco)');
define($constpref.'_ISOCOM_ACTION','Acción al detectar un comentario aislado');
define($constpref.'_ISOCOM_ACTIONDSC','Contra Inyección de SQL:<br />Seleccione la acción cuando se detecte una "/*" aislada.<br />"Limpieza" significa agregar otra "*/" al final.<br />(Opción recomendada: Limpieza)');
define($constpref.'_UNION_ACTION','Acción al detectar una UNION');
define($constpref.'_UNION_ACTIONDSC','Contra Inyección de SQL:<br />Seleccione la acción al detectar alguna sintaxis como UNION de SQL.<br />"Limpieza" significa cambiar "union" a "uni-on".<br />(Opción recomendada: Limpieza)');
define($constpref.'_ID_INTVAL','Forzar intervalo a variables como id');
define($constpref.'_ID_INTVALDSC','Todas las peticiones llamadas "*id" serán tratadas como número entero.<br />Esta opción le protege contra algunos ataques XSS e Inyecciones de SQL.<br />Aunque recomiendo activar esta opción, puede causar problemas con algunos módulos.');
define($constpref.'_FILE_DOTDOT','Protección contra Travesías de Directorio');
define($constpref.'_FILE_DOTDOTDSC','Elimina ".." de todas las peticiones que parezcan Travesía de Directorio.');

define($constpref.'_BF_COUNT','Contra Fuerza Bruta');
define($constpref.'_BF_COUNTDSC','Fija la cantidad de veces que un anónimo intenta darse de alta en 10 minutos. Si alguien no puede darse de alta en esta cantidad de ocasiones, su IP será bloqueada.');

define($constpref.'_BWLIMIT_COUNT','Limitación de ancho de banda');
define($constpref.'_BWLIMIT_COUNTDSC','Indique el acceso máximo a mainfile.php durante la vista. Este valor debería ser 0 para entornos normales con suficiente ancho de banda en CPU. El número inferior a 10 será ignorado.');

define($constpref.'_DOS_SKIPMODS','Módulos exentos de revisión DoS/Crawler');
define($constpref.'_DOS_SKIPMODSDSC','Fija los dirnames de los módulos separados con |. Esta opción es útil con módulos de chat, etc.');

define($constpref.'_DOS_EXPIRE','Tiempo de vigilancia para cargas frecuentes (segundos)');
define($constpref.'_DOS_EXPIREDSC','Este valor especifica el tiempo de vigilancia para cargas frecuentes (Ataque F5) y crawlers de subidas frecuentes.');

define($constpref.'_DOS_F5COUNT','Conteo límite para Ataque F5');
define($constpref.'_DOS_F5COUNTDSC','Prevención de ataques DoS.<br />Este valor especifica el conteo de recargas para ser considerado como un ataque malicioso.');
define($constpref.'_DOS_F5ACTION','Acción contra Ataque F5');

define($constpref.'_DOS_CRCOUNT','Conteo límite para Crawlers');
define($constpref.'_DOS_CRCOUNTDSC','Prevención contra crawlers de carga frecuente.<br />Este valor especifica el conteo de accesos para ser considerados como un crawler malicioso.');
define($constpref.'_DOS_CRACTION','Acción contra Crawlers de carga frecuente');

define($constpref.'_DOS_CRSAFE','Agente-Usuario bienvenido');
define($constpref.'_DOS_CRSAFEDSC','Un patrón de perl regex para Agente-Usuario.<br />Si concuerda, el crawler nunca es considerado como de carga frecuente.<br />Por ejemplo: /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Ninguna (sólo registro)');
define($constpref.'_OPT_SAN','Limpieza');
define($constpref.'_OPT_EXIT','Pantalla en Blanco');
define($constpref.'_OPT_BIP','Bloquear IP');
define($constpref.'_OPT_BIPTIME0','Bloquear la IP (moratorium)');

define($constpref.'_DOSOPT_NONE','Ninguna (sólo registro)');
define($constpref.'_DOSOPT_SLEEP','Dormir');
define($constpref.'_DOSOPT_EXIT','Pantalla en Blanco');
define($constpref.'_DOSOPT_BIP','Bloquear IP');
define($constpref.'_DOSOPT_BIPTIME0','Bloquear la IP (moratorium)');
define($constpref.'_DOSOPT_HTA','NEGAR por .htaccess (experimental)');

define($constpref.'_BIP_EXCEPT','Grupos nunca registrados como IP Malicioso');
define($constpref.'_BIP_EXCEPTDSC','Un usuario que pertenece al grupo especificado aquí jamás será bloqueado.<br />(Recomiendo activar al Administrador.)');

define($constpref.'_DISABLES','Deshabilita características peligrosas de XOOPS');

define($constpref.'_DBLAYERTRAP','Activar DB Layer trapping anti-SQL-Injection');
define($constpref.'_DBLAYERTRAPDSC','Casi todos los ataques de inyección SQL serán detenidos gracias a esta característica. Recuerde que necesita soporte para databasefactory. Puede comprobarlo en la página de Security Advisory. Esta opción debe estar activada. Nunca la desactive por su seguridad.');
define($constpref.'_DBTRAPWOSRV','No comprobar _SERVER con anti-SQL-Injection');
define($constpref.'_DBTRAPWOSRVDSC','Algunos servidores activan esta característica. Ello puede causar detecciones errores de ataques de inyección SQL. Si sufre dichos errores, active esta opción. Tenga en cuentea que esta opción debilita la seguridad contra estos ataques.');
define($constpref.'_BIGUMBRELLA','Habilitar anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Esto protege de casi cualquier ataque vía vulnerabilidades XSS. Pero no al 100%');

define($constpref.'_SPAMURI4U','Contra SPAM: URLs para usuarios normales');
define($constpref.'_SPAMURI4UDSC','Si esta cantidad de URLs es hallada en datos ENVIADOS por usuarios diferentes al Administrador, el ENVÍO es considerado como SPAM. Cero (0) significa deshabilitar esta característica.');
define($constpref.'_SPAMURI4G','Contra SPAM: URLs para anónimos');
define($constpref.'_SPAMURI4GDSC','Si esta cantidad de URLs es hallada en datos ENVIADOS por anónimos, el ENVÍO es considerado como SPAM. Cero (0) significa deshabilitar esta característica.');

}

?>