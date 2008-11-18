<?php
include '../../../../mainfile.php';

include '../../../../include/cp_functions.php';

	xoops_cp_header();

echo '
<table><tr><td>
<h1>debaser!</h1>

<ol><li><span style="color:#ff0000; font-weight:bold;">Was ist debaser?</span><br />
debaser ist ein kleiner in Xoops eingebetteter Multimedia-Player. Mit debaser können Multimedia-Dateien innerhalb von Xoops eingeschickt oder abgespielt werden. Ihr könnt zwischen verschiedenen Playern aussuchen.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Systemvoraussetzungen für debaser</span><br />
debaser arbeitet am besten mit Xoops 2.0.6 oder höher. In anderen Versionen gibt es hässliche Warnings und Notices. Tut mir leid.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Wie wird debaser installiert?</span><br />
debaser wird wie jedes andere Xoops-Modul über die Moduladministration installiert. Die Ordner <strong>upload</strong>, <strong>batchload</strong>, <strong>images/category</strong> und <strong>images/category/thumbs</strong> brauchen <strong>CHMOD 777</strong>.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Wie werden Dateien hochgeladen?</span><br />
Ganz einfach! Wahlweise über <strong>Einzelupload</strong> oder <strong>Batchload</strong>. Mit <strong>Einzelupload</strong> kann man, wie der Name schon sagt, immer nur eine Datei gleichzeitig hochladen. Ihr habt die Möglichkeit das Formular selber komplett auszufüllen oder wenn Ihr euch die Arbeit sparen wollt, lasst das Script dies für Euch erledigen. Bei manchen Dateitypen werden aber nicht alle Informationen ausgelesen. Wie groß die Datei sein darf die hochgeladen werden kann hängt von den Einstellungen in der php.ini ab. Wenn ihr auf der Einschicken-Seite seid, wird euch oben angezeigt, wie groß die Datei sein darf. Wollt Ihr die <strong>Batchload</strong>-Funktion nutzen, müsst ihr erst per ftp eure Dateien in den batchload-Ordner hochladen. Dann geht in die Administration von debaser und klickt auf den <strong>Batchload</strong>-Link. Jede Datei welche sich in diesem Ordner befindet wird in die Datenbank eingefügt, die Datei selber in den upload-Ordner verschoben und umbenannt. Bei beiden Upload-Möglichkeiten könnt ihr wählen, ob die Kategorien automatisch erstellt werden sollen oder ob ihr die Dateien selber in die Kategorien einsortieren wollt. Beim Batchload kann es vorkommen, dass auch Dateien mit unbekannten Mimetypen hinzugefügt werden. Sollte dies der Fall sein, werden diese als noch freizugeben markiert. Unter der Freigabemaske können dann auch die richtigen Dateierweiterungen zusortiert werden.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Wie werden Links zu Dateien eingefügt?</span><br />
Auch ganz einfach!! Wenn ihr aus dem Submenu von debaser auf <strong>Datei einschicken</strong> klickt, habt ihr die Möglichkeit Links einzuschicken (es sein denn ihr habt diese Option in den Einstellungen deaktiviert). Ihr müsst wenigstens die URL zur Datei angeben. Jetzt bleibt euch überlassen, ob das Skript die restlichen Informationen einfügen soll oder nicht. Wenn ihr keine weiteren Informationen angebt, versucht das Skript aus den ersten 10 KB der Datei Informationen auszulesen. Das Ganze hat nur einen Haken! Die Klasse die die Informationen ausliest kann natürlich nur <strong>VORHANDENE</strong> Informationen auslesen. Sind also keine Infos vorhanden werden auch keine Infos eingetragen. Warum werden denn nur die ersten 10 KB eingelesen? Ich bin der Meinung, dass es keinen Spass macht (unter Umständen) minutenlang zu warten nur um einen Link einzutragen. Über PHP können nur Informationen aus einer Datei gelesen werden wenn sie <strong>KOMPLETT</strong> übertragen worden sind. Noch ein Haken: Ist auf dem Server auf dem die Datei liegt <strong>fopen</strong> in der php.ini nicht aktiviert, wird auch nichts eingelesen. Ich denke aber, dass die hier programmierte Lösung einen guten Kompromiss bietet.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Wie werden Player hinzugefügt?</span><br />
Es gibt die Möglichkeit noch weitere als die bereits vorhandenen Player einzubinden. In der Administration auf <strong>Player bearbeiten</strong> anklicken. Einen neuen Namen und den Code dazu eingeben und abschicken. An den Stellen wo die Quelle angegeben werden muss, muss die Variable <strong><@mp3file@></strong> eingefügt werden. Stellen an die Werte für Höhe, Breite und Autostart stehen, müssen durch die Variablen <strong><@height@>, <@width@> und <@autostart@></strong> gesetzt werden. Benutzt <strong>IMMER</strong> doppelte Anführungszeichen innerhalb des Player-Codes</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Abspielen von Radio-Streams</span><br />
Ich habe die Funktionalität von iradio 0.5 mit in debaser eingebaut. Geht in die debaser-Administration um die Radio-Sender zu konfigurieren. Ich glaube dieser Teil ist selbsterklärend. Noch eine Anmerkung: Es klappt noch nicht die Funktionen des Multimedia-Players von den Radio-Funktionen zu trennen. D. h. Gäste die den Radioblock benutzen sollen, haben gleichzeitig Zugriff auf den Multimedia-Teil des Moduls.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Definieren von Multimedia-Formaten</span><br />
Multimedia-Dateien werden anhand ihrer Erweiterung definiert. In der Administration unter <strong>Dateitypen</strong> findet Ihr eine Eingabemaske in der die Informationen eingetragen werden können. Die Dateierweiterung darf maximal 4 Zeichen haben (ohne Punkt). Die Applikation bzw. der Name des Formats muss angegeben werden und der Mimetyp der Datei. Der Mimetyp einer Datei besteht immer aus zwei Teilen der mit einem Slash getrennt ist. Wenn mehrere Mimetypen für einen Dateityp vorliegen werden sie mit einem Leerzeichen voneinander getrennt. In der Eingabemaske solltet Ihr auch den Player einstellen, mit dem diese Dateien standardmäßig abgespielt werden sollen. Solltet Ihr den Mimetypen einer Datei nicht kennen: Einfach versuchen die Datei hochzuladen. Wenn der Dateityp nicht bekannt sein sollte, wird der Mimetyp dieser Datei auf der Weiterleitungsseite angezeigt.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Weitere Informationen</span><br />
Benachrichtigungen funktionieren nicht beim <strong>Batchload</strong>! Oder wollt ihr das E-Mail-Fach oder den Posteingang mit Nachrichten überfluten?</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Die debaser-Einstellungen</span><br />
Es gibt eine Menge Einstellungen um debaser anzupassen. Nachstehend werden alle Optionen nach ihrer Nummerierung in den Einstellungen erklärt.<br /><br />
<ol><li><span style="color: #006633; font-weight:bold;">Download:</span> Hier könnt ihr festlegen, ob die Dateien auch heruntergeladen werden können.</li><br />
<li><span style="color: #006633; font-weight:bold;">Dateien pro Seite:</span> Wie viele Dateien sollen pro Seite angezeigt werden?</li><br />
<li><span style="color: #006633; font-weight:bold;">Upload-Rechte:</span> Hier könnt ihr festlegen, welche Gruppen Dateien einschicken können. Uploads für Gäste sind eine gesonderte Option.</li><br />
<li><span style="color: #006633; font-weight:bold;">Gast Upload-Rechte:</span> Hier könnt ihr festlegen, ob Gäste Dateien einschicken können.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Freigabe Dateieinzeluploads:</span> Hier könnt ihr festlegen, ob die Dateien bei Einzel-Uploads automatisch freigegeben werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Freigabe von eingeschickten Links:</span> Hier könnt ihr festlegen, ob eingeschickte Links automatisch freigegeben werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Freigabe Batchload:</span> Hier könnt ihr festlegen, ob die Dateien bei Batchloads automatisch freigegeben werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Maximale Uploadgröße:</span> Hier könnt ihr festlegen, wie groß eine Datei maximal sein darf. Der hier eingetragenen Wert wird aus eurer php.ini ausgelesen und stellt den maximal möglichen Wert dar.</li><br />
<li><span style="color: #006633; font-weight:bold;">Art der Dateneinsendung:</span> Hier könnt ihr festlegen, ob Dateien, Links oder beides eingeschickt werden kann.</li><br />
<li><span style="color: #006633; font-weight:bold;">Gast-Abstimmungen:</span> Hier könnt ihr festlegen, ob Gäste die Dateien bewerten dürfen.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Kategorien - Einzelupload:</span> Wenn ihr euch weniger Arbeit (Ansichtssache) machen wollt setzt diese Option auf <strong>Ja</strong>. In diesem Fall werden die Kategorien aus der Datei gelesen. Falls <strong>Nein</strong> ist es möglich die Kategorien aus dem Dropdown-Menü auszuwählen. Bei beiden Möglichkeiten kann es vorkommen, dass keine Kategorien-Informationen angegeben oder vorhanden sind. In dem Fall wird die <strong>Kategorie</strong> als <strong>Other</strong> definiert. Den Namen <strong>Other</strong> könnt ihr natürlich noch in der Administration ändern, aber es ist nicht möglich diese Kategorie zu löschen. Wenn ihr der Meinung seid, dass die Verweigerung die Kategorie <strong>Other</strong> zu löschen blöd ist, seid beruhigt. Leere Kategorien werden auf der Userseite nicht angezeigt.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Kategorien - Batchload:</span> Siehe Punkt 11.</li><br />
<li><span style="color: #006633; font-weight:bold;">Uploadverzeichnis für Kategoriebilder:</span> Hier könnt Ihr festlegen in welchem Verzeichnis die Kategoriebilder abgelegt sind.</li><br />
<li><span style="color: #006633; font-weight:bold;">Thumbnails:</span> Kategoriebilder werden durch die Thumbnails dargestellt. Stellt die Einstellung auf <strong>Nein</strong>, wenn euer Server keine Grafik-Libraries zur Verfügung stellt. Unterstützt werden die Grafikformate gif, jpg und png.</li><br />
<li><span style="color: #006633; font-weight:bold;">Maximale Breite der Kategoriebilder</span> Hier könnt ihr festlegen wie breit die Kategoriebilder sein dürfen. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Maximale Höhe der Kategoriebilder</span> Hier könnt ihr festlegen wie hoch die Kategoriebilder sein dürfen. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Thumbnail-Qualität:</span> Hier könnt ihr festlegen wie hoch die Qualität der Kategoriebilder sein soll. Der Wert <strong>100</strong> entspricht der Qualität 100 %. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Thumbnails-Aktualisierung?</span> Hier könnt Ihr festlegen, ob bei jedem Aufruf der Index-Seite die Kategoriebilder aktualisiert werden sollen. Wenn nein, wird das zuletzt erzeugte Bild benutzt. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Seitenverhältnis des Kategoriebildes beibehalten?</span> Hier könnt ihr festlegen, ob das Kategoriebild verzerrt werden darf, wenn maximale Breite und maximal Höhe des Kategoriebildes nicht das gleiche Seitenverhältnis haben. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Berechtigungssystem für Kategorien benutzen?</span> Hier legen Sie fest, ob Sie auf zusätzlichen Administrationsaufwand durch das Berechtigungssystem für Kategorien verzichten wollen und alle Kategorien für alle User sichtbar sind.</li><br />
<li><span style="color: #006633; font-weight:bold;">Berechtigungssystem für Dateien benutzen?</span> Hier legen Sie fest, ob Sie auf zusätzlichen Administrationsaufwand durch das Berechtigungssystem für Dateien verzichten wollen und alle Dateien für alle User sichtbar sind.</li><br />
<li><span style="color: #006633; font-weight:bold;">Playervorauswahl</span> Hier werden die Gruppen festgelegt, die vorgegebene Player benutzen sollen. Somit können die User die Player NICHT selber aussuchen. Gäste müssen generell die voreingestellten Player benutzen.</li><br />
<li><span style="color: #006633; font-weight:bold;">Dateien sortieren nach</span> Die Dateien können innerhalb der Kategorie nach diversen Kriterien sortiert werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Reihenfolge der Dateien</span> Die Dateien können zusätzlich zu den zuvor genannten Kriterien noch auf- bzw. absteigend sortiert werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Kategorien sortieren nach</span> Die Kategorien können auf der Indexseite nach diversen Kriterien sortiert werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Reihenfolge der Kategorien</span> Die Kategorien können zusätzlich zu den zuvor genannten Kriterien noch auf- bzw. absteigend sortiert werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Tooltips benutzen</span> Mit den Tooltips können zu den Links in den Blöcken und in genre.php weitere Informationen angezeigt werden.</li><br />
</ol></li><br />

