<?php  //* Spanish Translation by JulioNC  *// 
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> es un m�dulo que podr� ayudarte a mantener f�cilmente y <b>autom�ticamente</b> su sitio web.
�Hemos hecho todo lo posible para publicar una versi�n estable de este m�dulo, sin embargo <b>use este m�dulo bajo su propio riesgo!</b>

XoopsCare provee de distintas herramientas, en la que Ud. podr� hacer :

1/ El mantenimiento de la Base de Datos
2/ Ejecutar consultas SQL de manera autom�tica
3/ Ejecutar c�digo PHP de manera autom�tica
4/ Vaciar las carpetas templates_c y cache
5/ Eliminar comentarios no deseados(spam) en el sistema
6/ Limpiar sesiones del sistema

Para cada uno de est�s acciones, es posible definir si se llevar� acabo y cu�ndo deber� hacerlo (Programaci�n de tareas)

Adicionalmente, se podr� registrar todas las acciones realizadas en el m�dulo a trav�s del archivo de registro(log).

Si tiene activo el CRON en su servidor podr� hacer uso de �l y programar las tareas de mantenimiento en su(s) sitio(s). Su uso es simple, solo has de ejecutar el archivo <i>cron.php</i> que se encuentra en la ra�z del m�dulo (http://www.miSitioXoops.com/modules/xoopscare/cron.php) y escribir la contrase�a que previamente definistes en la dministraci�n del m�dulo.

No lo use de est� forma : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>Si no se definio la contrase�a, el m�dulo no har� absolutamente nada</b>, �sto es para proteger el sitio de gente malintencionada.

Si no le es posible utilizar el CRON, podr� activar el bloque del m�dulo en alguna parte de su sitio y el m�dulo autom�ticamente y cuando sea necesario, llevar� acabo las tareas programadas.
Consejo: Utilice la cach� en el bloque, para un mayor rendimiento.

****
Instrucciones:

En primer lugar, debe entrar en la administraci�n del m�dulo y establecer las preferencias que considere corectas. En la secci�n de <b>Preferencias en general</b> deber� establecer la contrase�a para utilizar el CRON en el sistema. La siguiente opci�n es establecer el nombre del archivo de registro (log) en el m�dulo, se tendr� que escribir la ruta completa del archivo. Observe, que por razones de seguridad, el archivo deber� tener una extensi�n .php y si define otro archivo, tendr� que crearlo.

En la secci�n <b>Mantenimiento en la Base de Datos</b>, se escribir� la cantidad de cada cuantos d�as deba llevarse acabo el mantenimiento en la Base de Datos. Si se establece el valor 0, entonces no se llevar� acabo ninguna acci�n en la Base de Datos. El proceso de mantenimiento consiste en comprobar, reparar, analizar y optimizar todas las tablas usadas por el sitio web en Xoops.

En la secci�n <b>Consultas</b>,deber�  esribir y ejecutar sus consultas SQL. (S�lo si las necesita). Escriba alguna consulta SQL para  probar el rendimiento y funcionamiento en su Base de Datos.

Nota, el m�dulo no ejecuta toda la consultas(varias lineas o una consulta larga), las toma uno por uno y las ejecuta posteriormente. 
 	
En la secci�n de <b>C�digo PHP</b>, podr�s hacer lo mismo anteriormente explicado en el punto anterior, pero ahora con la ejecuci�n de <b>c�digo PHP</b>
	
En la secci�n <b>Cache y Templates_c</b> gives you the possibility to clean the cache and templates_c folder
(folders at the root of your site)

tendr�s la posibilidad de vaciar las carpetas cache y templates_c de manera autom�tica y tambi�n programarlas para que se ejecute cada ciertos d�as.

<b>Sesiones</b> te dar� la posibilidad de limpiar los registros de la tabla de sesiones de XOOPS.

Finalmente, en la secci�n <b>Comentarios no deseados</b>, puedes quitar todo el spam de los comentarios.


Esta funcionalidad del m�dulo funciona bajo la opci�n de <b>Censura de Palabras</b> en XOOPS. Primero, en las preferencias del sitio, debes permitir la censura de palabras no deseadas, escriba algunas palabras y seleccione la palabra hacer substituidad por #OOPS#.
Por defecto la palabras bajo censura son remplazads por #OOPS#.

El m�dulo XoopsCare buscar� en los comentarios que contengan estas palabras y las reemplazar�n en los t�tulos o el contenido de los comentarios; Luego se les aplicar� las preferencias que definistes en que hacer con los comentarios considerados como no deseados(spam).
Adem�s, el m�dulo puede extraer las direcciones IPs del los spammer (de los comentarios) y agregar autom�ticamente las direcciones a la lista de bloqueados(Baneados)

Finalmente, puedes seleccionar qu� hacer con los comentarios que detectaste como no deseados, y puedes guardarlos, no publicarlos, ocultarlos y eliminarlos.


<a href="http://www.instant-zero.com" target="_blank">Deseamos conocer si le agrada el m�dulo</a>

endhelp;
?>
