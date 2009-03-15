xoopseditor giver et udvalg af editore i Xoops

Brugerguide:

1 Kontrollér filen xoops_version.php i mappen /xoopseditor/, for at sikre at de er nyere end dem du benytter nu

2 upload /xoopseditor/ til /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce
  
3 Konfigurer indstillingerne hvor det er muligt
3.1 ./dhtmlext(alle editors)/language/: lav din egen language fil baseret på english.php

3.3 ./dhtmlext(alle editors)/editor_registry.php: Ret konfigurationen for editoren: order - visnings rækkefølge hvis det er valgt, 0 for at fravælge; nohtml - virker for ikke-html syntax
3.3 ./FCKeditor/module/: Kopier filerne til modulets folder, i tilfældet af at modulet kræver dette
3.3.1 ./FCKeditor/module/fckeditor.config.js: For indstillinger, der er sjældet behov for at ændre i dette
3.3.2 ./FCKeditor/module/fckeditor.connector.php: For at angive folder for fil browsing (og upload mappe) => XOOPS/uploads/XOOPS_FCK_FOLDER/, Det er nødvendigt at oprette mappen manuelt.
3.3.3 ./FCKeditor/module/fckeditor.upload.php: Angive upload rettigheder og upload mappe
3.4 XOOPS/uploads/fckeditor/: Oprettelse af mappen, hvis FCKeditor er valgt, bruges til uploads fra steder hvor upload mappen ikke er angivet
3.5 ./tinymce/tinymce/jscripts/langs: Download dine sprogfiler fra http://tinymce.moxiecode.com/language.php

4 check fil navne: Bemærk at det i nogle systemer er case sensitive, vær sikker på at du har skrevet filnavnene korrekt, "FCKeditor" er ikke identisk med "fckeditor"

5 check /xoopseditor/sampleform.inc.php til udvikling