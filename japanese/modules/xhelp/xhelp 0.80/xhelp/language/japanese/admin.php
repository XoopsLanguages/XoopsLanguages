
<?php

/**
 *    $Id: admin.php,v 1.4 2005/04/08 15:47:29 eric_juden Exp $
 *
 *    Japanese Translation by : Seibu Tsushin KK www.seibu-tsushin.co.jp
 *
 *    Valentin  Nils  <opensource@seibu-tsushin.co.jp>
 *    Mizukoshi Norio <opensource@seibu-tsushin.co.jp>
 *
 */

//Menu choices
define('_AM_XHELP_ADMIN_TITLE','�����ԎҎƎ���');
define('_AM_XHELP_BLOCK_TEXT','�֥�å�����');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','���ƥ��꡼����');
define('_AM_XHELP_MENU_MANAGE_STAFF','�����åմ���');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','�᡼��/�Îݎ̎ߎڎ��Ľ���');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS',' ����ν���');
define('_AM_XHELP_MENU_GROUP_PERM','���ގَ��̎ߵ���');
define('_AM_XHELP_MENU_MIMETYPES','mime�����̎ߴ���');
define('_AM_XHELP_MENU_PREFERENCES','ͥ�踢');
define('_AM_XHELP_MENU_ADD_STAFF','���������ɲ�');
define('_AM_XHELP_UPDATE_MODULE','�ǿ��ӎ��ގ����٤�');

//Permissions
define('_AM_XHELP_GROUP_PERM','���ގَ��̎ߵ���');
define('_AM_XHELP_GROUP_PERM_TITLE','���ގَ��̎ߵ��Ĥ���');
define('_AM_XHELP_GROUP_PERM_NAME','����');
define('_AM_XHELP_GROUP_PERM_DESC','�桼�������롼�פǲ�ǽ�ʥ����ӥ�����ǲ�������');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','���׎� : �����åդ��ѹ��Ǥ��ޤ���Ǥ���');
define('_AM_XHELP_MESSAGE_FILE_READONLY','���Υե�������ɤ߹������ѤΤ��ᡢ modules/xhelp/language/english/mail_templates �ե�������˽񤭤��߸��¤����ꤷ�Ʋ�������');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','�ե����빹������ޤ���');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','���׎� : �ե����빹������ޤ���Ǥ���');

// Buttons
define('_AM_XHELP_BUTTON_DELETE','���');
define('_AM_XHELP_BUTTON_EDIT','�ѹ�');
define('_AM_XHELP_BUTTON_SUBMIT','����');
define('_AM_XHELP_BUTTON_RESET','�؎�����');
define('_AM_XHELP_BUTTON_ADDSTAFF','���������ɲ�');
define('_AM_XHELP_BUTTON_UPDATESTAFF','�������̤��ѹ�');
define('_AM_XHELP_BUTTON_CANCEL','���ä�');
define('_AM_XHELP_BUTTON_UPDATE','�ӎ��ގ����ٺǿ��Ǥ�');
//define('_AM_XHELP_BUTTON_ADD_DEPT','���ƥ��꡼/�ɲ�');

define('_AM_XHELP_EDIT_DEPARTMENT','���ƥ��꡼���ѹ�');
define('_AM_XHELP_EXISTING_DEPARTMENTS','¸�ߥ��ƥ��꡼:');
define('_AM_XHELP_MANAGE_DEPARTMENTS','���ƥ��꡼����');
define('_AM_XHELP_MANAGE_STAFF','�������̴���');
define('_AM_XHELP_EXISTING_STAFF','�����åմ���¸�ߤ��ޤ�:');
define('_AM_XHELP_ADD_STAFF','�����å��ɲ�');
define('_AM_XHELP_EDIT_STAFF','�����åդ��ѹ�');
define('_AM_XHELP_INDEX','����ǥå���');
define('_AM_XHELP_ADMIN_GOTOMODULE','�ӎ��ގ����٤عԤ�');

