<?php
//$Id：modinfo.php,v 1.68 2005/11/01 16:58:36 eric_juden Exp $
define('_MI_XHELP_NAME','服務台');
define('_MI_XHELP_DESC','用來接收客戶的需求與問題，進一步提出協助與回應。');
define('_MI_XHELP_CHARSET','UTF-8');


//Template variables
define('_MI_XHELP_TEMP_ADDTICKET','addTicket.php檔案的樣板');
define('_MI_XHELP_TEMP_SEARCH','search.php檔案的樣板');
define('_MI_XHELP_TEMP_STAFF_INDEX','index.php針對工作團隊樣板');
define('_MI_XHELP_TEMP_STAFF_PROFILE','profile.php檔案的樣板');
define('_MI_XHELP_TEMP_STAFF_TICKETDETAILS','ticket.php針對工作團隊的樣板');
define('_MI_XHELP_TEMP_USER_INDEX',' index.php針對會員的樣板');
define('_MI_XHELP_TEMP_USER_TICKETDETAILS','ticket.php針對會員的樣板');
define('_MI_XHELP_TEMP_STAFF_RESPONSE','response.php檔案的樣板');
define('_MI_XHELP_TEMP_LOOKUP','lookup.php檔案的樣板');
define('_MI_XHELP_TEMP_STAFFREVIEW','檢視工作團隊的樣板');
define('_MI_XHELP_TEMP_EDITTICKET','編輯傳票的樣板');
define('_MI_XHELP_TEMP_EDITRESPONSE','編輯回覆的樣板');
define('_MI_XHELP_TEMP_ANNOUNCEMENT','發佈訊息的樣板');
define('_MI_XHELP_TEMP_STAFF_HEADER','工作團隊選單參數樣板');
define('_MI_XHELP_TEMP_USER_HEADER','會員選單參數樣板');
define('_MI_XHELP_TEMP_PRINT','列印傳票頁樣板');
define('_MI_XHELP_TEMP_STAFF_ALL','查看所有工作團隊的樣板');
define('_MI_XHELP_TEMP_STAFF_TICKET_TABLE','顯示工作團隊傳票的樣板');
define('_MI_XHELP_TEMP_SETDEPT','設置部門樣板');
define('_MI_XHELP_TEMP_SETPRIORITY','設置優先權樣板');
define('_MI_XHELP_TEMP_SETOWNER','設置擁有者樣板');
define('_MI_XHELP_TEMP_SETSTATUS','設置狀態樣板');
define('_MI_XHELP_TEMP_DELETE','批次刪除傳票樣板');
define('_MI_XHELP_TEMP_BATCHRESPONSE','批次發表回應樣板');
define('_MI_XHELP_TEMP_ANON_ADDTICKET','匿名會員增加傳票樣板');
define('_MI_XHELP_TEMP_ERROR','錯誤樣板');
define('_MI_XHELP_TEMP_EDITSEARCH','編輯已儲存搜索樣板');
define('_MI_XHELP_TEMP_USER_ALL','會員瀏覽所有頁樣板');


// Block variables
define('_MI_XHELP_BNAME1','XHELP會員傳票');
define('_MI_XHELP_BNAME1_DESC','顯示會員的傳票');
define('_MI_XHELP_BNAME2','XHELP部門傳票');
define('_MI_XHELP_BNAME2_DESC','顯示每個部門的傳票');
define('_MI_XHELP_BNAME3','XHELP近期傳票');
define('_MI_XHELP_BNAME3_DESC','顯示工作團隊近期瀏覽的傳票');
define('_MI_XHELP_BNAME4','XHELP所有操作');
define('_MI_XHELP_BNAME4_DESC','顯示工作團隊所有操作');
define('_MI_XHELP_BNAME5','XHELP會員選單');
define('_MI_XHELP_BNAME5_DESC','顯示傳票系統主要的可使用的操作');

