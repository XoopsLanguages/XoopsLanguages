<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: preferences.php 5570 2010-10-20 20:51:35Z beckmi $
 */
//Translator: Xoops Italia Team - www.xoopsitalia.org
//Last translation update: 20/02/2011
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN","Preferenze");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL","General Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS","User Info Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER","Meta Tags and Footer");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR","Word Censoring Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH","Search Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER","Mail Setup");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION","Authentication Options");*/

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS","<ul><li>Gestione di tutte le impostazioni del sito.</li></ul>");
/*

define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_GENERAL","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_USERSETTINGS","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_METAFOOTER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_CENSOR","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_SEARCH","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_MAILER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_AUTHENTICATION","A faire");
*/
define("_MD_AM_SITEPREF", "Site Preferences");
define("_MD_AM_SITENAME", "Nome del sito");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN", "Slogan del sito");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML", "Email del webmaster");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE", "Lingua di default");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE", "Modulo caricato nella pagina iniziale");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE", "Nessuno");
define("_MD_AM_SERVERTZ", "Zona oraria del server");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "Zona oraria di default");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME", "Tema di default");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET", "Set Tema");
define("_MD_AM_CUSTOM_REDIRECT", "Utilizzo redirect jGrowl");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "sostituisce il ridirezionamento trazionale con quello basato su jQuery");
define("_MD_AM_ANONNAME", "Identificativo per utenti anonimi");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS", "Numero di caratteri minimo richiesto per la password");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY", "Notificare via mail la registrazione di un nuovo utente?");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE", "Permettere agli utenti di eliminare il proprio account?");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG", "Display loading... image?");
define("_MD_AM_USEGZIP", "Utilizzare compressione gzip?");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL", "Selezionare la tipologia di filtro sul nome utente");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT", "Stretto (solo lettere e numeri)");
define("_MD_AM_MEDIUM", "Medio");
define("_MD_AM_LIGHT", "Leggero (consigliato per caratteri multi-byte)");
define("_MD_AM_USERCOOKIE", "Nome del cookie utente.");
define("_MD_AM_USERCOOKIEDSC", "Se viene impostato un nome per il cookie, sar&agrave; abilitata l'opzione 'Ricordami' per il login utente. Se un utente seleziona l'opzione 'Ricordami', potr&agrave; accedere in automatico. Il cookie ha una durata di un anno.");
define("_MD_AM_USEMYSESS", "Utilizzo sessioni personalizzate");
define("_MD_AM_USEMYSESSDSC", "Selezionare 'si' per impostare le opzioni relative alla sessioni.");
define("_MD_AM_SESSNAME", "Nome della sessione");
define("_MD_AM_SESSNAMEDSC", "Identificativo della sessione (Valido solo se 'Utilizzo sessioni personalizzate' &egrave; attivo)");
define("_MD_AM_SESSEXPIRE", "Durata della sessione");
define("_MD_AM_SESSEXPIREDSC", "Durata massima dell'inattivit&agrave; sul sito in minuti (Valido solo se 'Utilizzo sessioni personalizzate' &egrave; attivo)");
define("_MD_AM_BANNERS", "Attivare la visualizzazione dei banner??");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP", "Il tuo indirizzo IP");
define("_MD_AM_MYIPDSC", "Questo IP non verr&agrave; conteggiato come visualizzazione di banner");
define("_MD_AM_ALWDHTML", "Tag HTML permessi in tutti i messaggi/post.");
define("_MD_AM_INVLDMINPASS", "Valore non valido per la lunghezza minima della password.");
define("_MD_AM_INVLDUCOOK", "Valore non valido per il nome del cookie.");
define("_MD_AM_INVLDSCOOK", "Valore non valido per il nome di sessione.");
define("_MD_AM_INVLDSEXP", "Valore non valido per la durata della sessione.");
define("_MD_AM_ADMNOTSET", "Email webmaster non impostata.");
define("_MD_AM_YES", "Si");
define("_MD_AM_NO", "No");
define("_MD_AM_DONTCHNG", "Non modificare!");
define("_MD_AM_REMEMBER", "Applicare i permessi chmod 666 a questo file per permettere al sistema di modificarlo adeguatamente.");
define("_MD_AM_IFUCANT", "Se non &egrave; possibile modificare i permessi modificare il file manualmente.");

