Xoopseditor bevat een collectie van editors die te gebruiken zijn in XOOPS

Handleiding:

1 Controleer het bestand xoops_version.php in de map /xoopseditor/ om er zeker van te zijn dat deze nieuwer is dan de huidige die in gebruik is.

2 Verplaats /xoopseditor/ naar /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce
  
3 Configureer voorkeuren indien van toepassing
3.1 ./dhtmlext(alle editors)/language/: Maak een eigen taalbestand gebaseerd op english.php
3.3 ./dhtmlext(alle editors)/editor_registry.php: Instellingen voor de editor: Volgorde - Volgorde van weergave in het geval editor selectie wordt gebruikt, 0 voor uitgeschakeld, nohtml - werkt voor niet-html sntax
3.3 ./FCKeditor/module/: Kopieer de bestanden naar de modules mappen in het geval module specifieke machtigingen en editor-opties zijn verplicht
3.3.1 ./FCKeditor/module/fckeditor.config.js: Voor editor opties hoeven deze instellingen niet aangepast te worden
3.3.2 ./FCKeditor/module/fckeditor.connector.php: Specificeer de map voor bestandsbrowsing (en uploadruimte) => XOOPS/uploads/XOOPS_FCK_FOLDER/, de map dient handmatig aangemaakt te worden
3.3.3 ./FCKeditor/module/fckeditor.upload.php: Machtigingen opgeven voor uploaden en opslag
3.4 XOOPS/uploads/fckeditor/: het creëren van de map, als FCKeditor is ingeschakeld, gebruikt voor uploads van waar de upload map is niet opgegeven
3.5 ./tinymce/tinymce/jscripts/: Haal de lokale taalbestanden van http://tinymce.moxiecode.com/language.php

4 Controleer bestandsnamen: Voor een systeem wat een hoofdlettergevoelig is dient u ervoor te zorgen dat de bestandsnamen letterlijk worden overgenomen. Dat willen zeggen, "FCKeditor" is dan niet gelijk aan "fckeditor"

5 Controleer /xoopseditor/sampleform.inc.php voor de ontwikkelingshandleiding