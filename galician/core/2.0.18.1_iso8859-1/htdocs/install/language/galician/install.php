<?php
// $Id: install.php 669 2006-08-25 22:14:09Z skalpa $
define("_INSTALL_L0","Benvido ó asistente de instalación de XOOPS 2.0");
define("_INSTALL_L70","Por favor cambie o permiso/atributo do arquivo mainfile.php a fin de que se poida sobrescribir,é dicir, -chmod 777- nun servidor X/LINUX, ou -Read only(Somentes Lectura)- nun servidor Windows). Volva a recargar a páxina (F5) unha vez teña axustado o permiso.");
//define("_INSTALL_L71","Prema o botón para comezar a instalación.");
define("_INSTALL_L1","Edite o arquivo mainfile.php e busque o seguinte código na liña 31:");
define("_INSTALL_L2","Agora , cambie esta liña por:");
define("_INSTALL_L3","Siga coa liña 35, cambie %s por %s");
define("_INSTALL_L4","¡Probe de novo!");
define("_INSTALL_L5","¡ATENCIÓN!");
define("_INSTALL_L6","Existe unha diferencia entre a súa configuración XOOPS_ROOT_PATH na liña 31 de mainfile.php e a que XOOPS ten detectado.");
define("_INSTALL_L7","A súa Configuración:");
define("_INSTALL_L8","XOOPS Detecta: ");
define("_INSTALL_L9","(En plataformas MS, poderá recibir esta mensaxe de erro incluso cando a súa configuración sexa correcta. Se este é o caso, por favor prema o botón para continuar)");
define("_INSTALL_L10","Por favor, prema o botón para continuar se todo é correcto.");
define("_INSTALL_L11","A ruta(path) ó seu directorio raíz(root) XOOPS.");
define("_INSTALL_L12","URL ó seu directorio root de XOOPS: ");
define("_INSTALL_L13","Se a configuración é correcta, prema o botón para continuar.<br />(Ainda non se crearán as tablas)");
define("_INSTALL_L14","Continuar");
define("_INSTALL_L15","Por favor, abra o ficheiro mainfile.php e inserte a información necesaria para a configuración da base de datos");
define("_INSTALL_L16","%s é o nome do host da súa base de datos.");
define("_INSTALL_L17","%s é o nome do usuario da súa conta da base de datos.");
define("_INSTALL_L18","%s é o contrasinal necesario para acceder á súa base de datos.");
define("_INSTALL_L19","%s é o nome da base de datos na cal se crearán as tablas de Xoops.");
define("_INSTALL_L20","%s é o prefixo que se antepoñerá nas tablas cando se creen.");
define("_INSTALL_L21","Non atopo a base de datos no servidor:");
define("_INSTALL_L22","¿Permitirlle a Xoops tentar creala?");
define("_INSTALL_L23","Si");
define("_INSTALL_L24","Non");
define("_INSTALL_L25","Temos detectado a seguinte información na configuración de mainfile.php. Por favor, corríxaa se fora necesario.");
define("_INSTALL_L26","Configuración da base de datos");
define("_INSTALL_L51","<b>Base de Datos</b>");
define("_INSTALL_L66","Elixa que base de datos usará");
define("_INSTALL_L27","<b>Nome do host</b>");
define("_INSTALL_L67","Nome do host do servidor da base de datos. Se non está seguro, 'localhost' debería de funcionar na maioría das ocasións.");
define("_INSTALL_L28","<b>Nome do Usuario da base de datos</b>");
define("_INSTALL_L65","Nome do Usuario da base de datos no host");
define("_INSTALL_L29","<b>Nome da base de datos</b>");
define("_INSTALL_L64","O Nome do nome da base de datos no host. O instalador tratará de crear a base de datos no caso de que non exista");
define("_INSTALL_L52","<b>Contrasinal da base de datos</b>");
define("_INSTALL_L68","Contrasinal para a conta de usuario da súa base de datos");
define("_INSTALL_L30","<b>Prefixos para as Tablas</b>");
define("_INSTALL_L63","O prefixo será anteposto a tódalas tablas novas que se creen, para evitar problemas de duplicidade con outros contidos. Se non está seguro, use o nome 'xoops' por defecto ainda que se recomenda que sexa calquera outro por razóns de seguridade.");
define("_INSTALL_L54","<b>¿Usar conexión persistente?</b>");
define("_INSTALL_L69","Por defecto é 'NON'. Elixa -Non- se non está seguro");
define("_INSTALL_L55","<b>XOOPS Ruta física</b>");
define("_INSTALL_L59","Ruta física ó seu directorio principal XOOPS SEN Barra invertida á esquerda(\)");
define("_INSTALL_L56","<b>XOOPS Ruta Virtual  (URL)</b>");
define("_INSTALL_L58","Ruta virtual ó seu directorio principal XOOPS SEN Barra invertida á esquerda(\)");

