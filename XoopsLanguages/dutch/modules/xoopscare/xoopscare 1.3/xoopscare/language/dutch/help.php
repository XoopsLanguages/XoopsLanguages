<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> is een module met als doel je te helpen het onderhoud van je website te vermakkelijken en te <b>automatiseren</b>.
Ook al hebben we er alles aan gedaan om dit de beste module te maken, <b>gebruik is voor eigen risico!</b>

MEt de module kun je :
1/ Je database onderhouden
2/ Je eigen queries uitvoeren
3/ Php code uitvoeren
4/ Opschonen van templates_c en cache mappen
5/ Verwijderen van spam commentaren
6/ Opschonenen van sessies

Voor elk van dze acties kun je definieren wat je wel en niet wilt doen en wanneer (je kunt het agenderen).

Ook kun je alle acties door deze module loggen en (als je ze hebt) CRONs gebruiken om je site te onderhouden.

Mocht je de mogelijkheid hebben om deze module via een CRON aan te roepen, dan kun je simpelweg gebruik maken van het bestand <i>cron.php</i> zoals
gevonden wordt in de root van deze module en het wachtwoord meegeven dat je in de module administratie hebt aangegeven.
	Doe het zoals hier: http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>Als je de cron gebruikt zonder wachtwoord mee te geven, dan zal de module niets doen</b>, dit is om je site te beschermen
van mensen die het misschien kunnen gebruiken.

Indien je niet de mogelijkheid hebt om van CRON gebruik te maken dan kun je het module blok ergens op je site activeren (waar je maar wilt),
en de module zal automatisch en wanneer het nodig is de geagendeerde taken uitvoeren.
Tip: Je kunt cache gebruiken op het blok.

Het eerste dat je wilt doen is naar de module admninistratie gaan en de voorkeuren ingeven.
In het eerste gedeelte <b>Algemene Voorkeuren</b>, stel je het CRON wachtwoord in voor als je CRON gebruikt.
Mocht je een log bestand willenb creeëren, dan vul je de zone in genaamd <i>Log Bestand</i>.
Belangrijk, het is aan te raden, voor beveiligingsredenen, om dit bestand een <u>.php</u> extensie te geven.

In het gedeelte <b>Database Onderhoud</b>, stel je de vertraging in dagen in voor het onderhoud van je database.
Zet je deze vertraging op 0 dan zal er niets gebeuren.
Dit proces zal alle tabellen in je Xoops site controleren, repareren, analyseren en optimalseren.


In het gedeelte <b>Queries</b>, kun je eerst een vertraging in uitvoering ingeven (alleen als je ht nodig hebt), daarna type je enkele
SQL queries om op je database uit te voeren.
Belangrijk, de module voegt niets toe aan je queries, het neemt ze één voor één en voert ze uit.

Je kunt hetzelfde doen als hiervoor genoemd maar dan om Php code uit te voeren in het gedeelte <b>Php code</b>

Het gedeelte <b>Cache en Templates_c</b> geeft je de mogelijkheid om de cache en templates_c mappen op te schonen
(mappen in de root van je site)

Het <b>Sessies</b> gedeelte geeft je de mogelijkheid om je Mysql sessie tabellen op te schonen na een gegeven vertraging.


Als laatste, het gedeelte <b>Spam commentaren</b>, je kunt alle spam uit je commentaren weghalen
Deze functionaliteit werkt nauw samen met de Xoops <i>Woord Censuur Opties</i>.
Eerst, in de <i>Site Voorkeuren</i>, moet je de mogelijkheid tot censuur aanzetten voor ongewenste woorden. Type enkele woorden om te censureren
en selecteer een woord om het mee te vervangen.
Bij default, gecensureerde woorden worden vervangen door #OOPS#.
De XoopsCare module zal zoeken naar commentaren die deze vervanging in de teksts hebben staan en daarna je voorkeuren hierop toepassen.
Als extra optie kan dem odule het IP adres van de spammer achterhalen (vanuit de commentaren)en dit automatisch aan je IP Ban Lijst toevoegen.
Als laatste kun je selecteren wat je wilt doen met commentaren die als spam zijn aangemerkt, je kint ze houden, de-publiceren, verstoppen en verwijderen.


Gebruik je CRON om je site op te schonen, dan wordt de vertraging voor elke actie niet gebruikt maar de vertraging moet wel groter zijn dan 0.

<a href="http://www.instant-zero.com" target="_blank">Laat ons weten wat je van deze module vindt</a>

endhelp;
?>