define("_MD_AM_COMMODE", "Visualizzazione di default dei commenti");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER", "Ordinamento di default per la visualizzazione dei commenti");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML", "Permettere tag HTML tags nei commenti?");
define("_MD_AM_DEBUGMODE", "Modalit&agrave; di debug");
define("_MD_AM_DEBUGMODEDSC", "Diverse opzioni per il debugging. In un sito pubblicato non dovrebbero essere attivate.");
define("_MD_AM_AVATARALLOW", "Pemettere il caricamento di avatar agli utenti?");
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP", "Numero di messaggi minimo richiesto");
define("_MD_AM_AVATARMPDSC", "Inserire il numero di messaggi minimo richiesto per caricare un proprio avatar");
define("_MD_AM_AVATARW", "Massima larghezza Avatar (pixel)");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH", "Massima altezza Avatar (pixel)");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX", "Dimensioni massime file Avatar (byte)");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF", "Impostazioni Custom avatar settings");
define("_MD_AM_CHNGUTHEME", "Modificare il tema di tutti gli utenti");
define("_MD_AM_NOTIFYTO", "Selezionare il gruppo a cui sar&agrave; inviata la notifica di un nuovo utente");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME", "Permettere agli utenti di selezionare il tema?");
define("_MD_AM_ALLOWIMAGE", "Permettere agli utenti di inserire immagini nei messaggi?");

