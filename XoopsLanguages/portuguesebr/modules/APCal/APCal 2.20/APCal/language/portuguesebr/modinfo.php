<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {






// Appended by Xoops Language Checker -GIJOE- in 2006-02-15 05:31:20
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-06 18:04:01
define('_MI_APCALTIMEZONE_USING','Timezone of the server');
define('_MI_APCALOPT_TZ_USEXOOPS','value of XOOPS config');
define('_MI_APCALOPT_TZ_USEWINTER','value told from the server as winter time (recommended)');
define('_MI_APCALOPT_TZ_USESUMMER','value told from the server as summer time');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:14
define('_MI_APCALUSE24HOUR','24hours system (No means 12hours system)');
define('_MI_APCAL_ADMENU_PLUGINS','Plugins Manager');

// Appended by Xoops Language Checker -GIJOE- in 2005-04-22 12:02:03
define('_MI_APCAL_BNAME_MINICALEX','MiniCalendarEx');
define('_MI_APCAL_BNAME_MINICALEX_DESC','Extensible minicalendar with plugin system');

// Appended by Xoops Language Checker -GIJOE- in 2005-01-08 04:36:51
define('_MI_APCAL_DEFAULTLOCALE','brazil');
define('_MI_APCAL_LOCALE','Locale (check files in locales/*.php)');

define( '_MI_APCAL_APCALLOADED' , 1 ) ;
 //* Brazilian Portuguese Translation by Marcelo Yuji Himoro <www.yuji.eu.org> *//
// Module Info

// The name of this module
define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","M��ulo de calend��io com agenda.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","Mini-calend��io");
define("_MI_APCAL_BNAME_MINICAL_DESC","Mostra um mini-calend��io em bloco.");
define("_MI_APCAL_BNAME_MONTHCAL","Calend��io mensal em tamanho completo");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","Mostra um calend��io mensal em tamanho completo.");
define("_MI_APCAL_BNAME_TODAYS","Eventos de hoje");
define("_MI_APCAL_BNAME_TODAYS_DESC","Mostra eventos de hoje.");
define("_MI_APCAL_BNAME_THEDAYS","Eventos em %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC","Mostra eventos do dia indicado no calend��io.");
define("_MI_APCAL_BNAME_COMING","Pr��imos eventos");
define("_MI_APCAL_BNAME_COMING_DESC","Mostra os pr��imos eventos.");
define("_MI_APCAL_BNAME_AFTER","Eventos depois %s");
define("_MI_APCAL_BNAME_AFTER_DESC","Mostra os eventos ap�� o dia indicado no calend��io.");
define("_MI_APCAL_BNAME_NEW","Eventos recentes"); 
define("_MI_APCAL_BNAME_NEW_DESC","Mostra os eventos mais recentes.");

// Names of submenu
define("_MI_APCAL_SM_SUBMIT","Enviar");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY", "Permiss��s gerais dos usu��ios");
define("_MI_APCALGUESTS_AUTHORITY", "Permiss��s dos an��imos");
define("_MI_APCALDEFAULT_VIEW", "Calend��io padr��");
define("_MI_APCALMINICAL_TARGET", "O que mostrar quando uma data � clicada no mini-calend��io?");
define("_MI_APCALCOMING_NUMROWS", "N��ero de eventos mostrados no bloco de eventos seguintes");
define("_MI_APCALSKINFOLDER", "Nome da pasta das skins");
define("_MI_APCALSUNDAYCOLOR", "Cor dos domingos");
define("_MI_APCALWEEKDAYCOLOR", "Cor dos dias da semana");
define("_MI_APCALSATURDAYCOLOR", "Cor dos s��ados");
define("_MI_APCALHOLIDAYCOLOR", "Cor dos feriados");
define("_MI_APCALTARGETDAYCOLOR", "Cor dos dias com evento");
define("_MI_APCALSUNDAYBGCOLOR", "Cor de fundo dos domingos");
define("_MI_APCALWEEKDAYBGCOLOR", "Cor de fundo dos dias da semana");
define("_MI_APCALSATURDAYBGCOLOR", "Cor de fundo dos s��ados");
define("_MI_APCALHOLIDAYBGCOLOR", "Cor de fundo dos feriados");
define("_MI_APCALTARGETDAYBGCOLOR", "Cor de fundo dos dias com evento");
define("_MI_APCALCALHEADCOLOR", "Cor do topo do calendario");
define("_MI_APCALCALHEADBGCOLOR", "Cor de fundo do topo do calend��io");
define("_MI_APCALCALFRAMECSS", "Estilo da borda do calend��io");
define("_MI_APCALCANOUTPUTICS", "Permiss�� para gera��o de arquivos ics");
define("_MI_APCALMAXRRULEEXTRACT", "Limite m��imo dos eventos extra��os da regra de repeti��o. (COUNT)");
define("_MI_APCALWEEKSTARTFROM", "Dia inicial da semana");
define("_MI_APCALWEEKNUMBERING", "Regra de numera��o para as semanas");
define("_MI_APCALDAYSTARTFROM", "Hora do encerramento de um dia");
define("_MI_APCALNAMEORUNAME" , "Mostrar nome do autor");
define("_MI_APCALDESCNAMEORUNAME" , "Escolha 'Usu��io' ou 'Nome verdadeiro'." ) ;

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC", "Permitir que usu��ios an��imos criem eventos?");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE", "Permiss��s de cria��o");
define("_MI_APCALOPT_AUTH_WAIT", "Podem criar (requer aprova��o)");
define("_MI_APCALOPT_AUTH_POST", "Podem criar");
define("_MI_APCALOPT_AUTH_BYGROUP", "Especifcado nas permiss��s dos Grupos");
define("_MI_APCALOPT_MINI_PHPSELF", "Manter configura��es atuais");
define("_MI_APCALOPT_MINI_MONTHLY", "Mostrar calend��io mensal como padr��");
define("_MI_APCALOPT_MINI_WEEKLY", "Mostrar calend��io semanal como padr��");
define("_MI_APCALOPT_MINI_DAILY", "Mostrar calend��io di��io como padr��");
define("_MI_APCALOPT_MINI_LIST", "Lista de eventos");
define("_MI_APCALOPT_CANOUTPUTICS", "Podem gerar");
define("_MI_APCALOPT_CANNOTOUTPUTICS", "N�� podem gerar");
define("_MI_APCALOPT_STARTFROMSUN", "Domingo");
define("_MI_APCALOPT_STARTFROMMON", "Segunda");
define("_MI_APCALOPT_WEEKNOEACHMONTH", "Mensal");
define("_MI_APCALOPT_WEEKNOWHOLEYEAR", "Anual");
define("_MI_APCALOPT_USENAME" , "Nome verdadeiro" ) ;
define("_MI_APCALOPT_USEUNAME" , "Usu��io" ) ;

