<?php
// $Id: user.php,v 1.13 2005/08/08 06:29:25 skalpa Exp $
// %%%%%%		File Name user.php 		%%%%%

// Greek Translation by Yannis yannis@xoopsgreece.gr 27/11/05
// modified by angelos@xoopsgreece 16/02/2006
// reviewed by angelos@xoopsgreece 15/03/2006
// with Xoops Greece Translation Team (www.xoopsgreece.gr)

define('_US_NOTREGISTERED','Δεν είστε εγγεγραμένοι; Κάντε κλίκ <a href="register.php">ΕΔΩ</a>');
define('_US_LOSTPASSWORD','Ξεχάσατε τον Κωδικό;');
define('_US_NOPROBLEM','Κανένα Πρόβλημα. Απλά γράψτε το email που χρησιμοποιήσατε κατά την εγγραφή σας.');
define('_US_YOUREMAIL','Το Email σας: ');
define('_US_SENDPASSWORD','Αποστολή Κωδικού');
define('_US_LOGGEDOUT','Έχετε αποσυνδεθεί');
define('_US_THANKYOUFORVISIT','Ευχαριστούμε που επισκεφτήκατε τη σελίδα μας!');
define('_US_INCORRECTLOGIN','Λάθος Στοιχεία!');
define('_US_LOGGINGU','%s, καλώς ορίσατε.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','Ο συγκεκριμένος λογαριασμός έχει απενεργοποιηθεί ή δεν έχει ενεργοποιηθεί ακόμη.<br />Παρακαλούμε επικοινωνήστε με τους Διαχειριστές για περισσότερες πληροφορίες.');
define('_US_ACTKEYNOT','Το κλειδί ενεργοποίσης δεν είναι έγκυρο!');
define('_US_ACONTACT','Ο λογαριασμός που επιλέξατε είναι ήδη ενεργοποιημένος!');
define('_US_ACTLOGIN','Ο λογαριασμός σας έχει ενεργοποιηθεί. Σας παρακαλούμε να συνδεθείτε κάνοντας χρήση του κωδικού πρόσβασης που δηλώσατε κατά την διαδικασία εγγραφής.');
define('_US_NOPERMISS','Συγγνώμη, δεν έχετε τα απαραίτητα δικαιώματα για να εκτελέσετε αυτή την ενέργεια!');
define('_US_SURETODEL','Είστε σίγουροι ότι θέλετε να διαγράψετε τον λογαριασμό σας;');
define('_US_REMOVEINFO','Αυτό θα διαγράψει όλες τις πληροφορίες του λογαριασμού σας από τη βάση δεδομένων.');
define('_US_BEENDELED','Ο λογαριασμός σας έχει διαγραφεί.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Εγγραφή Χρήστη');
define('_US_NICKNAME','Ψευδώνυμο');
define('_US_REALNAME','Πραγματικό όνομα');
define('_US_EMAIL','Email');
define('_US_ALLOWVIEWEMAIL','Να είναι εμφανής η ηλεκτρονική μου διεύθυνση στους άλλους Χρήστες');
define('_US_WEBSITE','Δικτυακός τόπος');
define('_US_TIMEZONE','Ζώνη ώρας');
define('_US_AVATAR','Εικονίδιο');
define('_US_VERIFYPASS','Επαλήθευση κωδικού');
define('_US_SUBMIT','Υποβολή');
define('_US_USERNAME','Ψευδώνυμο');
define('_US_FINISH','Ολοκλήρωση');
define('_US_REGISTERNG','Δεν ήταν δυνατή η εγγραφή νέου Χρήστη.');
define('_US_MAILOK','Να λαμβάνω κατά περίπτωση ειδοποιήσεις <br />από τους Διαχειριστές και τους Συντονιστές;');
define('_US_DISCLAIMER','Δήλωση Αποποίησης Ευθύνης');
define('_US_IAGREE','Συμφωνώ με τα ανωτέρω');
define('_US_UNEEDAGREE','Θα πρέπει να συμφωνήσετε με τη Δήλωση Αποποίησης Ευθύνης για να εγγραφείτε.');
define('_US_NOREGISTER','Λυπούμεθα αλλά προσωρινά δεν γίνονται εγγραφές');

