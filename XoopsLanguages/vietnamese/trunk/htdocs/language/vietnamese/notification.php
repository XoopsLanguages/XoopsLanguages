<?php
// $Id: notification.php 1530 2008-05-01 09:22:47Z phppp $
// RMV-NOTIFY
// Text for various templates...
//%%%%%%    www.xoopsviet.com  %%%%%%
//%%%%%%    Ngày 17/09/2008 %%%%%%%%%
define ('_NOT_NOTIFICATIONOPTIONS', 'Tùy chọn thông báo');//Notification Options
define ('_NOT_UPDATENOW', 'Cập nhật bây giờ');//Update Now
define ('_NOT_UPDATEOPTIONS', 'Cập nhật tùy chọn thông báo');//Update Notification Options
define ('_NOT_CLEAR', 'Hũy');//Clear
define ('_NOT_CHECKALL', 'Chọn tất cả');//Check All
define ('_NOT_MODULE', 'Mô-đun');//Module
define ('_NOT_CATEGORY', 'Danh mục');//Category
define ('_NOT_ITEMID', 'Mã số');//ID
define ('_NOT_ITEMNAME', 'Tên');//Name
define ('_NOT_EVENT', 'Sự kiện');//Event
define ('_NOT_EVENTS', 'Những Sự kiện');//Events
define ('_NOT_ACTIVENOTIFICATIONS', 'Thông báo đang hiệu lực');//Active Notifications
define ('_NOT_NAMENOTAVAILABLE', 'Tên không có');//Name Not Available
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Tên Tiết mục không có');//Item Name Not Available
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Loại tiết mục không có');//Item Type Not Available
define ('_NOT_ITEMURLNOTAVAILABLE', 'Địa chỉ URL của tiết mục không có');//Item URL Not Available
define ('_NOT_DELETINGNOTIFICATIONS', 'Đang xóa bỏ thông báo');//Deleting Notifications
define ('_NOT_DELETESUCCESS', 'Thông báo được xóa bỏ thành công.');//Notification(s) deleted successfully.
define ('_NOT_UPDATEOK', 'Những tùy chọn thông báo đã được cập nhật');//Notification options updated
define ('_NOT_NOTIFICATIONMETHODIS', 'Kiểu thông báo là');//Notification method is
define ('_NOT_EMAIL', 'gửi email');
define ('_NOT_PM', 'nhắn tin');//private message
define ('_NOT_DISABLE', 'tắt');//disabled
define ('_NOT_CHANGE', 'Thay đổi');//Change
define ('_NOT_NOACCESS', 'Bạn không được phép để truy cập vào trang này.');//You do not have permission to access this page.
// Text for module config options
define ('_NOT_ENABLE', 'Cho phép');//Enable
define ('_NOT_NOTIFICATION', 'Thông báo');//Notification
define ('_NOT_CONFIG_ENABLED', 'Cho phép thông báo');//Enable Notification
define ('_NOT_CONFIG_ENABLEDDSC', 'Mô-đun này cho phép thành viên chọn lựa để được nhận thông báo khi có những sự kiện xảy ra.  Chọn "Có" để kích hoạt chức năng này.');//This module allows users to select to be notified when certain events occur.  Choose "yes" to enable this feature.
define ('_NOT_CONFIG_EVENTS', 'Cho phép những sự kiện đặc biệt');//Enable Specific Events
define ('_NOT_CONFIG_EVENTSDSC', 'Lựa chọn những sự kiện thông báo để cho phép thành viên được đăng ký.');//Select which notification events to which your users may subscribe.
define ('_NOT_CONFIG_ENABLE', 'Cho phép thông báo');
define ('_NOT_CONFIG_ENABLEDSC', 'Mô-đun này cho phép thành viên chọn lựa để nhận được thông báo khi có những sự kiện xuất hiện.  Chọn kiểu thông báo đến thành viên: thông báo trong một Khối (Block-style), trong mô-đun (Inline-style), hoặc cả hai. Nếu chọn kiểu Khối (Block-style), tùy chọn "Cho phép thông báo" phải được kích hoạt.');//This module allows users to be notified when certain events occur.  Select if users should be presented with notification options in a Block (Block-style), within the module (Inline-style), or both.  For block-style notification, the Notification Options block must be enabled for this module.
define ('_NOT_CONFIG_DISABLE', 'Không cho phép thông báo');//Disable Notification
define ('_NOT_CONFIG_ENABLEBLOCK', 'Cho phép chỉ Block-style');//Enable only Block-style
define ('_NOT_CONFIG_ENABLEINLINE', 'Cho phép chỉ Inline-style');//Enable only Inline-style
define ('_NOT_CONFIG_ENABLEBOTH', 'Cho phép cả hai loại');//Enable Notification (both styles)
// For notification about comment events
define ('_NOT_COMMENT_NOTIFY', 'Bình luận được thêm');//Comment Added
define ('_NOT_COMMENT_NOTIFYCAP', 'Thông báo cho tôi khi có bình gửi vào mục này.');//Notify me when a new comment is posted for this item.
define ('_NOT_COMMENT_NOTIFYDSC', 'Nhận thông báo khi có bình luận được gửi vào (hoặc được chấp thuận) ở mục này.');//Receive notification whenever a new comment is posted (or approved) for this item.
define ('_NOT_COMMENT_NOTIFYSBJ', 'Thông báo tự động tại [{X_SITENAME}] {X_MODULE}: Lời bình được thêm vào ở {X_ITEM_TYPE}');//[{X_SITENAME}] {X_MODULE} auto-notify: Comment added to {X_ITEM_TYPE}
define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Bình luận được gửi');//Comment Submitted
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Thông báo cho tôi khi có một lời bình mới được gửi vào (đang chờ chấp thuận) ở mục này.');//Notify me when a new comment is submitted (awaiting approval) for this item.
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Thông báo cho tôi khi có một lời bình được gửi vào (chờ chấp thuận) ở mục này.');//Receive notification whenever a new comment is submitted (awaiting approval) for this item.
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', 'Thông báo tự động tại [{X_SITENAME}] {X_MODULE}: Lời bình được gửi ở {X_ITEM_TYPE}');//[{X_SITENAME}] {X_MODULE} auto-notify: Comment submitted for {X_ITEM_TYPE}

// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define ('_NOT_BOOKMARK_NOTIFY', 'Đánh dấu');//Bookmark
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Đánh dấu tiết mục này (không thông báo).');//Bookmark this item (no notification).
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Theo dõi tiết mục này nhưng không muốn nhận bất kỳ thông báo sự kiện nào.');//Keep track of this item without receiving any event notifications.

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'Kiểu thông báo<br />Ví dụ như bạn đang theo dõi một diễn đàn, bạn muốn nhận thông báo theo kiểu nào khi diễn đàn có những thông tin cập nhật mới nhất?');//Notification Method<br /> When you monitor e.g. a forum, how would you like to receive notifications of updates?
define ('_NOT_METHOD_EMAIL', 'Gửi Email (dùng địa chỉ có sẵn trong tài khoản của tôi)');//Email (use address in my profile)
define ('_NOT_METHOD_PM', 'Tin nhắn');//Private Message
define ('_NOT_METHOD_DISABLE', 'Tạm thời không dùng');//Temporarily Disable

define ('_NOT_NOTIFYMODE', 'Kiểu thông báo mặc định');//Default Notification Mode
define ('_NOT_MODE_SENDALWAYS', 'Thông báo cho tôi về mọi cập nhật đã lựa chọn');//Notify me of all selected updates
define ('_NOT_MODE_SENDONCE', 'Thông báo cho tôi chỉ một lần');//Notify me only once
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Thông báo cho tôi chỉ một lần và cho đến khi tôi đăng nhập lần nửa');//Notify me once then disable until I log in again
define ('_NOT_NOTHINGTODELETE', 'Không có gì để xóa bỏ.');//There is nothing to delete.
?>