define('_AM_XHELP_TEXT_ADD_DEPT','���ƥ��꡼�ɲ�:');
define('_AM_XHELP_TEXT_EDIT_DEPT','���ƥ��꡼�ܤ��ѹ�:');
define('_AM_XHELP_TEXT_EDIT','�Խ�');
define('_AM_XHELP_TEXT_DELETE','���');
define('_AM_XHELP_TEXT_SELECTUSER','�Վ����ގ�����:');
define('_AM_XHELP_TEXT_DEPARTMENTS','���ƥ��꡼:');
define('_AM_XHELP_TEXT_USER','�Վ����ގ�:');
define('_AM_XHELP_TEXT_ALL_DEPTS','����');
define('_AM_XHELP_TEXT_NO_DEPTS','̵��');
define('_AM_XHELP_TEXT_MAKE_DEPTS','�����åդ��ɲä������˥��ƥ��꡼���ɲä��Ʋ�������');
define('_AM_XHELP_LINK_ADD_DEPT','���ƥ��꡼�ɲ�');

// Mimetypes
define("_AM_XHELP_MIME_ID","ID");
define("_AM_XHELP_MIME_EXT","EXT");
define("_AM_XHELP_MIME_NAME","Ŭ�ю����̎�");
define("_AM_XHELP_MIME_ADMIN","������");
define("_AM_XHELP_MIME_USER","�Վ����ގ�");
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","mime�����פ����");
define("_AM_XHELP_MIME_MODIFYF","mime�����פ���");
define("_AM_XHELP_MIME_EXTF","�ե������ĥ :");
define("_AM_XHELP_MIME_NAMEF","Ŭ�ю����̎�/̾��:<div style='padding-top: 8px;'><span style='font-weight: normal;'>��ĥ�Ҥ�Ŭ�ю����̎ߤ�����ǲ�������</span></div>");
define("_AM_XHELP_MIME_TYPEF","��ĥ��:<div style='padding-top: 8px;'><span style='font-weight: normal;'>��ĥ�ҤΥե������ĥ�Ҥ�����ǲ������� Each mimetype must be seperated with a space.</span></div>");
define("_AM_XHELP_MIME_ADMINF","�����Ԥε��Ĥ��줿mime������");
define("_AM_XHELP_MIME_ADMINFINFO","<b>�����ԤΥ��ץ���ɤ����ѤǤ���mime������:</b>");
define("_AM_XHELP_MIME_USERF","�桼�����ε��Ĥ��줿mime������");
define("_AM_XHELP_MIME_USERFINFO","<b>�桼�����Υ��ץ���ɤ����ѤǤ���mime������:</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","mime�����פ����򤵤�ޤ���Ǥ���.");
define("_AM_XHELP_MIME_FINDMIMETYPE","��mime�����פθ���:");
define("_AM_XHELP_MIME_EXTFIND","�ե������ĥ�θ���:<div style='padding-top: 8px;'><span style='font-weight: normal;'>�����������ե������ĥ�����Ϥ��Ʋ�������</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>���Υե�����ǤϿ�mime�����פ��ɲá��Խ���������Ǥ��ޤ���</li>
    <li>�����������ʥ�ۡ���ڡ����ǿ�mime�����פ򸡺����롣</li>
    <li>�����Ԥ�桼�������ץ���ɤǤ����mime�����װ���ɽ��</li>
    <li>mime�����פΥ��ץ���ɥ��ơ��������Ѵ���</li></ul>
    ");

// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","����");
define("_AM_XHELP_MIME_CLEAR","�؎�����");
define("_AM_XHELP_MIME_CANCEL","���ä�");
define("_AM_XHELP_MIME_MODIFY","����");
define("_AM_XHELP_MIME_DELETE","���");
define("_AM_XHELP_MIME_FINDIT","�ե������ĥ�θ���");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","���򤵤줿mime�����פκ��");
define("_AM_XHELP_MIME_MIMEDELETED","mime������ %s ���������ޤ�����");
define("_AM_XHELP_MIME_CREATED","mime�����פξ��󤬺�������ޤ���");
define("_AM_XHELP_MIME_MODIFIED","mime�����פξ����ѹ�����ޤ���");

define("_AM_XHELP_MINDEX_ACTION","����������");
define("_AM_XHELP_MINDEX_PAGE","<b>�ڡ���:<b> ");

//image admin icon
define("_AM_XHELP_ICO_EDIT","���Υ����ƥ���Խ����ޤ�");
define("_AM_XHELP_ICO_DELETE","���Υ����ƥ�������ޤ�");
define("_AM_XHELP_ICO_ONLINE","���̎׎���");
define("_AM_XHELP_ICO_OFFLINE","���̎׎���");
define("_AM_XHELP_ICO_APPROVED","��ǧ");
define("_AM_XHELP_ICO_NOTAPPROVED","��ǧ���ޤ���");

define("_AM_XHELP_ICO_LINK","��Ϣ����؎ݎ�");
define("_AM_XHELP_ICO_URL","��Ϣ����URL���ɲ�");
define("_AM_XHELP_ICO_ADD","�ɲ�");
define("_AM_XHELP_ICO_APPROVE","��ǧ");
define("_AM_XHELP_ICO_STATS","����");

define("_AM_XHELP_ICO_IGNORE","̵��");
define("_AM_XHELP_ICO_ACK","���줿����ǧ����ޤ���");
define("_AM_XHELP_ICO_REPORT","���줿�����ǧ��ޤ�����");
define("_AM_XHELP_ICO_CONFIRM","���줿���񤬳�ǧ����ޤ���");
define("_AM_XHELP_ICO_CONBROKEN","���줿������ǧ���ޤ�");

define("_AM_XHELP_UPLOADFILE","�ե�����Υ��ץ���ɤ���������ޤ���");
define('_AM_XHELP_TEXT_TICKET_INFO',' �������');
define('_AM_XHELP_TEXT_OPEN_TICKETS','�����̎ߎ� ����');
define('_AM_XHELP_TEXT_HOLD_TICKETS','�ڥ�ƥ������ ����');
define('_AM_XHELP_TEXT_CLOSED_TICKETS',' ����ν�λ');
define('_AM_XHELP_TEXT_TOTAL_TICKETS',' ����ι��');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','�Îݎ̎ߎڎ���̾:');
define('_AM_XHELP_TEXT_DESCRIPTION','����:');
define('_AM_XHELP_TEXT_GENERAL_TAGS','����Ū�ʥ���');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - �ۡ���ڡ�����URL');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - �ۡ���ڡ�����̾��');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL - �����ԤΥ᡼��');
//define('_AM_XHELP_TEXT_USER_TAGS','�桼���ϥ������Ϣ�Ť��ޤ���:');
//define('_AM_XHELP_TEXT_USER_TAGS1','X_UNAME - �桼����̾');
//define('_AM_XHELP_TEXT_USER_TAGS2','X_UID - �桼���� id');
//define('_AM_XHELP_TEXT_NOTIFICATION_TAGS','���δ�Ϣ�Τ���:');
//define('_AM_XHELP_TEXT_NOTIFICATION_TAGS1','X_MODULE - �ӎ��ގ����٤�̾��');
//define('_AM_XHELP_TEXT_NOTIFICATION_TAGS2','X_MODULE_URL - �ӎ��ގ����٤Υ���ƥ����ڡ����ؤΥ��');
//define('_AM_XHELP_TEXT_NOTIFICATION_TAGS3','X_NOTIFY_EVENT - �ȥꥬ�����줿���٥��');
//define('_AM_XHELP_TEXT_NOTIFICATION_TAGS4','X_NOTIFY_CATEGORY - ���٥�ȤΥ��ƥ���');
//define('_AM_XHELP_TEXT_NOTIFICATION_TAGS5','X_UNSUBSCRIBE_URL - �桼���������Υ��åȥ��åץڡ����ؤΥ��');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','�ꥹ�Ȱʳ��Υ����������ޤ���');

