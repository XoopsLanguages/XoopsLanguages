<?php

$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_PREFERENCES","Seçenekler");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_PERMISSION","İzinler");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_DESC_PERMISSION","Ziyaretçiler sadece görüntüleyebilir");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_INDEX","Anasayfa");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_ABOUT","Hakkında");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_HOW_TO","Nasıl Yönetilir");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_ROOMS_AREAS","Bölge ve Salon Yönetimi");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_HELP","Yardım");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_UPDATES","Güncelleme");

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_BOOKING','Detay sayfasını gör');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_CREATE_BOOKING','Rezervasyon Olustur');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MODIFY_BOOKING','Rezervasyonları Yönet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FULL_ADMIN','Tam yönetim');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN','Yönetici Adı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_EMAIL','Yönetici Maili');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_EMAIL_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY','Web Sitesi Adı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_LOGO','Web Sitesi Logo');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_LOGO_DESC','Sitenizin logosu<br />
MRBS ana dizininde olmalı<br />
Eğer logo görünmesini istemiyorsanız<br />
Kutucuğu boş bırakınız
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_MORE_INFO','Şirketiniz hakkında ayrıntılı bilgi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_MORE_INFO_DESC','Sirketiniz hakkında bilgi görüntülenmesini istiyorsanız buraya yazın.<br />
Görüntülenmemesi için boş bırakınız');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_URL','Web sitesi URL');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_URL_DESC','Web sitenizin URL sini yazabilirsiniz.<br />
Gereksiz olduğunu düsünürseniz boş bırakınız.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_URL_BASE','ESAS URL');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_URL_BASE_DESC','URL problemlerinin çözümünde bu kısmı düzenleyiniz.<br />
Eğer MRBS modülünün URL si hatalı ise buradan düzenleyebilirsiniz..<br />
Ayrıca eposta uyarılarını kullanmak istiyorsanız bu kısım önemlidir mümkün olduğunca dikkatli olunuz.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER','Rezerve Yapanın Bilgisi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_DESC','Rezervasyon yapan kişinin kullanıcı adı veya gerçek adının görüntülenmesi ile ilgili bölüm.
');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_UNAME','Kullanıcı Adı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_NAME','Adı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_BOTH','Her ikisi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_NONE','Hiç biri');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWPASTMONTH','Takvimde geçen ayı göster');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWPASTMONTH_DESC','Takvim görünümünde bir önceki ayı göstermeye veya gizelemeye yarar.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS','Peryodik Sistem');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_DESC','Bu bölümde isterseniz saat görünümünü seçebilirsiniz<br /> isterseniz peryodik görünümü seçerek saat görünümünü devre dışı bırakabilirsiniz..<br />

