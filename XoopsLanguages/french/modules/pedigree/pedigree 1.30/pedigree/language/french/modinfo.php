<?php
// traduction fran�aise par http://www.amenosyla.fr
// cha�nes fran�aises pour afficher des informations sur ce module dans les pages d'aministration du site

// Le nom du module. Prefix (_MI_) � titre d'information Module
define("_MI_PEDIGREE_NAME", "pedigree");
define("_MI_PEDIGREE_TITLE", "Titre pedigree");

// La description de ce module
define("_MI_PEDIGREE_DESC", "Modulle d'administration de pedigree pour animaux de compagnie");

// Nom des blocks de ce module. Note that not all modules have blocks
define("_MI_PEDIGREE_BLOCK_ONE_TITLE", "pedigree: exemple Block");
define("_MI_PEDIGREE_BLOCK_ONE_DESC", "Exemple de block de travail.");
define("_MI_PEDIGREE_BLOCK_TWO_TITLE", "pedigree: Database Block");
define("_MI_PEDIGREE_BLOCK_TWO_DESC", "Exemple d'un block qui interroge une base de donn�es.");
define("_MI_PEDIGREE_BLOCK_MENU_TITLE", "Pedigree database menu");
define("_MI_PEDIGREE_BLOCK_MENU_DESC", "Pedigree menu block");
define("_MI_PEDIGREE_BLOCK_RAND_TITLE", "Animal Pedigree");
define("_MI_PEDIGREE_BLOCK_RAND_DESC", "Pedigree block aleatoire");

// Les noms des �l�ments de menu affich�s pour ce module dans les pages d'administration du site
define("_MI_PEDIGREE_OWNERBREEDER", "Utilisez le champs propri�taire / �leveur");
define("_MI_PEDIGREE_PROVERSION", "Pro-version");
define("_MI_PEDIGREE_BROTHERS", "Voir fr�res & soeurs ?");
define("_MI_PEDIGREE_PUPS", "Voir les chatons/enfants ?");
define("_MI_PEDIGREE_WELCOME", "Bienvenue/intro text");
define("_MI_PEDIGREE_MOTHER", "m�re language option");
define("_MI_PEDIGREE_FATHER", "p�re language option");
define("_MI_PEDIGREE_MALE", "male language option");
define("_MI_PEDIGREE_FEMALE", "femelle language option");
define("_MI_PEDIGREE_LITTER","port�e language option");
define("_MI_PEDIGREE_USELITTER", "ajouter une fonctionnalit� � utiliser la port�e ?");
define("_MI_PEDIGREE_SHOWELCOME", "Afficher l'�cran de bienvenue ?");
define("_MI_PEDIGREE_MENU_OVER", "Vue d'ensemble d'affichage ?");
define("_MI_PEDIGREE_MENU_OVER_DESC", "Cette option est utilis�e pour afficher la S�lection animal, parents, grands-parents et arri�res grands-parents pour le pedigree.");
define("_MI_PEDIGREE_MENU_PICS", "Afficher les images dans le pedigree ?");
define("_MI_PEDIGREE_MENU_PICS_DESC", "Utilisez cette option pour activer / d�sactiver l'affichage des images dans le pedigree.");
define("_MI_PEDIGREE_MENU_GEND", "Affichage du sexe dans le pedigree ?");
define("_MI_PEDIGREE_MENU_GEND_DESC", "Utilisez cette option pour activer / d�sactiver l'affichage du sexe dans le pedigree.");
define("_MI_PEDIGREE_MENU_ADIN", "Afficher des informations suppl�mentaires dans le pedigree ?");
define("_MI_PEDIGREE_MENU_ADIN_DESC", "Utilisez cette option pour activer / d�sactiver l'affichage des informations suppl�mentaires dans le pedigree.<br /><i>Num�ro de pedigree, date de naissance, la couleur etc.</i><br/>Uniquement pour les animaux choisis non pas pour le pedigree complet.");
define("_MI_PEDIGREE_MENU_PERP", "S�lectionnez le nombre de r�sultats par page");
define("_MI_PEDIGREE_MENU_PERP_DESC", "Ici, vous pouvez s�lectionner le nombre de r�sultats affich�s par page pour les requ�tes.");
define("_MI_PEDIGREE_MENU_HD", "Afficher HD-informations dans le pedigree ?");
define("_MI_PEDIGREE_ANIMALTYPE", "Entrez le type d'animal que dont vous allez cr�er le pedigree");
define("_MI_PEDIGREE_ANIMALTYPE_DESC", "La valeur doit �tre ins�r�es dans les phrases ci-dessous.<br /><i>S'il vous pla�t ajouter des informations en option pour cet <b>animal</b>.</i><br/><i>S�lectionnez la premi�re lettre de <b>l'animal</b>.</i>");
define("_MI_PEDIGREE_ANIMALTYPES", "Entrez le type d'animal que dont vous allez cr�er le pedigree");
define("_MI_PEDIGREE_ANIMALTYPES_DESC", "La valeur doit �tre ins�r�es dans les phrases ci-dessous.<br /><i>Aucun <b>animal</b> correspondant � votre requ�te n'a �t� trouv�.</i><br /><i> Ici vous pouvez lancer une recherche sp�cifique pour un <b>animal</b> en saisissant une ann�e.</i>");
define("_MI_PEDIGREE_LASTIMAGE", "Afficher l'image dans la derni�re ligne du pedigree");
define("_MI_PEDIGREE_LASTIMAGE_DESC", "Ici vous pouvez d�finir si l'image sera visible dans la derni�re ligne du pedigree ou non");
define("_MI_PEDIGREE_PEDCOLOURS", "Pedigree couleur information");
define("_MI_PEDIGREE_PEDCOLOURS_DESC", "La valeur repr�sente la fa�on dont le pedigree s'affichera.<br />Utilisez <a href=\"../animal/admin/colors.php\">cet assistant</a> pour d�finir les informations de couleur.");