define('_AM_XHELP_TEXT_TOP_CLOSERS','�����ΰ����ᤤ���ڥ졼����');
define('_AM_XHELP_TEXT_WORST_CLOSERS','�����ΰ����٤����ڥ졼����');
define('_AM_XHELP_TEXT_HIGH_PRIORITY','ͥ���٤ι⤤�����ɾ������');
define('_AM_XHELP_TEXT_NO_OWNER','ô���Ԥ���ޤäƤ��ޤ���');
define('_AM_XHELP_TEXT_NO_DEPT','���ƥ��꡼������ޤ���');
define('_AM_XHELP_TEXT_RESPONSE_TIME','��û�β�������');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW','��Ĺ�β�������');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - �⥸�塼���̾��');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - �⥸�塼��Υ���ǥå������ڡ����ؤΥ��');

define('_AM_XHELP_TEXT_PRIORITY','ͥ���� ');
define('_AM_XHELP_TEXT_ELAPSED','�в� :');
define('_AM_XHELP_TEXT_STATUS','���ơ����� :');
define('_AM_XHELP_TEXT_SUBJECT','��̾ :');
define('_AM_XHELP_TEXT_DEPARTMENT','���ƥ��꡼ :');
define('_AM_XHELP_TEXT_OWNER','ô���ԡ� ');
define('_AM_XHELP_TEXT_LAST_UPDATED','�ǽ������� :');
define('_AM_XHELP_TEXT_LOGGED_BY','�桼����: ');
define('_MI_XHELP_MENU_CHECK_TABLES','�ǡ��١����ơ��֥�Υ����å�');
define('_AM_XHELP_CURRENTVER','�����ȥС������ 0.6');
define('_AM_XHELP_DBVER','�Îގ����͎ގ����С������0.6');
define('_AM_XHELP_DB_UPDATE','�ǿ��Υ⥸�塼��С������Ǥ�');
define('_AM_XHELP_DB_NOUPDATE','�ǿ��Υ⥸�塼��С������˹������Ƥ�������');

