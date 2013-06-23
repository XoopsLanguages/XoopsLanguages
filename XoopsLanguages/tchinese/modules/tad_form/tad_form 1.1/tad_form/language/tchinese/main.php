<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2008-06-25
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
define("_BP_ADD","新增資料");
define("_JS_EMAIL_CHK","Email不正確，請重新填寫");
define("_JS_SIGN_CHK","請完整填寫『%s』欄位，謝謝！");
define("_JS_CHK_TOO_SHORT","「%s」長度太短，不足 %s 個字，請重新設定『%s』欄位，謝謝！");
define("_JS_CHK_NOT_EQUAL","「%s」長度不正確，不等於 %s 個字，請重新設定『%s』欄位，謝謝！");
define("_JS_CHK_TOO_LONG","「%s」長度太長，超過 %s 個字，請重新設定『%s』欄位，謝謝！");

define("_MD_TADFORM_SUBMIT_FORM","送出問卷");
define("_MD_TADFORM_TITLE","問卷標題");
define("_MD_TADFORM_START_DATE","開始日期");
define("_MD_TADFORM_END_DATE","結束日期");
define("_MD_TADFORM_EDIT_FORM","編輯「%s」問卷");
define("_MD_TADFORM_VIEW_FORM","觀看結果");

define("_MD_TADFORM_OFSN","問卷編號");
define("_MD_TADFORM_UID","填報人");
define("_MD_TADFORM_MAN_NAME","填報者姓名");
define("_MD_TADFORM_EMAIL","填報者Email");
define("_MD_TADFORM_FILL_TIME","填報時間");
define("_MD_TADFORM_NEED_SIGN","必填");
define("_MD_TADFORM_IS_NEED_SIGN","為必填");

define("_MD_TADFORM_UNABLE","「%s」沒有啟用囉！");
define("_MD_TADFORM_NOT_START","「%s」還沒開始填喔！<b>%s</b> 才開始");
define("_MD_TADFORM_OVERDUE","「%s」已於 <b>%s</b> 結束填寫囉！");
define("_MD_TADFORM_SIGN_DATE","填報日期：從 <span class='start_date'>%s</span> 至<span class='end_date'>%s</span>  止");
define("_MD_TADFORM_ONLY_MEM","您並不屬於本填報允許的群組喔！！<br>若您尚未登入者請先登入。<br>已登入者就放棄吧！");


define("_MD_TADFORM_SIGN_NOW","立即填報「%s」（目前已有 %s 人填寫）");
define("_MD_TADFORM_MAIL_CONTENT","%s 於 %s 填寫了「%s」問卷，其內容如下：<br>%s<p align='right'><a href='%s'>點選這裡可以觀看完整填寫結果</a></p>");
define("_MD_TADFORM_MAIL_TITLE","「%s」問卷填寫通知： %s (%s)");
?>