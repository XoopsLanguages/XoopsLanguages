<?php
// $Id: global.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%	File Name mainfile.php 	%%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%
//%%%%%%    Ngày 13/09/2008 %%%%%%%%%
define("_WELCOME_USER","Xin Chào");
define("_PLEASEWAIT","Vui lòng chờ");//Please Wait
define("_FETCHING","Đang tải...");//Loading...
define("_TAKINGBACK","Bạn đang trở lại vị trí củ....");//Taking you back to where you were....
define("_LOGOUT","Đăng xuất");//Logout
define("_SUBJECT","Tiêu đề");//Subject
define("_MESSAGEICON","Biểu tượng thông báo");//Message Icon
define("_COMMENTS","Bình luận");//Comments
define("_POSTANON","Gửi bài nặc danh");//Post Anonymously
define("_DISABLESMILEY","Tắt hình mặt cười");//Disable smiley
define("_DISABLEHTML","Tắt mã html");//Disable html
define("_PREVIEW","Duyệt");//Preview

define("_GO","Chọn!");//Go
define("_NESTED","Lồng nhau");//Nested
define("_NOCOMMENTS","Không bình luận");//No Comments
define("_FLAT","Phẳng");//Flat
define("_THREADED","Luồng");//Threaded
define("_OLDESTFIRST","Cũ trước");//Oldest First
define("_NEWESTFIRST","Mới trước");//Newest First
define("_MORE","tiếp...");//more...
define("_MULTIPAGE","Để có bài viết thành nhiều trang, chèn từ<font color=red>[pagebreak]</font> (có dấu ngoặc) vào bài viết.");//To have your article span multiple pages, insert the word <font color=red>[pagebreak]</font> (with brackets) in the article.
define("_IFNOTRELOAD","Nếu trang không tự động nạp lại, hãy nhấn <a href='%s'>vào đây</a>");//If the page does not automatically reload, please click <a href='%s'>here</a>
define("_WARNINSTALL2","LƯU Ý: Thư mục %s đang tồn tại trong máy chủ. <br />Hãy xóa bỏ thư mục này vì lý do an toàn");//WARNING: Directory %s exists on your server. <br />Please remove this directory for security reasons.
define("_WARNINWRITEABLE","LƯU Ý: Hồ sơ %s đang ở chế độ ghi đè lên được. <br />Hãy thay đổi đặc tính cho phép của hồ sơ này vì lý do an toàn.<br /> trong hệ điều hành Unix (444), trong hệ điều hành Win32 (read-only)");//WARNING: File %s is writeable by the server. <br />Please change the permission of this file for security reasons.<br /> in Unix (444), in Win32 (read-only)

// Error messages issued by XoopsObject::cleanVars()
define( "_XOBJ_ERR_REQUIRED", "%s cần thiết" );//is required
define( "_XOBJ_ERR_SHORTERTHAN", "%s phải ngắn hơn %d ký tự." );//must be shorter than %d characters

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Tiễu sử");//Profile
define("_POSTEDBY","Người gửi");//Posted by
define("_VISITWEBSITE","Đến thăm trang web");//Visit Website
define("_SENDPMTO","Gửi tin nhắn đến %s");//Send Private Message to
define("_SENDEMAILTO","Gửi email đến %s");//Send Email to
define("_ADD","Thêm");//Add
define("_REPLY","Trả lời");//Reply
define("_DATE","Ngày gửi");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Chính");//Main
define("_MANUAL","Tự làm");//Manual
define("_INFO","Chi tiết");//Info
define("_CPHOME","Trang chủ quản trị");//Control Panel Home
define("_XNEWS", "Tin Xoops");
define("_XNEWS1", "XoopsViệt");
define("_YOURHOME","Trang chủ");//Home Page

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Ai Trực tuyến");//Who's Online
define('_GUESTS', 'Khách');//Guests
define('_MEMBERS', 'Thành viên');//Members
define("_ONLINEPHRASE","<strong>%s</strong> người đang trực tuyến");//<strong>%s</strong> user(s) are online
define("_ONLINEPHRASEX","<br><strong>%s</strong> thành viên đang ở trong <strong>%s</strong>");//<strong>%s</strong> user(s) are browsing <strong>%s</strong>
define("_CLOSE","Đóng cửa sổ");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Trích dẫn:");//Quote:

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Xin lỗi, bạn không được phép để truy nhập vào đây.");//Sorry, you don't have the permission to access this area.

