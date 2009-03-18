<?php
// $Id: finish.php 2768 2009-02-05 02:40:31Z phppp $
// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPSCHINA Translation Team

$content .=
"<h3>恭喜，网站安装成功！</h3>
<p>现在就可以<a href='../index.php'>浏览网站首页</a>.</p>
<h3>技术支持</h3>

<p>
<a href='http://xoops.sourceforge.net/' rel='external'>XOOPS 英文站</a> | <a href='http://xoops.org.cn/' rel='external'>XOOPS 中文站</a>
";
$content .=
"<h3>安全设置</h3>
<p>为了安全考虑,安装向导对你的网站进行配置. 请双击确认:
<div class='confirmMsg'>
<em>mainfile.php</em> 设置为只读.<br />
从服务器上删除目录  <em>{$installer_modified}</em> (或 <em>install</em> 如果安装向导对此目录重命名没有成功) .
</div>
</p>
";
?>