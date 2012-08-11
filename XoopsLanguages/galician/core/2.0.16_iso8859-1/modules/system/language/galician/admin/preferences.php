<?php
// $Id: preferences.php 733 2006-09-11 20:42:29Z pemen $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","Configuración do sitio");
define("_MD_AM_SITENAME","Nome do sitio");
define("_MD_AM_SLOGAN","Lema para o sitio");
define("_MD_AM_ADMINML","Enderezo do administrador");
define("_MD_AM_LANGUAGE","Linguaxe por defecto");
define("_MD_AM_STARTPAGE","Módulo para a páxina de inicio");
define("_MD_AM_NONE","Ningún");
define("_MD_AM_SERVERTZ","Fuso horario do servidor");
define("_MD_AM_DEFAULTTZ","Fuso horario por defecto");
define("_MD_AM_DTHEME","Deseño por defecto");
define("_MD_AM_THEMESET","Deseño");
define("_MD_AM_ANONNAME","Nome de usuario para anónimos");
define("_MD_AM_MINPASS","Tamanño mínimo de contrasinal");
define("_MD_AM_NEWUNOTIFY","Notificar por correo o rexistro dun novo usuario?");
define("_MD_AM_SELFDELETE","Permitir aos usuarios poder borrar a súa conta?");
define("_MD_AM_LOADINGIMG","Amosar cargando... imaxe?");
define("_MD_AM_USEGZIP","Usar compresión gzip?");
define("_MD_AM_UNAMELVL","Seleccionar o nivel de filtro para o nome de usuario");
define("_MD_AM_STRICT","Estrito (só letras e número)");
define("_MD_AM_MEDIUM","Medio");
define("_MD_AM_LIGHT","Lixeiro (recomendado para caractere múltiples)");
define("_MD_AM_USERCOOKIE","Nome para as cookies de usuario.");
define("_MD_AM_USERCOOKIEDSC","Esta cookie contén o nome do usuario e é gardada no seu PC por un ano(se o usuario así o quer). Se o usuario tena activa, o nome de usuario aparece automáticamnete na caixa de de login.");
define("_MD_AM_USEMYSESS","Usar sesión personalizada");
define("_MD_AM_USEMYSESSDSC","Selecciona si para personalizar valores de sesión.");
define("_MD_AM_SESSNAME","Nome de sesión");
define("_MD_AM_SESSNAMEDSC","O nome de sesión (Valido só cando 'usar sesión personalizada' está activada)");
define("_MD_AM_SESSEXPIRE","Finalización da sesión");
define("_MD_AM_SESSEXPIREDSC","Máxima duración da sesión en minutos (Valido so cando 'usar sesión personalizada' está activada. Funciona só coa versión PHP4.2.0 ou posterior.)");
define("_MD_AM_BANNERS","Activar publicidade con banner?");
define("_MD_AM_MYIP","O teu enderezo IP");
define("_MD_AM_MYIPDSC","Esta IP non contará nos clics sobre os banner");
define("_MD_AM_ALWDHTML","Etiquetas HTML permitidas en tódolos textos.");
define("_MD_AM_INVLDMINPASS","Valor non válido para mínimo tamaño de contrasinal.");
define("_MD_AM_INVLDUCOOK","Nome non válido para as cookies.");
define("_MD_AM_INVLDSCOOK","Nome non válido para sesión cookies.");
define("_MD_AM_INVLDSEXP","Valor non válido para duración de sesión.");
define("_MD_AM_ADMNOTSET","Non hai enderezo do administrador.");
define("_MD_AM_YES","Si");
define("_MD_AM_NO","Non");
define("_MD_AM_DONTCHNG","Non cambiar!");
define("_MD_AM_REMEMBER","Lembre pór a chmod 666 este ficheiro para que o sistema poida escribilo correctamente.");
define("_MD_AM_IFUCANT","Se non podes cambiar os permisos podes editar o ficheiro a man.");


