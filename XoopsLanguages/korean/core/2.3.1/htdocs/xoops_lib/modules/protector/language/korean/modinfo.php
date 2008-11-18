<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Xoops Protector");

// A brief description of this module
define($constpref."_DESC","�������� �������κ��� XOOPS�� ��ȣ���ִ� ����Դϴ�.(ex:DoS , SQL Injection , and Variables contaminations.)<br />\n�� ����� ����� �۵��� ����ȭ�ϱ� ���ؼ��� ��� ��������,���� �ֻ�ܺο�, �մ����ٰ��� ���� ��ġ��Ű�ñ� �ٶ��ϴ�.");

// Names of blocks for this module (Not all module has blocks)
//define($constpref."_BNAME1","Protector");
//define($constpref."_BDESC1","�� ����� �۵��� ����ȭ�ϱ� ���ؼ��� ��� ��������,���� �ֻ�ܺο�, �մ����ٰ��� ���� ��ġ��Ű�ñ� �ٶ��ϴ�.");

// Menu
define($constpref."_ADMININDEX","Protect Center");
define($constpref."_ADVISORY","Security Advisory");
//define($constpref."_MYBLOCKSADMIN","���&�׷� ����");
define($constpref."_PREFIXMANAGER","Prefix ������");
define($constpref.'_ADMENU_MYBLOCKSADMIN','�׼��� ����') ;


// Configs
define($constpref.'_GLOBAL_DISBL','�Ͻ��� ���� ����');
define($constpref.'_GLOBAL_DISBLDSC','����� ��� �������..�Ͻ������� �����մϴ�.<br />�����ذ��� ������ �ݵ�� �����Ͻñ� �ٶ��ϴ�.');
define($constpref.'_RELIABLE_IPS','�ſ밡���� IP');
define($constpref.'_RELIABLE_IPSDSC','Dos���� ���� ����ó���� �ſ밡���� IP �ּҸ�  | �� ������ ����� �ּ���!  ^ �� ���ڿ��� ������, $ �� ���� �ǹ��մϴ�.');
define($constpref.'_LOG_LEVEL','�α� ����');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','���Ѻ� IP�ź��� ����(��)');

define($constpref.'_LOGLEVEL0','�α���¾���');
define($constpref.'_LOGLEVEL15','���輺�� ���� �͸� �α�');
define($constpref.'_LOGLEVEL63','���輺�� ���� ���� �α����� ����');
define($constpref.'_LOGLEVEL255','��� ������ �α׸� ��ȿȭ');

