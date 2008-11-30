<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Noticias');

// A brief description of this module
define('_MI_NEWS_DESC','Crea unha Slashdot-like secci�n de noticas, onde os usuarios poden colocar noticas e comentarios.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','T�picos');
define('_MI_NEWS_BNAME3','Gran historia');
define('_MI_NEWS_BNAME4','Top de noticias');
define('_MI_NEWS_BNAME5','Noticias recentes');
define('_MI_NEWS_BNAME6','Moderar noticias');
define('_MI_NEWS_BNAME7','Navegar polos t�picos');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Engadir noticias');
define('_MI_NEWS_SMNAME2','Arquivo');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', 'Xestionar t�picos');
define('_MI_NEWS_ADMENU3', 'Engadir/Editar noticias');
define('_MI_NEWS_GROUPPERMS', 'Permisos');
// Added by Herv� for prune option
define('_MI_NEWS_PRUNENEWS', 'Reducir noticias');
// Added by Herv�
define('_MI_NEWS_EXPORT', 'Exportar noticias');

// Title of config items
define('_MI_STORYHOME', 'Seleccioar o n�mero de noticias a mostrar na p�xina de inicio');
define('_MI_NOTIFYSUBMIT', 'Seleccionar Si para enviar unha mensaxe de notificaci�n � webmaster cada novo env�o');
define('_MI_DISPLAYNAV', 'Seleccioar Si para mostar a caixa de navegaci�n � inicio de cada nova p�gina');
define('_MI_AUTOAPPROVE','�Aprobaci�n autom�tica sen a intervenci�n do administrador?');
define("_MI_ALLOWEDSUBMITGROUPS", "Grupos que poden enviar noticias");
define("_MI_ALLOWEDAPPROVEGROUPS", "Grupos que poden aprobar noticias");
define("_MI_NEWSDISPLAY", "Mostrar noticias extendidas");
define("_MI_NAMEDISPLAY","Autor");
define("_MI_COLUMNMODE","Columnas");
define("_MI_STORYCOUNTADMIN","N�mero de artigos que mostrar na zona de administraci�n (esta opci�n debe ser empregada para limitar o n�mero de t�picos mostrados na zona de administraci�n e ser� empregada nas estat�sticas) : ");
define('_MI_UPLOADFILESIZE', 'MAX tama�o de arquivo a subir (KB) 1048576 = 1 Meg');
define("_MI_UPLOADGROUPS","Grupos autorizados a subir arquivos");


// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "Os grupos seleccioados poder�n subir noticias");
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "Os grupos seleccioados poder�n aprobar noticias");
define("_MI_NEWSDISPLAYDESC", "Cl�sico mostra as noticias ordeadas por data de publicaci�n. Noticias por t�pico agrupa as noticias por t�pico con a �ltima historia completa e o resto con o t�tulo");
define('_MI_ADISPLAYNAMEDSC', 'Seleccionar como mostrar o nombe do autor(es)');
define("_MI_COLUMNMODE_DESC","Pode decidir o n�mero de columnas para listar os artigos");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Seleccionar os grupos que poden subir � servidor.");

// Name of config item values
define("_MI_NEWSCLASSIC", "Cl�sico");
define("_MI_NEWSBYTOPIC", "Por t�pico");
define("_MI_DISPLAYNAME1", "Nome de usuario");
define("_MI_DISPLAYNAME2", "Nome real");
define("_MI_DISPLAYNAME3", "Non mostrar o autor");
define("_MI_UPLOAD_GROUP1","Quen env�a e aproba");
define("_MI_UPLOAD_GROUP2","Quen aproba somentes");
define("_MI_UPLOAD_GROUP3","Subir desactivado");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'Global');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Opci�ns de notificaci�n globais.');

define('_MI_NEWS_STORY_NOTIFY', 'Historia');
define('_MI_NEWS_STORY_NOTIFYDSC', 'As opci�ns de notificaci�n que se aplican � actual historia.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Novo t�pico');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notif�queme cando un novo t�pico sexa creado.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recibir notificaci�n cando se cree un novo t�pico.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notificaci�n autom�tica : Aviso de novos t�picos');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', ' Nova historia enviada');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Notif�queme cando unha nova historia sexa enviada (en espera de aprobaci�n).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Recibir aviso de nova historia enviada(en espera de aprobaci�n).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificaci�n : Aviso de historia enviada');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nova historia');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Av�seme cando unha nova historia sexa engadida.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Recibir aviso cando unha nova historia sexa engadida');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Autonotificaci�n : Aviso de nova historia');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Historia aprobada');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Av�seme cuando unha nueva historia sexa aprobada.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Recibir aviso cando unha nova historia sexa aprobada.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autonotificaci�n : Historia aprobada');

define('_MI_RESTRICTINDEX', '�Restrinxir t�picos na p�xina inicial?');
define('_MI_RESTRICTINDEXDSC', 'Se activa Si os usuarios somentes ver�n os �tems listados no �ndice dos t�picos, te�en acceso a configuralas en Permisos de noticias.');

define('_MI_NEWSBYTHISAUTHOR', 'Noticias do mesmo autor');
define('_MI_NEWSBYTHISAUTHORDSC', 'Se indica Si a ligaz�n a artigos por autor ser� visible.');

