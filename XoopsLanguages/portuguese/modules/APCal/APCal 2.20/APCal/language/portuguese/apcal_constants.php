<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {



// Appended by Xoops Language Checker -GIJOE- in 2005-05-17 17:34:01
define('_APCAL_BTN_DELETE_ONE','Remove just one');

// Appended by Xoops Language Checker -GIJOE- in 2005-05-03 05:31:14
define('_APCAL_JS_CALENDAR','calendar-en.js');
define('_APCAL_JSFMT_YMDN','%d %B %Y (%A)');
define('_APCAL_DTFMT_MINUTE','i');
define('_APCAL_FMT_YMDN','%3$s %2$s %1$s %4$s');
define('_APCAL_FMT_DHI','%1$s %2$s:%3$s');
define('_APCAL_FMT_HI','%1$s:%2$s');
define('_APCAL_TH_TIMEZONE','Time Zone');

define( '_APCAL_CNST_LOADED' , 1 ) ;


// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_TIME','H:i') ;

// set your locale
define('_APCAL_LOCALE','en_US') ;
// format for strftime()  see http://jp.php.net/strftime
define('_APCAL_STRFFMT_DATE','%d %b %Y (%a)') ;
define('_APCAL_STRFFMT_DATE_FOR_BLOCK','%d %b') ;
define('_APCAL_STRFFMT_TIME','%H:%M') ;

// definition of orders     Y:year  M:month  W:week  D:day  O:operand
define('_APCAL_FMT_MD','%2$s %1$s') ;
define('_APCAL_FMT_YMD','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YMDO','%4$s%3$s%2$s%1$s') ;
define('_APCAL_FMT_YMW','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YW','WEEK%2$s %1$s') ;
define('_APCAL_FMT_YEAR_MONTH','%2$s %1$s') ;
define('_APCAL_FMT_YEAR','<font size="-1">ANO </font>%s') ;
define('_APCAL_FMT_WEEKNO','SEMANA %s') ;

define('_APCAL_ICON_LIST','Vista por lista') ;
define('_APCAL_ICON_DAILY','Vista diáÓia') ;
define('_APCAL_ICON_WEEKLY','Vista semanal') ;
define('_APCAL_ICON_MONTHLY','Vista mensal') ;
define('_APCAL_ICON_YEARLY','Vista anual') ;

define('_APCAL_MB_APCALSHOWALLCAT','Todas as Categorias') ;

define('_APCAL_MB_APCALLINKTODAY','Hoje') ;
define('_APCAL_MB_APCALNOSUBJECT','(Sem assunto)') ;

define('_APCAL_MB_APCALPREV_DATE','Amanhã') ;
define('_APCAL_MB_APCALNEXT_DATE','Ontem') ;
define('_APCAL_MB_APCALPREV_WEEK','Semana anterior') ;
define('_APCAL_MB_APCALNEXT_WEEK','Pr…Ùima Semana') ;
define('_APCAL_MB_APCALPREV_MONTH','MóÔ anterior') ;
define('_APCAL_MB_APCALNEXT_MONTH','Pr…Ùimo MóÔ') ;
define('_APCAL_MB_APCALPREV_YEAR','Ano anterior') ;
define('_APCAL_MB_APCALNEXT_YEAR','Pr…Ùimo Ano') ;

define('_APCAL_MB_APCALNOEVENT','Sem eventos') ;
define('_APCAL_MB_APCALADDEVENT','Adicionar um evento') ;
define('_APCAL_MB_APCALCONTINUING','(continua)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','mais') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','item(s)') ;
define('_APCAL_MB_APCALTIMESEPARATOR','--') ;

define('_APCAL_MB_APCALALLDAY_EVENT','Evento de todo o dia') ;
define('_APCAL_MB_APCALLONG_EVENT','Mostrar como barra') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','Comemoraî÷es etc.') ;

define('_APCAL_MB_APCALPUBLIC','P“Ãlico') ;
define('_APCAL_MB_APCALPRIVATE','Privado') ;
define('_APCAL_MB_APCALPRIVATETARGET',' entre %s') ;

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','Pular para primeiro Evento ') ;
define('_APCAL_MB_APCALRRULE1ST','Este é o primeiro Evento') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','NåÐ Registrado') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','Admitido') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','Esperando admissåÐ') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','Agenda') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','Vista detalhada') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','Vista de ediîåo') ;

define('_APCAL_MB_APCALHOUR_SUF',':') ;
define('_APCAL_MB_APCALMINUTE_SUF','') ;