define($constpref.'_HIJACK_TOPBIT','������ ������ ��ȣ ��Ʈ(Protected IP bits)');
define($constpref.'_HIJACK_TOPBITDSC','���� ����ä����� ����å:<br />�⺻������ 32(bit)�� ��� ��Ʈ�� ��ȣ�մϴ�.<br />Proxy�� �̿��Ͻ� ���� ���� �׼������� IP�ּҰ� ����Ǵ� ��쿣 ������� �ʴ� ���� ��Ʈ���� �����Ͻø� �˴ϴ�.<br />(��) 192.168.0.0 - 192.168.0.255 �� �������� ������ ���ɼ��� ������ ���, 24(bit)�� �����Ͻø� �˴ϴ�.');
define($constpref.'_HIJACK_DENYGP','���ǳ������� IP������ ������ �׷�');
define($constpref.'_HIJACK_DENYGPDSC','���� ������ŷ ����(Anti Session Hi-Jacking):<br />���ǳ������� IP����(�ٸ� IP�κ����� ����)�� ������ �׷��� �������ּ��� <br />(�����ڿ� ���� ON���� �����Ͻ� ���� ���մϴ�.)');
define($constpref.'_SAN_NULLBYTE','null���ڿ��� �����̽��� ����(Sanitizing null-bytes)');
define($constpref.'_SAN_NULLBYTEDSC','���ڿ� ���� character�� "\\0" �� ������ ���ݿ� �̿�� �� �ֽ��ϴ�.<br />�߽߰ÿ� �����̽��� ����ó���մϴ�.<br />(On������ ���� �ǰ�)');
define($constpref.'_DIE_NULLBYTE','null���ڿ� �߽߰� ��������');
define($constpref.'_DIE_NULLBYTEDSC','���ڿ� ���� character�� "\\0" �� ������ ���ݿ� �̿�� �� �ֽ��ϴ�.<br />(On������ ���� �ǰ�)');
define($constpref.'_DIE_BADEXT','���డ�������� ���ε�ÿ� ��������');
define($constpref.'_DIE_BADEXTDSC','Ȯ���� php �� ���� ���������� ������ ���డ���� �ִ� ������ ���ε尡 �ִ� ��� ���������մϴ�.<br />B-Wiki �Ǵ� PukiWikiMod�� ����ϸ�, ����� PHP �ҽ������� ÷���ϰ� �Ѵٸ� OFF�� �����ϼ���.');
define($constpref.'_CONTAMI_ACTION','���� ����(contamination) �߽߰��� ��ġ');
define($constpref.'_CONTAMI_ACTIONDS','XOOPS�� �ý��� �۷ι������� ��������� ������ �߰��� ����� ó���� ������ �ּ���.<br />(�⺻������ ��������)');
define($constpref.'_ISOCOM_ACTION','isolated comment �߽߰��� ��ġ');
define($constpref.'_ISOCOM_ACTIONDSC','SQL Injection ����:<br />¦�� �� */�� ���� isolated comment ("/*") �� �߰ߵ� ����� ��ġ�� ���մϴ�. <br />"Sanitizing" ���: ���� ¦�� �Ǵ�  "*/" �� ���� ÷��.<br />(Sanitizing ����� ��õ�մϴ�.)');
define($constpref.'_UNION_ACTION','UNION �� �߰ߵ� ����� ��ġ');
define($constpref.'_UNION_ACTIONDSC','SQL Injection ����:<br />UNION���� ������ ����� ó���� �����մϴ�.<br />"Sanitizing"���: union �� uni-on ���� ����ó��<br />(Sanitizing ����� ��õ�մϴ�.)');
define($constpref.'_ID_INTVAL','id�� ������ ���� ĳ����');
define($constpref.'_ID_INTVALDSC','�������� id�� ���� ��� ������ ������ ĳ����ó���մϴ�.<br />�� �ɼ��� XSS �� SQL Injection�� ������ ȿ�����Դϴٸ�..<br />������ ��ġ�θ�ŭ �Ϻ� ��⿡�� ���۵��� ������ �� �ֽ��ϴ�. ���ǹٶ��ϴ�.');
define($constpref.'_FILE_DOTDOT','�ǽɽ����� ���������� ����');
define($constpref.'_FILE_DOTDOTDSC','������ �����Ѵٰ� �ǴܵǴ� ������Ʈ���ڿ����� ".."������ ������ �����մϴ�. ');

define($constpref.'_BF_COUNT','Brute Force ��å');
define($constpref.'_BF_COUNTDSC','�н����忡 ���� Brute Force���ݿ� �����մϴ�. 10�е��� ���⼭ ������ Ƚ�� �̻� �α��ο� ������ ��� �ش� IP�� ����ó���մϴ�.');

define($constpref.'_DOS_SKIPMODS','DoS���� ��󿡼� ������ ���');
define($constpref.'_DOS_SKIPMODSDSC','�����ϱ� ���ϴ� ����� dirname�� | �� ������ �Է��� �ּ���. ä�ð迭 ��� ��ȿ�մϴ�.');

define($constpref.'_DOS_EXPIRE','DOS���� ���ýð�(��)');
define($constpref.'_DOS_EXPIREDSC','DOS�����̳� ������ crawler�� �׼��� �󵵸� �����ϱ����� ���ô����ð�');

define($constpref.'_DOS_F5COUNT','F5 �������� �ν�ó���� ȸ��');
define($constpref.'_DOS_F5COUNTDSC','DoS���� ���<br />������ ������ ���ýð����� �� ȸ���̻�,���� URI���� ������ ��ӵǾ��� ��� �������� �����մϴ�.');
define($constpref.'_DOS_F5ACTION','F5 ���ݿ� ���� ��ó');

