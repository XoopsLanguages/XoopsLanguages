<?php
// $Id: finish.php 12033 2015-03-08
// _LANGCODE: cz
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .=
"<h3>Vaše stránky</h3>
<p>Nyní se již můžete podívat na <a href='../index.php'>domovskou stránku Vašeho nového webu</a>.</p>
<h3>Podpora</h3>
<p>Visit <a href='http://xoops.sourceforge.net/' rel='external'>The XOOPS Project</a></p>
<p><strong>UPOZORNĚNÍ:</strong> Vaše stránky nyní fungují v minimální funkční konfiguraci. Pokud chcete přidat obsah: texty, fotogalerii, fórum, rozcestník... Musíte nejprve stáhnout z <a href='http://www.xoops.org/modules/repository' rel='external' title='Výběr a instalace modulů'>knihovny modulů </a> patřičné moduly a tyto nainstalovat. To samé platí pro <a href='http://www.xoops.org/modules/extgallery' rel='external' title='Výběr a instalace různých vzhledů'>různé vzhledy</a> (skiny).</p>
";

$content .=
"<h3>Nastavení bezpečnosti</h3>
<p>Instalátor se nyní pokusí nastavit základní zabezpečení Vašich stránek. Prosím, zkontrolujte dvakrát, ať máte jistotu že:
<div class='confirmMsg'>
Soubor <em>mainfile.php</em> je určen pouze pro čtení.<br />
Odstraňte adresář <em>{$installer_modified}</em> (nebo <em>install</em> pokud jej instalátor z nějakého důvodu nepřejmenoval sám) ze svého serveru.
</div>
</p>
";
