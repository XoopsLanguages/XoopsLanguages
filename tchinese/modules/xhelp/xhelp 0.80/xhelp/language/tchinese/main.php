<?php
//$Id：main.php,v 1.114 2005/10/19 18:56:37 eric_juden Exp $

//index.php
define('XHELP_QRY_STAFF_HIGHPRIORITY','工作團隊最高優先權');
define('XHELP_QRY_STAFF_NEW','新工作團隊');
define('XHELP_QRY_STAFF_MINE','工作團隊');
define('XHELP_QRY_STAFF_ALL','所有工作團隊');


define('_XHELP_CATEGORY1','分配從屬關係');
define('_XHELP_CATEGORY2','刪除回覆');
define('_XHELP_CATEGORY3','刪除傳票');
define('_XHELP_CATEGORY4','登記會員 傳票');
define('_XHELP_CATEGORY5','編輯回覆');
define('_XHELP_CATEGORY6','編輯傳票訊息');

define('_XHELP_SEC_TICKET_ADD', 0);
define('_XHELP_SEC_TICKET_EDIT', 1);
define('_XHELP_SEC_TICKET_DELETE', 2);
define('_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_XHELP_SEC_TICKET_STATUS', 4);
define('_XHELP_SEC_TICKET_PRIORITY', 5);
define('_XHELP_SEC_TICKET_LOGUSER', 6);
define('_XHELP_SEC_RESPONSE_ADD', 7);
define('_XHELP_SEC_RESPONSE_EDIT', 8);
define('_XHELP_SEC_TICKET_MERGE', 9);
define('_XHELP_SEC_FILE_DELETE', 10);

define('_XHELP_SEC_TEXT_TICKET_ADD','新增傳票');
define('_XHELP_SEC_TEXT_TICKET_EDIT','編輯傳票');
define('_XHELP_SEC_TEXT_TICKET_DELETE','刪除傳票');
define('_XHELP_SEC_TEXT_TICKET_OWNERSHIP','更改傳票擁有者');
define('_XHELP_SEC_TEXT_TICKET_STATUS','更改傳票狀態');
define('_XHELP_SEC_TEXT_TICKET_PRIORITY','更改傳票優先權');
define('_XHELP_SEC_TEXT_TICKET_LOGUSER','登記會員傳票');
define('_XHELP_SEC_TEXT_RESPONSE_ADD','發表回應');
define('_XHELP_SEC_TEXT_RESPONSE_EDIT','編輯回覆');
define('_XHELP_SEC_TEXT_TICKET_MERGE','合併傳票');
define('_XHELP_SEC_TEXT_FILE_DELETE','刪除附加檔案');
define('_XHELP_JSC_TEXT_DELETE','您確認想刪除這個傳票？');