<li><span style="color:#ff0000; font-weight:bold;">Änderungen in 0.7</span><br />
- Neue id3-Klasse die id3v1- und id3v2-Informationen ausliest<br />
- debaser arbeitet definitiv mit register_globals Off<br />
- Benachrichtigungen hinzugefügt<br />
- Automatische Erstellung von Genres oder benutzerdefinierte Erstellung von Genres<br />
- Registrierte User können ihren Lieblings-Player einstellen<br />
- Links zu Mpeg-Dateien können eingeschickt werden<br />
- Overlib(c) Bibliothek für Popup-Informationen. Falls ihr Overlib&copy; in euren Templates einsetzen wollt besucht <a href="http://smarty.php.net/manual/en/language.function.popup.php" target="_blank">http://smarty.php.net</a> oder <a href="http://www.bosrup.com/web/overlib/" target="_blank">http://www.bosrup.com</a><br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Änderungen in 0.8</span><br />
- Neue id3-Klasse die Informationen aus fast allen Multimedia-Formaten auslesen kann<br />
- Anlegen von unbegrenzt verschachtelten Unterkategorien<br />
- Formulare nutzen alle die xoopsform-Klasse<br />
- Komplette überarbeitung des Admin-Bereichs<br />
- Komplette überarbeitung des myDebaser-Bereichs. Es können den zur Verfügung stehenden Dateiformaten Player zugewiesen werden<br />
- Dateiformate können im Admin-Bereich verwaltet werden<br />
- In der Administration können Dateien in andere Kategorien verschoben werden<br />
- überflüssige Templates wurden gelöscht<br />
- Berechtigungen hinzugefügt<br />
- Admin kann sich beim Einsenden von unbekannten Dateitypen benachrichtigen lassen<br />
- Kategoriebilder für Hauptkategorien können festgelegt werden<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Änderungen in 0.9</span><br />
- Kategorien und Dateien können nach diversen Kriterien sortiert werden<br />
- Anzahl der Dateien in den Kategorien wird angezeigt<br />
- Block nach Popularität hinzugefügt<br />
- Vorauswahl von Playern<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Änderungen in 0.91</span><br />
- Counter für besuchte Dateien und Downloads<br />
- Neues Popup-Info-Skript<br />
- Bugfixes im Uploadbereich<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Änderungen in 0.92</span><br />
- Höhe, Breite und Autostart der Player werden in Player-Administration zusätzlich festgelegt<br />
- Neue Blöcke in denen die Dateien direkt abgespielt werden<br />
- Bugfix maximale Uploadgröße<br />
- Bugfix Radioadministration, lange Stream-URLS jetzt möglich<br />
- Dateityp .wmv hinzugefügt
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Credits</span><br />
onlamp.swf und weitere kleine Bereiche sind nicht von mir sondern von Mark Lubkowitz (mail@mark-lubkowitz.de). Overlib&copy; stammt von http://www.bosrup.com/web/overlib/. Das Javascript zur Anpassung des Fensters an den Inhalt stammt von http://www.howtocreate.co.uk. Die id3-Klasse ist getid3. Ich möchte mich an dieser Stelle auch ganz herzlich bei Chapi, gnikalu und Predator für den Support bedanken.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Entschuldigungen</span><br />
Dies ist das erste richtige von mir geschriebene Modul, also moppert nicht über den Code. Ich weiss, dass dieses Modul niemals Xoops-zertifiziert werden wird. Falls ihr schwerwiegende Fehler finden solltet, so schreibt mir an <a href="mailto:frankblack@myxoops.de">frankblack@myxoops.de</a>.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Things to do</span><br />
- Playlists<br />
- Winamp player
etc. pp.</li><br /></ul>

Viel Vergnügen!
frankblack  
</td></tr></table>';

	xoops_cp_footer();

?>