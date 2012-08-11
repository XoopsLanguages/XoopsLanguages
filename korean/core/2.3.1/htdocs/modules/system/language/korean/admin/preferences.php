<?php
// $Id: preferences.php,v 1.16 2003/03/29 15:49:35 w4z004 Exp $
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

//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","����Ʈ �Ϲݼ���");
define("_MD_AM_SITENAME","����Ʈ��");
define("_MD_AM_SLOGAN","����Ʈ ���ΰ�");
define("_MD_AM_ADMINML","������ �����ּ�");
define("_MD_AM_LANGUAGE","�⺻�����");
define("_MD_AM_STARTPAGE","���� ���");
define("_MD_AM_NONE","����");
define("_MD_AM_SERVERTZ","���� �ð���");
define("_MD_AM_DEFAULTTZ","�⺻ �ð���");
define("_MD_AM_DTHEME","�⺻ ����Ʈ �׸�");
define("_MD_AM_THEMESET","�׸� ��Ʈ");
define("_MD_AM_ANONNAME","�̵�Ϲ湮��(�մ�)�� ǥ�ø�");
define("_MD_AM_MINPASS","�н������� ���� ���ڼ�");
define("_MD_AM_NEWUNOTIFY","�ű� ȸ���� ����� �ִ� ��� ���Ϸ� ����/�뺸 ����");
define("_MD_AM_SELFDELETE","���ȸ���� �ڱ� ���������� ���(Ż�����)");
define("_MD_AM_LOADINGIMG","��ø� ��ٷ��ּ���...ȭ��(�׸�����)�� ǥ��");
define("_MD_AM_USEGZIP","gzip ������ ���");
define("_MD_AM_UNAMELVL","���̵�� ��밡���� ���ڵ��� ����! ���� ������ ������ �������ּ���!");
define("_MD_AM_STRICT","���� (���ĺ��� ���ڸ�)");
define("_MD_AM_MEDIUM","�߰�");
define("_MD_AM_LIGHT","���� (�ѱ�,���ڵ� ����㰡)");
define("_MD_AM_USERCOOKIE","���ȸ������ �Ҵ��� ��Ű�� �̸�");
define("_MD_AM_USERCOOKIEDSC","��Ű �̸��� ������ ��� �ڵ��α��α���� ����Ͻ� �� �ֽ��ϴ�. ����ڰ� �ڵ��α��α���� ������ ��� �α��λ��°� �ڵ������� �����˴ϴ�. ��Ű�� ��ȿ�Ⱓ�� 1���Դϴ�.");
//define("_MD_AM_USERCOOKIEDSC","�� ��Ű�� ���ȸ���� ���̵� ����Ǿ� 1�Ⱓ ȸ���� ��ǻ�Ϳ� �����ϰԵ˴ϴ�.(ȸ���� ����� ���) ");
define("_MD_AM_USEMYSESS","������ ������ ī��Ʈ��������(��ü������)");
define("_MD_AM_USEMYSESSDSC","������ ī��Ʈ������(��ü����)");
define("_MD_AM_SESSNAME","����ID�� ���忡 ����� ��Ű�� �̸�");
define("_MD_AM_SESSNAMEDSC","�� ��Ű�� ����� ����ID�� ������ Ÿ�Ӿƿ�ǰų� ȸ���� �α׾ƿ��� ������ ��ȿ�ϰԵ˴ϴ�.(���� ī��Ʈ������(��ü����)�� ������ ��츸)");
define("_MD_AM_SESSEXPIRE","������ Ÿ�Ӿƿ�� �������� �ð�(����:��)");
define("_MD_AM_SESSEXPIREDSC","������ Ÿ�Ӿƿ�� �������� �ð��� �д����� ������ �ּ���! ( ���� ī��Ʈ������(��ü����)�� ������ ��츸)");
define("_MD_AM_BANNERS","��ʱ���� Ȱ��ȭ");
define("_MD_AM_MYIP","���� IP �ּҸ� �Է����ּ���!");
define("_MD_AM_MYIPDSC","�� IP �ּҴ� ��� �������� ��,�׿� ��Ÿ ����Ʈ ���� ���ܵ˴ϴ�.");
define("_MD_AM_ALWDHTML","������������� ����� ����� HTML�±�");
define("_MD_AM_INVLDMINPASS","�н������� �������ڼ��� �ùٸ��� �ʽ��ϴ�.");
define("_MD_AM_INVLDUCOOK","ȸ�� ��Ű�� �̸��� �ùٸ��� �ʽ��ϴ�.");
define("_MD_AM_INVLDSCOOK","����ID�� ��Ű�� �̸��� �ùٸ��� �ʽ��ϴ�.");
define("_MD_AM_INVLDSEXP","������ Ÿ�Ӿƿ�� �������� �ð��� �ùٸ��� �Էµ��� �ʾҽ��ϴ�.");
define("_MD_AM_ADMNOTSET","������ ������ �������� �ʾҽ��ϴ�.");
define("_MD_AM_YES","��");
define("_MD_AM_NO","�ƴϿ�");
define("_MD_AM_DONTCHNG","���ϴ� ���� �������� ���ñ� �ٶ��ϴ�.");
define("_MD_AM_REMEMBER","�� ������ ������ �����ڸ޴����� ���������ϰ� �Ϸ��� �ݵ�� �׼��������� 666(chmod 666)���� �����ϼž� �մϴ�.");
define("_MD_AM_IFUCANT","���� �� ������ �׼��������� �����Ͻ� �� ���� ��쿣 ���� ������ ����/�����ϼž߸� �մϴ�.");


