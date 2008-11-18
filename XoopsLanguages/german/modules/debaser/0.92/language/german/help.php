<?php
include '../../../../mainfile.php';

include '../../../../include/cp_functions.php';

	xoops_cp_header();

echo '
<table><tr><td>
<h1>debaser!</h1>

<ol><li><span style="color:#ff0000; font-weight:bold;">Was ist debaser?</span><br />
debaser ist ein kleiner in Xoops eingebetteter Multimedia-Player. Mit debaser k�nnen Multimedia-Dateien innerhalb von Xoops eingeschickt oder abgespielt werden. Ihr k�nnt zwischen verschiedenen Playern aussuchen.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Systemvoraussetzungen f�r debaser</span><br />
debaser arbeitet am besten mit Xoops 2.0.6 oder h�her. In anderen Versionen gibt es h�ssliche Warnings und Notices. Tut mir leid.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Wie wird debaser installiert?</span><br />
debaser wird wie jedes andere Xoops-Modul �ber die Moduladministration installiert. Die Ordner <strong>upload</strong>, <strong>batchload</strong>, <strong>images/category</strong> und <strong>images/category/thumbs</strong> brauchen <strong>CHMOD 777</strong>.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Wie werden Dateien hochgeladen?</span><br />
Ganz einfach! Wahlweise �ber <strong>Einzelupload</strong> oder <strong>Batchload</strong>. Mit <strong>Einzelupload</strong> kann man, wie der Name schon sagt, immer nur eine Datei gleichzeitig hochladen. Ihr habt die M�glichkeit das Formular selber komplett auszuf�llen oder wenn Ihr euch die Arbeit sparen wollt, lasst das Script dies f�r Euch erledigen. Bei manchen Dateitypen werden aber nicht alle Informationen ausgelesen. Wie gro� die Datei sein darf die hochgeladen werden kann h�ngt von den Einstellungen in der php.ini ab. Wenn ihr auf der Einschicken-Seite seid, wird euch oben angezeigt, wie gro� die Datei sein darf. Wollt Ihr die <strong>Batchload</strong>-Funktion nutzen, m�sst ihr erst per ftp eure Dateien in den batchload-Ordner hochladen. Dann geht in die Administration von debaser und klickt auf den <strong>Batchload</strong>-Link. Jede Datei welche sich in diesem Ordner befindet wird in die Datenbank eingef�gt, die Datei selber in den upload-Ordner verschoben und umbenannt. Bei beiden Upload-M�glichkeiten k�nnt ihr w�hlen, ob die Kategorien automatisch erstellt werden sollen oder ob ihr die Dateien selber in die Kategorien einsortieren wollt. Beim Batchload kann es vorkommen, dass auch Dateien mit unbekannten Mimetypen hinzugef�gt werden. Sollte dies der Fall sein, werden diese als noch freizugeben markiert. Unter der Freigabemaske k�nnen dann auch die richtigen Dateierweiterungen zusortiert werden.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Wie werden Links zu Dateien eingef�gt?</span><br />
Auch ganz einfach!! Wenn ihr aus dem Submenu von debaser auf <strong>Datei einschicken</strong> klickt, habt ihr die M�glichkeit Links einzuschicken (es sein denn ihr habt diese Option in den Einstellungen deaktiviert). Ihr m�sst wenigstens die URL zur Datei angeben. Jetzt bleibt euch �berlassen, ob das Skript die restlichen Informationen einf�gen soll oder nicht. Wenn ihr keine weiteren Informationen angebt, versucht das Skript aus den ersten 10 KB der Datei Informationen auszulesen. Das Ganze hat nur einen Haken! Die Klasse die die Informationen ausliest kann nat�rlich nur <strong>VORHANDENE</strong> Informationen auslesen. Sind also keine Infos vorhanden werden auch keine Infos eingetragen. Warum werden denn nur die ersten 10 KB eingelesen? Ich bin der Meinung, dass es keinen Spass macht (unter Umst�nden) minutenlang zu warten nur um einen Link einzutragen. �ber PHP k�nnen nur Informationen aus einer Datei gelesen werden wenn sie <strong>KOMPLETT</strong> �bertragen worden sind. Noch ein Haken: Ist auf dem Server auf dem die Datei liegt <strong>fopen</strong> in der php.ini nicht aktiviert, wird auch nichts eingelesen. Ich denke aber, dass die hier programmierte L�sung einen guten Kompromiss bietet.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Wie werden Player hinzugef�gt?</span><br />
Es gibt die M�glichkeit noch weitere als die bereits vorhandenen Player einzubinden. In der Administration auf <strong>Player bearbeiten</strong> anklicken. Einen neuen Namen und den Code dazu eingeben und abschicken. An den Stellen wo die Quelle angegeben werden muss, muss die Variable <strong><@mp3file@></strong> eingef�gt werden. Stellen an die Werte f�r H�he, Breite und Autostart stehen, m�ssen durch die Variablen <strong><@height@>, <@width@> und <@autostart@></strong> gesetzt werden. Benutzt <strong>IMMER</strong> doppelte Anf�hrungszeichen innerhalb des Player-Codes</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Abspielen von Radio-Streams</span><br />
Ich habe die Funktionalit�t von iradio 0.5 mit in debaser eingebaut. Geht in die debaser-Administration um die Radio-Sender zu konfigurieren. Ich glaube dieser Teil ist selbsterkl�rend. Noch eine Anmerkung: Es klappt noch nicht die Funktionen des Multimedia-Players von den Radio-Funktionen zu trennen. D. h. G�ste die den Radioblock benutzen sollen, haben gleichzeitig Zugriff auf den Multimedia-Teil des Moduls.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Definieren von Multimedia-Formaten</span><br />
Multimedia-Dateien werden anhand ihrer Erweiterung definiert. In der Administration unter <strong>Dateitypen</strong> findet Ihr eine Eingabemaske in der die Informationen eingetragen werden k�nnen. Die Dateierweiterung darf maximal 4 Zeichen haben (ohne Punkt). Die Applikation bzw. der Name des Formats muss angegeben werden und der Mimetyp der Datei. Der Mimetyp einer Datei besteht immer aus zwei Teilen der mit einem Slash getrennt ist. Wenn mehrere Mimetypen f�r einen Dateityp vorliegen werden sie mit einem Leerzeichen voneinander getrennt. In der Eingabemaske solltet Ihr auch den Player einstellen, mit dem diese Dateien standardm��ig abgespielt werden sollen. Solltet Ihr den Mimetypen einer Datei nicht kennen: Einfach versuchen die Datei hochzuladen. Wenn der Dateityp nicht bekannt sein sollte, wird der Mimetyp dieser Datei auf der Weiterleitungsseite angezeigt.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Weitere Informationen</span><br />
Benachrichtigungen funktionieren nicht beim <strong>Batchload</strong>! Oder wollt ihr das E-Mail-Fach oder den Posteingang mit Nachrichten �berfluten?</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Die debaser-Einstellungen</span><br />
Es gibt eine Menge Einstellungen um debaser anzupassen. Nachstehend werden alle Optionen nach ihrer Nummerierung in den Einstellungen erkl�rt.<br /><br />
<ol><li><span style="color: #006633; font-weight:bold;">Download:</span> Hier k�nnt ihr festlegen, ob die Dateien auch heruntergeladen werden k�nnen.</li><br />
<li><span style="color: #006633; font-weight:bold;">Dateien pro Seite:</span> Wie viele Dateien sollen pro Seite angezeigt werden?</li><br />
<li><span style="color: #006633; font-weight:bold;">Upload-Rechte:</span> Hier k�nnt ihr festlegen, welche Gruppen Dateien einschicken k�nnen. Uploads f�r G�ste sind eine gesonderte Option.</li><br />
<li><span style="color: #006633; font-weight:bold;">Gast Upload-Rechte:</span> Hier k�nnt ihr festlegen, ob G�ste Dateien einschicken k�nnen.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Freigabe Dateieinzeluploads:</span> Hier k�nnt ihr festlegen, ob die Dateien bei Einzel-Uploads automatisch freigegeben werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Freigabe von eingeschickten Links:</span> Hier k�nnt ihr festlegen, ob eingeschickte Links automatisch freigegeben werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Freigabe Batchload:</span> Hier k�nnt ihr festlegen, ob die Dateien bei Batchloads automatisch freigegeben werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Maximale Uploadgr��e:</span> Hier k�nnt ihr festlegen, wie gro� eine Datei maximal sein darf. Der hier eingetragenen Wert wird aus eurer php.ini ausgelesen und stellt den maximal m�glichen Wert dar.</li><br />
<li><span style="color: #006633; font-weight:bold;">Art der Dateneinsendung:</span> Hier k�nnt ihr festlegen, ob Dateien, Links oder beides eingeschickt werden kann.</li><br />
<li><span style="color: #006633; font-weight:bold;">Gast-Abstimmungen:</span> Hier k�nnt ihr festlegen, ob G�ste die Dateien bewerten d�rfen.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Kategorien - Einzelupload:</span> Wenn ihr euch weniger Arbeit (Ansichtssache) machen wollt setzt diese Option auf <strong>Ja</strong>. In diesem Fall werden die Kategorien aus der Datei gelesen. Falls <strong>Nein</strong> ist es m�glich die Kategorien aus dem Dropdown-Men� auszuw�hlen. Bei beiden M�glichkeiten kann es vorkommen, dass keine Kategorien-Informationen angegeben oder vorhanden sind. In dem Fall wird die <strong>Kategorie</strong> als <strong>Other</strong> definiert. Den Namen <strong>Other</strong> k�nnt ihr nat�rlich noch in der Administration �ndern, aber es ist nicht m�glich diese Kategorie zu l�schen. Wenn ihr der Meinung seid, dass die Verweigerung die Kategorie <strong>Other</strong> zu l�schen bl�d ist, seid beruhigt. Leere Kategorien werden auf der Userseite nicht angezeigt.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatische Kategorien - Batchload:</span> Siehe Punkt 11.</li><br />
<li><span style="color: #006633; font-weight:bold;">Uploadverzeichnis f�r Kategoriebilder:</span> Hier k�nnt Ihr festlegen in welchem Verzeichnis die Kategoriebilder abgelegt sind.</li><br />
<li><span style="color: #006633; font-weight:bold;">Thumbnails:</span> Kategoriebilder werden durch die Thumbnails dargestellt. Stellt die Einstellung auf <strong>Nein</strong>, wenn euer Server keine Grafik-Libraries zur Verf�gung stellt. Unterst�tzt werden die Grafikformate gif, jpg und png.</li><br />
<li><span style="color: #006633; font-weight:bold;">Maximale Breite der Kategoriebilder</span> Hier k�nnt ihr festlegen wie breit die Kategoriebilder sein d�rfen. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Maximale H�he der Kategoriebilder</span> Hier k�nnt ihr festlegen wie hoch die Kategoriebilder sein d�rfen. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Thumbnail-Qualit�t:</span> Hier k�nnt ihr festlegen wie hoch die Qualit�t der Kategoriebilder sein soll. Der Wert <strong>100</strong> entspricht der Qualit�t 100 %. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Thumbnails-Aktualisierung?</span> Hier k�nnt Ihr festlegen, ob bei jedem Aufruf der Index-Seite die Kategoriebilder aktualisiert werden sollen. Wenn nein, wird das zuletzt erzeugte Bild benutzt. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Seitenverh�ltnis des Kategoriebildes beibehalten?</span> Hier k�nnt ihr festlegen, ob das Kategoriebild verzerrt werden darf, wenn maximale Breite und maximal H�he des Kategoriebildes nicht das gleiche Seitenverh�ltnis haben. Funktioniert nur wenn Thumbnails auf <strong>Ja</strong> steht.</li><br />
<li><span style="color: #006633; font-weight:bold;">Berechtigungssystem f�r Kategorien benutzen?</span> Hier legen Sie fest, ob Sie auf zus�tzlichen Administrationsaufwand durch das Berechtigungssystem f�r Kategorien verzichten wollen und alle Kategorien f�r alle User sichtbar sind.</li><br />
<li><span style="color: #006633; font-weight:bold;">Berechtigungssystem f�r Dateien benutzen?</span> Hier legen Sie fest, ob Sie auf zus�tzlichen Administrationsaufwand durch das Berechtigungssystem f�r Dateien verzichten wollen und alle Dateien f�r alle User sichtbar sind.</li><br />
<li><span style="color: #006633; font-weight:bold;">Playervorauswahl</span> Hier werden die Gruppen festgelegt, die vorgegebene Player benutzen sollen. Somit k�nnen die User die Player NICHT selber aussuchen. G�ste m�ssen generell die voreingestellten Player benutzen.</li><br />
<li><span style="color: #006633; font-weight:bold;">Dateien sortieren nach</span> Die Dateien k�nnen innerhalb der Kategorie nach diversen Kriterien sortiert werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Reihenfolge der Dateien</span> Die Dateien k�nnen zus�tzlich zu den zuvor genannten Kriterien noch auf- bzw. absteigend sortiert werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Kategorien sortieren nach</span> Die Kategorien k�nnen auf der Indexseite nach diversen Kriterien sortiert werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Reihenfolge der Kategorien</span> Die Kategorien k�nnen zus�tzlich zu den zuvor genannten Kriterien noch auf- bzw. absteigend sortiert werden.</li><br />
<li><span style="color: #006633; font-weight:bold;">Tooltips benutzen</span> Mit den Tooltips k�nnen zu den Links in den Bl�cken und in genre.php weitere Informationen angezeigt werden.</li><br />
</ol></li><br />

