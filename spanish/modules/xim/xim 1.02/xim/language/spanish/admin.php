<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* XIM - Xoops Instant Messenger
*
* A one-on-one messenger written for xoops. Inspired by Anant Garg's -(anantgarg.com | inscripts.com)-
* 2009 tutorial on jquery messenger & by the original facebook messenger and a few more. This module has
* been adapted, written, re-written and extended heavily by Andrax & Culex.
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         http://www.fsf.org/copyleft/gpl.html GNU public license
* @package         modules
* @subpackage      xim
* @since           2.4.0
* @author          Andrax - homepage.: http://guxbrasil.org & email.: lcbc@ig.com.br
* @author          Culex  - homepage.: http://culex.dk		& email.: culex@culex.dk
* Spanish Translation  Oswaldo Valladares - http://www.xoopsdemo.tk
**/


// tab titles
	define('_AM_XIM_ADMINMESSAGESEND','Enviar Mensaje a todos'); 
	define('_AM_XIM_LOGSMAINTNANCE','Mantenimiento'); 

// tab one in admin section
define('_AM_XIM_MODULEINSTALL','Versión del Módulo');
define('_AM_XIM_INSTALLDATE','Módulo instalado en la fecha');
define('_AM_XIM_DATEOFFIRSTMESSAGE','Fecha del mensaje más antiguo');
define('_AM_XIM_TOTALUSERS','Usuarios totales usando Xim');
define('_AM_XIM_AVERAGEMSGPERDAY','Mensajes de media por día');
define('_AM_XIM_TOPCHATTERS','Total de Usuarios más activos en el chat');
define('_AM_XIM_TOPCHATTERS_TODAY','Total de Usuarios más activos en las últimas 24 horas');
define('_AM_XIM_STATISTICS_TITLE','Estadísticas XIM'); 
define('_AM_XIM_MODULEINFO','Información del Módulo'); 
define('_AM_XIM_USERSTATS','Estadísticas de usuarios');
define('_AM_XIM_NONEYET','No hay mensajes en la base de datos');
define('_AM_XIM_NO','No');
define('_AM_XIM_THEREARE','Hay');
define('_AM_XIM_UPDATE_STATUS','Estado de su versión XIM:');

// tab two in admin section
define('_AM_XIM_ADMINMESSAGE','Mensajes del Administrador');
define('_AM_XIM_MESSAGES','Mensajes');

define('_AM_XIM_SUBMIT','Enviar!');
define('_AM_XIM_LASTADMINMESSAGE_TITLE','Último mensaje del Administrador');
define('_AM_XIM_LASTADMINMESSAGE_MSG','Mensaje');
define('_AM_XIM_LASTADMINMESSAGE_DATE','Fecha de envío');
define('_AM_XIM_LASTADMINMESSAGE_WASREAD','El último mensaje del administrador es leído por');
define('_AM_XIM_LASTADMINMESSAGE_USERS','usuarios');
define('_AM_XIM_NOADMINMESSAGEYET','No has enviado ningún mensaje de administración para todos los usuarios todavía ;-)');
define('_AM_XIM_NOADMINMESSAGEYET_DATE','øøøhh!');

// Send to all
define('_AM_XIM_POSTTOALL_TITLE','Envíe su Mensaje');
define('_AM_XIM_POSTTOALL_DESC','Envie un mensaje a todos los miembros usando XIM');
define('_AM_XIM_POSTTOALL_COUNT','Mensaje (Caracteres ');
define('_AM_XIM_POSTTOALL_SUBMIT','Enviar');

