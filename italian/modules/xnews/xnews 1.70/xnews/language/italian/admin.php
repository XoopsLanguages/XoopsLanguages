<?php
// $Id: admin.php,v 1.70 2010/09/01 17:48:07 dnprossi Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_NW_DBUPDATED","Database aggiornato con successo!");
define("_AM_NW_CONFIG","Amministrazione Notizie");
define("_AM_NW_AUTOARTICLES","Notizie automatizzate");
define("_AM_NW_STORYID","ID Notizia");
define("_AM_NW_TITLE","Titolo");
define("_AM_NW_TOPIC","Argomento");
define("_AM_NW_POSTER","Autore");
define("_AM_NW_PROGRAMMED","Data/Ora Programmata");
define("_AM_NW_ACTION","Azione");
define("_AM_NW_EDIT","Modifica");
define("_AM_NW_DELETE","Cancella");
define("_AM_NW_LAST10ARTS","Ultimi 10 Notizie");
define("_AM_NW_PUBLISHED","Pubblicata"); // Published Date
define("_AM_NW_GO","Vai!");
define("_AM_NW_EDITARTICLE","Modifica Notizia");
define("_AM_NW_POSTNEWARTICLE","Invia Notizia");
define("_AM_NW_ARTPUBLISHED","La tua notizia è stata pubblicata!");
define("_AM_NW_HELLO","Ciao %s,");
define("_AM_NW_YOURARTPUB","La notizia inviata al nostro sito è stata pubblicata.");
define("_AM_NW_TITLEC","Titolo: ");
define("_AM_NW_URLC","Indirizzo: ");
define("_AM_NW_PUBLISHEDC","Pubblicata: ");
define("_AM_NW_RUSUREDEL","Sei certo di voler cancellare questa notizia e tutti i suoi commenti?");
define("_AM_NW_YES","Sì");
define("_AM_NW_NO","No");
define("_AM_NW_INTROTEXT","Testo introduttivo");
define("_AM_NW_EXTEXT","Notizia estesa");
define("_AM_NW_ALLOWEDHTML","Consenti i tag HTML:");
define("_AM_NW_DISAMILEY","Disabilita le faccine");
define("_AM_NW_DISHTML","Disabilita i tag HTML");
define("_AM_NW_APPROVE","Approva");
define("_AM_NW_MOVETOTOP","Muovi questa notizia all'inizio");
define("_AM_NW_CHANGEDATETIME","Modifica data/ora di pubblicazione");
define("_AM_NW_NOWSETTIME","Al momento è impostata a: %s"); // %s is datetime of publish
define("_AM_NW_CURRENTTIME","L'ora corrente è: %s");  // %s is the current datetime
define("_AM_NW_SETDATETIME","Imposta la data/ora di pubblicazione");
define("_AM_NW_MONTHC","Mese:");
define("_AM_NW_DAYC","Giorno:");
define("_AM_NW_YEARC","Anno:");
define("_AM_NW_TIMEC","Ora:");
define("_AM_NW_PREVIEW","Anteprima");
define("_AM_NW_SAVE","Salva");
define("_AM_NW_PUBINHOME","Pubblica sulla pagina principale?");
define("_AM_NW_ADD","Aggiungi");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_NW_ADDMTOPIC","Aggiungi un argomento principale");
define("_AM_NW_TOPICNAME","Nome dell'argomento");

define("_AM_NW_MAX40CHAR","(max: 255 caratteri)");
define("_AM_NW_TOPICIMG","Immagine dell'argomento");
define("_AM_NW_IMGNAEXLOC","nome immagine + estensione, con l'immagine situata in %s");
define("_AM_NW_FEXAMPLE","es. giochi.gif");
define("_AM_NW_ADDSUBTOPIC","Aggiungi un sotto argomento");
define("_AM_NW_IN","in");
define("_AM_NW_MODIFYTOPIC","Modifica Argomento");
define("_AM_NW_MODIFY","Modifica");
define("_AM_NW_PARENTTOPIC","Argomento Padre");
define("_AM_NW_SAVECHANGE","Salva modifiche");
define("_AM_NW_DEL","Cancella");
define("_AM_NW_CANCEL","Annulla");
define("_AM_NW_WAYSYWTDTTAL","ATTENZIONE: Sei certo di voler cancellare questo argomento e tutti i suoi gli articoli e commenti?");


// Added in Beta6
define("_AM_NW_TOPICSMNGR","Gestione Argomenti");
define("_AM_NW_PEARTICLES","Gestione Notizie");
define("_AM_NW_NEWSUB","Nuova Notizia");
define("_AM_NW_POSTED","Inviato");
define("_AM_NW_GENERALCONF","Impostazioni generali");