// Admin Menus
define("_MI_APCAL_ADMENU0","Aprovar eventos");
define("_MI_APCAL_ADMENU1","Administra��o de eventos");
define("_MI_APCAL_ADMENU_CAT","Administra��o de categorias");
define("_MI_APCAL_ADMENU_CAT2GROUP","Permiss��s globais das categorias");
define("_MI_APCAL_ADMENU2","Permis��s globais dos grupos");
define("_MI_APCAL_ADMENU_TM","Manuten��o das tabelas");
define("_MI_APCAL_ADMENU_ICAL","Importar do iCalendar");
define('_MI_APCAL_ADMENU_MYBLOCKSADMIN','Administra��o de blocos e grupos');

// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', 'Global');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', 'Op��es globais de aviso do APCal.');
define('_MI_APCAL_CATEGORY_NOTIFY', 'Categoria');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', 'Op��es de aviso que se aplicam para a categoria atual.');
define('_MI_APCAL_EVENT_NOTIFY', 'Evento');
define('_MI_APCAL_EVENT_NOTIFYDSC', 'Op��es de aviso que se aplicam para o evento atual.');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', 'Novo evento');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', 'Avisar-me quando um novo evento for criado.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', 'Receber uma viso quando um novo evento for criado.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} aviso autom��ico: Novo evento');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY', 'Novo evento na categoria');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP', 'Avisar-me quando um novo evento for criado na categoria atual.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC', 'Receber uma aviso quando um novo evento for criado na categoria atual.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} aviso autom��ico: Novo evento em {CATEGORY_TITLE}');


}

?>
