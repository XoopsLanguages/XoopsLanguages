<?php
// $Id: preferences.php 1970 2008-08-24 02:16:51Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF", "Preferenze");
define("_MD_AM_SITENAME", "Nome del sito");
define("_MD_AM_SLOGAN", "Slogan del sito");
define("_MD_AM_ADMINML", "Indirizzo mail dell'amministratore");
define("_MD_AM_LANGUAGE", "Lingua di default");
define("_MD_AM_STARTPAGE", "Modulo per l'home page");
define("_MD_AM_NONE", "Nessuno");
define("_MD_AM_SERVERTZ", "Timezone del server");
define("_MD_AM_DEFAULTTZ", "Default timezone");
define("_MD_AM_DTHEME", "Tema di default");
define("_MD_AM_THEMESET", "Theme Set");
define("_MD_AM_ANONNAME", "Username per gli utenti anonimi");
define("_MD_AM_MINPASS", "Lunghezza minima per la password");
define("_MD_AM_NEWUNOTIFY", "Notifica via mail quando si registra un nuovo utente?");
define("_MD_AM_SELFDELETE", "Permetti agli utenti di cancellare il loro account?");
define("_MD_AM_LOADINGIMG", "Visualizza immagine di caricamento?");
define("_MD_AM_USEGZIP", "Usa la compressione gzip?");
define("_MD_AM_UNAMELVL", "Seleziona il grado di restrizione per gli username");
define("_MD_AM_STRICT", "Strict (solo lettere e numeri)");
define("_MD_AM_MEDIUM", "Medium");
define("_MD_AM_LIGHT", "Light (raccomandato per i caratteri Multi-byte)");
define("_MD_AM_USERCOOKIE", "Nome per i cookie dell'utente.");
define("_MD_AM_USERCOOKIEDSC", "Se il nome per i cookie è abilitato, 'Ricordami' viene abilitato per il login. Se un utente ha selezionato 'Ricordami' il login avviene in modo automatico. Il cookie scade dopo un anno.");
define("_MD_AM_USEMYSESS", "Usa sessioni personalizzate");
define("_MD_AM_USEMYSESSDSC", "Seleziona si per personalizzare i valori relativi alle sessioni.");
define("_MD_AM_SESSNAME", "Nome della sessione");
define("_MD_AM_SESSNAMEDSC", "Nome della sezione (Valido solo se è attivo 'usa sessioni personalizate')");
define("_MD_AM_SESSEXPIRE", "Durata sessione");
define("_MD_AM_SESSEXPIREDSC", "Durata massima della sessione in minuti(Valido solo se è attivo 'usa sessioni personalizate. Funziona solo con PHP4.2.0 o superiore.)");
define("_MD_AM_BANNERS", "Attiva il circuito banner?");
define("_MD_AM_MYIP", "Il tuo indirizzo IP");
define("_MD_AM_MYIPDSC", "Questo IP non viene conteggiato nella visualizzazione dei banner");
define("_MD_AM_ALWDHTML", "HTML tags abilitati nei post.");
define("_MD_AM_INVLDMINPASS", "Valore non valido per la lunghezza minima della password.");
define("_MD_AM_INVLDUCOOK", "Valore non valido per il nome del cookie dell'utente.");
define("_MD_AM_INVLDSCOOK", "Valore non valido per il nome del cookie della sessione.");
define("_MD_AM_INVLDSEXP", "Valore non valido per il tempo di durata della sessione.");
define("_MD_AM_ADMNOTSET", "La mail dell'amministratore non è stata inserita.");
define("_MD_AM_YES", "Si");
define("_MD_AM_NO", "No");
define("_MD_AM_DONTCHNG", "Non cambiare!");
define("_MD_AM_REMEMBER", "Ricorda di chmod 666 per permettere al sistema di scriverlo correttamente.");
define("_MD_AM_IFUCANT", "Se non cambi i permessi devi modificare questo file a mano.");


