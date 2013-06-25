<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* XIM - Xoops Instant Messenger
*
* A one-on-one messenger written for xoops. Inspired by Anant Garg's -(anantgarg.com | inscripts.com)-
* 2009 tutorial on jquery messenger & by the original facebook messenger and a few more. This module has
* been adapted, written, re-written and extended heavily by Andrax & Culex.
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         http://www.fsf.org/copyleft/gpl.html GNU public license
* @package         modules
* @subpackage      xim
* @since           2.4.0
* @author          Andrax - homepage.: http://guxbrasil.org & email.: lcbc@ig.com.br
* @author          Culex  - homepage.: http://culex.dk		& email.: culex@culex.dk
**/

 
// English language file for xim Admin.php

// tab titles
	define('_AM_XIM_ADMINMESSAGESEND','Send til alle'); 
	define('_AM_XIM_LOGSMAINTNANCE','Database operationer'); 

// tab one in admin section
define('_AM_XIM_MODULEINSTALL','Module version installeret');
define('_AM_XIM_INSTALLDATE','Module installeret denne dato');
define('_AM_XIM_DATEOFFIRSTMESSAGE','Dato på ældste besked');
define('_AM_XIM_TOTALUSERS','Antal medlemmer der anvender XIM');
define('_AM_XIM_AVERAGEMSGPERDAY','Gennemsnit beskeder per dag');
define('_AM_XIM_TOPCHATTERS','Mest aktive medlemmer ialt');
define('_AM_XIM_TOPCHATTERS_TODAY','Mest aktive medlemmer siden 24 timer');
define('_AM_XIM_STATISTICS_TITLE','XIM Statistik'); 
define('_AM_XIM_MODULEINFO','Modulinfo'); 
define('_AM_XIM_USERSTATS','Brugerstats');
define('_AM_XIM_NONEYET','Ingen beskeder i database');
define('_AM_XIM_NO','ingen');
define('_AM_XIM_THEREARE','Der er');
define('_AM_XIM_UPDATE_STATUS','Status på din XIM version:');

// tab two in admin section
define('_AM_XIM_ADMINMESSAGE','Admin besked');
define('_AM_XIM_MESSAGES','beskeder');
define('_AM_XIM_SUBMIT','Send!');
define('_AM_XIM_LASTADMINMESSAGE_TITLE','Sidste Adminbesked');
define('_AM_XIM_LASTADMINMESSAGE_MSG','Besked');
define('_AM_XIM_LASTADMINMESSAGE_DATE','Dato sendt');
define('_AM_XIM_LASTADMINMESSAGE_WASREAD','Sidste admin besked er læst af ');
define('_AM_XIM_LASTADMINMESSAGE_USERS','brugere');
define('_AM_XIM_NOADMINMESSAGEYET','Du har endnu ikke sendt besked til alle ;-) ');
define('_AM_XIM_NOADMINMESSAGEYET_DATE','øøøhh!!');

