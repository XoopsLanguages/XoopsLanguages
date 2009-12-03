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

 	$help_val_array =  array( 
'menuopth'        => '<h3>Options des menus</h3>
         Voici quelques options complémentaires concernant les menus.<ul>
         <li><b>Répertoire de stockages des images :</b> Déterminer le répertoire dans lequel seront stockés les images du menu.</li>
         <li><b>Template :</b> Déterminer le style de menu (template) qui sera appliqué par défaut à ce menu.</li>
         <li><b>Groupes :</b> Déterminer quels groupes d\'utilisateurs auront accès à ce menu.</li>
         </ul>
         ',
         
'menucssh'        => '<h3>Style des menus</h3>
         Vous pouvez attribuer un style spécifique à chaque menu.
         Les informations indiquées seront répercutées dans une feuille de style qui s\'affichera dans le code source de la page.
         Vous devez donc écrire vos définitions comme pour une feuille de style normale.
         La balise {id} permettra de spécifier exactement à quel class ou id, les modifications s\'appliqueront et permettront ainsi de ne pas interférer avec un autre menu.

         <b><u>Exemple</u> :</b>
         <div style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;">#multimenu_{id} { 
   border: 2px Outset Red;
            }
#multimenu_{id} a { 
   color:Red;
   }
#multimenu_{id} a:hover { 
   color:Green;
   }</div>

         Notez que le style sera appliqué aux liens de l\'ensemble du menu concerné.
         
         Les définitions indiquées prioritaire sur toute définition déclarées précédemment (thème du site, feuille de style du module ou de la template en cours,...)
         ',

'linkopth'        => '<h3>Options des liens</h3>
         Voici quelques options complémentaires concernant les liens.<ul>
         <li><b>Texte alternatif :</b> Ajouter un texte descriptif qui complètera les informations relatives au lien. Notez que cet aspect est important pour un meilleur référencement de vos pages, ainsi que l\'accessibilité aux personns non voyantes.</li>
         <li><b>Requête :</b> Détermine quelle requête (permettant de générer automatiquement une liste de liens) affecter à ce lien. 3 cas de figure :
         <ol><li><b>Lien principal avec url</b> : afficher le lien principal avec tous les liens de la requête en sous-lien.</li>
         <li><b>Lien principal sans url</b> : masque le lien principal et affiche tous les liens de la requête en lien principal.</li>
         <li><b>Lien secondaire avec url</b> : affiche le lien principal et tous les liens de la requête en lien secondaire.</li>
         <li><b>Lien secondaire sans url</b> : masque le lien principal et affiche tous les liens de la requête en lien secondaire.</li></ol></li>
         <li><b>Menus :</b> sélectionner à quel menu est affecté le lien.
         Attention, changer un sous-lien de menu nécessite de lui réattribuer un lien principal !
         Attention, si une image est affecté au lien et que le répertoire de stockage n\'est pas le même pour le nouveau menu, lui affecter une nouvelle image.</li>
         <li><b>Type :</b> 2 types de liens possible :<ol>
         <li><b>permanent</b> : le lien s\'affichera en permanence.</li>
         <li><b>relatif</b> : le lien ne s\'affichera que si l\'adresse du lien principal correspond au module en cours.</li></ol></li>
         <li><b>Cible :</b> 3 types de cible :<ol>
         <li><b>Auto</b> : le module détecte lui-même la meilleur configuration selon l\'adresse (url) utilisée.</li>
         <li><b>Self</b> : le lien s\'ouvrira dans la même page. Idéal pour les liens pointant vers des pages <u>internes</u> du site.</li>
         <li><b>Blank</b> : le lien s\'ouvrira dans une nouvelle page. Idéal pour les liens pointant vers des pages <u>externes</u> du site.</li></ol></li>
         <li><b>Groupes :</b> Déterminer quels groupes d\'utilisateurs auront accès à ce lien.</li>
         </ul>
         ',
         
