xoopseditor proporciona un colectivo de editores para XOOPS

guía del usuario:

1 compruebe los archivos xoops_version.php en /xoopseditor/ para asegurarse de que sean los más nuevos que los actuales

2 Subir /xoopseditor/ a /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  		XOOPS/class/xoopseditor/dhtmlext
  		XOOPS/class/xoopseditor/dhtmltextarea
  		XOOPS/class/xoopseditor/fckeditor
  		XOOPS/clase/xoopseditor/koivi
  		XOOPS/class/xoopseditor/textarea
  		XOOPS/clase/xoopseditor/tinymce

3 configurar preferencias donde corresponda
3.1 ./dhtmlext(todos los editores) /language/: cree su archivo de idioma local basado en english.php
3.3 ./dhtmlext(todos los editores) /editor_registry.php: establecer configuraciones para el editor: orden - orden de visualización en caso de que se use la selección del editor, 0 para deshabilitado; nohtml: funciona para la sintaxis no html
3.3 ./FCKeditor/module/: copie los archivos a las carpetas de los módulos en caso de que se requieran permisos de carga específicos del módulo, almacenamiento y opciones de editor
3.3.1 ./FCKeditor/module/fckeditor.config.js: para las opciones del editor, generalmente no es necesario cambiarlo
3.3.2 ./FCKeditor/module/fckeditor.connector.php: para especificar la carpeta para examinar el archivo (y cargar el almacenamiento) => XOOPS / uploads / XOOPS_FCK_FOLDER /, la carpeta debe crearse manualmente
3.3.3 ./FCKeditor/module/fckeditor.upload.php: especifique permiso de carga y carga de almacenamiento
3.4 XOOPS/uploads/fckeditor/: para crear la carpeta si FCKeditor está habilitado, utilizado para cargas desde donde no se especifica la carpeta de carga
3.5 ./tinymce/tinymce/jscripts/: descargue sus archivos de idioma local de http://tinymce.moxiecode.com/language.php

4 verifique los nombres de los archivos: para el sistema de mayúsculas y minúsculas del nombre de archivo, asegúrese de que los nombres de los archivos sean literalmente correctos, es decir, "FCKeditor" no es idéntico a "fckeditor"

5 verifique /xoopseditor/sampleform.inc.php para obtener una guía de desarrollo