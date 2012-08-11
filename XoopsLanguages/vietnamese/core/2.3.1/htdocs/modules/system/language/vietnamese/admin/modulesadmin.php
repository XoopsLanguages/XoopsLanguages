<?php
// $Id: modulesadmin.php 1441 2008-04-15 04:13:21Z julionc $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%%
//%%%%%%    Ngày 19/09/2008 %%%%%%%%%%%%%%%%%%%
define("_MD_AM_MODADMIN","Quản lý mô-đun");//Modules Administration
define("_MD_AM_MODULE","Mô-đun");
define("_MD_AM_VERSION","Phiên bản");
define("_MD_AM_LASTUP","Lần cuối cập nhật");//Last Update
define("_MD_AM_DEACTIVATED","Khử hoạt tính");//Deactivated
define("_MD_AM_ACTION","Thao tác");
define("_MD_AM_DEACTIVATE","Khử hoạt tính");//Deactivate
define("_MD_AM_ACTIVATE","Kích hoạt");//Activate
define("_MD_AM_UPDATE","Cập nhật");//Update
define("_MD_AM_DUPEN","Có hai bản giống nhao trong các bảng mô-đun!");//Duplicate entry in modules table!
define("_MD_AM_DEACTED","Mô-đun được chọn đã được khử hoạt tính. Bây giờ, bạn có thể an toàn hũy bỏ thiết đặt mô-đun nầy.");//The selected module has been deactivated. You can now safely uninstall the module.
define("_MD_AM_ACTED","Mô-đun được chọn đã được kích hoạt!");//The selected module has been activated!
define("_MD_AM_UPDTED","Mô-đun được chọn đã được cập nhật!");//The selected module has been updated!
define("_MD_AM_SYSNO","Hệ thống mô-đun không thể bị khử hoạt tính.");//System module cannot be deactivated.
define("_MD_AM_STRTNO","Mô-đun này được chọn cho sự khởi đầu cho trang chủ của bạn. Bạn có thể thay đổi và tùy chọn bất cứ mô-đun nào cho sự khởi đầu của trang chủ.");//This module is set as your default start page. Please change the start module to whatever suits your preferences.

// added in RC2
define("_MD_AM_PCMFM","Vui lòng xác nhận:");//Please confirm:

// added in RC3
define("_MD_AM_ORDER","Thứ tự");//Order
define("_MD_AM_ORDER0","(0 = ẩn)");//0 = hide
define("_MD_AM_ACTIVE","Linh hoạt");//Active
define("_MD_AM_INACTIVE","Không linh hoạt");//Inactive
define("_MD_AM_NOTINSTALLED","Chưa cài đặt");//Not Installed
define("_MD_AM_NOCHANGE","Không thay đổi");//No Change
define("_MD_AM_INSTALL","Cài đặt");//Install
define("_MD_AM_UNINSTALL","Xóa cài đặt");//Uninstall
define("_MD_AM_SUBMIT","Gởi đi");//Submit
define("_MD_AM_CANCEL","Hũy bỏ");//Cancel
define("_MD_AM_DBUPDATE","Cơ sở dữ liệu cập nhật thành công!");//Database updated successfully!
define("_MD_AM_BTOMADMIN","Trở lại khu quản lý mô-đun");//Back to Module Administration page

