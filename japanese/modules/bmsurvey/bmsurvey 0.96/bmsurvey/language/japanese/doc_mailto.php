<?php
// $Id$
//  ------------------------------------------------------------------------ //
//                Bluemoon.Multi-Survey                                      //
//                    Copyright (c) 2005 Yoshi.Sakai @ Bluemoon inc.         //
//                       <http://www.bluemooninc.biz/>                       //
// ------------------------------------------------------------------------- //
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
include '../../../../mainfile.php';

include '../../../../include/cp_functions.php';

	xoops_cp_header();
?>
<h1>mailto ���ץ����λȤ���</h1>

���󥱡������ mailto �򵭽Ҥ��ơ�Ǥ�դΥ��ɥ쥹�˥᡼��������Ǥ��ޤ���
����ϡ��֥����٥����Խ�����פ�General�ǲ�����̤���������᡼�륢�ɥ쥹�Ȥ��̤������ǽ�Ǥ���
����mailto���ץ�������Ѥ���С��̾�Τ��䤤��碌�ե������Ʊ�ͤ����ϲ��̤�������ǽ�Ǥ���

<h2>�������������ƥ����Ȥ� mailto �򵭽Ҥ���</h2>

<li>�����٥����Խ��ˤơ��ֿ������ե�����ɡפ򥯥�å����ޤ���
<li>Ǥ�դΥե�����ɥ͡�������Ϥ��ޤ���
<li>�����פϥ��������ƥ����Ȥ����򤷤ޤ���
<li>����ʸ���������¡�ɬ�ܹ��ܤ����ꤷ�ޤ���
<li>�ƥ����ȥե�����ɤ�mailto��������򵭽Ҥ��ޤ���<br>��<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="mailto:who@mail.com"&gt;�᡼������&lt;/a&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;A HREF="mailto:who@mail.com?subject=ɽ��&body=����"&gt;�᡼������&lt;/A&gt;<br>
<h2>�������Ϲ��ܤ� mailto �򵭽Ҥ���</h2>
<li>�����٥����Խ��ˤơ��ֿ������ե�����ɡפ򥯥�å����ޤ���
<li>�᡼���ɽ��ϡ��ե�����ɥ͡���'mailsubject'��ƥ����ȡ��ܥå����Ȥ����ɲä��ޤ���
<li>�᡼���������ϡ��ե�����ɥ͡���'mailto'��ƥ����ȡ��ܥå����Ȥ����ɲä��ޤ���
<li>�᡼����������ϡ��ե�����ɥ͡���'mailfrom'��ƥ����ȡ��ܥå����Ȥ����ɲä��ޤ���
<li>�᡼�������CC�ϡ��ե�����ɥ͡���'mailcc'��ƥ����ȡ��ܥå����Ȥ����ɲä��ޤ���
<li>�᡼���������̾�ϡ��ե�����ɥ͡���'mailname'��ƥ����ȡ��ܥå����Ȥ����ɲä��ޤ��������ͤ�body�κǸ���ɲä���ޤ���
<li>�᡼�����ʸ�ϡ��ե�����ɥ͡���'mailbody'�򥨥å������ܥå����Ȥ����ɲä��ޤ���
<li>���������ɥ쥹�λ���ϥե�����ɥ͡���'mailfromset'�򥤥������Ρ����ܤȤ����ɲä��ޤ���
�������ξ��ϡ�'mailfrom'�����Ϥ��줿�᡼�륢�ɥ쥹��Ŭ�Ѥ���ޤ���
�Ρ��ξ��ϡ������٥��ΰ�������˻��ꤷ���᡼�륢�ɥ쥹���أϣϣУӤδ����ԥ��ɥ쥹��Ŭ�Ѥ���ޤ���
������ξ��� from / Reply-To �ϥ���ȥ���Ǥ��ޤ�����Return-Path:�ϡ�SMTP�����Ф˰�¸���ޤ���(-f ���ɥ쥹�˥��ץ���������դ���MTA�Τ�ͭ���Ȥʤ�ޤ��������Sendmail�Υ��ץ����ǽ�ǡ�postfix�Ǥ����Ѳ�ǽ�Ǥ���

<h2>�������������ƥ����Ȥ����Ϲ��ܤΣ��Ĥ�mailto�򵭽Ҥ���</h2>

���Ҥ������ǤϤ��줾�쥻�������ƥ����Ȥ����Ϲ����̡������ꤹ����ˡ����⤷�ޤ����������Ĥ򺮤��ƻȤ����Ȥ��ǽ�Ǥ���
���ξ�硢���������ƥ����Ȥǻ��ꤷ���ѿ�������������졢�夫�����Ϲ��ܤ��ͤǾ�񤭤���ޤ���
<li>���������ƥ����Ȥ��������mailto�򵭽Ҥ����᡼�륢�ɥ쥹�ȥ��֥������Ȥ����ꤷ�ޤ���
<li>���Ϲ��ܤ�mailbody��������ޤ���
<li>����ǡ��᡼�륢�ɥ쥹�ȥ��֥������Ȥ�����ǥ�å���������Ǥ�����ϤΥ᡼��ե�����Ȥ������Ѳ�ǽ�ˤʤ�ޤ���

<h2>�������ϥǥե�����ͤ�����</h2>
�⥸�塼������Υ����٥������������֥����٥��η�̤򸫤�פˤƲ����ԥꥹ�ȥܥå������������̤򸫤�����Ǥ��ޤ�����
�����ǡ֤�����Ƥ����Ͻ���ͤ˥��åȤ���פ򥯥�å�����ȥǥե���Ȥ������ͤ�����Ǥ��ޤ���
�ޤ�������ϡ֥����٥����Խ�����פ��饵���٥�������General���ֹ���Default Response�����ˤ��ޤ���

<hr>
<h1>������</h1>

<h2>�����᡼��󥰥ꥹ�Ȥؤ���Ͽ</h2>
�ʲ�������ˤ��᡼��󥰥ꥹ�Ȥؤ���Ͽ�ե�����Ȥ������Ѳ�ǽ�Ǥ���
�᡼���������ϥ�å������󤬡�'mailfrom'�����Ϥ��줿�᡼�륢�ɥ쥹�Ȥʤ�ޤ����ʥ�å����������Ƥ���������ޤ��󡣡�
<p>
<li>�����٥����Խ�'General'��Email���᡼��󥰥ꥹ�Ȥ���Ͽ���ե��ɥ쥹�˻��ꤷ�ޤ����ޤ���From Option �ϥ��󥱡������email��Ȥ��ޤ���
<li>�᡼����������ϡ��ե�����ɥ͡���'mailfrom'��ƥ����ȡ��ܥå����Ȥ����ɲä��ޤ���
<li>�᡼��󥰥ꥹ�Ȥؤ���������ϥե�����ɥ͡���'to_mailinglist'�򥤥������Ρ����ܤȤ����ɲä��ޤ���
�������ξ��ϡ�'mailfrom'�����Ϥ��줿�᡼�륢�ɥ쥹���������Ȥ�����������ޤ���
�Ρ��ξ��ϡ�������������ޤ���

<?php
	xoops_cp_footer();
?>
