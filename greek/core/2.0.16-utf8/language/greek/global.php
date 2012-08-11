<?php
// $Id: global.php,v 1.17 2005/08/08 06:29:25 skalpa Exp $
// %%%%%%	File Name mainfile.php 	%%%%%

// Greek Translation by Yannis yannis@xoopsgreece.gr 27/11/05
// modified by angelos@xoopsgreece.gr 16/02/2006
// reviewed by angelos@xoopsgreece.gr 15/03/2006, 02/06/2006
// with Xoops Greece Translation Team (www.xoopsgreece.gr)

define("_PLEASEWAIT","Παρακαλώ Περιμένετε");
define("_FETCHING","Loading...");
define("_TAKINGBACK","Επιστροφή στη σελίδα που ήσασταν....");
define("_LOGOUT","Αποσύνδεση");
define("_SUBJECT","Θέμα");
define("_MESSAGEICON","Εικονίδιο Μηνύματος");
define("_COMMENTS","Σχόλια");
define("_POSTANON","Ανώνυμη Αποστολή");
define("_DISABLESMILEY","Απενεργοποιήστε τις Φατσούλες");
define("_DISABLEHTML","Απενεργοποίηση του HTML");
define("_PREVIEW","Προεπισκόπηση");

define("_GO","Πάμε!");
define("_NESTED","Φωλιά");
define("_NOCOMMENTS","Χωρίς Σχόλια");
define("_FLAT","Επίπεδο");
define("_THREADED","Threaded");
define("_OLDESTFIRST","Παλαιότερα Πρώτα");
define("_NEWESTFIRST","Νεότερα Πρώτα");
define("_MORE","Περισσότερα...");
define("_MULTIPAGE","To have your article span multiple pages, insert the word <font color=red>[pagebreak]</font> (with brackets) in the article.");
define("_IFNOTRELOAD","Εάν η επόμενη σελίδα δεν εμφανιστεί αυτόματα, παρακαλώ κάντε click <a href='%s'>εδώ</a>");
define("_WARNINSTALL2","WARNING: Directory %s exists on your server. <br />Please remove this directory for security reasons.");
define("_WARNINWRITEABLE","WARNING: File %s is writeable by the server. <br />Please change the permission of this file for security reasons.<br /> in Unix (444), in Win32 (read-only)");

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Προφίλ");
define("_POSTEDBY","Αποστολέας");
define("_VISITWEBSITE","Επισκευτείτε τη Σελίδα");
define("_SENDPMTO","Στείλτε προσωπικό μήνυμα στον/στην %s");
define("_SENDEMAILTO","Στείλτε Email στον/στην %s");
define("_ADD","Πρόσθεση");
define("_REPLY","Απάντηση");
define("_DATE","Ημερομηνία");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Main");
define("_MANUAL","Manual");
define("_INFO","Info");
define("_CPHOME","Κέντρο Διαχείρισης δικτυακού τόπου");
define("_YOURHOME","Αρχική σελίδα");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Ποιός είναι Online");
define('_GUESTS','Επισκέπτες');
define('_MEMBERS','Μέλη');
define("_ONLINEPHRASE","Online Χρήστες: <b>%s</b>");
define("_ONLINEPHRASEX","<b>%s</b> χρήστες στην ενότητα: <b>%s</b>");
define("_CLOSE","Κλείσιμο");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Παράθεση:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Συγνώμη αλλά δεν έχετε πρόσβαση σε αυτή την περιοχή.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Όχι");
define("_YES","Ναι");
define("_EDIT","Επεξεργασία");
define("_DELETE","Διαγραφή");
define("_SUBMIT","Υποβολή");
define("_MODULENOEXIST","Το επιλεγμένο module δεν υπάρχει!");
define("_ALIGN","Στοίχιση");
define("_LEFT","Αριστερά");
define("_CENTER","Κέντρο");
define("_RIGHT","Δεξιά"); 
define("_FORM_ENTER","Παρακαλούμε καταχωρήστε %s");
// %s represents file name
define("_MUSTWABLE","Το αρχείο %s θα πρέπει να είναι επανεγράψιμο από τον server!");
// Module info
define('_PREFERENCES','Ρυθμίσεις');
define("_VERSION","Έκδοση");
define("_DESCRIPTION","Περιγραφή");
define("_ERRORS","Σφάλματα");
define("_NONE","Κανένα");
define('_ON','on');
define('_READS','αναγνώσεις');
define('_WELCOMETO','Καλώς ήρθατε στο %s');
define('_SEARCH','Αναζήτηση');
define('_ALL','Όλα');
define('_TITLE','Τίτλος');
define('_OPTIONS','Επιλογές');
define('_QUOTE','Παράθεση');
define('_LIST','Λίστα');
define('_LOGIN','Είσοδος Χρήστη');
define('_USERNAME','Όνομα Χρήστη: ');
define('_PASSWORD','Κωδικός: ');
define("_SELECT","Επιλογή");
define("_IMAGE","Εικόνα");
define("_SEND","Αποστολή");
define("_CANCEL","Ακύρωση");
define("_ASCENDING","Αύξουσα σειρά");
define("_DESCENDING","Φθίνουσα σειρά");
define('_BACK','Πίσω');
define('_NOTITLE','Χωρίς Τίτλο');

