<?php
// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_UPGRADE_WELCOME', <<<'EOT'
<h2>Actualizador de XOOPS</h2>

<p>
<em>El Actualizador</em> examinará esta instalación de XOOPS y aplicará los parches necesarios para que sea compatible
con el nuevo código XOOPS. Los parches pueden incluir cambios en la base de datos, agregando configuraciones predeterminadas para nuevos
elementos de configuración, actualizaciones de archivos y datos, y más.
<p>
Después de cada parche, el actualizador informará el estado y esperará por su entrada para continar. Al
final de la actualización, el control pasará a la función de actualización del módulo del sistema.

<div class="alert alert-warning">
Una vez que se completa la actualización, no se olvide de:
<ul class="fa-ul">
 <li><span class="fa-li fa fa-folder-open-o"></span> eliminar la carpeta de actualización</li>
 <li><span class="fa-li fa fa-refresh"></span> actualizar cualquier módulo que haya cambiado</li>
</div>

EOT
);
