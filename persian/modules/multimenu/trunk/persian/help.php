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
         Voici quelques options compl�mentaires concernant les menus.<ul>
         <li><b>R�pertoire de stockages des images :</b> D�terminer le r�pertoire dans lequel seront stock�s les images du menu.</li>
         <li><b>Template :</b> D�terminer le style de menu (template) qui sera appliqu� par d�faut � ce menu.</li>
         <li><b>Groupes :</b> D�terminer quels groupes d\'utilisateurs auront acc�s � ce menu.</li>
         </ul>
         ',
         
'menucssh'        => '<h3>Style des menus</h3>
         Vous pouvez attribuer un style sp�cifique � chaque menu.
         Les informations indiqu�es seront r�percut�es dans une feuille de style qui s\'affichera dans le code source de la page.
         Vous devez donc �crire vos d�finitions comme pour une feuille de style normale.
         La balise {id} permettra de sp�cifier exactement � quel class ou id, les modifications s\'appliqueront et permettront ainsi de ne pas interf�rer avec un autre menu.

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

         Notez que le style sera appliqu� aux liens de l\'ensemble du menu concern�.
         
         Les d�finitions indiqu�es prioritaire sur toute d�finition d�clar�es pr�c�demment (th�me du site, feuille de style du module ou de la template en cours,...)
         ',

'linkopth'        => '<h3>Options des liens</h3>
         Voici quelques options compl�mentaires concernant les liens.<ul>
         <li><b>Texte alternatif :</b> Ajouter un texte descriptif qui compl�tera les informations relatives au lien. Notez que cet aspect est important pour un meilleur r�f�rencement de vos pages, ainsi que l\'accessibilit� aux personns non voyantes.</li>
         <li><b>Requ�te :</b> D�termine quelle requ�te (permettant de g�n�rer automatiquement une liste de liens) affecter � ce lien. 3 cas de figure :
         <ol><li><b>Lien principal avec url</b> : afficher le lien principal avec tous les liens de la requ�te en sous-lien.</li>
         <li><b>Lien principal sans url</b> : masque le lien principal et affiche tous les liens de la requ�te en lien principal.</li>
         <li><b>Lien secondaire avec url</b> : affiche le lien principal et tous les liens de la requ�te en lien secondaire.</li>
         <li><b>Lien secondaire sans url</b> : masque le lien principal et affiche tous les liens de la requ�te en lien secondaire.</li></ol></li>
         <li><b>Menus :</b> s�lectionner � quel menu est affect� le lien.
         Attention, changer un sous-lien de menu n�cessite de lui r�attribuer un lien principal !
         Attention, si une image est affect� au lien et que le r�pertoire de stockage n\'est pas le m�me pour le nouveau menu, lui affecter une nouvelle image.</li>
         <li><b>Type :</b> 2 types de liens possible :<ol>
         <li><b>permanent</b> : le lien s\'affichera en permanence.</li>
         <li><b>relatif</b> : le lien ne s\'affichera que si l\'adresse du lien principal correspond au module en cours.</li></ol></li>
         <li><b>Cible :</b> 3 types de cible :<ol>
         <li><b>Auto</b> : le module d�tecte lui-m�me la meilleur configuration selon l\'adresse (url) utilis�e.</li>
         <li><b>Self</b> : le lien s\'ouvrira dans la m�me page. Id�al pour les liens pointant vers des pages <u>internes</u> du site.</li>
         <li><b>Blank</b> : le lien s\'ouvrira dans une nouvelle page. Id�al pour les liens pointant vers des pages <u>externes</u> du site.</li></ol></li>
         <li><b>Groupes :</b> D�terminer quels groupes d\'utilisateurs auront acc�s � ce lien.</li>
         </ul>
         ',
         
