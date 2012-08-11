<?php
// $Id: preferences.php 928 2007-08-04 14:37:22Z pemen $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","Preferencias");
define("_MD_AM_SITENAME","Nome do Sitio");
define("_MD_AM_SLOGAN","Eslogan ou Lema");
define("_MD_AM_ADMINML","Correo do Administrador");
define("_MD_AM_LANGUAGE","Linguaxe por Defecto");
define("_MD_AM_STARTPAGE","Módulo para a páxina de inicio");
define("_MD_AM_NONE","Nada");
define("_MD_AM_SERVERTZ","Zona Horaria do Servidor");
define("_MD_AM_DEFAULTTZ","Zona Horaria por Defecto");
define("_MD_AM_DTHEME","Deseño por Defecto");
define("_MD_AM_THEMESET","Deseños (Theme Set)");
define("_MD_AM_ANONNAME","Nome de Usuario para os non rexistrados");
define("_MD_AM_MINPASS","Tamaño mínimo requirido para a contrasinal");
define("_MD_AM_NEWUNOTIFY","¿Recibir notificación cada vez que un usuario se rexistre no sitio?");
define("_MD_AM_SELFDELETE","¿Permitirlle ós usuarios Borrar a súa propia conta?");
define("_MD_AM_LOADINGIMG","¿Mostrar imaxe de Cargando....?");
define("_MD_AM_USEGZIP","¿Usar compresión gzip?  PHP version 4.0.5 ou superior recomendada. Asegúrese antes de activalo.");
define("_MD_AM_UNAMELVL","Nivel de permisibilidade para os nomes dos usuarios");
define("_MD_AM_STRICT","Estricto (somentes letras e números)");
define("_MD_AM_MEDIUM","Medio");
define("_MD_AM_LIGHT","Liviano (recomendado para caracteres multi-byte)");
define("_MD_AM_USERCOOKIE","Nome da Cookie para o usuario.");
define("_MD_AM_USERCOOKIEDSC","Este cookie contén somentes un nome de usuario que é gardado no PC durante todo un ano (Se o usuario o desexa). Se o usuario ten este cookie, o nome de usuario será automáticamente insertado no Bloque de Ingreso.");
define("_MD_AM_USEMYSESS","Usar Sesión persoalizada");
define("_MD_AM_USEMYSESSDSC","Seleccione si para persoalizar os valores relacioados coa sesión.");
define("_MD_AM_SESSNAME","Nome da Sesión");
define("_MD_AM_SESSNAMEDSC","O Nome da Sesión (Válido somentes cando 'Usar Sesión persoalizada' está activado)");
define("_MD_AM_SESSEXPIRE","Expiración da Sesión ");
define("_MD_AM_SESSEXPIREDSC","Máxima duración en minutos de unha sesión (Válido somentes cando a opción 'Usar Sesión persoalizada' está activada). Traballa únicamente cando vostede está usando PHP4.2.0 ou superior.");
define("_MD_AM_BANNERS","¿Activar banners?");
define("_MD_AM_MYIP","A súa IP. Esta información permite que non se lle compute nas impresións dos banners");
define("_MD_AM_MYIPDSC","Este IP non será contado como unha impresión para os banners");
define("_MD_AM_ALWDHTML","HTML permitidos en tódolos envíos.");
define("_MD_AM_INVLDMINPASS","Valor Inválido para a mínima lonxitude do contrasinal.");
define("_MD_AM_INVLDUCOOK","Valor Inválido para o nome da Cookie do usuario.");
define("_MD_AM_INVLDSCOOK","Valor Inválido para o nome da Cookie da sesión.");
define("_MD_AM_INVLDSEXP","Valor Inválido para o tempo de expiración");
define("_MD_AM_ADMNOTSET","Correo do admin non configurado");
define("_MD_AM_YES","Si");
define("_MD_AM_NO","Non");
define("_MD_AM_DONTCHNG","¡Non cambiar!");
define("_MD_AM_REMEMBER","Lembre facerlle un chmod 666 a este arquivo para permitirlle ó sistema modificalo axeitadamente.");
define("_MD_AM_IFUCANT","Se non pode cambiar o permiso deberá editalo manualmente.");


