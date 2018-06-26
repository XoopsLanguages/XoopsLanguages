<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permisos');
define('_MD_A_MYMENU_MYPREFERENCES','Preferencias');
// index.php
define('_AM_TH_DATETIME', 'Hora');
define('_AM_TH_USER', 'Usuario');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENTE');
define('_AM_TH_TYPE', 'Tipo');
define('_AM_TH_DESCRIPTION', 'Descripción');
define('_AM_TH_BADIPS','IPs Incorrectas <br><br><span style="font-weight:normal;">Escribe cada IP en una linea. <br> 192.169. significa 192.169.* vacía significa que todas las IPs están permitidas</span>');
define('_AM_TH_GROUP1IPS','IPs permitidos para Grupo=1<br><br><span style="font-weight:normal;">Escribe cada IP en una linea.<br>192.168. significa 192.168.*<br>vacía significa que todos los IPs están permitidos</span>');
define('_AM_LABEL_COMPACTLOG', 'Compactar Registro');
define('_AM_BUTTON_COMPACTLOG', 'Compactarlo!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Se eliminarán los registros duplicados (IP, Tipo)');
define('_AM_LABEL_REMOVEALL', 'Eliminar todos los registros');
define('_AM_BUTTON_REMOVEALL', '¡Eliminar todo!');
define('_AM_JS_REMOVEALLCONFIRM', 'Todos los registros se eliminarán absolutamente. ¿Estás realmente seguro?');
define('_AM_LABEL_REMOVE', 'Eliminar los registros marcados:');
define('_AM_BUTTON_REMOVE', '¡Eliminar!');
define('_AM_JS_REMOVECONFIRM', '¿Eliminar?');
define('_AM_MSG_IPFILESUPDATED', 'Los archivos para las IPs han sido actualizados');
define('_AM_MSG_BADIPSCANTOPEN', 'No se puede abrir el archivo de direcciones IP incorrectas');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'No se puede abrir el archivo para permitir que grupo = 1');
define('_AM_MSG_REMOVED', 'Se eliminan los registros');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Convierta la configuración del directorio escribible: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Administrador de Prefijo');
define('_AM_MSG_DBUPDATED', 'Base de datos Actualizada ¡Satisfactoriamente!');
define('_AM_CONFIRM_DELETE', 'Todos los datos serán eliminados. ¿Esta de acuerdo?');
define('_AM_TXT_HOWTOCHANGEDB',"Si tu desea cambiar el prefijo,<br> edite %s/mainfile.php manualmente.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'No seguro');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Si puede ver una imagen -NG- o el enlace devuelve una página normal, su XOOPS_TRUST_PATH no está colocado correctamente. El mejor lugar para XOOPS_TRUST_PATH es fuera de la Raíz del Sitio. Si no puedes hacer eso, debes poner .htaccess (DENY FROM ALL) justo debajo de XOOPS_TRUST_PATH como la segunda mejor manera.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Compruebe que los archivos PHP dentro de TRUST_PATH estén configurados como de sólo lectura (debe ser un error de 404,403 o 500)');
define('_AM_ADV_REGISTERGLOBALS',"Si está activado, este ajuste invita a una variedad de ataques de inyección. Si puedes, establece 'register_globals off' en php.ini, o si no es posible, crea o edita .htaccess en tu directorio XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"SI 'ON', esta configurado permite a los atacantes ejecutar arbitrariamente aplicaciones en servidores remotos.<br>Solamente el administrado puede cambiar esta opción.<br>Si eres un administrador, edita php.ini o httpd.conf.<br><b>Un ejemplo de httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>En todo caso, comunicate con tu administrador.");
define('_AM_ADV_USETRANSSID',"Si 'ON', tu Session ID se mostrará en etiquetas etc.<br>Para prevenir captura de sesiones (hi-jacking), agrega una linea dentro de .htaccess en XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Esta configuración invita a 'Inyecciones SQL'.<br>No olvide activar 'Forzar desinfección *' en las preferencias de este módulo.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Ir al gestor de prefijos');
define('_AM_ADV_MAINUNPATCHED', 'Debe editar su mainfile.php como se escribe en el README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Su base de datos está lista para DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Su base de datos no está preparada para DBLayer Trapping anti-SQL-Injection. Se requieren algunos parches.');
define('_AM_ADV_SUBTITLECHECK', 'Comprobar si Protector funciona bien');
define('_AM_ADV_CHECKCONTAMI', 'Contaminación');
define('_AM_ADV_CHECKISOCOM', 'Comentarios Aislados');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'y coloque en ella la siguiente línea:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefijo');
define('_AM_PROTECTOR_TABLES', 'Tablas');
define('_AM_PROTECTOR_UPDATED', 'Actualizado');
define('_AM_PROTECTOR_COPY', 'Copiar');
define('_AM_PROTECTOR_ACTIONS', 'Acciones');