define("_MD_AM_COMMODE","Modo de amosar os comentarios por defecto");
define("_MD_AM_COMORDER","Orde dos comentarios por defecto ");
define("_MD_AM_ALLOWHTML","Permitir HTML nos comentarios dos usuarios?");
define("_MD_AM_DEBUGMODE","Modo depuración");
define("_MD_AM_DEBUGMODEDSC","Moitas opcións de depuración. Un sitio en funcionamento debería ter isto apgado.");
define("_MD_AM_AVATARALLOW","Permitir os usuarios subir avatares personais?");
define('_MD_AM_AVATARMP','Minimo de publicacións');
define('_MD_AM_AVATARMPDSC','Introduza o número mínimo de publicacións para poder subir avatar personalizado');
define("_MD_AM_AVATARW","Máxima anchura de avatar(pixel)");
define("_MD_AM_AVATARH","Máxima altura de avatar(pixel)");
define("_MD_AM_AVATARMAX","Tamaño max da imaxe de avatar(byte)");
define("_MD_AM_AVATARCONF","Personalizar configuración de avatar");
define("_MD_AM_CHNGUTHEME","Cambiar o deseño de tódolos usarios");
define("_MD_AM_NOTIFYTO","Seleccionar grupo ao que se lle notificarán novos rexistros");
define("_MD_AM_ALLOWTHEME","Permitir aos usuarios elixir deseño?");
define("_MD_AM_ALLOWIMAGE","Permitir aos usuarios amosar imaxes nos textos?");

define("_MD_AM_USERACTV","Precisa activación polo usuario (recomendado)");
define("_MD_AM_AUTOACTV","Activar automáticamente");
define("_MD_AM_ADMINACTV","Activación polos administradores");
define("_MD_AM_ACTVTYPE","Escolla o tipo de activación para os novos usuarios");
define("_MD_AM_ACTVGROUP","Seleccione o grupo o que lle chegan emails de activación");
define("_MD_AM_ACTVGROUPDSC","Válido cando 'Activación polos administradores' está seleccionada");
define('_MD_AM_USESSL','Usar SSL para login?');
define('_MD_AM_SSLPOST','Nome da variable SSL Post');
define('_MD_AM_SSLPOSTDSC','O nome da variable para transferir o valor da sesión via POST. Se non está seguro,poña calquera nome difícil de adiviñar.');
define('_MD_AM_DEBUGMODE0','Apagado');
define('_MD_AM_DEBUGMODE1','Habilitar depuración (inline mode)');
define('_MD_AM_DEBUGMODE2','Habilitar depuración (popup mode)');
define('_MD_AM_DEBUGMODE3','Smarty Templates Debug');
define('_MD_AM_MINUNAME','Lonxitude mínima de nome de usuario requerida');
define('_MD_AM_MAXUNAME','Lonxitude máxima de nome de usuario permitida');
define('_MD_AM_GENERAL','Configuración xeral');
define('_MD_AM_USERSETTINGS','Configuración de información de usuario');
define('_MD_AM_ALLWCHGMAIL','Permitir aos usuarios cambiar o enderezo de email?');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','Exclusión de IP (ban)');
define('_MD_AM_BADEMAILS','Introduza enderezos de correo que non poden ser usados polos usuarios');
define('_MD_AM_BADEMAILSDSC','Separe cada un cun <b>|</b>, insensible a maiúsculas, regex permitido.');
define('_MD_AM_BADUNAMES','Introduza nomes que non poden ser usados polos usuarios');
define('_MD_AM_BADUNAMESDSC','Separe cada un cun <b>|</b>, insensible a maiúsculas, regex permitido.');
define('_MD_AM_DOBADIPS','Permitir exclusión de IP (bans)?');
define('_MD_AM_DOBADIPSDSC','Os usuarios cunha determinada IP non poderán entrar no sitio');
define('_MD_AM_BADIPS','Introduza dirección IP que quere excluir.<br />Separe cada un cun <b>|</b>, insensible a maiúsculas, regex permitido.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc inhabilitará visitas cunha IP que comece por aaa.bbb.ccc<br />aaa.bbb.ccc$ deshabilitará visitas cunha IP que remate en aaa.bbb.ccc<br />aaa.bbb.ccc deshabilitará visitas que na IP conteñan aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Principal de configuración');
define('_MD_AM_METAKEY','Meta Keywords');
define('_MD_AM_METAKEYDSC','As keywords meta tag son unha serie de palabras que definen o contido do sitio. Escriba cada palabra separa por comas ou espazos. (Ex. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','As rating meta tag definen a idade mínima é tipo de contido do sitio');
define('_MD_AM_METAOGEN','Xeral');
define('_MD_AM_METAO14YRS','14 anos');
define('_MD_AM_METAOREST','Restrinxido');
define('_MD_AM_METAOMAT','Adultos');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','As Robots Tag indican aos buscadores que información deben ter en conta');
define('_MD_AM_INDEXFOLLOW','Index, Follow');
define('_MD_AM_NOINDEXFOLLOW','No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW','Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW','No Index, No Follow');
define('_MD_AM_METAAUTHOR','Meta Author');
define('_MD_AM_METAAUTHORDSC','As author meta tag indican o nome do autor do sitio. Os formatos de datos soportados son o nome, email do webmaster, organización name ou URL.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','The copyright meta tag define o tipo de copyright que co que se publica o material propio.');
define('_MD_AM_METADESC','Meta Description');
define('_MD_AM_METADESCDSC','As description meta tag é unha descrición xeral do contido da páxina, que aparece nos buscadores');
define('_MD_AM_METAFOOTER','Meta Tags e pé das páxinas');
define('_MD_AM_FOOTER','Pé de páxina');
define('_MD_AM_FOOTERDSC','Asegúrese de escribir as ligazóns comezando por http://, doutro xeito as ligazóns non funcionarán correctamente nas páxinas dos módulos.');
define('_MD_AM_CENSOR','Opcións do censurado de palabras');
define('_MD_AM_DOCENSOR','Permitir censurar palabras indebidas?');
define('_MD_AM_DOCENSORDSC','As palabras serán censuradas se esta opción está activada. Pode ser desactivada para mellorar a velocidade de carga do sitio.');
define('_MD_AM_CENSORWRD','Palabras que censurar');
define('_MD_AM_CENSORWRDDSC','Introduza as palabras que deben censurarse nos textos dos usuarios.<br />Separe cada un cun <b>|</b>, insensible a maiúsculas.');
define('_MD_AM_CENSORRPLC','As palabras censuradas serán substituidas por:');
define('_MD_AM_CENSORRPLCDSC','As poalabras censuradas serán substituidas polos caracteres introducidos na caixa');