define("_MD_AM_COMMODE","Modo por defecto para mostrar os comentarios");
define("_MD_AM_COMORDER","Orde dos comentarios mostrados por Defecto");
define("_MD_AM_ALLOWHTML","¿Permitir HTML en envíos de usuarios?");
define("_MD_AM_DEBUGMODE","Modo debug");
define("_MD_AM_DEBUGMODEDSC","Distintas opcións de Debug. Un sitio web de producción ten que ter Desactivada esta opción.");
define("_MD_AM_AVATARALLOW","¿Permitir subir avatares propios?");
define('_MD_AM_AVATARMP','Envíos mínimos requiridos');
define('_MD_AM_AVATARMPDSC','Ingrese o número mínimo de envíos requiridos para poder Subir un avatar propio');
define("_MD_AM_AVATARW","Máxima anchura do Avatar");
define("_MD_AM_AVATARH","Máxima altura do Avatar");
define("_MD_AM_AVATARMAX","Tamaño máximo para o Avatar (bytes)");
define("_MD_AM_AVATARCONF","Configuración de Avatares");
define("_MD_AM_CHNGUTHEME","Cambiar o tema a tódolos usuarios");
define("_MD_AM_NOTIFYTO","Notificar ó Grupo:");
define("_MD_AM_ALLOWTHEME","¿Permitir ós usuarios seleccionar o Deseño?");
define("_MD_AM_ALLOWIMAGE","¿Permitir ós usuarios mostrar arquivos de imaxes nos envíos?");

