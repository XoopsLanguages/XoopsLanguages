<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2008-06-25
// $Id$
// ------------------------------------------------------------------------- //

define("_BACK_MODULES_PAGE","回模組首頁");
//分頁物件用的語系
define("_BP_BACK_PAGE","上一頁");
define("_BP_NEXT_PAGE","下一頁");
define("_BP_FIRST_PAGE","第一頁");
define("_BP_LAST_PAGE","最後頁");
define("_BP_GO_BACK_PAGE","前 %s 頁");
define("_BP_GO_NEXT_PAGE","後 %s 頁");
define("_BP_TOOLBAR","共 %s 頁，目前在第 %s 頁：");
define("_BP_DEL_CHK","確定要刪除此資料？");
define("_BP_FUNCTION","功能");
define("_BP_EDIT","編輯");
define("_BP_DEL","刪除");
define("_BP_ADD","新增");

define("_MA_TADFORM_YES","是");
define("_MA_TADFORM_NO","否");
define("_MA_TADFORM_RESULT","觀看結果");

define("_MA_INPUT_FORM","設計表單");
define("_MA_SAVE","儲存");
define("_MI_TADFORM_ADMENU1","線上調查列表");
define("_MI_TADFORM_ADMENU2","新增線上調查表");
define("_MI_TADFORM_ADMENU3","資料庫架構更新");

define("_MA_TADFORM_OFSN","問卷編號");
define("_MA_TADFORM_TITLE","問卷標題");
define("_MA_TADFORM_START_DATE","開始日期");
define("_MA_TADFORM_END_DATE","結束日期");
define("_MA_TADFORM_CONTENT","問卷說明");
define("_MA_TADFORM_UID","發佈者");
define("_MA_TADFORM_POST_DATE","發佈日期");
define("_MA_TADFORM_ENABLE","啟用狀態");
define("_MA_TADFORM_EDIT_OPTION","接著編輯選項");

define("_MA_INPUT_COL_FORM","題目設定");
define("_MA_TADFORM_CSN","流水號");
define("_MA_TADFORM_COL_TITLE","問題");
define("_MA_TADFORM_COL_DESCRIPT","問題描述");
define("_MA_TADFORM_COL_KIND","呈現欄位種類");
define("_MA_TADFORM_COL_SIZE","欄位長度（或選項）");
define("_MA_TADFORM_COL_VAL","預設值");
define("_MA_TADFORM_COL_CHK","是否必填");
define("_MA_TADFORM_COL_FUNC","統計功能");
define("_MA_TADFORM_COL_SORT","排序");
define("_MA_TADFORM_COL_TEXT","文字框");
define("_MA_TADFORM_COL_RADIO","圓形單選鈕");
define("_MA_TADFORM_COL_CHECKBOX","方形複選鈕");
define("_MA_TADFORM_COL_SELECT","下拉選單");
define("_MA_TADFORM_COL_TEXTAREA","大量文字框");
define("_MA_TADFORM_COL_FCK","所見即所得文字框");

define("_MA_TADFORM_COL_NO_FUN","不用");
define("_MA_TADFORM_COL_SUM","加總");
define("_MA_TADFORM_COL_AVG","平均");
define("_MA_TADFORM_COL_COUNT","計數");

define("_MA_TADFORM_COL_END","儲存後不再新增其他題目");
define("_MA_TADFORM_COL_ACTIVE","啟用");
define("_MA_TADFORM_COL_ENABLE","關閉");
define("_MA_TADFORM_COL_WHO","填報者");
define("_MA_TADFORM_ANALYSIS","統計分析");
define("_MA_TADFORM_ANALYSIS_RESULT","分析結果");

define("_MA_TADFORM_COL_NOTE","選項請用「;」隔開。");
define("_MA_TADFORM_SIGN_GROUP","可填寫的群組");
define("_MA_TADFORM_ANONYMOUS","匿名");
define("_MA_TADFORM_SIGN_MEMS","%s 人填寫");
define("_MA_TADFORM_SIGN_DATE","填寫日期");
define("_MA_TADFORM_OPTIONS","問卷題目");
define("_MA_TADFORM_COPY_FORM","複製");
define("_MA_TADFORM_COL_NUM","題數");
define("_MA_TADFORM_ADD_COL","新增題目");

define("_MA_TADFORM_FONT1","新細明體");
define("_MA_TADFORM_LINK1","超連結");
define("_MA_TADFORM_EXCEL_TITLE","「%s」表單結果");
define("_MA_TADFORM_KIND","表單用途");
define("_MA_TADFORM_KIND0","一般調查表單");
define("_MA_TADFORM_KIND1","報名表");
define("_MA_TADFORM_KIND2","線上測驗");
define("_MA_TADFORM_KIND1_TH","報名完成？");
define("_MA_TADFORM_KIND1_OK","錄取");
define("_MA_TADFORM_UPDATE_RESULT","儲存");

//update.php
define("_MA_TADFORM_AUTOUPDATE","模組升級");
define("_MA_TADFORM_AUTOUPDATE_VER","版本");
define("_MA_TADFORM_AUTOUPDATE_DESC","作用");
define("_MA_TADFORM_AUTOUPDATE_STATUS","更新狀況");
define("_MA_TADFORM_AUTOUPDATE_GO","立即更新");
define("_MA_TADFORM_AUTOUPDATE1","在 tad_form_main 資料表新增 kind 欄位");
define("_MA_TADFORM_AUTOUPDATE2","在 tad_form_fill 資料表新增 result_col 欄位");

//mail.php
define("_MA_TADFORM_SEND","寄出");
define("_MA_TADFORM_MAIL_TITLE","信件標題");
define("_MA_TADFORM_MAIL_TITLE_VAL","「%s」通知信");
define("_MD_TADFORM_SEND_OK","發送成功！");
define("_MD_TADFORM_SEND_ERROR","發送失敗！");
?>