// %s is username. This is a subject for email
define('_US_USERKEYFOR','Κλειδί ενεργοποίησης για τον Χρήστη %s');

define('_US_YOURREGISTERED','Ένα μήνυμα έχει αποσταλεί στην Ηλεκτρονική Δ/νση που έχετε δηλώσει στον λογαριασμό σας. Παρακαλούμε ακολουθήστε τις οδηγίες του μηνύματος για να ενεργοποιήσετε τον λογαριασμό σας. ');
define('_US_YOURREGMAILNG','Εχετε ήδη εγγραφεί. Εν τούτοις, δεν ήταν δυνατό να σας στείλουμε το μήνυμα ενεργοποίησης στην Ηλεκτρονική Δ/νση του λογαριασμού σας λόγω ενός εσωτερικού σφάλματος που συνέβει στον server μας. Λυπούμεθα για την ταλαιπωρία. Παρακαλούμε να στείλετε στον Διαχειριστή ένα Ηλ. Μήνυμα (Email) για να τον ειδοποιήσετε για το πρόβλημα.');
define('_US_YOURREGISTERED2','Εχετε ήδη εγγραφεί. Παρακαλούμε να περιμένετε μέχρι την ενεργοποίηση του λογαριασμού σας από τους Διαχειριστές. Θα λάβετε ένα Ηλ. Μήνυμα με την ενεργοποίηση. Κάντε λίγη υπομονή γιατί αυτό μπορεί να καθυστερήσει λίγο.');

// %s is your site name
define('_US_NEWUSERREGAT','Εγγραφή νέου Χρήστη στο %s');
// %s is a username
define('_US_HASJUSTREG','Μόλις γράφτηκε Ο/Η %s !');

define('_US_INVALIDMAIL','ΣΦΑΛΜΑ: Μη έγγυρη Ηλεκτρονική Δ/νση (email)');
define('_US_EMAILNOSPACES','ΣΦΑΛΜΑ: Οι Ηλ. Δ/νσεις δεν πρέπει να περιέχουν κενά.');
define('_US_INVALIDNICKNAME','ΣΦΑΛΜΑ: Μη έγγυρο Ψευδώνυμο');
define('_US_NICKNAMETOOLONG','Το Ψευδώνυμο είναι πολύ μεγάλο. Πρέπει να έχει λιγότερους από %s χαρακτήρες.');
define('_US_NICKNAMETOOSHORT','Το Ψευδώνυμο είναι πολύ μικρό. Πρέπει να έχει περισσότερους από %s χαρακτήρες.');
define('_US_NAMERESERVED','ΣΦΑΛΜΑ: Το Όνομα έχει ήδη δεσμευτεί.');
define('_US_NICKNAMENOSPACES','Δεν πρέπει να υπάρχουν κενά στο Ψευδώνυμο.');
define('_US_NICKNAMETAKEN','ΣΦΑΛΜΑ: Το Ψευδώνυμο έχει ήδη δεσμευτεί.');
define('_US_EMAILTAKEN','ΣΦΑΛΜΑ: Η Ηλεκτρονική Δ/νση (E-mail) έχει ήδη δεσμευτεί.');
define('_US_ENTERPWD','ΣΦΑΛΜΑ: Πρέπει να δώσετε ένα Κωδικό.');
define('_US_SORRYNOTFOUND','Λυπούμεθα, δεν βρέθηκε αντίστοιχος Χρήστης.');


// %s is your site name
define('_US_NEWPWDREQ','Αίτηση για νέο κωδικό πρόσβασης στο %s');
define('_US_YOURACCOUNT','Ο Λογαριασμός σας στο %s');

define('_US_MAILPWDNG','mail_password: could not update user entry. Contact the Administrator');