define('_MD_AM_SEARCH','Opcións de procura');
define('_MD_AM_DOSEARCH','Permitir procuras globais?');
define('_MD_AM_DOSEARCHDSC','Permitir procuras de textos/obxectos do seu sitio.');
define('_MD_AM_MINSEARCH','Lonxitude mínima de palabra');
define('_MD_AM_MINSEARCHDSC','Introduza o tamaño mínimo da palabra que vai ser usada para realizar procuras');
define('_MD_AM_MODCONFIG','Opcións de configuración de módulos');
define('_MD_AM_DSPDSCLMR','Amosar texto de descarga de responsabilidade?');
define('_MD_AM_DSPDSCLMRDSC','Selecciona "Si" para mostrar o texto de descarga de responsabilidade na páxina de rexistro');
define('_MD_AM_REGDSCLMR','Descarga de responsabilidade');
define('_MD_AM_REGDSCLMRDSC','Introduza o texto que da descarga de responsabilidades');
define('_MD_AM_ALLOWREG','Permitir rexistro de novos usuarios?');
define('_MD_AM_ALLOWREGDSC','Seleccione "Si" para admitir novos usuarios');
define('_MD_AM_THEMEFILE','Comprobar carautas buscando modificacións?');
define('_MD_AM_THEMEFILEDSC','Se esta opción está activada, as carautas modificadas recompilaránse automaticamente cando sexan mostradas. Deber ter esta opción desactivada nun sitio en funcionamento.');
define('_MD_AM_CLOSESITE','Pechar sitio?');
define('_MD_AM_CLOSESITEDSC','Seleccione "Si" para pechar o sitio e que só os grupos de usuarios seleccionados poidan entrar. ');
define('_MD_AM_CLOSESITEOK','Escolla os grupos que poderán acceder ao sitio cando estea pechado.');
define('_MD_AM_CLOSESITEOKDSC','Usuarios no grupo por defecto webmaster teñen acceso garantido.');
define('_MD_AM_CLOSESITETXT','Razón de peche do sitio');
define('_MD_AM_CLOSESITETXTDSC','Texto amosado os usuarios o tentar entrar durante o peche.');
define('_MD_AM_SITECACHE','Site-wide Cache');
define('_MD_AM_SITECACHEDSC','Usar a caché de todo o sitio durante un periodo de tempo definido para mellorar o rendimento. A configuración do site-wide cache imporase sobre as configuracións de caché de módulos, bloques e obxectos de módulo.');
define('_MD_AM_MODCACHE','Module-wide Cache');
define('_MD_AM_MODCACHEDSC','Usar a caché dos módulos durante un periodo de tempo definido para mellorar o rendimento. Aconfiguración do module-wide cache imporase sobre as configuracións caché dos obxectos de módulo.');
define('_MD_AM_NOMODULE','Non hai módulo que poida usarse na caché.');
define('_MD_AM_DTPLSET','Carauta por defecto');
define('_MD_AM_SSLLINK','URL onde está a páxina de login SSL');

