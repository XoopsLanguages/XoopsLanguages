<?php
// $Id: english.php 2087 2008-09-15 04:50:23Z phppp $

define("LEGEND_XOOPS_PATHS","XOOPS�� ���(Physical paths)" );
define("LEGEND_DATABASE","����Ÿ���̽� Character Set" );

define("XOOPS_LIB_PATH_LABEL","XOOPS ���̺긮 ���丮" );
define("XOOPS_LIB_PATH_HELP","XOOPS ���̺귯�� ���丮�� ��ü���(Full Path)�� �Է��� �ּ���! ���� [ / ]�� ������ ���ñ� �ٶ��ϴ�. ������ ���� " . XOOPS_ROOT_PATH . "�� �ܺο� �ش� ���丮�� �νñ� �ٶ��ϴ�." );
define("XOOPS_DATA_PATH_LABEL","XOOPS ����Ÿ ���丮" );
define("XOOPS_DATA_PATH_HELP","XOOPS ����Ÿ ���丮�� ��ü���(Full Path)�� �Է��� �ּ���! ���� [ / ]�� ������ ���ñ� �ٶ��ϴ�. ������ ���� " . XOOPS_ROOT_PATH . "�� �ܺο� �ش� ���丮�� �νñ� �ٶ��ϴ�." );

define("DB_COLLATION_LABEL","����Ÿ���̽� character set and collation" );
define("DB_COLLATION_HELP",  "����Ÿ���̽��� �ͼ����� ������ �е��� ������ �������� ���� ���� ���մϴ�. ������ �����Ͻ� ���� ������ �������п��� ������ ���� �� ������ �����Ͻñ� �ٶ��ϴ�.(As of 4.12 MySQL supports custom character set and collation. However it is more complex than expected, so DON'T make any change unless you are confident with your choice.)");
define("DB_COLLATION_NOCHANGE",  "�������� ����");

define("XOOPS_PATH_FOUND","�н�(Path)�� ã�ҽ��ϴ�." );
define("ERR_COULD_NOT_ACCESS","������ ���丮�� �׼����Ҽ��� �����ϴ�. ���丮�� �����ϴ��� Ȥ�� �б������ �ִ��� Ȯ���� ���ñ� �ٶ��ϴ�." );
define("CHECKING_PERMISSIONS","Checking file and directory permissions..." );
define("ERR_NEED_WRITE_ACCESS","������ ���丮���� ���Ⱑ������ ������ �ֽñ� �ٶ��ϴ�. (��: UNIX/LINUX ���� 'chmod 777 directory_name' , Windows���� �б���������)" );
define("IS_NOT_WRITABLE","���� %s ��(��) ����Ұ� �����Դϴ�. ���Ⱑ������ �������ּ���!" );
define("IS_WRITABLE","���� %s ��(��) ���Ⱑ�� �����Դϴ�." );
define("ERR_COULD_NOT_WRITE_MAINFILE","mainfile.php ���Ͽ��� ���⿡ �����Ͽ����ϴ�. ���ϱ��Ѽ����� �ùٸ��� �ٽ� Ȯ���� �ֽñ� �ٶ��ϴ�." );

define("LEGEND_XOOPS_MAINFILE_FORPROTECTOR","XOOPS mainfile �غ�");
define("XOOPS_MAINFILE_LABEL_FORPROTECTOR","protector����� ��ġ�Ͻ� ��ȹ�̸� <em>/upgrade/" . basename(dirname(dirname(__FILE__))) . "/mainfile.dist.php</em> ���� ��� <em>/extras/mainfile.dist.php.protector</em>������ �̿��Ͻñ� �ٶ��ϴ�." .
                                            " (�� ������ ���ϸ��� <em>mainfile.dist.php</em>�� �̸��ٲٱ��Ͽ� ��� ����Ͻø� �˴ϴ�.).<br />" .
                                            "�̹� protector����� ���������� ��ġ�Ǿ� �ִٸ� �� ������ �����Ͻø� �˴ϴ�.");
?>