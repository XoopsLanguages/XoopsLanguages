<?php
// $Id: welcome.php 5529 2010-10-18 02:16:05Z beckmi $
// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: Xoops Italia Team - www.xoopsitalia.org
// Last translation update: 08/03/2011

$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> &egrave; un applicativo web open source per la gestione di contenuti, orientato agli oggetti e scritto in PHP.<br />&Egrave; lo strumento ideale per sviluppare piccoli e grandi siti web, portali intranet per aziende e molto altro.
</p>
<p>
	XOOPS viene rilasciato secondo i termini della
	<a href="http://www.gnu.org/copyleft/gpl.html" rel="external">Licenza GNU General Public (GPL)</a>
	e pu&ograve; essere utilizzato e modificato gratuitamente.
	Pu&ograve; essere inoltre liberamente distribuito rispettando i termini di distribuzione descritti dalla stessa GPL.
</p>
<h3>Requisiti</h3>
<ul>
	<li>WEB Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, ecc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 o superiore (raccomandato 5.2 o superiore)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 o superiore (raccomandato 4.1 o superiore)</li>
</ul>
<h3>Azioni e controlli prima di installare</h3>
<ul>
	<li>Impostare correttamente il Web Server, PHP e il database.</li>
	<li>Verificare che sia disponibile un database MySql per il vostro sito XOOPS o crearne uno.</li>
	<li>Creare un account utente per il database o tenere pronte le credenziali di accesso fornite dal vostro hosting.</li>
	<li>Rendere scrivibili sul server (CHMOD 777) le cartelle e i files: %s</li>
	<li>Per maggiore sicurezza si raccomanda di spostare al di fuori della <a href="http://phpsec.org/projects/guide/3.html" rel="external">directory di root</a> del vostro dominio, le seguenti cartelle, o se non &egrave; possibile, cambiarne almeno il nome: %s</li>
	<li>Se non presenti creare e rendere scrivibili le seguenti cartelle: %s</li>
	<li>Permettere cookie e JavaScript sul vostro browser di navigazione.</li>
</ul>
';
?>