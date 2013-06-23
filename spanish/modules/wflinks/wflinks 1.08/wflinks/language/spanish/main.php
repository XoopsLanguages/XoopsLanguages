<?php
/**
 * $Id: main.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 */
//Traducción por debianus. Sugerencias y reporte de errores en http://es.impresscms.org
define("_MD_WFL_NOLINK","Este enlace no existe");
define("_MD_WFL_SUBCATLISTING","Lista de categorías");
define("_MD_WFL_ISADMINNOTICE","Hay un problema con esta imagen.");
define("_MD_WFL_THANKSFORINFO","Gracias por su envío. Se le notificará la aprobación de su solicitud por el administrador.");
define("_MD_WFL_ISAPPROVED","Gracias por su envío. Su solicitud ha sido aprobada y aparecerá en nuestra relación.");
define("_MD_WFL_THANKSFORHELP","Gracias por ayudarnos a mantener este directorio.");
define("_MD_WFL_FORSECURITY","Por razones de seguridad su nombre de usuario e IP serán almacenadas temporalmente.");
define("_MD_WFL_DESCRIPTION","Descripción");
define("_MD_WFL_SUBMITCATHEAD","Formulario para enviar enlaces");
define("_MD_WFL_MAIN","Inicio");
define("_MD_WFL_POPULAR","Popular");
define("_MD_WFL_NEWTHISWEEK","Nuevos esta semana");
define("_MD_WFL_UPTHISWEEK","Actualizado esta semana");
define("_MD_WFL_POPULARITYLTOM","Popularidad (de menos a más clics)");
define("_MD_WFL_POPULARITYMTOL","Popularidad (de más a menos clics)");
define("_MD_WFL_TITLEATOZ","Título (A a la Z)");
define("_MD_WFL_TITLEZTOA","Título (Z a la A)");
define("_MD_WFL_DATEOLD","Fecha (los más viejos primero)");
define("_MD_WFL_DATENEW","Fecha (los más nuevos primero)");
define("_MD_WFL_RATINGLTOH","Nota (de menor a mayor)");
define("_MD_WFL_RATINGHTOL","Nota (de mayor a menor)");
define("_MD_WFL_DESCRIPTIONC","Descripción: ");
define("_MD_WFL_CATEGORYC","Categoría: ");
define("_MD_WFL_VERSION","Versión");
define("_MD_WFL_SUBMITDATE","Enviado el");
define("_MD_WFL_LINKHITS","<b>Visitado</b>: %s veces");
define("_MD_WFL_URLRATING","<b>ICRA</b>: %s");
define("_MD_WFL_PUBLISHERC","Enviado por: ");
define("_MD_WFL_PUBLISHER","Enviado por: ");
define("_MD_WFL_RATINGC","Nota: ");
define("_MD_WFL_PAGERANK","PageRank: ");
define("_MD_WFL_PAGERANKALT","Google PageRank: ");
define("_MD_WFL_ONEVOTE","1 Voto");
define("_MD_WFL_NUMVOTES","%s Valoraciones");
define("_MD_WFL_RATETHISFILE","Valorar enlace");
define("_MD_WFL_MODIFY","Modificar");
define("_MD_WFL_REPORTBROKEN","Reportar error");
define("_MD_WFL_BROKENREPORT","Reportar enlace erróneo");
define("_MD_WFL_SUBMITBROKEN","Enviar");
define("_MD_WFL_BEFORESUBMIT","Antes de enviar este reporte compruebe el estado actual del sitio al que dirige el enlace. Puede que el sitio haya cambiado de dirección o esté temporalmente inhabilitado.");
define("_MD_WFL_TELLAFRIEND","Recomendar");
define("_MD_WFL_EDIT","Modificar");
define("_MD_WFL_THEREARE","Actualmente hay <b>%s</b> <i>categorías</i> y <b>%s</b> <i>enlaces</i> publicados");
define("_MD_WFL_THEREIS","Actualmente hay <b>%s</b> <i>categorías</i> y <b>%s</b> <i>enlaces</i> publicados");
define("_MD_WFL_LATESTLIST","Ultimos publicados");
define("_MD_WFL_FILETITLE","Título del enlace: ");
define("_MD_WFL_DLURL","URL: ");
define("_MD_WFL_LINK_DIRCA"," Calificación del contenido: ");
define("_MD_WFL_HOMEPAGEC","Página de inicio: ");
define("_MD_WFL_NOTSPECIFIED","No especificado");
define("_MD_WFL_SUBMITTER","Enviado por");
define("_MD_WFL_UPDATEDON","Actualizado el");
define("_MD_WFL_PRICEFREE","Gratis");
define("_MD_WFL_VIEWDETAILS","Ver todos los detalles");
define("_MD_WFL_OPTIONS", 'Opciones: ');
define("_MD_WFL_NOTIFYAPPROVE", 'Notificarme cuando el enlace sea aprobado');
define("_MD_WFL_VOTEAPPRE","Su voto es apreciado.");
define("_MD_WFL_THANKYOU","Gracias por tomarse el tiempo de votar en %s"); // %s is your site name
define("_MD_WFL_VOTEONCE","Por favor no vote el mismo enlace más de una vez.");
define("_MD_WFL_RATINGSCALE","La escala es de 1 a 10, siendo 1 la calificación mínima y 10 la máxima.");
define("_MD_WFL_BEOBJECTIVE","Por favor sea objetivo, si solo califica con 1 o 10, la calificación no tiene sentido.");
define("_MD_WFL_DONOTVOTE","No vote su propio enlace.");
define("_MD_WFL_RATEIT","Califíquelo");
define("_MD_WFL_INTFILEFOUND","Encontré un enlace interesante en %s"); // %s is your site name
define("_MD_WFL_RANK","Ránking");
define("_MD_WFL_CATEGORY","Categoría");
define("_MD_WFL_HITS","Clics");
define("_MD_WFL_RATING","Nota");
define("_MD_WFL_VOTE","Valoraciones");
define("_MD_WFL_SORTBY","Ordenar por:");
define("_MD_WFL_TITLE","Título");
define("_MD_WFL_DATE","Fecha");
define("_MD_WFL_POPULARITY","Popularidad");
define("_MD_WFL_TOPRATED","Valoración");
define("_MD_WFL_CURSORTBY","Enlaces actualmente ordenados por: %s");
define("_MD_WFL_CANCEL","Cancelar");
define("_MD_WFL_ALREADYREPORTED","Ud. ya reportó un error en este enlace.");
define("_MD_WFL_MUSTREGFIRST","Disculpe, no tiene permisos para realizar esta acción.<br />Por favor, primero regístrese o inicie sesión");
define("_MD_WFL_NORATING","No selecciono una puntuación.");
define("_MD_WFL_VOTEFORTITLE","Califique este enlace: ");
define("_MD_WFL_CANTVOTEOWN","Ud. no puede votar su propio enlace.<br />Todas las valoraciones se registran y revisan.");
define("_MD_WFL_SUBMITLINK","Enviar enlace");
define("_MD_WFL_SUB_SNEWMNAMEDESC","<ul><li>Los nuevos enlaces están sujetos a validación y pueden tardar más de un día en aparecer en nuestras listas.</li><li>Nos reservamos el derecho de rechazar cualquier enlace enviado o modificar el contenido del mismo para su aprobación.</li></ul>");
define("_MD_WFL_MAINLISTING","Lista principal de categorías");
define("_MD_WFL_LASTWEEK","Última semana");
define("_MD_WFL_LAST30DAYS","Últimos 30 Días");
define("_MD_WFL_1WEEK","1 Semana");
define("_MD_WFL_2WEEKS","2 Semanas");
define("_MD_WFL_30DAYS","30 Días");
define("_MD_WFL_SHOW","Mostrar");
define("_MD_WFL_DAYS","días");
define("_MD_WFL_NEWLINKS","Nuevos enlaces");
define("_MD_WFL_TOTALNEWLINKS","Total de nuevos enlaces");
define("_MD_WFL_DTOTALFORLAST","Total de nuevos enlaces en los últimos");
define("_MD_WFL_AGREE","Acepto");
define("_MD_WFL_DOYOUAGREE","¿Está de acuerdo con estos términos?");
define("_MD_WFL_DISCLAIMERAGREEMENT","Limitación de responsabilidad");
define("_MD_WFL_DUPLOADSCRSHOT","Cargar captura de pantalla:");
define("_MD_WFL_RESOURCEID","ID#: ");
define("_MD_WFL_REPORTER","Reporte originado por: ");
define("_MD_WFL_DATEREPORTED","Fecha del reporte: ");
define("_MD_WFL_RESOURCEREPORTED","Recurso con fallo reportado");
define("_MD_WFL_RESOURCEREPORTED2","El enlace ya ha sido reportado como erróneo, estamos trabajando para solucionar el inconveniente");
define("_MD_WFL_BROWSETOTOPIC","<b>Buscar enlaces por orden alfabético</b>");
define("_MD_WFL_WEBMASTERACKNOW","Reporte de error reconocido: ");
define("_MD_WFL_WEBMASTERCONFIRM","Reporte de error confirmado: ");
define("_MD_WFL_ERRORSENDEMAIL","Reporte de error confirmado pero hubo problemas al enviar el correo electrónico de notificación al administrador.");
define("_MD_WFL_DELETE","Eliminar");
define("_MD_WFL_DISPLAYING","Mostrado por: ");
define("_MD_WFL_LEGENDTEXTNEW","Nuevos hoy");
define("_MD_WFL_LEGENDTEXTNEWTHREE","Nuevos hace tres días");
define("_MD_WFL_LEGENDTEXTTHISWEEK","Nuevos esta semana");
define("_MD_WFL_LEGENDTEXTNEWLAST","Más de 1 semana");
define("_MD_WFL_THISFILEDOESNOTEXIST","Error: el enlace no existe");
define("_MD_WFL_BROKENREPORTED","Enlace erróneo reportado");
define("_MD_WFL_REV_SNEWMNAMEDESC","Por favor, complete el formulario que se le muestra y añadiremos su comentario tan pronto como nos sea posible.<br /><br />Gracias por colaborar.<br /><br />Todas los envíos serán revisados por alguno de nuestros administradores antes de ser publicados en el sitio.");
define("_MD_WFL_ISNOTAPPROVED","Su envío tiene que ser aprobado por un moderador.");
define("_MD_WFL_HOMEPAGETITLEC","Título de la página de inicio: ");
define("_MD_WFL_SCREENSHOT","Captura:");
define("_MD_WFL_SCREENSHOTCLICK","Mostrar imagen completa");
define("_MD_WFL_OTHERBYUID","Otros enlaces de: ");
define("_MD_WFL_LINKTIMES","Visitas del enlace: ");
define("_MD_WFL_MAINTOTAL","Total de enlaces: ");
define("_MD_WFL_LINKNOW","Visitar enlace");
define("_MD_WFL_PAGES","<b>Páginas</b>");
define("_MD_WFL_RATEDRESOURCE","Valorar enlaces");
define("_MD_WFL_ERROR","Error actualizando la base de datos: la información no fue almacenada");
define("_MD_WFL_COPYRIGHT","copyright");
define("_MD_WFL_INFORUM","Discusión en el foro");
// added frankblack
define("_MD_WFL_NOTALLOWESTOSUBMIT","Ud. no tiene permiso para enviar enlaces");
define("_MD_WFL_INFONOSAVEDB","La información no se almacenó en la base de datos: <br /><br />");
define("_MD_WFL_NEWLAST","Nuevos envíos antes de la última semana");
define("_MD_WFL_NEWTHIS","Nuevos envíos durante esta semana");
define("_MD_WFL_THREE","Nuevos envíos en los últimos tres días");
define("_MD_WFL_TODAY","Nuevos envíos hoy");
define("_MD_WFL_NO_FILES","Aún no hay enlaces");
define("_MD_WFL_NOPERMISSIONTOPOST","Ud. no tiene permiso para enviar contenido a esta categoría.");
define("_MD_WFL_PUBLISHDATE","Publicado el");
define("_MD_WFL_APPROVE","Aprobar");
define("_MD_WFL_MODERATOR_OPTIONS","Opciones del moderador"); 
// added by McDonald
define("_MD_WFL_COUNTRY","País:");
define("_MD_WFL_COUNTRYB","<b>País:</b>");
define("_MD_WFL_KEYWORDS","Palabras clave:");
define("_MD_WFL_KEYWORDS_NOTE","Deben estar separadas con una coma (palabra_clave, número2 ..)");
define("_MD_WFL_NOLINKLOAD","Gracias por su envío");
define("_MD_WFL_LINKID","ID del enlace");
define("_MD_WFL_COUNTRYSORT","País");
define("_MD_WFL_COUNTRYLTOH","País (de la A a la Z)");
define("_MD_WFL_COUNTRYHTOL","País (de la Z a la A)");
define("_MD_WFL_BACKBUTTON","Retroceder");
define("_MD_WFL_ADMINSECTION","Sección de administración");
define("_MD_WFL_ADDTO","Añadir a: ");
define("_MD_WFL_INFORMATION","Información");
define("_MD_WFL_ADDRESS","Dirección:");
define("_MD_WFL_LINK_GOOGLEMAP","Google Maps");
define("_MD_WFL_LINK_YAHOOMAP","Yahoo Maps");
define("_MD_WFL_LINK_MULTIMAP","Multimapa");
define("_MD_WFL_LINK_CHECKMAP","Comprobar mapa");
define("_MD_WFL_STREET1","Calle 1");
define("_MD_WFL_STREET2","Calle 2 (opcional)");
define("_MD_WFL_TOWN","Ciudad");
define("_MD_WFL_STATE","Estado");
define("_MD_WFL_ZIPCODE","Código postal");
define("_MD_WFL_TELEPHONE","Teléfono");
define("_MD_WFL_TEL","Teléfono ");
define("_MD_WFL_FAX","Fax");
define("_MD_WFL_GETMAP","Mapa");
// Version 1.05 RC5
define("_MD_WFL_VOIP","VoIP ");
define("_MD_WFL_PRINT","Imprimir");
define("_MD_WFL_NOITEMSELECTED","No seleccionó un enlace válido");
define("_MD_WFL_MOBILE","Móvil");
// Version 1.05 RC6
define("_MD_WFL_VAT","VAT");
define("_MD_WFL_VATWIKI", '<small>Para más información <a href="http://en.wikipedia.org/wiki/Value_added_tax_identification_number" target="_blank">Wikipedia</a>');
define("_MD_WFL_EMAIL","Correo electrónico");
define("_MD_WFL_LINK_CREATEADDRESS", '<b>Formulario de agenda</b>');
//Version 1.06 RC2
define('_MD_WFL_STOPIT','Detenlo');
?>
