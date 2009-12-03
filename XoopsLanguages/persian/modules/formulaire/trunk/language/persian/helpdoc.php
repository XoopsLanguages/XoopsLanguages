<?php

define("_DOC_MOD_INSTALL","نصب ماژول");
define("_DOC_PRE_INSTALL","Pre-required");
define("_DOC_NEW_INSTALL","Fresh install");
define("_DOC_MAJ_INSTALL","Upgrade from a previous version");
define("_DOC_PROC_INSTALL","Installation procedure");

define("_DOC_PRE","براس استفاده از ماژول فرملایر موارد زیر لازم است :
<ul>
	<li>نسخه زوپس 2.0.7 یا بالاتر</li>
	<li>شما باید دسترسی 777 به شاخه  ماژول در بخش آپلود بدهید</li>
	<li>زوپس باید برای ارسال ایمیل پیکربندی شده باشد</li>");

define("_DOC_INSTALL","You don't have previous formulaire or you don't want to migrate old data ? follow this process :
<ul>
  <li>دریافت ماژول</li>
  <li>verify that your module folder don't have yet a formulaire subfolder. (delete the folder formulaire in this case)</li>
  <li>decompress the archive contents in the modules folder of your site</li>
  <li>نصب ماژول</li>
  <li>notice : there is no access to the module from the main menu</li>");

define("_DOC_MAJ","In the version 3, there are a lot of modifications, so, it is not possible to upgrade from a previous version.<br />
 It is better to uninstall your formulaire version and install this new version.");
define("_DOC_PROC","After having installed the module : <ul>
<li>activate the blocks in the 'Blocks and Groups' part</li>
<li>at installation, a demo form is created, the users permissions must be given in order to set visible the form in the user side</li>
<li>if you word locally, the demo form is reachable, if you work on an external website, you have to modify the access url of the module in the admin part</li>
<li>the form is now reachable and the installation is over</li>");

define("_DOC_MOD_CONFIG","پیکر بندی ماژول");
define("_DOC_PREF_CONFIG","ویژگی ها");
define("_DOC_BLGR_CONFIG","بلاک ها و گروه ها");

define("_DOC_PREF","These are parameters valid in all the module, for every forms, but they can be modified for each concerned element. We find :
<ul>
	<li>Default width of text boxes : this is the width of text boxes when they appear at screen</li>
	<li>Default maximum length of text boxes : this is the max length of the value in the text box</li>
	<li>Default rows of text areas : this is the height of the text areas</li>
	<li>Default columns of text areas : this is the width of the text areas</li>
	<li>Default weight of join files (in Ko) : this is the max weight of the join files in the mails</li>
	<li>Delimeter for check boxes and radio buttons : this is the separation between check boxes and radio buttons, this can be a white space or a line break</li>");

define("_DOC_BLGR","This part permit to manage the module's blocks and the group's permissions
<ul>
	<li>The first part permit to manage the different module's blocks directly in the module, and not in the system module</li>
	<li>the second part permit to manage the form's permissionse and the blocks for each group (webmasters, registered users, anonymous users)</li>");

define("_DOC_MOD_GESFORM","Forms management");
define("_DOC_CREAT_GESFORM","Form creation");
define("_DOC_CREAT","Before using a form, you must create it. There are few parameters :<ul>
	<li>Form title, with possibility to display or not</li>
	<li>Form image, with possibility to display or not</li>
	<li>Fisrt element to display on the page, title or image, if they are displayed</li>
	<li>If QCM is selected, this form will be a QCM and not a form</li>
	<li>Parameters of information display of QCM in mails, if QCM is selected</li>
	<li>Mail parameters : </li><ul>
			<li>E-mail</li>
			<li>Group</li>
			<li>Send to the admin only</li>
			<li>Receive the form filled</li>
			<li>If 'Send to the admin only' is selected, then the form will be send only to the admin and to the mail sender if 'Receive the form filled' is selected. If not, the mail is send to the mail address, to the group and to the sender if it is selected</li>
			</ul>
	<li>URL of return after the sending of the form, default : XOOPS_URL</li>
	<li>Help for the form, message on the form's name in the block on the user side</li>
	<li>Text for the submit button, default : Send</li>
	<li>Elements to send in the mails</li><ul>
			<li>Sender's name, a link in the mail permit to acceed to the user's profile</li>
			<li>IP address</li>
			<li>Web navigator used</li>
			</ul>
	<li>Text encoding for sending e-mails</li>
	<li>Recording of form's sendings in the database, for consult and export</li>
	<li>Number of sendings by users, if selected, then the user can only send one time the form, then, possibility to put a number of days between two consecutive sendings,if the first box has been selected</li>");

define("_DOC_RENOM_GESFORM","Rename a form");
define("_DOC_RENOM","When a form has been created, it is possible to rename it.<br />
You must select a form and put its new name in te text box.");

define("_DOC_SUP_GESFORM","Delete a form");
define("_DOC_SUP","A form can be deleted.<br /> In that case, the form is deleted, but all the form's elements are also deleted, the form's sendings too.<br />
You must select a form, un confirmation request appears, then, the form is deleted."); 
 
define("_DOC_MODIF_GESFORM","Modify the form's elements");
define("_DOC_MODIF","To fill a form, it must contains elements.<br /> There are ten different element types :<ul>
	<li>Text box : simple text area, only one line</li>
	<li>Text area : text area on few lines</li>
	<li>Non alterable Text area : text area which can't be modified</li>
	<li>Select box : item list allowing multiple, or not, selection</li>
	<li>Check box : box allowing the selection of only one element</li>
	<li>Radio buttons : same system as for check boxes</li>
	<li>Yes/No buttons : two buttons, yes, no</li>
	<li>Date : allow to choose a date in a small calendar</li>
	<li>Break un line : permit to separate the form in two parts</li>
	<li>Join a file : permit to join a file to the form</li>
	</ul>
	Each element can be configurate.<br /> There are different parameters which can be different for each element.<br />
	There are always : <ul>
	<li>Caption's name</li>
	<li>If the caption is required or not</li>
	<li>The order, which can be modified on the page listing the elements, using small arrows</li>
	</ul>
	For the other parameters, it depends of element type.<br /><br />
	Each element be modified, deleted or duplicated. It is also possible to choose if the element will be displayed or not.<br />
	A link permit to acceed directly to the form on the user side.");
	
define("_DOC_PARAM_GESFORM","ویرایش ویژگی های فرم");
define("_DOC_PARAM","It is possible to modify the parameters put at the creation of the forms.<br />
You must select a form, all the parameters are displayed and it is possible to modify all of them.");

define("_DOC_STAT_GESFORM","وضعیت فرم");
define("_DOC_STAT","The form status defines if the form will be available or not on the user side.<br />
Activated, it is visible, desactivated, it is invisible but not deleted.");

define("_DOC_PERM_GESFORM","ویژگی ها");
define("_DOC_PERM","It is possible to give permissions to each form, to each group, Webmasters, Registered Users and Anonymous Users.<br />
If the permissions are not given, the forms will not be visibles. That's why, just after the creation of a new form, it is necessary to go to the permissions page.<br />
A check box 'All' permit to give the permissions on all the forms for each group..<br />
The permissions can always be modified.");

define("_DOC_UTIL_GESFORM","بخش کاربر");
define("_DOC_UTIL","In the user side, you only have to click on a form's name in the block.<br />
A help message on each form permit the user to find easily the good form.<br />
Then, the form is displayed, the user only have to fill the form and to click on the send button.");

define("_DOC_MOD_CONSULT","نتایج فرم");
define("_DOC_CONS_CONSULT","نتایج");
define("_DOC_CONSULT","When a form is sent, it can be recorded.<br /> Then, it is possible to consult all the sendings for each form.<br />
You must select a form. If it does not contain any record, a message prevents the user, else, a page displays a list of all the sendings.
(For a QCM, you can see on this page the good answers average of this QCM.)<br />
It is possible to order the sendings by date or by user. Then, you have to choose one sending.<br />
Then, you can observe all the form's fields, and the values put by the user.<br />
For a QCM, we also see the good answers, and the good answers total.<br />
A link to the user profile appears on the page.<br />
Each sending can be deleted, it is possible to delete all of a form's sendings too.");  
define("_DOC_FORM_CONSULT","فرم");
define("_DOC_QCM_CONSULT","QCM");

define("_DOC_STAT_CONSULT","آمار");
define("_DOC_STATI","Statistiscs are availables for the forms and QCMs.<br />
We find the answers filled in the forms and QCMs for checkboxes, select, radio buttons et yes/no buttons.<br />
We find the answers percentages and answers total number.<br />
For a QCM, we can find the results only for the good answers and the success percentage.");  

define("_DOC_MOD_EXPORT","خروجی گرفتن از فرم");
define("_DOC_EXP_EXPORT","خروجی");
define("_DOC_EXPORT","Like the consul part, it is possible to observe the form's sendings.<br />
You must select a form in the list.<br />
Then, the form is exported. A message appears to inform the user that the operation has been realised successfully.<br />
The list of the forms appears with a link to the created file on the line of the form exported.<br /><br />
The form's sendings are exported in CSV format, in the file www/uploads/form.csv.<br />
In the file, the data are separated by ';'.<br />
This format is compatible with Excel.");  

define("_DOC_MOD_MENU","مدیریت منو");
define("_DOC_MENU_MENU","منو");

define("_DOC_MENU","When a new form is created, a menu element is created too.<br />
This menu corresponds to the elements visibles on the user side.<br />
It is possible to change their order, using arrows to make go up or go down each element.<br />
By clicking on the URL, you can acceed the form on the user side.<br />
It is possible to activate or desactivate each element, to set it visible or not.<br />
Each element can be modified.<br />
Then, you can modify : <ul>
	<li>The element position</li>
	<li>The name</li>
	<li>The left indent, means the right shift</li>
	<li>The font, normal or bold</li>
	<li>Form access URL</li>
	<li>Top margin</li>
	<li>Bottom margin</li>
	<li>Status, active or inactive</li>");  

define("_DOC_MOD_DIV","موارد دیگر");
define("_DOC_SERV_DIV","اطلاعات سرور");
define("_DOC_ABOUT_DIV","درباره");

define("_DOC_SERV","This page displays server information.<br />
It displays the Apache Server version and Charset authorized..<br />
Then, it displays the version and support of the library.<br />
Then, you can observe few configuration information."); 

define("_DOC_ABOUT","On this page, you can find information about module's development.<br />
There are the developpers' name.<br />
Then, there is the module status, links to support websites, but also pages to report a bug or suggest new features.<br />
Then, there is the disclaimer for the module."); 

define("_DOC_MOD_RECO","Recommendations");
define("_DOC_RECO","The various tests showed a better performance with Firefox<br />
The display with Internet Explorer is the same except on the user block, the help does not appear on the forms.<br /><br />
If you want to do a fresh install or an update of your formulaire module, please backup all your files and database. Test your update on a clone of your site. Indeed if a module installation is a usually simple operation, there are many dependences beetwen xoops and formulaire and so it's necessary to be careful with your real web site.");

define("_DOC_MENU_INSTALL","نصب");
define("_DOC_MENU_CONFIG","پیکر بندی");
define("_DOC_MENU_PREF","ویژگی ها");
define("_DOC_MENU_BLGR","بلاک ها گروه ها");
define("_DOC_MENU_GESFORM","مدیریت فرم ها");
define("_DOC_MENU_CREATFORM","ساخت فرم");
define("_DOC_MENU_RENFORM","تغییر نام فرم");
define("_DOC_MENU_SUPFORM","حذف فرم");
define("_DOC_MENU_MODFORM","ویرایش گزینه های فرم");
define("_DOC_MENU_MODPFORM","ویرایش پارامتر های فرم");
define("_DOC_MENU_STAT","وضعیت");
define("_DOC_MENU_PERM","دسترسی ها");
define("_DOC_MENU_USER","بخش کاربر");
define("_DOC_MENU_CONS","نتایج");
define("_DOC_MENU_EXP","خروجی");
define("_DOC_MENU_MEN","منو");
define("_DOC_MENU_DIV","موارد دیگر");
define("_DOC_MENU_REC","پیشنهادات");
define("_DOC_MENU_STATI","آمار");
?>