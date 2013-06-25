<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		 //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
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

if (!defined('XOOPS_ROOT_PATH')) {
	die("XOOPS root path not defined");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">(XoopsCare) ����� �����</a> �� ����� ��� ���� ������� ��� ����� ����� ������ ���� �<b>�������</b>.
��� ���� ��� ��� ������ ����� ���� ����� <b>���� ���� ������� ��������</b>

���� ������� ����� :
1/ ����� ����� ��������
2/ ������ ��������
3/ ����� ����� php
4/ ����� templates_c and cache
5/ ��� ��������� �������� Spams
6/ ����� ������� (Sessions)

����� ����� �� ��� ��� ���� �� �� ������ ��� �� ��� �������.

�������� ��� ������� ����� �� ������� ���� ���� ��� ��� ������� �(��� ���� ����)� ������� �������� ������ �����.

��� ��� ������� �� ����� ������� ��� ���� ��� ���� ����� <i>cron.php</i> ������� �� ���� ������� ���� �� ���� ������ ���� ������ �� ���� ����� �������.
	����� ���� : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>��� ������� ������ ��� ���� ���� �����ѡ ��� ���� ������� ��� ���</b>� ��� ������ ����� �� ����� ������ ������� ������.

��� �� ��� ������� ������� ������ ��� ��� ���� ������� �� ����� (�� �� ���� ����)� ������ ������� ���� ������ ��� ����� ������� �������� ���� �������.
����: ����� ������� ����� �� ��� ������.

��� ��� ��� ������ �� �� ������ ��� ����� ������� ���� ��������.
�� ����� ����� <b>�������� ������</b>� �� ���� ���� ������ ��� ��� �������.
��� ��� ���� ����� ��� ����� ��� ���� ���� <i>��� �����</i>.
���� ������ ������ ����� ����� ���� <u>.php</u>.

�� ��� <b>����� ����� ��������</b>� ���� ������� ����� ������� ������ ����� ��������.
��� ���� 0 ��� ��� ������ ��� ���.
���� �� ��� ������� ��� ������� �� ������� ��������� �� ��� �����. 


�� ��� <b>��������</b>� ���� ���� ����� ������� ��� �������� �� (��� ��� �������)� ���� ��� ������ SQL ������ ��� �� ����� ��������.

����� ������ ���� ����� �� ���� Php <b>���� Php</b>

�� ��� <b>Cache � Templates_c</b> ����� ������� ����� �������� Cache � Templates_c.

�� ��� <b>������� (sessions)</b> ������ ������� ����� ���� session �� ����� �������� �� ��� ����� ������.


�����ǡ  �� ����� <b>��������� ��������</b>�  ����� ��� �� ��������� ��������.
��� ����� ���� �� <i>������� ������� ��������</i> ������.
���ǡ �� <i>������ ������</i>� ��� ���� ����� ����� ������� ��� ������ʡ ���� ������� �������� ����� ������ ���� ������� ��� ������� ��������.
����� ����� ����� ����� �� ��������� ���� ����� ��� ���� ��������� ������ �������� �����.
����� ��� �� ������� ����� ������� ������ �� ������� ������� ������� �� ������ ������ ��������.
����ǡ ����� ��� �� ���� ���������� �������ɡ ����� �������� ��ǡ ��� ����ǡ������� �� �����.


��� ��� ������ ���� �� ����ߡ  ��� ������ ������� �� ��� ��������� � ����� ��� �� ���� ���� �� 0.

��� ������ ������� koumed ��� �� ���� ����� ������ ����� ����� <a href="http://www.arabxoops.com" target="_blank">http://www.arabxoops.com/</a>

<a href="http://www.instant-zero.com" target="_blank">Let us know if you like this module</a>

endhelp;
?>
