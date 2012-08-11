<?php
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

//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','���� �ٷ� <a href="register.php">���</a>�ϼ���!');
define('_US_LOSTPASSWORD','�н����带 �н��ϼ̳���?');
define('_US_NOPROBLEM','����������! ���� ��Ͻ� ����Ͻ� �����ּҸ� �Է��� �� ��ư�� Ŭ���� �ּ���');
define('_US_YOUREMAIL','��� �����ּ�: ');
define('_US_SENDPASSWORD','������');
define('_US_LOGGEDOUT','�α׾ƿ� �Ǿ����ϴ�.');
define('_US_THANKYOUFORVISIT','����Ʈ�� �̿��� �ּż� �����մϴ�!');
define('_US_INCORRECTLOGIN','�α��� ������ �ùٸ��� �ʽ��ϴ�!');
define('_US_LOGGINGU','%s��, �������. �α��� ó�����Դϴ�.');

// 2001-11-17 ADD
define('_US_NOACTTPADM','�����Ͻ� ȸ���� ��ϵǾ� ���� �ʰų�, Ȥ�� ���� ������ ������ ���� �����Դϴ�.<br />�ڼ��� ������ �����ڿ��� ������ �ּ���!');
define('_US_ACTKEYNOT','����Ű(Ȱ��ȭŰ)�� �ùٸ��� �ʽ��ϴ�.');
define('_US_ACONTACT','�����Ͻ� ������ �̹� ������ ���� �����Դϴ�.(�̹� Ȱ��ȭ�� ����)');
define('_US_ACTLOGIN','������ ����(Ȱ��ȭ)�Ǿ����ϴ�. ����Ͻ� ���̵�� �н������ �α����Ͻñ� �ٶ��ϴ�.');
define('_US_NOPERMISS','�� ������ �����Ͻ� �� �����ϴ�.');
define('_US_SURETODEL','���� ���ȸ�� ������ ������ �����Ͻ� �ǰ���?');
define('_US_REMOVEINFO','������ ������ ��� ��� ���� ȸ�������� ��� �����˴ϴ�.');
define('_US_BEENDELED','������ �����Ǿ����ϴ�.');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','ȸ�����');
define('_US_NICKNAME','���̵�');
define('_US_EMAIL','����');
define('_US_ALLOWVIEWEMAIL','�����ּ� ����');
define('_US_WEBSITE','Ȩ������');
define('_US_TIMEZONE','�ð���');
define('_US_AVATAR','�ƹ�Ÿ');
define('_US_VERIFYPASS','�н�����Ȯ��');
define('_US_SUBMIT','������');
define('_US_USERNAME','ȸ����');
define('_US_FINISH','������');
define('_US_REGISTERNG','��Ͽ� �����Ͽ����ϴ�.');
define('_US_MAILOK','�� ����Ʈ�κ����� ���������� ���������');
define('_US_DISCLAIMER','�̿���');
define('_US_IAGREE','���� ���뿡 �����մϴ�');
define('_US_UNEEDAGREE','�˼��մϴٸ� ����Ͻ÷��� ���� �̿����� �����ϼž߸� �մϴ�.');
define('_US_NOREGISTER','�˼��մϴٸ� ���� �űԵ���� �ް� ���� �ʽ��ϴ�.');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','%s���� ����Ű(Ȱ��ȭŰ)�Դϴ�.');

define('_US_YOURREGISTERED','����� �Ϸ�Ǿ����ϴ�. ���� �����ּҷ� ����Ű(Ȱ��ȭŰ)�� �߼��Ͽ����� ������ ���ÿ� ���� ������ �Ϸ�(����Ȱ��ȭ)�Ͻñ� �ٶ��ϴ�.');
define('_US_YOURREGMAILNG','����� �Ϸ�Ǿ����ϴ�. ������ ������ ���ο����� ����Ű(Ȱ��ȭŰ)�� ���� ������ �߼��ϴµ� �����Ͽ����ϴ�. ������ �˼��մϴٸ� ����Ʈ �����ڿ��� ������ �ֽñ� �ٶ��ϴ�.');
define('_US_YOURREGISTERED2','����� �Ϸ�Ǿ����ϴ�. ����Ʈ �����ڰ� ���� ������ ����(Ȱ��ȭ)�ϸ� �������� ���ó���˴ϴ�. ����(Ȱ��ȭ)�Ϸ�ÿ� ���Ϸ� �뺸�� �帳�ϴ�.');

// %s is your site name
define('_US_NEWUSERREGAT','%s �� �ű�ȸ������� �־����ϴ�');
// %s is a username
define('_US_HASJUSTREG','%s���� �ű� ����ϼ̽��ϴ�');