define($constpref.'_DOS_CRCOUNT','������ crawler�� �ν�ó���� ȸ��');
define($constpref.'_DOS_CRCOUNTDSC','������ crawler�� ���� ��ó<br />������ ������ ���ýð����� �� ȸ���̻�, ����Ʈ���� ���ƴٴϸ� ������ crawler�� �����մϴ�.');
define($constpref.'_DOS_CRACTION','������ Crawler�� ���� ��ó');

define($constpref.'_DOS_CRSAFE','ȭ��Ʈ����Ʈ User-Agent');
define($constpref.'_DOS_CRSAFEDSC','������������ crawl�� �㰡�� Agent���� perl ���Խ� ǥ������ �����ּ��� <br /><br />��) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define($constpref.'_OPT_NONE','���� (�α׸� ���)');
define($constpref.'_OPT_SAN','����ó��(Sanitizing)');
define($constpref.'_OPT_EXIT','��������');
define($constpref.'_OPT_BIP','����IP���(������)');
define($constpref.'_OPT_BIPTIME0','����IP���(���Ѻ�)');

define($constpref.'_DOSOPT_NONE','���� (�α׸� ���)');
define($constpref.'_DOSOPT_SLEEP','Sleep(����õ)');
define($constpref.'_DOSOPT_EXIT','exit');
define($constpref.'_DOSOPT_BIP','����IP ����Ʈ�� �ø�(������)');
define($constpref.'_DOSOPT_BIPTIME0','����IP ����Ʈ�� �ø�(���Ѻ�)');
define($constpref.'_DOSOPT_HTA','.htaccess�� DENY���(�׽�Ʈ�ܰ���)');

define($constpref.'_BIP_EXCEPT','���� IP ����� ���� �׷�');
define($constpref.'_BIP_EXCEPTDSC','���⿡ ������ ȸ�����κ����� ������ ���� IP ��������� �����Ͽ��� ��������Ʈ�� �ø��� �ʽ��ϴ�. �� �α������� ������ ȸ���Ǵ��� �Ұ����ϹǷ� �ǹ̰� �����ϴ�.<br />(�������� ON ���� ����)');
//define($constpref.'_PATCH2092','Xoops 2.0.9.2 ���Ͽ� �����ϴ� ������� ���� ��ġ');
define($constpref.'_DISABLES','XOOPS�� �Ҿ�/������ ����� ��ȿó��');
/*
define($constpref.'_PASSWD_BIP','���� �н�����');
define($constpref.'_PASSWD_BIPDSC','���� � �������� ������ �ڽ��� ����IPó���Ǿ��� ��� �������� �����մϴ�.<br /> XOOPS_URL/modules/protector/admin/rescue.php �� �׼����� �� ���⿡�� ������ �н����带 �Է��Ͻø� �˴ϴ�.<br />���⿡ �н����带 �������� ������ ������ �����ü�� �۵����� �����Ƿ� ���ǹٶ��ϴ�.');
*/
define($constpref.'_BIGUMBRELLA','anti-XSS (BigUmbrella) ��ȿȭ');
define($constpref.'_BIGUMBRELLADSC','�� ����� ����Ͻø� ������ XSS��༺�� ��ȿȭ�Ͻ� �� �ֽ��ϴ�. ���� 100% ���� ����!');

define($constpref.'_SPAMURI4U','SPAM ��å: �Ϲݻ���ڿ��� ����� URL��');
define($constpref.'_SPAMURI4UDSC','�������̿��� �Ϲݻ������ �����뿡 ������ �� �̻��� URL�� ���ԵǾ��� ���� ��� �̸� SPAM���� �����մϴ�. 0 �� �����Ѱ����� �ǹ�!');
define($constpref.'_SPAMURI4G','SPAM ��å: �մԿ��� ����� URL��');
define($constpref.'_SPAMURI4GDSC','�ܼ� �湮���� �����뿡 ������ �� �̻��� URL�� ���ԵǾ��� ���� ��� �̸� SPAM���� �����մϴ�. 0 �� �����Ѱ����� �ǹ�!');

}

?>