define('_AM_XHELP_MENU_MANAGE_ROLES','Manage Roles');

define('_AM_XHELP_TEXT_EXISTING_ROLES','Existing Roles');
define('_AM_XHELP_TEXT_NO_ROLES','No Roles Found');
define('_AM_XHELP_TEXT_CREATE_ROLE','Create New Role');
define('_AM_XHELP_TEXT_NAME','Name:');
define('_AM_XHELP_TEXT_PERMISSIONS','Permissions:');
define('_AM_XHELP_TEXT_SELECT_ALL','Select All');
define('_AM_XHELP_TEXT_EDIT_ROLE','Edit Role');
define('_AM_XHELP_TEXT_ROLES','Roles:');
define('_AM_XHELP_TEXT_DEPT_PERMS','Customize Department Permissions');
define('_AM_XHELP_TEXT_CUSTOMIZE','Customize');
define('_AM_XHELP_TEXT_ACTIONS','Actions:');
define('_AM_XHELP_TEXT_ID','ID:');
define('_AM_XHELP_TEXT_LOOKUP_USER','Lookup User');

define('_AM_XHELP_MESSAGE_ROLE_INSERT','Role inserted successfully.');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','Error: role was not created.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','Role deleted successfully.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','Error: role was not removed.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','Role updated successfully.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','Error: role was not updated.');
define('_AM_XHELP_MESSAGE_DEPT_STORE','Department permissions stored successfully.');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','Error: department permissions were not stored.');

define('_AM_XHELP_BUTTON_CLEAR_PERMS','Clear Permissions');
define('_AM_XHELP_BUTTON_CREATE_ROLE','Create New Role');

define('_AM_XHELP_SEC_TICKET_ADD', 0);
define('_AM_XHELP_SEC_TICKET_EDIT', 1);
define('_AM_XHELP_SEC_TICKET_DELETE', 2);
define('_AM_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_AM_XHELP_SEC_TICKET_STATUS', 4);
define('_AM_XHELP_SEC_TICKET_PRIORITY', 5);
define('_AM_XHELP_SEC_TICKET_LOGUSER', 6);
define('_AM_XHELP_SEC_RESPONSE_ADD', 7);
define('_AM_XHELP_SEC_RESPONSE_EDIT', 8);

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','������ɲ�');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','������Խ�');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','����κ��');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','�����ô���Ԥ��ѹ�');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','����ξ��֤��Խ�');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','�����ͥ���٤��Խ�');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','���䤹��桼����̾');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','�������ɲ�');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','�������Խ�');

