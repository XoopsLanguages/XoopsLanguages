<?php
// $Id: user.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%		File Name user.php 		%%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%
//%%%%%%    Ngày 17/09/2008 %%%%%%%%%
define('_US_NOTREGISTERED','Bạn chưa đăng ký?  Hãy Bấm vào <a href="register.php">đây</a>.');//Not registered?  Click <a href="register.php">here</a>.
define('_US_LOSTPASSWORD','Quên mật khẩu?');//Lost your Password?
define('_US_NOPROBLEM','Không có gì. Hãy điền địa chỉ email mà bạn đã dùng để đăng ký và chúng tôi sẽ gửi một mật khẩu mới cho tài khoản của bạn.');//No problem. Simply enter the e-mail address we have on file for your account.
define('_US_YOUREMAIL','Email của bạn: ');//Your Email:
define('_US_SENDPASSWORD','Gửi mật khẩu');//Send Password
define('_US_LOGGEDOUT','Hiện thời bạn đã được đăng xuất');//You are now logged out
define('_US_THANKYOUFORVISIT','Cám ơn bạn đã ghé thăm!');//Thank you for your visit to our site!
define('_US_INCORRECTLOGIN','Đăng nhập bất thành!');
define('_US_LOGGINGU','Chào %s, bạn đã đăng nhập thành công.');//Thank you for logging in, %s.

// 2001-11-17 ADD
define('_US_NOACTTPADM','Tài khoản sử dụng được chọn đã bị khử hoạt tính hay đã chưa được kích hoạt  .<br />Xin liên lạc với ban quản trị để biết thêm chi tiết.');//The selected user has been deactivated or has not been activated yet.<br />Please contact the administrator for details.
define('_US_ACTKEYNOT','Mã kích hoạt không đúng!');//Activation key not correct!
define('_US_ACONTACT','Tài khoản sử dụng được chọn đả được kích họat rồi!');//Selected account is already activated!
define('_US_ACTLOGIN','Tài khoản của bạn đã được kích hoạt. Xin đăng nhập với mật khẩu đã được đăng ký.');//Your account has been activated. Please login with the registered password.
define('_US_NOPERMISS','Rất tiếc, Bạn không có sự cho phép để thực hiện thao tác này!');//Sorry, you dont have the permission to perform this action!
define('_US_SURETODEL','Bạn có chắc chắn muốn xóa bỏ tài khoản của bạn không?');//Are you sure you want to delete your account?
define('_US_REMOVEINFO','Toàn bộ thông tin về bạn sẽ bị xóa bỏ khỏi cơ sở dữ liệu của chúng tôi');//This will remove all your info from our database.
define('_US_BEENDELED','Tài khoản của bạn đả được xóa bỏ.');//Your account has been deleted.
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','Đăng ký tài khoản');//User Registration
define('_US_NICKNAME','Tài khoản');//Username
define('_US_EMAIL','Email');
define('_US_ALLOWVIEWEMAIL','Cho phép mọi người thấy Email của tôi');//Allow other users to view my email address
define('_US_WEBSITE','Trang web');//Website
define('_US_TIMEZONE','Múi giờ');
define('_US_AVATAR','Hình đại diện');
define('_US_VERIFYPASS','Xác nhận mật khẩu');//Verify Password
define('_US_SUBMIT','Đăng Ký');//Submit
define('_US_USERNAME','Tên bạn');//Username
define('_US_FINISH','Xong');//Finish
define('_US_REGISTERNG','Không thể đăng ký thành viên mới.');//Could not register new user.
define('_US_MAILOK','Thỉnh thoảng nhận tin nhắn<br />từ ban quản trị hoặc ban điều hành?');//Receive occasional email notices <br />from administrators and moderators?
define('_US_DISCLAIMER','Điều lệ');//Disclaimer
define('_US_IAGREE','Tôi đã Đọc và đồng ý với những điều lệ ở trên');//I agree to the above
define('_US_UNEEDAGREE', 'Xin lỗi, bạn phải đồng ý những điều lệ ở trên.');//Sorry, you have to agree to our disclaimer to get registered.
define('_US_NOREGISTER','Xin lỗi, hiện giờ chúng tôi không mở cửa cho đăng ký thành viên mới');//Sorry, we are currently closed for new user registrations
// %s is username. This is a subject for email
define('_US_USERKEYFOR','Mã kích hoạt của %s');//User activation key for %s
define('_US_YOURREGISTERED','Bạn đã được đăng ký. Bạn sẽ nhận được một email, trong đó có một thông tin để kích hoạt tài khoản của bạn. Vui lòng theo hướng dẫn trong email để kích hoạt tài khoản. ');//You are now registered. An email containing an user activation key has been sent to the email account you provided. Please follow the instructions in the mail to activate your account.
define('_US_YOURREGMAILNG','Bạn đã được đăng ký. Tuy nhiên chúng tôi không thể gửi email hướng dẫn kích hoạt cho bạn lúc này vì một lỗi xảy ra với máy chủ. Xin vui lòng gửi email đến ban quản trị để thông báo về việc này.');//You are now registered. However, we were unable to send the activation mail to your email account due to an internal error that had occurred on our server. We are sorry for the inconvenience, please send the webmaster an email notifying him/her of the situation.
define('_US_YOURREGISTERED2','Bạn đã được đăng ký.  Xin vui lòng chờ ban quản trị kích hoạt tài khoản của bạn. Bạn sẽ nhận được email thông báo khi tài khoản của bạn được kích hoạt.');//You are now registered.  Please wait for your account to be activated by the adminstrators.  You will receive an email once you are activated.  This could take a while so please be patient.

