<?php
// $Id: admin.php, see below 
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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
// v 0.2 2006/08/25 20:11:53
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

// Menu
define("_AM_ACHAT_MODULEADMIN", "Admin Mod�l�:");

define("_AM_ACHAT_CREDIT", "�eviri By BaCKStagE....  aChat 0.2 is an original creation of Niluge_KiWi<br />(c) Jully-Augustus 2006");

// Home
define("_AM_ACHAT_WELCOME", "Mod�l Y�netim Sayfas�na Ho�geldiniz.");
define("_AM_ACHAT_NBRE_MSG", "Veri Taban�nda Bulunan Mesaj Say�s�");
define("_AM_ACHAT_MESSAGES", "mesajlar");
define("_AM_ACHAT_EMPTY_FIELD", "Temizlenecek Mesajlar� Belirt.");

// Permissions
define("_AM_ACHAT_PERM_CANPOST", "Mesaj Yazabilir.");

// Purge
define("_AM_ACHAT_PURGEPERNBRE", "Ka� Mesaj Temizlensin?");
define("_AM_ACHAT_PURGE_HOWMANY", "Ka� Mesaj Temizlensin?");
define("_AM_ACHAT_PURGE_CREATELOG", "Temizlenen Mesajlarda Log Dosyas� Olu�tur?");
define("_AM_ACHAT_PURGE_VALIDATE", "Ger�ekten Temizlemek �stiyormusun?&nbsp;");
define("_AM_ACHAT_PURGE_SUPPR_NOLOG", "Log Dosyas� Olmadan");
define("_AM_ACHAT_PURGE_ERROR_WRITEFILE", "Hata Olu�tu.Bu Hata Log Dosyan�n Olu�turulmas� Esnas�nda Meydana Geldi,Mod�l Parametrelerini Kontrol Ediniz.");
define("_AM_ACHAT_PURGE_LOG_WRITTEN", "Log Dosyas� Yarat.");
define("_AM_ACHAT_PURGE_CANCELED", "Temizleme �ptal Edildi.");
define("_AM_ACHAT_PURGE_OK", "Temizleme TAMAM.");
define("_AM_ACHAT_PURGE_NBREMSGDEL", "Silinecek Mesaj Say�s� Numaras�: ");
define("_AM_ACHAT_PURGE_ERROR", "Temizleme Esnas�nda Hata Meydana Geldi.");
define("_AM_ACHAT_PURGEPERDATE", "Temizleme Tarihi");
define("_AM_ACHAT_PURGE_KEEP_HMDAYS", "X G�nden Sonra Mesajlar� Temizle");
define("_AM_ACHAT_PURGE_VALIDATE_PERDAY", "�nceden yaz�lan mesajlar");
define("_AM_ACHAT_PURGE_VALIDATE_PERDAY2", " son g�n");
define("_AM_ACHAT_PURGE_NOMSG", "Mesaj Silinmedi.");

// Delete Messages
define("_AM_ACHAT_DELETEMSG", "Delete a message");
define("_AM_ACHAT_DELETEMSG_MID", "mid of the message to delete<br />(last number displayed when you put the mouse on the poster pseudo,<br /> only displayed for admins)");
define("_AM_ACHAT_DELETEMSG_OK", "Message number %u deleted.");
define("_AM_ACHAT_DELETEMSG_ERROR", "An error has occured when deleting message number %u.");

// Utilities ( Clone ) ( from myHome module )
define("_AM_ACHAT_CLONE", "Mod�l Kopyalama");

define("_AM_ACHAT_CLONENAME", "Kopya �smi<br /><i>
                                         <ul>
                                             <li>16 Karakteri Ge�emez</li>
                                             <li>�zel Karakterler Kullan�lamaz</li>
                                             <li>Ayn� Mod�l �smi Olamaz</li>
                                             <li>Ba� Harfi B�y�k  ,Rakam ve Bo�luk Kabul eder.</li>
                                         </ul></i>
                                         Sample: 'Engin Backstage1'. ");

define("_AM_ACHAT_SUBMIT",	"Kopyala!");
define("_AM_ACHAT_CLEAR",	"Sil");
define("_AM_ACHAT_CANCEL",	"�ptal");

define("_AM_ACHAT_CLONED", "Mod�l Kopyaland�");
define("_AM_ACHAT_MODULEXISTS", "Bu Mod�l Zaten Var!");
define("_AM_ACHAT_NOTCLONED", "Clone settings are uncorrect");
define("_AM_ACHAT_CLONE_TROUBLE", "Settings of your web host do not allow the cloning operation.
					 Please retry on a server which allow permissions change on the server.
                                         (�rne�in, local server)");
?>