define('_AM_XHELP_MSG_UPD_PERMS','Staff #%s permissions added for department #%s.');
define('_AM_XHELP_MSG_REMOVE_TABLE','Table %s was removed from your database.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','Error: table %s was NOT removed from your database.');
define('_AM_XHELP_DEPARTMENT_SERVERS','Department Mailbox');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','Email Address');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','Mailbox Type');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','Default Ticket Priority');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','Server');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','Port');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','Actions');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','Add Mailbox to monitor');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','Username');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','Password');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','Reply-To Email Address');
define('_AM_XHELP_DEPARTMENT_NO_ID','Could not find Department ID. Aborting.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','Added Mailbox to Department.');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','Error saving Mailbox to Department.');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','Department mailbox was not specified.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','Deleted mailbox from Department.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','Error removing Mailbox from Department.');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','You must assign a user to 1 or more departments before saving');
define('_AM_XHELP_STAFF_ERROR_ROLES','You must assign a user to 1 or more roles before saving');
define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');
define('_AM_XHELP_UPDATE_OK','Successfully updated to version %s');
define('_AM_XHELP_UPDATE_ERR','Errors updating to version %s');
define('_AM_XHELP_MSG_UPD_PERMS','Staff #%s permissions added for department %s.');
define('_AM_XHELP_MSG_REMOVE_TABLE','Table %s was removed from your database.');
define('_AM_XHELP_MSG_GLOBAL_PERMS','Staff #%s has global permissions.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','Error: table %s was NOT removed from your database.');
define('_AM_XHELP_MSG_RENAME_TABLE','Table %s was renamed %s.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','Error: table %s was not renamed.');

define('_AM_XHELP_DB_NEEDUPDATE','�ǿ��ΥС�����󤬤���ޤ�');
define('_AM_XHELP_UPDATE_NOW','��������!');
define('_AM_XHELP_UPDATE_DB','�ǡ����١����򹹿���');
define('_AM_XHELP_UPDATE_TO','Updating to version %s:');
define('_AM_XHELP_MSG_MODIFYTABLE','Modified table %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','Error modifying table %s');
define('_AM_XHELP_MSG_ADDTABLE','Added table %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR','Error adding table %s');
define('_AM_XHELP_MESSAGE_DEF_ROLES','Default permission roles were added successfully.');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','Default permission roles were not added.');
define('_AM_XHELP_MSG_UPDATESTAFF','Updated staff #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','Error updating staff #%s');

define('_AM_XHELP_TEXT_MAIL_EVENTS','Mail Events');
define('_AM_XHELP_TEXT_MAILBOX','Mailbox:');
define('_AM_XHELP_TEXT_EVENT_CLASS','Event Class:');
define('_AM_XHELP_TEXT_TIME','Time:');
define('_AM_XHELP_MAIL_CLASS0','Connection');
define('_AM_XHELP_MAIL_CLASS1','Parsing');
define('_AM_XHELP_MAIL_CLASS2','Storage');
define('_AM_XHELP_MAIL_CLASS3','General');
define('_AM_XHELP_NO_EVENTS','No Events Found');
define('_AM_XHELP_SEARCH_EVENTS','Search Mail Events');
define('_AM_XHELP_BUTTON_SEARCH','Search');

define('_AM_XHELP_ADMIN_ABOUT','xhelp�ˤĤ���');
define('_AM_XHELP_TEXT_CONTRIB_INFO','���ϼԾ���');
define('_AM_XHELP_TEXT_DEVELOPERS','��ȯ��:');
define('_AM_XHELP_TEXT_TRANSLATORS','������:');
define('_AM_XHELP_TEXT_TESTERS','�ƥ�����:');
define('_AM_XHELP_TEXT_DOCUMENTER','����:');
define('_AM_XHELP_TEXT_MODULE_DEVELOPMENT','�⥸�塼�볫ȯ����');
define('_AM_XHELP_TEXT_DEMO_SITE','�ǥ⥵����:');
define('_AM_XHELP_DEMO_SITE','3Dev�Υǥ⥵����');
define('_AM_XHELP_TEXT_OFFICIAL_SITE','�������ݡ��ȥ�����:');
define('_AM_XHELP_OFFICIAL_SITE','3Dev.org');
define('_AM_XHELP_TEXT_REPORT_BUG','�⥸�塼��ΥХ���ݡ���:');
define('_AM_XHELP_REPORT_BUG','�Х�����ݡ���');
define('_AM_XHELP_TEXT_NEW_FEATURE','�⥸�塼��ο���ǽ���');
define('_AM_XHELP_NEW_FEATURE','��������ǽ');
define('_AM_XHELP_TEXT_QUESTIONS','�䤤��碌');
define('_AM_XHELP_QUESTIONS','��ȯ�Ԥˡ�ľ�ܼ���򤷤ޤ����ʱѸ�Ǥ��ꤤ�פ��ޤ�)');
define('_AM_XHELP_TEXT_RELEASE_DATE','��꡼������:');
define('_AM_XHELP_TEXT_DISCLAIMER','���ջ���');
define('_AM_XHELP_DISCLAIMER','��� : ���Υ⥸�塼��Ϥޤ���ȯ�ǤǤ����顢�����ǥ����ȤǤϻ��Ѥ��ʤ��ǲ���������ȯ�Ԥϡ���Ǥ������ޤ���');
define('_AM_XHELP_TEXT_CHANGELOG','��ԤΥ�å�����');
define('_AM_XHELP_TEXT_EDIT_DEPT_PERMS','Department Visibility:');

