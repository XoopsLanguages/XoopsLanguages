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
define("_MD_AM_STARTPAGE","M�dulo para a p�xina de inicio");
define("_MD_AM_NONE","Nada");
define("_MD_AM_SERVERTZ","Zona Horaria do Servidor");
define("_MD_AM_DEFAULTTZ","Zona Horaria por Defecto");
define("_MD_AM_DTHEME","Dese�o por Defecto");
define("_MD_AM_THEMESET","Dese�os (Theme Set)");
define("_MD_AM_ANONNAME","Nome de Usuario para os non rexistrados");
define("_MD_AM_MINPASS","Tama�o m�nimo requirido para a contrasinal");
define("_MD_AM_NEWUNOTIFY","�Recibir notificaci�n cada vez que un usuario se rexistre no sitio?");
define("_MD_AM_SELFDELETE","�Permitirlle �s usuarios Borrar a s�a propia conta?");
define("_MD_AM_LOADINGIMG","�Mostrar imaxe de Cargando....?");
define("_MD_AM_USEGZIP","�Usar compresi�n gzip?  PHP version 4.0.5 ou superior recomendada. Aseg�rese antes de activalo.");
define("_MD_AM_UNAMELVL","Nivel de permisibilidade para os nomes dos usuarios");
define("_MD_AM_STRICT","Estricto (somentes letras e n�meros)");
define("_MD_AM_MEDIUM","Medio");
define("_MD_AM_LIGHT","Liviano (recomendado para caracteres multi-byte)");
define("_MD_AM_USERCOOKIE","Nome da Cookie para o usuario.");
define("_MD_AM_USERCOOKIEDSC","Este cookie cont�n somentes un nome de usuario que � gardado no PC durante todo un ano (Se o usuario o desexa). Se o usuario ten este cookie, o nome de usuario ser� autom�ticamente insertado no Bloque de Ingreso.");
define("_MD_AM_USEMYSESS","Usar Sesi�n persoalizada");
define("_MD_AM_USEMYSESSDSC","Seleccione si para persoalizar os valores relacioados coa sesi�n.");
define("_MD_AM_SESSNAME","Nome da Sesi�n");
define("_MD_AM_SESSNAMEDSC","O Nome da Sesi�n (V�lido somentes cando 'Usar Sesi�n persoalizada' est� activado)");
define("_MD_AM_SESSEXPIRE","Expiraci�n da Sesi�n ");
define("_MD_AM_SESSEXPIREDSC","M�xima duraci�n en minutos de unha sesi�n (V�lido somentes cando a opci�n 'Usar Sesi�n persoalizada' est� activada). Traballa �nicamente cando vostede est� usando PHP4.2.0 ou superior.");
define("_MD_AM_BANNERS","�Activar banners?");
define("_MD_AM_MYIP","A s�a IP. Esta informaci�n permite que non se lle compute nas impresi�ns dos banners");
define("_MD_AM_MYIPDSC","Este IP non ser� contado como unha impresi�n para os banners");
define("_MD_AM_ALWDHTML","HTML permitidos en t�dolos env�os.");
define("_MD_AM_INVLDMINPASS","Valor Inv�lido para a m�nima lonxitude do contrasinal.");
define("_MD_AM_INVLDUCOOK","Valor Inv�lido para o nome da Cookie do usuario.");
define("_MD_AM_INVLDSCOOK","Valor Inv�lido para o nome da Cookie da sesi�n.");
define("_MD_AM_INVLDSEXP","Valor Inv�lido para o tempo de expiraci�n");
define("_MD_AM_ADMNOTSET","Correo do admin non configurado");
define("_MD_AM_YES","Si");
define("_MD_AM_NO","Non");
define("_MD_AM_DONTCHNG","�Non cambiar!");
define("_MD_AM_REMEMBER","Lembre facerlle un chmod 666 a este arquivo para permitirlle � sistema modificalo axeitadamente.");
define("_MD_AM_IFUCANT","Se non pode cambiar o permiso deber� editalo manualmente.");


