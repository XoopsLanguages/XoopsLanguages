<?php
//$Id：admin.php,v 1.76 2005/10/04 19:38:57 eric_juden Exp $

//Menu choices 選單選擇
define('_AM_XHELP_ADMIN_TITLE','%s 管理選單');
define('_AM_XHELP_BLOCK_TEXT','管理區塊');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','管理部門');
define('_AM_XHELP_MENU_MANAGE_STAFF','管理工作團隊');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','修改郵件樣板');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS','修改傳票區');
define('_AM_XHELP_MENU_GROUP_PERM','群組權限');
define('_AM_XHELP_MENU_MIMETYPES','管理MIME');
define('_AM_XHELP_MENU_PREFERENCES','管理參數');
define('_AM_XHELP_MENU_ADD_STAFF','新增成員');
define('_AM_XHELP_UPDATE_MODULE','更新模組');
define('_AM_XHELP_MENU_MANAGE_ROLES','管理角色');
define('_AM_XHELP_TEXT_MANAGE_NOTIFICATIONS','管理通知');

define('_AM_XHELP_SEC_TICKET_ADD', 0);
define('_AM_XHELP_SEC_TICKET_EDIT', 1);
define('_AM_XHELP_SEC_TICKET_DELETE', 2);
define('_AM_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_AM_XHELP_SEC_TICKET_STATUS', 4);
define('_AM_XHELP_SEC_TICKET_PRIORITY', 5);
define('_AM_XHELP_SEC_TICKET_LOGUSER', 6);
define('_AM_XHELP_SEC_RESPONSE_ADD', 7);
define('_AM_XHELP_SEC_RESPONSE_EDIT', 8);
define('_AM_XHELP_SEC_TICKET_MERGE', 9);
define('_AM_XHELP_SEC_FILE_DELETE', 10);

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','增加傳票');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','修改傳票');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','刪除傳票');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','改變擁有者');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','改變狀態');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','改變優先權');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','會員傳票記錄');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','發表回應');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','修改回覆');
define('_AM_XHELP_SEC_TEXT_TICKET_MERGE','合併傳票');
define('_AM_XHELP_SEC_TEXT_FILE_DELETE','刪除附件');

// Admin Menu
define('_AM_XHELP_ADMIN_ABOUT','關於本模組');
define('_AM_XHELP_ADMIN_GOTOMODULE','進入本模組');

//Permissions
define('_AM_XHELP_GROUP_PERM','群組權限');
define('_AM_XHELP_GROUP_PERM_TITLE','修改群組權限');
define('_AM_XHELP_GROUP_PERM_NAME','權限');
define('_AM_XHELP_GROUP_PERM_DESC','為允許組選擇服務');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','錯誤：工作團隊未更新');
define('_AM_XHELP_MESSAGE_FILE_READONLY','檔案只讀:確保modules/xhelp/language/english/mail_templates 檔案夾可寫');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','檔案上傳成功');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','錯誤：檔案未更新');
define('_AM_XHELP_MESSAGE_ROLE_INSERT','角色成功建立');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','錯誤：角色未建立');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','角色刪除成功');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','錯誤：角色刪除失敗');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','角色更新成功');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','錯誤：角色更新失敗');
define('_AM_XHELP_MESSAGE_DEPT_STORE','部門權限建立成功');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','錯誤：部門權限建立失敗');
define('_AM_XHELP_MESSAGE_DEF_ROLES','角色預設權限增加成功');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','角色預設權限增加失敗');
define('_AM_XHELP_MESSAGE_NO_DEPT','錯誤：沒有部門被指定');
define('_AM_XHELP_MESSAGE_NO_DESC','錯誤：未新增描述');
define('_AM_MESSAGE_ADD_STATUS_ERR','錯誤：狀態增加失敗');
define('_AM_MESSAGE_EDIT_STATUS_ERR','錯誤：狀態更新失敗');
define('_AM_XHELP_DEL_STATUS_ERR','錯誤：狀態刪除失敗');
define('_AM_XHELP_STATUS_HASTICKETS_ERR','錯誤：請用這status更新傳票');
define('_AM_XHELP_MESSAGE_NO_ID','錯誤：id 未指定');
define('_AM_XHELP_MESSAGE_NO_VALUE','錯誤：MIME TYPE值未指定');
define('_AM_XHELP_MESSAGE_EDIT_MIME_ERROR','錯誤：MIME TYPE未更新');
define('_AM_XHELP_MESSAGE_DELETE_MIME_ERROR','錯誤：MIME TYPE 未刪除');
define('_AM_XHELP_MESSAGE_ADD_MIME_ERROR','錯誤：MIME TYPE 未增加');