// Config variables
define('_MI_XHELP_TITLE','服務台標題');
define('_MI_XHELP_TITLE_DSC','請指定服務台的名稱：');
define('_MI_XHELP_UPLOAD','上傳目錄');
define('_MI_XHELP_UPLOAD_DSC','會員儲存對應傳票檔案的路徑');
define('_MI_XHELP_ALLOW_UPLOAD','允許上傳');
define('_MI_XHELP_ALLOW_UPLOAD_DSC','是否允許會員附加檔案到傳票？');
define('_MI_XHELP_UPLOAD_SIZE','大小');
define('_MI_XHELP_UPLOAD_SIZE_DSC','最大字元數');
define('_MI_XHELP_UPLOAD_WIDTH','寬度');
define('_MI_XHELP_UPLOAD_WIDTH_DSC','最大寬度(畫素)');
define('_MI_XHELP_UPLOAD_HEIGHT','高度');
define('_MI_XHELP_UPLOAD_HEIGHT_DSC','最大高度(畫素)');
define('_MI_XHELP_NUM_TICKET_UPLOADS','檔案數');
define('_MI_XHELP_NUM_TICKET_UPLOADS_DSC','一次能提供最多檔案數(不包括自訂欄位)。');
define('_MI_XHELP_ANNOUNCEMENTS','發佈新聞主題');
//define('_MI_XHELP_ANNOUNCEMENTS_DSC','This is the news topic that pulls announcements for xhelp. Update the xHelp module to see newly added news categories');
define('_MI_XHELP_ANNOUNCEMENTS_DSC',"This is the news topic that pulls announcements for xhelp. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateTopics\", \"xoops_module_install_xhelp\",400, 300);'>Click here</a> to update the news categories.");
define('_MI_XHELP_ANNOUNCEMENTS_NONE','***停用訊息發佈***');
define('_MI_XHELP_ALLOW_REOPEN','重開傳票');
define('_MI_XHELP_ALLOW_REOPEN_DSC','是否允許會員重新開啟關閉的傳票？');
define('_MI_XHELP_STAFF_TC','傳票數');
define('_MI_XHELP_STAFF_TC_DSC','首頁每部分應該顯示多少條傳票？');
define('_MI_XHELP_STAFF_ACTIONS','工作團隊操作');
define('_MI_XHELP_STAFF_ACTIONS_DSC','您喜歡工作團隊操作如何顯示? Inline 是預設的, Block-Style 要求您把工作團隊操作當做區塊。');
define('_MI_XHELP_ACTION1','Inline-Style');
define('_MI_XHELP_ACTION2','Block-Style');
define('_MI_XHELP_DEFAULT_DEPT','預設部門');
define('_MI_XHELP_DEFAULT_DEPT_DSC',"這是增加傳票時候的預設部門. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateDepts\", \"xoops_module_install_xhelp\",400, 300);'>點選這裡</a> 來更新部門。");
define('_MI_XHELP_OVERDUE_TIME','時間');
define('_MI_XHELP_OVERDUE_TIME_DSC','這決定傳票多長時間過期 (小時)。');
define('_MI_XHELP_ALLOW_ANON','允許匿名提供');
define('_MI_XHELP_ALLOW_ANON_DSC','允許所有人提供傳票. 當一個匿名會員提供傳票,同時也被提示建立新會員');
define('_MI_XHELP_APPLY_VISIBILITY','指定部門');
define('_MI_XHELP_APPLY_VISIBILITY_DSC','這個限制了工作團隊可提供的部門. 如選擇,則只能提供到被指定的部門');
define('_MI_XHELP_DISPLAY_NAME','顯示名稱');
define('_MI_XHELP_DISPLAY_NAME_DSC','但會員正常登入,會員名稱將顯示在每個頁面 (如果會員名稱不存在,則顯示真實姓名)。');
define('_MI_XHELP_USERNAME','會員名稱');
define('_MI_XHELP_REALNAME','真實姓名');