// Added in RC2
define("_AM_NW_TOPICDISPLAY","Mostra l'immagine dell'argomento?");
define("_AM_NW_TOPICALIGN","Posizione");
define("_AM_NW_RIGHT","Destra");
define("_AM_NW_LEFT","Sinistra");

define("_AM_NW_EXPARTS","Scadenza notizia");
define("_AM_NW_EXPIRED","Scaduta");
define("_AM_NW_CHANGEEXPDATETIME","Cambia la data/ora di scadenza");
define("_AM_NW_SETEXPDATETIME","Imposta la data/ora di scadenza");
define("_AM_NW_NOWSETEXPTIME","Attualmente è impostata a: %s");

// Added in RC3
define("_AM_NW_ERRORTOPICNAME","Devi inserire un titolo per l'argomento!");
define("_AM_NW_EMPTYNODELETE","Non c'&acute; niente da cancellare!");

// Added 240304 (Mithrandir)
define("_AM_NW_GROUPPERM","Permessi");
define("_AM_NW_SELFILE","Seleziona file da Caricare");

// Added by Hervé
define("_AM_NW_UPLOAD_DBERROR_SAVE","Errore nell'allegare il file alla notizia");
define("_AM_NW_UPLOAD_ERROR","Errore nel caricamento del file");
define("_AM_NW_UPLOAD_ATTACHFILE","File Allegati");
define("_AM_NW_APPROVEFORM","Permessi di Approvazione");
define("_AM_NW_SUBMITFORM","Permessi di Inserimento");
define("_AM_NW_VIEWFORM","Permessi di Visualizzazione");
define("_AM_NW_APPROVEFORM_DESC","Scegli chi può approvare le News");
define("_AM_NW_SUBMITFORM_DESC","Scegli chi può inserire le News");
define("_AM_NW_VIEWFORM_DESC","Scegli chi può vedere quali argomenti");
define("_AM_NW_DELETE_SELFILES","Cancella i file selezionati");
define("_AM_NW_TOPIC_PICTURE","Carica immagine");
define("_AM_NW_UPLOAD_WARNING","<B>Attenzione, non dimenticare di settare i permessi di scrittura per la directory: %s</b>");

define("_AM_NW_UPGRADECOMPLETE","Aggiornamento Completato");
define("_AM_NW_UPDATEMODULE","Aggiorna i template e i blocchi del modulo");
define("_AM_NW_UPGRADEFAILED","Aggiornamento Fallito");
define("_AM_NW_UPGRADE","Aggiorna");
define("_AM_NW_ADD_TOPIC","Aggiungi un Argomento");
define("_AM_NW_ADD_TOPIC_ERROR","Errore, l'argomento esiste già!");
define("_AM_NW_ADD_TOPIC_ERROR1","ERRORE: Questo argomento non può essere selezionato come padre!");
define("_AM_NW_SUB_MENU","Pubblica questo argomento come sottomenu");
define("_AM_NW_SUB_MENU_YESNO","Sottomenu?");
define("_AM_NW_HITS","Visite");
define("_AM_NW_CREATED","Creato");

