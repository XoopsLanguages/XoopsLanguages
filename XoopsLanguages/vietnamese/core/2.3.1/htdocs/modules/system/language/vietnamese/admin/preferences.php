<?php
// $Id: preferences.php 1970 2008-08-24 02:16:51Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
//%%%%%%    www.xoopsviet.com  %%%%%%%
//%%%%%%    Ngày 19/09/2008 %%%%%%%%%%%%%%%%%%%
// dont change 
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);
define("_MD_AM_SITEPREF","Website Tùy Chọn");//Site Preferences
define("_MD_AM_SITENAME","Tên website");//Site name
define("_MD_AM_SLOGAN","Khẩu hiệu cho website của bạn");//Slogan for your site
define("_MD_AM_ADMINML","Quản trị mạng Email");//Admin mail address
define("_MD_AM_LANGUAGE","Ngôn ngữ mặc định");//Default language
define("_MD_AM_STARTPAGE","Mô-đun cho trang đầu");//Module for your start page
define("_MD_AM_NONE","Không");//None
define("_MD_AM_SERVERTZ","Múi giờ của máy chủ");//Server timezone
define("_MD_AM_DEFAULTTZ","Múi giờ mặc định");//Default timezone
define("_MD_AM_DTHEME","Giao diện mặc định");//Default theme
define("_MD_AM_THEMESET","Danh sách giao diện");//Theme Set
define("_MD_AM_ANONNAME","Tên sử dụng cho những khách");//Username for anonymous users
define("_MD_AM_MINPASS","Chiều dài tối thiểu cho mật khẩu");//Minimum length of password required
define("_MD_AM_NEWUNOTIFY","Thông báo bằng thư khi có thành viên mới đăng ký?");//Notify by mail when a new user is registered?
define("_MD_AM_SELFDELETE","Cho phép thành viên xóa bỏ tài khoản của họ?");//Allow users to delete own account?
define("_MD_AM_LOADINGIMG","Cho thấy đang tải... hình ảnh?");//Display loading... image?
define("_MD_AM_USEGZIP","Sử dụng dạng nén gzip?");//Use gzip compression?
define("_MD_AM_UNAMELVL","Lựa chọn tính chính xác cho sự chọn lọc tên tài khoản");//Select the level of strictness for username filtering
define("_MD_AM_STRICT","Rất cao (chỉ dùng chữ cái và những số)");//Strict (only alphabets and numbers)
define("_MD_AM_MEDIUM","Trung bình");//Medium
define("_MD_AM_LIGHT","Thường (thích hợp cho multi-byte ký tự)");//Light (recommended for multi-byte chars)
define("_MD_AM_USERCOOKIE","Tên cho bộ đệm nhớ thành viên.");//Name for user cookies.
define("_MD_AM_USERCOOKIEDSC","Nếu bộ đệm nhớ này được cài đặt, 'Lưu mật khẩu' sẽ được mở lên khi thành viên đăng nhập.  Nếu thành viên chọn 'Lưu mật khẩu', thì thành viên này sẽ được đăng nhập tự động.  Thời gian hết hạng cho bộ đệm nhớ là 1 năm.");//If the cookie name is set, 'Remember me' will be enabled for user login. If a user has chosen 'Remember me', he will be logged in automatically. The expiration for the cookie is one year.
define("_MD_AM_USEMYSESS","Sử dụng phiên phong tục");//Use custom session
define("_MD_AM_USEMYSESSDSC","Chọn CÓ để thay đổi các giá trị của phiên phong tục này.");//Select yes to customise session related values.
define("_MD_AM_SESSNAME","Tên phiên tùy chọn");//Session name
define("_MD_AM_SESSNAMEDSC","Tên của phiên này (Chỉ dùng được khi 'Sử dụng phiên phong tục' được cho phép)");//The name of session (Valid only when 'use custom session' is enabled)
define("_MD_AM_SESSEXPIRE","Phiên hết hạng");//Session expiration
define("_MD_AM_SESSEXPIREDSC","Khoảng thời gian cực đại cho những phiên không hoạt động trong phút  (Hợp lệ khi 'Sử dụng phiên phong tục' được cho phép.  Chỉ dùng được khi sử dụng PHP4.2.0 hoạt mới hơn.)");//Maximum duration of session idle time in minutes (Valid only when 'use custom session' is enabled. Works only when you are using PHP4.2.0 or later.)
define("_MD_AM_BANNERS","Kích hoạt những biễn quảng cáo?");//Activate banner ads?
define("_MD_AM_MYIP","Mã số IP của bạn");//Your IP address
define("_MD_AM_MYIPDSC","Cái mã số IP nầy sẽ không được tính là một ấn tượng cho những biễn quảng cáo");//This IP will not count as an impression for banners
define("_MD_AM_ALWDHTML","Cho phép nhãn HTML trong tất cả bài viết.");//HTML tags allowed in all posts.
define("_MD_AM_INVLDMINPASS","Số ký tự sai cho chiều dài tối thiểu của mật khẩu");//Invalid value for minimum length of password.
define("_MD_AM_INVLDUCOOK","Giá trị sai cho tên usercookie.");//Invalid value for usercookie name.
define("_MD_AM_INVLDSCOOK","Giá trị sai cho tên sessioncookie.");//Invalid value for sessioncookie name.
define("_MD_AM_INVLDSEXP","Giá trị sai cho phiên hết hạng.");//Invalid value for session expiration time.
define("_MD_AM_ADMNOTSET","Địa chỉ email cho quản trị mạng không có.");//Admin mail is not set.
define("_MD_AM_YES","Có");//
define("_MD_AM_NO","Không");//
define("_MD_AM_DONTCHNG","Đừng thay đổi!");//Don't change!
define("_MD_AM_REMEMBER","Hãy nhớ chmod 666 cho hồ sơ này để cho hệ thống viết vào một cách chính xác.");//Remember to chmod 666 this file in order to let the system write to it properly.
define("_MD_AM_IFUCANT","Nếu bạn không thể thay đổi những sự cho phép, bạn có thể soạn thảo phần còn lại của hồ sơ này bằng tay.");//If you can't change the permissions you can edit the rest of this file by hand.
define("_MD_AM_COMMODE","Kiểu hiển thị bình luận");//Default Comment Display Mode
define("_MD_AM_COMORDER","Hiển thị bình luận theo");//Default Comments Display Order
define("_MD_AM_ALLOWHTML","Cho phép nhãn HTML trong những bài bình luận của các thành viên?");//Allow HTML tags in user comments?
define("_MD_AM_DEBUGMODE","Kiểu gỡ lỗi");//Debug mode
define("_MD_AM_DEBUGMODEDSC","Một vài tùy chọn cho kiểu gỡ lỗi.  Một website đang chạy chính thức cần phải nên tắt điều này.");//Several debug options. A running website should have this turned off.
define("_MD_AM_AVATARALLOW","Cho phép tải lên hình đại diện cá nhân?");//Allow custom avatar upload?
define("_MD_AM_AVATARMP","Tối thiểu bài đăng");//Minimum posts required
define("_MD_AM_AVATARMPDSC","Điền vào số bài đăng tối thiểu cần thiết để thành viên được tải lên hình đại diện cá nhân");//Enter the minimum number of posts required to upload a custom avatar
define("_MD_AM_AVATARW","Chiều rộng cực đại cho hình đại diện (pixel)");//Avatar image max width (pixel)
define("_MD_AM_AVATARH","Chiều cao cực đại cho hình đại diện (pixel)");//Avatar image max height (pixel)
define("_MD_AM_AVATARMAX","Kích thước cực đại cho hình đại diện  (byte)");//Avatar image max filesize (byte)
define("_MD_AM_AVATARCONF","Những sự thiết đặt cho hiện thân cá nhân");//Custom avatar settings
define("_MD_AM_CHNGUTHEME","Thay đổi giao diện cho mọi thành viên");//Change all users' theme
define("_MD_AM_NOTIFYTO","Lựa chọn nhóm để gởi thư thông báo thành viên mới");//Select group to which new user notification mail will be sent"
define("_MD_AM_ALLOWTHME","Cho phép thành viên được chọn đề tài giao diện?");//Allow users to select theme?
define("_MD_AM_ALLOWIMAGE","Cho phép thành viên được hiển thị hình ảnh trong bài viết của họ?");//Allow users to display image files in posts?
define("_MD_AM_USERACTV","Yêu cầu sự kích hoạt bởi thành viên (rất khuyến khích)");//Requires activation by user (recommended)
define("_MD_AM_AUTOACTV","Kích hoạt tự động");//Activate automatically
define("_MD_AM_ADMINACTV","Kích hoạt bởi ban quản trị");//Activation by administrators
define("_MD_AM_ACTVTYPE","Lựa chọn kiểu kích hoạt cho các thành viên mới được đăng ký");//Select activation type of newly registered users
define("_MD_AM_ACTVGROUP","Lựa chọn nhóm để gởi thư kích hoạt tới");//Select group to which activation mail will be sent
define("_MD_AM_ACTVGROUPDSC","Chỉ hợp lệ khi nào sự 'Kích hoạt bởi ban quản trị' được chọn");//Valid only when 'Activation by administrators' is selected
define("_MD_AM_USESSL","Sử dụng SSL để đăng nhập?");//Use SSL for login?
define("_MD_AM_SSLPOST","SSL Post tên biến");//SSL Posvariable name
define("_MD_AM_SSLPOSTDSC","Tên biến dùng để chuyển giá trị của các phiên qua các bài đăng. Nếu bạn không chắc chắn, đặt bất kỳ tên nào mà hơi khó đoán");//The name of variable used to transfer session value via POST. If you are unsure, set any name that is hard to guess.
define("_MD_AM_DEBUGMODE0","Tắt");//
define("_MD_AM_DEBUGMODE1","Cho phép gỡ lỗi (kiểu inline)");//Enable debug (inline mode)
define("_MD_AM_DEBUGMODE2","Cho phép gỡ lỗi (kiểu popup)");//Enable debug (popup mode)
define("_MD_AM_DEBUGMODE3","Gỡ lỗi cho Smarty Templates");//Smarty Templates Debug
define("_MD_AM_MINUNAME","Chiều dài tối thiểu cho tên tài khoản");//Minimum length of username required
define("_MD_AM_MAXUNAME","Chiều dài cực đại cho tên tài khoản");//Maximum length of username
define("_MD_AM_GENERAL","Thiết đặt chung");//General Settings
define("_MD_AM_USERSETTINGS","Thiết đặc thông tin thành viên");//User Info Settings
define("_MD_AM_ALLWCHGMAIL","Cho phép thành viên được thay đổi địa chỉ email?");//Allow users to change email address?
define("_MD_AM_ALLWCHGMAILDSC","");//
define("_MD_AM_IPBAN","Mã IP bị cấm chỉ");//IP Banning
define("_MD_AM_BADEMAILS","Điền vào những địa chỉ email không nên được sử dụng trong tiễu sử của thành viên");//Enter emails that should not be used in user profile
define("_MD_AM_BADEMAILSDSC","Tách ra từng cái với <b>|</b>, regex được cho phép.");//Separate each with a <strong>|</strong>, case insensitive, regex enabled.
define("_MD_AM_BADUNAMES","Điền vào những tên không nên được lựa chọn cho tên tài khoản");//Enter names that should not be selected as username
define("_MD_AM_BADUNAMESDSC","Tách ra từng cái với <b>|</b>; loại chữ sẽ không ảnh hưởng, regex được cho phép.");//Separate each with a <strong>|</strong>, case insensitive, regex enabled.
define("_MD_AM_DOBADIPS","Cho phép IP bị cấm chỉ?");//Enable IP bans?
define("_MD_AM_DOBADIPSDSC","Những người sử dụng với những địa chỉ IP được xác định sẽ không có khả năng để đến xem trang website của bạn");//Users from specified IP addresses will not be able to view your site
define("_MD_AM_BADIPS","Điền vào những địa chỉ IP cần bị cấm chỉ.<br />Tách ra từng cái với <strong>'|'</strong> loại chữ sẽ không ảnh hưởng, regex được cho phép.");//Enter IP addresses that should be banned from the site.<br />Separate each with a <strong>|</strong>, case insensitive, regex enabled.
define("_MD_AM_BADIPSDSC","^aaa.bbb.ccc sẽ không công nhận những người đến thăm với một IP mà bắt đầu với aaa.bbb.ccc<br />aaa.bbb.ccc$ sẽ không công nhận những người đến thăm với một IP mà kết thúc với  aaa.bbb.ccc<br />aaa.bbb.ccc sẽ không công nhận những người đến thăm với một IP mà chứa aaa.bbb.ccc");//^aaa.bbb.ccc will disallow visitors with an IP that starts with aaa.bbb.ccc<br />aaa.bbb.ccc$ will disallow visitors with an IP that ends with aaa.bbb.ccc<br />aaa.bbb.ccc will disallow visitors with an IP that contains aaa.bbb.ccc
define("_MD_AM_PREFMAIN","Tùy chọn chính");//Preferences Main
define("_MD_AM_METAKEY","Meta từ khóa");//Meta Keywords
define("_MD_AM_METAKEYDSC","Những nhãn META từ khóa là một loạt từ khóa mà nó đại diện cho nội dung cho trang điện tử của bạn. Nhập những từ khóa với mỗi từ được phân chia bởi một dấu phẩy hay một từ trống ở giữa. (Ví dụ: XOOPS, PHP, mySQL, quản trị nội dung)");//The keywords meta tag is a series of keywords that represents the content of your site. Type in keywords with each separated by a comma or a space in between. (Ex. XOOPS, PHP, mySQL, portal system)
define("_MD_AM_METARATING","Đánh giá Meta");//Meta Rating
define("_MD_AM_METARATINGDSC","Đánh giá Meta sẽ xác định cho trang của bạn vể cấp bậc nội dung và cấp bậc nhóm tuổi.");//The rating meta tag defines your site age and content rating
define("_MD_AM_METAOGEN","Đại thể");//General
define("_MD_AM_METAO14YRS","14 tuổi");//14 years
define("_MD_AM_METAOREST","Hạn chế");//Restricted
define("_MD_AM_METAOMAT","Trưởng thành");//Mature
define("_MD_AM_METAROBOTS","Meta Robots");//
define("_MD_AM_METAROBOTSDSC","Meta robots là nhãn để khai báo với search engine về các nội đung để được index và spider");//The Robots Tag declares to search engines what content to index and spider
define("_MD_AM_INDEXFOLLOW","Index, Follow");//
define("_MD_AM_NOINDEXFOLLOW","No Index, Follow");//
define("_MD_AM_INDEXNOFOLLOW","Index, No Follow");//
define("_MD_AM_NOINDEXNOFOLLOW","No Index, No Follow");//
define("_MD_AM_METAAUTHOR","Meta Author");//
define("_MD_AM_METAAUTHORDSC","Meta Author là nhãn định nghĩa tên của tác giả cho những tài liệu được đọc. Hỗ trợ những khổ dữ liệu bao gồm tên, địa chỉ email ban quản trị, tên công ty hoạt URL.");//The author meta tag defines the name of the author of the document being read. Supported data formats include the name, email address of the webmaster, company name or URL.
define("_MD_AM_METACOPYR","Meta Copyright");//Meta Copyright
define("_MD_AM_METACOPYRDSC","Meta Copyright là nhãn định nghĩa bản quyền tuyên bố chung cho tất cả những tài liệu trên website của bạn");//The copyright meta tag defines any copyright statements you wish to disclose about your web page documents.
define("_MD_AM_METADESC","Meta Description");//
define("_MD_AM_METADESCDSC","Meta Description là nhãn sự mô tả chung của cho tất cả nội dung trên trang Web của bạn");//The description meta tag is a general description of what is contained in your web page
define("_MD_AM_METAFOOTER","Meta Tags and Footer");//
define("_MD_AM_FOOTER","Footer");//
define("_MD_AM_FOOTERDSC","Phải điền vào những mối liên kết đầy đủ bắt đầu từ http://, nếu không những mối liên kết này sẽ không hoạt động chính xác trong những trang mô-đun");//Be sure to type links in full path starting from http://, otherwise the links will not work correctly in modules pages.
define("_MD_AM_CENSOR","Kiểm duyệt từ");//Word Censoring Options
define("_MD_AM_DOCENSOR","Mở kiểm duyệt cho những từ không thích hợp?");//Enable censoring of unwanted words?
define("_MD_AM_DOCENSORDSC","Để kiểm duyệt những chữ không lành mạnh, chọn có để mở lên chức năng kiểm duyệt từ. Tùy chọn này có thể tắt để tăng cường tốc độ cho trang web.");//Words will be censored if this option is enabled. This option may be turned off for enhanced site speed.
define("_MD_AM_CENSORWRD","Những từ để kiểm duyệt");//Words to censor
define("_MD_AM_CENSORWRDDSC","Điền vào những từ để được kiểm duyệt trong những bài viết của các thành viên.<br />Tách ra từng cái với <strong>|</strong>, loại chữ sẽ không ảnh hưởng.");//Enter words that should be censored in user posts.<br />Separate each with a <strong>|</strong>, case insensitive.
define("_MD_AM_CENSORRPLC","Những từ không thích hợp sẽ được thay đổi với:");//Bad words will be replaced with:
define("_MD_AM_CENSORRPLCDSC","Những từ bị kiểm duyệt sẽ được thay đổi với những chữ ở trong textbox này");//Censored words will be replaced with the characters entered in this textbox

