<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {

define( '_APCAL_CNST_LOADED' , 1 ) ;

// the language file for jscalendar "DHTML Date/Time Selector"
define('_APCAL_JS_CALENDAR','calendar-en.js');

// format for jscalendar. see common/jscalendar/doc/html/reference.html
define('_APCAL_JSFMT_YMDN','%d %B %Y (%A)');

// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_MINUTE','i');

// definition of orders     Y:year  M:month  W:week  D:day  N:dayname  O:operand
define('_APCAL_FMT_MD','%2$s %1$s') ;
define('_APCAL_FMT_YMD','%1$s %2$s %3$s') ;
define('_APCAL_FMT_YMDN','%4$s %3$s %2$s %1$s');
define('_APCAL_FMT_YMDO','%4$s%3$s%2$s%1$s');
define('_APCAL_FMT_YMW','%1$s %2$s %3$s') ;
define('_APCAL_FMT_YW','Semaine %2$s %1$s');
define('_APCAL_FMT_DHI','%1$s %2$s:%3$s');
define('_APCAL_FMT_HI','%1$s:%2$s');

// formats for sprintf()
define('_APCAL_FMT_YEAR_MONTH','%2$s %1$s') ;
define('_APCAL_FMT_YEAR','<font size="-1">ANNEE </font>%s') ;
define('_APCAL_FMT_WEEKNO','SEMAINE %s');

define('_APCAL_ICON_LIST','Vue Liste');
define('_APCAL_ICON_DAILY','Vue Journali&egrave;re') ;
define('_APCAL_ICON_WEEKLY','Vue Hebdomadaire') ;
define('_APCAL_ICON_MONTHLY','Vue Mensuelle') ;
define('_APCAL_ICON_YEARLY','Vue Annuelle') ;

define('_APCAL_MB_APCALSHOWALLCAT','Toutes les cat&eacute;gories');

define("_APCAL_MB_APCALLINKTODAY","Aujourd'hui") ;
define('_APCAL_MB_APCALNOSUBJECT','(Pas de Sujet)') ;
define('_APCAL_MB_APCALPREV_DATE','Hier') ;
define('_APCAL_MB_APCALNEXT_DATE','Demain') ;
define('_APCAL_MB_APCALPREV_WEEK','Semaine pr&eacute;c&eacute;dente') ;
define('_APCAL_MB_APCALNEXT_WEEK','Semaine suivante') ;
define('_APCAL_MB_APCALPREV_MONTH','Mois pr&eacute;c&eacute;dent') ;
define('_APCAL_MB_APCALNEXT_MONTH','Mois suivant') ;
define('_APCAL_MB_APCALPREV_YEAR','Ann&eacute;e pr&eacute;c&eacute;dente') ;
define('_APCAL_MB_APCALNEXT_YEAR','Ann&eacute;e suivante') ;


define("_APCAL_MB_APCALNOEVENT","Pas d'&eacute;v&egrave;nements") ;
define('_APCAL_MB_APCALADDEVENT','Ajouter un &eacute;v&egrave;nement') ;
define('_APCAL_MB_APCALCONTINUING','(continuer)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','plus') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','&eacute;v&eacute;nement(s)') ;
define('_APCAL_MB_APCALTIMESEPARATOR','--') ;

define('_APCAL_MB_APCALALLDAY_EVENT','Journ&eacute;e Enti&egrave;re') ;
define('_APCAL_MB_APCALLONG_EVENT','Afficher via une barre') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','Afficher comme un Jour Sp&eacute;cial (Anniv. par exemple)') ;

define('_APCAL_MB_APCALPUBLIC','Public') ;
define('_APCAL_MB_APCALPRIVATE','Priv&eacute;') ;
define('_APCAL_MB_APCALPRIVATETARGET',' parmi %s') ;

define("_APCAL_MB_APCALLINK_TO_RRULE1ST","Sauter jusqu'au premier &eacute;v&egrave;nement ") ;
define("_APCAL_MB_APCALRRULE1ST","C'est le premier &eacute;v&egrave;nement") ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','Non enregistr&eacute;') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','Approuv&eacute;') ;
define("_APCAL_MB_APCALEVENT_NEEDADMIT","En attente d'approbation") ;

