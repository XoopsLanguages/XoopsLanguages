<?php
// $Id: main.php,v 1.4 2005/09/22 08:08:02 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by GrÈgory DEMAR                           //
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
define("_MD_BYTES","»«Ì ");
define("_MD_KB","ﬂÌ·Ê»«Ì ");
define("_MD_MB","„ÌÃ«»«Ì ");

define("_MD_NPICS","%s ’Ê—…");
define("_MD_PICS","’Ê—…");
define("_MD_ALBUM","√·»Ê„");
define("_MD_ERROR","«·⁄Êœ…");
define("_MD_KEYS","«·ﬂ·„«  «·„› «ÕÌ…");
define("_MD_CONTINUE","«·„Ê«’·…");

define("_MD_RANDOM","’Ê— ⁄‘Ê«∆Ì…");
define("_MD_LASTUP","ÃœÌœ «·’Ê—");
define("_MD_LASTCOM","¬Œ— «· ⁄·Ìﬁ« ");
define("_MD_TOPN","«·√ﬂÀ— „‘«Âœ…");
define("_MD_TOPRATED","«·√›÷·  — Ì»«");
define("_MD_LASTHITS","¬Œ— „‘«ÂœÂ");
define("_MD_SEARCH","‰ «∆Ã «·»ÕÀ");
define("_MD_USEARCH","«·’Ê— „÷«›… »Ê«”ÿ… ");
define("_MD_MOST_SENT","√ﬂÀ— «·»ÿ«ﬁ«  ≈—”«·«");