// %s is your site name
define('_US_NEWUSERREGAT','Thành viên mới vừa đăng ký tài khoản tại %s');//New user registration at %s
// %s is a username
define('_US_HASJUSTREG','%s vừa mới đăng ký!');//%s has just registered!

define('_US_INVALIDMAIL','LỖI: địa chỉ email không hợp lệ');//ERROR: Invalid email
define('_US_EMAILNOSPACES','LỖI: địa chỉ email không thể chứa khoảng trống');//ERROR: Email addresses do not contain spaces.
define('_US_INVALIDNICKNAME','LỖI: Tên tài khoản không hợp lệ');//ERROR: Invalid Username
define('_US_NICKNAMETOOLONG','Tên tài khoản quá dài. Bạn phải chọn tên tài khoản ít hơn %s ký tự.');//Username is too long. It must be less than %s characters.
define('_US_NICKNAMETOOSHORT','Tên tài khoản quá ngắn. Bạn phải chọn tên tài khoản phải nhiều hơn %s ký tự.');//Username is too short. It must be more than %s characters.
define('_US_NAMERESERVED','LỖI: Tên này đã được dùng cho mục đích khác');//ERROR: Name is reserved.
define('_US_NICKNAMENOSPACES','Tên tài khoản không thể chứa khoảng trống.');//There cannot be any spaces in the Username.
define('_US_NICKNAMETAKEN','LỖI: Tên tài khoản đã được dùng.');//ERROR: Username taken.
define('_US_EMAILTAKEN','LỖI: Địa chỉ email đã được dùng đăng ký ở một tài khoản khác.');//ERROR: Email address already registered.
define('_US_ENTERPWD','LỖI: Bạn phải cung cấp một mật khẩu.');//ERROR: You must provide a password.
define('_US_SORRYNOTFOUND','Xin Lỗi, không có tìm thấy tên tài khoản tương ứng nầy.');//Sorry, no corresponding user info was found.
// %s is your site name
define('_US_NEWPWDREQ','Yêu cầu mật khẩu mới tại %s');//New Password Request at %s
define('_US_YOURACCOUNT', 'Tài khoản của bạn tại %s');//Your account at %s

define('_US_MAILPWDNG','mail_password: không thể cập nhật thông tin thành viên. Vui lòng liên lạc với ban quản trị.');//mail_password: could not update user entry. Contact the Administrator

