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
// Author: Rodrigo Pereira Lima (BrInfo - Soluções Web)                      //
// Site: http://www.brinfo.com.br                                            //
// Project: RW-Banner                                                        //
// Descrição: Sistema de gerenciamento de mídias publicitárias               //
// ------------------------------------------------------------------------- //

//admin/index.php
define('_ADM_MSG1','Status mis &#224; jour avec succ&#232;s !!');
define('_ADM_MSG2','Banni&#232;re mise &#224; jour avec succ&#232;s !!');
define('_ADM_MSG8','Banni&#232;re ajout&eacute;e avec succ&#232;s !!');
define('_ADM_MSG101','Banni&#232;re effac&eacute;e avec succ&#232;s !!');
define('_ADM_MSG10','Il y a eu un probl&#232;me en ajoutant la banni&#232;re.');
define('_ADM_MSG11','Il y a eu un probl&#232;me en &eacute;ditant la banni&#232;re.');
define('_ADM_MSG3','&#202;tes vous sûr de vouloir supprimer cette cat&eacute;gorie et toutes ses banni&#232;res ???');
define('_ADM_MSG4','Cat&eacute;gorie modifi&eacute;e avec succ&#232;s !!');
define('_ADM_MSG5','Cat&eacute;gorie cr&eacute;&eacute;e avec succ&#232;s !!');
define('_ADM_MSG102','Cat&eacute;gorie et ses banni&#232;res supprim&eacute;es avec succ&#232;s !!');
define('_ADM_MSG6','Il y a eu un probl&#232;me en cr&eacute;ant la cat&eacute;gorie.');
define('_ADM_MSG7','Il y a eu un probl&#232;me en &eacute;ditant la cat&eacute;gorie.');
define('_ADM_MSG12','Choisissez en premier un mod&#232;le de bloc.');
define('_ADM_MSG13','Bloc ajout&eacute; avec succ&#232;s ! Ins&eacute;rez le code ci-dessous dans le templates &#224; l\'endroit exact o&#249; vous voulez que celui-ci soit affich&eacute;.');
define('_ADM_MSG14','Bloc modifi&eacute; avec succ&#232;s !!');
define('_ADM_MSG15','Voulez-vous vraiment effacer ce bloc ?');
define('_ADM_MSG16','Bloc effac&eacute; avec succ&#232;s !!');
define('_ADM_MSG17','R&eacute;pertoire de t&eacute;l&eacute;versement par d&eacute;faut cr&eacute;&eacute; avec succ&#232;s !!!');
define('_ADM_MSG18','Il y a eu une erreur lors de la cr&eacute;ation du dossier de t&eacute;l&eacute;versement par d&eacute;faut pour les banni&#232;res !!! Svp, essayez de nouveau.');
define('_ADM_MSG19','Etes vous sûr de vouloir effacer cette banni&#232;re ?');
define('_ADM_MSG20','Etes vous sûr de vouloir effacer ce tag ?<br />ATTENTION : En supprimant le tag de la base de donn&eacute;es, vous devez &eacute;galement effacer manuellement celui-ci des templates o&#249; il est affich&eacute; pour &eacute;viter tout probl&#232;me d\'affichage.');
define('_ADM_MSG21','Tag effac&eacute; avec succ&#232;s !!');
define('_ADM_MSG22','Tag ajout&eacute; avec succ&#232;s !!');
define('_ADM_MSG23','Il y a eu un probl&#232;me en ajoutant le tag.');
define('_ADM_MSG24','Tag modifi&eacute; avec succ&#232;s');
define('_ADM_MSG25','Il y a eu un probl&#232;me en &eacute;ditant le tag.');