define('_US_INVALIDMAIL','ERROR: �ùٸ��� ���� �����ּ��Դϴ�.');
define('_US_EMAILNOSPACES','ERROR: �����ּҿ� ������ ����Ͻ� �� �����ϴ�.');
define('_US_INVALIDNICKNAME','ERROR: �ùٸ��� ���� ���̵�(ȸ����)�Դϴ�.');
define('_US_NICKNAMETOOLONG','���̵� �ʹ� ��׿�! %s ���� �̳��� ���ּ���!');
define('_US_NICKNAMETOOSHORT','���̵� �ʹ� ª�׿�! %s ���� �̻����� ���ּ���!');
define('_US_NAMERESERVED','ERROR: �� ���̵�� ����ϽǼ� �����ϴ�.(����� ���̵���)');
define('_US_NICKNAMENOSPACES','���̵� ������ ����Ͻ� �� �����ϴ�.');
define('_US_NICKNAMETAKEN','ERROR: �� ���̵�� �̹� ������Դϴ�.');
define('_US_EMAILTAKEN','ERROR: �� �����ּҴ� �̹� ������Դϴ�.');
define('_US_ENTERPWD','ERROR: �н����带 �Է��� �ּ���!');
define('_US_SORRYNOTFOUND','�˼��մϴٸ� ȸ�������� �������� �ʽ��ϴ�.');




// %s is your site name
define('_US_NEWPWDREQ','%s �� �ű� �н����� �߱޿�û�� �־����ϴ�.');
define('_US_YOURACCOUNT','%s ������ ȸ�����̵�');

define('_US_MAILPWDNG','mail_password: ȸ������ ���ſ� �����Ͽ����ϴ�. ����Ʈ �����ڿ��� ������ �ֽñ� �ٶ��ϴ�.');

// %s is a username
define('_US_PWDMAILED','%s �Կ��� �н����带 �߼��Ͽ����ϴ�.');
define('_US_CONFMAIL','�н����� ������� ���� ��ũ�� ����� ������ %s�Կ��� �߼��Ͽ����ϴ�.');
define('_US_ACTVMAILNG','%s�Կ��� ������ �߼��ϴµ� �����Ͽ����ϴ�.');
define('_US_ACTVMAILOK','%s�Կ��� ���������� ������ �߼��Ͽ����ϴ�.');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','ȸ���� ���õ��� �ʾҽ��ϴ�.');
define('_US_PM','PM����');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','�ּ�');
define('_US_OCCUPATION','����');
define('_US_INTEREST','���');
define('_US_SIGNATURE','����');
define('_US_EXTRAINFO','�׿�');
define('_US_EDITPROFILE','������ ����');
define('_US_LOGOUT','�α׾ƿ�');
define('_US_INBOX','������');
define('_US_MEMBERSINCE','�����');
define('_US_RANK','���');
define('_US_POSTS','���� ��');
define('_US_LASTLOGIN','���� �α��� �Ͻ�');
define('_US_ALLABOUT','%s���� �⺻����');
define('_US_STATISTICS','��� ����');
define('_US_MYINFO','���� ����');
define('_US_BASICINFO','�⺻����');
define('_US_MOREABOUT','���� ������');
define('_US_SHOWALL','��� ǥ��');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','������');
define('_US_REALNAME','�̸�');
define('_US_SHOWSIG','����� ������ �ݵ�� ÷����');
define('_US_CDISPLAYMODE','�ڸ�Ʈ ǥ�� ���');
define('_US_CSORTORDER','�ڸ�Ʈ ǥ�� ����');
define('_US_PASSWORD','�н�����');
define('_US_TYPEPASSTWICE','(�н����带 �����Ͻ� ��츸 �Է��� �ּ���!)');
define('_US_SAVECHANGES','��������');
define('_US_NOEDITRIGHT',"�� ȸ���� ������ ������ ������ ������ ���� �ʽ��ϴ�.");
define('_US_PASSNOTSAME','�н����尡 �ùٸ��� �ʽ��ϴ�. Ȯ���� ���� ������ �н����带 �ι� �Է��ϼž߸� �մϴ�.');
define('_US_PWDTOOSHORT','�н������ �ּ� <strong>%s</strong>���� �̻��̾�� �մϴ�.');
define('_US_PROFUPDATED','�������� �����Ͽ����ϴ�.');
define('_US_USECOOKIE','ȸ�� ���̵� 1�Ⱓ ��Ű�� ������');
define('_US_NO','No');
define('_US_DELACCOUNT','������ ����');
define('_US_MYAVATAR','�ƹ�Ÿ');
define('_US_UPLOADMYAVATAR','�ƹ�Ÿ�� ���ε�');
define('_US_MAXPIXEL','�ִ� �ȼ�(Pixel)��');
define('_US_MAXIMGSZ','�ִ� ���ϻ�����(Bytes)');
define('_US_SELFILE','���ϼ���');
define('_US_OLDDELETED','���� �ƹ�Ÿ �׸������� ����� ó���˴ϴ�.');
define('_US_CHOOSEAVT','�ƹ�Ÿ�� ����Ʈ���� ������ �ֽñ� �ٶ��ϴ�.');

define('_US_PRESSLOGIN','�Ʒ��� ��ư�� Ŭ���� �α����� �ֽñ�ٶ��ϴ�.');

define('_US_ADMINNO','�����ڱ׷쿡 ���� ȸ���� ������ �����ϽǼ� �����ϴ�.');
define('_US_GROUPS','�Ҽӱ׷�');

define('_US_REMEMBERME','�ڵ��α���');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','ȯ���մϴ�!!(%s)');

?>