//%%%%%		Common Phrases		%%%%%
define("_NO","Không");//No
define("_YES","Có");//Yes
define("_EDIT","Sửa");//Edit
define("_DELETE","Xóa bỏ");//Delete
define("_SUBMIT","Gửi đi");//Submit
define("_MODULENOEXIST","Mô đun được chọn không tồn tại");//Selected module does not exist!
define("_ALIGN","Sắp hàng");//Align
define("_LEFT","Trái");//Left
define("_CENTER","Trung tâm");//Center
define("_RIGHT","Phải");//Right
define("_FORM_ENTER", "Vui lòng điền vào %s");//Please enter %s
// %s represents file name
define("_MUSTWABLE","Hồ sơ %s phãi ở chế độ được ghi đè lên bởi máy chủ!");//File %s must be writable by the server!
// Module info
define('_PREFERENCES', 'Tùy chọn');//Preferences
define("_VERSION", "Phiên bản");//Version
define("_DESCRIPTION", "Mô tả");//Description
define("_AUTHOR", "Tác giả");//Author
define("_CREDITS", "Công trạng");//Credits
define("_LICENCE", "Giấy phép");//Licence
define("_ERRORS", "Lỗi");//Errors
define("_NONE", "Không");//None
define('_ON','vào ngày');//on
define('_READS','lần đọc');//reads
define('_WELCOMETO','Chào mừng bạn đến với %s');//Welcome to
define('_SEARCH','Tìm kiếm');//Search
define('_ALL', 'Tất cả');//All
define('_TITLE', 'Tiêu đề');//Title
define('_OPTIONS', 'Lựa chọn');//Options
define('_QUOTE', 'Trích dẫn');//Quote
define('_LIST', 'Danh sách');//List
define('_LOGIN','Đăng nhập');//User Login
define('_USERNAME','Tài khoản: ');//Username: 
define('_PASSWORD','Mật khẩu: ');//Password: 
define("_SELECT","Chọn");//Select
define("_IMAGE","Hình ảnh");//Image
define("_SEND","Gửi đi");//Send
define("_CANCEL","Bãi bỏ");//Cancel
define("_ASCENDING","Thứ tự lên");//Ascending order
define("_DESCENDING","Thứ tự xuống");//Descending order
define('_BACK', 'Trở lại');//Back
define('_NOTITLE', 'Không có tiêu đề');//No title

/* Image manager */
define('_IMGMANAGER','Quản lý hình ảnh');//Image Manager
define('_NUMIMAGES', '%s ảnh');//images
define('_ADDIMAGE','Thêm hồ sơ ảnh');//Add Image File
define('_IMAGENAME','Tên:');//Name:
define('_IMGMAXSIZE','Kích thước cực đại cho phép (bytes):');//Max size allowed (bytes):
define('_IMGMAXWIDTH','Chiều rộng cực đại cho phép (pixels):');//Max width allowed (pixels):
define('_IMGMAXHEIGHT','Chiều cao cực đại được phép (pixels):');//Max height allowed (pixels):
define('_IMAGECAT','Hạng mục:');//Category:
define('_IMAGEFILE','Hồ sơ ảnh:');//Image file:
define('_IMGWEIGHT','Hiển thị theo thứ tự trong quản lý ảnh:');//Display order in image manager:
define('_IMGDISPLAY','Hiển thị ảnh này?');//Display this image?
define('_IMAGEMIME','Loại MIME:');//MIME type:
define('_FAILFETCHIMG', 'Không lấy được hồ sơ tải lên %s');//Could not get uploaded file
define('_FAILSAVEIMG', 'Lỗi lưu ảnh %s vào trong cơ sở dữ liệu');//Failed storing image %s into the database
define('_NOCACHE', 'Không bộ nhớ');//No Cache
define('_CLONE', 'Nhái');//Clone

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "Bắt đầu với");//Starts with
define("_ENDSWITH", "Kết thúc với");//Ends with
define("_MATCHES", "Trùng với");//Matches
define("_CONTAINS", "Chứa đựng");//Contains

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Đăng ký");//Register

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","CỠ CHỮ");  // font size
define("_FONT","PHÔNG CHỮ");  // font family
define("_COLOR","MÀU SẮC");  // font color
define("_EXAMPLE","MẪU");//SAMPLE
define("_ENTERURL","Điền vào địa chỉ URL của cái liên kết:");//Enter the URL of the link you want to add:
define("_ENTERWEBTITLE","Điền vào tên trang web:");//Enter the web site title:
define("_ENTERIMGURL","Điền vào địa chỉ URL của tấm ảnh:");//Enter the URL of the image you want to add.
define("_ENTERIMGPOS","Bây giờ, nhập vào vị trí của tấm ảnh.");//Now, enter the position of the image.
define("_IMGPOSRORL","'R' hoặc 'r' cho bên phải, 'L' hoặc 'l' cho bên trái, hay để trống.");//'R' or 'r' for right, 'L' or 'l' for left, or leave it blank.
define("_ERRORIMGPOS","LỖI! điền vào vị trí của tấm ảnh.");//ERROR! Enter the position of the image.
define("_ENTEREMAIL","Điền vào địa chỉ email mà bạn muốn thêm");//Enter the email address you want to add.
define("_ENTERCODE","Nhập vào những mã mà bạn muốn thêm");//Enter the codes that you want to add.
define("_ENTERQUOTE","Nhập vào văn bản mà bạn muốn được trích dẫn.");//Enter the text that you want to be quoted.
define("_ENTERTEXTBOX","Xin nhập văn bản vào trong textbox.");//Please input text into the textbox.
define("_ALLOWEDCHAR","Ký tự cho phép tối đa: ");//Allowed max chars length: 
define("_CURRCHAR","Tổng số ký tự hiện thời: ");//Current chars length: 
define("_PLZCOMPLETE","Vui lòng nhập đầy đủ cho các lĩnh vực.");//Please complete the subject and message fields.
define("_MESSAGETOOLONG","Văn bản của bạn quá dài.");//Your message is too long.

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 giây');
define('_SECONDS', '%s giây');
define('_MINUTE', '1 phút');
define('_MINUTES', '%s phút');
define('_HOUR', '1 giờ');
define('_HOURS', '%s giờ');
define('_DAY', '1 ngày');
define('_DAYS', '%s ngày');
define('_WEEK', '1 tuần');
define('_MONTH', '1 tháng');

define("_DATESTRING","Y/n/j G:i:s");
define("_MEDIUMDATESTRING","Y/n/j G:i");
define("_SHORTDATESTRING","Y/n/j");
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th", "nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'en');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES", "0");
?>