'linkcssh'        => '<h3>Style des liens</h3>
         Vous pouvez attribuer un style spécifique à chaque lien.
         Les informations indiquées ici, seront répercutées dans la balise : <i>style=""</i>.
         Vous devez donc écrire vos définitions comme dans une feuille de style normale, sans indiquer de class ou d\'id.

         <b><u>Exemple</u> :</b>
         <div style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;">color:Red; font-weight:bold; border: 1px plain Red;</div>
         
         Notez que le style sera appliqué au lien dans la liste admin des liens, pour mieux vous rendre compte du résultat.
         
         Les définitions indiquées pour chaque lien seront donc prioritaire sur toute définition déclarées précédemment (thème du site, feuille de style du module ou du menu en cours,...)
         Si le style ne s\'applique pas, vérifiez bien que la template du menu activé comporte bien la code suivant <input style="border:1px Inset Black; background:LightGrey;" value=\'<{if $item.css}>style="<{$item.css}>"<{/if}>\' size="45" /> dans la définition du lien.
         
         <b><u>Exemple</u> :</b>
         <textarea style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;"><a href="<{$item.link}>" <{if $item.css}>style="<{$item.css}>"<{/if}> > <{$item.title}> </a></textarea>
         ',
         
'query'        => '<h3>Requêtes</h3>
         Vous pouvez créer une liste de liens à partir des données enregistrées dans la base de donnée, à partir de n\'importe quel module.
         
         Une fois la table séléctionnée, vous pouvez en visualiser le contenu en ouvrant le panneau <b>"[+][[BD] Table]"</b>. 
         Le tableau affiche alors la composition de la table sélectionnée.
         Pour vous aider dans vos paramétrage le tableau fera une séléction colorées des données qui pourraient vous intéresser :
         <ul>
         <li style="color:Red;"><b>En rouge :</b> les clés ID</li>
         <li style="color:Green;"><b>En vert :</b> les sujets (champs pour générer les titres des liens)</li>
         <li style="color:Blue;"><b>En bleu :</b> les contenu (champs pour générer les balises alternatives)</li>
         <li style="color:Orange;"><b>En orange :</b> les images (champs pour générer les vignettes ou images des liens)</li>
         </ul>Une fois la table bien analysée, vous pouvez créer la requête qui va générer la liste de lien qui vous intéresse. 2 étapes :
         <ul>
         <li><b><u>Etape 1</u> : les indispensables</b>
         <ol>
         <li><b>Titre :</b> indiquer un titre significatif. Ce titre vous permettra de retrouver facilement la requête souhaitée pour la génération de vos liens.</li>
         <li><b>[BD] Table :</b> Nom de la table sélectionnée.</li>
         <li><b>[BD] Champ ID :</b> Champ d\'identification des données. C\'est cette valeur qui se retrouvera dans les opérateurs du lien.</li>
         <li><b>[BD] Champ sujet :</b> Champ reprenant le nom ou le titre du lien.</li>
         <li><b>Adresse des liens :</b> URL utilisée pour la génération des liens.
         Pour retrouver l\'url correcte, sélectionner et recopier l\'url de l\'une des pages du module concerné. Remplacer l\'id de l\'url par la balise <b>{id}</b>. </li>
         </ol>
         </li><li><b><u>Etape 2</u> : les options</b>
         <ol>
         <li><b>[BD] Champ alternatif :</b> Champ contenant des informations à afficher comme texte alternatif.</li>
         <li><b>[BD] Champ image :</b> Champ contenant l\'image à lier à ce lien. Uniquement si le module propose une images spécifique pour chaque entrée.</li>
         <li><b>Répertoire de stockage des images :</b> Utilisé uniquement si le champ <b>[BD] Champ image</b> a été renseigné. Indiquer l\'adresse de stockage des images du module (si nécessaire). .</li>
         <li><b>[BD] Conditions :</b> Correspond à la clause <b>WHERE</b> d\'une requête.
         Effectue un tri parmi les liens à partir de n\'importe quelle condition lié à un champ de la table sélectionnée. 
         Les conditions multiples peuvent être séparée par les opérateur <b>AND</b> et/ou <b>OR</b>. 
         La balise <b>{date}</b> et <b>{uid}</b> peuvent-être utilisées pour insérer les valeurs dynamiques de la date ou de l\'utilisateur courant.
         (Exemple : to_userid={uid} AND read_msg=0)</li>
         <li><b>[BD] Ordre d\'affichage des données :</b> Correspond à la clause <b>ORDER BY</b> d\'une requête. 
         Permet d\'indiquer l\'ordre dans lequel on veut voir s\'afficher la liste de lien.
         Indiquer un ou plusieurs champs de la table sélectionnée suivi de <b>ASC</b> ou <b>DESC</b> et séparés par une virgule.
         (Exemple : from_userid ASC, msg_time DESC ).</li>
         <li><b>Nombre maximum de liens à afficher :</b> Indiquer le nombre maximum de liens à afficher à l\'aide de cette requête.</li>
         </ol>
         </li>
         </ul>
         ',