define('_XHELP_MESSAGE_ADD_DEPT','部門增加成功');
define('_XHELP_MESSAGE_ADD_DEPT_ERROR','錯誤：部門增加失敗');
define('_XHELP_MESSAGE_UPDATE_DEPT','部門更新成功');
define('_XHELP_MESSAGE_UPDATE_DEPT_ERROR','錯誤：部門更新失敗');
define('_XHELP_MESSAGE_DEPT_DELETE','部門刪除成功');
define('_XHELP_MESSAGE_DEPT_DELETE_ERROR','錯誤：部門刪除失敗');
define('_XHELP_MESSAGE_ADDSTAFF_ERROR','錯誤：工作團隊增加失敗');
define('_XHELP_MESSAGE_ADDSTAFF','工作團隊增加成功');
define('_XHELP_MESSAGE_STAFF_DELETE','工作團隊刪除成功');
define('_XHELP_MESSAGE_STAFF_DELETE_ERROR','工作團隊刪除失敗');
define('_XHELP_MESSAGE_EDITSTAFF','工作團隊配置訊息更新成功');
define('_XHELP_MESSAGE_EDITSTAFF_ERROR','錯誤：工作團隊訊息更新失敗');
define('_XHELP_MESSAGE_EDITSTAFF_NOCLEAR_ERROR','錯誤：舊部門移除失敗');
define('_XHELP_MESSAGE_DEPT_EXISTS','部門已經存在');
define('_XHELP_MESSAGE_ADDTICKET','傳票登記成功');
define('_XHELP_MESSAGE_ADDTICKET_ERROR','錯誤：傳票登記失敗');
define('_XHELP_MESSAGE_LOGMESSAGE_ERROR','錯誤：操作沒有登記到數據庫');
define('_XHELP_MESSAGE_UPDATE_PRIORITY','傳票優先權更新成功');
define('_XHELP_MESSAGE_UPDATE_PRIORITY_ERROR','錯誤：傳票優先權更新失敗');
define('_XHELP_MESSAGE_UPDATE_STATUS','傳票狀態更新成功');
define('_XHELP_MESSAGE_UPDATE_STATUS_ERROR','錯誤：傳票更新失敗');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT','傳票部門更新成功');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT_ERROR','錯誤：傳票部門更新失敗');
define('_XHELP_MESSAGE_CLAIM_OWNER','您已經被聲明為此傳票的擁有者');
define('_XHELP_MESSAGE_CLAIM_OWNER_ERROR','錯誤：傳票擁有者未被聲明');
define('_XHELP_MESSAGE_ASSIGN_OWNER','傳票擁有者分配成功');
define('_XHELP_MESSAGE_ASSIGN_OWNER_ERROR','錯誤：傳票擁有者未被分配');
define('_XHELP_MESSAGE_UPDATE_OWNER','您已經成功更新此傳票的擁有者');
define('_XHELP_MESSAGE_ADDFILE','檔案上傳成功');
define('_XHELP_MESSAGE_DELETE_TICKET','傳票刪除成功');
define('_XHELP_MESSAGE_DELETE_TICKET_ERROR','錯誤：傳票刪除失敗');
define('_XHELP_MESSAGE_ADD_SIGNATURE','簽名成功');
define('_XHELP_MESSAGE_ADD_SIGNATURE_ERROR','錯誤：簽名更新失敗');
define('_XHELP_MESSAGE_ADDFILE_ERROR','錯誤：檔案上傳失敗');
define('_XHELP_MESSAGE_ADDRESPONSE','發表回應成功');
define('_XHELP_MESSAGE_ADDRESPONSE_ERROR','錯誤：發表回應失敗');
define('_XHELP_MESSAGE_UPDATE_CALLS_CLOSED_ERROR','錯誤：電話聯繫關閉欄位沒有更新');
define('_XHELP_MESSAGE_ALREADY_OWNER','%s 已經是此傳票擁有者');
define('_XHELP_MESSAGE_ALREADY_STATUS','傳票已經設置為此狀態');
define('_XHELP_MESSAGE_RESPONSE_TPL','預定義回覆更新成功');
define('_XHELP_MESSAGE_RESPONSE_TPL_ERROR','錯誤：回覆更新失敗');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL','預定義回覆刪除成功');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL_ERROR','錯誤：預定義回覆刪除失敗');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW','評論已經新增');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW_ERROR','錯誤：評論無法新增');
define('_XHELP_MESSAGE_UPDATE_STAFF_ERROR','錯誤：工作團隊訊息更新失敗');
define('_XHELP_MESSAGE_UPDATE_SIG_ERROR','錯誤：簽名更新失敗');
define('_XHELP_MESSAGE_UPDATE_SIG','簽名更新成功');
define('_XHELP_MESSAGE_EDITTICKET','傳票更新成功');
define('_XHELP_MESSAGE_EDITTICKET_ERROR','錯誤：傳票更新失敗');
define('_XHELP_MESSAGE_USER_MOREINFO','傳票更新成功。');
define('_XHELP_MESSAGE_USER_MOREINFO_ERROR','錯誤：訊息更新失敗');
define('_XHELP_MESSAGE_USER_NO_INFO','錯誤：您沒有提供任何訊息');
define('_XHELP_MESSAGE_EDITRESPONSE','回覆更新成功');
define('_XHELP_MESSAGE_EDITRESPONSE_ERROR','錯誤：回覆更新失敗');
define('_XHELP_MESSAGE_NOTIFY_UPDATE','通知更新成功');
define('_XHELP_MESSAGE_NOTIFY_UPDATE_ERROR','通知更新失敗');
define('_XHELP_MESSAGE_NO_NOTIFICATIONS','會員沒有通知');
define('_XHELP_MESSAGE_NO_DEPTS','錯誤：沒有建立部門,請聯繫管理員');
define('_XHELP_MESSAGE_NO_STAFF','錯誤：沒有建立工作團隊,請聯繫管理員');
define('_XHELP_MESSAGE_TICKET_REOPEN','傳票重新開啟成功');
define('_XHELP_MESSAGE_TICKET_REOPEN_ERROR','錯誤：傳票重新開啟失敗');
define('_XHELP_MESSAGE_TICKET_CLOSE','傳票關閉成功');
define('_XHELP_MESSAGE_TICKET_CLOSE_ERROR','傳票關閉失敗');
define('_XHELP_MESSAGE_NOT_USER','錯誤：您不能改變此傳票');
define('_XHELP_MESSAGE_NO_TICKETS','錯誤：沒有選擇傳票');
define('_XHELP_MESSAGE_NOOWNER','沒有擁有者');
define('_XHELP_MESSAGE_UNKNOWN','未知');
define('_XHELP_MESSAGE_WRONG_MIMETYPE','錯誤：檔案類型不允許.重新提供');
define('_XHELP_MESSAGE_NO_UID','錯誤：沒有指定UID');
define('_XHELP_MESSAGE_NO_PRIORITY','錯誤：沒有指定優先權');
define('_XHELP_MESSAGE_FILE_ERROR','錯誤：不能儲存上傳檔案原因:<br />%s');
define('_XHELP_MESSAGE_UPDATE_EMAIL_ERROR','錯誤：郵件更新失敗');
define('_XHELP_MESSAGE_TICKET_DELETE_CNFRM','您確認刪除這些傳票？');
define('_XHELP_MESSAGE_DELETE_TICKETS','傳票刪除成功');
define('_XHELP_MESSAGE_DELETE_TICKETS_ERROR','錯誤：傳票刪除失敗');
define('_XHELP_MESSAGE_VALIDATE_ERROR','您的傳票有錯,改正後再提供');
define('_XHELP_MESSAGE_UNAME_TAKEN','已經使用');
define('_XHELP_MESSAGE_INVALID',' 是無效的');
define('_XHELP_MESSAGE_REQUIRED',' 是唯一的');
define('_XHELP_MESSAGE_LONG',' 是太長。');
define('_XHELP_MESSAGE_SHORT','是太短。');
define('_XHELP_MESSAGE_NOT_ENTERED',' 未輸入。');
define('_XHELP_MESSAGE_NOT_NUMERIC',' 不是數字。');
define('_XHELP_MESSAGE_RESERVED',' 被預留了');
define('_XHELP_MESSAGE_NO_SPACES',' 不能為空');
define('_XHELP_MESSAGE_NOT_SAME',' 不能相同');
define('_XHELP_MESSAGE_NOT_SUPPLIED','不能支持');
define('_XHELP_MESSAGE_CREATE_USER_ERROR','會員未建立');
define('_XHELP_MESSAGE_NO_REGISTER','請先登入在提供傳票');
define('_XHELP_MESSAGE_NEW_USER_ERR','錯誤：您帳號還沒有建立');
define('_XHELP_MESSAGE_EMAIL_USED','錯誤：郵件已經使用');
define('_XHELP_MESSAGE_DELETE_FILE_ERR','錯誤：檔案不能刪除');
define('_XHELP_MESSAGE_DELETE_SEARCH_ERR','錯誤：搜索不能刪除');

