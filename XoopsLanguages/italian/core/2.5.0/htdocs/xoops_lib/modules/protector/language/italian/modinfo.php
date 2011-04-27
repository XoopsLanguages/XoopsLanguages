<?php
//Italian translation: Defkon1 - defkon1(at)gmail(dot)com - www.xoopsitalia.org
//Updated by Ianez - Xoops Italia Staff

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Protector");

// A brief description of this module
define($constpref."_DESC","Questo modulo protegge il tuo sito Xoops da diversi tipi di attacchi, come i Denial Of Service, Iniezione SQL, e contaminazione delle variabili.");

// Menu
define($constpref."_ADMININDEX","Centro di Protezione");
define($constpref."_ADVISORY","Pannello Sicurezza");
define($constpref."_PREFIXMANAGER","Gestore prefissi");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Permessi') ;

// Configs
define($constpref.'_GLOBAL_DISBL','Temporaneamente disabilitato');
define($constpref.'_GLOBAL_DISBLDSC','Tutte le protezioni sono disabilitate temporaneamente.<br />Non dimenticare di impostare su No, dopo aver risolto il problema');

define($constpref.'_DEFAULT_LANG','Lingua di default');
define($constpref.'_DEFAULT_LANGDSC','Specificare la lingua in cui visualizzare i messaggi prima di processare common.php');

define($constpref.'_RELIABLE_IPS','IP affidabili');
define($constpref.'_RELIABLE_IPSDSC','Imposta gli IP affidabili separandoli con | . ^ abbina la testa della stringa, $ abbina la coda della stringa.');

define($constpref.'_LOG_LEVEL','Livello del log');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Tempo di espulsione degli IP (sec)');

define($constpref.'_LOGLEVEL0','Nessuno');
define($constpref.'_LOGLEVEL15','Silenzioso');
define($constpref.'_LOGLEVEL63','Basso');
define($constpref.'_LOGLEVEL255','Totale');

define($constpref.'_HIJACK_TOPBIT','Bit dell\'IP protetti per questa sessione');
define($constpref.'_HIJACK_TOPBITDSC','Anti dirottamento della Sessione:<br />Default 32(bit). (Tutti i bit protetti)<br />Quando il tuo IP non &egrave; statico, imposta un range di tolleranza sul numero di bit protetti dell\'IP.<br />(es.) Se il tuo IP pu&ograve; muoversi nel range 192.168.0.0-192.168.0.255, impostare una protezione di 24(bit)');
define($constpref.'_HIJACK_DENYGP','Gruppi non autorizzati a cambiare IP durante una sessione');
define($constpref.'_HIJACK_DENYGPDSC','Anti dirottamento sessione:<br />Selezionare i gruppi a cui non &egrave; permesso cambiare IP durante una sessione.<br />(Raccomandato: tutti i gruppi di Amministrazione.)');
define($constpref.'_SAN_NULLBYTE','Sterilizza null-bytes');
define($constpref.'_SAN_NULLBYTEDSC','Il carattere terminale "\\0" &egrave; spesso utilizzato negli attacchi malevolis.<br />Ogni null-byte verr&agrave; sostituito con uno spazio.<br />(Raccomandato: S&igrave;)');
define($constpref.'_DIE_NULLBYTE','Esci se viene identificato un null-bytes');
define($constpref.'_DIE_NULLBYTEDSC','Il carattere terminale "\\0" &egrave; spesso utilizzato negli attacchi malevolis.<br />(Raccomandato: S&igrave;)');
define($constpref.'_DIE_BADEXT','Esci se vengono inviati file malevoli');
define($constpref.'_DIE_BADEXTDSC','Se qualcuno cerca di effettuare l\'upload di file con estensione potenzialmente pericolosa (ad es. .php), il modulo esce da Xoops.<br />Se carichi spesso file php in moduli tipo B-Wiki o PukiWikiMod, disattivare questa funzione.');
define($constpref.'_CONTAMI_ACTION','Azione se rilevata contaminazione');
define($constpref.'_CONTAMI_ACTIONDS','Seleziona l\'azione da intraprendere qualora venga identificata una contaminazione delle variabili globali di sistema in Xoops.<br />(Raccomandato: schermata bianca)');
define($constpref.'_ISOCOM_ACTION','Azione se rilevato commento isolato');
define($constpref.'_ISOCOM_ACTIONDSC','Anti iniezione SQL:<br />Seleziona l\'azione da intraprendere qualora venga identificato un commento isolato ("/*").<br />"Sterilizzazione" significa aggiungere un altro "*/" in coda.<br />(Raccomandato: Sterilizzazione)');
define($constpref.'_UNION_ACTION','Azioen se rilevato UNION');
define($constpref.'_UNION_ACTIONDSC','Anti iniziezione SQL:<br />Seleziona l\'azione da intraprendere qualora venga identificata una sintassi di tipo UNION.<br />"Sterilizza" significa sostituire la parola chiave "union" in "uni-on".<br />(Raccomandato: Sterilizza)');
define($constpref.'_ID_INTVAL','Forza valori interi per le variabili tipo id');
define($constpref.'_ID_INTVALDSC','Tutte le richieste di parametri "*id" verranno trattate come numeri interi.<br />Questa opzione protegge da alcuni tipi di attacchi XSS e a iniezione SQL.<br />(Raccomandato: S&igrave; - Pu&ograve; causare problemi con alcuni oduli)');
define($constpref.'_FILE_DOTDOT','Protezioni da Attraversamento Directory');
define($constpref.'_FILE_DOTDOTDSC','Elimina dai percorsi il ".." da tutte le richieste che assomigliano ad attacchi da Attraversamento Directory');