// Admin Menu variables
define('_MI_XHELP_MENU_BLOCKS','管理區塊');
define('_MI_XHELP_MENU_MANAGE_DEPARTMENTS','管理部門');
define('_MI_XHELP_MENU_MANAGE_STAFF','管理工作團隊');
define('_MI_XHELP_MENU_MODIFY_EMLTPL','編輯郵件樣板');
define('_MI_XHELP_MENU_MODIFY_TICKET_FIELDS','編輯傳票欄位');
define('_MI_XHELP_MENU_GROUP_PERM','群組權限');
define('_MI_XHELP_MENU_ADD_STAFF','增加工作團隊');
define('_MI_XHELP_MENU_MIMETYPES','管理MIME');
define('_MI_XHELP_MENU_CHECK_TABLES','檢查版本');
define('_MI_XHELP_MENU_MANAGE_ROLES','管理角色');
define('_MI_XHELP_MENU_MAIL_EVENTS','管理事件');
define('_MI_XHELP_MENU_CHECK_EMAIL','檢查郵件');
define('_MI_XHELP_MENU_MANAGE_FILES','管理檔案');
define('_MI_XHELP_ADMIN_ABOUT','關於本模組');
define('_MI_XHELP_TEXT_MANAGE_STATUSES','管理狀態');
define('_MI_XHELP_TEXT_MANAGE_FIELDS','管理自訂欄位');
define('_MI_XHELP_TEXT_NOTIFICATIONS','管理通知');


//NOTIFICATION vars
define('_MI_XHELP_DEPT_NOTIFY','部門');
define('_MI_XHELP_DEPT_NOTIFYDSC','套用到每個部門的通知參數');

define('_MI_XHELP_TICKET_NOTIFY','傳票');
define('_MI_XHELP_TICKET_NOTIFYDSC','套用到目前傳票的通知參數');

define('_MI_XHELP_DEPT_NEWTICKET_NOTIFY','工作團隊：新傳票');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYCAP','當有傳票被建立，通知我');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYDSC','接受傳票被建立的通知');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYSBJ','{X_MODULE} 傳票被建立 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYTPL','dept_newticket_notify.tpl');

define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFY','工作團隊：刪除傳票');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYCAP','當有傳票被刪除，通知我');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYDSC','接受傳票被刪除的通知');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYSBJ','{X_MODULE} 傳票被刪除 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYTPL','dept_removedticket_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFY','工作團隊：編輯傳票');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYCAP','當有傳票被編輯，通知我');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYDSC','接受傳票被編輯的通知');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYSBJ','{X_MODULE} 傳票被編輯 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYTPL','dept_modifiedticket_notify.tpl');

define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFY','工作團隊：新回覆');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYCAP','當我傳票有新回覆，通知我');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYDSC','接受傳票被回覆的通知');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYSBJ','{X_MODULE} 傳票被回覆 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYTPL','dept_newresponse_notify.tpl');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFY','工作團隊：編輯回覆');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYCAP','當有傳票回覆被編輯，通知我');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYDSC','接受傳票回覆被編輯的通知');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYSBJ','{X_MODULE} 傳票回覆被編輯 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYTPL','dept_modifiedresponse_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFY','工作團隊：傳票狀態更改');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYCAP','當有傳票狀態被更改，通知我');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYDSC','接受傳票狀態被更改的通知');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYSBJ','{X_MODULE} 傳票狀態被更改 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYTPL','dept_changedstatus_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFY','工作團隊：傳票優先權更改');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYCAP','當有傳票優先權被更改，通知我');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYDSC','接受傳票優先權被更改的通知');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYSBJ','{X_MODULE} 傳票優先權被更改 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYTPL','dept_changedpriority_notify.tpl');

define('_MI_XHELP_DEPT_NEWOWNER_NOTIFY','工作團隊：新傳票擁有者');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYCAP','當傳票擁有者被更改，通知我');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYDSC','接受傳票擁有者被更改的通知');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYSBJ','{X_MODULE} 傳票擁有者被更改 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYTPL','dept_newowner_notify.tpl');


