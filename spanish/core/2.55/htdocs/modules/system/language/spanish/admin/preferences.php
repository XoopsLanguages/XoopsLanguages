<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    es
 * _CHARSET     UTF-8
 * @version     $Id: preferences.php 4091 2010-01-05 17:02:11Z forxoops $
 */
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define('_AM_SYSTEM_PREFERENCES_NAV_MAIN','Preferencias');

//Tips
define('_AM_SYSTEM_PREFERENCES_NAV_TIPS','<ul><li>Admin. todas las config. del sitio.</li></ul>');

define("_MD_AM_SITEPREF","Preferencias");
define("_MD_AM_SITENAME","Nombre del sitio");
define("_MD_AM_SITENAMEDSC","");
define("_MD_AM_SLOGAN","Eslogan o lema");
define("_MD_AM_SLOGANDSC","");
define("_MD_AM_ADMINML","Correo del administrador");
define("_MD_AM_ADMINMLDSC","");
define("_MD_AM_LANGUAGE","Lenguaje por defecto");
define("_MD_AM_LANGUAGEDSC","");
define("_MD_AM_STARTPAGE","Módulo para la página de inicio");
define("_MD_AM_STARTPAGEDSC","");
define("_MD_AM_NONE","Ninguno");
define("_MD_AM_SERVERTZ","Zona horaria del servidor");
define("_MD_AM_SERVERTZDSC","");
define("_MD_AM_DEFAULTTZ","Zona horaria por defecto");
define("_MD_AM_DEFAULTTZDSC","");
define("_MD_AM_DTHEME","Diseño por defecto");
define("_MD_AM_DTHEMEDSC","");
define("_MD_AM_THEMESET","Diseños");
define("_MD_AM_CUSTOM_REDIRECT","Usar jGrowl redirect");
define("_MD_AM_CUSTOM_REDIRECT_DESC","reemplaza la vieja redirección una redirección jQuery");
define("_MD_AM_ANONNAME","Nombre de usuario para los visitantes no registrados");
define("_MD_AM_ANONNAMEDSC","");
define("_MD_AM_MINPASS","Tamaño mínimo requerido para la contraseña");
define("_MD_AM_MINPASSDSC","");
define("_MD_AM_NEWUNOTIFY","¿Recibir notificación del registro de nuevos usuarios?");
define("_MD_AM_NEWUNOTIFYDSC","");
define("_MD_AM_SELFDELETE","¿Permitir a los usuarios borrar su propia cuenta?");
define("_MD_AM_SELFDELETEDSC","");
define("_MD_AM_USEGZIP","¿Usar compresión gzip?  PHP versión 4.0.5 o superior recomendada. Asegúrese antes de activar esta opción.");
define("_MD_AM_USEGZIPDSC","");
define("_MD_AM_UNAMELVL","Nivel de permisibilidad para los nombres de los usuarios");
define("_MD_AM_UNAMELVLDSC","");
define("_MD_AM_STRICT","Estricto (sólo letras y números)");
define("_MD_AM_MEDIUM","Medio");
define("_MD_AM_LIGHT","Liviano (recomendado para caracteres multibyte)");
define("_MD_AM_USERCOOKIE","Nombre del Cookie para el usuario.");
define("_MD_AM_USERCOOKIEDSC","Este cookie contiene solamente un nombre de usuario que es guardado en el PC durante un año. Si el usuario lo acepta, su nombre será automáticamente insertado en el bloque de ingreso/login.");
define("_MD_AM_USEMYSESS","Usar sesión personalizada");
define("_MD_AM_USEMYSESSDSC","Seleccione sí para personalizar los valores relacionados con la sesión.");
define("_MD_AM_SESSNAME","Nombre de la sesión");
define("_MD_AM_SESSNAMEDSC","El nombre de la sesión (válido solamente cuando 'Usar sesión personalizada' está activado)");
define("_MD_AM_SESSEXPIRE","Expiración de la sesión ");
define("_MD_AM_SESSEXPIREDSC","Máxima duración en minutos de una sesión (válido solamente cuando la opción 'Usar sesión personalizada' está activada). Trabaja únicamente cuando usted está usando PHP4.2.0 o superior.");
define("_MD_AM_BANNERS","¿Activar banners?");
define("_MD_AM_BANNERSDSC","");
define("_MD_AM_MYIP","Su IP. Esta información permite que no se le compute en las impresiones de los banners");
define("_MD_AM_MYIPDSC","Este IP no será contado como una impresión para los banners");
define("_MD_AM_ALWDHTML","HTML permitido en todos los envíos.");
define("_MD_AM_INVLDMINPASS","Valor inválido para la mínima longitud de la contraseña.");
define("_MD_AM_INVLDUCOOK","Valor inválido para el nombre del cookie del usuario.");
define("_MD_AM_INVLDSCOOK","Valor inválido para el nombre del cookie de la sesión.");
define("_MD_AM_INVLDSEXP","Valor inválido para el tiempo de expiración");
define("_MD_AM_ADMNOTSET","Correo del administrador no configurado");
define("_MD_AM_YES","Sí");
define("_MD_AM_NO","No");
define("_MD_AM_DONTCHNG","No cambiar");
define("_MD_AM_REMEMBER","Recuerde hacerle un chmod 666 a este archivo para permitirle al sistema modificarlo adecuadamente.");
define("_MD_AM_IFUCANT","Si no puede cambiar el permiso deberá editarlo manualmente.");						

