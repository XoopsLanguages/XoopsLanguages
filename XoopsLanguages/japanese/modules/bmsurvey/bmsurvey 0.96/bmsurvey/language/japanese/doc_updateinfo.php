<?php
// $Id$

include '../../../../mainfile.php';

include '../../../../include/cp_functions.php';

	xoops_cp_header();
?>
<h1>�С�����󥢥åפˤĤ���</h1>
���κ�Ȥ�Ԥ��ˤϥХå����åס��ꥹ�ȥ��ġ��뤬ɬ�פǤ��� <p>
<li><a href=http://www.bluemooninc.biz/~xoops2/modules/mydownloads/singlefile.php?cid=3&lid=36">BackPack</a> �� Bluemooninc.biz��������Ǥ��ޤ���<p>
<li><a href=http://www.phpmyadmin.net/home_page/index.php">phpMyAdmin</a> �� The phpMyAdmin Project��������Ǥ��ޤ���<p>
<hr>

<h2>V0.3����V0.4�ؤΥ��åץǡ���</h2>

<h3>1. bmsurvey_survey�ơ��֥��Хå����å�</h3>
<p>���߻��Ѥ��Ƥ��� bmsurvey_survey�ơ��֥��Хå����åפ��Ƥ��������� ('xoops_'��XOOPS��Ƭ��Ǥ���) 

<h3>2. �Хå����åץե�������Խ�</h3>
<p><li>Text Editor�ǥХå����åץե�����򳫤��Ƥ���������
<p><li>bmsurvey_survey�ơ��֥��������Ф���'changed'�Σ��Ĳ��ιԤ˰ʲ��������ä��Ƥ���������
<p>&nbsp;&nbsp; response_id	INT UNSIGNED NOT NULL,
<p><li>�������¸���Ƥ��������� 

<h3>3. �ꥹ�ȥ�</h3>
<p>�Խ����줿�Хå����åץե������ꥹ�ȥ����Ƥ���������
<p>phpMyAdmin����Ѥ��ƥꥹ�Ȥ�����ϡ���Ū�Υơ��֥��ɥ�åפ��ƥꥹ�ȥ�����������
<hr>

<h2>V0.2X����V0.3�ؤΥ��åץǡ���</h2>

<h3>1. BMEF �ơ��֥��Хå����å�</h3>
<p>���߻��Ѥ��Ƥ��� xoops_bmef_*�ơ��֥�����Ƥ�Хå����åפ��Ƥ��������� ('xoops_'��XOOPS��Ƭ��Ǥ���) 

<h3>2. �Хå����åץե�������Խ�</h3>
<p><li>Text Editor�ǥХå����åץե�����򳫤��Ƥ���������
<p><li>bmef_respondent�ơ��֥�Τ��٤Ƥι�¤���֤������Ƥ��������� 
<p>&nbsp;&nbsp; bmsurvey/sql/mysql.sql�ξ��bmsurvey_respondent�ơ��֥뤫�餹�٤Ƥι�¤�򥳥ԡ����Ƥ��������������ơ�������֤������Ƥ���������
<p><li>bmef_survey�ơ��֥��õ����'mail'�Σ��Ĳ��ιԤ˰ʲ��������ä��Ƥ���������
<p>&nbsp;&nbsp; from_option TINYINT( 3 ) UNSIGNED DEFAULT'0'NOT NULL
<p><li>���٤ƤΥơ��֥�̾�Τ�'bmef_'����'bmsurvey_'���֤������Ƥ���������
<p><li>�������¸���Ƥ��������� 

<h3>3. �ꥹ�ȥ�</h3>
<p>�Խ����줿�Хå����åץե������ꥹ�ȥ����Ƥ���������
<p>phpMyAdmin����Ѥ��ƥꥹ�Ȥ�����ϡ�bmsurvey�����ƤΥơ��֥��ɥ�åפ��ƥꥹ�ȥ�����������
<hr>

<?php
	xoops_cp_footer();
?>