// Buttons
define('_AM_XHELP_BUTTON_DELETE','刪除');
define('_AM_XHELP_BUTTON_EDIT','編輯');
define('_AM_XHELP_BUTTON_SUBMIT','提供');
define('_AM_XHELP_BUTTON_RESET','重置');
define('_AM_XHELP_BUTTON_ADDSTAFF','增加工作團隊');
define('_AM_XHELP_BUTTON_UPDATESTAFF','更新工作團隊');
define('_AM_XHELP_BUTTON_CANCEL','取消');
define('_AM_XHELP_BUTTON_UPDATE','更新');
define('_AM_XHELP_BUTTON_CREATE_ROLE','建新角色');
define('_AM_XHELP_BUTTON_CLEAR_PERMS','清除權限');
//define('_AM_XHELP_BUTTON_ADD_DEPT','增加部門');

define('_AM_XHELP_EDIT_DEPARTMENT','編輯部門');
define('_AM_XHELP_EXISTING_DEPARTMENTS','現有部門');
define('_AM_XHELP_MANAGE_DEPARTMENTS','部門管理');
define('_AM_XHELP_MANAGE_STAFF','工作團隊管理');
define('_AM_XHELP_EXISTING_STAFF','現有工作團隊');
define('_AM_XHELP_ADD_STAFF','增加工作團隊');
define('_AM_XHELP_EDIT_STAFF','編輯工作團隊');
define('_AM_XHELP_INDEX','主索引');
define('_AM_XHELP_DEPARTMENT_SERVERS','部門郵箱');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','電子信箱址');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','郵箱類型');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','預設傳票優先權');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','伺服器');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','端口');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','操作');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','增加郵箱');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','會員');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','密碼');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','回覆的電子信箱址');
define('_AM_XHELP_DEPARTMENT_NO_ID','不能找到部門ID. 忽略。');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','增加到部門的郵箱。');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','不能儲存郵箱到部門。');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','部門郵箱未指定。');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','部門被刪除的郵箱。');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','從部門中刪除郵箱出錯。');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','您必須分配一個會員到一個或多個部門');
define('_AM_XHELP_STAFF_ERROR_ROLES','您必須分配一個會員到一個或多個角色');
define('_AM_XHELP_STAFF_ERROR_USERS','您必須指定一個會員為工作團隊');
define('_AM_XHELP_STAFF_EXISTS','錯誤：這個會員已經成為工作團隊');

define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');