define("_MD_AM_COMMODE","Modo por defecto para mostrar los comentarios");		  
define("_MD_AM_COMMODEDSC","");
define("_MD_AM_COMORDER","Orden de los comentarios mostrados por defecto");
define("_MD_AM_COMORDERDSC","");
define("_MD_AM_ALLOWHTML","¿Permitir HTML en los envíos de los usuarios?");
define("_MD_AM_DEBUGMODE","Modo debug");
define("_MD_AM_DEBUGMODEDSC","Distintas opciones de debug. Un sitio web de producción tiene que tener desactivada esta opción.");
define("_MD_AM_AVATARALLOW","¿Permitir subir avatares propios?");
define("_MD_AM_AVATARALWDSC","");
define('_MD_AM_AVATARMP','Envíos mínimos requeridos');
define('_MD_AM_AVATARMPDSC','Indique el número mínimo de envíos requeridos para poder subir un avatar propio');
define("_MD_AM_AVATARW","Máxima anchura del avatar");
define("_MD_AM_AVATARWDSC","");
define("_MD_AM_AVATARH","Máxima altura del avatar");
define("_MD_AM_AVATARHDSC","");
define("_MD_AM_AVATARMAX","Tamaño máximo para el avatar (bytes)");
define("_MD_AM_AVATARMAXDSC","");
define("_MD_AM_AVATARCONF","Configuración de avatares");
define("_MD_AM_NOTIFYTO","Notificar al grupo");
define("_MD_AM_NOTIFYTODSC","");
define("_MD_AM_ALLOWTHEME","¿Permitir a los usuarios seleccionar el diseño?");
define("_MD_AM_ALLOWIMAGE","¿Permitir a los usuarios mostrar archivos de imagen en los envíos?");	