//menu items
define("_MA_PEDIGREE_WEL", "Bienvenue");
define("_MA_PEDIGREE_VSD", "Voir/rechercher animaux");
define("_MA_PEDIGREE_VOB", "Voir propri�taires / �leveurs");
define("_MA_PEDIGREE_LA", "Derniers ajouts");
define("_MA_PEDIGREE_AOB", "Ajouter propri�taire/eleveur");
define("_MA_PEDIGREE_AD", "Ajouter un animal");
define("_MA_PEDIGREE_M50", "Membres top-50");
define("_MA_PEDIGREE_AIO", "Infos avanc�es & orphelines");
define("_MA_PEDIGREE_VM", "Mariage Virtuel");
define("_MA_PEDIGREE_AL", "Ajouter une port�e");

//notication items
define("_MI_PEDIGREE_DATA_NOTIFY", "Changer");
define("_MI_PEDIGREE_DATA_NOTIFYCAP", "Me tenir inform� des changements d'informations sur cet animal");
define("_MI_PEDIGREE_DATA_NOTIFYDSC", "Notification des changements");
define("_MI_PEDIGREE_DATA_NOTIFYSBJ", "Une modification a �t� apport�e");

//notification categories
define("_MI_PEDIGREE_DOG_NOTIFY", "Animal individuel");
define("_MI_PEDIGREE_DOG_NOTIFY_DSC", "description individuelle de l'animal");

//1.31 Alpha 1
define("_MI_PEDIGREE_VIEW_SEARCH","View/Search");
define("_MI_PEDIGREE_ADD_ANIMAL","Add an animal");
define("_MI_PEDIGREE_ADD_LITTER","Add a litter");
define("_MI_PEDIGREE_VIEW_OWNERS","View owners/breeders");
define("_MI_PEDIGREE_ADD_OWNER","Add owner/breeder");
define("_MI_PEDIGREE_ADVANCED_INFO","Advanced info");
define("_MI_PEDIGREE_VIRTUAL_MATING","Virtual Mating");
define("_MI_PEDIGREE_LATEST_ADDITIONS","Latest additions");
define("_MI_PEDIGREE_WEBMASTER_TOOLS","Webmaster tools");