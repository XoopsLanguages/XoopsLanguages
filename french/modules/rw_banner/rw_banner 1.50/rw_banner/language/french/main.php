<?php
//  ------------------------------------------------------------------------ //
//                                  RW-Banner                                //
//                    Copyright (c) 2006 BrInfo                              //
//                     <http://www.brinfo.com.br>                            //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
// Author: Rodrigo Pereira Lima (BrInfo - Solu&#231;ões Web)                      //
// Site: http://www.brinfo.com.br                                            //
// Project: RW-Banner                                                        //
// Descri&#231;ão: Sistema de gerenciamento de mídias publicitárias               //
// ------------------------------------------------------------------------- //

//index.php
define('_NOPERM1','Vous n\'avez aucune banni&#232;re enregistr&eacute;e sur ce site donc vous n\'avez pas les permissions acc&eacute;der &#224; cette zone !');
define('_MD_MSG_INDEX_NOUSER','Pour employer les services de publicit&eacute; de %s, vous devez &#202;tre un utilisateur enregistr&eacute;. Ce proc&eacute;d&eacute; vise &#224; avoir une meilleure commande de nos partenaires et une meilleure gestion de nos supports publicitaires.<br /><br />
   Si vous &#202;tes d&eacute;j&#224; enregistr&eacute; sur notre site, cliquez <a href=\"%s\">ici</a> et vous pourrez compl&eacute;ter le formulaire d\'enregistrement de votre banni&#232;re pour participer &#224; notre syst&#232;me de publicit&eacute;. Si vous n\'&#202;tes pas enregistr&eacute;, cliquez <a href=\"%s\">ici</a> et
   enregistrez-vous. Apr&#232;s que votre enregistrement vous pourrez participer &#224; notre syst&#232;me de gestion publicitaire.');


define('_MD_MSG_INDEX_OLAUSER','Bonjour %s, et bienvenue dans la gestion publicitaire de %s.<br /></br>');
define('_MD_MSG_INDEX_NOBANNER','Vous n\'avez aucune banni&#232;re enregistr&eacute;e sur ce site. Au cas o&#249; vous souhaiteriez participer &#224; notre syst&#232;me de publicit&eacute; compl&eacute;tez la fiche de soumission en cliquant <a href=\"inser.php\">ici</a>.');
define('_MD_MSG_INDEX_NOBANNER1','L\'enregistrement de nouvelles banni&#232;res est ferm&eacute; momentan&eacute;ment, si vous voulez inclure une banni&#232;re dans notre syst&#232;me, contactez l\'administrateur du site par l\'interm&eacute;diaire du formulaire de contact ou de message priv&eacute;.');
define('_MD_CARREG','Chargement ...');
define('_MD_MSG_INDEX_CADBANNER','Pour ajouter une nouvelle banni&#232;re, il faut cliquer <a href=\"inser.php\">ici</a>');
define('_MD_MSG_NEWBANNER','Apr&#232;s avoir enregistr&eacute; une banni&#232;re elle sera analys&eacute;e par un mod&eacute;rateur du site. Celui-ci vous adressera un formulaire de contact pour d&eacute;finir les derniers d&eacute;tails, apr&#232;s ceci, si la banni&#232;re est approuv&eacute;e, elle sera activ&eacute;e et affich&eacute;e sur le site.');

define('_MD_TITLE1','Vos banni&#232;res enregistr&eacute;es');
define('_MD_TITLE2','ID ');
define('_MD_TITLE3','CATEGORIE');
define('_MD_TITLE4','AFFICHAGE');
define('_MD_TITLE5','AFFICH. FAITS');
define('_MD_TITLE6','CLICS');
define('_MD_TITLE7','% DE CLICS');
define('_MD_TITLE8','DATE CREATION');
define('_MD_TITLE9','STATUS');
define('_MD_TITLE10','OPTIONS');
define('_MD_TITLE16','CLICS FAITS');

define('_MD_BANNER_STATUS1','Banni&#232;re Active');
define('_MD_BANNER_STATUS2','Banni&#232;re Inactive');

define('_MD_BANNER_EXIBREST','Illimit&eacute;');

define('_MD_EMAIL_STATS','Envoyer les statistiques par email');

define('_MD_TITLE11','Statistiques pour la banni&#232;re n&#176;');
define('_MD_TITLE12','Image :');
define('_MD_TITLE13','Lien :');
define('_MD_TITLE14','Changer le lien');
define('_MD_TITLE15','Envoyer les statistique de cette banni&#232;re par email');

define('_MD_BUTTON1','Ordre');
define('_MD_BUTTON2','Banni&#232;re par page');

//include/function.php
define('_MD_SUBJECT_EMAILSTATS','Statistiques de votre banni&#232;re sur notre site');
define('_MD_BODY1_EMAILSTATS','Suivre les statistiques complets de vos banni&#232;res sur notre site');
define('_MD_BODY2_EMAILSTATS','Nom du Client :');
define('_MD_BODY3_EMAILSTATS','Code Banni&#232;re :');
define('_MD_BODY4_EMAILSTATS','Image banni&#232;re :');
define('_MD_BODY5_EMAILSTATS','Lien banni&#232;re :');
define('_MD_BODY6_EMAILSTATS','Affichages acquis :');
define('_MD_BODY7_EMAILSTATS','Affichages utilis&eacute;s :');
define('_MD_BODY8_EMAILSTATS','Affichages r&eacute;alis&eacute;s :');
define('_MD_BODY9_EMAILSTATS','Clics re&#231;us :');
define('_MD_BODY10_EMAILSTATS','Pourcentage de clics :');
define('_MD_BODY11_EMAILSTATS','Clics acquis :');
define('_MD_BODY12_EMAILSTATS','Clicks r&eacute;alis&eacute;s :');
define('_MD_BODY13_EMAILSTATS','Date d\'enregistrement :');
define('_MD_BODY14_EMAILSTATS','Dur&eacute;e d\'acquisition :');
define('_MD_BODY15_EMAILSTATS','Fin de la p&eacute;riode :');
define('_MD_BODY16_EMAILSTATS','Rapport g&eacute;n&eacute;r&eacute; le :');
define('_MD_BODY17_EMAILSTATS','jours');

define('_MD_MSG_SUCESS_EMAILSTATS','Les statistiques de votre banni&#232;re ont &eacute;t&eacute; envoy&eacute;s avec succ&#232;s &#224; votre E-mail enregistr&eacute; dans votre profil.');
define('_MD_MSG_FAIL_EMAILSTATS','Il y a eu une erreur en essayant de vous envoyer les statistiques sur votre E-mail. Svp, essayez une nouvelle fois plus tard.');

//inser.php
define('_MD_BTN_OP1','Ajouter');
define('_MD_BTN_OP2','Editer');
define('_MD_BTN_OP3','Illimit&eacute;');

define('_MD_TITLE24','Nombre d\'affichage :');
define('_MD_TITLE500','Nombre de clics :');
define('_MD_TITLE5001','P&eacute;riode d\'affichage (en jours) :');
define('_MD_TITLE25','Image (Url) :');
define('_MD_TITLE26','Lien (Url) :');
define('_MD_TITLE27','Utiliser le Html ?');
define('_MD_TITLE28','Code HTML :');
define('_MD_TITLE29','Fen&#202;tre :');
define('_MD_TITLE51_ED','T&eacute;l&eacute;charger la banni&#232;re :');
define('_MD_TITLE5000','Notes :');
define('_MD_TITLE5000_DESC','Mettre ici toutes les notes et suggestions au sujet de votre banni&#232;re, par exemple, l\'emplacement o&#249; votre banni&#232;re doit &#202;tre montr&eacute;e, combien de fois, etc., tout ce que vous jugez n&eacute;cessaire au sujet de l\'affichage de votre banni&#232;re.');

define('_MD_VALUE_BTN1','Ajouter une nouvelle banni&#232;re');
define('_MD_VALUE_BTN3','Editer une nouvelle banni&#232;re');
define('_MD_VALUE_BTN10_ED','Envoyer');

define('_MD_MSG2','Banni&#232;re modifi&eacute;e avec succ&#232;s !!');
define('_MD_MSG8','Banni&#232;re ajout&eacute;e avec succ&#232;s !!');
define('_MD_MSG10','Il y a eu un probl&#232;me en ajoutant la banni&#232;re.');
define('_MD_MSG11','Il y a eu un probl&#232;me en &eacute;ditant la banni&#232;re.');

define('_RW_TAG_ERROR','<div style="color: #FE2626;">Il y a quelque chose d\'&eacute;trange dans l\'affichage de votre banni&#232;re</div>');
?>
