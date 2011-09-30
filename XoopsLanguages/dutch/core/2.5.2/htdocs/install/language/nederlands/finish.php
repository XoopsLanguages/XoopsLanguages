<?php
// $Id: finish.php 3919 2009-11-21 10:25:16Z kris_fr $
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by Renetjuh
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door Renetjuh
 * (Ver)taalfouten hier melden: http://www.xoops.nl
 **/

$content .=
"<h3>Uw website</h3>
<p>U kunt <a href='../index.php'>hier de homepagina van uw website bezoeken</a>.</p>
<h3>Ondersteuning</h3>
<p>Bezoek <a href='http://xoops.sourceforge.net/' rel='external'>The XOOPS Project</a></p>
  <p><strong>ATTENTIE :</strong> Uw website bevat nu het minimum aan functionaliteit, als u inhoud wilt toevoegen zoals bijv.: tekst pagina's, foto boeken, foras, hyperlinks mappen, ... dan zult u hiervoor eerst de daarvoor bedoelde modules moeten downloaden van de <a href='http://www.xoops.org/modules/repository' rel='external' title='Kies en download modules'>XOOPS module verzameling</a> en deze modules moeten installeren. Dit geldt ook voor <a href='http://www.xoops.org/modules/extgallery' rel='external' title='Selecteer en Installeer nieuwe themas'>extra webdesigns (thema's)</a>.</p>
";

$content .=
"<h3>Beveiligings configuratie</h3>
<p>De installatie wizard zal proberen een aantal veiligheids maatregelen op uw website toe te passen. Zorg er alstublieft voor dat:
<div class='confirmMsg'>
  Het bestand <em>mainfile.php</em> alleen leesbaar is.<br />
  Verwijder de map <em>{$installer_modified}</em>  van uw server (of <em>install</em>, als deze map niet automatisch hernoemd was door de installatie wizard).
</div>
</p>
";

?>