define("_MD_AM_USERACTV","Require activación do usuario (recomendado)");
define("_MD_AM_AUTOACTV","Activar automáticamente");
define("_MD_AM_ADMINACTV","Activación por Administradores");
define("_MD_AM_ACTVTYPE","Indique o tipo de activación para os usuarios novos rexistrados");
define("_MD_AM_ACTVGROUP","Enviar correo de activación a:");
define("_MD_AM_ACTVGROUPDSC","Válido somentes cando a Activación por Administradores sexa seleccioada");
define('_MD_AM_USESSL','¿Usar SSL para o login?');
define('_MD_AM_SSLPOST','Nome da variable SSL');
define('_MD_AM_SSLPOSTDSC','O nome da variable usado para transferir o valor da sesión vía POST. Se non está seguro, configure calquera nome que sexa difícil.');
define('_MD_AM_DEBUGMODE0','Apagado');
define('_MD_AM_DEBUGMODE1','Activar Debug (modo inline)');
define('_MD_AM_DEBUGMODE2','Activar Debug (modo ventana emerxente)');
define('_MD_AM_DEBUGMODE3','Debug Templates Smarty');
define('_MD_AM_MINUNAME','Lonxitude mínima requirida para o nome de usuario');
define('_MD_AM_MAXUNAME','Longitud máxima permitida para o nome de usuario');
define('_MD_AM_GENERAL','Configuración Xeral');
define('_MD_AM_USERSETTINGS','Configuración do Usuario');
define('_MD_AM_ALLWCHGMAIL','¿Permitirlle ós usuarios cambiar a súa dirección de correo?');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','Bloqueo de IP');
define('_MD_AM_BADEMAILS','Especifique que contas de correo Non Estarán Dispoñibles');
define('_MD_AM_BADEMAILSDSC','Separar cada unha cun <b>|</b>, case insensitive, regex activado.');
define('_MD_AM_BADUNAMES','Especifique que nomes de usuario Non Estarán Dispoñibles');
define('_MD_AM_BADUNAMESDSC','Separar cada un cun <b>|</b>, case insensitive, regex activo.');
define('_MD_AM_DOBADIPS','¿Habilitar Bloqueo de IP?');
define('_MD_AM_DOBADIPSDSC','Se o activa poderá especificar a que direccións IP poderá denegarlle o acceso.');
define('_MD_AM_BADIPS','Especifique que direccións IP deberían ser bloqueadas.<br />Separar cada unha cun <b>|</b>, case insensitive, regex activado.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc permite deshabilitar visitantes cun IP que empeza con aaa.bbb.ccc<br />aaa.bbb.ccc$ permite deshabilitar visitantes cun IP que termina con  aaa.bbb.ccc<br />aaa.bbb.ccc  permite deshabilitar visitantes cun IP que contén aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Menú de Preferencias');
define('_MD_AM_METAKEY','Meta Keywords  (Palabras clave)');
define('_MD_AM_METAKEYDSC','Son palabras clave que representan o contido do seu sitio. Escriba as palabras separadas por una coma ou un espacio. (Ej. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','Define para qué tipo de público é apta a súa web');
define('_MD_AM_METAOGEN','Xeral');
define('_MD_AM_METAO14YRS','14 anos');
define('_MD_AM_METAOREST','Restrinxido');
define('_MD_AM_METAOMAT','Maiores');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','Define que contido buscarán os Buscadores e os Bots');
define('_MD_AM_INDEXFOLLOW','Indexar, Continuar');
define('_MD_AM_NOINDEXFOLLOW','Non Indexar, Continuar');
define('_MD_AM_INDEXNOFOLLOW','Indexar, Non Continuar');
define('_MD_AM_NOINDEXNOFOLLOW','Non Indexar, Non Continuar');
define('_MD_AM_METAAUTHOR','Meta Autor');
define('_MD_AM_METAAUTHORDSC','Define o nome do autor do documento que está sendo lido. Os formatos soportados inclúen o nome, dirección do administrador, webmaster, nome da compañía ou URL.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','Define calquira estado de copyright do que vostede desexe informar acerca dos documentos do seu sitio.');
define('_MD_AM_METADESC','Meta Descripción');
define('_MD_AM_METADESCDSC','É unha descripción xeral do contido do seu sitio');
define('_MD_AM_METAFOOTER','Meta Tags e Pe de Páxina');
define('_MD_AM_FOOTER','Pe de Páxina');
define('_MD_AM_FOOTERDSC','Asegúrese de que os enlaces comencen con http://, doutro xeito a ligazón non funcionará correctamente.');
define('_MD_AM_CENSOR','Censura de Palabras');
define('_MD_AM_DOCENSOR','¿Activar o censor de palabras non desexadas?');
define('_MD_AM_DOCENSORDSC','Palabras que serán censuradas se o censor está activo. Esta opción pode apagarse para acelerar a velocidade do sitio.');
define('_MD_AM_CENSORWRD','Palabras a Censurar');
define('_MD_AM_CENSORWRDDSC','Ingrese as palabras a censurar nos envíos.<br />Separadas cun <b>|</b>, case insensitive.');
define('_MD_AM_CENSORRPLC','As palabras censuradas serán reemplazadas con:');
define('_MD_AM_CENSORRPLCDSC','As palabras censuradas serán reemplazadas con os caracteres que vostede indique');

