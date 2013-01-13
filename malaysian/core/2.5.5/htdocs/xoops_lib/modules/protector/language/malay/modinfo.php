<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname);

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1);

// The name of this module
define($constpref."_NAME","Protector");

// A brief description of this module
define($constpref."_DESC","Modul ini melindungi laman web XOOPS anda dari pelbagai serangan DoS, SQL Injection dan Variables contaminations.");

// Menu
define($constpref."_ADMININDEX","Pusat Perlindungan");
define($constpref."_ADVISORY","Nasihat Keselamatan");
define($constpref."_PREFIXMANAGER","Pengurusan Prefix");
define($constpref.'_ADMENU_MYBLOCKSADMIN','Permissions');

// Configs
define($constpref.'_GLOBAL_DISBL','Disabled sementara');
define($constpref.'_GLOBAL_DISBLDSC','Semua perlindungan disabled sementara');

define($constpref.'_DEFAULT_LANG','Bahasa Default');
define($constpref.'_DEFAULT_LANGDSC','Nyatakan set bahasa untuk papar mesej sebelum proses common.php');

define($constpref.'_RELIABLE_IPS','IP yang boleh dipercayai');
define($constpref.'_RELIABLE_IPSDSC','Set IP yang anda boleh percayai diasingkan dengan | . ^ matches the head of string, $ matches the tail of string.');

define($constpref.'_LOG_LEVEL','Peringkat Logging');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','Masa Penggantungan IP yang diharamkan (saat)');

define($constpref.'_LOGLEVEL0','Tiada');
define($constpref.'_LOGLEVEL15','Quiet');
define($constpref.'_LOGLEVEL63','quiet');
define($constpref.'_LOGLEVEL255','Penuh');

define($constpref.'_HIJACK_TOPBIT','Protected IP bits untuk session');
define($constpref.'_HIJACK_TOPBITDSC','Anti Session Hi-Jacking:<br />Default 32(bit). (Semua bits adalah dilindungi)<br />Sekiranya IP anda tidak stabil, set IP range dengan nombor bits.<br />Contoh: Sekiranya IP anda boleh berada dalam range 192.168.0.0-192.168.0.255, set 24(bit)');
define($constpref.'_HIJACK_DENYGP','Kumpulan yang tidak dibenarkan pindah IP moving dalam session');
define($constpref.'_HIJACK_DENYGPDSC','Anti Session Hi-Jacking:<br />Pilih yang tidak dibenarkan untuk pindah IP dalam session.<br />(Disyorkan untuk hidupkan Administrator On.)');
define($constpref.'_SAN_NULLBYTE','Sanitizing null-bytes');
define($constpref.'_SAN_NULLBYTEDSC','Terminating character "\\0" selalu digunakan dalam serangan malicious.<br />Null-byte akan ditukarkan kepada space.<br />(Sangat disyorkan untuk On)');
define($constpref.'_DIE_NULLBYTE','Keluar sekiranya null bytes dijumpai');
define($constpref.'_DIE_NULLBYTEDSC','Terminating character "\\0" selalu digunakan untuk serangan malicious.<br />(Sangat disyorkan sebagai On)');
define($constpref.'_DIE_BADEXT','Keluar sekiranya bad files dimuatnaik');
define($constpref.'_DIE_BADEXTDSC','Sekiranya seseorang cuba untuk memuatnaik fail yang mempunyai bad extensions seperti .php , module ini akan keluar dari laman web XOOPS anda.');
define($constpref.'_CONTAMI_ACTION','Tindakan sekiranya contamination dijumpai');
define($constpref.'_CONTAMI_ACTIONDS','Pilih tindakan yang dilakukan sekiranya seseorang cuba untuk contaminate system global variables ke dalam laman web XOOPS anda.<br />(Pilihan yang disyorkan adalah blank screen)');
define($constpref.'_ISOCOM_ACTION','Tindakan sekiranya isolated comment-in dijumpai');
define($constpref.'_ISOCOM_ACTIONDSC','Anti SQL Injection:<br />Pilih tindakan sekiranya isolated "/*" dijumpai.<br />"Sanitizing" bermaksud menambah "*/" di hujung.<br />(Pilihan yang dsyorkan Sanitizing)');
define($constpref.'_UNION_ACTION','Tindakan jika UNION dijumpai');
define($constpref.'_UNION_ACTIONDSC','Anti SQL Injection:<br />Pilih tindakan sekiranya beberapa syntax seperti UNION dari SQL.<br />"Sanitizing" bermaksud menukar "union" kepada "uni-on".<br />(Pilihan yang disyorkan adalah Sanitizing)');
define($constpref.'_ID_INTVAL','Force intval kepada variables seperti id');
define($constpref.'_ID_INTVALDSC','Semua requests yang dinamakan "*id" akan dianggap sebagai integer.<br />Pilihan ini melindungi anda dari serangan XSS dan SQL Injections.<br />Walaupun disyorkan untuk menghidupkan pilihan ini, ia boleh menyebabkan masalah kepada sesetengah module.');
define($constpref.'_FILE_DOTDOT','Perlindungan dari Directroy Traversals');
define($constpref.'_FILE_DOTDOTDSC','Ia menghapuskan ".." dari semua requests yang nampak seperti Directory Traversals');

define($constpref.'_BF_COUNT','Anti Brute Force');
define($constpref.'_BF_COUNTDSC','Set kiraan yang anda benarkan untuk tetamu cuba untuk log masuk dalam 10 minit. Sekiranya seseorang gagal untuk log masuk lebih dari nilai ini, IPnya akan diharamkan.');

