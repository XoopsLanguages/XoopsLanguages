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
 //* Brazilian Portuguese Translation by Marcelo Yuji Himoro <www.yuji.eu.org> *//

// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_TIME','H:i') ;

// set your locale
define('_APCAL_LOCALE','pt_BR') ;
// format for strftime()  see http://jp.php.net/strftime
define('_APCAL_STRFFMT_DATE','%A, %d de %B de %Y') ;
define('_APCAL_STRFFMT_DATE_FOR_BLOCK','%d/%m') ;
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

define('_APCAL_ICON_LIST','Mostrar lista de eventos') ;
define('_APCAL_ICON_DAILY','Mostrar diariamente') ;
define('_APCAL_ICON_WEEKLY','Mostrar semanalmente') ;
define('_APCAL_ICON_MONTHLY','Mostrar mensalmente') ;
define('_APCAL_ICON_YEARLY','Mostrar anualmente') ;

define('_APCAL_MB_APCALSHOWALLCAT','Mostrar todas as categorias') ;

define('_APCAL_MB_APCALLINKTODAY','[Hoje]') ;
define('_APCAL_MB_APCALNOSUBJECT','(Sem assunto)') ;

define('_APCAL_MB_APCALPREV_DATE','Ontem') ;
define('_APCAL_MB_APCALNEXT_DATE','Amanh�') ;
define('_APCAL_MB_APCALPREV_WEEK','Semana anterior') ;
define('_APCAL_MB_APCALNEXT_WEEK','Semana seguinte') ;
define('_APCAL_MB_APCALPREV_MONTH','M�� anterior') ;
define('_APCAL_MB_APCALNEXT_MONTH','M�� seguinte') ;
define('_APCAL_MB_APCALPREV_YEAR','Ano anterior') ;
define('_APCAL_MB_APCALNEXT_YEAR','Ano seguinte') ;

define('_APCAL_MB_APCALNOEVENT','N�� h� eventos') ;
define('_APCAL_MB_APCALADDEVENT','Adicionar um evento') ;
define('_APCAL_MB_APCALCONTINUING','(Continua)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','mais') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','item(ns)') ;
define('_APCAL_MB_APCALTIMESEPARATOR','~') ;

define('_APCAL_MB_APCALALLDAY_EVENT','Evento para o dia inteiro') ;
define('_APCAL_MB_APCALLONG_EVENT','Mostrar como barra') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','Datas importantes e feriados') ;

define('_APCAL_MB_APCALPUBLIC','P��lico') ;
define('_APCAL_MB_APCALPRIVATE','Particular') ;
define('_APCAL_MB_APCALPRIVATETARGET',' entre %s') ;

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','Ir para o 1�� evento ') ;
define('_APCAL_MB_APCALRRULE1ST','1�� evento') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','N�� registrado') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','Aprovado') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','Pendente de aprova��o') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','Agenda') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','Mais detalhes') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','Editar') ;

define('_APCAL_MB_APCALHOUR_SUF',':') ;
define('_APCAL_MB_APCALMINUTE_SUF','') ;

