<?php
// $Id: finish.php 2768 2009-02-05 02:40:31Z phppp $
// _LANGCODE: es
// _CHARSET : ISO-8859-1
// Translator: XOOPS Spanish Support (http://www.esxoops.com)

$content .=
"<h3>Su sitio</h3>
<p>Ahora puedes acceder a la <a href='../index.php'>p�gina principal de su sitio.</a></p>
<h3>Soporte</h3>
<p>Visite: <a href='http://xoops.sourceforge.net/' rel='external'>Soporte de XOOPS (en ingl�s)</a></p>
<p><strong>ATTENTION :</strong> Su Web contiene ahora contiene funcionalidades m�nimas, si desea a�adir contenidos: p�ginas de texto, galer�as de fotos, foros, enlaces... visite el repositorio de descargas <a href='http://www.xoops.org/modules/repository' rel='external' title='Choice and download modules'>clicando aqu�</a> e instale dichos componentes. Los mismo para <a href='http://www.xoops.org/modules/extgallery' rel='external' title='Select and Install new themes'>a�adir dise�os adicionales</a>.</p>
<p>Visite: <a href='http://www.esxoops.com/' rel='external'>XOOPS en Espa�ol</a></p>
";

$content .=
"<h3>Configuraci�n de seguridad</h3>
<p>El instalador tratar� de configurar su sitio de forma segura. Por favor, compruebe que:
<div class='confirmMsg'>
El archivo <em>mainfile.php</em> es de s�lo lectura.<br />
Elimine la carpeta <em>{$installer_modified}</em> (o <em>install</em> si no fue renombrado autom�ticamente el instalador) de su servidor.
</div>
</p>
";

?>