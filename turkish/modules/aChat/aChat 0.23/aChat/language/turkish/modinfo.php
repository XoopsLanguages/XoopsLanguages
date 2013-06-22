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

// Cr�� par Niluge_Kiwi
// v 0.2 2006/08/25 20:11:36
// ======================================================================== //
//  
//   www.lmdmf.net
//
// kiwiiii@gmail.com
//
// ======================================================================== //
//    T�rk�e �eviri: Engin YILDIRIM
//                  (By BaCKStagE)
//                                 admin-denetim@hotmail.com
//     www.xoopshocasi.com
// ======================================================================== //

// Module Info

// The name of this module
define('_MI_ACHAT_NAME', 'aChat');
// A brief description of this module
define('_MI_ACHAT_DESC','Sohbet Etmek i�in Haz�rlanm�� Bir Mod�l Hamurunda Ajax yat�yor!');

// Menu
define("_MI_ACHAT_HOME", "Anasayfa");
define("_MI_ACHAT_PURGE", "Temizle");
define("_MI_ACHAT_PERM", "�zinler");
define("_MI_ACHAT_UTILITIES", "Avantajlar�");

define("_MI_ACHAT_SMNAME1","Loglar� incele");
define("_MI_ACHAT_SMNAME2","Ar�ivi incele");

define("_MI_ACHAT_GOTO_INDEX","Mod�le git");
define("_MI_ACHAT_HELP","Yard�m");

// Templates
define('_MI_ACHAT_TDESC0',"Ana Template ��in Kal�p.");
define('_MI_ACHAT_TDESC1',"Mesajlar ��in Kal�p G�sterir");
define('_MI_ACHAT_TDESC2',"Loglar ��in Kal�p (temizlik i�in)");

// Blocks
define('_MI_ACHAT_BNAME1','aChat');
define('_MI_ACHAT_BDESC1','aChat g�steren blok');
define('_MI_ACHAT_BNAME2','Sabit aChat');
define('_MI_ACHAT_BDESC2',"Sonlar mesajlar�yla �n g�sterim blo�u, autorefresh olmadan g�nderim formu");

// Config
define('_MI_ACHAT_NBRE_MSG_AFF','Mesaj g�sterim say�s�');
define('_MI_ACHAT_NBRE_MSG_AFFDSC','Mod�l sayfas�nda g�sterilecek mesaj say�s� ?(index.php)');

define('_MI_ACHAT_TMP_REFRESH','Yenileme S�resi');
define('_MI_ACHAT_TMP_REFRESHDSC','(saniye)<br /> �rne�in 1.5');

define('_MI_ACHAT_USER_SMILIES','Smiley(G�l�c�k) Kullan�ls�n m�?');
define('_MI_ACHAT_USE_BBCODES','BBCODE Kullan�ls�n m�?');

define('_MI_ACHAT_ALLOWED_COLORS','Mesajlar ��in izin verilen Renkler');
define('_MI_ACHAT_ALLOWED_COLORSDESC','Mesajlara renk eklemek istiyorsan�z RGB renk kodlar�n� kullan�n �rnek olarak siyah ve beyaz 000000|FFFFFF aralar�na | koyun<br />�uanda 8 Ana renk eklenmi� durumda.');

define('_MI_ACHAT_PURGE_FOLDER',Silinen Mesajlar Dosyas� ');
define('_MI_ACHAT_PURGE_FOLDERDESC','Silinen Mesajlar�n Depo Edildi�i Dosya (modules/aChat/logs)');

define('_MI_ACHAT_NICK4GUESTS','Misafirlerin Nicklerini Belirle');
define('_MI_ACHAT_NICK4GUESTSDESC',"Misafirlerin Nicklerini Gri G�ster (D�zenlemek icin dosya yolu modules/aChat/templates/aChat.css)");
?>
