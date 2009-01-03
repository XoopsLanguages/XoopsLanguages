<?php
// $Id$
$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> es un gestor de contenidos 
	orientado a objectos escrito en PHP. <b>XOOPS</b> ha revolucionado la creaci�n de portales din�micos.
	Se pueden crear y mantener de una manera f�cil sitios sencillos como una web personal, blog, hasta grandes proyectos como comunidades virtuales, sitios corporativos, intranets... �y mucho m�s!
</p>
<p>
	XOOPS se publica bajo los t�rminos de la licencia 
	<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License (GPL)</a>
	y es de libre uso y modificaci�n
	Es de libre distribuci�n, siempre y cuando se acepten los t�rminos de la licencia GPL.
</p>
<h3>Requerimientos</h3>
<ul>
	<li>Servidor web (<a href="http://www.apache.org/" target="_blank">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" target="_blank">PHP</a> 4.3.0 o superior (5.2 o superior es la recomendada)</li>
	<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> 3.23 o superior (4.1 o superior es la recomendada)</li>
</ul>
<h3>Antes de iniciar la instalaci�n</h3>
<ul>
	<li>Configure el servidor web, PHP y la base de datos de forma adecuada.</li>
	<li>Prepare una base de datos para su sitio XOOPS.</li>
	<li>Dicha base de datos ha de estar asociada a una cuenta de usuario y contrase�a con los suficientes permisos (todos)</li>
	<li>Han de tener permiso (atributos) de escritura los directorios uploads/, cache/ y templates_c/ (777) y el archivo mainfile.php (666).</li>
	<li>Si va a instalar el m�dulo Protector de GIJOE, reemplace el archivo <em>mainfile.dist.php</em> por este otro <em>/extras/mainfile.dist.php.protector</em> (recuerde renombrarlo a <em>htdocs/mainfile.dist.php</em>).</li>
	<li>Por razones de seguridad, se le recomienda mover los directorios <em>xoops_lib</em> (para las librer�as de XOOPS) y <em>xoops_data</em> (para los datos de XOOPS) fuera de <a href="http://phpsec.org/projects/guide/3.html" rel="external">la ra�z del documento</a>, o bien ren�mbrelos.</li>
	<li>Asigne permisos de escritura para el directorio <em>xoops_data/</em>;
	    Cree y/o as�gnele permisos de escritura a los directorios <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> y <em>xoops_data/caches/smarty_compile/</em>.</li>
	<li>Permita los cookies y JavaScripts en su navegador.</li>
</ul>
';
?>