define('_ADM_TITLE1','Banni&#232;res enregistr&eacute;es ');
define('_ADM_TITLE2','ID');
define('_ADM_TITLE3','CLIENT');
define('_ADM_TITLE4','CATEGORIE');
define('_ADM_TITLE5','AFFICHAGE');
define('_ADM_TITLE6','AFFICH. FAITS');
define('_ADM_TITLE7','CLICS');
define('_ADM_TITLE8','% DE CLICS');
define('_ADM_TITLE9','DATE CREATION');
define('_ADM_TITLE10','STATUS');
define('_ADM_TITLE11','OPTIONS');
define('_ADM_TITLE12','Cat&eacute;gories enregistr&eacute;es');
define('_ADM_TITLE13','TITRE');
define('_ADM_TITLE14','N&#176; BANNIERES');
define('_ADM_TITLE15','MODULE');
define('_ADM_TITLE16','Clients avec banni&#232;res');
define('_ADM_TITLE17','CLIENT');
define('_ADM_TITLE18','CONTACT');
define('_ADM_TITLE19','EMAIL');
define('_ADM_TITLE20','BANNIERES');
define('_ADM_TITLE39','CLICS FAITS');
define('_ADM_TITLE40','Blocs templates');
define('_ADM_TITLE41','Choisissez le mod&#232;le de bloc que vous voulez s\'ins&eacute;rer dans vos templates');
define('_ADM_TITLE42','S&eacute;lectionner un bloc');
define('_ADM_TITLE43','DESCRIPTION');
define('_ADM_TITLE44','N&#176; COLONNE');
define('_ADM_TITLE45','TEMPS RAFRAICHISSEMENT (ms)');
define('_ADM_TITLE46','Style');
define('_ADM_TITLE47','Ins&eacute;rer ici le code CSS pour le bloc. Attention, dans le th&#232;me il y a d&eacute;j&#224; par d&eacute;faut un mod&#232;le de CSS pour un bloc, ne changez pas le nom des classes, uniquement les adapter &#224; vos besoins.');
define('_ADM_TITLE48','Ins&eacute;rez ici une courte description au sujet du bloc. Nous recommandons d\'&eacute;crire ici le templates qui sera employ&eacute; et toutes information qui peut expliciter l\'usage du bloc.');
define('_ADM_TITLE49','INCLUSION ID');
define('_ADM_TITLE50','Cliquez sur le bouton "G&eacute;n&eacute;rez" pour cr&eacute;er le code &#224; ins&eacute;rer. Celui-ci devra &#202;tre ins&eacute;r&eacute; dans le templates, &#224; l\'endroit exact o&#249; le bloc de la banni&#232;re sera affich&eacute;. Rappelez-vous que la couleur, la position, la police et les formats de taille d&eacute;pendent du CSS choisi dans cet &eacute;cran.');
define('_ADM_TITLE51','G&eacute;n&eacute;rez le code &#224; ins&eacute;rer');
define('_ADM_TITLE52','FICHIER');
define('_ADM_TITLE53','Le temps doit &#202;tre indiqu&eacute; en millisecondes. Par exemple : Si vous voulez changer les banni&#232;res toutes les 10 secondes, ins&eacute;rez la valeur de 10000 millisecondes. Poour 30 secondes, 30000 millisecondes et ainsi de suite ...');
define('_ADM_TITLE99','DATE EXPIRATION');

define('_ADM_TAG_TITLE01','ID');
define('_ADM_TAG_TITLE02','TITRE');
define('_ADM_TAG_TITLE03','TAG SMARTY');
define('_ADM_TAG_TITLE04','CATEGORIE');
define('_ADM_TAG_TITLE05','TOTAL BANNIERES');
define('_ADM_TAG_TITLE06','TOTAL COLONNES');
define('_ADM_TAG_TITLE07','STATUS');
define('_ADM_TAG_TITLE08','Ajouter un nouveau tag');
define('_ADM_TAG_TITLE09','Titre:');
define('_ADM_TAG_TITLE10','Cat&eacute;gorie :');
define('_ADM_TAG_TITLE11','Nombre de banni&#232;res :');
define('_ADM_TAG_TITLE12','Nombre de colonnes :');
define('_ADM_TAG_TITLE13','Toutes les cat&eacute;gories');
define('_ADM_TAG_TITLE14','Tag Smarty :');
define('_ADM_TAG_TITLE15','ATTENTION : Ce sera le nom pour le tag cr&eacute;&eacute;, vous ne devez pas utiliser d\'espaces, de caract&#232;res accentu&eacute;s ou sp&eacute;ciaux. Si  vous voulez combiner des mots s&eacute;par&eacute;s, utiliser un underline (_) entre chacun.');
define('_ADM_TAG_TITLE16','Afficher seulement dans le module :');
define('_ADM_TAG_TITLE17','Tous les modules');
define('_ADM_TAG_TITLE18','Status du Tag :');
define('_ADM_TAG_TITLE19','MODULES');
define('_ADM_TAG_TITLE20','NOTES :');
define('_ADM_TAG_TITLE21','Nous recommmendons d\'entrer dans ce formulaire tous les endroits o&#249; les tags ont &eacute;t&eacute; employ&eacute;s de sorte que quand vous ne d&eacute;sirerez plus continuer de l\'utiliser, ils seront faciles &#224; retrouver et enlever.');
define('_ADM_TAG_TITLE22','Code Banni&#232;re :');
define('_ADM_TAG_TITLE23','Mettez dans ce champ le code de la seule banni&#232;re que vous d&eacute;sirez afficher pour ne montrer que cette derni&#232;re.');

