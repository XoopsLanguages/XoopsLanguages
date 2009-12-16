<?php
//  ------------------------------------------------------------------------ //
// This module was written by Tad
// Release date: 2008-03-23
// $Id: main.php,v 1.4 2008/05/05 03:22:42 tad Exp $
// ------------------------------------------------------------------------- //

define("_TO_INDEX_PAGE","Digital photo album");
define("_MD_TADGAL_XP_UPLOAD","XP upload wizard");
define("_MD_TADGAL_UPLOAD_PAGE","Upload photo");
define("_MD_TADGAL_PATCH_UPLOAD_PAGE","Batch import photos");
define("_TO_ADMIN_PAGE","Management interface");
//Objects
define("_MD_HOMEPAGE","Back to homepage");
define("_BP_BACK_PAGE","Previous Page");
define("_BP_NEXT_PAGE","Next Page");
define("_BP_FIRST_PAGE","First Page");
define("_BP_LAST_PAGE","Last Page");
define("_BP_GO_BACK_PAGE","Go backward %s pages");
define("_BP_GO_NEXT_PAGE","Go forward %s pages");
define("_BP_TOOLBAR","Total pages: %s . You are at page: %s ");
define("_BP_DEL_CHK","Are you sure to delete this data?");
define("_BP_FUNCTION","Function");
define("_BP_EDIT","Edit");
define("_BP_DEL","Delete");
define("_BP_ADD","Add new data");

//uploads.php
define("_MA_INPUT_FORM","Upload photos");
define("_MA_TADGAL_CATE_SELECT","Not classified");
define("_MA_TADGAL_SN","Serial number");
define("_MA_TADGAL_PHOTO","Select photos:");
define("_MA_TADGAL_CSN","Photo Category:");
define("_MA_TADGAL_NEW_CSN","Creat a sub-category from left category:");
define("_MA_TADGAL_TITLE","Photo title:");
define("_MA_TADGAL_DESCRIPTION","Photo description:");
define("_MA_SAVE","Upload");
define("_TADGAL_IMPORT_UPLOADS_ERROR","Upload file \"%s\" failed!");
define("_TADGAL_IMPORT_UPLOADS_OK","Upload file \"%s\" successful!");


//index.php
define("_MA_TADGAL_FILENAME","File name");
define("_MA_TADGAL_SIZE","Size");
define("_MA_TADGAL_TYPE","Type");
define("_MA_TADGAL_UID","Provider");
define("_MA_TADGAL_POST_DATE","Post date");
define("_MA_TADGAL_COUNTER","Counter");
define("_TADGAL_NO_POWER_TITLE","You are not authorized to view!");
define("_TADGAL_NO_POWER_CONTENT","\"%s\" view permission is required!<br />Please select other albums: %s");
define("_TADGAL_NO_PASSWD_CONTENT","To view album \"%s\" ,please input correct password!");
define("_MA_TADGAL_3D_MODE","Play by 3D gallery mode");
define("_MA_TADGAL_SLIDE_SHOW_MODE","Play by slide show mode");
define("_MA_TADGAL_SHOW_ONE_MODE","Play by single photo mode");
define("_MD_TADGAL_BACK_CSN","Back to category \"%s\"");
define("_MD_TADGAL_ALL_AUTHOR","All");


//Batch import
define("_TADGAL_IMPORT_FILE","Upload file");
define("_TADGAL_IMPORT_DIR","Upload folder");
define("_TADGAL_IMPORT_DIMENSION","Width x Height");
define("_TADGAL_IMPORT_SIZE","File size");
define("_TADGAL_PATCH_IMPORT_FORM","Batch upload photos");
define("_TADGAL_UP_IMPORT","Import");
define("_TADGAL_IMPORT_STATUS","Type or status");
define("_TADGAL_IMPORT_EXIST","Already exist");
define("_TADGAL_IMPORT_IMPORT_ERROR","Import file \"%s\" failed!");
define("_TADGAL_IMPORT_ONLY_ROOT","Batch import function is only valid for the people who have administration authority in this module!");
define("_TADGAL_NO_UPLOAD_POWER","You are not authorized to upload photos!");

//view.php
define("_TADGAL_FILE_NOT_EXIST","file \"%s\" does not exist");
define("_TADGAL_FILE_COPY_S","Press button to copy small thumbnail directory");
define("_TADGAL_FILE_COPY_M","Press button to copy medium thumbnail directory");
define("_TADGAL_FILE_COPY_B","Press button to copy origin photo directory");
define("_TADGAL_DEL_PIC","Delete this photo");
define("_TADGAL_EDIT_PIC","Edit photo description");
define("_TADGAL_GOOD_PIC","Mark this photo to BEST PHOTOS selection");
define("_TADGAL_REMOVE_GOOD_PIC","Remove the mark of BEST PHOTOS selection");
define("_MA_TADGAL_AS_COVER","Set this photo as the category cover");
define("_MD_TADGAL_TAG","Add new tag");
define("_MD_TADGAL_TAG_TXT","(For multi-tags, please use comma \",\" to seperate them)");
define("_MA_SAVE_EDIT","Save");