define("_MD_AM_COMMODE","�⺻ �ڸ�Ʈ ǥ�ù��");
define("_MD_AM_COMORDER","�⺻ �ڸ�Ʈ ǥ�ü�");
define("_MD_AM_ALLOWHTML","�ڸ�Ʈ ������ ���� ÷���� ����� ");
define("_MD_AM_DEBUGMODE","����� ���");
define("_MD_AM_DEBUGMODEDSC","���� �׽�Ʈ/����� �ÿ� ����Ͻñ� �ٶ��ϴ�. �������������� ����� ��带 ����(��)�� �����Ͻñ� �ٶ��ϴ�.");
define("_MD_AM_AVATARALLOW","�ƹ�Ÿ �׸������� ���ε带 �����");
define('_MD_AM_AVATARMP','�ƹ�Ÿ ���ε������ ���� ���� �䱸 ���� ��');
define('_MD_AM_AVATARMPDSC','���ȸ���� �ڱ��� �ƹ�Ÿ�� ���ε��� ������ ������� �ʿ��� ���� ���� ���� �Է��� �ּ���');
define("_MD_AM_AVATARW","�ƹ�Ÿ �׸������� �ִ���� �� (pixel)");
define("_MD_AM_AVATARH","�ƹ�Ÿ �׸������� �ִ���� ���� (pixel)");
define("_MD_AM_AVATARMAX","�ƹ�Ÿ �׸������� �ִ���� ���ϻ����� (byte)");
define("_MD_AM_AVATARCONF","���ȸ�� ��ü �ƹ�Ÿ �׸����Ͽ� ���� ����");
define("_MD_AM_CHNGUTHEME","��� ���ȸ���� �׸��� ������");
define("_MD_AM_NOTIFYTO","�ű� ȸ�� ��� ����/�뺸 ������ ���� �׷��� ������ �ּ���!");
define("_MD_AM_ALLOWTHEME","����Ʈ �׸��� ������ �㰡��");
define("_MD_AM_ALLOWIMAGE","��������� �׸����� ǥ�ø� �㰡��");

