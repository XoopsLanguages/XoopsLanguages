<?php
// $Id: welcome.php 12528 2015-03-08 
// _LANGCODE: cz
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> je svobodný,
    objektově orientovaný systém pro správu webu napsaný v PHP. Je ideálním nástrojem pro
    vývoj malých i velkých, dynamických, komunitních webových stránek, intranetových portálů, firemních portálů, blogů pro spoustu dalších použití.
</p>
<p>
    XOOPS je distribuovám podle ustanovení 
    <a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
    a proto jej můžete volně a svobodně používat a upravovat.
    Můžete jej i dále distribuovat tak dlouho, dokud budete dodržovat ustanovení GPL.
</p>
<h3>Požadavky</h3>
<ul>
    <li>WWW Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen nebo podobný jiný)</li>
    <li><a href="http://www.php.net/" rel="external">PHP</a> 5.3.7 nebo novější </li>
    <li><a href="http://www.mysql.com/" rel="external">MySQL</a> 5.1 nebo novější </li>
</ul>
<h3>Před instalací</h3>
<ol>
    <li>Správně nastavte WWW server, PHP a databáozvý server.</li>
    <li>Připravte si databázi pro své stránky.</li>
    <li>Připravte si přihlašovací údaje pro přístup k databázi.</li>
    <li>Nastavte těmto adresářům a souborů oprávnění k zápisu: %s</li>
    <li>Z bezpečnostních důvodů důrazně doporučujeme přesunout tyto dva adresáře mimo <a href="http://phpsec.org/projects/guide/3.html" rel="external">adresářovou strukturu WWW serveru</a> a změnit název těchto adresářů: %s</li>
    <li>Vytvořte (pokud již neexistují) a povolte zápis do těchto adresářů: %s</li>
    <li>Ve svém prohlížeči povolte použití cookie a JavaScriptu.</li>
</ol>
';
