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
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> hilft dem Admin, seine Webseite einfach und <b>automatisiert</b> zu warten. 
Auch wenn wir alles getan haben, um das beste Modul zu haben, <b>verwenden Sie dieses Modul auf eigenes Risiko!</b>

Mit dem Modul k&ouml;nnen Sie:
1/ die Datenbank pflegen
2/ Datenbankabfragen durchführen 
3/ PHP-Code ausführen
4/ die XOOPS-Verzeichnisse templates_c und cache leeren
5/ Spam-Kommentare löschen und  Spammer blocken
6/ Sessions löschen 

Bei jeder dieser Aktionen k&ouml;nnen Sie vorgeben, ob sie ausgef&uuml;hrt werden soll oder nicht und wann sie ausgef&uuml;hrt werden soll (Sie k&ouml;nnen die Zeiten planen).

Zus&auml;tzlich k&ouml;nnen Sie alle Aktionen des Moduls protokollieren und (sofern verf&uuml;gbar) CRONs verwenden, um Ihre Seite zu warten.

Wenn Sie die M&ouml;glichkeit haben, das Modul mit CRON aufzurufen, nennen Sie die Datei einfach <i>cron.php</i>. Sie wird mit einem Passwort aufgerufen, das Sie in der Modulverwaltung angegeben haben.

Tun Sie dies wie folgt: http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>Wenn Sie einen cron job verwenden und kein Passwort übergeben, tut das Modul nichts</b>. Dies dient dazu, Ihre Seite zu sch&uuml;tzen vor Anwendern, die ihn benutzen könnten.

Wenn Sie nicht die Möglichkeit haben, CRON zu verwenden, dann aktivieren Sie den Modul-Block irgendwo auf Ihrer Seite (wo Sie m&ouml;chten) und das Modul wird die festgelegten Aufgaben automatisch und wenn es notwendig ist erledigen.
Tipp: Sie k&ouml;nnen für den Block einen Cache verwenden.

Als erstes gehen Sie in die Verwaltung des Moduls und nehmen die Einstellungen vor.

Im ersten Teil  <b>Allgemeine Einstellungen</b> setzen Sie das CRON-Paasswort, falls Sie CRON verwenden.
Wenn Sie eine Protokolldatei erstellen m&ouml;chten, füllen Sie das Feld <i>Log File</i> aus.
Hinweis: Aus Sicherheitsgr&uuml;nden wird empfohlen, den Dateinamen mit der Kennung <u>.php</u> zu versehen.

Im Teil <b>Datenbank-Pflege</b> geben Sie einen Zeitraum in Tagen an, um Ihre Datenbank zu pflegen.
Wenn Sie diesen Wert auf 0 setzen, wird nichts getan.
Bei diesem Prozess werden alle Datenbanktabellen Ihrer XOOPS-Seite geprüft, repariert, analysiert und optimiert.

In dem Teil  <b>Abfragen</b> geben Sie erst ein Intervall für die Ausf&uuml;hrung an (aber nur, wenn Sie es ben&ouml;tigen). Dann geben Sie einige SQL-Anweisungen ein, die auf die Datenbank angewendet werden sollen.
Hinweis: Das Modul ver&aumLndert Ihre Abfragen nicht. Es nimmt eine nach der anderen und führt sie durch.

Auf die gleiche Weise k&ouml;nnen Sie in dem Teil <b>PHP-Code</b> PHP-Anweisungen ausf&uuml;hren. 

Der Teil <b>Cache und Templates_c</b> erm&ouml;glicht es Ihnen, die Verzeichnisse cache und templates_c (im Wurzelverzeichnis Ihrer Seite) zu leeren.

Der Teil <b>Sitzungen</b> erm&ouml;glicht es Ihnen, die MySQL-Sitzungstabelle in einem vorgegebenen Zeitraum zu leeren..

Mit dem Teil <b>Spammed comments</b> schlie&szlig;lich k&ouml;nnen Sie alen Spam aus Ihren Kommentaren entfernen.
Diese Funktion des Moduls arbeitet mit den Xoops <i>Wort-Zensur-Optionen</i> zusammen.
Zun&auml;chst m&uuml;ssen Sie auf den <i>Seiten-Einstellungen</i> die Zensur unerw&uuml;nschter W&ouml;rter aktivieren, einige zu zensierende W&ouml;rter eingeben und ein ErsatzWort w&auml;hlen.
Vorgabem&auml;&szlig;ig werden zensierte W&ouml;rter mit #OOPS# ersetzt.
Das Modul Xoops Care sucht nach Kommentaren, die dieses Ersatzwort im Kommentartitel und/oder im Kommentarinhalt enthalten und wendet Ihre Einstellungen auf diese Kommentare an.
Zus&auml;tzlich kann das Module die IP-Adressen der Spammers (aus den Kommentaren) herausziehen und deren IPs automatisch zur schwarzen Liste hinzufügen.
Schie&szlig;lich k&ouml;nnen Sie w&auml;hlen, was mit als Spam erkannten Kommentaren geschehen soll. Sie k&ouml;nnen sie behalten, ihre Ver&ouml;ffentlichung zur&uuml;cknehmen, sie verstecken und sie löschen.

Wenn Sie CRON verwenden, um Ihre Seite zu bereinigen, werden die für die einzelnen Aktionen vorgegebenen Intervalle nicht verwendet. Dieses Intervall muss aber gr&ouml;&szlig;er als 0 sein.

<a href="http://www.instant-zero.com" target="_blank">Lassen Sie es uns wissen, ob Ihnen dieses Modul gef&auml;llt</a>

endhelp;
?>
