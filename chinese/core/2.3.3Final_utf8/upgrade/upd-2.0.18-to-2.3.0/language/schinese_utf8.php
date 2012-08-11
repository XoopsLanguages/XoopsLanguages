<?php
// $Id: english.php 2087 2008-09-15 04:50:23Z phppp $

define("LEGEND_XOOPS_PATHS","XOOPS 物理路径" );
define("LEGEND_DATABASE","数据库字符集" );

define("XOOPS_LIB_PATH_LABEL","XOOPS 公用类库" );
define("XOOPS_LIB_PATH_HELP","XOOPS 公用类库（属性可写）的绝对物理路径，结尾不要加'/'。安全起见，建议将该目录转移到 XOOPS 物理路径：" . XOOPS_ROOT_PATH . " 以外." );
define("XOOPS_DATA_PATH_LABEL","XOOPS 数据文件" );
define("XOOPS_DATA_PATH_HELP","XOOPS 数据文件的绝对物理路径，结尾不要加'/'。安全起见，建议将该目录转移到 XOOPS 物理路径： " . XOOPS_ROOT_PATH . " 以外." );

define("DB_COLLATION_LABEL","数据库连接校对" );
define("DB_COLLATION_HELP",  "	
从MySQL 4.12 开始支持自定义字符集和整理。但是，它比预期的更为复杂，所以不要作出任何改变，除非你相信自己的选择.");
define("DB_COLLATION_NOCHANGE",  "请勿修改");

define("XOOPS_PATH_FOUND","路径检测正确." );
define("ERR_COULD_NOT_ACCESS","不能使用所指定的目录. 请检查该目录是否存在并且属性为可写." );
define("CHECKING_PERMISSIONS","检查文件和目录权限..." );
define("ERR_NEED_WRITE_ACCESS","请设置以下目录和文件属性为可写<br />(例如在 UNIX/LINUX 服务器中 <em>chmod 777 目录名称</em> )" );
define("IS_NOT_WRITABLE","%s 只读." );
define("IS_WRITABLE","%s 可写." );
define("ERR_COULD_NOT_WRITE_MAINFILE","配置信息没有被写入 mainfile.php, 请手动添加配置信息到 mainfile.php 中." );

define("LEGEND_XOOPS_MAINFILE_FORPROTECTOR","XOOPS 配置文件（mainfile）准备");
define("XOOPS_MAINFILE_LABEL_FORPROTECTOR","如果你需要安装XOOPS安全卫士（protector）模块, 请用 <em>/extras/mainfile.dist.php.protector</em>文件覆盖<em>/upgrade/" . basename(dirname(dirname(__FILE__))) . "/mainfile.dist.php</em>" .
                                            " (不要忘了先把文件名改为 <em>mainfile.dist.php</em>).<br />" .
                                            "如果XOOPS安全卫士（protector）模块 已经安装并且正在运行, 请跳过此步.");
?>