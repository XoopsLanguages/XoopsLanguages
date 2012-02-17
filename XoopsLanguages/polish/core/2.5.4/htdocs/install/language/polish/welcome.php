<?php
// $Id: welcome.php 3558 2009-09-03 01:55:38Z trabis $
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko@wp.pl

$content .= '
<p>
    <acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> jest napisanym w PHP obiektowo 
    zorientowanym systemem prezentowania treści (CMS) ogólnie dostępnym na zasadach open-source. 
    Jest on idealnym narzędziem do tworzenia zróżnicowanych, od małych do dużych, serwisów internetowych, 
    portali intranetowych, portali korporacyjnych, blogów oraz wielu innych zróżnicowanych rozwiązań.
</p>
<p>
    XOOPS jest udostępniony na zasadach
    <a href="http://gnu.org.pl/text/licencja-gnu.html" rel="external">Powszechnej Licencji GNU</a>
    (jeśli ktoś woli oryginalną angielską wersję licencji to można znaleźć ją tutaj: <a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>)
    co daje możliwość dowolnego użytkowania i modyfikowania.
    Można go dowolnie rozpowszechniać jeśli tylko jest to zgodne z warunkami dystrybucji określonymi w GPL.
</p>
<h3>Wymagania</h3>
<ul>
    <li>WWW Serwer (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
    <li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 lub wyższe (rekomendowane 5.2 lub wyższe)</li>
    <li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 lub wyższe (rekomendowane 4.1 lub wyższe)</li>
</ul>
<h3>Zanim rozpoczniesz instalację</h3>
<ol>
    <li>Wykonaj poprawną instalację serwera WWW, PHP oraz bazy SQL (np. mySQL).</li>
    <li>Przygotuj bazę danych dla swojego serwisu XOOPS.</li>
    <li>Przygotuj konto użytkownika z dostępem (hasłem) do bazy danych.</li>
    <li>Upewnij się, że wymienione pliki/katalogi mają prawa do zapisu: %s</li>
    <li>Ze względów bezpieczeństwa, należy usunąć poza <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a> (główny katalog XOOPS) oraz zmienić nazwy folderów: %s</li>
    <li>Utwórz katalogi (o ile nie istnieją) oraz ustaw dla nich prawa do zapisu: %s</li>
    <li>Uaktywnij obsługę cookie oraz JavaScript-u w swojej przeglądarce internetowej.</li>
</ol>
';
?>