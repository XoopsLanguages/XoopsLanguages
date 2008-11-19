<?php
// $Id: install.php 669 2006-08-25 22:14:09Z skalpa $
define("_INSTALL_L0","Benvido ao asistente de instalaci�n de XOOPS 2.0");
define("_INSTALL_L70","Por favor cambie o permiso/atributo do arquivo mainfile.php co fin de que se poida sobrescribir,� dicir, -chmod 777- nun servidor X/LINUX, ou -Read only(S� Lectura)- nun servidor Windows). Volva recargar a p�xina (F5) unha vez te�a axustado o permiso.");
//define("_INSTALL_L71","Prema no bot�n para comezar a instalaci�n.");
define("_INSTALL_L1","Edite o arquivo mainfile.php e busque o seguinte c�digo na li�a 31:");
define("_INSTALL_L2","Agora , cambie esta li�a por:");
define("_INSTALL_L3","Siga coa li�a 35, cambie %s por %s");
define("_INSTALL_L4","�Int�nteo de novo!");
define("_INSTALL_L5","�ATENCI�N!");
define("_INSTALL_L6","Existe unha diferenza entre a s�a configuraci�n XOOPS_ROOT_PATH na li�a 31 do mainfile.php e a que XOOPS detectou.");
define("_INSTALL_L7","A s�a Configuraci�n:");
define("_INSTALL_L8","XOOPS Detecta: ");
define("_INSTALL_L9","(En plataformas MS, poder� recibir esta mensaxe de erro incluso cando a s�a configuraci�n sexa correcta. Se este � o caso, por favor prema no bot�n para continuar)");
define("_INSTALL_L10","Por favor, prema no bot�n para continuar se todo � correcto.");
define("_INSTALL_L11","A ruta(path) ao directorio ra�z(root) XOOPS.");
define("_INSTALL_L12","URL ao directorio root de XOOPS: ");
define("_INSTALL_L13","Se a configuraci�n � correcta, prema no bot�n para continuar.<br />(A�nda non se crear�n as t�boas)");
define("_INSTALL_L14","Continuar");
define("_INSTALL_L15","Por favor, abra o ficheiro mainfile.php e insira a informaci�n necesaria para a configuraci�n da base de datos");
define("_INSTALL_L16","%s � o nome do host da s�a base de datos.");
define("_INSTALL_L17","%s � o nome de usuario da s�a conta da base de datos.");
define("_INSTALL_L18","%s � o contrasinal necesario para acceder a s�a base de datos.");
define("_INSTALL_L19","%s � o nome da base de datos na que se crear�n as t�boas de Xoops.");
define("_INSTALL_L20","%s � o prefixo que se antepor� nas t�boas cando �stas sexan creadas.");
define("_INSTALL_L21","Non atopo a base de datos no servidor:");
define("_INSTALL_L22","Permitirlle a Xoops intentar creala?");
define("_INSTALL_L23","Si");
define("_INSTALL_L24","Non");
define("_INSTALL_L25","Detectouse a seguinte informaci�n na configuraci�n do seu mainfile.php. Por favor, corr�xaa se for necesario.");
define("_INSTALL_L26","Configuraci�n da base de datos");
define("_INSTALL_L51","<b>Base de Datos</b>");
define("_INSTALL_L66","Elixa que base de datos usar�");
define("_INSTALL_L27","<b>Nome do host</b>");
define("_INSTALL_L67","Nome do host do servidor da base de datos. Se non est� seguro, 'localhost' deber�a de funcionar na maior�a das ocasi�ns.");
define("_INSTALL_L28","<b>Nome de Usuario da base de datos</b>");
define("_INSTALL_L65","Nome do Usuario da base de datos no host");
define("_INSTALL_L29","<b>Nome da base de datos</b>");
define("_INSTALL_L64","O nombe da base de datos no host. O instalador tratar� de crear a base de datos no caso de non existires");
define("_INSTALL_L52","<b>Contrasinal da base de datos</b>");
define("_INSTALL_L68","Contrasinal para a conta de usuario da base de datos");
define("_INSTALL_L30","<b>Prefixos para as T�boas</b>");
define("_INSTALL_L63","O prefixo ser� anteposto a t�dalas t�boas novas que se van crear, para evitar problemas de duplicidade con outros contidos. Non estando seguro, use o nome 'xoops' por defecto a�nda que se recomenda que sexa cualquera outro por raz�ns de seguridade.");
define("_INSTALL_L54","<b>Usar conexi�n persistente?</b>");
define("_INSTALL_L69","Por defecto � 'NON'. Elixa -Non- se non est� seguro");
define("_INSTALL_L55","<b>XOOPS Ruta f�sica</b>");
define("_INSTALL_L59","Ruta f�sica ao directorio principal XOOPS SEN Barra invertida � esquerda(\)");
define("_INSTALL_L56","<b>XOOPS Ruta Virtual  (URL)</b>");
define("_INSTALL_L58","Ruta virtual ao directorio principal XOOPS SEN Barra invertida � esquerda(\)");

