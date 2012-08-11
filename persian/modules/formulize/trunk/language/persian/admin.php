<?php

define("_FORM_RENAME_TEXT","تغيير نام اين فرم");
define("_FORM_EDIT_ELEMENTS_TEXT","تغيير در فيلدهاي اين فرم");
define("_FORM_EDIT_SETTINGS_TEXT","تغيير در تنظيمات اين فرم");
define("_FORM_CLONE_TEXT","كپي برداري از اين فرم");
define("_FORM_CLONEDATA_TEXT","كپي برداري فرم و اطلاعات ثبت شده");
define("_FORM_DELETE_TEXT","حذف اين فرم");

define("_AM_SAVE","ذخيره");
define("_AM_COPIED","%s copy");
define("_AM_DBUPDATED","پايگاه داده با موفقيت بروز شد");
define("_AM_ELE_CREATE","ايجاد فيلد در فرم");
define("_AM_ELE_EDIT","ويرايش فيلد فرم: %s");
define("_AM_FORM","فرم : ");
define("_AM_REQ","نتايج ماژول فرم : ");
define("_AM_SEPAR",'{SEPAR}');
define("_AM_ELE_FORM","فيلدهاي فرم");
define("_AM_PARA_FORM","پارامترهاي فرم");

define("_AM_ELE_CAPTION","عنوان");
define("_AM_ELE_CAPTION_DESC","<br /></b>{SEPAR} به شما اجازه مي دهد نام آن قسمت را نمايش ندهيد");
define("_AM_ELE_DEFAULT","مقدار پيش فرض");
define("_AM_ELE_DESC","توضيحات مربوط به اين فيلد");
define("_AM_ELE_DESC_HELP","آنچه در اينجا تايپ نماييد در زير عنوان فيلد به نمايش در خواهد آمد");
define("_AM_ELE_COLHEAD","عنوان ستون(اختياري)");
define("_AM_ELE_COLHEAD_HELP","اگر عنوان ستون را مشخص كنيد در ليست وروديها بجاي عنوان نمايش داده مي شود . اين زماني مفيد است كه عنوان اصلي طولاني باشد و يا ما مايليم با توجه به ديدگاه كاربر تعيين كردد.");
define("_AM_ELE_HANDLE","كاربرد اطلاعات(اختياري)");
define("_AM_ELE_HANDLE_HELP","شما مي توانيديك نام كوتاه براي اين فيلد مشخص نماييد كه ديتابيس آنرا به هنگام ذخيره اطلاعات ورودي ثبت خواهد كرد . در صورتي كه نامي مشخص نكنيد ، كد فيلد ثبت خواهد شد");
define("_AM_ELE_DETAIL","Detail");
define("_AM_ELE_REQ","ثبت الزامي");
define("_AM_ELE_ORDER","ترتيب");
define("_AM_ELE_DISPLAY","اين فيلد را براي اين گروهها نمايش بده");
//define("_AM_ELE_DISPLAYLIST","Display this element to these groups, in the list of entries");
define("_AM_ELE_PRIVATE","محرمانه");
define("_AM_ELE_HANDLE_HEADING","تاريخ/شماره");
define("_AM_ELE_TYPE_HEADING","نوع");
define("_AM_ELE_DISPLAY_HEADING","نمايش");


define("_AM_ELE_TEXT","جعبه متن");
define("_AM_ELE_TEXT_DESC","{NAME} نمايش كامل نام;<br />{UNAME} نمايش نام كاربر;<br />{EMAIL} نمايش ايميل كاربر;<br />{ID} در صورت ذخيره ، كد ركورد ثبت شده در تكست باكس به نمايش درمي آيد.<br />{SEQUENCE} نمايش يكسري اعداد پياپي.<br />PHP Code (ending with the line '&#36;default = &#36;something;') will be interpreted to generate the default value.");
define("_AM_ELE_TEXT_DESC2","<br />PHP Code is the only situation where more than one line of this box will be read.");
define("_AM_ELE_TAREA","جعبه متن چند خطي");
define("_AM_ELE_MODIF","متن براي نمايش در ستون");
define("_AM_ELE_MODIF_ONE","متن نمايشي در طول هر دو ستون");
define("_AM_ELE_INSERTBREAK","محتواي HTML براي اين خط");
define("_AM_ELE_IB_DESC","عنوان نمايش داده نخواهد شد و متن تايپ شده در اينجا در هر دو ستون كشيده مي شود");
define("_AM_ELE_IB_CLASS","CSS class براي اين رديف:");
define("_AM_ELE_SELECT","جعبه كشويي");
define("_AM_ELE_CHECK","جعبه انتخاب");
define("_AM_ELE_RADIO","جعبه گزينش");
define("_AM_ELE_YN","بلي/خير ساده");
define("_AM_ELE_DATE","تاريخ");
define("_AM_ELE_REQ_USELESS","غيرقابل استفاده براي جعبه كشويي،جعبه انتخاب و جعبه گزينش");
define("_AM_ELE_SEP","ايجاد يك خط فاصله در ارتفاع");
define("_AM_ELE_NOM_SEP","ايجاد فاصله در ارتفاع نام");
define("_AM_ELE_UPLOAD","الصاق يك فايل");
define("_AM_ELE_CLR","با رنگ");

// added - start - August 227 2005 - jpc
define("_AM_ELE_TYPE","در اين تكست باكس چه چيزي بايد از طرف كاربر وارد شود?");
define("_AM_ELE_TYPE_DESC","در صورت استفاده از اين فيلد براي امور محاسباتي رياضي 'فقط اعداد'را انتخاب كنيد");
define("_AM_ELE_TYPE_STRING","همه چيز");
define("_AM_ELE_TYPE_NUMBER","فقط اعداد");
// added - end - August 22 2005 - jpc