');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_TRUE','Peryodik Görünüm');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_FALSE','Saat Görünüm');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_RESOLUTION','Zaman Aralığı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_RESOLUTION_DESC','Rezervasyon zaman aralığı seçimi örn: 30 dk ara ile veya 60 dk aralık.<br />
1800 sec = 30 min');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_DURATION','Varsayılan süre');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_DURATION_DESC','Rezervasyon sistemi varsayılan süre (saniye).<br />
Eger saat görünümü seçilmisse. 1 saat = 3600 saniye.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS','Gün başlangıcı : Saat');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_DESC','Örneğin sabah 9 için 9 girmelisiniz. (0-23 arası)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_MINUTES','Gün başlangıcı : Dakika <br>(değiştiğinde hata verebiliyor)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_MINUTES_DESC','0-59 Aralığında olmalıdır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS','Gün sonu : Saat');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_DESC','0-23 Aralığında olmalı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_MINUTES','Gün sonu : Dakika');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_MINUTES_DESC','0-59 Aralığında olmalı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIDDEN_DAYS','Gizlenecek Günler');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIDDEN_DAYS_DESC','Gizlemek istediğiniz günlerin karşılığı olan sayılar arasına , koyarak yazınız.<br />
Pazar için 0, Pazartesi için 1, vs..<br />
Örneğin, Eğer cumartesi ve pazar günlerini gizlemek isterseniz <b>0,6</b> yazmalısınız.<br />
Eğer tamamiyle kaldırmanız gerekiyorsa hafta ve ayların gösterildiği tablodan kaldırabilirsiniz(nedemek anlamAdım).<br />
CSS dosyasını dzüenleyerek gizli günlerin tabloda farklı renklerde görüntülenmesini saglayabilirsiniz.<br />
Bakınız: $column_hidden_width bölümünü mrbs.css.php dosyasında arayınız.<br />
Note that although they are hidden from display in the week and month views,<br />
they can still be booked from the edit_entry form<br />
and you can display the bookings by jumping straight into the day view from the date selector.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT','Tarih Biçimi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_DESC','Tarihi biçimini isterseniz "Temmuz 10" yada "10 Temmuz" şeklinde gösterebilirsiniz.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_0','Ex: Temmuz 10');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_1','Ex: 10 Temmuz');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT','Zaman (Saat) Biçimi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_DESC','12 Saat veya 24 saatlik dilim.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_0','12 Saat');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_1','24 Saat');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAX_REP_ENTRYS','Maksimum tekrarlanan girişler');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAX_REP_ENTRYS_DESC','Max needed +1');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_REPORT_DAYS','Varsayılan Günlük Raporlar');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_REPORT_DAYS_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SEARCHCOUNT','Arama sonucunda görüntülenecek sayfa başına sonuç sayısı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SEARCHCOUNT_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_REFRESH_RATE','Sayfa yenileme süresi (Saniye)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_REFRESH_RATE_DESC','Devre dışı bırakmak için 0 seçiniz.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER','Takip etme şekli');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_DESC','Gün, hafta ve ay , önce ve sonra geçerli tarihi bağlantıları. <br />
Veya sadece geçerli gün, hafta ve ay için bağlantıları vardır daha basit trailer .
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_TRUE','Basit Takip');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_FALSE','Komple Takip');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT','Alan Listesi Biçimi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_DESC','Alanları liste olarak veya açılır kutu olarak gösterir');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_LIST','Liste');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_SELECT','Açılır kutu');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS','Aylık görünüm detayları');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_DESC','Girişler aylık görünümünde başlangıç/bitiş, slot, kısa açıklama veya her ikisi gösterilebilir.<br />
"Açıklama" ayarlanabilir, "slot" ayarlanabilir "Her ikisi" ayarlanabilir.<br />
Varsayılan "Her ikisi", Ancak yerine 12 günde 6 giriş gösterilir .
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_D','Açıklama');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_S','Slot');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_B','Her İkisi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER','Hafta numarası');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_DESC','To view weeks in the bottom (trailer.inc) as week numbers (42) instead of "first day of the week" (13 Oct), set this to "Show weeknumber".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_TRUE','Hafta Numarası Göster');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_FALSE','Hafta Numarası Gizle');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE','Sağda Zaman');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_TRUE','Sağda zamanı göster');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_FALSE','Sağda zamanı gizle');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR','Javascript imleci');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_DESC','Gün/Hafta/Ay aktif imleç görünümü.<br />
By default, highlighting is implemented using the CSS :hover pseudo-class.<br />
For old browers such as IE6, this is not supported and MRBS will automatically switch over to use JavaScript highlighting.<br />
For which there are three different modes: "bgcolor","class" and "hybrid" (See next parameter).<br />
If clients have VERY old browsers, then you may even want to disable the JavaScript highlighting.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_TRUE','Javascript imleci aktif');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_FALSE','Javascript imleci pasif');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD','Vurgu Yöntemi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_DESC','IE6 gibi eski tarayıcılarda daha hızlı olduğu için "Karma" önerilir<br />
JavaScript tek olduğu zaman vurgulama kullanılan yine de. <br />
"Javascript imleç" aktif olmadığı zaman CSS vurgulama kullanılabilir.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_HYBRID','Hybrid');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_CLASS','Class');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_BGCOLOR','Bgcolor');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK','(+) link');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_DESC','To always show the (+) link as in MRBS 1.1');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_TRUE','(+) link Göster');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_FALSE','(+) link Gizle');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW','Varsayılan başlama görüntüsü');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_DESC','Ay, Hafta yada Gün');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_DAY','Gün');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_WEEK','Hafta');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_MONTH','Ay');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_ROOM','Varsayılan Salon');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_ROOM_DESC','Define default room to start with (used by index.php)<br />
Room numbers can be determined by looking at the Edit or Delete URL for a room on the admin page.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION','Kimlik doğrulama yöntemi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_DESC','Kullanıcı kimliğini saklamak ve almak nasıl olsun?');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_PHP','php');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_HTTP','http');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS','Rezervasyonlar admine postalansın ');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_DESC','Evet seçerseniz rezervasyonlar bildirilecek');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS','Admin paneline rezervasyonları bildir');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_DESC','Evet seçerseniz admin paneline rezervasyonlar bildirilir.<br />
Area admin emails are set in room_area admin page.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS','Mail room admin on bookings');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_DESC','Set to YES if you want ROOM ADMIN to be notified when entries are booked.<br />
Room admin emails are set in room_area admin page.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE','Mail admin on delete');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_DESC','Set to YES if you want ADMIN to be notified when entries are deleted.<br />
Email will be sent to mrbs admin, area admin and room admin as per above settings, as well as to booker if Mail Booker is enable (see below).
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL','Mail admin all');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_DESC','Set to YES if you want to be notified on every change (i.e, on new entries)<br />
But also each time they are edited. Default is NO (only new entries)
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS','Mail details');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_DESC','Set to YES is you want to show entry details in email, otherwise only a link to view_entry is provided.<br />
Irrelevant for deleted entries.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER','Mail booker');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_DESC','Set to YES if you want BOOKER to receive a copy of his entries as well any changes.<br />
Depends of MAIL_ADMIN_ALL, see below.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND','Mail admin backend');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_DESC','Set the name of the Backend used to transport your mails.<br />
Either "mail","smtp" or "sendmail".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_MAIL','mail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_SMTP','smtp');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_SENDMAIL','Sendmail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_PATH','Sendmail path');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_PATH_DESC','Set the path of the Sendmail program (only used with "sendmail" backend).');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_ARGS','Sendmail arguments');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_ARGS_DESC','Set additional Sendmail parameters (only used with "sendmail" backend).<br />
Example : -t -i
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_HOST','Smtp Sunucusu');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_HOST_DESC','Smtp server baglantı ayarı.<br />
Only used with "smtp" backend.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PORT','Smtp port');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PORT_DESC','Smtp portunu ayarlayın.<br />
Only used with "smtp" backend.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH','Smtp kullanımı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_DESC','SMTP kullanımına izin verilsinmi?.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_USERNAME','Smtp Kullanıcı Adı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_USERNAME_DESC','SMTP kullanıcı Adı.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PASSWORD','Smtp Sifresi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PASSWORD_DESC','SMTP sifresini ayarlayınız.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_LANG','Admin Dili');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_LANG_DESC','Emaillerde kullanılacak olan dili seçiniz (Seçilebilir diller lang.*).');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_FROM','Gönderici Maili');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_FROM_DESC','Mail gönderildiğinde gönderen maili olarak görünecek mail adresi.<br />
boş birakilirsa admin maili kullanilir.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_RECIPIENTS','Mail Alacak kişiler');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_RECIPIENTS_DESC','Mail almasını istediğiniz kişilerin maillerini giriniz.<br />
Birden fazla alıcı tanımlanabilir örn: "john@doe.com,scott@tiger.com".<br />
Eğer boş bırakılırsa admin maili kullanılır.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CC','Kopya Mail alıcısı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CC_DESC','Kopya mail alanını doldurunuz.<br />
Birden fazla mail yazabilirsiniz Örneğin: "john@doe.com,scott@tiger.com".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING','Dil Kodlaması');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_DESC','Varsayılan olarak veritabaninda ve sayfalarda UTF-8 Kullan<br />
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_0','UTF-8 Kullanma');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_1','UTF-8 Kullan');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_LANGUAGE_TOKENS','Standart Dil Dosyası');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_LANGUAGE_TOKENS_DESC','Farklı bir dil Dosyası ayarlamak için sağ taraftaki menüden seçim yapınız.<br />
lang.* Dosyası MRBS dizininde olmalıdır.<br />
Eğer yeni bir dil Dosyası eklerseniz modülü güncelleyiniz.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE','Otomatik dil değiştirme');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_DESC',"Otomatik dil seçimi Aktif (yada Pasif) oldugu zaman farklı ülkelerden girildigi takdirde dil otomatik degisir.<br />
Eğer pasif seçiliyse dil daima sabit kalir.
");
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_0','Aktif');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_1','Pasif');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FAQFILELANG','S.S.S Dil Dosyası');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FAQFILELANG_DESC',"Eğer s.s.s dil dosyanız mevcutsa, menüden seçiniz.<br />
s.s.s dil dosyaları MRBS klasöründe mevcuttur..<br />
Yeni dil Dosyası eklerseniz müdülü güncelleyiniz.
");
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_THEME','Tema');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_THEME_DESC','Rezervasyon tema görünümünü değişebilrisiniz.<br />
Tema dosyaları "Themes" klasöründedir.<br />
yeni bir tema eklemişseniz modülü güncelleyiniz..
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENTRY_TYPES','Alan Türleri');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENTRY_TYPES_DESC','Alan türleirnizi oluşturun.<br />
Use A to Z (except E and I wich are created by default).<br />
Separate entry types with a comma<br />
Edit lang.* in "mrbs" folder to change text (near line 260).<br />
Edit *.inc files (near line 71) in "Themes" folder to change cells color.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING','Month cell scrolling');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_DESC','Set to YES if you want the cells in the month view to scroll if there are too many bookings to display.<br />
Set to NO if you want the table cell to expand to accommodate the bookings.<br />
NOTE 1 : Scrolling doesn\'t work in IE6 and so the table cell will always expand in IE6.<br />
NOTE 2 : In IE8 Beta 2 scrolling doesn\'t work either and the cell content is clipped when Month cell scrolling is set to YES.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_FALSE','hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_PERIODS','Peryotlar');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_PERIODS_DESC','Peryot sayısını ayarlayınız.<br />
Oluşturacağınız peryotları virgül ile ayırınız. örn: P1,P2,P3,P4<br />
mrbs dizini içindeki lang.* Dosyası içerisindeki metni düzenleyebilirsiniz (291. Satir).
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS','Hafta Başlangıcı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_DESC','Hafta başlangıcı: 0 Pazar, 1 pazartesi, vs..');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMEZONE','Zaman Dilimi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMEZONE_DESC','Toplantı odası için zaman dilimi.<br />
Linux PHP 5 kullanmanız önerilmektedir.<br />
In this configuration if you don\'t, meetings in a different DST than you are currently in are offset by the DST offset incorrectly.<br />
When upgrAdıng an existing installation, this should be set to the timezone the web server runs in (Eg : Europe/London).<br />
<a href="http://fr.php.net/timezones">Desteklenen Zaman Dilimleri Listesi</a>
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_0','Pazar');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_1','Pazartesi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_2','Salı');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_3','Çarşamba');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_4','Perşembe');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_5','Cuma');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_6','Cumartesi');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CHARSET','E-posta karakter seti');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CHARSET_DESC','e-postalar içinde kullanılacak kodlama isterseniz utf-8 olabilir, Ancak seçtiğiniz karakter çevirisi tüm karakterleri işleyebilir ve herkes rezervasyon açıklamasını kullanabilir.<br />
Örneğin : iso-8859-9 Ayarlayın.
');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING','Önceden rezervasyon sınırı ');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_DESC','Rezervasyon yapılabilecek gün sayısına bir sınır koyun. Yöneticiler için geçerli değildir ');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_TRUE','Evet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_FALSE','Hayır');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIME_BOOKING','Rezervasyon yapılan gün sayısı ');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIME_BOOKING_DESC','Önceden rezervasyon sınırı EVET olarak ayarlanmalıdır');

?>