<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Noticias');

// A brief description of this module
define('_MI_NEWS_DESC','Crea unha Slashdot-like sección de noticas, onde os usuarios poden colocar noticas e comentarios.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Tópicos');
define('_MI_NEWS_BNAME3','Gran historia');
define('_MI_NEWS_BNAME4','Top de noticias');
define('_MI_NEWS_BNAME5','Noticias recentes');
define('_MI_NEWS_BNAME6','Moderar noticias');
define('_MI_NEWS_BNAME7','Navegar polos tópicos');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Engadir noticias');
define('_MI_NEWS_SMNAME2','Arquivo');

// Names of admin menu items
define('_MI_NEWS_ADMENU2','Xestionar tópicos');
define('_MI_NEWS_ADMENU3','Engadir/Editar noticias');
define('_MI_NEWS_GROUPPERMS','Permisos');
// Added by Hervé for prune option
define('_MI_NEWS_PRUNENEWS','Reducir noticias');
// Added by Hervé
define('_MI_NEWS_EXPORT','Exportar noticias');

// Title of config items
define('_MI_STORYHOME','Seleccioar o número de noticias a mostrar na páxina de inicio');
define('_MI_NOTIFYSUBMIT','Seleccionar Si para enviar unha mensaxe de notificación ó webmaster cada novo envío');
define('_MI_DISPLAYNAV','Seleccioar Si para mostar a caixa de navegación ó inicio de cada nova página');
define('_MI_AUTOAPPROVE','¿Aprobación automática sen a intervención do administrador?');
define("_MI_ALLOWEDSUBMITGROUPS","Grupos que poden enviar noticias");
define("_MI_ALLOWEDAPPROVEGROUPS","Grupos que poden aprobar noticias");
define("_MI_NEWSDISPLAY","Mostrar noticias extendidas");
define("_MI_NAMEDISPLAY","Autor");
define("_MI_COLUMNMODE","Columnas");
define("_MI_STORYCOUNTADMIN","Número de artigos que mostrar na zona de administración (esta opción debe ser empregada para limitar o número de tópicos mostrados na zona de administración e será empregada nas estatísticas) : ");
define('_MI_UPLOADFILESIZE','MAX tamaño de arquivo a subir (KB) 1048576 = 1 Meg');
define("_MI_UPLOADGROUPS","Grupos autorizados a subir arquivos");


// Description of each config items
define('_MI_STORYHOMEDSC','');
define('_MI_NOTIFYSUBMITDSC','');
define('_MI_DISPLAYNAVDSC','');
define('_MI_AUTOAPPROVEDSC','');
define("_MI_ALLOWEDSUBMITGROUPSDESC","Os grupos seleccioados poderán subir noticias");
define("_MI_ALLOWEDAPPROVEGROUPSDESC","Os grupos seleccioados poderán aprobar noticias");
define("_MI_NEWSDISPLAYDESC","Clásico mostra as noticias ordeadas por data de publicación. Noticias por tópico agrupa as noticias por tópico con a última historia completa e o resto con o título");
define('_MI_ADISPLAYNAMEDSC','Seleccionar como mostrar o nombe do autor(es)');
define("_MI_COLUMNMODE_DESC","Pode decidir o número de columnas para listar os artigos");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Seleccionar os grupos que poden subir ó servidor.");

// Name of config item values
define("_MI_NEWSCLASSIC","Clásico");
define("_MI_NEWSBYTOPIC","Por tópico");
define("_MI_DISPLAYNAME1","Nome de usuario");
define("_MI_DISPLAYNAME2","Nome real");
define("_MI_DISPLAYNAME3","Non mostrar o autor");
define("_MI_UPLOAD_GROUP1","Quen envía e aproba");
define("_MI_UPLOAD_GROUP2","Quen aproba somentes");
define("_MI_UPLOAD_GROUP3","Subir desactivado");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY','Global');
define('_MI_NEWS_GLOBAL_NOTIFYDSC','Opcións de notificación globais.');

define('_MI_NEWS_STORY_NOTIFY','Historia');
define('_MI_NEWS_STORY_NOTIFYDSC','As opcións de notificación que se aplican á actual historia.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY','Novo tópico');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Notifíqueme cando un novo tópico sexa creado.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Recibir notificación cando se cree un novo tópico.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} notificación automática : Aviso de novos tópicos');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY',' Nova historia enviada');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP','Notifíqueme cando unha nova historia sexa enviada (en espera de aprobación).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC','Recibir aviso de nova historia enviada(en espera de aprobación).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificación : Aviso de historia enviada');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY','Nova historia');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP','Avíseme cando unha nova historia sexa engadida.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC','Recibir aviso cando unha nova historia sexa engadida');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Autonotificación : Aviso de nova historia');

define('_MI_NEWS_STORY_APPROVE_NOTIFY','Historia aprobada');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP','Avíseme cuando unha nueva historia sexa aprobada.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC','Recibir aviso cando unha nova historia sexa aprobada.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} autonotificación : Historia aprobada');

define('_MI_RESTRICTINDEX','¿Restrinxir tópicos na páxina inicial?');
define('_MI_RESTRICTINDEXDSC','Se activa Si os usuarios somentes verán os ítems listados no índice dos tópicos, teñen acceso a configuralas en Permisos de noticias.');

define('_MI_NEWSBYTHISAUTHOR','Noticias do mesmo autor');
define('_MI_NEWSBYTHISAUTHORDSC','Se indica Si a ligazón a artigos por autor será visible.');