define("_AM_ELE_SIZE","سايز فيلد");
define("_AM_ELE_MAX_LENGTH","حداكثر طول");
define("_AM_ELE_ROWS","رديف ها");
define("_AM_ELE_COLS","ستون ها");
define("_AM_ELE_OPT","تنظيمات دلخواه");
define("_AM_ELE_OPT_DESC","تنظيم يك گزينه '{FULLNAMES}' يا '{USERNAMES}' ليستي برمبناي شرايط زير بدست مي دهد.<br /><br />با تيك زدن باكسها مقادير پيش فرض را انتخاب نماييد");
define("_AM_ELE_OPT_DESC_CHECKBOXES","براي مقادير پيش فرض تيك بزنيد<br>جعبه هاي بدون متن ناديده گرفته خواهند شد <i>ذخيره</i>");
define("_AM_ELE_OPT_DESC1","<br />در صورت عدم اجازه براي چند انتخاب ، اولين گزينه تيك خورده محاسبه خواهد شد");
define("_AM_ELE_OPT_DESC2","با انتخاب گزينه مناسب مقدار پيش فرض را تعيين كنيد<br>جعبه هاي بدون متن ناديده گرفته خواهد شد <i>ذخيره</i>");
define("_AM_ELE_OPT_UITEXT","متن قابل رويت براي كاربر مي تواند با آنچه در پايگاه داده ذخيره مي شود متفاوت باشد. مفيد براي زماني كه شما عددي را بجاي متن نشان داده شده ذخيره مي كنيد . منظور ستون دوم كشويي است");
define("_AM_ELE_ADD_OPT","اضافه %s اختيارات");
define("_AM_ELE_ADD_OPT_SUBMIT","اضافه كن");
define("_AM_ELE_SELECTED","انتخاب شده");
define("_AM_ELE_CHECKED","تيك خورده");
define("_AM_ELE_MULTIPLE","اجازه چند انتخاب");
define("_AM_ELE_TYPE","Display the break up in");
define("_AM_ELE_GRAS","Gras");
define("_AM_ELE_RGE","Red");
define("_AM_ELE_CTRE","Center");
define("_AM_ELE_ITALIQ","Italic");
define("_AM_ELE_SOUL","Underlined");
define("_AM_ELE_BLEU","Blue");
define("_AM_ELE_FICH",'File');
define("_AM_ELE_TAILLEFICH","سايز مجاز فايل");
define("_AM_ELE_PDS","poids");
define("_AM_ELE_TYPE",'Allowed types');
define("_AM_ELE_DELIM_CHOICE",'جداكننده گزينه ها');
define("_MI_formulize_DELIMETER_SPACE","فضاي سفيد");
define("_MI_formulize_DELIMETER_BR","خط فاصله");
define("_MI_formulize_DELIMETER_CUSTOM","مذكور HTML");

//added to handle the formlink part of the selectbox element -- jwe 7/29/04
define("_AM_ELE_FORMLINK","تنظيمات الصاق شده از فرمي ديگر");
define("_AM_ELE_FORMLINK_DESC","فيلدي از فرم ديگر انتخاب كنيد تا اطلاعات وارد شده در آن فيلد به عنوان مقادير پيش فرض اين فيلد قرار گيرد");
define("_AM_FORMLINK_NONE","بدون الصاق -- استفاده از تنظيمات بالا");
define("_AM_ELE_FORMLINK_TEXTBOX","الصاق اطلاعات از فرمي ديگر به اين فيلد");
define("_AM_ELE_FORMLINK_DESC_TEXTBOX","اگر فيلدي از فرمي ديگر را اينجا انتخاب كنيد ، متن وارد شده توسط كاربر، با آن مقايسه مي شود . در صورت تطابق ، متن وارد شده پذيرفته مي شود و در صورت عدم تطابق ، كاربر پيام اصلاح مقدار وارد شده دريافت مي كند.");
define("_AM_FORMLINK_NONE_TEXTBOX","هيچ الصاق اطلاعاتي انجام نشده است");
define("_AM_ELE_FORMLINK_SCOPE","در صورت الصاق تنظيمات -- يا {FULLNAMES} يا {USERNAMES} -- آنها را محدود كن به به مقادير گروههاي انتخابي اينجا");
define("_AM_ELE_FORMLINK_SCOPE_DESC","گروههايي كه در اينجا انتخاب ميكنيد را حداكثر اختيارات بدهيد.  شما مي توانيد براي عضويت گروه كاربر جاري اختيارات محدود بدهيد.در اين صورت اگر كاربر جاري جزء هيچكدام از گروهها نباشد ، گروههاي انتخابي شما ناديده گرفته مي شوند.");
define("_AM_ELE_FORMLINK_SCOPE_ALL","استفاده براي همه گروهها");
define("_AM_ELE_FORMLINK_SCOPELIMIT_NO","براي همه اين گروهها <br>");
define("_AM_ELE_FORMLINK_SCOPELIMIT_YES","فقط گروههايي كه كاربر جاري عضو آن است<br><br>");
define("_AM_ELE_FORMLINK_ANYALL_ANY","وروديهاي اعضايي كه جزو هر گروه فعال هستند را در بر بگير<br>");
define("_AM_ELE_FORMLINK_ANYALL_ALL","وروديهاي اعضايي كه جزو گروههاي فعال هستند را در بر بگير");

// formlink scope filters -- feb 6 2008
define("_AM_ELE_FORMLINK_SCOPEFILTER","اگر اختيارات الصاق شده -- يا  {FULLNAMES} يا {USERNAMES} هستند -- آنها را برمبناي اين مشخصه هاي وروديشان در فرم مبدا فيلتر كن");
define("_AM_ELE_FORMLINK_SCOPEFILTER_DESC","وقتي مقاديري در فرمي ديگر را به فيلد خود الصاق مي كنيد شايد بخواهيد مقادير مربوطه را بر مبناي مشخصه هاي معيني از اطلاعات وارد شده  در فرم اوله محدود كنيد ");
define("_AM_ELE_FORMLINK_SCOPEFILTER_ALL","فيلتري تعريف نشده(براي حذف فيلترهاي تعريف شده از اين گزينه استفاده كنيد().");
define("_AM_ELE_FORMLINK_SCOPEFILTER_CON","برمبناي اين شرط/شرايط فيلتر كن");
define("_AM_ELE_FORMLINK_SCOPEFILTER_ADDCON","اضافه كردن شرط جديد");
define("_AM_ELE_FORMLINK_SCOPEFILTER_REFRESHHINT","(در صورت خالي بودن ليست اينجا ، روي دگمه 'اضافه كردن شرط جديد'كليك كنيد تا ليست بازسازي شود)");
       
       
  