define('_XHELP_MESSAGE_UPLOAD_ALLOWED_ERR','錯誤：模組上傳功能已關閉');
define('_XHELP_MESSAGE_UPLOAD_ERR','來自 %s 的檔案 %s 不能儲存是因為 %s。');
define('_XHELP_MESSAGE_NO_ADD_TICKET','您沒有權限登記傳票。');
define('_XHELP_MESSAGE_NO_DELETE_TICKET','您沒有權限刪除傳票');
define('_XHELP_MESSAGE_NO_EDIT_TICKET','您沒有權限編輯傳票');
define('_XHELP_MESSAGE_NO_CHANGE_OWNER','您沒有權限更改傳票擁有者');
define('_XHELP_MESSAGE_NO_CHANGE_PRIORITY','您沒有權限更新優先權');
define('_XHELP_MESSAGE_NO_CHANGE_STATUS','您沒有權限更新狀態');
define('_XHELP_MESSAGE_NO_ADD_RESPONSE','您沒有權限發表回應');
define('_XHELP_MESSAGE_NO_EDIT_RESPONSE','您沒有權限編輯回覆');
define('_XHELP_MESSAGE_NO_MERGE','您沒有權限合併傳票');
define('_XHELP_MESSAGE_NO_TICKET2','錯誤：您沒有指定合併的傳票');
define('_XHELP_MESSAGE_ADDED_EMAIL','郵件增加成功');
define('_XHELP_MESSAGE_ADDED_EMAIL_ERROR','錯誤：郵件增加失敗');
define('_XHELP_MESSAGE_NO_EMAIL','錯誤：沒有指定郵件');
define('_XHELP_MESSAGE_ADD_EMAIL','郵件通知已經更新');
define('_XHELP_MESSAGE_ADD_EMAIL_ERROR','錯誤：郵件通知更新失敗');
define('_XHELP_MESSAGE_NO_MERGE_TICKET','You do not have permission to suppress an email。');
define('_XHELP_MESSAGE_NO_FILE_DELETE','您沒有權限刪除檔案');
define('_XHELP_MESSAGE_NO_CUSTFLD_ADDED','錯誤：自訂欄位值不能儲存');