define("_MD_AM_USERACTV","���� Ȱ��ȭ�� ���� ȸ�� �ڽ��� Ȯ���� �ʿ�(��õ)");
define("_MD_AM_AUTOACTV","�ڵ������� ������ Ȱ��ȭ��");
define("_MD_AM_ADMINACTV","�����ڰ� ���� Ȱ��ȭ ���θ� ����");
define("_MD_AM_ACTVTYPE","�ű� ȸ�� ������ Ȱ��ȭ ����� ������ �ּ���!");
define("_MD_AM_ACTVGROUP","���� Ȱ��ȭ Ȯ�� �Ƿ� ������ ���� �׷��� ������ �ּ���!");
define("_MD_AM_ACTVGROUPDSC","�����ڰ� ���� Ȱ��ȭ ���θ� ���� �� �����Ͻ� ��츸 ��ȿ��");
define('_MD_AM_USESSL','�α��ο� SSL�� ���');
define('_MD_AM_SSLPOST','SSL�α��νÿ� ����� POST������ �̸�');
define('_MD_AM_SSLPOSTDSC','The name of variable used to transfer session value via POST. If you are unsure, set any name that is hard to guess.');
define('_MD_AM_DEBUGMODE0','����(��)');
define('_MD_AM_DEBUGMODE1','����� ���(�ζ��� ���)');
define('_MD_AM_DEBUGMODE2','����� ���(�˾� ���)');
define('_MD_AM_DEBUGMODE3','Smarty ���÷� �����');
define('_MD_AM_MINUNAME','���̵��� ���� ���ڼ�(byte)');
define('_MD_AM_MAXUNAME','���̵��� �ִ� ���ڼ�(byte)');
define('_MD_AM_GENERAL','�Ϲݼ���');
define('_MD_AM_USERSETTINGS','���ȸ�� ��������');
define('_MD_AM_ALLWCHGMAIL','���ȸ���� �ڱ� �����ּ� ������ �����');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','IP ����(IP Banning)');
define('_MD_AM_BADEMAILS','ȸ���� �����ּҷμ� ����� �� ���� ���ڿ�');
define('_MD_AM_BADEMAILSDSC','������ ���ڿ��� <b>|</b> �� ����, ��ҹ��ڴ� �������� ����, ���Խ� ��밡��');
define('_MD_AM_BADUNAMES','���̵�� ����� �� ���� ���ڿ�');
define('_MD_AM_BADUNAMESDSC','������ ���ڿ��� <b>|</b> �� ����, ��ҹ��ڴ� �������� ����, ���Խ� ��밡��');
define('_MD_AM_DOBADIPS','IP ����(IP bans) ���');
define('_MD_AM_DOBADIPSDSC','�ش� IP �ּҷκ��� �� ����Ʈ���� ������ ���ܵ˴ϴ�.');
define('_MD_AM_BADIPS','���� ó���� IP �ּҸ� �Է��� �ּ���!<br />�� IP�ּҴ� <b>|</b> �� ����, ��ҹ��� �������� ����, ���Խ� ��밡��');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc �� aaa.bbb.ccc �� �����ϴ� IP�ּҸ� ����,<br />aaa.bbb.ccc$ �� aaa.bbb.ccc�� ������ IP�ּҸ� ����,<br />aaa.bbb.ccc �� aaa.bbb.ccc �� ������ IP�ּҸ� �����մϴ�.');
define('_MD_AM_PREFMAIN','�ý��� ���� ����');
define('_MD_AM_METAKEY','Meta�±�(Ű����[Keywords])');
define('_MD_AM_METAKEYDSC','Ű����[Keywords] Meta�±״� ����Ʈ�� ������ ǥ���մϴ�. �� Ű����� ��ǥ(�޸�)�� ������ �ּ���!(Ex. XOOPS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING','Meta�±�(���[Rating])');
define('_MD_AM_METARATINGDSC','����Ʈ ���� ��� �������� �����մϴ�.');
define('_MD_AM_METAOGEN','General');
define('_MD_AM_METAO14YRS','14 years');
define('_MD_AM_METAOREST','Restricted');
define('_MD_AM_METAOMAT','Mature');
define('_MD_AM_METAROBOTS','Meta�±�(�˻��κ�[Robots])');
define('_MD_AM_METAROBOTSDSC','�˻��κ����� ��������� �����մϴ�.');
define('_MD_AM_INDEXFOLLOW','Index, Follow');
define('_MD_AM_NOINDEXFOLLOW','No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW','Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW','No Index, No Follow');
define('_MD_AM_METAAUTHOR','Meta�±�(�ۼ���[Author])');
define('_MD_AM_METAAUTHORDSC','�ۼ��� Meta��ũ�� ����Ʈ ������ �ۼ��� ������ �����մϴ�. �̸�, �������� �����ּ�, ȸ���, URL���� �����Ͻ� �� �ֽ��ϴ�. ');
define('_MD_AM_METACOPYR','Meta�±�(���۱�[Copyright])');
define('_MD_AM_METACOPYRDSC','���۱� Meta�±״� ����Ʈ ���� ������ ���� ���۱������� �����մϴ�.');
define('_MD_AM_METADESC','Meta�±�(���뼳��[Description])');
define('_MD_AM_METADESCDSC','���뼳�� Meta�±״� ����Ʈ�� ������ �����ϱ����� �±��Դϴ�.');
define('_MD_AM_METAFOOTER','Meta�±�/Footer ����');
define('_MD_AM_FOOTER','Footer');
define('_MD_AM_FOOTERDSC','��ũ�� ����ϽǶ����� �ݵ�� ��ü �н�(http://~)�� �Է��Ͻñ� �ٶ��ϴ�. �׷��� ���� ������ ��⳻�� ���������� �ùٸ��� ǥ�õ��� ���� �� �ֽ��ϴ�.');
define('_MD_AM_CENSOR','������� ����');
define('_MD_AM_DOCENSOR','������� ������ �����');
define('_MD_AM_DOCENSORDSC','�� ����� ON(���)�� ��쿣 ������ üũ�ϰ� �˴ϴ�.(����Ʈ ó�����ǵ带 �߽��� ��쿣 OFF�� �����ϼ���.)');
define('_MD_AM_CENSORWRD','�������');
define('_MD_AM_CENSORWRDDSC','����ڰ� ����� ����� ������ ���ڿ��� �Է��� �ּ���!<br />�� ���ڿ��� <b>|</b>�� ����, ��ҹ��� �������� ����.');
define('_MD_AM_CENSORRPLC','������� ��� ǥ���� ���ڿ�:');
define('_MD_AM_CENSORRPLCDSC','������ ���� ��� �̰��� �����Ͻ� ���ڿ��� ��ġ�ǰ� �˴ϴ�.');

