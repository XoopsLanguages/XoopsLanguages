<?php
//  ------------------------------------------------------------------------ //
// 本模组由 吴弘凯(tad0616@gmail.com) 制作
// 制作日期：2008-02-06
// $Id$
// ------------------------------------------------------------------------- //

//index.php
define("_MD_CAT_NO_ACCESS_POWER","您没有读取此资料夹之权限");
define("_MD_CAT_FILE_DESC","档案说明");
define("_MD_CAT_DEL_CONFIRM","确定要删除此目录？连同底下的档案及目录都会全部删除喔！");
define("_MD_CAT_LIST_ALL_FILES","列出所有资料夹中文件");
define("_MD_CAT_NOW_PATH","目前路径：");
define("_MD_CAT_ROOT","根目录");
define("_MD_CAT_PRE_FOLDER","回上一层");
define("_MD_CAT_SWITCH_LIST_MODE","显示切换：");
define("_MD_CAT_DB_ERROR1","无法取得catalog资料");
define("_MD_CAT_FILE","档案");
define("_MD_CAT_DB_ERROR2","无法取得catalog_file资料");
define("_MD_CAT_PAGE_BAR1","共 %s 页，目前在第 %s 页：");

define("_MD_CAT_SELECTED_DEL","将勾选的档案删除");
define("_MD_CAT_SELECTED_EDIT","编辑勾选的档案");
define("_MD_CAT_SELECTED_MOVETO","将勾选的档案搬移到：");
define("_MD_CAT_MOVE","搬移");
define("_MD_CAT_FILE_NAME","档案名称");
define("_MD_CAT_FILE_DATE","日期");
define("_MD_CAT_FILE_TYPE","档案类型");
define("_MD_CAT_FILE_SIZE","大小");
define("_MD_CAT_FILE_COUNTER","人气");
define("_MD_CAT_ADMIN","后台管理介面");
define("_MD_CAT_CREATE_FOLDER","建立新资料夹");
define("_MD_CAT_NEW_FOLDER","新资料夹");
define("_MD_CAT_SUBMIT","送出");
define("_MD_CAT_FOLDER_MOVE","将此资料夹搬到：");
define("_MD_CAT_FOLDER_RENAME","资料夹重新命名为：");
define("_MD_CAT_FOLDER_DEL","删除此资料夹");
define("_MD_CAT_OPEN_UPLOADER","开启上传介面");
define("_MD_CAT_DESC_EMPTY","目前没有任何说明，请输入之。");
define("_MD_CAT_SAVE","储存");
define("_MD_CAT_ROOT_DESC","根目录无法更名及搬移，仅管理员可开设资料夹及上传。");
define("_MD_CAT_EMPTY_DESC","目前没有任何说明");
define("_MD_CAT_CAN_ACCESS_GROUPS","■ 可存取群组：");
define("_MD_CAT_CAN_UPLOAD_GROUPS","■ 可上传群组：");
define("_MD_CAT_NO_SHARE_FOLDER","■ 不分享之资料夹，仅自己能存取。");
define("_MD_CAT_SUBFOLDER_COUNT","■ 子资料夹数：");
define("_MD_CAT_FILES_COUNT","■ 档案数：");
define("_MD_CAT_CREATER","■ 建立者：");
define("_MD_CAT_DB_ERROR3","无法更新catalog中的资料");
define("_MD_CAT_CANT_GET_FILE","无法下载 %s 档案到 %s！");
define("_MD_CAT_CANT_ADD_FILE","无法新增档案（%s）资料！");
define("_MD_CAT_NO_FILE","档案不存在！");
define("_MD_CAT_NO_FILE_DATA","无档案资料！");
define("_MD_CAT_NO_SELECTED_FILE","没有选择的档案");
define("_MD_CAT_MODIFY_INTERFACE","‘%s’资料夹修改介面");
define("_MD_CAT_DB_ERROR4","无法取代catalog中的资料");
define("_MD_CAT_SET_FOLDER_POWER","设定资料夹权限");
define("_MD_CAT_CAN_ACCESS_GROUPS2","可<b>读取</b>此资料夹的群组");
define("_MD_CAT_CAN_UPLOADS_GROUPS","可<b>上传</b>此资料夹的群组");
define("_MD_CAT_IS_SHARE","是否分享（若选“否”则该资料夹仅自己可见、可上传）");

//function
define("_MD_CAT_CANT_FIND","找不到");
define("_MD_CAT_MENU","选单");
define("_MD_CAT_PREV","上一页");
define("_MD_CAT_NEXT","下一页");
define("_MD_CAT_FIRST","第一页");
define("_MD_CAT_LAST","最后页");
define("_MD_CAT_PREV_PAGE","前 %s 页");
define("_MD_CAT_NEXT_PAGE","后 %s 页");
define("_MD_CAT_NO_FOLDER_NAME","无目录名称");
define("_MD_CAT_CANT_CREATE_FOLDER","无法建立目录");
define("_MD_CAT_CANT_FIND_FILE","找不到档案");
define("_MD_CAT_NO_FILE_NAME","无档名！");
define("_MD_CAT_DB_ERROR5","无法取代catalog_file中的资料");
define("_MD_CAT_DB_ERROR6","无法更新catalog_file中的资料");
define("_MD_CAT_DB_ERROR7","无法删除catalog_file中的资料");
define("_MD_CAT_UPLOAD_FROM_HD","从硬碟上传档案");
define("_MD_CAT_GET_FROM_URL","直接从网路取得");
define("_MD_CAT_GET_FROM_URL_DESC","（会直接从网路将该档下载到您的主机中，非仅连结）");
define("_MD_CAT_PHP_VERSION","■ PHP版本：");
define("_MD_CAT_ALLOW_URL_FOPEN","■ 有无开放 allow_url_fopen：");
define("_MD_CAT_MAX_FILESIZE","■ 上传大小上限：");
define("_MD_CAT_POST_MAX_SIZE","■ 表单大小上限：");
define("_MD_CAT_MAX_EXECUTION_TIME","■ 传输时间上限：");
define("_MD_CAT_PRE_SET","（原为 %s）");
define("_MD_CAT_SECOND","秒");
define("_MD_CAT_README1","■ “从硬碟上传档案”或“直接从网路取得”二选一即可。");
define("_MD_CAT_NO_EDIT_POWER","您没有编辑或上传权限");
define("_MD_CAT_UPLOAD_INTERFACE","‘%s’资料夹上传介面");
define("_MD_CAT_NO_POWER","您没有权限进行此操作。");
define("_MD_CAT_NO_LOGIN","您尚未登入，没有权限进行此操作。");
define("_MD_CAT_CANT_DELETE1","尚有 %s 子目录 %s 档案，故无法删除。");
define("_MD_CAT_DB_ERROR8","无法删除catalog中的资料");

?>
