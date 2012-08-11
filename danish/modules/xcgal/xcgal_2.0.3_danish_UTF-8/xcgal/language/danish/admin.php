<?php
// $Id: admin.php,v 1.2 2005/09/01 13:58:33 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Grégory DEMAR                           //
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
define('_AM_CONFIG','xcGallery Konfiguration');
define('_AM_GENERALCONF','General Konfiguration');
define('_AM_CATMNGR','Kategori manager');
define('_AM_USERMNGR','Bruger manager');
define('_AM_GROUPMNGR','Gruppe manager');
define('_AM_BATCHADD','Masse tilføj billeder');
define('_AM_ECARDMNGR','Postkort manager');
define('_AM_PICAPP','Billeder der afventer godkendelse');

define('_AM_PARAM_MISSING','Script kaldt uden de påkrævede parametre.');


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define('_AM_USERMGR_TITLE','xcGallery Brugeradministration');
define('_AM_USERMGR_USHOW','Vis alle brugere med album/billeder');
define('_AM_USERMGR_USHOWDEL','Vis album for slettede brugere');
define('_AM_USERMGR_ULIST','Bruger liste');
define('_AM_USERMGR_USER','Bruger');
define('_AM_USERMGR_ALBUMS','Album');
define('_AM_USERMGR_PICS','Billede');
define('_AM_USERMGR_QUOTA','Bruger kvote');
define('_AM_USERMGR_ALB','Album');
define('_AM_USERMGR_DELUID','Slet bruger id');
define('_AM_USERMGR_OPT','Operationer');
define('_AM_USERMGR_NOTMOVE','** FLYT IKKE **');
define('_AM_USERMGR_DEL','Slet');
define('_AM_USERMGR_PROPS','Egenskaber');
define('_AM_USERMGR_EDITP','Rediger Billeder');