define('_APCAL_MB_APCALORDER_ASC','Crescente') ;
define('_APCAL_MB_APCALORDER_DESC','Decrescente') ;
define('_APCAL_MB_APCALSORTBY','Ordenado por:') ;
define('_APCAL_MB_APCALCURSORTEDBY','Atualmente ordenados por:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS","");
define("_APCAL_MB_APCALLABEL_OUTPUTICS","");

define("_APCAL_MB_APCALICALSELECTPLATFORM","Escolha um formato para exporta��o");

define('_APCAL_TH_SUMMARY','T��ulo') ;
define('_APCAL_TH_STARTDATETIME','Data e hora de in��io') ;
define('_APCAL_TH_ENDDATETIME','Data e hora de t��mino') ;
define('_APCAL_TH_ALLDAYOPTIONS','Op��es do dia') ;
define('_APCAL_TH_LOCATION','Local') ;
define('_APCAL_TH_CONTACT','Endere�� de contato') ;
define('_APCAL_TH_CATEGORIES','Categorias') ;
define('_APCAL_TH_SUBMITTER','Autor') ;
define('_APCAL_TH_CLASS','Tipo') ;
define('_APCAL_TH_DESCRIPTION','Descri��o') ;
define('_APCAL_TH_RRULE','Repetir') ;
define('_APCAL_TH_ADMISSIONSTATUS','Estado') ;
define('_APCAL_TH_LASTMODIFIED','��ltima modifica��o') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','(Especificar datas)') ;
define('_APCAL_NTC_EXTRACTLIMIT','* Apenas %s eventos ser�� exportados.') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(%s itens pendentes de aprova��o)') ;

define('_APCAL_OPT_PRIVATEMYSELF','Apenas eu') ;
define('_APCAL_OPT_PRIVATEGROUP','Grupo %s') ;
define('_APCAL_OPT_PRIVATEINVALID','(grupo inv��ido)') ;

define('_APCAL_MB_APCALOP_AFTER','Depois') ;
define('_APCAL_MB_APCALOP_BEFORE','Antes') ;
define('_APCAL_MB_APCALOP_ON','Em') ;
define('_APCAL_MB_APCALOP_ALL','Todos') ;

define('_APCAL_CNFM_SAVEAS_YN','Voc� deseja realmente salv�-lo como outro registro?') ;
define('_APCAL_CNFM_DELETE_YN','Voc� deseja realmente apagar este registro?') ;

define('_APCAL_ERR_INVALID_EVENT_ID','ERRO: o n�� ID n�� foi encontrado.') ;
define('_APCAL_ERR_NOPERM_TO_SHOW',"ERRO: voc� n�� tem permiss�� de acesso.") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS',"ERRO: voc� n�� tem permiss�� para exportar para o iCalendar.") ;
define('_APCAL_ERR_LACKINDISPITEM','O item %s est� em branco.<br />Use o bot�� "Voltar" do seu browser!') ;

define('_APCAL_BTN_JUMP','Pular') ;
define('_APCAL_BTN_NEWINSERTED','Novo evento') ;
define('_APCAL_BTN_SUBMITCHANGES',' Alterar ') ;
define('_APCAL_BTN_SAVEAS','Salvar como') ;
define('_APCAL_BTN_DELETE','Apagar') ;
define('_APCAL_BTN_EDITEVENT','Editar') ;
define('_APCAL_BTN_RESET','Limpar') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendario(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendario(Mac)') ;
define('_APCAL_BTN_PRINT','Imprimir') ;
define("_APCAL_BTN_IMPORT","Importar");
define("_APCAL_BTN_UPLOAD","Atualizar");
define("_APCAL_BTN_EXPORT","Exportar para iCalendar");
define("_APCAL_BTN_EXTRACT","Extrair");
define("_APCAL_BTN_ADMIT","Aprovar");
define("_APCAL_BTN_MOVE","Mover");
define("_APCAL_BTN_COPY","Copiar");

define('_APCAL_RR_EVERYDAY','Todo dia') ;
define('_APCAL_RR_EVERYWEEK','Toda semana') ;
define('_APCAL_RR_EVERYMONTH','Todo m��') ;
define('_APCAL_RR_EVERYYEAR','Todo ano') ;
define('_APCAL_RR_FREQDAILY','Di��io') ;
define('_APCAL_RR_FREQWEEKLY','Semanal') ;
define('_APCAL_RR_FREQMONTHLY','Mensal') ;
define('_APCAL_RR_FREQYEARLY','Anual') ;
define('_APCAL_RR_FREQDAILY_PRE','A cada ') ;
define('_APCAL_RR_FREQWEEKLY_PRE','A cada ') ;
define('_APCAL_RR_FREQMONTHLY_PRE','A cada ') ;
define('_APCAL_RR_FREQYEARLY_PRE','A cada ') ;
define('_APCAL_RR_FREQDAILY_SUF','dia(s)') ;
define('_APCAL_RR_FREQWEEKLY_SUF','semana(s)') ;
define('_APCAL_RR_FREQMONTHLY_SUF','m��(es)') ;
define('_APCAL_RR_FREQYEARLY_SUF','Ano(s)') ;
define('_APCAL_RR_PERDAY','cada %s dias') ;
define('_APCAL_RR_PERWEEK','cada %s semanas') ;
define('_APCAL_RR_PERMONTH','cada %s meses') ;
define('_APCAL_RR_PERYEAR','cada %s anos') ;
define('_APCAL_RR_COUNT','<br />%s vezes') ;
define('_APCAL_RR_UNTIL','<br />at� %s') ;
define('_APCAL_RR_R_NORRULE','N�� repetir') ;
define('_APCAL_RR_R_YESRRULE','Repetir') ;
define('_APCAL_RR_OR','ou') ;
define('_APCAL_RR_S_NOTSELECTED','-n�� selecionado-') ;
define('_APCAL_RR_S_SAMEASBDATE','A mesma data que a de in��io') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','Nenhuma condi��o de t��mino') ;
define('_APCAL_RR_R_USECOUNT_PRE','repetir') ;
define('_APCAL_RR_R_USECOUNT_SUF','vezes') ;
define('_APCAL_RR_R_USEUNTIL','at�') ;


}

?>