// tab three in admin section
define('_AM_XIM_LOGS_TITLE','Logs Information');
define('_AM_XIM_DBHAS','Database har ');
define('_AM_XIM_DBHASPOSTS',' beskeder totalt');
define('_AM_XIM_DBHASOLDPOSTS',' beskeder ældre end 1 uge');
define('_AM_XIM_LOGSCLEAN','Fjerne gamle beskeder');
define('_AM_XIM_LOGSCLEANDESC','Vælg her hvilke beskeder du vil slette');
define('_AM_XIM_LOGS_CHOOSE','Vælg handling for beskeder');
define('_AM_XIM_LOGS_USER_MOW_RECD','Slet bruger beskeder ældre end 1 uge (modtaget)');
define('_AM_XIM_LOGS_USER_MOW_ALL','Slet bruger beskeder ældre end 1 uge (ALLE)');
define('_AM_XIM_LOGS_USER_MTW_RECD','Slet bruger beskeder ældre end 2 uger (modtaget)');
define('_AM_XIM_LOGS_USER_MTW_ALL','Slet bruger beskeder ældre end 2 uger (ALLE)');
define('_AM_XIM_LOGS_USER_MOM_RECD','Slet bruger beskeder ældre end 1 måned (modtaget)');
define('_AM_XIM_LOGS_USER_MOM_ALL','Slet bruger beskeder ældre end 1 måned (ALLE)');
define('_AM_XIM_LOGS_ADMIN_MOW_RECD','Slet Adminbeskeder ældre end 1 uge (modtaget)');
define('_AM_XIM_LOGS_ADMIN_MOW_ALL','Slet Adminbeskeder ældre end 1 uge (ALLE)');
define('_AM_XIM_LOGS_ADMIN_MTW_RECD','Slet Adminbeskeder ældre end 2 uger (modtaget)');
define('_AM_XIM_LOGS_ADMIN_MTW_ALL','Slet Adminbeskeder ældre end 2 uger (ALLE)');
define('_AM_XIM_LOGS_ADMIN_MOM_RECD','Slet Adminbeskeder ældre end 1 måned (modtaget)');
define('_AM_XIM_LOGS_ADMIN_MOM_ALL','Slet Adminbeskeder ældre end 1 måned (ALLE)');
define('_AM_XIM_LOGS_ADMIN_MSG_ALL_RECD','Slet ALLE adminbeskeder der er modtaget af brugere.');
define('_AM_XIM_LOGS_SUBMIT','Send');
define('_AM_XIM_LOGS_DOUPDATE','Besked maintnance drop down!');

// various others
define('_AM_XIM_UPDATE_CRITICAL_UPD','Der er en kritisk update klar til download!!');
define('_AM_XIM_UPDATE_NORMAL_UPD','Der er en nyere udgave klar til download');
define('_AM_XIM_UPDATE_SERVER_ERROR','Server lader til at være nede eller en opdatering er igang.<br/>Prøv igen senere.');
define('_AM_XIM_UPDATE_FILE_DESC','Beskrivelse af ny version');
define('_AM_XIM_UPDATE_SERVER_FILE','Du kan downloade den nye udgave her');
define('_AM_XIM_UPDATE_YOUHAVENEWESTVERSION','Du har allerede den nyeste udgave af Xim');
define('_AM_XIM_HELP','Hjælp');

// Send to all
define('_AM_XIM_POSTTOALL_TITLE','Send din besked');
define('_AM_XIM_POSTTOALL_DESC','Send besked til alle som bruger XIM');
define('_AM_XIM_POSTTOALL_COUNT','Besked (Tegn ');
define('_AM_XIM_POSTTOALL_SUBMIT','Send');

//Help section

