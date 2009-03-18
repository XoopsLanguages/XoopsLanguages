<?php
// $Id: welcome.php 1923 2008-07-27 14:22:14Z phppp $
// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPSCHINA Translation Team
$content .="
<p>
    <strong><a href='http://xoops.sourceforge.net' tagert='_blank'>XOOPS</a></strong> 是一个高度可扩展、面向对象的建站系统，基于PHP语言和MySQL数据库开发。
    XOOPS 作为一个成熟的网站建设管理工具，可以方便的建设管理各类网站：内容管理与界面风格分离，便于方便灵活的设计切换不同的表现风格；成熟的功能模块化机制，有各种丰富多样的模块可供选择定制，比如新闻发布、文章管理、论坛、相册、下载、友情链接、广告管理、黄页、在线购物、博客和维基；具有完善的权限管理机制，可以针对不同用户群组设置不同权限。
</p>
<p>
    XOOPS 作为理想的WEB二次开发系统，可以开发各种规模不同类型的动态网络社区，实现高度定制化的内容管理功能。
</p>
<p>
    XOOPS 是一个<a href='http://xoops.org.cn/modules/article/view.article.php/c3/7' rel='external'>自由软件</a>，遵循<a href='http://www.gnu.org/copyleft/gpl.html' rel='external'>GNU General Public License (GPL)协议</a>，在此前提下，您可以按照自己的需要进行修改。
</p>
<h3><strong>系统需求</strong></h3>
<ul>
    <li>WWW 服务器 (<a href='http://www.apache.org/' rel='external'>Apache</a>, IIS, Roxen 等)</li>
    <li><a href='http://www.php.net/' rel='external'>PHP</a> 4.3 或更高版本（推荐使用 5.2 或更新版本）</li>
    <li><a href='http://www.mysql.com/' rel='external'>MySQL</a> 数据库服务器 3.23.XX 以上版本（推荐使用4.12或更高版本）</li>
</ul>
<h3><strong>安装准备</strong></h3>
<ol>
    <li>正确设置WWW服务器，PHP和数据库服务器。</li>
    <li>建立一个用于安装XOOPS的数据库。</li>
    <li>配置用于登录数据库的帐号及密码。</li>
    <li>设定 uploads/、cache/ 目录及 mainfile.php 属性为可写。</li>
    <li>如果要安装GIJOE开发的protector模块，请把<em>/extras/mainfile.dist.php.protector</em>文件改名为mainfile.dist.php并拷贝替代<em>htdocs/mainfile.dist.php</em></li>
	<li>处于安全考虑建议把<em>xoops_lib</em>（公共类库）和<em>xoops_data</em>（XOOPS数据）放到<a href='http://phpsec.org/projects/guide/3.html' rel='external'>document root</a>路径之外，并且修改目录名。</li>
	<li>设置<em>xoops_data/</em>目录可写；
	    生成并设置如下目录可写：<em>xoops_data/configs/</em>、<em>xoops_data/caches/</em>、<em>xoops_data/caches/xoops_cache/</em>、<em>xoops_data/caches/smarty_cache/</em>以及<em>xoops_data/caches/smarty_compile/</em>。</li>
    <li>启用浏览器 cookie 及 JavaScript 功能。</li>
</ol>
";
?>