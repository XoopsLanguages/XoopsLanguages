<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE es
 * _CHARSET     UTF-8
 * @version     $Id: users.php 4091 2010-01-05 17:02:11Z forxoops $
 */

// Navigation
define('_AM_SYSTEM_USERS_NAV_MAIN','Admin. usuarios');
define('_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH','Búsqueda avanzada');
define('_AM_SYSTEM_USERS_NAV_ADD_USER','añadir usuario');
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
define("_AM_SYSTEM_USERS_LAST_LOGIN","Última visita");
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
define("_AM_SYSTEM_USERS_ACTUS","Usuarios activos: %s");
define("_AM_SYSTEM_USERS_INACTUS","Usuarios inactivos: %s");
define("_AM_SYSTEM_USERS_NOFOUND","No hay coincidencias");
define("_AM_SYSTEM_USERS_ICQ","ICQ");
define("_AM_SYSTEM_USERS_AIM","AIM");
define("_AM_SYSTEM_USERS_YIM","YIM");
define("_AM_SYSTEM_USERS_FACEBOOK","Enlace de Facebook"); //TODO
define("_AM_SYSTEM_USERS_SKYPE","Enlace de Skype"); //TODO
define("_AM_SYSTEM_USERS_MSNM","MSNM");
define("_AM_SYSTEM_USERS_TIMEZONE","Zona horaria");
define("_AM_SYSTEM_USERS_SHOWSIG","Agregar siempre mi firma");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","Tipo de presentación para los comentarios");
define("_AM_SYSTEM_USERS_CSORTORDER","Orden de los comentarios");
define("_AM_SYSTEM_USERS_EXTRAINFO","Info extra");
define("_AM_SYSTEM_USERS_LOCATION","País/Localidad");
define("_AM_SYSTEM_USERS_OCCUPATION","Ocupación");
define("_AM_SYSTEM_USERS_INTEREST","Intereses");
define("_AM_SYSTEM_USERS_URLC","URL contiene");
define("_AM_SYSTEM_USERS_LOCATIONC","País/Localidad contiene");
define("_AM_SYSTEM_USERS_OCCUPATIONC","Ocupación contiene");
define("_AM_SYSTEM_USERS_INTERESTC","Intereses contiene");
define("_AM_SYSTEM_USERS_LASTLOGMORE","Última visita hace más de <span style='color:#ff0000;'>X</span> días");
define("_AM_SYSTEM_USERS_LASTLOGLESS","Última visita hace menos de <span style='color:#ff0000;'>X</span> días");
define("_AM_SYSTEM_USERS_REGMORE","Fecha de registro superior a <span style='color:#ff0000;'>X</span> días");
define("_AM_SYSTEM_USERS_REGLESS","Fecha de registro inferior a <span style='color:#ff0000;'>X</span> días");
define("_AM_SYSTEM_USERS_POSTSMORE","Su número de posts es superior a <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_POSTSLESS","Su número de posts es inferior a <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_SORT","Ordenar por");
define("_AM_SYSTEM_USERS_ORDER","Orden");
define("_AM_SYSTEM_USERS_LASTLOGIN","Última visita");
define("_AM_SYSTEM_USERS_ASC","Orden ascendente");
define("_AM_SYSTEM_USERS_DESC","Orden descendente");
define("_AM_SYSTEM_USERS_LIMIT","Número de usuarios por página");
define("_AM_SYSTEM_USERS_RESULTS","Resultados de la búsqueda");
define("_AM_SYSTEM_USERS_SHOWMAILOK","Tipo de usuarios a mostrar");
define("_AM_SYSTEM_USERS_MAILOK","Sólo los usuarios que aceptan correo");
define("_AM_SYSTEM_USERS_MAILNG","Sólo los usuarios que no aceptan correo");
define("_AM_SYSTEM_USERS_SHOWTYPE","Tipo de usuarios a mostrar");
define("_AM_SYSTEM_USERS_ACTIVE","Sólo usuarios activos");
define("_AM_SYSTEM_USERS_INACTIVE","Sólo usuarios inactivos");
define("_AM_SYSTEM_USERS_BOTH","Todos");
define("_AM_SYSTEM_USERS_SENDMAIL","Enviar correo");
define("_AM_SYSTEM_USERS_ADD2GROUP","Añadir usuarios al grupo %s");
define("_AM_SYSTEM_USERS_GROUPS","Grupos");
define("_AM_SYSTEM_USERS_ADD_GROUPS","Añadir grupos");
define("_AM_SYSTEM_USERS_DELETE_GROUPS","Eliminar grupo");
define("_AM_SYSTEM_USERS_AYSYWTDU","¿Realmente desea eliminar al usuario %s?");
define("_AM_SYSTEM_USERS_BYTHIS","Al hacer esto toda la información relativa al usuario será eliminada permanentemente.");
define("_AM_SYSTEM_USERS_YES","Sí");
define("_AM_SYSTEM_USERS_NO","No");
define("_AM_SYSTEM_USERS_YMCACF","Debe cumplimentar todos los campos requeridos");
define("_AM_SYSTEM_USERS_CNRNU","No se pudo registrar al usuario.");
define("_AM_SYSTEM_USERS_EDEUSER","Modificar/Eliminar Usuarios");
define("_AM_SYSTEM_USERS_NICKNAME","Nick");
define("_AM_SYSTEM_USERS_MODIFYUSER","Modificar usuario");
define("_AM_SYSTEM_USERS_DELUSER","Eliminar usuario");
define("_AM_SYSTEM_USERS_GO","Adelante");
define("_AM_SYSTEM_USERS_ADDUSER","Añadir usaurio");
define("_AM_SYSTEM_USERS_OPTION","Opción");
define("_AM_SYSTEM_USERS_THEME","Diseño");
define("_AM_SYSTEM_USERS_AOUTVTEAD","Permitir a los demás usuarios ver esta dirección de correo");
define("_AM_SYSTEM_USERS_RANK","Rango");
define("_AM_SYSTEM_USERS_NSRA","Sin rango especial asignado");
define("_AM_SYSTEM_USERS_NSRID","No hay rangos especiales en la base de datos");
define("_AM_SYSTEM_USERS_ACCESSLEV","Nivel de acceso");
define("_AM_SYSTEM_USERS_SIGNATURE","Firma");
define("_AM_SYSTEM_USERS_PASSWORD","Contraseña");
define("_AM_SYSTEM_USERS_INDICATECOF","* indica que el campo es obligatorio. No puede quedar vacío.");
define("_AM_SYSTEM_USERS_NOTACTIVE","Este usuario no ha sido activado. ¿Desea activarlo usted mismo?");
define("_AM_SYSTEM_USERS_UPDATEUSER","Actualizar usuario");
define("_AM_SYSTEM_USERS_USERINFO","Información del usuario");
define("_AM_SYSTEM_USERS_USERID","ID del usuario");
define("_AM_SYSTEM_USERS_RETYPEPD","Confirme la contraseña");
define("_AM_SYSTEM_USERS_CHANGEONLY","(Sólo para cambios)");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","Sincronizar");
define("_AM_SYSTEM_USERS_USERDONEXIT","El usuario no existe");
define("_AM_SYSTEM_USERS_STNPDNM","Lo Lamento, las nuevas contraseñas no coinciden, regrese e inténtelo de nuevo");
define("_AM_SYSTEM_USERS_CNUUSER","Usuario imposible de actualizar");
define("_AM_SYSTEM_USERS_CNGUSERID","No puedo determinar la ID del usuario");
define("_AM_SYSTEM_USERS_NOUSERS","Usuarios no seleccionados");  
define("_AM_SYSTEM_USERS_CNRNU2","El nuevo usuario no pudo ser agregado a los grupos: %s.");
define("_AM_SYSTEM_USERS_SEARCH","Búsqueda");
define("_AM_SYSTEM_USERS_SEARCH_USER","Buscar Usuario:");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","Búsqueda avanzada");
define("_AM_SYSTEM_USERS_EDIT","Modif. usuario");
define("_AM_SYSTEM_USERS_DEL","Eliminar usuario");
define("_AM_SYSTEM_USERS_DELETE","Eliminar");
define("_AM_SYSTEM_USERS_SUBMIT","Enviar");
define("_AM_SYSTEM_USERS_PURGE","Eliminar");
define("_AM_SYSTEM_USERS_ADD","Añadir usuario");
define("_AM_SYSTEM_USERS_VIEW","Mostrar info del usuario");
define("_AM_SYSTEM_USERS_NO_FOUND","No hay coincidencias");
define("_AM_SYSTEM_USERS_NOT_CONNECT","No conectar nunca");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","Eliminar usuario : %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","Eliminar");
define("_AM_SYSTEM_USERS_NO_SUPP","Este usuario no puede ser eliminado: %s <br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP","El Admin no puede ser eliminado: %s <br />");
define("_AM_SYSTEM_USERS_ERROR","Error:<br /><br /> %s");
define("_AM_SYSTEM_USERS_ALLGROUP","Todos los grupos");
define("_AM_SYSTEM_USERS_ALLUSER","Todos los usuarios");
define("_AM_SYSTEM_USERS_ACTIVEUSER","Solo usuarios activos");
define("_AM_SYSTEM_USERS_INACTIVEUSER","Solo usuarios inactivos");

// Error
define("_AM_SYSTEM_USERS_PSEUDO_ERROR","El nombre de usuario %s ya esta en uso");
define("_AM_SYSTEM_USERS_MAIL_ERROR","El correo %s ya está en uso");

//2.5.4
define('_AM_SYSTEM_USERS_ACCEPT_EMAIL','Aceptar correo del Administrador');

?>