define("_MD_AM_SEARCH","Tìm kiếm");//Search Options
define("_MD_AM_DOSEARCH","Cho phép sự tìm kiếm toàn cầu?");//Enable global searches?
define("_MD_AM_DOSEARCHDSC","Cho phép sự tìm kiếm cho những bài viết/tin tức ở trong web site của bạn.");//Allow searching for posts/items within your site.
define("_MD_AM_MINSEARCH","Chiều dài từ khóa tối thiểu");//Minimum keyword length
define("_MD_AM_MINSEARCHDSC","Điền vào chiều dài từ khóa tối thiểu, đây là số ký tự tối thiểu cho người sử dụng nhập vào để thực hiện sự tìm kiếm");//Enter the minimum keyword length that users are required to enter to perform search
define("_MD_AM_MODCONFIG","Tùy chọn thiết đặt Mô Đun");//Module Config Options
define("_MD_AM_DSPDSCLMR","Hiển thị điều lệ?");//Display disclaimer?
define("_MD_AM_DSPDSCLMRDSC","Lựa chọn có để hiển thị điều lệ trong trang đăng ký tài khoản");//Select yes to display disclaimer in registration page
define("_MD_AM_REGDSCLMR","Điều lệ đăng ký");//Registration disclaimer
define("_MD_AM_REGDSCLMRDSC","Điền vào những điều lệ, nội quy v.v. để được trình bài trong trang đăng ký tài khoản");//Enter text to be displayed as registration disclaimer
define("_MD_AM_ALLOWREG","Cho phép đăng ký tài khoản mới?");//Allow new user registration?
define("_MD_AM_ALLOWREGDSC","Chọn có để cho phép đăng ký tài khoản mới");//Select yes to accept new user registration
define("_MD_AM_THEMEFILE","Kiểm tra khung mẫu cho sự cập nhật?");//Check templates for modifications ?
define("_MD_AM_THEMEFILEDSC","Nếu điều này được cho chọn, những khung mẫu mới sẽ được tự động được biên soạn lại khi nó được hiển thị.  Bạn phải tắt lựa chọn này trên một site đang chạy.");//If this option is enabled, modified templates will be automatically recompiled when they are displayed. You must turn this option off on a production site.
define("_MD_AM_CLOSESITE","Tắt cái site này?");//Turn your site off?
define("_MD_AM_CLOSESITEDSC","Chọn có để tắt cái site này và chỉ có thành viên trong nhóm được chọn lựa mới có quyền lui tới trang này. ");//Select yes to turn your site off so that only users in selected groups have access to the site. 
define("_MD_AM_CLOSESITEOK","Chọn những nhóm được cho phép lui tới trang này khi site đả được tắt.");//Select groups that are allowed to access while the site is turned off.
define("_MD_AM_CLOSESITEOKDSC","Những thành viên trong nhóm quản trị đương nhiên lúc nào cũng có quyền lui tới.");//Users in the default webmasters group are always granted access.
define("_MD_AM_CLOSESITETXT","Nguyên nhân tắt cái site này");//Reason for turning off the site
define("_MD_AM_CLOSESITETXTDSC","Những lý do này sẽ được hiển khi trên trang đầu khi website được đóng.");//The text that is presented when the site is closed.
define("_MD_AM_SITECACHE","Bộ đệm nhớ toàn site");//Site-wide Cache
define("_MD_AM_SITECACHEDSC","Bộ đệm nhớ toàn site sẽ nhớ toàn bộ nội dung của site cho một thời gian xác định để tăng cường sự hoạt động.  Thiết đặt bộ đệm nhớ toàn site sẽ đè lên những bộ đệm nhớ mức mô-đun nếu có.");//Caches whole contents of the site for a specified amount of time to enhance performance. Setting site-wide cache will override module-level cache, block-level cache, and module item level cache if any.
define("_MD_AM_MODCACHE","Bộ đệm nhớ mức Mô-đun");//Module-wide Cache
define("_MD_AM_MODCACHEDSC","Bộ đệm nhớ mức Mô-đun sẽ nhớ toàn bộ nội dung của các Mô-đun cho một thời gian xác định để tăng cường sự hoạt động. Thiết đặt bộ đệm nhớ mức Mô-đun sẽ đè lên những bộ nhớ mức tiết mục mô-đun nếu có.");//Caches module contents for a specified amount of time to enhance performance. Setting module-wide cache will override module item level cache if any.
define("_MD_AM_NOMODULE","Không có Mô-đun nào để nhớ.");//There is no module that can be cached.
define("_MD_AM_DTPLSET","Khung mẫu Mặc định");//Default template set
define("_MD_AM_SSLLINK","URL nơi trang đăng nhập SSL được định vị");//URL where SSL login page is located

