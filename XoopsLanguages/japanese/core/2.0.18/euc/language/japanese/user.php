<?php
// $Id: user.php 2008-07-23T15:51+09:00 2 8 6 $
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','������<a href=register.php>��Ͽ</a>���ޤ��󤫡�');
define('_US_LOSTPASSWORD','�ѥ���ɤ�ʶ������ޤ�������');
define('_US_NOPROBLEM','�����ۤʤ����ޤ��Ϥ��ʤ�����Ͽ�˻��Ѥ����᡼�륢�ɥ쥹�����Ϥ����ܥ���򥯥�å����Ƥ��������� �ѥ���ɼ����ѤΥ�󥯤����ܤ��줿�᡼�뤬���ʤ�����Ͽ�᡼�륢�ɥ쥹���������ޤ���');
define('_US_YOUREMAIL','��Ͽ�᡼�륢�ɥ쥹��');
define('_US_SENDPASSWORD','����');
define('_US_LOGGEDOUT','��������Ȥ��ޤ�����');
define('_US_THANKYOUFORVISIT','�������Ȥ����Ѥ����������꤬�Ȥ��������ޤ�����');
define('_US_INCORRECTLOGIN','���������󤬴ְ�äƤ��ޤ���');
define('_US_LOGGINGU','%s���󡢤褦������������������Ǥ���');

// 2001-11-17 ADD
define('_US_NOACTTPADM','���򤵤줿�桼���Ϥޤ�¸�ߤ��ʤ�������ǧ����λ���Ƥ��ޤ���<br />�ܺ٤ˤĤ��Ƥϥ����ȴ����Ԥˤ���礻����������');
define('_US_ACTKEYNOT','��ǧ�������ְ�äƤ��ޤ���');
define('_US_ACONTACT','���򤵤줿��������Ȥϴ��˾�ǧ����λ���Ƥ��ޤ���');
define('_US_ACTLOGIN','��������Ȥ�ǧ���ޤ�������Ͽ�κݤ˵��������ѥ���ɤ���Ѥ��ƥ�����󤷤Ƥ���������');
define('_US_NOPERMISS','���Υ桼��������ѹ����뤳�ȤϤǤ��ޤ���');
define('_US_SURETODEL','�桼����������Ȥ������˺�����Ƥ��ɤ��Ǥ�����');
define('_US_REMOVEINFO','��������Ȥ���������硢���ƤΥ桼�����󤬼����ޤ���');
define('_US_BEENDELED','��������Ȥ������ޤ�����');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','�桼����Ͽ');
define('_US_NICKNAME','�桼��̾');
define('_US_EMAIL','�᡼�륢�ɥ쥹');
define('_US_ALLOWVIEWEMAIL','���Υ᡼�륢�ɥ쥹���������');
define('_US_WEBSITE','�ۡ���ڡ���');
define('_US_TIMEZONE','�����ॾ����');
define('_US_AVATAR','���Х���');
define('_US_VERIFYPASS','�ѥ���ɳ�ǧ');
define('_US_SUBMIT','����');
define('_US_USERNAME','�桼��̾');
define('_US_FINISH','����');
define('_US_REGISTERNG','��Ͽ�Ǥ��ޤ���Ǥ���');
define('_US_MAILOK','�������Ȥο������ʤɤ�<br />�᡼��Ǽ������');
define('_US_DISCLAIMER','����');
define('_US_IAGREE','��Ͼ嵭�����Ʊ�դ��ޤ���');
define('_US_UNEEDAGREE','�������������ޤ�����Ͽ���뤿��ˤ����ջ���ˤ�Ʊ�դ�������ɬ�פ�����ޤ���');
define('_US_NOREGISTER','�������������ޤ��󡣸��ߤ��Υ����ȤǤϿ����桼������Ͽ���դ�ԤäƤ���ޤ���');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','%s����ξ�ǧ�����Ǥ�');

define('_US_YOURREGISTERED','��Ͽ����λ���ޤ��������ܤ��줿�᡼�����Ͽ�᡼�륢�ɥ쥹���˾�ǧ�������������ޤ������᡼��λؼ��˽�������ǧ��λ���Ƥ���������');
define('_US_YOURREGMAILNG','��Ͽ����λ���ޤ�������������������������顼�ˤ�꾵ǧ���������ܤ��줿�᡼����������뤳�Ȥ��Ǥ��ޤ���Ǥ��������ѿ���������ޤ��󤬡������ȴ����ԤޤǤ��䤤��碌����������');
define('_US_YOURREGISTERED2','��Ͽ����λ���ޤ����������ȴ����Ԥ���������Ȥ�ǧ����ޤǤ��Ԥ�������������ǧ��λ���ˤϥ᡼��ˤƤ��Τ餻���ޤ���');

// %s is your site name
define('_US_NEWUSERREGAT','������Ͽ�桼����%s');
// %s is a username
define('_US_HASJUSTREG','������Ͽ�桼��������ޤ��������桼��̾��%s');