// %s represents module name
define("_MD_AM_FAILINS","Không cài đặt được cho %s.");//Unable to install %s.
define("_MD_AM_FAILACT","Không kích hoạt được cho %s.");//Unable to activate %s.
define("_MD_AM_FAILDEACT","Không khử hoạt tính được cho %s.");//Unable to deactivate %s.
define("_MD_AM_FAILUPD","Không cập nhật được cho %s.");//Unable to update %s.
define("_MD_AM_FAILUNINS","Không khử cài đặt được cho %s.");//Unable to uninstall %s.
define("_MD_AM_FAILORDER","Không có khả năng xấp xếp lại %s.");//Unable to reorder %s.
define("_MD_AM_FAILWRITE","Không thể viết được tới danh mục chính.");//Unable to write to main menu.
define("_MD_AM_ALEXISTS","Mô-đun %s đã có sẵn.");//Module %s already exists.
define("_MD_AM_ERRORSC","Lỗi:");//Error(s):
define("_MD_AM_OKINS","Mô-đun %s được cài đặt thành công.");//Module %s installed successfully.
define("_MD_AM_OKACT","Mô-đun %s được kích hoạt thành công.");//Module %s activated successfully.
define("_MD_AM_OKDEACT","Mô-đun %s được khử hoạt tính thành công.");//Module %s deactivated successfully.
define("_MD_AM_OKUPD","Mô-đun %s được cập nhật thành công.");//Module %s updated successfully.
define("_MD_AM_OKUNINS","Mô-đun %s được hũy cài đặt thành công.");//Module %s uninstalled successfully.
define("_MD_AM_OKORDER","Mô-đun %s được thay đổi thành công.");//Module %s changed successfully.
define('_MD_AM_RUSUREINS','Nhấn vào nút dưới để bắt đầu cài đặt mô-đun nầy');//Press the button below to install this module
define('_MD_AM_RUSUREUPD','Nhấn vào nút dưới để cập nhật mô-đun nầy');//Press the button below to update this module
define('_MD_AM_RUSUREUNINS','Bạn có chắc chắn hũy cài đặt mô-đun nầy không?');//Are you sure you would like to uninstall this module?
define('_MD_AM_LISTUPBLKS','Những khối sao đây sẽ được cập nhật.<br />Chọn những khối của nội dung (khung mẫu và tùy chọn) có thể bị ghi đè lên.<br />');//The following blocks will be updated.<br />Select the blocks of which contents (template and options) may be overwritten.<br />
define('_MD_AM_NEWBLKS','Những khối mới');//New Blocks
define('_MD_AM_DEPREBLKS','Những khối không dùng');//Deprecated Blocks
// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Đang cài đặt ');//Installing
define('_MD_AM_TABLE_RESERVED','%s là một bảng được dành riêng cho việc khác!');//%s is a reserved table!
define('_MD_AM_CREATE_TABLES','Tạo ra bảng...');//Creating tables...
define('_MD_AM_TABLE_CREATED','Bảng %s được tạo');//Table %s created
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Dữ liệu được chèn vào bảng %s');//Data inserted to table
define('_MD_AM_INSERT_DATA_FAILD','Không thể chèn %s vào cơ sở dữ liệu.');//Could not insert %s to database.
define('_MD_AM_INSERT_DATA_DONE','Dữ liệu Mô-đun được chèn vào thành công.');//Module data inserted successfully.
define('_MD_AM_MODULEID',' Mô-đun mã số: %s');//Module ID: %s
define('_MD_AM_SQL_FOUND','Hồ sơ SQL được tìm thấy ở trong %s ');//SQL file found at %s
define('_MD_AM_SQL_NOT_FOUND','Hồ sơ SQL không tìm thấy được ở trong %s');//SQL file not found at %s
define('_MD_AM_SQL_NOT_CREATE','LỖI: Không thể tạo ra %s ');//ERROR: Could not create %s 
define('_MD_AM_SQL_NOT_VALID','%s không phãi là một SQL hợp lệ!');//%s is not a valid SQL!

