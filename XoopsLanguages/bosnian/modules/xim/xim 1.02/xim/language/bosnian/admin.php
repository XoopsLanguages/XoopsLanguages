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
	define('_AM_XIM_ADMINMESSAGESEND','Pošalji svima'); 
	define('_AM_XIM_LOGSMAINTNANCE','Održavanje baze podataka'); 

// tab one in admin section
define('_AM_XIM_MODULEINSTALL','Instalirana verzija modula');
define('_AM_XIM_INSTALLDATE','Modul je instaliran');
define('_AM_XIM_DATEOFFIRSTMESSAGE','Datum starijih poruka');
define('_AM_XIM_TOTALUSERS','Ukupno članova koristi Chat');
define('_AM_XIM_AVERAGEMSGPERDAY','Prosječno poruka na dan');
define('_AM_XIM_TOPCHATTERS','Ukupno najaktivnijih Chatera');
define('_AM_XIM_TOPCHATTERS_TODAY','Najaktivniji članovi u zadnja 24 sata');
define('_AM_XIM_STATISTICS_TITLE','Statistika'); 
define('_AM_XIM_MODULEINFO','Info modula'); 
define('_AM_XIM_USERSTATS','Statistika članova');
define('_AM_XIM_NONEYET','Nema poruka u bazi podataka');
define('_AM_XIM_NO','nema');
define('_AM_XIM_THEREARE','Ima');
define('_AM_XIM_UPDATE_STATUS','Statut verzije modula:');

// tab two in admin section
define('_AM_XIM_ADMINMESSAGE','Admin poruka');
define('_AM_XIM_MESSAGES','poruka');
define('_AM_XIM_SUBMIT','Pošalji');
define('_AM_XIM_LASTADMINMESSAGE_TITLE','Zadnja Admin poruka');
define('_AM_XIM_LASTADMINMESSAGE_MSG','Poruka');
define('_AM_XIM_LASTADMINMESSAGE_DATE','Datum slanja');
define('_AM_XIM_LASTADMINMESSAGE_WASREAD','Zadnju admin poruku su pročitali ');
define('_AM_XIM_LASTADMINMESSAGE_USERS','članovi');
define('_AM_XIM_NOADMINMESSAGEYET','Nisi još od admina svima poruku poslao ;-) ');
define('_AM_XIM_NOADMINMESSAGEYET_DATE','Duh!!');

// tab three in admin section
define('_AM_XIM_LOGS_TITLE','Protokol info');
define('_AM_XIM_DBHAS','U bazi podataka ima ');
define('_AM_XIM_DBHASPOSTS',' poruka ukupno');
define('_AM_XIM_DBHASOLDPOSTS',' poruke starije od 1 sedmice');
define('_AM_XIM_LOGSčlEAN','Izbriši stari protokol');
define('_AM_XIM_LOGSčlEANDESC','Izaberi ovdje protokol kojeg želiš izbrisati');
define('_AM_XIM_LOGS_CHOOSE','Izaberi akciju za poruke');
define('_AM_XIM_LOGS_USER_MOW_RECD','Izbriši od članova poruke koje su starije od 1 sedmice(primljene)');
define('_AM_XIM_LOGS_USER_MOW_ALL','Izbriši od članova poruke koje su starije od 1 sedmice(sve)');
define('_AM_XIM_LOGS_USER_MTW_RECD','Izbriši od članova poruke koje su starije od 2 sedmice(primljene)');
define('_AM_XIM_LOGS_USER_MTW_ALL','Izbriši od članova poruke koje su starije od 2 sedmice(sve)');
define('_AM_XIM_LOGS_USER_MOM_RECD','Izbriši od članova poruke koje su starije od 1 mjesec(primljene)');
define('_AM_XIM_LOGS_USER_MOM_ALL','Izbriši od članova poruke koje su starije od 1 mjesec(sve)');
define('_AM_XIM_LOGS_ADMIN_MOW_RECD','Izbriši od Admina poruke koje su starije od 1 sedmice(primljene)');
define('_AM_XIM_LOGS_ADMIN_MOW_ALL','Izbriši od Admina poruke koje su starije od 1 sedmice(sve)');
define('_AM_XIM_LOGS_ADMIN_MTW_RECD','Izbriši od Admina poruke koje su starije od 2 sedmice(primljene)');
define('_AM_XIM_LOGS_ADMIN_MTW_ALL','Izbriši od Admina poruke koje su starije od 2 sedmice(sve)');
define('_AM_XIM_LOGS_ADMIN_MOM_RECD','Izbriši od Admina poruke koje su starije od 1 mjesec(primljene)');
define('_AM_XIM_LOGS_ADMIN_MOM_ALL','Izbriši od Admina poruke koje su starije od 1 mjesec(sve)');
define('_AM_XIM_LOGS_ADMIN_MSG_ALL_RECD','Izbriši od Admina sve poslate poruke.');
define('_AM_XIM_LOGS_SUBMIT','Pošalji');
define('_AM_XIM_LOGS_DOUPDATE','Odražavanje poruka');

