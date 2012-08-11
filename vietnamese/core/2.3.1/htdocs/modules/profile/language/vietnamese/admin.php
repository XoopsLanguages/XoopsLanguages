<?php
// $Id: admin.php 2206 2008-09-30 06:30:16Z phppp $
//  Xoopsviet.com - Hổ trợ xoops tiếng Việt
define("_PROFILE_AM_FIELD","Mẫu");//Field
define("_PROFILE_AM_FIELDS","Những mẫu");//Fields
define("_PROFILE_AM_CATEGORY","Chuyên mục");//Category
define("_PROFILE_AM_STEP","Bước");

define("_PROFILE_AM_SAVEDSUCCESS","%s Lưu thành công");//Saved Successfully
define("_PROFILE_AM_DELETEDSUCCESS","%s Xóa bỏ thành công");//Deleted Successfully
define("_PROFILE_AM_RUSUREDEL","Bạn có chắc chắn muốn xoá bỏ %s");//Are you sure you want to delete
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","Mẫu không thiết đặt được");//The field is not configurable.

define("_PROFILE_AM_ADD","Thêm %s");
define("_PROFILE_AM_EDIT","Sửa %s");
define("_PROFILE_AM_TYPE","Lọai mẫu");
define("_PROFILE_AM_VALUETYPE","Lọai giá trị");
define("_PROFILE_AM_NAME","Tên");
define("_PROFILE_AM_TITLE","Tiêu đề");
define("_PROFILE_AM_DESCRIPTION","Mô tả");
define("_PROFILE_AM_REQUIRED","Cần thiết?");
define("_PROFILE_AM_MAXLENGTH","Chiều dài tối đa");//Maximum Length
define("_PROFILE_AM_WEIGHT","Thứ tự");//Weight
define("_PROFILE_AM_DEFAULT","Mặc định");
define("_PROFILE_AM_NOTNULL","Không NULL?");

define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","Email");
define("_PROFILE_AM_INT","Integer");
define("_PROFILE_AM_TXTAREA","Text Area");
define("_PROFILE_AM_TXTBOX","Text field");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","Other");

define("_PROFILE_AM_PROF_VISIBLE_ON","Field visible on these groups' profile");
define("_PROFILE_AM_PROF_VISIBLE_FOR","Field visible on profile for these groups");
define("_PROFILE_AM_PROF_VISIBLE","Visibility");
define("_PROFILE_AM_PROF_EDITABLE","Field editable from profile");
define("_PROFILE_AM_PROF_REGISTER","Show in registration form");
define("_PROFILE_AM_PROF_SEARCH","Searchable by these groups");
define("_PROFILE_AM_PROF_ACCESS","Profile accessible by these groups");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Admin groups: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" .
        "<li>Non basic groups: If a user belongs to one or more non basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to allowed to any of the non basic groups; else</li>" .
        "<li>User group: If a user belongs to User group only, the current user has access if and only if one of his groups is allowed to access User group</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","The field ");
define("_PROFILE_AM_FIELDVISIBLEFOR"," is visible for ");
define("_PROFILE_AM_FIELDVISIBLEON"," viewing a profile of ");
define("_PROFILE_AM_FIELDVISIBLETOALL","- Everyone");
define("_PROFILE_AM_FIELDNOTVISIBLE","is not visible");

define("_PROFILE_AM_CHECKBOX","Checkbox");
define("_PROFILE_AM_GROUP","Group Select");
define("_PROFILE_AM_GROUPMULTI","Group Multi Select");
define("_PROFILE_AM_LANGUAGE","Language Select");
define("_PROFILE_AM_RADIO","Radio Buttons");
define("_PROFILE_AM_SELECT","Select");
define("_PROFILE_AM_SELECTMULTI","Multi Select");
define("_PROFILE_AM_TEXTAREA","Text Area");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML Text Area");
define("_PROFILE_AM_TEXTBOX","Text Field");
define("_PROFILE_AM_TIMEZONE","Timezone");
define("_PROFILE_AM_YESNO","Radio Yes/No");
define("_PROFILE_AM_DATE","Date");
define("_PROFILE_AM_AUTOTEXT","Auto Text");
define("_PROFILE_AM_DATETIME","Date and Time");
define("_PROFILE_AM_LONGDATE","Long Date");

define("_PROFILE_AM_ADDOPTION","Add Option");
define("_PROFILE_AM_REMOVEOPTIONS","Remove Options");
define("_PROFILE_AM_KEY","Value to be stored");
define("_PROFILE_AM_VALUE","Text to be displayed");

// User management
define("_PROFILE_AM_EDITUSER","Edit User");
define("_PROFILE_AM_SELECTUSER","Select User");
define("_PROFILE_AM_ADDUSER","Add User");
define("_PROFILE_AM_THEME","Theme");
define("_PROFILE_AM_RANK","Rank");
define("_PROFILE_AM_USERDONEXIT","User doesn't exist!");
define("_PROFILE_MA_USERLEVEL","User Level");

define("_PROFILE_MA_ACTIVE","Active");
define("_PROFILE_MA_INACTIVE","Inactive");
define("_PROFILE_AM_USERCREATED","User Created");

define("_PROFILE_AM_CANNOTDELETESELF","Deleting your own account is not allowed - use your profile page to delete your own account");
define("_PROFILE_AM_CANNOTDELETEADMIN","Deleting an administrator account is not allowed");

define("_PROFILE_AM_NOSELECTION","No user selected");
define("_PROFILE_AM_USER_ACTIVATED","User activated");
define("_PROFILE_AM_USER_DEACTIVATED","User deactivated");
define("_PROFILE_AM_USER_NOT_ACTIVATED","Error: User NOT activated");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","Error: User NOT deactivated");

define("_PROFILE_AM_STEPNAME","Step name");
define("_PROFILE_AM_STEPORDER","Step order");
define("_PROFILE_AM_STEPSAVE","Save after step");
define("_PROFILE_AM_STEPINTRO","Step description");
?>