define("_AM_NW_TOPIC_DESCR","Descrizione dell'argomento");
define("_AM_NW_USERS_LIST","Lista Utenti");
define("_AM_NW_PUBLISH_FRONTPAGE","Pubblica nella pagina principale?");
define("_AM_NW_UPGRADEFAILED1","Impossibile creare la tabella nw_stories_files");
define("_AM_NW_UPGRADEFAILED2","Impossibile modificare la lunghezza del titolo dell'argomento.");
define("_AM_NW_UPGRADEFAILED21","Impossibile aggiungere nuovi campi alla tabella dei nw_topics");
define("_AM_NW_UPGRADEFAILED3","Impossibile creare la tabella nw_stories_votedata");
define("_AM_NW_UPGRADEFAILED4","Impossibile creare i campi 'rating' e 'voti' nella tabella 'story'");
define("_AM_NW_UPGRADEFAILED0","Per favore, annota i messaggi e cerca di correggere i problemi con phpMyAdmin e il file di definizione sql presente nella directory sql del modulo");
define("_AM_NW_UPGR_ACCESS_ERROR","Errore, per usare lo script di upgrade devi essere un admin di questo modulo");
define("_AM_NW_PRUNE_BEFORE","Elimina storie pubblicate prima del");
define("_AM_NW_PRUNE_EXPIREDONLY","Rimuovi solo le storie scadute");
define("_AM_NW_PRUNE_CONFIRM","Attenzione, stai per rimuovere permanentemente le storie pubblicate prima del %s (questa azione non può essere annullata). Parliamo di %s storie.<br />Sei sicuro?");
define("_AM_NW_PRUNE_TOPICS","Limita ai seguenti argomenti");
define("_AM_NW_PRUNENEWS","Elimina Notizie");
define("_AM_NW_EXPORT_NEWS","Esporta Notizie");
define("_AM_NW_EXPORT_NOTHING","Spiacente, non c'è nulla da esportare. Verifica i tuoi criteri");
define("_AM_NW_PRUNE_DELETED","%d storie sono state eliminate");
define("_AM_NW_PERM_WARNING","<h2>Attenzione, hai 3 forms, quindi hai 3 pulsanti 'inserimento'</h2>");
define("_AM_NW_EXPORT_BETWEEN","Esporta le notizie pubblicate tra il");
define("_AM_NW_EXPORT_AND"," e il ");
define("_AM_NW_EXPORT_PRUNE_DSC","Se non selezioni nulla, tutti gli argomenti verranno utilizzati<br />altrimenti, saranno usati solo quelli selezionati");
define("_AM_NW_EXPORT_INCTOPICS","Includi le definizioni degli Argomenti?");
define("_AM_NW_EXPORT_ERROR","Errore durante la creazione del file %s. Operazione interrotta.");
define("_AM_NW_EXPORT_READY","Il tuo file di esportazione xml è pronto per il download. <br>Clicca  <a href='%s'>qui</a> per scaricarlo.<br>Non dimenticare <a href='%s'>di rimuoverlo</a> quando hai finito.");
define("_AM_NW_RSS_URL","URL del feed RSS");
define("_AM_NW_NEWSLETTER","Newsletter");
define("_AM_NW_NEWSLETTER_BETWEEN","Seleziona le notizie pubblicate tra");
define("_AM_NW_NEWSLETTER_READY","Il tuo file newsletter è pronto per il download.<br /><a href='%s'>Clicca su questo link per scaricarlo.</a>.<br />Non dimenticare <a href='%s'>di rimuoverlo</a> quando hai finito.");
define("_AM_NW_DELETED_OK","File cancellato con successo");
define("_AM_NW_DELETED_PB","C'è stato un problema nella cancellazione del file");
define("_AM_NW_STATS0","Statistiche degli argomenti");
define("_AM_NW_STATS","Statistiche");
define("_AM_NW_STATS1","Autori Unici");
define("_AM_NW_STATS2","Totali");
define("_AM_NW_STATS3","Statistiche sugli Articoli");
define("_AM_NW_STATS4","Articoli più letti");
define("_AM_NW_STATS5","Articoli meno letti");
define("_AM_NW_STATS6","Articoli più votati");
define("_AM_NW_STATS7","Autori più letti");
define("_AM_NW_STATS8","Autori più votati");
define("_AM_NW_STATS9","Maggiori Contirbuenti");
define("_AM_NW_STATS10","Statistiche sugli Autori");
define("_AM_NW_STATS11","Conteggio Articoli");
define("_AM_NW_HELP","Aiuto");
define("_AM_NW_MODULEADMIN","Amministrazione del Modulo");
define("_AM_NW_GENERALSET","Preferenze");
define("_AM_NW_GOTOMOD","Vai al Modulo");
define("_AM_NW_NOTHING","Spiacente, niente da scaricare, verifica i criteri!");
define("_AM_NW_NOTHING_PRUNE","Spiacente, nessuna notizia da eliminare, verifica i criteri!");
define("_AM_NW_TOPIC_COLOR","Colore per il Topic");
define("_AM_NW_COLOR","Color");
define("_AM_NW_REMOVE_BR","Converti il tag html &lt;br&gt; in un nuova linea?");
// Added in 1.3 RC2
define("_AM_NW_PLEASE_UPGRADE","<a href='upgrade.php'><font color='#FF0000'>Per favore, aggiorna il modulo!</font></a>");

// Added in verisn 1.50
define("_AM_NW_NEWSLETTER_HEADER","Intestazione");
define("_AM_NW_NEWSLETTER_FOOTER","Piè di Pagina");
define("_AM_NW_NEWSLETTER_HTML_TAGS","Rimuovi i tags html?");
define("_AM_NW_VERIFY_TABLES","Manutenzione tabelle");
define("_AM_NW_METAGEN","Metagen");
define("_AM_NW_METAGEN_DESC","Metagen è un sistema che ti aiuta ad avere una migliore indicizzazione nei motori di ricerca per le tue pagine web.<br />Infatti se inserisci meta keywords e meta descriptions, il modulo creerà automaticamente le chiavi di indicizzazione.");
define("_AM_NW_BLACKLIST","Lista nera");
define("_AM_NW_BLACKLIST_DESC","Le parole in questa lista non saranno usate per creare meta keywords");
define("_AM_NW_BLACKLIST_ADD","Aggiungi");
define("_AM_NW_BLACKLIST_ADD_DSC","Inserisci parole da aggiungere alla lista<br />(una parola per riga)");
define("_AM_NW_META_KEYWORDS_CNT","Ammontare massimo di meta keywords auto-generate");
define("_AM_NW_META_KEYWORDS_ORDER","Ordine delle keywords");
define("_AM_NW_META_KEYWORDS_INTEXT","Creale in ordine di apparizione nel testo");
define("_AM_NW_META_KEYWORDS_FREQ1","Parole in ordine di frequenza");
define("_AM_NW_META_KEYWORDS_FREQ2","Parole in ordine di frequenza al contrario");