define('_XHELP_ERROR_INV_TICKET','錯誤：指定的傳票無效,檢查後重試!');
define('_XHELP_ERROR_INV_RESPONSE','錯誤：指定的回覆無效,檢查後再試!');


define('_XHELP_ERROR_NODEPTPERM','您不能提供回覆,因為您不是這個傳票的部門工作團隊');
define('_XHELP_ERROR_INV_STAFF','錯誤：會員不是工作團隊');
define('_XHELP_ERROR_INV_TEMPLATE','錯誤：樣板名和內容不是為空');
define('_XHELP_ERROR_INV_USER','錯誤：您沒有權限去瀏覽傳票');

define('_XHELP_TITLE_ADDTICKET','登記傳票');
define('_XHELP_TITLE_ADDRESPONSE','發表回應');
define('_XHELP_TITLE_EDITTICKET','編輯傳票訊息');
define('_XHELP_TITLE_EDITRESPONSE','編輯回覆');
define('_XHELP_TITLE_SEARCH','搜索');

define('_XHELP_TEXT_SIZE','大小');
define('_XHELP_TEXT_REALNAME','真實名');
define('_XHELP_TEXT_ID','序號');
define('_XHELP_TEXT_NAME','會員名稱');
define('_XHELP_TEXT_USER','使用者');
define('_XHELP_TEXT_USERID','使用者ID');
define('_XHELP_TEXT_LOOKUP','查找');
define('_XHELP_TEXT_LOOKUP_USER','查找會員');
define('_XHELP_TEXT_EMAIL','郵件');
define('_XHELP_TEXT_ASSIGNTO','分配');
define('_XHELP_TEXT_PRIORITY','優先權');
define('_XHELP_TEXT_STATUS','狀態');
define('_XHELP_TEXT_SUBJECT','標題');
define('_XHELP_TEXT_DEPARTMENT','部門');
define('_XHELP_TEXT_OWNER','擁有者');
define('_XHELP_TEXT_CLOSEDBY','關閉人');
define('_XHELP_TEXT_NOTAPPLY','N/A');
define('_XHELP_TEXT_TIMESPENT','時間');
define('_XHELP_TEXT_DESCRIPTION','描述');
define('_XHELP_TEXT_ADDFILE','增加檔案');
define('_XHELP_TEXT_FILE','檔案');
define('_XHELP_TEXT_RESPONSE','回覆');
define('_XHELP_TEXT_RESPONSES','回覆');
define('_XHELP_TEXT_CLAIMOWNER','聲明擁有者');
define('_XHELP_TEXT_CLAIM_OWNER','聲明擁有者');
define('_XHELP_TEXT_TICKETDETAILS','傳票#%u 詳細');
define('_XHELP_TEXT_MINUTES','分鐘');
define('_XHELP_TEXT_SEARCH','搜索內容');
define('_XHELP_TEXT_SEARCHBY','搜索方式');
define('_XHELP_SEARCH_DESC','描述');
define('_XHELP_SEARCH_SUBJECT','標題');
define('_XHELP_TEXT_NUMRESULTS','每頁的結果數');
define('_XHELP_TEXT_RESULT1','5');
define('_XHELP_TEXT_RESULT2','10');
define('_XHELP_TEXT_RESULT3','25');
define('_XHELP_TEXT_RESULT4','50');
define('_XHELP_TEXT_SEARCH_RESULTS','搜索結果');
define('_XHELP_TEXT_PREDEFINED_RESPONSES','定義常用回覆：');
define('_XHELP_TEXT_PREDEFINED0','-- 發表回應 --');
define('_XHELP_TEXT_NO_USERS','沒有發現會員');
define('_XHELP_TEXT_SEARCH_AGAIN','重新搜尋');
define('_XHELP_TEXT_LOGGED_BY','登記人');
define('_XHELP_TEXT_LOG_TIME','登記時間');
define('_XHELP_TEXT_OWNERSHIP_DETAILS','擁有者詳細訊息');
define('_XHELP_TEXT_ACTIVITY_LOG','操作日誌');
define('_XHELP_TEXT_HELPDESK_TICKET','服務台傳票');
define('_XHELP_TEXT_YES','是');
define('_XHELP_TEXT_NO','否');
define('_XHELP_TEXT_ALL_TICKETS','所有傳票');
define('_XHELP_TEXT_HIGH_PRIORITY','高優先權但未分配的傳票');
define('_XHELP_TEXT_NEW_TICKETS','新傳票');
define('_XHELP_TEXT_MY_TICKETS','分配的傳票');
define('_XHELP_TEXT_SUBMITTED_TICKETS','我的傳票');
define('_XHELP_TEXT_ANNOUNCEMENTS','聲明');
define('_XHELP_TEXT_MY_PERFORMANCE','表現');
define('_XHELP_TEXT_RESPONSE_TIME','平均回覆時間');
define('_XHELP_TEXT_RATING','Rating');
define('_XHELP_TEXT_NUMREVIEWS','評論數');
define('_XHELP_TEXT_NUM_TICKETS_CLOSED','被關閉傳票數');
define('_XHELP_TEXT_TEMPLATE_NAME','樣板名');
define('_XHELP_TEXT_MESSAGE','訊息');
define('_XHELP_TEXT_ACTIONS','操作');
define('_XHELP_TEXT_ACTIONS2','操作');
define('_XHELP_TEXT_MY_NOTIFICATIONS','我的通知');
define('_XHELP_TEXT_SELECT_ALL','選擇所有');
define('_XHELP_TEXT_USER_IP','會員IP');
define('_XHELP_TEXT_OWNERSHIP','擁有者');
define('_XHELP_TEXT_ASSIGN_OWNER','分配擁有者');
define('_XHELP_TEXT_TICKET','傳票');
define('_XHELP_TEXT_USER_RATING','會員評分');
define('_XHELP_TEXT_EDIT_RESPONSE','編輯回覆');
define('_XHELP_TEXT_FILE_ADDED','增加的檔案：');
define('_XHELP_TEXT_ACTION','操作：');
define('_XHELP_TEXT_LAST_TICKETS','最後提供的傳票');
define('_XHELP_TEXT_RATE_STAFF','為工作團隊的回應評分');
define('_XHELP_TEXT_COMMENTS','評論：');
define('_XHELP_TEXT_MY_OPEN_TICKETS','我的傳票');
define('_XHELP_TEXT_RATE_RESPONSE','評分這個回應？');
define('_XHELP_TEXT_RESPONSE_RATING','回應評分');
define('_XHELP_TEXT_REOPEN_TICKET','重新開啟傳票？');
define('_XHELP_TEXT_MORE_INFO','要求更多訊息？');
define('_XHELP_TEXT_REOPEN_REASON','重新開啟的理由（選擇性填入）');
define('_XHELP_TEXT_MORE_INFO2','需要為傳票增加訊息嗎? 在這裡新增!');
define('_XHELP_TEXT_NO_DEPT','沒有部門');
define('_XHELP_TEXT_NOT_EMAIL','電子信箱');
define('_XHELP_TEXT_LAST_REVIEWS','最新團隊評論');
define('_XHELP_TEXT_SORT_TICKETS','透過這個欄位排序');
define('_XHELP_TEXT_ELAPSED','已過時間：');
define('_XHELP_TEXT_FILTERTICKETS','搜索傳票');
define('_XHELP_TEXT_LIMIT','每頁登記數');
define('_XHELP_TEXT_SUBMITTEDBY','提供人');
define('_XHELP_TEXT_NO_INCLUDE','任何');
define('_XHELP_TEXT_PRIVATE_RESPONSE','私人回覆');
define('_XHELP_TEXT_PRIVATE','私人');
define('_XHELP_TEXT_CLOSE_TICKET','關閉傳票？');
define('_XHELP_TEXT_ADD_SIGNATURE','增加簽名到回覆？');
define('_XHELP_TEXT_LASTUPDATE','最後更新');
define('_XHELP_TEXT_BATCH_ACTIONS','批次操作：');
define('_XHELP_TEXT_BATCH_DEPARTMENT','更改部門');
define('_XHELP_TEXT_BATCH_PRIORITY','更改優先權');
define('_XHELP_TEXT_BATCH_STATUS','更改狀態');
define('_XHELP_TEXT_BATCH_DELETE','刪除傳票');
define('_XHELP_TEXT_BATCH_RESPONSE','回覆');
define('_XHELP_TEXT_BATCH_OWNERSHIP','取得/分配 擁有者');
define('_XHELP_TEXT_UPDATE_COMP','更新完成!');
define('_XHELP_TEXT_TOPICS_ADDED','增加的傳票');
define('_XHELP_TEXT_DEPTS_ADDED','增加的部門');
define('_XHELP_TEXT_CLOSE_WINDOW','關閉窗口');
define('_XHELP_TEXT_USER_LOOKUP','查找會員');
define('_XHELP_TEXT_EVENT','事件');
define('_XHELP_TEXT_AVAIL_FILETYPES','有效的檔案類型');
define('_XHELP_USER_REGISTER','會員註冊');