define('_AM_XIM_HELP_ABOUT','Om Xim');
define('_AM_XIM_HELP_PREFACE','Xim er et messengersystem. Inspireret af jquery facebook chateksemplet skrevet af Anant Garg og selve facebook messengeren. Selve basen til systemet er gen-skrevet, tilpasset og kraftigt udvidet til Xoops af Culex & Andrax.<br/>Chatten er eén-til-eén og fuldt understøttet af Xoops siden version 2.4.0<br/>XIM udgives under rettighederne beskrevet i <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License (GPL)</a> og er gratis at bruge og tilpasse som man vil. Det er tillige tilladt at distribuere under samme GPL rettigheder.');
define('_AM_XIM_HELP_HEADER_REQUIREMENTS','Krav');
define('_AM_XIM_HELP_REQUIREMENTS','<ul class="help">
										<li>WWW Server (<a href="http://www.apache.org/" target="_blank">Apache</a>, IIS, Roxen, etc)</li>
										<li><a href="http://www.xoops.org/" target="_blank">XOOPS</a> 2.4.0 eller nyere da xim anvender preloads</li>
										<li><a href="http://www.php.net/" target="_blank">PHP</a> 4.3.0 eller højere (5.2 eller højere anbefales)</li>
										<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> 3.23 eller højere (4.1 eller højere anbefales)</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_RECOMMENDED','Anbefales til test af XIM');
define('_AM_XIM_HELP_RECOMMENDED','<ul class="help">
									<li>Browser <a href="http://www.mozilla.com" target"_blank">Firefox</a> og Firefox udvidelsen <a href="https://addons.mozilla.org/en-US/firefox/downloads/latest/1843/addon-1843-latest.xpi" target="_blank">FireBug plugin (Seneste udgave)</a></li>
								  </ul>');
define('_AM_XIM_HELP_HEADER_INSTALLATION','Hvordan installeres Xim');
define('_AM_XIM_HELP_FIRSTTIMEINSTALL','<ul class="help">
											<li>Chek at du har den nyeste udgave af XIM.</li>
											<li>Tillad cookies og JavaScript i din browser.</li>
										</ul>');
										
define('_AM_XIM_HELP_HEADER_HOSTED_PLATFORM','Installering på et hosted domæne');
define('_AM_XIM_HELP_HOSTED_PLATFORM','<ul class="help">
										<li>Opload den udpakkede mappe til dit module dir.</li>
										<li>Installer som et hvilket som helst andet modul.</li>
										<li>Gør blokken synlig for brugergruppen du vil tillade at bruge XIM (admin/moderators osv osv).</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_UPGRADING','Opgradering fra en tidligere udgave');
define('_AM_XIM_HELP_UPGRADING','<ul class="help">
									<li>Vær sikker på du har den nyeste udgave</li>
									<li>Læs readme.txt i arkivet</li>
									<li>Muligvis lav en backup af dine tabeller</li>
								</ul>');
define('_AM_XIM_HELP_HEADER_FAQ','Almindelige problemer');
define('_AM_XIM_HELP_HEADER_COMMENPROBLEMS1','Jeg får blank side, kan ikke klikke brugernavn, blokken vises ikke...');
define('_AM_XIM_HELP_COMMENPROBLEMS1','<ul class="help">
										<li>Vær sikker på at blokken er synlig på "ALLE sider" og ikke kun frontsiden</li>
										<li>Vær sikker på at din Xoops version er > 2.4.0. Xoops versioner før denne anvender ikke preloads</li>
										<li>Tænd debug og se om der er nogle fejlbeskeder</li>
										<li>I FireFox, højreklik på skærmen, vælg inspicer element, vælg konsol fra menuen og se om Chat Heartbeat kører<br/>
										"GET http://www.yoursite.com/modules/xim/chat.php?action=chatheartbeat&_=XXXXXXXXXXXX xxx OK xxx MS"</li>
										<li>Hvis ingen fejl, igen i FireFox (Højreklik->inspicer elementer->konsol) og se om der er jquery fejl</li>
										<li>Hvis ingen jqueryfejl. Tøm caches-> modul opdater xim, og system modul.</li>
										<li>Hvis stadig blank side. Gå til din protector modul -> Indstillinger og skriv xim i formen "Modules out of Dos / Crawler checker".</li>
										<li>Undersøg om dit theme brugere mere end eén udgave af Jquery. De findes normalt i din theme.html header<br/>
										Normalt er dette ikke noget problem så længe den anden Jquery der inkluderes > 1.3.2</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_SOUNDPROBLEMS','Jeg vælger beskedlyd men hører ingen audio');
define('_AM_XIM_HELP_SOUNDPROBLEMS','<ul class="help">
										<li>Først se om dine højtalere er tændt og volumen er skruet op</li>
										<li>XIMs lyd bruger Soundmanager2 frameworket. Dette bruger en lille hjælperfil i flash for at kunne afspille lyd. Hvis din browser understøtter flash så skal det virke</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_CONTACTS','Stil spørgsmål');
define('_AM_XIM_HELP_OTHERHELP','<ul class="help">
									<li>Hvis der er andere spørgsmål om fejl så post i <a href="http://www.xoops.org/modules/newbb" target="_blank">Xoops support Forum</a></li>
								</ul>');
?>