define('_MI_NEWS_PREVNEX_LINK','¿Mostrar enlace a Previo e Seguinte ?');
define('_MI_NEWS_PREVNEX_LINK_DESC','Cando esta opción é Si duas novas ligazóns son visibles ó final de cada artigo (Previo e Seguinte, según data de publicación).');
define('_MI_NEWS_SUMMARY_SHOW','¿Mostrar tabla resumen?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','En caso afirmativo, un sumario con ligazóns a todo o recentemente publicado é visible ó final de cada artigo.');
define('_MI_NEWS_AUTHOR_EDIT','¿Activar para cada autor editar o seus artigos?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Con esta opción cada autor puede editar sus artículos.');
define('_MI_NEWS_RATE_NEWS','¿Activar que os usuarios voten?');
define('_MI_NEWS_TOPICS_RSS','¿Activar RSS feeds por tópicos?');
define('_MI_NEWS_TOPICS_RSS_DESC',"En caso afirmativo o contido dos tópicos será habilitado para RSS feeds");
define('_MI_NEWS_DATEFORMAT',"Formato da data");
define('_MI_NEWS_DATEFORMAT_DESC',"Por favor, acuda á documentación Php(http://fr.php.net/manual/en/function.date.php) para máis información. Se non indica nada usarase o formato por defecto.");
define('_MI_NEWS_META_DATA',"¿Ativar meta datas (keywords e description) enteiras ?");
define('_MI_NEWS_META_DATA_DESC',"En caso afirmativo os aprobadores poderán engadi as siguientes meta datas: keywords y description");
define('_MI_NEWS_BNAME8','Noticias aleatorias');
define('_MI_NEWS_NEWSLETTER','Notificacións');
define('_MI_NEWS_STATS','Estatísticas');
define("_MI_NEWS_FORM_OPTIONS","Opcións de formulario");
define("_MI_NEWS_FORM_COMPACT","Compacto");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Editor Spaw");
define("_MI_NEWS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_NEWS_FORM_FCK","FCK Editor");
define("_MI_NEWS_FORM_KOIVI","Koivi Editor");
define("_MI_NEWS_FORM_OPTIONS_DESC","Seleccionar o editor a empregar. Se ten unha instalación simple (e.x usa somentes xoops core editor class, incluido no standard xoops core package), seleccione DHTML e Compact");
define("_MI_NEWS_KEYWORDS_HIGH","¿Usar keywords iluminadas?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","En caso afirmativo as keywords escritas na búsqueda serán resaltadas no texto.");
define("_MI_NEWS_HIGH_COLOR","¿Color a empregar para iluminar keywords?");
define("_MI_NEWS_HIGH_COLOR_DES","Sólo empregar esta opción en caso de contestar Sí a la opción anterior.");
define("_MI_NEWS_INFOTIPS","Lonxitude dos Tooltips");
define("_MI_NEWS_INFOTIPS_DES","en caso afirmativo terán tantos caracteres do título como vostede indique. 0 indicará vacío.");
define("_MI_NEWS_SITE_NAVBAR","¿Usar barra de navegación Mozilla e Opera Site?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Si, emprega a barra de navegación para navegar polo teus artigos.");
define("_MI_NEWS_TABS_SKIN","Seleccionar pel para empregar en tabs");
define("_MI_NEWS_TABS_SKIN_DESC","Pel a empregar nos bloques que usen tabs");
define("_MI_NEWS_SKIN_1","Barra de estilo");
define("_MI_NEWS_SKIN_2","Beveled");
define("_MI_NEWS_SKIN_3","Clásica");
define("_MI_NEWS_SKIN_4","Carpetas");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Plana");
define("_MI_NEWS_SKIN_7","Redondeada");
define("_MI_NEWS_SKIN_8","ZDnet style");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Arquivos');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","¿Mostrar ligazóns para versión imprimible dos teus artigos?");
define("_MI_NEWS_DUBLINCORE","¿Activar Dublin Core Metadata ?");
define("_MI_NEWS_DUBLINCORE_DSC","Para máis información, <a href='http://dublincore.org/'>visite esta ligazón</a>");
define("_MI_NEWS_BOOKMARK_ME","Mostrar un 'Bookmark deste artigo nestos sitios?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Este bloque será visible na páxina de artigos");
define("_MI_NEWS_FF_MICROFORMAT","¿Activar Firefox 2 Micro Summarios?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Para máis información, ver <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>esta páxina</a>");
define("_MI_NEWS_WHOS_WHO","Noticias por autor");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Directorio de tópicos");
define("_MI_NEWS_ADVERTISEMENT","Advertencias");
define("_MI_NEWS_ADV_DESCR","Entre o texto ou o código javascript que mostrar nos seus artigos.");
define("_MI_NEWS_MIME_TYPES","Entre Mime Types autorizadas para subir (Cada unna nunha liña.)");
define("_MI_NEWS_ENHANCED_PAGENAV","¿Usar enhanced page navigator?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Con esta opción podes separar as páxinas con cousas coma: [pagebreak:Page Title], as ligazóns ás páxinas son reemprazados por unha lista desplegable e pode empregar [summary] para crear un sumario automático de páxinas");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Categoría');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Opcións de notificación que aplicar á presente categoría.');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY','Nova historia enviada');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP','Avíseme cando unha nova historia se cree nesta categoría.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC','Recibir un aviso cuando unha historia sexa engadida nesta categoría.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Autonotificación : Nova historia');
?>