define('_ADM_TAG_STATUS1','Tag Actif');
define('_ADM_TAG_STATUS2','Tag Inactif');

define('_ADM_VALUE_BTN1','Ajouter une banni&#232;re');
define('_ADM_VALUE_BTN2','Voir une banni&#232;re');
define('_ADM_VALUE_BTN3','Editer une banni&#232;re');
define('_ADM_VALUE_BTN4','Retirer une banni&#232;re');
define('_ADM_VALUE_BTN5','Ajouter une cat&eacute;gorie');
define('_ADM_VALUE_BTN6','Editer une cat&eacute;gorie');
define('_ADM_VALUE_BTN7','Modifier une cat&eacute;gorie');
define('_ADM_VALUE_BTN8','Ajouter un Client');
define('_ADM_VALUE_BTN9','Editer une cat&eacute;gorie');
define('_ADM_VALUE_BTN10','Ajouter');
define('_ADM_VALUE_BTN11','Template blocs');
define('_ADM_VALUE_BTN12','Ajouter un Tag');

define('_ADM_BANNER_STATUS1','Banni&#232;re Active');
define('_ADM_BANNER_STATUS2','Banni&#232;re Inactive');
define('_ADM_BANNER_STATUS3','Envoy&eacute; par client. En attente !');
define('_ADM_BLOCK_STATUS1','Actif');
define('_ADM_BLOCK_STATUS2','Inactif');

define('_ADM_BANNER_EXIBREST','Illimit&eacute;');

define('_ADM_CATEG_ALLMOD','Tout');
define('_ADM_NO_CATEG','D&eacute;finir une Cat&eacute;gorie');

define('_AM_RWBANNER_PREF','Pr&eacute;f&eacute;rences');
define('_AM_RWBANNER_OPTS','Blocs / Groupes');
define('_AM_RWBANNER_GOMOD','Aller au module');
define('_AM_RWBANNER_ABOUT','Au sujet du module');
define('_AM_RWBANNER_DEMO','Support');
define('_AM_RWBANNER_MODADMIN','- Administration G&eacute;n&eacute;rale :');
define('_AM_RWBANNER_INDEX','Index');

