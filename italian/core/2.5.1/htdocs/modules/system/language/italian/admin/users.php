<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: users.php 5608 2010-10-23 17:36:57Z trabis $
 */
//Translator: Xoops Italia Team - www.xoopsitalia.org
//Last translation update: 20/02/2011

// Navigation
define("_AM_SYSTEM_USERS_NAV_MANAGER","Gestione Utenti");
define("_AM_SYSTEM_USERS_NAV_MAIN","Gestione Utenti");
define("_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH","Ricerca avanzata");
define("_AM_SYSTEM_USERS_NAV_ADD_USER","Nuovo Utente");
define("_AM_SYSTEM_USERS_NAV_EDIT_USER","Modifica Utente");
define("_AM_SYSTEM_USERS_NAV_DELETE_USER","Elimina Utente");

// Tips
define("_AM_SYSTEM_USERS_NAV_TIPS","
<ul>
<li>Amministrazione e ricerca degli utenti</li>
</ul>");

// Main
define("_AM_SYSTEM_USERS_USER","Utente");
define("_AM_SYSTEM_USERS_ADMIN","Admin");
define("_AM_SYSTEM_USERS_UID","Id");
define("_AM_SYSTEM_USERS_STATUS","Stato");
define("_AM_SYSTEM_USERS_NAME","Nome reale");
define("_AM_SYSTEM_USERS_UNAME","Nome utente");
define("_AM_SYSTEM_USERS_EMAIL","Email");
define("_AM_SYSTEM_USERS_EDIT_GROUPS","Modifica gruppo");
define("_AM_SYSTEM_USERS_REG_DATE","Data di registrazione");
define("_AM_SYSTEM_USERS_LAST_LOGIN","Ultimo login");
define("_AM_SYSTEM_USERS_POSTS","Commenti/Post");
define("_AM_SYSTEM_USERS_LEVEL","Livello");
define("_AM_SYSTEM_USERS_ACTION","Azione");
define("_AM_SYSTEM_USERS_FINDUS","Cerca utenti");
define("_AM_SYSTEM_USERS_AVATAR","Avatar");
define("_AM_SYSTEM_USERS_REALNAME","Nome reale");
define("_AM_SYSTEM_USERS_REGDATE","Data di registrazione");
define("_AM_SYSTEM_USERS_PM","PM");
define("_AM_SYSTEM_USERS_URL","Sito Web");
define("_AM_SYSTEM_USERS_PREVIOUS","Precedente");
define("_AM_SYSTEM_USERS_NEXT","Successivo");
define("_AM_SYSTEM_USERS_USERSFOUND","%s utente(i) trovato(i)");
define("_AM_SYSTEM_USERS_ACTUS", "Utenti attivi: %s");
define("_AM_SYSTEM_USERS_INACTUS", "Utenti inattivi: %s");
define("_AM_SYSTEM_USERS_NOFOUND","Nessun utente trovato");
define("_AM_SYSTEM_USERS_ICQ","ICQ");
define("_AM_SYSTEM_USERS_AIM","AIM");
define("_AM_SYSTEM_USERS_YIM","YIM");
define("_AM_SYSTEM_USERS_MSNM","MSN");
define("_AM_SYSTEM_USERS_TIMEZONE","Fuso Orario");
define("_AM_SYSTEM_USERS_SHOWSIG","Inserire sempre la mia firma");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","Modalit&agrave; di visualizzazione dei commenti");
define("_AM_SYSTEM_USERS_CSORTORDER","Ordine dei commenti");
define("_AM_SYSTEM_USERS_EXTRAINFO","Informazioni aggiuntive");
define("_AM_SYSTEM_USERS_LOCATION","Localit&agrave;");
define("_AM_SYSTEM_USERS_OCCUPATION","Occupazione");
define("_AM_SYSTEM_USERS_INTEREST","Interessi");
define("_AM_SYSTEM_USERS_URLC","Sito web contiene");
define("_AM_SYSTEM_USERS_LOCATIONC","Localit&agrave; contiene");
define("_AM_SYSTEM_USERS_OCCUPATIONC","Occupazione contiene");
define("_AM_SYSTEM_USERS_INTERESTC","Interessi contiene");
define("_AM_SYSTEM_USERS_LASTLOGMORE","L'ultimo login &egrave; stato pi&ugrave; di <span style='color:#ff0000;'>X</span> giorni fa");
define("_AM_SYSTEM_USERS_LASTLOGLESS","L'ultimo login &egrave; stato meno di <span style='color:#ff0000;'>X</span> giorni fa");
define("_AM_SYSTEM_USERS_REGMORE","La registrazione &egrave; avvenuta pi&ugrave; di <span style='color:#ff0000;'>X</span> giorni fa");
define("_AM_SYSTEM_USERS_REGLESS","La registrazione &egrave; avvenuta meno di <span style='color:#ff0000;'>X</span> giorni fa");
define("_AM_SYSTEM_USERS_POSTSMORE","Il numero dei post &egrave; maggiore di <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_POSTSLESS","Il numero dei post &egrave; minore di <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_SORT","Ordinare per");
define("_AM_SYSTEM_USERS_ORDER","Modalit&agrave; di ordinamento");
define("_AM_SYSTEM_USERS_LASTLOGIN","Ultimo login");
define("_AM_SYSTEM_USERS_ASC","Ascendente");
define("_AM_SYSTEM_USERS_DESC","Discendente");
define("_AM_SYSTEM_USERS_LIMIT","Numero di utenti per pagina");
define("_AM_SYSTEM_USERS_RESULTS", "Risultati della ricerca");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "Tipologia di utenti da mostrare");
define("_AM_SYSTEM_USERS_MAILOK","Utente che accetta email");
define("_AM_SYSTEM_USERS_MAILNG","Utente che non accetta email");
define("_AM_SYSTEM_USERS_SHOWTYPE", "Tipologia di utenti da mostrare");
define("_AM_SYSTEM_USERS_ACTIVE","Solo utenti attivi");
define("_AM_SYSTEM_USERS_INACTIVE","Solo utenti inattivi");
define("_AM_SYSTEM_USERS_BOTH", "Tutti gli utenti");
define("_AM_SYSTEM_USERS_SENDMAIL", "Invia email");
define("_AM_SYSTEM_USERS_ADD2GROUP", "Aggiungere utenti a %s gruppo(i)");
define("_AM_SYSTEM_USERS_GROUPS", "Gruppo(i)");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "Aggiungi a gruppo");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "Rimuovi da gruppo");
define("_AM_SYSTEM_USERS_AYSYWTDU","Si &egrave sicuri di voler eliminare l'utente %s?");
define("_AM_SYSTEM_USERS_BYTHIS","Tutte le informazioni relative all'utente saranno rimosse.");
define("_AM_SYSTEM_USERS_YES","Si");
define("_AM_SYSTEM_USERS_NO","No");
define("_AM_SYSTEM_USERS_YMCACF","&Egrave; necessario compilare tutti i campi richiesti");
define("_AM_SYSTEM_USERS_CNRNU","Impossibile registrare il nuovo utente.");
define("_AM_SYSTEM_USERS_EDEUSER","Modifica/Elimina Utenti");
define("_AM_SYSTEM_USERS_NICKNAME","Nome utente");
define("_AM_SYSTEM_USERS_MODIFYUSER","Modifica utente");
define("_AM_SYSTEM_USERS_DELUSER","Elimina utente");
define("_AM_SYSTEM_USERS_GO","Vai!");
define("_AM_SYSTEM_USERS_ADDUSER","Nuovo utente");
define("_AM_SYSTEM_USERS_OPTION","Opzioni");
define("_AM_SYSTEM_USERS_THEME","Tema");
define("_AM_SYSTEM_USERS_AOUTVTEAD","Permettere ad altri utenti di vedere questo indirizzo");
define("_AM_SYSTEM_USERS_RANK","Livello");
define("_AM_SYSTEM_USERS_NSRA","Nessun livello speciale assegnato");
define("_AM_SYSTEM_USERS_NSRID","Nessun livello speciale nel database");
define("_AM_SYSTEM_USERS_ACCESSLEV","Livello di accesso");
define("_AM_SYSTEM_USERS_SIGNATURE","Firma");
define("_AM_SYSTEM_USERS_PASSWORD","Password");
define("_AM_SYSTEM_USERS_INDICATECOF","* campo obbligatorio");
define("_AM_SYSTEM_USERS_NOTACTIVE","Questo utente non &egrave; stato attivato, si desidera attivarlo?");
define("_AM_SYSTEM_USERS_UPDATEUSER","Aggiorna utente");
define("_AM_SYSTEM_USERS_USERINFO","Info utente");
define("_AM_SYSTEM_USERS_USERID","ID utente");
define("_AM_SYSTEM_USERS_RETYPEPD","Reinserire password");
define("_AM_SYSTEM_USERS_CHANGEONLY","(solo per le modifiche)");
define("_AM_SYSTEM_USERS_USERPOST","Post");
define("_AM_SYSTEM_USERS_STORIES","Articoli");
define("_AM_SYSTEM_USERS_COMMENTS","Commenti");
define("_AM_SYSTEM_USERS_PTBBTSDIYT","Premere il pulsante che segue per sincronizzare i dati, se si ritiene che il numero dei messaggi inviati dall'utente non corrisponda al valore presente nel database.");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","Sincronizza");
define("_AM_SYSTEM_USERS_USERDONEXIT","L'utente non esiste!");
define("_AM_SYSTEM_USERS_STNPDNM","Attenzione, le nuoved password non corrispondono. Tornare indietro e reinserirle");
define("_AM_SYSTEM_USERS_CNGTCOM","Impossibile ottenere il totale dei commenti");
define("_AM_SYSTEM_USERS_CNGTST","Impossibile ottenere il totale degli articoli");
define("_AM_SYSTEM_USERS_CNUUSER","Impossibile aggiornare l'utente");
define("_AM_SYSTEM_USERS_CNGUSERID","Impossibile ottenere gli ID utente");
define("_AM_SYSTEM_USERS_LIST","Elenco");
define("_AM_SYSTEM_USERS_NOUSERS", "Nessun utente selezionato");
define("_AM_SYSTEM_USERS_CNRNU2","Non &egrave; stato possibile aggiungere l'utente al gruppo: %s.");
define("_AM_SYSTEM_USERS_SEARCH","Cerca");
define("_AM_SYSTEM_USERS_SEARCH_USER","Ricerca utente: ");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","Ricerca avanzata");
define("_AM_SYSTEM_USERS_EDIT","Modifica");
define("_AM_SYSTEM_USERS_DEL","Elimina");
define("_AM_SYSTEM_USERS_DELETE","Elimina");
define("_AM_SYSTEM_USERS_SUBMIT","Invia");
define("_AM_SYSTEM_USERS_PURGE","Pulizia");
define("_AM_SYSTEM_USERS_ADD","Aggiungi membro");
define("_AM_SYSTEM_USERS_VIEW","Visualizza profilo");
define("_AM_SYSTEM_USERS_NO_FOUND","Nessun utente trovato");
define("_AM_SYSTEM_USERS_NOT_CONNECT","Mai collegato");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","Eliminare utente: %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","Elimina");
define("_AM_SYSTEM_USERS_NO_SUPP", "Impossibile eliminare l'utente: %s <br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP", "L'utente admin %s non pu&ograve; essere eliminato<br />");
define("_AM_SYSTEM_USERS_ERROR", "Errore:<br /><br /> %s");
define("_AM_SYSTEM_USERS_ALLGROUP", "Tutti i gruppi");
define("_AM_SYSTEM_USERS_ALLUSER", "Tutti gli utenti");
define("_AM_SYSTEM_USERS_ACTIVEUSER", "Solo utenti attivi");
define("_AM_SYSTEM_USERS_INACTIVEUSER", "Solo utenti non attivi");

// Error
define("_AM_SYSTEM_USERS_PSEUDO_ERROR","Il nome utente %s &egrave; gi&agrave; utilizzato");
define("_AM_SYSTEM_USERS_MAIL_ERROR","L'indirizzo email %s &egrave; gi&agrave; utilizzato");

?>