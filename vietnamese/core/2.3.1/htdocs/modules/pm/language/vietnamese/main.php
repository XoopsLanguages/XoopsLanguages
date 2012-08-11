<?php
// $Id: main.php 2025 2008-08-31 04:16:39Z phppp $
//%%%%%%	File Name readpmsg.php 	%%%%%
//  Xoopsviet.com - Hổ trợ xoops tiếng Việt
define("_PM_DELETED","Tin nhắn của bạn đã bị xoá");//Your message(s) has been deleted
define("_PM_PRIVATEMESSAGE","Tin nhắn nội bộ");//Private Messages
define("_PM_INBOX","Hòm thư");//Inbox
define("_PM_FROM","Người gởi");//From
define("_PM_YOUDONTHAVE","Bạn không có bất cứ tin nhắn nội bộ nào");//You don't have any private messages
define("_PM_FROMC","Người gởi: ");//From:
define("_PM_SENTC","Ngày gởi: "); // The date of message sent
define("_PM_PROFILE","Tiểu sử sơ lược");// Profile

// %s is a username
define("_PM_PREVIOUS","Tin trước");//Previous Message
define("_PM_NEXT","Tin kế tiếp");//Next Message

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Xin lỗi! Bạn chưa đăng ký thành viên.");//Sorry! You are not a registered user.
define("_PM_REGISTERNOW","Đăng ký ngay!");//Register Now!
define("_PM_GOBACK","Trở lại");//Go Back
define("_PM_USERNOEXIST","Thành viên được chọn không tồn tại trong cơ sở dữ liệu.");//The selected user doesn't exist in the database.
define("_PM_PLZTRYAGAIN","Xin vui lòng kiểm tra lại tên và thử lại lần nửa.");//Please check the name and try again.
define("_PM_MESSAGEPOSTED","Tin nhắn của bạn đã được gởi đi");//Your message has been posted
define("_PM_CLICKHERE","Bạn có thể nhấn vào đây để xem các tin nhắn riêng của bạn");//You can click here to view your private messages
define("_PM_ORCLOSEWINDOW","Hoặc bấm vào đây để đóng cửa sổ này.");//Or click here to close this window.
define("_PM_USERWROTE","%s viết:");
define("_PM_TO","Đến: ");
define("_PM_SUBJECTC","Tiêu đề: ");//Subject:
define("_PM_MESSAGEC","Nội dung: ");//Message:
define("_PM_CLEAR","Xóa");//Clear
define("_PM_CANCELSEND","Hủy bỏ gởi");//Cancel Send
define("_PM_SUBMIT","Gởi đi");//Submit
define("_PM_SAVEINOUTBOX","Lưu một bản sao trong Outbox của bạn?");//Save a copy in your outbox?

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","Tiêu đề");//Subject
define("_PM_DATE","Ngày");//Date
define("_PM_NOTREAD","Chưa đọc");//Not Read
define("_PM_SEND","Gởi tin nhắn mới");//Send new message
define("_PM_DELETE","Xóa bỏ");//Delete
define("_PM_TOSAVE","Di chuyển đến Savebox");//Move to Savebox
define("_PM_UNSAVE","Di chuyển ra khỏi Savebox");//Move out of Savebox
define("_PM_EMPTY","Làm trống");// Empty
define("_PM_REPLY","Trả lời");
define("_PM_PLZREG","Xin vui lòng đăng ký thành viên trước tiên để được gởi tin nhắn!");//Please register first to send private messages!
define("_PM_SAVED_PART","Bạn được cho phép có % d trong Savebox của bạn và hiện tại bạn đang có % d tin nhắn");//You are allowed %d in your savebox and you saved %d messages for this time
define("_PM_SAVED_ALL","Tin nhắn đã được chuyển đến Savebox");//Messages have been moved to savebox
define("_PM_UNSAVED","Tin nhắn đã được xoá khỏi Savebox");//Messages have been removed from savebox
define("_PM_EMPTIED","Hòm thư đã được làm trống");//The box has been emptied
define("_PM_RUSUREEMPTY","Bạn có chắc chắn muốn làm trống hòm thư?");//Are you sure you want to empty the box?
define("_PM_RUSUREDELETE","Bạn có chắc chắn muốn xoá bỏ những tin nhắn này?");//Are you sure you want to delete these message(s)

define("_PM_ONLINE","Trực tuyến");//Online

define("_PM_RECEIVE","Tiếp nhận");//RECEIVE
define("_PM_POST","Đăng");//POST
define("_PM_READBOX","READBOX");
define("_PM_RSAVEBOX","Receive_SAVEBOX");
define("_PM_OUTBOX","Outbox");
define("_PM_SAVEBOX","Savebox");
define("_PM_SENTBOX","SENTBOX");
define("_PM_PSAVEBOX","Post_SAVEBOX");
define("_PM_SAVE","SAVE");
define("_PM_SAVED","Lưu thành công");//Saved Successfully
define("_PM_TOC","Ggười gởi: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","Sắp xếp");//SORT
define("_PM_ORDER","Thứ tự");//ORDER
define("_PM_UID","Đối tác UID");
define("_PM_TIME","Ngày đăng");//Post DATE
define("_PM_ASC","ASC");
define("_PM_DESC","DESC");
define("_PM_LIMIT","Số lượng tin nhắn cho mỗi trang");
define("_PM_BACKTOBOX","Trở lại hòm thư");
define("_PM_SORTSUBMIT","Gởi");
define("_PM_PREVIOUSP","Trước");
define("_PM_NEXTP","Tiếp");

define("_PM_MAILNOTIFY","%s- Bạn có tin nhắn mới  gởi từ %s");
define("_PM_MAILMESSAGE","Xin chào!\nMột tin nhắn mới gởi đến từ %s\n\nTiêu đề của tin nhắn là\n%s\n\nBạn có thể xem tin nhắn ở đây\n%s\n\n-----------\nBạn nhận được tin nhắn này vì bạn đã chọn để được thông báo khi có một tin nhắn mới gởi đến\n\nBạn có thể thay đổi tùy chọn tin nhắn ở \n%s\n\nXin vui lòng đừng trả lời tin này\n\n---------\nThân chào\n%s\n%s\n%s");

define("_PM_EMAIL","Chuyển tiếp đến email");//Forward to email
define("_PM_EMAIL_DESC","Xin chào %s, đay là một tin nhắn được chuyển tiếp từ tài khoản của bạn tại ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM","Đến từ %s");
define("_PM_EMAIL_TO","Gởi cho %s");
define("_PM_EMAIL_SUBJECT","[tin nhắn]%s");
define("_PM_EMAIL_MESSAGE","Nội dung");

define("_PM_ACTION_DONE","Thao tác thực hiện thành công");//Operation executed successfully
define("_PM_ACTION_ERROR","Thao tác thực hiện bất thành");//Operation failed
?>