define('_APCAL_MB_APCALTITLE_EVENTINFO',"Informations sur l'&eacute;v&egrave;nement") ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL',"D&eacute;tails de l'&eacute;v&egrave;nement") ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT',"Editer l'&eacute;v&egrave;nement") ;

define('_APCAL_MB_APCALHOUR_SUF',':') ;
define('_APCAL_MB_APCALMINUTE_SUF','') ;

define('_APCAL_MB_APCALORDER_ASC','Croissant');
define('_APCAL_MB_APCALORDER_DESC','D&eacute;croissant');
define('_APCAL_MB_APCALSORTBY','Tri&eacute; par:');
define('_APCAL_MB_APCALCURSORTEDBY','Ev&egrave;nements actuellement tri&eacute;s par:');

define('_APCAL_MB_APCALLABEL_CHECKEDITEMS','Les &eacute;v&eacute;nements coch&eacute;s sont:');
define('_APCAL_MB_APCALLABEL_OUTPUTICS','Exporter dans iCalendar');

define('_APCAL_MB_APCALICALSELECTPLATFORM','S&eacute;lectionner la plateforme');

define('_APCAL_TH_SUMMARY','Intitul&eacute;') ;
define('_APCAL_TH_TIMEZONE','Fuseau Horaire NE PAS MODIFIER SVP') ;
define('_APCAL_TH_STARTDATETIME','Date de d&eacute;but') ;
define('_APCAL_TH_ENDDATETIME','Date de fin') ;
define('_APCAL_TH_ALLDAYOPTIONS','Option Journ&eacute;e Enti&egrave;re') ;
define('_APCAL_TH_LOCATION','Lieu') ;

define('_APCAL_TH_CONTACT','Contact') ;
define('_APCAL_TH_CATEGORIES','Cat&eacute;gories');
define('_APCAL_TH_SUBMITTER','Auteur');
define('_APCAL_TH_CLASS','Type') ;
define('_APCAL_TH_DESCRIPTION','Description') ;
define('_APCAL_TH_RRULE','P&eacute;riodicit&eacute;') ;
define('_APCAL_TH_ADMISSIONSTATUS','Statut') ;
define('_APCAL_TH_LASTMODIFIED','Derni&egrave;re modification');

define("_APCAL_NTC_MONTHLYBYMONTHDAY","(Num&eacute;ro d'entr&eacute;e)") ;
define('_APCAL_NTC_EXTRACTLIMIT','** Seulement %s &eacute;v&egrave;nements au maximum sont g&eacute;n&eacute;r&eacute;s.') ;
define("_APCAL_NTC_NUMBEROFNEEDADMIT","(%s &eacute;l&eacute;ments n&eacute;cessitent une approbation)") ;

define('_APCAL_OPT_PRIVATEMYSELF','seulement moi') ;
define('_APCAL_OPT_PRIVATEGROUP','groupe %s') ;
define('_APCAL_OPT_PRIVATEINVALID','(groupe invalide)') ;

define('_APCAL_MB_APCALOP_AFTER','Apr&egrave;s');
define('_APCAL_MB_APCALOP_BEFORE','Avant');
define('_APCAL_MB_APCALOP_ON','Sur');
define('_APCAL_MB_APCALOP_ALL','Tout');

define("_APCAL_CNFM_SAVEAS_YN","Etes-vous d'accord pour sauvegarder ceci comme nouvel enregistrement ?") ;
define("_APCAL_CNFM_DELETE_YN","Etes-vous d'accord pour supprimer cet enregistrement ?") ;

define('_APCAL_ERR_INVALID_EVENT_ID','Erreur: EventID non trouv&eacute;') ;
define('_APCAL_ERR_NOPERM_TO_SHOW',"Erreur: Vous n'avez pas la permission de voir") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS',"Erreur: Vous n'avez pas la permission d'extraire iCalendar") ;
define("_APCAL_ERR_LACKINDISPITEM","L'&eacute;l&eacute;ment %s est vide.<br />Retournez en cliquant sur le bouton Pr&eacute;c&eacute;dent de notre navigateur web") ;