define('_MD_AM_SEARCH','Opcións de Búsqueda');
define('_MD_AM_DOSEARCH','¿Activar Búsquedas Globales?');
define('_MD_AM_DOSEARCHDSC','Permitir buscar en Envíos/ítems do sitio completo.');
define('_MD_AM_MINSEARCH','Lonxitude mínima de palabra');
define('_MD_AM_MINSEARCHDSC','Para poder realizar unha búsqueda a palabra usada terá como mínimo unha lonxitude de:');
define('_MD_AM_MODCONFIG','Opcións de configuración do módulo');
define('_MD_AM_DSPDSCLMR','¿Mostrar Condicións de Rexistro?');
define('_MD_AM_DSPDSCLMRDSC','Seleccione si para mostrar as condicións de Rexistro na páxina de Rexistro');
define('_MD_AM_REGDSCLMR','Condicións de Rexistro');
define('_MD_AM_REGDSCLMRDSC','Defina o Texto que se mostrará como Condicións de Rexistro');
define('_MD_AM_ALLOWREG','¿Permitir o rexistro de novos usuarios?');
define('_MD_AM_ALLOWREGDSC','Seleccione si para aceptar o rexistro de novos usuarios');
define('_MD_AM_THEMEFILE','¿Comprobar cambios nas plantillas? (templates)');
define('_MD_AM_THEMEFILEDSC','Se activa este parámetro poderá ver aplicados inmediatamente os cambios realizados ó seu diseño ou plantilla. Desactíveo unha vez concluidas las modificacións.');
define('_MD_AM_CLOSESITE','¿Pechar o sitio?');
define('_MD_AM_CLOSESITEDSC','Seleccione si para pechar o sitio. Somentes os usuarios incluidos nos grupos seleccioados terán acceso a el. ');
define('_MD_AM_CLOSESITEOK','Seleccione os grupos que teñen permitido o acceso mentras o sitio permanece Pechado.');
define('_MD_AM_CLOSESITEOKDSC','Os usuarios d grupo Administradores sempre terán o acceso garantido.');
define('_MD_AM_CLOSESITETXT','Razón para o peche temporal do sitio');
define('_MD_AM_CLOSESITETXTDSC','O texto que se presentará mentras o sitio permanezca pechado.');
define('_MD_AM_SITECACHE','Caché Ampliada');
define('_MD_AM_SITECACHEDSC','Haga uso del Caché para el contenido completo del sitio durante un período específico de tiempo. Su buen uso incrementará el rendimiento del sitio. Además, configurando el Caché Ampliado anulará el control del caché a nivel de módulo, bloque, y a nivel de caché de ítems del módulo si existiera.');
define('_MD_AM_MODCACHE','Caché de Módulos');
define('_MD_AM_MODCACHEDSC','Faga uso da Caché para os contidos dun módulo concreto e por un período específico de tempo para incrementar o rendemento do mesmo. Configurando a Caché Ampliada anulará a caché a nivel do ítem do módulo se existira.');
define('_MD_AM_NOMODULE','Non se atopou módulo que faga uso da caché.');
define('_MD_AM_DTPLSET','Xogo de Plantillas por defecto (Template set)');
define('_MD_AM_SSLLINK','URL de onde está ubicada a páxina de ingreso SSL');

// added for mailer
define("_MD_AM_MAILER","Configuración d Correo Electrónico");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","Dirección do remitente");
define("_MD_AM_MAILFROMDESC","O correo dende onde se envía ej. meu_correo@no.es");
define("_MD_AM_MAILFROMNAME","Nome do remitente");
define("_MD_AM_MAILFROMNAMEDESC","O nome dende onde se envía o correo<br /> ej: Administrador, etc.");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","Usuario remitente");
define("_MD_AM_MAILFROMUIDDESC","Cando o sistema envía unha mensaxe privada, ¿Que usuario debería aparecer coma remitente do mesmo?");
define("_MD_AM_MAILERMETHOD","Método de envío do correo");
define("_MD_AM_MAILERMETHODDESC","O método empregado por defecto é \"mail\" [ phpmail() ], empregue os outros ÚNICAMENTE se ten problemas.");
define("_MD_AM_SMTPHOST","SMTP host(s)");
define("_MD_AM_SMTPHOSTDESC","Listado de servidores SMTP onde intentará a conexión <br /> ej. smtp.test.com");
define("_MD_AM_SMTPUSER","SMTPAuth nome de usuario");
define("_MD_AM_SMTPUSERDESC","Nome de Usuario para conectar a un host SMTP con SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth password");
define("_MD_AM_SMTPPASSDESC","O contrasinal para conectar a un host SMTP con SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Ruta para sendmail");
define("_MD_AM_SENDMAILPATHDESC","A ruta ata o programa sendmail (ou un sustituto) no servidor.");
define("_MD_AM_THEMEOK","Deseños seleccioables");
define("_MD_AM_THEMEOKDSC","Indique de entre que deseños poderán elixir os usuarios o seu por defecto");
// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","Base de datos XOOPS");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Directorio LDAP estándar");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION","Opcións de autentificación");
define("_MD_AM_AUTHMETHOD","Método de autentificación");
define("_MD_AM_AUTHMETHODDESC","¿Que método de autentificación desexa empregar para o ingreso dos usuarios.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Nome do campo Correo");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","O nome do atributo E-MAIL na súa árbore de directorio LDAP.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Nome común do campo do nome");
define("_MD_AM_LDAP_NAME_ATTR_DESC","O nome do atributo do nome común no seu directorio LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Nome do campo do Apelido");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","O nome do Apelido no seu directorio LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Nome do campo Nome facilitado");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","O nome facilitado no seu directorio LDAP.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","A base DN (Distinguished Name) do seu directorio LDAP");
define("_MD_AM_LDAP_PORT","LDAP - Porto");
define("_MD_AM_LDAP_PORT_DESC","O porto necesario para acceder ó seu directorio LDAP.");
define("_MD_AM_LDAP_SERVER","LDAP - Nome do Servidor");
define("_MD_AM_LDAP_SERVER_DESC","O nome do seu directorio LDAP no servidor.");
define("_MD_AM_LDAP_MANAGER_DN","DN do administrador LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC","A DN do usuario que permite facer búsquedas (ej: administrador)");
define("_MD_AM_LDAP_MANAGER_PASS","Contrasinal do administrador da LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","O contrasinal do usuario permite realizar búsquedas");
define("_MD_AM_LDAP_VERSION","Versión do protocolo  LDAP");
define("_MD_AM_LDAP_VERSION_DESC","Versión do protocolo LDAP : 2 ou 3");
define("_MD_AM_LDAP_USERS_BYPASS","Ususarios con permiso para bypass LDAP authentication");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Autentificación de usuarios mediante o método nativo de XOOPS");	 

