<?php
// $Id: admin.php 2021 2008-08-31 02:02:45Z phppp $
define("_PROFILE_AM_FIELD","字段");
define("_PROFILE_AM_FIELDS","字段");
define("_PROFILE_AM_CATEGORY","类别");
define("_PROFILE_AM_STEP","注册步骤");

define("_PROFILE_AM_SAVEDSUCCESS","%s 保存成功");
define("_PROFILE_AM_DELETEDSUCCESS","%s 删除成功");
define("_PROFILE_AM_RUSUREDEL","确定要删除 %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","该字段不可编辑");

define("_PROFILE_AM_ADD","增加");
define("_PROFILE_AM_EDIT","修改");
define("_PROFILE_AM_TYPE","字段类型");
define("_PROFILE_AM_VALUETYPE","值类型");
define("_PROFILE_AM_NAME","名称");
define("_PROFILE_AM_TITLE","标题");
define("_PROFILE_AM_DESCRIPTION","描述");
define("_PROFILE_AM_REQUIRED","必需");
define("_PROFILE_AM_MAXLENGTH","最大长度");
define("_PROFILE_AM_WEIGHT","顺序");
define("_PROFILE_AM_DEFAULT","默认值");
define("_PROFILE_AM_NOTNULL","非空");

define("_PROFILE_AM_ARRAY","数组");
define("_PROFILE_AM_EMAIL","电子邮件");
define("_PROFILE_AM_INT","整型");
define("_PROFILE_AM_TXTAREA","文本域");
define("_PROFILE_AM_TXTBOX","文本框");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","其他");

define("_PROFILE_AM_PROF_VISIBLE_ON","在该群组的资料中显示");
define("_PROFILE_AM_PROF_VISIBLE_FOR","资料对该群组可见");
define("_PROFILE_AM_PROF_VISIBLE","字段可见性");
define("_PROFILE_AM_PROF_EDITABLE","编辑用户资料");
define("_PROFILE_AM_PROF_REGISTER","在注册表单中显示");
define("_PROFILE_AM_PROF_SEARCH","搜索用户资料");
define("_PROFILE_AM_PROF_ACCESS","访问用户资料");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>被访问用户属于管理员组: 如果当前用户所在的某个组被允许访问管理员组，则当前用户有权访问，否则</li>" .
        "<li>被访问用户属于一个或多个定制组（非管理员、 会员、 游客）：如果当前用户所在的某个组被允许访问待访问用户的某个定制组，则当前用户有权访问，否则</li>" .
        "<li>被访问用户属于会员组：如果当前用户所在的某个组被允许访问普通会员组，则当前用户有权访问</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","字段");
define("_PROFILE_AM_FIELDVISIBLEFOR"," 允许 ");
define("_PROFILE_AM_FIELDVISIBLEON"," 查看 ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- 任何人");
define("_PROFILE_AM_FIELDNOTVISIBLE","不能查看");


define("_PROFILE_AM_CHECKBOX","复选框");
define("_PROFILE_AM_GROUP","群组单选");
define("_PROFILE_AM_GROUPMULTI","群组多选");
define("_PROFILE_AM_LANGUAGE","语言选择");
define("_PROFILE_AM_RADIO","单选按钮");
define("_PROFILE_AM_SELECT","单选");
define("_PROFILE_AM_SELECTMULTI","多选");
define("_PROFILE_AM_TEXTAREA","文本域");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML文本域");
define("_PROFILE_AM_TEXTBOX","文本框");
define("_PROFILE_AM_TIMEZONE","时区");
define("_PROFILE_AM_YESNO","单选 是/否");
define("_PROFILE_AM_DATE","日期");
define("_PROFILE_AM_AUTOTEXT","自动文本");
define("_PROFILE_AM_DATETIME","日期和时间");
define("_PROFILE_AM_LONGDATE","长日期格式");

define("_PROFILE_AM_ADDOPTION","添加选项");
define("_PROFILE_AM_REMOVEOPTIONS","删除选项");
define("_PROFILE_AM_KEY","关键字");
define("_PROFILE_AM_VALUE","值");

// User management
define("_PROFILE_AM_EDITUSER","编辑用户");
define("_PROFILE_AM_SELECTUSER","选择用户");
define("_PROFILE_AM_ADDUSER","添加用户");
define("_PROFILE_AM_THEME","主题");
define("_PROFILE_AM_RANK","等级");
define("_PROFILE_AM_USERDONEXIT","用户不存在!");
define("_PROFILE_MA_USERLEVEL","用户级别");

define("_PROFILE_MA_ACTIVE","正式用户");
define("_PROFILE_MA_INACTIVE","未激活");
define("_PROFILE_AM_USERCREATED","成功建立新用户");

define("_PROFILE_AM_CANNOTDELETESELF","不能删除自己的账号 - 请进入账号管理删除账号");
define("_PROFILE_AM_CANNOTDELETEADMIN","禁止删除管理员账号");

define("_PROFILE_AM_NOSELECTION","没有选择帐号");
define("_PROFILE_AM_USER_ACTIVATED","帐号已激活");
define("_PROFILE_AM_USER_DEACTIVATED","帐号已停用");
define("_PROFILE_AM_USER_NOT_ACTIVATED","错误: 帐号激活失败");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","错误: 帐号停用失败");

define("_PROFILE_AM_STEPNAME","步骤名称");
define("_PROFILE_AM_STEPORDER","步骤排序");
define("_PROFILE_AM_STEPSAVE","该步是否有数据需保存");
define("_PROFILE_AM_STEPINTRO","步骤描述");
?>