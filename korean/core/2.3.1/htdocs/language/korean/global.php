<?php
// $Id: global.php,v 1.15 2004/06/14 14:22:14 skalpa Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  ------------------------------------------------------------------------ //
//                XOOPS Korean (translated by wanikoo[ wani@wanisys.net ])	   //
//                       <http://www.wanisys.net/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","��ø� ��ٷ��ּ���!");
define("_FETCHING","ó����....");
define("_TAKINGBACK","���� �������� �ǵ��ư��ϴ�.....");
define("_LOGOUT","�α׾ƿ�");
define("_SUBJECT","����");
define("_MESSAGEICON","�޼��� ������");
define("_COMMENTS","�ڸ�Ʈ");
define("_POSTANON","�͸� ����");
define("_DISABLESMILEY","�󱼾����� ��ȿȭ");
define("_DISABLEHTML","HTML ��ȿȭ");
define("_PREVIEW","�̸�����");

define("_GO","������");
define("_NESTED","��ܽ� ǥ��");
define("_NOCOMMENTS","�ڸ�Ʈ ǥ�þ���");
define("_FLAT","�ϰ��� ǥ��");
define("_THREADED","������� ǥ��");
define("_OLDESTFIRST","������ �ͺ���");
define("_NEWESTFIRST","�� �ͺ���");
define("_MORE","�׿� ��...");
define("_MULTIPAGE","<span style='color:red;'>[pagebreak]</span>�±׸� �����߿� �����ϴ� ������ ������������ �Ͻ� �� �ֽ��ϴ�. ");
define("_IFNOTRELOAD","�������� �ڵ����� ���ŵ��� ���� ��쿣 <a href='%s'>����</a>�� Ŭ���� �ּ���");
define("_WARNINSTALL2","����: ���丮/���� %s �� ������ �����մϴ�.<br />��ġ(�ν���)�Ŀ� ���Ȼ� �����Ͽ� �ֽñ� �ٶ��ϴ�.");
define("_WARNINWRITEABLE","����: ���� %s �� ���Ⱑ�� �����Դϴ�.<br />�� ������ �۹̼Ǽ����� ������ �ֽʽÿ�.<br /> in Unix (444), in Win32 (read-only)");

// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED","%s �� �ʼ��׸��Դϴ�." );
define("_XOBJ_ERR_SHORTERTHAN","%s �� %d ����(����Ʈ)���Ϸ� �����ϼž� �մϴ�." );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","������");
define("_POSTEDBY","�۾��� : ");
define("_VISITWEBSITE","Ȩ������");
define("_SENDPMTO","%s�Կ��� PM������ ����");
define("_SENDEMAILTO","%s�Կ��� ������ ����");
define("_ADD","�߰�");
define("_REPLY","����");
define("_DATE","�����Ͻ� : ");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","����������");
define("_MANUAL","�޴���");
define("_INFO","���� ����");
define("_CPHOME","���� �޴�");
define("_YOURHOME","Ȩ������");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","�¶��� ����");
define('_GUESTS','�մ�');
define('_MEMBERS','���ȸ��');
define("_ONLINEPHRASE","<b>%s</b> ���� ���� �¶��λ����Դϴ�.");
define("_ONLINEPHRASEX","<b>%s</b> ���� <b>%s</b>�� �̿����̽ʴϴ�.");
define("_CLOSE","�ݱ�");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","�ο� : ");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","�˼��մϴ�. ���� �̰��� ���ٱ����� �����ϴ�.");