define("_INSTALL_L31","Non se pode crear a base de datos. Contacte co administrador do servidor para que lle solucione o problema.");
define("_INSTALL_L32","Instalaci�n Completa");
define("_INSTALL_L33","Prema <a href='../index.php'>AQU�</a> para acceder ao seu sitio.");
define("_INSTALL_L35","Se se produciran erros, visite a seguiente p�xina e consulte cos desarrolladores <a href='http://www.xoops.org/' target='_blank'>XOOPS.org</a>");
define("_INSTALL_L36","Por favor, elixa un nome e contrasinal para o administrador. Vaise proceder a crear as t�boas necesarias para a base de datos.");
define("_INSTALL_L37","Nome do Administrador");
define("_INSTALL_L38","Correo-E do Administrador");
define("_INSTALL_L39","Contrasinal do Administrador");
define("_INSTALL_L74","Repita o Contrasinal");
define("_INSTALL_L40","Crear T�boas");
define("_INSTALL_L41","Por favor, volte � p�xina anterior e cumprimente o formulario correctamente.");
define("_INSTALL_L42","Regresar");
define("_INSTALL_L57","Por favor, escriba %s");

// %s is database name
define("_INSTALL_L43","�Base de Datos %s creada!");

// %s is table name
define("_INSTALL_L44","Impos�bel crear %s");
define("_INSTALL_L45","T�boa %s creada");

define("_INSTALL_L46","Para que os m�dulos incluidos no paquete funcionen correctamente, os siguientes archivos deben ter permisos/atributos de -escritura- no servidor. Por favor, cambie ditos permisos. En servidores Unix/Linux 'chmod 666 nome_arquivo' e 'chmod 777 nome_directorio' e para servidores Windows desmarcar 'S� lectura'.");
define("_INSTALL_L47","Continuar");

define("_INSTALL_L53","Por favor, confirme que a seguinte informaci�n � a que facilitou");

define("_INSTALL_L60","Impos�bel modificar o ficheiro mainfile.php. Comprobe los permisos e int�nteo novamente.");
define("_INSTALL_L61","Impos�bel modificar o fichero mainfile.php. Solicite axuda ao administrador do seu sitio web.");
define("_INSTALL_L62","A configuraci�n gardouse correctamente. Prema sobre o bot�n para continuar.");
define("_INSTALL_L72","Os seguintes directorios deben ser creados con permisos de escritura polo servidor. (ex. 'chmod 777 nome_directorio' nun servidor UNIX/LINUX)");
define("_INSTALL_L73","Correo-E incorrecto");

// add by haruki
define("_INSTALL_L80","Introduci�n");
define("_INSTALL_L81","Comprobando permisos de arquivo");
define("_INSTALL_L82","Comprobando permisos de arquivo e directorios..");
define("_INSTALL_L83","%s NON � escrib�bel.");
define("_INSTALL_L84","%s � escrib�bel.");
define("_INSTALL_L85","O directorio %s NON � escrib�bel.");
define("_INSTALL_L86","O directorio %s � escrib�bel.");
define("_INSTALL_L87","Sen erros.");
define("_INSTALL_L89","Configuraci�n Xeral");
define("_INSTALL_L90","Configuraci�n Xeral");
define("_INSTALL_L91","Confirme");
define("_INSTALL_L92","Gardar configuraci�n");
define("_INSTALL_L93","Modificar configuraci�n");
define("_INSTALL_L88","Gardando a configuraci�n..");
define("_INSTALL_L94","Comprobe a ruta e URL");
define("_INSTALL_L127","Comprobando a ruta e URL..");
define("_INSTALL_L95","Non se puido detectar a ruta f�sica o directorio XOOPS.");
define("_INSTALL_L96","Hai unha discrepancia entre a ruta f�sica detectada (%s) e a que inseriu.");
define("_INSTALL_L97","A <b>Ruta F�sica</b> � correcta.");

define("_INSTALL_L99","A <b>Ruta F�sica:</b> debe ser un directorio.");
define("_INSTALL_L100","A <b>Ruta Virtual:</b> � una direcci�n URL correcta.");
define("_INSTALL_L101","A <b>Ruta Virtual:</b> NON � una direcci�n URL correcta.");
define("_INSTALL_L102","Confirme a configuraci�n da base de datos");
define("_INSTALL_L103","Voltar ao comezo");
define("_INSTALL_L104","Comprobar a base de datos");
define("_INSTALL_L105","Intentando crear a base de datos");
define("_INSTALL_L106","Impos�bel conectar coa base de datos do servidor.");
define("_INSTALL_L107","Por favor, comprobe o servidor da base de datos as� como a s�a configuraci�n.");
define("_INSTALL_L108","A conexi�n ao servidor da base de datos � CORRECTA.");
define("_INSTALL_L109","A Base de datos %s NON existe.");
define("_INSTALL_L110","A Base de datos %s existe e � acces�bel para conectarse.");
define("_INSTALL_L111","A conexi�n � base de datos � CORRECTA.<br />Prema no bot�n para crear as t�boas da base de datos.");
define("_INSTALL_L112","Configuraci�n do Usuario Administrador");
define("_INSTALL_L113","T�boa %s eliminada.");
define("_INSTALL_L114","Erro ao crear as t�boas da base de datos.");
define("_INSTALL_L115","T�boas creadas!");
define("_INSTALL_L116","Inserir datos");
define("_INSTALL_L117","Finalizado");

