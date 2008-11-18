<?php
// $Id: $
//%%%%%%		File Name auth.php 		%%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%
//%%%%%%    Ngày 13/09/2008 %%%%%%%%%
define('_AUTH_MSG_AUTH_METHOD',"Sử dụng %s phương pháp chứng thực");//using %s authentication method
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP extension không nạp được(xác minh lại cấu hình PHP của hồ sơ php.ini)');//PHP LDAP extension not loaded (verify your PHP configuration file php.ini)
define('_AUTH_LDAP_SERVER_NOT_FOUND',"Không kết nối được với máy chủ");//Can't connect to the server
define('_AUTH_LDAP_USER_NOT_FOUND',"Thành viên %s không tìm thấy trong danh mục máy chủ (%s) và trong %s");//Member %s not found in the directory server (%s) in %s
define('_AUTH_LDAP_CANT_READ_ENTRY',"Không thể đọc mục %s");//Can't read entry %s
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"Xin Lổi. Thông tin của tài khoản sử dụng này không tìm thấy trong hồ sở dữ liệu XOOPS để kết nối %s <br> Xin xác minh những dữ liệu tài khoản sử dụng của bạn hay khích sự chuẩn bị tự động.");//Sorry no corresponding user information has been found in the XOOPS database for connection: %s <br>" . "Please verify your user datas or set on the automatic provisionning.
define('_AUTH_LDAP_START_TLS_FAILED',"Không mở được mạng kết nối TLS");//Failed to open a TLS connection
?>