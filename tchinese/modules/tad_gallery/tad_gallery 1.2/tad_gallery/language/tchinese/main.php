<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tad 製作
// 製作日期：2008-03-23
// $Id$
// ------------------------------------------------------------------------- //

define("_TO_INDEX_PAGE","電子相簿");
define("_MD_TADGAL_XP_UPLOAD","XP 照片上傳精靈");
define("_MD_TADGAL_UPLOAD_PAGE","上傳照片");
define("_MD_TADGAL_PATCH_UPLOAD_PAGE","批次匯入照片");
define("_TO_ADMIN_PAGE","管理介面");

//分頁物件用的語系
define("_MD_HOMEPAGE","回首頁");
define("_BP_BACK_PAGE","上一頁");
define("_BP_NEXT_PAGE","下一頁");
define("_BP_FIRST_PAGE","第一頁");
define("_BP_LAST_PAGE","最後頁");
define("_BP_GO_BACK_PAGE","前 %s 頁");
define("_BP_GO_NEXT_PAGE","後 %s 頁");
define("_BP_TOOLBAR","共 %s 頁，目前在第 %s 頁：");
define("_BP_DEL_CHK","確定要刪除此資料？");
define("_BP_FUNCTION","功能");
define("_BP_EDIT","編輯");
define("_BP_DEL","刪除");
define("_BP_ADD","新增資料");

//uploads.php
define("_MA_INPUT_FORM","上傳照片");
define("_MA_TADGAL_CATE_SELECT","不分類");
define("_MA_TADGAL_SN","序號");
define("_MA_TADGAL_PHOTO","選擇相片：");
define("_MA_TADGAL_CSN","相片分類：");
define("_MA_TADGAL_NEW_CSN","在左邊分類下再建一個次分類：");
define("_MA_TADGAL_TITLE","相片標題：");
define("_MA_TADGAL_DESCRIPTION","相片說明：");
define("_MA_SAVE","上傳");
define("_TADGAL_IMPORT_UPLOADS_ERROR","上傳 %s 檔案失敗！");
define("_TADGAL_IMPORT_UPLOADS_OK","上傳 %s 檔案成功！");

//index.php
define("_MA_TADGAL_FILENAME","檔名");
define("_MA_TADGAL_SIZE","大小");
define("_MA_TADGAL_TYPE","類型");
define("_MA_TADGAL_UID","發佈者");
define("_MA_TADGAL_POST_DATE","發表時間");
define("_MA_TADGAL_COUNTER","計數器");
define("_TADGAL_NO_POWER_TITLE","無法觀看喔！");
define("_TADGAL_NO_POWER_CONTENT","站長並沒有開放「%s」的觀看權限喔！所以您是看不到該相簿的唷～<br />請選擇其他相簿：%s");
define("_TADGAL_NO_PASSWD_CONTENT","「%s」相簿需輸入正確的密碼才看得到喔！");
define("_MA_TADGAL_3D_MODE","用3D藝廊模式播放");
define("_MA_TADGAL_SLIDE_SHOW_MODE","投影片模式播放");
define("_MA_TADGAL_SHOW_ONE_MODE","單一秀圖模式播放");
define("_MD_TADGAL_BACK_CSN","回「%s」分類");
define("_MD_TADGAL_ALL_AUTHOR","全部");

//大量匯入
define("_TADGAL_IMPORT_FILE","欲匯入的檔案");
define("_TADGAL_IMPORT_DIR","上傳資料夾");
define("_TADGAL_IMPORT_DIMENSION","寬 x 高");
define("_TADGAL_IMPORT_SIZE","檔案大小");
define("_TADGAL_PATCH_IMPORT_FORM","批次匯入照片");
define("_TADGAL_UP_IMPORT","匯入");
define("_TADGAL_IMPORT_STATUS","格式或狀態");
define("_TADGAL_IMPORT_EXIST","已存在");
define("_TADGAL_IMPORT_IMPORT_ERROR","匯入 %s 檔案失敗！");
define("_TADGAL_IMPORT_ONLY_ROOT","只有對本模組有管理權限者，才能使用批次匯入功能！");
define("_TADGAL_NO_UPLOAD_POWER","您沒有上傳的權限喔！！");

//view.php
define("_TADGAL_FILE_NOT_EXIST","「%s」檔案不存在");
define("_TADGAL_FILE_COPY_S","點一下，複製小縮圖路徑");
define("_TADGAL_FILE_COPY_M","點一下，複製中縮圖路徑");
define("_TADGAL_FILE_COPY_B","點一下，複製原圖路徑");
define("_TADGAL_DEL_PIC","刪除此圖片");
define("_TADGAL_EDIT_PIC","編輯圖片資訊");
define("_TADGAL_GOOD_PIC","將圖片設為精選圖片");
define("_TADGAL_REMOVE_GOOD_PIC","將精選圖片標記移除");
define("_MA_TADGAL_AS_COVER","設為分類封面");
define("_MD_TADGAL_TAG","新增標籤");
define("_MD_TADGAL_TAG_TXT","（若有多個，請用逗點「,」隔開）");
define("_MA_SAVE_EDIT","儲存");