define($constpref.'_BWLIMIT_COUNT','Had Bandwidth');
define($constpref.'_BWLIMIT_COUNTDSC','Menentukan akses maksimum kepada mainfile.php semasa masa pemantauan. Nilai ini seharusnya 0 untuk normal environments yang menpunyai cukup bandwidth CPU. Nombor kurang daripada 10 akan diabaikan.');

define($constpref.'_DOS_SKIPMODS','Modules yang dikeluarkan dari pemeriksaan DoS/Crawler');
define($constpref.'_DOS_SKIPMODSDSC','Set dirnames modules diasingkan dengan |.Pilihan ini berguna untuk chatting module dan sebagainya.');

define($constpref.'_DOS_EXPIRE','Masa Pemantauan untuk high loadings (saat)');
define($constpref.'_DOS_EXPIREDSC','Nilai ini menentukan masa pemantauan untuk high-frequent reloading (serangan F5) dan high loading crawlers.');

define($constpref.'_DOS_F5COUNT','Bad counts untuk serangan F5');
define($constpref.'_DOS_F5COUNTDSC','Pencegahan dari serangan DoS attacks.<br />Nila ini menentukan reloading counts untuk dianggap sebagai serangan malicious.');
define($constpref.'_DOS_F5ACTION','Tindakan terhadap serangan F5');

define($constpref.'_DOS_CRCOUNT','Bad counts for Crawlers');
define($constpref.'_DOS_CRCOUNTDSC','Pencegahan dari high loading crawlers.<br />Nila ini menentukan kiraan access counts untuk dianggap sebagai bad-manner crawler.');
define($constpref.'_DOS_CRACTION','Tindakan terhadap high loading Crawlers');

define($constpref.'_DOS_CRSAFE','User-Agent yang dibenarkan');
define($constpref.'_DOS_CRSAFEDSC','Perl regex pattern untuk User-Agent.<br />Sekiranya ia berpadanan, crawler tidak akan dianggap sebagai high loading crawler.<br />eg) /(bingbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','Tiada (hanya logging)');
define($constpref.'_OPT_SAN','Sanitizing');
define($constpref.'_OPT_EXIT','Blank Screen');
define($constpref.'_OPT_BIP','Haramkan IP (Tiada had)');
define($constpref.'_OPT_BIPTIME0','Haramkan IP (moratorium)');

define($constpref.'_DOSOPT_NONE','Tiada (hanya logging)');
define($constpref.'_DOSOPT_SLEEP','Sleep');
define($constpref.'_DOSOPT_EXIT','Blank Screen');
define($constpref.'_DOSOPT_BIP','Haramkan IP (Tiada Had)');
define($constpref.'_DOSOPT_BIPTIME0','Haramkan IP (moratorium)');
define($constpref.'_DOSOPT_HTA','DENY dengan .htaccess(Experimental)');

define($constpref.'_BIP_EXCEPT','Kumpulan tidak pernah didaftar sebagai Bad IP');
define($constpref.'_BIP_EXCEPTDSC','Seorang pengguna yang berada dalam Kumpulan yang dinyatakan disini tidak akan diharamkan.<br />(Disyorkan untuk jadikan Administrator on.)');

define($constpref.'_DISABLES','Disable ciri bahaya dalam XOOPS');

define($constpref.'_DBLAYERTRAP','Enable DB Layer trapping anti-SQL-Injection');
define($constpref.'_DBLAYERTRAPDSC','Hampir semua serangan SQL Injection akan dibatalkan melalui ciri ini. Ciri ini memerlukan sokongan dari databasefactory. Anda boleh ia dihalaman Nasihat Keselamatan. Tetapan ini mesti dihidupkan. Jangan matikan ia dengan bersahaja.');
define($constpref.'_DBTRAPWOSRV','Jangan Periksa _SERVER untuk anti-SQL-Injection');
define($constpref.'_DBTRAPWOSRVDSC','Beberapa servers sering enable DB Layer trapping. Ia menyebabkan pengesanan salah sebagai serangan SQL Injection. Sekiranya anda mendapat ralat sebegitu, hidupkan pilihan ini. Anda seharusnya tahu pilihan ini akan melemahkan keselamatan DB Layer trapping anti-SQL-Injection.');

define($constpref.'_BIGUMBRELLA','Enable anti-XSS (BigUmbrella)');
define($constpref.'_BIGUMBRELLADSC','Ini melindungi anda dari serangan melalui XSS vulnerabilities. Tapi ia bukan perlindungan 100%');

define($constpref.'_SPAMURI4U','Anti-SPAM: URL untuk pengguna normal');
define($constpref.'_SPAMURI4UDSC','Sekiranya URL yangs dijumpai di POST data dari pengguna selain dari admin, POST tersebut dianggap sebagai SPAM. 0 bermaksud disabling ciri ini.');
define($constpref.'_SPAMURI4G','Anti-SPAM: URL untuk tetamu');
define($constpref.'_SPAMURI4GDSC','Sekiranya URL yang dijumpai POST data dari tetamu, POST tersebut dianggap sebagai SPAM. 0 bermaksud disabling ciri ini.');

//3.40b
define($constpref."_ADMINHOME","Utama");
define($constpref."_ADMINABOUT","Tentang");
//3.50
define($constpref.'_STOPFORUMSPAM_ACTION','Hentikan Spam Forum');
define($constpref.'_STOPFORUMSPAM_ACTIONDSC','Pemeriksaan POST data terhadap spammers yang didaftarkan di pangkalan data www.stopforumspam.com. Memerlukan php CURL lib.');

}