define("_MD_AM_COMMODE", "Modo di visualizzazione di default per i commenti");
define("_MD_AM_COMORDER", "Ordine di visualizzazione di default per i commenti");
define("_MD_AM_ALLOWHTML", "Abilita i tag HTML nei commenti?");
define("_MD_AM_DEBUGMODE", "Modo di Debug");
define("_MD_AM_DEBUGMODEDSC", "Diverse opzioni di debug. Un sito web in produzione dovrebbe avere questo funzione disabilitata.");
define("_MD_AM_AVATARALLOW", "Abilita l'invio di avatar personalizzati?");
define("_MD_AM_AVATARMP", "Numero minimo di post richiesti");
define("_MD_AM_AVATARMPDSC", "Inserisci il numero minimo di post richiesti per poter caricare un avatar personalizzato");
define("_MD_AM_AVATARW", "Larghezza massima per l'avatar(pixel)");
define("_MD_AM_AVATARH", "Altezza massima per l'avatar (pixel)");
define("_MD_AM_AVATARMAX", "Dimensione massima per l'avatar (byte)");
define("_MD_AM_AVATARCONF", "Impostazionni per Avatar personalizzato");
define("_MD_AM_CHNGUTHEME", "Change all users' theme");
define("_MD_AM_NOTIFYTO", "Seleziona il gruppo al quale verrà inviato un messaggio per ogni nuovo utente registrato");
define("_MD_AM_ALLOWTHEME", "Permetti agli utenti di scegliere un tema?");
define("_MD_AM_ALLOWIMAGE", "Permetti agli utenti di visualizzare le immagini nei post?");