define('_AM_RWBANNER_LIST_BANNER','Liste de toutes les banni&#232;res enregistr&eacute;es');
define('_AM_RWBANNER_LIST_BANNER_DESC','Liste des banni&#232;res enregistr&eacute;es dans la r&eacute;gie. Dans cette liste vous pouvez supprimer des statistiques des banni&#232;res comme les &eacute;diter. Pour changer l\'ordre d\'affichage des banni&#232;res cliquez sur le nom des colonnes.');
define('_AM_RWBANNER_LIST_CATEG','Liste des cat&eacute;gories enregistr&eacute;s');
define('_AM_RWBANNER_LIST_CATEG_DESC','Liste de toutes les cat&eacute;gories enregistr&eacute;es dans la r&eacute;gie. Dans cette liste, vous pouvez &eacute;diter et effacer les cat&eacute;gories.');
define('_AM_RWBANNER_LIST_USERS','Liste de tous les clients avec des banni&#232;res');
define('_AM_RWBANNER_LIST_USERS_DESC','Liste de tous les membres enregistr&eacute;s qui poss&#232;dent des banni&#232;res dans la r&eacute;gie publicitaire.');
define('_AM_RWBANNER_LIST_TAG','Liste des tags Smarty Tags enregistr&eacute;s');
define('_AM_RWBANNER_LIST_TAG_DESC','Liste de tous les tags smarty. Ces tags sont automatiquement cr&eacute;&eacute;es, et permettent d\'afficher les blocs dans le th&#232;me ou les templates des modules selon votre configuration.<br/> Pour afficher les banni&#232;res dans les temlates ou le th&#232;me, il faut placer le tag &#224; l\'endroit pr&eacute;cis o&#249; l\'on d&eacute;sire afficher les banni&#232;res. Vous pouvez d&eacute;sactiver les tags &#224; tout moment en cliquant l\'icône dans la colonne de statut. <p style=\'color:#FF0000;\'><b>ATTENTION :</b> Pour activer la fonction des TAGS, il est n&eacute;cessaire de modifier le core de Xoops. Pour r&eacute;aliser le hack, le fichier README.TXT d&eacute;crit la manipulation &#224; r&eacute;alis&eacute;e.</p>');

define('_AM_RWBANNER_NODIR','Le r&eacute;pertoire par d&eacute;faut pour les banni&#232;res est inexistant ou inaccessible.<br /><font color="red">R&eacute;pertoire par d&eacute;faut : "%s"</font> <a href="main.php?op=criardir">Cr&eacute;er un r&eacute;pertoire</a>');

define('_ADM_TOTAL_BANNER_LEG','Total de banni&#232;res enregistr&eacute;es :');

//admin/edita.php
define('_ADM_MSG5_ED','Tous les champs sont obligatoires !!!');

define('_ADM_TITLE21','Editer la banni&#232;re n&#176;');
define('_ADM_TITLE22','Client :');
define('_ADM_TITLE23','Cat&eacute;gorie :');
define('_ADM_TITLE24','Num&eacute;ro d\'affichage :');
define('_ADM_TITLE500','Nombre de clic :');
define('_ADM_TITLE5001','P&eacute;riode d\'affichage (en jours) :');
define('_ADM_TITLE25','Image(Url) :');
define('_ADM_TITLE26','Lien (Url) :');
define('_ADM_TITLE27','Utiliser le Html ?');
define('_ADM_TITLE28','Code HTML :');
define('_ADM_TITLE29','Fen&#202;tre :');
define('_ADM_TITLE51_ED','T&eacute;l&eacute;versement de la Banni&#232;re :');
define('_ADM_TITLE5000','Notes :');
define('_ADM_TITLE5000_DESC','Dans ce formulaire le client d&eacute;fini les informations concernant sa banni&#232;re, apr&#232;s analyse des renseignements indiqu&eacute;s, une strat&eacute;gie publicitaire pourra &#202;tre d&eacute;termin&eacute;e pour cette banni&#232;re.');

define('_ADM_VALUE_BTN10_ED','Envoyer');

//admin/editacateg.php
define('_ADM_MSG6_EDC','Cette cat&eacute;gorie a enregistr&eacute; de nouvelles banni&#232;res, ne pas oublier de les &eacute;diter pour v&eacute;rifier/modifier la taille, de telle sorte qu\'elles soient compatibles pour &eacute;viter tout probl&#232;me d\'affichage !!!');

define('_ADM_TITLE30','Editer la Cat&eacute;gorie n&#176;');
define('_ADM_TITLE31','Titre :');
define('_ADM_TITLE32','Largueur de la banni&#232;re :');
define('_ADM_TITLE33','Hauteur de la banni&#232;re :');
define('_ADM_TITLE34','Attacher au module :');

//admin/insere.php
define('_ADM_TITLE35','Ajouter une nouvelle banni&#232;re');
define('_ADM_TITLE36','Num&eacute;ro d\'affichage :');