define('_MD_AM_SEARCH','�˻� �ɼ�');
define('_MD_AM_DOSEARCH','�۷ι� �˻������ �����');
define('_MD_AM_DOSEARCHDSC','����Ʈ���� �����/��� ���� ��ü�˻��� �ǽ��մϴ�.');
define('_MD_AM_MINSEARCH','Ű���� �������ڼ�');
define('_MD_AM_MINSEARCHDSC','�˻��� �� �� �ʿ��� Ű������ �������ڼ��� �����մϴ�.');
define('_MD_AM_MODCONFIG','��� ���� �ɼ�');
define('_MD_AM_DSPDSCLMR','�̿���(disclaimer)�� ǥ��');
define('_MD_AM_DSPDSCLMRDSC','�� �� �����Ͻø� �űԵ���������� �̿����� ǥ���մϴ�.');
define('_MD_AM_REGDSCLMR','�̿���(Registration disclaimer)');
define('_MD_AM_REGDSCLMRDSC','�űԵ�� �������� ǥ���� �̿����� �Է��� �ּ���!');
define('_MD_AM_ALLOWREG','�ű� ȸ���� ����� �����');
define('_MD_AM_ALLOWREGDSC','�� �� �����Ͻø� �ű� ȸ�� ����� ����ϰ� �˴ϴ�.');
define('_MD_AM_THEMEFILE','themes/ ���丮�κ����� �ڵ� ���׷��̵����� ���');
define('_MD_AM_THEMEFILEDSC','���� ������� �׸����� �������� �� �ֱ��� ������ themes/ ���丮���� ������ ��� �ڵ������� DB�� ������ �����ϰ� �˴ϴ�. ��������Ʈ������ OFF(��)�� ������ ���� ��õ�մϴ�.');
define('_MD_AM_CLOSESITE','����Ʈ ��������');
define('_MD_AM_CLOSESITEDSC','Ư�� �׷� �̿ܿ��� ����Ʈ�� �������� ���ϰ� �մϴ�.');
define('_MD_AM_CLOSESITEOK','����Ʈ ���������ÿ��� ������ ����� �׷�');
define('_MD_AM_CLOSESITEOKDSC','�⺻ �����ڱ׷��� �ڵ������� ������ ���˴ϴ�.');
define('_MD_AM_CLOSESITETXT','����Ʈ ���������� ����');
define('_MD_AM_CLOSESITETXTDSC','�Է��Ͻ� ���� ����Ʈ ���������ÿ� ǥ�õǰ� �˴ϴ�.');
define('_MD_AM_SITECACHE','����Ʈ ĳ��');
define('_MD_AM_SITECACHEDSC','����Ʈ���� �������� ��⺰�� ĳ���մϴ�. ����Ʈ ĳ������� ����� �������� ĳ�����(�ִ� ���)���� �켱�� �˴ϴ�.');
define('_MD_AM_MODCACHE','��� ĳ��');
define('_MD_AM_MODCACHEDSC','�� ����� �������� ĳ���� �� �ð��� ���̸� ������ �ּ���. ��⿡ ������ ĳ������� �ִ� ��쿡�� ĳ������ �� �����Ͻ� ���� ��õ�մϴ�.(���ĳ���� ���Ե��� �ʽ��ϴ�.) ');
define('_MD_AM_NOMODULE','ĳ�������� ����� �������� �ʽ��ϴ�.');
define('_MD_AM_DTPLSET','�⺻ ���÷� ��Ʈ');
define('_MD_AM_SSLLINK','SSL�α��� ������ URL');

