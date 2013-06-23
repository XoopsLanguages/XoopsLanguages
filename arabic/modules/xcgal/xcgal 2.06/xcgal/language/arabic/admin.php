<?php
// $Id: admin.php,v 1.2 2005/09/01 13:58:33 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Grщgory DEMAR                           //
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
define("_AM_CONFIG","ЧсЪкЯэсЧЪ ЧсУгЧгэЩ");
define("_AM_GENERALCONF","ЧсЪкЯэсЧЪ ЧсбЦэгэЩ");
define("_AM_CATMNGR","ХЯЧбЩ ЧсУогЧу");
define("_AM_USERMNGR","ХЯЧбЩ ЧсУкжЧС");
define("_AM_GROUPMNGR","ХЯЧбЩ ЧсуЬуцкЧЪ");
define("_AM_BATCHADD","ШбфЧуЬ фос Чсецб");
define("_AM_ECARDMNGR","ХЯЧбЩ ЧсШиЧоЧЪ ЧсШбэЯэЩ");
define("_AM_PICAPP","нэ ЧфЪйЧб Чсфдб");

define("_AM_PARAM_MISSING","Ъу исШ ЧсШбфЧуЬ ШкусэЩ лэб пЧусх");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE","ЧЯЧбЩ ЧсУкжЧС");
define("_AM_USERMGR_USHOW","кбж пс Чсецб цЧсУсШцуЧЪ ссУкжЧС");
define("_AM_USERMGR_USHOWDEL","кбж пс ЧсУсШцуЧЪ ссУкжЧС ЧсудицШэф");
define("_AM_USERMGR_ULIST","оЧЦуЩ ЧсУкжЧС");
define("_AM_USERMGR_USER","кжц");
define("_AM_USERMGR_ALBUMS","УсШцуЧЪ");
define("_AM_USERMGR_PICS","ецб");
define("_AM_USERMGR_QUOTA","ЧспуэЩ ЧсугЪЮЯуЩ");
define("_AM_USERMGR_ALB","УсШцу");
define("_AM_USERMGR_DELUID","угЭ боу Чскжц");
define("_AM_USERMGR_OPT","ЧсЪЭпу");
define("_AM_USERMGR_NOTMOVE","** кЯу фос **");
define("_AM_USERMGR_DEL","угЭ");
define("_AM_USERMGR_PROPS","ЧсЮеЧЦе");
define("_AM_USERMGR_EDITP","ЪЭбэб Чсецб");