define("_MD_AM_COMMODE","Modo por defecto para mostrar os comentarios");
define("_MD_AM_COMORDER","Orde dos comentarios mostrados por Defecto");
define("_MD_AM_ALLOWHTML","�Permitir HTML en env�os de usuarios?");
define("_MD_AM_DEBUGMODE","Modo debug");
define("_MD_AM_DEBUGMODEDSC","Distintas opci�ns de Debug. Un sitio web de producci�n ten que ter Desactivada esta opci�n.");
define("_MD_AM_AVATARALLOW","�Permitir subir avatares propios?");
define('_MD_AM_AVATARMP','Env�os m�nimos requiridos');
define('_MD_AM_AVATARMPDSC','Ingrese o n�mero m�nimo de env�os requiridos para poder Subir un avatar propio');
define("_MD_AM_AVATARW","M�xima anchura do Avatar");
define("_MD_AM_AVATARH","M�xima altura do Avatar");
define("_MD_AM_AVATARMAX","Tama�o m�ximo para o Avatar (bytes)");
define("_MD_AM_AVATARCONF","Configuraci�n de Avatares");
define("_MD_AM_CHNGUTHEME","Cambiar o tema a t�dolos usuarios");
define("_MD_AM_NOTIFYTO","Notificar � Grupo:");
define("_MD_AM_ALLOWTHEME","�Permitir �s usuarios seleccionar o Dese�o?");
define("_MD_AM_ALLOWIMAGE","�Permitir �s usuarios mostrar arquivos de imaxes nos env�os?");

