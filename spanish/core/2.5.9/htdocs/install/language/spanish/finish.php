<?php
//
// _LANGCODE: es
// _CHARSET : UTF-8
// Translator: XOOPS Spanish Translation Team (Oswaldo Valladares)

$content .= "<h3>Su sitio</h3>
<p>Ahora puede acceder a la <a href='../index.php'>página principal de su sitio</a>.</p>
<h3>Soporte</h3>
<p>Visite <a href='http://xoops.org/' rel='external'>El proyecto XOOPS</a></p>
<p><strong>ATENCIÓN: </strong> Su sitio actualmente contiene la funcionalidad mínima. 
Visite <a href='http://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
para aprender más sobre la extensión de XOOPS para presentar páginas de texto, galerías de fotos, foros y más, 
con <em>modules</em> así como personalizar el aspecto de su XOOPS con <em>themes</em>.</p>
";

$content .= "<h3>Configuración de Seguridad</h3>
<p>El instalador intentará configurar su sitio por consideraciones de seguridad. Compruebe por favor para cerciorarse de:
<div class='confirmMsg'>
El archivo <em>mainfile.php</em> es solo de lectura.<br>
Elimine la carpeta <em> {$ installer_modified} </em> (o <em> install </em> si el instalador no la cambió automáticamente) de su servidor.
</div>
</p>
";