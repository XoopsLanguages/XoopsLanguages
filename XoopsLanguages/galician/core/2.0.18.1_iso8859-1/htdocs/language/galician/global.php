<?php
// $Id: global.php 747 2006-09-20 20:42:11Z skalpa $
//%%%%%%	File Name mainfile.php 	%%%%%
define('_PLEASEWAIT','Por Favor, agarde');
define('_FETCHING','Cargando...');
define('_TAKINGBACK','Voltando...');
define('_LOGOUT','Desconectar');
define('_SUBJECT','Tema');
define('_MESSAGEICON','Icono da Mensaxe');
define('_COMMENTS','Comentarios');
define('_POSTANON','Enviar an�nimamente');
define('_DISABLESMILEY','Desactivar cari�as');
define('_DISABLEHTML','Desactivar html');
define('_PREVIEW','Previsualizar');

define('_GO','Continuar');
define("_NESTED","Vista escalonada");
define("_NOCOMMENTS","Sen comentarios");
define('_FLAT','Vista Plana');
define('_THREADED','Vista Xer�rquica');
define('_OLDESTFIRST','Vellos Primeiro');
define('_NEWESTFIRST','Novos Primeiro');
define("_MORE","m�is ....");
define("_MULTIPAGE","Para dividir o artigo en m�ltiples p�xinas <br />inserte a palabra <font color=red>[pagebreak]</font> (con [] incluido) dentro do artigo.");
define("_IFNOTRELOAD","Se a p�xina non carga autom�ticamente, <br />por favor, faga clic <a href='%s'>aqu�</a>");
define('_WARNINSTALL2','ATENCI�N: o Directorio %s existe no seu servidor. <br />Por favor, elim�neo por raz�ns de seguridade.');
define('_WARNINWRITEABLE','ATENCI�N: o arquivo %s � escribible polo servidor. <br />Por favor, cambie os permisos de este arquivo por raz�ns de seguridade. <br /> en Unix (444), en Win32 (somentes lectura)');

// Error messages issued by XoopsObject::cleanVars()
define( "_XOBJ_ERR_REQUIRED", "%s requerido" );
define( "_XOBJ_ERR_SHORTERTHAN", "%s debe ter menos de %d caracteres." );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define('_PROFILE','Perfil');
define("_POSTEDBY",'Enviado por ');
define('_VISITWEBSITE','Ver Sitio');
define('_SENDPMTO','Enviar mensaxe privada a %s');
define('_SENDEMAILTO','Enviar Correo a %s');
define('_ADD','Engadir');
define('_REPLY','Respostar');
define('_DATE','Data');

//%%%%%%	File Name admin_functions.php 	%%%%%
define('_MAIN','Principal');
define('_MANUAL','Manual');
define('_INFO','Info');
define('_CPHOME','Panel de Control');
define('_YOURHOME','P�xina de inicio');

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define('_WHOSONLINE','Usuarios en li�a');
define('_GUESTS', 'Invitados');
define('_MEMBERS', 'Rexistrados');
define("_ONLINEPHRASE","<b>%s</b> usuario(s) en li�a");
define("_ONLINEPHRASEX","<b>%s</b> usuario(s) navegando <b>%s</b>");
define('_CLOSE','Pechar');

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define('_QUOTEC','Acotaci�n:');

//%%%%%%	File Name admin.php 	%%%%%
define('_NOPERM','Disculpe. Intenta acceder a zona restrinxida.');

//%%%%%		Common Phrases		%%%%%
define('_NO','Non');
define('_YES','Si');
define('_EDIT','Editar');
define('_DELETE','Borrar');
define('_SUBMIT','Enviar');
define('_MODULENOEXIST','�O m�dulo seleccionado non existe!');
define("_ALIGN","Alinear");
define('_LEFT','Esquerda');
define('_CENTER','Centro');
define('_RIGHT','Dereita');
define('_FORM_ENTER','Por favor, indique %s');
// %s represents file name
define('_MUSTWABLE','�O arquivo %s debe ser escribible polo servidor!');
// Module info
define('_PREFERENCES', 'Preferencias');
define('_VERSION','Versi�n');
define('_DESCRIPTION','Descripci�n');
define('_ERRORS','Erros');
define('_NONE','Nada');
define('_ON','o');
define('_READS','Lecturas');
define('_WELCOMETO','Benvido a %s');
define('_SEARCH','Buscar');
define('_ALL', 'todos');
define('_TITLE', 'T�tulo');
define('_OPTIONS', 'Opci�ns');
define('_QUOTE', 'Acotaci�n');
define('_LIST', 'Listar');
define('_LOGIN','Entrar');
define('_USERNAME','Nome: ');
define('_PASSWORD','Contrasinal: ');
define('_SELECT','Seleccionar');
define('_IMAGE','Imaxe');
define('_SEND','Enviar');
define('_CANCEL','Cancelar');
define('_ASCENDING','Orde Ascendente');
define('_DESCENDING','Orde Descendente');
define('_BACK', 'Voltar');
define('_NOTITLE', 'Sen t�tulo');