// subforms
define("_AM_ELE_SUBFORM_FORM","كدام فرم مايليد داراي سابفرم باشد ؟");
define("_AM_ELE_SUBFORM","ايجادسابفرم از يك فرم چند صفحه اي");
define("_AM_ELE_SUBFORM_DESC","وقتي فرم جاري را به عنوان بخشي از فرم چند صفحه اي نمايش مي دهيد, سابفرم مربوطه در فرم به نمايش درخواهد آمو.  سابفرم مذكور به كاربران اجازه ايجاد و ويرايش ركوردها را خواهد بدون اينكه از فرم اصلي خارج شوند.  در اينجا ليست كليه سابفرم هايي كه ايم فرم جزئي از آنها مي تواند باشد حاضر است.");
define("_AM_ELE_SUBFORM_NONE","سابفرمي موجود نيست - ابتدا فرم چند صفحه اي رابايد تعريف كنيد");
define("_AM_ELE_SUBFORM_ELEMENTS","كدام اجزا بايد براي سابفرم رابط به نمايش درآيند؟");
define("_AM_ELE_SUBFORM_ELEMENTS_DESC","حدود سه يا چهار فيلد از سابفرم مي تواند به راحتي بخشي از فرم اصلي قرار گيرد.  بيش از چهار فيلد فرم رابط را به هم مي ريزد.  شما مي توانيد در اينجا در ليست فيلدهاي مورد نظر خود را تعيين كنيد.  كليه كاربران با كليك در هر فيلد قادر به پر كردن آن هستند.");
define("_AM_ELE_SUBFORM_REFRESH","بازسازي ليست فيلدها براي مطابقت با فرم");
define("_AM_ELE_SUBFORM_BLANKS","به هنگام بارگذاري فرم اصلي سابفرم چند فاصله داشته باشد ؟");

// grids
define("_AM_ELE_GRID","جدول فيلدهاي موجود");
define("_AM_ELE_GRID_HEADING","عنوان اين جدول را مشخص نماييد .");
define("_AM_ELE_GRID_HEADING_USE_CAPTION","عنوان تايپ شده بالا");
define("_AM_ELE_GRID_HEADING_USE_FORM","عنوان اين فرم");
define("_AM_ELE_GRID_HEADING_NONE","بدون تيتر");
define("_AM_ELE_GRID_ROW_CAPTIONS","عنوان رديف هاي اين جدول؟");
define("_AM_ELE_GRID_ROW_CAPTIONS_DESC","هر جدول شامل رديف ها و ستونهاست.  هر جدول يك تيتر دارد.  عنوان مورد نظر خود را تايپ نيد, كه كاكا جداشده باشند.  در صورت بلند بودن عبارت عنوان بهتر است كه در همان خط تايپ شود");
define("_AM_ELE_GRID_COL_CAPTIONS","عنوان اين ستونها را مشخص كنيد");
define("_AM_ELE_GRID_COL_CAPTIONS_DESC","هر جدول شامل رديف ها و ستون هاست.  بالاي هر ستون عنوان ستون قرار مي گيرد.  تيتر مورد نظر خود را براي ستونها با كاما از هم جدا بنويسيد.  در صورت طولاني بودن عنوان بهتر است هر كدام در خط مربوطه نوشته شود.");
define("_AM_ELE_GRID_BACKGROUND","سايه پس زمينه");
define("_AM_ELE_GRID_BACKGROUND_HOR","سايه انتخابي هر رديف");
define("_AM_ELE_GRID_BACKGROUND_VER","سايه انتخابي هر ستون");
define("_AM_ELE_GRID_START","اولين فيلد در گوشه ابتدايي جدول را مشخص كنيد");
define("_AM_ELE_GRID_START_DESC","تعداد فيلدهاي جدول مساوي تعداد ستونهاست. يعني سه رديف و چهار ستون ، دوازده فيلد به شما مي دهد ");

// derived columns
define("_AM_ELE_DERIVED","مقادير برگرفته از ديگر فيلدها");
define("_AM_ELE_DERIVED_CAP","فرمول براي ايجاد مقادير در اين فيلد");
define("_AM_ELE_DERIVED_DESC","انتخاب فيلدي از بالا براي استفاده در فرمول.  You can also use element ID numbers or Framework handles in your formula, as long as they are inside double quotes.  The formula can have multiple lines, or steps, and you can use PHP code in the formula.  The last line should be of the format <i>\$value = \$something</i> where \$something is the final number or formula that you want use.<br /><br />Example:<br />\$value = \"Number of hits\" / \"Total shots\" * 100<br /><br />Note: only use double quotes (\") to refer to a field.  If you need to use quotes in a line of PHP code, use single quotes (').");
define("_AM_ELE_DERIVED_ADD","به فرمول اضافه كن");

define("_AM_ELE_SELECT_NONE","هيچ فيلدي انتخاب نشده.");
define("_AM_ELE_CONFIRM_DELETE","آيا نسبت به حذف اين فيلد از فرم مطمئنيد ؟<br>كليه اطلاعات مربوط به اين فيلد نيز حذف خواهد شد.");

define("_AM_TITLE","مديرين منو");
define("_AM_ID","شناسه");
define("_AM_POS","موقعيت");
define("_AM_POS_SHORT","محل");
define("_AM_INDENT","Left indent");
define("_AM_INDENT_SHORT","Ind.");
define("_AM_ITEMNAME","نام");
define("_AM_ITEMURL","URL");
define("_AM_STATUS","وضعيت");
define("_AM_FUNCTION","نقش");
define("_AM_ACTIVE","فعال");
define("_AM_INACTIVE","غيرفعال");
define("_AM_BOLD","bold");
define("_AM_NORMAL","normal");
define("_AM_MARGINBOTTOM","حاشيه پايين");
define("_AM_MARGIN_BOTTOMSHORT","mrg. bott.");
define("_AM_MARGINTOP","حاشيه بالا");
define("_AM_MARGIN_TOPSHORT","mrg. top");
define("_AM_EDIT","ويرايش");
define("_AM_DELETE","حذف");
define("_AM_ADDMENUITEM","Add menu item");
define("_AM_CHANGEMENUITEM","تعيين موارد ليست");
define("_AM_SITENAMET","نام سايت:");
define("_AM_URLT","URL:");
define("_AM_FONT","فونت:");
define("_AM_STATUST","وضعيت:");
define("_AM_MEMBERSONLY","كاربران مجاز");
define("_AM_MEMBERSONLY_SHORT","Reg.<br>only");
define("_AM_MEMBERS","فقط اعضا");
define("_AM_ALL","تمام كاربران");
define("_AM_ADD","اضافه كن");
define("_AM_EDITMENUITEM","ويرايش موارد ليست");
define("_AM_DELETEMENUITEM","حذف مورد از ليست");
define("_AM_SAVECHANG","تغييرات را ذخيره كن");
define("_AM_WANTDEL","آيا مايل به حدف اين مورد هستيد ؟");
define("_AM_YES","بلي");
define("_AM_NO","خير");
define("_AM_formulizeMENUSTYLE","قالب منوي من");
define("_AM_MAINMENUSTYLE","قالب منوي اصلي");

