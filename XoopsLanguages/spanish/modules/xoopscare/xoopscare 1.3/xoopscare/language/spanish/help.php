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
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> es un módulo que podrá ayudarte a mantener fácilmente y <b>automáticamente</b> su sitio web.
¡Hemos hecho todo lo posible para publicar una versión estable de este módulo, sin embargo <b>use este módulo bajo su propio riesgo!</b>

XoopsCare provee de distintas herramientas, en la que Ud. podrá hacer :

1/ El mantenimiento de la Base de Datos
2/ Ejecutar consultas SQL de manera automática
3/ Ejecutar código PHP de manera automática
4/ Vaciar las carpetas templates_c y cache
5/ Eliminar comentarios no deseados(spam) en el sistema
6/ Limpiar sesiones del sistema

Para cada uno de estás acciones, es posible definir si se llevará acabo y cuándo deberá hacerlo (Programación de tareas)

Adicionalmente, se podrá registrar todas las acciones realizadas en el módulo a través del archivo de registro(log).

Si tiene activo el CRON en su servidor podrá hacer uso de él y programar las tareas de mantenimiento en su(s) sitio(s). Su uso es simple, solo has de ejecutar el archivo <i>cron.php</i> que se encuentra en la raíz del módulo (http://www.miSitioXoops.com/modules/xoopscare/cron.php) y escribir la contraseña que previamente definistes en la dministración del módulo.

No lo use de está forma : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>Si no se definio la contraseña, el módulo no hará absolutamente nada</b>, ésto es para proteger el sitio de gente malintencionada.

Si no le es posible utilizar el CRON, podrá activar el bloque del módulo en alguna parte de su sitio y el módulo automáticamente y cuando sea necesario, llevará acabo las tareas programadas.
Consejo: Utilice la caché en el bloque, para un mayor rendimiento.

****
Instrucciones:

En primer lugar, debe entrar en la administración del módulo y establecer las preferencias que considere corectas. En la sección de <b>Preferencias en general</b> deberá establecer la contraseña para utilizar el CRON en el sistema. La siguiente opción es establecer el nombre del archivo de registro (log) en el módulo, se tendrá que escribir la ruta completa del archivo. Observe, que por razones de seguridad, el archivo deberá tener una extensión .php y si define otro archivo, tendrá que crearlo.

En la sección <b>Mantenimiento en la Base de Datos</b>, se escribirá la cantidad de cada cuantos días deba llevarse acabo el mantenimiento en la Base de Datos. Si se establece el valor 0, entonces no se llevará acabo ninguna acción en la Base de Datos. El proceso de mantenimiento consiste en comprobar, reparar, analizar y optimizar todas las tablas usadas por el sitio web en Xoops.

En la sección <b>Consultas</b>,deberá  esribir y ejecutar sus consultas SQL. (Sólo si las necesita). Escriba alguna consulta SQL para  probar el rendimiento y funcionamiento en su Base de Datos.

Nota, el módulo no ejecuta toda la consultas(varias lineas o una consulta larga), las toma uno por uno y las ejecuta posteriormente. 
 	
En la sección de <b>Código PHP</b>, podrás hacer lo mismo anteriormente explicado en el punto anterior, pero ahora con la ejecución de <b>código PHP</b>
	
En la sección <b>Cache y Templates_c</b> gives you the possibility to clean the cache and templates_c folder
(folders at the root of your site)

tendrás la posibilidad de vaciar las carpetas cache y templates_c de manera automática y también programarlas para que se ejecute cada ciertos días.

<b>Sesiones</b> te dará la posibilidad de limpiar los registros de la tabla de sesiones de XOOPS.

Finalmente, en la sección <b>Comentarios no deseados</b>, puedes quitar todo el spam de los comentarios.


Esta funcionalidad del módulo funciona bajo la opción de <b>Censura de Palabras</b> en XOOPS. Primero, en las preferencias del sitio, debes permitir la censura de palabras no deseadas, escriba algunas palabras y seleccione la palabra hacer substituidad por #OOPS#.
Por defecto la palabras bajo censura son remplazads por #OOPS#.

El módulo XoopsCare buscará en los comentarios que contengan estas palabras y las reemplazarán en los títulos o el contenido de los comentarios; Luego se les aplicará las preferencias que definistes en que hacer con los comentarios considerados como no deseados(spam).
Además, el módulo puede extraer las direcciones IPs del los spammer (de los comentarios) y agregar automáticamente las direcciones a la lista de bloqueados(Baneados)

Finalmente, puedes seleccionar qué hacer con los comentarios que detectaste como no deseados, y puedes guardarlos, no publicarlos, ocultarlos y eliminarlos.


<a href="http://www.instant-zero.com" target="_blank">Deseamos conocer si le agrada el módulo</a>

endhelp;
?>