define('_XHELP_TEXT_SETDEPT','選擇部門');
define('_XHELP_TEXT_SETPRIORITY','設置傳票優先權');
define('_XHELP_TEXT_SETOWNER','選擇擁有者');
define('_XHELP_TEXT_SETSTATUS','選擇優先權');
define('_XHELP_TEXT_MERGE_TICKET','合併傳票');
define('_XHELP_TEXT_MERGE_TITLE','輸入您想去合併的傳票ID。');
define('_XHELP_TEXT_EMAIL_NOTIFICATION','郵件通知');
define('_XHELP_TEXT_EMAIL_NOTIFICATION_TITLE','增加用於郵件通知的地址');
define('_XHELP_TEXT_RECEIVE_NOTIFICATIONS','收到的通知');
define('_XHELP_TEXT_EMAIL_SUPPRESS','Emails are suppressed. Click to send email notifications。');
define('_XHELP_TEXT_EMAIL_NOT_SUPPRESS','郵件正在發送，點選取消。');
define('_XHELP_TEXT_TICKET_NOTIFICATIONS','傳票通知');
define('_XHELP_TEXT_STATE','狀態描述');
define('_XHELP_TEXT_BY_STATUS','通過狀況');
define('_XHELP_TEXT_BY_STATE','通過狀態');
define('_XHELP_TEXT_SEARCH_OR','-- 或者 --');
define('_XHELP_TEXT_VIEW1','基本查看');
define('_XHELP_TEXT_VIEW2','高級查看');
define('_XHELP_TEXT_SAVE_SEARCH','儲存搜索？');
define('_XHELP_TEXT_SEARCH_NAME','搜索名');
define('_XHELP_TEXT_SAVED_SEARCHES','預儲存的搜索');
define('_XHELP_TEXT_SWITCH_TO','交換到 ');
define('_XHELP_TEXT_ADDITIONAL_INFO','額外的訊息');

