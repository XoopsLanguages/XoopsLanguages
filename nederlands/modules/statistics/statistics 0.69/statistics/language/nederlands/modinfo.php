<?php
// The name of this module
define("_MI_STATISTICS_NAME","Site Statistieken");

// A brief description of this module
define("_MI_STATISTICS_DESC","Site Statistieken door IBDeeming!  Bijhouden van bezoeken, bots, browsers, en O/S versie?s.");

// Block SM Name
define("_MI_STATISTICS_SMNAME1","Statistieken");
define("_MI_STATISTICS_SMNAME2","Hit Details");
define("_MI_STATISTICS_SMNAME3","Toon alle Referrers");

// Block b name
define("_MI_STATISTICS_BNAME1","Site Hits");
define("_MI_STATISTICS_BNAME2","Top Referrers");
define("_MI_STATISTICS_BNAME3","Top Refer Hits");

// Admin menus
define("_MI_STATISTICS_ADMENU2","Algemene PHP Informatie");
define("_MI_STATISTICS_ADMENU3","PHP Credits");
define("_MI_STATISTICS_ADMENU4","PHP Configuratie");
define("_MI_STATISTICS_ADMENU5","PHP Modules");
define("_MI_STATISTICS_ADMENU6","PHP Omgeving");
define("_MI_STATISTICS_ADMENU7","PHP Variabelen");
define("_MI_STATISTICS_ADMENU8","PHP Licenties");
define("_MI_STATISTICS_ADMENU9","PHP Complete Informatie");
define("_MI_STATISTICS_ADMENU10","Remote Adres Database");
define("_MI_STATISTICS_ADMENU11","Referrers Database");
define("_MI_STATISTICS_ADMENU12","Info Gebruikers scherm");

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