define("_AM_USERMGR_UONPAGE","%d кжц нэ %d енЭЩ");
define("_AM_USERMGR_NOUSER","су эЪу ЧэЬЧЯ Чэ кжц");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","ЧсШЭЫ нэ Чсецб ЧсЬЯэЯЩ");
define("_AM_SRCHNEW_SEL_DIR","ЧЭЪб Чсогу");
define("_AM_SRCHNEW_SEL_DIR_MSG","хах ЧскусэЩ Ъкус сп ЪЭцэс ЪсоЧЦэ ссецб ЧсЪэ бнкЪхЧ ссуцок кф ибэо ЧснЪэ Шэ<br /><br />ХЮЪб ЧсуЬсЯ Чсаэ ЭусЪ Чсэх Чсецб");
define("_AM_SRCHNEW_NO_PIC_ADD","сЧэцЬЯ хфЧп Уэ ецбЩ ссХжЧнЩ");
define("_AM_SRCHNEW_NEED_ONE_ALB","ЪЭЪЧЬ ксь ЧсУос УсШцу цЧЭЯ сХЬбЧС хах ЧскусэЩ");
define("_AM_SRCHNEW_WARNING","ЪЭаэб");
define("_AM_SRCHNEW_CHG_PERM","ЧсШбфЧуЬ сЧэупфх ЧсЪкЧус ЧсуЬсЯ эЬШ ЧкиЧСх ЧсЪебэЭ боу 755 Уц 777 оШс ЧжЧнЩ ЧсецбЩ");
define("_AM_SRCHNEW_TARGET_ALB","цжк Чсецб &quot;</b>%s<b>&quot; нэ </b>%s");
define("_AM_SRCHNEW_FOLDER","ЧсуЬсЯ");
define("_AM_SRCHNEW_IMAGE","ЧсецбЩ");
define("_AM_SRCHNEW_ALB","УсШцу");
define("_AM_SRCHNEW_RESULT","ЧсфЪэЬЩ");
define("_AM_SRCHNEW_DIR_RO","сЧэупф ЧспЪЧШЩ ксэх ");
define("_AM_SRCHNEW_CANT_READ","сЧэупф обЧСЪх ");
define("_AM_SRCHNEW_INSERT","ХжЧнЩ ецб ЬЯэЯ нэ ЧсУсШцу");
define("_AM_SRCHNEW_LIST_NEW","оЧЦуЩ Чсецб ЧсЬЯэЯЩ");
define("_AM_SRCHNEW_INS_SEL","ЧЯЮЧс Чсецб ЧсудЧб ЧсэхЧ");
define("_AM_SRCHNEW_NO_PIC","су эЪу ЧэЬЧЯ ецб ЬЯэЯЩ");
define("_AM_SRCHNEW_PATIENT","эбЬь ЧсХфЪйЧб нхах ЧскусэЩ ЪЪисШ цоЪ");
define("_AM_SRCHNEW_NOTES","<ul><li><b>ok</b> : Ъкфэ ЪуЪ ЧжЧнЩ Чсецб ШфЬЧЭ<li><b>DP</b> : Ъкфэ Чф ЧсецбЩ эцЬЯ уфхЧ фгЮЩ уиЧШоЩ угШоЧ<li><b>PB</b> : Ъкфэ су фЪупф уф ЧЯЮЧс ЧсецбЩ сасп эЬШ ЧсЪУпЯ уф уЬсЯ Чсецб хс Ъу ЧкиЧСх ЧсЪебэЭ ЧссЧву Уу сЧ<li>ЧаЧ OK, DP, PB  су эйхб УЭЯ уфху насп экфэ Чфх хфЧп ЮиУ нэ уеЯб ЧсШэ УЪд Шэ<li>ЧаЧ Ъу Ъкиэс Чсгэбнб цЧфЪхь цоЪ ЧсЪЭуэс Яцф нЧЦЯЩ Чц йхбЪ енЭЩ ЮиУ ноу ШХкЧЯЩ ЧсуЭЧцсЩ</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","пэсцШЧэЪ");
define("_AM_GRPMGR_NAME","Чгу ЧсуЬуцкЩ");
define("_AM_GRPMGR_QUOTA","пуэЩ ЧсЪЭуэс");
define("_AM_GRPMGR_RATE","эупфх ЧсЪецэЪ ксь Чсецб");
define("_AM_GRPMGR_SENDCARD","эупфх ЧбгЧс ШиЧоЩ ШбэЯэЩ");
define("_AM_GRPMGR_COM","эупфх ЧжЧнЩ Ъксэо");
define("_AM_GRPMGR_UPLOAD","эупфх ЪЭуэс ецбЩ");
define("_AM_GRPMGR_PRIVATE","эупфх ЧуЪсЧп УсШцу");
define("_AM_GRPMGR_APPLY","оШцс ЧсЪкЯэсЧЪ");
define("_AM_GRPMGR_MANAGE","ХЯЧбЩ ЧсуЬуцкЧЪ");
define("_AM_GRPMGR_PUB_APPR","(1)");
define("_AM_GRPMGR_PRIV_APPR","(2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b>  ЪЭуэс Чсецб Чсь ЧсУсШцу ЧскЧу эЭЪЧЬ Чсь ЪебэЭ фдб уф ЧсуЯэб");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> ЪЭуэс Чсецб Чсь УЭЯ ЧсУсШцуЧЪ ЧсуфЪгШЩ сУЭЯ ЧсУкжЧС ЪЭЪЧЬ ЪебэЭ фдб уф ЧсуЯэб");
define("_AM_GRPMGR_NOTES","ЧсУбоЧу");
define("_AM_GRPMGR_SYN","ЧсЪвЧуф");
define("_AM_GRPMGR_SYN_NOTE","ЧсЪЧвуф Ъкфэ нЭе уЬуцкЧЪ ЧсуЬсЩ ук уЬуцкЧЪ ЧсУсШцу");
define("_AM_GRPMGR_EMPTY","ЬЯцс ЧсуЬуцкЧЪ ссУсШцу нЧбл<br /><br />ЧфдЧС уЬуцкЧЪ иШэкэЩ");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","ЧспуэЩ ЧсуисцШЩ с '%s' лэб увцЯЩ Уц уЯкцуЩ Шдпс еЭэЭ");
define("_AM_CAT_UNKOWN","Чсогу Чсаэ ЧЮЪбЪх лэб уцЬцЯ нэ оЧкЯЩ ЧсШэЧфЧЪ");
define("_AM_CAT_UGAL_CAT_RO","УсШцу ЧсУкжЧС сЧэупф угЭх");
define("_AM_CAT_MNGCAT","ХЯЧбЩ ЧсУогЧу");
define("_AM_CAT_CONF_DEL","хс УфЪ уЪУпЯ уф Уфп ЪбэЯ угЭ хаЧ Чсогу П");
define("_AM_CAT_CAT","Чсогу");
define("_AM_CAT_OP","ЧскусэЩ");
define("_AM_CAT_MOVE","Чфос Чсь");
define("_AM_CAT_UPCR","ЪЭбэб цЧфдЧС огу");
define("_AM_CAT_PARENT","Чсогу ЧсбЦэгэ");
define("_AM_CAT_TITLE","Чгу Чсогу");
define("_AM_CAT_DESC","цен Чсогу");
define("_AM_CAT_NOCAT","* сЧэцЬЯ огу *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","ЧЯЧбЩ ЧсШиЧоЧЪ ЧсШбэЯэЩ");
define("_AM_CARDMGR_TIME","ЧсЪЧбэЮ");
define("_AM_CARDMGR_SUNAME","Хгу Чсубгс");
define("_AM_CARDMGR_SEMAIL","ШбэЯ Чсубгс");
define("_AM_CARDMGR_SIP","Уэ Шэ Чсубгс");
define("_AM_CARDMGR_PID","боу ЧсШиЧоЩ");
define("_AM_CARDMGR_STATUS","ЧсЭЧсЩ");
define("_AM_CARDMGR_DEL_SELECTED","угЭ ЧсШиЧоЧЪ Чсуксу ксэхЧ");
define("_AM_CARDMGR_DEL_ALL","угЭ пс ЧсШиЧоЧЪ");
define("_AM_CARDMGR_DEL_PICKED","угЭ пс ЧсШиЧоЧЪ ЧсЪэ ЪуЪ удЧхЯЪхЧ");
define("_AM_CARDMGR_DEL_UNPICKED","угЭ пс ЧсШиЧоЧЪ ЧсЪэ су ЪдЧхЯ");
define("_AM_CARDMGR_CONPAGE","%d ШиЧоЩ нэ %d енЭЩ");

?>
