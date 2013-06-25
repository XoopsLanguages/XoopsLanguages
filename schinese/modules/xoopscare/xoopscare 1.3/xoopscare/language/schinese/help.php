<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> is a module who's goal is to help you to maintain your website easily and <b>automatically</b>.
Even if we have made everything we could to have the best module, <b>use this module at your own risk !</b>

With the module you can :
1/ Maintain your database
2/ Run you own queries
3/ Execute Php code
4/ Clean templates_c and cache folders
5/ Remove spammed comments
6/ Clean sessions

For each of this actions, you can define if you want to do it or not and when to do it (you can schedule it).

Additionally, you can log all the actions made by the module and (if you have them), use CRONs to maintain you site.

If you have the possibility to call the module with a CRON, then simply call the file named <i>cron.php</i> present
at the module's root and pass it a password you have typed in the module's administration.
	Do it like this : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>If you use a cron and don't type a password, the module will not do anything</b>, this is just to protect
your site from people who could use it.

If you don't have the possibility to use a CRON then activate the module's block somewhere on your site (where
you want), and the module will automatically and when it's necessary, do the tasks you scheduled.
Tip : You can use a cache on the block.

The first thing to do is to go in the module's administration and to set the preferences.
In the first part <b>General Preferences</b>, set the CRON password if you use CRON.
If you want to create a log file, then fill the zone called <i>Log File</i>.
Note, it is recommended, for security reasons, to give this filename a <u>.php</u> extension.

In the part called <b>Database Maintenance</b>, type a delay in days to maintain your database.
If you set this delay to 0 then nothing will be done.
The process of this action is to check, repair, analyse and optimize all the tables used by your Xoops site.


In the part called <b>Queries</b>, first type an execution's delay then (but only if you need it), type some
SQL queries to run against your database.
Note, the module does not apply anything to your queries, it takes them one by one and execute it.

You can do the same thing than in the previous point but to execute some Php code in the part called <b>Php code</b>

The part called <b>Cache and Templates_c</b> gives you the possibility to clean the cache and templates_c folder
(folders at the root of your site)

The <b>Sessions</b> part will give you the possibility to clean your Mysql session's table at a given delay.


Finally, with the part called <b>Spammed comments</b>, you can remove all the spam from your comments.
This functionality of the module runs with the Xoops <i>Word Censoring Options</i>.
First, from the <i>Site Preferences</i>, you must Enable censoring of unwanted words, type some words to censor and
select a word to replace with.
By default, censored words are replaced by #OOPS#.
The XoopsCare module will search for comments containing this replacement in the comment's titles and/or comment's content
and will apply your preferences on this comments.
Additionally, the module can extract the spammer's IPs (from the comments) and automatically add their IPs to your ban list.
Finally, you can select what to do with the comments detected as SPAM, you can keep them, unpublish them, hide them and
delete them.


If you use a CRON to clean your site, then the delay entered for each action is not used but this delay must be greater than 0.

<a href="http://www.instant-zero.com" target="_blank">Let us know if you like this module</a>

endhelp;
?>