define("_MD_AM_USERACTV","Require activaci�n do usuario (recomendado)");
define("_MD_AM_AUTOACTV","Activar autom�ticamente");
define("_MD_AM_ADMINACTV","Activaci�n por Administradores");
define("_MD_AM_ACTVTYPE","Indique o tipo de activaci�n para os usuarios novos rexistrados");
define("_MD_AM_ACTVGROUP","Enviar correo de activaci�n a:");
define("_MD_AM_ACTVGROUPDSC","V�lido somentes cando a Activaci�n por Administradores sexa seleccioada");
define('_MD_AM_USESSL', '�Usar SSL para o login?');
define('_MD_AM_SSLPOST', 'Nome da variable SSL');
define('_MD_AM_SSLPOSTDSC', 'O nome da variable usado para transferir o valor da sesi�n v�a POST. Se non est� seguro, configure calquera nome que sexa dif�cil.');
define('_MD_AM_DEBUGMODE0','Apagado');
define('_MD_AM_DEBUGMODE1','Activar Debug (modo inline)');
define('_MD_AM_DEBUGMODE2','Activar Debug (modo ventana emerxente)');
define('_MD_AM_DEBUGMODE3','Debug Templates Smarty');
define('_MD_AM_MINUNAME', 'Lonxitude m�nima requirida para o nome de usuario');
define('_MD_AM_MAXUNAME', 'Longitud m�xima permitida para o nome de usuario');
define('_MD_AM_GENERAL', 'Configuraci�n Xeral');
define('_MD_AM_USERSETTINGS', 'Configuraci�n do Usuario');
define('_MD_AM_ALLWCHGMAIL', '�Permitirlle �s usuarios cambiar a s�a direcci�n de correo?');
define('_MD_AM_ALLWCHGMAILDSC', '');
define('_MD_AM_IPBAN', 'Bloqueo de IP');
define('_MD_AM_BADEMAILS', 'Especifique que contas de correo Non Estar�n Dispo�ibles');
define('_MD_AM_BADEMAILSDSC', 'Separar cada unha cun <b>|</b>, case insensitive, regex activado.');
define('_MD_AM_BADUNAMES', 'Especifique que nomes de usuario Non Estar�n Dispo�ibles');
define('_MD_AM_BADUNAMESDSC', 'Separar cada un cun <b>|</b>, case insensitive, regex activo.');
define('_MD_AM_DOBADIPS', '�Habilitar Bloqueo de IP?');
define('_MD_AM_DOBADIPSDSC', 'Se o activa poder� especificar a que direcci�ns IP poder� denegarlle o acceso.');
define('_MD_AM_BADIPS', 'Especifique que direcci�ns IP deber�an ser bloqueadas.<br />Separar cada unha cun <b>|</b>, case insensitive, regex activado.');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc permite deshabilitar visitantes cun IP que empeza con aaa.bbb.ccc<br />aaa.bbb.ccc$ permite deshabilitar visitantes cun IP que termina con  aaa.bbb.ccc<br />aaa.bbb.ccc  permite deshabilitar visitantes cun IP que cont�n aaa.bbb.ccc');
define('_MD_AM_PREFMAIN', 'Men� de Preferencias');
define('_MD_AM_METAKEY', 'Meta Keywords  (Palabras clave)');
define('_MD_AM_METAKEYDSC', 'Son palabras clave que representan o contido do seu sitio. Escriba as palabras separadas por una coma ou un espacio. (Ej. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING', 'Meta Rating');
define('_MD_AM_METARATINGDSC', 'Define para qu� tipo de p�blico � apta a s�a web');
define('_MD_AM_METAOGEN', 'Xeral');
define('_MD_AM_METAO14YRS', '14 anos');
define('_MD_AM_METAOREST', 'Restrinxido');
define('_MD_AM_METAOMAT', 'Maiores');
define('_MD_AM_METAROBOTS', 'Meta Robots');
define('_MD_AM_METAROBOTSDSC', 'Define que contido buscar�n os Buscadores e os Bots');
define('_MD_AM_INDEXFOLLOW', 'Indexar, Continuar');
define('_MD_AM_NOINDEXFOLLOW', 'Non Indexar, Continuar');
define('_MD_AM_INDEXNOFOLLOW', 'Indexar, Non Continuar');
define('_MD_AM_NOINDEXNOFOLLOW', 'Non Indexar, Non Continuar');
define('_MD_AM_METAAUTHOR', 'Meta Autor');
define('_MD_AM_METAAUTHORDSC', 'Define o nome do autor do documento que est� sendo lido. Os formatos soportados incl�en o nome, direcci�n do administrador, webmaster, nome da compa��a ou URL.');
define('_MD_AM_METACOPYR', 'Meta Copyright');
define('_MD_AM_METACOPYRDSC', 'Define calquira estado de copyright do que vostede desexe informar acerca dos documentos do seu sitio.');
define('_MD_AM_METADESC', 'Meta Descripci�n');
define('_MD_AM_METADESCDSC', '� unha descripci�n xeral do contido do seu sitio');
define('_MD_AM_METAFOOTER', 'Meta Tags e Pe de P�xina');
define('_MD_AM_FOOTER', 'Pe de P�xina');
define('_MD_AM_FOOTERDSC', 'Aseg�rese de que os enlaces comencen con http://, doutro xeito a ligaz�n non funcionar� correctamente.');
define('_MD_AM_CENSOR', 'Censura de Palabras');
define('_MD_AM_DOCENSOR', '�Activar o censor de palabras non desexadas?');
define('_MD_AM_DOCENSORDSC', 'Palabras que ser�n censuradas se o censor est� activo. Esta opci�n pode apagarse para acelerar a velocidade do sitio.');
define('_MD_AM_CENSORWRD', 'Palabras a Censurar');
define('_MD_AM_CENSORWRDDSC', 'Ingrese as palabras a censurar nos env�os.<br />Separadas cun <b>|</b>, case insensitive.');
define('_MD_AM_CENSORRPLC', 'As palabras censuradas ser�n reemplazadas con:');
define('_MD_AM_CENSORRPLCDSC', 'As palabras censuradas ser�n reemplazadas con os caracteres que vostede indique');

