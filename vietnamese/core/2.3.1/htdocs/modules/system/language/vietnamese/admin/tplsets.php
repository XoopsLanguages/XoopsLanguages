<?php
// $Id: tplsets.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%% Template Manager %%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%%
//%%%%%%    Ngày 20/09/2008 %%%%%%%%%%%%%%%%%%%
define('_MD_TPLMAIN','Quản lý khung mẫu');//
define('_MD_INSTALL','Cài đặt');//Install
define('_MD_EDITTEMPLATE','Sửa hồ sơ khung mẫu');//Edit template file
define('_MD_FILENAME','Tên hồ sơ');//File name
define('_MD_FILEDESC','Mô tả');//Description
define('_MD_LASTMOD','Lần cuối cập nhật');//Last modified
define('_MD_FILEMOD','Lần cuối cập nhật (Hồ sơ)');//Last modified (file)
define('_MD_FILECSS','CSS');//
define('_MD_FILEHTML','HTML');//
define('_MD_AM_BTOTADMIN','Trở lại quản lý khung mẫu');//Back to template set manager
define('_MD_RUSUREDELTH','Bạn có chắc chắn muốn xóa những khung mẫu này và mọi dữ liệu trong đó?');//Are you sure that you want to delete this template set and all its template data?
define('_MD_RUSUREDELTPL','Bạn có chắc chắn muốn xóa những dữ liệu của khung mẫu nầy?');//Are you sure that you want to delete this template data?
define('_MD_PLZINSTALL','Nhấn vào nút ở dưới để bắt đầu sự cài đặt');//Press the button below to start installation
define('_MD_PLZGENERATE','Nhấn vào nút ở dưới để để tạo hồ sơ');//Press the button below to generate file(s)
define('_MD_CLONETHEME','Nhái ra tập khung mẫu nầy');//Clone a template set
define('_MD_THEMENAME','Tập khung mẫu cơ sở');//Base template set
define('_MD_NEWNAME','Hãy điền vào tên cho tập khung mẫu mới nầy');//Enter new template set name
define('_MD_IMPORT','Nhập vào');//Import
define('_MD_RUSUREIMPT','Nhập vào các dữ liệu khung mẫu từ những thư mục khung mẫu sẽ ghi đè lên những thay đổi trong cơ sở dữ liệu.<br />Nhấn "Nhập vào" để bắc đầu.');//Importing template data from the templates directory will overwrite your changes in database.<br />Click "Import" to proceed.
define('_MD_THMSETNAME','Tên');//Name
define('_MD_CREATED','Ngày tạo ra');//Created
define('_MD_SKIN','Da');//Skin
define('_MD_TEMPLATES','Khung mẫu');//Templates
define('_MD_EDITSKIN','Soạn thảo da');//Edit skin
define('_MD_NOFILE','Không có hồ sơ');//No File
define('_MD_VIEW','Xem');//View
define('_MD_COPYDEFAULT','Sao chép hồ sơ mặc định');//Copy default file
define('_MD_DLDEFAULT','tải xuống hồ sơ mặc định');//Download default file
define('_MD_VIEWDEFAULT','Xem khung mẫu mặc định');//View default template
define('_MD_DOWNLOAD','Tải xuống');//Download
define('_MD_UPLOAD','Tải lên');//Upload
define('_MD_GENERATE','Tạo ra');//Generate
define('_MD_CHOOSEFILE','Chọn hồ sơ để tải lên');//Choose file to upload
define('_MD_UPWILLREPLACE','Tải lên hồ sơ nầy sẽ làm ghi đè lên các dữ liệu trong cơ sở dữ liệu!');//Uploading this file will overwrite the data in database!
define('_MD_UPLOADTAR','Tải lên tập khung mẫu này');//Upload a template set
define('_MD_CHOOSETAR','Chọn một tập khung mẫu để được tải lên');//Choose a template set package to upload
define('_MD_ONLYTAR','Phải là hồ sơ dạng tar.gz/.tar với cấu trúc hợp lệ cho tập khung mẫu XOOPS');//Must be a tar.gz/.tar file with a valid XOOPS template set structure
define('_MD_NTHEMENAME','Tên cho tập khung mẫu mới');//New template set name
define('_MD_ENTERTH','Nhập vào tên cho bộ tập khung mẫu này. Để trống sẽ được dò tìm tự động.');//Enter a template set name for this package. Leave it blank for automatic detection.
define('_MD_TITLE','Tiêu đề');//Title
define('_MD_CONTENT','Nội dung');//Content
define('_MD_ACTION','Thao tác');//Action
define('_MD_DEFAULTTHEME','Trang của bạn đang dùng tập khung mẫu nầy là mặc định');//Your site uses this template set as default
define('_MD_AM_ERRTHEME','Những bộ tập khung mẫu sau đây không có dữ liệu hồ sơ da hợp lệ. Nhấn xóa để loại bỏ dữ liệu liên quan đến tập khung mẫu nầy');//The following template sets have no valid skin files data. Press delete to remove data related to the template set.
define('_MD_SKINIMGS','Hồ sơ hình ảnh da');//Skin image files
define('_MD_EDITSKINIMG','Sửa hình ảnh da');//Edit skin image files
define('_MD_IMGFILE','Tên hồ sơ');//File name
define('_MD_IMGNEWFILE','Tải lên hồ sơ mới');//Upload new file
define('_MD_IMGDELETE','Xóa bỏ');//Delete
define('_MD_ADDSKINIMG','Thêm hồ sơ hình ảnh da');//Add skin image file
define('_MD_BLOCKHTML','Khối HTML');//Block HTML
define('_MD_IMAGES','Hình ảnh');//Images
define('_MD_NOZLIB','Hỗ trợ Zlib phải được mở lên trên máy chủ của bạn');//Zlib support must be enabled on your server
define('_MD_LASTIMP','Lần cuối nhập vào');//Last Imported
define('_MD_FILENEWER','Một hồ sơ mới hơn nhưng chưa được nhập vào tuy thế nó đã có sẵn trong thư mục <strong>khung mẫu</strong>.');//A newer file that has not been imported yet exists under the <strong>templates</strong> directory.
define('_MD_FILEIMPORT','Một hồ sơ củ hơn nhưng chưa được nhập vào tuy thế nó đã có sẵn trong thư mục <strong>khung mẫu</strong>.');//An older file that has not been imported yet exists under the <strong>templates</strong> directory.
define('_MD_FILEGENER','Hồ sơ Khung mẫu không tồn tại. Nó có thể được tạo ra (sao chép từ tập khung mẫu <b> mặc định</b>), tải lên, hoặc nhập vào từ thư mục <strong>khung mẫu</strong>.');//Template file does not eixst. It can be generated (copied from the <strong>default</strong> template), uploaded, or imported from the <strong>templates</strong> directory.
?>