//exif
define("_MA_TADGAL_CLICK_BACK","點我回上一頁");
define("_MD_TADGAL_EXIF","%s 的 EXIF 資訊");
define("_MD_TADGAL_MAKE","製造廠商");
define("_MD_TADGAL_MODEL","相機型號");
define("_MD_TADGAL_ORIENTATION","方向");
define("_MD_TADGAL_XRESOLUTION","水平解析度");
define("_MD_TADGAL_YRESOLUTION","垂直解析度");
define("_MD_TADGAL_RESOLUTIONUNIT","解析度");
define("_MD_TADGAL_YCBCRPOSITIONING","YCbCr位置控制");
define("_MD_TADGAL_EXIFOFFSET","Exif 偏移量");
define("_MD_TADGAL_EXPOSURETIME","曝光時間");
define("_MD_TADGAL_FNUMBER","有效F值");
define("_MD_TADGAL_EXPOSUREPROGRAM","曝光軟體");
define("_MD_TADGAL_ISOSPEEDRATINGS","ISO感光度");
define("_MD_TADGAL_EXIFVERSION","Exif 版本");
define("_MD_TADGAL_DATETIMEORIGINAL","拍攝時間");
define("_MD_TADGAL_DATETIMEDIGITIZED","電子日期");
define("_MD_TADGAL_COMPONENTSCONFIGURATION","份量配置");
define("_MD_TADGAL_SHUTTERSPEEDVALUE","快門速度");
define("_MD_TADGAL_APERTUREVALUE","光圈");
define("_MD_TADGAL_EXPOSUREBIASVALUE","曝光補償");
define("_MD_TADGAL_MAXAPERTUREVALUE","最大光圈值");
define("_MD_TADGAL_METERINGMODE","測光模式");
define("_MD_TADGAL_FLASH","閃光燈");
define("_MD_TADGAL_FOCALLENGTH","焦距");
define("_MD_TADGAL_FLASHPIXVERSION","Flashpix版本");
define("_MD_TADGAL_COLORSPACE","色彩空間");
define("_MD_TADGAL_EXIFIMAGEWIDTH","Exif 圖片寬度");
define("_MD_TADGAL_EXIFIMAGEHEIGHT","Exif 圖片高度");
define("_MD_TADGAL_EXIFINTEROPERABILITYOFFSET","Exif 通用偏移量");
define("_MD_TADGAL_EXPOSUREINDEX","曝光指數");
define("_MD_TADGAL_SENSINGMETHOD","連續彩色線性傳感器");
define("_MD_TADGAL_FILESOURCE","檔案來源");
define("_MD_TADGAL_SCENETYPE","場景類型");
define("_MD_TADGAL_EXPOSUREMODE","曝光模式");
define("_MD_TADGAL_WHITEBALANCE","白平衡");
define("_MD_TADGAL_DIGITALZOOMRATIO","數位變焦比率");
define("_MD_TADGAL_SCENECAPTUREMODE","場景拍攝模式");
define("_MD_TADGAL_GAINCONTROL","獲得控制");
define("_MD_TADGAL_CONTRAST","對比");
define("_MD_TADGAL_SATURATION","飽和度");
define("_MD_TADGAL_SHARPNESS","銳利度");
define("_MD_TADGAL_COMPRESSION","壓縮");
define("_MD_TADGAL_JPEGIFOFFSET","JPEG縮圖偏移量");
define("_MD_TADGAL_JPEGIFBYTECOUNT","JPEG縮圖數據長度");
define("_MD_TADGAL_IFD1OFFSET","IFD1 偏移量");

define("_MA_TADGAL_CANT_OPEN","無法建立 %s");
define("_MA_TADGAL_CANT_WRITE","無法寫入 %s");

//xppw.php
define("_MD_TADGAL_WIZARDNAME","「%s」電子相簿");
define("_MD_TADGAL_WIZARDDESC","「%s」電子相簿批次上傳相片");
define("_MD_TADGAL_INPUT_TITLE","請輸入您在「%s」網站的帳號密碼");
define("_MD_TADGAL_INPUT_ID","使用者名稱：");
define("_MD_TADGAL_INPUT_PASS","密碼：");
define("_MD_TADGAL_SELECT_DIR","請選擇您要發佈的目錄");
define("_MD_TADGAL_NO_POST_POWER","沒有您可以上傳的分類喔！");
define("_MD_TADGAL_WIZARD_HEADLINE","Tad Gallery 電子相簿相片發佈精靈");
define("_MD_TADGAL_WIZARD_BYLINE","http://tad.tnc.edu.tw");

define("_MD_TADGAL_XPPW_PAGE","<h3>XP 圖片上傳說明</h3>
        <ol>
        <li>請先<a href='{$_SERVER['PHP_SELF']}?step=reg'>下載本站專屬 reg 檔</a>，下載後，點兩下安裝之。</li>
        <li>打開檔案總管，切換到您的圖片資料夾。</li>
        <li>選好圖片，按左邊的「將選取的項目公佈到網頁」</li>
        <li>接著，就按照指示來上傳。上傳時，不需要縮圖（要縮也行啦～）。</li>
        <li>上傳完畢後，連到網站的「批次匯入」，把圖片匯入相簿即可。</li>
        </ol>");

define("_MD_TADGAL_COVER","選擇封面圖");

define("_MA_TADGAL_SHOW_MODE_1","無外框");
define("_MA_TADGAL_SHOW_MODE_2","直角陰影外框");
define("_MA_TADGAL_SHOW_MODE_3","圓角外框");
define("_MA_TADGAL_SHOW_MODE_4","陰影相框");
define("_MA_TADGAL_SHOW_MODE_5","邊緣漸淡");
define("_MA_TADGAL_SHOW_MODE_6","幻燈片外框");

define("_MA_TADGAL_CATE_SHOW_MODE_1","一般的縮圖模式（預設）");
define("_MA_TADGAL_CATE_SHOW_MODE_2","3D藝廊模式");
define("_MA_TADGAL_CATE_SHOW_MODE_3","投影片秀模式");
?>