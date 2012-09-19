<?php
/**
 * $Id: admin.php
 * Module: XoopsTube
 * Language: english
 */

define( "_AM_XTUBE_WARNINSTALL1", "WARNING: Directory %s exists on your server. <br />Please remove this directory for security reasons." );
define( "_AM_XTUBE_WARNINSTALL2", "WARNING: File %s exists on your server. <br />Please remove this directory for security reasons." );
define( "_AM_XTUBE_WARNINSTALL3", "WARNING: Folder %s does not exists on your server. <br />This folder is required by XoopsTube." );

define( "_AM_XTUBE_MODULE_NAME", "XoopsTube" );

define( "_AM_XTUBE_BMODIFY", "Modify" );
define( "_AM_XTUBE_BDELETE", "Delete" );
define( "_AM_XTUBE_BCREATE", "Create" );
define( "_AM_XTUBE_BADD", "Add" );
define( "_AM_XTUBE_BAPPROVE", "Approve" );
define( "_AM_XTUBE_BIGNORE", "Ignore" );
define( "_AM_XTUBE_BCANCEL", "Cancel" );
define( "_AM_XTUBE_BSAVE", "Save" );
define( "_AM_XTUBE_BRESET", "Reset" );
define( "_AM_XTUBE_BMOVE", "Move Videos" );
define( "_AM_XTUBE_BUPLOAD", "Upload" );
define( "_AM_XTUBE_BDELETEIMAGE", "Delete Selected Image" );
define( "_AM_XTUBE_BRETURN", "Return to where you where!" );
define( "_AM_XTUBE_DBERROR", "Database Access Error" );
// Other Options
define( "_AM_XTUBE_TEXTOPTIONS", "Text Options:" );
define( "_AM_XTUBE_DISABLEHTML", " Disable HTML Tags" );
define( "_AM_XTUBE_DISABLESMILEY", " Disable Smilie Icons" );
define( "_AM_XTUBE_DISABLEXCODE", " Disable XOOPS Codes" );
define( "_AM_XTUBE_DISABLEIMAGES", " Disable Images" );
define( "_AM_XTUBE_DISABLEBREAK", " Use XOOPS linebreak conversion?" );
define( "_AM_XTUBE_UPLOADFILE", "Video Uploaded Successfully" );
define( "_AM_XTUBE_NOMENUITEMS", "No menu items within the menu" );
// Admin Bread crumb
define( "_AM_XTUBE_PREFS", "Preferences" );
define( "_AM_XTUBE_BUPDATE", "Module Update" );
define( "_AM_XTUBE_BINDEX", "Main Index" );
define( "_AM_XTUBE_BPERMISSIONS", "Permissions" );
// define( "_AM_XTUBE_BLOCKADMIN", "Blocks" );
define( "_AM_XTUBE_BLOCKADMIN", "Block Settings" );
define( "_AM_XTUBE_GOMODULE", "Go to module" );
define( "_AM_XTUBE_ABOUT", "About" );
// Admin Summary
define( "_AM_XTUBE_SCATEGORY", "Category: " );
define( "_AM_XTUBE_SFILES", "Videos: " );
define( "_AM_XTUBE_SNEWFILESVAL", "Submitted: " );
define( "_AM_XTUBE_SMODREQUEST", "Modified: " );
define( "_AM_XTUBE_SREVIEWS", "Reviews: " );

// Admin Main Menu
define( "_AM_XTUBE_MCATEGORY", "Category Management" );
define( "_AM_XTUBE_MVIDEOS", "Video Management" );
define( "_AM_XTUBE_MLISTBROKEN", "List Broken Videos" );
define( "_AM_XTUBE_MLISTPINGTIMES", "List Links Pingtime" );
define( "_AM_XTUBE_INDEXPAGE", "Index Page Management" );
define( "_AM_XTUBE_MCOMMENTS", "Comments" );
define( "_AM_XTUBE_MVOTEDATA", "Vote Data" );
define( "_AM_XTUBE_MUPLOADS", "Image Upload" );

