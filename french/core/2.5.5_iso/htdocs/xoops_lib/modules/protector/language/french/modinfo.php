<?php
if( defined( "FOR_XOOPS_LANG_CHECKER" ) ) $mydirname = "protector" ;
$constpref = "_MI_" . strtoupper( $mydirname ) ;
if( defined( "FOR_XOOPS_LANG_CHECKER" ) || ! defined( $constpref."_LOADED" ) ) {
define( $constpref."_LOADED" , 1 ) ;
// The name of this module
define($constpref."_NAME","Protector");
// A brief description of this module
define($constpref."_DESC","Ce module protège votre site xoops d'attaques variées comme DoS , SQL Injection , et des contaminations par variables.");
// Menu
define($constpref."_ADMININDEX","Centre de protection");
define($constpref."_ADVISORY","Conseils de sécurité");
define($constpref."_PREFIXMANAGER","Gestionnaire de préfixe");
define($constpref."_ADMENU_MYBLOCKSADMIN","Permissions") ;
// Configs
define($constpref."_GLOBAL_DISBL","Temporairement désactivé");
define($constpref."_GLOBAL_DISBLDSC","Toutes les protections sont désactivées temporairement.<br />N'oubliez pas de les réactiver après correction de votre anomalie");
define($constpref."_DEFAULT_LANG","Langue par défaut");
define($constpref."_DEFAULT_LANGDSC","Spécifiez la langue pour afficher les messages mis en avant la l'éxécution de common.php");
define($constpref."_RELIABLE_IPS","IPs fiables");
define($constpref."_RELIABLE_IPSDSC","Saisissez les IPs fiables séparées avec le caractère |<br /> ^ correspond au début de la chaîne<br /> $ correspond à la fin de la chaîne.");
define($constpref."_LOG_LEVEL","Niveau de connexion");
define($constpref."_LOG_LEVELDSC","");
define($constpref."_BANIP_TIME0","Temps d'exclusion d'une IP bannie (secondes)");
define($constpref."_LOGLEVEL0","Aucun");
define($constpref."_LOGLEVEL15","Serein");
define($constpref."_LOGLEVEL63","serein");
define($constpref."_LOGLEVEL255","complet");
define($constpref."_HIJACK_TOPBIT","Nombre de bits de protection de la sesssion IP");
define($constpref."_HIJACK_TOPBITDSC","Anti session Hi-Jacking: par défaut 32(bit). (Tous les bits sont protégés)<br />Quand votre adresse IP n'est pas fixe, fixer la rangée d'adresses IP par le nombre de bits.<br />i.e. si votre adresse IP peut évoluer dans la rangée  192.168.0.0 à 192.168.0.255, indiquez 24 (bits) ici");
define($constpref."_HIJACK_DENYGP","Groupes non autorisés à modifier leur adresse IP au cours d'une session");
define($constpref."_HIJACK_DENYGPDSC","Anti Session Hi-Jacking:<br />Sélectionner le(s) groupe(s) qui ne pourront pas modifier leur adresse IP au cours d'une session.<br />(Conseil : recommandé pour les administrateurs.)");
define($constpref."_SAN_NULLBYTE","Sanitiser les bits null");
define($constpref."_SAN_NULLBYTEDSC","Le caractère de terminaison '\\0' est souvent utilisé dans des attaques malveillantes.<br />un bit null sera transformé en espace .<br />(Conseil : forte recommandation d'activer cette option)");
define($constpref."_DIE_NULLBYTE","Ejecter si des bits null sont trouvés");
define($constpref."_DIE_NULLBYTEDSC","Le caractère de terminaison '\\0' est employé souvent dans des attaques malveillantes.<br />(Conseil : forte recommandation d'activer cette option)");
define($constpref."_DIE_BADEXT","Ejecter si des fichiers interdits sont uploadés");
define($constpref."_DIE_BADEXTDSC","Si quelqu'un tente d'uploader des fichiers avec une extension non souhaitée comme .php , il sera éjecté.<br />(Conseil : si vous attachez régulièrement des fichiers php dans B-Wiki ou PukiWikiMod, n'activez pas cette option.)");
define($constpref."_CONTAMI_ACTION","Action si une contamination est trouvée");
define($constpref."_CONTAMI_ACTIONDS","Sélectionner une action lorsque quelqu'un essaiera de contaminer des variables globales système XOOPS.<br />(Conseil : l'option écran blanc est recommandée)");
define($constpref."_ISOCOM_ACTION","Action si un commentaire isolé est détecté");
define($constpref."_ISOCOM_ACTIONDSC","Anti SQL Injection:<br />Sélectionner l'action à effectuer quand '/*' est trouvé.<br />\"Sanitiser\" signifie ajouter d'autres '*/' à la suite.<br />(Conseil : \"sanitiser\")");
define($constpref."_UNION_ACTION","Action si une requête UNION est détectée ");
define($constpref."_UNION_ACTIONDSC","Anti SQL Injection:<br />Sélectionner l'action à effectuer quand il y a syntaxe d'UNION de SQL. <br />\"Sanitiser\" signifie Changer 'union' en 'uni-on'.<br />(Conseil : \"sanitiser\")");
define($constpref."_ID_INTVAL","Transformation forcée en nombre entier (intval) de variables comme ID");
define($constpref."_ID_INTVALDSC","Tous les appels \"*id\" seront traités comme un nombre entier. Cette option vous protègera contre certaines attaques XSS et injections SQL.<br />(Conseil : activer cette option, cependant celle-ci peut perturber le fonctionnement de certains modules.)");
define($constpref."_FILE_DOTDOT","Protection contre la traversée de répertoires");
define($constpref."_FILE_DOTDOTDSC","Elimination de « .. » pour toutes les demandes qui ressemblent à une tentative d'accès par traversée de répertoires");
define($constpref."_BF_COUNT","Anti Brute Force");
define($constpref."_BF_COUNTDSC","Définit le nombre de tentatives de connexion autorisées pour un invité dans un intervale de 10 minutes. Si quelqu'un échoue dans sa tentative au delà de ce nombre, son adresse IP sera bannie.");
define($constpref."_BWLIMIT_COUNT","Limitation de bande passante");
define($constpref."_BWLIMIT_COUNTDSC","Indiquez le nombre maximum d'accés au fichier mainfile.php durant un laps de temps. Cette valeur doit être de \"0 \"pour des environnements normaux qui ont assez de bande passante CPU. les nombres inférieurs à 10 seront ignorés.");
define($constpref."_DOS_SKIPMODS","Modules à exclure du contrôle DoS (F5)/Crawler");
define($constpref."_DOS_SKIPMODSDSC","Mettre les noms des répertoires des modules séparés par &#124;. Cette option sera utile avec les modules de chat par exemple.");
define($constpref."_DOS_EXPIRE","Délai, en secondes, de réaction aux rechargements fréquents de page (attaque \"touche F5\")");
define($constpref."_DOS_EXPIREDSC","Durée admise en sec. pour les tentatives par rechargement de page (attaque \"touche F5\") et les aspirateurs.");
define($constpref."_DOS_F5COUNT","Nombre autorisé de tentatives F5 ");
define($constpref."_DOS_F5COUNTDSC","Défense contre des attaques DoS :<br />Cette valeur détermine le nombre de rechargement au delà duquel la connexion est considérée comme une attaque malicieuse.");
define($constpref."_DOS_F5ACTION","Action si une attaque F5 est détectée");
define($constpref."_DOS_CRCOUNT","Nombre de fois pour qu'un crawler soit reconnu comme malicieux");
define($constpref."_DOS_CRCOUNTDSC","Défense contre des crawlers-aspirateurs malicieux (comme bots chasseurs d'e-mails) :<br />La valeur détermine le nombre d'accès au delà duquel le crawler est considéré comme malicieux.");
define($constpref."_DOS_CRACTION","Action si des crawlers malicieux sont détectés");
define($constpref."_DOS_CRSAFE","User-Agent autorisés");
define($constpref."_DOS_CRSAFEDSC","Regex Perl pour les User-Agents.<br /> Si il coincide, le crawler n'est plus considéré comme un aspirateur.<br /> Ex.: msnbot - Googlebot -Yahoo! - Slurp");
define($constpref."_OPT_NONE","Aucune (enregistrer uniquement)");
define($constpref."_OPT_SAN","Désinfecter");
define($constpref."_OPT_EXIT","Ecran blanc");
define($constpref."_OPT_BIP","Bannir l'IP (indéfiniment)");
define($constpref."_OPT_BIPTIME0","Bannir l'IP (temporairement)");
define($constpref."_DOSOPT_NONE","Aucune (enregistrer uniquement)");
define($constpref."_DOSOPT_SLEEP","Veille");
define($constpref."_DOSOPT_EXIT","Ecran blanc");
define($constpref."_DOSOPT_BIP","Bannir l'IP (indéfiniment)");
define($constpref."_DOSOPT_BIPTIME0","Bannir l'IP (temporairement)");
define($constpref."_DOSOPT_HTA","DENY by .htaccess(Expérimental)");
define($constpref."_BIP_EXCEPT","Groupes à ne jamais enregistrer comme IP bannie");
define($constpref."_BIP_EXCEPTDSC","Un membre qui appartient au groupe spécifié ne sera jamais banni.<br />(Conseil : recommandé pour les administrateurs)");
define($constpref."_DISABLES","Désactiver les fonctions dangereuses dans XOOPS");
define($constpref."_DBLAYERTRAP","Activer la couche anti-piégage d'injection de code SQL dans la couche DB."); 
define($constpref."_DBLAYERTRAPDSC","Presque toutes les attaques par injection  de code SQL seront annulées par cette fonctionnalité. Elle est nécessaire en appui de votre serveur SQL. Vous pouvez le vérifier sur la page des avis de sécurité. Ce paramètre doit être activé. Ne jamais la désactiver par désinvolture."); 
define($constpref."_DBTRAPWOSRV","Ne jamais vérifier \"_SERVER\" pour l'anti-injection de code SQL"); 
define($constpref."_DBTRAPWOSRVDSC"," Certains serveurs permettent toujours le piégeage de couche DB. Elle provoque de fausses détections d'attaque par injection de code SQL. Si vous avez obtenu de telles erreurs, activez cette option. Sachez que cela affaiblit la sécurité de la base de données.");
define($constpref."_BIGUMBRELLA","Activer la protection anti-XSS (Big Umbrella)");
define($constpref."_BIGUMBRELLADSC","Ceci vous protège contre presque toutes les attaques par l'intermédiaire des vulnérabilités de XSS. Mais il n'est pas sur à 100%");
define($constpref."_SPAMURI4U","anti-SPAM: nombre d'URLs pour les membres");
define($constpref."_SPAMURI4UDSC","Si un nombre équivalent (ou supérieur) d'URLs est trouvé dans les données d'un POST par un membre qui n'est pas administrateur, le POST sera considéré comme du SPAM. 0 équivaut à désactiver cette fonction.");
define($constpref."_SPAMURI4G","anti-SPAM: nombre d'URLs pour les anonymes");
define($constpref."_SPAMURI4GDSC","Si un nombre équivalent (ou supérieur) d'URLs est trouvé dans les données d'un POST par un visiteur anonyme, le POST sera considéré comme du SPAM. 0 équivaut à désactiver cette fonction.");
 // 3.40b
define($constpref."_ADMINHOME","Accueil");
define($constpref."_ADMINABOUT","A propos");
// 3.50
define($constpref."_STOPFORUMSPAM_ACTION","Active l'anti-spam du forum");
define($constpref."_STOPFORUMSPAM_ACTIONDSC","La requête vérifie si les spammeurs sont inscrits sur la base de données de http://www.stopforumspam.com<br />La librairie php_curl est requise pour cette fonctionnalitée.");

}

/**  
 * Traductions frxoops, kris
 * Modifications pour Xoops 2.5.5 le 10 Mars 2012 par Cesag charset=iso-8859-1
 */