define('_AM_XHELP_TEXT_ADD_DEPT','增加部門名稱');
define('_AM_XHELP_TEXT_EDIT_DEPT','編輯部門名稱');
define('_AM_XHELP_TEXT_EDIT','編輯');
define('_AM_XHELP_TEXT_DELETE','刪除');
define('_AM_XHELP_TEXT_SELECTUSER','選擇會員');
define('_AM_XHELP_TEXT_DEPARTMENTS','部門');
define('_AM_XHELP_TEXT_USER','會員');
define('_AM_XHELP_TEXT_ALL_DEPTS','所有');
define('_AM_XHELP_TEXT_NO_DEPTS','None');
define('_AM_XHELP_TEXT_MAKE_DEPTS','增加工作團隊前,先增加部門');
define('_AM_XHELP_LINK_ADD_DEPT','增加部門');
define('_AM_XHELP_TEXT_TOP_CLOSERS','Top Closers');
define('_AM_XHELP_TEXT_WORST_CLOSERS','Worst Closers');
define('_AM_XHELP_TEXT_HIGH_PRIORITY','Open High-Priority Tickets');
define('_AM_XHELP_TEXT_NO_OWNER','沒有擁有者');
define('_AM_XHELP_TEXT_NO_DEPT','沒有部門');
define('_AM_XHELP_TEXT_RESPONSE_TIME','最快回覆時間');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW','最慢回覆時間');
define('_AM_XHELP_TEXT_PRIORITY','優先權');
define('_AM_XHELP_TEXT_ELAPSED','消逝時間');
define('_AM_XHELP_TEXT_STATUS','狀態');
define('_AM_XHELP_TEXT_SUBJECT','傳票');
define('_AM_XHELP_TEXT_DEPARTMENT','部門');
define('_AM_XHELP_TEXT_OWNER','擁有者');
define('_AM_XHELP_TEXT_LAST_UPDATED','最後更新');
define('_AM_XHELP_TEXT_LOGGED_BY','被誰記錄');
define('_AM_XHELP_TEXT_EXISTING_ROLES','現有角色');
define('_AM_XHELP_TEXT_NO_ROLES','未發現此角色');
define('_AM_XHELP_TEXT_ROLES','角色');
define('_AM_XHELP_TEXT_CREATE_ROLE','建新角色');
define('_AM_XHELP_TEXT_EDIT_ROLE','編輯角色');
define('_AM_XHELP_TEXT_NAME','姓名');
define('_AM_XHELP_TEXT_PERMISSIONS','權限');
define('_AM_XHELP_TEXT_SELECT_ALL','全選');
define('_AM_XHELP_TEXT_DEPT_PERMS','定制部門權限');
define('_AM_XHELP_TEXT_CUSTOMIZE','定制');
define('_AM_XHELP_TEXT_ACTIONS','操作');
define('_AM_XHELP_TEXT_ID','ID');
define('_AM_XHELP_TEXT_LOOKUP_USER','查找會員');
define('_AM_XHELP_TEXT_BY','By');
define('_AM_XHELP_TEXT_ASCENDING','升序');
define('_AM_XHELP_TEXT_DESCENDING','降序');
define('_AM_XHELP_TEXT_SORT_BY','分類為：');
define('_AM_XHELP_TEXT_ORDER_BY','排序為：');
define('_AM_XHELP_TEXT_NUMBER_PER_PAGE','每頁數：');
define('_AM_XHELP_TEXT_SEARCH_MIME','搜索');
define('_AM_XHELP_TEXT_SEARCH_BY','搜索為：');
define('_AM_XHELP_TEXT_SEARCH_TEXT','搜索內容：');
define('_AM_XHELP_TEXT_GO_BACK_SEARCH','回到搜索');
define('_AM_XHELP_TEXT_FIND_USERS','查找會員');

define('_AM_XHELP_SEARCH_BEGINEGINDATE','開始日期');  
define('_AM_XHELP_SEARCH_ENDDATE','結束日期');

define('_AM_XHELP_TEXT_ADD_STATUS','增加狀態');
define('_AM_XHELP_TEXT_STATE','處理描述');
define('_AM_XHELP_TEXT_MANAGE_STATUSES','管理狀態');
define('_AM_XHELP_TEXT_EDIT_STATUS','編輯狀態');

