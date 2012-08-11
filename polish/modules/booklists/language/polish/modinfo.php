<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:56:03 dap997 Exp $
// $Id: modinfo.php,v 1.1 2007/02/10 18:56:03 dap997 Exp $
// Module Info

// The name of this module
define("_MI_booklists_NAME","Book Lists");

// A brief description of this module
define("_MI_booklists_DESC","Creates a book list section where users can search/submit/rate various book titles.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_booklists_BNAME1","Recent Books");
define("_MI_booklists_BNAME2","Top Books");

// Sub menu titles
define("_MI_booklists_SMNAME1","Submit");
define("_MI_booklists_SMNAME2","Popular");
define("_MI_booklists_SMNAME3","Top Rated");

// Names of admin menu items
define("_MI_booklists_ADMENU2","Add/Edit Titles");
define("_MI_booklists_ADMENU3","Submitted Titles");
define("_MI_booklists_ADMENU4","Missing Titles");
define("_MI_booklists_ADMENU5","Modified Titles");
define("_MI_booklists_ADMENU6","Title Checker");

// Title of config items
define('_MI_booklists_POPULAR','Select the number of hits for books to be marked as popular');
define('_MI_booklists_NEWLINKS','Select the maximum number of new books displayed on top page');
define('_MI_booklists_PERPAGE','Select the maximum number of books displayed in each page');
define('_MI_booklists_USESHOTS','Select yes to display cover images for each book');
define('_MI_booklists_USEFRAMES','Would you like to display the book info page withing a frame?');
define('_MI_booklists_SHOTWIDTH','Maximum allowed width of each book cover image');
define('_MI_booklists_ANONPOST','Allow anonymous users to post links?');
define('_MI_booklists_AUTOAPPROVE','Auto approve new titles without admin intervention?');

// Description of each config items
define('_MI_booklists_POPULARDSC','');
define('_MI_booklists_NEWLINKSDSC','');
define('_MI_booklists_PERPAGEDSC','');
define('_MI_booklists_USEFRAMEDSC','');
define('_MI_booklists_USESHOTSDSC','');
define('_MI_booklists_SHOTWIDTHDSC','');
define('_MI_booklists_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_booklists_GLOBAL_NOTIFY','Global');
define('_MI_booklists_GLOBAL_NOTIFYDSC','Global lists notification options.');

define('_MI_booklists_CATEGORY_NOTIFY','Category');
define('_MI_booklists_CATEGORY_NOTIFYDSC','Notification options that apply to the current book list category.');

define('_MI_booklists_LINK_NOTIFY','Book List');
define('_MI_booklists_LINK_NOTIFYDSC','Notification options that aply to the current book title.');

define('_MI_booklists_GLOBAL_NEWCATEGORY_NOTIFY','New Category');
define('_MI_booklists_GLOBAL_NEWCATEGORY_NOTIFYCAP','Notify me when a new book category is created.');
define('_MI_booklists_GLOBAL_NEWCATEGORY_NOTIFYDSC','Receive notification when a new book category is created.');
define('_MI_booklists_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New book category');

define('_MI_booklists_GLOBAL_LINKMODIFY_NOTIFY','Modify Book Title Requested');
define('_MI_booklists_GLOBAL_LINKMODIFY_NOTIFYCAP','Notify me of any book title modification request.');
define('_MI_booklists_GLOBAL_LINKMODIFY_NOTIFYDSC','Receive notification when any book title modification request is submitted.');
define('_MI_booklists_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Book Title Modification Requested');

define('_MI_booklists_GLOBAL_LINKBROKEN_NOTIFY','Missing title Submitted');
define('_MI_booklists_GLOBAL_LINKBROKEN_NOTIFYCAP','Notify me of any missing title report.');
define('_MI_booklists_GLOBAL_LINKBROKEN_NOTIFYDSC','Receive notification when any missing title report is submitted.');
define('_MI_booklists_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Missing Title Reported');

define('_MI_booklists_GLOBAL_LINKSUBMIT_NOTIFY','New Book Submitted');
define('_MI_booklists_GLOBAL_LINKSUBMIT_NOTIFYCAP','Notify me when any new book is submitted (awaiting approval).');
define('_MI_booklists_GLOBAL_LINKSUBMIT_NOTIFYDSC','Receive notification when any new book is submitted (awaiting approval).');
define('_MI_booklists_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New book submitted');

define('_MI_booklists_GLOBAL_NEWLINK_NOTIFY','New Book');
define('_MI_booklists_GLOBAL_NEWLINK_NOTIFYCAP','Notify me when any new book is posted.');
define('_MI_booklists_GLOBAL_NEWLINK_NOTIFYDSC','Receive notification when any new book is posted.');
define('_MI_booklists_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New Book');

define('_MI_booklists_CATEGORY_LINKSUBMIT_NOTIFY','New Book Submitted');
define('_MI_booklists_CATEGORY_LINKSUBMIT_NOTIFYCAP','Notify me when a new book is submitted (awaiting approval) to the current category.');
define('_MI_booklists_CATEGORY_LINKSUBMIT_NOTIFYDSC','Receive notification when a new book is submitted (awaiting approval) to the current category.');
define('_MI_booklists_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New book submitted in category');

define('_MI_booklists_CATEGORY_NEWLINK_NOTIFY','New Book');
define('_MI_booklists_CATEGORY_NEWLINK_NOTIFYCAP','Notify me when a new book is posted to the current category.');
define('_MI_booklists_CATEGORY_NEWLINK_NOTIFYDSC','Receive notification when a new book is posted to the current category.');
define('_MI_booklists_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New book in category');

define('_MI_booklists_LINK_APPROVE_NOTIFY','Book Title Approved');
define('_MI_booklists_LINK_APPROVE_NOTIFYCAP','Notify me when this book title is approved.');
define('_MI_booklists_LINK_APPROVE_NOTIFYDSC','Receive notification when this book title is approved.');
define('_MI_booklists_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : Book Title approved');

?>