define('_MI_NEWS_PREVNEX_LINK','�Mostrar enlace a Previo e Seguinte ?');
define('_MI_NEWS_PREVNEX_LINK_DESC','Cando esta opci�n � Si duas novas ligaz�ns son visibles � final de cada artigo (Previo e Seguinte, seg�n data de publicaci�n).');
define('_MI_NEWS_SUMMARY_SHOW','�Mostrar tabla resumen?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','En caso afirmativo, un sumario con ligaz�ns a todo o recentemente publicado � visible � final de cada artigo.');
define('_MI_NEWS_AUTHOR_EDIT','�Activar para cada autor editar o seus artigos?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Con esta opci�n cada autor puede editar sus art�culos.');
define('_MI_NEWS_RATE_NEWS','�Activar que os usuarios voten?');
define('_MI_NEWS_TOPICS_RSS','�Activar RSS feeds por t�picos?');
define('_MI_NEWS_TOPICS_RSS_DESC',"En caso afirmativo o contido dos t�picos ser� habilitado para RSS feeds");
define('_MI_NEWS_DATEFORMAT', "Formato da data");
define('_MI_NEWS_DATEFORMAT_DESC',"Por favor, acuda � documentaci�n Php(http://fr.php.net/manual/en/function.date.php) para m�is informaci�n. Se non indica nada usarase o formato por defecto.");
define('_MI_NEWS_META_DATA', "�Ativar meta datas (keywords e description) enteiras ?");
define('_MI_NEWS_META_DATA_DESC', "En caso afirmativo os aprobadores poder�n engadi as siguientes meta datas: keywords y description");
define('_MI_NEWS_BNAME8','Noticias aleatorias');
define('_MI_NEWS_NEWSLETTER','Notificaci�ns');
define('_MI_NEWS_STATS','Estat�sticas');
define("_MI_NEWS_FORM_OPTIONS","Opci�ns de formulario");
define("_MI_NEWS_FORM_COMPACT","Compacto");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Editor Spaw");
define("_MI_NEWS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_NEWS_FORM_FCK","FCK Editor");
define("_MI_NEWS_FORM_KOIVI","Koivi Editor");
define("_MI_NEWS_FORM_OPTIONS_DESC","Seleccionar o editor a empregar. Se ten unha instalaci�n simple (e.x usa somentes xoops core editor class, incluido no standard xoops core package), seleccione DHTML e Compact");
define("_MI_NEWS_KEYWORDS_HIGH","�Usar keywords iluminadas?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","En caso afirmativo as keywords escritas na b�squeda ser�n resaltadas no texto.");
define("_MI_NEWS_HIGH_COLOR","�Color a empregar para iluminar keywords?");
define("_MI_NEWS_HIGH_COLOR_DES","S�lo empregar esta opci�n en caso de contestar S� a la opci�n anterior.");
define("_MI_NEWS_INFOTIPS","Lonxitude dos Tooltips");
define("_MI_NEWS_INFOTIPS_DES","en caso afirmativo ter�n tantos caracteres do t�tulo como vostede indique. 0 indicar� vac�o.");
define("_MI_NEWS_SITE_NAVBAR","�Usar barra de navegaci�n Mozilla e Opera Site?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Si, emprega a barra de navegaci�n para navegar polo teus artigos.");
define("_MI_NEWS_TABS_SKIN","Seleccionar pel para empregar en tabs");
define("_MI_NEWS_TABS_SKIN_DESC","Pel a empregar nos bloques que usen tabs");
define("_MI_NEWS_SKIN_1","Barra de estilo");
define("_MI_NEWS_SKIN_2","Beveled");
define("_MI_NEWS_SKIN_3","Cl�sica");
define("_MI_NEWS_SKIN_4","Carpetas");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Plana");
define("_MI_NEWS_SKIN_7","Redondeada");
define("_MI_NEWS_SKIN_8","ZDnet style");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Arquivos');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","�Mostrar ligaz�ns para versi�n imprimible dos teus artigos?");
define("_MI_NEWS_DUBLINCORE","�Activar Dublin Core Metadata ?");
define("_MI_NEWS_DUBLINCORE_DSC","Para m�is informaci�n, <a href='http://dublincore.org/'>visite esta ligaz�n</a>");
define("_MI_NEWS_BOOKMARK_ME","Mostrar un 'Bookmark deste artigo nestos sitios?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Este bloque ser� visible na p�xina de artigos");
define("_MI_NEWS_FF_MICROFORMAT","�Activar Firefox 2 Micro Summarios?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Para m�is informaci�n, ver <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>esta p�xina</a>");
define("_MI_NEWS_WHOS_WHO","Noticias por autor");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Directorio de t�picos");
define("_MI_NEWS_ADVERTISEMENT","Advertencias");
define("_MI_NEWS_ADV_DESCR","Entre o texto ou o c�digo javascript que mostrar nos seus artigos.");
define("_MI_NEWS_MIME_TYPES","Entre Mime Types autorizadas para subir (Cada unna nunha li�a.)");
define("_MI_NEWS_ENHANCED_PAGENAV","�Usar enhanced page navigator?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Con esta opci�n podes separar as p�xinas con cousas coma: [pagebreak:Page Title], as ligaz�ns �s p�xinas son reemprazados por unha lista desplegable e pode empregar [summary] para crear un sumario autom�tico de p�xinas");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Categor�a');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Opci�ns de notificaci�n que aplicar � presente categor�a.');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', 'Nova historia enviada');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', 'Av�seme cando unha nova historia se cree nesta categor�a.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', 'Recibir un aviso cuando unha historia sexa engadida nesta categor�a.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Autonotificaci�n : Nova historia');
?>