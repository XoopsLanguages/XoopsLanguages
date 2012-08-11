<?php
// $Id: admin.php,v 1.1 2004/01/29 14:45:48 buennagel Exp $
//%%%%%%        Admin Module Name  Headlines         %%%%%

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_DBUPDATED' ) ) {

// list of encodings allowed   (name):(title)|(name):(title)|...
define('_AM_ENCODINGS','utf-8:UTF-8|iso-8859-1:ISO-8859-1|us-ascii:US-ASCII') ;
define('_AM_ENCODING_AUTO','auto detection') ;

define('_AM_DBUPDATED','Database opdateret!');
define('_AM_HEADLINES','Overskrift Konfiguration (No.%s)');
define('_AM_HLMAIN','Overskrift');
define('_AM_SITENAME','Siden Navn');
define('_AM_URL','URL');
define('_AM_TITLEPATTERN','Uddrag med titlen <br /><span style="font-weight:normal;">Skriv her et regulært udtryk for perl fx) /doller/<br />Efterlad normalt blankt</span>');
define('_AM_TITLEEXCLUDE','Ekskluder med titlen<br /><span style="font-weight:normal;">(perl regex) Normally left blank</span>');
define('_AM_LINKPATTERN','Uddrag med link <br /><span style="font-weight:normal;">Skriv her et regulært udtryk for perl fx) /business/<br />Efterlad normalt blankt</span>');
define('_AM_LINKEXCLUDE','Ekskluder med link <br /><span style="font-weight:normal;">(perl regex) Normally left blank</span>');
define('_AM_ORDER','Rækkefølge');
define('_AM_ENCODING','Encoding');
define('_AM_CACHETIME','Hent Cache');
define('_AM_TIMEOUT','Time-out, når der hentes');
define('_AM_ALLOWHTML','Tillad at vise HTML inden i XML<br /><span style="font-weight:normal;">Du bør ikke tillade HTML inden i en RSS/atom, der genereres fra indlæg fra besøgende på webstedet.</span>');
define('_AM_MAINSETT','Indstillinger');
define('_AM_BLOCKSETT','Blok indstillinger');
define('_AM_DISPIMG','Vis billed');
define('_AM_DISPFULL','Vis beskrivelse og udgivelses datoer');
define('_AM_DISPMAX','Maks emner at vise');
define('_AM_DISPLAY','Hoved ');
define('_AM_ASBLOCK','Blok');
define('_AM_ADDHEADL','Tilføj overskrift');
define('_AM_URLEDFXML','URI påRSS eller ATOM');
define('_AM_SYNDICATIONTYPE','Typen på feed');
define('_AM_SYNDICATIONTYPE_AUTO','Auto');
define('_AM_SAVEAS','Gem som');
define('_AM_UPDATE','Opdatér og hent igen');
define('_AM_EDITHEADL','Redigér overskrift');
define('_AM_WANTDEL','Er du sikker på at du vil slette overskriften for %s?');
define('_AM_INVALIDID','Ugyldig ID');
define('_AM_OBJECTNG','Emnet fandtes ikke');
define('_AM_FAILUPDATE','Det lykkedes ikke at gemme data i database for overskrift %s');
define('_AM_FAILDELETE','Det lykkedes ikke at slette data i datebasen for overskrift %s');
}

?>
