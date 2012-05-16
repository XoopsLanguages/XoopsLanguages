<?php

// mymenu
define("_MD_A_MYMENU_MYTPLSADMIN","");
define("_MD_A_MYMENU_MYBLOCKSADMIN","Permissions");
define("_MD_A_MYMENU_MYPREFERENCES","Préférences");

// index.php
define("_AM_TH_DATETIME","Date");
define("_AM_TH_USER","Membre");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","Agent");
define("_AM_TH_TYPE","Type");
define("_AM_TH_DESCRIPTION","Description");

define( "_AM_TH_BADIPS" , 'IPs bannies<br /><br /><span style="font-weight:normal;">Ecrivez chaque ip sur une ligne.<br />Ne rien mettre signifie que toutes les IPs sont autorisées</span>' ) ;

define( "_AM_TH_GROUP1IPS" , 'IPs autorisées pour le groupe administrateurs<br /><br /><span style="font-weight:normal;">Ecrivez chaque ip sur une ligne.<br />192.168. signifie 192.168.*<br />Ne rien mettre signifie que toutes les IPs sont autorisées</span>' ) ;

define( "_AM_LABEL_COMPACTLOG", "Compacter les logs");
define( "_AM_BUTTON_COMPACTLOG", "Compacter !");
define( "_AM_JS_COMPACTLOGCONFIRM", "Les enregistrements doublons (IP,Type) seront supprimés");
define( "_AM_LABEL_REMOVEALL", "Supprimer tous les enregistrements");
define( "_AM_BUTTON_REMOVEALL", "Tout supprimer!");
define( "_AM_JS_REMOVEALLCONFIRM", "Tous les journaux sont supprimés. Etes-vous vraiment sûr ?");
define( "_AM_LABEL_REMOVE" , "Supprimer les enregistrements cochés :" ) ;
define( "_AM_BUTTON_REMOVE" , "Supprimer!" ) ;
define( "_AM_JS_REMOVECONFIRM" , "Confirmation de la suppression ?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "Les fichiers pour IPs ont été mis à jour" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "Le fichier des IPs bannies ne peut être ouvert" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "Le fichier pour le groupe=1 ne peut être ouvert" ) ;
define( "_AM_MSG_REMOVED" , "Les enregistrements ont été supprimés" ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Configurez le répertoire en lecture-écriture : %s" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Gestionnaire de préfixe" ) ;
define( "_AM_MSG_DBUPDATED" , "Base de données mise à jour avec succès!" ) ;
define( "_AM_CONFIRM_DELETE" , "Toutes les données vont être supprimées. OK ?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Si vous voulez changer le préfixe, éditez manuellement le fichier %s/mainfile.php pour cette ligne :<br />  define('XOOPS_DB_PREFIX', '<strong>%s</strong>';);" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Non sécurisé");

define("_AM_ADV_TRUSTPATHPUBLIC","Si vous pouvez voir l'image ou si le lien renvoie page normale, votre dossier XOOPS_TRUST_PATH n'est pas placé correctement. Pour des raisons de sécurité, il est fortement recommandé de mettre le dossier XOOPS_TRUST_PATH à l'extérieur de la racine de votre site. Si vous ne pouvez pas mettre le dossier XOOPS_TRUST_PATH à l'extérieur de la racine de votre site, vous devez créer, dans le dossier XOOPS_TRUST_PATH, un fichier .htaccess comprenant les lignes suivantes : <br />order deny,allow<br />deny from all<br />");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Vérifiez que les fichiers php dans TRUST_PATH soient privées (cela doit provoqué une erreur 403, 404 ou 500");
define("_AM_ADV_REGISTERGLOBALS","Ce paramètre attire une variété d'attaques par injection.<br />Si vous pouvez, mettez un fichier .htaccess (éditez le ou créez le selon le cas...");
define("_AM_ADV_ALLOWURLFOPEN","Ce paramètre permet l'exécution de scripts arbitraires sur des serveurs distants.<br />Seul l'administrateur du serveur peut changer cette option.<br />Si vous êtes dans ce cas, éditez php.ini ou httpd.conf.<br /><strong>Exemple pour httpd.conf:<br /> php_admin_flag allow_url_fopen off</strong><br />Sinon demandez le à vos administrateurs.");
define("_AM_ADV_USETRANSSID","Votre ID de session est affiché dans les balises ancre etc.<br />Pour prévenir des vols de sessions (hi-jackingà, ajoutez cette ligne à votre .htaccess situé dans le XOOPS_ROOT_PATH.<br /><strong>php_flag session.use_trans_sid off</strong>");
define("_AM_ADV_DBPREFIX","Ce paramètre attire les 'injections SQL'.<br />N'oubliez pas d'activer l'option 'Forcer la sanitisation *' dans les préférences du module.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Allez au gestionnaire de préfixe");
define("_AM_ADV_MAINUNPATCHED","Vous devez modifier votre fichier mainfile.php comme écrit dans le fichier README.");
define("_AM_ADV_DBFACTORYPATCHED","Votre databasefactory est prête pour le piégeage DBLayer anti-SQL-Injection");
define("_AM_ADV_DBFACTORYUNPATCHED","Votre databasefactory n'est pas prête pour le piégeage DBLayer anti-SQL-Injection. Des patchs sont nécessaires.");

define("_AM_ADV_SUBTITLECHECK","Contrôle de l'action de Protector");
define("_AM_ADV_CHECKCONTAMI","Contaminations");
define("_AM_ADV_CHECKISOCOM","Commentaires isolés");

// XOOPS 2.5.4
define("_AM_ADV_REGISTERGLOBALS2","et le placer sous la ligne :");

/**  
 * Traductions frxoops, kris
 * Modifications pour Xoops 2.5.5 le 10 Mars 2012 par Cesag charset=iso-8859-1
 */
?>