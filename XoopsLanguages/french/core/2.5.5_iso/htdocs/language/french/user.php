<?php
// $Id$
// _LANGCODE: fr
// _CHARSET : iso-8859-1
// Translator: XOOPS Translation Team
//%%%%%%		File Name user.php 		%%%%%
define("_US_NOTREGISTERED","Pas encore inscrit ? Cliquez <a href='register.php' title=''>ici</a>.");
define("_US_LOSTPASSWORD","Mot de passe perdu ?");
define("_US_NOPROBLEM","Pas de probl�me. Entrez simplement l'adresse email que vous avez fournie pour votre inscription.");
define("_US_YOUREMAIL","Votre adresse email : ");
define("_US_SENDPASSWORD","Envoyer le mot de passe");
define("_US_LOGGEDOUT","Vous �tes maintenant d�connect�(e)");
define("_US_THANKYOUFORVISIT","Merci de votre visite sur notre site !");
define("_US_INCORRECTLOGIN","Identifiant incorrect !");
define("_US_LOGGINGU","Merci de votre connexion <span style='font-style: italic; font-weight:bold;'>%s</span>");
// 2001-11-17 ADD
define("_US_NOACTTPADM", "L'utilisateur s�lectionn� a �t� d�sactiv� ou n'a pas encore �t� activ�.<br />Merci de contacter l'administrateur pour des d�tails.");
define("_US_ACTKEYNOT","Clef d'activation incorrecte !");
define("_US_ACONTACT","Le compte s�lectionn� est d�j� activ� !");
define("_US_ACTLOGIN","Votre compte a �t� activ�. Merci de vous connecter avec le mot de passe enregistr�.");
define("_US_NOPERMISS","D�sol�, vous n'avez pas la permission d'effectuer cette action !");
define("_US_SURETODEL","Etes-vous s�r de vouloir supprimer votre compte ?");
define("_US_REMOVEINFO","Ceci va supprimer toutes vos informations de notre base de donn�es.");
define("_US_BEENDELED","Votre compte a �t� supprim�.");
define("_US_ACTFAILD","�chec de l'activation !");
//%%%%%%                File Name register.php                 %%%%%
define("_US_USERREG","Enregistrement Utilisateur" );
define("_US_NICKNAME","Identifiant");
define("_US_EMAIL","Adresse Email");
define("_US_ALLOWVIEWEMAIL","Autoriser les autres utilisateurs � voir mon adresse email");
define("_US_WEBSITE","Site Web");
define("_US_TIMEZONE","Fuseau horaire");
define("_US_AVATAR","Avatar");
define("_US_VERIFYPASS","V�rifier le mot de passe");
define("_US_SUBMIT","Valider");
define("_US_USERNAME","Identifiant");
define("_US_FINISH","Terminer");
define("_US_REGISTERNG","Impossible d'enregistrer un nouvel utilisateur");
define("_US_MAILOK","Autoriser les administrateurs du site et<br /> les mod�rateurs � m'envoyer occasionnellement, des messages par email ?");
define("_US_DISCLAIMER","Conditions G�n�rales");
define("_US_IAGREE","J'accepte les Conditions G�n�rales ci-dessus");
define("_US_UNEEDAGREE", "D�sol�, vous n'avez pas accept� nos Conditions G�n�rales pour l'inscription.");
define("_US_NOREGISTER","D�sol�, les nouvelles inscriptions sont ferm�es pour le moment.");
// %s is username. This is a subject for email
define("_US_USERKEYFOR","Clef d'activation de l'utilisateur pour \"%s\"");
define("_US_YOURREGISTERED","Vous �tes maintenant enregistr�.<br />Un email contenant une clef d'activation de votre compte a �t� envoy� � l'adresse email que vous nous avez fournie.<br />Avant de vous connecter sur ce site, il est imp�ratif d'activer votre compte en utilisant le lien contenu dans cet email.");
define("_US_YOURREGMAILNG","Vous �tes maintenant enregistr�.<br />Cependant, nous sommes dans l'incapacit� d'envoyer l'email d'activation � votre adresse email en raison d'une erreur interne qui est survenue sur notre serveur.<br />Nous sommes d�sol�s pour cet incident, merci d'envoyer un email de notification � l'administrateur du site.");
define("_US_YOURREGISTERED2","Vous �tes maintenant enregistr�.<br />Merci de patienter afin que votre compte soit activ� par un des administrateurs.<br />Vous recevrez un email lorsqu'il aura �t� activ�. Ceci peut prendre de quelques minutes � quelques jours, merci d'�tre patient.");
// %s is your site name
define("_US_NEWUSERREGAT","Nouvel utilisateur inscrit sur \"%s\"");
// %s is a username
define("_US_HASJUSTREG","\"%s\" vient juste de s'inscrire !");
define("_US_INVALIDMAIL","ERREUR : Adresse Email Invalide");
define("_US_EMAILNOSPACES","ERREUR : L'adresse email ne doit pas contenir d'espace(s).");
define("_US_INVALIDNICKNAME","ERREUR : Identifiant invalide");
define("_US_NICKNAMETOOLONG","L'identifiant est trop long. Il doit poss�der moins de <strong>%s</strong> caract�res.");
define("_US_NICKNAMETOOSHORT","L'identifiant est trop court. Il doit poss�der plus de <strong>%s</strong> caract�res.");
define("_US_NAMERESERVED","ERREUR : Cet identifiant est r�serv�.");
define("_US_NICKNAMENOSPACES","Il ne doit pas y avoir d'espaces dans l'identifiant.");
define("_US_NICKNAMETAKEN","ERREUR : Cet identifiant est d�j� utilis�.");
define("_US_EMAILTAKEN","ERREUR : Cet adresse email d�j� enregistr�e.");
define("_US_ENTERPWD","ERREUR : Vous devez fournir un mot de passe.");
define("_US_SORRYNOTFOUND","D�sol�, aucune information \"Utilisateur\" correspondante n'a �t� trouv�e");
// %s is your site name
define("_US_NEWPWDREQ","Demande de nouveau mot de passe sur \"%s\" ");
define("_US_YOURACCOUNT", "Votre compte sur \"%s\" ");
define("_US_MAILPWDNG","mail_password : Impossible de mettre � jour l'entr�e \"Utilisateur\". Veuillez s'il vous pla�t, contactez l'administrateur du site.");
// %s is a username
define("_US_PWDMAILED","Mot de passe pour \"%s\" envoy�.");
define("_US_CONFMAIL","Courrier de confirmation par email pour \"%s\" envoy�.");
define("_US_ACTVMAILNG", "Echec Lors de l'envoi de l'email de notification � \"%s\"");
define("_US_ACTVMAILOK", "Email de notification � \"%s\" envoy�.");
//%%%%%%                File Name userinfo.php                 %%%%%
define("_US_SELECTNG","Aucun utilisateur de s�lectionn� ! Merci de revenir en arri�re et de recommencer.");
define("_US_PM","PM");
define("_US_ICQ","ICQ");
define("_US_AIM","AIM");
define("_US_YIM","YIM");
define("_US_MSNM","MSN");
define("_US_LOCATION","R�sidence");
define("_US_OCCUPATION","Profession");
define("_US_INTEREST","Centres d'int�r�ts");
define("_US_SIGNATURE","Signature");
define("_US_EXTRAINFO","Informations compl�mentaires");
define("_US_EDITPROFILE","Editer le profil");
define("_US_LOGOUT","D�connexion");
define("_US_INBOX","Messages priv�s");
define("_US_MEMBERSINCE","Membre depuis");
define("_US_RANK","Classement");
define("_US_POSTS","Contributions");
define("_US_LASTLOGIN","Derni�re connexion");
define("_US_ALLABOUT","Tout � propos de \"%s\"");
define("_US_STATISTICS","Statistiques");
define("_US_MYINFO","Mes informations");
define("_US_BASICINFO","Informations de base");
define("_US_MOREABOUT","Plus � propos de moi");
define("_US_SHOWALL","Afficher tout");
//%%%%%%                File Name edituser.php                 %%%%%
define("_US_PROFILE","Profil");
define("_US_REALNAME","Nom R�el");
define("_US_SHOWSIG","Toujours attacher ma signature");
define("_US_CDISPLAYMODE","Mode d'affichage des commentaires");
define("_US_CSORTORDER","Ordre des commentaires");
define("_US_PASSWORD","Mot de passe");
define("_US_TYPEPASSTWICE","(Saisissez deux fois le nouveau mot de passe pour le changer)");
define("_US_SAVECHANGES","Sauvegarder les modifications");
define("_US_NOEDITRIGHT","D�sol�, vous n'avez pas le permission d'�diter les informations de l'utilisateur.");
define("_US_PASSNOTSAME","Les deux mots de passe sont diff�rents. Ils doivent �tre identiques.");
define("_US_PWDTOOSHORT","D�sol�, votre mot de passe doit avoir au moins <strong>%s</strong> caract�res de long.");
define("_US_PROFUPDATED","Votre profil a �t� mis � jour !");
define("_US_USECOOKIE","Conserver mon identifiant dans un cookie pour un an");
define("_US_NO","Non");
define("_US_DELACCOUNT","Supprimer le compte");
define("_US_MYAVATAR", "Mon avatar");
define("_US_UPLOADMYAVATAR", "Envoyer mon avatar");
define("_US_MAXPIXEL","Nombre maximum de pixels");
define("_US_MAXIMGSZ","Taille maximum de l'image (octets)");
define("_US_SELFILE","S�lectionnez un fichier");
define("_US_OLDDELETED","Votre ancien avatar va �tre effac� !");
define("_US_CHOOSEAVT", "Choisir un avatar dans la liste disponible");
define("_US_PRESSLOGIN", "Pressez le bouton ci-dessous pour vous connecter");
define("_US_ADMINNO", "Les utilisateurs du groupe \"Administrateurs\" ne peuvent pas �tre effac�s");
define("_US_GROUPS", "Groupes de l'utilisateur");
define("_US_REMEMBERME", "Se souvenir de moi");
// Welcoming emai/PM subject
define("_US_WELCOME_SUBJECT", "Bienvenue sur \"%s\"");

//XOOPS 2.5.4
define("_US_SKYPE'", "Skype");
define("_US_FACEBOOK", "Facebook");

/**  
 * Traductions frxoops, kris
 * Modifications pour Xoops 2.5.5 le 10 Mars 2012 par Cesag
 */
?>