define('_AM_XHELP_TEXT_NO_RECORDS','沒有記錄');
define('_AM_XHELP_TEXT_MAIL_EVENTS','管理事件');
define('_AM_XHELP_TEXT_MAILBOX','郵箱');
define('_AM_XHELP_TEXT_EVENT_CLASS','事件集');
define('_AM_XHELP_TEXT_TIME','時間');
define('_AM_XHELP_NO_EVENTS','沒有事件');
define('_AM_XHELP_SEARCH_EVENTS','搜索郵件事件');
define('_AM_XHELP_BUTTON_SEARCH','搜索');
define('_AM_XHELP_BUTTON_TEST','測試');
define('_AM_XHELP_POSITION','位置');
define('_AM_XHELP_TEXT_MANAGE_FILES','管理檔案');
define('_AM_XHELP_TEXT_TICKETID','傳票 ID');
define('_AM_XHELP_TEXT_FILENAME','檔案名');
define('_AM_XHELP_TEXT_MIMETYPE','Mimetype');
define('_AM_XHELP_TEXT_TOTAL_USED_SPACE','已使用空間');
define('_AM_XHELP_TEXT_SIZE','大小');
define('_AM_XHELP_TEXT_DELETE_RESOLVED','是否刪除已解決的傳票的附件？');
define('_AM_XHELP_TEXT_NO_FILES','沒有檔案');
define('_AM_XHELP_TEXT_RESOLVED_ATTACH','已解決的附件');
define('_AM_XHELP_TEXT_ALL_ATTACH','所有附件');
define('_AM_XHELP_TEXT_MAINTENANCE','維護欄');
define('_AM_XHELP_TEXT_ORPHANED','是否刪除不活動工作團隊的傳票？');
define('_AM_XHELP_TEXT_DELETE_STAFF_DEPT','移除部門工作團隊');
define('_AM_XHELP_MSG_NO_DEPTID','錯誤：沒有指定部門ID');
define('_AM_XHELP_MSG_NO_UID','錯誤：沒有指定會員');
define('_AM_XHELP_MSG_REMOVE_STAFF_DEPT_ERR','部門工作團隊移除失敗');
define('_AM_XHELP_TEXT_DEFAULT','預設');
define('_AM_XHELP_TEXT_MAKE_DEFAULT_DEPT','指定為預設部門');
define('_AM_XHELP_TEXT_DEFAULT_DEPT','是否指定為預設部門');
define('_AM_XHELP_MSG_CHANGED_DEFAULT_DEPT','更新預設部門');

// Mimetypes
define("_AM_XHELP_MIME_ID","序號");
define("_AM_XHELP_MIME_EXT","擴展名");
define("_AM_XHELP_MIME_NAME","套用類型");
define("_AM_XHELP_MIME_ADMIN","工作團隊");
define("_AM_XHELP_MIME_USER","會員");
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","增加");
define("_AM_XHELP_MIME_MODIFYF","編輯");
define("_AM_XHELP_MIME_EXTF","檔案擴展名");
define("_AM_XHELP_MIME_NAMEF","Application Type/Name<div style='padding-top：8px;'><span style='font-weight：normal;'>輸入相關檔案擴展名</span></div>");
define("_AM_XHELP_MIME_TYPEF","Mimetypes<div style='padding-top：8px;'><span style='font-weight：normal;'>輸入與此MIMETYPE相關的檔案擴展名,多個用空格隔開</span></div>");
define("_AM_XHELP_MIME_ADMINF","是否管理員可用");
define("_AM_XHELP_MIME_ADMINFINFO","<b>允許被管理員用於上傳的MIME TYPE</b>");
define("_AM_XHELP_MIME_USERF","是否會員可用");
define("_AM_XHELP_MIME_USERFINFO","<b>允許被會員用於上傳的MIME TYPE</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","沒有指定MIME TYPE.");
define("_AM_XHELP_MIME_FINDMIMETYPE","查找新的MIME TYPE?");
define("_AM_XHELP_MIME_EXTFIND","搜索檔案擴展<div style='padding-top：8px;'><span style='font-weight：normal;'>輸入想搜索的擴展名.</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>用詞表可以增加,修改,刪除 MIME TYPE</li> 
	<li>Search for a new mimetypes via an external website.</li> 
	<li>View displayed mimetypes for Admin and User uploads.</li> 
	<li>Change mimetype upload status.</li></ul> 
	");


// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","增加");
define("_AM_XHELP_MIME_CLEAR","重置");
define("_AM_XHELP_MIME_CANCEL","取消");
define("_AM_XHELP_MIME_MODIFY","編輯");
define("_AM_XHELP_MIME_DELETE","刪除");
define("_AM_XHELP_MIME_FINDIT","取得擴展名!");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","是否刪除選擇的MIME TYPE?");
define("_AM_XHELP_MIME_MIMEDELETED","Mimetype %s 已經刪除");
define("_AM_XHELP_MIME_CREATED","Mimetype 訊息已經刪除");
define("_AM_XHELP_MIME_MODIFIED","Mimetype 訊息已經修改");

define("_AM_XHELP_MINDEX_ACTION","操作");
define("_AM_XHELP_MINDEX_PAGE","<b>頁</b> ");

//image admin icon 
define("_AM_XHELP_ICO_EDIT","編輯此項");
define("_AM_XHELP_ICO_DELETE","刪除此項");
define("_AM_XHELP_ICO_ONLINE","在線");
define("_AM_XHELP_ICO_OFFLINE","離線");
define("_AM_XHELP_ICO_APPROVED","批准");
define("_AM_XHELP_ICO_NOTAPPROVED","不批准");

define("_AM_XHELP_ICO_LINK","相關連接");
define("_AM_XHELP_ICO_URL","增加關聯URL");
define("_AM_XHELP_ICO_ADD","增加");
define("_AM_XHELP_ICO_APPROVE","批准");
define("_AM_XHELP_ICO_STATS","統計");

define("_AM_XHELP_ICO_IGNORE","忽略");
define("_AM_XHELP_ICO_ACK","Broken Report Acknowledged");
define("_AM_XHELP_ICO_REPORT","Acknowledge Broken Report?");
define("_AM_XHELP_ICO_CONFIRM","Broken Report Confirmed");
define("_AM_XHELP_ICO_CONBROKEN","Confirm Broken Report?");

define("_AM_XHELP_UPLOADFILE","檔案上傳成功");
define('_AM_XHELP_TEXT_TICKET_INFO','傳票訊息');
define('_AM_XHELP_TEXT_OPEN_TICKETS','開啟傳票');
define('_AM_XHELP_TEXT_HOLD_TICKETS','暫停傳票');
define('_AM_XHELP_TEXT_CLOSED_TICKETS','關閉傳票');
define('_AM_XHELP_TEXT_TOTAL_TICKETS','所有傳票');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','樣板名稱');
define('_AM_XHELP_TEXT_DESCRIPTION','狀態描述');
define('_AM_XHELP_TEXT_PATH','路徑');
define('_AM_XHELP_TEXT_GENERAL_TAGS','公共標籤');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - 站點網址');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - 站點名稱');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL - 管理員電子信箱址');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - 模組名稱');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - 連接到模組首頁');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','列表外的標籤不能修改!');