define("_INSTALL_L31","Non se pode crear a base de datos. Contacte con o administrador do servidor para que lle solucione o problema.");
define("_INSTALL_L32","Instalación Completa");
define("_INSTALL_L33","Prema <a href='../index.php'>AQUÍ</a> para acceder ó seu sitio.");
define("_INSTALL_L35","Se houbera erros, visite a seguinte páxina e consulte con os desenroladores <a href='http://www.xoops.org/' target='_blank'>XOOPS.org</a>");
define("_INSTALL_L36","Por favor, elixa o seu nome e contrasiñal como administrador. Imos crear as tablas necesarias para a base de datos.");
define("_INSTALL_L37","Nombre do Administrador");
define("_INSTALL_L38","Correo-E do Administrador");
define("_INSTALL_L39","Contrasinal do Administrador");
define("_INSTALL_L74","Repita o Contrasinal");
define("_INSTALL_L40","Crear Tablas");
define("_INSTALL_L41","Por favor, vuelva á páxina anterior e cumprimente o formulario correctamente.");
define("_INSTALL_L42","Voltar");
define("_INSTALL_L57","Por favor, escriba %s");

// %s is database name
define("_INSTALL_L43","¡Base de Datos %s creada!");

// %s is table name
define("_INSTALL_L44","Imposible crear %s");
define("_INSTALL_L45","Tabla %s creada");

define("_INSTALL_L46","Para que os módulos incluidos no paquete funcionen correctamente, os seguintes arquivos deben ter permisos/atributos de -escritura- no servidor. Por favor, cambie ditos permisos. En servidores Unix/Linux 'chmod 666 nome_arquivo' e 'chmod 777 nome_directorio' e para servidores Windows desmarcar 'Somentes lectura'.");
define("_INSTALL_L47","Continuar");

define("_INSTALL_L53","Por favor, confirme que a siguiente información é a que ten facilitado");

define("_INSTALL_L60","Imposible modificar o ficheiro mainfile.php. Comprobe os permisos e probe de novo.");
define("_INSTALL_L61","Imposible modificar o ficheiro mainfile.php. Solicite axuda ó administrador do seu sitio web.");
define("_INSTALL_L62","A configuración gardouse correctamente. Prema sobre o botón para continuar.");
define("_INSTALL_L72","Os seguintes directorios deben ser creados con permisos de escritura polo servidor. (ex. 'chmod 777 nome_directorio' nun  servidor UNIX/LINUX)");
define("_INSTALL_L73","Correo-E incorrecto");

// add by haruki
define("_INSTALL_L80","introducción");
define("_INSTALL_L81","Comprobando permisos de arquivo");
define("_INSTALL_L82","Comprobando permisos de arquivo e directorios..");
define("_INSTALL_L83","%s NON é escribible.");
define("_INSTALL_L84","%s é escribible.");
define("_INSTALL_L85","O directorio %s NON é escribible.");
define("_INSTALL_L86","O directorio %s é escribible.");
define("_INSTALL_L87","Sen erros.");
define("_INSTALL_L89","Configuración Xeral");
define("_INSTALL_L90","Configuración Xeral");
define("_INSTALL_L91","confirme");
define("_INSTALL_L92","gardar configuración");
define("_INSTALL_L93","modificar configuración");
define("_INSTALL_L88","Gardando a configuración..");
define("_INSTALL_L94","Comprobe a ruta e URL");
define("_INSTALL_L127","Comprobando a ruta e URL..");
define("_INSTALL_L95","Non atopo a ruta física ó seu directorio XOOPS.");
define("_INSTALL_L96","Hai unha discrepancia entre a ruta física detectada (%s) e a que insertou.");
define("_INSTALL_L97","A <b>Ruta Física</b> é correcta.");

define("_INSTALL_L99","A <b>Ruta Física:</b> debe ser un directorio.");
define("_INSTALL_L100","A <b>Ruta Virtual:</b> é unha dirección URL correcta.");
define("_INSTALL_L101","A <b>Ruta Virtual:</b> NON é unha dirección URL correcta.");
define("_INSTALL_L102","confirme a configuración da base de datos");
define("_INSTALL_L103","voltar ó principio");
define("_INSTALL_L104","comprobar a base de datos");
define("_INSTALL_L105","probando a crear a base de datos");
define("_INSTALL_L106","Imposible conectar coa base de datos do servidor.");
define("_INSTALL_L107","Por favor, comprobe o servidor da base de datos así como a súa configuración.");
define("_INSTALL_L108","A conexión ó servidor da base de datos é CORRECTO.");
define("_INSTALL_L109","A Base de datos %s NON existe.");
define("_INSTALL_L110","A Base de datos %s existe e é accesible para conectarse.");
define("_INSTALL_L111","A conexión á base de datos é CORRECTA.<br />Prema o botón para crear as tablas da base de datos.");
define("_INSTALL_L112","Configuración do Usuario Administrador");
define("_INSTALL_L113","Tabla %s eliminada.");
define("_INSTALL_L114","Erro ó crear as tablas da base de datos.");
define("_INSTALL_L115","Tablas creadas!");
define("_INSTALL_L116","insertar datos");
define("_INSTALL_L117","rematado");