define('_MD_AM_GROUP_ID',' Nhóm mã số: %s ');//Group ID: %s 
define('_MD_AM_NAME',' Tên: ');//Name: 
define('_MD_AM_VALUE',' Giá trị: ');//Value: 

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Thêm những khung mẫu...');//Adding templates...
define('_MD_AM_TEMPLATES_DELETE','Xóa bỏ những khung mẫu...');//Deleting templates...
define('_MD_AM_TEMPLATES_UPDATE','Cập nhật những khung mẫu...');//Updating templates...
define('_MD_AM_TEMPLATE_ID','Khung mẫu mã số: %s ');//Template ID: %s 
define('_MD_AM_TEMPLATE_ADD_DATA','Khung mẫu %s đã được thêm vào trong cơ sở dữ liệu');//Template %s added to the database
define('_MD_AM_TEMPLATE_ADD_ERROR','LỖI: Không thể chèn khung mẫu %s vào cơ sở dữ liệu.');//ERROR: Could not insert template %s to the database.
define('_MD_AM_TEMPLATE_COMPILED','Khung mẫu %s được biên soạn ');//Template %s compiled
define('_MD_AM_TEMPLATE_COMPILED_FAILED','LỖI: Không biên soạn khung mẫu %s được ');//ERROR: Failed compiling template %s 
define('_MD_AM_TEMPLATE_DELETE_DATA','Khung mẫu %s đã được xóa bỏ khỏi cơ sở dữ liệu. ');//Template %s deleted from the database. 
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','LỖI: Không thể xóa bỏ khung mẫu %s ra khỏi cơ sở dữ liệu.');// ERROR: Could not delete template %s from the database. 
define('_MD_AM_TEMPLATE_INSERT_DATA','Khung mẫu %s đã được chèn vào cơ sở dữ liệu. ');//Template %s inserted to the database. 
define('_MD_AM_TEMPLATE_RECOMPILE','Khung mẫu %s đã được biên soạn lại');//Template %s recompiled
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','LỖI: Khung mẫu %s biên soạn lại bất thành');//ERROR: Template %s recompile failed
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','LỖI: Biên soạn lại bất thành cho khung mẫu %s ');//ERROR: Could not recompile template %s 
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','LỖI: Không thể xóa bỏ khung mẫu củ %s. Hủy bỏ sự cập nhật cho hồ sơ này. ');//ERROR: Could not delete old template %s. Aborting update of this file. 
define('_MD_AM_TEMPLATE_UPDATE','Khung mẫu %s được cập nhật. ');//Template %s updated. 
define('_MD_AM_TEMPLATE_UPDATE_ERROR','LỖI: Không cập nhật được khung mẫu %s. ');//ERROR: Could not update %s template. 

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Thêm khối...');//Adding blocks...
define('_MD_AM_BLOCKS_DELETE','Xóa bỏ khối...');//Deleting block...
define('_MD_AM_BLOCKS_REBUILD','Xây dựng lại khối...');//Rebuilding blocks...

define('_MD_AM_BLOCK_ID',' Khối mã số: %s ');//Block ID: %s 

define('_MD_AM_BLOCK_ACCESS','Thêm quyền truy nhập cho khối');//Added block access right
define('_MD_AM_BLOCK_ACCESS_ERROR','LỖI: Không thể thêm quyền truy nhập cho khối');//ERROR: Could not add block access right
define('_MD_AM_BLOCK_ADD','Khối %s được tạo ');//Block %s added 
define('_MD_AM_BLOCK_ADD_ERROR','LỖI: Không thể thêm khối %s vào cơ sở dữ liệu! ');//ERROR: Could not add block %s to the database! 
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','LỖI cơ sở dữ liệu: %s ');//Database error: %s 
define('_MD_AM_BLOCK_CREATED','Khối %s được tạo ');//Block %s created 
define('_MD_AM_BLOCK_DELETE','Khối %s được xóa bỏ. ');//Block %s deleted. 
define('_MD_AM_BLOCK_DELETE_DATA','Khối khung mẫu %s được xóa bỏ khỏi cơ sở dữ liệu. ');//Block template %s deleted from the database. 
define('_MD_AM_BLOCK_DELETE_ERROR','LỖI: Không thể xóa bỏ khối %s');//ERROR: Could not delete block %s
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','LỖI: Không thể xóa bỏ khối khung mẫu %s ra khỏi cơ sở dữ liệu');//ERROR: Could not delete block template %s from the database
define('_MD_AM_BLOCK_DEPRECATED','Những khối khung mẫu %s không dùng nữa  ');//Block template %s deprecated 
define('_MD_AM_BLOCK_DEPRECATED_ERROR','LỖI: Không thể loại bỏ những khối khung mẫu không dùng nữa.  ');//ERROR: Could not remove deprecated block template.  
define('_MD_AM_BLOCK_UPDATE','Khối %s được cập nhật. ');//Block %s updated. 
/* Configs */
define('_MD_AM_GONFIG_ID','Cấu hình mã số: %s');//Config ID: %s
define('_MD_AM_MODULE_DATA_ADD','Thêm dữ liệu cấu hình mô đun...');//Adding module config data...
define('_MD_AM_MODULE_DATA_DELETE','Xóa bỏ tùy chọn cấu hình mô đun...');//Deleting module config options...
define('_MD_AM_MODULE_DATA_UPDATE','Dữ liệu mô đun được cập nhật.');//Module data updated.