define("_MD_AM_USERACTV", "Attivazione da parte dell'utente (raccomandata)");
define("_MD_AM_AUTOACTV", "Attivazione automatica");
define("_MD_AM_ADMINACTV", "Attivazione da parte degli amministratori");
define("_MD_AM_ACTVTYPE", "Selezionare la modalit&agrave; di attivazione dei nuovi utenti");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP", "Selezionare il gruppo cui sar&agrave; inviata la mail di attivazione");
define("_MD_AM_ACTVGROUPDSC", "Opzione valida solo quando &egrave; selezionata 'Attivazione da parte degli amministratori'");
define("_MD_AM_USESSL", "Utilizzare il protocollo SSL per il login?");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "Nome della variabile Post SSL");
define("_MD_AM_SSLPOSTDSC", "Il nome della variabile utilizzata per trasferire il valore della sessione via POST. Se non si &egrave; sicuri impostare un qualsiasi nome che sia difficile da individuare.");
define("_MD_AM_DEBUGMODE0", "Non attivo");
define("_MD_AM_DEBUGMODE1", "Debug attivo (a fondo pagina)");
define("_MD_AM_DEBUGMODE2", "Debug attivo (in finestra separata)");
define("_MD_AM_DEBUGMODE3", "Debug Template Smarty");
define("_MD_AM_MINUNAME", "Lunghezza minima richiesta per il nome utente");
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "Lunghezza massima del nome utente");
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "Impostazioni generali");
define("_MD_AM_USERSETTINGS", "Registrazione utente e avatar");
define("_MD_AM_ALLWCHGMAIL", "Permettere agli utenti di cambiare il proprio indirizzo email?");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "Blocco IP");
define("_MD_AM_BADEMAILS", "Inserire i domini che non possono essere utilizzati nell'email di un utente");
define("_MD_AM_BADEMAILSDSC", "Separare ciascun valore con <strong>|</strong>, non sensibile a maiuscole/minuscole, regex abilitata.");
define("_MD_AM_BADUNAMES", "Inserire i nomi che non possono essere utilizzati dagli utenti");
define("_MD_AM_BADUNAMESDSC", "Separare ciascun valore con <strong>|</strong>, non sensibile a maiuscole/minuscole, regex abilitata.");
define("_MD_AM_DOBADIPS", "Abilitare il blocco IP?");
define("_MD_AM_DOBADIPSDSC", "Gli utenti con l'indirizzo IP specificato non saranno in grado di accedere ali sito");
define("_MD_AM_BADIPS", "Inserire gli indirizzi IP che devono essere bloccati.<br />Separare ciascun valore con <strong>|</strong>, non sensibile a maiuscole/minuscole, regex abilitata.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc non consentir&agrave; l'accesso a IP che iniziano con aaa.bbb.ccc<br />aaa.bbb.ccc$ non consentir&agrave; l'accesso a IP che finiscono con aaa.bbb.ccc<br />aaa.bbb.ccc non consentir&agrave; l'accesso a IP che contiengono aaa.bbb.ccc");
define("_MD_AM_PREFMAIN", "Preferenze");
define("_MD_AM_METAKEY", "Parole chiave (keywords)");
define("_MD_AM_METAKEYDSC", "Le parole chiave sono termini (metatag) che sintetizzano i contenuti offerti dal tuo sito. Inserisci ogni parola separandola con una virgola o uno spazio. (Es. XOOPS,PHP,mySQL,portale italiano).");
define("_MD_AM_METARATING", "Meta Rating");
define("_MD_AM_METARATINGDSC", "Il metatag 'rating' definisce il target d'et&agrave; del sito e dei suoi contenuti.");
define("_MD_AM_METAOGEN", "Generale");
define("_MD_AM_METAO14YRS", "14 anni");
define("_MD_AM_METAOREST", "Limitato");
define("_MD_AM_METAOMAT", "Adulti");
define("_MD_AM_METAROBOTS", "Meta Robots");
define("_MD_AM_METAROBOTSDSC", "Il metatag 'robots' definisce il comportamento degli 'spider' dei motori di ricerca rispetto al sito.");
define("_MD_AM_INDEXFOLLOW", "Index, Follow (Archivia la pagina e ne segue i link)");
define("_MD_AM_NOINDEXFOLLOW", "NoIndex, Follow (Non archivia la pagina ma ne segue i link)");
define("_MD_AM_INDEXNOFOLLOW", "Index, NoFollow (Archivia la pagina ma non ne fa seguire i link)");
define("_MD_AM_NOINDEXNOFOLLOW", "NoIndex, NoFollow (Non archivia la pagina e non ne fa seguire i link)");
define("_MD_AM_METAAUTHOR", "Meta Author");
define("_MD_AM_METAAUTHORDSC", "Il metatag 'author' definisce l'autore del documento che si sta leggendo. Il valore pu&ograve; essere: il nome, l'indirizzo email del webmaster, il nome dell'azienda o l'URL.");
define("_MD_AM_METACOPYR", "Meta Copyright");
define("_MD_AM_METACOPYRDSC", "Il metatag 'copyright' definisce qualsiasi dichiarazione si voglia divulgare circa i diritti di propriet&agrave; del materiale pubblicato nel sito.");
define("_MD_AM_METADESC", "Meta Description");
define("_MD_AM_METADESCDSC", "Il metatag 'description' &egrave; una breve sintesi del contenuto e degli argomenti del sito");
define("_MD_AM_METAFOOTER", "Metatag e Pi&egrave; di pagina");
define("_MD_AM_FOOTER", "Pi&egrave; di pagina");
define("_MD_AM_FOOTERDSC", "Inserire eventuali link comprendendo http://, altrimenti il collegamento non funzioner&agrave; correttamente nella pagine dei moduli.");
define("_MD_AM_CENSOR", "Impostazioni di censura delle parole");
define("_MD_AM_DOCENSOR", "Abilitare la censura di parole indesiderate?");
define("_MD_AM_DOCENSORDSC", "Se questa opzione viene abilitata i termini inseriti saranno censurati. Quest'opzione pu&ograve; essere disabilitata per aumentare la velocit&agrave; del sito.");
define("_MD_AM_CENSORWRD", "Parole da censurare");
define("_MD_AM_CENSORWRDDSC", "Inserire le parole che dovrebbero essere censurate nei messaggi degli utenti.<br />Separare ogni termine con <strong>|</strong>, non sensibile a maiuscole/minuscole.");
define("_MD_AM_CENSORRPLC", "Caratteri sostitutivi delle parole censurate");
define("_MD_AM_CENSORRPLCDSC", "Le parole censurate saranno sostituite con i caratteri contenuti in questa casella");