// Catgeory defines
define( "_AM_XTUBE_CCATEGORY_CREATENEW", "Create New Category" );
define( "_AM_XTUBE_CCATEGORY_MODIFY", "Modify Category" );
define( "_AM_XTUBE_CCATEGORY_MOVE", "Move Category Videos" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "Category Title:" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Failed Moving Videos: Cannot move to this Category" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Failed Moving Videos: Cannot find this Category" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "Videos Moved and Category Deleted" );
define( "_AM_XTUBE_CCATEGORY_CREATED", "New Category Created and Database Updated Successfully" );
define( "_AM_XTUBE_CCATEGORY_MODIFIED", "Selected Category Modified and Database Updated Successfully" );
define( "_AM_XTUBE_CCATEGORY_DELETED", "Selected Category Deleted and Database Updated Successfully" );
define( "_AM_XTUBE_CCATEGORY_AREUSURE", "WARNING: Are you sure you want to delete this Category and ALL its Videos and Comments?" );
define( "_AM_XTUBE_CCATEGORY_NOEXISTS", "You must create a Category before you can add a new video" );
define( "_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Category Access Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have access to this Category.</span></div>" );
define( "_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Category Submission Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to submit new videos to this Category.</span></div>" );
define( "_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Category Moderation Permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to moderate this Category.</span></div>" );

define( "_AM_XTUBE_FCATEGORY_TITLE", "Category Title:" );
define( "_AM_XTUBE_FCATEGORY_WEIGHT", "Category Weight:" );
define( "_AM_XTUBE_FCATEGORY_SUBCATEGORY", "Set As Sub-Category:" );
define( "_AM_XTUBE_FCATEGORY_CIMAGE", "Select Category Image:" );
define( "_AM_XTUBE_FCATEGORY_DESCRIPTION", "Set Category Description:" );
define( "_AM_XTUBE_FCATEGORY_SUMMARY", "Set Category Summary:" );
/**
 * Index page Defines
 */
define( "_AM_XTUBE_IPAGE_UPDATED", "Index Page Modified and Database Updated Successfully!" );
define( "_AM_XTUBE_IPAGE_INFORMATION", "Index Page Information" );
define( "_AM_XTUBE_IPAGE_MODIFY", "Modify Index Page" );
define( "_AM_XTUBE_IPAGE_CIMAGE", "Select Index Image:" );
define( "_AM_XTUBE_IPAGE_CTITLE", "Index Title:" );
define( "_AM_XTUBE_IPAGE_CHEADING", "Index Heading:" );
define( "_AM_XTUBE_IPAGE_CHEADINGA", "Index Heading Alignment:" );
define( "_AM_XTUBE_IPAGE_CFOOTER", "Index Footer:" );
define( "_AM_XTUBE_IPAGE_CFOOTERA", "Index Footer Alignment:" );
define( "_AM_XTUBE_IPAGE_CLEFT", "Align Left" );
define( "_AM_XTUBE_IPAGE_CCENTER", "Align Center" );
define( "_AM_XTUBE_IPAGE_CRIGHT", "Align Right" );
/**
 * Permissions defines
 */
define( "_AM_XTUBE_PERM_MANAGEMENT", "Permissions Management" );
define( "_AM_XTUBE_PERM_PERMSNOTE", "<div><b>NOTE:</b> Please be aware that even if you&#8217ve set correct viewing permissions here, a group might not see the articles or blocks if you don&#8217t also grant that group permissions to access the module. To do that, go to <b>System admin > Groups</b>, choose the appropriate group and click the checkboxes to grant its members the access.</div>" );
define( "_AM_XTUBE_PERM_CPERMISSIONS", "Category Permissions" );
define( "_AM_XTUBE_PERM_CSELECTPERMISSIONS", "Select categories that each group is allowed to view" );
define( "_AM_XTUBE_PERM_CNOCATEGORY", "Cannot set permission's: No Categories's have been created yet!" );
define( "_AM_XTUBE_PERM_FPERMISSIONS", "Video Permissions" );
define( "_AM_XTUBE_PERM_FNOFILES", "Cannot set permission's: No videos have been created yet!" );
define( "_AM_XTUBE_PERM_FSELECTPERMISSIONS", "Select the videos that each group is allowed to view" );
/**
 * Upload defines
 */