define('_US_INVALIDMAIL','�����ʥ᡼�륢�ɥ쥹�Ǥ���');
define('_US_EMAILNOSPACES','�᡼�륢�ɥ쥹�˶����ޤ�ʤ��Ǥ���������');
define('_US_INVALIDNICKNAME','�����ʥ桼��̾�Ǥ���');
define('_US_NICKNAMETOOLONG','�桼��̾��Ĺ�����ޤ���Ⱦ�� %s ʸ������˼���Ƥ���������');
define('_US_NICKNAMETOOSHORT','�桼��̾��û�����ޤ���Ⱦ�� %s ʸ���ʾ�ˤ��Ƥ���������');
define('_US_NAMERESERVED','���Υ桼��̾�ϻ��ѤǤ��ޤ���');
define('_US_NICKNAMENOSPACES','�桼��̾�˶����ޤ�ʤ��Ǥ���������');
define('_US_NICKNAMETAKEN','���Υ桼��̾�ϴ��˻��Ѥ���Ƥ��ޤ���');
define('_US_EMAILTAKEN','���Υ᡼�륢�ɥ쥹�ϴ��˻��Ѥ���Ƥ��ޤ���');
define('_US_ENTERPWD','�ѥ���ɤ������Ƥ���������');
define('_US_SORRYNOTFOUND','�桼�����󤬸��Ĥ���ޤ���Ǥ�����');




// %s is your site name
define('_US_NEWPWDREQ','�����ѥ���ɤΥꥯ�����ȡ�%s');
define('_US_YOURACCOUNT','%s�ǤΥ桼�����������');

define('_US_MAILPWDNG','mail_password: �桼������ι����˼��Ԥ��ޤ����������Ǥ����������ȴ����ԤޤǤ���礻����������');

// %s is a username
define('_US_PWDMAILED','%s���󰸤˥ѥ���ɤ��������ޤ�����');
define('_US_CONFMAIL','�ѥ���ɼ����ѥ�󥯤����ܤ��줿�᡼���%s���󰸤��������ޤ�����');
define('_US_ACTVMAILNG','%s����ؤΥ᡼�������˼��Ԥ��ޤ�����');
define('_US_ACTVMAILOK','%s����إ᡼����������ޤ�����');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','�桼�������򤵤�Ƥ��ޤ���');
define('_US_PM','PM');
define('_US_ICQ','ICQ');
define('_US_AIM','AIM');
define('_US_YIM','YIM');
define('_US_MSNM','MSNM');
define('_US_LOCATION','�ｻ��');
define('_US_OCCUPATION','����');
define('_US_INTEREST','��̣');
define('_US_SIGNATURE','��̾');
define('_US_EXTRAINFO','����¾');
define('_US_EDITPROFILE','�ץ�ե�������Խ�');
define('_US_LOGOUT','���������');
define('_US_INBOX','����Ȣ');
define('_US_MEMBERSINCE','��Ͽ��');
define('_US_RANK','���');
define('_US_POSTS','��ƿ�');
define('_US_LASTLOGIN','�ǽ������������');
define('_US_ALLABOUT','%s����δ��ܾ���');
define('_US_STATISTICS','���׾���');
define('_US_MYINFO','�Ŀ;���');
define('_US_BASICINFO','���ܾ���');
define('_US_MOREABOUT','�Ŀ;���ܺ�');
define('_US_SHOWALL','���٤�ɽ��');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','�ץ�ե�����');
define('_US_REALNAME','̾��');
define('_US_SHOWSIG','��Ƥ˽�̾��ɬ���ɲä���');
define('_US_CDISPLAYMODE','������ɽ���⡼��');
define('_US_CSORTORDER','�����Ȥ��¤ӽ�');
define('_US_PASSWORD','�ѥ����');
define('_US_TYPEPASSTWICE','�ʥѥ���ɤ��ѹ�������Τߵ������Ƥ���������');
define('_US_SAVECHANGES','�ѹ�����¸');
define('_US_NOEDITRIGHT','���Υ桼��������ѹ����븢�¤�����ޤ���');
define('_US_PASSNOTSAME','�ѥ���ɤ�����������ޤ���Ʊ���ѥ���ɤ��������Ϥ��Ƥ���������');
define('_US_PWDTOOSHORT','�ѥ���ɤ�Ⱦ��<b>%s</b>ʸ���ʾ�ˤ��Ƥ���������');
define('_US_PROFUPDATED','�ץ�ե�����򹹿����ޤ�����');
define('_US_USECOOKIE','�桼��̾��ǯ�֥��å�������¸����');
define('_US_NO','������');
define('_US_DELACCOUNT','��������Ȥ�������');
define('_US_MYAVATAR','���åץ���ɺѤߥ��Х���');
define('_US_UPLOADMYAVATAR','���Х����򥢥åץ���ɤ���');
define('_US_MAXPIXEL','����ԥ������');
define('_US_MAXIMGSZ','����ե����륵����');
define('_US_SELFILE','�ե���������');
define('_US_OLDDELETED','�Ť����Х��������Ͼ�񤭤���ޤ���');
define('_US_CHOOSEAVT','���Х���������������򤷤Ƥ���������');

define('_US_PRESSLOGIN','�����ܥ���򥯥�å����ƥ�����󤷤Ƥ���������');

define('_US_ADMINNO','�����ԥ��롼�פ�°����桼���Ϻ���Ǥ��ޤ���');
define('_US_GROUPS','��°���롼��');
?>