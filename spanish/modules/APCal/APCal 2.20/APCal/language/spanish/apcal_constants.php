<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {

define( '_APCAL_CNST_LOADED' , 1 ) ;

// the language file for jscalendar "DHTML Date/Time Selector"
define('_APCAL_JS_CALENDAR','calendar-en.js') ;

// format for jscalendar. see common/jscalendar/doc/html/reference.html
define('_APCAL_JSFMT_YMDN','%e %B %Y %A') ;

// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_MINUTE','i') ;

// definition of orders     Y:year  M:month  W:week  D:day  N:dayname  O:operand
define('_APCAL_FMT_MD','%1$s %2$s') ;
define('_APCAL_FMT_YMD','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YMDN','%4$s %2$s %3$s, %1$s') ;
define('_APCAL_FMT_YMDO','%4$s%3$s%2$s%1$s') ;
define('_APCAL_FMT_YMW','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YW','Week %2$s %1$s') ;
define('_APCAL_FMT_DHI','%1$s %2$s:%3$s') ;
define('_APCAL_FMT_HI','%1$s:%2$s') ;

// formats for sprintf()
define('_APCAL_FMT_YEAR_MONTH','%2$s %1$s') ;
define('_APCAL_FMT_YEAR','A&Ntilde;O %s') ;
define('_APCAL_FMT_WEEKNO','SEMANA %s') ;

define('_APCAL_ICON_LIST','Vista por Lista') ;
define('_APCAL_ICON_DAILY','Vista Diaria') ;
define('_APCAL_ICON_WEEKLY','Vista Semanal') ;
define('_APCAL_ICON_MONTHLY','Vista Mensual') ;
define('_APCAL_ICON_YEARLY','Vista Anual') ;

define('_APCAL_MB_APCALSHOWALLCAT','Todas las Categor&iacute;as') ;

define('_APCAL_MB_APCALLINKTODAY','Hoy') ;
define('_APCAL_MB_APCALNOSUBJECT','(Sin Asunto)') ;

define('_APCAL_MB_APCALPREV_DATE','Ayer') ;
define('_APCAL_MB_APCALNEXT_DATE','Ma&ntilde;ana') ;
define('_APCAL_MB_APCALPREV_WEEK','Semana Pasada') ;
define('_APCAL_MB_APCALNEXT_WEEK','Pr&oacute;xima Semana') ;
define('_APCAL_MB_APCALPREV_MONTH','Mes Pasado') ;
define('_APCAL_MB_APCALNEXT_MONTH','Pr&oacute;ximo mes') ;
define('_APCAL_MB_APCALPREV_YEAR','A&ntilde;o Pasado') ;
define('_APCAL_MB_APCALNEXT_YEAR','Pr&oacute;ximo A&ntilde;o') ;

define('_APCAL_MB_APCALNOEVENT','Sin Eventos') ;
define('_APCAL_MB_APCALADDEVENT','A&ntilde;adir un Evento') ;
define('_APCAL_MB_APCALCONTINUING','(continuando)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','m&aacute;s art&iacute;culo') ;
define('_APCAL_MB_APCALTIMESEPARATOR','--') ;

define('_APCAL_MB_APCALALLDAY_EVENT','Evento de todo el d&iacute;a') ;
define('_APCAL_MB_APCALLONG_EVENT','Mostrar como una Barra') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','Aniversario etc.') ;

define('_APCAL_MB_APCALPUBLIC','P&uacute;blico') ;
define('_APCAL_MB_APCALPRIVATE','Privado') ;
define('_APCAL_MB_APCALPRIVATETARGET',' como %s') ;

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','Saltar al Primer Evento ') ;
define('_APCAL_MB_APCALRRULE1ST','Este es el Primer Evento') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','No Registrado') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','Admitido') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','Esperando Admisi&oacute;n') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','Planificaci&oacute;n') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','Ver Detalles') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','Editar Vista') ;

define('_APCAL_MB_APCALHOUR_SUF',':') ;
define('_APCAL_MB_APCALMINUTE_SUF','') ;