// added for mailer
define("_MD_AM_MAILER","Configuración do correo");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","DE enderezo");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","DE nome");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","DE usuario");
define("_MD_AM_MAILFROMUIDDESC","Cando o sistema envía unha mensaxe privada, que usuario debe aparecer como remitente?");
define("_MD_AM_MAILERMETHOD","Método de envío de correo");
define("_MD_AM_MAILERMETHODDESC","Método usado para envío de correo. Por defecto é \"mail\", use outros só se ten problemas.");
define("_MD_AM_SMTPHOST","SMTP servidor(es)");
define("_MD_AM_SMTPHOSTDESC","Lista de servidores SMTP os que tentar conectarse.");
define("_MD_AM_SMTPUSER","Nome de usuario de SMTPAuth");
define("_MD_AM_SMTPUSERDESC","Nome de usuario para conectar co servidor de SMTP con SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth contrasinal");
define("_MD_AM_SMTPPASSDESC","Contrasinal para conectar co servidor SMTP con SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Ruta a sendmail");
define("_MD_AM_SENDMAILPATHDESC","Ruta o programa sendmail(ou substituto) no servidor.");
define("_MD_AM_THEMEOK","Carautas seleccionabeis");
define("_MD_AM_THEMEOKDSC","Escolla as carautas que os usuarios poden elixir como carauta por defecto");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","XOOPS Database");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Standard LDAP Directory");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION","Opcións de autentificación");
define("_MD_AM_AUTHMETHOD","Método de autentificación");
define("_MD_AM_AUTHMETHODDESC","Que método de autentificación lle gustaría que fose usado no ingreso de usuarios.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Nome do campo correo");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","Nome do atributo E-Mail no directorio raiz do LDAP.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Nome Común do campo nome");
define("_MD_AM_LDAP_NAME_ATTR_DESC","O nome do atributo Nome Común no directorio LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Nome do campo Apelido");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","O nome do atributo Apelido no directorio LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Nome do campo Nome Dado");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","O nome do atributo Nome Dado no directorio LDAP.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","A base DN (Distinguished Name) no directorio LDAP.");
define("_MD_AM_LDAP_PORT","LDAP - Número de porto");
define("_MD_AM_LDAP_PORT_DESC","O número do porto de acceso ao directorio LDAP.");
define("_MD_AM_LDAP_SERVER","LDAP - Nome do servidor");
define("_MD_AM_LDAP_SERVER_DESC","Nome do directorio LDAP no seu servidor.");

define("_MD_AM_LDAP_MANAGER_DN","DN do xestor LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC","O DN do usuario permite facer procuras (ex. manager)");
define("_MD_AM_LDAP_MANAGER_PASS","Contrasinal do xestor LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","O contrasinal de usuario permite facer procuras");
define("_MD_AM_LDAP_VERSION","LDAP Version protocolo");
define("_MD_AM_LDAP_VERSION_DESC","LDAP Version do protocolo : 2 ou 3");
define("_MD_AM_LDAP_USERS_BYPASS"," Xoops User(s) bypass LDAP Authentication");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Usuario(s) de Xoops poden evitar o ingreso por LDAP. Para ingresar automaticamente en XOOPS<br>separe cada nome de ingreso coa |");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","Usar atributo LDAP para búsqueda de usuario");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","Cando o uso don nome de ingreso na opción DN está activado, debe cadrar co nome de ingreso de XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Login name use in the DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");

define("_MD_AM_LDAP_FILTER_PERSON","The search filter LDAP query to find user");
define("_MD_AM_LDAP_FILTER_PERSON_DESC","Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
		"<br>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","Nome do dominio");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Nome de dominio de windows. só para ADS e NT Server");

define("_MD_AM_LDAP_PROVIS","Creación automática de conta xoops");
define("_MD_AM_LDAP_PROVIS_DESC","Crear base de datos de usuario xoops se non existe");

define("_MD_AM_LDAP_PROVIS_GROUP","Grupo por defecto");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","O novo usuario é asignado a este grupo");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Formato [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>por exemplo : email=mail" .
		"<br>Separe cada un cun |" .
		"<br><br>!! Para usuarios avanzados !!");
		
define("_MD_AM_LDAP_PROVIS_UPD","Maintain xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","A conta de usuario Xoops está sempre sincronizada coa do servidor de Autentificación");
		

		
?>