define('_XHELP_ROLE_NAME1','管理');
define('_XHELP_ROLE_NAME2','編輯');
define('_XHELP_ROLE_NAME3','瀏覽');
define('_XHELP_ROLE_DSC1','可以做任何事');
define('_XHELP_ROLE_DSC2','可以登記傳票和回覆,改變狀態和優先權');
define('_XHELP_ROLE_DSC3','沒有更改權限');
define('_XHELP_ROLE_VAL1', 2047);
define('_XHELP_ROLE_VAL2', 241);
define('_XHELP_ROLE_VAL3', 0);



// Ticket.php - Actions
define('_XHELP_TEXT_SELECTED','選擇操作');
define('_XHELP_TEXT_ADD_RESPONSE','發表回應');
define('_XHELP_TEXT_EDIT_TICKET','編輯傳票');
define('_XHELP_TEXT_DELETE_TICKET','刪除傳票');
define('_XHELP_TEXT_PRINT_TICKET','列印傳票');
define('_XHELP_TEXT_UPDATE_PRIORITY','優先權');
define('_XHELP_TEXT_UPDATE_STATUS','更新狀態');

define('_XHELP_PIC_ALT_USER_AVATAR','會員頭像');

// Index.php - Auto Refresh Page vars
define('_XHELP_TEXT_AUTO_REFRESH0','不自動更新');
define('_XHELP_TEXT_AUTO_REFRESH1','每1分鐘自動更新');
define('_XHELP_TEXT_AUTO_REFRESH2','每5分鐘自動更新');
define('_XHELP_TEXT_AUTO_REFRESH3','每10分鐘自動更新');
define('_XHELP_TEXT_AUTO_REFRESH4','每30分鐘自動更新');
define('_XHELP_AUTO_REFRESH0', 0);          // Change these to
define('_XHELP_AUTO_REFRESH1', 60);         // adjust the values 
define('_XHELP_AUTO_REFRESH2', 300);        // in the select box
define('_XHELP_AUTO_REFRESH3', 600);
define('_XHELP_AUTO_REFRESH4', 1800);

define('_XHELP_MENU_MAIN','傳票摘要');
define('_XHELP_MENU_LOG_TICKET','登記傳票');
define('_XHELP_MENU_MY_PROFILE','我的配置');
define('_XHELP_MENU_ALL_TICKETS','瀏覽傳票');
define('_XHELP_MENU_SEARCH','搜索傳票');