define("_MD_AM_USERACTV", "Richiedi attivazione da parte dell'utente (raccomandato)");
define("_MD_AM_AUTOACTV", "Attiva automaticamente");
define("_MD_AM_ADMINACTV", "Attivazione dagli amministratori");
define("_MD_AM_ACTVTYPE", "Seleziona il tipo di attivazione per i nuovo utenti registrati");
define("_MD_AM_ACTVGROUP", "Seleziona il gruppo al quale sarà inviata la mail di attivazione");
define("_MD_AM_ACTVGROUPDSC", "Valido solo quando 'Attivazione dagli amministratori' è selezionato");
define("_MD_AM_USESSL", "Usa SLL per il login?");
define("_MD_AM_SSLPOST", "SSL POST Nome variabile");
define("_MD_AM_SSLPOSTDSC", "Il nome della variabile viene usato per trasmettere i dati della sessione via POST. Se non sei sicuro metti una parola difficile da individuare.");
define("_MD_AM_DEBUGMODE0", "Off");
define("_MD_AM_DEBUGMODE1", "Abilita debug (inline)");
define("_MD_AM_DEBUGMODE2", "Abilita debug (popup mode)");
define("_MD_AM_DEBUGMODE3", "Smarty Templates Debug");
define("_MD_AM_MINUNAME", "Lunghezza minima per il nome utente");
define("_MD_AM_MAXUNAME", "Lunghezza massima per il nome utente");
define("_MD_AM_GENERAL", "Impostazioni genereali");
define("_MD_AM_USERSETTINGS", "Impostazioni utente");
define("_MD_AM_ALLWCHGMAIL", "Permetti agli utenti di cambiare l'indirizzo mail?");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "IP Banning");
define("_MD_AM_BADEMAILS", "Insirisci gli indirizzi email che non posso essere usati nei profili utente");
define("_MD_AM_BADEMAILSDSC", "Separa ciascun indirizzo con <strong>|</strong>, case insensitive, regex abilitate.");
define("_MD_AM_BADUNAMES", "Inserisci i nomi che non possono essere usati per la registrazione di nuovi profili");
define("_MD_AM_BADUNAMESDSC", "Separa ciascun indirizzo con <strong>|</strong>, case insensitive, regex abilitate.");
define("_MD_AM_DOBADIPS", "Abilita il Ban degli IP?");
define("_MD_AM_DOBADIPSDSC", "GLi utenti con uno specifico indirizzo IP non possono vedere il tuo sito");
define("_MD_AM_BADIPS", "Inserisci gli indirizzi IP ai quali non è permesso l'accesso al sito.<br />Separa ciascun indirizzo con <strong>|</strong>, case insensitive, regex abilitate.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc verranno disabilitati gli utenti che hanno un indirizzo IP che inizia con aaa.bbb.ccc<br />aaa.bbb.ccc$ verranno disabilitati gli utenti che hanno un indirizzo IP che finisce con aaa.bbb.ccc<br />aaa.bbb.ccc verranno disabilitati gli utenti che hanno un indirizzo IP che contiene aaa.bbb.ccc");
define("_MD_AM_PREFMAIN", "Preferenze");
define("_MD_AM_METAKEY", "Meta Keywords");
define("_MD_AM_METAKEYDSC", "Le keywords meta tag sono una serie di parole che rappresentano il contenuto del tuo sito. Scrivi qui le tue parole chiave separate da una virgola o da uno spazio bianco. (Ex. XOOPS, PHP, mySQL, portal system)");
define("_MD_AM_METARATING", "Meta Rating");
define("_MD_AM_METARATINGDSC", "Il tag Meta Rating definisce il contenuto del tuo sito e il target di età a cui è rivolto");
define("_MD_AM_METAOGEN", "Generale");
define("_MD_AM_METAO14YRS", "14 anni");
define("_MD_AM_METAOREST", "Ristretto");
define("_MD_AM_METAOMAT", "Adulti");
define("_MD_AM_METAROBOTS", "Meta Robots");
define("_MD_AM_METAROBOTSDSC", "Il Tag Meta Robots indica quali contenuti indicizzare e a quali motori di ricerca è permesso farlo");
define("_MD_AM_INDEXFOLLOW", "Index, segui");
define("_MD_AM_NOINDEXFOLLOW", "No Index, segui");
define("_MD_AM_INDEXNOFOLLOW", "Index, Non seguire");
define("_MD_AM_NOINDEXNOFOLLOW", "No Index, Non seguire");
define("_MD_AM_METAAUTHOR", "Meta Author");
define("_MD_AM_METAAUTHORDSC", "Il Tag Meta Author indica l'autore del contenuto del sito. Sono supportati nomi, indirizzi mail, inidirizzo del webmaster e URL.");
define("_MD_AM_METACOPYR", "Meta Copyright");
define("_MD_AM_METACOPYRDSC", "Il Tag Meta Copyright definisce i termini di copyright per i contenuti del tuo sito.");
define("_MD_AM_METADESC", "Meta Description");
define("_MD_AM_METADESCDSC", "Il Tag Meta Description indica in generale i contenuti del tuo sito");
define("_MD_AM_METAFOOTER", "Meta Tags e Footer");
define("_MD_AM_FOOTER", "Footer");
define("_MD_AM_FOOTERDSC", "Assicurati di inserire i link in modo assouluto, completi cioè di http://, altrimenti i link non funzioneranno correttamente quando ci si trova all'interno di un modulo.");
define("_MD_AM_CENSOR", "Opzioni di censura delle parole");
define("_MD_AM_DOCENSOR", "Abilita la censura delle parole non desiderate?");
define("_MD_AM_DOCENSORDSC", "Le parole saranno censurate se questa opzione sarà attivata. Questa funzione può essere disabilitata per aumentare la velocità del sito.");
define("_MD_AM_CENSORWRD", "Parole da censurare");
define("_MD_AM_CENSORWRDDSC", "Inserisci le parole che devono essere censurate.<br />Separa ogni parola con <strong>|</strong>, case insensitive.");
define("_MD_AM_CENSORRPLC", "Le parole censurate saranno sostituite da:");
define("_MD_AM_CENSORRPLCDSC", "Le parole censurate saranno censurate con il testo inserito in questo box");