// tab three in admin section
define('_AM_XIM_LOGS_TITLE','Información de Registros');
define('_AM_XIM_DBHAS','La base de datos tiene');
define('_AM_XIM_DBHASPOSTS','Mensajes en total');
define('_AM_XIM_DBHASOLDPOSTS','Mensajes de más de una semana');
define('_AM_XIM_LOGSCLEAN','Eliminar los registros antiguos');
define('_AM_XIM_LOGSCLEANDESC','Elija aquí cual de los registros le gustaría Eliminar');
define('_AM_XIM_LOGS_CHOOSE','Seleccione la acción para los mensajes');
define('_AM_XIM_LOGS_USER_MOW_RECD','Eliminar mensajes de usuarios de más de una semana (recibidos)');
define('_AM_XIM_LOGS_USER_MOW_ALL','Eliminar mensajes de usuarios de más de una semana (TODOS)');
define('_AM_XIM_LOGS_USER_MTW_RECD','Eliminar mensajes del usuario de más de 2 semanas (recibidos)');
define('_AM_XIM_LOGS_USER_MTW_ALL','Eliminar mensajes del usuario de más de 2 semanas (TODOS)');
define('_AM_XIM_LOGS_USER_MOM_RECD','Eliminar mensajes de usuarios de más de 1 mes (recibidos)');
define('_AM_XIM_LOGS_USER_MOM_ALL','Eliminar mensajes de usuarios de más de 1 mes (TODOS)');
define('_AM_XIM_LOGS_ADMIN_MOW_RECD','Eliminar los mensajes de administración de más de una semana (recibidos)');
define('_AM_XIM_LOGS_ADMIN_MOW_ALL','Eliminar los mensajes de administración de más de una semana (TODOS)');
define('_AM_XIM_LOGS_ADMIN_MTW_RECD','Eliminar los mensajes de administración de más de 2 semanas (recibidos)');
define('_AM_XIM_LOGS_ADMIN_MTW_ALL','Eliminar los mensajes de administración de más de 2 semanas (TODOS)');
define('_AM_XIM_LOGS_ADMIN_MOM_RECD','Eliminar los mensajes de administración de más de 1 mes (recibidos)');
define('_AM_XIM_LOGS_ADMIN_MOM_ALL','Eliminar los mensajes de administración de más de 1 mes (TODOS)');
define('_AM_XIM_LOGS_ADMIN_MSG_ALL_RECD','Eliminar todos los mensajes recibidos de administración.');
define('_AM_XIM_LOGS_SUBMIT','Enviar');
define('_AM_XIM_LOGS_DOUPDATE','Lista desplegable para Mantenimiento de Mensajes !');

// various others
define('_AM_XIM_UPDATE_CRITICAL_UPD','Hay una actualización crítica!');
define('_AM_XIM_UPDATE_NORMAL_UPD','Hay una nueva versión lista para descargar');
define('_AM_XIM_UPDATE_SERVER_ERROR','El servidor parece estar caido o la actualización está en progreso. <br/> Inténtelo más tarde.');
define('_AM_XIM_UPDATE_FILE_DESC','Descripción de la versión más reciente');
define('_AM_XIM_UPDATE_SERVER_FILE','Puede descargar la nueva versión desde aquí');
define('_AM_XIM_UPDATE_YOUHAVENEWESTVERSION','Tiene la versión más reciente de Xim');
define('_AM_XIM_HELP','Ayuda');

//Help section