define("_MD_AM_SEARCH", "Opzioni di ricerca nel sito");
define("_MD_AM_DOSEARCH", "Abilitare ricerche globali?");
define("_MD_AM_DOSEARCHDSC", "Consente di cercare messaggi\elementi all'interno del sito.");
define("_MD_AM_MINSEARCH", "Lunghezza minima delle parole chiave");
define("_MD_AM_MINSEARCHDSC", "Numero minimo di caratteri che l'utente deve inserire per effettuare una ricerca.");
define("_MD_AM_MODCONFIG", "Opzioni di configurazione dei moduli");
define("_MD_AM_DSPDSCLMR", "Mostrare le condizioni d'uso?");
define("_MD_AM_DSPDSCLMRDSC", "Selezionare 'S&igrave;' per mostrare le condizioni d'uso nel modulo di registrazione utente");
define("_MD_AM_REGDSCLMR", "Condizioni d'uso per l'utente registrato");
define("_MD_AM_REGDSCLMRDSC", "Inserire un testo che descriva i termini e le condizioni per la registrazione e l'accesso al sito");
define("_MD_AM_ALLOWREG", "Consentire la registrazione di nuovi utenti?");
define("_MD_AM_ALLOWREGDSC", "Selezionare 'S&igrave;'' per consentire l'iscrizione di nuovi utenti al sito");
define("_MD_AM_THEMEFILE", "Permettere/visualizzare le modifiche a temi e templates?");
define("_MD_AM_THEMEFILEDSC", "Se questa opzione &egrave; abilitata il tema e/o i templates modificati saranno ricompilati in automatico a ogni aggiornamento della pagina visualizzando eventuali modifiche.<br />Sconsigliato su siti in produzione.");
define("_MD_AM_CLOSESITE", "Chiudere il sito?");
define("_MD_AM_CLOSESITEDSC", "Selezionare 'S&igrave;' per chiudere il sito e permettere l'accesso solo a gruppi selezionati");
define("_MD_AM_CLOSESITEOK", "Selezionare i gruppi a cui &egrave; consentito l'accesso quando il sito &egrave; chiuso");
define("_MD_AM_CLOSESITEOKDSC", "Gli utenti del gruppo Webmaster hanno sempre accesso al sito");
define("_MD_AM_CLOSESITETXT", "Ragioni della chiusura del sito");
define("_MD_AM_CLOSESITETXTDSC", "Il testo da visualizzare quando il sito &egrave; chiuso. <br />&Egrave; possibile utilizzare codice html.");
define("_MD_AM_SITECACHE", "Tempo di cache generale del sito");
define("_MD_AM_SITECACHEDSC", "Saranno archiviati nella cache tutti i contenuti del sito per il tempo specificato, allo scopo di aumentare le prestazioni. Questo valore sostituisce la durata della cache di moduli, blocchi e altri elementi per cui &egrave; impostato un tempo cache.");
define("_MD_AM_MODCACHE", "Tempo di cache dei singoli moduli");
define("_MD_AM_MODCACHEDSC", "Saranno archiviati nella cache tutti i contenuti di un modulo per il tempo specificato, allo scopo di aumentare le prestazioni. Questo valore sostituisce la durata della cache in quegli elementi dei moduli per cui &egrave; impostato un tempo cache.");
define("_MD_AM_NOMODULE", "Non esistono moduli per cui impostare la cache.");
define("_MD_AM_DTPLSET", "Template set di default");
define("_MD_AM_DTPLSETDSC", "");
define("_MD_AM_SSLLINK", "Indirizzo della pagina di login SSL");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER", "Parametri invio email");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "Indirizzo email mittente");
define("_MD_AM_MAILFROMDESC", "Se lasciato vuoto sar&agrave; utilizzato l'indirizzo dell'amministratore");
define("_MD_AM_MAILFROMNAME", "Nome del mittente");
define("_MD_AM_MAILFROMNAMEDESC", "");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "Mittente (utente)");
define("_MD_AM_MAILFROMUIDDESC", "L'utente che compare come mittente quando il sistema invia un messaggio privato");
define("_MD_AM_MAILERMETHOD","Metodo di spedizione delle email");
define("_MD_AM_MAILERMETHODDESC","Metodo utilizzato per spedire le email. L'impostazione di default &egrave; 'PHP mail()', utilizzarne un'altra solo se questa crea problemi");
define("_MD_AM_SMTPHOST","Host SMTP");
define("_MD_AM_SMTPHOSTDESC","Elenco dei server SMTP cui tentare di connettersi.");
define("_MD_AM_SMTPUSER","Nome utente SMTPAuth");
define("_MD_AM_SMTPUSERDESC","Nome utente per la connessione a un host SMTP con SMTPAuth.");
define("_MD_AM_SMTPPASS","Password SMTPAuth");
define("_MD_AM_SMTPPASSDESC","Password per la connessione a un host SMTP con SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Percorso di sendmail");
define("_MD_AM_SENDMAILPATHDESC","Percorso del programma sendmail (o sostituto) sul server web.");
define("_MD_AM_THEMEOK","Temi selezionabili");
define("_MD_AM_THEMEOKDSC","I temi che gli utenti possono attivare se viene visualizzato il blocco temi.");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","This is the address of the soap server.");
define("_MD_AM_SOAP_PROVISION", "SOAP - Provision");
define("_MD_AM_SOAP_PROVISIONDESC","If you want the new user provisioned, say 'yes'");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Rank to Provision");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","This is the ranks a new user from the soap server is put in.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","Se si necessita di un servizio wdsl soap abilitare quest'opzione.");
define("_MD_AM_SOAP_USERNAME", "SOAP - Nome utente SOAP ");
define("_MD_AM_SOAP_USERNAMEDESC","Il nome utente dell'account sul soap server.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - Password SOAP");
define("_MD_AM_SOAP_PASSWORDDESC","Se &egrave; necessaria, inserire qui la password per il servizio soap.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Client connesso");
define("_MD_AM_SOAP_KEEPCLIENTDESC","Mantenere il client soap connesso.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - Account speciali");
define("_MD_AM_SOAP_FILTERPERSONDESC","Account speciali che utilizzano l'autenticazione Xoops.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Hostname Proxy");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","SOAP Servers Proxy Server.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Porta Proxy");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","Numero di porta SOAP Server Proxy Server<br />es: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Nome utente Proxy");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","Nome utente SOAP Servers Proxy Server");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Password Proxy");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","Password SOAP Servers Proxy Server.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - Timeout SOAP");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Mantenere la query Soap per <strong>xx</strong> secondi.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - Timeout risposta SOAP");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Mantenere la query Soap per <strong>xx</strong> secondi.");
define("_MD_AM_SOAP_FIELDMAPPING","Mappatura campi server Xoops-Auth");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Definire qui la corrispondenza tra il campo del database Xoops e il campo del sistema di autenticazione LDAP" .
    "<br /><br />Formato: [Campo Database Xoops]=[Attributo sistema SOAP]" .
		"<br />per esempio : email=mail" .
		"<br />Separare ciascuna coppia di campi con <b>|</b>" .
		"<br /><br />!! Per utenti esperti !!");

// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "Database Xoops");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Standard Directory LDAP");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION", "Opzioni di autenticazione");
define("_MD_AM_AUTHMETHOD", "Metodo di autenticazione");
define("_MD_AM_AUTHMETHODDESC", "Il metodo che si intende utilizzare per l'accesso degli utenti.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Campo Mail");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","Nome dell'attributo E-Mail nella vostra directory LDAP.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Campo Common Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC","Nome dell'attributo Common Name nella vostra directory LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Campo Surname");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","Nome dell'attributo Surname nella vostra directory LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Campo Given Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","Nome dell'attributo Given Name nella vostra directory LDAP.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - DN Base");
define("_MD_AM_LDAP_BASE_DN_DESC", "Il DN (Distinguished Name) base della vostra directory LDAP.");
define("_MD_AM_LDAP_PORT","LDAP - Numero di Porta");
define("_MD_AM_LDAP_PORT_DESC","Il numero di porta necessario per accedere alla directory del vostro server LDAP.");
define("_MD_AM_LDAP_SERVER","LDAP - Nome del server");
define("_MD_AM_LDAP_SERVER_DESC","Il nome della vostra directory sul server LDAP.");

define("_MD_AM_LDAP_MANAGER_DN", "DN del gestore LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "DN autorizzato a fare ricerche (es. manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "Password del gestore LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "La password dell'utente autorizzato a fare ricerche");
define("_MD_AM_LDAP_VERSION", "LDAP - Versione protocollo");
define("_MD_AM_LDAP_VERSION_DESC", "La versione di protocollo LDAP: 2 o 3");
define("_MD_AM_LDAP_USERS_BYPASS", "Utenti Xoops esclusi dall'autenticazione LDAP");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "Utenti cui &egrave; permesso di non effettuare il login LDAP.<br />Login diretto in Xoops<br />Separare ogni nome utente con <strong>|</strong>");
								  
define("_MD_AM_LDAP_USETLS", "Utilizza una connessione TLS");
define("_MD_AM_LDAP_USETLS_DESC", "Imposta una connessione TLS (Transport Layer Security).<BR />TLS utlizza di default la porta 389.<BR />" .
								  " La versione LDAP deve essere impostata sul valore '3'.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","Attributo LDAP da utilzzare per cercare un utente");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","Quando &egrave; abilitata l'opzione 'Utilizzare il nome utente per il DN' deve corrispondere al nome utente (uid) Xoops");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Utilizzare il nome utente per il DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "Il nome utente XOOPS verr&agrave; usato nel DN LDAP<br />(es : uid=<loginname>,dc=xoops,dc=org)<br />Il dato viene letto direttamente dal server LDAP, senza ricerca.");

define("_MD_AM_LDAP_FILTER_PERSON", "Filtro per la ricerca utente usato da LDAP");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Filtro speciale LDAP per la ricerca di un utente. @@loginname@@ viene sostituito dall'id di accesso dell'utente<br /> LASCIARE IN BIANCO SE NON SI CONOSCE IL CODICE!" .
		"<br />Es : (&(objectclass=person)(samaccountname=@@loginname@@)) per AD" .
		"<br />Es : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) per LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "Nome del dominio");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Nome domino Windows (solo per server ADS e NT)");

