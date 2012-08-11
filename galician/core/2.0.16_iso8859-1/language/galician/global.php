<?php
// $Id: global.php 747 2006-09-20 20:42:11Z skalpa $
//%%%%%%	File Name mainfile.php 	%%%%%
define('_PLEASEWAIT','Por Favor, agarde');
define('_FETCHING','Cargando...');
define('_TAKINGBACK','Voltando...');
define('_LOGOUT','Desconectar');
define('_SUBJECT','Tema');
define('_MESSAGEICON','Icona da Mensaxe');
define('_COMMENTS','Comentarios');
define('_POSTANON','Enviar anónimamente');
define('_DISABLESMILEY','Desactivar cariñas');
define('_DISABLEHTML','Desactivar html');
define('_PREVIEW','Previsualizar');

define('_GO','Continuar');
define("_NESTED","Vista escalonada");
define("_NOCOMMENTS","Sen comentarios");
define('_FLAT','Vista vertical');
define('_THREADED','Vista xerárquica');
define('_OLDESTFIRST','Vellos primeiro');
define('_NEWESTFIRST','Novos primeiro');
define("_MORE","máis ....");
define("_MULTIPAGE","Para dividir o artículo en múltiples páxinas <br />insira a palabra <font color=red>[pagebreak]</font> (con [] incluido) dentro do artigo para cada cambio de páxina.");
define("_IFNOTRELOAD","Se a páxina non carga automaticamente, <br />por favor, prema <a href='%s'>aquí</a>");
define('_WARNINSTALL2','ATENCIÓN: o directorio %s existe no seu servidor. <br />Por favor, elimíneo por razóns de seguridade.');
define('_WARNINWRITEABLE','ATENCIÓN: o arquivo %s é escribíbel no servidor. <br />Por favor, cambie os permisos deste arquivo por razóns de seguridade. <br /> en Unix (444), en Win32 (só lectura)');

// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED","%s requerido" );
define("_XOBJ_ERR_SHORTERTHAN","%s ha de ter menos de %d caracteres." );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define('_PROFILE','Perfil');
define("_POSTEDBY",'Enviado por ');
define('_VISITWEBSITE','Ver Sitio');
define('_SENDPMTO','Enviar mensaxe privada a %s');
define('_SENDEMAILTO','Enviar Correo a %s');
define('_ADD','Agregar');
define('_REPLY','Responder');
define('_DATE','Data');

//%%%%%%	File Name admin_functions.php 	%%%%%
define('_MAIN','Principal');
define('_MANUAL','Manual');
define('_INFO','Info');
define('_CPHOME','Panel de Control');
define('_YOURHOME','Páxina de inicio');

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define('_WHOSONLINE','Usuarios en liña');
define('_GUESTS','Invitados');
define('_MEMBERS','Rexistrados');
define("_ONLINEPHRASE","<b>%s</b> usuario(s) en liña");
define("_ONLINEPHRASEX","<b>%s</b> usuario(s) navegando <b>%s</b>");
define('_CLOSE','Pechar');

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define('_QUOTEC','Acotación:');

//%%%%%%	File Name admin.php 	%%%%%
define('_NOPERM','Desculpe. Tentou acceder a zona restrinxida.');

//%%%%%		Common Phrases		%%%%%
define('_NO','Non');
define('_YES','Si');
define('_EDIT','Editar');
define('_DELETE','Borrar');
define('_SUBMIT','Enviar');
define('_MODULENOEXIST','¡O módulo seleccionado non existe!');
define("_ALIGN","Aliñar");
define('_LEFT','Esquerda');
define('_CENTER','Centro');
define('_RIGHT','Dereita');
define('_FORM_ENTER','Por favor, indique %s');
// %s represents file name
define('_MUSTWABLE','¡O arquivo %s debe ser escribíbel no servidor!');
// Module info
define('_PREFERENCES','Preferencias');
define('_VERSION','Versión');
define('_DESCRIPTION','Descrición');
define('_ERRORS','Erros');
define('_NONE','Nada');
define('_ON','el');
define('_READS','Lecturas');
define('_WELCOMETO','Benvido a %s');
define('_SEARCH','Procurar');
define('_ALL','todos');
define('_TITLE','Título');
define('_OPTIONS','Opcións');
define('_QUOTE','Acotación');
define('_LIST','Listar');
define('_LOGIN','Entrar');
define('_USERNAME','Nome: ');
define('_PASSWORD','Contrasinal: ');
define('_SELECT','Seleccionar');
define('_IMAGE','Imaxe');
define('_SEND','Enviar');
define('_CANCEL','Cancelar');
define('_ASCENDING','Orde Ascendente');
define('_DESCENDING','Orde Descendente');
define('_BACK','Retornar');
define('_NOTITLE','Sen título');