// %s is a username
define('_US_PWDMAILED','Mật khẩu cho %s đã được gửi đi.');//Password for %s mailed.
define('_US_CONFMAIL','Thư từ xác nhận cho %s đã được gửi đi.');//Confirmation Mail for %s mailed.
define('_US_ACTVMAILNG', 'Không thể gửi thư từ thông báo tới %s được');//Failed sending notification mail to %s
define('_US_ACTVMAILOK', 'Thư thông báo tới %s đã được gửi đi.');//Notification mail to %s sent.

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','Không có thành viên nào được chọn, vui lòng quay lại và thử lần nữa.');//No User Selected! Please go back and try again.
define('_US_PM','Nhắn Tin');//PM
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','Nơi cư ngụ');//Location
define('_US_OCCUPATION','Nghề nghiệp');//Occupation
define('_US_INTEREST','Sở thích');//Interest
define('_US_SIGNATURE','Chữ ký');//Signature
define('_US_EXTRAINFO','Thông tin Thêm');//Extra Info
define('_US_EDITPROFILE','Sửa thông tin cá nhân');//Edit Profile
define('_US_LOGOUT','Đăng xuất');//Logout
define('_US_INBOX','Hòm thư');//Inbox
define('_US_MEMBERSINCE','Thành viên từ');//Member Since
define('_US_RANK','Chức vụ');//Rank
define('_US_POSTS','Bình luận/Bài viết');//Comments/Posts
define('_US_LASTLOGIN','Lần cuối đăng nhập');//Last Login
define('_US_ALLABOUT','Lý Lịch về %s');//All about %s
define('_US_STATISTICS','Thống kê');//Statistics
define('_US_MYINFO','Thông tin về tôi');//My Info
define('_US_BASICINFO','Thông tin cơ bản');//Basic information
define('_US_MOREABOUT','Thông tin thêm về tôi');//More About Me
define('_US_SHOWALL','Hiển thị tất cả');//Show All

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','Thông tin cá nhân');//Profile
define('_US_REALNAME','Tên thật');//Real Name
define('_US_SHOWSIG','Luôn đính kèm theo chữ ký của tôi');//Always attach my signature
define('_US_CDISPLAYMODE','Kiễu hiển thị bình luận');//Comments Display Mode
define('_US_CSORTORDER','Sắp xếp bình luận');//Comments Sort Order
define('_US_PASSWORD','Mật khẩu');//Password
define('_US_TYPEPASSTWICE','(muốn thay đổi, đánh máy mật khẩu hai lần để xác nhận mật khẩu)');//(type a new password twice to change it)
define('_US_SAVECHANGES','Lưu thay đổi');//Save Changes
define('_US_NOEDITRIGHT',"Xin lổi, Bạn không có quyền để chỉnh sửa thông tin của thành viên nầy.");//Sorry, you don't have the right to edit this user's info.
define('_US_PASSNOTSAME','Xác nhận mật khẩu không đúng. Mật khẩu phãi giống nhau.');//Both passwords are different. They must be identical.
define('_US_PWDTOOSHORT','Xin lổi, mật khẩu của bạn phải ít nhất <b>%s</b> ký tự.');//Sorry, your password must be at least <strong>%s</strong> characters long.
define('_US_PROFUPDATED','Thông tin của bạn đả được thay đổi!');//Your Profile Updated!
define('_US_USECOOKIE','Lưu tên tài khoản của tôi trong cookie cho 1 năm');//Store my user name in a cookie for 1 year
define('_US_NO','Không');
define('_US_DELACCOUNT','Xóa bỏ tài khoản');//Delete Account
define('_US_MYAVATAR', 'Hình đại diện');//My Avatar
define('_US_UPLOADMYAVATAR', 'Tải lên hình đại diện');//Upload Avatar
define('_US_MAXPIXEL','Cực đại Pixels');//Max Pixels
define('_US_MAXIMGSZ','Kích thước ảnh cho phép (Bytes)');//Max Image Size (Bytes)
define('_US_SELFILE','Chọn hồ sơ');//Select file
define('_US_OLDDELETED','Hình đại diện củ của bạn sẽ bị xóa!');//Your old avatar will be deleted!
define('_US_CHOOSEAVT', 'Chọn hình đại diện từ danh sách sẵn có');//Choose avatar from the available list
define('_US_PRESSLOGIN', 'Nhấn vào nút dưới đây để đăng nhập!');//Press the button below to login
define('_US_ADMINNO', 'Không thể xóa thành viên trong ban quản trị.');//User in the webmasters group cannot be removed
define('_US_GROUPS', 'Nhóm tên tài khoản');//User\'s Groups

define('_US_REMEMBERME', 'Lưu mật khẩu!');//Remember me

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT', 'Chào mừng bạn đến với %s');//Welcome to %s
?>