//exif
define("_MA_TADGAL_CLICK_BACK","Click to back to previous page");
define("_MD_TADGAL_EXIF","%s  EXIF information");
define("_MD_TADGAL_MAKE","Make");
define("_MD_TADGAL_MODEL","Model");
define("_MD_TADGAL_ORIENTATION","Orientation");
define("_MD_TADGAL_XRESOLUTION","X resolution");
define("_MD_TADGAL_YRESOLUTION","Y resolution");
define("_MD_TADGAL_RESOLUTIONUNIT","Resolution Unit");
define("_MD_TADGAL_YCBCRPOSITIONING","YCbCr positioning");
define("_MD_TADGAL_EXIFOFFSET","Exif offset");
define("_MD_TADGAL_EXPOSURETIME","Exposure Time");
define("_MD_TADGAL_FNUMBER","F number");
define("_MD_TADGAL_EXPOSUREPROGRAM","Exposure Program");
define("_MD_TADGAL_ISOSPEEDRATINGS","ISO Speed Ratings");
define("_MD_TADGAL_EXIFVERSION","Exif version");
define("_MD_TADGAL_DATETIMEORIGINAL","Date Time Original");
define("_MD_TADGAL_DATETIMEDIGITIZED","Date Time Digitized");
define("_MD_TADGAL_COMPONENTSCONFIGURATION","Components Configuration");
define("_MD_TADGAL_SHUTTERSPEEDVALUE","Shutter Speed Value");
define("_MD_TADGAL_APERTUREVALUE","Aperture Value");
define("_MD_TADGAL_EXPOSUREBIASVALUE","Exposure Bias Value");
define("_MD_TADGAL_MAXAPERTUREVALUE","Max Aperture Value");
define("_MD_TADGAL_METERINGMODE","Metering Mode");
define("_MD_TADGAL_FLASH","Flash");
define("_MD_TADGAL_FOCALLENGTH","Focal Length");
define("_MD_TADGAL_FLASHPIXVERSION","Flashpix version");
define("_MD_TADGAL_COLORSPACE","color space");
define("_MD_TADGAL_EXIFIMAGEWIDTH","Exif image width");
define("_MD_TADGAL_EXIFIMAGEHEIGHT","Exif image height");
define("_MD_TADGAL_EXIFINTEROPERABILITYOFFSET","Exif Interoperability Offset");
define("_MD_TADGAL_EXPOSUREINDEX","Exposure index");
define("_MD_TADGAL_SENSINGMETHOD","Sensing Method");
define("_MD_TADGAL_FILESOURCE","File Source");
define("_MD_TADGAL_SCENETYPE","Scene Type");
define("_MD_TADGAL_EXPOSUREMODE","Exposure Mode");
define("_MD_TADGAL_WHITEBALANCE","White Balance");
define("_MD_TADGAL_DIGITALZOOMRATIO","Digital zoom Ratio");
define("_MD_TADGAL_SCENECAPTUREMODE","Scene Capture Mode");
define("_MD_TADGAL_GAINCONTROL","Gain Control");
define("_MD_TADGAL_CONTRAST","Contrast");
define("_MD_TADGAL_SATURATION","Saturation");
define("_MD_TADGAL_SHARPNESS","Sharpness");
define("_MD_TADGAL_COMPRESSION","Compression");
define("_MD_TADGAL_JPEGIFOFFSET","Thumbnail JPEG Interchange Format Offset");
define("_MD_TADGAL_JPEGIFBYTECOUNT","Thumbnail JPEG Interchange Format Length");
define("_MD_TADGAL_IFD1OFFSET","IFD1 offset");




define("_MA_TADGAL_CANT_OPEN","Can not creat \"%s\"");
define("_MA_TADGAL_CANT_WRITE","Can not write \"%s\"");

//xppw.php
define("_MD_TADGAL_WIZARDNAME","Digital photo album \"%s\" ");
define("_MD_TADGAL_WIZARDDESC","Batch upload photos to album \"%s\" ");
define("_MD_TADGAL_INPUT_TITLE","Please input your user name and password on website \"%s\"");
define("_MD_TADGAL_INPUT_ID","User name:");
define("_MD_TADGAL_INPUT_PASS","Password:");
define("_MD_TADGAL_SELECT_DIR","Please select the directory you want to post");
define("_MD_TADGAL_NO_POST_POWER","Can not find authorized category for you to upload!");
define("_MD_TADGAL_WIZARD_HEADLINE","Tad Gallery Digital Photo Album Post Wizard");
define("_MD_TADGAL_WIZARD_BYLINE","http://tad.tnc.edu.tw");




define("_MD_TADGAL_XPPW_PAGE","<h3>XP Upload Photo Description</h3>
	<ol>
	<li>Please<a href='{$_SERVER['PHP_SELF']}?step=reg'>download our speciallized \"reg\" file</a>,then double click the file to install.</li>
	<li>Use file manager, open the folder of your photos</li>
	<li>Select photos, press\"Post selected items to website\"</li>
	<li>Follow instructions to upload photos. Thumbnails are not needed in upload process.(It is optional)</li>
	<li>After upload finished, execute BATCH IMPORT function on website to import photos into album.</li>
	</ol>");


define("_MD_TADGAL_COVER","Select cover image");

?>
