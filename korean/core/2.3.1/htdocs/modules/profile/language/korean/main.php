<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//               XOOPS Korean - PHP Content Management System                        //
//                        (translated by wanikoo[ wani@wanisys.net ])                     //
//                                   <http://www.wanisys.net/>                                        //
//  ------------------------------------------------------------------------ //

define('_PROFILE_MA_REGISTER_NOTGROUP','New user is not registered to corresponding groups.');
define('_PROFILE_MA_FINISH_LOGIN','���� ������ ���������� �ۼ��Ǿ������ϴ�. Ŭ���ϼż� �α����غ��ñ� �ٶ��ϴ�.');
define("_PROFILE_MA_REGISTER_FINISH","����� �ּż� �����մϴ�.");
define("_PROFILE_MA_REGISTER_STEPS","�������:");

define("_PROFILE_MA_DEFAULT","�⺻����");

define("_PROFILE_MA_ERRORDURINGSAVE","������ ���� �߻�");
/*
define('_PROFILE_MA_USERREG','ȸ�����');
define('_PROFILE_MA_NICKNAME','���̵�');
define('_PROFILE_MA_REALNAME','�̸�');
define('_PROFILE_MA_EMAIL','����');
define('_PROFILE_MA_ALLOWVIEWEMAIL','�����ּ� ����');
define('_PROFILE_MA_TIMEZONE','�ð���');
define('_PROFILE_MA_AVATAR','�ƹ�Ÿ');
define('_PROFILE_MA_VERIFYPASS','�н�����Ȯ��');
define('_PROFILE_MA_SUBMIT','������');
define('_PROFILE_MA_USERNAME','ȸ����');
define('_PROFILE_MA_FINISH','������');
define('_PROFILE_MA_REGISTERNG','��Ͽ� �����Ͽ����ϴ�.');
define('_PROFILE_MA_MAILOK','�� ����Ʈ�κ����� ���������� ���������');
define('_PROFILE_MA_DISCLAIMER','�̿���');
define('_PROFILE_MA_IAGREE','���� ���뿡 �����մϴ�');
define('_PROFILE_MA_UNEEDAGREE','�˼��մϴٸ� ����Ͻ÷��� ���� �̿����� �����ϼž߸� �մϴ�.');
define('_PROFILE_MA_NOREGISTER','�˼��մϴٸ� ���� �űԵ���� �ް� ���� �ʽ��ϴ�.');

// %s is username. This is a subject for email
//define('_PROFILE_MA_PROFILE_MAERKEYFOR','%s���� ����Ű(Ȱ��ȭŰ)�Դϴ�.');
define('_PROFILE_MA_USERKEYFOR','%s���� ����Ű(Ȱ��ȭŰ)�Դϴ�.');
define('_PROFILE_MA_ACTLOGIN','���� ������ Ȱ��ȭó���Ǿ����ϴ�. ����Ͻ� �н������ �α����Ͻø� �˴ϴ�.');
define('_PROFILE_MA_ACTKEYNOT','����Ű(Ȱ��ȭŰ)�� �ùٸ��� �ʽ��ϴ�.');
define('_PROFILE_MA_ACONTACT','�����Ͻ� ������ �̹� Ȱ��ȭó���� �����Դϴ�.');

define('_PROFILE_MA_YOURREGISTERED','����� �Ϸ�Ǿ����ϴ�. ���� �����ּҷ� ����Ű(Ȱ��ȭŰ)�� �߼��Ͽ����� ������ ���ÿ� ���� ������ �Ϸ�(����Ȱ��ȭ)�Ͻñ� �ٶ��ϴ�.');
define('_PROFILE_MA_YOURREGMAILNG','����� �Ϸ�Ǿ����ϴ�. ������ ������ ���ο����� ����Ű(Ȱ��ȭŰ)�� ���� ������ �߼��ϴµ� �����Ͽ����ϴ�. ������ �˼��մϴٸ� ����Ʈ �����ڿ��� ������ �ֽñ� �ٶ��ϴ�.');
define('_PROFILE_MA_YOURREGISTERED2','����� �Ϸ�Ǿ����ϴ�. ����Ʈ �����ڰ� ���� ������ ����(Ȱ��ȭ)�ϸ� �������� ���ó���˴ϴ�. ����(Ȱ��ȭ)�Ϸ�ÿ� ���Ϸ� �뺸�� �帳�ϴ�.');

// %s is your site name
define('_PROFILE_MA_NEWUSERREGAT','%s �� �ű�ȸ������� �־����ϴ�');
// %s is a username
define('_PROFILE_MA_HASJUSTREG','%s���� �ű� ����ϼ̽��ϴ�');

define('_PROFILE_MA_INVALIDMAIL','ERROR: �ùٸ��� ���� �����ּ��Դϴ�.');
define('_PROFILE_MA_EMAILNOSPACES','ERROR: �����ּҿ� ������ ����Ͻ� �� �����ϴ�.');
define('_PROFILE_MA_INVALIDNICKNAME','ERROR: �ùٸ��� ���� ���̵�(ȸ����)�Դϴ�.');
define("_PROFILE_MA_INVALIDDISPLAYNAME","ERROR: �ùٸ��� ���� ǥ�ø�(����)�Դϴ�.");
define('_PROFILE_MA_NICKNAMETOOLONG','���̵� �ʹ� ��׿�! %s ���� �̳��� ���ּ���!');
define('_PROFILE_MA_DISPLAYNAMETOOLONG','ǥ�ø�(����)�� �ʹ� ��׿�! %s ���� �̳��� ���ּ���!');
define('_PROFILE_MA_NICKNAMETOOSHORT','���̵� �ʹ� ª�׿�! %s ���� �̻����� ���ּ���!');
define('_PROFILE_MA_DISPLAYNAMETOOSHORT','ǥ�ø�(����)�� �ʹ� ª�׿�! %s ���� �̻����� ���ּ���!');
define('_PROFILE_MA_NAMERESERVED','ERROR: �� ���̵�� ����ϽǼ� �����ϴ�.(����� ���̵���)');
define('_PROFILE_MA_DISPLAYNAMERESERVED','ERROR: �� ǥ�ø�(����)�� ����ϽǼ� �����ϴ�.(����� ǥ�ø���)');
define('_PROFILE_MA_NICKNAMENOSPACES','���̵� ������ ����Ͻ� �� �����ϴ�.');
define('_PROFILE_MA_DISPLAYNAMENOSPACES','ǥ�ø�(����)�� ������ ����Ͻ� �� �����ϴ�.');
define('_PROFILE_MA_NICKNAMETAKEN','ERROR: �� ���̵�� �̹� ������Դϴ�.');
define('_PROFILE_MA_DISPLAYNAMETAKEN','ERROR: �� ǥ�ø�(����)�� �̹� ������Դϴ�.');
define('_PROFILE_MA_EMAILTAKEN','ERROR: �� �����ּҴ� �̹� ������Դϴ�.');
define('_PROFILE_MA_ENTERPWD','ERROR: �н����带 �Է��� �ּ���!');
define('_PROFILE_MA_SORRYNOTFOUND','�˼��մϴٸ� ȸ�������� �������� �ʽ��ϴ�.');
define("_PROFILE_MA_WRONGPASSWORD","ERROR: �߸��� �н������Դϴ�.");
define("_PROFILE_MA_USERALREADYACTIVE","�ش� �����ּ�( %s )�� ���� ȸ���� �̹� Ȱ��ȭ�Ǿ� �ִ� �����Դϴ�.");

// %s is your site name
define('_PROFILE_MA_YOURACCOUNT','%s ������ ȸ�����̵�');

// %s is a username
define('_PROFILE_MA_ACTVMAILNG','%s�Կ��� ������ �߼��ϴµ� �����Ͽ����ϴ�.');
define('_PROFILE_MA_ACTVMAILOK','%s�Կ��� ���������� ������ �߼��Ͽ����ϴ�.');

define("_PROFILE_MA_DEFAULT","����Ʈ ����");

//%%%%%%		File Name userinfo.php 		%%%%%
define('_PROFILE_MA_SELECTNG','ȸ���� ���õ��� �ʾҽ��ϴ�.');
define('_PROFILE_MA_PM','PM����');
define('_PROFILE_MA_ICQ','ICQ');
define('_PROFILE_MA_AIM','AIM');
define('_PROFILE_MA_YIM','YIM');
define('_PROFILE_MA_MSNM','MSNM');
define('_PROFILE_MA_LOCATION','�ּ�');
define('_PROFILE_MA_OCCUPATION','����');
define('_PROFILE_MA_INTEREST','���');
define('_PROFILE_MA_SIGNATURE','����');
define('_PROFILE_MA_EXTRAINFO','�׿�');
define('_PROFILE_MA_EDITPROFILE','������ ����');
define('_PROFILE_MA_LOGOUT','�α׾ƿ�');
define('_PROFILE_MA_INBOX','������');
define('_PROFILE_MA_MEMBERSINCE','�����');
define('_PROFILE_MA_RANK','���');
define('_PROFILE_MA_POSTS','���� ��');
define('_PROFILE_MA_LASTLOGIN','���� �α��� �Ͻ�');
define('_PROFILE_MA_ALLABOUT','%s���� �⺻����');
define('_PROFILE_MA_STATISTICS','��� ����');
define('_PROFILE_MA_MYINFO','���� ����');
define('_PROFILE_MA_BASICINFO','�⺻����');
define('_PROFILE_MA_MOREABOUT','���� ������');
define('_PROFILE_MA_SHOWALL','��� ǥ��');

//%%%%%%		File Name edituser.php 		%%%%%
define('_PROFILE_MA_PROFILE','������');
define('_PROFILE_MA_DISPLAYNAME','ǥ�ø�(����)');
define('_PROFILE_MA_SHOWSIG','����� ������ �ݵ�� ÷����');
define('_PROFILE_MA_CDISPLAYMODE','�ڸ�Ʈ ǥ�� ���');
define('_PROFILE_MA_CSORTORDER','�ڸ�Ʈ ǥ�� ����');
define('_PROFILE_MA_PASSWORD','�н�����');
define('_PROFILE_MA_TYPEPASSTWICE','(�н����带 �����Ͻ� ��츸 �Է��� �ּ���!)');
define('_PROFILE_MA_SAVECHANGES','��������');
define('_PROFILE_MA_NOEDITRIGHT',"�� ȸ���� ������ ������ ������ ������ ���� �ʽ��ϴ�.");
define('_PROFILE_MA_PASSNOTSAME','�н����尡 �ùٸ��� �ʽ��ϴ�. Ȯ���� ���� ������ �н����带 �ι� �Է��ϼž߸� �մϴ�.');
define('_PROFILE_MA_PWDTOOSHORT','�н������ �ּ� <b>%s</b>���� �̻��̾�� �մϴ�.');
define('_PROFILE_MA_PROFUPDATED','�������� �����Ͽ����ϴ�.');
define('_PROFILE_MA_PROFILE_MAECOOKIE','ȸ�� ���̵� 1�Ⱓ ��Ű�� ������');
define('_PROFILE_MA_NO','No');
define('_PROFILE_MA_DELACCOUNT','������ ����');
define('_PROFILE_MA_MYAVATAR','�ƹ�Ÿ');
define('_PROFILE_MA_UPLOADMYAVATAR','�ƹ�Ÿ�� ���ε�');
define('_PROFILE_MA_MAXPIXEL','�ִ� �ȼ�(Pixel)��');
define('_PROFILE_MA_MAXIMGSZ','�ִ� ���ϻ�����(Bytes)');
define('_PROFILE_MA_SELFILE','���ϼ���');
define('_PROFILE_MA_OLDDELETED','���� �ƹ�Ÿ �׸������� ����� ó���˴ϴ�.');
define('_PROFILE_MA_CHOOSEAVT','�ƹ�Ÿ�� ����Ʈ���� ������ �ֽñ� �ٶ��ϴ�.');

define('_PROFILE_MA_PRESSLOGIN','�Ʒ��� ��ư�� Ŭ���� �α����� �ֽñ�ٶ��ϴ�.');

define('_PROFILE_MA_ADMINNO','�����ڱ׷쿡 ���� ȸ���� ������ �����ϽǼ� �����ϴ�.');
define('_PROFILE_MA_GROUPS','�Ҽӱ׷�');

define('_PROFILE_MA_NOPERMISS','�˼��մϴ�. ���� �� �۾��� ���� ������ ������ ���� �ʽ��ϴ�.');
define('_PROFILE_MA_SURETODEL','������ �ڽ��� ������ �����ϱ� ���Ͻʴϱ�?');
define('_PROFILE_MA_REMOVEINFO','���� ����Ÿ���̽����� �Կ� ���� ��� �������� ������ ���Դϴ�.');
define('_PROFILE_MA_BEENDELED','���� ������ ����ó���Ǿ����ϴ�.');
*/
define("_PROFILE_MA_NOSTEPSAVAILABLE","���� �űԵ���� �ް� ���� �ʽ��ϴ�. ���� ��ȸ�� �̿��� �ֽñ� �ٶ��ϴ�.");
define("_PROFILE_MA_EXPIRED","�Ⱓ����Ǿ����ϴ�. �ٽ� �õ��� �ֽñ� �ٶ��ϴ�.");


