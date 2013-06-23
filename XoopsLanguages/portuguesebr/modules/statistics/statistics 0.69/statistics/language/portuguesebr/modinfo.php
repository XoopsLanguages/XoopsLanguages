<?php
// O nome deste m?dulo
define("_MI_STATISTICS_NAME","Estat?sticas");

// Uma breve descri??o deste m?dulo
define("_MI_STATISTICS_DESC","Estat?sticas feito por IBDeeming! Mostra caminhos de visitas, rob?s, browsers, e vers?es de O/S .");

// Nome do Block
define("_MI_STATISTICS_SMNAME1","Estat?sticas");
define("_MI_STATISTICS_SMNAME2","Detalhes");
define("_MI_STATISTICS_SMNAME3","Mostre TODO o Referers");
// Block b name
define("_MI_STATISTICS_BNAME1","Contador");
define("_MI_STATISTICS_BNAME2","Maiores Acessos");

// Admin menus
define("_MI_STATISTICS_ADMENU2","Informa??es sobre o PHP");
define("_MI_STATISTICS_ADMENU3","Cr?ditos do PHP");
define("_MI_STATISTICS_ADMENU4","Configura??o do PHP");
define("_MI_STATISTICS_ADMENU5","M?dulos PHP");
define("_MI_STATISTICS_ADMENU6","Ambiente PHP");
define("_MI_STATISTICS_ADMENU7","Variav?is do PHP");
define("_MI_STATISTICS_ADMENU8","Licen?a PHP");
define("_MI_STATISTICS_ADMENU9","Informa??o Completa do PHP");
define("_MI_STATISTICS_ADMENU10","Endere?os de Ips");
define("_MI_STATISTICS_ADMENU11","Refer?ncias de Acessos");
define("_MI_STATISTICS_ADMENU12","Informa??es sobre Resolu??o do Usu?rio");

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