define("_MD_AM_USERACTV","Activación por parte del usuario (recomendado)");
define("_MD_AM_AUTOACTV","Activación automática");
define("_MD_AM_ADMINACTV","Activación por parte de los Administradores");
define("_MD_AM_ACTVTYPE","Tipo de activación para los nuevos usuarios registrados");
define("_MD_AM_ACTVTYPEDSC","");
define("_MD_AM_ACTVGROUP","Enviar correo de activación a");
define("_MD_AM_ACTVGROUPDSC","Válido sólo cuando la activación por parte de los administradores esté seleccionada");
define('_MD_AM_USESSL','¿Usar SSL para el login?');
define("_MD_AM_USESSLDSC","");
define('_MD_AM_SSLPOST','Nombre de la variable SSL');
define('_MD_AM_SSLPOSTDSC','El nombre de la variable usado para transferir el valor de la sesión vía POST. Si no está seguro, configure cualquier nombre que sea difícil.');
define('_MD_AM_DEBUGMODE0','Desactivado');
define('_MD_AM_DEBUGMODE1','Activar debug (modo inline)');
define('_MD_AM_DEBUGMODE2','Activar debug (modo ventana emergente)');
define('_MD_AM_DEBUGMODE3','Debug Templates Smarty');
define('_MD_AM_MINUNAME','Longitud mínima requerida para el nombre de usuario');
define("_MD_AM_MINUNAMEDSC","");
define('_MD_AM_MAXUNAME','Longitud máxima permitida para el nombre de usuario');
define("_MD_AM_MAXUNAMEDSC","");
define('_MD_AM_GENERAL','Configuración general');
define('_MD_AM_USERSETTINGS','Configuración del usuario');
define('_MD_AM_ALLWCHGMAIL','¿Permitir a los usuarios cambiar su dirección de correo?');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','Bloqueo de IP');
define('_MD_AM_BADEMAILS','Especifique qué cuentas de correo no estarán disponibles');
define('_MD_AM_BADEMAILSDSC','Separar cada una con una <b>|</b>, case insensitive, regex enabled.');
define('_MD_AM_BADUNAMES','Especifique qué nombres de usuario no estarán disponibles');
define('_MD_AM_BADUNAMESDSC','Separar cada uno con un <b>|</b>, case insensitive, regex enabled.');
define('_MD_AM_DOBADIPS','¿Habilitar bloqueo de IP?');
define('_MD_AM_DOBADIPSDSC','Si lo activa podrá especificar a qué direcciones IP podrá denegarle el acceso.');
define('_MD_AM_BADIPS','Especifique qué direcciones IP deberían ser bloqueadas.<br />Separar cada una con un <b>|</b>, case insensitive, regex enabled.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc permite deshabilitar visitantes con un IP que empieza con aaa.bbb.ccc<br />aaa.bbb.ccc$ permite deshabilitar visitantes con un IP que termina con  aaa.bbb.ccc<br />aaa.bbb.ccc  permite deshabilitar visitantes con un IP que contiene aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Menú de preferencias');
define('_MD_AM_METAKEY','Palabras clave');
define('_MD_AM_METAKEYDSC','Son palabras clave que representan el contenido de su sitio. Escriba las palabras separadas por una coma o un espacio. (Ej. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','Defina para qué tipo de público es apta su web');
define('_MD_AM_METAOGEN','General');
define('_MD_AM_METAO14YRS','14 años');
define('_MD_AM_METAOREST','Restringido');
define('_MD_AM_METAOMAT','Mayores');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','Define qué contenido buscarán los buscadores y los Bots');
define('_MD_AM_INDEXFOLLOW','Indexar, Continuar');
define('_MD_AM_NOINDEXFOLLOW','No Indexar, Continuar');
define('_MD_AM_INDEXNOFOLLOW','Indexar, No Continuar');
define('_MD_AM_NOINDEXNOFOLLOW','No Indexar, No Continuar');
define('_MD_AM_METAAUTHOR','Meta Autor');
define('_MD_AM_METAAUTHORDSC','Defina el nombre del autor del documento que está siendo leído. Los formatos soportados incluyen el nombre, dirección del administrador, webmaster, nombre de la compañia o URL.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','Defina cualquier estado de copyright del que usted desee informar acerca de los documentos de su sitio.');
define('_MD_AM_METADESC','Meta Descripción');
define('_MD_AM_METADESCDSC','Es una descripción general del contenido de su sitio');
define('_MD_AM_METAFOOTER','Meta Tags y pie de página');
define('_MD_AM_FOOTER','Pie de página');
define('_MD_AM_FOOTERDSC','Asegúrese de que los enlaces comiencen con http://, de otra forma no funcionarán correctamente.');
define('_MD_AM_CENSOR','Censura de palabras');
define('_MD_AM_DOCENSOR','¿Activar el censor de palabras no deseadas?');
define('_MD_AM_DOCENSORDSC','Palabras que serán censuradas si el censor está activo. Esta opción puede desactivarse para acelerar la velocidad del sitio.');
define('_MD_AM_CENSORWRD','Palabras a censurar');
define('_MD_AM_CENSORWRDDSC','Ingrese las palabras a censurar en los envíos.<br />Separadas con un <b>|</b>, case insensitive.');
define('_MD_AM_CENSORRPLC','Las palabras censuradas serán reemplazadas con:');
define('_MD_AM_CENSORRPLCDSC','Las palabras censuradas serán reemplazadas con los caracteres que usted indique');

