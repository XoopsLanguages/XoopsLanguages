<?php
define("_DB_TABLESTRUCTURE","Structure de la table");
define("_DB_DUMPINGDATA","Contenu de la table de données");
define("_DB_CONFIG","Configurer");
//define("_DB_PERMISSIONS","Global Permissions");
define("_DB_NOTABLESFOUND","Aucune table trouvée dans la base de données.");
define("_DB_BACKUP","Sauvegarder la base de données");
define("_DB_RESTORE","Restaurer la base de données");
define("_DB_CACHE","Configurer la mise à jour du cache du module");
define("_DB_SELECTFILE","Sélection des fichiers");
define("_DB_BACKUP_FOR", "Sauvegarde de la base pour %s");
define("_DB_CREATEON", "Base de données créée le");
define("_DB_DOWNLOAD","Téléchargez la sauvegarde en cliquant ici");
define("_DB_BACKUP_READY","Sauvegarde de la base de données terminée !");
define("_AM_DBASE_FILES_DELETED","Tous les fichiers ont été supprimés");
define("_AM_DBASE_DELETE","Confirmer la suppression ?");
define("_AM_DBASE_BACKUP","Confirmer la sauvegarde ?");

define("_DB_README","
XOOPS Backup<br /><br />

installation:<ol>
<li>Créer un dossier (upload / backup par exemple) pour stocker les fichiers de sauvegarde.
<li>Mettre le dossier en chmod 777.
<li>Installer le module comme d'habitude dans xoops (admin système - modules).
<li>Si vous souhaitez créer une tâche cron pour que la base de données puisse être automatiquement sauvegardée, l'URL doit être: UrlDeVotreXoops/modules/backup/admin/backup.php
</ol>

Auteurs:<ul> 
<li>Sauvegarde -- webmaster@nagl.ch ( http://www.nagl.ch )
<li>Restauration (bigdump) -- Alexey Ozerov (alexey at ozerov dot de)
<li>Intégration et amélioration : D.J. (phppp, http://xoops.org.cn)
</ul>
");
// Traduction par Cesag pour frxoops.org  le 09 Janvier 2013
?>
