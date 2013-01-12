<?php
// $Id$
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("LEGEND_XOOPS_PATHS","XOOPS Physical paths" );
define("LEGEND_DATABASE","Character Set Pangkalan Data" );

define("XOOPS_LIB_PATH_LABEL","XOOPS library directory" );
define("XOOPS_LIB_PATH_HELP","Physical path kepada XOOPS library directory TANPA trailing slash, untuk foward compatibility. Sila keluarkan folder tersebut dari " . XOOPS_ROOT_PATH . " untuk menjadikan ia lebih selamat." );
define("XOOPS_DATA_PATH_LABEL","XOOPS datafiles directory" );
define("XOOPS_DATA_PATH_HELP","Physical path kepada XOOPS datafiles (writable) directory TANPA trailing slash, untuk forward compatibility. Sila keluarkan folder tersebut dari " . XOOPS_ROOT_PATH . " untuk menjadikan ia lebih selamat." );

define("DB_COLLATION_LABEL","Character set dan collation Pangkalan Data" );
define("DB_COLLATION_HELP",  "Setakat versi MySQL 4.12 ia menyokong custom character set dan collation. Walaupun demikian ia lebih kompleks daripada yang dijangkan, maka itu JANGAN lakukan sebarang perubahan melainkan anda yakin dengan pilihan anda.");
define("DB_COLLATION_NOCHANGE",  "Jangan Tukar");

define("XOOPS_PATH_FOUND","Path dijumpai." );
define("ERR_COULD_NOT_ACCESS","Tidak dapat akses folder. Sila sahkan ia wujud dan boleh dibaca oleh server." );
define("CHECKING_PERMISSIONS","Pemeriksaan permission file and directory..." );
define("ERR_NEED_WRITE_ACCESS","Server haruslah memberi write access kepada fail dan folder berikut<br />(i.e. <em>chmod 777 directory_name</em> pada UNIX/LINUX server)" );
define("IS_NOT_WRITABLE","%s adalah TIDAK writable." );
define("IS_WRITABLE","%s adalah writable." );
define("ERR_COULD_NOT_WRITE_MAINFILE","Ralat untuk menulis kandungan ke mainfile.php, tulis kandungan dalam mainfile.php secara manual." );

?>