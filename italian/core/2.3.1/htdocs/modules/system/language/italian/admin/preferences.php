<?php
// -------------------------------------------------------------------------------- //
// Updated by Ianez - Xoops Italia Staff
// Original translation by Marco Ragogna (blueangel)
// Published by Xoops Italian Official Support Site - www.xoopsitalia.org
// -------------------------------------------------------------------------------- //
// $Id: preferences.php 1970 2008-08-24 02:16:51Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define('_MD_AM_SITEPREF','Preferenze');
define('_MD_AM_SITENAME','Nome del sito');
define('_MD_AM_SLOGAN','Slogan del sito');
define('_MD_AM_ADMINML','Indirizzo email dell\'amministratore');
define('_MD_AM_LANGUAGE','Lingua principale');
define('_MD_AM_STARTPAGE','Modulo di default per la pagina iniziale ');
define('_MD_AM_NONE','Nessuno');
define('_MD_AM_SERVERTZ','Fuso orario del server');
define('_MD_AM_DEFAULTTZ','Fuso orario di default');
define('_MD_AM_DTHEME','Tema di default');
define('_MD_AM_THEMESET','Set Tema');
define('_MD_AM_ANONNAME','Nick per gli utenti anonimi');
define('_MD_AM_MINPASS','Lunghezza minima della password');
define('_MD_AM_NEWUNOTIFY','Si desidera ricevere un avviso via email quando un nuovo utente si registra?');
define('_MD_AM_SELFDELETE','Consentire agli utenti di eliminare il loro account?');
define('_MD_AM_LOADINGIMG','Mostrare l\'immagine di caricamento...?');
define('_MD_AM_USEGZIP','Utilizzare la compressione gzip?');
define('_MD_AM_UNAMELVL','Selezionare il livello di restrizione per i nomi scelti dagli utenti');
define('_MD_AM_STRICT','Stretto (solo lettere e numeri)');
define('_MD_AM_MEDIUM','Medio');
define('_MD_AM_LIGHT','Leggero (raccomandato per lingue multi-byte)');
define('_MD_AM_USERCOOKIE','Nome del cookie utente');
define("_MD_AM_USERCOOKIEDSC","Se viene impostato un valore verr&agrave; visualizzata l'opzione 'Ricordami' per il login dell'utente. Se un utente seleziona tale opzione il suo login avverr&agrave; in automatico.<br />Il cookie ha la durata di un anno.");
define('_MD_AM_USEMYSESS','Utilizzare sessioni personalizzate');
define('_MD_AM_USEMYSESSDSC','Selezionare \'S&igrave;\' per personalizzare i valori della sessione.');
define('_MD_AM_SESSNAME','Nome sessione');
define('_MD_AM_SESSNAMEDSC','Il nome personalizzato della sessione. <br />(Valido solo se \'Utilizza sessioni personalizzate\' &egrave; attivo)');
define('_MD_AM_SESSEXPIRE','Durata della sessione');
define('_MD_AM_SESSEXPIREDSC','Durata massima della sessione in minuti.<br />(Valido solo se \'Utilizza sessioni personalizzate\' &egrave; attivo). Funziona solo se si utilizza PHP 4.2.0 o successive.)');
define('_MD_AM_BANNERS','Attivare rotazione banner?');
define('_MD_AM_MYIP','Il tuo indirizzo IP');
define('_MD_AM_MYIPDSC','Questo IP non verr&agrave; conteggiato per i click dei banner');
define('_MD_AM_ALWDHTML','Tag HTML consentiti in tutti i messaggi.');
define('_MD_AM_INVLDMINPASS','Valore per la lunghezza minima della password non valido.');
define('_MD_AM_INVLDUCOOK','Valore del cookie utente non valido.');
define('_MD_AM_INVLDSCOOK','Valore per il cookie di sessione non valido.');
define('_MD_AM_INVLDSEXP','Valore di durata della sessioni non valido.');
define('_MD_AM_ADMNOTSET','L\'email dell\'amministratore non &egrave; stata impostata.');
define('_MD_AM_YES','S&igrave;');
define('_MD_AM_NO','No');
define('_MD_AM_DONTCHNG','Non modificare!');
define('_MD_AM_REMEMBER','Ricordare di impostare a CHMOD 666 (scrittura/lettura) questo file per consentire al sistema di modificarlo.');
define('_MD_AM_IFUCANT','Se non puoi modificare i permessi del file, modifica il file a mano e poi ricaricalo sul server.');