// added for mailer
define("_MD_AM_MAILER","Thiết đặt thư từ");//Mail Setup
define("_MD_AM_MAILER_MAIL","");//
define("_MD_AM_MAILER_SENDMAIL","");//
define("_MD_AM_MAILER_","");//
define("_MD_AM_MAILFROM","Địa chỉ email của người gởi");//FROM address
define("_MD_AM_MAILFROMDESC","");//
define("_MD_AM_MAILFROMNAME","Tên người gởi");//FROM name
define("_MD_AM_MAILFROMNAMEDESC","");//
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","Từ thành viên");//FROM user
define("_MD_AM_MAILFROMUIDDESC","Khi hệ thống gởi đi những thư nhắn, tên thành viên nào bạn muốn hiển thị trong thư gởi đi?");//When the system sends a private message, which user should appear to have sent it?
define("_MD_AM_MAILERMETHOD","Phương pháp chuyển thư từ");//Mail delivery method
define("_MD_AM_MAILERMETHODDESC","Phương pháp dùng để chuyển thư từ. Mặc định là \"mail\", sử dụng những phương pháp khác nếu có sự rắc rối");//Method used to deliver mail. Default is \"mail\", use others only if that makes trouble.
define("_MD_AM_SMTPHOST","SMTP host(s)");//
define("_MD_AM_SMTPHOSTDESC","Danh sách SMTP servers để kết nối.");//List of SMTP servers to try to connect to.
define("_MD_AM_SMTPUSER","Tài khoản SMTPAuth");//SMTPAuth username
define("_MD_AM_SMTPUSERDESC","Tài khoản để kết nối với SMTP máy chủ và SMTPAuth.");//Username to connect to an SMTP host with SMTPAuth.
define("_MD_AM_SMTPPASS","SMTPAuth mật khẩu");//
define("_MD_AM_SMTPPASSDESC","Mật khẩu để kết nối với SMTP máy chủ và SMTPAuth.");//Password to connect to an SMTP host with SMTPAuth.
define("_MD_AM_SENDMAILPATH","Path to sendmail");//Path to sendmail
define("_MD_AM_SENDMAILPATHDESC","Đường dẫn đến các chương trình gởi thư (sendmail) trên máy chủ");//Path to the sendmail program (or substitute) on the webserver.
define("_MD_AM_THEMEOK","Những đề tài giao diện có thể chọn");//Selectable themes
define("_MD_AM_THEMEOKDSC","Chọn những giao diện để cho thành viên có thể chọn làm giao diện mặc định");//Choose themes that users can select as the default theme
// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","");//XOOPS Database
define("_MD_AM_AUTH_CONFOPTION_LDAP","Cơ sở dữ liệu XOOPS");//Standard LDAP Directory
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");//
define("_MD_AM_AUTHENTICATION","Tùy chọn chứng thực");//Authentication Options
define("_MD_AM_AUTHMETHOD","Phương pháp chứng thực");//Authentication Method
define("_MD_AM_AUTHMETHODDESC","Bạn thích sử dụng phương pháp chứng thực nào để kiểm tra sự đăng nhập của các thành viên.");//Which authentication method would you like to use for signing on users.
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Mail Field Name");//
define("_MD_AM_LDAP_MAIL_ATTR_DESC","The name of the E-Mail attribute in your LDAP directory tree.");//
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Common Name Field Name");//
define("_MD_AM_LDAP_NAME_ATTR_DESC","The name of the Common Name attribute in your LDAP directory.");//
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Surname Field Name");//
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","The name of the Surname attribute in your LDAP directory.");//
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Given Name Field Name");//
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","The name of the Given Name attribute in your LDAP directory.");//
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");//
define("_MD_AM_LDAP_BASE_DN_DESC","The base DN (Distinguished Name) of your LDAP directory tree.");//
define("_MD_AM_LDAP_PORT","LDAP - Port Number");//
define("_MD_AM_LDAP_PORT_DESC","The port number needed to access your LDAP directory server.");//
define("_MD_AM_LDAP_SERVER","LDAP - Server Name");//
define("_MD_AM_LDAP_SERVER_DESC","The name of your LDAP directory server.");//

