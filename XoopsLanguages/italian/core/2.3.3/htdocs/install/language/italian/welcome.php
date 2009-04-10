<?php
// -------------------------------------------------------------------------------- //
// Translated by Ianez & Xoops Italia Staff
// Xoops Italian Official Support Site - www.xoopsitalia.org
// -------------------------------------------------------------------------------- //
// $Id: welcome.php 2089 2008-09-15 05:06:49Z phppp $
$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> &egrave; un applicativo web open source per la gestione di contenuti, orientato agli oggetti e scritto in PHP.<br />&Egrave; lo strumento ideale per sviluppare piccoli e grandi siti web, portali intranet per aziende e molto altro.
</p>
<p>
	XOOPS viene rilasciato secondo i termini della
	<a href="http://www.gnu.org/copyleft/gpl.html" rel="external">Licenza GNU General Public (GPL)</a>
	e pu&ograve; essere utilizzato e modificato gratuitamente.
	Pu&ograve; essere inoltre liberamente distribuito tenendo fede ai termini di distribuzione descritti dalla stessa GPL.
</p>
<h3>Requisiti</h3>
<ul>
	<li>WEB Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, ecc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 o superiore (raccomandato 5.2 o superiore)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 o superiore (raccomandato 4.1 o superiore)</li>
</ul>
<h3>Azioni e controlli prima di installare</h3>
<ol>
	<li>Impostare correttamente il Web Server, PHP e il database.</li>
	<li>Creare o verficare di avere un database per il vostro sito XOOPS.</li>
	<li>Creare un account utente per il database o tenere pronte le credenziali di accesso fornite dal vostro hosting.</li>
    <li>Rendere scrivibili sul server (CHMOD 777) le directory (e relative sotto directory) e il file: %s</li>
    <li>Se si desidera installare il modulo <em>Protector</em> di GIJOE: <div class="confirmMsg">Sostituire il file <em>mainfile.dist.php</em> con <em>/extras/mainfile.dist.php.protector</em><br />(ricordarsi di rinominare il file: <em>mainfile.dist.php</em>).</div></li>
    <li>Per maggiore sicurezza si consiglia di spostare (e/o in alternativa cambiare il nome) le directory qui sotto al di fuori della <a href="http://phpsec.org/projects/guide/3.html" rel="external">directory di root</a>: %s</li>
    <li>Creare (se non presenti) e rendere scrivibile sul server (CHMOD 777) le directory: %s</li>



	<li>Permettere cookie e JavaScript sul vostro browser di navigazione.</li>
</ol>
';

?>