define('_AM_XHELP_CURRENTVER','目前版本 <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER','數據庫版本 <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE','您的數據庫已經是最新，不必升級');
define('_AM_XHELP_DB_NEEDUPDATE','您的數據庫不是最新的，請升級!');
define('_AM_XHELP_UPDATE_NOW','立即升級!');
define('_AM_XHELP_DB_NEEDINSTALL','模組版本與數據庫不符.請安裝一致的數據庫');
define('_AM_XHELP_VERSION_ERR','不能確認前版本。');
define('_AM_XHELP_MSG_MODIFYTABLE','被修改的表 %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','更改不成功的表 %s');
define('_AM_XHELP_MSG_ADDTABLE','被增加的表 %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR','增加不成功表 %s');
define('_AM_XHELP_MSG_UPDATESTAFF','更新工作團隊 #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','更新不成功的工作團隊 #%s');
define('_AM_XHELP_UPDATE_DB','正在更新數據庫');
define('_AM_XHELP_UPDATE_TO','正在更新版本 %s');
define('_AM_XHELP_UPDATE_OK','更新成功的版本 %s');
define('_AM_XHELP_UPDATE_ERR','更新失敗的版本 %s');
define('_AM_XHELP_MSG_UPD_PERMS','工作團隊 #%s 權限已經增加到部門 %s。');
define('_AM_XHELP_MSG_REMOVE_TABLE','表 %s 已從數據庫中移除。');
define('_AM_XHELP_MSG_GLOBAL_PERMS','工作團隊 #%s 有全局權限。');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','錯誤：表 %s 從數據庫中移除失敗');
define('_AM_XHELP_MSG_RENAME_TABLE','表 %s 被重名為 %s。');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','錯誤：表 %s 重名失敗。');
define('_AM_XHELP_MSG_UPDATE_ROLE','%s 角色權限更新成功。');
define('_AM_XHELP_MSG_UPDATE_ROLE_ERR','錯誤：%s 角色權限更新失敗');
define('_AM_XHELP_MSG_DEPT_DEL_CFRM','確定要刪除部門 #%u？');
define('_AM_XHELP_MSG_STAFF_DEL_CFRM','確認要刪除工作團隊 #%u？');
define('_AM_XHELP_MSG_DEPT_MBOX_DEL_CFRM','確認要刪除郵箱 %s？');
define('_AM_XHELP_MSG_ADD_STATUS_ERR','錯誤：狀態 \'%s\' 增加失敗。');
define('_AM_XHELP_MSG_ADD_STATUS','狀態 \'%s\' 增加成功。');
define('_AM_XHELP_MSG_CHANGED_STATUS','傳票狀態更新成功');
define('_AM_XHELP_MSG_CHANGED_STATUS_ERR','錯誤：傳票狀態更新失敗');
define('_AM_XHELP_MSG_DELETE_RESOLVED','您確定要刪除已解決的傳票的附件？');
define('_AM_XHELP_MSG_DELETE_FILE','您確定要刪除附件？');
define('_AM_XHELP_MSG_ADD_CONFIG_ERR','錯誤：部門的配置值儲存失敗');
define('_AM_XHELP_MSG_UPDATE_CONFIG_ERR','錯誤：部門的配置值更新失敗');
define('_AM_XHELP_MSG_CLEAR_ORPHANED_ERR','工作團隊記錄已最新');
define('_AM_XHELP_MSG_UPDATE_SEARCH','儲存的搜索 #%u 更新成功。');
define('_AM_XHELP_MSG_UPDATE_SEARCH_ERR','錯誤：搜索 #%u 更新失敗。');






