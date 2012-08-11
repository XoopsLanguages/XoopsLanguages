<?php
// $Id: notification.php,v 1.8 2005/08/08 06:29:25 skalpa Exp $

// Greek Translation by Yannis yannis@xoopsgreece.gr
// modified by angelos@xoopsgreece.gr 16/02/2006
// reviewed by angelos@xoopsgreece.gr 15/03/2006
// with Xoops Greece Translation Team (www.xoopsgreece.gr)

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Επιλογές Ειδοποιήσεων');
define('_NOT_UPDATENOW','Ενημέρωση Τώρα'); //Update Now
define('_NOT_UPDATEOPTIONS','Ενημερώστε τις Επιλογές Ειδοποιήσεων');

define('_NOT_CLEAR','Καθάρισμα');
define('_NOT_CHECKALL','Επιλογή όλων');
define('_NOT_MODULE','Module');
define('_NOT_CATEGORY','Κατηγορία');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Όνομα');
define('_NOT_EVENT','Συμβάν');
define('_NOT_EVENTS','Συμβάντα');
define('_NOT_ACTIVENOTIFICATIONS','Ενεργές ειδοποιήσεις');
define('_NOT_NAMENOTAVAILABLE','Το όνομα δεν είναι διαθέσιμο');

// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Το όνομα του αντικειμένου δεν είναι διαθέσιμο');
define('_NOT_ITEMTYPENOTAVAILABLE','Ο τύπος του αντικειμένου δεν είναι διαθέσιμος');
define('_NOT_ITEMURLNOTAVAILABLE','Η διεύθυνση του αντικειμένου δεν είναι διαθέσιμη');
define('_NOT_DELETINGNOTIFICATIONS','Γίνετε διαγραφή των ειδοποιήσεων');
define('_NOT_DELETESUCCESS','Ειδοποίηση(εις) διαγράφτηκε επιτυχώς.');
define('_NOT_UPDATEOK','Εγινε update των επιλεγμένων ρυθμίσεων για τις ειδοποιήσεις. ');
define('_NOT_NOTIFICATIONMETHODIS','Η μέθοδος ειδοποίησης είναι');
define('_NOT_EMAIL','email');
define('_NOT_PM','προσωπικό μήνυμα');
define('_NOT_DISABLE','απενεργοποίηση');
define('_NOT_CHANGE','Αλλαγή');

define('_NOT_NOACCESS','Δεν έχετε δικαίωμα πρόσβασης σε αυτή τη σελίδα.');


// Text for module config options

define('_NOT_ENABLE','Enable');
define('_NOT_NOTIFICATION','Notification');

define('_NOT_CONFIG_ENABLED','Enable Notification');
define('_NOT_CONFIG_ENABLEDDSC','This module allows users to select to be notified when certain events occur.  Choose "yes" to enable this feature.');

define('_NOT_CONFIG_EVENTS','Enable Specific Events');
define('_NOT_CONFIG_EVENTSDSC','Select which notification events to which your users may subscribe.');

define('_NOT_CONFIG_ENABLE','Enable Notification');
define('_NOT_CONFIG_ENABLEDSC','This module allows users to be notified when certain events occur.  Select if users should be presented with notification options in a Block (Block-style), within the module (Inline-style), or both.  For block-style notification, the Notification Options block must be enabled for this module.');
define('_NOT_CONFIG_DISABLE','Disable Notification');
define('_NOT_CONFIG_ENABLEBLOCK','Enable only Block-style');
define('_NOT_CONFIG_ENABLEINLINE','Enable only Inline-style');
define('_NOT_CONFIG_ENABLEBOTH','Enable Notification (both styles)');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Προστέθηκε σχόλιο');
define('_NOT_COMMENT_NOTIFYCAP','Ειδοποίησε με όταν ένα νέο σχόλιο αποσταλεί γι’αυτό το αντικείμενο.');
define('_NOT_COMMENT_NOTIFYDSC','Λήψη ειδοποίησης όταν ένα νέο σχόλιο αποσταλεί (ή εγκριθεί) γι’αυτό το αντικείμενο.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify: Ένα σχόλιο προστέθηκε στο {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','Υποβλήθηκε σχόλιο ');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP',' Ειδοποίησε με όταν ένα νέο σχόλιο υποβληθεί (αναμένοντας έγκριση) γι’αυτό το αντικείμενο.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Λήψη ειδοποίησης όταν ένα νέο σχόλιο υποβληθεί (αναμένοντας έγκριση) γι’αυτό το αντικείμενο.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify: Ένα σχόλιο υποβλήθηκε για το {X_ITEM_TYPE}');


// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Bookmark');
define('_NOT_BOOKMARK_NOTIFYCAP','Bookmark this item (no notification).');
define('_NOT_BOOKMARK_NOTIFYDSC','Keep track of this item without receiving any event notifications.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Τρόπος ειδοποιήσεων');
define('_NOT_METHOD_EMAIL','Email (να χρησιμοποιηθεί η διεύθυνση που υπάρχει στο profile μου)');
define('_NOT_METHOD_PM','Προσωπικό μήνυμα');
define('_NOT_METHOD_DISABLE','Προσωρινά απενεργοποιημένο');

define('_NOT_NOTIFYMODE','Προεπιλεγμένος τρόπος ειδοποιήσεων');
define('_NOT_MODE_SENDALWAYS','Να ειδοποιηθώ για όλα τις αναβαθμίσεις (updates) που έχω επιλέξει');
define('_NOT_MODE_SENDONCE','Να ειδοποιηθώ μόνο μια φορά');
define('_NOT_MODE_SENDONCEPERLOGIN','Να ειδοποιηθώ μονό μια φορά και μετά να απενεργοποιηθούν οι ειδοποιήσεις μέχρι να συνδεθώ ξανά.');


?>