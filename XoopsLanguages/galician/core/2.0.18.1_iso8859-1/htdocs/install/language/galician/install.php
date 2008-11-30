<?php
// $Id: install.php 669 2006-08-25 22:14:09Z skalpa $
define("_INSTALL_L0","Benvido � asistente de instalaci�n de XOOPS 2.0");
define("_INSTALL_L70","Por favor cambie o permiso/atributo do arquivo mainfile.php a fin de que se poida sobrescribir,� dicir, -chmod 777- nun servidor X/LINUX, ou -Read only(Somentes Lectura)- nun servidor Windows). Volva a recargar a p�xina (F5) unha vez te�a axustado o permiso.");
//define("_INSTALL_L71","Prema o bot�n para comezar a instalaci�n.");
define("_INSTALL_L1","Edite o arquivo mainfile.php e busque o seguinte c�digo na li�a 31:");
define("_INSTALL_L2","Agora , cambie esta li�a por:");
define("_INSTALL_L3","Siga coa li�a 35, cambie %s por %s");
define("_INSTALL_L4","�Probe de novo!");
define("_INSTALL_L5","�ATENCI�N!");
define("_INSTALL_L6","Existe unha diferencia entre a s�a configuraci�n XOOPS_ROOT_PATH na li�a 31 de mainfile.php e a que XOOPS ten detectado.");
define("_INSTALL_L7","A s�a Configuraci�n:");
define("_INSTALL_L8","XOOPS Detecta: ");
define("_INSTALL_L9","(En plataformas MS, poder� recibir esta mensaxe de erro incluso cando a s�a configuraci�n sexa correcta. Se este � o caso, por favor prema o bot�n para continuar)");
define("_INSTALL_L10","Por favor, prema o bot�n para continuar se todo � correcto.");
define("_INSTALL_L11","A ruta(path) � seu directorio ra�z(root) XOOPS.");
define("_INSTALL_L12","URL � seu directorio root de XOOPS: ");
define("_INSTALL_L13","Se a configuraci�n � correcta, prema o bot�n para continuar.<br />(Ainda non se crear�n as tablas)");
define("_INSTALL_L14","Continuar");
define("_INSTALL_L15","Por favor, abra o ficheiro mainfile.php e inserte a informaci�n necesaria para a configuraci�n da base de datos");
define("_INSTALL_L16","%s � o nome do host da s�a base de datos.");
define("_INSTALL_L17","%s � o nome do usuario da s�a conta da base de datos.");
define("_INSTALL_L18","%s � o contrasinal necesario para acceder � s�a base de datos.");
define("_INSTALL_L19","%s � o nome da base de datos na cal se crear�n as tablas de Xoops.");
define("_INSTALL_L20","%s � o prefixo que se antepo�er� nas tablas cando se creen.");
define("_INSTALL_L21","Non atopo a base de datos no servidor:");
define("_INSTALL_L22","�Permitirlle a Xoops tentar creala?");
define("_INSTALL_L23","Si");
define("_INSTALL_L24","Non");
define("_INSTALL_L25","Temos detectado a seguinte informaci�n na configuraci�n de mainfile.php. Por favor, corr�xaa se fora necesario.");
define("_INSTALL_L26","Configuraci�n da base de datos");
define("_INSTALL_L51","<b>Base de Datos</b>");
define("_INSTALL_L66","Elixa que base de datos usar�");
define("_INSTALL_L27","<b>Nome do host</b>");
define("_INSTALL_L67","Nome do host do servidor da base de datos. Se non est� seguro, 'localhost' deber�a de funcionar na maior�a das ocasi�ns.");
define("_INSTALL_L28","<b>Nome do Usuario da base de datos</b>");
define("_INSTALL_L65","Nome do Usuario da base de datos no host");
define("_INSTALL_L29","<b>Nome da base de datos</b>");
define("_INSTALL_L64","O Nome do nome da base de datos no host. O instalador tratar� de crear a base de datos no caso de que non exista");
define("_INSTALL_L52","<b>Contrasinal da base de datos</b>");
define("_INSTALL_L68","Contrasinal para a conta de usuario da s�a base de datos");
define("_INSTALL_L30","<b>Prefixos para as Tablas</b>");
define("_INSTALL_L63","O prefixo ser� anteposto a t�dalas tablas novas que se creen, para evitar problemas de duplicidade con outros contidos. Se non est� seguro, use o nome 'xoops' por defecto ainda que se recomenda que sexa calquera outro por raz�ns de seguridade.");
define("_INSTALL_L54","<b>�Usar conexi�n persistente?</b>");
define("_INSTALL_L69","Por defecto � 'NON'. Elixa -Non- se non est� seguro");
define("_INSTALL_L55","<b>XOOPS Ruta f�sica</b>");
define("_INSTALL_L59","Ruta f�sica � seu directorio principal XOOPS SEN Barra invertida � esquerda(\)");
define("_INSTALL_L56","<b>XOOPS Ruta Virtual  (URL)</b>");
define("_INSTALL_L58","Ruta virtual � seu directorio principal XOOPS SEN Barra invertida � esquerda(\)");