define('_MD_AM_COMMODE','Modalit&agrave; di visualizzazione dei commenti');
define('_MD_AM_COMORDER','Ordine di visualizzazione dei commenti');
define('_MD_AM_ALLOWHTML','Consentire i tag HTML nei commenti degli utenti?');
define('_MD_AM_DEBUGMODE','Modalit&agrave; di debug');
define('_MD_AM_DEBUGMODEDSC','Vi sono varie opzioni di visualizzazione, ma un sito in produzione non dovrebbe avere nessuna di queste abilitate.');
define('_MD_AM_AVATARALLOW','Consentire il caricamento sul server di avatar personali?');
define('_MD_AM_AVATARMP','Numero minimo di messaggi necessari');
define('_MD_AM_AVATARMPDSC','Inserire il numero minimo di messaggi necessari per consentire a un utente di caricare un avatar personalizzato sul server.');
define('_MD_AM_AVATARW','Larghezza massima dell\'avatar (pixel)');
define('_MD_AM_AVATARH','Altezza massima dell\'avatar (pixel)');
define('_MD_AM_AVATARMAX','Dimensione massima del file (byte)');
define('_MD_AM_AVATARCONF','Impostazioni personalizzate dell\'avatar');
define('_MD_AM_CHNGUTHEME','Modificare tutti i temi impostati dagli utenti');
define('_MD_AM_NOTIFYTO','Selezionare il gruppo al quale inviare un avviso quando si registra un nuovo utente');
define('_MD_AM_ALLOWTHEME','Consentire agli utenti di scegliere il tema preferito?');
define('_MD_AM_ALLOWIMAGE','Consentire agli utenti di inserire immagini nei messaggi?');

