<?php
if( defined( "FOR_XOOPS_LANG_CHECKER" ) ) $mydirname = "protector" ;
$constpref = "_MI_" . strtoupper( $mydirname ) ;
if( defined( "FOR_XOOPS_LANG_CHECKER" ) || ! defined( $constpref."_LOADED" ) ) {
define( $constpref."_LOADED" , 1 ) ;
// The name of this module
define($constpref."_NAME","Protector");
// A brief description of this module
define($constpref."_DESC","Ce module prot�ge votre site xoops d'attaques vari�es comme DoS , SQL Injection , et des contaminations par variables.");
// Menu
define($constpref."_ADMININDEX","Centre de protection");
define($constpref."_ADVISORY","Conseils de s�curit�");
define($constpref."_PREFIXMANAGER","Gestionnaire de pr�fixe");
define($constpref."_ADMENU_MYBLOCKSADMIN","Permissions") ;
// Configs
define($constpref."_GLOBAL_DISBL","Temporairement d�sactiv�");
define($constpref."_GLOBAL_DISBLDSC","Toutes les protections sont d�sactiv�es temporairement.<br />N'oubliez pas de les r�activer apr�s correction de votre anomalie");
define($constpref."_DEFAULT_LANG","Langue par d�faut");
define($constpref."_DEFAULT_LANGDSC","Sp�cifiez la langue pour afficher les messages mis en avant la l'�x�cution de common.php");
define($constpref."_RELIABLE_IPS","IPs fiables");
define($constpref."_RELIABLE_IPSDSC","Saisissez les IPs fiables s�par�es avec le caract�re |<br /> ^ correspond au d�but de la cha�ne<br /> $ correspond � la fin de la cha�ne.");
define($constpref."_LOG_LEVEL","Niveau de connexion");
define($constpref."_LOG_LEVELDSC","");
define($constpref."_BANIP_TIME0","Temps d'exclusion d'une IP bannie (secondes)");
define($constpref."_LOGLEVEL0","Aucun");
define($constpref."_LOGLEVEL15","Serein");
define($constpref."_LOGLEVEL63","serein");
define($constpref."_LOGLEVEL255","complet");
define($constpref."_HIJACK_TOPBIT","Nombre de bits de protection de la sesssion IP");
define($constpref."_HIJACK_TOPBITDSC","Anti session Hi-Jacking: par d�faut 32(bit). (Tous les bits sont prot�g�s)<br />Quand votre adresse IP n'est pas fixe, fixer la rang�e d'adresses IP par le nombre de bits.<br />i.e. si votre adresse IP peut �voluer dans la rang�e  192.168.0.0 � 192.168.0.255, indiquez 24 (bits) ici");
define($constpref."_HIJACK_DENYGP","Groupes non autoris�s � modifier leur adresse IP au cours d'une session");
define($constpref."_HIJACK_DENYGPDSC","Anti Session Hi-Jacking:<br />S�lectionner le(s) groupe(s) qui ne pourront pas modifier leur adresse IP au cours d'une session.<br />(Conseil : recommand� pour les administrateurs.)");
define($constpref."_SAN_NULLBYTE","Sanitiser les bits null");
define($constpref."_SAN_NULLBYTEDSC","Le caract�re de terminaison '\\0' est souvent utilis� dans des attaques malveillantes.<br />un bit null sera transform� en espace .<br />(Conseil : forte recommandation d'activer cette option)");
define($constpref."_DIE_NULLBYTE","Ejecter si des bits null sont trouv�s");
define($constpref."_DIE_NULLBYTEDSC","Le caract�re de terminaison '\\0' est employ� souvent dans des attaques malveillantes.<br />(Conseil : forte recommandation d'activer cette option)");
define($constpref."_DIE_BADEXT","Ejecter si des fichiers interdits sont upload�s");
define($constpref."_DIE_BADEXTDSC","Si quelqu'un tente d'uploader des fichiers avec une extension non souhait�e comme .php , il sera �ject�.<br />(Conseil : si vous attachez r�guli�rement des fichiers php dans B-Wiki ou PukiWikiMod, n'activez pas cette option.)");
define($constpref."_CONTAMI_ACTION","Action si une contamination est trouv�e");
define($constpref."_CONTAMI_ACTIONDS","S�lectionner une action lorsque quelqu'un essaiera de contaminer des variables globales syst�me XOOPS.<br />(Conseil : l'option �cran blanc est recommand�e)");
define($constpref."_ISOCOM_ACTION","Action si un commentaire isol� est d�tect�");
define($constpref."_ISOCOM_ACTIONDSC","Anti SQL Injection:<br />S�lectionner l'action � effectuer quand '/*' est trouv�.<br />\"Sanitiser\" signifie ajouter d'autres '*/' � la suite.<br />(Conseil : \"sanitiser\")");
define($constpref."_UNION_ACTION","Action si une requ�te UNION est d�tect�e ");
define($constpref."_UNION_ACTIONDSC","Anti SQL Injection:<br />S�lectionner l'action � effectuer quand il y a syntaxe d'UNION de SQL. <br />\"Sanitiser\" signifie Changer 'union' en 'uni-on'.<br />(Conseil : \"sanitiser\")");
define($constpref."_ID_INTVAL","Transformation forc�e en nombre entier (intval) de variables comme ID");
define($constpref."_ID_INTVALDSC","Tous les appels \"*id\" seront trait�s comme un nombre entier. Cette option vous prot�gera contre certaines attaques XSS et injections SQL.<br />(Conseil : activer cette option, cependant celle-ci peut perturber le fonctionnement de certains modules.)");
define($constpref."_FILE_DOTDOT","Protection contre la travers�e de r�pertoires");
define($constpref."_FILE_DOTDOTDSC","Elimination de � .. � pour toutes les demandes qui ressemblent � une tentative d'acc�s par travers�e de r�pertoires");
define($constpref."_BF_COUNT","Anti Brute Force");
define($constpref."_BF_COUNTDSC","D�finit le nombre de tentatives de connexion autoris�es pour un invit� dans un intervale de 10 minutes. Si quelqu'un �choue dans sa tentative au del� de ce nombre, son adresse IP sera bannie.");
define($constpref."_BWLIMIT_COUNT","Limitation de bande passante");
define($constpref."_BWLIMIT_COUNTDSC","Indiquez le nombre maximum d'acc�s au fichier mainfile.php durant un laps de temps. Cette valeur doit �tre de \"0 \"pour des environnements normaux qui ont assez de bande passante CPU. les nombres inf�rieurs � 10 seront ignor�s.");
define($constpref."_DOS_SKIPMODS","Modules � exclure du contr�le DoS (F5)/Crawler");
define($constpref."_DOS_SKIPMODSDSC","Mettre les noms des r�pertoires des modules s�par�s par &#124;. Cette option sera utile avec les modules de chat par exemple.");
define($constpref."_DOS_EXPIRE","D�lai, en secondes, de r�action aux rechargements fr�quents de page (attaque \"touche F5\")");
define($constpref."_DOS_EXPIREDSC","Dur�e admise en sec. pour les tentatives par rechargement de page (attaque \"touche F5\") et les aspirateurs.");
define($constpref."_DOS_F5COUNT","Nombre autoris� de tentatives F5 ");
define($constpref."_DOS_F5COUNTDSC","D�fense contre des attaques DoS :<br />Cette valeur d�termine le nombre de rechargement au del� duquel la connexion est consid�r�e comme une attaque malicieuse.");
define($constpref."_DOS_F5ACTION","Action si une attaque F5 est d�tect�e");
define($constpref."_DOS_CRCOUNT","Nombre de fois pour qu'un crawler soit reconnu comme malicieux");
define($constpref."_DOS_CRCOUNTDSC","D�fense contre des crawlers-aspirateurs malicieux (comme bots chasseurs d'e-mails) :<br />La valeur d�termine le nombre d'acc�s au del� duquel le crawler est consid�r� comme malicieux.");
define($constpref."_DOS_CRACTION","Action si des crawlers malicieux sont d�tect�s");
define($constpref."_DOS_CRSAFE","User-Agent autoris�s");
define($constpref."_DOS_CRSAFEDSC","Regex Perl pour les User-Agents.<br /> Si il coincide, le crawler n'est plus consid�r� comme un aspirateur.<br /> Ex.: msnbot - Googlebot -Yahoo! - Slurp");
define($constpref."_OPT_NONE","Aucune (enregistrer uniquement)");
define($constpref."_OPT_SAN","D�sinfecter");
define($constpref."_OPT_EXIT","Ecran blanc");
define($constpref."_OPT_BIP","Bannir l'IP (ind�finiment)");
define($constpref."_OPT_BIPTIME0","Bannir l'IP (temporairement)");
define($constpref."_DOSOPT_NONE","Aucune (enregistrer uniquement)");
define($constpref."_DOSOPT_SLEEP","Veille");
define($constpref."_DOSOPT_EXIT","Ecran blanc");
define($constpref."_DOSOPT_BIP","Bannir l'IP (ind�finiment)");
define($constpref."_DOSOPT_BIPTIME0","Bannir l'IP (temporairement)");
define($constpref."_DOSOPT_HTA","DENY by .htaccess(Exp�rimental)");
define($constpref."_BIP_EXCEPT","Groupes � ne jamais enregistrer comme IP bannie");
define($constpref."_BIP_EXCEPTDSC","Un membre qui appartient au groupe sp�cifi� ne sera jamais banni.<br />(Conseil : recommand� pour les administrateurs)");
define($constpref."_DISABLES","D�sactiver les fonctions dangereuses dans XOOPS");
define($constpref."_DBLAYERTRAP","Activer la couche anti-pi�gage d'injection de code SQL dans la couche DB."); 
define($constpref."_DBLAYERTRAPDSC","Presque toutes les attaques par injection  de code SQL seront annul�es par cette fonctionnalit�. Elle est n�cessaire en appui de votre serveur SQL. Vous pouvez le v�rifier sur la page des avis de s�curit�. Ce param�tre doit �tre activ�. Ne jamais la d�sactiver par d�sinvolture."); 
define($constpref."_DBTRAPWOSRV","Ne jamais v�rifier \"_SERVER\" pour l'anti-injection de code SQL"); 
define($constpref."_DBTRAPWOSRVDSC"," Certains serveurs permettent toujours le pi�geage de couche DB. Elle provoque de fausses d�tections d'attaque par injection de code SQL. Si vous avez obtenu de telles erreurs, activez cette option. Sachez que cela affaiblit la s�curit� de la base de donn�es.");
define($constpref."_BIGUMBRELLA","Activer la protection anti-XSS (Big Umbrella)");
define($constpref."_BIGUMBRELLADSC","Ceci vous prot�ge contre presque toutes les attaques par l'interm�diaire des vuln�rabilit�s de XSS. Mais il n'est pas sur � 100%");
define($constpref."_SPAMURI4U","anti-SPAM: nombre d'URLs pour les membres");
define($constpref."_SPAMURI4UDSC","Si un nombre �quivalent (ou sup�rieur) d'URLs est trouv� dans les donn�es d'un POST par un membre qui n'est pas administrateur, le POST sera consid�r� comme du SPAM. 0 �quivaut � d�sactiver cette fonction.");
define($constpref."_SPAMURI4G","anti-SPAM: nombre d'URLs pour les anonymes");
define($constpref."_SPAMURI4GDSC","Si un nombre �quivalent (ou sup�rieur) d'URLs est trouv� dans les donn�es d'un POST par un visiteur anonyme, le POST sera consid�r� comme du SPAM. 0 �quivaut � d�sactiver cette fonction.");
 // 3.40b
define($constpref."_ADMINHOME","Accueil");
define($constpref."_ADMINABOUT","A propos");
// 3.50
define($constpref."_STOPFORUMSPAM_ACTION","Active l'anti-spam du forum");
define($constpref."_STOPFORUMSPAM_ACTIONDSC","La requ�te v�rifie si les spammeurs sont inscrits sur la base de donn�es de http://www.stopforumspam.com<br />La librairie php_curl est requise pour cette fonctionnalit�e.");

}

/**  
 * Traductions frxoops, kris
 * Modifications pour Xoops 2.5.5 le 10 Mars 2012 par Cesag charset=iso-8859-1
 */