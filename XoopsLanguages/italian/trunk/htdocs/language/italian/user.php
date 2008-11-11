<?php
// $Id: user.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','Non sei registrato?  Clicca <a href="register.php">qui</a>.');
define('_US_LOSTPASSWORD','Hai perso la password?');
define('_US_NOPROBLEM','Nessun problema. Basta inserire l\'indirizzo e-mail che hai usato durante la fase di registrazione.');
define('_US_YOUREMAIL','La tua Email: ');
define('_US_SENDPASSWORD','Invia Password');
define('_US_LOGGEDOUT','Adesso non sei più connesso');
define('_US_THANKYOUFORVISIT','Grazie per aver visitato il nostro sito!');
define('_US_INCORRECTLOGIN','Login non corretto!');
define('_US_LOGGINGU','Benvenuto sul sito, %s.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','L\'utente selezionato è stato disattivato oppure non è ancora stato attivato.<br />Contatta l\'amministratore per i dettagli.');
define('_US_ACTKEYNOT','Chiave di attivazione errata!');
define('_US_ACONTACT','L\'account selezionato è già attivo!');
define('_US_ACTLOGIN','Il tuo account è stato attivato con successo. Effettua il login con la password registrata.');
define('_US_NOPERMISS','Spiacente, non hai i permessi per eseguire questa operazione!');
define('_US_SURETODEL','Sei sicuro di voler cancellare il tuo account?');
define('_US_REMOVEINFO','Quest\'operazione rimuoverà tutte le informazioni su di te dal nostro database.');
define('_US_BEENDELED','Il tuo account è stato cancellato con successo.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Registrazione utente');
define('_US_NICKNAME','Username');
define('_US_EMAIL','Email');
define('_US_ALLOWVIEWEMAIL','Permetti agli altri utenti di vedere il mio indirizzo mail');
define('_US_WEBSITE','Website');
define('_US_TIMEZONE','Time Zone');
define('_US_AVATAR','Avatar');
define('_US_VERIFYPASS','Verifica Password');
define('_US_SUBMIT','Invia');
define('_US_USERNAME','Username');
define('_US_FINISH','Finito');
define('_US_REGISTERNG','Impossibile registrare il nuovo utente.');
define('_US_MAILOK','Vuoi ricevere email occasionali<br />dall\'amministratore e/o dai moderatori?');
define('_US_DISCLAIMER','Disclaimer');
define('_US_IAGREE','Accetto');
define('_US_UNEEDAGREE', 'Spiacente, devi accettare il nostro disclaimer per poterti registrare.');
define('_US_NOREGISTER','Spiacente, abbiamo momentaneamente sospeso la possibilità di registrarsi al sito');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','Chiave di attivazione per l\'utente %s');

define('_US_YOURREGISTERED','Adesso sei un utente registrato. Una mail contenente una chiave di attivazione è stata inviata all\'indirizzo che hai fornito durante la registrazione. Segui le istruzioni nella mail per attivare il tuo account. ');
define('_US_YOURREGMAILNG','Adesso sei registrato. Purtroppo a causa di un errore interno, non riusciamo a mandarti la mail con la chiave di attivazione. Siamo spiacenti per l\'inconveniente, manda una mail al webmaster per attivare l\'account.');
define('_US_YOURREGISTERED2','Adesso sei registrato.  Attendi che il tuo account venga attivato dagli amministratori. Riceverai una mail appena il tuo account sarà abilitato. Attendi con pazienza, questa operazione potrebbe richiedere qualche tempo.');

// %s is your site name
define('_US_NEWUSERREGAT','Nuovo utente registrato su %s');
// %s is a username
define('_US_HASJUSTREG','%s si è appena registrato!');

