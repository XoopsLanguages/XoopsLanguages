<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    es
 * _CHARSET     UTF-8
 * @version     $Id: users.php 4091 2010-01-05 17:02:11Z forxoops $
 */

// Navigation
define('_AM_SYSTEM_USERS_NAV_MANAGER','Admin. usuarios');
define('_AM_SYSTEM_USERS_NAV_MAIN','Admin. usuarios');
define('_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH','B�squeda avanzada');
define('_AM_SYSTEM_USERS_NAV_ADD_USER','a�adir usuario');
define('_AM_SYSTEM_USERS_NAV_EDIT_USER','Modificar usuario');
define('_AM_SYSTEM_USERS_NAV_DELETE_USER','Eliminar usuario');

// Tips
define('_AM_SYSTEM_USERS_NAV_TIPS','
<ul>
<li>Manage Xoops users</li>
</ul>');

// Main
define("_AM_SYSTEM_USERS_USER","Usuario");
define("_AM_SYSTEM_USERS_ADMIN","Admin");
define("_AM_SYSTEM_USERS_UID","Uid");
define("_AM_SYSTEM_USERS_STATUS","Estado");
define("_AM_SYSTEM_USERS_NAME","Nombre");
define("_AM_SYSTEM_USERS_UNAME","Apellido");
define("_AM_SYSTEM_USERS_EMAIL","Email");
define("_AM_SYSTEM_USERS_EDIT_GROUPS","Modficar grupos");
define("_AM_SYSTEM_USERS_REG_DATE","Fecha registro");
define("_AM_SYSTEM_USERS_LAST_LOGIN","�ltima visita");
define("_AM_SYSTEM_USERS_POSTS","Comentarios/Posts");
define("_AM_SYSTEM_USERS_LEVEL","Nivel");
define("_AM_SYSTEM_USERS_ACTION","Accion");
define("_AM_SYSTEM_USERS_FINDUS","Buscar usuarios");
define("_AM_SYSTEM_USERS_AVATAR","Avatar");
define("_AM_SYSTEM_USERS_REALNAME","Nombre");
define("_AM_SYSTEM_USERS_REGDATE","Fecha registro");
define("_AM_SYSTEM_USERS_PM","MP");
define("_AM_SYSTEM_USERS_URL","URL");
define("_AM_SYSTEM_USERS_PREVIOUS","Anterior");
define("_AM_SYSTEM_USERS_NEXT","Siguiente");
define("_AM_SYSTEM_USERS_USERSFOUND","%s ususario(s) encontrado(s)");
define("_AM_SYSTEM_USERS_ACTUS", "Usuarios activos: %s");
define("_AM_SYSTEM_USERS_INACTUS", "Usuarios inactivos: %s");
define("_AM_SYSTEM_USERS_NOFOUND","No hay coincidencias");
define("_AM_SYSTEM_USERS_ICQ","ICQ");
define("_AM_SYSTEM_USERS_AIM","AIM");
define("_AM_SYSTEM_USERS_YIM","YIM");
define("_AM_SYSTEM_USERS_MSNM","MSNM");
define("_AM_SYSTEM_USERS_TIMEZONE","Zona horaria");
define("_AM_SYSTEM_USERS_SHOWSIG","Agregar siempre mi firma");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","Tipo de presentaci�n para los comentarios");
define("_AM_SYSTEM_USERS_CSORTORDER","Orden de los comentarios");
define("_AM_SYSTEM_USERS_EXTRAINFO","Info extra");
define("_AM_SYSTEM_USERS_LOCATION","Pa�s/Localidad");
define("_AM_SYSTEM_USERS_OCCUPATION","Ocupaci�n");
define("_AM_SYSTEM_USERS_INTEREST","Intereses");
define("_AM_SYSTEM_USERS_URLC","URL contiene");
define("_AM_SYSTEM_USERS_LASTLOGMORE","�ltima visita hace m�s de <span style='color:#ff0000;'>X</span> d�as");
define("_AM_SYSTEM_USERS_LASTLOGLESS","�ltima visita hace menos de <span style='color:#ff0000;'>X</span> d�as");
define("_AM_SYSTEM_USERS_REGMORE","Fecha de registro superior a <span style='color:#ff0000;'>X</span> d�as");
define("_AM_SYSTEM_USERS_REGLESS","Fecha de registro inferior a <span style='color:#ff0000;'>X</span> d�as");
define("_AM_SYSTEM_USERS_POSTSMORE","Su n�mero de posts es superior a <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_POSTSLESS","Su n�mero de posts es inferior a <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_SORT","Ordenar por");
define("_AM_SYSTEM_USERS_ORDER","Orden");
define("_AM_SYSTEM_USERS_LASTLOGIN","�ltima visita");
define("_AM_SYSTEM_USERS_ASC","Orden ascendente");
define("_AM_SYSTEM_USERS_DESC","Orden descendente");
define("_AM_SYSTEM_USERS_LIMIT","N�mero de usuarios por p�gina");
define("_AM_SYSTEM_USERS_RESULTS", "Resultados de la b�squeda");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "Tipo de usuarios a mostrar");
define("_AM_SYSTEM_USERS_MAILOK","S�lo los usuarios que aceptan correo");
define("_AM_SYSTEM_USERS_MAILNG","S�lo los usuarios que no aceptan correo");
define("_AM_SYSTEM_USERS_SHOWTYPE", "Tipo de usuarios a mostrar");
define("_AM_SYSTEM_USERS_ACTIVE","S�lo usuarios activos");
define("_AM_SYSTEM_USERS_INACTIVE","S�lo usuarios inactivos");
define("_AM_SYSTEM_USERS_BOTH", "Todos");
define("_AM_SYSTEM_USERS_SENDMAIL", "Enviar correo");
define("_AM_SYSTEM_USERS_ADD2GROUP", "A�adir usuarios al grupo %s");
define("_AM_SYSTEM_USERS_GROUPS", "Grupos");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "A�adir grupos");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "Eliminar grupo");
define("_AM_SYSTEM_USERS_AYSYWTDU","�Realmente desea eliminar al usuario %s?");
define("_AM_SYSTEM_USERS_BYTHIS","Al hacer esto toda la informaci�n relativa al usuario ser� eliminada permanentemente.");
define("_AM_SYSTEM_USERS_YES","S�");
define("_AM_SYSTEM_USERS_NO","No");
define("_AM_SYSTEM_USERS_YMCACF","Debe cumplimentar todos los campos requeridos");
define("_AM_SYSTEM_USERS_CNRNU","No se pudo registrar al usuario.");
define("_AM_SYSTEM_USERS_EDEUSER","Modificar/Eliminar Usuarios");
define("_AM_SYSTEM_USERS_NICKNAME","Nick");
define("_AM_SYSTEM_USERS_MODIFYUSER","Modificar usuario");
define("_AM_SYSTEM_USERS_DELUSER","Eliminar usuario");
define("_AM_SYSTEM_USERS_GO","Adelante");
define("_AM_SYSTEM_USERS_ADDUSER","A�adir usaurio");
define("_AM_SYSTEM_USERS_OPTION","Opci�n");
define("_AM_SYSTEM_USERS_THEME","Dise�o");
define("_AM_SYSTEM_USERS_AOUTVTEAD","Permitir a los dem�s usuarios ver esta direcci�n de correo");
define("_AM_SYSTEM_USERS_RANK","Rango");
define("_AM_SYSTEM_USERS_NSRA","Sin rango especial asignado");
define("_AM_SYSTEM_USERS_NSRID","No hay rangos especiales en la base de datos");
define("_AM_SYSTEM_USERS_ACCESSLEV","Nivel de acceso");
define("_AM_SYSTEM_USERS_SIGNATURE","Firma");
define("_AM_SYSTEM_USERS_PASSWORD","Contrase�a");
define("_AM_SYSTEM_USERS_INDICATECOF","* indica que el campo es obligatorio. No puede quedar vac�o.");
define("_AM_SYSTEM_USERS_NOTACTIVE","Este usuario no ha sido activado. �Desea activarlo usted mismo?");
define("_AM_SYSTEM_USERS_UPDATEUSER","Actualizar usuario");
define("_AM_SYSTEM_USERS_USERINFO","Informaci�n del usuario");
define("_AM_SYSTEM_USERS_USERID","ID del usuario");
define("_AM_SYSTEM_USERS_RETYPEPD","Confirme la contrase�a");
define("_AM_SYSTEM_USERS_CHANGEONLY","(S�lo para cambios)");
define("_AM_SYSTEM_USERS_USERPOST","Env�os del usuario");
define("_AM_SYSTEM_USERS_STORIES","Art�culos");
define("_AM_SYSTEM_USERS_COMMENTS","Comentarios");
define("_AM_SYSTEM_USERS_PTBBTSDIYT","Presione sobre Sincronizar si piensa que los env�os del usuario no corresponden con el estado actual");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","Sincronizar");
define("_AM_SYSTEM_USERS_USERDONEXIT","El usuario no existe");
define("_AM_SYSTEM_USERS_STNPDNM","Lo Lamento, las nuevas contrase�as no coinciden, regrese e int�ntelo de nuevo");
define("_AM_SYSTEM_USERS_CNGTCOM","No puedo determinar la totalidad de los comentarios");
define("_AM_SYSTEM_USERS_CNGTST","No puedo determinar la totalidad de los art�culos");
define("_AM_SYSTEM_USERS_CNUUSER","Usuario imposible de actualizar");
define("_AM_SYSTEM_USERS_CNGUSERID","No puedo determinar la ID del usuario");
define("_AM_SYSTEM_USERS_LIST","Lista");
define("_AM_SYSTEM_USERS_NOUSERS", "Usuarios no seleccionados");  
define("_AM_SYSTEM_USERS_CNRNU2","El nuevo usuario no pudo ser agregado a los grupos: %s.");
define("_AM_SYSTEM_USERS_SEARCH","B�squeda");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","B�squeda avanzada");
define("_AM_SYSTEM_USERS_EDIT","Modif. usuario");
define("_AM_SYSTEM_USERS_DEL","Eliminar usuario");
define("_AM_SYSTEM_USERS_DELETE","Eliminar");
define("_AM_SYSTEM_USERS_SUBMIT","Enviar");
define("_AM_SYSTEM_USERS_PURGE","Eliminar");
define("_AM_SYSTEM_USERS_ADD","A�adir usuario");
define("_AM_SYSTEM_USERS_VIEW","Mostrar info del usuario");
define("_AM_SYSTEM_USERS_NO_FOUND","No hay coincidencias");
define("_AM_SYSTEM_USERS_NOT_CONNECT","No conectar nunca");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","Eliminar usuario : %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","Eliminar");
?>