// %s is a username
define('_US_PWDMAILED','Ο κωδικός πρόσβασης για το %s έχει αποσταλεί.');
define('_US_CONFMAIL','Το email επιβεβαίωσης για τον %s έχει αποσταλεί.');
define('_US_ACTVMAILNG','Σφάλμα αποστολής μηνύματος ειδοποίησης στον %s');
define('_US_ACTVMAILOK','Εστάλη μήνυμα ειδοποίησης στον %s.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Δεν επιλέχθηκε Χρήστης. Παρακαλούμε επιστρέψτε και δοκιμάστε πάλι.');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Περιοχή/Χώρα');
define('_US_OCCUPATION','Επάγγελμα');
define('_US_INTEREST','Ενδιαφέροντα');
define('_US_SIGNATURE','Υπογραφή');
define('_US_EXTRAINFO','Πρόσθετες Πληροφορίες');
define('_US_EDITPROFILE','Επεξεργασία Προφίλ');
define('_US_LOGOUT','Αποσύνδεση');
define('_US_INBOX','Εισερχόμενα');
define('_US_MEMBERSINCE','Μέλος από');
define('_US_RANK','Κατηγορία');
define('_US_POSTS','Σχόλια/Υποβολές');
define('_US_LASTLOGIN','Τελευταία Σύνδεση');
define('_US_ALLABOUT','Ολες οι πληροφορίες για τον/την %s');
define('_US_STATISTICS','Στατιστικά');
define('_US_MYINFO','Τα στοιχεία μου');
define('_US_BASICINFO','Βασικές Πληροφορίες');
define('_US_MOREABOUT','Περισσότερα για εμένα');
define('_US_SHOWALL','Εμφάνιση όλων');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Προφίλ');
define('_US_DISPLAYNAME','Εμφανιζόμενο Όνομα');
define('_US_SHOWSIG','Να επισυνάπτεται πάντα η Υπογραφή');
define('_US_CDISPLAYMODE','Τρόπος εμφάνισης Σχολίων');
define('_US_CSORTORDER','Σειρά ταξιμόμησης Σχολίων');
define('_US_PASSWORD','Κωδικός');
define('_US_TYPEPASSTWICE','(πληκτρολογήστε τον νέο Κωδικό δύο φορές για να τον αλλάξετε)');
define('_US_SAVECHANGES','Αποθήκευση αλλαγών');
define('_US_NOEDITRIGHT',"Λυπούμεθα αλλά δεν έχετε δικαίωμα αλλαγής των στοιχείων αυτού του Χρήστη.");
define('_US_PASSNOTSAME','Και οι δύο Κωδικοί είναι διαφορετικοί. Θα πρέπει να είναι ίδιοι.');
define('_US_PWDTOOSHORT','Λυπούμεθα αλλά ο Κωδικός σας θα πρέπει να έχει <b>%s</b> τουλάχιστον χαρακτήρες.');
define("_US_NOPASSWORD","Παρακαλούμε εισάγετε άνα Κωδικό");
define('_US_PROFUPDATED','Το Προφίλ σας ενημερώθηκε!');
define('_US_USECOOKIE','Αποθήκευση σε cookie του Ψευδώνυμου μου για ένα έτος');
define('_US_NO','Όχι');
define('_US_DELACCOUNT','Διαγραφή Λογαριασμού');
define('_US_MYAVATAR','Το Εικονίδιό μου');
define('_US_UPLOADMYAVATAR','Ανέβασμα Εικονιδίου');
define('_US_MAXPIXEL','Μέγιστος αρ. Pixels');
define('_US_MAXIMGSZ','Μέγιστο μέγεθος Εικονιδίου (Bytes)');
define('_US_SELFILE','Επιλέξτε αρχείο');
define('_US_OLDDELETED','Το παλιό σας Εικονίδιο θα διαγραφεί!');
define('_US_CHOOSEAVT','Επιλέξτε ένα Εικονίδιο από τη διαθέσιμη λίστα');

define('_US_PRESSLOGIN','Πιέστε το παρακάτω κουμπί για την εισαγωγή');

define('_US_ADMINNO','Οι χρήστες που ανήκουν στην ομάδα των Διαχειριστών δεν μπορούν να διαγραφούν.');
define('_US_GROUPS','Ομάδες Χρηστών');
?>