define('_US_INVALIDMAIL','ERROR: Email non valida');
define('_US_EMAILNOSPACES','ERROR: Gli indirizzi email non devono contenere spazi.');
define('_US_INVALIDNICKNAME','ERROR: Username non valido');
define('_US_NICKNAMETOOLONG','Username troppo lungo. Deve essere inferiore a %s caratteri.');
define('_US_NICKNAMETOOSHORT','Username troppo corto. Deve essere maggiore di %s caratteri.');
define('_US_NAMERESERVED','ERROR: Nome utente riservato.');
define('_US_NICKNAMENOSPACES','Non ci devono essere spazi nello Username.');
define('_US_NICKNAMETAKEN','ERROR: Username già in uso.');
define('_US_EMAILTAKEN','ERROR: Questo indirizzo mail è già stato usato.');
define('_US_ENTERPWD','ERROR: Devi inserire una password.');
define('_US_SORRYNOTFOUND','Spiacente, non è stato trovato nessun utente con queste informazioni.');




// %s is your site name
define('_US_NEWPWDREQ','Nuova password richiesta su %s');
define('_US_YOURACCOUNT', 'Il tuo account su %s');

define('_US_MAILPWDNG','mail_password: non è stato possibile aggiornare l\'utente. Contatta l\'amministratore');

// %s is a username
define('_US_PWDMAILED','Password per %s inviata via mail.');
define('_US_CONFMAIL','Email di conferma per %s inviata.');
define('_US_ACTVMAILNG', 'Errore durante l\'invio della mail di notifica per %s');
define('_US_ACTVMAILOK', 'Mail di notifica per %s inviata.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Nessun utente selezionato! Torna indietro e riprova.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Località');
define('_US_OCCUPATION','Occupazione');
define('_US_INTEREST','Interessi');
define('_US_SIGNATURE','Firma');
define('_US_EXTRAINFO','Informazioni estese');
define('_US_EDITPROFILE','Modifica profilo');
define('_US_LOGOUT','Esci');
define('_US_INBOX','Messaggi privati');
define('_US_MEMBERSINCE','Registrato il');
define('_US_RANK','Livello');
define('_US_POSTS','Commenti/Post');
define('_US_LASTLOGIN','Ultimo Login');
define('_US_ALLABOUT','Tutto su %s');
define('_US_STATISTICS','Statistiche');
define('_US_MYINFO','My Info');
define('_US_BASICINFO','Informazioni base');
define('_US_MOREABOUT','Altre informazioni su di me');
define('_US_SHOWALL','Visualizza tutto');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Profilo');
define('_US_REALNAME','Nome reale');
define('_US_SHOWSIG','Includi sempre la mia firma');
define('_US_CDISPLAYMODE','Modalità di visualizzazione dei commenti');
define('_US_CSORTORDER','Ordinamento dei commenti');
define('_US_PASSWORD','Password');
define('_US_TYPEPASSTWICE','(scrivi una nuova password due volte per cambiarla)');
define('_US_SAVECHANGES','Salva cambiamenti');
define('_US_NOEDITRIGHT',"Spiacente, non hai i permessi per cambiare le informazioni di questo utente.");
define('_US_PASSNOTSAME','Le due password sono differenti. Devono essere identiche.');
define('_US_PWDTOOSHORT','Spiacente, la password deve essere lunga almeno <strong>%s</strong> caratteri.');
define('_US_PROFUPDATED','Profilo aggiornato!');
define('_US_USECOOKIE','Salva il mio username in un cookie per almeno un anno');
define('_US_NO','No');
define('_US_DELACCOUNT','Cancella account');
define('_US_MYAVATAR', 'Il mio Avatar');
define('_US_UPLOADMYAVATAR', 'Carica Avatar');
define('_US_MAXPIXEL','dimensione massima in Pixels');
define('_US_MAXIMGSZ','Peso massimo per l\'immagine (Bytes)');
define('_US_SELFILE','Seleziona un file');
define('_US_OLDDELETED','Il tuo vecchio avatar sarà cancellato!');
define('_US_CHOOSEAVT', 'Scegli un avatar tra quelli disponibili in lista');

define('_US_PRESSLOGIN', 'Premi il pulsante qui sotto per effettuare il login');

define('_US_ADMINNO', 'Gli utenti nel gruppo webmaster non possono essere rimossi');
define('_US_GROUPS', 'Gruppi utente');

define('_US_REMEMBERME', 'Ricordami');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT', 'Benvenuto su %s');

?>