define("_MD_AM_SEARCH", "Opzioni di ricerca");
define("_MD_AM_DOSEARCH", "Abilita la ricerca globale?");
define("_MD_AM_DOSEARCHDSC", "Abilita la ricerca tra gli elementi del tuo sito.");
define("_MD_AM_MINSEARCH", "Lunghezza minima del testo da cercare");
define("_MD_AM_MINSEARCHDSC", "Inserisci la lunghezza minima delle parole chiave che gli utenti sono tenuti a inserire per eseguire la ricerca");
define("_MD_AM_MODCONFIG", "Opzioni di configurazione dei moduli");
define("_MD_AM_DSPDSCLMR", "Visualizza disclaimer?");
define("_MD_AM_DSPDSCLMRDSC", "Seleziona si per visualizzare il disclaimer nella pagina di registrazione");
define("_MD_AM_REGDSCLMR", "Disclaimer per la registrazione");
define("_MD_AM_REGDSCLMRDSC", "Inserisci il testo per il Disclaimer durante la fase di registrazione");
define("_MD_AM_ALLOWREG", "Permetti nuove registrazioni?");
define("_MD_AM_ALLOWREGDSC", "Seleziona si per permettere nuove registrazioni da parte degli utenti");
define("_MD_AM_THEMEFILE", "Controlla i template per le modifiche?");
define("_MD_AM_THEMEFILEDSC", "Se questa opzione è attiva, i template modificati saranno automaticamente ricompilati ad ogni visualizzazione. Questa opzione deve essere impstata a Off per un sito in produzione.");
define("_MD_AM_CLOSESITE", "Vuoi chiudere il sito?");
define("_MD_AM_CLOSESITEDSC", "Seleziona si per chiudere il sito, solo i gruppi selezionati avranno accesso al sito. ");
define("_MD_AM_CLOSESITEOK", "Seleziona i gruppi che possono accedere al sito quando è chiuso.");
define("_MD_AM_CLOSESITEOKDSC", "Gli utenti del gruppo Webmaster sono sempre abilitati all'accesso.");
define("_MD_AM_CLOSESITETXT", "Motivo per cui il sito è chiuso");
define("_MD_AM_CLOSESITETXTDSC", "Questo testo viene visualizzato quando il sito è chiuso.");
define("_MD_AM_SITECACHE", "Cache del sito");
define("_MD_AM_SITECACHEDSC", "Mette in cache i contenuti per un tempo stabilito per aumentare le performance del sito. Questa impostazione sovrascrive le singole cache impostate per i moduli e per i blocchi.");
define("_MD_AM_MODCACHE", "Cache dei moduli");
define("_MD_AM_MODCACHEDSC", "Mette in cache i contenuti dei moduli per un tempo stabilito per aumentare le performance del sito. Questa impostazione sovrascrive le singole cache impostate per i moduli.");
define("_MD_AM_NOMODULE", "Non è presente nessun modulo per il quale attivare la cache.");
define("_MD_AM_DTPLSET", "Template set di default");
define("_MD_AM_SSLLINK", "URL della pagina SSL per il login");

