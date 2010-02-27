<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permisos');
define('_MD_A_MYMENU_MYPREFERENCES','Preferencias');

// index.php
define("_AM_TH_DATETIME","Hora");
define("_AM_TH_USER","Usuario");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","AGENTE");
define("_AM_TH_TYPE","Tipo");
define("_AM_TH_DESCRIPTION","Descripción");

define( "_AM_TH_BADIPS" , 'IPs malos<br /><br /><span style="font-weight:normal;">Escriba cada IP en una línea.<br />Todo en blanco significa que todos las IPs son permitidas.</span>' ) ;

define( "_AM_TH_GROUP1IPS" , 'IPs permitidas para Grupo=1<br /><br /><span style="font-weight:normal;">Escriba cada IP en una línea.<br />192.168. significa 192.168.*<br />Todo en blanco significa que todos las IPs son permitidas.</span>' ) ;

define('_AM_LABEL_COMPACTLOG','Log compacto');
define('_AM_BUTTON_COMPACTLOG','¡Compáctalo!');
define('_AM_JS_COMPACTLOGCONFIRM','Los duplicados (IP,Type) serán eliminados');
define('_AM_LABEL_REMOVEALL','Eliminar todas las entradas');
define('_AM_BUTTON_REMOVEALL','¡Eliminar todos!');
define('_AM_JS_REMOVEALLCONFIRM','Todos los logs se eliminan por completo. ¿Realmente está seguro?');
define( "_AM_LABEL_REMOVE" , "Eliminar los registros marcados:" ) ;
define( "_AM_BUTTON_REMOVE" , "¡Eliminado!" ) ;
define( "_AM_JS_REMOVECONFIRM" , "¿Borramos seguro?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "Los archivos de IPs fueron actualizados" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "El archivo para IPs malos no puede ser abierto" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "El archivo para permitir Grupo=1 no puede ser abierto" ) ;
define( "_AM_MSG_REMOVED" , "Registros eliminados" ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Hacer escribible el directorio de las configuraciones: %s" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Administrador de prefijos" ) ;
define( "_AM_MSG_DBUPDATED" , "¡Base de datos actualizada exitosamente!" ) ;
define( "_AM_CONFIRM_DELETE" , "Todos los datos serán eliminados. ¿Es correcto?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Si desea cambiar el prefijo,<br /> edite %s/mainfile.php manualmente.<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","No es seguro");

define("_AM_ADV_TRUSTPATHPUBLIC","Si puede visualizar una imagen -NG- o el enlace devuelve una página normal, su XOOPS_TRUST_PATH no está colocado correctamente. El mejor lugar para XOOPS_TRUST_PATH es fuera del DocumentRoot. Si no puede trasladarlo, tendrá que añadir a .htaccess (DENY FROM ALL) justo debajo de XOOPS_TRUST_PATH como segunda mejor opción.");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Compruebe que los archivos dentro del TRUST_PATH sean privados (deberían ser error 404,403 o 500");
define("_AM_ADV_REGISTERGLOBALS","Esta configuración invita a una variedad de ataques por inyección.<br />Si puede instalar .htaccess, edite o cree...");
define("_AM_ADV_ALLOWURLFOPEN","Esta configuración permite a atacantes ejecutar códigos arbitrarios en servidores remotos.<br />Sólo un administrador puede cambiar esta opción.<br />Si es administrador, edite php.ini o httpd.conf.<br /><b>Ejemplo de httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />De lo contrario, pídaselo a sus administradores.");
define("_AM_ADV_USETRANSSID","Su ID de sesión será mostrada en etiquetas ancla, etc.<br />Para evitar el secuestro de sesión, añada una línea en el archivo .htaccess de la raíz de XOOPS.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Esta configuración invita a 'inyecciones de SQL'.<br />No olvide encender 'Forzar limpieza *' en las preferencias del módulo.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Ir a Admin. de prefijos");
define("_AM_ADV_MAINUNPATCHED","Debe editar mainfile.php tal y como como recomienda el fichero README.");
define("_AM_ADV_DBFACTORYPATCHED","Su base de datos está preparada para DBLayer Trapping anti-SQL-Injection");
define("_AM_ADV_DBFACTORYUNPATCHED","Su databasefactory no está preparada para DBLayer Trapping anti-SQL-Injection. Se requieren algunos parches.");

define("_AM_ADV_SUBTITLECHECK","Revisión de Protector");
define("_AM_ADV_CHECKCONTAMI","Contaminaciones");
define("_AM_ADV_CHECKISOCOM","Comentarios Aislados");



?>