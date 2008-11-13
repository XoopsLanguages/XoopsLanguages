<?php
// $Id: welcome.php 2089 2008-09-15 05:06:49Z phppp $
$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> E\' un sistema di web publishing open-source e
	Object-Oriented scritto in PHP. E\' il tool ideale per sviluppare piccoli e grandi siti internet dinamici come Community, Intranet aziendali, Portali corporate, Weblog e molto altro.
</p>
<p>
	XOOPS viene rilasciato secondo i termini della 
	<a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
	ed è gratuito per ogni tipo di utilizzo e modifica.
	Siete liberi di ridistribuirlo sempre nel rispetto delle licenze GPL.
</p>
<h3>Requisiti</h3>
<ul>
	<li>WWW Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 superiore (5.2 o superiore raccomandato)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 o superiore (4.1 o superiore raccomandato)</li>
</ul>
<h3>Prima di installare</h3>
<ul>
	<li>Imposta il server WWW, PHP e quello del database correttamente.</li>
	<li>Prepara un database per il tuo sito XOOPS.</li>
	<li>Prepara un utente per il database e assicurati che abbia accesso completo alle operazioni sul DB.</li>
	<li>Rendi scrivibili le directory uploads/, cache/ e templates_c/ e il file mainfile.php.</li>
	<li>Se hai bisogno di installare il modulo Protector di GIJOE, sostituisci il file <em>mainfile.dist.php</em> con <em>/extras/mainfile.dist.php.protector</em> (ricordati di rinominare il file in <em>htdocs/mainfile.dist.php</em>).</li>
	<li>Per ragioni di sicurezza, sei invitato a spostare le directory <em>xoops_lib</em> (per le librerie di XOOPS) e <em>xoops_data</em> (per i dati di XOOPS) fuori dalla <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>, oppure cambia il nome alle cartelle.</li>
	<li>Rendi scrivibile la cartella <em>xoops_data/</em>;
	    Crea e rendi scrivibili le cartelle <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> e <em>xoops_data/caches/smarty_compile/</em></li>
	<li>Abilita i Cookie e i Javascript nel tuo browser.</li>
</ul>
';
?>