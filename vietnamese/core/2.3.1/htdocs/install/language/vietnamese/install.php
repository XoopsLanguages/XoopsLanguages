<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @language	Xoops Việt Nam http://www.xoopsviet.com
 * @version     $Id: install.php 1512 2008-04-27 10:43:45Z phppp $
 */
define( "SHOW_HIDE_HELP", "Show/hide help text" );
// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s extension" );
define( "CHAR_ENCODING", "Mã hóa ký tự" );
define( "XML_PARSING", "XML parsing" );
define( "REQUIREMENTS", "Điều kiện tất yếu" );
define( "_PHP_VERSION", "Phiên bản PHP" );
define( "RECOMMENDED_SETTINGS", "Khuyến khích thiết đặt" );
define( "RECOMMENDED_EXTENSIONS", "Khuyến khích extensions" );
define( "SETTING_NAME", "Tên thiết đặt" );
define( "RECOMMENDED", "Khuyến khích" );
define( "CURRENT", "Hiện thời" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Những extensions này không cần thiết thường xuyên sự sử dụng, nhưng có thể cần thiết để khai thác một số đặc tính (như đa ngôn ngữ hay ứng dụng RSS). Cho nên, khuyến khích nó nên được cài đặt." );
define( "NONE", "Không" );
define( "SUCCESS", "Thành công" );
define( "WARNING", "Lưu ý" );
define( "FAILED", "Lỗi" );
// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "Hướng dẫn Cài Đặt XOOPS" );
define( "LANGUAGE_SELECTION", "Chọn ngôn ngữ" );
define( "LANGUAGE_SELECTION_TITLE", "Chọn ngôn ngữ của bạn");        // L128
define( "INTRODUCTION", "Giới thiệu" );
define( "INTRODUCTION_TITLE", "Chào các bạn đến với hướng dẫn cài đặt XOOPS" );        // L0
define( "CONFIGURATION_CHECK", "Kiễm tra hệ thống" );
define( "CONFIGURATION_CHECK_TITLE", "Kiễm tra hệ thống của máy chủ" );
define( "PATHS_SETTINGS", "Thiết đặt đường liên kết" );
define( "PATHS_SETTINGS_TITLE", "Thiết đặt đường liên kết" );
define( "DATABASE_CONNECTION", "Kết nối Cơ sở dữ liệu" );
define( "DATABASE_CONNECTION_TITLE", "Kết nối Cơ sở dữ liệu" );
define( "DATABASE_CONFIG", "Cấu hình Cơ sở dữ liệu" );
define( "DATABASE_CONFIG_TITLE", "Cấu hình Cơ sở dữ liệu" );
define( "CONFIG_SAVE", "Lưu giữ cấu hình hệ thống" );
define( "CONFIG_SAVE_TITLE", "Lưu giữ cấu hình hệ thống của bạn " );
define( "TABLES_CREATION", "Tạo bảng" );
define( "TABLES_CREATION_TITLE", "Tạo ra những bảng cơ sở dữ liệu" );
define( "INITIAL_SETTINGS", "Thiết đặt ban đầu" );
define( "INITIAL_SETTINGS_TITLE", "Xin điền vào những sự thiết đặt ban đầu" );
define( "DATA_INSERTION", "Chèn vào dữ liệu" );
define( "DATA_INSERTION_TITLE", "Lưu giữ những thiết đặt vào cơ sở dữ liệu" );
define( "WELCOME", "Chúc Mừng" );
define( "WELCOME_TITLE", "Chào mừng đến với trang XOOPS của bạn" );        // L0
// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS Physical paths" );
define( "XOOPS_URLS", "Nơi đặt trên máy chủ cho trang web của bạn" );
define( "XOOPS_ROOT_PATH_LABEL", "XOOPS documents root physical path" );
define( "XOOPS_ROOT_PATH_HELP", "Đường liên kết physical path đến XOOPS thư mục hồ sơ gốc không kèm theo gạch chéo ở cuối" );
define( "XOOPS_LIB_PATH_LABEL", "XOOPS thư mục thư viện" );
define( "XOOPS_LIB_PATH_HELP", "Đường liên kết đến XOOPS thư mục thư viện không kèm theo gạch chéo ở cuối, cho tính tương thích phía trước.  Thư mục này phải ở bên ngoài " . XOOPS_ROOT_PATH_LABEL . " để được an toàn.");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS thư mục hồ sơ" );
define( "XOOPS_DATA_PATH_HELP", "Đường liên kết Physical path đến  XOOPS hồ sơ dữ liệu (ghi được) KHÔNG kèm theo gạch chéo ở cuối, cho tính tương thích phía trước. Thư mục này phải ở bên ngoài " . XOOPS_ROOT_PATH_LABEL . " để được an toàn." );
define( "XOOPS_URL_LABEL", "Địa chỉ trang Web (URL)" ); // L56
define( "XOOPS_URL_HELP", "Địa chỉ URL chính dùng để truy nhập vào cho việc cài đặt XOOPS" ); // L58
define( "LEGEND_CONNECTION", "Kết nối máy chủ" );
define( "LEGEND_DATABASE", "Cơ sở dữ liệu" ); // L51
define( "DB_HOST_LABEL", "Máy chủ hostname" );    // L27
define( "DB_HOST_HELP",  "Tên Hostname của máy chủ cơ sở dữ liệu. Nếu bạn không chắt chắn, <em>localhost</em> sẽ dùng được trong mọi trường hợp"); // L67
define( "DB_USER_LABEL", "Tên tài khoản" );    // L28
define( "DB_USER_HELP",  "Tên tài khoản sẽ được dùng để kết nối với trung tâm cơ sở dữ liệu"); // L65
define( "DB_PASS_LABEL", "Mật khẩu" );    // L52
define( "DB_PASS_HELP",  "Mật khẩu cho tài khoản để kết nối với trung tâm cơ sở dữ liệu"); // L68
define( "DB_NAME_LABEL", "Tên cơ sở dữ liệu" );    // L29
define( "DB_NAME_HELP",  "Tên của cơ sở dữ liệu trên máy chủ. Hướng dẫn cài đặt sẽ tạo ra một cơ sở dữ liệu nếu không tồn tại"); // L64
define( "DB_CHARSET_LABEL", "Cơ sở dữ liệu loại kiểu bộ ký tự" );
define( "DB_CHARSET_HELP",  "MySQL bao gồm sự hỗ trợ bộ ký tự cho phép các bạn lưu trử các dữ liệu sử dụng với đa dạng của những bộ ký tự và thực hiện những sự so sánh theo một sự đa dạng của những sự đối chiếu.");
define( "DB_COLLATION_LABEL", "Đối chiếu cơ sở dữ liệu" );
define( "DB_COLLATION_HELP",  "Sự đối chiếu là những quy tắc để so sánh những đặc tính trong các bộ ký tự.");
define( "DB_PREFIX_LABEL", "Tiền tố bảng" );    // L30
define( "DB_PREFIX_HELP",  "Tiền tố này sẽ được thêm vào tất cả bảng mới được tạo ra để tránh xung đột tên trong cơ sở dữ liệu. Nếu bạn không chắt chắn, hãy dùng 'xoops'"); // L63
define( "DB_PCONNECT_LABEL", "Sử dụng kết nối bền bỉ?" );    // L54
define( "DB_PCONNECT_HELP",  "Mặc định là 'Không'. Chọn 'Không' nếu bạn không chắt chắn."); // L69
define( "LEGEND_ADMIN_ACCOUNT", "Tài khoản quản trị" );
define( "ADMIN_LOGIN_LABEL", "Quản trị mạng tài khoản đăng nhập" ); // L37
define( "ADMIN_EMAIL_LABEL", "Quản trị mạng địa chỉ email" ); // L38
define( "ADMIN_PASS_LABEL", "Quản trị mạng mật khẩu" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Xác nhận mật khẩu" ); // L74
// Buttons
define( "BUTTON_PREVIOUS", "Trở lại" ); // L42
define( "BUTTON_NEXT", "Tiếp theo" ); // L47
// Messages
define( "XOOPS_FOUND", "%s được tìm thấy" );
define( "CHECKING_PERMISSIONS", "Kiểm tra lại những sử cho phép hồ sơ và các thư mục..." ); // L82
define( "IS_NOT_WRITABLE", "Hồ sơ %s không cho phép ghi đè lên." ); // L83
define( "IS_WRITABLE", "Hồ sơ %s được phép ghi đè lên." ); // L84
define( "XOOPS_PATH_FOUND", "Tìm thấy đường dẫn." );
define( "READY_CREATE_TABLES", "Không có tìm thấy được bảng XOOPS nào.<br />Hiện giờ hướng dẫn cài đặt sẵn sàng để tạo ra những bảng hệ thống XOOPS.<br />Nhấn <em>tiếp theo</em> để bắt đầu." );
define( "XOOPS_TABLES_FOUND", "Bảng hệ thống XOOPS đã tồn tại trong cơ sở dứ liệu của bạn.<br />Nhấn <em>tiếp theo</em> để đi đến bước tiếp theo." ); // L131
define( "XOOPS_TABLES_CREATED", "Bảng hệ thống XOOPS đã được tạo ra.<br />Nhấn <em>tiếp theo</em> để đi đến bước tiếp theo." );
define( "READY_INSERT_DATA", "Hướng dẫn cài đặt bây giờ sẵn sàng ghi chèn vào dữ liệu đầu tiên vào cơ sở dữ liệu." );
define( "READY_SAVE_MAINFILE", "Hướng dẫn cài đặt bây giờ sẵn sàng lưu trử những sự thiết đặt xác định vào trong <em>mainfile.php</em>.<br />Nhấn <em>tiếp theo</em> để tiếp tục." );
define( "SAVED_MAINFILE", "Lưu trử những sự thiết đặt vào trong mainfile.php" );
define( "SAVED_MAINFILE_MSG", "Hướng dẫn cài đặt đã lưu trử những sự thiết đặt xác định vào trong <em>mainfile.php</em>. Nhấn <em>tiếp theo</em> để đi đến bước tiếp theo." );
define( "DATA_ALREADY_INSERTED", "Dữ liệu XOOPS được tìm thấy trong cơ sở dữ liệu.<br />Nhấn <em>tiếp theo</em> để đi đến bước tiếp theo." );
define( "DATA_INSERTED", "Dữ liệu đầu tiên đã được ghi chèn vào cơ sở dữ liệu.<br />Nhấn <em>tiếp theo</em> để đi đến bước tiếp theo." );
// %s is database name
define( "DATABASE_CREATED", "Cơ sở dữ liệu %s được tạo ra!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Không thể tạo ra bảng %s" ); // L118
define( "TABLE_CREATED", "Bảng %s được tạo ra." ); // L45
define( "ROWS_INSERTED", "%d mục được chèn vào đối với bảng %s." ); // L119
define( "ROWS_FAILED", "Không thể chèn mục %d vào bảng %s." ); // L120
define( "TABLE_ALTERED", "Bảng %s được cập nhật."); // L133
define( "TABLE_NOT_ALTERED", "Không thể cập nhật bảng %s."); // L134
define( "TABLE_DROPPED", "Bảng %s được loại bỏ."); // L163
define( "TABLE_NOT_DROPPED", "Không thể xóa bỏ bảng %s."); // L164
// Error messages
define( "ERR_COULD_NOT_ACCESS", "Không thể truy nhập vào thư mục xác định. Xin kiểm tra lại sự tồn tại của nó và phải đọc được bởi máy chủ." );
define( "ERR_NO_XOOPS_FOUND", "Không có sự cài đặt XOOPS nào có thể tìm thấy trong thư mục xác định." );
define( "ERR_INVALID_EMAIL", "Email không hợp lệ" ); // L73
define( "ERR_REQUIRED", "Vui lòng trở lại và nhập vào tất cả thông tin cần thiết." ); // L41
define( "ERR_PASSWORD_MATCH", "Hai mật khẩu không phù hợp" );
define( "ERR_NEED_WRITE_ACCESS", "Máy chủ cần được cho phép ghi đè lên những hồ sơ và những thư mục dưới đây<br />(Ví dụ: <em>chmod 777 directory_name</em> on a UNIX/LINUX server)<br />Nếu chưa có hay không tạo ra chính xác, Vui lòng tạo ra bằng tay và đặt những sự cho phép thích hợp." );
define( "ERR_NO_DATABASE", "Không thể tạo ra cơ sở dữ liệu được. Liên lạc với ban quản lý máy chủ để thêm chi tiết." ); // L31
define( "ERR_NO_DBCONNECTION", "Không thể kết nối với cơ sở dữ liệu máy chủ." ); // L106
define( "ERR_WRITING_CONSTANT", "Không ghi được hằng số vào %s." ); // L122
define( "ERR_COPY_MAINFILE", "Không thể sao chép hồ sơ phân phối vào trong mainfile.php" );
define( "ERR_WRITE_MAINFILE", "Không thể ghi vào trong mainfile.php. Xin kiểm tra lại sự cho phép của hồ sơ và thử lần nữa.");
define( "ERR_READ_MAINFILE", "Không thể mở hồ sơ mainfile.php để đọc" );
define( "ERR_INVALID_DBCHARSET", "Bộ ký tự '%s' không phải được hỗ trợ." );
define( "ERR_INVALID_DBCOLLATION", "Sự đối chiếu '%s' không phải được hỗ trợ." );
define( "ERR_CHARSET_NOT_SET", "Bộ ký tự mặc định chưa chọn cho cơ sở dữ liệu XOOPS." );
//
define("_INSTALL_CHARSET", "UTF-8");
?>