define('_AM_XIM_HELP_ABOUT','Acerca de Xim');
define('_AM_XIM_HELP_PREFACE','Xim es un sistema de mensajería. Inspirado en el ejemplo escrito por Garg Anant, chat jQuery de facebook y el mensajero de facebook. El sistema base se ha vuelto a escribir, adaptado y ampliado en gran medida a Xoops por Culex y Andrax. <br/> El chat es uno-a-uno y totalmente compatible con Xoops desde la versión 2.4.0. <br/> XIM es liberado bajo los términos de la <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License (GPL)</a> y es libre de utilizar y modificar. Es libre de redistribuir siempre que cumpla con los términos de distribución de la GPL.');
define('_AM_XIM_HELP_HEADER_REQUIREMENTS','Requisitos');
define('_AM_XIM_HELP_REQUIREMENTS','<ul class="ayuda">
										<li>Servidor WWW (<a href="http://www.apache.org/" target="_blank">Apache</a>, IIS, Roxen, etc)</li>
										<li><a href="http://www.xoops.org/" target="_blank">XOOPS</a> 2.4.0 o superior, xim utiliza precargas</li>
										<li><a href="http://www.php.net/" target="_blank">PHP</a> 4.3.0 o superior (Se recomienda 5.2 o superior)</li>
										<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> 3.23 o superior (Se recomienda 4.1 o superior)</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_RECOMMENDED','Recomendaciones para probar XIM');
define('_AM_XIM_HELP_RECOMMENDED','<ul class="Ayuda">
									<li>Browser <a href="http://www.mozilla.com" target"_blank">Firefox</a> y el plugin de Firefox <a href="https://addons.mozilla.org/en-US/firefox/downloads/latest/1843/addon-1843-latest.xpi" target="_blank">plugin FireBug (última versión)</a></li>
								  </ul>');
define('_AM_XIM_HELP_HEADER_INSTALLATION','Cómo instalar');
define('_AM_XIM_HELP_FIRSTTIMEINSTALL','<ul class="Ayuda">
											<li>Revise para ver si la versión descargada de Xim es la última.</li>
											<li>Permita cookies y JavaScript en su navegador.</li>
										</ul>');
										
define('_AM_XIM_HELP_HEADER_HOSTED_PLATFORM','Instalación en una plataforma de hospedaje en linea');
define('_AM_XIM_HELP_HOSTED_PLATFORM','<ul class="ayuda">
										<li>Suba el folder descomprimido de xim al directorio modules.</li>
										<li>Instale usando el instalador de módulos de XOOPS como la instalación de cualquier otro módulo.</li>
										<li>Haga visible el bloque para los grupos de usuarios que quiera que lo vean(admin/moderatores, registrados etc).</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_UPGRADING','Actualizar desde una versión anterior');
define('_AM_XIM_HELP_UPGRADING','<ul class="ayuda">
									<li>Asegúrese de estar usando la versión más reciente</li>
									<li>Lea el archivo leame.txt </li>
									<li>Si es posible es mejor hacer una copia de seguridad de sus tablas</li>
								</ul>');
define('_AM_XIM_HELP_HEADER_FAQ','Problemas resueltos');
define('_AM_XIM_HELP_HEADER_COMMENPROBLEMS1','Página en blanco, no puede hacer clic en el nombre de usuario, el bloque no aparece .......');
define('_AM_XIM_HELP_COMMENPROBLEMS1','<ul class="ayuda">
										<li>Asegúrese de que su bloque sea visible en "Todas las páginas" y no solo en la página principal.</li>
										<li>Asegúrese de que su versión de Xoops es mayor que ">" 2.4.0. antes de esta no usa precargas.</li>
										<li>Active el modo debug y revise si aparecen errores.</li>
										<li>Usando FireFox, haga clic derecho en la pantalla, elija inspector de elementos, elija consola el las pestañas y revise para ver si chat heartbeat se está ejecutando<br/>
										"GET http://www.yoursite.com/modules/xim/chat.php?action=chatheartbeat&_=XXXXXXXXXXXX xxx OK xxx MS"</li>
										<li>Si no hay errores, use Firebug (Clic derecho->inspector de elementos->consola) y vea si hay errores en Jquery.</li>
										<li>Si no hay errores jquery. Limpie la caché-> actualize el módulo xim, en el sistema de módulos.</li>
										<li>Si todavía sale la página en blanco. Valla al módulo Protector -> configuraciones y escriba xim en el formulario "Módulos exentos de revisión Dos/Crawler".</li>
										<li>Revise si su tema tiene incluido en más de una version de Jquery. Usualmente en el head de su archivo theme.<br/>
										Normalmente este no es problema tanto como los otros jquery incluidos > 1.3.2</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_SOUNDPROBLEMS','Elejí mensajes con sonido pero no recibo audio');
define('_AM_XIM_HELP_SOUNDPROBLEMS','<ul class="ayuda">
										<li>Revise si sus parlantes están encendidos y el volumen subido</li>
										<li>El sonido de XIM usa el framework soundmanager2. Esta es una pequeña utilidad en flash para reproducir sonidos. Si tiene instalado el flashplayer en su navegador, debe trabajar corectamente</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_CONTACTS','Haga preguntas');
define('_AM_XIM_HELP_OTHERHELP','<ul class="ayuda">
									<li>Si todavía tiene preguntas o errores, postee en el <a href="http://www.xoops.org/modules/newbb" target="_blank">Foro de soporte de Xoops (inglés)</a></li>
								</ul>');
?>