define('_MD_AM_CONFIG_ADD',' Cấu hình tùy chọn được thêm vào');//Config option added
define('_MD_AM_CONFIG_DATA_ADD',' Cấu hình %s được tạo thêm trong cơ sở dữ liệu');//Config %s added to the database
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' LỖI: Không thể chèn cấu hình %s vào cơ sở dữ liệu. ');//ERROR: Could not insert config %s to the database. 
define('_MD_AM_GONFIG_DATA_DELETE','Dữ liệu cấu hình được xóa bỏ khỏi cơ sở dữ liệu. ');//Config data deleted from the database. 
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','LỖI: Không thể xóa bỏ dữ liệu cấu hình ra khỏi cơ sở dữ liệu');//ERROR: Could not delete config data from the database

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Thiết đặt quyền cho nhóm...');//Setting group rights...

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','LỖI: Không thể xóa bỏ quyền của nhóm ');//ERROR: Could not delete group permissions 
define('_MD_AM_GROUP_PERMS_DELETED','Quyền cho phép của nhóm được xóa bỏ ');//Group permissions deleted 

define('_MD_AM_ACCESS_ADMIN_ADD','Thêm quyền truy nhập quản lý cho nhóm mã số %s');//Added admin access right for Group ID %s
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','LỖI: Không thể thêm được quyền truy nhập quản lý cho nhóm mã số %s');//ERROR: Could not add admin access right for Group ID %s
define('_MD_AM_ACCESS_USER_ADD_ERROR','Thêm quyền truy nhập thành viên cho nhóm mã số: %s');//Added user access right for Group ID: %s
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','LỖI: Không thể thêm được quyền truy nhập thành viên cho nhóm mã số: %s');//ERROR: Could not add user access right for Group ID: %s

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Không thực hiện được %s');//Failed to execute %s
define('_MD_AM_FAILED_SUCESS','%s thực hiện thành công.');//%s executed successfully.

define('_MD_AM_DELETE_ERROR','LỖI: Không thể xóa bỏ được %s');//ERROR: Could not delete %s
define('_MD_AM_UPDATE_ERROR','LỖI: Không cập nhật được %s');//ERROR: Could not update %s
define('_MD_AM_DELETE_MOD_TABLES','Xóa bỏ những bảng mô đun...');//Deleting module tables...
define('_MD_AM_COMMENTS_DELETE','Xóa bỏ những bình luận...');//Deleting comments...
define('_MD_AM_COMMENTS_DELETE_ERROR','LỖI: Không thể xóa bỏ những bình luận');//ERROR: Could not delete comments
define('_MD_AM_COMMENTS_DELETED','Những bình luận được xóa bỏ');//Comments deleted

define('_MD_AM_NOTIFICATIONS_DELETE','Xóa bỏ những thông báo...');//Deleting notifications...
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','LỖI: Không thể xóa bỏ những thông báo');//ERROR: Could not delete notifications
define('_MD_AM_NOTIFICATIONS_DELETED','Những thông báo được xóa bỏ');//Notifications deleted

define('_MD_AM_TABLE_DROPPED','Bảng %s được loại bỏ!');//Table %s dropped!
define('_MD_AM_TABLE_DROPPED_ERROR','LỖI: Không loại bỏ được bảng %s');//ERROR: Could not drop table %s
define('_MD_AM_TABLE_DROPPED_FAILDED','LỖI: Không được phép loại bỏ bảng %s ');//ERROR: Not allowed to drop table %s !
?>