define("_AM_VERSION","1.0");
define("_AM_REORD","سورت جديد");
define("_AM_SAVE_CHANGES","ذخيره تغييرات");

define("_formulize_CAPTION_MATCH","عنوان وارد شده قبلا بكار رفته. يك '2' به آن اضافه گرديد.");
define("_formulize_CAPTION_QUOTES","عنوان ها نمي توانند علامت نقليه ':'داشته باشند آنها حذف شدند");
define("_formulize_CAPTION_SLASH","عنوان ها نمي توانند علامت '/' داشته باشند آنها حذف شدند");
define("_formulize_CAPTION_LT","عنوان ها نمي توانند علامت '<' داشته باشند آنها خذف شدند");
define("_formulize_CAPTION_GT","عنوان ها نمي توانند علامت '>' داشته باشند آنها خذف شدند");

define("_AM_VIEW_FORM","مشاهده فرم");
define("_AM_GOTO_PARAMS","تغيير در تنظيمات فرم");
define("_AM_PARAMS_EXTRA","(مشخص كنيد كدام فيلدها<br>در صفحه <i>مشاهده ركوردها</i> نمايش داده شوند)");
define("_AM_GOTO_MAIN","بازگشت به صفحه اصلي");
define("_AM_GOTO_MODFRAME","بازگشت به اولين<br>صفحه فرم چند صفحه اي");

define("_AM_CLEAR_DEFAULT","حذف پيش فرض");

define("_AM_SAVING_CHANGES","ذخيره تغييرات");
define("_AM_EDIT_ELEMENTS","ويرايش فيلدهاي فرم");

define("_AM_CONFIRM_DELCAT","دسته حذف مي شود تاييد مي كنيد ؟");
define("_AM_MENUCATEGORIES","دسته بنديهاي ليست فرمها");
define("_AM_MENUCATNAME","نام :");
define("_AM_MENUSAVEADD","اضافه/ذخيره");
define("_AM_MENUNOCATS","دسته اي وجود ندارد");
define("_AM_MENUEDIT","ويرايش");
define("_AM_MENUDEL","حذف");
define("_AM_MENUCATLIST","دسته ها :");
define("_AM_CATSHORT","دسته");
define("_AM_CATGENERAL","فرمهاي عادي");

define("_AM_CANCEL","انصراف");

define("_AM_CONVERT","تبديل");
define("_AM_CONVERT_HELP","تبديل اين جعبه متن يك خط به جعبه متن چند خطي و برعكس");
define("_AM_ELE_CANNOT_CONVERT","گزينه دلخواهي براي تبديل اين نوع فيلد وجود ندارد");
define("_AM_CONVERT_CONFIRM","آيا مايليد اين جعبه متن تك خط را به چند خطي و يا برعكس تبديل كنيد ؟");
define("_AM_ELE_CONVERTED_TO_TEXTBOX","اين جعبه متن چند خطي به تك خط تبديل شد");
define("_AM_ELE_CONVERTED_TO_TEXTAREA","اين جعبه متن تك خطي به چند خطي تبديل شد");


// added - start - August 25 2005 - jpc
define("_AM_FORM_DISPLAY_MULTIPLE","دلخواه");
// added - end - August 25 2005 - jpc
define("_AM_FORM_DISPLAY_EXTRA","اين ليست براي نمايش فيلدهاي مشخص  براي گروههاي مشخص است . يعني در شرايطي لازم است گروههاي متفاوت فيلدهاي متفاوت از يك فرم را بتوانند مشاهده كنند. معمولا گزينه 'همه گروهها كه مجوز دسترسي به اين فرم را دارند' انتخاب مي شود.");
//define("_AM_FORM_DISPLAYLIST_EXTRA","Use this list to display certain elements to only certain groups when the list of entries is shown.  Meant for situations where users in different groups should see different data from the same form.  Normally, you can leave this on 'All groups'.");
define("_AM_FORM_DISPLAY_ALLGROUPS","همه گروهها كه مجوز دسترسي به اين فرم را دارند");
define("_AM_FORM_DISPLAY_NOGROUPS","هيچكدام");
define("_AM_FORM_FORCEHIDDEN","فيلدي كه مخفي است و كاربران به آن دسترسي ندارند");
define("_AM_FORM_FORCEHIDDEN_DESC","اين مورد فقط دگمه هاي گزينش و جعبه هاي متن را شامل مي شود.  . زماني كه فيلدي بصورت ثابت براي گروهي از كاربران ثبت مي كنيد مفيد است");

define("_AM_ELE_DISABLED","غيرفعال نمودن اين فيلد براي كدام گروه ها؟");
define("_AM_FORM_DISABLED_EXTRA","اين گزينه براي غيرفعال كردن اين فيلد براي گروههاي مشخص استفاده مي ش.د . فيلد متناسب با گزينه هاي بالا كماكان قابل نمايش است ولي كاربران قادر به تغيير در آن نخواهند بود . اين گزينه فعلا در مورد جعبه متن كوتاه و بلند قابل استفاده است");
define("_AM_FORM_DISABLED_ALLGROUPS","غيرفعال براي همه گروهها");
define("_AM_FORM_DISABLED_NOGROUPS","غيرفعال براي هيچكدام از گروهها");


define("_AM_ELE_OTHER",'براي گزينه "ساير", {ساير|*شماره*} در يكي از جعبه متن ها قرار دهيد. مثلا{ساير|30} يك جعبه متن با طول 30 كاراكتر مي سازد .');

define("_AM_FORM_PRIVATE","اطلاعات ورودي در اين فيلد محرمانه است");
define("_AM_FORM_PRIVATE_DESC","با تيك زدن اين باكس ، اطلاعات محرمانه افراد فقط توسط مديراني كه مجوز ديدن اطلاعات محرمانه را دارند قابل دسترسي است");

//added by flix <INBOX International> for sedonde (colorpicker feature)
define("_AM_ELE_COLORPICK","جعبه انتخاب رنگ");

// SCREENS...including multipage

define("_AM_FORMULIZE_SCREEN_TYPE","نوع : ");

