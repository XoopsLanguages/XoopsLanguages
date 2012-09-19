<?php

/**
* $Id: modinfo.php,v 1.1 2008/04/15 11:18:04 kurak_bu Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define('_MI_SPARTNER_ADMENU1', 'Główna');
define('_MI_SPARTNER_ADMENU2', 'Partnerzy');
define('_MI_SPARTNER_ADMENU3', 'Offers');
define('_MI_SPARTNER_ADMENU4', 'Grupy');
define('_MI_SPARTNER_ADMENU5', 'Idź do modułu');

define('_MI_SPARTNER_PARTNERS_NAME', 'SmartPartner');
define('_MI_SPARTNER_PARTNERS_DESC', 'Partners Management System for your XOOPS 2.x site');
define('_MI_SPARTNER_PARTNERS_ADMIN', 'Manage Partners');
define('_MI_SPARTNER_PARTNERS_ADMIN_ADD', 'Add Partner');
define('_MI_SPARTNER_ID', 'ID');
define('_MI_SPARTNER_HITS', 'Hits');
define('_MI_SPARTNER_TITLE', 'Title');
define('_MI_SPARTNER_WEIGHT', 'Weight');
define('_MI_SPARTNER_RECLICK', 'Reclick Time:');
define('_MI_SPARTNER_IMAGES', 'Images');
define('_MI_SPARTNER_TEXT', 'Text Links');
define('_MI_SPARTNER_BOTH', 'Both');
define('_MI_SPARTNER_MLIMIT', 'Limit main page to xx entries: (0 = no limit)');
define('_MI_SPARTNER_MSHOW', 'On main page show:');
define('_MI_SPARTNER_INDEX_SORTBY', 'Sort the main page on :');
define('_MI_SPARTNER_INDEX_SORTBY_DSC', 'Determines display priority');
define('_MI_SPARTNER_INDEX_ORDERBY', 'Order the main page on :');
define('_MI_SPARTNER_INDEX_ORDERBY_DSC', '');
define('_MI_SPARTNER_HOUR', '1 hour');
define('_MI_SPARTNER_3HOURS', '3 hours');
define('_MI_SPARTNER_5HOURS', '5 hours');
define('_MI_SPARTNER_10HOURS', '10 hours');
define('_MI_SPARTNER_DAY', '1 day');

define('_MI_SPARTNER_CAT_FOR_OPT', 'Format options');
define('_MI_SPARTNER_CAT_FOR_OPT_DSC', '');
define('_MI_SPARTNER_CAT_PERM', 'Permissions');
define('_MI_SPARTNER_CAT_PERM_DSC', '');
define('_MI_SPARTNER_CAT_OTHER', 'Other');
define('_MI_SPARTNER_CAT_OTHER_DSC', '');

define('_MI_SPARTNER_BLOCK_PARTNERS_LIST', 'Partners');
define('_MI_SPARTNER_BLOCK_PARTNERS_LIST_DESC', 'Displays a list of partners');

define('_MI_SPARTNER_BLOCK_RANDOM_PARTNER', 'Random partner');
define('_MI_SPARTNER_BLOCK_RANDOM_PARTNER_DESC', 'Display a partner randomly');

define('_MI_SPARTNER_BLOCK_SCROLLING_PARTNER', 'Scrolling partner');
define('_MI_SPARTNER_BLOCK_SCROLLING_PARTNER_DESC', 'Random partner images scroll in the block');

define('_MI_SPARTNER_BLOCK_CATEGORIES_LIST', 'Categories list');
define('_MI_SPARTNER_BLOCK_CATEGORIES_LIST_DESC', 'Block listing categories.');


define('_MI_SPARTNER_PAGE_PARTNER', 'Partners pages');
define('_MI_SPARTNER_PAGE_INDEX', 'Index page');

define("_MI_SPARTNER_ALLOWSUBMIT", "Partner submissions");
define("_MI_SPARTNER_ALLOWSUBMITDSC", "Allow Partner submission on your web site?");

define("_MI_SPARTNER_ANONPOST", "Allow anonymous submission");
define("_MI_SPARTNER_ANONPOSTDSC", "Allow anonymous users submit a partner");

define('_MI_SPARTNER_AUTOAPPROVE', "Auto approve submitted partners");
define('_MI_SPARTNER_AUTOAPPROVE_DSC', "Auto approves submitted partners without admin intervention.");

define('_MI_SPARTNER_PERCAT_USER', "Maximum partners per category (Index page):");
define('_MI_SPARTNER_PERCAT_USER_DSC', "Maximum number of partners per category to be displayed at once per category in the user side.");

define('_MI_SPARTNER_PERPAGE_USER', "Maximum partners per page when viewing a single category:");
define('_MI_SPARTNER_PERPAGE_USER_DSC', "If there is more partners whitin the selected category than this maximum, partners will be displaye on several pages.");

define('_MI_SPARTNER_PERPAGE_ADMIN', "Maximum partners per page (Admin side):");
define('_MI_SPARTNER_PERPAGE_ADMIN_DSC', "Maximum number of partners per page to be displayed at once in the admin side.");

define('_MI_SPARTNER_WELCOMEMSG', 'Welcome message:');
define('_MI_SPARTNER_WELCOMEMSG_DSC', 'Welcome message to be displayed in the index page of the module.');
define('_MI_SPARTNER_WELCOMEMSG_DEF', "Here are the partners of this site. Click on the logo for more information.");

define('_MI_SPARTNER_USEIMAGENAVPAGE', 'Use the image Page Navigation:');
define('_MI_SPARTNER_USEIMAGENAVPAGEDSC', 'If you set this option to "Yes", the Page Navigation will be displayed with image, otherwise, the original Page Naviagation will be used.');

define('_MI_SPARTNER_IMG_MAX_WIDTH', "Maximum width of the partner's logo:");
define('_MI_SPARTNER_IMG_MAX_WIDTH_DSC', "This will be the maximum width of a logo that is uploaded to the module. It will also be the width of the first column in the partners index page.");

define('_MI_SPARTNER_IMG_MAX_HEIGHT', "Maximum height of the partner's logo:");
define('_MI_SPARTNER_IMG_MAX_HEIGHT_DSC', "This will be the maximum height of a logo that is uploaded to the module.");

define('_MI_SPARTNER_HELP_PATH_SELECT', "Path of SmartPartner help files");
define('_MI_SPARTNER_HELP_PATH_SELECT_DSC', "Select from where you would like to access SmartPartner's help files. If you downloaded the 'SmartPartner's Help Package' and uploaded it in 'modules/smartpartner/doc/', you can select 'Inside the module'. Alternatively, you can access the module's help file directly from docs.xoops.org by chosing this in the selector. You can also select 'Custom Path' and specify yourself the path of the help files in the next config option 'Custom path of SmartPartner's help files'");

define('_MI_SPARTNER_HELP_PATH_CUSTOM', "Custom path of SmartPartner's help files");
define('_MI_SPARTNER_HELP_PATH_CUSTOM_DSC', "If you selected 'Custom path' in the previous option 'Path of SmartPartner's help files', please specify the URL of SmartPartner's help files, in that format : http://www.yoursite.com/doc");

define('_MI_SPARTNER_HELP_INSIDE', "Inside the module");
define('_MI_SPARTNER_HELP_CUSTOM', "Custom Path");

define('_MI_SPARTNER_STATS_GROUP', "Display the Statistics block for these groups");
define('_MI_SPARTNER_STATS_GROUP_DSC', "Select the group that will be able to see the statistics blocks in the partner page.");

define("_MI_SPARTNER_HIGHLIGHT_COLOR", "Color used for highlighting searched words");
define("_MI_SPARTNER_HIGHLIGHT_COLORDSC", "");

define("_MI_SPARTNER_HIDE_MOD_NAME", "Hide module's name in the user's pages");
define("_MI_SPARTNER_HIDE_MOD_NAMEDSC", "");

define("_MI_SPARTNER_MAX_SIZE", "Maximum size of partner attached files");
define("_MI_SPARTNER_MAX_SIZEDSC", "");

define("_MI_SPARTNER_ALLOWED_EXT", "Allowed extensions for file upload");
define("_MI_SPARTNER_ALLOWED_EXT_DSC", "Enter the alowed extensions, separated by '|', without dot(.) for uploaded files to attach to a partner.");

// Text for notifications
define('_MI_SPARTNER_GLOBAL_PARTNER_NOTIFY', "Global partner");
define('_MI_SPARTNER_GLOBAL_PARTNER_NOTIFY_DSC', "Notification options that apply to all partners.");

define('_MI_SPARTNER_PARTNER_NOTIFY', "Partner");
define('_MI_SPARTNER_PARTNER_NOTIFY_DSC', "Notification options that apply to the current partner.");

define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY', "Partner submitted");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_CAP', "Notify me when any partner is submitted and is awaiting approval.");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_DSC', "Receive notification when any partner is submitted and is waiting approval.");
define('_MI_SPARTNER_GLOBAL_PARTNER_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notify : New partner submitted");

define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY', "Partner approved");
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_CAP', "Notify me when this partner is approved.");
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_DSC', "Receive notification when this partner is approved.");
define('_MI_SPARTNER_PARTNER_APPROVED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} auto-notify : Partner approved");

define("_MI_SPARTNER_GLOBAL_PARTNER_NEW_NOTIFY", "New partner");
define("_MI_SPARTNER_GLOBAL_PARTNER_NEW_NOTIFY_CAP", "Notify me when any new partner is published.");
define("_MI_SPARTNER_GLOBAL_PARTNER_NEW_NOTIFY_DSC", "");
define("_MI_SPARTNER_GLOBAL_PARTNER_NEW_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New partner published");

define("_MI_SPARTNER_GLOBAL_OFFER_NEW_NOTIFY", "New offer");
define("_MI_SPARTNER_GLOBAL_OFFER_NEW_NOTIFY_CAP", "Notify me when any new offer is published.");
define("_MI_SPARTNER_GLOBAL_OFFER_NEW_NOTIFY_DSC", "");
define("_MI_SPARTNER_GLOBAL_OFFER_NEW_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New offer published");



// About.php constants
define('_MI_SPARTNER_AUTHOR_INFO', "Developers");
define('_MI_SPARTNER_DEVELOPER_LEAD', "Lead developer(s)");
define('_MI_SPARTNER_DEVELOPER_CONTRIBUTOR', "Contributor(s)");
define('_MI_SPARTNER_DEVELOPER_WEBSITE', "Website");
define('_MI_SPARTNER_DEVELOPER_EMAIL', "Email");
define('_MI_SPARTNER_DEVELOPER_CREDITS', "Credits");
define('_MI_SPARTNER_DEMO_SITE', "SmartFactory Demo Site");
define('_MI_SPARTNER_MODULE_INFO', "Module Developpment Informations");
define('_MI_SPARTNER_MODULE_STATUS', "Status");
define('_MI_SPARTNER_MODULE_RELEASE_DATE', "Release date");
define('_MI_SPARTNER_MODULE_DEMO', "Demo Site");
define('_MI_SPARTNER_MODULE_SUPPORT', "Official support site");
define('_MI_SPARTNER_MODULE_BUG', "Report a bug for this module");
define('_MI_SPARTNER_MODULE_SUBMIT_BUG', "Submit a bug");
define('_MI_SPARTNER_MODULE_FEATURE', "Suggest a new feature for this module");
define('_MI_SPARTNER_MODULE_SUBMIT_FEATURE', "Request a feature");
define('_MI_SPARTNER_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_SPARTNER_AUTHOR_WORD', "The Author's Word");
define('_MI_SPARTNER_VERSION_HISTORY', "Version History");
define('_MI_SPARTNER_BY', "By");

// Beta
define('_MI_SPARTNER_WARNING_BETA', "This module comes as is, without any guarantees whatsoever.
This module is BETA, meaning it is still under active development. This release is meant for
<b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live
website or in a production environment.");

// RC
define('_MI_SPARTNER_WARNING_RC', "This module comes as is, without any guarantees whatsoever. This module
is a Release Candidate and should not be used on a production web site. The module is still under
active development and its use is under your own responsibility, which means the author is not responsible.");

// Final
define('_MI_SPARTNER_WARNING_FINAL', "This module comes as is, without any guarantees whatsoever. Although this
module is not beta, it is still under active development. This release can be used in a live website
or a production environment, but its use is under your own responsibility, which means the author
is not responsible.");

//added with categories
define('_MI_SPARTNER_CATEGORIES', "Categories");
define("_MI_SSPARTNER_MAX_SIZEDSC", "Maximum size (in bytes) of a image that can be uploaded.");
define("_MI_SSPARTNER_MAX_SIZE", "Maximum image size");
define("_MI_SPARTNER_ORPHAN_FIRST", "Display orphan partners first?");
define("_MI_SPARTNER_ORPHAN_FIRST_DSC", "If you select 'Yes', the partners wich don't belong to any category will be displayed before the categories and their content in the index page.");

define("_MI_SPARTNER_SORT", "Sort offers by");
define("_MI_SPARTNER_SORT_DSC", "");
define("_MI_SPARTNER_SORT_WEIGHT", "Weight");
define("_MI_SPARTNER_SORT_DATE_PUB", "Publication date");
define("_MI_SPARTNER_SORT_DATE_END", "Expiration date");
define("_MI_SPARTNER_SORT_HITS", "Hits");
define("_MI_SPARTNER_SORT_ALPHA", "Alphbetically");
define("_MI_SPARTNER_ORDER", "Offers ordering");
define("_MI_SPARTNER_ORDER_DSC", "");
define("_MI_SPARTNER_ORDER_ASC", "Ascending");
define("_MI_SPARTNER_ORDER_DESC", "Descending");
define("_MI_SPARTNER_UPDATE_PERIOD", "Updated status period");
define("_MI_SPARTNER_UPDATE_PERIODDSC", "Number of days a partner remains 'new' or 'updated'.");
define("_MI_SPARTNER_BLOCK_PARTNERS_RECENT", "Recent Partners");
define("_MI_SPARTNER_BLOCK_PARTNERS_RECENT_DESC", "");
define("_MI_SPARTNER_BLOCK_OFFERS_RECENT", "Recent Offers");
define("_MI_SPARTNER_BLOCK_OFFERS_RECENT_DESC", "");
define("_MI_SPARTNER_BLOCK_OFFERS_RANDOM", "Random Offers");
define("_MI_SPARTNER_BLOCK_OFFERS_RANDOM_DESC", "");
define("_MI_SPARTNER_PARTVIEW_MSG", "Message for partial view");
define("_MI_SPARTNER_PARTVIEW_MSG_DSC", "Message that will be displayed to visitors with partial view permission instead of partner's extended info");
define("_MI_SPARTNER_PARTVIEW_MSG_DEF", "To learn more, register for free and without obligation and then log in");
define("_MI_SPARTNER_DEF_FULL", "Default full view");
define("_MI_SPARTNER_DEF_FULL_DSC", "");
define("_MI_SPARTNER_DEF_PART", "Default partial view");
define("_MI_SPARTNER_DEF_PART_DSC", "");



?>