define('_APCAL_MB_APCALORDER_ASC','Ascendente') ;
define('_APCAL_MB_APCALORDER_DESC','Descendente') ;
define('_APCAL_MB_APCALSORTBY','Ordenar por:') ;
define('_APCAL_MB_APCALCURSORTEDBY','Eventos actuales ordenados por:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS","Los Eventos chequeados son:");
define("_APCAL_MB_APCALLABEL_OUTPUTICS","Exportar a iCalendar");

define("_APCAL_MB_APCALICALSELECTPLATFORM","Selecciona Plataforma");

define('_APCAL_TH_SUMMARY','Nombre del Evento') ;
define('_APCAL_TH_TIMEZONE','Zona horaria') ;
define('_APCAL_TH_STARTDATETIME','Fecha de Inicio') ;
define('_APCAL_TH_ENDDATETIME','Fecha de finalizaci&oacute;n') ;
define('_APCAL_TH_ALLDAYOPTIONS','Evento de todo el d&iacute;a') ;
define('_APCAL_TH_LOCATION','Direcci&oacute;n') ;
define('_APCAL_TH_CONTACT','Contacto') ;
define('_APCAL_TH_CATEGORIES','Categor&iacute;as') ;
define('_APCAL_TH_SUBMITTER','Creado por') ;
define('_APCAL_TH_CLASS','Clase') ;
define('_APCAL_TH_DESCRIPTION','Descripci&oacute;n') ;
define('_APCAL_TH_RRULE','Reglas de Repetici&oacute;n') ;
define('_APCAL_TH_ADMISSIONSTATUS','Estado') ;
define('_APCAL_TH_LASTMODIFIED','&Uacute;ltima modificaci&oacute;n') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','(N&uacute;mero de Entrada)') ;
define('_APCAL_NTC_EXTRACTLIMIT','** S&oacute;lo %s eventos se extraen si el M&aacute;x.') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(%s art&iacute;culos necesarios para ser admitidos)') ;

define('_APCAL_OPT_PRIVATEMYSELF','S&oacute;lo para mi') ;
define('_APCAL_OPT_PRIVATEGROUP','Grupo %s') ;
define('_APCAL_OPT_PRIVATEINVALID','(grupo inv&aacute;lido)') ;

define('_APCAL_MB_APCALOP_AFTER','Despu&eacute;s') ;
define('_APCAL_MB_APCALOP_BEFORE','Antes') ;
define('_APCAL_MB_APCALOP_ON','Sobre') ;
define('_APCAL_MB_APCALOP_ALL','Todo') ;

define('_APCAL_CNFM_SAVEAS_YN','Estas´seguro de guardarlo como otro evento ?') ;
define('_APCAL_CNFM_DELETE_YN','Est&aacute;s seguro de eliminar este evento ?') ;

define('_APCAL_ERR_INVALID_EVENT_ID','Error: EventID no encontrado') ;
define('_APCAL_ERR_NOPERM_TO_SHOW',"Error: No tienes permisos para ver esto") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS',"Error: No tienes permisos para exportar a iCalendar") ;
define('_APCAL_ERR_LACKINDISPITEM','El campo %s est&aacute; vac&iacute;o.<br />Presiona el bot&oacute;n de Volver de tu navegador!') ;

define('_APCAL_BTN_JUMP','Ir') ;
define('_APCAL_BTN_NEWINSERTED','Aceptar') ;
define('_APCAL_BTN_SUBMITCHANGES',' Modif&iacute;calo! ') ;
define('_APCAL_BTN_SAVEAS','Guardar como') ;
define('_APCAL_BTN_DELETE','Eliminarlo') ;
define('_APCAL_BTN_DELETE_ONE','Eliminar s&oacute;lo uno') ;
define('_APCAL_BTN_EDITEVENT','Editarlo') ;
define('_APCAL_BTN_RESET','Reiniciar Formulario') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
define('_APCAL_BTN_PRINT','Imprimir') ;
define("_APCAL_BTN_IMPORT","Importar!");
define("_APCAL_BTN_UPLOAD","Subir!");
define("_APCAL_BTN_EXPORT","Exportar!");
define("_APCAL_BTN_EXTRACT","Extraer");
define("_APCAL_BTN_ADMIT","Admitir");
define("_APCAL_BTN_MOVE","Mover");
define("_APCAL_BTN_COPY","Copiar");

define('_APCAL_RR_EVERYDAY','Cada d&iacute;a') ;
define('_APCAL_RR_EVERYWEEK','Cada Semana') ;
define('_APCAL_RR_EVERYMONTH','Cada mes') ;
define('_APCAL_RR_EVERYYEAR','Cada a&ntilde;o') ;
define('_APCAL_RR_FREQDAILY','Diariamente') ;
define('_APCAL_RR_FREQWEEKLY','Semanalmente') ;
define('_APCAL_RR_FREQMONTHLY','Mensualmente') ;
define('_APCAL_RR_FREQYEARLY','Anualmente') ;
define('_APCAL_RR_FREQDAILY_PRE','Cada') ;
define('_APCAL_RR_FREQWEEKLY_PRE','Cada') ;
define('_APCAL_RR_FREQMONTHLY_PRE','Cada') ;
define('_APCAL_RR_FREQYEARLY_PRE','Cada') ;
define('_APCAL_RR_FREQDAILY_SUF','D&iacute;a(s)') ;
define('_APCAL_RR_FREQWEEKLY_SUF','Semana(s)') ;
define('_APCAL_RR_FREQMONTHLY_SUF','Mes(es)') ;
define('_APCAL_RR_FREQYEARLY_SUF','A&ntilde;o(s)') ;
define('_APCAL_RR_PERDAY','cada %s d&iacute;as') ;
define('_APCAL_RR_PERWEEK','Cada %s semanas') ;
define('_APCAL_RR_PERMONTH','Cada %s meses') ;
define('_APCAL_RR_PERYEAR','Cada %s a&ntilde;os') ;
define('_APCAL_RR_COUNT','<br />%s veces') ;
define('_APCAL_RR_UNTIL','<br />hasta %s') ;
define('_APCAL_RR_R_NORRULE','Repetir No') ;
define('_APCAL_RR_R_YESRRULE','Repetir S&iacute;') ;
define('_APCAL_RR_OR','o') ;
define('_APCAL_RR_S_NOTSELECTED','-no seleccionado-') ;
define('_APCAL_RR_S_SAMEASBDATE','Igual que la fecha de inicio') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','Sin condiciones finales') ;
define('_APCAL_RR_R_USECOUNT_PRE','repeticiones') ;
define('_APCAL_RR_R_USECOUNT_SUF','veces') ;
define('_APCAL_RR_R_USEUNTIL','hasta') ;


}

?>