define("_AM_FORMULIZE_DEFINED_SCREENS","تعيين صفحه هاي اين فرم");
define("_AM_FORMULIZE_DELETE_SCREEN","حذف");
define("_AM_FORMULIZE_ADD_NEW_SCREEN_OF_TYPE","صفحه اي از همين مدل اضافه كن:");
define("_AM_FORMULIZE_SCREENTYPE_MULTIPAGE","نسخه چند صفحه اي فرم");
define("_AM_FORMULIZE_SCREENTYPE_LISTOFENTRIES","ليست ركوردهاي اين فرم");
define("_AM_FORMULIZE_ADD_SCREEN_NOW","اضافه كن");
define("_AM_FORMULIZE_SCREEN_FORM","ايجاد يا ويرايش صفحه اين فرم");
define("_AM_FORMULIZE_SCREEN_TITLE","عنوان اين صفحه");
define("_AM_FORMULIZE_USE_NO_FRAMEWORK","فقط اين فرم را استفاده كن بدن هيچ فرم چند صفحه اي");
define("_AM_FORMULIZE_SELECT_FRAMEWORK","فرم چند صفحه اي مورد نظر براي استفاده در صورت موجود بودن");
define("_AM_FORMULIZE_SCREEN_SECURITY","از توكن امنيتي زوپس در اين صفحه استفاده مي كنيد؟");
define("_AM_FORMULIZE_SCREEN_SECURITY_DESC","توكن امنيتي زوپس از حملات اسكريپتي جلوگيري مي كند.  به هر حال, در صورت استفاده از  يوآي مبتني بر آجاكس ممكن است با مشكل مواجه شويد, و شايد هم بعضي ديگر از صفحات.");


define("_AM_FORMULIZE_SCREEN_PARAENTRYFORM","پاسخهاي ركورد قبلي آيا به عنوان بخشي از اين فرم نمايش داده شود؟  در صورت موافقت فرم مورد نظر را مشخص كنيد.");
define("_AM_FORMULIZE_SCREEN_PARAENTRYFORM_FALSE","نه پاسخهاي قبلي را نشان نده .");
define("_AM_FORMULIZE_SCREEN_PARAENTRYRELATIONSHIP","در صورت نمايش پاسخ هاي قبلي, ارتباط اين فرم و فرم ديگر در ركوردهاي ثبت شده چيست؟");
define("_AM_FORMULIZE_SCREEN_PARAENTRYREL_BYGROUP","ركوردها به گروه يكساني تعلق دارد");

define("_AM_FORMULIZE_SCREEN_INTRO","متن معرفي اولين صفحه اين فرم");
define("_AM_FORMULIZE_SCREEN_THANKS","متن تشكر براي آخرين صفحه اين فرم");
define("_AM_FORMULIZE_SCREEN_DONEDEST","آدرس پيوند كه كاربران در انتهاي فرم به آن دسترسي دارند");
define("_AM_FORMULIZE_SCREEN_BUTTONTEXT","متن پيوند كه كاربران در انتهاي فرم به آن دسترسي دارند");
define("_AM_FORMULIZE_SCREEN_PRINTALL","دگمه 'نماي قابل چاپ - تمام صفحات' در انتهاي فرم نمايش بده"); //nmc 2007.03.24
define("_AM_FORMULIZE_SCREEN_PRINTALL_Y","بلي"); //nmc 2007.03.24
define("_AM_FORMULIZE_SCREEN_PRINTALL_N","خير"); //nmc 2007.03.24
define("_AM_FORMULIZE_DELETE_THIS_PAGE","حذف اين صفحه");
define("_AM_FORMULIZE_CONFIRM_SCREEN_DELETE","آيا نسبت به حذف اين صفحه اطمينان داريد؟");
define("_AM_FORMULIZE_CONFIRM_SCREEN_DELETE_PAGE","آيا نسبت به حذف اين صفحه اطمينان داريد؟");
define("_AM_FORMULIZE_SCREEN_A_PAGE","اجزايي كه در فرم بايد در فرم نمايش داده شوند");
define("_AM_FORMULIZE_SCREEN_ADDPAGE","اضافه كردن صفحه جديد");
define("_AM_FORMULIZE_SCREEN_INSERTPAGE","يك صفحه جديد اينجا ايجاد كن");
define("_AM_FORMULIZE_SCREEN_SAVE","ذخيره اين صفحه");
define("_AM_FORMULIZE_SCREEN_SAVED","جزئيات اين صفحه در پايگاه داده ذخيره شده است");
define("_AM_FORMULIZE_SCREEN_PAGETITLE","عنوان شماره صفحه");
define("_AM_FORMULIZE_SCREEN_CONS_PAGE","شرايط نمايش صفحه");
define("_AM_FORMULIZE_SCREEN_CONS_NONE","اين صفحه را هميشه نمايش بده");
define("_AM_FORMULIZE_SCREEN_CONS_YES","فقط وقتي كه شرايط زير برقرار بود صفحه را نمايش بده :");
define("_AM_FORMULIZE_SCREEN_CONS_ADDCON","اضافه كردن شرط جديد");
define("_AM_FORMULIZE_SCREEN_CONS_HELP","اگر صفحه بايد بر اساس سوال و جوابهاي صفحات قبل نمايش داده شود ، شرايط مفيد خواهد بود.  سوالات و جوابهايي كه بايد از صفحه قبل در فرم نمايش داده شوند را مشخص كنيد.");