define('_MD_AM_SEARCH', 'Opci�ns de B�squeda');
define('_MD_AM_DOSEARCH', '�Activar B�squedas Globales?');
define('_MD_AM_DOSEARCHDSC', 'Permitir buscar en Env�os/�tems do sitio completo.');
define('_MD_AM_MINSEARCH', 'Lonxitude m�nima de palabra');
define('_MD_AM_MINSEARCHDSC', 'Para poder realizar unha b�squeda a palabra usada ter� como m�nimo unha lonxitude de:');
define('_MD_AM_MODCONFIG', 'Opci�ns de configuraci�n do m�dulo');
define('_MD_AM_DSPDSCLMR', '�Mostrar Condici�ns de Rexistro?');
define('_MD_AM_DSPDSCLMRDSC', 'Seleccione si para mostrar as condici�ns de Rexistro na p�xina de Rexistro');
define('_MD_AM_REGDSCLMR', 'Condici�ns de Rexistro');
define('_MD_AM_REGDSCLMRDSC', 'Defina o Texto que se mostrar� como Condici�ns de Rexistro');
define('_MD_AM_ALLOWREG', '�Permitir o rexistro de novos usuarios?');
define('_MD_AM_ALLOWREGDSC', 'Seleccione si para aceptar o rexistro de novos usuarios');
define('_MD_AM_THEMEFILE', '�Comprobar cambios nas plantillas? (templates)');
define('_MD_AM_THEMEFILEDSC', 'Se activa este par�metro poder� ver aplicados inmediatamente os cambios realizados � seu dise�o ou plantilla. Desact�veo unha vez concluidas las modificaci�ns.');
define('_MD_AM_CLOSESITE', '�Pechar o sitio?');
define('_MD_AM_CLOSESITEDSC', 'Seleccione si para pechar o sitio. Somentes os usuarios incluidos nos grupos seleccioados ter�n acceso a el. ');
define('_MD_AM_CLOSESITEOK', 'Seleccione os grupos que te�en permitido o acceso mentras o sitio permanece Pechado.');
define('_MD_AM_CLOSESITEOKDSC', 'Os usuarios d grupo Administradores sempre ter�n o acceso garantido.');
define('_MD_AM_CLOSESITETXT', 'Raz�n para o peche temporal do sitio');
define('_MD_AM_CLOSESITETXTDSC', 'O texto que se presentar� mentras o sitio permanezca pechado.');
define('_MD_AM_SITECACHE', 'Cach� Ampliada');
define('_MD_AM_SITECACHEDSC', 'Haga uso del Cach� para el contenido completo del sitio durante un per�odo espec�fico de tiempo. Su buen uso incrementar� el rendimiento del sitio. Adem�s, configurando el Cach� Ampliado anular� el control del cach� a nivel de m�dulo, bloque, y a nivel de cach� de �tems del m�dulo si existiera.');
define('_MD_AM_MODCACHE', 'Cach� de M�dulos');
define('_MD_AM_MODCACHEDSC', 'Faga uso da Cach� para os contidos dun m�dulo concreto e por un per�odo espec�fico de tempo para incrementar o rendemento do mesmo. Configurando a Cach� Ampliada anular� a cach� a nivel do �tem do m�dulo se existira.');
define('_MD_AM_NOMODULE', 'Non se atopou m�dulo que faga uso da cach�.');
define('_MD_AM_DTPLSET', 'Xogo de Plantillas por defecto (Template set)');
define('_MD_AM_SSLLINK', 'URL de onde est� ubicada a p�xina de ingreso SSL');