'image'        => '<h3>Gestionnaire d\'images</h3>
         Vous pouvez gérer ici les images/vignettes/logos utilisés pour agrémenter vos listes de liens.
         Chaque menu peut disposer de sa propre liste d\'images, dans son propre répertoire de stockage.

         Quelques fonctionnalités vous permettrons d\'uniformiser l\'aspect des vignettes <u>tout en préservant les images originales</u> !
         Chaque images modifiées est sauvegardée au préalable pour pouvoir lui restaurer ses propriétés (taille, couleur, format) d\'origine.
         
         <b>Descriptions des options disponibles :</b>
         <ol>
         <li><b>Générateur de vignette :</b> Sélectionnez ici le type de modification que vous souhaitez apporter à vos vignettes.
         <table width="100%"><tr>
         <td align="center"><img src="../images/sample/flag_normal.jpg" />
         Normal</td><td align="center"><img src="../images/sample/flag_rounded.jpg" />
         Bord arrondis</td><td align="center"><img src="../images/sample/flag_b-w.jpg" />
         Noir & blanc</td><td align="center"><img src="../images/sample/flag_shadow.jpg" />
         Ombré</td><td align="center"><img src="../images/sample/flag_deg.jpg" />
         Dégradé</td><td align="center"><img src="../images/sample/flag_text.jpg" />
         Texte</td></tr></table>
         </li>
         <li><b>Texte :</b> Texte à afficher en mode <b>Texte</b>.</li>
         <li><b>Largeur :</b> Largeur absolue de l\'image. Facultatif.</li>
         <li><b>Hauteur :</b> Hauteur absolue de l\'image. Facultatif.</li>
         <li><b>Couleur de fond :</b> Couleur de fond pour la création de la vignette en mode <b>Bord arrondis</b>, <b>Ombré</b> et <b>Dégradé</b>.</li></ol>
         ',

'css'        => '<h3>Feuille de style liée à la template</h3>
         Vous pouvez affecter une feuille de style spécifique à chaque template de menu.
         Ces feuilles de style peuvent être : <ul>
         <li>pré-existantes et liée à la template.</li>
         <li>inexistantes et créée par vos soins. Elle sera automatiquement liée à la template ainsi éditée et afféctée à tous les menus qui feront appel à elle.</li></ul>

         A l\'instar des feuilles de styles des menus, la balise {id} permettra de distinguer automatiquement une caractéristique liée à un menu spécifique.
         Exemple :<div style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;">/* Sub links */
          #dropmenudiv_{id} {
            position:absolute;
            margin-left:10px;
            margin-top:-1px;
            border: 1px outset black;
            }
            </div>
         ',

'script'        => '<h3>Script Java</h3>
         Certaines templates de menu font appel à un script java.
         Certains script font parfois appel à des paramètres passés en variables.
         Vous pouvez editer ce script ou ces variables dans cette fenêtre.
         ',

'tpl'        => '<h3>Templates de menu</h3>
         Les templates de menu est le code html et smarty employé pour générer les menus. 
         Les templates disponibles sont celles proposées dans le gestionnaire de templates de Xoops.
         Seules les templates créées via un jeu de template personnalisé sont disponibles.
         Si la fenêtre d\'édition s\'affiche grisée, c\'est qu\'elle n\'est pas modifiable pour l\'une des raisons suivantes :
         <ul><li>il n\'y a pas de jeu de template personnalisé ;</li>
         <li>le jeu de template personnalisé n\'a pas été mis à jour.</li></ul>
         '
                                  );



//        $item_val_array = $info_val_array + $tips_val_array;
//        $tips_count = count($item_val_array);

// Render defines
 	foreach ($help_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_HLP_MULTIMENU_'.$item_lg),$item_val);
	}
?>