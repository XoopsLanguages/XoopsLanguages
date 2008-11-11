<?php
// $Id: mailusers.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%%	Admin Module Name  MailUsers	%%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%%
//%%%%%%    Ngày 19/09/2008 %%%%%%%%%%%%%%%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);
//%%%%%%	mailusers.php 	%%%%%
define("_AM_SENDTOUSERS","Gởi thông báo tới<br />những thành viên thuộc:");//Send message to users whose:
define("_AM_SENDTOUSERS2","Gởi đến:");//Send to:
define("_AM_GROUPIS","Nhóm là(tuỳ ý)");//Group is (optional)
define("_AM_TIMEFORMAT", "(Mẫu yyyy-mm-dd)");//(Format yyyy-mm-dd, optional)
define("_AM_LASTLOGMIN","Lần cuối đăng nhập phải sau ngày");//Last Login is after
define("_AM_LASTLOGMAX","Lần cuối đăng nhập phải trước ngày");//Last Login is before
define("_AM_REGDMIN","Đăng ký sau ngày");//Registered date is after
define("_AM_REGDMAX","Đăng ký trước ngày");//Registered date is before
define("_AM_IDLEMORE","Lần cuối đăng nhập phải hơn X ngày (tùy ý)");//Last Login was more than X days ago (optional)
define("_AM_IDLELESS","Lần cuối đăng nhập phải ít hơn X ngày (tùy ý)");//Last Login was less than X days ago (optional)
define("_AM_MAILOK","Chỉ gởi thông báo đến những thành viên nhận tin nhắn thôi (tùy ý)");//Send message only to users that accept notification messages (optional)
define("_AM_INACTIVE","Chỉ gởi thông báo đến những thành viên không tích cực thôi (tùy ý)");//Send message to inactive users only (optional)
define("_AMIFCHECKD", "Nếu cái nầy được chọn, những gì ở trên cộng với nhận tin nhắn sẽ được bỏ qua");//If this is checked, all the above plus private messaging will be ignored
define("_AM_MAILFNAME","Tên người gởi (email thôi)");//From Name (email only)
define("_AM_MAILFMAIL","Địa chỉ email (email thôi)");//From Email (email only)
define("_AM_MAILSUBJECT","Chủ đề");//Subject
define("_AM_MAILBODY","Nội dung");//Body
define("_AM_MAILTAGS","Những nhãn hữu ích:");//Useful Tags:
define("_AM_MAILTAGS1","{X_UID} sẽ được mã số thành viên");//{X_UID} will print user id
define("_AM_MAILTAGS2","{X_UNAME} sẽ được tên tài khoản của thành viên");//{X_UNAME} will print user name
define("_AM_MAILTAGS3","{X_UEMAIL} sẽ được địa chỉ email của thành viên");//{X_UEMAIL} will print user email
define("_AM_MAILTAGS4","{X_UACTLINK} sẽ được đường liên kết kích hoạt của thành viên");//{X_UACTLINK} will print user activation link
define("_AM_SENDTO","Gởi đến");//Send to
define("_AM_EMAIL","Email");
define("_AM_PM","Tin nhắn riêng");//Private Message
define("_AM_SENDMTOUSERS", "Gởi thông báo đến thành viên");//Send Message to Users
define("_AM_SENT", "Gởi đến những thành viên");//Sent Users
define("_AM_SENTNUM", "%s - %s (tổng cộng: %s thành viên)");//%s - %s (total: %s users)
define("_AM_SENDNEXT", "Tiếp theo");//Next
define("_AM_NOUSERMATCH", "không thành viên nào trùng hợp");//No user matched
define("_AM_SENDCOMP", "Gởi tin nhắn hoàn tất.");//Sending message completed.
?>