define('_MD_AM_SEARCH','Opciones de búsqueda');
define('_MD_AM_DOSEARCH','¿Activar búsquedas globales?');
define('_MD_AM_DOSEARCHDSC','Permitir buscar en envíos/ítems del sitio completo.');
define('_MD_AM_MINSEARCH','Longitud mínima de palabra');
define('_MD_AM_MINSEARCHDSC','Para poder realizar una búsqueda la palabra usada tendrá como mínimo una longitud de:');
define('_MD_AM_MODCONFIG','Opciones de configuración del módulo');
define('_MD_AM_DSPDSCLMR','¿Mostrar condiciones de registro?');
define('_MD_AM_DSPDSCLMRDSC','Seleccione sí para mostrar las condiciones de registro en la página de registro');
define('_MD_AM_REGDSCLMR','Condiciones de registro');
define('_MD_AM_REGDSCLMRDSC','Defina el texto que se mostrará como condiciones de registro');
define('_MD_AM_ALLOWREG','¿Permitir el registro de nuevos usuarios?');
define('_MD_AM_ALLOWREGDSC','Seleccione sí para aceptar el registro de nuevos usuarios');
define('_MD_AM_THEMEFILE','¿Comprobar cambios en las plantillas? (templates)');
define('_MD_AM_THEMEFILEDSC','Si activa este parámetro podrá ver aplicados inmediatamente los cambios realizados a su diseño o plantilla. Desactívelo una vez concluidas las modificaciones.');
define('_MD_AM_CLOSESITE','¿Cerrar el sitio?');
define('_MD_AM_CLOSESITEDSC','Seleccione sí para cerrar su sitio. Sólo los usuarios incluidos en los grupos seleccionados tendrán acceso a él. ');
define('_MD_AM_CLOSESITEOK','Seleccione los grupos que tienen permitido el acceso mientras el sitio permanece cerrado.');
define('_MD_AM_CLOSESITEOKDSC','Los usuarios del grupo Administradores siempre tendrán el acceso permitido.');
define('_MD_AM_CLOSESITETXT','Razón para el cierre temporal del sitio');
define('_MD_AM_CLOSESITETXTDSC','El texto que se presentará mientras el sitio permanezca cerrado.');
define('_MD_AM_SITECACHE','Caché ampliado');
define('_MD_AM_SITECACHEDSC','Haga uso del caché para el contenido completo del sitio durante un período específico de tiempo. Su buen uso incrementará el rendimiento del sitio. Además, configurando el caché ampliado anulará el control del caché a nivel de módulo, bloque, y a nivel de caché de ítems del módulo si existiera.');
define('_MD_AM_MODCACHE','Caché de módulos');
define('_MD_AM_MODCACHEDSC','Haga uso del caché para los contenidos de un módulo concreto y por un período específico de tiempo para incrementar el rendimiento del mismo. Configurando el caché ampliado anulará el caché a nivel del ítem del módulo si existiera.');
define('_MD_AM_NOMODULE','No se encontró módulo que haga uso del caché.');
define('_MD_AM_DTPLSET','Juego de plantillas por defecto (Template set)');
define("_MD_AM_DTPLSETDSC","");
define('_MD_AM_SSLLINK','URL de donde está ubicada la página de ingreso SSL');
define("_MD_AM_SSLLINKDSC","");

