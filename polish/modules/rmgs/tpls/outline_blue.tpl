<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title><{$page_title}></title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
body {
	background-color: #000000;
}
.main{ border: 6px solid #ffffff; background: url(tpls/outline_blue/bg_outline_blue.gif) repeat; }
.main td{ padding: 6px; color: #000000; }
.imagen{ border: 1px solid #FFFFFF; }
.banner{ padding: 6px; text-align:center; }
.banner img{ border: 0px; }
.modname{ font-size: 12px; font-weight: bold; color: #000000; text-decoration: underline; }
.imagename{ font-size: 14px; color: #000000; font-weight: bold; }
h1{ font-family: "Trebuchet MS", Arial, Helvetica, sans-serif; color: #FFFFFF; }
.texto{ border: 1px solid #000000; padding: 6px; background-color: #FFFFFF; color: #000000; font-size: 16px; font-family: "Monotype Corsiva", Arial, Helvetica, sans-serif; }
.sender{ font-size: 14px; font-weight: bold; color: #000000; }
.sendermail{ color: #000000; text-decoration: underline; }
.copy{ color: #FFFFFF; font-size: 10px; text-align: center; padding: 6px; }
.copy a{ color: #00CCFF; text-decoration: none; }
.copy a:hover{ color: #FFCC00; text-decoration: underline; }
-->
</style></head>

<body>
<div class="banner"><!-- Banner de XOOPS México //-->
			<script language='JavaScript' type='text/javascript' src='http://ads.xoops-mexico.net/adx.js'></script>
<script language='JavaScript' type='text/javascript'>
<!--
   if (!document.phpAds_used) document.phpAds_used = ',';
   phpAds_random = new String (Math.random()); phpAds_random = phpAds_random.substring(2,11);
   
   document.write ("<" + "script language='JavaScript' type='text/javascript' src='");
   document.write ("http://ads.xoops-mexico.net/adjs.php?n=" + phpAds_random);
   document.write ("&amp;what=zone:1&amp;target=_blank");
   document.write ("&amp;exclude=" + document.phpAds_used);
   if (document.referrer)
      document.write ("&amp;referer=" + escape(document.referrer));
   document.write ("'><" + "/script>");
//-->
</script><noscript><a href='http://ads.xoops-mexico.net/adclick.php?n=a27b982e' target='_blank'><img src='http://ads.xoops-mexico.net/adview.php?what=zone:1&amp;n=a27b982e' border='0' alt=''></a></noscript>
<!-- Fin de Banner de XOOPS México //--></div>
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
	<tr>
		<td align="center" valign="top">
		<a href="<{$rmgs_tpl_redirect}>"><img class="imagen" src="<{$rmgs_tpl_image}>" /></a>
		<br /><br />
		<a href="<{$rmgs_tpl_redirect}>" class="imagename"><{$rmgs_tpl_imagename}></a><br /><br />
		<a href="<{$module_url}>" class="modname"><{$module_name}></a>		</td>
		<td valign="top"><img src="<{$module_url}>/tpls/outline_blue/mail_blue.png" align="right" border="0" />
		<h1><{$rmgs_tpl_titulo}></h1>
		<br />
		<div class="texto"><{$rmgs_tpl_text}></div><br />
		<br /><strong style="color: #FFFFFF;">Wysłane przez:</strong><br />
		<span class="sender"><{$rmgs_tpl_sendername}></span><br />
		<span class="sendermail"><{$rmgs_tpl_sendermail}></span>
		</td>
	</tr>
</table>
<div class="copy">Powered by <a href="http://www.xoops-mexico.net">RMSOFT Gallery System 2.0</a>. Development by <a href="http://www.redmexico.com.mx">Red México Soft</a>.</div>
</body>
</html>