define('_MD_AM_USERACTV','Richiedere l\'attivazione da parte dell\'utente (raccomandato)');
define('_MD_AM_AUTOACTV','Attivare in automatico');
define('_MD_AM_ADMINACTV','Attivazione effettuata dagli amministratori');
define('_MD_AM_ACTVTYPE','Selezionare la modalit&agrave; di attivazione per i nuovi utenti');
define('_MD_AM_ACTVGROUP','Selezionare il gruppo al quale inviare l\'email di attivazione');
define('_MD_AM_ACTVGROUPDSC','Valido solo quando si seleziona \'Attivazione effettuata dagli amministratori\'.');
define('_MD_AM_USESSL','Utilizzare il metodo SSL per il login?');
define('_MD_AM_SSLPOST','Nome variabile SSL');
define('_MD_AM_SSLPOSTDSC','Il nome della variabile usata per trasferire valori di sessione con il metodo POST. Se non sei sicuro, scegli un qualsiasi valore che sia difficile da indovinare.');
define('_MD_AM_DEBUGMODE0','Nessun debug');
define('_MD_AM_DEBUGMODE1','Debug (fondo pagina)');
define('_MD_AM_DEBUGMODE2','Debug (finestra popup)');
define('_MD_AM_DEBUGMODE3','Debug Smarty del template (finestra popup)');
define('_MD_AM_MINUNAME','Lunghezza minima del nome utente');
define('_MD_AM_MAXUNAME','Lunghezza massima del nome utente');
define('_MD_AM_GENERAL','Impostazioni Generali');
define('_MD_AM_USERSETTINGS','Opzioni registrazione  utente e avatar');
define('_MD_AM_ALLWCHGMAIL','Consentire agli utenti di cambiare il loro indirizzo email?');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','IP Bloccati');
define('_MD_AM_BADEMAILS','Elencare gli indirizzi email che non possono essere utilizzati in un profilo utente.');
define('_MD_AM_BADEMAILSDSC','Separare ciascun indirizzo con <strong>|</strong>, case insensitive, regex abilitata.');
define('_MD_AM_BADUNAMES','Elencare i termini che non possono essere scelti come nome utente');
define('_MD_AM_BADUNAMESDSC','Separare ciascun nome con <strong>|</strong>, case insensitive, regex abilitata.');
define('_MD_AM_DOBADIPS','Abilitare il blocco (ban) degli indirizzi IP?');
define('_MD_AM_DOBADIPSDSC','Gli utenti con l\'indirizzo IP specificato non riusciranno ad accedere al sito.');
define('_MD_AM_BADIPS','Inserire gli indirizzi IP da bloccare.<br />Separare ciascun valore con <strong>|</strong>, case insensitive, regex abilitata.');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc non consentir&agrave; l\'accesso ai visitatori con indirizzo IP che inizia con aaa.bbb.ccc<br />aaa.bbb.ccc$ non consentir&agrave; l\'accesso ai visitatori con indirizzo IP che finisce con aaa.bbb.ccc<br />aaa.bbb.ccc non consentir&agrave; l\'accesso ai visitatori con indirizzo IP che contiene aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','Preferenze');
define('_MD_AM_METAKEY','Parole chiave (keywords)');
define('_MD_AM_METAKEYDSC','Le parole chiave sono termini (metatag) che sintetizzano i contenuti offerti dal tuo sito. Inserisci ogni parola separandola con una virgola o uno spazio. (Es. XOOPS,PHP,mySQL,portale italiano).');
define('_MD_AM_METARATING','Meta Rating');
define('_MD_AM_METARATINGDSC','Il metatag \'rating\' definisce il target d\'et&agrave; del tuo sito e dei suoi contenuti.');
define('_MD_AM_METAOGEN','Generale');
define('_MD_AM_METAO14YRS','Maggiori di 14 anni');
define('_MD_AM_METAOREST','Ristretto');
define('_MD_AM_METAOMAT','Adulti');
define('_MD_AM_METAROBOTS','Meta Robots');
define('_MD_AM_METAROBOTSDSC','Il metatag \'robots\' suggerisce ai motori di ricerca il comportamento del loro \'spider\' rispetto alle pagine del sito.');
define('_MD_AM_INDEXFOLLOW','Index, Follow (Archivia la pagina e ne segue i link)');
define('_MD_AM_NOINDEXFOLLOW','NoIndex, Follow (Non archivia la pagina ma ne segue i link)');
define('_MD_AM_INDEXNOFOLLOW','Index, NoFollow (Archivia la pagina ma non ne fa seguire i link)');
define('_MD_AM_NOINDEXNOFOLLOW','NoIndex, NoFollow (Non archivia la pagina e non ne fa seguire i link)');
define('_MD_AM_METAAUTHOR','Meta Author');
define('_MD_AM_METAAUTHORDSC','Il metatag \'author\' definisce l\'autore del documento che si sta leggendo. Il valore pu&ograve; essere: il nome, l\'indirizzo email del webmaster, il nome dell\'azienda o l\'URL.');
define('_MD_AM_METACOPYR','Meta Copyright');
define('_MD_AM_METACOPYRDSC','Il metatag \'copyright\' definisce qualsiasi dichiarazione si voglia divulgare circa i diritti di propriet&agrave; del materiale pubblicato nel sito.');
define('_MD_AM_METADESC','Meta Description');
define('_MD_AM_METADESCDSC','Il metatag \'description\' &egrave; una breve sintesi del contenuto e degli argomenti del sito');
define('_MD_AM_METAFOOTER','Metatag e Pi&egrave; di pagina');
define('_MD_AM_FOOTER','Pi&egrave; di pagina');
define('_MD_AM_FOOTERDSC','Inserire eventuali link iniziando da http://, altrimenti il collegamento non funzioner&agrave; correttamente nella pagine dei moduli.');
define('_MD_AM_CENSOR','Impostazioni di Censura delle parole');
define('_MD_AM_DOCENSOR','Abilitare la censura di parole indesiderate?');
define('_MD_AM_DOCENSORDSC','Se questa opzione viene abilitata i termini inseriti saranno censurati. Quest\'opzione pu&ograve; essere disabilitata per aumentare la velocit&agrave; del sito.');
define('_MD_AM_CENSORWRD','Parole da censurare');
define('_MD_AM_CENSORWRDDSC','Inserire le parole che dovrebbero essere censurate nei messaggi degli utenti.<br />Separare ogni termine con <strong>|</strong>, case insensitive.');
define('_MD_AM_CENSORRPLC','Caratteri sostitutivi delle parole censurate');
define('_MD_AM_CENSORRPLCDSC','Le parole censurate saranno sostituite con i caratteri contenuti in questa casella');

