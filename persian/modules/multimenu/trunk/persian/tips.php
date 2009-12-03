<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: multiMenu 1.90
* Licence : GPL
* Authors :
*           - solo (http://www.wolfpackclan.com/wolfactory)
*			- herve (http://www.herve-thouzard.com)
*			- blueteen (http://myxoops.romanais.info)
*			- DuGris (http://www.dugris.info)
*/

include('../xoops_version.php');

        $i=1; $ii=0;

 	$settings_val_array =  array();
                               foreach( $modversion['config'] as $x => $datas ) {
        $settings_val_array[$i++] = 'پارامتر : ' . constant($datas['title']) . '|<ul><li>' . constant($datas['description']) . '</li><li style="font-style:italic;">' . constant($datas['help']) . '</li></ul>|index.php?admin=settings&num='.$ii++;
                               }

  	 $tips_val_array =  array(
                                  $i++        => 'Astuce : Revenez nous voir !|Lorsque vous crez un lien externe, assignez lui un target "blank" pour que vos visiteurs reviennent plus facilement !',
  	                          $i++        => 'Astuce : Le mode auto|En mode auto, le paramtre "target" dfini automatiquement le mode  adopter si vous crez un lien interne ou externe.',
  	                          $i++        => 'Astuce : En plein dans le mille !|Un target "blank" ouvre le lien dans une nouvelle page. Utilisez-le si vous souhaitez que vos visiteurs retrouvent plus facilement leur chemin.',
  	                          $i++        => 'Astuce : Restez chez nous !|Un target "self" ouvre le lien dans la mme page. Le mode de navigation idal pour rester  l\'intrieur du site.',
  	                          $i++        => 'Astuce : Crez vos propres templates !| ...puis glissez les dans le rpertoire "templates/include/", mettez le module  jour, puis activer la nouvelle template dans les prfrences du module.',
  	                          $i++        => 'Astuce : Utilisez le cache !|Surtout si vos menus ne font pas appelle  des liens dynamiques (requtes, liens relatifs, groupes d\'accs), optimisez les temps d\'accs en activant le cache de vos blocs.',
                                  $i++        => 'Astuce : Les CSS|Les feuilles de style permettent de personnaliser l\'affichage des liens et/ou des menus. Pour plus d\'info visitez <a href="http://www.w3.org/Style/CSS/" target="_blank">W3C</a>.',
                                  $i++        => 'Astuce : Menu cach|Un menu cach ne s\'affichera pas dans les pages d\'index du module. Mais est tout aussi accessbile et actif qu\'un menu "activ".',
                                  $i++        => 'Astuce : Templates identiques|Les templates des pages d\'index et des blocs sont identiques. Plus besoin de chipoter  deux endroits pour les modifier.',
                                  $i++        => 'Astuce : Onglet image|Le gestionnaire d\'images vous permet de grer les illustrations de vos liens et de vos menus. Uniformisez leur format en quelques clics...',
                                  $i++        => 'Astuce : Onglet template|Le gestionnaire de template vous permet d\diter facilement les templates, feuilles de styles et scripts des menus.',
                                  $i++        => 'Astuce : Onglet requte|Le gestionnaire de requtes permet de gnrer des listes de lien dynamiquement  partir de la base de donne du site. Choisissez la table qui vous intresse et cliquez sur <b>[-][[BD] Table]</b> pour en savoir plus  son sujet.',
                                  $i++        => 'Astuce : Supprimer|Lorsque vous supprimez un menu, vous supprimez en mme temps tous les liens qui lui sont rattachs !',
                                  $i++        => 'Astuce : Auto-correction|Lorsque vous insrez une url avec le nom de domaine de votre site, multimenu rcrira automatiquement l\'adresse pour en faire un lien interne.',
                                  $i++        => 'Astuce : Images|N\'utilisez que des images au format .jpg, .jpeg, .gif ou .png. Les autres formats d\'images sont  proscrire sur le web.',
                                  $i++        => 'Astuce : Images|Attention aux images de trop grande taille ! Passez par le gestionnaire d\'images pour les redimensionner au bon format  la vole.',
                                  $i++        => 'Astuce : Faites vos jeux !|Faites un tour par les prfrences du module. Rglez les paramtres selon vos choix, et n\'y touchez plus.',
                                  $i++        => 'Astuce : Soyez "Robot Friendly".|Utilisez les textes alternatifs (infobulles) dans vos liens et placez-y vos mots cls.',
                                  $i++        => 'Astuce : Lien permanent|Un lien permanent s\'affichera en toute circonstance... pour peu que lui en donniez la permission.',
                                  $i++        => 'Astuce : Lien relatif|Un lien relatif ne s\'affichera que si le module indiqu dans le lien principal correspond au module de la page en cours.',
                                  $i++        => 'Astuce : Les permissions|Les groupes permettent de dfinir qui a accs  quel menu et/ou quel lien. Soyez cohrent dans vos choix !',
                                  $i++        => 'Astuce : Besoin de blocs supplmentaires ?|Dans les prfrences gnrales du module, indiquez exactement le nombre qu\'il vous faut, et mettez votre module  jour !',
                                  $i++        => 'Astuce : Besoin de cloner le module ?|Allez voir dans les <a href="index.php?admin=utils">"utilitaires"</a>, et dupliquez votre module en deux clics de souris.',
                                  $i++        => 'Astuce : Requte|Pour crer une nouvelle requte dans la base de donne, inspirez-vous des requtes fournies par dfaut.',
                                  $i++        => 'Astuce : Ayez de l\'{id}.| Que ce soient pour les requtes, les feuilles de style ou les scripts, le tag {id} est utile pour rfrenc le menu en cours.',
                                  $i++        => 'Astuce : Clonage|Vous pouvez cloner un module avec tout ses liens en un seul clic. N\'oubliez pas de modifier son titre !',
                                  $i++        => 'Astuce : Image distante ou locale ?|Prfrez les images stockes sur votre serveur. Ce sont les seules sur lesquelles vous ayez un contle total !',
                                  $i++        => 'Astuce : Image distante|Une image distante peut tre hberge ailleurs que sur votre site. Mais attention aux petites croix rouges si on vient  les renommer, dplacer ou supprimer !',
                                  $i++        => 'Astuce : Image locale|Les images locales sont hberges sur votre propre serveur. Vous pouvez aussi les redimenssionner  l\'aide du gestionnaire d\'image du module.',
                                  $i++        => 'Astuce : Facilitez la navigation !|Tchez de respecter la "rgle des 3 clics" qui stipule que toute information dot tre accessible en moins de 3 clics',
                                  $i++        => 'Astuce : Facilitez la navigation !|Une liste d\'items doit de prfrence comporter moins de 7 lments. Evitez les menus "trop longs".',
                                  $i++        => 'Astuce : Optimisez vos images !|Il convient d\'optimiser au maximum la taille des images, en choisissant un format adapt et un nombre de couleurs le plus petit possible. Il est recommand de ne pas dpasser 30  40 ko maximum par image',
                                  $i++        => 'Astuce : Bien concevoir le menu principal !|A tout moment le visiteur doit pouvoir tre en mesure de se reprer dans le site (et retrouver la Home page).',
                                  $i++        => 'Astuce : Uniformisez votre menu !|Les lments de navigation doivent tre situs au mme endroit sur toutes les pages, si possible avec une prsentation uniforme d\'une page  une autre.',
                                  $i++        => 'Astuce : De bon titres !|Crez des liens privilgiant le texte, aux libells clairs, sans "devinettes" ou messages cachs, avec une prsentation standard.',
                                  $i++        => 'Astuce : Plan du site !|Offrez des pistes vers l\'ensemble des informations disponibles ds la page d\'accueil',
                                  $i++        => 'Astuce : Allez  l\'essentiel !|Les liens les plus importants doivent tre fortement mis en valeur (la boutique pour un site de vente en ligne, les nouveauts sur le site, etc.), mais cela n\'interdit pas que la page d\'accueil soit trs riche d\'autres liens.',
                                  $i++        => 'Astuce : Evitez les textes en image !|Le texte sous forme d\'image, mme si cela permet de mieux en contrler la prsentation, est non seulement rdhibitoire du point de vue du temps de chargement, mais galement pour les moteurs de recherche.',
                                  $i++        => 'Astuce : "Keep it simple !"|Le systme de navigation doit tre simple et intuitif. Inutile de proposer tous les liens sur la page accueil. Une barre de navigation vers les principales rubriques suffit (cela n\'interdit pas, nanmoins, de proposer un systme d\'accs rapide sous forme, par exemple, de menu droulant en Javascript).',
                                  $i++        => 'Astuce : Deux valent mieux qu\'un !|Multipliez les systmes de navigation alternatifs (Ex: une barre de menu sous forme graphique, avec des effets "rollovers" simples, une barre de navigation texte, etc.) pourvu que ces systmes soient bien distincts visuellement. Evitez de les grouper tous au mme endroit, et rpartissez les en tenant compte du parcours de l\'internaute.',
                                  $i++        => 'Astuce : HELP !|Cliquez sur le lien "[+][Aide]" pour afficher l\'aide en ligne dans les formulaires d\'dition.',
                                  $i++        => 'Astuce : Virez-moi !|Pas besoin de ces astuces encombrantes ? Dsactivez les dans <a href="index.php?admin=settings&sub=edit">les prfrences du module</a>.',
                                  $i++        => 'Astuce : Faites votre choix !|Choisissez vos templates prfres et dsactivez les autres dans <a href="index.php?admin=settings&sub=item">les prfrences du module</a>.',
                                  $i++        => 'Astuce : Voir le code|Lorsque vous crez ou modifiez un template, visualisez directement le code gnr en activant la fonction <b>Activer le mode "Editon de template"</b> les dans <a href="index.php?admin=settings&sub=index">les prfrences du module</a>.',
                                  $i++        => 'Astuce : Prenez le bon chemin|En crant un menu, vous avez la possibilit de dterminer le rpertoire de stockage des images. Vrifiez que celui-ci est bien ouvert en criture !',
                                  $i++        => 'Astuce : Changement d\'adresse|Lorsque vous dplacez un lien avec une image d\'un menu  l\'autre, vrifiez bien que le rpertoire de stockage du nouveau menu dispose de l\'image.',
                                  $i++        => 'Astuce : A chaque menu son rpertoire|En crant un nouveau  menu, ajoutez lui son propre rpertoire de stockage (cr automatiquement par le module) pour viter tout conflit ultrieur.',
                                  $i++        => 'Astuce : Au bon menu le bon bon bloc|Choisissez le bloc qui affichera votre menu dans <a href="index.php?admin=blocks">l\'onglet blocs</a>, et profitez-en pour vrifier les paramtres de groupes du module.'
                                  );

 	$info_val_array =  array( $i++        => 'Le saviez-vous ?|A l\'origine, multimenu tait une version amliore de imenu, dvelopp par un autre belge Linthuin.',
  	                          $i++        => 'Le saviez-vous ?|Dans sa version 1, multimenu  connu plus de 9 versions successives. La dernire tant la 1.9.',
  	                          $i++        => 'Le saviez-vous ?|Pour leur majorit, les personnes qui ont contribu  la ralisation de ce modules ne sont pas des dveloppeurs professionnel !',
                                  $i++        => 'Le saviez-vous ?|multimenu a t dvelopp avec le logiciel diteur de texte <a href="http://www.contexteditor.org/" target="_blank">ConTEXT</a>.',
                                  $i++        => 'Le saviez-vous ?|Dans sa premire version, multimenu s\'crivait "multiMenu". Le M a t rduit en minuscule pour faciliter le clonage du module. Sur la toile, cela fait toute la diffrence !',
                                  $i++        => 'Le saviez-vous ?|Le nombre d\'heures consacres au dveloppement de ce module est incalculable. Depuis sa premires versions, des milliers d\'heures lui ont t consacr...',
                                  $i++        => 'Le saviez-vous ?|Lors de la sortie de multiMenu 1.8, plus de 600 posts ont t publis  son sujet dans les forums de www.frxoops.org et www.xoops.org.',
                                  $i++        => 'Le saviez-vous ?|Les dveloppeurs qui ont contribu  multimenu n\'en ont pas touch un seul franc. C\'est a l\'open source !',
                                  $i++        => 'Le saviez-vous ?|multimenu a t dvelopp pour Xoops 2.x uniquement. On ne retrouve aucun module similaire dans d\'autre CMS.',
                                  $i++        => 'Le saviez-vous ?|Les dveloppeurs de multimenu sont majoritairement  francophones et membres actifs de <a href="http://www.frxoops.org" target="_blank">FRXoops</a>.',
                                  $i++        => 'Le saviez-vous ?| Loi de Murphy : principe empirique nonant que s\'il existe une possibilit de mauvaise manipulation d\'un produit ou d\'une mthode, quelqu\'un fera un jour cette erreur d\'utilisation. Cette loi  prsid  la ralisation de ce module, mais les ressources de Murphy restent toujours impntrables. ;-)'
                                  );

if(!isset($only_data)) {
        $item_val_array = $info_val_array + $settings_val_array + $tips_val_array;
        $tips_count = count($item_val_array);

// Render defines
        $i=1;
 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_TI_MULTIMENU_'.$item_lg),$item_val);
	}
}
?>