define('_AM_XHELP_TEXT_CONTRIB_INFO','參與人訊息');
define('_AM_XHELP_TEXT_DEVELOPERS','開發者');
define('_AM_XHELP_TEXT_TRANSLATORS','翻譯者');
define('_AM_XHELP_TEXT_TESTERS','測試人');
define('_AM_XHELP_TEXT_DOCUMENTER','文檔');
define('_AM_XHELP_TEXT_CODE','補丁');
define('_AM_XHELP_TEXT_MODULE_DEVELOPMENT','模組開發訊息');
define('_AM_XHELP_TEXT_DEMO_SITE','演示網站');
define('_AM_XHELP_DEMO_SITE','3Dev 演示網站');

define('_AM_XHELP_TEXT_OFFICIAL_SITE','官方支持網站');
define('_AM_XHELP_OFFICIAL_SITE','3Dev.org');
define('_AM_XHELP_TEXT_REPORT_BUG','發現一個臭蟲？');
define('_AM_XHELP_REPORT_BUG','報告臭蟲');
define('_AM_XHELP_TEXT_NEW_FEATURE','取得一個新特點？');
define('_AM_XHELP_NEW_FEATURE','新特點');
define('_AM_XHELP_TEXT_QUESTIONS','問題？');
define('_AM_XHELP_QUESTIONS','向模組開發者發問');
define('_AM_XHELP_TEXT_RELEASE_DATE','模組開啟日期');
define('_AM_XHELP_TEXT_DISCLAIMER','模組使用聲明');
define('_AM_XHELP_DISCLAIMER','警告:此模組仍在開發階段,使用此模組責任自負.開發者不負任何責任');


define('_AM_XHELP_TEXT_CHANGELOG','版本變更日誌');
define('_AM_XHELP_TEXT_EDIT_DEPT_PERMS','選擇使用此部門的組');
define('_AM_XHELP_PATH_CONFIG',"模組目錄配置");
define('_AM_XHELP_PATH_TICKETATTACH','傳票附件');
define('_AM_XHELP_PATH_EMAILTPL','郵件樣板');
define('_AM_XHELP_TEXT_CREATETHEDIR','建立目錄');
define('_AM_XHELP_TEXT_SETPERM','設置權限');



