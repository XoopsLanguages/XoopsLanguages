<?php
// The name of this module
define("_MI_STATISTICS_NAME","Estad?sticas del Sitio");

// A brief description of this module
define("_MI_STATISTICS_DESC","Estad?sticas del Sitio por IBDeeming!  Tracking visits, bots, browsers, and O/S versions.");

// Block SM Name
define("_MI_STATISTICS_SMNAME1","Estad?sticas");
define("_MI_STATISTICS_SMNAME2","Entradas al Sitio");
define("_MI_STATISTICS_SMNAME3","Referencias al Sitio");

// Block b name
define("_MI_STATISTICS_BNAME1","Ingresos al Sitio");
define("_MI_STATISTICS_BNAME2","Principales p?ginas de referencias");
define("_MI_STATISTICS_BNAME3","P?ginas de Referencia con m?s Hits");

// Admin menus
define("_MI_STATISTICS_ADMENU2","General PHP Info");
define("_MI_STATISTICS_ADMENU3","PHP Creditos");
define("_MI_STATISTICS_ADMENU4","PHP Configuraci?n");
define("_MI_STATISTICS_ADMENU5","PHP M?dulos");
define("_MI_STATISTICS_ADMENU6","PHP Ambiente");
define("_MI_STATISTICS_ADMENU7","PHP Variables");
define("_MI_STATISTICS_ADMENU8","PHP Licencia");
define("_MI_STATISTICS_ADMENU9","PHP Informaci?n Completa");
define("_MI_STATISTICS_ADMENU10","Base de Datos de Accesos Remotos");
define("_MI_STATISTICS_ADMENU11","Base de Datos de las P?ginas de Referencias");
define("_MI_STATISTICS_ADMENU12","Informaci?n sobre pantallas de usuarios");

// added in version 0.60
// Config Items
define("_MI_REFERERSPAM","Referer SPAM Control");
define("_MI_ALLOWFILTERIPHITS","Filter IP Hits Switch");
define("_MI_FILTERIPLIST","Filter IP List");
define("_MI_BOTIDENTITIES","Bot Identifiers");
define("_MI_FORBIDBOTS","Forbid Bots");
define("_MI_BOTSTOBLOCK","Bots to Block");
define("_MI_CUSTOMFORBIDMSG","Custom Forbid Message");
// Config Items Description
define("_MI_REFERERSPAMDSC","Select the type of control to place on Referer SPAM.<br>"
                            ."<b>Forbidden</b> - Blocked from your site, not counted<br>"
							."<b>Ignore</b> - Blocked from the referer list, but still counted and viewable by the admin<br>"
							."<b>Reflect</b> - Redirected to the referer site<br>"
							."<b>Allow</b> - Do nothing");
define("_MI_ALLOWFILTERIPHITSDSC","Turn on filtering of IP hits to site?");
define("_MI_FILTERIPLISTDSC","Enter IP addresses that you do not want to count as valid visits or hits to your site.<br>"
                              ."Enter each IP seperated by <b>|</b><br>Example: 111.222.333.444|555.666.777.888<br>"
							  ."Regular expressions are supported<br>"
                              ."Example: ^111.222.333|111.222.333$|123[0-9]*");
define("_MI_BOTIDENTITIESDSC","Enter the name, term, or wildcard to count various bots.<br>"
                              ."Bots that are not identified can be counted as <b>Unknown</b> on your site.<br>"
                              ."Enter each Bot seperated by <b>|</b><br>Regular expressions are supported."
                              ."<br>Example: bot|^spider|arch$|badbot[a-z]*");
define("_MI_FORBIDBOTSDSC","Turn on blocking of bots to site?<br><i>This only blocks "
                            ."bots identified in <b>Bots to Block</b> preferences.</i>");
define("_MI_BOTSTOBLOCKDSC","This is only active if <b>Forbid Bots</b> preference is <b>yes</b><br>"
                            ."Enter the name, term, or wildcard to block various bots/harvesters/copyright checkers, etc.<br>"
                            ."Enter each Bot seperated by <b>|</b><br>Regular expressions are supported."
                            ."<br>Example: bot|^spider|arch$|badbot[a-z]*");
define("_MI_CUSTOMFORBIDMSGDSC","Enter the message to send to a blocked user.");

// Config Items values
define("_MI_REFERERSPAMFORBIDDEN","Forbidden");
define("_MI_REFERERSPAMIGNORE","Ignore");
define("_MI_REFERERSPAMREFLECT","Reflect");
define("_MI_REFERERSPAMALLOW","Allow");
?>