define("_MD_ACCESS_DENIED","⁄›Ê« ·Ì” ·œÌﬂ «·’·«ÕÌ… ·œŒÊ· Â–Â «·„‰ÿﬁ…");
define("_MD_PERM_DENIED","⁄›Ê« ·Ì” ·œÌﬂ «·’·«ÕÌ… ·≈Ã—«¡ Â–Â «·⁄„·Ì…");
define("_MD_PARAM_MISSING"," „ ÿ·» «·”ﬂ—Ì»  œÊ‰  ÕœÌœ «·⁄„·Ì… »«·ﬂ«„·");
define("_MD_NON_EXIST_AP","«·√·»Ê„ √Ê «·ﬁ”„ «·–Ì «Œ — Â €Ì— „ÊÃÊœ √”«”«");
define("_MD_QUOTA_EXCEEDED","‰›«– «·ﬂ„Ì… «·„ÕœœÂ<br /><br />·œÌﬂ «·„”«Õ… «· «·Ì… [quota]ﬂÌ·Ê»«Ì  Ê’Ê—ﬂ «” Â·ﬂ  Â–Â «·„”«Õ…  [space]ﬂÌ·Ê»«Ì  Ê«÷«›… Â–Â «·’Ê— Ì⁄‰Ì «‰ﬂ   ŒÿÏ «·ﬂ„Ì… «·„„‰ÊÕ… ·ﬂ");
define("_MD_GD_FILE_TYPE_ERR","«–« «‰   ” Œœ„ „ﬂ »… GD ›–·ﬂ Ì⁄‰Ì «‰ﬂ  ” ÿÌ⁄ «· ⁄«„· »Â–«‰ «·‰Ê⁄«‰ „‰ «·’Ê— JPEG Ê PNG.");
define("_MD_INVALID_IMG","«·’Ê—… «· Ì Õ„· Â« √Ê √œŒ· Â« ·«Ì„ﬂ‰ «· ⁄«„· „⁄Â« »„ﬂ »… GD ··’Ê—");
define("_MD_RESIZE_FAILED","·«Ì„ﬂ‰  ’€Ì— «·’Ê—… √Ê  ’€Ì— ÕÃ„Â«");
define("_MD_NO_IMG_TO_DISPLAY","·« ÌÊÃœ ’Ê— ··„‘«ÂœÂ");
define("_MD_NO_EXIST_CAT","«·ﬁ”„ «·–Ì «Œ — Â €Ì— „ÊÃÊœ √”«”«");
define("_MD_ORPHAN_CAT","«·ﬁ”„ €Ì— „ÊÃÊœ √”«”« ·≈Ã—«¡ «· ⁄œÌ· Ì—ÃÏ œŒÊ· ﬁ”„ «œ«—… «·√ﬁ”«„ ›Ì ·ÊÕ… «· Õﬂ„");
define("_MD_DIRECTORY_RO","«·„Ã·œ '%s' ·«Ì„ﬂ‰ ﬁ—«¡ Â ›·«Ì„ﬂ‰ „”Õ «·’Ê— „‰Â");
define("_MD_PIC_IN_INVALID_ALBUM","«·’Ê—… ›Ì √·»Ê„ €Ì— „ÊÃÊœ (%s) ø");
define("_MD_GD_VERSION_ERR","”Ì—›—ﬂ ·«Ìœ⁄„ „ﬂ »… «·’Ê—… GD «·≈’œ«— 2.◊ Ì—ÃÏ «Œ Ì«— GD «·≈’œ«— 1.◊");
define("_MD_NO_GD_FOUND","”Ì—›—ﬂ ·« Ìœ⁄„ „ﬂ »… GD ·–·ﬂ «”√· „” ÷Ì›ﬂ ⁄‰ «„ﬂ«‰Ì… «÷«›… √Õœ «·»—«„Ã «· «·Ì… ImageMagick √Ê Netpbm");
define("_MD_IM_ERROR","Œÿ√ ›Ì «„ œ«œ ImageMagick :");
define("_MD_IM_ERROR_CMD","”ÿ— Cmd :");
define("_MD_IM_ERROR_CONV","»—‰«„Ã «· ÕÊÌ· ÌﬁÊ· :");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","«–Â» ·ﬁ«∆„… «·√·»Ê„« ");
define("_MD_THM_ALB_LL","ﬁ«∆„… «·√·»Ê„« ");
define("_MD_THM_GAL_MYT","«–Â» «·Ï «·√·»Ê„ «·Œ«’");
define("_MD_THM_GAL_MYL","√·»Ê„Ì");
define("_MD_THM_ADM_MT","«·œŒÊ· ﬂ„œÌ—");
define("_MD_THM_ADM_ML","«·⁄—÷ ﬂ„œÌ—");
define("_MD_THM_USER_MT","«·œŒÊ· ﬂ⁄÷Ê");
define("_MD_THM_USER_ML","«·⁄—÷ ﬂ⁄÷Ê");
define("_MD_THM_UPLT"," Õ„Ì· ’Ê—… ··√·»Ê„");
define("_MD_THM_UPLL"," Õ„Ì· ’Ê—…");
define("_MD_THM_UPLLMORE"," Õ„Ì· ’Ê— √ﬂÀ—");
define("_MD_THM_LAST_UPL","«·„” Ãœ« ");
define("_MD_THM_LAST_COM","¬Œ—  ⁄·Ìﬁ");
define("_MD_THM_MOST_VIEW","«·√ﬂÀ— „‘«Âœ…");
define("_MD_THM_TOP_RATE","«·√›÷·  — Ì»«");
define("_MD_THM_SEARCH","«·»ÕÀ");
define("_MD_THM_UPL_APPR","’·«ÕÌ«  «·‰‘—");