define('_AM_XHELP_MESSAGE_NO_DEPT','Error: no department specified');
define('_AM_XHELP_MSG_DEPT_DEL_CFRM','Are you sure you want to delete department #%u?');
define('_AM_XHELP_MSG_STAFF_DEL_CFRM','Are you sure you want to remove staff #%u?');

define('_AM_XHELP_SEC_TICKET_MERGE', 9);
define('_AM_XHELP_SEC_TEXT_TICKET_MERGE','Merge Tickets');
define('_AM_XHELP_MSG_UPDATE_ROLE','%s role permissions have been updated.');
define('_AM_XHELP_MSG_UPDATE_ROLE_ERR','Error: %s role permissions were not updated.');
define('_AM_XHELP_MSG_DEPT_MBOX_DEL_CFRM','Are you sure you want to delete the mailbox %s?');

define('_AM_XHELP_TEXT_ADD_STATUS','Add Status');
define('_AM_XHELP_TEXT_STATE','State:');
define('_AM_XHELP_MESSAGE_NO_DESC','Error: you did not specify a description.');
define('_AM_MESSAGE_ADD_STATUS_ERR','Error: status was not added.');
define('_AM_XHELP_TEXT_MANAGE_STATUSES','Manage Statuses');
define('_AM_XHELP_TEXT_EDIT_STATUS','Edit Status');
define('_AM_MESSAGE_EDIT_STATUS_ERR','Error: status was not updated.');
define('_AM_XHELP_DEL_STATUS_ERR','Error: status was not deleted.');
define('_AM_XHELP_MSG_ADD_STATUS_ERR','Error: status \'%s\' was not added.');
define('_AM_XHELP_MSG_ADD_STATUS','Status \'%s\' was added.');
define('_AM_XHELP_MSG_CHANGED_STATUS','Tickets updated with new status.');
define('_AM_XHELP_MSG_CHANGED_STATUS_ERR','Error: ticket statuses not updated.');

define('_AM_XHELP_TEXT_PATH','Path:');
define('_AM_XHELP_PATH_CONFIG',"Module Directory Configuration");
define('_AM_XHELP_PATH_TICKETATTACH','Ticket Attachments');
define('_AM_XHELP_PATH_EMAILTPL','Email Templates');
define('_AM_XHELP_TEXT_CREATETHEDIR','Create the folder');
define('_AM_XHELP_TEXT_SETPERM','Set Permissions');
define('_AM_XHELP_PATH_AVAILABLE',"<span style='font-weight: bold; color: green;'>Available</span>");
define('_AM_XHELP_PATH_NOTAVAILABLE',"<span style='font-weight: bold; color: red;'>Not available</span>");
define('_AM_XHELP_PATH_NOTWRITABLE',"<span style='font-weight: bold; color: red;'>Not writable</span>");
define('_AM_XHELP_PATH_CREATED',"Folder successfully created");
define('_AM_XHELP_PATH_NOTCREATED',"The folder could not be created");

define('_AM_XHELP_TEXT_CODE','Patches:');
define('_AM_XHELP_POSITION','Position');
define('_AM_XHELP_SEARCH_BEGINEGINDATE','Begin Date:');
define('_AM_XHELP_SEARCH_ENDDATE','End Date:');

define('_AM_XHELP_SEC_FILE_DELETE', 10);
define('_AM_XHELP_SEC_TEXT_FILE_DELETE','Delete File Attachments');
define('_AM_XHELP_TEXT_MANAGE_FILES','Manage Files');
define('_AM_XHELP_TEXT_TICKETID','Ticket ID:');
define('_AM_XHELP_TEXT_FILENAME','Filename:');
define('_AM_XHELP_TEXT_MIMETYPE','Mimetype:');

