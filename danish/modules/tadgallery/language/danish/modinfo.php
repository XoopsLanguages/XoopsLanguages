<?php
//  ------------------------------------------------------------------------ //
// This module was written by Tad
// Release date: 2008-03-23
// $Id: modinfo.php,v 1.3 2008/05/05 03:22:37 tad Exp $
// ------------------------------------------------------------------------- //

define("_MI_TADGAL_NAME","Digital photo album");
define("_MI_TADGAL_AUTHOR","Tad");
define("_MI_TADGAL_CREDITS","tad");
define("_MI_TADGAL_DESC","This module is an easy to use digital photo album");
define("_MI_TADGAL_ADMENU1","Photo management");
define("_MI_TADGAL_ADMENU2","Category management");
define("_MI_TADGAL_ADMENU3","Best Photos management");
define("_MI_TADGAL_ADMENU4","Module update");
define("_MI_TADGAL_ADMENU5","Generate media RSS");
define("_MI_TADGAL_ADMENU6","Batch management");
define("_MI_TADGAL_TEMPLATE_DESC1","Album template");
define("_MI_TADGAL_TEMPLATE_DESC2","Single photo template");
define("_MI_TADGAL_TEMPLATE_DESC3","Slideshow template");
define("_MI_TADGAL_TEMPLATE_DESC4","Album template for uploader");
define("_MI_TADGAL_TEMPLATE_DESC5","Album template");

define("_MI_TADGAL_BNAME1","Photo scrollbar");
define("_MI_TADGAL_BDESC1","A block that scrolls photos up or down");
define("_MI_TADGAL_BNAME2","Switch photo");
define("_MI_TADGAL_BDESC2","Switchable photos");
define("_MI_TADGAL_BNAME3","Photo slideshow");
define("_MI_TADGAL_BDESC3","One by one slide show");
define("_MI_TADGAL_BNAME4","A block to pull in jquery");
define("_MI_TADGAL_BDESC4","A block to pull in photo effects");
define("_MI_TADGAL_BNAME5","Image marquee");
define("_MI_TADGAL_BDESC5","Display image in the marquee");
define("_MI_TADGAL_BNAME6","Latest responses");
define("_MI_TADGAL_BDESC6","Show comments on the selected photo");
define("_MI_TADGAL_BNAME7","Flash photo show");
define("_MI_TADGAL_BDESC7","Playback by using Flash(include auto start function)");
define("_MI_TADGAL_BNAME8","Thumbnails list");
define("_MI_TADGAL_BDESC8","Traditional thumbnails list displaying block");

define("_MI_TADGAL_THUMBNAIL_S_WIDTH","<b>Length in the long side of the small thumbnails</b>");
define("_MI_TADGAL_THUMBNAIL_S_WIDTH_DESC","Set length of the longest width or height of the small thumbnails");
define("_MI_TADGAL_THUMBNAIL_M_WIDTH","<b>Length in the long side of the medium thumbnails</b>");
define("_MI_TADGAL_THUMBNAIL_M_WIDTH_DESC","Set length of the longest width or height of the medium thumbnails");
define("_MI_TADGAL_THUMBNAIL_B_WIDTH","<b>Force the image to shrink to the specified width?</b>");
define("_MI_TADGAL_THUMBNAIL_B_WIDTH_DESC","For example:\"1024\"indicates that images with long side longer than 1024 will be forced to shrink the lengh to 1024. This can reduce the waste of space by large photos.<br />The setting \"0\" indicates to keep the original photo size.");
define("_MI_TADGAL_THUMBNAIL_MODE","<b>Thumbnails default border</b>");
define("_MI_TADGAL_THUMBNAIL_MODE_DESC","Thumbnails default display mode setting");
define("_MI_TADGAL_THUMBNAIL_NUMBER","<b>Number of images to show in a thumbnails page</b>");
define("_MI_TADGAL_THUMBNAIL_NUMBER_DESC","Number of photos to show in the home page and management page");

define("_MI_TADGAL_THUMBNAIL_MODE0","No border");
define("_MI_TADGAL_THUMBNAIL_MODE1","Drop shadow border");
define("_MI_TADGAL_THUMBNAIL_MODE2","Slide border");
define("_MI_TADGAL_THUMBNAIL_MODE3","Edge color fading");
define("_MI_TADGAL_THUMBNAIL_MODE4","Rounder corner border");
define("_MI_TADGAL_THUMBNAIL_MODE5","Rectangular border with drop-shadow");

define("_MI_TADGAL_PREVENT_HOTLINKING","<b>Anti-hotlink for album photos</b>");
define("_MI_TADGAL_PREVENT_HOTLINKING_DESC","When enabled,only your website and hotlinking allowed external website can link to the image file");
define("_MI_TADGAL_ALLOW_HOTLINKING","<b>Hotlinking allowed external website</b>");
define("_MI_TADGAL_ALLOW_HOTLINKING_DESC","When anti-hotlink is enabled, you can authorize special websites to link to your photo albums by entering their address here.<br />Example:\"http://tad.tnc.edu.tw\" Do not append end slash / . For more than one website, use semicolon \";\" to seperate them");

define("_MI_TADGAL_SHOW_COPY_PIC","<b>Show quick-copy button</b>");
define("_MI_TADGAL_SHOW_COPY_PIC_DESC","Easy to get the full directories of the small thumbnails,medium thumbnails and origin photos");
?>