define("_MD_AM_LDAP_PROVIS", "Generazione automatica degli account Xoops");
define("_MD_AM_LDAP_PROVIS_DESC", "Creare un database utenti xoops se non ne esiste gi&agrave; uno");

define("_MD_AM_LDAP_PROVIS_GROUP", "Gruppo di default");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "I nuovi utenti vengono inseriti in questi gruppi");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Mappatura campi server Xoops-Auth");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Definire qui la corrispondenza tra il campo del database Xoops e il campo del sistema di autenticazione LDAP" .
		"<br /><br />Formato: [Campo Databse Xoops]=[Attributo sistema LDAP]" .
		"<br />per esempio : email=mail" .
		"<br />Separaree ciascuna coppia di campi con <b>|</b>" .
		"<br /><br />!! Per utenti esperti !!");
		
define("_MD_AM_LDAP_PROVIS_UPD", "Sincronizzazione della gestione dell'account Xoops");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "L'account utente Xoops verr&agrave; sempre sincronizzato con il server di autenticazione");


define("_MD_AM_CPANEL", "Tema dell'Amministrazione");
define("_MD_AM_CPANELDSC", "Layout alternativi per il lato admin.");

define("_MD_AM_WELCOMETYPE", "Messaggio di benvenuto");
define("_MD_AM_WELCOMETYPE_DESC", "Modalit&agrave; di invio del messaggio di benvenuto per i nuovi utenti registrati.");
define("_MD_AM_WELCOMETYPE_EMAIL", "Email");
define("_MD_AM_WELCOMETYPE_PM", "Messaggio privato");
define("_MD_AM_WELCOMETYPE_BOTH", "Email e messaggio");

define("_MD_AM_MODULEPREF", "Preferenze dei moduli");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS","Configurazione del modulo di Sistema");
?>