define('_APCAL_MB_APCALORDER_ASC','ascendente') ;
define('_APCAL_MB_APCALORDER_DESC','descendente') ;
define('_APCAL_MB_APCALSORTBY','Ordenar por:') ;
define('_APCAL_MB_APCALCURSORTEDBY','Eventos atualmente ordenados por:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS","Os eventos assinalados såÐ:");
define("_APCAL_MB_APCALLABEL_OUTPUTICS","para ser exportados no iCalendar");

define("_APCAL_MB_APCALICALSELECTPLATFORM","Selecionar plataforma");

define('_APCAL_TH_SUMMARY','TùÕulo') ;
define('_APCAL_TH_STARTDATETIME','Hora e data de inùÄio') ;
define('_APCAL_TH_ENDDATETIME','Hora e data de fim') ;
define('_APCAL_TH_ALLDAYOPTIONS','Opc‰Æs do dia todo') ;
define('_APCAL_TH_LOCATION','Localizaîåo') ;
define('_APCAL_TH_CONTACT','Contato') ;
define('_APCAL_TH_CATEGORIES','Categorias') ;
define('_APCAL_TH_SUBMITTER','Remetente') ;
define('_APCAL_TH_CLASS','Classe') ;
define('_APCAL_TH_DESCRIPTION','Descriîåo') ;
define('_APCAL_TH_RRULE','Repetir as regras') ;
define('_APCAL_TH_ADMISSIONSTATUS','Estado') ;
define('_APCAL_TH_LASTMODIFIED','Ultima modificaîåo') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','(N“Îero de entradas)') ;
define('_APCAL_NTC_EXTRACTLIMIT','** Apenas %s eventos såÐ extraùÅos como máÙimo') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(%s itens precisam ser admitidos)') ;

define('_APCAL_OPT_PRIVATEMYSELF','Apenas eu') ;
define('_APCAL_OPT_PRIVATEGROUP','grupo %s') ;
define('_APCAL_OPT_PRIVATEINVALID','(grupo inváÍido)') ;

define('_APCAL_MB_APCALOP_AFTER','Depois') ;
define('_APCAL_MB_APCALOP_BEFORE','Antes') ;
define('_APCAL_MB_APCALOP_ON','Em') ;
define('_APCAL_MB_APCALOP_ALL','Todos') ;

define('_APCAL_CNFM_SAVEAS_YN','Você tóÎ certeza de salvar como outra entrada') ;
define('_APCAL_CNFM_DELETE_YN','Você tóÎ certeza de excluir esta entrada?') ;

define('_APCAL_ERR_INVALID_EVENT_ID','Error: ID do evento nåÐ encontrada') ;
define('_APCAL_ERR_NOPERM_TO_SHOW',"Error: NåÐ tóÎ permiso de ver o calendario") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS',"Error: NåÐ tóÎ permiso de editar o calendario") ;
define('_APCAL_ERR_LACKINDISPITEM','O item %s está vazio.<br />Clique o botåÐ de voltar do seu navegador') ;

define('_APCAL_BTN_JUMP','Pular') ;
define('_APCAL_BTN_NEWINSERTED','Novo item') ;
define('_APCAL_BTN_SUBMITCHANGES',' Troque o item! ') ;
define('_APCAL_BTN_SAVEAS','Salvar como') ;
define('_APCAL_BTN_DELETE','Excluí-lo') ;
define('_APCAL_BTN_EDITEVENT','Editá-lo') ;
define('_APCAL_BTN_RESET','Limpar') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendario(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendario(Mac)') ;
define('_APCAL_BTN_PRINT','Imprimir') ;
define("_APCAL_BTN_IMPORT","Importar!");
define("_APCAL_BTN_UPLOAD","Atualizar!");
define("_APCAL_BTN_EXPORT","Exportar!");
define("_APCAL_BTN_EXTRACT","Extraer");
define("_APCAL_BTN_ADMIT","Admitir");
define("_APCAL_BTN_MOVE","Mover");
define("_APCAL_BTN_COPY","Copiar");

define('_APCAL_RR_EVERYDAY','Cada dia') ;
define('_APCAL_RR_EVERYWEEK','Cada semana') ;
define('_APCAL_RR_EVERYMONTH','Cada móÔ') ;
define('_APCAL_RR_EVERYYEAR','Cada ano') ;
define('_APCAL_RR_FREQDAILY','Diario') ;
define('_APCAL_RR_FREQWEEKLY','Semanal') ;
define('_APCAL_RR_FREQMONTHLY','Mensal') ;
define('_APCAL_RR_FREQYEARLY','Anual') ;
define('_APCAL_RR_FREQDAILY_PRE','Cada') ;
define('_APCAL_RR_FREQWEEKLY_PRE','Cada') ;
define('_APCAL_RR_FREQMONTHLY_PRE','Cada') ;
define('_APCAL_RR_FREQYEARLY_PRE','Cada') ;
define('_APCAL_RR_FREQDAILY_SUF','dia(s)') ;
define('_APCAL_RR_FREQWEEKLY_SUF','semana(s)') ;
define('_APCAL_RR_FREQMONTHLY_SUF','móÔ(es)') ;
define('_APCAL_RR_FREQYEARLY_SUF','ano(s)') ;
define('_APCAL_RR_PERDAY','cada %s dias') ;
define('_APCAL_RR_PERWEEK','cada %s semanas') ;
define('_APCAL_RR_PERMONTH','cada %s meses') ;
define('_APCAL_RR_PERYEAR','cada %s anos') ;
define('_APCAL_RR_COUNT','<br />%s veces') ;
define('_APCAL_RR_UNTIL','<br />até %s') ;
define('_APCAL_RR_R_NORRULE','NåÐ se repete') ;
define('_APCAL_RR_R_YESRRULE','Repetiîåo') ;
define('_APCAL_RR_OR','or') ;
define('_APCAL_RR_S_NOTSELECTED','-nåÐ selecionado-') ;
define('_APCAL_RR_S_SAMEASBDATE','Igual que a data de inùÄio') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','Nenhuma condiîåo de final') ;
define('_APCAL_RR_R_USECOUNT_PRE','repetir') ;
define('_APCAL_RR_R_USECOUNT_SUF','vezes') ;
define('_APCAL_RR_R_USEUNTIL','até') ;


}

?>