define('_APCAL_BTN_JUMP','Saut') ;
define('_APCAL_BTN_NEWINSERTED','Nouvelle insertion') ;
define('_APCAL_BTN_SUBMITCHANGES',' Modifier! ') ;
define('_APCAL_BTN_SAVEAS','Sauvegarder sous') ;
define('_APCAL_BTN_DELETE','Effacer') ;
define('_APCAL_BTN_DELETE_ONE','Supprimer seulement un seul enregistrement');
define('_APCAL_BTN_EDITEVENT','Editer') ;
define('_APCAL_BTN_RESET','R&eacute;initialiser') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
define('_APCAL_BTN_PRINT','Imprimer');
define('_APCAL_BTN_IMPORT','Importer!');
define('_APCAL_BTN_UPLOAD','Uploader!');
define('_APCAL_BTN_EXPORT','Exporter!');
define('_APCAL_BTN_EXTRACT','Extraire');
define('_APCAL_BTN_ADMIT','Accepter');
define('_APCAL_BTN_MOVE','D&eacute;placer');
define('_APCAL_BTN_COPY','Copier');

define('_APCAL_RR_EVERYDAY','Chaque jour') ;
define('_APCAL_RR_EVERYWEEK','Chaque semaine') ;
define('_APCAL_RR_EVERYMONTH','Chaque mois') ;
define('_APCAL_RR_EVERYYEAR','Chaque ann&eacute;e') ;
define('_APCAL_RR_FREQDAILY','Journalier') ;
define('_APCAL_RR_FREQWEEKLY','Hebdomadaire') ;
define('_APCAL_RR_FREQMONTHLY','Mensuel') ;
define('_APCAL_RR_FREQYEARLY','Annuel') ;
define('_APCAL_RR_FREQDAILY_PRE','Pendant ') ;
define('_APCAL_RR_FREQWEEKLY_PRE','Pendant ') ;
define('_APCAL_RR_FREQMONTHLY_PRE','Pendant ') ;
define('_APCAL_RR_FREQYEARLY_PRE','Pendant ') ;
define('_APCAL_RR_FREQDAILY_SUF','jour(s)') ;
define('_APCAL_RR_FREQWEEKLY_SUF','semaine(s)') ;
define('_APCAL_RR_FREQMONTHLY_SUF','mois') ;
define('_APCAL_RR_FREQYEARLY_SUF','ann&eacute;e(s)') ;
define('_APCAL_RR_PERDAY','tous les %s jours') ;
define('_APCAL_RR_PERWEEK','toutes les %s semaines') ;
define('_APCAL_RR_PERMONTH','tous les %s mois') ;
define('_APCAL_RR_PERYEAR','tous les %s ans') ;
define('_APCAL_RR_COUNT','<br />%s fois') ;
define("_APCAL_RR_UNTIL","<br />jusqu'&agrave; %s") ;
define('_APCAL_RR_R_NORRULE','R&eacute;currence Non') ;
define('_APCAL_RR_R_YESRRULE','R&eacute;currence Oui') ;
define('_APCAL_RR_OR','ou') ;
define('_APCAL_RR_S_NOTSELECTED','- non s&eacute;lectionn&eacute; -') ;
define('_APCAL_RR_S_SAMEASBDATE','Identique &agrave; la date de d&eacute;but') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','Pas de conditions de fin') ;
define('_APCAL_RR_R_USECOUNT_PRE','r&eacute;p&eacute;ter') ;
define('_APCAL_RR_R_USECOUNT_SUF','fois') ;
define("_APCAL_RR_R_USEUNTIL","jusqu'&agrave;") ;

// Added by goffy for online registration handling
define('_APCAL_RO_CANCEL','Action annul&eacute;e');
define('_APCAL_RO_RADIO_YES','Oui');
define('_APCAL_RO_RADIO_NO','Non');

