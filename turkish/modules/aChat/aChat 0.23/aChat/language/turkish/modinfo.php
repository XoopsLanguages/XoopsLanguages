<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
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

// Créé par Niluge_Kiwi
// v 0.2 2006/08/25 20:11:36
// ======================================================================== //
//  
//   www.lmdmf.net
//
// kiwiiii@gmail.com
//
// ======================================================================== //
//    Türkçe çeviri: Engin YILDIRIM
//                  (By BaCKStagE)
//                                 admin-denetim@hotmail.com
//     www.xoopshocasi.com
// ======================================================================== //

// Module Info

// The name of this module
define('_MI_ACHAT_NAME', 'aChat');
// A brief description of this module
define('_MI_ACHAT_DESC','Sohbet Etmek için Hazýrlanmýþ Bir Modül Hamurunda Ajax yatýyor!');

// Menu
define("_MI_ACHAT_HOME", "Anasayfa");
define("_MI_ACHAT_PURGE", "Temizle");
define("_MI_ACHAT_PERM", "Ýzinler");
define("_MI_ACHAT_UTILITIES", "Avantajlarý");

define("_MI_ACHAT_SMNAME1","Loglarý incele");
define("_MI_ACHAT_SMNAME2","Arþivi incele");

define("_MI_ACHAT_GOTO_INDEX","Modüle git");
define("_MI_ACHAT_HELP","Yardým");

// Templates
define('_MI_ACHAT_TDESC0',"Ana Template Ýçin Kalýp.");
define('_MI_ACHAT_TDESC1',"Mesajlar Ýçin Kalýp Gösterir");
define('_MI_ACHAT_TDESC2',"Loglar Ýçin Kalýp (temizlik için)");

// Blocks
define('_MI_ACHAT_BNAME1','aChat');
define('_MI_ACHAT_BDESC1','aChat gösteren blok');
define('_MI_ACHAT_BNAME2','Sabit aChat');
define('_MI_ACHAT_BDESC2',"Sonlar mesajlarýyla ön gösterim bloðu, autorefresh olmadan gönderim formu");

// Config
define('_MI_ACHAT_NBRE_MSG_AFF','Mesaj gösterim sayýsý');
define('_MI_ACHAT_NBRE_MSG_AFFDSC','Modül sayfasýnda gösterilecek mesaj sayýsý ?(index.php)');

define('_MI_ACHAT_TMP_REFRESH','Yenileme Süresi');
define('_MI_ACHAT_TMP_REFRESHDSC','(saniye)<br /> Örneðin 1.5');

define('_MI_ACHAT_USER_SMILIES','Smiley(Gülücük) Kullanýlsýn mý?');
define('_MI_ACHAT_USE_BBCODES','BBCODE Kullanýlsýn mý?');

define('_MI_ACHAT_ALLOWED_COLORS','Mesajlar Ýçin izin verilen Renkler');
define('_MI_ACHAT_ALLOWED_COLORSDESC','Mesajlara renk eklemek istiyorsanýz RGB renk kodlarýný kullanýn örnek olarak siyah ve beyaz 000000|FFFFFF aralarýna | koyun<br />Þuanda 8 Ana renk eklenmiþ durumda.');

define('_MI_ACHAT_PURGE_FOLDER',Silinen Mesajlar Dosyasý ');
define('_MI_ACHAT_PURGE_FOLDERDESC','Silinen Mesajlarýn Depo Edildiði Dosya (modules/aChat/logs)');

define('_MI_ACHAT_NICK4GUESTS','Misafirlerin Nicklerini Belirle');
define('_MI_ACHAT_NICK4GUESTSDESC',"Misafirlerin Nicklerini Gri Göster (Düzenlemek icin dosya yolu modules/aChat/templates/aChat.css)");
?>
