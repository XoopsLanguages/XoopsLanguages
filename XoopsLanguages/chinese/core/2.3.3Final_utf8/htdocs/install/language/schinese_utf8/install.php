<?php
/**
 * Installer main schinese_utf8 strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id: install.php 2717 2009-01-23 09:47:30Z phppp $
 */

// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPSCHINA Translation Team

define("SHOW_HIDE_HELP","显示/隐藏 帮助信息" );

// Configuration check page
define("SERVER_API","服务程序接口" );
define("PHP_EXTENSION","%s 扩展" );
define("CHAR_ENCODING","字符集编码" );
define("XML_PARSING","XML parsing" );
define("REQUIREMENTS","基本需求" );
define("_PHP_VERSION","PHP 版本" );
define("RECOMMENDED_SETTINGS","推荐设置" );
define("RECOMMENDED_EXTENSIONS","推荐启用的扩展程序" );
define("SETTING_NAME","设置名称" );
define("RECOMMENDED","推荐" );
define("CURRENT","当前" );
define("RECOMMENDED_EXTENSIONS_MSG","这些扩展程序不是普通用户必须安装和启用的，但是一些功能需要这些扩展的支持（例如多字节语言或RSS支持等）。因此，推荐安装和启用这些扩展程序。" );
define("NONE","无" );
define("SUCCESS","完成" );
define("WARNING","注意" );
define("FAILED","失败" );



// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS安装向导" );