/* Image manager */
define('_IMGMANAGER','Administrador de Imaxes');
define('_NUMIMAGES','%s imaxes');
define('_ADDIMAGE','Engadir arquivo de imaxe');
define('_IMAGENAME','Nome');
define('_IMGMAXSIZE','Max. tamaño permitido (bytes):');
define('_IMGMAXWIDTH','Max. Ancho permitido (píxeles):');
define('_IMGMAXHEIGHT','Max. Alto permitido (píxeles):');
define('_IMAGECAT','Categoría');
define('_IMAGEFILE','Arquivo de imaxe');
define('_IMGWEIGHT','Orde para o administrador de imaxes');
define('_IMGDISPLAY','Amosar a imaxe?');
define('_IMAGEMIME','MIME type');
define('_FAILFETCHIMG','Imposíbel subir o arquivo %s');
define('_FAILSAVEIMG','Fallo ao almacenar a imaxe %s dentro da base de datos');
define('_NOCACHE','Sen Caché');
define('_CLONE','Clonar');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define('_STARTSWITH','Comeza con');
define('_ENDSWITH','Remata en');
define('_MATCHES','Coincidencias');
define('_CONTAINS','Contén');

//%%%%%%	File Name commentform.php 	%%%%%
define('_REGISTER','Rexistrar');

//%%%%%%	File Name xoopscodes.php 	%%%%%
define('_SIZE','Tamaño');  // font size
define('_FONT','Fonte');  // font family
define('_COLOR','Cor');  // font color
define('_EXAMPLE','EXEMPLO');
define('_ENTERURL','Introduza a URL da ligazón que queira engadir.');
define('_ENTERWEBTITLE','Introduza o título do sitio web:');
define('_ENTERIMGURL','Introduza a URL da imaxe que quere engadir.                                              - Exemplo: http://www.xoops.org/images/logo.gif ');
define('_ENTERIMGPOS','Defina agora a posición da imaxe.');
define("_IMGPOSRORL","'R' o 'r' para dereita, 'L' o 'l' para esquerda, o déixea en branco.");
define('_ERRORIMGPOS','¡ERROR! Defina a posición da imaxe.');
define('_ENTEREMAIL','Introduza o enderezo de correo que queira engadir.                                             - Exemplo: eu@gmail.com ');
define('_ENTERCODE','Indique os códigos que desexa emgadir.');
define('_ENTERQUOTE','Insira o texto que será acotado.');
define('_ENTERTEXTBOX','Por favor, insira o texto dentro do campo de texto.');
define('_ALLOWEDCHAR','Lonxitude de caracteres max. permitida: ');
define('_CURRCHAR','Lonxitude actual de caracteres: ');
define('_PLZCOMPLETE','Por favor, cumprimente os campos tema e mensaxe');
define('_MESSAGETOOLONG','A súa mensaxe é longa de máis');

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 segundo');
define('_SECONDS','%s segundos');
define('_MINUTE','1 minuto');
define('_MINUTES','%s minutos');
define('_HOUR','1 hora');
define('_HOURS','%s horas');
define('_DAY','1 día');
define('_DAYS','%s días');
define('_WEEK','1 semana');
define('_MONTH','1 mes');

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
S - English ordinal suffix, textual, 2 characters; i.e. 'th','nd'
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
define('_LANGCODE','gl');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","0");
?>