define("_INSTALL_L31","Non se pode crear a base de datos. Contacte con o administrador do servidor para que lle solucione o problema.");
define("_INSTALL_L32","Instalaci�n Completa");
define("_INSTALL_L33","Prema <a href='../index.php'>AQU�</a> para acceder � seu sitio.");
define("_INSTALL_L35","Se houbera erros, visite a seguinte p�xina e consulte con os desenroladores <a href='http://www.xoops.org/' target='_blank'>XOOPS.org</a>");
define("_INSTALL_L36","Por favor, elixa o seu nome e contrasi�al como administrador. Imos crear as tablas necesarias para a base de datos.");
define("_INSTALL_L37","Nombre do Administrador");
define("_INSTALL_L38","Correo-E do Administrador");
define("_INSTALL_L39","Contrasinal do Administrador");
define("_INSTALL_L74","Repita o Contrasinal");
define("_INSTALL_L40","Crear Tablas");
define("_INSTALL_L41","Por favor, vuelva � p�xina anterior e cumprimente o formulario correctamente.");
define("_INSTALL_L42","Voltar");
define("_INSTALL_L57","Por favor, escriba %s");

// %s is database name
define("_INSTALL_L43","�Base de Datos %s creada!");

// %s is table name
define("_INSTALL_L44","Imposible crear %s");
define("_INSTALL_L45","Tabla %s creada");

define("_INSTALL_L46","Para que os m�dulos incluidos no paquete funcionen correctamente, os seguintes arquivos deben ter permisos/atributos de -escritura- no servidor. Por favor, cambie ditos permisos. En servidores Unix/Linux 'chmod 666 nome_arquivo' e 'chmod 777 nome_directorio' e para servidores Windows desmarcar 'Somentes lectura'.");
define("_INSTALL_L47","Continuar");

define("_INSTALL_L53","Por favor, confirme que a siguiente informaci�n � a que ten facilitado");

define("_INSTALL_L60","Imposible modificar o ficheiro mainfile.php. Comprobe os permisos e probe de novo.");
define("_INSTALL_L61","Imposible modificar o ficheiro mainfile.php. Solicite axuda � administrador do seu sitio web.");
define("_INSTALL_L62","A configuraci�n gardouse correctamente. Prema sobre o bot�n para continuar.");
define("_INSTALL_L72","Os seguintes directorios deben ser creados con permisos de escritura polo servidor. (ex. 'chmod 777 nome_directorio' nun  servidor UNIX/LINUX)");
define("_INSTALL_L73","Correo-E incorrecto");

// add by haruki
define("_INSTALL_L80","introducci�n");
define("_INSTALL_L81","Comprobando permisos de arquivo");
define("_INSTALL_L82","Comprobando permisos de arquivo e directorios..");
define("_INSTALL_L83","%s NON � escribible.");
define("_INSTALL_L84","%s � escribible.");
define("_INSTALL_L85","O directorio %s NON � escribible.");
define("_INSTALL_L86","O directorio %s � escribible.");
define("_INSTALL_L87","Sen erros.");
define("_INSTALL_L89","Configuraci�n Xeral");
define("_INSTALL_L90","Configuraci�n Xeral");
define("_INSTALL_L91","confirme");
define("_INSTALL_L92","gardar configuraci�n");
define("_INSTALL_L93","modificar configuraci�n");
define("_INSTALL_L88","Gardando a configuraci�n..");
define("_INSTALL_L94","Comprobe a ruta e URL");
define("_INSTALL_L127","Comprobando a ruta e URL..");
define("_INSTALL_L95","Non atopo a ruta f�sica � seu directorio XOOPS.");
define("_INSTALL_L96","Hai unha discrepancia entre a ruta f�sica detectada (%s) e a que insertou.");
define("_INSTALL_L97","A <b>Ruta F�sica</b> � correcta.");

define("_INSTALL_L99","A <b>Ruta F�sica:</b> debe ser un directorio.");
define("_INSTALL_L100","A <b>Ruta Virtual:</b> � unha direcci�n URL correcta.");
define("_INSTALL_L101","A <b>Ruta Virtual:</b> NON � unha direcci�n URL correcta.");
define("_INSTALL_L102","confirme a configuraci�n da base de datos");
define("_INSTALL_L103","voltar � principio");
define("_INSTALL_L104","comprobar a base de datos");
define("_INSTALL_L105","probando a crear a base de datos");
define("_INSTALL_L106","Imposible conectar coa base de datos do servidor.");
define("_INSTALL_L107","Por favor, comprobe o servidor da base de datos as� como a s�a configuraci�n.");
define("_INSTALL_L108","A conexi�n � servidor da base de datos � CORRECTO.");
define("_INSTALL_L109","A Base de datos %s NON existe.");
define("_INSTALL_L110","A Base de datos %s existe e � accesible para conectarse.");
define("_INSTALL_L111","A conexi�n � base de datos � CORRECTA.<br />Prema o bot�n para crear as tablas da base de datos.");
define("_INSTALL_L112","Configuraci�n do Usuario Administrador");
define("_INSTALL_L113","Tabla %s eliminada.");
define("_INSTALL_L114","Erro � crear as tablas da base de datos.");
define("_INSTALL_L115","Tablas creadas!");
define("_INSTALL_L116","insertar datos");
define("_INSTALL_L117","rematado");