define('_AM_XHELP_PATH_AVAILABLE',"<span style='font-weight：bold; color：green;'>Available</span>");
define('_AM_XHELP_PATH_NOTAVAILABLE',"<span style='font-weight：bold; color：red;'>Not available</span>");
define('_AM_XHELP_PATH_NOTWRITABLE',"<span style='font-weight：bold; color：red;'>Not writable</span>");
define('_AM_XHELP_PATH_CREATED',"目錄建立成功");
define('_AM_XHELP_PATH_NOTCREATED',"目錄建立失敗");
define('_AM_XHELP_MESSAGE_ACTIVATE','Toggle Active');
define('_AM_XHELP_MESSAGE_DEACTIVATE','Toggle Inactive');
define('_AM_XHELP_TEXT_ACTIVE','Active');
define('_AM_XHELP_TEXT_INACTIVE','In-Active');
define('_AM_XHELP_TEXT_ACTIVITY','Activity');
define('_AM_XHELP_DEPARTMENT_EDIT_SERVER','更新部門郵箱');


define('_AM_XHELP_TEXT_MANAGE_FIELDS','管理自訂欄位');
define('_AM_XHELP_ADD_FIELD','增加自訂欄位');
define('_AM_XHELP_EDIT_FIELD','編輯自訂欄位');
define('_AM_XHELP_TEXT_NAME_DESC','顯示欄位標題');
define('_AM_XHELP_TEXT_FIELDNAME','欄位名稱');
define('_AM_XHELP_TEXT_FIELDNAME_DESC','DB 欄位 和 HTML 欄位名. 只由字母,數字和"_"組成');
define('_AM_XHELP_TEXT_DESCRIPTION_DESC','額外的欄位訊息');
define('_AM_XHELP_TEXT_CONTROLTYPE','欄位類型');
define('_AM_XHELP_TEXT_CONTROLTYPE_DESC','能被HTML利用的類型');
define('_AM_XHELP_TEXT_DEPT_DESC','選擇可利用此欄位的部門');
define('_AM_XHELP_TEXT_REQUIRED','在增加傳票時顯示');
define('_AM_XHELP_TEXT_REQUIRED_DESC','此欄位是否在增加傳票時顯示？');
define('_AM_XHELP_TEXT_DATATYPE','數據類型');
define('_AM_XHELP_TEXT_DATATYPE_DESC','訊息儲存的數據類型');
define('_AM_XHELP_TEXT_VALIDATION','驗證規則');
define('_AM_XHELP_TEXT_VALIDATION_DESC','套用一個規則來驗證會員輸入的有效性');
define('_AM_XHELP_TEXT_WEIGHT','高度');
define('_AM_XHELP_TEXT_WEIGHT_DESC','顯示欄位高度');
define('_AM_XHELP_TEXT_FIELDVALUES','欄位值列表');
define('_AM_XHELP_TEXT_FIELDVALUES_DESC','例子:<br />u=未指定<br />m=男<br />f=女<br /><br />這內容用於多項選擇框.等號前是關鍵詞,等號後是值');
define('_AM_XHELP_TEXT_DEFAULTVALUE','預設值');
define('_AM_XHELP_TEXT_DEFAULTVALUE_DESC','這個預設值在欄位使用時提供<br />這個元素值會被多個可能值使用');
define('_AM_XHELP_TEXT_LENGTH','長度');
define('_AM_XHELP_TEXT_LENGTH_DESC','欄位內容長度');
define('_AM_XHELP_TEXT_REGEX_CUSTOM','定制');
define('_AM_XHELP_TEXT_REGEX_USPHONE','電話號碼');
define('_AM_XHELP_TEXT_REGEX_USZIP','US Zip + 4');
define('_AM_XHELP_TEXT_REGEX_EMAIL','電子信箱址');


define('_XHELP_CONTROL_DESC_TXTBOX','Text Box');
define('_XHELP_CONTROL_DESC_TXTAREA','Multi-line Text Box');
define('_XHELP_CONTROL_DESC_SELECT','Select Box');
define('_XHELP_CONTROL_DESC_MULTISELECT','Multi-Select Box');
define('_XHELP_CONTROL_DESC_YESNO','Yes / No');
define('_XHELP_CONTROL_DESC_CHECKBOX','Checkbox');
define('_XHELP_CONTROL_DESC_RADIOBOX','Radiobox');
define('_XHELP_CONTROL_DESC_DATETIME','Date+Time');
define('_XHELP_CONTROL_DESC_FILE','File');
define('_XHELP_DATATYPE_TEXT','Text');
define('_XHELP_DATATYPE_NUMBER_INT','Number (INTEGER)');
define('_XHELP_DATATYPE_NUMBER_DEC','Number (Decimal)');