// added for mailer
define("_MD_AM_MAILER","���� ����");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","�۽��� �����ּ�");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","�۽���");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","PM���� �۽���");
define("_MD_AM_MAILFROMUIDDESC","PM������ ���� �� �۽��ڷμ� �⺻������ ǥ�õ� ����� ������ �ּ���.");
define("_MD_AM_MAILERMETHOD","���� ���� ���");
define("_MD_AM_MAILERMETHODDESC","���� ���� ����� ������ �ּ���! �⺻���������� PHP�� mail()�Լ��� ���˴ϴ�.");
define("_MD_AM_SMTPHOST","SMTP ���� �ּ�");
define("_MD_AM_SMTPHOSTDESC","SMTP ������ �ּ� ����� ������ �ּ���!");
define("_MD_AM_SMTPUSER","SMTPAuth ������");
define("_MD_AM_SMTPUSERDESC","SMTPAuth�� ����� SMTP������ ���ӽ� ���� ������");
define("_MD_AM_SMTPPASS","SMTPAuth �н�����");
define("_MD_AM_SMTPPASSDESC","SMTPAuth�� ����� SMTP������ ���ӽ� ���� �н�����");
define("_MD_AM_SENDMAILPATH","sendmail ���");
define("_MD_AM_SENDMAILPATHDESC","sendmail program���� ��ü ��θ� ������ �ּ���");
define("_MD_AM_THEMEOK","���ð����� �׸�");
define("_MD_AM_THEMEOKDSC","����ڰ� �⺻�׸��� ������ �� �ְ� �� �׸��� ������ �ּ���.");

// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","XOOPS Database");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Standard LDAP Directory");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION","���� �ɼ�");
define("_MD_AM_AUTHMETHOD","���� ���");
define("_MD_AM_AUTHMETHODDESC","����� ������ ���� � ��������� ����Ͻðڽ��ϱ�?");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Mail �ʵ��");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","LDAP directory tree������ E-Mail �ʵ��");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Common Name �ʵ��");
define("_MD_AM_LDAP_NAME_ATTR_DESC","LDAP directory������ Common Name �ʵ��");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Surname �ʵ��");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","LDAP directory������ ��(Surname) �ʵ��");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Given Name �ʵ��");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","LDAP directory������ Given Name �ʵ��");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","LDAP directory tree�� base DN (Distinguished Name)");
define("_MD_AM_LDAP_PORT","LDAP - ��Ʈ ��ȣ");
define("_MD_AM_LDAP_PORT_DESC","LDAP directory server �׼����� ��Ʈ��ȣ");
define("_MD_AM_LDAP_SERVER","LDAP - ������");
define("_MD_AM_LDAP_SERVER_DESC","LDAP directory server�� ������");

define("_MD_AM_LDAP_MANAGER_DN","LDAP manager�� DN");
define("_MD_AM_LDAP_MANAGER_DN_DESC","LDAP manager���� ������� DN");
define("_MD_AM_LDAP_MANAGER_PASS","LDAP manager�� �н�����");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","LDAP manager���� ������� �н�����");
define("_MD_AM_LDAP_VERSION","LDAP ���� ��������");
define("_MD_AM_LDAP_VERSION_DESC","LDAP ���� �������� : 2 �Ǵ� 3");

define("_MD_AM_LDAP_USERS_BYPASS","Users allowed to bypass LDAP authentication");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Users to be authenticated with native XOOPS method");

define("_MD_AM_LDAP_USETLS"," Use TLS connection");
define("_MD_AM_LDAP_USETLS_DESC","Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
								  " and the LDAP version must be set to 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP Attribute use to search the user");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Login name use in the DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");

define("_MD_AM_LDAP_FILTER_PERSON","The search filter LDAP query to find user");
define("_MD_AM_LDAP_FILTER_PERSON_DESC","Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
		"<br>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","The domain name");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Windows domain name. for ADS and NT Server only");

define("_MD_AM_LDAP_PROVIS","Automatic xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_DESC","Create xoops user database if not exists");

define("_MD_AM_LDAP_PROVIS_GROUP","Default affect group");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","The new user is assign to these groups");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!");

define("_MD_AM_LDAP_PROVIS_UPD","Maintain xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","The Xoops User account is always synchronized with the Authentication Server");

define("_MD_AM_CPANEL","����ȭ��� �׸�");
define("_MD_AM_CPANELDSC","�������ǿ��� ����Ͻ� �׸��� ������ �ּ���!");

define("_MD_AM_WELCOMETYPE","ȯ���޼��� ������");
define("_MD_AM_WELCOMETYPE_DESC","�ű� ���ȸ������ ȯ���޼����� ������ ����� ������ �ּ���!");
define("_MD_AM_WELCOMETYPE_EMAIL","����");
define("_MD_AM_WELCOMETYPE_PM","PM����");
define("_MD_AM_WELCOMETYPE_BOTH","���ϰ� PM���� ���");

?>