define('_AM_XHELP_TEXT_TOTAL_USED_SPACE','Total Used Space');
define('_AM_XHELP_TEXT_SIZE','Size:');
define('_AM_XHELP_MSG_DELETE_RESOLVED','Are you sure you want to remove resolved ticket attachments?');
define('_AM_XHELP_TEXT_DELETE_RESOLVED','Delete attachments from resolved tickets?');
define('_AM_XHELP_TEXT_NO_FILES','No Files Found');
define('_AM_XHELP_TEXT_RESOLVED_ATTACH','Resolved Attachments:');
define('_AM_XHELP_TEXT_ALL_ATTACH','All Attachments:');

define('_AM_XHELP_MESSAGE_ACTIVATE','Make Active');
define('_AM_XHELP_MESSAGE_DEACTIVATE','Make In-Active');
define('_AM_XHELP_BUTTON_TEST','Test');

define('_AM_XHELP_MSG_DELETE_FILE','Are you sure you want to remove this attachment?');
define('_AM_XHELP_TEXT_BY','By');

define('_AM_XHELP_TEXT_ACTIVE','Active');
define('_AM_XHELP_TEXT_INACTIVE','In-Active');
define('_AM_XHELP_TEXT_ACTIVITY','Activity');
define('_AM_XHELP_DEPARTMENT_EDIT_SERVER','Update Department Mailbox');

define('_AM_XHELP_MSG_ADD_CONFIG_ERR','Error: configuration value for department was not saved');
define('_AM_XHELP_MSG_UPDATE_CONFIG_ERR','Error: configuration value for department was not updated');

define('_AM_XHELP_TEXT_CONTROLTYPE','Control Type');
define('_AM_XHELP_TEXT_REQUIRED','Required');
define('_AM_XHELP_TEXT_MANAGE_FIELDS','Manage Custom Fields');

define('_AM_XHELP_TEXT_MAINTENANCE','Maintenance Tasks');
define('_AM_XHELP_TEXT_ORPHANED','Remove orphaned staff records from xhelp_staff table?');
define('_AM_XHELP_MSG_CLEAR_ORPHANED_ERR','Your staff records are up to date.');

define('_AM_XHELP_TEXT_DELETE_STAFF_DEPT','Remove staff from department');
define('_AM_XHELP_MSG_NO_DEPTID','Error: no department id was specified.');
define('_AM_XHELP_MSG_NO_UID','Error: no user was specified.');
define('_AM_XHELP_MSG_REMOVE_STAFF_DEPT_ERR','Error: staff was not removed from department.');

define('_AM_XHELP_MESSAGE_ACTIVATE','Toggle Active');
define('_AM_XHELP_MESSAGE_DEACTIVATE','Toggle Inactive');

define('_AM_XHELP_ADD_FIELD','Add Custom Field');
define('_AM_XHELP_TEXT_FIELDNAME','Field Name:');
define('_AM_XHELP_TEXT_CONTROLTYPE','Control Type:');
define('_AM_XHELP_TEXT_REQUIRED','Required:');
define('_AM_XHELP_TEXT_REQUIRED_DESC','Should this field be required during ticket addition?');
define('_AM_XHELP_TEXT_DATATYPE','Data type:');
define('_AM_XHELP_TEXT_WEIGHT','Weight:');
define('_AM_XHELP_TEXT_FIELDVALUES','Field Value List:');
define('_AM_XHELP_TEXT_FIELDVALUES_DESC','*** Placeholder: need description text');
define('_AM_XHELP_TEXT_DEFAULTVALUE','Default Value:');
define('_AM_XHELP_TEXT_LENGTH','Length:');

define('_AM_XHELP_MSG_FIELD_DEL_CFRM','Are you sure you want to remove field #%u?');
define('_XHELP_MESSAGE_DELETE_SEARCH_ERR','Error: search was not deleted.');

