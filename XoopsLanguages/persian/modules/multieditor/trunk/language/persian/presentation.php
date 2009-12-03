<h1>توضیحات</h1>
<p>
	ماژول مولتی ادیتور به مدیران زوپس اجازه میدهد برای هر ماژول , گروه , محل متنی یک ویرایشگر نصب کنند.
</p>
<h1>سازندگان</h1>
<p>
	by luciorota (lucio.rota@gmail.com)
</p>
<p>
	<em>
		!!!This is my FIRST module 
		<img alt="Very Happy" border="0" src="http://localhost/xoops230/uploads/smil3dbd4d4e4c4f2.gif" title="Very Happy" />
	</em>
</p>
<p>
حق انتشار:
</p>
<p>
	از ماژول : xoopsinfo 2.11
	<br />
	وب سایت : http://www.dugris.info
	<br />
	سازندگان : Jmorris, Marco, Christian, DuGris (http://www.dugris.info)
</p>
<p>
	از ماژول : TinyEditor v1.0
	<br />
	سازندگان : - ralf57
</p>
<p>
	تشکر ویژه از 
	<a href="http://www.xoopsitalia.org/">XoopsItalia</a>
	و تیم 
	<a href="http://www.xoops.org/">Xoops</a>
	و تمام کاربران زوپس ...
</p>
<h1>لیست تغییرات</h1>
<p>
	v0.02 first beta release
</p>
<p>
	v0.01 first alpha release
</p>
<hr />
<h1>نصب</h1>
<p>
	<strong>برای نصب در نسخه های (Xoops v2.0.14 - v2.0.18.2) لطفا راهنمای زیر را با دقت دنبال کنید.</strong>
</p>
<ol>
	<li>این ماژول را در بخش مدیریت نصب کنید</li>
	<li>در مسیر "class/xoopsform/formdhtmltextarea.php" تفییرات زیر را اعمال کنید </li>
</ol>
<p>
	فایل اصلی:
</p>
<div class="xoopsCode">
	function XoopsFormDhtmlTextArea($caption, $name, $value, $rows=5, $cols=50, $hiddentext=&quot;xoopsHiddenText&quot;, $options = array() )
	<br />
	&nbsp;&nbsp;&nbsp; {
	<br />
	&nbsp;&nbsp;&nbsp; $this-&gt;XoopsFormTextArea($caption, $name, $value, $rows, $cols);
	<br />
	&nbsp;&nbsp;&nbsp; $this-&gt;_hiddenText = $hiddentext;
	<br />
	&nbsp;&nbsp;&nbsp; if ( !empty( $this-&gt;htmlEditor ) )
	<br />
	&nbsp;&nbsp;&nbsp; {
	<br />
	&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $options['name'] = $this-&gt;_name;
	<br />
	&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $options['value'] = $this-&gt;_value;
</div>
<p>
	فایل تفییر یافته:
</p>
<div class="xoopsCode">
	function XoopsFormDhtmlTextArea($caption, $name, $value, $rows=5, $cols=50, $hiddentext=&quot;xoopsHiddenText&quot;, $options = array() )
	<br />
	&nbsp;&nbsp;&nbsp; {
	<br />
	&nbsp;&nbsp;&nbsp; $this-&gt;XoopsFormTextArea($caption, $name, $value, $rows, $cols);
	<br />
	&nbsp;&nbsp;&nbsp; $this-&gt;_hiddenText = $hiddentext;
	<br />
	<span style="color:red;">&nbsp;&nbsp;&nbsp; include(XOOPS_ROOT_PATH.&quot;/modules/multieditor/multieditor_include.php&quot;); // multieditor patch!</span>
	<br />
	&nbsp;&nbsp;&nbsp; if ( !empty( $this-&gt;htmlEditor ) )
	<br />
	&nbsp;&nbsp;&nbsp; {
	<br />
	&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $options['name'] = $this-&gt;_name;
	<br />
	&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; $options['value'] = $this-&gt;_value;
</div>
<p>
	<strong>برای نصب در نسخه (Xoops v2.3.0) لطفا راهتمای زیر را با دقت دنبال کنید.</strong>
</p>
<ol>
	<li>این ماژول را در بخش مدیریت نصب کنید </li>
	<li>در مسیر "class/xoopsform/formdhtmltextarea.php" تغییرات زیر را اعمال کنید </li>
</ol>
<p>
	فایل اصلی:
</p>
<div class="xoopsCode">
	function XoopsFormDhtmlTextArea($caption, $name, $value = &quot;&quot;, $rows = 5, $cols = 50, $hiddentext = &quot;xoopsHiddenText&quot;, $options = array() )
	<br />
	&nbsp;&nbsp;&nbsp; {
	<br />
	&nbsp;&nbsp;&nbsp; static $inLoop = 0;
	<br />
	&nbsp;&nbsp;&nbsp; $inLoop ++;
</div>
<p>
	فایل تفییر یافته:
</p>
<div class="xoopsCode">
	function XoopsFormDhtmlTextArea($caption, $name, $value = &quot;&quot;, $rows = 5, $cols = 50, $hiddentext = &quot;xoopsHiddenText&quot;, $options = array() )
	<br />
	&nbsp;&nbsp;&nbsp; {
	<br />
	<span style="color:red;">&nbsp;&nbsp;&nbsp; include(XOOPS_ROOT_PATH.&quot;/modules/multieditor/multieditor_include.php&quot;); // multieditor patch!</span>
	<br />
	&nbsp;&nbsp;&nbsp; static $inLoop = 0;
	<br />
	&nbsp;&nbsp;&nbsp; $inLoop ++;
</div>