define("_MD_AM_LDAP_MANAGER_DN","DN of the LDAP manager");//
define("_MD_AM_LDAP_MANAGER_DN_DESC","The DN of the user allow to make search (eg manager)");//
define("_MD_AM_LDAP_MANAGER_PASS","Password of the LDAP manager");//
define("_MD_AM_LDAP_MANAGER_PASS_DESC","The password of the user allow to make search");//
define("_MD_AM_LDAP_VERSION","LDAP Version protocol");//
define("_MD_AM_LDAP_VERSION_DESC","The LDAP Version protocol : 2 or 3");//
define("_MD_AM_LDAP_USERS_BYPASS","Users allowed to bypass LDAP authentication");//
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Users to be authenticated with native XOOPS method");//

define("_MD_AM_LDAP_USETLS"," Use TLS connection");//
define("_MD_AM_LDAP_USETLS_DESC","Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
								  " and the LDAP version must be set to 3.");//

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP Attribute use to search the user");//
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");//
define("_MD_AM_LDAP_LOGINNAME_ASDN","Login name use in the DN");//
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");//

define("_MD_AM_LDAP_FILTER_PERSON","The search filter LDAP query to find user");//
define("_MD_AM_LDAP_FILTER_PERSON_DESC","Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
		"<br />Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br />Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");//