define('_PROFILE_MA_RECENTACTIVITY','�ֱ� Ȱ��');
define('_PROFILE_MA_THEME','�׸�');
define('_PROFILE_MA_ACTIVATE','Ȱ��ȭ');
define('_PROFILE_MA_DEACTIVATE','��Ȱ��ȭ');
define('_PROFILE_MA_SENDPM','�޼��� ������');


//changepass.php
define("_PROFILE_MA_CHANGEPASSWORD","�н����� ����");
define("_PROFILE_MA_PASSWORDCHANGED","�н����尡 ���������� ����Ǿ������ϴ�.");
define("_PROFILE_MA_OLDPASSWORD","�� �н�����");
define("_PROFILE_MA_NEWPASSWORD","�� �н�����");
define("_PROFILE_MA_WRONGPASSWORD","�� �н����尡 �ùٸ��� �ʽ��ϴ�.");

//search.php
define("_PROFILE_MA_SORTBY","����");
define("_PROFILE_MA_ORDER","���ļ�");
define("_PROFILE_MA_PERPAGE","�������� ȸ����");
define("_PROFILE_MA_LATERTHAN","%s ���� ������");
define("_PROFILE_MA_EARLIERTHAN","%s ���� ������");
define("_PROFILE_MA_LARGERTHAN","%s ���� ū");
define("_PROFILE_MA_SMALLERTHAN","%s ���� ����");

define("_PROFILE_MA_NOUSERSFOUND","�ش� ȸ���� �������� �ʽ��ϴ�.");
define("_PROFILE_MA_RESULTS","�˻� ���");
define("_PROFILE_MA_SEARCH","����� �˻�");

//changemail.php
define("_PROFILE_MA_CHANGEMAIL","�����ּ� ����");
define("_PROFILE_MA_NEWMAIL","�� �����ּ�");

//define("_PROFILE_MA_NEWEMAILREQ","�� �����ּ� ��û");
define("_PROFILE_MA_NEWEMAIL","�� �����ּ�(%s)");
define("_PROFILE_MA_EMAILCHANGED","���� �����ּҰ� ���������� ����Ǿ������ϴ�.");
define("_PROFILE_MA_SITEDEFAULT","Site default");

//define("_PROFILE_MA_CONFCODEMISSING","Ȯ�ο� �ڵ尡 �������� �ʽ��ϴ�.");
define("_PROFILE_MA_USERINFO","�����������");
define("_PROFILE_MA_REGISTER","��Ͼ��");

?>