define('_MD_AM_SEARCH','Impostazioni della Ricerca');
define('_MD_AM_DOSEARCH','Abilitare ricerche globali?');
define('_MD_AM_DOSEARCHDSC','Consentire di cercare messaggi\elementi all\'interno del sito.');
define('_MD_AM_MINSEARCH','Lunghezza minima delle parole chiave');
define('_MD_AM_MINSEARCHDSC','Numero minimo di caratteri che l\'utente deve inserire per effettuare una ricerca.');
define('_MD_AM_MODCONFIG','Opzioni di configurazione dei moduli');
define('_MD_AM_DSPDSCLMR','Mostrare le condizioni d\'uso?');
define('_MD_AM_DSPDSCLMRDSC','Selezionare \'S&igrave;\' per mostrare le condizioni d\'uso nel modulo di registrazione utente');
define('_MD_AM_REGDSCLMR','Condizioni d\'uso per la registrazione');
define('_MD_AM_REGDSCLMRDSC','Inserire un testo che descriva i termini e le condizioni d\'uso per la registrazione e l\'accesso al sito');
define('_MD_AM_ALLOWREG','Consentire la registrazione di nuovi utenti?');
define('_MD_AM_ALLOWREGDSC','Selezionare \'S&igrave;\' per consentire l\'iscrizione di nuovi utenti al sito');
define('_MD_AM_THEMEFILE','Permettere e visualizzare le modifiche a temi e templates?');
define('_MD_AM_THEMEFILEDSC','Se questa opzione &egrave; abilitata il tema e/o i templates modificati saranno ricompilati in automatico ad ogni aggiornamento della pagina visualizzando eventuali modifiche.<br />Sconsigliato su siti in produzione.');
define('_MD_AM_CLOSESITE','Chiudere il sito?');
define('_MD_AM_CLOSESITEDSC','Selezionare \'S&igrave;\' per chiudere il sito e permettere l\'accesso solo gli utenti appartenenti ai gruppi selezionati');
define('_MD_AM_CLOSESITEOK','Selezionare i gruppi a cui &egrave; consentito l\'accesso quando il sito &egrave; chiuso');
define('_MD_AM_CLOSESITEOKDSC','Gli utenti del gruppo Webmaster hanno sempre accesso al sito');
define('_MD_AM_CLOSESITETXT','Ragioni della chiusura del sito');
define('_MD_AM_CLOSESITETXTDSC','Il testo da visualizzare quando il sito &egrave; chiuso. <br />E\' possibile utilizzare codice html.');
define('_MD_AM_SITECACHE','Tempo di cache generale del sito');
define('_MD_AM_SITECACHEDSC','Saranno archiviati nella cache tutti i contenuti del sito per il tempo specificato, allo scopo di aumentare le prestazioni. Questo valore sostituisce la durata della cache di moduli, blocchi e altri elementi per cui &egrave; impostato un tempo cache.');
define('_MD_AM_MODCACHE','Tempo di cache dei singoli moduli');
define('_MD_AM_MODCACHEDSC','Saranno archiviati nella cache tutti i contenuti di un modulo per il tempo specificato, allo scopo di aumentare le prestazioni. Questo valore sostituisce la durata della cache in quegli elementi dei moduli per cui &egrave; impostato un tempo cache.');
define('_MD_AM_NOMODULE','Non esistono moduli per cui impostare la cache.');
define('_MD_AM_DTPLSET','Template set di default');
define('_MD_AM_SSLLINK','Indirizzo della pagina di login in SSL');