<li><span style="color:#ff0000; font-weight:bold;">�nderungen in 0.7</span><br />
- Neue id3-Klasse die id3v1- und id3v2-Informationen ausliest<br />
- debaser arbeitet definitiv mit register_globals Off<br />
- Benachrichtigungen hinzugef�gt<br />
- Automatische Erstellung von Genres oder benutzerdefinierte Erstellung von Genres<br />
- Registrierte User k�nnen ihren Lieblings-Player einstellen<br />
- Links zu Mpeg-Dateien k�nnen eingeschickt werden<br />
- Overlib(c) Bibliothek f�r Popup-Informationen. Falls ihr Overlib&copy; in euren Templates einsetzen wollt besucht <a href="http://smarty.php.net/manual/en/language.function.popup.php" target="_blank">http://smarty.php.net</a> oder <a href="http://www.bosrup.com/web/overlib/" target="_blank">http://www.bosrup.com</a><br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">�nderungen in 0.8</span><br />
- Neue id3-Klasse die Informationen aus fast allen Multimedia-Formaten auslesen kann<br />
- Anlegen von unbegrenzt verschachtelten Unterkategorien<br />
- Formulare nutzen alle die xoopsform-Klasse<br />
- Komplette �berarbeitung des Admin-Bereichs<br />
- Komplette �berarbeitung des myDebaser-Bereichs. Es k�nnen den zur Verf�gung stehenden Dateiformaten Player zugewiesen werden<br />
- Dateiformate k�nnen im Admin-Bereich verwaltet werden<br />
- In der Administration k�nnen Dateien in andere Kategorien verschoben werden<br />
- �berfl�ssige Templates wurden gel�scht<br />
- Berechtigungen hinzugef�gt<br />
- Admin kann sich beim Einsenden von unbekannten Dateitypen benachrichtigen lassen<br />
- Kategoriebilder f�r Hauptkategorien k�nnen festgelegt werden<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">�nderungen in 0.9</span><br />
- Kategorien und Dateien k�nnen nach diversen Kriterien sortiert werden<br />
- Anzahl der Dateien in den Kategorien wird angezeigt<br />
- Block nach Popularit�t hinzugef�gt<br />
- Vorauswahl von Playern<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">�nderungen in 0.91</span><br />
- Counter f�r besuchte Dateien und Downloads<br />
- Neues Popup-Info-Skript<br />
- Bugfixes im Uploadbereich<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">�nderungen in 0.92</span><br />
- H�he, Breite und Autostart der Player werden in Player-Administration zus�tzlich festgelegt<br />
- Neue Bl�cke in denen die Dateien direkt abgespielt werden<br />
- Bugfix maximale Uploadgr��e<br />
- Bugfix Radioadministration, lange Stream-URLS jetzt m�glich<br />
- Dateityp .wmv hinzugef�gt
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Credits</span><br />
onlamp.swf und weitere kleine Bereiche sind nicht von mir sondern von Mark Lubkowitz (mail@mark-lubkowitz.de). Overlib&copy; stammt von http://www.bosrup.com/web/overlib/. Das Javascript zur Anpassung des Fensters an den Inhalt stammt von http://www.howtocreate.co.uk. Die id3-Klasse ist getid3. Ich m�chte mich an dieser Stelle auch ganz herzlich bei Chapi, gnikalu und Predator f�r den Support bedanken.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Entschuldigungen</span><br />
Dies ist das erste richtige von mir geschriebene Modul, also moppert nicht �ber den Code. Ich weiss, dass dieses Modul niemals Xoops-zertifiziert werden wird. Falls ihr schwerwiegende Fehler finden solltet, so schreibt mir an <a href="mailto:frankblack@myxoops.de">frankblack@myxoops.de</a>.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Things to do</span><br />
- Playlists<br />
- Winamp player
etc. pp.</li><br /></ul>

Viel Vergn�gen!
frankblack  
</td></tr></table>';

	xoops_cp_footer();

?>