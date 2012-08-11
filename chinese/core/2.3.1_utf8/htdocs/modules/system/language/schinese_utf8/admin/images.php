<?php
// $Id: images.php 2 2005-11-02 18:23:29Z A.D.Horse Exp $
//%%%%%% Image Manager %%%%%


define('_MD_IMGMAIN','图片管理');

define('_MD_ADDIMGCAT','添加图片类别');
define('_MD_EDITIMGCAT','修改图片类别');
define('_MD_IMGCATNAME','图片类别名称：');
define('_MD_IMGCATRGRP','选择可以使用该图片管理系统的群组：<br /><br /><span style="font-weight: normal;">只可以使用这里面的图片，但不能上传添加图片。管理员不受限制。</span>');
define('_MD_IMGCATWGRP','选择可以使用该图片管理上传功能的群组：<br /><br /><span style="font-weight: normal;">典型用法是仅供版主及管理员群组使用。</span>');
define('_MD_IMGCATWEIGHT','在图片管理系统中的显示顺序：');
define('_MD_IMGCATDISPLAY','显示该类别');
define('_MD_IMGCATSTRTYPE','图片上传到：');
define('_MD_STRTYOPENG','选定后不能再改变!');
define('_MD_INDB',' 储存在数据库中（存成 二进制 "blob" 数据）');
define('_MD_ASFILE',' 储存在文件系统中（/uploads/目录）<br />');
define('_MD_RUDELIMGCAT','您确定要删除该类别及里面图片吗？');
define('_MD_RUDELIMG','您确定要删除该图片吗？');

define('_MD_FAILDEL','删除 %s 在数据库中的图片信息时失败。');
define('_MD_FAILDELCAT','删除 %s 在数据库中的类别信息时失败。');
define('_MD_FAILUNLINK','删除 %s 类别信息时失败。');
?>