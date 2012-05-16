<?php

// mymenu
define("_MD_A_MYMENU_MYTPLSADMIN","");
define("_MD_A_MYMENU_MYBLOCKSADMIN","Permissions");
define("_MD_A_MYMENU_MYPREFERENCES","Pr�f�rences");

// index.php
define("_AM_TH_DATETIME","Date");
define("_AM_TH_USER","Membre");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","Agent");
define("_AM_TH_TYPE","Type");
define("_AM_TH_DESCRIPTION","Description");

define( "_AM_TH_BADIPS" , 'IPs bannies<br /><br /><span style="font-weight:normal;">Ecrivez chaque ip sur une ligne.<br />Ne rien mettre signifie que toutes les IPs sont autoris�es</span>' ) ;

define( "_AM_TH_GROUP1IPS" , 'IPs autoris�es pour le groupe administrateurs<br /><br /><span style="font-weight:normal;">Ecrivez chaque ip sur une ligne.<br />192.168. signifie 192.168.*<br />Ne rien mettre signifie que toutes les IPs sont autoris�es</span>' ) ;

define( "_AM_LABEL_COMPACTLOG", "Compacter les logs");
define( "_AM_BUTTON_COMPACTLOG", "Compacter !");
define( "_AM_JS_COMPACTLOGCONFIRM", "Les enregistrements doublons (IP,Type) seront supprim�s");
define( "_AM_LABEL_REMOVEALL", "Supprimer tous les enregistrements");
define( "_AM_BUTTON_REMOVEALL", "Tout supprimer!");
define( "_AM_JS_REMOVEALLCONFIRM", "Tous les journaux sont supprim�s. Etes-vous vraiment s�r ?");
define( "_AM_LABEL_REMOVE" , "Supprimer les enregistrements coch�s :" ) ;
define( "_AM_BUTTON_REMOVE" , "Supprimer!" ) ;
define( "_AM_JS_REMOVECONFIRM" , "Confirmation de la suppression ?" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "Les fichiers pour IPs ont �t� mis � jour" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "Le fichier des IPs bannies ne peut �tre ouvert" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "Le fichier pour le groupe=1 ne peut �tre ouvert" ) ;
define( "_AM_MSG_REMOVED" , "Les enregistrements ont �t� supprim�s" ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Configurez le r�pertoire en lecture-�criture : %s" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Gestionnaire de pr�fixe" ) ;
define( "_AM_MSG_DBUPDATED" , "Base de donn�es mise � jour avec succ�s!" ) ;
define( "_AM_CONFIRM_DELETE" , "Toutes les donn�es vont �tre supprim�es. OK ?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Si vous voulez changer le pr�fixe, �ditez manuellement le fichier %s/mainfile.php pour cette ligne :<br />  define('XOOPS_DB_PREFIX', '<strong>%s</strong>';);" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Non s�curis�");

define("_AM_ADV_TRUSTPATHPUBLIC","Si vous pouvez voir l'image ou si le lien renvoie page normale, votre dossier XOOPS_TRUST_PATH n'est pas plac� correctement. Pour des raisons de s�curit�, il est fortement recommand� de mettre le dossier XOOPS_TRUST_PATH � l'ext�rieur de la racine de votre site. Si vous ne pouvez pas mettre le dossier XOOPS_TRUST_PATH � l'ext�rieur de la racine de votre site, vous devez cr�er, dans le dossier XOOPS_TRUST_PATH, un fichier .htaccess comprenant les lignes suivantes : <br />order deny,allow<br />deny from all<br />");
define("_AM_ADV_TRUSTPATHPUBLICLINK","V�rifiez que les fichiers php dans TRUST_PATH soient priv�es (cela doit provoqu� une erreur 403, 404 ou 500");
define("_AM_ADV_REGISTERGLOBALS","Ce param�tre attire une vari�t� d'attaques par injection.<br />Si vous pouvez, mettez un fichier .htaccess (�ditez le ou cr�ez le selon le cas...");
define("_AM_ADV_ALLOWURLFOPEN","Ce param�tre permet l'ex�cution de scripts arbitraires sur des serveurs distants.<br />Seul l'administrateur du serveur peut changer cette option.<br />Si vous �tes dans ce cas, �ditez php.ini ou httpd.conf.<br /><strong>Exemple pour httpd.conf:<br /> php_admin_flag allow_url_fopen off</strong><br />Sinon demandez le � vos administrateurs.");
define("_AM_ADV_USETRANSSID","Votre ID de session est affich� dans les balises ancre etc.<br />Pour pr�venir des vols de sessions (hi-jacking�, ajoutez cette ligne � votre .htaccess situ� dans le XOOPS_ROOT_PATH.<br /><strong>php_flag session.use_trans_sid off</strong>");
define("_AM_ADV_DBPREFIX","Ce param�tre attire les 'injections SQL'.<br />N'oubliez pas d'activer l'option 'Forcer la sanitisation *' dans les pr�f�rences du module.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Allez au gestionnaire de pr�fixe");
define("_AM_ADV_MAINUNPATCHED","Vous devez modifier votre fichier mainfile.php comme �crit dans le fichier README.");
define("_AM_ADV_DBFACTORYPATCHED","Votre databasefactory est pr�te pour le pi�geage DBLayer anti-SQL-Injection");
define("_AM_ADV_DBFACTORYUNPATCHED","Votre databasefactory n'est pas pr�te pour le pi�geage DBLayer anti-SQL-Injection. Des patchs sont n�cessaires.");

define("_AM_ADV_SUBTITLECHECK","Contr�le de l'action de Protector");
define("_AM_ADV_CHECKCONTAMI","Contaminations");
define("_AM_ADV_CHECKISOCOM","Commentaires isol�s");

// XOOPS 2.5.4
define("_AM_ADV_REGISTERGLOBALS2","et le placer sous la ligne :");

/**  
 * Traductions frxoops, kris
 * Modifications pour Xoops 2.5.5 le 10 Mars 2012 par Cesag charset=iso-8859-1
 */
?>