define('_AM_XHELP_MESSAGE_NO_ID','Error: id was not specified.');
define('_AM_XHELP_MESSAGE_NO_VALUE','Error: the mimetype value was not specified.');
define('_AM_XHELP_MESSAGE_EDIT_MIME_ERROR','Error: the mimetype was not updated.');
define('_AM_XHELP_MESSAGE_DELETE_MIME_ERROR','Error: the mimetype was not deleted.');
define('_AM_XHELP_MESSAGE_ADD_MIME_ERROR','Error: the mimetype was not added.');
define('_AM_XHELP_TEXT_ASCENDING','Ascending');
define('_AM_XHELP_TEXT_DESCENDING','Descending');
define('_AM_XHELP_TEXT_SORT_BY','Sort By:');
define('_AM_XHELP_TEXT_ORDER_BY','Order By:');
define('_AM_XHELP_TEXT_NUMBER_PER_PAGE','Number Per Page:');
define('_AM_XHELP_TEXT_SEARCH_MIME','Search Mimetypes');
define('_AM_XHELP_TEXT_SEARCH_BY','Search By:');
define('_AM_XHELP_TEXT_NO_RECORDS','No Records Found');
define('_AM_XHELP_TEXT_GO_BACK_SEARCH','Back to Search');
define('_AM_XHELP_TEXT_SEARCH_TEXT','Search Text:');

define('_AM_XHELP_EDIT_FIELD','Modify Custom Field');
define('_AM_XHELP_TEXT_VALIDATION','Validation:');
define('_AM_XHELP_TEXT_REGEX_CUSTOM','Custom');
define('_AM_XHELP_TEXT_REGEX_USPHONE','Phone Number');
define('_AM_XHELP_TEXT_REGEX_USZIP','US Zip + 4');
define('_AM_XHELP_TEXT_REGEX_EMAIL','Email Address');

define('_AM_XHELP_VALID_ERR_CONTROLTYPE','Invalid Control Type Selected.');
define('_AM_XHELP_TEXT_SESSION_RESET','Clear errors');
define('_AM_XHELP_VALID_ERR_NAME','Name not set');
define('_AM_XHELP_VALID_ERR_FIELDNAME','Fieldname not set');
define('_AM_XHELP_VALID_ERR_FIELDNAME_UNIQUE','Fieldname must be unique');
define('_AM_XHELP_VALID_ERR_LENGTH','Length should be a number value between %u and %u');
define('_AM_XHELP_VALID_ERR_DEFAULTVALUE','Default value must be in option list');
define('_AM_XHELP_VALID_ERR_VALUE_LENGTH','Value "%s" is greater than the field length, %u characters');
define('_AM_XHELP_VALID_ERR_VALUE','You must supply a value set for this field');
define('_AM_XHELP_MSG_FIELD_ADD_OK','Field added successfully');
define('_AM_XHELP_MSG_FIELD_ADD_ERR','Errors occurred while adding the field');
define('_AM_XHELP_MSG_FIELD_UPD_OK','Field updated successfully');
define('_AM_XHELP_MSG_FIELD_UPD_ERR','Errors occurred while updating the field');
define('_AM_XHELP_MSG_SUBMISSION_ERR','Your submission has errors. Please fix and submit again');

define('_AM_XHELP_TEXT_DEFAULT_STATUS','Default Status');
define('_AM_XHELP_VALID_ERR_MIME_EXT','File extension not set');
define('_AM_XHELP_VALID_ERR_MIME_NAME','Application Type/Name not set');
define('_AM_XHELP_VALID_ERR_MIME_TYPES','Mime types not set');

define('_AM_XHELP_TEXT_MANAGE_NOTIFICATIONS','Manage Notifications');
define('_AM_XHELP_TEXT_NOTIF_NAME','Notification Name');
define('_AM_XHELP_TEXT_SUBSCRIBED_MEMBERS','Subscribed Members');
define('_AM_XHELP_STAFF_SETTING1','All Staff');
define('_AM_XHELP_STAFF_SETTING2','Department Staff');
define('_AM_XHELP_STAFF_SETTING3','Ticket Owner');
define('_AM_XHELP_STAFF_SETTING4','Notification Off');
define('_AM_XHELP_USER_SETTING1','Notification On');
define('_AM_XHELP_USER_SETTING2','Notification Off');
define('_AM_XHELP_TEXT_SUBMITTER','Submitter');
define('_AM_XHELP_TEXT_NOTIF_STAFF','Staff Notification');
define('_AM_XHELP_TEXT_NOTIF_USER','User Notification');
define('_AM_XHELP_TEXT_ASSOC_TPL','Associated Templates');
?>