//%%%%%		Common Phrases		%%%%%
define("_NO","�ƴϿ�");
define("_YES","��");
define("_EDIT","����");
define("_DELETE","����");
define("_SUBMIT","������");
define("_MODULENOEXIST","�����Ͻ� �������� �������� �ʽ��ϴ�.");
define("_ALIGN","��ġ");
define("_LEFT","����");
define("_CENTER","�߾�");
define("_RIGHT","������");
define("_FORM_ENTER","%s��(��) �Է��� �ּ���!");
// %s represents file name
define("_MUSTWABLE","���� %s �� ���� ��������� �־���մϴ�.");
// Module info
define('_PREFERENCES','�Ϲݼ���');
define("_VERSION","����");
define("_DESCRIPTION","����");
define("_AUTHOR","������");
define("_CREDITS","Credits");
define("_LICENCE","���̼���");
define("_ERRORS","����");
define("_NONE","����");
define('_ON','�����Ͻ� : ');
define('_READS','����');
define('_WELCOMETO','%s�� �������');
define('_SEARCH','�˻�');
define('_ALL','���');
define('_TITLE','����');
define('_OPTIONS','�����׸�');
define('_QUOTE','�ο�');
define('_LIST','����Ʈ');
define('_LOGIN','�α���');
define('_USERNAME','���̵�: ');
define('_PASSWORD','�н�����: ');
define("_SELECT","����");
define("_IMAGE","�׸�����");
define("_SEND","������");
define("_CANCEL","���");
define("_ASCENDING","��������");
define("_DESCENDING","��������");
define('_BACK','�ڷ�');
define('_NOTITLE','���� ����');

/* Image manager */
define('_IMGMANAGER','�׸����� ������');
define('_NUMIMAGES','%s ��');
define('_ADDIMAGE','�׸����� �߰�');
define('_IMAGENAME','�׸����ϸ�:');
define('_IMGMAXSIZE','���ε� ����ũ�� ���� (bytes):');
define('_IMGMAXWIDTH','���ε� �׸����� �� ���� (pixels):');
define('_IMGMAXHEIGHT','���ε� �׸����� ���� ���� (pixels):');
define('_IMAGECAT','ī�װ��:');
define('_IMAGEFILE','�׸����ϸ�:');
define('_IMGWEIGHT','�׸����� ������ ǥ�ü�:');
define('_IMGDISPLAY','�� �׸������� ǥ����');
define('_IMAGEMIME','MIME ����:');
define('_FAILFETCHIMG','���ε� ���� %s��(��) �������� ���߽��ϴ�.');
define('_FAILSAVEIMG','�׸����� %s��(��) ����Ÿ���̽��� �������� ���߽��ϴ�.');
define('_NOCACHE','ĳ�� ����');
define('_CLONE','����');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH","�� �����ϴ�");
define("_ENDSWITH","�� ������");
define("_MATCHES","������ġ");
define("_CONTAINS","�� ������");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","���");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","ũ��");  // font size
define("_FONT","�۲�");  // font family
define("_COLOR","��");  // font color
define("_EXAMPLE","����");
define("_ENTERURL","��ũ�� ����Ʈ URL�� �Է��� �ּ���!");
define("_ENTERWEBTITLE","����Ʈ���� �Է����ּ���!");
define("_ENTERIMGURL","�׸������� URL�� �Է��� �ּ���!");
define("_ENTERIMGPOS","�׸������� ��ġ�� �����ּ���!");
define("_IMGPOSRORL","'R' �Ǵ� 'r' �� ������, 'L' �Ǵ� 'l' �� ����, �������� ���� ��쿣 ����!");
define("_ERRORIMGPOS","�߸��� �Է�! �׸������� ��ġ�� �ٽ� �����ּ���!");
define("_ENTEREMAIL","��ũ�� �����ּҸ� �Է��� �ּ���!");
define("_ENTERCODE","���α׷� �ڵ带 �Է��� �ּ���!");
define("_ENTERQUOTE","�ο�ó���� ���� �Է��� �ּ���!");
define("_ENTERTEXTBOX","�ۻ��ڿ� �Է��� �ּ���!");
define("_ALLOWEDCHAR","�ִ� ����Ʈ ��: ");
define("_CURRCHAR","���� ����Ʈ ��: ");
define("_PLZCOMPLETE","����� ������� �Է��� �ּ���!");
define("_MESSAGETOOLONG","������� �ʹ� ��ϴ�.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 ��');
define('_SECONDS','%s ��');
define('_MINUTE','1 ��');
define('_MINUTES','%s ��');
define('_HOUR','1 �ð�');
define('_HOURS','%s �ð�');
define('_DAY','1 ��');
define('_DAYS','%s ��');
define('_WEEK','1 ��');
define('_MONTH','1 ��');

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
S - English ordinal suffix, textual, 2 characters; i.e. "th","nd"
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
define('_CHARSET','EUC-KR');
define('_LANGCODE','ko');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","1");
?>