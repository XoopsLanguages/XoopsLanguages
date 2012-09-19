<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title><{$page_title}></title>
<style type="text/css">
<!--
body {
	background-color: #0099CC;
	font-family: Arial, Helvetica, sans-serif;
}
.main{ border: 4px solid #FFFFFF; }
.main td{ font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000; padding: 8px; background-color: #FFCC00; background: url(tpls/outline/bg_outline.gif) repeat; }
h1{ font-weight: bold; color: #006666; font-family: Arial, Helvetica, sans-serif; }
.sobre{ margin-right: 20px; }
.texto{ font-size: 12px; font-family: Geneva, Arial, Helvetica, sans-serif; line-height: 1.5em; }
.sendername{ font-size: 14px; font-weight: bold; color: #990000; }
.sendermail{ font-size: 12px; font-weight: bold; color: #990000; }
.modulename{ color: #000000; font-weight: bold; text-decoration: underline; }
.banner{ padding: 6px; }
.banner img{ text-decoration: none; border: 0px; }
.copy{ font-size: 11px; text-align: center; color: #FFFFFF; padding: 6px; }
.copy a{ font-weight: normal; text-decoration: underline; color: #FFFFFF; }
.copy a:hover{ color: #FFCC00; text-decoration: none; }
-->
</style></head>

<body>
<div align="center" class="banner"><!-- Banner de XOOPS México //-->
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
<table class="main" width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td align="left" valign="top"><img src="<{$module_url}>/tpls/outline/mail_outline.gif" width="49" height="46" align="left" class="sobre" />
		<h1><{$rmgs_tpl_titulo}></h1><br />
		<span class="texto"><{$rmgs_tpl_text}></span><br /><br /><br />
		<strong>Wysłane przez:</strong><br />
		<span class="sendername"><{$rmgs_tpl_sendername}></span><br />
		<span class="sendermail"><{$rmgs_tpl_sendermail}></span></td>
		<td align="center" valign="top">
		<a href="<{$rmgs_tpl_redirect}>"><img src="<{$rmgs_tpl_image}>" style="border: 3px solid #FFFFFF;"></a><br /><br />
		<{$rmgs_tpl_imagename}><br /><br />
		<a href="<{$module_url}>" class="modulename"><{$module_name}></a>
		</td>
	</tr>
</table>
<div class="copy">Powered By <a href="http://www.xoops-mexico.net">RMSOFT Gallery System</a> 2.0. Design by <a href="http://www.redmexico.com.mx">Red México Soft</a></div>
</body>
</html>
