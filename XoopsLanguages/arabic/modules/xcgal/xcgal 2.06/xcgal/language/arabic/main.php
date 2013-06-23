<?php
// $Id: main.php,v 1.4 2005/09/22 08:08:02 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Gr�gory DEMAR                           //
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
// shortcuts for Byte, Kilo, Mega
define("_MD_BYTES","����");
define("_MD_KB","��������");
define("_MD_MB","��������");

define("_MD_NPICS","%s ����");
define("_MD_PICS","����");
define("_MD_ALBUM","�����");
define("_MD_ERROR","������");
define("_MD_KEYS","������� ���������");
define("_MD_CONTINUE","��������");

define("_MD_RANDOM","��� �������");
define("_MD_LASTUP","���� �����");
define("_MD_LASTCOM","��� ���������");
define("_MD_TOPN","������ ������");
define("_MD_TOPRATED","������ ������");
define("_MD_LASTHITS","��� ������");
define("_MD_SEARCH","����� �����");
define("_MD_USEARCH","����� ����� ������ ");
define("_MD_MOST_SENT","���� �������� ������");

define("_MD_ACCESS_DENIED","���� ��� ���� �������� ����� ��� �������");
define("_MD_PERM_DENIED","���� ��� ���� �������� ������ ��� �������");
define("_MD_PARAM_MISSING","�� ��� �������� ��� ����� ������� �������");
define("_MD_NON_EXIST_AP","������� �� ����� ���� ������ ��� ����� �����");
define("_MD_QUOTA_EXCEEDED","���� ������ �������<br /><br />���� ������� ������� [quota]�������� ����� ������� ��� �������  [space]�������� ������ ��� ����� ���� ��� ����� ������ �������� ��");
define("_MD_GD_FILE_TYPE_ERR","��� ��� ������ ����� GD ���� ���� ��� ������ ������� ����� ������� �� ����� JPEG � PNG.");
define("_MD_INVALID_IMG","������ ���� ������ �� ������� ������ ������� ���� ������ GD �����");
define("_MD_RESIZE_FAILED","������ ����� ������ �� ����� �����");
define("_MD_NO_IMG_TO_DISPLAY","�� ���� ��� ��������");
define("_MD_NO_EXIST_CAT","����� ���� ������ ��� ����� �����");
define("_MD_ORPHAN_CAT","����� ��� ����� ����� ������ ������� ���� ���� ��� ����� ������� �� ���� ������");
define("_MD_DIRECTORY_RO","������ '%s' ������ ������ ������� ��� ����� ���");
define("_MD_PIC_IN_INVALID_ALBUM","������ �� ����� ��� ����� (%s) �");
define("_MD_GD_VERSION_ERR","������ ������ ����� ������ GD ������� 2.� ���� ������ GD ������� 1.�");
define("_MD_NO_GD_FOUND","������ �� ���� ����� GD ���� ���� ������� �� ������� ����� ��� ������� ������� ImageMagick �� Netpbm");
define("_MD_IM_ERROR","��� �� ������ ImageMagick :");
define("_MD_IM_ERROR_CMD","��� Cmd :");
define("_MD_IM_ERROR_CONV","������ ������� ���� :");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","���� ������ ���������");
define("_MD_THM_ALB_LL","����� ���������");
define("_MD_THM_GAL_MYT","���� ��� ������� �����");
define("_MD_THM_GAL_MYL","������");
define("_MD_THM_ADM_MT","������ �����");
define("_MD_THM_ADM_ML","����� �����");
define("_MD_THM_USER_MT","������ ����");
define("_MD_THM_USER_ML","����� ����");
define("_MD_THM_UPLT","����� ���� �������");
define("_MD_THM_UPLL","����� ����");
define("_MD_THM_UPLLMORE","����� ��� ����");
define("_MD_THM_LAST_UPL","���������");
define("_MD_THM_LAST_COM","��� �����");
define("_MD_THM_MOST_VIEW","������ ������");
define("_MD_THM_TOP_RATE","������ ������");
define("_MD_THM_SEARCH","�����");
define("_MD_THM_UPL_APPR","������� �����");