define( "_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Image successfully uploaded to server destination" );
define( "_AM_XTUBE_VIDEO_NOIMAGEEXIST", "Error: No image was selected for uploading.  Please try again!" );
define( "_AM_XTUBE_VIDEO_IMAGEEXIST", "Image already exists in upload area!" );
define( "_AM_XTUBE_VIDEO_FILEDELETED", "Image has been deleted." );
define( "_AM_XTUBE_VIDEO_FILEERRORDELETE", "Error deleting Video: Video not found on server." );
define( "_AM_XTUBE_VIDEO_NOFILEERROR", "Error deleting Image: No Image Selected For Deleting." );
define( "_AM_XTUBE_VIDEO_DELETEFILE", "WARNING: Are you sure you want to delete this Image link?" );
define( "_AM_XTUBE_VIDEO_IMAGEINFO", "Server Status" );
define( "_AM_XTUBE_VIDEO_SPHPINI", "<b>Information taken from PHP ini Link:</b>" );
define( "_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Safe Mode Status: " );
define( "_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Server Uploads Status: " );
define( "_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "Max Upload Size Permitted: " );
define( "_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Max Post Size Permitted: " );
define( "_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (This May Cause Problems)" );
define( "_AM_XTUBE_VIDEO_GDLIBSTATUS", "GD Library Support: " );
define( "_AM_XTUBE_VIDEO_GDLIBVERSION", "GD Library Version: " );
define( "_AM_XTUBE_VIDEO_GDON", "<b>Enabled</b> (Thumbs Nails Available)" );
define( "_AM_XTUBE_VIDEO_GDOFF", "<b>Disabled</b> (No Thumb Nails Available)" );
define( "_AM_XTUBE_VIDEO_OFF", "<b>OFF</b>" );
define( "_AM_XTUBE_VIDEO_ON", "<b>ON</b>" );
define( "_AM_XTUBE_VIDEO_CATIMAGE", "Category Images" );
define( "_AM_XTUBE_VIDEO_SCREENSHOTS", "Screenshot Images" );
define( "_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Main images" );
define( "_AM_XTUBE_VIDEO_FCATIMAGE", "Category Image Path" );
define( "_AM_XTUBE_VIDEO_FSCREENSHOTS", "Screenshot Image Path" );
define( "_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Main image Path" );
define( "_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Upload Image: " );
define( "_AM_XTUBE_VIDEO_FUPLOADPATH", "Upload Path: " );
define( "_AM_XTUBE_VIDEO_FUPLOADURL", "Upload URL: " );
define( "_AM_XTUBE_VIDEO_FOLDERSELECTION", "Select Upload Destination:" );
define( "_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Display Selected Image:" );
define( "_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Upload New Image to Selected Destination:" );

// Main Index defines
define( "_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Module Admin Summary" );
define( "_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "Published Videos:" );
define( "_AM_XTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Auto Published Videos:" );
define( "_AM_XTUBE_MINDEX_AUTOEXPIRE", "Auto Expire Videos:" );
define( "_AM_XTUBE_MINDEX_EXPIRED", "Expired Videos:" );
define( "_AM_XTUBE_MINDEX_OFFLINEVIDEO", "Offline Videos:" );
define( "_AM_XTUBE_MINDEX_ID", "ID" );
define( "_AM_XTUBE_MINDEX_TITLE", "Video Title" );
define( "_AM_XTUBE_MINDEX_POSTER", "Poster" );
define( "_AM_XTUBE_MINDEX_ONLINE", "Status" );
define( "_AM_XTUBE_MINDEX_ONLINESTATUS", "Online Status" );
define( "_AM_XTUBE_MINDEX_PUBLISH", "Published" );
define( "_AM_XTUBE_MINDEX_PUBLISHED", "Published" );
define( "_AM_XTUBE_MINDEX_EXPIRE", "Expired" );
define( "_AM_XTUBE_MINDEX_NOTSET", "Date Not Set" );
define( "_AM_XTUBE_MINDEX_SUBMITTED", "Date Submitted" );

define( "_AM_XTUBE_MINDEX_ACTION", "Action" );
define( "_AM_XTUBE_MINDEX_NOVIDEOSFOUND", "NOTICE: There are no videos that match this criteria" );
define( "_AM_XTUBE_MINDEX_PAGE", "<b>Page:<b> " );
define( '_AM_XTUBE_MINDEX_PAGEINFOTXT', '<ul><li>XoopsTubes main page details.</li><li>You can easily change the image logo, heading, main index header and footer text to suit your own look</li></ul><br />Note: The Logo image choosen will be used throughout XoopsTube.' );
define( "_AM_XTUBE_MINDEX_RESPONSE", "Response Time" );
// Submitted Links
define( "_AM_XTUBE_SUB_SUBMITTEDFILES", "Submitted Videos" );
define( "_AM_XTUBE_SUB_FILESWAITINGINFO", "Waiting Videos Information" );
define( "_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "Videos Waiting Validation: " );
define( "_AM_XTUBE_SUB_APPROVEWAITINGFILE", "<b>Approve</b> new video information without validation." );
define( "_AM_XTUBE_SUB_EDITWAITINGFILE", "<b>Edit</b> new video information and then approve." );
define( "_AM_XTUBE_SUB_DELETEWAITINGFILE", "<b>Delete</b> the new video information." );
define( "_AM_XTUBE_SUB_NOFILESWAITING", "There are no videos that match this critera" );
define( "_AM_XTUBE_SUB_NEWFILECREATED", "New Video Data Created and Database Updated Successfully" );
// Vote Information
define( "_AM_XTUBE_VOTE_RATINGINFOMATION", "Voting Information" );
define( "_AM_XTUBE_VOTE_TOTALVOTES", "Total votes: " );
define( "_AM_XTUBE_VOTE_REGUSERVOTES", "Registered User Votes: %s" );
define( "_AM_XTUBE_VOTE_ANONUSERVOTES", "Anonymous User Votes: %s" );
define( "_AM_XTUBE_VOTE_USER", "User" );
define( "_AM_XTUBE_VOTE_IP", "IP Address" );
define( "_AM_XTUBE_VOTE_DATE", "Submitted" );
define( "_AM_XTUBE_VOTE_RATING", "Rating" );
define( "_AM_XTUBE_VOTE_NOREGVOTES", "No Registered User Votes" );
define( "_AM_XTUBE_VOTE_NOUNREGVOTES", "No Unregistered User Votes" );
define( "_AM_XTUBE_VOTE_VOTEDELETED", "Vote data deleted." );
define( "_AM_XTUBE_VOTE_ID", "ID" );
define( "_AM_XTUBE_VOTE_FILETITLE", "Video Title" );
define( "_AM_XTUBE_VOTE_DISPLAYVOTES", "Voting Data Information" );
define( "_AM_XTUBE_VOTE_NOVOTES", "No User Votes to display" );
define( "_AM_XTUBE_VOTE_DELETE", "No User Votes to display" );
define( "_AM_XTUBE_VOTE_DELETEDSC", "<b>Deletes</b> the chosen vote information from the database." );
define( "_AM_XTUBE_VOTEDELETED", "Selected Vote removed database updated" );

define( "_AM_XTUBE_VOTE_USERAVG", "Average User Rating" );
define( "_AM_XTUBE_VOTE_TOTALRATE", "Total Votes" );
define( "_AM_XTUBE_VOTE_MAXRATE", "Max Item Vote" );
define( "_AM_XTUBE_VOTE_MINRATE", "Min Item Vote" );
define( "_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "Most Voted For" );
define( "_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "Least Voted For" );
define( "_AM_XTUBE_VOTE_MOSTVOTERSUID", "Most Active Voter" );
define( "_AM_XTUBE_VOTE_REGISTERED", "Registered Votes" );
define( "_AM_XTUBE_VOTE_NONREGISTERED", "Anonymous Votes" );
// Modifications
define( "_AM_XTUBE_MOD_TOTMODREQUESTS", "Total Modification Requests: " );
define( "_AM_XTUBE_MOD_MODREQUESTS", "Modified Videos" );
define( "_AM_XTUBE_MOD_MODREQUESTSINFO", "Modified Videos Information" );
define( "_AM_XTUBE_MOD_MODID", "ID" );
define( "_AM_XTUBE_MOD_MODTITLE", "Title" );
define( "_AM_XTUBE_MOD_MODPOSTER", "Original Poster: " );
define( "_AM_XTUBE_MOD_DATE", "Submitted" );
define( "_AM_XTUBE_MOD_NOMODREQUEST", "There are no requests that match this critera" );
define( "_AM_XTUBE_MOD_TITLE", "video Title: " );
define( "_AM_XTUBE_MOD_LID", "video ID: " );
define( "_AM_XTUBE_MOD_CID", "Category: " );
define( "_AM_XTUBE_MOD_URL", "video Url: " );
define( "_AM_XTUBE_MOD_PUBLISHER", "Publisher: " );
define( "_AM_XTUBE_MOD_FORUMID", "Forum: " );
define( "_AM_XTUBE_MOD_SCREENSHOT", "Screenshot Image: " );
define( "_AM_XTUBE_MOD_HOMEPAGE", "Home Page: " );
define( "_AM_XTUBE_MOD_HOMEPAGETITLE", "Home Page Title: " );
define( "_AM_XTUBE_MOD_SHOTIMAGE", "Screenshot Image: " );
define( "_AM_XTUBE_MOD_DESCRIPTION", "Description: " );
define( "_AM_XTUBE_MOD_MODIFYSUBMITTER", "Submitter: " );
define( "_AM_XTUBE_MOD_MODIFYSUBMIT", "Submitter" );
define( "_AM_XTUBE_MOD_PROPOSED", "Proposed video Details" );
define( "_AM_XTUBE_MOD_ORIGINAL", "Orginal video Details" );
define( "_AM_XTUBE_MOD_REQDELETED", "Modification request removed from the database" );
define( "_AM_XTUBE_MOD_REQUPDATED", "Selected video Modified and Database Updated Successfully" );
define( '_AM_XTUBE_MOD_VIEW', 'View' );
// Link management
define( "_AM_XTUBE_VIDEO_ID", "Video ID: " );
define( "_AM_XTUBE_VIDEO_IP", "Uploaders IP Address: " );
define( "_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Allowed Admin Video Extensions</b>:</div>" );
define( "_AM_XTUBE_VIDEO_MODIFYFILE", "Modify Video Information" );
define( "_AM_XTUBE_VIDEO_CREATENEWFILE", "Create New Video" );
define( "_AM_XTUBE_VIDEO_TITLE", "Video Title: " );
define( "_AM_XTUBE_VIDEO_DLVIDID", "Video id-code: " );
define( "_AM_XTUBE_VIDEO_DLVIDID_NOTE", "
<small><b>YouTube:</b> http://www.youtube.com/watch?v=<font color=#FF0000>IsOtq-qCqZ4</font><br />
<small><b>MetaCafe:</b> http://www.metacafe.com/watch/<font color=#FF0000>191543/sperm_whale_encounters_underwater_robot</font>/<br />
<small><b>SPIKE/ifilm:</b> http://www.ifilm.com/video/<font color=#FF0000>2718605</font><br />
<small><b>Photobucket:</b> http://i39.photobucket.com/albums/<font color=#FF0000>e168/vailtom/th_BigSquid</font>.jpg<br />
<small><b>Google Video:</b> http://video.google.com/videoplay?docid=<font color=#FF0000>4761076111111865377</font>&q=rov&total=913&start=...<br />
<small><b>MySpace TV:</b> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<font color=#FF0000>13171141</font><br />
<small><b>DailyMotion:</b> http://www.dailymotion.com/video/<font color=#FF0000>x40bhg</font>_blondesecretary_fun</small>" );
define( "_AM_XTUBE_VIDEO_PICURL", "Picture url: " );
define( "_AM_XTUBE_VIDEO_PICURLNOTE", "<small>Picture url when source is Google Video, MySpace TV or DailyMotion.</small>" );
define( "_AM_XTUBE_VIDEO_DESCRIPTION", "Video Description: " );
define( "_AM_XTUBE_VIDEO_CATEGORY", "Video Main Category: " );
define( "_AM_XTUBE_VIDEO_FILESSTATUS", " Set video offline?<br /><br /><span style='font-weight: normal;'>video will not be viewable to all users.</span>" );
define( "_AM_XTUBE_VIDEO_SETASUPDATED", " Set video Status as Updated?<br /><br /><span style='font-weight: normal;'>video will Display updated icon.</span>" );
define( "_AM_XTUBE_VIDEO_SHOTIMAGE", "Video Screenshot Image: " );
define( "_AM_XTUBE_VIDEO_DISCUSSINFORUM", "Add Discuss in this Forum?" );
define( "_AM_XTUBE_VIDEO_PUBLISHDATE", "Video Publish Date:" );
define( "_AM_XTUBE_VIDEO_EXPIREDATE", "Video Expire Date:" );
define( "_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Remove Publish date:" );
define( "_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Remove Expire date:" );
define( "_AM_XTUBE_VIDEO_PUBLISHDATESET", " Publish date set: " );
define( "_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Set the date/time of publish" );
define( "_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Set the date/time of expire" );
define( "_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<b>Set Publish Date: </b>" );
define( "_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Set New Publish Date: </b><br />Published:" );
define( "_AM_XTUBE_VIDEO_SETPUBDATESETS", "<b>Publish Date Set: </b><br />Publishes On Date:" );
define( "_AM_XTUBE_VIDEO_EXPIREDATESET", " Expire date set: " );
define( "_AM_XTUBE_VIDEO_SETEXPIREDATE", "<b>Set Expire Date: </b>" );
define( "_AM_XTUBE_VIDEO_DELEDITMESS", "Delete Broken Report?<br /><br /><span style='font-weight: normal;'>When you choose <b>YES</b> the Broken Report will automatically deleted and you confirm that the video now works again.</span>" );
define( "_AM_XTUBE_VIDEO_MUSTBEVALID", "Screenshot image must be a valid image video under %s directory (ex. shot.gif). Leave it blank if there is no image link." );
define( "_AM_XTUBE_VIDEO_EDITAPPROVE", "Approve video:" );
define( "_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "New Video Created and Database Updated Successfully" );
define( "_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "Selected Video Modified and Database Updated Successfully" );
define( "_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "Really delete the selected video?" );
define( "_AM_XTUBE_VIDEO_FILEWASDELETED", "Video %s successfully removed from the database!" );
define( "_AM_XTUBE_VIDEO_FILEAPPROVED", "Video Approved and Database Updated Successfully" );
define( "_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<b>Create News Story From link</b>" );
define( "_AM_XTUBE_VIDEO_SUBMITNEWS", "Submit New video as News item?" );
define( "_AM_XTUBE_VIDEO_NEWSCATEGORY", "Select News Category to submit News:" );
define( "_AM_XTUBE_VIDEO_NEWSTITLE", "News Title:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leave Blank to use Video Title</span></div>" );
define( "_AM_XTUBE_VIDEO_PUBLISHER", "Video Publisher Name: " );

/**
 * Broken links defines
 */
define( "_AM_XTUBE_SBROKENSUBMIT", "Broken: " );
define( "_AM_XTUBE_BROKEN_FILE", "Broken Reports" );
define( "_AM_XTUBE_BROKEN_FILEIGNORED", "Broken report ignored and successfully removed from the database!" );
define( "_AM_XTUBE_BROKEN_NOWACK", "Acknowledged status changed and database updated!" );
define( "_AM_XTUBE_BROKEN_NOWCON", "Confirmed status changed and database updated!" );
define( "_AM_XTUBE_BROKEN_REPORTINFO", "Broken Report Information" );
define( "_AM_XTUBE_BROKEN_REPORTSNO", "Broken Reports Waiting:" );
define( "_AM_XTUBE_BROKEN_IGNOREDESC", "<b>Ignores</b> the report and only deletes the broken video report." );
define( "_AM_XTUBE_BROKEN_DELETEDESC", "<b>Deletes</b> the reported link data and broken video reports for the link." );
define( "_AM_XTUBE_BROKEN_EDITDESC", "<b>Edit</b> the video to fix the problem." );
define( "_AM_XTUBE_BROKEN_ACKDESC", "<b>Acknowledged</b> Set Acknowledged state of broken file report." );
define( "_AM_XTUBE_BROKEN_CONFIRMDESC", "<b>Confirmed</b> Set confirmed state of broken video report." );
define( "_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Acknowledged" );
define( "_AM_XTUBE_BROKEN_DCONFIRMED", "Confirmed" );

define( "_AM_XTUBE_BROKEN_ID", "ID" );
define( "_AM_XTUBE_BROKEN_TITLE", "Title" );
define( "_AM_XTUBE_BROKEN_REPORTER", "Reporter" );
define( "_AM_XTUBE_BROKEN_FILESUBMITTER", "Submitter" );
define( "_AM_XTUBE_BROKEN_DATESUBMITTED", "Submit Date" );
define( "_AM_XTUBE_BROKEN_ACTION", "Action" );
define( "_AM_XTUBE_BROKEN_NOFILEMATCH", "There are no Broken reports that match this critera" );
define( "_AM_XTUBE_BROKENFILEDELETED", "video removed from database and broken report removed" );
define( "_AM_XTUBE_BROKEN_VIDSOURCE", "Video source" );
/**
 * About defines
 */
define( "_AM_XTUBE_BY", "by" );
// block defines
define( "_AM_XTUBE_BADMIN", "Block Administration" );
define( "_AM_XTUBE_BLKDESC", "Description" );
define( "_AM_XTUBE_TITLE", "Title" );
define( "_AM_XTUBE_SIDE", "Alignment" );
define( "_AM_XTUBE_WEIGHT", "Weight" );
define( "_AM_XTUBE_VISIBLE", "Visible" );
define( "_AM_XTUBE_ACTION", "Action" );
define( "_AM_XTUBE_SBLEFT", "Left" );
define( "_AM_XTUBE_SBRIGHT", "Right" );
define( "_AM_XTUBE_CBLEFT", "Center Left" );
define( "_AM_XTUBE_CBRIGHT", "Center Right" );
define( "_AM_XTUBE_CBCENTER", "Center Middle" );
define( "_AM_XTUBE_ACTIVERIGHTS", "Active Rights" );
define( "_AM_XTUBE_ACCESSRIGHTS", "Access Rights" );
// image admin icon
define( "_AM_XTUBE_ICO_EDIT", "Edit This Item" );
define( "_AM_XTUBE_ICO_DELETE", "Delete This Item" );
define( "_AM_XTUBE_ICO_RESOURCE", "Edit This Resource" );

define( "_AM_XTUBE_ICO_ONLINE", "Online" );
define( "_AM_XTUBE_ICO_OFFLINE", "Offline" );
define( "_AM_XTUBE_ICO_APPROVED", "Approved" );
define( "_AM_XTUBE_ICO_NOTAPPROVED", "Not Approved" );

define( "_AM_XTUBE_ICO_VIDEO", "Related video" );
define( "_AM_XTUBE_ICO_URL", "Add Related URL" );
define( "_AM_XTUBE_ICO_ADD", "Add" );
define( "_AM_XTUBE_ICO_APPROVE", "Approve" );
define( "_AM_XTUBE_ICO_STATS", "Stats" );
define( "_AM_XTUBE_ICO_VIEW", "View this item" );

define( "_AM_XTUBE_ICO_IGNORE", "Ignore" );
define( "_AM_XTUBE_ICO_ACK", "Broken Report Acknowledged" );
define( "_AM_XTUBE_ICO_REPORT", "Acknowledge Broken Report?" );
define( "_AM_XTUBE_ICO_CONFIRM", "Broken Report Confirmed" );
define( "_AM_XTUBE_ICO_CONBROKEN", "Confirm Broken Report?" );
define( "_AM_XTUBE_ICO_RES", "Edit Resources/Videos for this Item" );
define( "_AM_XTUBE_MOD_URLRATING", "Interent Content Rating:" );
// Alternate category
define( "_AM_XTUBE_ALTCAT_CREATEF", "Add Alternate Category" );
define( "_AM_XTUBE_MALTCAT", "Alternate Category Management" );
define( "_AM_XTUBE_ALTCAT_MODIFYF", "Alternate Category Management" );
define( "_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Alternate categories can be added or removed easily via this form.</li></ul>" );
define( '_AM_XTUBE_ALTCAT_CREATED', 'Alternate categories was saved!' );

define( "_AM_XTUBE_MRESOURCES", "Resource Management" );
define( "_AM_XTUBE_RES_CREATED", "Resource Management" );
define( "_AM_XTUBE_RES_ID", "ID" );
define( "_AM_XTUBE_RES_DESC", "Description" );
define( "_AM_XTUBE_RES_NAME", "Resource Name" );
define( "_AM_XTUBE_RES_TYPE", "Resource Type" );
define( "_AM_XTUBE_RES_USER", "User" );
define( "_AM_XTUBE_RES_CREATEF", "Add Resource" );
define( "_AM_XTUBE_RES_MODIFYF", "Modify Resource" );
define( "_AM_XTUBE_RES_NAMEF", "Resource name:" );
define( "_AM_XTUBE_RES_DESCF", "Resource description:" );
define( "_AM_XTUBE_RES_URLF", "Resource URL:" );
define( "_AM_XTUBE_RES_ITEMIDF", "Resource Item ID:" );
define( "_AM_XTUBE_RES_INFOTEXT", "<ul><li>New resources can be added, edited or removed easily via this form.</li>
	<li>List all resources linked to a video</li>
	<li>Modify resource name and description</li></ul>
	" );
define( "_AM_XTUBE_LISTBROKEN", "Displays Videos that are possibly broken. NB: These results may not be accurate and should be taken as a rough guide.<br /><br />Please check the video does exist first before any action taken.<br /><br />" );
define( "_AM_XTUBE_PINGTIMES", "Displays the first estimated round ping time to each video.<br /><br />NB: These results may not be accurate and should be taken as a rough guide.<br /><br />" );

define( "_AM_XTUBE_NO_FORUM", "No forum Selected" );

define( "_AM_XTUBE_PERM_RATEPERMISSIONS", "Rate Permissions" );
define( "_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "Select the groups that can rate a video in the selected categories." );

define( "_AM_XTUBE_PERM_AUTOPERMISSIONS", "Auto Approve Videos" );
define( "_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "Select the groups that will have new videos auto approved without admin intervention." );

define( "_AM_XTUBE_PERM_SPERMISSIONS", "Submitter Permissions" );
define( "_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "Select the groups who can submit new videos to selected categories." );

define( "_AM_XTUBE_PERM_APERMISSIONS", "Moderator Groups" );
define( "_AM_XTUBE_PERM_APERMISSIONS_TEXT", "Select the groups who have moderator privligages for the selected categories." );

define( "_AM_XTUBE_TIME", "Time:" );
define( "_AM_XTUBE_KEYWORDS", "Keywords:" );
define( "_AM_XTUBE_KEYWORDS_NOTE", "<small><i>Keywords should be seperated with a comma (keyword1, keyword2).</i></small>" );
define("_AM_XTUBE_VIDEO_META_DESCRIPTION", "Meta Description");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION_DSC", "In order to help Search Engines, you can customize the meta description you would like to use for this article. if you leave this field empty when creating a category, it will automatically be populated with the Summary field of this article.");

define( "_AM_XTUBE_VIDSOURCE", "Video source:" );
define( "_AM_XTUBE_VIDSOURCE2", "Video source" );
define( "_AM_XTUBE_YOUTUBE", "YouTube" );
define( "_AM_XTUBE_METACAFE", "MetaCafe" );
define( "_AM_XTUBE_IFILM", "Spike" );
define( "_AM_XTUBE_GOOGLEVIDEO", "Google Video" );
define( "_AM_XTUBE_MYSPAVETV", "MySpace TV" );
define( "_AM_XTUBE_PHOTOBUCKET", "Photobucket" );
define( "_AM_XTUBE_DAILYMOTION", "DailyMotion" );

?>