define("_INSTALL_L118","Erro ao crear a t�boa %s.");
define("_INSTALL_L119","%d rexistro(s) engadido(s) � t�boa %s.");
define("_INSTALL_L120","Erro ao engadir %d entradas � t�boa %s.");

define("_INSTALL_L121","� constante %s asign�selle o valor %s.");
define("_INSTALL_L122","Erro escribendo o valor da constante %s.");

define("_INSTALL_L123","Arquivo %s gardado no directorio cache/ .");
define("_INSTALL_L124","Erro ao gardar o arquivo %s no directorio cache/ .");

define("_INSTALL_L125","O arquivo %s foi substituido (sobrescrito) por %s.");
define("_INSTALL_L126","No puedo sobrescribir el archivo %s.");

define("_INSTALL_L130","Este programa instalador detectou t�boas para XOOPS 1.3.x na Base de Datos.<br />O instalador intentar� actualizar a base de datos a XOOPS2.");
define("_INSTALL_L131","As t�boas para XOOPS2 xa existen na s�a base de datos.");
define("_INSTALL_L132","Actualizar t�boas");
define("_INSTALL_L133","T�boa %s actualizada.");
define("_INSTALL_L134","Erro ao actualizar a t�boa %s.");
define("_INSTALL_L135","Erro ao actualizar as t�boas da base de datos.");
define("_INSTALL_L136","T�boas da Base de datos actualizadas.");
define("_INSTALL_L137","actualizar m�dulos");
define("_INSTALL_L138","actualizar comentarios");
define("_INSTALL_L139","actualizar avatares");
define("_INSTALL_L140","actualizar emoticonas");
define("_INSTALL_L141","O instalador actualizar� agora t�dolos m�dulos para que poidan traballar co XOOPS2.<br />Aseg�rese de que substitu�u t�dolos arquivos do paquete XOOPS2 ao seu servidor.<br />Isto pode levar alg�n tempo.");
define("_INSTALL_L142","Actualizando m�dulos..");
define("_INSTALL_L143","O instalador actualizar� agora a configuraci�n de datos de XOOPS 1.3.x para ser usada co XOOPS2.");
define("_INSTALL_L144","Actualizar a configuraci�n");
define("_INSTALL_L145","Comentario (ID: %s) engadido � Base de Datos.");
define("_INSTALL_L146","Non se puido engadir o comentario (ID: %s) � Base de Datos.");
define("_INSTALL_L147","Actualizando comentarios..");
define("_INSTALL_L148","Actualizaci�n completa.");
define("_INSTALL_L149","O instalador actualizar� os comentarios de XOOPS 1.3.x para que poidan ser usados en XOOPS2<br />Isto puede levar alg�n tempo.");
define("_INSTALL_L150","O instalador actualizar� as emoticonas(cari�as) e as imaxes de Rango para poder ser usadas por XOOPS2.<br />Isto pode levar alg�n tiempo.");
define("_INSTALL_L151","O instalador actualizar� os Avatares para poder ser usados en XOOPS2.<br />Isto pode levar alg�n tempo.");
define("_INSTALL_L155","Actualizando as imaxes das Emoticonas/Rangos...");
define("_INSTALL_L156","Actualizando as imaxes dos avatares...");
define("_INSTALL_L157","Seleccione o grupo de usuarios por defecto para cada tipo de grupo");
define("_INSTALL_L158","Grupos en 1.3.x");
define("_INSTALL_L159","Administradores");
define("_INSTALL_L160","Usuarios Inscritos");
define("_INSTALL_L161","Usuarios An�nimos");
define("_INSTALL_L162","Debe escoller o grupo por defecto para cada tipo de grupo.");
define("_INSTALL_L163","T�boa %s borrada.");
define("_INSTALL_L164","Erro ao borrar a t�boa %s.");
define("_INSTALL_L165","O sitio est� actualmente pechado por mantemento, Por favor regrese m�is tarde.");

// %s is filename
define("_INSTALL_L152","Non se pode abrir %s.");
define("_INSTALL_L153","Non se puido actualizar %s.");
define("_INSTALL_L154","%s actualizado.");

define('_INSTALL_L128', 'Elixa o idioma que se usar� no proceso de instalaci�n');
define('_INSTALL_L200', 'Recargar p�xina');


define('_INSTALL_CHARSET','ISO-8859-1');
?>