define("_MD_THM_ALBMGR_LNK","����� ������ ����� ��������");
define("_MD_THM_MODIFY_LNK","����� ��������");
define("_MD_THM_CAT","�����");
define("_MD_THM_ALB","���������");
define("_MD_THM_PIC","�����");
define("_MD_THM_ALBONPAGE","%d ����� �� %d ����");
define("_MD_THM_DATE","�������");
define("_MD_THM_NAME","�����");
define("_MD_THM_SORT_DA","��� ��� ������� �������");
define("_MD_THM_SORT_DD","��� ��� ������� �������");
define("_MD_THM_SORT_NA","��� ��� ����� �������");
define("_MD_THM_SORT_ND","��� ��� ����� �������");
define("_MD_THM_PICPAGE","%d ���� �� %d ����");
define("_MD_THM_USERPAGE","%d ��� �� %d ����");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","����� : ");
define("_MD_FUNC_FSIZE","����� : ");
define("_MD_FUNC_DIM","������ : ");
define("_MD_FUNC_DATE","����� ������� : ");
define("_MD_FUNC_COM","%s �����");
define("_MD_FUNC_VIEW","%s ������");
define("_MD_FUNC_VOTE","%s ���");
define("_MD_FUNC_SEND","%s ���");
define("_MD_FUNC_DELUSER","��� ����");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","������ �� ����� ����� ...");
define("_MD_ADMIN_ENTER","������ ��� ����� ����� ...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","������� ����� ���� !");
define("_MD_ALBMGR_CONF_MOD","�� ��� ����� �� ����� ��� ������� �");
define("_MD_ALBMGR_NO_CHANGE","��� �� ��� ���� �� ����� !");
define("_MD_ALBMGR_NEW_ALB","����� ����");
define("_MD_ALBMGR_CONF_DEL1","�� ��� ����� �� ��� ���� ��� ��� ������� �");
define("_MD_ALBMGR_CONF_DEL2","�� ��������� ���� ����� ���� �");
define("_MD_ALBMGR_SELECT_FIRST","���� ����� ����");
define("_MD_ALBMGR_ALB_MGR","����� ���������");
define("_MD_ALBMGR_MY_GAL","* ������ *");
define("_MD_ALBMGR_NO_CAT","* �� ���� ��� *");
define("_MD_ALBMGR_DEL","���");
define("_MD_ALBMGR_NEW","����");
define("_MD_ALBMGR_APPLY","��� ��������");
define("_MD_ALBMGR_SELECT","���� ���");

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define("_MD_DB_ALB_NEED_TITLE","��� �� ���� ��� �������");
define("_MD_DB_NO_NEED","�� ����� ��� �����");
define("_MD_DB_ALB_UPDATED","������� �� ������");
define("_MD_DB_UNKOWN","������� ���� ������ ��� ����� �� ��� ���� �������� ������ ��� ���");
define("_MD_DB_NO_PICUP","�� ��� ����� �� ����<br /><br />��� ���� ����� ���� �� ��������� ����� �� ������ ���� ����� �������");
define("_MD_DB_ERR_MKDIR","��� �� ����� ���� %s ");
define("_MD_DB_DEST_DIR_RO","������ ���� ������ %s �� ���� ������� �� ������� ����");
define("_MD_DB_ERR_FEXT","��� ������� ������� ����� �� : <br /><br />%s");
define("_MD_DB_ERR_MOVE","�� ����� ��� %s ��� %s");
define("_MD_DB_ERR_PIC_SIZE","���� ������ ���� ��� �������� ���� ��� (���� ������ ������ �� %s � %s");
define("_MD_DB_ERR_FSIZE","��� ������ ���� ��� �������� ���� ��� (���� ������ ������� ��  %s ��������)!");
define("_MD_DB_ERR_IMG_INVALID","����� ���� ��� ������� ��� ����� �������");
define("_MD_DB_IMG_ALLOWED","��� ������ ����� %s ����");
define("_MD_DB_ERR_INSERT","������ '%s' ������ ����� �� ������� ");
define("_MD_DB_UPLOAD_SUCC","�� ����� ������ �����<br /><br />���� ����� ��� ���� ������");
define("_MD_DB_UPL_SUCC","��� ����� ������");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","�����");
define("_MD_DEL_FS_PIC","��� ������ ������");
define("_MD_DEL_DEL_SUCCESS","�� ����� �����");
define("_MD_DEL_NS_PIC","��� ������ �������");
define("_MD_DEL_ERR_DEL","������ �����");
define("_MD_DEL_THUMB","���� �����");
define("_MD_DEL_COMMENT","�����");
define("_MD_DEL_IMGALB","���� �� �������");
define("_MD_DEL_ALB_DEL_SUC","������� '%s' �� ���� �����");
define("_MD_DEL_ALBMGR","����� ���������");
define("_MD_DEL_INVALID","��� �� ������ ��������� �� '%s'");
define("_MD_DEL_CREATE","����� ����� '%s'");
define("_MD_DEL_UPDATE","����� ����� '%s' ���� '%s' ����� ������ '%s'");
define("_MD_DEL_DELPIC","��� ����");
define("_MD_DEL_DELALB","��� �����");

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define("_MD_DIS_CONF_DEL","�� ��� ����� �� ��� ���� ��� ��� ������ � ���� ��� ���� ��������� ����");
define("_MD_DIS_DEL_PIC","��� ��� ������");
define("_MD_DIS_SIZE","%s � %s �����");
define("_MD_DIS_VIEWS","%s ���");
define("_MD_DIS_SLIDE","��� ����������");
define("_MD_DIS_STOP_SLIDE","����� ����� ������������");
define("_MD_DIS_FULL","���� ���� ������ �� ����� ������");
define("_MD_DIS_TITLE","������� ������");
define("_MD_DIS_FNAME","��� �����");
define("_MD_DIS_ANAME","��� �������");
define("_MD_DIS_RATING","������� (%s ���)");
define("_MD_DIS_FSIZE","��� �����");
define("_MD_DIS_DIMEMS","������");
define("_MD_DIS_DISPLAYED","���� ��������");
define("_MD_DIS_CAMERA","������");
define("_MD_DIS_DATA_TAKEN","����� �����");
define("_MD_DIS_APERTURE","������");
define("_MD_DIS_EXPTIME","����� �����");
define("_MD_DIS_FLENGTH","����� �����");
define("_MD_DIS_COMMENT","�����");
define("_MD_DIS_BACK_TNPAGE","������ ����� �������");
define("_MD_DIS_SHOW_PIC_INFO","��� �� ����� ������� ������");
define("_MD_DIS_SEND_CARD","���� ������ ������ ������");
define("_MD_DIS_CARD_DISABLE","�������� �������� ����� ����");
define("_MD_DIS_CARD_DISABLEMSG","��� ���� �������� ������ ������ ������");
define("_MD_DIS_NEXT","������ ������ �������");
define("_MD_DIS_PREV","������ ������ �������");
define("_MD_DIS_PICPOS","���� %s/%s");
define("_MD_DIS_RATE_THIS","��� ������ ");
define("_MD_DIS_NO_VOTE","(�� ��� ������� ��� ����)");
define("_MD_DIS_RATINGCUR","(������� ������ : %s / 5 �� %s ���)");
define("_MD_DIS_RUBBISH","������");
define("_MD_DIS_POOR","����");
define("_MD_DIS_FAIR","������");
define("_MD_DIS_GOOD","���� ���");
define("_MD_DIS_EXCELLENT","�����");
define("_MD_DIS_GREAT","����� ���");
define("_MD_DIS_UPLOADER","����� ������");
define("_MD_DIS_EXIF_ERR","��� ���� ��� �� ���� ������� �����  EXIF �� ����� JPEG  ���� ����� ��� ������ �� ���� ������");
define("_MD_DIS_VIEW_MORE_BY","��� ���� �� ����� ���� �����");
define("_MD_DIS_SUBIP","�� �� ������");
define("_MD_DIS_SENT","����� ������ ������");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","����� ����� ������");
define("_MD_CARD_INVALIDE_EMAIL","<b>�����</b> : ���� �����");
define("_MD_CARD_ECARD_TITLE","����� �� %s");
define("_MD_CARD_VIEW_ECARD","��� �� ���� ������� ���� ���� ���� ����� ��� ������");
define("_MD_CARD_VIEW_MORE_PICS","���� ��� ������ ���� ������ �� ��������");
define("_MD_CARD_SEND_SUCCESS","�� ����� �������");
define("_MD_CARD_SEND_FAILED","���� ������ ������� ����� ������� �����");
define("_MD_CARD_FROM","��");
define("_MD_CARD_YOUR_NAME","����");
define("_MD_CARD_YOUR_EMAIL","�����");
define("_MD_CARD_TO","���");
define("_MD_CARD_RCPT_NAME","��� ������ ����");
define("_MD_CARD_RCPT_EMAIL","���� ������ ����");
define("_MD_CARD_GREETINGS","������� ���������");
define("_MD_CARD_MESSAGE","�������");
define("_MD_CARD_PERHOUR","����� �� ������ %s �� ������ ������� ���� �������� �� ��� ����");
define("_MD_CARD_NOTINDB","�� ��� ����� ������� �� ����� ��������<br />���� ����� ����� ������");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","�������&nbsp;������");
define("_MD_EDITPICS_TITLE","�����");
define("_MD_EDITPICS_DESC","�����");
define("_MD_EDITPICS_INFOSTR","%s�%s - %s�������� - %s ����� - %s ���");
define("_MD_EDITPICS_APPROVE","����� ��� ������");
define("_MD_EDITPICS_PP_APPROVE","����� ����� �����");
define("_MD_EDITPICS_DEL_PIC","��� ������");
define("_MD_EDITPICS_RVIEW","����� ������ ���� �������� �� �����");
define("_MD_EDITPICS_RVOTES","����� ��������� �� �����");
define("_MD_EDITPICS_DCOM","��� ���������");
define("_MD_EDITPICS_UPL_APPROVAL","����� �����");
define("_MD_EDITPICS_EDIT","���� ������");
define("_MD_EDITPICS_NEXT","������ ����� �������");
define("_MD_EDITPICS_PREV","������ ����� �������");
define("_MD_EDITPICS_NUMDIS","��� ����� �����");
define("_MD_EDITPICS_APPLY","���� ���������");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","�� ��� ����� �� ��� ���� ��� ������� � ���� ��� �� ����� ���������� ��������  ���");
define("_MD_INDEX_DEL","���");
define("_MD_INDEX_MOD","���������");
define("_MD_INDEX_EDIT","����� �����");
define("_MD_INDEX_STAT1","<b>[pictures]</b> ���� �� <b>[albums]</b> ����� �  <b>[cat]</b> ��� �� <b>[comments]</b> ����� ������� <b>[views]</b> ���");
define("_MD_INDEX_STAT2","<b>[pictures]</b> ������ <b>[albums]</b> ����� ������� <b>[views]</b> ���");
define("_MD_INDEX_USERS_GAL","%s �����");
define("_MD_INDEX_STAT3","<b>[pictures]</b> ���� �� <b>[albums]</b> ����� �� <b>[comments]</b> ����� �������  <b>[views]</b> ���");
define("_MD_INDEX_ULIST","����� �������");
define("_MD_INDEX_NO_UGAL","������ �� ����� �������");
define("_MD_INDEX_NALBS","%s �����");
define("_MD_INDEX_NPICS","%s ����");
define("_MD_INDEX_LASTADD",", ��� ���� ����� �� %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N","����� ����� %s");
define("_MD_MODIFYALB_GEN_SET","����� ���������");
define("_MD_MODIFYALB_ALB_TITLE","��� �������");
define("_MD_MODIFYALB_ALB_CAT","����� ���������");
define("_MD_MODIFYALB_ALB_DESC","��� �������");
define("_MD_MODIFYALB_ALB_THUMB","������ ������� �������");
define("_MD_MODIFYALB_ALB_PERM","���������");
define("_MD_MODIFYALB_CAN_VIEW","������ �������� �������");
define("_MD_MODIFYALB_CAN_UPLOAD","������ ������ ����� �����");
define("_MD_MODIFYALB_CAN_COM","������ ������ ����� �����");
define("_MD_MODIFYALB_CAN_RATE","������ ������ �������");
define("_MD_MODIFYALB_USER_GAL","����� �������");
define("_MD_MODIFYALB_NO_CAT","* �� ���� ��� *");
define("_MD_MODIFYALB_ALB_EMPTY","������� ����");
define("_MD_MODIFYALB_LAST_UPL","��� �����");
define("_MD_MODIFYALB_PUB_ALB","���� (����� ���)");
define("_MD_MODIFYALB_ME_ONLY","��� ���");
define("_MD_MODIFYALB_OWNER_ONLY","���� ������� (%s) ���");
define("_MD_MODIFYALB_GROUP_ONLY","����� ������ '%s'");
define("_MD_MODIFYALB_ERR_NO_ALB","�� ���� ����� ������ ������ �� ����� ��������");
define("_MD_MODIFYALB_UPDATE","����� �������");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","���� ��� ��� �������� �����");
define("_MD_RATE_OK","�� ���� ������");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","����� �� ������ �����");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE","����� ����");
define("_MD_UPL_MAX_FSIZE","���� ������ ���� ������ ��  %s ���� ����");
define("_MD_UPL_ALBUM","�������");
define("_MD_UPL_PICTURE","������");
define("_MD_UPL_PIC_TITLE","��� ������");
define("_MD_UPL_DESCRIPTION","��� ������");
define("_MD_UPL_KEYWORDS","������� ��������� (���� ������ �� ������ ������)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","���� ������ ����� ���� �� ���� �������� ����");
define("_MD_UPL_YOURALB","�������� ������");
define("_MD_UPL_ALBPUB","��������� ������");
define("_MD_UPL_OUSERALB","������� ������� ������");



?>