// added for mailer
define("_MD_AM_MAILER", "Impostazione Mail");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "Dall'indirizzo");
define("_MD_AM_MAILFROMDESC", "");
define("_MD_AM_MAILFROMNAME", "Dal nome");
define("_MD_AM_MAILFROMNAMEDESC", "");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "Dall' utente");
define("_MD_AM_MAILFROMUIDDESC", "Quando il sistema invia un Messaggio Privato, quale nome utente deve comparire come mittente?");
define("_MD_AM_MAILERMETHOD", "Metodo di consegna mail");
define("_MD_AM_MAILERMETHODDESC", "Metodo usato per la consegna delle mail. Di default è \"mail\", usane altri solo se sei sicuro.");
define("_MD_AM_SMTPHOST", "SMTP host(s)");
define("_MD_AM_SMTPHOSTDESC", "Lista dei server SMTP con i quali tentare la connessione.");
define("_MD_AM_SMTPUSER", "SMTPAuth username");
define("_MD_AM_SMTPUSERDESC", "Nome utente per la connessione all'host SMTP con SMTPAuth.");
define("_MD_AM_SMTPPASS", "SMTPAuth password");
define("_MD_AM_SMTPPASSDESC", "Password per la connessione all'host SMTP con SMTPAuth.");
define("_MD_AM_SENDMAILPATH", "Percorso per sendmail");
define("_MD_AM_SENDMAILPATHDESC", "Percorso per il programma Sendmail (o alternativo) sul webserver.");
define("_MD_AM_THEMEOK", "Temi selezionabili");
define("_MD_AM_THEMEOKDSC", "Seleziona quali temi possono scegliere gli utenti come tema di default");


// Xoops Authentication constants
define('_MD_AM_AUTH_CONFOPTION_XOOPS', 'Database Xoops');
define('_MD_AM_AUTH_CONFOPTION_LDAP', 'Standard Directory LDAP');
define('_MD_AM_AUTH_CONFOPTION_AD', 'Microsoft Active Directory &copy');
define('_MD_AM_AUTHENTICATION', 'Opzioni di autenticazione');
define('_MD_AM_AUTHMETHOD', 'Metodo di autenticazione');
define('_MD_AM_AUTHMETHODDESC', 'Il metodo che si intende utilizzare per l\'accesso delgi utenti.');
define('_MD_AM_LDAP_MAIL_ATTR', 'LDAP - Campo Mail');
define('_MD_AM_LDAP_MAIL_ATTR_DESC','Nome dell\'attributo E-Mail nella vostra directory LDAP.');
define('_MD_AM_LDAP_NAME_ATTR','LDAP - Campo Common Name');
define('_MD_AM_LDAP_NAME_ATTR_DESC','Nome dell\'attributo Common Name nella vostra directory LDAP.');
define('_MD_AM_LDAP_SURNAME_ATTR','LDAP - Campo Surname');
define('_MD_AM_LDAP_SURNAME_ATTR_DESC','Nome dell\'attributo Surname nella vostra directory LDAP.');
define('_MD_AM_LDAP_GIVENNAME_ATTR','LDAP - Campo Given Name');
define('_MD_AM_LDAP_GIVENNAME_ATTR_DSC','Nome dell\'attributo Given Name nella vostra directory LDAP.');
define('_MD_AM_LDAP_BASE_DN', 'LDAP - DN Base');
define('_MD_AM_LDAP_BASE_DN_DESC', 'Il DN (Distinguished Name) base della vostra directory LDAP.');
define('_MD_AM_LDAP_PORT','LDAP - Numero di Porta');
define('_MD_AM_LDAP_PORT_DESC','Il numero di porta necessario per accedere alla directory del vostro server LDAP.');
define('_MD_AM_LDAP_SERVER','LDAP - Nome del server');
define('_MD_AM_LDAP_SERVER_DESC','Il nome della vostra directory sul server LDAP.');

define('_MD_AM_LDAP_MANAGER_DN', 'DN del gestore LDAP');
define('_MD_AM_LDAP_MANAGER_DN_DESC', 'DN autorizzato a fare ricerche (es. manager)');
define('_MD_AM_LDAP_MANAGER_PASS', 'Password del gestore LDAP');
define('_MD_AM_LDAP_MANAGER_PASS_DESC', 'La passowrd dell\'utente autorizzato a fare ricerche');
define('_MD_AM_LDAP_VERSION', 'LDAP - Versione protocollo');
define('_MD_AM_LDAP_VERSION_DESC', 'La versione di protocollo LDAP: 2 o 3');
define('_MD_AM_LDAP_USERS_BYPASS', ' Utenti Xoops esclusi dall\'autenticazione LDAP');
define('_MD_AM_LDAP_USERS_BYPASS_DESC', 'Utenti cui è permesso di non effettuare il login LDAP.<br />Login diretto in Xoops<br />Separare ogni nome utente con <strong>|</strong>');