define('_AM_XHELP_MSG_FIELD_DEL_CFRM','您確認刪除此欄位 #%u？');
define('_AM_XHELP_VALID_ERR_CONTROLTYPE','選擇了無效的欄位。');
define('_AM_XHELP_TEXT_SESSION_RESET','重置表單');
define('_AM_XHELP_VALID_ERR_NAME','名稱未指定');
define('_AM_XHELP_VALID_ERR_FIELDNAME','欄位名未指定');
define('_AM_XHELP_VALID_ERR_FIELDNAME_UNIQUE','欄位名必須唯一');
define('_AM_XHELP_VALID_ERR_LENGTH','長度必須是 %u and %u 之間的數字');
define('_AM_XHELP_VALID_ERR_DEFAULTVALUE','預設值必須在option列表中');
define('_AM_XHELP_VALID_ERR_VALUE_LENGTH','值 "%s" 大於欄位長度, %u 字元');
define('_AM_XHELP_VALID_ERR_VALUE','必須為欄位設置一個值');
define('_AM_XHELP_MSG_FIELD_ADD_OK','欄位增加成功');
define('_AM_XHELP_MSG_FIELD_ADD_ERR','欄位增加失敗');
define('_AM_XHELP_MSG_FIELD_UPD_OK','欄位更新成功');
define('_AM_XHELP_MSG_FIELD_UPD_ERR','欄位更新失敗');
define('_AM_XHELP_MSG_SUBMISSION_ERR','您提供訊息有錯,請修復在提供');
define('_AM_XHELP_MSG_NEED_UID','錯誤：您必須提供一個會員');


define('_AM_XHELP_TEXT_DEFAULT_STATUS','預設狀態');

define('_AM_XHELP_VALID_ERR_MIME_EXT','檔案擴展未設置');
define('_AM_XHELP_VALID_ERR_MIME_NAME','套用類型/名稱未設置');
define('_AM_XHELP_VALID_ERR_MIME_TYPES','Mime 類型未設置');

define('_AM_XHELP_TEXT_NOTIF_NAME','名稱');
define('_AM_XHELP_TEXT_SUBSCRIBED_MEMBERS','訂閱成員');

define('_AM_XHELP_NOTIF_NEW_TICKET','新傳票');
define('_AM_XHELP_NOTIF_DEL_TICKET','刪除傳票');
define('_AM_XHELP_NOTIF_MOD_TICKET','編輯傳票');
define('_AM_XHELP_NOTIF_NEW_RESPONSE','新回覆');
define('_AM_XHELP_NOTIF_MOD_RESPONSE','編輯回覆');
define('_AM_XHELP_NOTIF_MOD_STATUS','更改傳票狀態');
define('_AM_XHELP_NOTIF_MOD_PRIORITY','更改傳票優先權');
define('_AM_XHELP_NOTIF_MOD_OWNER','更改傳票擁有者');
define('_AM_XHELP_NOTIF_CLOSE_TICKET','關閉傳票');
define('_AM_XHELP_NOTIF_MERGE_TICKET','合併傳票');

//Used for Manage Notifications page
define('_AM_XHELP_STAFF_SETTING1','所有工作團隊');
define('_AM_XHELP_STAFF_SETTING2','部門工作團隊');
define('_AM_XHELP_STAFF_SETTING3','擁有者');
define('_AM_XHELP_STAFF_SETTING4','關閉通知');
define('_AM_XHELP_USER_SETTING1','開啟通知');
define('_AM_XHELP_USER_SETTING2','關閉通知');
define('_AM_XHELP_TEXT_SUBMITTER','提供人');
define('_AM_XHELP_TEXT_NOTIF_STAFF','工作團隊通知');
define('_AM_XHELP_TEXT_NOTIF_USER','會員通知');
define('_AM_XHELP_TEXT_ASSOC_TPL','關聯樣板');
define('_AM_XHELP_TEXT_AND','和');


?>