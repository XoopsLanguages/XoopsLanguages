<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navigation
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Administración de Bloques');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Administrar');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Agrega un nuevo bloque');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Edita un bloque');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Clonar un bloque');
// Forms
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Bloque Personalizado');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Todos los tipos');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Módulos');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Grupos');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Página');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Mostrar bloque');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Ocultar bloque');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Clonar');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Izquierda');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Superior Izquierda');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Superior Centro');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Superior Derecha');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Derecha');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Inferior Izquierda');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Inferior Centro');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Inferior Derecha');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Izquierda del Pie de Página');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Centro del pie de página');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Drecha del Pie de Página');

define('_AM_SYSTEM_BLOCKS_ADD', 'Añadir Bloque');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Administrar bloque');
define('_AM_SYSTEM_BLOCKS_NAME', 'Nombre');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Tipo de Bloque');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Bloque Lateral - Izquierda');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Bloque Lateral - Derecha');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Bloque Central - Izquierda');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Bloque Central - Derecha');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Bloque Central - Centro');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Bloque central - Abajo Izquierdo');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Bloque Central - Abajo Derecha');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Bloque de Pie de Página - Izquierda');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Bloque de Pie de Página - Centro');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Bloque de Pie de Página: Derecha');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Bloque central - Abajo');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Peso');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Visible');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Visible en');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Página Principal');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Todas las páginas');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'No asignado');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Título');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Contenido');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Etiquetas útiles:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s imprimirá %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Tipo de Contenido');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'Script PHP');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Formato Automático (emoticones habilitados)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Formato Automático (emoticones deshabilitados)');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Tiempo de Cache');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Bloque personalizado (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Bloque personalizado (PHP)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Bloque personalizado (Auto Formato + emoticones)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Bloque personalizado (Formato automático)');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Editar Plantilla');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Opciones');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Arrastrar u ordenar el bloque');
// Messages
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', '¿Estás seguro de eliminar este bloque? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'No se pueden borrar los bloques del sistema!');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'Este bloque no se puede eliminar directamente! Si desea desactivar este bloque, desactive el módulo.');
// Tips
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>You can easily change side or order position with the drag\'n drop, click on <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> this image and set your site just the way you want it</li>
<li>Add a new custom block</li>
<li>Set block online or offline by clicking on <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> or <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Pie de Página Izquierdo');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Pie de Página Centro');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Pie de Página Derecha');