define("_MD_THM_ALBMGR_LNK","«‰‘«¡ Ê ÕœÌœ „Ê«÷⁄ √·»Ê„« Ì");
define("_MD_THM_MODIFY_LNK"," Õ—Ì— √·»Ê„« Ì");
define("_MD_THM_CAT","«·ﬁ”„");
define("_MD_THM_ALB","«·√·»Ê„« ");
define("_MD_THM_PIC","«·’Ê—");
define("_MD_THM_ALBONPAGE","%d √·»Ê„ ›Ì %d ’›Õ…");
define("_MD_THM_DATE","«· «—ÌŒ");
define("_MD_THM_NAME","«·≈”„");
define("_MD_THM_SORT_DA","⁄—÷ Õ”» «· «—ÌŒ  ’«⁄œÌ«");
define("_MD_THM_SORT_DD","⁄—÷ Õ”» «· «—ÌŒ  ‰«“·Ì«");
define("_MD_THM_SORT_NA","⁄—÷ Õ”» «·≈”„  ’«⁄œÌ«");
define("_MD_THM_SORT_ND","⁄—÷ Õ”» «·≈”„  ‰«“·Ì«");
define("_MD_THM_PICPAGE","%d ’Ê—… ›Ì %d ’›Õ…");
define("_MD_THM_USERPAGE","%d ⁄÷Ê ›Ì %d ’›Õ…");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","«·≈”„ : ");
define("_MD_FUNC_FSIZE","«·ÕÃ„ : ");
define("_MD_FUNC_DIM","«·„ﬁ«” : ");
define("_MD_FUNC_DATE"," «—ÌŒ «·≈÷«›… : ");
define("_MD_FUNC_COM","%s  ⁄·Ìﬁ");
define("_MD_FUNC_VIEW","%s „‘«Âœ…");
define("_MD_FUNC_VOTE","%s ’Ê ");
define("_MD_FUNC_SEND","%s „—Â");
define("_MD_FUNC_DELUSER","⁄÷Ê „·€Ì");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","«·Œ—ÊÃ „‰ «·⁄—÷ ﬂ„œÌ— ...");
define("_MD_ADMIN_ENTER","«·œŒÊ· «·Ï «·⁄—÷ ﬂ„œÌ— ...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","«·√·»Ê„ ÌÕ «Ã ·≈”„ !");
define("_MD_ALBMGR_CONF_MOD","Â· «‰  „ √ﬂœ „‰ √Ã—«¡ Â–Â «·⁄„·Ì… ø");
define("_MD_ALBMGR_NO_CHANGE","«‰  ·„  ﬁ„ »⁄„· «Ì  ⁄œÌ· !");
define("_MD_ALBMGR_NEW_ALB","√·»Ê„ ÃœÌœ");
define("_MD_ALBMGR_CONF_DEL1","Â· √‰  „ √ﬂœ „‰ «‰ﬂ  —Ìœ „”Õ Â–« «·√·»Ê„ ø");
define("_MD_ALBMGR_CONF_DEL2","ﬂ· «· ⁄·Ìﬁ«  ”Ì „ „”ÕÂ« ﬂ–·ﬂ ø");
define("_MD_ALBMGR_SELECT_FIRST","«Œ — √·»Ê„ √Ê·«");
define("_MD_ALBMGR_ALB_MGR","«œ«—… «·√·»Ê„« ");
define("_MD_ALBMGR_MY_GAL","* √·»Ê„Ì *");
define("_MD_ALBMGR_NO_CAT","* ·« ÌÊÃœ ﬁ”„ *");
define("_MD_ALBMGR_DEL","„”Õ");
define("_MD_ALBMGR_NEW","ÃœÌœ");
define("_MD_ALBMGR_APPLY","Õ›Ÿ «· €Ì—« ");
define("_MD_ALBMGR_SELECT","≈Œ — ﬁ”„");

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define("_MD_DB_ALB_NEED_TITLE","ÌÃ» «‰  Õœœ «”„ ··√·»Ê„");
define("_MD_DB_NO_NEED","·«  Õ «Ã «·Ï  ÕœÌÀ");
define("_MD_DB_ALB_UPDATED","«·√·»Ê„  „  ÕœÌÀÂ");
define("_MD_DB_UNKOWN","«·√·»Ê„ «·–Ì «Œ — Â €Ì— „ÊÃÊœ √Ê ·Ì” ·œÌﬂ «·’·«ÕÌ… · Õ„Ì· ’Ê— ›ÌÂ");
define("_MD_DB_NO_PICUP","·„ Ì „  Õ„Ì· √Ì ’Ê—…<br /><br />≈–« √—œ   Õ„Ì· ’Ê—… ﬁ„ »≈Œ Ì«—Â« Ê √ﬂœ «‰ «·„Êﬁ⁄ Ìﬁ»· Œ«’Ì… «· Õ„Ì·");
define("_MD_DB_ERR_MKDIR","›‘· ›Ì «‰‘«¡ „Ã·œ %s ");
define("_MD_DB_DEST_DIR_RO","«·„Ã·œ «·–Ì «Œ — Â %s ·« Ìﬁ»· «·ﬁ—«¡… «Ê «·ﬂ «»… ⁄·ÌÂ");
define("_MD_DB_ERR_FEXT","›ﬁÿ «·„·›«  «· «·Ì… „ «Õ… ·ﬂ : <br /><br />%s");
define("_MD_DB_ERR_MOVE","·« Ì„ﬂ‰Â ‰ﬁ· %s «·Ï %s");
define("_MD_DB_ERR_PIC_SIZE","„ﬁ«” «·’Ê—… «· Ì ﬁ„  » Õ„Ì·Â« ﬂ»Ì— Ãœ« («·Õœ «·√ﬁ’Ï ··„ﬁ«” ÂÊ %s ◊ %s");
define("_MD_DB_ERR_FSIZE","ÕÃ„ «·’Ê—… «· Ì ﬁ„  » Õ„Ì·Â« ﬂ»Ì— Ãœ« («·Õœ «·√ﬁ’Ï «·„”„ÊÕ ÂÊ  %s ﬂÌ·Ê»«Ì )!");
define("_MD_DB_ERR_IMG_INVALID","«·„·› «·–Ì ﬁ„  » Õ„Ì·Â €Ì— „”„ÊÕ » Õ„Ì·Â");
define("_MD_DB_IMG_ALLOWED","«‰   ” ÿÌ⁄  Õ„Ì· %s ’Ê—…");
define("_MD_DB_ERR_INSERT","«·’Ê—… '%s' ·«Ì„ﬂ‰ Ê÷⁄Â« ›Ì «·√·»Ê„ ");
define("_MD_DB_UPLOAD_SUCC"," „  Õ„Ì· «·’Ê—… »‰Ã«Õ<br /><br />”Ì „ ‰‘—Â« »⁄œ  ›ﬁœ «·„œÌ—");
define("_MD_DB_UPL_SUCC"," „  «÷«›… «·’Ê—…");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","«·≈”„");
define("_MD_DEL_FS_PIC","ÕÃ„ «·’Ê—… «·ﬂ»Ì—");
define("_MD_DEL_DEL_SUCCESS"," „ «·„”Õ »‰Ã«Õ");
define("_MD_DEL_NS_PIC","ÕÃ„ «·’Ê—… «·ÿ»Ì⁄Ì");
define("_MD_DEL_ERR_DEL","·«Ì„ﬂ‰ «·„”Õ");
define("_MD_DEL_THUMB","’Ê—… „’€—…");
define("_MD_DEL_COMMENT"," ⁄·Ìﬁ");
define("_MD_DEL_IMGALB","’Ê—… ›Ì «·√·»Ê„");
define("_MD_DEL_ALB_DEL_SUC","«·√·»Ê„ '%s'  „ „”ÕÂ »‰Ã«Õ");
define("_MD_DEL_ALBMGR","≈œ«—… «·√·»Ê„« ");
define("_MD_DEL_INVALID","Œÿ√ ›Ì «” ·«„ «·„⁄·Ê„«  ›Ì '%s'");
define("_MD_DEL_CREATE","«‰‘«¡ √·»Ê„ '%s'");
define("_MD_DEL_UPDATE"," ÕœÌÀ √·»Ê„ '%s' »≈”„ '%s' Ê’›Õ… —∆Ì”Ì… '%s'");
define("_MD_DEL_DELPIC","„”Õ ’Ê—…");
define("_MD_DEL_DELALB","„”Õ √·»Ê„");

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define("_MD_DIS_CONF_DEL","Â· √‰  „ √ﬂœ „‰ «‰ﬂ  —Ìœ „”Õ Â–Â «·’Ê—… ø ”Ì „ „”Õ Ã„Ì⁄ «· ⁄·Ìﬁ«  ﬂ–·ﬂ");
define("_MD_DIS_DEL_PIC","„”Õ Â–Â «·’Ê—…");
define("_MD_DIS_SIZE","%s ◊ %s »Ìﬂ”·");
define("_MD_DIS_VIEWS","%s „—Â");
define("_MD_DIS_SLIDE","⁄—÷ √Ê Ê„« ÌﬂÌ");
define("_MD_DIS_STOP_SLIDE","≈Ìﬁ«› «·⁄—÷ «·√Ê Ê„« ÌﬂÌ");
define("_MD_DIS_FULL","«÷€ÿ · —Ï «·’Ê—… ›Ì «·ÕÃ„ «·ﬂ»Ì—");
define("_MD_DIS_TITLE","„⁄·Ê„«  «·’Ê—…");
define("_MD_DIS_FNAME","≈”„ «·„·›");
define("_MD_DIS_ANAME","«”„ «·√·»Ê„");
define("_MD_DIS_RATING","«· — Ì» (%s ’Ê )");
define("_MD_DIS_FSIZE","ÕÃ„ «·„·›");
define("_MD_DIS_DIMEMS","«·„ﬁ«”");
define("_MD_DIS_DISPLAYED","„—«  «·„‘«Âœ…");
define("_MD_DIS_CAMERA","ﬂ«„Ì—«");
define("_MD_DIS_DATA_TAKEN"," «—ÌŒ «·‰‘—");
define("_MD_DIS_APERTURE","«·„‰›–");
define("_MD_DIS_EXPTIME"," «—ÌŒ «·ÿ—Õ");
define("_MD_DIS_FLENGTH","„” ÊÏ «·ÿÊ·");
define("_MD_DIS_COMMENT"," ⁄·Ìﬁ");
define("_MD_DIS_BACK_TNPAGE","«·⁄Êœ… ··’Ê— «·„’€—…");
define("_MD_DIS_SHOW_PIC_INFO","⁄—÷ √Ê ≈Œ›«¡ „⁄·Ê„«  «·’Ê—…");
define("_MD_DIS_SEND_CARD","√—”· «·’Ê—… ﬂ»ÿ«ﬁ… »—ÌœÌ…");
define("_MD_DIS_CARD_DISABLE","«·»ÿ«ﬁ«  «·»—ÌœÌ… „⁄ÿ·… «·¬‰");
define("_MD_DIS_CARD_DISABLEMSG","·Ì” ·œÌﬂ «·’·«ÕÌ… ·≈—”«· »ÿ«ﬁ«  »—ÌœÌ…");
define("_MD_DIS_NEXT","„‘«Âœ… «·’Ê—… «·”«»ﬁ…");
define("_MD_DIS_PREV","„‘«Âœ… «·’Ê—… «· «·Ì…");
define("_MD_DIS_PICPOS","’Ê—… %s/%s");
define("_MD_DIS_RATE_THIS","’Ê  ··’Ê—… ");
define("_MD_DIS_NO_VOTE","(·„ Ì „ «· ’ÊÌ  «·Ï «·¬‰)");
define("_MD_DIS_RATINGCUR","(«· — Ì» «·Õ«·Ì : %s / 5 „⁄ %s ’Ê )");
define("_MD_DIS_RUBBISH","„ﬁ»Ê·…");
define("_MD_DIS_POOR","ÃÌœ…");
define("_MD_DIS_FAIR","„ Ê”ÿ…");
define("_MD_DIS_GOOD","ÃÌœ… Ãœ«");
define("_MD_DIS_EXCELLENT","„„Ì“…");
define("_MD_DIS_GREAT","„„Ì“… Ãœ«");
define("_MD_DIS_UPLOADER","„—”·… »Ê«”ÿ…");
define("_MD_DIS_EXIF_ERR","œ⁄„ «·»Ì √ ‘ »Ì ·œÌﬂ ·«Ì„ﬂ‰Â ﬁ—«¡…  EXIF ›Ì „·›«  JPEG  Ì—ÃÏ «Ìﬁ«› Â–Â «·„Ì“… „‰ ·ÊÕ… «· Õﬂ„");
define("_MD_DIS_VIEW_MORE_BY","⁄—÷ „“Ìœ „‰ «·’Ê— ·‰›” «·⁄÷Ê");
define("_MD_DIS_SUBIP","√Ì »Ì «·„—”·");
define("_MD_DIS_SENT","√—”·  ﬂ»ÿ«ﬁ… »—ÌœÌ…");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","«—”«· »ÿ«ﬁ… »—ÌœÌ…");
define("_MD_CARD_INVALIDE_EMAIL","<b> Õ–Ì—</b> : »—Ìœ Œ«ÿÌ¡");
define("_MD_CARD_ECARD_TITLE","»ÿ«ﬁ… „‰ %s");
define("_MD_CARD_VIEW_ECARD","«–« ·„  ŸÂ— «·»ÿ«ﬁ… »‘ﬂ· ’ÕÌÕ Ì—ÃÏ «·÷€ÿ ⁄·Ï «·—«»ÿ");
define("_MD_CARD_VIEW_MORE_PICS","«÷€ÿ ⁄·Ï «·—«»ÿ · —Ï «·„“Ìœ „‰ «·»ÿ«ﬁ« ");
define("_MD_CARD_SEND_SUCCESS"," „ «—”«· «·»ÿ«ﬁ…");
define("_MD_CARD_SEND_FAILED","⁄›Ê« «·„Êﬁ⁄ ·«Ì„ﬂ‰Â «—”«· «·»ÿ«ﬁ… Õ«·Ì«");
define("_MD_CARD_FROM","„‰");
define("_MD_CARD_YOUR_NAME","«”„ﬂ");
define("_MD_CARD_YOUR_EMAIL","»—Ìœﬂ");
define("_MD_CARD_TO","«·Ï");
define("_MD_CARD_RCPT_NAME","≈”„ «·„—”· «·ÌÂ");
define("_MD_CARD_RCPT_EMAIL","»—Ìœ «·„—”· «·ÌÂ");
define("_MD_CARD_GREETINGS","«·—”«·… «· —ÕÌ»Ì…");
define("_MD_CARD_MESSAGE","«·—”«·…");
define("_MD_CARD_PERHOUR","„”„ÊÕ ·ﬂ »≈—”«· %s ›Ì «·”«⁄… «·Ê«Õœ… Ì—ÃÏ «·„Õ«Ê·… ›Ì Êﬁ  ·«Õﬁ");
define("_MD_CARD_NOTINDB","·„ Ì „ «œŒ«· «·»ÿ«ﬁ… ›Ì ﬁ«⁄œ… «·»Ì«‰« <br />Ì—ÃÏ «—”«· «·Œÿ√ ··„œÌ—");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","„⁄·Ê„« &nbsp;«·’Ê—…");
define("_MD_EDITPICS_TITLE","«·≈”„");
define("_MD_EDITPICS_DESC","«·Ê’›");
define("_MD_EDITPICS_INFOSTR","%s◊%s - %sﬂÌ·Ê»«Ì  - %s ‘ÊÂœ  - %s ’Ê ");
define("_MD_EDITPICS_APPROVE"," ’—ÌÕ ‰‘— ··’Ê—…");
define("_MD_EDITPICS_PP_APPROVE"," √ÃÌ·  ’—ÌÕ «·‰‘—");
define("_MD_EDITPICS_DEL_PIC","„”Õ «·’Ê—…");
define("_MD_EDITPICS_RVIEW","«⁄«œ… «Õ ”«» „—«  «·„‘«Âœ… „‰ «·’›—");
define("_MD_EDITPICS_RVOTES","≈⁄«œ… «· ’ÊÌ «  „‰ «·’›—");
define("_MD_EDITPICS_DCOM","„”Õ «· ⁄·Ìﬁ« ");
define("_MD_EDITPICS_UPL_APPROVAL"," ’—ÌÕ «·‰‘—");
define("_MD_EDITPICS_EDIT"," ÕÌ— «·’Ê—…");
define("_MD_EDITPICS_NEXT","„‘«Âœ… «·’Ê— «· «·Ì…");
define("_MD_EDITPICS_PREV","„‘«Âœ… «·’Ê— «·”«»ﬁ…");
define("_MD_EDITPICS_NUMDIS","⁄œœ «·’Ê— ··⁄—÷");
define("_MD_EDITPICS_APPLY","ﬁ»Ê· «· ⁄œÌ·« ");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","Â· √‰  „ «ﬂœ „‰ √‰ﬂ  —Ìœ „”Õ «·√·»Ê„ ø ”Ì „ „”Õ ﬂ· «·’Ê— Ê«· ⁄·Ìﬁ«  «·„‰œ—Ã…  ›ÌÂ");
define("_MD_INDEX_DEL","„”Õ");
define("_MD_INDEX_MOD","«· ›÷Ì·« ");
define("_MD_INDEX_EDIT"," Õ—Ì— «·’Ê—");
define("_MD_INDEX_STAT1","<b>[pictures]</b> ’Ê—… ›Ì <b>[albums]</b> √·»Ê„ Ê  <b>[cat]</b> ﬁ”„ „⁄ <b>[comments]</b>  ⁄·Ìﬁ Ê„‘«Âœ… <b>[views]</b> „—…");
define("_MD_INDEX_STAT2","<b>[pictures]</b> ’Ê—…›Ì <b>[albums]</b> √·»Ê„ Ê„‘«Âœ… <b>[views]</b> „—…");
define("_MD_INDEX_USERS_GAL","%s √·»Ê„");
define("_MD_INDEX_STAT3","<b>[pictures]</b> ’Ê—… ›Ì <b>[albums]</b> √·»Ê„ „⁄ <b>[comments]</b>  ⁄·Ìﬁ Ê„‘«Âœ…  <b>[views]</b> „—…");
define("_MD_INDEX_ULIST","ﬁ«∆„… «·√⁄÷«¡");
define("_MD_INDEX_NO_UGAL","·«ÌÊÃœ √Ì √·»Ê„ ··√⁄÷«¡");
define("_MD_INDEX_NALBS","%s √·»Ê„");
define("_MD_INDEX_NPICS","%s ’Ê—…");
define("_MD_INDEX_LASTADD",", ¬Œ— ’Ê—… „÷«›… ›Ì %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N"," ÕœÌÀ √·»Ê„ %s");
define("_MD_MODIFYALB_GEN_SET","≈œ«—… «· ⁄œÌ·« ");
define("_MD_MODIFYALB_ALB_TITLE","«”„ «·√·»Ê„");
define("_MD_MODIFYALB_ALB_CAT","√ﬁ”«„ «·√·»Ê„« ");
define("_MD_MODIFYALB_ALB_DESC","Ê’› «·√·»Ê„");
define("_MD_MODIFYALB_ALB_THUMB","«·’Ê—… «·„’€—… ··√·»Ê„");
define("_MD_MODIFYALB_ALB_PERM","«·’·«ÕÌ« ");
define("_MD_MODIFYALB_CAN_VIEW","’·«ÕÌ… «·„‘«Âœ… ··√·»Ê„");
define("_MD_MODIFYALB_CAN_UPLOAD","«·“Ê«— Ì„ﬂ‰Â„  Õ„Ì· «·’Ê—");
define("_MD_MODIFYALB_CAN_COM","«·“Ê«— Ì„ﬂ‰Â„ «—”«·  ⁄·Ìﬁ");
define("_MD_MODIFYALB_CAN_RATE","«·“Ê«— Ì„ﬂ‰Â„ «· ’ÊÌ ");
define("_MD_MODIFYALB_USER_GAL","√·»Ê„ «·√⁄÷«¡");
define("_MD_MODIFYALB_NO_CAT","* ·« ÌÊÃœ ﬁ”„ *");
define("_MD_MODIFYALB_ALB_EMPTY","«·√·»Ê„ ›«—€");
define("_MD_MODIFYALB_LAST_UPL","¬Œ—  Õ„Ì·");
define("_MD_MODIFYALB_PUB_ALB","«·ﬂ· («·»Ê„ ⁄«„)");
define("_MD_MODIFYALB_ME_ONLY","√‰« ›ﬁÿ");
define("_MD_MODIFYALB_OWNER_ONLY","„«·ﬂ «·√·»Ê„ (%s) ›ﬁÿ");
define("_MD_MODIFYALB_GROUP_ONLY","√⁄÷«¡ „Ã„Ê⁄… '%s'");
define("_MD_MODIFYALB_ERR_NO_ALB","·« ÌÊÃœ √·»Ê„  ” ÿÌ⁄  Õ—Ì—Â ›Ì ﬁ«⁄œ… «·»Ì«‰« ");
define("_MD_MODIFYALB_UPDATE"," ÕœÌÀ «·√·»Ê„");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","⁄›Ê« ·ﬁœ ﬁ„  »«· ’ÊÌ  „”»ﬁ«");
define("_MD_RATE_OK"," „ ﬁ»Ê·  ’ÊÌ ﬂ");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","«·»ÕÀ ›Ì „Ã„Ê⁄… «·’Ê—");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE"," Õ„Ì· ’Ê—…");
define("_MD_UPL_MAX_FSIZE","«·Õœ «·√ﬁ’Ï ·ÕÃ„ «·’Ê—… ÂÊ  %s ﬂÌ·Ê »«Ì ");
define("_MD_UPL_ALBUM","«·√·»Ê„");
define("_MD_UPL_PICTURE","«·’Ê—…");
define("_MD_UPL_PIC_TITLE","«”„ «·’Ê—…");
define("_MD_UPL_DESCRIPTION","Ê’› «·’Ê—…");
define("_MD_UPL_KEYWORDS","«·ﬂ·„«  «·„› «ÕÌ… («›’· «·ﬂ·„… ⁄‰ «·√Œ—Ï »„”«›…)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","⁄›Ê« ·«ÌÊÃœ √·»Ê„ Ìﬁ»· √‰  ﬁÊ„ »«· Õ„Ì· «·ÌÂ");
define("_MD_UPL_YOURALB","√·»Ê„« ﬂ «·Œ«’…");
define("_MD_UPL_ALBPUB","«·√·»Ê„«  «·⁄«„…");
define("_MD_UPL_OUSERALB","√·»Ê„«  «·√⁄÷«¡ «·√Œ—Ï");



?>
