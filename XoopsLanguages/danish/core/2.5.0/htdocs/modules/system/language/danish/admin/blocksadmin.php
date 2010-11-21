<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: blocksadmin.php 5116 2010-08-27 22:57:09Z trabis $
 */

// Navigation
define("_AM_SYSTEM_BLOCKS_ADMIN", "Blok Administration");
define("_AM_SYSTEM_BLOCKS_MANAGMENT", "Administrer");
define("_AM_SYSTEM_BLOCKS_ADDBLOCK", "Tilføj en ny blok");
define("_AM_SYSTEM_BLOCKS_EDITBLOCK", "Redigér Højre");
define( '_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Opret en klonet blok' );

// Forms
define( '_AM_SYSTEM_BLOCKS_SAVE', 'Gem' );
define( '_AM_SYSTEM_BLOCKS_CUSTOM', 'Special blok' );
define( '_AM_SYSTEM_BLOCKS_TYPES', 'Alle typer' );
define( '_AM_SYSTEM_BLOCKS_GENERATOR', 'Moduler' );
define( '_AM_SYSTEM_BLOCKS_GROUP', 'Grupper' );
define( '_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Side');
define( '_AM_SYSTEM_BLOCKS_DISPLAY', 'Vis blok ' );
define( '_AM_SYSTEM_BLOCKS_HIDE', 'Skjul blok ' );
define( '_AM_SYSTEM_BLOCKS_CLONE', 'kopier');
define( '_AM_SYSTEM_BLOCKS_SIDELEFT', 'Venstre');
define( '_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Top venstre');
define( '_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Top Center');
define( '_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Top højre');
define( '_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Højre');
define( '_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Bund venstre');
define( '_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Bund center');
define( '_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Bund højre');
define( '_AM_SYSTEM_BLOCKS_ADD', 'Tilføj blok');
define( '_AM_SYSTEM_BLOCKS_MANAGE', 'Vedligehold blok');
define( '_AM_SYSTEM_BLOCKS_NAME', 'Navn' );
define( '_AM_SYSTEM_BLOCKS_TYPE', 'Blok type' );
define( '_AM_SYSTEM_BLOCKS_SBLEFT','Side Block - venstre' );
define( '_AM_SYSTEM_BLOCKS_SBRIGHT','Side Block - højre' );
define("_AM_SYSTEM_BLOCKS_CBLEFT", "Center Blok - Venstre");
define("_AM_SYSTEM_BLOCKS_CBRIGHT", "Center Blok - Højre");
define("_AM_SYSTEM_BLOCKS_CBCENTER", "Center Blok - Center");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT", "Center Blok - Nederst til venstre");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT", "Center Blok - Nederst til højre");
define("_AM_SYSTEM_BLOCKS_CBBOTTOM", "Center Blok - Bund");
define("_AM_SYSTEM_BLOCKS_WEIGHT", "Vægt");
define("_AM_SYSTEM_BLOCKS_VISIBLE", "Synlig");
define("_AM_SYSTEM_BLOCKS_VISIBLEIN", "Synlig i");
define("_AM_SYSTEM_BLOCKS_TOPPAGE", "Forsiden");
define("_AM_SYSTEM_BLOCKS_ALLPAGES", "Alle sider");
define("_AM_SYSTEM_BLOCKS_UNASSIGNED", "Ikke-tildelte");
define("_AM_SYSTEM_BLOCKS_TITLE", "Titel");
define("_AM_SYSTEM_BLOCKS_CONTENT", "Indhold");
define("_AM_SYSTEM_BLOCKS_USEFULTAGS", "Nyttige tags:");
define("_AM_SYSTEM_BLOCKS_BLOCKTAG", "%s vil skrive %s");
define("_AM_SYSTEM_BLOCKS_CTYPE", "Indholdstype");
define("_AM_SYSTEM_BLOCKS_HTML", "HTML");
define("_AM_SYSTEM_BLOCKS_PHP", "PHP Script");
define("_AM_SYSTEM_BLOCKS_AFWSMILE", "Auto-format (smilies aktiveret)");
define("_AM_SYSTEM_BLOCKS_AFNOSMILE", "Auto-format (smilies deaktiveret)");
define("_AM_SYSTEM_BLOCKS_BCACHETIME", "Cache levetid");
define("_AM_SYSTEM_BLOCKS_CUSTOMHTML", "Speciel blok (HTML)");
define("_AM_SYSTEM_BLOCKS_CUSTOMPHP", "Speciel blok (PHP)");
define("_AM_SYSTEM_BLOCKS_CUSTOMSMILE", "Speciel blok (Auto Format + smilies)");
define("_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE", "Speciel blok (Auto Format)");
define("_AM_SYSTEM_BLOCKS_EDITTPL", "Redigér skabelon");
define("_AM_SYSTEM_BLOCKS_OPTIONS", "Muligheder");
define("_AM_SYSTEM_BLOCKS_DRAG", "Træk eller sortér blok");

// Messages
define( '_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED );
define("_AM_SYSTEM_BLOCKS_RUSUREDEL", "Er du sikker på du vil slette blokken %s ?");
define("_AM_SYSTEM_BLOCKS_SYSTEMCANT", "Systemets blokke kan ikke slettes!");
define("_AM_SYSTEM_BLOCKS_MODULECANT", "Denne blok kan ikke slettes direkte! Hvis du ønsker at deaktivere denne blok, deaktivere modulet.");

// Error
define("_AM_SYSTEM_BLOCKS_PSEUDO_ERROR", "Brugernavn %s  findes allerede");
define("_AM_SYSTEM_BLOCKS_MAIL_ERROR", "Bruger mail %s  findes allerede");

// Tips
define( '_AM_SYSTEM_BLOCKS_TIPS',
'<ul>
<li>Du kan nemt ændre side eller position ved at trække og slippe, klik på <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> dette billed og placér det hvor du ønsker på din side</li>
<li>Tilføj en ny blok</li>
<li>Sæt blokke online eller offline ved at klikke på  <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> or <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /></li>
</ul>' );

?><?php // Translation done by xtransam & anderssk - 2010-10-19 07:12 ?>