define("_INSTALL_L118","Erro ó crear a tabla %s.");
define("_INSTALL_L119","%d rexistro(s) engadido(s) á tabla %s.");
define("_INSTALL_L120","Erro ó engadir %d entradas á tabla %s.");

define("_INSTALL_L121","Á constante %s se lle asigna o valor %s.");
define("_INSTALL_L122","Erro escribindo o valor da constante %s.");

define("_INSTALL_L123","Arquivo %s gardado no directorio cache/ .");
define("_INSTALL_L124","Erro ó gardar o arquivo %s no directorio cache/ .");

define("_INSTALL_L125","O arquivo %s foi sobrescrito por %s.");
define("_INSTALL_L126","Non poido sobrescribir o arquivo %s.");

define("_INSTALL_L130","Este programa instalador ten detectado tablas para XOOPS 1.3.x na súa Base de Datos.<br />O instalador probará a actualizar a súa base de datos a XOOPS2.");
define("_INSTALL_L131","As tablas para XOOPS2 xa existen na súa base de datos.");
define("_INSTALL_L132","actualizar tablas");
define("_INSTALL_L133","Tabla %s actualizada.");
define("_INSTALL_L134","Erro ó actualizar a tabla %s.");
define("_INSTALL_L135","Error ó actualizar as tablas da base de datos.");
define("_INSTALL_L136","Tablas da Base de datos actualizadas.");
define("_INSTALL_L137","actualizar módulos");
define("_INSTALL_L138","actualizar comentarios");
define("_INSTALL_L139","actualizar caricaturas");
define("_INSTALL_L140","actualizar emoticóns");
define("_INSTALL_L141","O instalador actualizará agora cada un dos módulos para que poidan traballar con XOOPS2.<br />Asegúrese de que ten subido tódoslos arquivos do paquete XOOPS2 ó seu servidor.<br />Isto pode tomar algún tempo.");
define("_INSTALL_L142","Actualizando módulos..");
define("_INSTALL_L143","O instalador actualizará agora a configuración de datos de XOOPS 1.3.x para ser usada con XOOPS2.");
define("_INSTALL_L144","actualizar a configuración");
define("_INSTALL_L145","Comentario (ID: %s) engadido á Base de Datos.");
define("_INSTALL_L146","Non poido engadir o comentario (ID: %s) á Base de Datos.");
define("_INSTALL_L147","Actualizando comentarios..");
define("_INSTALL_L148","Actualización completa.");
define("_INSTALL_L149","O instalador actualizará os comentarios de XOOPS 1.3.x para que poidan ser usados en XOOPS2<br />Isto pode tardar algún tempo.");
define("_INSTALL_L150","O instalador actualizará as cariñas(emoticones) e las imaxes de Rango para poder ser usadas por XOOPS2.<br />Isto pode tardar algún tempo.");
define("_INSTALL_L151","O instalador actualizará as Caricaturas (Avatar) para poder ser usadas en XOOPS2.<br />Isto pode tardar algún tempo.");
define("_INSTALL_L155","Actualizando as imaxes dos Emoticóns/Rangos...");
define("_INSTALL_L156","Actualizando as imaxes das caricaturas..");
define("_INSTALL_L157","Seleccioe o grupo de usuarios por defecto para cada tipo de grupo");
define("_INSTALL_L158","Grupos en 1.3.x");
define("_INSTALL_L159","Administradores");
define("_INSTALL_L160","Usuarios Inscritos");
define("_INSTALL_L161","Usuarios Anónimos");
define("_INSTALL_L162","Debe elixir o grupo por defecto para cada tipo de grupo.");
define("_INSTALL_L163","Tabla %s borrada.");
define("_INSTALL_L164","Erro ó borrar a tabla %s.");
define("_INSTALL_L165","O sitio está actualmente pechado por mantenemento, Por favor volte máis tarde.");

// %s is filename
define("_INSTALL_L152","Non poido abrir %s.");
define("_INSTALL_L153","Non poido actualizar %s.");
define("_INSTALL_L154","%s actualizado.");

define('_INSTALL_L128','Elixa o idioma que se empregará no proceso de instalación');
define('_INSTALL_L200','Recargar páxina');


define('_INSTALL_CHARSET','ISO-8859-1');
?>