define('_AM_USERMGR_UONPAGE','%d brugere på %d side(r)');
define('_AM_USERMGR_NOUSER','Ingen brugere fundet!');

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define('_AM_SRCHNEW_TITLE','Søg nye billeder');
define('_AM_SRCHNEW_SEL_DIR','Vælg folder');
define('_AM_SRCHNEW_SEL_DIR_MSG','Denne funktion tillader dig at masse tilføje billeder, som du har uploadet til din server via FTP. <br /><br />Vælg en folder hvor du har uploadet billederne');
define('_AM_SRCHNEW_NO_PIC_ADD','Der er ikke nogen billeder at tilføje');
define('_AM_SRCHNEW_NEED_ONE_ALB','Du skal bruge mindst ét album for at bruge denne funktion');
define('_AM_SRCHNEW_WARNING','Advarsel');
define('_AM_SRCHNEW_CHG_PERM','scriptet kan ikke skrive til denne folder, du skal skifte CHMOD til 755 eller 777 før du kan tilføje billederne!');
define('_AM_SRCHNEW_TARGET_ALB','lægger billederne fra &quot;</b>%s<b>&quot; ind i </b>%s');
define('_AM_SRCHNEW_FOLDER','Folder');
define('_AM_SRCHNEW_IMAGE','Billede');
define('_AM_SRCHNEW_ALB','Album');
define('_AM_SRCHNEW_RESULT','Resultat');
define('_AM_SRCHNEW_DIR_RO','Ikke skrivbar.');
define('_AM_SRCHNEW_CANT_READ','Ikke læsbar.');
define('_AM_SRCHNEW_INSERT','Tilføjer nye billeder til galleriet');
define('_AM_SRCHNEW_LIST_NEW','Liste med nye billeder');
define('_AM_SRCHNEW_INS_SEL','Indsæt valgte billeder');
define('_AM_SRCHNEW_NO_PIC','Ingen nye billeder blev fundet');
define('_AM_SRCHNEW_PATIENT','Vent venligst, scriptet skal bruge tid på at tilføje billederne');
define('_AM_SRCHNEW_NOTES','<ul><li><b>OK</b> : betyder billedet blev tilføjet<li><b>DP</b> : betyder billeder findes i forvejen i databasen<li><b>PB</b> : betyder billedet ikke kunne blive tilføjet, tjek dine indstillinger og tilladelser i den folder for billedet et<li>Hvis OK, DP, PB skilte ikke dukker op, klik på det manglende billede for at se hvad for en fejl der blev givet af PHP<li>Hvis din broser timer ud, tryk på genindlæs knappen</ul>');


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define('_AM_GRPMGR_KB','KB');
define('_AM_GRPMGR_NAME','Gruppe navn');
define('_AM_GRPMGR_QUOTA','Disk kvote');
define('_AM_GRPMGR_RATE','Kan bededømme billeder');
define('_AM_GRPMGR_SENDCARD','Kan sende postkort');
define('_AM_GRPMGR_COM','Kan skrive kommentarer');
define('_AM_GRPMGR_UPLOAD','Kan uploade billeder');
define('_AM_GRPMGR_PRIVATE','Kan have et personligt galleri');
define('_AM_GRPMGR_APPLY','Godkend modifikationer');
define('_AM_GRPMGR_MANAGE','Indstil bruger gruppe');
define('_AM_GRPMGR_PUB_APPR','Oft. Upl. godkendelse (1)');
define('_AM_GRPMGR_PRIV_APPR','Pri. Upl. godkendelse (2)');
define('_AM_GRPMGR_PUB_NOTE','<b>(1)</b> Uploads i et offentligt album kræver admin godkendelse');
define('_AM_GRPMGR_PRIV_NOTE','<b>(2)</b> Uploads i et album tilhørende brugeren kræver admin godkendelse');
define('_AM_GRPMGR_NOTES','Noter');
define('_AM_GRPMGR_SYN','Synkronisér');
define('_AM_GRPMGR_SYN_NOTE','Kilk på Synkronisér for at synkronisere xcGallerys grupper med Xoops grupper');
define('_AM_GRPMGR_EMPTY','xcGallert gruppe tabel var tom!<br />Standard gruppe oprettet');

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define('_AM_CAT_MISS_PARAM','Parametre krævet for operation %s ikke angivet');
define('_AM_CAT_UNKOWN','Valgte kategori findes ikke i databasen');
define('_AM_CAT_UGAL_CAT_RO','Bruger galleri kategorien kan ikke slettes!');
define('_AM_CAT_MNGCAT','Håndtér kategorier');
define('_AM_CAT_CONF_DEL','Er du sikker på at du vil SLETTE denne kategori?');
define('_AM_CAT_CAT','Kategori');
define('_AM_CAT_OP','Handling');
define('_AM_CAT_MOVE','Flyt til');
define('_AM_CAT_UPCR','Opdatér/Lav kategori');
define('_AM_CAT_PARENT','Hoved kategori');
define('_AM_CAT_TITLE','Kategori titel');
define('_AM_CAT_DESC','Kategori beskrivelse');
define('_AM_CAT_NOCAT','* Ingen kategori *');

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define('_AM_CARDMGR_TITLE','xcGallery postkort manager');
define('_AM_CARDMGR_TIME','Dato');
define('_AM_CARDMGR_SUNAME','Afsenders brugernavn');
define('_AM_CARDMGR_SEMAIL','Afsenders email');
define('_AM_CARDMGR_SIP','Afsenders IP adresse');
define('_AM_CARDMGR_PID','Billede ID');
define('_AM_CARDMGR_STATUS','Valgt');
define('_AM_CARDMGR_DEL_SELECTED','Slet valgte postkort');
define('_AM_CARDMGR_DEL_ALL','Slet alle postkort');
define('_AM_CARDMGR_DEL_PICKED','Slet alle valgte postkort');
define('_AM_CARDMGR_DEL_UNPICKED','Slet alle ikke valgte postkort');
define('_AM_CARDMGR_CONPAGE','%d postkort på%d side(r)');

?>
