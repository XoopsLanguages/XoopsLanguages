<?php

/**
* $Id: modinfo.php,v 1.2 2007/02/11 14:42:31 dap997 Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module

global $xoopsModule;

define("_MI_SSECTION_ADMENU1","Strona g³ówna");
define("_MI_SSECTION_ADMENU2","Kategorie");
define("_MI_SSECTION_ADMENU3","Artyku³y");
define("_MI_SSECTION_ADMENU4","Uprawnienia");
define("_MI_SSECTION_ADMENU5","Bloki i grupy");
define("_MI_SSECTION_ADMENU6","Typy plików");
define("_MI_SSECTION_ADMENU7","Id¼ do modu³u");

define('_MI_SSECTION_ALLOWADMINHITS'            , '[OPCJE TRE¦CI] Licznik czytañ administratora:');
define('_MI_SSECTION_ALLOWADMINHITSDSC'         , 'Czy w³±czyæ odwiedziny administratora do statystyk?');
define('_MI_SSECTION_ALLOWCOMMENTS'             , "[UPRAWNIENIA] Kontrola komentarzy na poziomie artyku³ów:");
define('_MI_SSECTION_ALLOWCOMMENTSDSC'          , "Je¶li wybierzesz 'Tak' to bêdziesz widzia³ komentarze dla artyku³ów, które na to pozwalaj± (maj± zaznaczony checkbox komentarzy). <br /><br />Je¶li wybierzesz 'Nie' komentarze bêd± zarz±dzane na poziomie globalnym (popatrz na podpunkt 'Zasady komentowania'.");
define("_MI_SSECTION_ALLOWSUBMIT"               , "[UPRAWNIENIA] Dodawanie artyku³ów przez u¿ytkowników:");
define("_MI_SSECTION_ALLOWSUBMITDSC"            , "Pozwoliæ na dodawanie artyku³ów przez u¿ytkowników?");
define("_MI_SSECTION_ALLOWUPLOAD"               , "[UPRAWNIENIA] Dodawanie plików przez u¿ytkowników");
define("_MI_SSECTION_ALLOWUPLOADDSC"            , "Pozwoliæ u¿ytkownikom na dodawanie plików zwi±zanych z artyku³ami?");
define("_MI_SSECTION_ANONPOST"                  , "[UPRAWNIENIA] Pozwoliæ na anonimowe dodawanie artyku³ów");
define("_MI_SSECTION_ANONPOSTDSC"               , "Pozwoliæ u¿ytkownikom na dodawnie artyku³ów.");
define('_MI_SSECTION_AUTOAPPROVE_SUB_ITEM'      , "[UPRAWNIENIA] Automatyczne aprobowanie artyku³ów:");
define('_MI_SSECTION_AUTOAPPROVE_SUB_ITEMDSC'   , "Automatyczne aprobowanie artyku³ów bez proszenia o zgodê administratora.");
define('_MI_SSECTION_BOTH_FOOTERS'              , 'Obydwie stopki - Both footers');
define("_MI_SSECTION_BY","by");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY"		, "Category Items");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC"	, "Notification options that apply to the current category.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY"	, "New article published");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP","Notify me when a new article is published in the current category.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC","Receive notification when a new article is published in the current category.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} auto-notify : New article published in category");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY"	, "'Article submitted");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP","Notify me when a new article is submitted in the current category.");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC","Receive notification when a new article is submitted in the current category.");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ","[{X_SITENAME}] {X_MODULE} auto-notify : New article submitted in category");
define("_MI_SSECTION_CATLIST_IMG_W"				, "[OPCJE FORMATOWANIA] Category list image width");
define("_MI_SSECTION_CATLIST_IMG_WDSC"			, "Specify the witdh of category images when listing the categories.");
define("_MI_SSECTION_CATMAINIMG_W"				, "[OPCJE FORMATOWANIA] Category main image width");
define("_MI_SSECTION_CATMAINIMG_WDSC"			, "Specify the width of the category main image.");
define('_MI_SSECTION_CATPERPAGE'                , '[OPCJE FORMATOWANIA] Ilo¶æ kategorii na stronie:');
define('_MI_SSECTION_CATPERPAGEDSC'             , 'Maksymalna ilo¶æ g³ównych kategorii na stronie widocznych od razu dla u¿ytkownika.');
define("_MI_SSECTION_CLONE"						, "[UPRAWNIENIA] Allow article duplication ?");
define("_MI_SSECTION_CLONEDSC"					, "Select 'Yes' to allo users with appropriate permissions to duplicate an article.");
define("_MI_SSECTION_COLLHEAD"					, "[OPCJE FORMATOWANIA] Display the collapsable bar?");
define("_MI_SSECTION_COLLHEADDSC"				, "If you set this option to 'Yes', the Categories summary will be displayed in a collapsable bar, as well as The articles. If you set this option to 'No', the collapsable will not be displayed.");
define("_MI_SSECTION_COMMENTS"					, "[UPRAWNIENIA] Control comments at the article level?");
define("_MI_SSECTION_COMMENTSDSC"				, "If you set this option to 'Yes', you'll see comments only on those items that have their comment checkbox marked. <br /><br />Select 'No' to have comments managed at the global level (look below under the tag 'Comment rules'.");
define('_MI_SSECTION_DATEFORMAT'                , '[OPCJE FORMATOWANIA] Format daty:');
define('_MI_SSECTION_DATEFORMATDSC'             , 'U¿yj koñcowej czê¶ci pliku language/english/global.php aby wybraæ styl prezentowania daty. Na przyk³ad "d-M-Y H:i" poka¿e "30-Mar-2004 22:35"');
define("_MI_SSECTION_DEMO_SITE"					, "SmartFactory Demo Site");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR"		, "Contributor(s)");
define("_MI_SSECTION_DEVELOPER_CREDITS"			, "Credits");
define("_MI_SSECTION_DEVELOPER_EMAIL"			, "Email");
define("_MI_SSECTION_DEVELOPER_LEAD"			, "Lead developer(s)");
define("_MI_SSECTION_DEVELOPER_WEBSITE"			, "Website");
define("_MI_SSECTION_DISCOM"					, "[TRE¦Æ] Display comment count?");
define("_MI_SSECTION_DISCOMDSC"					, "Set to 'Yes' to display the comments count in the individual article");
define("_MI_SSECTION_DISDATECOL"				, "[TRE¦Æ] Display the 'Published on' column?");
define("_MI_SSECTION_DISDATECOLDSC"				, "When the 'Summary' display type is selected, select 'Yes' to display a 'Published on' date in the items table on the index and category page.");
define('_MI_SSECTION_DISPLAY_CAT_SUMMARY'       , "[OPCJE TRE¦CI] Pokazaæ podsumowanie kategorii?");
define('_MI_SSECTION_DISPLAY_CAT_SUMMARY_DSC'   , "Wybierz 'Tak' aby pokazywaæ podsumowanie kategorii w module.");
define("_MI_SSECTION_DISPLAY_CATEGORY"          , "Pokazywaæ nazwê kategorii?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC"      , "Wybierz 'Tak' aby pokazaæ link do kategorii w artykule");
define('_MI_SSECTION_DISPLAYTYPE_FULL'          , "Widok pe³ny");
define('_MI_SSECTION_DISPLAYTYPE_LIST'          , "Widok punktowy");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION"		, "WFSection style");
define('_MI_SSECTION_DISPLAYTYPE_SUMMARY'       , "Widok sumaryczny");
define("_MI_SSECTION_DISSBCATDSC"				, "[TRE¦Æ] Display sub-categories description?");
define("_MI_SSECTION_DISSBCATDSCDSC"			, "Select 'Yes' to display the description of sub-categories in the index and category page.");
define("_MI_SSECTION_DISTYPE"					, "[OPCJE FORMATOWANIA] Articles display type:");
define("_MI_SSECTION_DISTYPEDSC"				, "If 'Summary View' is selected, only the Title, Date and Hits of each item will be displayed in a selected category. If 'Full View' is selected, each article will be fully displayed in a selected category.");
define('_MI_SSECTION_FILEUPLOADDIR'             , 'Katalog do przechowywania wczytanych plików:');
define('_MI_SSECTION_FILEUPLOADDIRDSC'          , "Katalog do którego bêd± importowane pliki za³±czone do artyku³ów. W nazwie nie wpisuj zadnych '/' ani z przodu ani w trakcie??? (  Do not include any leading nor trailing slashes.)");
define('_MI_SSECTION_FOOTERPRINT'               , '[OPCJE DRUKOWANIA] Stopka strony');
define('_MI_SSECTION_FOOTERPRINTDSC'            , 'Stopka, która bêdzie drukowana dla ka¿dego artyku³u');
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY"		, "New category");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP"	, "Notify me when a new category is created.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC"	, "Receive notification when a new category is created.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ"	, "[{X_SITENAME}] {X_MODULE} auto-notify : New category");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY"						, "Global Articles");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC"					, "Notification options that apply to all articles.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY"				, "New article published");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP"			, "Notify me when any new article is published.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC"			, "Receive notification when any new article is published.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ"			, "[{X_SITENAME}] {X_MODULE} auto-notify : New article published");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY"				, "Article submitted");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP"			, "Notify me when any article is submitted and is awaiting approval.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC"			, "Receive notification when any article is submitted and is waiting approval.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ"			, "[{X_SITENAME}] {X_MODULE} auto-notify : New article submitted");
define('_MI_SSECTION_HEADERPRINT'               , '[OPCJE DRUKOWANIA] Nag³ówek strony');
define('_MI_SSECTION_HEADERPRINTDSC'            , 'Nag³ówek, który bêdzie drukowany dla ka¿dego artyku³u');
define('_MI_SSECTION_HELP_CUSTOM'               , "¦cie¿ka dowolna");
define('_MI_SSECTION_HELP_INSIDE'               , "W ¶rodku modu³u - pomoc zawarta w module");
define('_MI_SSECTION_HELP_PATH_CUSTOM'          , "¦cie¿ka pokazuj±ca lokalizacjê plików pomocy dla SmartSection");
define('_MI_SSECTION_HELP_PATH_CUSTOM_DSC'      , "Je¶li u¿ywasz ¶cie¿ki z wcze¶niejszej opcji, napisz tu URL do plików pomocy SmartSection, w formacie : http://www.nazwatwojejstrony.com/doc");
define('_MI_SSECTION_HELP_PATH_SELECT'          , "¦cie¿ka do plików pomocy dla SmartSection");
define('_MI_SSECTION_HELP_PATH_SELECT_DSC'      , "Wybierz gdzie maj± byæ dostêpne pliki pomocy dla SmartSection help files. Je¶li ¶ci±g±³e¶ 'Pakiet pomocy dla SmartSection' i wczyta³e¶ ja do 'modules/smartsection/doc/', wybiesz '¦cie¿ka w ¶rodku modu³u'. Mo¿esz te¿ u¿ywaæ plików pomocy dla modu³u bezpo¶rednio ze strony docs.xoops.org robi±c taki wybór. Mo¿esz te¿ wybraæ '¦cie¿kê dowoln±' i samemu wskazaæ po³o¿enie plików pomocy w poni¿szym polu");
define("_MI_SSECTION_HITSCOL"					, "[TRE¦Æ] Wy¶wietlaæ kolumnê z liczb± ods³on?");
define("_MI_SSECTION_HITSCOLDSC"				, "When the 'Summary' display type is selected, select 'Yes' to display the 'Hits' column in the items table on the index and category page.");
define("_MI_SSECTION_HLCOLOR"					, "[OPCJE FORMATOWANIA] Kolor zaznaczenia szukanych s³ów");
define("_MI_SSECTION_HLCOLORDSC"				, "Podczas wyszukiwania s³owa wpisane w wyszukiwarce zostan± pod¶wietlone na wybrany kolor");
define("_MI_SSECTION_IMAGENAV"					, "[OPCJE FORMATOWANIA] Use the image Page Navigation:");
define("_MI_SSECTION_IMAGENAVDSC"				, "If you set this option to \"Yes\", the Page Navigation will be displayed with images, otherwise, the original Page Naviagation will be used.");
define('_MI_SSECTION_INDEXFOOTER'               , '[OPCJE TRE¦CI] Stopka na stronie administracyjnej');
define('_MI_SSECTION_INDEXFOOTER_SEL'           , 'Stopka indeksu');
define('_MI_SSECTION_INDEXFOOTERDSC'            , 'Stopka, która bêdzie wy¶wietlana na stronie administracyjnej modu³u');
define('_MI_SSECTION_INDEXMSG'         			, '[OPCJE TRE¦CI] Wiadomo¶æ powitalna:');
define('_MI_SSECTION_INDEXMSGDEF'				, "");
define('_MI_SSECTION_INDEXMSGDSC' 				, 'Wiadomo¶æ powitalna wy¶wietlana na stronie g³ównej modu³u.');
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY"		, "Article approved");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP"	, "Notify me when this article is approved.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC"	, "Receive notification when this article is approved.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ"	, "[{X_SITENAME}] {X_MODULE} auto-notify : article approved");
define("_MI_SSECTION_ITEM_NOTIFY"				, "Article");
define("_MI_SSECTION_ITEM_NOTIFY_DSC"			, "Notification options that apply to the current article.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY"		, "Article rejected");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP"	, "Notify me if this article is rejected.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC"	, "Receive notification if this article is rejected.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ"	, "[{X_SITENAME}] {X_MODULE} auto-notify : article rejected");
define("_MI_SSECTION_ITEM_TYPE"					, "Item type:");
define("_MI_SSECTION_ITEM_TYPEDSC"				, "Select the kind of items this module is going to manage.");
define("_MI_SSECTION_ITEMFOOTER"				, "[TRE¦Æ] Item footer");
define("_MI_SSECTION_ITEMFOOTER_SEL"			, "Item footer");
define("_MI_SSECTION_ITEMFOOTERDSC"				,"Footer that will be displayed for each article");
define("_MI_SSECTION_ITEMSMENU"					, "Categories Menu block");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE"			, "Tree block");
//--/bd
define("_MI_SSECTION_ITEMSNEW"			, "Recent items List");
define("_MI_SSECTION_ITEMSPOT"			, "In the Spotlight !");
define("_MI_SSECTION_ITEMSRANDOM_ITEM"	, "Random item !");
define("_MI_SSECTION_LASTITEM"			, "[TRE¦Æ] Display last item column ?");
define("_MI_SSECTION_LASTITEMDSC"		, "Select 'Yes' to display the last item in each category in the index and category page.");
define("_MI_SSECTION_LASTITEMS"			, "[TRE¦Æ] Display the list of newly published articles?");
define("_MI_SSECTION_LASTITEMSDSC"		, "Select 'Yes' to have the list at the bottom of the first page of the module");
define('_MI_SSECTION_LASTITSIZE'		, '[OPCJE FORMATOWANIA] Wielko¶æ ostatniego artyku³u:');
define('_MI_SSECTION_LASTITSIZEDSC'		, "Ustaw maksymaln± d³ugo¶æ tytu³u dla ostatniego obiektu.");
define('_MI_SSECTION_LINKED_PATH'		, '[OPCJE FORMATOWANIA] Podebnij linki do aktualnej ¶cie¿ki:');
define('_MI_SSECTION_LINKED_PATHDSC'	, "Wybierz 'Tak' je¶li chcesz by u¿ytkownik móg³ siê cofaæ przez klikniêcie na aktualna ¶cie¿kê prezentowana w górze artyku³u.");
define("_MI_SSECTION_MAX_HEIGHT"		, "[UPRAWNIENIA] Maximum uploaded image height");
define("_MI_SSECTION_MAX_HEIGHTDSC"		, "Maximum height of an image file that can be uploaded.");
define("_MI_SSECTION_MAX_SIZE"			, "[UPRAWNIENIA] Maximum file size");
define("_MI_SSECTION_MAX_SIZEDSC"		, "Maximum size (in bytes) of a file that can be uploaded.");
define("_MI_SSECTION_MAX_WIDTH"			, "[UPRAWNIENIA] Maximum uploaded image width");
define("_MI_SSECTION_MAX_WIDTHDSC"		, "Maximum width of an image file that can be uploaded.");
define("_MI_SSECTION_MD_DESC"			, "Section Management System for your XOOPS Site");
define("_MI_SSECTION_MD_NAME"			, "SmartSection");
define("_MI_SSECTION_MODULE_BUG"		, "Report a bug for this module");
define("_MI_SSECTION_MODULE_DEMO"		, "Demo Site");
define("_MI_SSECTION_MODULE_DISCLAIMER"	, "Disclaimer");
define("_MI_SSECTION_MODULE_FEATURE"	, "Suggest a new feature for this module");
define("_MI_SSECTION_MODULE_INFO"		, "Module Development details");
define("_MI_SSECTION_MODULE_RELEASE_DATE","Release date");
define("_MI_SSECTION_MODULE_STATUS"		, "Status");
define("_MI_SSECTION_MODULE_SUBMIT_BUG"	, "Submit a bug");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE","Submit a feature request");
define("_MI_SSECTION_MODULE_SUPPORT"	, "Official support site");
define('_MI_SSECTION_NO_FOOTERS'		, '¯aden ');
define('_MI_SSECTION_ORDERBY'			, '[OPCJE FORMATOWANIA] Sortuj obiekty wed³ug:');
define("_MI_SSECTION_ORDERBY_DATE"		, "Daty malej±co");
define("_MI_SSECTION_ORDERBY_TITLE"		, "Tytu³u rosn±co");
define("_MI_SSECTION_ORDERBY_WEIGHT"	, "Wagi rosn±co");
define('_MI_SSECTION_ORDERBYDSC'		, 'Wybierz "Tak" aby ka¿dy obiekt w kategorii by³ sortowany wed³ug daty, w przeciwnym wypadku artyku³y bêd± sortowane wed³ug wagi.');
define('_MI_SSECTION_OTHER_ITEMS_TYPE'	, '[OPCJE FORMATOWANIA] Prezentacja pozosta³ych artyku³ów ');
define('_MI_SSECTION_OTHER_ITEMS_TYPE_ALL'	, "Wszystkie artyku³y");
define('_MI_SSECTION_OTHER_ITEMS_TYPE_DSC'	, 'Wybierz, jak chcesz przedstawiæ dla u¿ytkownika inne artyku³y z tej kategorii.');
define('_MI_SSECTION_OTHER_ITEMS_TYPE_NONE'	, "¯aden ");
define('_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT',"Wcze¶niejszy i nastêpny");
define('_MI_SSECTION_PERPAGE'				, "[OPCJE FORMATOWANIA] Maksymalna ilo¶æ artyku³ów na stronie administratora:");
define('_MI_SSECTION_PERPAGEDSC'			, "Maksymalna ilo¶æ artyku³ów pokazywana od razu na stronie administratora.");
define('_MI_SSECTION_PERPAGEINDEX'			, "[OPCJE FORMATOWANIA] Maksymalna ilo¶æ artyku³ów na stronie u¿ytkownika:");
define('_MI_SSECTION_PERPAGEINDEXDSC'		, "[OPCJE DRUKOWANIA] Maksymalna ilo¶æ artyku³ów pokazywana od razu na stronie u¿ytkownika.");
define('_MI_SSECTION_PRINTLOGOURL'			, '[OPCJE DRUKOWANIA] URL do logo');
define('_MI_SSECTION_PRINTLOGOURLDSC'		, 'URL do loga, które bêdzie pokazane na górze strony.');
define("_MI_SSECTION_RECENTITEMS"			, "Recent items (Detail)");
define("_MI_SSECTION_SHOW_RSS"				,"[TRE¦Æ] Wy¶wietliæ link do kana³u RSS");
define("_MI_SSECTION_SHOW_RSSDSC"			,"");
define('_MI_SSECTION_SHOW_SUBCATS'			, "[OPCJE TRE¦CI] Poka¿ podkategorii na stronie administratora");
define("_MI_SSECTION_SHOW_SUBCATS_ALL"		, "Wy¶wietliæ wszystkie podkategorie");
define('_MI_SSECTION_SHOW_SUBCATS_DSC'		, "Wybierz 'Tak' aby pokazaæ listê podkategorii na stronie modu³u");
define("_MI_SSECTION_SHOW_SUBCATS_NO"		, "Nie pokazuj podkategorii");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY"	, "Pokazuj nie-puste podkategorie");
define("_MI_SSECTION_SUB_SMNAME1"			, "Dodaj artyku³");
define("_MI_SSECTION_SUB_SMNAME2"			, "Popularne artyku³y");
define('_MI_SSECTION_SUBMITMSG'				, '[OPCJE TRE¦CI] Informacja widoczna w czasie dodawania:');
define('_MI_SSECTION_SUBMITMSGDEF'			, "");
define('_MI_SSECTION_SUBMITMSGDSC'			, 'Informacja pokazywana na stronie modu³u, która umo¿liwa wys³anie pliku.');
define('_MI_SSECTION_TITLE_SIZE'			, "[OPCJE FORMATOWANIA] D³ugo¶æ tytu³u :");
define('_MI_SSECTION_TITLE_SIZEDSC'			, "Okre¶l maksymalna d³ugo¶æ tytu³u dla pojedynczego elementu na stronie z listami.");
define("_MI_SSECTION_UPLOAD"				, "[UPRAWNIENIA] User file upload?");
define("_MI_SSECTION_UPLOADDSC"				, "Allow users to upload files linked to articles on your website?");
define('_MI_SSECTION_USEREALNAME'			, '[OPCJE FORMATOWANIA] U¿yj prawdziwych nazw u¿ytkowników');
define('_MI_SSECTION_USEREALNAMEDSC'		, 'Wybierz "Tak" aby pokazaæ prawdziwê imiê u¿ytkownika o ile on je ma wype³nione.');
define("_MI_SSECTION_VERSION_HISTORY","Version History");
define("_MI_SSECTION_WARNING_BETA","This module comes as is, without any guarantees whatsoever. This module is BETA, meaning it is still under active development. This release is meant for <b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live website or in a production environment.");
define("_MI_SSECTION_WARNING_FINAL","This module comes as is, without any guarantees whatsoever. Although this module is not beta, it is still under active development. This release can be used in a live website or a production environment, but its use is under your own responsibility, which means the author is not responsible.");
define("_MI_SSECTION_WARNING_RC","This module comes as is, without any guarantees whatsoever. This module is a Release Candidate and should not be used on a production web site. The module is still under active development and its use is under your own responsibility, which means the author is not responsible.");
define("_MI_SSECTION_WELCOME","[TRE¦Æ] Display the welcome title and message:");
define("_MI_SSECTION_WELCOMEDSC","If this option is set to 'Yes', the module index page will display the title 'Welcome in the SmartSection of...', followed by the welcome message defined below. If this option is set to 'No', none of these lines will be displayed.");
define("_MI_SSECTION_WHOWHEN","[TRE¦Æ] Display the poster and date?");
define("_MI_SSECTION_WHOWHENDSC","Set to 'Yes' to display the poster and date information in the individual article");
define("_MI_SSECTION_WYSIWYG","[OPCJE FORMATOWANIA] Editor type");
define("_MI_SSECTION_WYSIWYGDSC","What kind of editor would you like  to use. Please note that of you choose any other editor than the XoopsEditor, it must be installed on your site.");

define("_MI_SSECTION_PV_TEXT","Partial view message");
define("_MI_SSECTION_PV_TEXTDSC","Message for articles that allows only partial view.");
define("_MI_SSECTION_PV_TEXT_DEF","To view the complete article, you must register.");

define("_MI_SSECTION_SEOMODNAME","URL Rewriting module name");
define("_MI_SSECTION_SEOMODNAMEDSC","if URL Rewriting is enabled for the module, this is the name of the module that will be used. For example : http://yoursite.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT","Display articles count");
define("_MI_SSECTION_ARTCOUNTDSC","Select 'Yes' to display the article count within each category in the Category summary table. Please note that the module currently only count articles within each category and does not count within subcategoies.");

define("_MI_SSECTION_LATESTFILES","Latest uploaded files");

define("_MI_SSECTION_PATHSEARCH","[OPCJE FORMATOWANIA] Display category path in search results");
define("_MI_SSECTION_PATHSEARCHDSC","");
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN","Display sub-categories on index page only");
define("_MI_SSECTION_RATING_ENABLED","Enable rating system");
define("_MI_SSECTION_RATING_ENABLEDDSC","This features requires the SmartObject Framework");

define("_MI_SSECTION_DISPBREAD","Display the breadcrumb");
define("_MI_SSECTION_DISPBREADDSC","");

?>