define("_INSTALL_L118","Erro � crear a tabla %s.");
define("_INSTALL_L119","%d rexistro(s) engadido(s) � tabla %s.");
define("_INSTALL_L120","Erro � engadir %d entradas � tabla %s.");

define("_INSTALL_L121","� constante %s se lle asigna o valor %s.");
define("_INSTALL_L122","Erro escribindo o valor da constante %s.");

define("_INSTALL_L123","Arquivo %s gardado no directorio cache/ .");
define("_INSTALL_L124","Erro � gardar o arquivo %s no directorio cache/ .");

define("_INSTALL_L125","O arquivo %s foi sobrescrito por %s.");
define("_INSTALL_L126","Non poido sobrescribir o arquivo %s.");

define("_INSTALL_L130","Este programa instalador ten detectado tablas para XOOPS 1.3.x na s�a Base de Datos.<br />O instalador probar� a actualizar a s�a base de datos a XOOPS2.");
define("_INSTALL_L131","As tablas para XOOPS2 xa existen na s�a base de datos.");
define("_INSTALL_L132","actualizar tablas");
define("_INSTALL_L133","Tabla %s actualizada.");
define("_INSTALL_L134","Erro � actualizar a tabla %s.");
define("_INSTALL_L135","Error � actualizar as tablas da base de datos.");
define("_INSTALL_L136","Tablas da Base de datos actualizadas.");
define("_INSTALL_L137","actualizar m�dulos");
define("_INSTALL_L138","actualizar comentarios");
define("_INSTALL_L139","actualizar caricaturas");
define("_INSTALL_L140","actualizar emotic�ns");
define("_INSTALL_L141","O instalador actualizar� agora cada un dos m�dulos para que poidan traballar con XOOPS2.<br />Aseg�rese de que ten subido t�doslos arquivos do paquete XOOPS2 � seu servidor.<br />Isto pode tomar alg�n tempo.");
define("_INSTALL_L142","Actualizando m�dulos..");
define("_INSTALL_L143","O instalador actualizar� agora a configuraci�n de datos de XOOPS 1.3.x para ser usada con XOOPS2.");
define("_INSTALL_L144","actualizar a configuraci�n");
define("_INSTALL_L145","Comentario (ID: %s) engadido � Base de Datos.");
define("_INSTALL_L146","Non poido engadir o comentario (ID: %s) � Base de Datos.");
define("_INSTALL_L147","Actualizando comentarios..");
define("_INSTALL_L148","Actualizaci�n completa.");
define("_INSTALL_L149","O instalador actualizar� os comentarios de XOOPS 1.3.x para que poidan ser usados en XOOPS2<br />Isto pode tardar alg�n tempo.");
define("_INSTALL_L150","O instalador actualizar� as cari�as(emoticones) e las imaxes de Rango para poder ser usadas por XOOPS2.<br />Isto pode tardar alg�n tempo.");
define("_INSTALL_L151","O instalador actualizar� as Caricaturas (Avatar) para poder ser usadas en XOOPS2.<br />Isto pode tardar alg�n tempo.");
define("_INSTALL_L155","Actualizando as imaxes dos Emotic�ns/Rangos...");
define("_INSTALL_L156","Actualizando as imaxes das caricaturas..");
define("_INSTALL_L157","Seleccioe o grupo de usuarios por defecto para cada tipo de grupo");
define("_INSTALL_L158","Grupos en 1.3.x");
define("_INSTALL_L159","Administradores");
define("_INSTALL_L160","Usuarios Inscritos");
define("_INSTALL_L161","Usuarios An�nimos");
define("_INSTALL_L162","Debe elixir o grupo por defecto para cada tipo de grupo.");
define("_INSTALL_L163","Tabla %s borrada.");
define("_INSTALL_L164","Erro � borrar a tabla %s.");
define("_INSTALL_L165","O sitio est� actualmente pechado por mantenemento, Por favor volte m�is tarde.");

// %s is filename
define("_INSTALL_L152","Non poido abrir %s.");
define("_INSTALL_L153","Non poido actualizar %s.");
define("_INSTALL_L154","%s actualizado.");

define('_INSTALL_L128', 'Elixa o idioma que se empregar� no proceso de instalaci�n');
define('_INSTALL_L200', 'Recargar p�xina');


define('_INSTALL_CHARSET','ISO-8859-1');
?>