// added for mailer
define("_MD_AM_MAILER","Configuración del correo");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","Dirección del remitente");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","Nombre del remitente");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","Usuario remitente");
define("_MD_AM_MAILFROMUIDDESC","Cuando el sistema envía un mensaje privado, ¿Qué usuario debería aparecer como remitente del mismo?");
define("_MD_AM_MAILERMETHOD","Método de envío del correo");
define("_MD_AM_MAILERMETHODDESC","El método usado por defecto es \"mail\" [ phpmail() ], utilice los otros <b>únicamente</b> si tiene problemas.");
define("_MD_AM_SMTPHOST","SMTP host(s)");
define("_MD_AM_SMTPHOSTDESC","Listado de servidores SMTP en donde intentará la conexión <br /> ej. smtp.test.com");
define("_MD_AM_SMTPUSER","SMTPAuth nombre de usuario");
define("_MD_AM_SMTPUSERDESC","Nombre de Usuario para conectar a un host SMTP con SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth password");
define("_MD_AM_SMTPPASSDESC","La contraseña para conectar a un host SMTP con SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Ruta para sendmail");
define("_MD_AM_SENDMAILPATHDESC","La ruta hacia el programa sendmail (o un sustituto) en el servidor.");
define("_MD_AM_THEMEOK","Diseños seleccionables");
define("_MD_AM_THEMEOKDSC","Elija los diseños/temas que podrán seleccionar los usuarios");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT","SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","Dirección del servidor soap.");
define("_MD_AM_SOAP_PROVISION","SOAP - Provision");
define("_MD_AM_SOAP_PROVISIONDESC","If you want the new user provisioned, say 'yes'");
define("_MD_AM_SOAP_PROVISIONGROUP","SOAP - Rank to Provision");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","This is the ranks a new user from the soap server is put in.");

define("_MD_AM_SOAP_WSDL","SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","Si necesita un servicio soap wdsl active esta opción.");
define("_MD_AM_SOAP_USERNAME","SOAP - Nombre usuario SOAP");
define("_MD_AM_SOAP_USERNAMEDESC","Este es el nombre de usuario de su cuenta en el servidor soap.");
define("_MD_AM_SOAP_PASSWORD","SOAP - Contraseña SOAP");
define("_MD_AM_SOAP_PASSWORDDESC","Si tiene una contraseña para el servicio soap escríbala aquí.");
define("_MD_AM_SOAP_KEEPCLIENT","SOAP - Cliente despierto");
define("_MD_AM_SOAP_KEEPCLIENTDESC","Mantener el servicio conectado.");
define("_MD_AM_SOAP_FILTERPERSON","SOAP - Cuentas espaciles");
define("_MD_AM_SOAP_FILTERPERSONDESC","Cuentas especiales que usan autenticación Xoops.");
define("_MD_AM_SOAP_CLIENTPROXYHOST","SOAP - Proxy Hostname");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","SOAP Servers Proxy Server.");
define("_MD_AM_SOAP_CLIENTPROXYPORT","SOAP - Puerto Proxy");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","SOAP Servers Proxy Server Port Number <br>ie: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME","SOAP - Proxy Username");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","SOAP Servers Proxy Server Username");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD","SOAP - Proxy Password");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","SOAP Servers Proxy Server Password.");
define("_MD_AM_SOAP_SOAP_TIMEOUT","SOAP - SOAP Timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT","SOAP - SOAP Response Timeout");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define("_MD_AM_SOAP_FIELDMAPPING","Xoops-Auth server fields mapping");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Format [Xoops Database field]=[Auth system SOAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separar cada uno con |" .
		"<br><br>!! Sólo usuarios avanzados !!");

		
		// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","Base de datos XOOPS");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Directorio LDAP estándar");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");
define("_MD_AM_AUTH_CONFOPTION_SOAP","Autenticación Xoops Soap");
define("_MD_AM_AUTHENTICATION","Opciones de autentificación");
define("_MD_AM_AUTHMETHOD","Método de autentificación");
define("_MD_AM_AUTHMETHODDESC","¿Qué método de autentificación desea usar para el ingreso de los usuarios.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Nombre del campo Correo");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","El nombre del atributo E-MAIL en su árbol de directorio LDAP.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Nombre común del campo del nombre");
define("_MD_AM_LDAP_NAME_ATTR_DESC","El nombre del atributo del nombre común en su directorio LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Nombre del campo del apellido");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","El nombre del apellido en su directorio LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Nombre del campo nombre facilitado");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","El nombre facilitado en su directorio LDAP.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","La base DN (Distinguished Name) de su directorio LDAP");
define("_MD_AM_LDAP_PORT","LDAP - Puerto");
define("_MD_AM_LDAP_PORT_DESC","El puerto necesario para acceder a su directorio LDAP.");
define("_MD_AM_LDAP_SERVER","LDAP - Nombre del servidor");
define("_MD_AM_LDAP_SERVER_DESC","El nombre de su directorio LDAP en el servidor.");