// added for mailer
define('_MD_AM_MAILER','Impostazioni invio Email');
define('_MD_AM_MAILER_MAIL','');
define('_MD_AM_MAILER_SENDMAIL','');
define('_MD_AM_MAILER_','');
define('_MD_AM_MAILFROM','Dall\'indirizzo email');
define('_MD_AM_MAILFROMDESC','Se lasciato vuoto comparir&agrave; l\'indirizzo dell\'amministratore');
define('_MD_AM_MAILFROMNAME','DA (nome mittente)');
define('_MD_AM_MAILFROMNAMEDESC','');
// RMV-NOTIFY
define('_MD_AM_MAILFROMUID','DA (nome utente)');
define('_MD_AM_MAILFROMUIDDESC','L\'utente che compare come mittente quando il sistema invia un messaggio privato');
define('_MD_AM_MAILERMETHOD','Metodo di spedizione delle mail');
define('_MD_AM_MAILERMETHODDESC','Metodo utilizzato per spedire le mail. L\'impostazione di default &egrave; \'PHP mail()\', utilizzane un\'altra solo se questa crea problemi');
define('_MD_AM_SMTPHOST','Host SMTP');
define('_MD_AM_SMTPHOSTDESC','Elenco dei server SMTP cui tentare di connettersi.');
define('_MD_AM_SMTPUSER','Nome utente SMTPAuth');
define('_MD_AM_SMTPUSERDESC','Nome utente per la connessione a un host SMTP con SMTPAuth.');
define('_MD_AM_SMTPPASS','Password SMTPAuth');
define('_MD_AM_SMTPPASSDESC','Password per la connessione a un host SMTP con SMTPAuth.');
define('_MD_AM_SENDMAILPATH','Percorso di sendmail');
define('_MD_AM_SENDMAILPATHDESC','Percorso del programma sendmail (o sostituto) sul server web.');
define('_MD_AM_THEMEOK','Temi selezionabili');
define('_MD_AM_THEMEOKDSC','I temi che gli utenti possono attivare se viene visualizzato il blocco temi.');


// Xoops Authentication constants
define('_MD_AM_AUTH_CONFOPTION_XOOPS','Database Xoops');
define('_MD_AM_AUTH_CONFOPTION_LDAP','Standard Directory LDAP');
define('_MD_AM_AUTH_CONFOPTION_AD','Microsoft Active Directory &copy');
define('_MD_AM_AUTHENTICATION','Opzioni di autenticazione');
define('_MD_AM_AUTHMETHOD','Metodo di autenticazione');
define('_MD_AM_AUTHMETHODDESC','Il metodo che si intende utilizzare per l\'accesso degli utenti.');
define('_MD_AM_LDAP_MAIL_ATTR','LDAP - Campo Mail');
define('_MD_AM_LDAP_MAIL_ATTR_DESC','Nome dell\'attributo E-Mail nella vostra directory LDAP.');
define('_MD_AM_LDAP_NAME_ATTR','LDAP - Campo Common Name');
define('_MD_AM_LDAP_NAME_ATTR_DESC','Nome dell\'attributo Common Name nella vostra directory LDAP.');
define('_MD_AM_LDAP_SURNAME_ATTR','LDAP - Campo Surname');
define('_MD_AM_LDAP_SURNAME_ATTR_DESC','Nome dell\'attributo Surname nella vostra directory LDAP.');
define('_MD_AM_LDAP_GIVENNAME_ATTR','LDAP - Campo Given Name');
define('_MD_AM_LDAP_GIVENNAME_ATTR_DSC','Nome dell\'attributo Given Name nella vostra directory LDAP.');
define('_MD_AM_LDAP_BASE_DN','LDAP - DN Base');
define('_MD_AM_LDAP_BASE_DN_DESC','Il DN (Distinguished Name) base della vostra directory LDAP.');
define('_MD_AM_LDAP_PORT','LDAP - Numero di Porta');
define('_MD_AM_LDAP_PORT_DESC','Il numero di porta necessario per accedere alla directory del vostro server LDAP.');
define('_MD_AM_LDAP_SERVER','LDAP - Nome del server');
define('_MD_AM_LDAP_SERVER_DESC','Il nome della vostra directory sul server LDAP.');