// added for mailer
define("_MD_AM_MAILER","Configuraci�n d Correo Electr�nico");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","Direcci�n do remitente");
define("_MD_AM_MAILFROMDESC","O correo dende onde se env�a ej. meu_correo@no.es");
define("_MD_AM_MAILFROMNAME","Nome do remitente");
define("_MD_AM_MAILFROMNAMEDESC","O nome dende onde se env�a o correo<br /> ej: Administrador, etc.");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","Usuario remitente");
define("_MD_AM_MAILFROMUIDDESC","Cando o sistema env�a unha mensaxe privada, �Que usuario deber�a aparecer coma remitente do mesmo?");
define("_MD_AM_MAILERMETHOD","M�todo de env�o do correo");
define("_MD_AM_MAILERMETHODDESC","O m�todo empregado por defecto � \"mail\" [ phpmail() ], empregue os outros �NICAMENTE se ten problemas.");
define("_MD_AM_SMTPHOST","SMTP host(s)");
define("_MD_AM_SMTPHOSTDESC","Listado de servidores SMTP onde intentar� a conexi�n <br /> ej. smtp.test.com");
define("_MD_AM_SMTPUSER","SMTPAuth nome de usuario");
define("_MD_AM_SMTPUSERDESC","Nome de Usuario para conectar a un host SMTP con SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth password");
define("_MD_AM_SMTPPASSDESC","O contrasinal para conectar a un host SMTP con SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Ruta para sendmail");
define("_MD_AM_SENDMAILPATHDESC","A ruta ata o programa sendmail (ou un sustituto) no servidor.");
define("_MD_AM_THEMEOK","Dese�os seleccioables");
define("_MD_AM_THEMEOKDSC","Indique de entre que dese�os poder�n elixir os usuarios o seu por defecto");
// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "Base de datos XOOPS");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Directorio LDAP est�ndar");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION", "Opci�ns de autentificaci�n");
define("_MD_AM_AUTHMETHOD", "M�todo de autentificaci�n");
define("_MD_AM_AUTHMETHODDESC", "�Que m�todo de autentificaci�n desexa empregar para o ingreso dos usuarios.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Nome do campo Correo");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","O nome do atributo E-MAIL na s�a �rbore de directorio LDAP.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Nome com�n do campo do nome");
define("_MD_AM_LDAP_NAME_ATTR_DESC","O nome do atributo do nome com�n no seu directorio LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Nome do campo do Apelido");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","O nome do Apelido no seu directorio LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Nome do campo Nome facilitado");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","O nome facilitado no seu directorio LDAP.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "A base DN (Distinguished Name) do seu directorio LDAP");
define("_MD_AM_LDAP_PORT","LDAP - Porto");
define("_MD_AM_LDAP_PORT_DESC","O porto necesario para acceder � seu directorio LDAP.");
define("_MD_AM_LDAP_SERVER","LDAP - Nome do Servidor");
define("_MD_AM_LDAP_SERVER_DESC","O nome do seu directorio LDAP no servidor.");

define("_MD_AM_LDAP_MANAGER_DN", "DN do administrador LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "A DN do usuario que permite facer b�squedas (ej: administrador)");
define("_MD_AM_LDAP_MANAGER_PASS", "Contrasinal do administrador da LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "O contrasinal do usuario permite realizar b�squedas");
define("_MD_AM_LDAP_VERSION", "Versi�n do protocolo  LDAP");
define("_MD_AM_LDAP_VERSION_DESC", "Versi�n do protocolo LDAP : 2 ou 3");

define("_MD_AM_LDAP_USETLS", " Usar conexi�n TLS");
define("_MD_AM_LDAP_USETLS_DESC", "Usar unha conexi�n TLS (Transport Layer Security). TLS usa coma porto est�ndar o 389<BR>" .
								  " e a versi�n de LDAP debe ser configurada coma 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","O atributo LDAP que usar� para buscar � usuario");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","Cando o uso de nome de usuario na opci�n DN � afirmativa, debe corresponder con o nome de login de XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Nome de Login empregado na DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "O nome de Login de XOOPS � usado na LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>A entrada � directamente lida no servidor LDAP sen buscar");

define("_MD_AM_LDAP_FILTER_PERSON", "O filtro de b�squeda LDAP para buscar � usuario");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Filtro especial LDAP para buscar usuario. @@loginname@@ � remprazado polo nome de login<br> DEBE ESTAR EN BRANCO SE NON SABE DE QUEN SE TRATA' !" .
		"<br>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "Nome do dominio");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Nome de dominio de Windows. Para servidores ADS y NT somentes");

define("_MD_AM_LDAP_PROVIS", "Aprovisionamento autom�tico de contas Xoops");
define("_MD_AM_LDAP_PROVIS_DESC", "Crear base de datos do usuario no caso de non existir");

define("_MD_AM_LDAP_PROVIS_GROUP", "Grupo afectado por defecto");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "Os novos usuarios ser�n asignados a estos grupos");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Describir aqu� o mapping entre a base de datos de Xoops e o sistema de autentificaci�n LDAP." .
		"<br><br>Formato [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>por exemplo : email=mail" .
		"<br>Separar cada un deles cun |" .
		"<br><br>!! Para usuarios avanzados !!");
		
define("_MD_AM_LDAP_PROVIS_UPD", "Mantenemento do aprovisionamento de contas Xoops");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "A conta de usuario Xoops ser� sincronizada sempre con o servidor de autentificaci�n");
		

?>