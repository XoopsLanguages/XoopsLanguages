<?php

/**
* $Id: modinfo.php,v 1.1 2007/02/10 18:55:57 dap997 Exp $
* Module: SmartClient
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define('_MI_SCLIENT_ADMENU1','Index');
define('_MI_SCLIENT_ADMENU2','Clients');
define('_MI_SCLIENT_ADMENU3','Blocks');
define('_MI_SCLIENT_ADMENU4','Groups');
define('_MI_SCLIENT_ADMENU5','Got to module');

define('_MI_SCLIENT_CLIENTS_NAME','SmartClient');
define('_MI_SCLIENT_CLIENTS_DESC','Clients Management System for your XOOPS 2.x site');
define('_MI_SCLIENT_CLIENTS_ADMIN','Manage Clients');
define('_MI_SCLIENT_CLIENTS_ADMIN_ADD','Add Client');
define('_MI_SCLIENT_ID','ID');
define('_MI_SCLIENT_HITS','Hits');
define('_MI_SCLIENT_TITLE','Title');
define('_MI_SCLIENT_WEIGHT','Weight');
define('_MI_SCLIENT_RECLICK','Reclick Time:');
define('_MI_SCLIENT_IMAGES','Images');
define('_MI_SCLIENT_TEXT','Text Links');
define('_MI_SCLIENT_BOTH','Both');
define('_MI_SCLIENT_MLIMIT','Limit main page to xx entries: (0 = no limit)');
define('_MI_SCLIENT_MSHOW','On main page show:');
define('_MI_SCLIENT_INDEX_SORTBY','Sort the main page on :');
define('_MI_SCLIENT_INDEX_SORTBY_DSC','');
define('_MI_SCLIENT_INDEX_ORDERBY','Order the main page on :');
define('_MI_SCLIENT_INDEX_ORDERBY_DSC','');
define('_MI_SCLIENT_HOUR','1 hour');
define('_MI_SCLIENT_3HOURS','3 hours');
define('_MI_SCLIENT_5HOURS','5 hours');
define('_MI_SCLIENT_10HOURS','10 hours');
define('_MI_SCLIENT_DAY','1 day');

define('_MI_SCLIENT_BLOCK_CLIENTS_LIST','Clients');
define('_MI_SCLIENT_BLOCK_CLIENTS_LIST_DESC','Displays a list of clients');

define("_MI_SCLIENT_ALLOWSUBMIT","Client submissions");
define("_MI_SCLIENT_ALLOWSUBMITDSC","Allow Client submission on your web site ?");

define("_MI_SCLIENT_ANONPOST","Allow anonymous submission");
define("_MI_SCLIENT_ANONPOSTDSC","Allow anonymous users submit a client");

define('_MI_SCLIENT_AUTOAPPROVE',"Auto approve submitted clients");
define('_MI_SCLIENT_AUTOAPPROVE_DSC',"Auto approves submitted clients without admin intervention.");

define('_MI_SCLIENT_PERPAGE_USER',"Maximum clients per page (User side):");
define('_MI_SCLIENT_PERPAGE_USER_DSC',"Maximum number of clients per page to be displayed at once in the user side.");

define('_MI_SCLIENT_PERPAGE_ADMIN',"Maximum clients per page (Admin side):");
define('_MI_SCLIENT_PERPAGE_ADMIN_DSC',"Maximum number of clients per page to be displayed at once in the admin side.");

define('_MI_SCLIENT_WELCOMEMSG','Welcome message:');
define('_MI_SCLIENT_WELCOMEMSG_DSC','Welcome message to be displayed in the index page of the module.');
define('_MI_SCLIENT_WELCOMEMSG_DEF',"Here are the clients of this site. Click on the logo for more informations."); 

define('_MI_SCLIENT_USEIMAGENAVPAGE','Use the image Page Navigation:');
define('_MI_SCLIENT_USEIMAGENAVPAGEDSC','If you set this option to "Yes", the Page Navigation will be displayed with image, otherwise, the original Page Naviagation will be used.');

define('_MI_SCLIENT_IMG_MAX_WIDTH',"Maximum width of the client's logo:");
define('_MI_SCLIENT_IMG_MAX_WIDTH_DSC',"This will be the maximum width of a logo that is uploaded to the module. It will also be the width of the first column in the clients index page.");

define('_MI_SCLIENT_IMG_MAX_HEIGHT',"Maximum height of the client's logo:");
define('_MI_SCLIENT_IMG_MAX_HEIGHT_DSC',"This will be the maximum height of a logo that is uploaded to the module.");

define('_MI_SCLIENT_HELP_PATH_SELECT',"Path of SmartClient help files");
define('_MI_SCLIENT_HELP_PATH_SELECT_DSC',"Select from where you would like to access SmartClient's help files. If you downloaded the 'SmartClient's Help Package' and uploaded it in 'modules/smartclient/doc/', you can select 'Inside the module'. Alternatively, you can access the module's help file directly from docs.xoops.org by chosing this in the selector. You can also select 'Custom Path' and specify yourself the path of the help files in the next config option 'Custom path of SmartClient's help files'");

define('_MI_SCLIENT_HELP_PATH_CUSTOM',"Custom path of SmartClient's help files");
define('_MI_SCLIENT_HELP_PATH_CUSTOM_DSC',"If you selected 'Custom path' in the previous option 'Path of SmartClient's help files', please specify the URL of SmartClient's help files, in that format : http://www.yoursite.com/doc");

define('_MI_SCLIENT_HELP_INSIDE',"Inside the module");
define('_MI_SCLIENT_HELP_CUSTOM',"Custom Path");

define('_MI_SCLIENT_STATS_GROUP',"Display the Statistics block for these groups");
define('_MI_SCLIENT_STATS_GROUP_DSC',"Select the group that will be able to see the statistics blocks in the client page.");

define('_MI_SCLIENT_BACKTOINDEX',"Display the 'Back to clients index' link");
define('_MI_SCLIENT_BACKTOINDEX_DSC',"Select 'Yes' to display the 'Back to clients index' link on the client's page.");

define("_MI_SCLIENT_HIGHLIGHT_COLOR","Color used for highlighting searched words");
define("_MI_SCLIENT_HIGHLIGHT_COLORDSC","");

define("_MI_SCLIENT_HIDE_MOD_NAME","Hide module's name in the user's pages");
define("_MI_SCLIENT_HIDE_MOD_NAMEDSC","");

// Text for notifications
define('_MI_SCLIENT_GLOBAL_CLIENT_NOTIFY',"Global client");
define('_MI_SCLIENT_GLOBAL_CLIENT_NOTIFY_DSC',"Notification options that apply to all clients.");

define('_MI_SCLIENT_CLIENT_NOTIFY',"Client");
define('_MI_SCLIENT_CLIENT_NOTIFY_DSC',"Notification options that apply to the current client.");

define('_MI_SCLIENT_GLOBAL_CLIENT_SUBMITTED_NOTIFY',"Client submitted");
define('_MI_SCLIENT_GLOBAL_CLIENT_SUBMITTED_NOTIFY_CAP',"Notify me when any client is submitted and is awaiting approval.");
define('_MI_SCLIENT_GLOBAL_CLIENT_SUBMITTED_NOTIFY_DSC',"Receive notification when any client is submitted and is waiting approval.");
define('_MI_SCLIENT_GLOBAL_CLIENT_SUBMITTED_NOTIFY_SBJ',"[{X_SITENAME}] {X_MODULE} auto-notify : New client submitted");

define('_MI_SCLIENT_CLIENT_APPROVED_NOTIFY',"Client approved");
define('_MI_SCLIENT_CLIENT_APPROVED_NOTIFY_CAP',"Notify me when this client is approved.");   
define('_MI_SCLIENT_CLIENT_APPROVED_NOTIFY_DSC',"Receive notification when this client is approved.");      
define('_MI_SCLIENT_CLIENT_APPROVED_NOTIFY_SBJ',"[{X_SITENAME}] {X_MODULE} auto-notify : Client approved"); 


// About.php constants
define('_MI_SCLIENT_AUTHOR_INFO',"Developers");
define('_MI_SCLIENT_DEVELOPER_LEAD',"Lead developer(s)");
define('_MI_SCLIENT_DEVELOPER_CONTRIBUTOR',"Contributor(s)");
define('_MI_SCLIENT_DEVELOPER_WEBSITE',"Website");
define('_MI_SCLIENT_DEVELOPER_EMAIL',"Email");
define('_MI_SCLIENT_DEVELOPER_CREDITS',"Credits");
define('_MI_SCLIENT_DEMO_SITE',"SmartFactory Demo Site");
define('_MI_SCLIENT_MODULE_INFO',"Module Developpment Informations");
define('_MI_SCLIENT_MODULE_STATUS',"Status");
define('_MI_SCLIENT_MODULE_RELEASE_DATE',"Release date");
define('_MI_SCLIENT_MODULE_DEMO',"Demo Site");
define('_MI_SCLIENT_MODULE_SUPPORT',"Official support site");
define('_MI_SCLIENT_MODULE_BUG',"Report a bug for this module");
define('_MI_SCLIENT_MODULE_SUBMIT_BUG',"Submit a bug");
define('_MI_SCLIENT_MODULE_FEATURE',"Suggest a new feature for this module");
define('_MI_SCLIENT_MODULE_SUBMIT_FEATURE',"Request a feature");
define('_MI_SCLIENT_MODULE_DISCLAIMER',"Disclaimer");
define('_MI_SCLIENT_AUTHOR_WORD',"The Author's Word");
define('_MI_SCLIENT_VERSION_HISTORY',"Version History");
define('_MI_SCLIENT_BY',"By");

// Beta
define('_MI_SCLIENT_WARNING_BETA',"This module comes as is, without any guarantees whatsoever. 
This module is BETA, meaning it is still under active development. This release is meant for
<b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live 
website or in a production environment.");

// RC
define('_MI_SCLIENT_WARNING_RC',"This module comes as is, without any guarantees whatsoever. This module 
is a Release Candidate and should not be used on a production web site. The module is still under 
active development and its use is under your own responsibility, which means the author is not responsible.");

// Final
define('_MI_SCLIENT_WARNING_FINAL',"This module comes as is, without any guarantees whatsoever. Although this 
module is not beta, it is still under active development. This release can be used in a live website 
or a production environment, but its use is under your own responsibility, which means the author 
is not responsible.");

?>