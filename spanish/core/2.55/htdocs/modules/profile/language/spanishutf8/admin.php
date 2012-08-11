<?php
// $Id$
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("_PROFILE_AM_FIELD","Campo");
define("_PROFILE_AM_FIELDS","Campos");
define("_PROFILE_AM_CATEGORY","Categoría");
define("_PROFILE_AM_STEP","Paso");

define("_PROFILE_AM_SAVEDSUCCESS","%s se ha guardado correctamente");
define("_PROFILE_AM_DELETEDSUCCESS","%s se ha borrado correctamente");
define("_PROFILE_AM_RUSUREDEL","¿Estás seguro de querer borrar %s?");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","El campo no es configurable.");

define("_PROFILE_AM_ADD","Agregar");
define("_PROFILE_AM_EDIT","Editar");
define("_PROFILE_AM_TYPE","Tipo de campo");
define("_PROFILE_AM_VALUETYPE","Valor del campo");
define("_PROFILE_AM_NAME","Nombre");
define("_PROFILE_AM_TITLE","T&iacute;tulo");
define("_PROFILE_AM_DESCRIPTION","Descripción");
define("_PROFILE_AM_REQUIRED","¿Requerido?");
define("_PROFILE_AM_MAXLENGTH","Tama&ntilde;o máximo");
define("_PROFILE_AM_WEIGHT","Peso");
define("_PROFILE_AM_DEFAULT","Por defecto");
define("_PROFILE_AM_NOTNULL","¿No nulo?");

define("_PROFILE_AM_ARRAY","Arreglo");
define("_PROFILE_AM_EMAIL","E-mail");
define("_PROFILE_AM_INT","Entero");
define("_PROFILE_AM_TXTAREA","área de texto");
define("_PROFILE_AM_TXTBOX","Campo de texto");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Otro");
define("_PROFILE_AM_FLOAT","Floating Point");
define("_PROFILE_AM_DECIMAL","Número decimal");
define("_PROFILE_AM_UNICODE_ARRAY","Array Unicode");
define("_PROFILE_AM_UNICODE_EMAIL","Email Unicode");
define("_PROFILE_AM_UNICODE_TXTAREA","Text area Unicode");
define("_PROFILE_AM_UNICODE_TXTBOX","Text field Unicode");
define("_PROFILE_AM_UNICODE_URL","URL Unicode");

define("_PROFILE_AM_PROF_VISIBLE_ON","Campo visible en el perfil de estos grupos");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Campo visible en el perfil para estos grupos");
define("_PROFILE_AM_PROF_VISIBLE","Visibilidad");
define("_PROFILE_AM_PROF_EDITABLE","Campo editable desde el perfil");
define("_PROFILE_AM_PROF_REGISTER","Mostrar en la forma de registro");
define("_PROFILE_AM_PROF_SEARCH","Buscable por estos grupos");
define("_PROFILE_AM_PROF_ACCESS","Perfil accesible por estos grupos");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin groups: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" .
        "<li>Non basic groups: If a user belongs to one or more non basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to allowed to any of the non basic groups; else</li>" .
        "<li>User group: If a user belongs to User group only, the current user has access if and only if one of his groups is allowed to access User group</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","El campo ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," es visible para ");
define("_PROFILE_AM_FIELDVISIBLEON"," mostrando el perfil de ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- Todos");
define("_PROFILE_AM_FIELDNOTVISIBLE","no es visible");

define("_PROFILE_AM_CHECKBOX","Checkbox");
define("_PROFILE_AM_GROUP","Elegir grupo");
define("_PROFILE_AM_GROUPMULTI","Elegir multi grupo");
define("_PROFILE_AM_LANGUAGE","Elegir idioma");
define("_PROFILE_AM_RADIO","Radio Buttons");
define("_PROFILE_AM_SELECT","Elegir");
define("_PROFILE_AM_SELECTMULTI","Selección Multi");
define("_PROFILE_AM_TEXTAREA","Área de texto");
define("_PROFILE_AM_DHTMLTEXTAREA","Área de texto DHTML");
define("_PROFILE_AM_TEXTBOX","Campo de texto");
define("_PROFILE_AM_TIMEZONE","Zona horaria");
define("_PROFILE_AM_YESNO","Radio Sí/No");
define("_PROFILE_AM_DATE","Fecha");
define("_PROFILE_AM_AUTOTEXT","Auto Texto");
define("_PROFILE_AM_DATETIME","Fecha y hora");
define("_PROFILE_AM_LONGDATE","Fecha completa");

define("_PROFILE_AM_ADDOPTION","Añadir opción");
define("_PROFILE_AM_REMOVEOPTIONS","Eliminar opción");
define("_PROFILE_AM_KEY","Valor a ordenar");
define("_PROFILE_AM_VALUE","Texto a mostrar");

// User management
define("_PROFILE_AM_EDITUSER","Editar usuario");
define("_PROFILE_AM_SELECTUSER","Seleccionar usuario");
define("_PROFILE_AM_ADDUSER","Agregar usuario");
define("_PROFILE_AM_THEME","Tema");
define("_PROFILE_AM_RANK","Rango");
define("_PROFILE_AM_USERDONEXIT","El usuario no existe");
define("_PROFILE_MA_USERLEVEL","Nivel del usuario");

define("_PROFILE_MA_ACTIVE","Activo");
define("_PROFILE_MA_INACTIVE","Inactivo");
define("_PROFILE_AM_USERCREATED","Usuario creado");

define("_PROFILE_AM_CANNOTDELETESELF","No puede eliminar su propia cuenta - utilice su página de perfil para eliminar su propia cuenta");
define("_PROFILE_AM_CANNOTDELETEADMIN","No está permitido eliminar una cueta de administrador");

define("_PROFILE_AM_NOSELECTION","No se eligió ningún usuario");
define("_PROFILE_AM_USER_ACTIVATED","Usuario activado");
define("_PROFILE_AM_USER_DEACTIVATED","Usuario desactivado");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Error: Usuario no activado");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Error: Usuario no desactivado");

define("_PROFILE_AM_STEPNAME","Nombre del paso");
define("_PROFILE_AM_STEPORDER","Orden del paso");
define("_PROFILE_AM_STEPSAVE","Guardar después del paso");
define("_PROFILE_AM_STEPINTRO","Descripción del paso");
//1.62
define('_PROFILE_AM_ACTION','Acción');
//1.63
define('_PROFILE_AM_REQUIRED_TOGGLE','Alternar campo obligatorio');
define('_PROFILE_AM_REQUIRED_TOGGLE_SUCCESS','El Campo obligatorio se ha cambiado correctamente ');
define('_PROFILE_AM_REQUIRED_TOGGLE_FAILED','Error al Cambiar el Campo Obligatorio');

define('_PROFILE_AM_SAVESTEP_TOGGLE','Alternar guardar');
define('_PROFILE_AM_SAVESTEP_TOGGLE_SUCCESS','Cambiado correctamente guardar después del paso');
define('_PROFILE_AM_SAVESTEP_TOGGLE_FAILED',"No se pudo cambiar 'Guardar después del paso'");

?>