// LIST OF ENTRIES SCREEN
define("_AM_FORMULIZE_SCREEN_LOE_BUTTONINTRO","دگمه هايي كه مايليد در اين صفحه نمايش داده شوند را مشخص كنيد");
define("_AM_FORMULIZE_SCREEN_LOE_BUTTON1","متن قابل نمايش روي دگمه ي '");
define("_AM_FORMULIZE_SCREEN_LOE_BUTTON2","' ؟");
define("_AM_FORMULIZE_SCREEN_LOE_CONFIGINTRO","مشخص كنيد كدام اختيارات تنظيمات را ميليد استفاده كنيد :");
define("_AM_FORMULIZE_SCREEN_LOE_CURRENTVIEWLIST","چه متني ليست 'نماي حاضر' را معرفي مي كند ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DEFAULTVIEW","كدام نما نماي پيشفرض تعيين شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_BLANK_DEFAULTVIEW","استفاده از نماي پيشفرض خالي(مثلا ركوردي نمايش داده نشود)");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_DEFAULTVIEW","اگر قالب ليست را به دلخواه تنظيم مي كنيد، نماي پيشفرض كماكان براي تعيين ركوردهايي كه در ابتداي ليست قرار گيرند ، مي تواند مورد استفاده قرار گيرد .");
define("_AM_FORMULIZE_SCREEN_LOE_LIMITVIEWS","اگر ليست 'نماي حاضر' استفاده شده, اين نماها را استفاده كن:");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_LIMITVIEWS","If you include the basic views (\"Entries by...\"), then the selected view will switch to a basic view when the user makes a change, such as a sort or Quicksearch.");
define("_AM_FORMULIZE_SCREEN_LOE_DEFAULTVIEWLIMIT","تمام نماها را دربر بگير");
define("_AM_FORMULIZE_SCREEN_LOE_VIEW_ONLY_IN_FRAME","فقط در فرم چند صفحه اي قابل استفاده است: ");
define("_AM_FORMULIZE_SCREEN_LOE_VIEW_ONLY_NO_FRAME","فقط خارج از فرم چند صفحه اي قابل استفاده است");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_LEAVEBLANK","براي خاموش بودن اين دگمه آنرا خالي رها كنيد");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_LEAVEBLANK_LIST","براي خاموش بودن ليست آنرا خالي رها كنيد");
define("_AM_FORMULIZE_SCREEN_LOE_NOPUBDVIEWS","نماي منتشرشده اي از اين فرم وجود ندارد");
define("_AM_FORMULIZE_SCREEN_LOE_NOVIEWSAVAIL","هيچ نمايي در دسترس نيست");
define("_AM_FORMULIZE_SCREEN_LOE_USEWORKING","آيا پيام 'در حال انجام' به هنگام بارگذاري صفحه نمايش داده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_USEWORKING","در صورت فشردن دگمه بازگشت توسط كاربر, خاموش كردن اين پيام مفيد است ؟.");
define("_AM_FORMULIZE_SCREEN_LOE_USESCROLLBOX","آيا ليست ركوردها در يك جعبه اسكرول دار نمايش داده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_USESEARCHCALCMSGS","آيا پيامهاي 'جستجوي پيشرفته' يا 'محاسبات' در بالاي ليست به نمايش درآيد ؟");
define("_AM_FORMULIZE_SCREEN_LOE_USCM_NEITHER","هيچكدام<br>");
define("_AM_FORMULIZE_SCREEN_LOE_USCM_BOTH","هر دو<br>");
define("_AM_FORMULIZE_SCREEN_LOE_USCM_SEARCH","فقط وضعيت 'جستجوي پيشرفته'<br>");
define("_AM_FORMULIZE_SCREEN_LOE_USCM_CALC","فقط وضعيت'محاسبات' ");
define("_AM_FORMULIZE_SCREEN_LOE_USEHEADINGS","آيا عنوان هر ستون نمايش داده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_USEHEADINGS","بدون عنوان ستونها ، با اين كار كسي قادر به سورت كردن ستون نخواهدبود");
define("_AM_FORMULIZE_SCREEN_LOE_REPEATHEADERS","در صورت استفاده از عنوان ها, بعد از چند ركورد تكرار شوند ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_REPEATHEADERS","به هنگام گشت كاربر در اطلاعات سون كاربر ميتواند ببيند در كدام ستون اطلاعات مورد نظرش قرار دارد.  براي عدم تكرار عنوان ستون ها روي صفر قرار دهيد");
define("_AM_FORMULIZE_SCREEN_LOE_ENTRIESPERPAGE","در هر صفحه از ليست چند ركورد نمايش داده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_ENTRIESPERPAGE","براي نمايش همه ركوردها در يك صفحه بر روي صفر تنظيم كنيد");
define("_AM_FORMULIZE_SCREEN_LOE_VIEWENTRYSCREEN","با كليك كاربران چه صفحه اي بايد براي نمايش ركوردهاي افراد نمايش داده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_VIEWENTRYSCREEN_DEFAULT","نسخه پيشفرض اين فرم را استفاده كن");
define("_AM_FORMULIZE_SCREEN_LOE_COLUMNWIDTH","پهناي هر ستون را با پيكسل مشخص كنيد ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_COLUMNWIDTH","صفر به معناي پهناي معمول پيشفرض");
define("_AM_FORMULIZE_SCREEN_LOE_TEXTWIDTH","در هر سلول چند كاراكتر قرار گيرد ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_TEXTWIDTH","صفر به معناي عدم محدوديت");
define("_AM_FORMULIZE_SCREEN_LOE_USESEARCH","جعبه هاي'جستجوي سريع' در بالاي ستون ها نمايش داده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_USESEARCH","در صورت خاموش بودن جعبه هاي 'جستجوي سريع' هنوز در بالا و پايين قالبها در دسترس هستند(زير را ببينيد(.");
define("_AM_FORMULIZE_SCREEN_LOE_USECHECKBOXES","جعبه انتخاب كناري نمايش داده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_UCHDEFAULT","بله جعبه انتخاب را براي كاربران جهت انتخاب حذف نشان بده<br>");
define("_AM_FORMULIZE_SCREEN_LOE_UCHALL","بله جعبه انتخاب را كنار همه ركورد ها نشان بده<br>");
define("_AM_FORMULIZE_SCREEN_LOE_UCHNONE","خير جعبه هاي انتخاب را نشان نده");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_USECHECKBOXES","اگر از يك قالب ليست دلخواه استفاده مي كنيد, اين گزينه متغير <i>\$selectionCheckbox</i> براي هر رديف قرار داده مي شود .");
define("_AM_FORMULIZE_SCREEN_LOE_USEVIEWENTRYLINKS","آيا 'علامت ذره بين' در كنار هر ركورد قرار گيرد؟, با اين كار كاربران قادر به مشاهده جزئيات ركورد مي گردند.");
define("_AM_FORMULIZE_SCREEN_LOE_HIDDENCOLUMNS","ستونهايي كه مايليد مقدار حاضر از هر ركورد  در ليست به عنوان فيلد مخفي فرم باشد انتخاب كنيد.");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_HIDDENCOLUMNS","اگر متني در صفحه اي كه به عنوان بخشي از صفحه بعدي  <i>\$_POST</i> كه بارگذاري مي شود نياز داشته باشيد ، اين گزينه مفيد است.  You can use <i>gatherHiddenValue('</i>handle<i>');</i> in a custom button access the values you receive.  هر ستوني كه انتخاب كنيد بطور معمول در ليست نمايش داده خواهد شد, علاوه بر فيلدهاي مخفي كه تعيين گرديده است.");
define("_AM_FORMULIZE_SCREEN_LOE_DECOLUMNS","ستونهايي كه مايليد اطلاعات به عنوان فيلد فرم بجاي متن در آن نمايش داده شود را انتخاب كنيد:");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_DECOLUMNS","<b>هشدار:</b> اگر در ليست اجزائ جعبه انتخاب (چك باكس) موجود است ، چك باكس هاي بالا را فعال نكنيد!");
define("_AM_FORMULIZE_SCREEN_LOE_DESAVETEXT","اگر ستوني را براي نمايش اجزاي فرم تعيين كرده ايد, چه متني براي دگمه'ثبت' در نظر داريد ؟");
define("_AM_FORMULIZE_SCREEN_LOE_DVMINE","ركوردهايي كه توسط كاربر جاري ايجاد شده");
define("_AM_FORMULIZE_SCREEN_LOE_DVGROUP","ركوردهايي كه توسط گروههايي كه كاربر جاري در آن عضويت دارد");
define("_AM_FORMULIZE_SCREEN_LOE_DVALL","ركوردهاي تمام گروه ها");
define("_AM_FORMULIZE_SCREEN_LOE_BUTTON_SECTION1","شما مي توانيد متن روي دگمه هاي زير را عوض كنيد.  همچنين در صورت استفاده از قالب هاي بالا  يا پايين شما مي تونيد آنها  را داشته باشيد.");
define("_AM_FORMULIZE_SCREEN_LOE_BUTTON_SECTION2","شما مي توانيد متن دگمه هاي زير را عوض كنيد.  اگر قالب ليست دلخواه خود را استفاده مي كنيد, اين دگمه ها بصورت پيشفرض روي صفحه قرار ندارند, اما مي توانيد با استفاده از قالب بالا يا پايين آنها را به صفحه اضافه كنيد.");
define("_AM_FORMULIZE_SCREEN_LOE_CONFIG_SECTION1","گزينه هاي تنظيمات زير صرف نظر از اينكه آيا يك قالب ليست مورد دلخواه استفاده مي كنيد يا نه ، مي تواند تاثير گذار باشد.");
define("_AM_FORMULIZE_SCREEN_LOE_CONFIG_SECTION2","وقتي از يك قالب ليست دلخواه استفاده مي كنيد اكثر گزينه هاي تنظيمات زير تاثيري ندارند بجز مواردي كه ذكر شده باشد.");
define("_AM_FORMULIZE_SCREEN_LOE_TEMPLATEINTRO","اختياري - براي اين صفحه هر گزينه قالب دلخواه خود را مشخص كنيد:");
define("_AM_FORMULIZE_SCREEN_LOE_TEMPLATEINTRO2","<span style=\"font-weight: normal\"><p><b>Top and Bottom Templates</b></p>\n<p>If you specify any PHP code in the Top or Bottom Templates, it will be used to control the appearance of the space either above or below the list of entries.</p>\n<p><b>WARNING:</b> if you include any checkbox elements in your templates, turn off the checkboxes that appear on the left side of the list!</p>\n<p>Use this PHP code to setup your preferred layout of buttons, or include custom instructions, etc.</p>\n<p>To include buttons and controls, use these variables:</p>
<table cellpadding=5 border=0>
<tr>
<td>
<ul>
<li>\$addButton</li>
<li>\$addMultiButton</li>
<li>\$addProxyButton</li>
<li>\$exportButton</li>
<li>\$importButton</li>
<li>\$notifButton</li>
<li>\$currentViewList</li>
<li>\$changeColsButton</li>
<li>\$saveButton (if any columns are displayed as form elements)</li>
</ul>
</td><td>
<ul>
<li>\$calcButton</li>
<li>\$advSearchButton</li>
<li>\$cloneButton</li>
<li>\$deleteButton</li>
<li>\$selectAllButton</li>
<li>\$clearSelectButton</li>
<li>\$resetViewButton</li>
<li>\$saveViewButton</li>
<li>\$deleteViewButton</li>
<li>\$pageNavControls (if there is more than one page of entries)</li>
</ul>
</td>
</tr>
</table>
<p>For Quicksearch boxes, use \"\$quickSearch<i>Column</i>\" where <i>Column</i> is either the element ID number, or the element handle if using a Framework.</p>\n<p>For Custom Buttons, use \"\$handle\" where <i>handle</i> is the handle you specified for that button.  You can use \"\$messageText\" to control where the clicked button's message will appear on the screen.  By default, the message appears centred at the top.</p>\n<p>If the current view list is available, you can determine which view was last selected from the list, by checking whether <i>\$The_view_name</i> is true or not.  You can also check <i>\$viewX</i> where X is a number corresponding to the position of the view in the list, 1 through n.  You can use this to put if..else clauses into your template, so it changes depending what view is selected.</p>\n<p><b>List Template</b></p>\n<p>If you specify any PHP code for the List Template, it will be used to draw in each row of the list.</p>\n<p>You do not need to create a foreach loop or any other loop structure in this template.  The PHP code you specify will be executed inside a loop that runs once for each entry.</p>\n<p>You have full access to XOOPS and Formulize objects, functions, variables and constants in this template, including <i>\$fid</i> for the form ID.  Use \$entry to refer to the current entry in the list.  For example:</p>\n<p style=\"font-family: courier\">&nbsp;&nbsp;&nbsp;display(\$entry, \"phonenumber\");</p>\n<p>That code will display the phone number recorded in that entry (assuming \"phonenumber\" is a valid element handle).</p><p>You can use \"\$selectionCheckbox\" to display the special checkbox used to select an entry.</p><p>You can use a special function called \"viewEntryLink\" to create a link to the entry so users can edit it.  This function takes one parameter, which is the text that will be clickable.  Examples:</p><p style=\"font-family: courier\">&nbsp;&nbsp;&nbsp;print viewEntryLink(\"Click to view this entry\");<br>&nbsp;&nbsp;&nbsp;print viewEntryLink(display(\$entry, \"taskname\"));<br>&nbsp;&nbsp;&nbsp;print viewEntryLink(\"&lt;img src='\" . XOOPS_ROOT_PATH . \"/images/button.jpg'&gt;\");</p></span>\n");
define("_AM_FORMULIZE_SCREEN_LOE_TOPTEMPLATE","قالب براي قسمت بالاي صفحه ،در بالاي ليست:");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_TOPTEMPLATE","در صورت غيرفعال كردن اسكرول باكس, و عدم استفاده از دگمه هاي صدور(اكسپورت), نتيجتا كدي كه اينجا تايپ مي كنيد , بر روي صفحه به نمايش در مي آيد.  يعني شما مي توانيد جدولي را در ابتداي قالب ايجاد كنيد, و تگ هاي &lt;tr&gt; در قالب ليست آورده  و جدول را در قالب پاييني ببنديد.  اين سه تمپليت امكان بسياري از موارد دلخواه را در اختيار شما قرار مي دهد.");
define("_AM_FORMULIZE_SCREEN_LOE_BOTTOMTEMPLATE","قالب براي قسمت پايين صفحه ، در پايين ليست:");
define("_AM_FORMULIZE_SCREEN_LOE_LISTTEMPLATE","تمپليت براي قسمت ليست در صفحه:");
define("_AM_FORMULIZE_SCREEN_LOE_DESC_LISTTEMPLATE","در صورت تعيين تمپليت براي ليست, بعضي دگمه ها و اختيارات تنظيم ذكر شده در بالا عمل نخواهد كرد.");
define("_AM_FORMULIZE_SCREEN_LOE_LISTTEMPLATE_HELPINTRO_FRAMEWORK","در زير ليست نامهاي كوتاه اجزاي فرمهاي يك فرم چند صفحه اي را مشاهده مي كنيد.  آنها را با نقش  <i>نمايش</i> بكار ببريد .");
define("_AM_FORMULIZE_SCREEN_LOE_LISTTEMPLATE_HELPINTRO_FORM","در زير شناسه هاي تمام اجزاي فرمها را مشاهده ميكنيد. آنها را با نقش <i>نمايش</i> بكار ببريد.");
// CUSTOM BUTTONS
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTONINTRO","دگمه هاي دلخواه خود را براي اين صفحه مشخص كنيد:");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTONINTRO2","با استفاده از تمپليت ها مي توانيد دگمه هاي دلخواه را به بالا ، پايين يا كنار صفحه اضافه كنيد (زير را ببنيد).  شما بايد نماي ظاهري هر كدام از دگمه ها را مشخص كنيد. ");
define("_AM_FORMULIZE_SCREEN_LOE_ADDCUSTOMBUTTON","يك دگمه دلخواه را اضافه كن");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON","دگمه دلخواه");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_HANDLE","نام ارجايي اين دگمه را مشخص سازيد");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_NEW","دگمه دلخواه جديد");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_BUTTONTEXT","متن روي دگمه چه باشد ؟");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_MESSAGETEXT","با فشردن اين دگمه چه متني در بالاي صفحه به نمايش درآيد ؟");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_INLINE","آيا اين دگمه براي تك تك ركوردها نشان داده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_INLINE_DESC","در صورت انتخاب 'نه' دگمه ي مربوطه فقط در تمپليت بالا و پايين در دسترس خواهد بود.  با انتخاب 'بلي' دگمه مربوطه در ليست به نمايش در مي آيد, و يا در تمپليت ليست در صورت استفاده از آن ، به نمايش در خواهد آمد.");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO"," با كليك روي اين دگمه كدام ركوردها قابل ويرايش باشند ؟");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_INLINE","فقط ركوردي كه دگمه مقابل آن نمايش داده شده ");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_SELECTED","فقط ركوردهايي كه انتخاب شده باشند (به شرط فعال بودن چك باكس ها )");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_ALL","تمام ركوردهاي اين فرم");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_CUSTOM_CODE","هيچكدام.  كد PHP دلخواه را با كليك اين دگمه اجرا كن.");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_CUSTOM_HTML","هيچكدام.  هر جا كه اين دگمه قرار داشت از PHP براي اجراي HTML استفاده كن.");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_NEW","دگمه بايد ركورد جديدي در اين فرم ايجاد كند");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_NEWPERSELECTED","اين دگمه بايد براي هر چك باكسي كه تيك خورده باشد ركورد جديدي ايجاد كند");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_NEW_OTHER","دگمه بايد ركورد جديدي در فرم ايجاد كند '");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_APPLYTO_NEWPERSELECTED_OTHER","' براي هر چك باكسي كه تيك خورده باشد");
define("_AM_FORMULIZE_SCREEN_LOE_ADDCUSTOMBUTTON_EFFECT","اضافه كردن عملكرد  به اين دگمه");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_DELETE","حذف اين دگمه");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT","شماره عملكرد");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_DESC","آن جزء از فرم كه مورد واكنش قرار بايد بگيرد را مشخص كنيد, همچنين عملكردي كه بايد در آن جزء صورت گيرد, و همچنين مقدار مورد استفاده.  مقدار مي تواند شامل كد پي اچ پي باشد, كه شامل <i>gatherHiddenValue('</i>handle<i>');</i> براي بازسازي مقدار مورد نظر باشد.  از اجزاي مخفي شده براي ارسال اين مقادير استفاده كنيد.  براي استفاده از كدهاي پي اچ پي, آخرين خط مقدار بايد <i>\$value = \$something;</i> باشد");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_CUSTOM_CODE_DESC","كد پي اچ پي كه با فشردن اين دگمه بايد اجرا شود را مشخص كنيد.  شما مي توانيد از مقادير عمومي \$formulize_thisEntryId براي دسترسي به شماره شناسه ركوردي كه دگمه ي مقابل آن فشرده شده استفاده كنيد, در صورت عدم حضور دگمه مقابل هر ركورد ،  اين كد پي اچ پي براي هر چك باكسي كه تيك خورده اجرا مي شود, و \$formulize_thisEntryId هر بار حاوي شناسه يكي از ركوردهايي كه چك باكس آن تيك خورده است مي باشد.  در صورت عدم دگمه براي هر ركورد و يا عدم چك باكس تيك خورده ، كد پي اچ پي يكبار اجرا مي گردد و \$formulize_thisEntryId خالي خواهد بود.  شما مي توانيد  <i>gatherHiddenValue('</i>handle<i>');</i> را براي بازسازي يك فيلد يك ركورد استفاده كنيد.  از اجزاي مخفي شده براي ارسال آنها استفاده كنيد.");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_CUSTOM_HTML_DESC","كد پي اچ پي كه بايد اين \"button\" اجرا كند را مشخص كنيد.  اين كار در مورد تنظيمات  \"appear on every line\" مفيد خواهد بود, بنابراين شما مي توانيد HTML به آن اضافه كنيد.  با استفاده از <i>display(\$entry, \$handle);</i> براي در برگرفتن هر فيلد از فرم از ركورد مورد نظر قابل استفاده است.");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_DELETE","اين واكنش را حذف كنيد");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_ELEMENT","كدام جزء مورد واكنش قرار گيرد ؟");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_ACTION","چه عملي انجام شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_VALUE","كدام مقدار استفاده شود ؟");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_ACTION_REPLACE","مقدار جاري را با مقدار تعيين شده عوض كن");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_ACTION_REMOVE","مقدار تعيين شده را از مقدار جاري حذف كن");
define("_AM_FORMULIZE_SCREEN_LOE_CUSTOMBUTTON_EFFECT_ACTION_APPEND","مقدار تعيين شده را به انتهاي مقدار جاري اضافه كن");



?>