'linkcssh'        => '<h3>Style des liens</h3>
         Vous pouvez attribuer un style sp�cifique � chaque lien.
         Les informations indiqu�es ici, seront r�percut�es dans la balise : <i>style=""</i>.
         Vous devez donc �crire vos d�finitions comme dans une feuille de style normale, sans indiquer de class ou d\'id.

         <b><u>Exemple</u> :</b>
         <div style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;">color:Red; font-weight:bold; border: 1px plain Red;</div>
         
         Notez que le style sera appliqu� au lien dans la liste admin des liens, pour mieux vous rendre compte du r�sultat.
         
         Les d�finitions indiqu�es pour chaque lien seront donc prioritaire sur toute d�finition d�clar�es pr�c�demment (th�me du site, feuille de style du module ou du menu en cours,...)
         Si le style ne s\'applique pas, v�rifiez bien que la template du menu activ� comporte bien la code suivant <input style="border:1px Inset Black; background:LightGrey;" value=\'<{if $item.css}>style="<{$item.css}>"<{/if}>\' size="45" /> dans la d�finition du lien.
         
         <b><u>Exemple</u> :</b>
         <textarea style="border:1px Inset Black; padding:12px; margin:12px; width:360px; background:LightGrey;"><a href="<{$item.link}>" <{if $item.css}>style="<{$item.css}>"<{/if}> > <{$item.title}> </a></textarea>
         ',
         
'query'        => '<h3>Requ�tes</h3>
         Vous pouvez cr�er une liste de liens � partir des donn�es enregistr�es dans la base de donn�e, � partir de n\'importe quel module.
         
         Une fois la table s�l�ctionn�e, vous pouvez en visualiser le contenu en ouvrant le panneau <b>"[+][[BD] Table]"</b>. 
         Le tableau affiche alors la composition de la table s�lectionn�e.
         Pour vous aider dans vos param�trage le tableau fera une s�l�ction color�es des donn�es qui pourraient vous int�resser :
         <ul>
         <li style="color:Red;"><b>En rouge :</b> les cl�s ID</li>
         <li style="color:Green;"><b>En vert :</b> les sujets (champs pour g�n�rer les titres des liens)</li>
         <li style="color:Blue;"><b>En bleu :</b> les contenu (champs pour g�n�rer les balises alternatives)</li>
         <li style="color:Orange;"><b>En orange :</b> les images (champs pour g�n�rer les vignettes ou images des liens)</li>
         </ul>Une fois la table bien analys�e, vous pouvez cr�er la requ�te qui va g�n�rer la liste de lien qui vous int�resse. 2 �tapes :
         <ul>
         <li><b><u>Etape 1</u> : les indispensables</b>
         <ol>
         <li><b>Titre :</b> indiquer un titre significatif. Ce titre vous permettra de retrouver facilement la requ�te souhait�e pour la g�n�ration de vos liens.</li>
         <li><b>[BD] Table :</b> Nom de la table s�lectionn�e.</li>
         <li><b>[BD] Champ ID :</b> Champ d\'identification des donn�es. C\'est cette valeur qui se retrouvera dans les op�rateurs du lien.</li>
         <li><b>[BD] Champ sujet :</b> Champ reprenant le nom ou le titre du lien.</li>
         <li><b>Adresse des liens :</b> URL utilis�e pour la g�n�ration des liens.
         Pour retrouver l\'url correcte, s�lectionner et recopier l\'url de l\'une des pages du module concern�. Remplacer l\'id de l\'url par la balise <b>{id}</b>. </li>
         </ol>
         </li><li><b><u>Etape 2</u> : les options</b>
         <ol>
         <li><b>[BD] Champ alternatif :</b> Champ contenant des informations � afficher comme texte alternatif.</li>
         <li><b>[BD] Champ image :</b> Champ contenant l\'image � lier � ce lien. Uniquement si le module propose une images sp�cifique pour chaque entr�e.</li>
         <li><b>R�pertoire de stockage des images :</b> Utilis� uniquement si le champ <b>[BD] Champ image</b> a �t� renseign�. Indiquer l\'adresse de stockage des images du module (si n�cessaire). .</li>
         <li><b>[BD] Conditions :</b> Correspond � la clause <b>WHERE</b> d\'une requ�te.
         Effectue un tri parmi les liens � partir de n\'importe quelle condition li� � un champ de la table s�lectionn�e. 
         Les conditions multiples peuvent �tre s�par�e par les op�rateur <b>AND</b> et/ou <b>OR</b>. 
         La balise <b>{date}</b> et <b>{uid}</b> peuvent-�tre utilis�es pour ins�rer les valeurs dynamiques de la date ou de l\'utilisateur courant.
         (Exemple : to_userid={uid} AND read_msg=0)</li>
         <li><b>[BD] Ordre d\'affichage des donn�es :</b> Correspond � la clause <b>ORDER BY</b> d\'une requ�te. 
         Permet d\'indiquer l\'ordre dans lequel on veut voir s\'afficher la liste de lien.
         Indiquer un ou plusieurs champs de la table s�lectionn�e suivi de <b>ASC</b> ou <b>DESC</b> et s�par�s par une virgule.
         (Exemple : from_userid ASC, msg_time DESC ).</li>
         <li><b>Nombre maximum de liens � afficher :</b> Indiquer le nombre maximum de liens � afficher � l\'aide de cette requ�te.</li>
         </ol>
         </li>
         </ul>
         ',