define('_MD_AM_LDAP_MANAGER_DN','DN del gestore LDAP');
define('_MD_AM_LDAP_MANAGER_DN_DESC','DN autorizzato a fare ricerche (es. manager)');
define('_MD_AM_LDAP_MANAGER_PASS','Password del gestore LDAP');
define('_MD_AM_LDAP_MANAGER_PASS_DESC','La passowrd dell\'utente autorizzato a fare ricerche');
define('_MD_AM_LDAP_VERSION','LDAP - Versione protocollo');
define('_MD_AM_LDAP_VERSION_DESC','La versione di protocollo LDAP: 2 o 3');
define('_MD_AM_LDAP_USERS_BYPASS',' Utenti Xoops esclusi dall\'autenticazione LDAP');
define('_MD_AM_LDAP_USERS_BYPASS_DESC','Utenti cui &egrave; permesso di non effettuare il login LDAP.<br />Login diretto in Xoops<br />Separare ogni nome utente con <strong>|</strong>');
								  
define("_MD_AM_LDAP_USETLS","Utilizza una connessione TLS");
define("_MD_AM_LDAP_USETLS_DESC","Imposta una connessione TLS (Transport Layer Security).<BR />TLS utlizza di default la porta 389.<BR />" .
								  " La versione LDAP deve essere impostata sul valore '3'.");

define('_MD_AM_LDAP_LOGINLDAP_ATTR','Attributo LDAP da utilzzare per cercare un utente');
define('_MD_AM_LDAP_LOGINLDAP_ATTR_D','Quando &egrave; abilitata l\'opzione "Utilizzare il nome utente per il DN" deve corrispondere al nome utente (uid) Xoops');
define('_MD_AM_LDAP_LOGINNAME_ASDN','Utilizzare il nome utente per il DN');
define('_MD_AM_LDAP_LOGINNAME_ASDN_D','Il nome utente XOOPS verr&agrave; usato nel DN LDAP<br />(es : uid=<loginname>,dc=xoops,dc=org)<br />Il dato viene letto direttamente dal server LDAP, senza ricerca.');

define('_MD_AM_LDAP_FILTER_PERSON','Filtro per la ricerca utente usato da LDAP');
define('_MD_AM_LDAP_FILTER_PERSON_DESC','Filtro speciale LDAP per la ricerca di un utente. @@loginname@@ viene sostituito dall\id di accesso dell\'utente<br /> LASCIARE IN BIANCO SE NON SI CONOSCE IL CODICE!' .
		'<br />Es : (&(objectclass=person)(samaccountname=@@loginname@@)) per AD' .
		'<br />Es : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) per LDAP');

define('_MD_AM_LDAP_DOMAIN_NAME','Nome del dominio');
define('_MD_AM_LDAP_DOMAIN_NAME_DESC','Nome domino Windows (solo per server ADS e NT)');

define('_MD_AM_LDAP_PROVIS','Generazione automatica degli account Xoops');
define('_MD_AM_LDAP_PROVIS_DESC','Creare un database utenti xoops se non ne esiste gi&agrave; uno');

define('_MD_AM_LDAP_PROVIS_GROUP','Gruppo di default');
define('_MD_AM_LDAP_PROVIS_GROUP_DSC','I nuovi utenti vengono inseriti in questi gruppi');

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Mappatura campi server Xoops-Auth");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Definire qui la corrispondenza tra il campo del database Xoops e il campo del sistema di autenticazione LDAP." .
		"<br /><br />Formato: [Campo Databse Xoops]=[Attributo sistema LDAP]" .
		"<br />per esempio : email=mail" .
		"<br />Separate ciascuna coppia di campi con <b>|</b>" .
		"<br /><br />!! Per utenti esperti !!");
		
define("_MD_AM_LDAP_PROVIS_UPD","Sincronizzazione della gestione dell'account Xoops");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","L'account utente Xoops verr&agrave; sempre sincronizzato con il server di autenticazione");


define("_MD_AM_CPANEL","Tema dell'Amministrazione");
define("_MD_AM_CPANELDSC","Layout alternativi per il lato admin.<br />Installabile nella cartella /modules/system/class/gui.");

define("_MD_AM_WELCOMETYPE","Invio del messaggio di benvenuto");
define("_MD_AM_WELCOMETYPE_DESC","Modalita di invio del messaggio di benvenuto per i nuovi utenti registrati.");
define("_MD_AM_WELCOMETYPE_EMAIL","Email");
define("_MD_AM_WELCOMETYPE_PM","Messaggio");
define("_MD_AM_WELCOMETYPE_BOTH","Email e messaggio");

?>