/* Image manager */
define('_IMGMANAGER','Image Manager');
define('_NUMIMAGES','%s εικόνες');
define('_ADDIMAGE','Πρόσθεση αρχείου εικόνας');
define('_IMAGENAME','Όνομα:');
define('_IMGMAXSIZE','Μέγιστο επιτρεπόμενο μέγεθος (bytes):');
define('_IMGMAXWIDTH','Μέγιστο επιτρεπόμενο πλάτος (pixels):');
define('_IMGMAXHEIGHT','Μέγιστο επιτρεπόμενο μήκος (pixels):');
define('_IMAGECAT','Κατηγορία:');
define('_IMAGEFILE','Αρχείο εικόνας:');
define('_IMGWEIGHT','Σειρά εμφάνισης εικόνων στον image manager:');
define('_IMGDISPLAY','Να εμφανιστεί αυτή η εικόνα?');
define('_IMAGEMIME','MIME type:');
define('_FAILFETCHIMG','Δεν είναι εφικτό να γίνει upload αυτό το αρχείο: %s');
define('_FAILSAVEIMG','Αποτυχία αποθήκευσης της εικόνας %s στη βάση δεδομένων');
define('_NOCACHE','No Cache');
define('_CLONE','Clone');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH","Αρχίζει με");
define("_ENDSWITH","Τελειώνει με");
define("_MATCHES","Ταιριάζει");
define("_CONTAINS","Περιλαμβάνει");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Εγγραφή"); //Register

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","ΜΕΓΕΘΟΣ");  // font size
define("_FONT","ΓΡΑΜΜΑΤΟΣΕΙΡΑ");  // font family
define("_COLOR","ΧΡΩΜΑ");  // font color
define("_EXAMPLE","ΔΕΙΓΜΑ");
define("_ENTERURL","Εισάγετε την URL διεύθυνση του συνδέσμου (link) που επιθυμείτε να προσθέσετε :");
define("_ENTERWEBTITLE","Εισάγετε το τίτλο του δικτυακού τόπου:");
define("_ENTERIMGURL","Εισάγετε την URL διεύθυνση της εικόνας που επιθυμείτε να προσθέσετε. ");
define("_ENTERIMGPOS","Τώρα, εισάγετε την θέση(στοίχιση) της εικόνας.");
define("_IMGPOSRORL","'R' ή 'r' για δεξιά, 'L' ή 'l' για αριστερά, ή αφήστε το κενό.");
define("_ERRORIMGPOS","ΣΦΑΛΜΑ! Εισάγετε τη θέση της εικόνας.");
define("_ENTEREMAIL","Εισάγετε την email διεύθυνση που επιθυμείτε να προσθέσετε.");
define("_ENTERCODE","Εισάγετε τα codes που επιθυμείτε να προσθέσετε. ");
define("_ENTERQUOTE","Εισάγετε το κείμενο που επιθυμείτε να είναι σε παράθεση(quoted).");
define("_ENTERTEXTBOX","Σας παρακαλούμε να εισάγετε το κείμενο μέσα στο πλαίσιο κειμένου(textbox).");
define("_ALLOWEDCHAR","Επιτρεπόμενο μέγιστο μήκος χαρακτήρων: ");
define("_CURRCHAR","Τρέχον μήκος χαρακτήρων: ");
define("_PLZCOMPLETE","Σας παρακαλούμε να συμπληρώσετε το θέμα και το κείμενο του μηνύματος.");
define("_MESSAGETOOLONG","Το μήνυμα σας είναι πολύ μεγάλο.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 δευτερόλεπτο');
define('_SECONDS','%s δευτερόλεπτα');
define('_MINUTE','1 λεπτό');
define('_MINUTES','%s λεπτά');
define('_HOUR','1 ώρα');
define('_HOURS','%s ώρες');
define('_DAY','1 μέρα');
define('_DAYS','%s μέρες');
define('_WEEK','1 εβδομάδα');
define('_MONTH','1 μήνας');

define("_DATESTRING","j/n/y G:i");
define("_MEDIUMDATESTRING","j/n/y G:i");
define("_SHORTDATESTRING","j/n/y");
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th","nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET','UTF-8');
define('_LANGCODE','el');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","1");
?>