'image'        => '<h3>Gestionnaire d\'images</h3>
         Vous pouvez g�rer ici les images/vignettes/logos utilis�s pour agr�menter vos listes de liens.
         Chaque menu peut disposer de sa propre liste d\'images, dans son propre r�pertoire de stockage.

         Quelques fonctionnalit�s vous permettrons d\'uniformiser l\'aspect des vignettes <u>tout en pr�servant les images originales</u> !
         Chaque images modifi�es est sauvegard�e au pr�alable pour pouvoir lui restaurer ses propri�t�s (taille, couleur, format) d\'origine.
         
         <b>Descriptions des options disponibles :</b>
         <ol>
         <li><b>G�n�rateur de vignette :</b> S�lectionnez ici le type de modification que vous souhaitez apporter � vos vignettes.
         <table width="100%"><tr>
         <td align="center"><img src="../images/sample/flag_normal.jpg" />
         Normal</td><td align="center"><img src="../images/sample/flag_rounded.jpg" />
         Bord arrondis</td><td align="center"><img src="../images/sample/flag_b-w.jpg" />
         Noir & blanc</td><td align="center"><img src="../images/sample/flag_shadow.jpg" />
         Ombr�</td><td align="center"><img src="../images/sample/flag_deg.jpg" />
         D�grad�</td><td align="center"><img src="../images/sample/flag_text.jpg" />
         Texte</td></tr></table>
         </li>
         <li><b>Texte :</b> Texte � afficher en mode <b>Texte</b>.</li>
         <li><b>Largeur :</b> Largeur absolue de l\'image. Facultatif.</li>
         <li><b>Hauteur :</b> Hauteur absolue de l\'image. Facultatif.</li>
         <li><b>Couleur de fond :</b> Couleur de fond pour la cr�ation de la vignette en mode <b>Bord arrondis</b>, <b>Ombr�</b> et <b>D�grad�</b>.</li></ol>
         ',

'css'        => '<h3>Feuille de style li�e � la template</h3>
         Vous pouvez affecter une feuille de style sp�cifique � chaque template de menu.
         Ces feuilles de style peuvent �tre : <ul>
         <li>pr�-existantes et li�e � la template.</li>
         <li>inexistantes et cr��e par vos soins. Elle sera automatiquement li�e � la template ainsi �dit�e et aff�ct�e � tous les menus qui feront appel � elle.</li></ul>

         A l\'instar des feuilles de styles des menus, la balise {id} permettra de distinguer automatiquement une caract�ristique li�e � un menu sp�cifique.
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
         Certaines templates de menu font appel � un script java.
         Certains script font parfois appel � des param�tres pass�s en variables.
         Vous pouvez editer ce script ou ces variables dans cette fen�tre.
         ',

'tpl'        => '<h3>Templates de menu</h3>
         Les templates de menu est le code html et smarty employ� pour g�n�rer les menus. 
         Les templates disponibles sont celles propos�es dans le gestionnaire de templates de Xoops.
         Seules les templates cr��es via un jeu de template personnalis� sont disponibles.
         Si la fen�tre d\'�dition s\'affiche gris�e, c\'est qu\'elle n\'est pas modifiable pour l\'une des raisons suivantes :
         <ul><li>il n\'y a pas de jeu de template personnalis� ;</li>
         <li>le jeu de template personnalis� n\'a pas �t� mis � jour.</li></ul>
         '
                                  );



//        $item_val_array = $info_val_array + $tips_val_array;
//        $tips_count = count($item_val_array);

// Render defines
 	foreach ($help_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_HLP_MULTIMENU_'.$item_lg),$item_val);
	}
?>