define("_MD_AM_LDAP_USETLS"," Usar conexión TLS");
define("_MD_AM_LDAP_USETLS_DESC","Usar unha conexión TLS (Transport Layer Security). TLS usa coma porto estándar o 389<BR>" .
								  " e a versión de LDAP debe ser configurada coma 3.");
define("_MD_AM_LDAP_LOGINLDAP_ATTR","O atributo LDAP que usará para buscar ó usuario");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","Cando o uso de nome de usuario na opción DN é afirmativa, debe corresponder con o nome de login de XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Nome de Login empregado na DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","O nome de Login de XOOPS é usado na LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>A entrada é directamente lida no servidor LDAP sen buscar");
define("_MD_AM_LDAP_FILTER_PERSON","O filtro de búsqueda LDAP para buscar ó usuario");

define("_MD_AM_LDAP_FILTER_PERSON_DESC","Filtro especial LDAP para buscar usuario. @@loginname@@ é remprazado polo nome de login<br> DEBE ESTAR EN BRANCO SE NON SABE DE QUEN SE TRATA' !" .
		"<br>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","Nome do dominio");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Nome de dominio de Windows. Para servidores ADS y NT somentes");
define("_MD_AM_LDAP_PROVIS","Aprovisionamento automático de contas Xoops");
define("_MD_AM_LDAP_PROVIS_DESC","Crear base de datos do usuario no caso de non existir");
define("_MD_AM_LDAP_PROVIS_GROUP","Grupo afectado por defecto");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","Os novos usuarios serán asignados a estos grupos");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describir aquí o mapping entre a base de datos de Xoops e o sistema de autentificación LDAP." .
		"<br><br>Formato [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>por exemplo : email=mail" .
		"<br>Separar cada un deles cun |" .
		"<br><br>!! Para usuarios avanzados !!");
		
define("_MD_AM_LDAP_PROVIS_UPD","Mantenemento do aprovisionamento de contas Xoops");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","A conta de usuario Xoops será sincronizada sempre con o servidor de autentificación");
	
define("_MD_AM_CPANEL","Panel de control");
define("_MD_AM_CPANELDSC","Lado del administrador");
											  

define("_MD_AM_WELCOMETYPE","Mensaxe de benvida");
define("_MD_AM_WELCOMETYPE_DESC","Forma na que se enviará a mensaxe de benvida unha vez que se rexistre un novo usuario.");
define("_MD_AM_WELCOMETYPE_EMAIL","Correo");
define("_MD_AM_WELCOMETYPE_PM","Mensaxe");
define("_MD_AM_WELCOMETYPE_BOTH","E-Correo e mensaxe");	

?>