//admin/inserecateg.php
define('_ADM_TITLE38','Ajouter une nouvelle cat&eacute;gorie');
define('_ADM_TITLE37','En choisissant un ou plusieurs modules dans cette option, vous d&eacute;finissez que toutes banni&#232;res produites par ce tag seront montr&eacute;es dans le(s) module(s) s&eacute;lectionn&eacute;(s).');

//admin/myblocksadmin.php
define('_AM_RWBANNER_BLOCKS','Blocs');
define('_AM_RWBANNER_BLOCKSINFO','Vous pouvez installer le bloc ici ou dans le module syst&#232;me. Vous avez &eacute;galement l\'option de cloner le bloc.');
define('_AM_RWBANNER_GROUPS','Groupes');
define('_AM_RWBANNER_GROUPSINFO','Installez le module et param&eacute;trez les permissions pour chaque groupe');
define('_AM_RWBANNER_POSITION','Position');


define('_ADM_BTN_OP1','Ajouter');
define('_ADM_BTN_OP2','Editer');
define('_ADM_BTN_OP3','Illimit&eacute;');

//admin/upgrade.php
define('_AM_RWBANNER_UPGRADEFAILED','Il y a eu une erreur pendant le processus de t&eacute;l&eacute;versement ! Svp, essayez encore !');
define('_AM_RWBANNER_UPGRADEFAILED1','Il y a eu une erreur en cr&eacute;ant la table des banni&#232;res !');
define('_AM_RWBANNER_UPGRADEFAILED2','Il y a eu une erreur en cr&eacute;ant la table des cat&eacute;gories !');
define('_AM_RWBANNER_UPGRADEFAILED3','Il y a eu une erreur en cr&eacute;ant la table des TAGS !');

define('_AM_RWBANNER_UPGRADECOMPLETE','Mise &#224; jour des tables r&eacute;alis&eacute;e avec succ&#232;s ! Suivez les &eacute;tapes ci-dessous pour activer toutes les fonctionnalit&eacute;s du module, puis cliquer sur le lien suivant.');
define('_AM_RWBANNER_UPGRADECOMPLETE1','Le code pour l\'affichage de la banni&#232;re dans le th&#232;me et templates a &eacute;t&eacute; modifi&eacute;, vous devez le changer dans ce fichier  ".XOOPS_ROOT_PATH."/header.php par le suivant :');
define('_AM_RWBANNER_UPGRADECOMPLETE2','Vous avez maintenant un nouveau dispositif de gestion des banni&#232;res, permettant de les afficher dans n\'importe quel module acceptant les bbcode tels que les news, articles, y compris les forums. Pour que ce nouveau dispositif soit totalement actif vous devez modifier le fichier ".XOOPS_ROOT_PATH."/class/module.textsanitizer.php.<br />La modification du code est &#224; r&eacute;aliser &#224; la fin de la fonction xoopsCodeDecode. POur faire cette manipulation facilement, il faut lire le fichier : function_bbcode_xoops2015.txt dans le dossier de documentation de ce module.');

define('_AM_RWBANNER_UPDATEMODULE','Templates et Blocs mis &#224; jour');

define('_AM_RWBANNER_IMPORT','Importation');
define('_AM_IMPORT_TITLE','Importez les banni&#232;res s&eacute;lectionn&eacute;es du syst&#232;me de Xoops pour RW-Banner ');
define('_AM_IMPORT_TITLE1','Cat&eacute;gories RW-Banner');
define('_AM_IMPORT_TITLE2','Client RW-Banner');
define('_AM_IMPORT_TITLE3','Importation ?');
define('_AM_SUCCESS_IMPORT','Importation r&eacute;alis&eacute;e avec succ&#232;s. L\'ancien syst&#232;me donne peu d\'informations pour les banni&#232;res, il faut les &eacute;diter et les configurer correctement. ');
define('_AM_FAIL_IMPORT','Quelques probl&#232;mes ont &eacute;t&eacute; rencontr&eacute;s lors du processus d\'importation ! ');
?>
