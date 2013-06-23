<?php
//  ------------------------------------------------------------------------ //
// 本模組由 kimozi 製作
// 製作日期：2009-07-14
// $Id$
// ------------------------------------------------------------------------- //

define("_TO_ADMIN_PAGE","管理介面");
//分頁物件用的語系
define("_MD_HOMEPAGE","回首頁");
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
define("_BP_SWITCH","作用選擇器");
define("_BP_ADD","新增資料");
define("_MA_SETUP_PERIOD_FORM","預設時段");
define("_MA_SAVE","儲存");
define("_MA_SUBMIT","下一步");
define("_MD_INPUT_VALID","「%s」欄位檢查");
define("_MD_INPUT_VALIDATOR","請輸入「%s」欄位");
define("_MD_INPUT_VALIDATOR_ERROR","「%s」資料不正確");
define("_MD_INPUT_VALIDATOR_CHK","最少 %s 個字，最多 %s 個字");
define("_MD_INPUT_VALIDATOR_MIN","最少 %s 個字");
define("_MD_INPUT_VALIDATOR_MAX","最多 %s 個字");
define("_MD_INPUT_VALIDATOR_EQUAL","限定 %s 個字");
define("_MD_INPUT_VALIDATOR_NEED_NORMAL","請勿空白！");
define("_MD_INPUT_VALIDATOR_NEED","範例：請以『1430』這種4位數時間格式輸入，表示下午2時30分");
define("_MD_INPUT_VALIDATOR_RANGE","範圍： %s ～ %s");
define("_MD_INPUT_VALIDATOR_RANGE_MIN","最小： %s");
define("_MD_INPUT_VALIDATOR_RANGE_MAX","最大： %s");
define("_MD_KIMOZIJACANA_SMNAME1","線上預約");
define("_MD_KIMOZIJACANA_SMNAME2","條件搜尋");
define("_MA_KIMOZIJACANA_D_PERIOD_SN","時段設定ID");
define("_MA_KIMOZIJACANA_D_PERIOD_START","時段起點");
define("_MA_KIMOZIJACANA_D_PERIOD_END","時段結束");
define("_MA_KIMOZIJACANA_D_TOTAL_NUM","限量人數");
define("_MA_KIMOZIJACANA_DATE_SN","SN");
define("_MA_KIMOZIJACANA_DATE_MARK","休園日");
define("_MA_KIMOZIJACANA_D_SWITCH","關閉作用");
define("_MA_KIMOZIJACANA_ORDER_INPUT","預訂單");
define("_MA_KIMOZIJACANA_ORDER_SN","預訂單ID");
define("_MA_KIMOZIJACANA_O_DATE","日期紀錄");
define("_MA_KIMOZIJACANA_O_BOOKING_DATE","預定日期");
define("_MA_KIMOZIJACANA_O_PERIOD","預定時段");
define("_MA_KIMOZIJACANA_O_BOOKING_NUM","預定人數");
define("_MA_KIMOZIJACANA_O_ORGANIZATION","單位名稱");
define("_MA_KIMOZIJACANA_O_CONTACT","聯絡人");
define("_MA_KIMOZIJACANA_O_TEL","電話");
define("_MA_KIMOZIJACANA_O_FAX","傳真");
define("_MA_KIMOZIJACANA_O_CELLPHONE","手機");
define("_MA_KIMOZIJACANA_O_EMAIL","Email");
define("_MA_KIMOZIJACANA_O_MARK","其他事項");
define("_MA_KIMOZIJACANA_O_OK","接受預約");
define("_MA_SEND","送出");
define("_MA_ALERT_1","您預約人數超出");
define("_MA_ALERT_2","名喔！請回上一頁重新輸入！");
define("_MA_ALERT_3","沒有人數，怎麼預約？別鬧了喔！");
define("_MA_FORM_ONSHOW","您必須同意才能預約喔！");
define("_MA_FORM_ONFOCUS","別懷疑、一定要選『同意』才行！");
define("_MA_FORM_ONCORRECT","感謝您的諒解！");
define("_MA_FORM_ONERROR","拜託您了、務必『同意』我們的但書才行喔，敬請體諒！");
define("_MA_FORM_AGREE","我同意  貴單位保有接受本預約單與否的權力。");
define("_MA_ALERT_NOOPEN","不開放");
define("_MA_ALERT_FULL","額滿");
define("_MA_TD_STAR","★");
define("_MA_ATTION_1","　請點選合意日期，開始進行預約流程。");
define("_MA_ATTION_OK","　可預約人數至少還有一半以上的額度。");
define("_MA_ATTION_HALF","　可預約人數已經少於一半的額度了。");
define("_MA_ATTION_FULL","　已經額滿或不開放預約。");
define("_MA_PERIOD_DATE","預約日期");
define("_MA_PERIOD_REMAIN_MUN","餘額");
define("_MA_PERIOD_BOOKING_NUM","預約人數");
define("_MA_PERIOD_SEND","送出預約");
define("_MA_PERIOD_NO","無");
define("_MA_PERIOD_ATTION_1","★ 預約人數無法多於可預約人數，否則將造成預約失敗，請留意。");
define("_MA_PERIOD_ATTION_2","★ 僅允許單時段預約。");
define("_MA_PERIOD_TIME","選擇時段");
define("_MA_SWITCH_OK","您的預約已經傳送了，謝謝您的蒞臨！！");
define("_MA_PERIOD_SETUP_ATTION","請務必留意時段的設定，程式中並無防呆功能，所有設定將被忠實執行！");
define("_FUNCTION_MESSAGE_SORRY","很抱歉、您的預約失敗！！<br>有可能同時間，有人手較更快喔！！<br>系統將會自動回到首頁！");
define("_MA_MARK_DATE_ADMIN_ATTION","很抱歉，您沒有管理權，請先登入！");
//mb
define("_MA_DATA_PERIOD","可預約日期");  
define("_MA_ACTIVE","作用中"); 
define("_MA_CLOSE","關閉"); 
?>