// various others
define('_AM_XIM_UPDATE_CRITICAL_UPD','Ima neophodni novi update za modul');
define('_AM_XIM_UPDATE_NORMAL_UPD','Ima nova verzija za download');
define('_AM_XIM_UPDATE_SERVER_ERROR','Server trenutno iz nekog razloga nije dostupan.<br/>Molimo te probaj malo kasnije.');
define('_AM_XIM_UPDATE_FILE_DESC','Opis nove verzije');
define('_AM_XIM_UPDATE_SERVER_FILE','Novu verziju možeš dowloadati ovdje');
define('_AM_XIM_UPDATE_YOUHAVENEWESTVERSION','Kod tebe je najnovija verzija modula');
define('_AM_XIM_HELP','Pomoć');

// Send to all
define('_AM_XIM_POSTTOALL_TITLE','Pošalji poruku');
define('_AM_XIM_POSTTOALL_DESC','Pošalji poruku svim članovima koji koriste ovaj Chat');
define('_AM_XIM_POSTTOALL_COUNT','Poruka (Slova): ');
define('_AM_XIM_POSTTOALL_SUBMIT','Pošalji');


//Help section
define('_AM_XIM_HELP_ABOUT','O modulu');
define('_AM_XIM_HELP_PREFACE','Xim je Chat modul sistem za dopisivanje izmedu članova. Inspiracija za programiranje modula je jQuery Gmail/Facebook chat eprimjer kojeg je programirao Anant Garg i Gmail/Facebook Chat. Program je reprogramiran za XOOPS programeri Culex & Andrax.<br/>Chat je za XOOPS verzije od 2.4.0 i vecer.<br/>XIM je realiziran pod <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public Licencom (GPL)</a> i dozvoljenu su prepravke ili nadogradnje. Modul je besplatan sve dok ne bude nekih izmjene GPL.');
define('_AM_XIM_HELP_HEADER_REQUIREMENTS','Zahtjevi');
define('_AM_XIM_HELP_REQUIREMENTS','<ul class="help">
										<li>WWW Server (<a href="http://www.apache.org/" target="_blank">Apache</a>, IIS, Roxen, etc)</li>
										<li><a href="http://www.xoops.org/" target="_blank">XOOPS</a> 2.4.0 ili veca verzija xim  koristi preload</li>
										<li><a href="http://www.php.net/" target="_blank">PHP</a> 4.3.0 ili veca verzija (5.2 ili veca se preporucuje)</li>
										<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> 3.23 ili veca verzija (4.1 ili veca se preporucuje)</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_RECOMMENDED','Preporuka za testiranje XIM');
define('_AM_XIM_HELP_RECOMMENDED','<ul class="help">
									<li>Browser <a href="http://www.mozilla.com" target"_blank">Firefox</a> i Firefox plugin <a href="https://addons.mozilla.org/en-US/firefox/downloads/latest/1843/addon-1843-latest.xpi" target="_blank">FireBug plugin (najnovija verzija)</a></li> 
								  </ul>');
define('_AM_XIM_HELP_HEADER_INSTALLATION','Kako instalirati');
define('_AM_XIM_HELP_FIRSTTIMEINSTALL','<ul class="help">
											<li>Provjeri dali postoji novija verzija Xim modula.</li>
											<li>Uključi cookie i JavaScript u svom browseru.</li>
										</ul>');
										
define('_AM_XIM_HELP_HEADER_HOSTED_PLATFORM','Instalacija na platformu servera');
define('_AM_XIM_HELP_HOSTED_PLATFORM','<ul class="help">
										<li>Upload odzipani direktorij xim u modules direktorij na svome serveru.</li>
										<li>Instaliraj modul u admistraciji XOOPS modula.</li>
										<li>Napravi blok Chat vidljiv za grupe koje trebaju blok da vide (admin/moderatori itd.).</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_UPGRADING','Upgrade modula u noviju verziju');
define('_AM_XIM_HELP_UPGRADING','<ul class="help">
									<li>Pobrini se da uvijek koristiš najnoviju verziju</li>
									<li>Pročitaj readme.txt u arhivi</li>
									<li>Napravi ako je potrebno backup tabela modula</li>
								</ul>');
define('_AM_XIM_HELP_HEADER_FAQ','Problem neki rješiti');
define('_AM_XIM_HELP_HEADER_COMMENPROBLEMS1','Ako je npr.bijela stranica, ili se nemože kliknuti na nik ime, ili se blok ne vidi...');
define('_AM_XIM_HELP_COMMENPROBLEMS1','<ul class="help">
										<li>Provjeri dali se blok vidi na "Svim stranicama" a ne samo na pocetnoj stranici.</li>
										<li>Provjeri Xoopos verziju koju imaš instaliranu > 2.4.0. Starije verzije Xoops ne koriste preload.</li>
										<li>Ukljuci debug i provjeri koje greške imaju.</li>
										<li>Koristi FireFox, desnik klik na screen, izaberi inspect element, koristi console u tabs i provjeri chat heartbeat dali je pokrenut<br/>
										"GET http://www.yoursite.com/modules/xim/chat.php?action=chatheartbeat&_=XXXXXXXXXXXX xxx OK xxx MS"</li>
										<li>Ako nema greški, koristi Firebug (desni klik->inspect element->console) i vidi dali ima jQuery greški.</li>
										<li>Ako nema jQuery greški. Izbriši caches-> modul xim aktulizira , system module takode.</li>
										<li>Ako je stranica bijela, Idi u protector modul -> podešavanje i upiši xim u formu "Moduli bez Dos / Crawler provjere".</li>
										<li>Provjeri aktuelnu temu dali je najnovija jQuery verzija povezana. Pvezivanje se vrši u head theme.html .<br/>
										Normalno nije problem ako i drugi moduli koriste includirani jQuery > 1.3.2</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_SOUNDPROBLEMS','Izabrao sam zvučnu obavijest ako dobijem poruku ali ne čujem zvuk');
define('_AM_XIM_HELP_SOUNDPROBLEMS','<ul class="help">
										<li>Provjeri jesu li ti zvučnici uključeni na kompu i pojačani</li>
										<li>XIM sound koristi framework soundmanager2. Ovdje se koristi flash sound. Tvoj browser mora biti sposoban da flash koristi</li>
									</ul>');
define('_AM_XIM_HELP_HEADER_CONTACTS','Pitanja i pomoc');
define('_AM_XIM_HELP_OTHERHELP','<ul class="help">
									<li>Ako imaš neko pitanje i treba ti stručna pomoć zatraži na <a href="http://www.xoops.org/modules/newbb" target="_blank">Xoops support Forumu</a></li>
								</ul>');
?>