define("_MD_AM_LDAP_MANAGER_DN","DN del administrador LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC","La DN del usuario que permite hacer búsquedas (ej: administrador)");
define("_MD_AM_LDAP_MANAGER_PASS","Contraseña del administrador de la LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","La contraseña del usuario permite realizar búsquedas");
define("_MD_AM_LDAP_VERSION","Versión del protocolo  LDAP");
define("_MD_AM_LDAP_VERSION_DESC","Versión del protocolo LDAP : 2 ó 3");
define("_MD_AM_LDAP_USERS_BYPASS","Ususarios con permiso para bypass LDAP authentication");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Autentificación de usuarios mediante el método nativo de XOOPS");	 

define("_MD_AM_LDAP_USETLS"," Usar conexión TLS");	
define("_MD_AM_LDAP_USETLS_DESC","Usar una conexión TLS (Transport Layer Security). TLS usa como puerto estándar el 389<BR>" .
								  " y la versión de LDAP debe ser configurado como 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","El atributo LDAP que usará para buscar al usuario");			 
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","Cuando el uso de nombre de usuario en la opción DN es afirmativa, debe corresponder con el nombre de login de XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Nombre de Login usado en la DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","El nobre de Login de XOOPS es usado en la LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>La entrada es directamente leída en el servidor LDAP sin buscar");

define("_MD_AM_LDAP_FILTER_PERSON","El filtro de búsqueda LDAP para buscar al usuario");			 
define("_MD_AM_LDAP_FILTER_PERSON_DESC","Filtro especial LDAP para buscar usuario. @@loginname@@ es remplazado por el nombre de login<br> DEBE ESTAR EN BLANCO SI NO SABE DE QUÉ SE TRATA' !" .
		"<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");							  

define("_MD_AM_LDAP_DOMAIN_NAME","Nombre del dominio");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Nombre de dominio de Windows. Para servidores ADS y NT solamente");

define("_MD_AM_LDAP_PROVIS","Aprovisionamiento automático de cuentas Xoops");
define("_MD_AM_LDAP_PROVIS_DESC","Crear base de datos del usuario en caso de no existir");

define("_MD_AM_LDAP_PROVIS_GROUP","Grupo afectado por defecto");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","Los nuevos usuarios serán asignado a estos grupos");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describir aquí el mapping entre la base de datos de Xoops y el sistema de autentificación LDAP." .
		"<br /><br />Formato [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br />por ejemplo : email=mail" .
		"<br />Separ cada uno de ellos con |" .
		"<br /><br />!! Para usuarios avanzados !!");

define("_MD_AM_LDAP_PROVIS_UPD","Mantenimiento del aprovisionamiento de cuentas Xoops");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","La cuenta de usuario Xoops será sincronizada siempre con el servidor de autentificación");


define("_MD_AM_CPANEL","Panel de control");
define("_MD_AM_CPANELDSC","Lado del administrador");

define("_MD_AM_WELCOMETYPE","Mensaje de bienvenida");
define("_MD_AM_WELCOMETYPE_DESC","Forma en la que se enviará el mensaje de bienvenida una vez se registre un nuevo usuario.");
define("_MD_AM_WELCOMETYPE_EMAIL","Correo");
define("_MD_AM_WELCOMETYPE_PM","Mensaje");
define("_MD_AM_WELCOMETYPE_BOTH","Corre y mensaje");
define("_MD_AM_MODULEPREF","Preferencias de módulos");

// Preference module system

define('_AM_SYSTEM_PREFERENCES_SETTINGS','Ajustes del módulo sistema');
?>