define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFY','會員：刪除傳票');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYCAP','當有傳票被刪除，通知我');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYDSC','接受傳票被刪除的通知');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYSBJ','{X_MODULE} 傳票被刪除 - id {TICKET_ID}');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYTPL','ticket_removedticket_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFY','會員：編輯傳票');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYCAP','當有傳票被編輯，通知我');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYDSC','接受傳票被編輯的通知');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYSBJ','{X_MODULE} 傳票被編輯 - id {TICKET_ID}');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYTPL','ticket_modifiedticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFY','會員：新回覆');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYCAP','當傳票被回覆，通知我');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYDSC','接受傳票被回覆的通知');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYSBJ','RE：{TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');


define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYTPL','ticket_newresponse_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFY','會員：編輯回覆');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYCAP','當傳票回覆被編輯，通知我');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYDSC','接受傳票回覆被編輯的通知');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYSBJ','{X_MODULE} 傳票回覆被編輯 - id {TICKET_ID}');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYTPL','ticket_modifiedresponse_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFY','會員：變更狀態');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYCAP','當傳票狀態被變更，通知我');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYDSC','接受傳票狀態被變更的通知');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYSBJ','{X_MODULE} 傳票狀態被變更 - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYTPL','ticket_changedstatus_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFY','會員：變更優先權');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYCAP','當傳票優先權被更改，通知我');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYDSC','接受傳票優先權被更改的通知');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYSBJ','{X_MODULE} 傳票優先權給更改 - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYTPL','ticket_changedpriority_notify.tpl');



define('_MI_XHELP_TICKET_NEWOWNER_NOTIFY','會員：新擁有者');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYCAP','當傳票擁有者被更改，通知我');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYDSC','接受傳票擁有者被更改的通知');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYSBJ','{X_MODULE} 傳票擁有者被更改 - id {TICKET_ID}');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYTPL','ticket_newowner_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_NOTIFY','會員：新傳票');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYCAP','當傳票確認後，通知我');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYDSC','接受新傳票被建立的通知');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYSBJ','RE：{TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYTPL','ticket_newticket_notify.tpl');

define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFY','工作團隊:關閉傳票');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYCAP','當傳票被關閉，通知我');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYDSC','接受傳票被關閉的通知');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYSBJ','{X_MODULE} 傳票被關閉 - id {TICKET_ID}');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYTPL','dept_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFY','會員：關閉傳票');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYCAP','當傳票關閉被確認，通知我');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYDSC','接受傳票別關閉的通知');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYSBJ','{X_MODULE} 傳票被關閉 - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYTPL','ticket_closeticket_notify.tpl');



define('_MI_XHELP_TICKET_NEWUSER_NOTIFY','會員：創建新會員');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYCAP','當新會員被創建，通知我');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYDSC','接受提示激活的新會員被創建的通知');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYSBJ','{X_MODULE} 新會員被創建');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYTPL','ticket_new_user_byemail.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFY','會員：創建新會員');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYCAP','當有新會員被創建，通知我');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYDSC','接受自動激活的新會員被創建的通知');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYSBJ','{X_MODULE} 新會員被創建');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYTPL','ticket_new_user_activation1.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFY','會員：創建新會員');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYCAP','當有新會員被創建，通知我');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYDSC','接受提示管理員激活的新會員被創建的通知');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYSBJ','{X_MODULE} 新會員被創建');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYTPL','ticket_new_user_activation2.tpl');

define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFY','會員：郵件錯誤');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYCAP','當郵件不能儲存，通知會員');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYDSC','接受郵件不能提供的通知');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYSBJ','回覆：{TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYTPL','ticket_email_error.tpl');

define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFY','工作團隊：合併傳票');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYCAP','當傳票被合併，通知我');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYDSC','接受傳票被合併的通知');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} 傳票被合併');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYTPL','dept_mergeticket_notify.tpl');


define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFY','會員：合併傳票');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYCAP','當傳票被合併，通知我');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYDSC','接受傳票被合併的通知');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} 傳票被合併');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYTPL','ticket_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFY','會員：通過郵件發新傳票');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYCAP','當確認一個郵件建立的傳票，通知我');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYDSC','接受通過郵件建立的傳票的通知');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYSBJ','回覆：{TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYTPL','ticket_newticket_byemail_notify.tpl');
// Be sure to add new mail_templates to array in admin/index.php - modifyEmlTpl()


?>