define('_APCAL_RO_ONLINE_POSS','Pour ces &eacute;v&eacute;nements, l&#39;inscription en ligne est possible. ');
define('_APCAL_RO_ONLINE_POSS_2','Pour cet &eacute;v&eacute;nement, l&#39;inscription en ligne est possible. ');
define('_APCAL_RO_ONLY_MEMBERS','L&#39;inscription en ligne n&#39;est possible que pour les utilisateurs enregistr&eacute;s. ');
define('_APCAL_RO_ONLINE_NO','L&#39;inscription en ligne n&#39;est pas activ&eacute;e pour cet &eacute;v&eacute;nement');
define('_APCAL_RO_ONLINE_YES','L&#39;inscription en ligne est activ&eacute;e pour cet &eacute;v&eacute;nement');
define('_APCAL_RO_ONLINE_ACTIVATE','Activer l&#39;inscription en ligne pour cet &eacute;v&eacute;nement');
define('_APCAL_RO_ONLINE_DEACTIVATE','Ne pas utiliser l&#39;inscription en ligne pour cet &eacute;v&eacute;nement');
define('_APCAL_RO_ONLINE','Inscriptions');
define('_APCAL_RO_BTN_ADD','S&#39;inscrire');
define('_APCAL_RO_BTN_ADDMORE','Modifier ou ajouter une inscription');
define('_APCAL_RO_BTN_REMOVE','Se d&eacute;sinscrire');
define('_APCAL_RO_ENABLE_ONLINE','Inscription en ligne');
define('_APCAL_RO_NOMEMBERS','Il n&#39;y a pas d&#39;inscription pour cet &eacute;v&eacute;nement');
define('_APCAL_RO_BTN_LISTMEMBERS','Liste des participants');
define('_APCAL_RO_SUCCESS_ADD','Vous vous &ecirc;tes inscrit &agrave; cet &eacute;v&eacute;nement avec succ&egrave;s');
define('_APCAL_RO_SUCCESS_REMOVE','Vous vous &ecirc;tes d&eacute;sinscrit de cet &eacute;v&eacute;nement avec succ&egrave;s');
define('_APCAL_RO_UNAME','Personnes inscrites');
define('_APCAL_RO_FIRSTNAME','Pr&eacute;nom');
define('_APCAL_RO_LASTNAME','Nom');
define('_APCAL_RO_EMAIL','Courriel');
define('_APCAL_RO_EXTRAINFO1',''); //use it as you want; if you keep it blank, it will be invisible; if you change later, it has no effect on the data himself
define('_APCAL_RO_EXTRAINFO2',''); //use it as you want, if you keep it blank, it will be invisible
define('_APCAL_RO_EXTRAINFO3',''); //use it as you want, if you keep it blank, it will be invisible
define('_APCAL_RO_EXTRAINFO4',''); //use it as you want, if you keep it blank, it will be invisible
define('_APCAL_RO_EXTRAINFO5',''); //use it as you want, if you keep it blank, it will be invisible

define('_APCAL_RO_BTN_CONF_ADD','Confirmer l&#39;inscription');
define('_APCAL_RO_BTN_CONF_ADD_MORE','Confirmer votre inscription et invitez plus de gens');
define('_APCAL_RO_BTN_CONF_REMOVE','Confirmer la d&eacute;sinscription');
define('_APCAL_RO_BTN_CANCEL','Annuler');
define('_APCAL_RO_EVENT','&eacute;v&eacute;nement');
define('_APCAL_RO_TITLE1','S&#39;inscrire &agrave; un &eacute;v&eacute;nement');
define('_APCAL_RO_OBLIGATORY','Ces champs sont obligatoires');

define('_APCAL_RO_ERROR_REMOVE','Une erreur est survenue lors de votre d&eacute;sinscription');
define('_APCAL_RO_ERROR_ADD','Une erreur est survenue lors de votre inscription');
define('_APCAL_RO_BTN_BACK','Retour en arri&egrave;re');
define('_APCAL_RO_BACK','Vous serez redirig&eacute; vers la page pr&eacute;c&eacute;dente');
define('_APCAL_RO_ONLINE2','Inscriptions en ligne');
define('_APCAL_RO_ACTION','Action');