define("LANGUAGE_SELECTION","选择语言" );
define("LANGUAGE_SELECTION_TITLE","选择语言");        // L128
define("INTRODUCTION","介绍" );
define("INTRODUCTION_TITLE","欢迎使用 XOOPS 安装向导，请按提示进行安装。" );        // L0
define("CONFIGURATION_CHECK","配置检测" );
define("CONFIGURATION_CHECK_TITLE","检查你的服务环境配置" );
define("PATHS_SETTINGS","路径设置" );
define("PATHS_SETTINGS_TITLE","路径设置" );
define("DATABASE_CONNECTION","数据库连接配置" );
define("DATABASE_CONNECTION_TITLE","数据库连接配置" );
define("DATABASE_CONFIG","数据库配置" );
define("DATABASE_CONFIG_TITLE","数据库配置" );
define("CONFIG_SAVE","保存配置" );
define("CONFIG_SAVE_TITLE","保存设置" );
define("TABLES_CREATION","建立数据表" );
define("TABLES_CREATION_TITLE","数据表建立" );
define("INITIAL_SETTINGS","初始设置" );
define("INITIAL_SETTINGS_TITLE","请输入初始设置" );
define("DATA_INSERTION","添加数据" );
define("DATA_INSERTION_TITLE","保存数据到数据库" );
define("WELCOME","欢迎" );
define("WELCOME_TITLE","欢迎进入XOOPS网站" );        // L0


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS 物理路径" );
define("XOOPS_URLS","XOOPS 虚拟路径" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS 物理路径：");
define("XOOPS_ROOT_PATH_HELP","XOOPS 根目录的绝对物理路径，结尾不要加'/'");

define("XOOPS_LIB_PATH_LABEL","XOOPS 公用类库" );
define("XOOPS_LIB_PATH_HELP","XOOPS 公用类库的绝对物理路径，结尾不要加'/'。安全起见，建议将该目录转移到 " . XOOPS_ROOT_PATH_LABEL . " 以外。");
define("XOOPS_DATA_PATH_LABEL","XOOPS 数据文件" );
define("XOOPS_DATA_PATH_HELP","XOOPS 数据文件（属性可写）的绝对物理路径，结尾不要加'/'。安全起见，建议将该目录转移到 " . XOOPS_ROOT_PATH_LABEL . "以外。" );

define("XOOPS_URL_LABEL","XOOPS 虚拟路径(URL)：" ); // L56
define("XOOPS_URL_HELP","访问（ XOOPS ）网站的网址，结尾不要加'/'" ); // L58

define("LEGEND_CONNECTION","数据库服务器连接配置" );
define("LEGEND_DATABASE","数据库" ); // L51

define("DB_HOST_LABEL","数据库主机名称：" );    // L27
define("DB_HOST_HELP",  "如果不确定,请使用<em>localhost</em>。"); // L67
define("DB_USER_LABEL","数据库用户帐号：" );    // L28
define("DB_USER_HELP",  "用户登录数据库主机并创建数据库的帐号。"); // L65
define("DB_PASS_LABEL","数据库用户密码：" );    // L52
define("DB_PASS_HELP",  "与数据库用户帐号对应的密码。"); // L68
define("DB_NAME_LABEL","数据库名称：" );    // L29
define("DB_NAME_HELP",  "用于安装XOOPS的数据库名称，如果不存在，程序将自动创建。"); // L64
define("DB_CHARSET_LABEL","数据库字符集" );
define("DB_CHARSET_HELP",  "MySQL支持字符集设置，从而可以采用恰当的规则用于数据保存和内容比较。");
define("DB_COLLATION_LABEL","数据库连接校对" );
define("DB_COLLATION_HELP",  "数据库连接校对是用于字符比较的一套规则。");
define("DB_PREFIX_LABEL","数据表前缀：" );    // L30
define("DB_PREFIX_HELP",  "用于建立数据表时候的表前缀，如果不确定，请保持默认。"); // L63
define("DB_PCONNECT_LABEL","数据库持续连接：" );    // L54
define("DB_PCONNECT_HELP",  "建议虚拟主机用户不选择。"); // L69
define("DB_DATABASE_LABEL","选择要使用的数据库类型");

define("LEGEND_ADMIN_ACCOUNT","管理员账号设置" );
define("ADMIN_LOGIN_LABEL","网站管理员帐号：");
define("ADMIN_EMAIL_LABEL","网站管理员邮件：");
define("ADMIN_PASS_LABEL","网站管理员密码：");
define("ADMIN_CONFIRMPASS_LABEL","确认管理员密码：");

// Buttons
define("BUTTON_PREVIOUS","上一步" ); // L42
define("BUTTON_NEXT","下一步" ); // L47

// Messages
define("XOOPS_FOUND","%s 检测正确" );
define("CHECKING_PERMISSIONS","检测文件和目录权限..." ); // L82
define("IS_NOT_WRITABLE","目录 %s 属性不可" ); // L83
define("IS_WRITABLE","目录 %s 属性可写。" ); // L84

define("XOOPS_PATH_FOUND","路径检测正确。" );

define("READY_CREATE_TABLES","没有检测到数据表。<br />安装程序将会创建XOOPS系统所需的数据表<br />点击 <em>下一步</em> 执行此操作。" );
define("XOOPS_TABLES_FOUND","数据表已存在。<br />点击 <em>下一步</em> 继续进行安装" ); // L131
define("XOOPS_TABLES_CREATED","XOOPS 系统数据表建立成功。<br />点击 <em>下一步</em> 继续进行安装。" );
define("READY_INSERT_DATA","安装程序将会添加初始数据到数据库中。" );
define("READY_SAVE_MAINFILE","安装程序将会把指定的设置保存到 <em>mainfile.php</em>中。<br />点击 <em>下一步</em> 执行保存。" );
define("SAVED_MAINFILE","保存设置到 mainfile.php 中" );
define("SAVED_MAINFILE_MSG","安装程序将会把指定的设置保存到 <em>mainfile.php</em>中。 点击 <em>下一步</em> 继续进行安装。" );
define("DATA_ALREADY_INSERTED","数据库中已有数据。<br />点击 <em>下一步</em> 继续进行安装。" );
define("DATA_INSERTED","添加初始数据到数据库中。<br />点击 <em>下一步</em> 继续进行安装。" );


// %s is database name
define("DATABASE_CREATED","数据库 %s 创建成功!" ); // L43
// %s is table name
define("TABLE_NOT_CREATED","无法创建数据表 %s" ); // L118
define("TABLE_CREATED","数据表 %s 创建成功。" ); // L45
define("ROWS_INSERTED","成功添加 %d 条数据到数据表 %s 中。" ); // L119
define("ROWS_FAILED","无法添加 %d 条数据到数据表 %s 中。" ); // L120
define("TABLE_ALTERED","数据表 %s 更新成功。"); // L133
define("TABLE_NOT_ALTERED","数据表 %s 更新失败。"); // L134
define("TABLE_DROPPED","数据表 %s 删除成功。"); // L163
define("TABLE_NOT_DROPPED","数据表 %s 删除失败。"); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","无法读取指定目录，请检测是否存在并且设置属性为可读。" );
define("ERR_NO_XOOPS_FOUND","无法检测到指定目录。" );
define("ERR_INVALID_EMAIL","无效的电子邮件" ); // L73
define("ERR_REQUIRED","必填信息。" ); // L41
define("ERR_PASSWORD_MATCH","两次输入的密码不一致。" );
define("ERR_NEED_WRITE_ACCESS","下列目录属性必须为可读写：<br />(UNIX/LINUX 系统设定为 666、MacOS 系统设定为 777、WinOS 系统去掉只读属性)。" );
define("ERR_NO_DATABASE","无法创建数据库，请联系服务器管理员查询详细信息。" ); // L31
define("ERR_NO_DBCONNECTION","无法连接到数据库服务器。" ); // L106
define("ERR_WRITING_CONSTANT","%s 设置失败。" ); // L122

define("ERR_COPY_MAINFILE","无法将mainfile.dist.php的内容复制到mainfile.php中" );
define("ERR_WRITE_MAINFILE","无法写入 mainfile.php。请检查文件权限后重试。");
define("ERR_READ_MAINFILE","无法读取 mainfile.php。" );

define("ERR_INVALID_DBCHARSET","字符集 '%s' 不能支持。" );
define("ERR_INVALID_DBCOLLATION","链接校对 '%s' 不能支持。" );
define("ERR_CHARSET_NOT_SET","未能设置XOOPS数据库的缺省字符集。" );


define("_INSTALL_CHARSET","UTF-8");

define("SUPPORT","技术支持");

define("LOGIN","验证");
define("LOGIN_TITLE","验证");
define("USER_LOGIN","管理员登录" );
define("USERNAME","用户名 :");
define("PASSWORD","密码 :");

define("ICONV_CONVERSION","字符集转换");
define("ZLIB_COMPRESSION","Zlib 压缩");
define("IMAGE_FUNCTIONS","图形函数");
define("IMAGE_METAS","图像元数据 (exif)");

define("ADMIN_EXIST","管理员用户名已存在.<br />点击 <strong>下一步</strong> 继续安装.");

define("CONFIG_SITE","站点设置" );
define("CONFIG_SITE_TITLE","站点设置" );
define("MODULES","模块安装" );
define("MODULES_TITLE","模块安装" );
define("THEME","选择主题" );
define("THEME_TITLE","选择网站默认风格" );

define("INSTALLED_MODULES","以下模块已经安装成功.<br />点击 <strong>下一步</strong> 继续安装.");
define("NO_MODULES_FOUND","没有找到模块.<br />点击 <strong>下一步</strong> 继续安装.");
define("NO_INSTALLED_MODULES","没有安装模块.<br />点击 <strong>下一步</strong> 继续安装.");

define("THEME_NO_SCREENSHOT","没有找到缩略图");

define("IS_VALOR"," => ");

// password message
define("PASSWORD_LABEL","密码强度 : ");
define("PASSWORD_DESC","密码不能为空");
define("PASSWORD_GENERATOR","密码生成器");
define("PASSWORD_GENERATE","生成");
define("PASSWORD_COPY","复制");

define("PASSWORD_VERY_WEAK","非常弱");
define("PASSWORD_WEAK","弱");
define("PASSWORD_BETTER","一般");
define("PASSWORD_MEDIUM","中等");
define("PASSWORD_STRONG","强");
define("PASSWORD_STRONGEST","非常强");
?>