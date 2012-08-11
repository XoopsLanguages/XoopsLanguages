<?php
define("_DB_TABLESTRUCTURE","Tabel struktur for tabel"); 
define("_DB_DUMPINGDATA","Dumping data for tabel"); 
define("_DB_CONFIG","Konfigurér");
//define("_DB_PERMISSIONS","Global Permissions");
define("_DB_NOTABLESFOUND","Ingen tabeller fundet i databasen."); 
define("_DB_BACKUP","Backup database"); 
define("_DB_RESTORE","Gendan database"); 
define("_DB_CACHE","Opdatér modulets config cache"); 
define("_DB_NOADMIN","Ikke admin"); 
define("_DB_SELECTFILE","Vælg fil"); 
define("_DB_BACKUP_FOR",'Database Backup for %s'); 
define("_DB_CREATEON","Database oprettet den "); 
define("_DB_DOWNLOAD","Download sikkerhedskopien ved at klikke her"); 
define("_DB_BACKUP_READY","Database Backup Overstået!");

define("_DB_README","
XOOPS Backup<br /><br />

installation:<ol>
<li>Operet en mappe (upload/backup anbefales) til at gemme backup filer
<li>chmod mappens rettigheder til 777
<li>Installér modulet som et normalt modul (system admin - modules)
<li>Hvis du vil oprette et cron job så backup af databasen sker automatisk, skal URL være: YourXoopsUrl/modules/backup/admin/backup.php
</ol>

Forfattere:<ul> 
<li>backup -- webmaster@nagl.ch ( http://www.nagl.ch )
<li>restore (bigdump) -- Alexey Ozerov (alexey at ozerov dot de)
<li>Integration and improvement: D.J. (phppp, http://xoops.org.cn)
</ul>
");
?>
