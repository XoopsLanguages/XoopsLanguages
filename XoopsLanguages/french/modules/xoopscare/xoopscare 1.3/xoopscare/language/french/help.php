<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
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
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> est un module dont le but est de vous aider à maintenir votre site web facilement et <b>automatiquement</b>
Bien que nous ayons apporté tous nos soins à ce module, <b>utilisez-le à vos risques et périls !</b>

Avec le module vous pouvez :
1/ Maintenir votre base de données
2/ Exécuter vos propres requêtes SQL
3/ Exécuter du code Php
4/ Nettoyer les répertoire templates_c et cache
5/ Supprimer les commentaires contenant du SPAM
6/ Nettoyer les sessions

Pour chacune de ces actions, vous pouvez définir s'il faut le faire ou pas et quand le faire (vous pouvez le programmer)

En outre, vous pouvez enregistrer les actions réalisées par le module et (si vous en disposez) et utiliser des CRON pour
maintenir votre site.

Si vous avez la possibilité d'appeler le module par un CRON, alors il vous suffit d'appeler le script <i>cron.php</i> présent
à la racine du module et de lui passer un mot de passe que vous avez rentré dans l'administration du module.
	Faites le comme ceci : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>Si vous utilisez un CRON mais que vous n'avez pas rentré de mot de passe, le module ne fera rien</b>, ceci dans le but
de protéger votre site d'une utilisation abusive par d'autres personnes.

Si vous n'avez pas la possibilité d'utiliser un CRON, vous pouvez activer le bloc du module quelque part sur votre site
(où vous voulez) et le module exécutera ses taches automatiquement et lorsque c'est nécessaire.
Astuce : Vous pouvez utiliser du cache sur le bloc.

La première chose à faire est de se rendre dans l'administration du module et de régler les préféfences.

Dans la première partie, <b>Préférences générales</b>, entrez le mot de passe pour le CRON si vous utilisez un CRON.
Si vous souhaitez créer un fichier log, alors remplissez la zone intitulée <i>Fichier Log</i>.
Note, il est recommandé, pour des raisons de sécurité, de donner une extension <u>.php</u> à ce fichier.

Dans la partie intitulée <b>Maintenance de la base de données</b>, entrez un délai en jours pour maintenir votre base de données.
Si vous réglez ce délai à 0 alors le module ne fera rien.
Le processus de cette action consiste à vérifier, réparer, analyser et optimiser toutes les tables utilisées par votre site Xoops.

Dans la partie intitulée <b>Requêtes</b>, rentrez tout d'abord un délai puis (mais uniquement si vous souhaitez vous en servir),
entrez quelques requêtes SQL à exécuter.
Note, le module n'applique aucune modification à vos requêtes, il les prend une par une et les exécute.

Vous pouvez faire la même chose que dans le point précédent mais pour lancer du code Php dans la partie intitulée <b>Code Php</b>

La partie qui s'appelle <b>Cache et Templates_c</b> vous donne la possibilité de nettoyer les répertoires cache et templates_c
(présents à la racine de votre site).

La partie <b>Sessions</b> vous offre la possibilité de nettoyer votre table des sessions à un certain délai.


Finalement, avec la partie intitulée <b>Commentaires spamés</b>, vous pouvez supprimer tous les spam de votre site.
Cette fonctionnalité du module marche conjointement avec la partie <i>Options des mots à censurer</i> de Xoops.
Premièrement, depuis les préférences de votre site, vous devez activer la censure des mots indésirables, entrer les mots
à censurer et choisir un mot qui les remplacera.
Par défaut, les mots censurés sont remplacé par #OOPS#.
Le module XoopsCare cherchera les commentaires qui contienent ce mot de remplacement dans le titre et/ou le contenu des
commentaires et appliquera vos préférences à ces commentaires.
En plus, le module peut extraire les adresses IP des spammeurs et ajouter leur adresse IP automatiquement à la liste
de vos adresses IP à banir.
Finalement, vous pouvez choisir l'action à mettre en oeuvre sur les commentaires spammés, les conserver, ne pas les
publier, les cacher ou les supprimer.


Si vous utilisez un CRON pour nettoyer votre site, alors le délai entré pour chaque action n'est pas utilisé mais doit
être supérieur à 0.


<a href="http://www.instant-zero.com" target="_blank">Faites nous savoir si vous aimez le module</a>

endhelp;
?>