define('_XHELP_SEARCH_EMAIL','郵件');
define('_XHELP_SEARCH_USERNAME','會員名稱');
define('_XHELP_SEARCH_UID','會員ID');

define('_XHELP_BUTTON_ADDRESPONSE','發表回應');
define('_XHELP_BUTTON_ADDTICKET','登記傳票');
define('_XHELP_BUTTON_EDITTICKET','編輯傳票');
define('_XHELP_BUTTON_RESET','重置');
define('_XHELP_BUTTON_EDITRESPONSE','更新回覆');
define('_XHELP_BUTTON_SEARCH','搜索');
define('_XHELP_BUTTON_LOG_USER','選擇會員');
define('_XHELP_BUTTON_FIND_USER','查找會員');
define('_XHELP_BUTTON_SUBMIT','提供');
define('_XHELP_BUTTON_DELETE','刪除');
define('_XHELP_BUTTON_UPDATE','更新');
define('_XHELP_BUTTON_UPDATE_PRIORITY','更新優先權');
define('_XHELP_BUTTON_UPDATE_STATUS','更新狀態');
define('_XHELP_BUTTON_ADD_INFO','增加訊息');
define('_XHELP_BUTTON_SET','設置');
define('_XHELP_BUTTON_ADD_EMAIL','增加郵件');
define('_XHELP_BUTTON_RUN','運行');

define('_XHELP_PRIORITY1', 1);
define('_XHELP_PRIORITY2', 2);
define('_XHELP_PRIORITY3', 3);
define('_XHELP_PRIORITY4', 4);
define('_XHELP_PRIORITY5', 5);

define('_XHELP_TEXT_PRIORITY1','高');
define('_XHELP_TEXT_PRIORITY2','中高');
define('_XHELP_TEXT_PRIORITY3','中');
define('_XHELP_TEXT_PRIORITY4','中低');
define('_XHELP_TEXT_PRIORITY5','低');

define('_XHELP_STATUS0','開啟');
define('_XHELP_STATUS1','暫停');
define('_XHELP_STATUS2','關閉');

define('_XHELP_STATE1','未解決');
define('_XHELP_STATE2','已解決');
define('_XHELP_NUM_STATE1', 1);
define('_XHELP_NUM_STATE2', 2);

define('_XHELP_RATING0','No rating');
define('_XHELP_RATING1','Poor');
define('_XHELP_RATING2','Below Average');
define('_XHELP_RATING3','Average');
define('_XHELP_RATING4','Above Average');
define('_XHELP_RATING5','Excellent');

// Log Messages
define('_XHELP_LOG_ADDTICKET','傳票已登記');
define('_XHELP_LOG_ADDTICKET_FORUSER','傳票被%s登記為%s');
define('_XHELP_LOG_EDITTICKET','傳票編輯的訊息');
define('_XHELP_LOG_UPDATE_PRIORITY','優先權由:%u修改為:%u');
define('_XHELP_LOG_UPDATE_STATUS','狀態由%s修改為%s');
define('_XHELP_LOG_CLAIM_OWNERSHIP','聲明的擁有者');
define('_XHELP_LOG_ASSIGN_OWNERSHIP','擁有者被分配給 %s');
define('_XHELP_LOG_ADDRESPONSE','增加的回覆');
define('_XHELP_LOG_USER_MOREINFO','增加更多訊息');
define('_XHELP_LOG_EDIT_RESPONSE','回覆# %s被編輯');
define('_XHELP_LOG_REOPEN_TICKET','重新開啟的傳票');
define('_XHELP_LOG_CLOSE_TICKET','關閉的傳票');
define('_XHELP_LOG_ADDRATING','Rated Response%u');
define('_XHELP_LOG_SETDEPT','被分配到%s部門');
define('_XHELP_LOG_MERGETICKETS','合併傳票%s到%s');
define('_XHELP_LOG_DELETEFILE','檔案%s被刪除');

// Error checking for no records in DB
define('_XHELP_NO_TICKETS_ERROR','沒有發現傳票');
define('_XHELP_NO_RESPONSES_ERROR','沒有發現回覆');
define('_XHELP_NO_MAILBOX_ERROR','指定的郵箱無效');
define('_XHELP_NO_FILES_ERROR','沒有發現檔案');

define('_XHELP_SIG_SPACER','<br /><br />-------------------------------<br />');
define('_XHELP_COMMMENTS','評論？');
define("_XHELP_ANNOUNCE_READMORE","細節...");
define("_XHELP_ANNOUNCE_ONECOMMENT","1 評論");
define("_XHELP_ANNOUNCE_NUMCOMMENTS","%s評論");
define("_XHELP_TICKET_MD5SIGNATURE","支持關鍵詞");