define('_APCAL_RO_TITLE2','Activer l&#39;inscription en ligne pour cet &eacute;v&eacute;nement');
define('_APCAL_RO_BTN_RO_EDIT','Modifier l&#39;inscription en ligne');
define('_APCAL_RO_BTN_RO_DEACTIVATE','Supprimer l&#39;inscription en ligne');
define('_APCAL_RO_BTN_RO_ACTIVATE','Activer');
define('_APCAL_RO_QUANTITY','Nombre maximal de participants<br/>(0 = sans limite)');
define('_APCAL_RO_QUANTITY2','Nombre maximal de participants');
define('_APCAL_RO_DATELIMIT','Date limite pour l&#39;inscription en ligne');
define('_APCAL_RO_EMAIL_NOTIFY','Adresse courriel pour les notifications (Laissez vide si vous ne voulez pas recevoir de notifications)');
define('_APCAL_RO_BTN_CONF_ACTIVATE','Confirmer');
define('_APCAL_RO_ERROR_RO_ACTIVATE','Une erreur est survenue lors de l&#39;activation de l&#39;inscription en ligne');
define('_APCAL_RO_SUCCESS_RO_ACTIVATE','Inscription en ligne activ&eacute; avec succ&egrave;s');
define('_APCAL_RO_ERROR_RO_DEACTIVATE','Une erreur est survenue lors de la d&eacute;sactivation de l&#39;inscription en ligne');
define('_APCAL_RO_SUCCESS_RO_DEACTIVATE','Inscription en ligne d&eacute;sactiv&eacute; avec succ&egrave;s');
define('_APCAL_RO_ERROR_FULL','Il n&#39;y a plus de places disponible pour cet &eacute;v&eacute;nement');
define('_APCAL_RO_ERROR_TIMEOUT','La date limite d&#39;inscription est d&eacute;pass&eacute;');
define('_APCAL_RO_ERROR_OBLIGATORY','Veuillez remplir les champs obligatoire \"%f\"');
define('_APCAL_RO_BTN_CONF_SAVE','Sauvegarder');
define('_APCAL_RO_BTN_CONF_EDIT','Sauvegarder les changements');

define('_APCAL_RO_MAIL_SUBJ_ADD','Info registration');
define('_APCAL_RO_MAIL_SUBJ_REMOVE','Info de-registration');
define('_APCAL_RO_MAIL_SUBJ_TEXT','Information sur l&#39;&eacute;v&eacute;nement');
define('_APCAL_RO_DATE','Date');
define('_APCAL_RO_LOCATION','Emplacement');
define('_APCAL_RO_LINK','Lien vers l&#39;&eacute;v&eacute;nement');
define('_APCAL_RO_TITLE3','Liste des inscriptions existantes');
define('_APCAL_RO_TITLE4','Envoyer un courriel &agrave; tous les participants');
define('_APCAL_RO_MAIL_SENDER','Exp&eacute;diteur');
define('_APCAL_RO_MAIL_SUBJ','Objet');
define('_APCAL_RO_MAIL_BODY1','Texte du courriel');
define('_APCAL_RO_MAIL_BODY2','Les expressions entre accolades seront remplac&eacute;es (ex: {NAME} sera remplac&eacute; par le pr&eacute;nom et le nom)');
define('_APCAL_RO_BTN_SEND','Envoyer');
define('_APCAL_RO_MAILSENT',' message(s) envoy&eacute;(s)');

define('_APCAL_RO_TITLE5','Modifier les inscriptions');
define('_APCAL_RO_BTN_EDIT','Modifier');
define('_APCAL_RO_SUCCESS_EDIT','Modification des informations d&#39;inscriptions r&eacute;uissies');
define('_APCAL_RO_ERROR_EDIT','Une erreur est survenue lors de la modification de l&#39;inscription');
define('_APCAL_RO_SEND_CONF1','Confirmation par courriel');
define('_APCAL_RO_SEND_CONF2','Envoy&eacute; &agrave;');
define('_APCAL_RO_SEND_CONF3','Envoyer une confirmation par courriel: ');

define('_APCAL_RO_REDIRECT','Vous serez redirig&eacute; vers l&#39;activation des inscriptions en ligne');
define('_APCAL_RO_SUCCESS_NEW_EVENT','&Eacute;v&eacute;nement cr&eacute;&eacute; avec succ&egrave;s');
define('_APCAL_RO_SUCCESS_DELETE_EVENT','&Eacute;v&eacute;nement supprim&eacute; avec succ&egrave;s');
define('_APCAL_RO_SUCCESS_UPDATE_EVENT','&Eacute;v&eacute;nement modifi&eacute; avec succ&egrave;s');
define('_APCAL_RO_SUCCESS_COPY_EVENT','&Eacute;v&eacute;nement copi&eacute; avec succ&egrave;s');

}

?>