define("_MD_AM_LDAP_USETLS", "Utilizza una connessione TLS");
define("_MD_AM_LDAP_USETLS_DESC", "Imposta una conessione TLS (Transport Layer Security).<BR />TLS utlizza di default la porta 389.<BR />" .
								  " La versione LDAP deve essere impostata sul valore '3'.");

define('_MD_AM_LDAP_LOGINLDAP_ATTR','Attributo LDAP da utilzzare per cercare un utente');
define('_MD_AM_LDAP_LOGINLDAP_ATTR_D','Quando è abiltata l\'opzione "Utilizzare il nome utente per il DN" deve corrispondere al nome utente (uid) Xoops');
define('_MD_AM_LDAP_LOGINNAME_ASDN', 'Utilizzare il nome utente per il DN');
define('_MD_AM_LDAP_LOGINNAME_ASDN_D', 'Il nome utente XOOPS verrà usato nel DN LDAP<br />(es : uid=<loginname>,dc=xoops,dc=org)<br />Il dato viene letto direttamente dal server LDAP, senza ricerca.');

define('_MD_AM_LDAP_FILTER_PERSON', 'Filtro per la ricerca utente usato da LDAP');
define('_MD_AM_LDAP_FILTER_PERSON_DESC', 'Filtro speciale LDAP per la ricerca di un utente. @@loginname@@ viene sostituito dall\id di accesso dell\'utente<br /> LASCIARE IN BIANCO SE NON SI CONOSCE IL CODICE!' .
		'<br />Es : (&(objectclass=person)(samaccountname=@@loginname@@)) per AD' .
		'<br />Es : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) per LDAP');

define('_MD_AM_LDAP_DOMAIN_NAME', 'Nome del dominio');
define('_MD_AM_LDAP_DOMAIN_NAME_DESC', 'Nome domino Windows (solo per server ADS e NT)');

define('_MD_AM_LDAP_PROVIS', 'Generazione automatica degli account Xoops');
define('_MD_AM_LDAP_PROVIS_DESC', 'Crea un database utenti xoops se non ne esiste già uno');

define('_MD_AM_LDAP_PROVIS_GROUP', 'Gruppo di default');
define('_MD_AM_LDAP_PROVIS_GROUP_DSC', 'I nuovi utenti vengono inseriti in questi gruppi');

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Mappatura campi server Xoops-Auth");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Definisci qui la corrispondenza tra il campo del database Xoops e il campo del sistema di autenticazione LDAP." .
		"<br /><br />Formato: [Campo Databse Xoops]=[Attributo sistema LDAP]" .
		"<br />per esempio : email=mail" .
		"<br />Separate ciascuna coppia di campi con <b>|</b>" .
		"<br /><br />!! Per utenti esperti !!");
		
define("_MD_AM_LDAP_PROVIS_UPD", "Tieni aggiornata la gestione dell'account Xoops");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "L'account utente Xoops verrà sempre sincronizzato con il server di autenticazione");



define("_MD_AM_CPANEL", "GUI del pannello di controllo");
define("_MD_AM_CPANELDSC", "Per il backend");

define("_MD_AM_WELCOMETYPE", "Invia messaggio di benvenuto");
define("_MD_AM_WELCOMETYPE_DESC", "Metodo di invio del messaggio di conferma per avvenuta registrazione.");
define("_MD_AM_WELCOMETYPE_EMAIL", "Email");
define("_MD_AM_WELCOMETYPE_PM", "Messaggio privato");
define("_MD_AM_WELCOMETYPE_BOTH", "Email e messaggio privato");

?>