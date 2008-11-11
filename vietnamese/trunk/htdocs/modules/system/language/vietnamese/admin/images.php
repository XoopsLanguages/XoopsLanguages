<?php
// $Id: images.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%% Image Manager %%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%%
//%%%%%%    Ngày 19/09/2008 %%%%%%%%%%%%%%%%%%%
define('_MD_IMGMAIN','Quản lý hình ảnh');//Image Manager Main
define('_MD_ADDIMGCAT','Tạo thêm danh mục ảnh:');//Add Image Category:
define('_MD_EDITIMGCAT','Chỉnh sửa danh mục ảnh:');//Edit Image Category:
define('_MD_IMGCATNAME','Tên chuyên mục:');//Category Name:
define('_MD_IMGCATRGRP','Lựa chọn nhóm cho sử dụng mục quản lý ảnh:<br /><br /><span style="font-weight: normal;">Đây là những nhóm được cho phép để sử dụng mục quản lý ảnh để được chọn lựa những ảnh nhưng không được phép tải lên.  Nhóm ban quản trị thì được tự động phép.</span>');//Select groups for image manager use:<br /><br /><span style="font-weight: normal;">These are groups allowed to use the image manager for selecting images but not uploading. Webmaster has automatic access.</span>
define('_MD_IMGCATWGRP','Lựa chọn nhóm được phép tải lên hình ảnh :<br /><br /><span style="font-weight: normal;">Là cách dùng tiêu biểu cho các điều hành viên và ban quản trị.</span>');//Select groups allowed to upload images:<br /><br /><span style="font-weight: normal;">Typical usage is for moderator and admin groups.</span>
define('_MD_IMGCATWEIGHT','Hiển thị theo thứ tự trong quản lý ảnh:');//Display order in image manager:
define('_MD_IMGCATDISPLAY','Hiển thị danh mục nầy?');//Display this category?
define('_MD_IMGCATSTRTYPE','Thư mục cho hình ảnh được tải lên:');//Images are uploaded to:
define('_MD_STRTYOPENG','Cái này không thể được thay đổi về sau!');//This can not be changed afterwards!
define('_MD_INDB',' Lưu trong cơ sở dử liệu (as binary "blob" data)');//Store in the database (as binary "blob" data)
define('_MD_ASFILE',' Lưu bằng hồ sơ (trong thư mục upload)<br />');//Store as files (in uploads directory)<br />
define('_MD_RUDELIMGCAT','Bạn có chắc chắn muốn xóa bỏ danh mục nầy và tất cả hình ảnh ở trong đây?');//Are you sure that you want to delete this category and all of its images files?
define('_MD_RUDELIMG','Bạn có chắc chắn muốn xóa bỏ những hình ảnh nầy không?');//Are you sure that you want to delete this images file?
define('_MD_FAILDEL', 'Không xóa được ảnh %s trong cơ sở dử liệu');//Failed deleting image %s from the database
define('_MD_FAILDELCAT', 'Không xóa được danh mục ảnh %s trong cơ sở dử liệu');//Failed deleting image category %s from the database
define('_MD_FAILUNLINK', 'Không xóa được ảnh %s trong thư mục máy chủ');//Failed deleting image %s from the server directory
?>