/* Image manager */
define('_IMGMANAGER','Administrador de Immaxes');
define('_NUMIMAGES', '%s imaxes');
define('_ADDIMAGE','Engadir Arquivo de Imaxe');
define('_IMAGENAME','Nome');
define('_IMGMAXSIZE','Max. tama�o permitido (bytes):');
define('_IMGMAXWIDTH','Max. Ancho permitido (p�xeles):');
define('_IMGMAXHEIGHT','Max. Alto permitido (p�xeles):');
define('_IMAGECAT','Categor�a');
define('_IMAGEFILE','Arquivo de Imaxe');
define('_IMGWEIGHT','Orde para o administrador de imaxes');
define('_IMGDISPLAY','�Mostrar a imaxe?');
define('_IMAGEMIME','MIME type');
define('_FAILFETCHIMG', 'Imposible subir o arquivo %s');
define('_FAILSAVEIMG', 'Fallo almacenando a imaxe %s dentro da base de datos');
define('_NOCACHE', 'Sen Cach�');
define('_CLONE', 'Clonar');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define('_STARTSWITH','Comeza con');
define('_ENDSWITH','Termina con');
define('_MATCHES','Coincidencias');
define('_CONTAINS','Cont�n');

//%%%%%%	File Name commentform.php 	%%%%%
define('_REGISTER','Rexistrar');

//%%%%%%	File Name xoopscodes.php 	%%%%%
define('_SIZE','Tama�o');  // font size
define('_FONT','Fonte');  // font family
define('_COLOR','Cor');  // font color
define('_EXAMPLE','EXEMPLO');
define('_ENTERURL','Introduzca a URL da ligaz�n que desexe engadir.');
define('_ENTERWEBTITLE','Introduzca o t�tulo do sitio web:');
define('_ENTERIMGURL','Introduzca a URL da imaxe que desexa engadir.                                              - Ejemplo: http://www.xoops.org/images/logo.gif ');
define('_ENTERIMGPOS','Defina agora a posici�n da imaxe.');
define("_IMGPOSRORL","'R' o 'r' para Dereita, 'L' o 'l' para esquerda, ou deixar en branco.");
define('_ERRORIMGPOS','�ERRO! Defina a posici�n da imaxe.');
define('_ENTEREMAIL','Introduzca a direcci�n de correo que desexa engadir.                                             - Ejemplo: yo@hotmail.com ');
define('_ENTERCODE','Indique os c�digos que desexe engadir.');
define('_ENTERQUOTE','Inserte o texto que ser� acotado.');
define('_ENTERTEXTBOX','Por favor, inserte o texto dentro do cadro de texto.');
define('_ALLOWEDCHAR','Lonxitude de caracteres max. permitida: ');
define('_CURRCHAR','Lonxitude actual de caracteres: ');
define('_PLZCOMPLETE','Por favor, cumplimente os campos tema e mensaxe');
define('_MESSAGETOOLONG','A S�a mensaxe � demasiado longa');

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 segundo');
define('_SECONDS', '%s segundos');
define('_MINUTE', '1 minuto');
define('_MINUTES', '%s minutos');
define('_HOUR', '1 hora');
define('_HOURS', '%s horas');
define('_DAY', '1 d�a');
define('_DAYS', '%s d�as');
define('_WEEK', '1 semana');
define('_MONTH', '1 mes');

define('_DATESTRING','j/n/Y G:i:s');
define('_MEDIUMDATESTRING','j/n/Y G:i');
define('_SHORTDATESTRING','j/n/Y');
/*
The following characters are recognized in the format string:
a - 'am' or 'pm'
A - 'AM' or 'PM'
d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
D - day of the week, textual, 3 letters; i.e. 'Fri'
F - month, textual, long; i.e. 'January'
h - hour, 12-hour format; i.e. '01' to '12'
H - hour, 24-hour format; i.e. '00' to '23'
g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
i - minutes; i.e. '00' to '59'
j - day of the month without leading zeros; i.e. '1' to '31'
l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
L - boolean for whether it is a leap year; i.e. '0' or '1'
m - month; i.e. '01' to '12'
n - month without leading zeros; i.e. '1' to '12'
M - month, textual, 3 letters; i.e. 'Jan'
s - seconds; i.e. '00' to '59'
S - English ordinal suffix, textual, 2 characters; i.e. 'th', 'nd'
t - number of days in the given month; i.e. '28' to '31'
T - Timezone setting of this machine; i.e. 'MDT'
U - seconds since the epoch
w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
Y - year, 4 digits; i.e. '1999'
y - year, 2 digits; i.e. '99'
z - day of the year; i.e. '0' to '365'
Z - timezone offset in seconds (i.e. '-43200' to '43200')
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define("_CHARSET","ISO-8859-1");
define('_LANGCODE', 'gal');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","0");
?>