// Added in version 1.67 Beta
define("_AM_NW_SUBPREFIX","Sotto-prefisso");

define("_AM_NW_CLONER","Gestore Cloni");
define("_AM_NW_CLONER_CLONES","Cloni");
define("_AM_NW_CLONER_ADD","Aggiungi Clone");
define("_AM_NW_CLONER_ID","ID");
define("_AM_NW_CLONER_NAME","Nome");
define("_AM_NW_CLONER_DIRFOL","Dir/Cartella");
define("_AM_NW_CLONER_VERSION","Versione");

define("_AM_NW_CLONER_NEWNAME","Nome nuovo modulo");
define("_AM_NW_CLONER_NEWNAMEDESC","Avrà effetto anche sulla creazione della nuova cartella. <br /> Le maiuscole/minuscole e spazi vengono ignorati e corretti automaticamente. <br /> es. nuovo nome = <b>Biblioteca</b> nuova dir = <b>biblioteca</b>, <br /> nuovo nome <b>La Mia Biblioteca</b> nuova dir = <b>lamiacartella</b>. <br /><br /> Il modulo di partenza è: <font color='#008400'><b> %s </b></font><br />");
define("_AM_NW_CLONER_NEWNAMELABEL","Nuovo Modulo:");

define("_AM_NW_CLONER_DIREXISTS","Dir/Cartella '%s' esistente!!");
define("_AM_NW_CLONER_CREATED","Il modulo '%s' è stato clonato correttamente!!");
define("_AM_NW_CLONER_UPRADED","Il modulo '%s' è stato aggiornato correttamente!!");
define("_AM_NW_CLONER_NOMODULEID","L'id modulo non è attivo!"); 

define("_AM_NW_CLONER_UPDATE","Attualizza");
define("_AM_NW_CLONER_INSTALL","Installa");
define("_AM_NW_CLONER_UNINSTALL","Disinstalla");
define("_AM_NW_CLONER_ACTION_INSTALL","Installa/Disinstalla"); 

define("_AM_NW_CLONER_IMPORTNEWS","Importare dati del modulo News originale");
define("_AM_NW_CLONER_IMPORTNEWSDESC1","Il modulo News originale esiste! Importare i dati ora?");
define("_AM_NW_CLONER_IMPORTNEWSDESC2","Il bottone di importazione appare solo se la tabella stories è vuota. <br />
                                         Se è stata aggiunto una notizia prima di importare dal modulo news originale <br /> 
                                         si dovrà disinstallare e reinstallare x"."News. <br />
                                         Se sono già stati importati i dati dal mosulo originale News, lasciare così.");
define("_AM_NW_CLONER_IMPORTNEWSSUB","Importa");
define("_AM_NW_CLONER_NEWSIMPORTED","Dati modulo News originale importati correttamente");

// Added in version 1.68 Beta
define("_AM_NW_DESCRIPTION","<H3>x"."News e un modulo delle notizie clonabile</H3> 
							  dove gli utenti possono inviare notizie/commenti. Il modulo può essere clonato per avere un unico metodo per diversi compiti. Oltre che per le normali notizie il modulo può essere utilizzato per info, collegamenti e altro ancora, tutti coi propri blocchi, argomenti e impostazioni.");

// Added in version 1.68 RC1
define("_AM_NW_CLONER_CLONEDELETED","Il clone '%s' è stato cancellato con successo.");
define("_AM_NW_CLONER_CLONEDELETEDERR","il clone '%s' non è stato cancellato - controllare i permessi.");
define("_AM_NW_CLONER_CLONEUPGRADED","Aggiornato");
define("_AM_NW_CLONER_UPGRADEFORCE","Forza aggiornamento");
define("_AM_NW_CLONER_CLONEDELETION","Cancellazione Clone");
define("_AM_NW_CLONER_SUREDELETE","Sicuri di voler cancellare il clone <font color='#000000'>'%s'</font>?<br />");
define("_AM_NW_CLONER_CLONEID","L'ID del clone non trovato!"); 

// Added in version 1.68 RC2
define("_AM_NW_INDEX","Indice"); 

// Added in version 1.68 Final
define("_AM_NW_DOLINEBREAK","Abilita Fine Riga"); 

define("_AM_NW_TOPICS","Argomenti");
?>