define("_MD_AM_LDAP_DOMAIN_NAME","The domain name");//
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Windows domain name. for ADS and NT Server only");//

define("_MD_AM_LDAP_PROVIS","Automatic xoops account provisionning");//
define("_MD_AM_LDAP_PROVIS_DESC","Create xoops user database if not exists");//

define("_MD_AM_LDAP_PROVIS_GROUP","Default affect group");//
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","The new user is assign to these groups");//

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");//
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br /><br />Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br />for example : email=mail" .
		"<br />Separate each with a |" .
		"<br /><br />!! For advanced users !!");//
		
define("_MD_AM_LDAP_PROVIS_UPD","Bảo trì sự dự phòng tài khoản xoops");//Maintain xoops account provisionning
define("_MD_AM_LDAP_PROVIS_UPD_DESC","Tài khoản thành viên của Xoops được luôn luôn đồng bộ hóa với máy chủ chứng thực");//The Xoops User account is always synchronized with the Authentication Server


define("_MD_AM_CPANEL","Giao diện cho trang chủ quản trị");//Control Panel GUI
define("_MD_AM_CPANELDSC","Đây là những giao diện dành riêng cho control panel (trang chủ quản trị) ");//

define("_MD_AM_WELCOMETYPE","Gửi thông báo chào đón");//Sending welcoming message
define("_MD_AM_WELCOMETYPE_DESC","Cách gởi đi một thông báo chúc mừng tới thành viên vừa được đăng ký thành công");//The way of sending out a welcoming message to a user upon his successful registration.
define("_MD_AM_WELCOMETYPE_EMAIL","Email");//
define("_MD_AM_WELCOMETYPE_PM","Tin nhắn");//Message
define("_MD_AM_WELCOMETYPE_BOTH","Email và tin nhắn");//Email and message

?>