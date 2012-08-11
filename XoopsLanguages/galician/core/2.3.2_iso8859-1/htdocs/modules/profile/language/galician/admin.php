<?php
// $Id: admin.php 68 2008-08-31 03:38:58Z julionc $
define("_PROFILE_AM_FIELD","Campo");
define("_PROFILE_AM_FIELDS","Campos");
define("_PROFILE_AM_CATEGORY","Categoría");
define("_PROFILE_AM_STEP","Paso");	 

define("_PROFILE_AM_SAVEDSUCCESS","%s gardouse correctamente");
define("_PROFILE_AM_DELETEDSUCCESS","%s borruouse correctamente");
define("_PROFILE_AM_RUSUREDEL","¿Estás seguro de querer borrar %s?");
 define("_PROFILE_AM_FIELDNOTCONFIGURABLE","O campo non é configurable.");		 

define("_PROFILE_AM_ADD","Engadir");
define("_PROFILE_AM_EDIT","Editar");
define("_PROFILE_AM_TYPE","Tipo de campo");
define("_PROFILE_AM_VALUETYPE","Valor do campo");
define("_PROFILE_AM_NAME","Nome");
define("_PROFILE_AM_TITLE","T&iacute;tulo");
define("_PROFILE_AM_DESCRIPTION","Descrición");
define("_PROFILE_AM_REQUIRED","¿Requirido?");
define("_PROFILE_AM_MAXLENGTH","Tama&ntilde;o máximo");
define("_PROFILE_AM_WEIGHT","Peso");
define("_PROFILE_AM_DEFAULT","Por defecto");
define("_PROFILE_AM_NOTNULL","¿Non nulo?"); 

define("_PROFILE_AM_ARRAY","Arranxo");
define("_PROFILE_AM_EMAIL","E-correo");
define("_PROFILE_AM_INT","Enteiro");
define("_PROFILE_AM_TXTAREA","área do texto");
define("_PROFILE_AM_TXTBOX","Campo de texto");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Outro");

define("_PROFILE_AM_PROF_VISIBLE_ON","Campo visible no perfil de estes grupos");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Campo visible no perfil para estes grupos"); 
define("_PROFILE_AM_PROF_VISIBLE","Visibilidade");
define("_PROFILE_AM_PROF_EDITABLE","Campo editable dende o perfil");
define("_PROFILE_AM_PROF_REGISTER","Mostrar na forma de rexistro");
define("_PROFILE_AM_PROF_SEARCH","Atopable por estes grupos");
define("_PROFILE_AM_PROF_ACCESS","Perfil accesible por estes grupos");
define("_PROFILE_AM_PROF_ACCESS_DESC",
        "<ul>" .
        "<li>Grupos Admin: Se un usuario pertence a grupos de administrador, o usuario actual ten acceso si y somentes si a un dos actuais grupos del usuario se lle permite o acceso ó grupo de administrador; else</li>" .
        "<li>Non grupos básicos: Se un usuario pertence a un ou máis grupos básicos (NON administrador, usuario, anónimo), o usuario actual ten acceso si y somentes si un dos actuais grupos do usuario está autorizado a permitir que calquera dos grupos básicos non; else</li>" .
        "<li>Grupo usuario: Se un usuario pertence ó grupo de usuarios somentes, o usuario actual ten acceso si y somentes si un dos seus grupos ten permitido o acceso ó grupo usuario</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","O campo ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," é visible para ");
define("_PROFILE_AM_FIELDVISIBLEON"," mostrando o perfil de ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- Tódolos");
define("_PROFILE_AM_FIELDNOTVISIBLE","non é visible");

define("_PROFILE_AM_CHECKBOX","Checkbox");
define("_PROFILE_AM_GROUP","Elixir grupo");
define("_PROFILE_AM_GROUPMULTI","Elixir multi grupo");
define("_PROFILE_AM_LANGUAGE","Elixir idioma");
define("_PROFILE_AM_RADIO","Radio Buttons");
define("_PROFILE_AM_SELECT","Elixir");
define("_PROFILE_AM_SELECTMULTI","Selección Multi");
define("_PROFILE_AM_TEXTAREA","Área de texto");
define("_PROFILE_AM_DHTMLTEXTAREA","Área de texto DHTML");
define("_PROFILE_AM_TEXTBOX","Campo de texto");
define("_PROFILE_AM_TIMEZONE","Zona horaria");
define("_PROFILE_AM_YESNO","Radio Si/Non");
define("_PROFILE_AM_DATE","Data");
define("_PROFILE_AM_AUTOTEXT","Auto Texto");
define("_PROFILE_AM_DATETIME","Data e hora");
define("_PROFILE_AM_LONGDATE","data completa");

define("_PROFILE_AM_ADDOPTION","Engadir opción");
define("_PROFILE_AM_REMOVEOPTIONS","Eliminar opción");
define("_PROFILE_AM_KEY","Valor a ordear");
define("_PROFILE_AM_VALUE","Texto a mostrar");

// User management
define("_PROFILE_AM_EDITUSER","Editar usuario");
define("_PROFILE_AM_SELECTUSER","Seleccioar usuario");	
define("_PROFILE_AM_ADDUSER","Engadir usuario");	
define("_PROFILE_AM_THEME","Tema");	 
define("_PROFILE_AM_RANK","Rango");	
define("_PROFILE_AM_USERDONEXIT","O usuario non existe");  
define("_PROFILE_MA_USERLEVEL","Nivel del usuario");					
define("_PROFILE_MA_ACTIVE","Activo");	

define("_PROFILE_MA_INACTIVE","Inactivo");
define("_PROFILE_AM_USERCREATED","Usuario creado"); 
define("_PROFILE_AM_YMCACF","Debe completar tódolos campos requiridos");				  
define("_PROFILE_AM_CANNOTDELETESELF","Non puede eliminar a súa propia conta - utilice a súa páxina de perfil para eliminar a súa propia conta");
define("_PROFILE_AM_CANNOTDELETEADMIN","Non está permitido eliminar unha conta de administrador");

define("_PROFILE_AM_NOSELECTION","No se elixiu ningún usuario");
define("_PROFILE_AM_USER_ACTIVATED","Usuario activado");
define("_PROFILE_AM_USER_DEACTIVATED","Usuario desactivado");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Erro: Usuario non activado");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Erro: Usuario non desactivado");		 

define("_PROFILE_AM_STEPNAME","Nome do paso");
define("_PROFILE_AM_STEPORDER","Orde de paso");
define("_PROFILE_AM_STEPSAVE","Gardar despois do paso");
define("_PROFILE_AM_STEPINTRO","Descrición do paso");
?>