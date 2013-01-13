<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Permissions');
define('_MD_A_MYMENU_MYPREFERENCES','Pilihan Tetapan');

// index.php
define("_AM_TH_DATETIME","Masa");
define("_AM_TH_USER","Pengguna");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","Agent");
define("_AM_TH_TYPE","Jenis");
define("_AM_TH_DESCRIPTION","Huraian");

define( "_AM_TH_BADIPS" , 'Bad IPs<br /><br /><span style="font-weight:normal;">Tulis setiap IP dalam barisan baru <br />Kosong bermaksud semua IP dibenarkan</span>');

define( "_AM_TH_GROUP1IPS" , 'IP yang dibenarkan untuk Group=1<br /><br /><span style="font-weight:normal;">Tulis setiap IP dalam barisan baru.<br />192.168. bermaksud 192.168.*<br />Kosong bermaksud semua IP dibenarkan</span>');

define( "_AM_LABEL_COMPACTLOG" , "Compact log");
define( "_AM_BUTTON_COMPACTLOG" , "Compact it!");
define( "_AM_JS_COMPACTLOGCONFIRM" , "Duplicated (IP,Type) records akan dibuang");
define( "_AM_LABEL_REMOVEALL" , "Buang semua rekod");
define( "_AM_BUTTON_REMOVEALL" , "Buang Semua!");
define( "_AM_JS_REMOVEALLCONFIRM" , "Semua logs akan dibuang. Adakah anda pasti?");
define( "_AM_LABEL_REMOVE" , "Buang semua rekod yang ditanda:");
define( "_AM_BUTTON_REMOVE" , "Buang!");
define( "_AM_JS_REMOVECONFIRM" , "Adakah anda pasti?");
define( "_AM_MSG_IPFILESUPDATED" , "Fail untuk IP telah dikemaskini");
define( "_AM_MSG_BADIPSCANTOPEN" , "Fail untuk badip tidak dapat dibuka");
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "Fail untuk membenarkan group=1 tidak dapat dibuka");
define( "_AM_MSG_REMOVED" , "Rekod dibuang");
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "Jadikan configs directory writable: %s");


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Pengurusan Prefix");
define( "_AM_MSG_DBUPDATED" , "Pangkalan data berjaya dikemaskinikan!");
define( "_AM_CONFIRM_DELETE" , "Semua data akan dibuang. Adakah anda pasti?");
define( "_AM_TXT_HOWTOCHANGEDB" , "Sekiranya anda ingin ubah prefix,<br /> edit %s/mainfile.php secara manual.<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');");


// advisory.php
define("_AM_ADV_NOTSECURE","Tidak selamat");

define("_AM_ADV_TRUSTPATHPUBLIC","Sekiranya anda dapat melihat imej -NG- atau link mengembalikan halaman normal, XOOPS_TRUST_PATH anda tidak diletakkan dengan betul. Lokasi yang baik untuk XOOPS_TRUST_PATH adalah diluar DocumentRoot. Sekiranya anda tidak dapat akses lokasi tersebut, anda perlu letak .htaccess (DENY FROM ALL) dibawah XOOPS_TRUST_PATH sebagai langkah kedua terbaik.");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Periksa samada fail PHP dalam TRUST_PATH adalah sedia untuk read-only (ia mesti ralat 404,403 atau 500)");
define("_AM_ADV_REGISTERGLOBALS","Sekiranya 'ON', tetapan ini membawa kepada pelbagai serangan injection. Sekiranya boleh, set 'register_globals off' dalam php.ini, atau sekiranyanya ia mustahil, cipta atau or edit .htaccess dalam direktori XOOPS anda:");
define("_AM_ADV_ALLOWURLFOPEN","Sekiranya 'ON', tetapan ini akan membolehkan penyerang untuk execute arbitrary scripts dalam remote servers.<br />Hanya administrator yang boleh mengubah pilihan ini.<br />Sekiranya anda seorang admin, edit php.ini atau httpd.conf.<br /><b>Sampel httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Sekiranya tidak, hubungi administrators.");
define("_AM_ADV_USETRANSSID","Sekiranya 'ON', Session ID anda akan dipaparkan dalam anchor tags dan sebagainya.<br />Untuk mengelakkan session hi-jacking, tambah barisan baru ke dalam fail .htaccess dalam XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Tetapan ini membawa kepada 'SQL Injections'.<br />Jangan lupa hidupkan 'Force sanitizing *' ON dalam pilihan tetapan module protector.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Pergi ke bahagian Pengurusan Prefix");
define("_AM_ADV_MAINUNPATCHED","Anda sepatutnya edit mainfile.php anda seperti yang ditulis dalam README.");
define("_AM_ADV_DBFACTORYPATCHED","Databasefactory anda sedia untuk DBLayer Trapping anti-SQL-Injection");
define("_AM_ADV_DBFACTORYUNPATCHED","Databasefactory anda tidak sedia untuk DBLayer Trapping anti-SQL-Injection. Beberapa patches diperlukan.");

define("_AM_ADV_SUBTITLECHECK","Periksa samada Module Protector berfungsi dengan sepatutnya");
define("_AM_ADV_CHECKCONTAMI","Contaminations");
define("_AM_ADV_CHECKISOCOM","Isolated Comments");

//XOOPS 2.5.4
define("_AM_ADV_REGISTERGLOBALS2","dan letakkannya digarisan dibawah:");

?>