define('_XHELP_NO_OWNER','沒有擁有者');
define('_XHELP_RESPONSE_EDIT','回覆%s被%s修改');

define('_XHELP_TIME_SECS','秒');
define('_XHELP_TIME_MINS','分');
define('_XHELP_TIME_HOURS','小時');
define('_XHELP_TIME_DAYS','日');
define('_XHELP_TIME_WEEKS','周');
define('_XHELP_TIME_YEARS','年');

define('_XHELP_TIME_SEC','秒');
define('_XHELP_TIME_MIN','分');
define('_XHELP_TIME_HOUR','小時');
define('_XHELP_TIME_DAY','日');
define('_XHELP_TIME_WEEK','周');
define('_XHELP_TIME_YEAR','年');

define('_XHELP_MAILEVENT_CLASS0', 0);     // Connection message
define('_XHELP_MAILEVENT_CLASS1', 1);     // Parse message
define('_XHELP_MAILEVENT_CLASS2', 2);     // Storage message
define('_XHELP_MAILEVENT_CLASS3', 3);     // General message

define('_XHELP_MAILEVENT_DESC0','不能連接到伺服器。');
define('_XHELP_MAILEVENT_DESC1','不能分析消息。');
define('_XHELP_MAILEVENT_DESC2','不能儲存訊息。');
define('_XHELP_MAILEVENT_DESC3','');
define('_XHELP_MBOX_ERR_LOGIN','連接到郵件伺服器失敗：無效的會員或密碼');
define('_XHELP_MBOX_INV_BOXTYPE','指定郵箱類型不支持');

define('_XHELP_MAIL_CLASS0','連接');
define('_XHELP_MAIL_CLASS1','分析');
define('_XHELP_MAIL_CLASS2','儲存');
define('_XHELP_MAIL_CLASS3','一般');

define('_XHELP_GROUP_PERM_DEPT','xhelp_dept');
define('_XHELP_MISMATCH_EMAIL','%s has been notified that their message was not stored. Support key matched, but message should have been sent from %s instead。');
define('_XHELP_MESSAGE_MERGE','合併成功。');
define('_XHELP_MESSAGE_MERGE_ERROR','錯誤：合併失敗。');
define('_XHELP_RESPONSE_NO_TICKET','沒有發現回覆的傳票');
define('_XHELP_MESSAGE_NO_ANON','訊息被 %s 阻擋, 遊客不能提供傳票');
define('_XHELP_MESSAGE_EMAIL_DEPT_MBOX','訊息被%s阻擋, 發信人是部門郵箱');

define('_XHELP_SIZE_BYTES','Bytes');
define('_XHELP_SIZE_KB','KB');
define('_XHELP_SIZE_MB','MB');
define('_XHELP_SIZE_GB','GB');
define('_XHELP_SIZE_TB','TB');

define('_XHELP_TEXT_USER_NOT_ACTIVATED','會員沒有完成激活。');

define('_XHELP_TEXT_ADMIN_DISABLED','<em>[被管理員禁止]</em>');

define('_XHELP_TEXT_CURRENT_NOTIFICATION','目前通知方式');
define('_XHELP_NOTIFY_METHOD1','私人訊息');
define('_XHELP_NOTIFY_METHOD2','郵件');

define('_XHELP_TEXT_TICKET_LISTS','傳票列表');
define('_XHELP_TEXT_LIST_NAME','列表名');
define('_XHELP_TEXT_CREATE_NEW_LIST','建立新列表');
define('_XHELP_TEXT_NO_RECORDS','沒有發現登記');
define('_XHELP_TEXT_EDIT','編輯');
define('_XHELP_TEXT_DELETE','刪除');
define('_XHELP_TEXT_CREATE_SAVED_SEARCH','建立儲存的搜索');
define('_XHELP_MSG_ADD_TICKETLIST_ERR','錯誤：傳票列表建立失敗');
define('_XHELP_MSG_DEL_TICKETLIST_ERR','錯誤：傳票列表刪除失敗');
define('_XHELP_MSG_NO_ID','錯誤：您沒有指定ID');
define('_XHELP_TEXT_VIEW_MORE_TICKETS','查看更多傳票');
define('_XHELP_MSG_NO_EDIT_SEARCH','錯誤：您不允許修改搜索。');
define('_XHELP_MSG_NO_DEL_SEARCH','錯誤：您不允許刪除搜索');
?>