define($constpref.'_BF_COUNT','Anti Forza Bruta');
define($constpref.'_BF_COUNTDSC','Conteggia il numero di tentativi di login di un utente anonimo in 10 minuti. Se il login fallisce pi&&ugrave; volte di quanto specificato qui, il suo IP viene espulso (Ban).');

define($constpref.'_BWLIMIT_COUNT','Limitazione Banda di accesso');
define($constpref.'_BWLIMIT_COUNTDSC','Specificare l\'ampiezza di banda d\'accesso al mainfile.php (in kilobyte) durante il tempo di visita. Il valore dovrebbe essere 0 per ambienti che hanno una CPU adeguata. I valori inferiori a 10 saranno ignorati.');

define($constpref.'_DOS_SKIPMODS','Moduli esclusi dal controllo DoS/Crawler');
define($constpref.'_DOS_SKIPMODSDSC','Impostare i nomi delle cartelle dei moduli separate da |. Questa opzione &egrave; utile sui moduli chat, ecc...');

define($constpref.'_DOS_EXPIRE','Tempo di controllo per caricamenti frequenti (sec)');
define($constpref.'_DOS_EXPIREDSC','Questo valore specifica il tempo di controllo per i frequenti caricamenti del sito (attacchi da F5) e crawler troppo invasivi.');

define($constpref.'_DOS_F5COUNT','Contatore Attacchi da F5');
define($constpref.'_DOS_F5COUNTDSC','Previene gli attacchi Denial Of Service da F5.<br />Questo valore specifica il numero di caricamenti consecutivi da considerare come attacco malevolo.');
define($constpref.'_DOS_F5ACTION','Azione contro Attacchi da F5');

define($constpref.'_DOS_CRCOUNT','Contatore Crawler');
define($constpref.'_DOS_CRCOUNTDSC','Previene l\'esaurimento delle risorse server da parte di crawlers troppo invasivi.<br />Questo valore specifica il numero di accessi da considerare eccessivi per un crawler.');
define($constpref.'_DOS_CRACTION','Azione contro Crawler troppo invasivi');

define($constpref.'_DOS_CRSAFE','User-Agent benvenuti');
define($constpref.'_DOS_CRSAFEDSC','Un pattern regex per gli User-Agent.<br />Se coincidente, il crawler non verr&agrave; mai considerato troppo invasivo.<br />(es.) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Nessuna (solo log)');
define($constpref.'_OPT_SAN','Sterilizzazione');
define($constpref.'_OPT_EXIT','Schermata bianca');
define($constpref.'_OPT_BIP','Espulsione IP (Nessun limite)');
define($constpref.'_OPT_BIPTIME0','Espulsione IP (Moratoria)');

define($constpref.'_DOSOPT_NONE','Nessuna (solo log)');
define($constpref.'_DOSOPT_SLEEP','Sospensione');
define($constpref.'_DOSOPT_EXIT','Schermata bianca');
define($constpref.'_DOSOPT_BIP','Espulsione IP (Nessun limite)');
define($constpref.'_DOSOPT_BIPTIME0','Espulsione IP (Moratoria)');
define($constpref.'_DOSOPT_HTA','DENY da .htaccess (Sperimentale)');

define($constpref.'_BIP_EXCEPT','Gruppi da non registrare come IP malevoli');
define($constpref.'_BIP_EXCEPTDSC','Un utente appartenente ai gruppi specificati non verr&agrave; mai espulso.<br />(Raccomandato: tutti i gruppi di Amministrazione)');

define($constpref.'_DISABLES','Disabilita funzionalit&agrave; pericolose di XOOPS');

define($constpref.'_DBLAYERTRAP','Abilitare DB Layer trapping anti-Iniezione SQL');
define($constpref.'_DBLAYERTRAPDSC','Quasi tutti gli attacchi di Iniezione SQL verranno bloccati tramite questa impostazione, che richiede tuttavia il supporto da parte del databasefactory. &Egrave; possibile verificarne lo stato nel \'Pannello Sicurezza\'.');
define($constpref.'_DBTRAPWOSRV','Non verficare sul _SERVER azioni anti-Iniezione SQL');
define($constpref.'_DBTRAPWOSRVDSC','Alcuni server abilitano di default il DB Layer trapping. Il processo pu&ograve; tuttavia erroneamente rilevare alcuni eventi come attacchi di Iniezione SQL. Se si presentano tali errori impostare quest\'opzione su \'on\'.<br /> &Egrave; bene ricordare che questa impostazione diminuisce la sicurezza del DB Layer trapping anti-Iniezione SQL.');

define($constpref.'_BIGUMBRELLA','Abilita sistema anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Questo protegge dalla maggior parte degli attacchi che sfruttano vulnerabilit&agrave; XSS. Ma non funziona al 100%');

define($constpref.'_SPAMURI4U','Anti-SPAM: numero di indirizzi per gli utenti normali');
define($constpref.'_SPAMURI4UDSC','Se in un invio di dati POST da parte di un utente (ad eccezione degli amministratori) vengono rilevati pi&ugrave; indirizzi URL di quanto consentito qui, l\'invio viene considerato SPAM. Impostare 0 per disabilitare questa funzionalit&agrave;.');
define($constpref.'_SPAMURI4G','Anti-SPAM: numero di indirizzi per gli utenti anonimi');
define($constpref.'_SPAMURI4GDSC','Se in un invio di dati POST da parte di un utente anonimi vengono rilevati pi&ugrave; indirizzi URL di quanto consentito qui, l\'invio viene considerato SPAM. Impostare 0 per disabilitare questa funzionalit&agrave;..');

}

?>
