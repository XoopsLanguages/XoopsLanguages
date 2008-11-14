<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: xoopsinfo 2.0
* Licence : GPL
* Authors :
*              - Jmorris
*              - Marco
*              - Christian
*              - DuGris (http://www.dugris.info)
*/
?>
<h2>Please read before posting a support request at <a href="http://xoops.org/" target="_blank">xoops.org</a></h2>
<p>Before posting please do a search on Xoops.org using the site's <a href="http://xoops.org/search.php" target="_blank">Search feature</a> with appropriate "keywords" and find out if the subject has been dealt with before. Also look through the <a href="http://xoops.org/modules/smartfaq/" target="_blank">FAQ’s</a>, especially if you're unsure what search words to use.</p>
<p><b>Q:</b> I couldn’t find any related issues by searching what next? <br />
<br />
<b>A:</b> Please use an effective title for the post; this assists other users to answer you who have had a similar problem. Many users will not be attracted to a "please help me I have a problem" title. A relevant title also helps other users find solutions to their problems. <br />
<br />
Posts like "I have a blank page" will generally be ignored. Not because we don’t want to help, but because we can’t with such a small amount of information. <br />
<br />
The best way to start your request for support is to use a clear, descriptive title and to explain the problems you are having in as much detail as possible. If you are having problems with a module and/or theme, be sure to list the name and version of the module and/or theme.</p>
<p><b><i>The following information will be useful for people who are trying to assist you. Please make sure to include it in your post.</i></b></p>
<?php
OpenTable();
echo ('<li><strong>Website URL : </strong>'.XOOPS_URL.'</li>');
echo ('<li><strong>XOOPS Version : </strong>'.XOOPS_VERSION.'</li>');
echo ('<li><strong>XOOPS Theme : </strong>'.$xoopsConfig['theme_set'].'</li>');
echo ('<li><strong>XOOPS Template Set : </strong>'.$xoopsConfig['template_set'].'</li>');
echo ('<li><strong>PHP Version : </strong>'.phpversion().'</li>');
echo ('<li><strong>MySQL Version : </strong>');
$result = mysql_query("SELECT VERSION()");
list($mysql_version) = mysql_fetch_row($result);
echo $mysql_version;
mysql_free_result($result);
echo ('</li>');
echo ('<li><strong>Server Software : </strong>'.$_SERVER['SERVER_SOFTWARE'].'</li>');
echo ('<li><strong>User\'s Browser : </strong>'.$_SERVER['HTTP_USER_AGENT'].'</li>');
CloseTable();
?>
<p><b>Turn on debug:</b><br />
To switch on debug, go to system admin-->preferences and then general settings. You will see a "Debug mode" field. Choose "PHP Debug". Then go to the page that has problems and copy and paste any error messages under php-debug messages in the template below. Do this for each debug type (PHP, MySQL, Smarty). <br />
<br />
PHP Debug Messages:<br />
MySQL Debug Messages:<br />
Smarty Debug Messages:<br />
</p>
<p><b><i>The following template should serve as a solid guideline for how to request support.</i></b></p>
<?php
OpenTable();
?>
<p>Title: Clear and descriptive title <br />
<br />
Description: A detailed description of the problem you are having. Please include as much information as possible regarding what you were doing right before the problem happened and any steps you have taken to resolve the problem. <br />
<br />
Make sure you include as much of the following technical information as possible in your post. Without this information it will be very difficult to provide support for you. <br />
<br />
Website URL:<br />
XOOPS Version:<br />
Theme you are using:<br />
Template Set you are using:<br />
Module Name and Version:<br />
PHP Version:<br />
MySQL Version:<br />
Server Software:<br />
Operating System:<br />
Browser Information<br />
PHP Debug Messages:<br />
MySQL Debug Messages:<br />
Smarty Debug Messages:<br />
</p>
<?php
CloseTable();
?>
<p><b><i>XOOPS Info File version 1.2</i></b><br />
Last Updated: Saturday, September 11th, 2006<br />
By: XOOPS Support Team</p>