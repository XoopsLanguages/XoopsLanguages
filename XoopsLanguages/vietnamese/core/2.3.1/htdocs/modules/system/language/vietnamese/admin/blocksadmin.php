<?php
// $Id: blocksadmin.php 1503 2008-04-26 11:57:19Z phppp $
//%%%%%%	Admin Module Name  Blocks 	%%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%%
//%%%%%%    Ngày 01/06/2008 %%%%%%%%%%%%%%%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	blocks.php 	%%%%%
define("_AM_BADMIN","Quản lý khối");//Blocks Administration
define("_AM_ADDBLOCK","Thêm khối mới");//Add a new block
define("_AM_LISTBLOCK","Hiển thị tất cả khối");//List all blocks
define("_AM_SIDE","Bên lề");//Side
define("_AM_BLKDESC","Miêu tả");//Block Description
define("_AM_TITLE","Tiêu đề");//Title
define("_AM_WEIGHT","Thứ tự");//Weight
define("_AM_ACTION","Thao tác");//Action
define("_AM_BLKTYPE","Loại khối");//Block Type
define("_AM_LEFT","Trái");//Left
define("_AM_RIGHT","Phải");//Right
define("_AM_CENTER","Trung tâm");//Center
define("_AM_VISIBLE","Cho thấy");//Visible
define("_AM_POSCONTT","Vị trí của nội dung bổ sung");//Position of the additional content
define("_AM_ABOVEORG","Ở trên nội dung gốc");//Above the original content
define("_AM_AFTERORG","Ở sau nội dung gốc");//After the original content
define("_AM_EDIT","Sửa");//Edit
define("_AM_DELETE","Xóa bỏ");//Delete
define("_AM_SBLEFT","Khối bên lề - Trái");//Side Block - Left
define("_AM_SBRIGHT","Khối bên lề - Phải");//Side Block - Right
define("_AM_CBLEFT","Khối trung tâm - Trái");//Center Block - Left
define("_AM_CBRIGHT","Khối trung tâm - Phải");//Center Block - Right
define("_AM_CBCENTER","Khối trung tâm - Giửa");//Center Block - Center
define("_AM_CBBOTTOMLEFT","Khối trung tâm - Ở dưới trái");//Center Block - Bottom left
define("_AM_CBBOTTOMRIGHT","Khối trung tâm - Ở dưới phải");//Center Block - Bottom right
define("_AM_CBBOTTOM","Khối trung tâm - ở dưới");//Center Block - Bottom
define("_AM_CONTENT","Nội dung");//Content
define("_AM_OPTIONS","Tùy chọn");//Options
define("_AM_CTYPE","Loại nội dung");//Content Type
define("_AM_HTML","HTML");
define("_AM_PHP","PHP Script");
define("_AM_AFWSMILE","Khuôn dạng tự động (cho phép hình mặt cười)");//Auto Format (smilies enabled)
define("_AM_AFNOSMILE","Khuôn dạng tự động (không cho phép hình mặt cười)");//Auto Format (smilies disabled)
define("_AM_SUBMIT","Gởi đi");//Submit
define("_AM_CUSTOMHTML","Khối cá nhân (HTML)");//Custom Block (HTML)
define("_AM_CUSTOMPHP","Khối cá nhân (PHP)");//Custom Block (PHP)
define("_AM_CUSTOMSMILE","Khối cá nhân (Khuôn dạng tự động + Hình mặt cười)");//Custom Block (Auto Format + smilies)"
define("_AM_CUSTOMNOSMILE","Khối cá nhân (Khuôn dạng tự động)");//Custom Block (Auto Format)
define("_AM_DISPRIGHT","Chỉ cho thấy khối bên phải");//Display only rightblocks
define("_AM_SAVECHANGES","Lưu thay đổi");//Save Changes
define("_AM_EDITBLOCK","Chỉnh sửa khối");//Edit a block
define("_AM_SYSTEMCANT","Khối hệ thống không thể xóa bỏ được!");//System blocks cannot be deleted!
define("_AM_MODULECANT","Khối này không thể xóa bỏ trực tiếp được! Nếu bạn muốn tắt đi cái khối nầy, bạn phải khử kích hoạt mô-đun này.");//This block cannot be deleted directly! If you wish to disable this block, deactivate the module.
define("_AM_RUSUREDEL","Bạn có chắc chắn muốn hũy bỏ cái khối nầy không <strong>%s</strong>?");//Are you sure you want to delete block <strong>%s</strong>?
define("_AM_NAME","Tên");//Name
define("_AM_USEFULTAGS","Những nhãn hữu ích:");//Useful Tags:
define("_AM_BLOCKTAG1","%s sẽ được %s");//%s will print %s
define('_AM_SVISIBLEIN','Hiển thị trong %s');//Blocks visible in %s
define('_AM_TOPPAGE','Trang đầu');//Top Page
define('_AM_VISIBLEIN','Hiển thị trong');//Visible in
define('_AM_ALLPAGES','Tất cả trang');//All Pages
define('_AM_TOPONLY','Chỉ đầu trang');//Top Page Only
define('_AM_ADVANCED','Thiết đặt tiên tiến');//Advanced Settings
define('_AM_BCACHETIME','Bộ đệm nhớ');//Cache lifetime
define('_AM_BALIAS','Tên Alias');//Alias name
define('_AM_CLONE','Nhái khối');  // clone a block
define('_AM_CLONEBLK','Khối được nhái'); // cloned block
define('_AM_CLONEBLOCK','Tạo ram một khối nhái');//Create a clone block
define('_AM_NOTSELNG',"không có chọn '%s'!"); // is not selected!
define('_AM_EDITTPL','Sửa khung mẫu');//Edit Template
define('_AM_MODULE','Mô-đun');//Module
define('_AM_GROUP','Nhóm truy nhập');//Groups access
define('_AM_UNASSIGNED','Chưa gán');//Unassigned

define("_AM_CUSTOM","Khối cá nhân");//Custom Block
define('_AM_GENERATOR','Khối của %s');//Blocks generated by %s
define('_AM_TYPES','Tất cả loại');//All types
?>