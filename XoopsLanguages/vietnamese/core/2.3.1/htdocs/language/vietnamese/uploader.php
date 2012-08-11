<?php
// $Id: uploader.php 1386 2008-03-23 03:26:06Z phppp $
//%%%%%%    www.xoopsviet.com  %%%%%%
//%%%%%%    Ngày 17/09/2008 %%%%%%%%%
define("_ER_UP_MIMETYPELOAD","Không tải được các định nghĩa mimetypes");//Error loading mimetypes definition
define("_ER_UP_FILENOTFOUND","Không tìm thấy hồ sơ");//File not found
define("_ER_UP_INVALIDFILESIZE","Kích thước hồ sơ không hợp lệ");//Invalid File Size
define("_ER_UP_FILENAMEEMPTY","Tên hồ sơ chưa có");//Filename Is Empty
define("_ER_UP_NOFILEUPLOADED","Không có hồ sơ nào được tải lên");//No file uploaded
define("_ER_UP_ERROROCCURRED","Lỗi xảy ra: Lỗi #%s");//Error occurred: Error #%s
define("_ER_UP_UPLOADDIRNOTSET","Thư mục Upload chưa có");//Upload directory not set
define("_ER_UP_FAILEDOPENDIR","Không mở được thư mục: %s");//Failed opening directory: %s
define("_ER_UP_FAILEDOPENDIRWRITE","Không mở được thư mục nầy với sự cho phép viết đè lên: %s");//Failed opening directory with write permission: %s
define("_ER_UP_FILESIZETOOLARGE","Kích thước hồ sơ quá lớn (cực đại %u bytes): %u bytes");//File size too large (Maximum %u bytes): %u bytes
define("_ER_UP_FILEWIDTHTOOLARGE","Chiều rộng hồ sơ quá lớn (Cực đại %u px): %u px");//File width too large (Maximum %u px): %u px
define("_ER_UP_FILEHEIGHTTOOLARGE","Chiều cao hồ sơ quá lớn (Cực đại %u px): %u px");//File height too large (Maximum %u px): %u px
define("_ER_UP_MIMETYPENOTALLOWED","Kiễu MINE không được cho phép: %s");//MIME type not allowed: %s
define("_ER_UP_FAILEDUPLOADFILE","Không tải lên được hồ sơ: %s");//Failed uploading file: %s
define("_ER_UP_FAILEDFETCHIMAGESIZE","Không kiểm tra được kích thước của hồ sơ %s, bỏ qua kiểm tra kích thước...");//Failed fetching image size of %s, skipping max dimension check..
define("_ER_UP_UNKNOWNFILETYPEREJECTED","Hồ sơ không nguồn gốc sẽ không chấp nhận");//Unknown filetype rejected
define("_ER_UP_ERRORSRETURNED","Lỗi khi đang tải lên");//Errors Returned While Uploading
define("_ER_UP_INVALIDIMAGEFILE","Hồ sơ ảnh không hợp lệ");//Invalid image file
define("_ER_UP_SUSPICIOUSREFUSED","Ảnh đáng nghi ngờ và bị từ chối");//Suspicious image upload refused
define("_ER_UP_INVALIDFILENAME","Tên hồ sơ không hợp lệ");//Invalid file name
define("_ER_UP_FAILEDSAVEFILE","Không lưu hồ sơ được %s");//Failed to save file to %s
?>