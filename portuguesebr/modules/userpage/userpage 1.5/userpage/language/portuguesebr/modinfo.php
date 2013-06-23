<?php
//  ------------------------------------------------------------------------ //
//                      USERPAGE - MODULE FOR XOOPS 2                        //
//                  Copyright (c) 2005-2006 Instant Zero                     //
//                     <http://xoops.instant-zero.com/>                      //
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
if( ! defined( '_MI_USERPAGE_NAME' )) {
define('_MI_USERPAGE_NAME', 'P�gina Pessoal');
define('_MI_USERPAGE_DESC', 'Habilita para usu�rios registrados criar a sua pr�pria p�gina');
define('_MI_USERPAGE_ADMMENU1', 'Estat�sticas');
define('_MI_USERPAGE_OPT0', 'Habilita html ?');
define('_MI_USERPAGE_OPT0_DSC', 'Escolha se o usu�rio poder� usar html');
define('_MI_USERPAGE_OPT1', 'Habilita RSS Feed ?');
define('_MI_USERPAGE_OPT1_DSC', '');
define('_MI_USERPAGE_OPT3', 'Formato da Data');
define('_MI_USERPAGE_OPT3_DSC', 'Veja o site <a href="http://fr3.php.net/manual/pt/function.date.php">Php</a> para ver mais detalhes e informa��es sobre as fun��es usadas com datas');
define('_MI_USERPAGE_OPT4', 'Qual o N�mero de caracteres para mostrar no RSS Feed ?');
define('_MI_USERPAGE_OPT4_DSC', 'Escolha o n�mero de caracteres vis�veis  no RSS Feed');
define('_MI_USERPAGE_OPT5', 'N�mero de linhas por p�gina (na listagem de p�ginas)');
define('_MI_USERPAGE_OPT5_DSC', 'Escolha o n�mero de linhas para uso do usu�rio');
//define('_MI_USERPAGE_OPT6', 'Usa Editor kiovi visual ?');
// Changed in version 1.1
define('_MI_USERPAGE_OPT6',"Qual Editor usar ?");
//define('_MI_USERPAGE_OPT6_DSC',"If you set this option to true, don't forget to set the first option (Enable html) to true too");
// Changed in version 1.1
define('_MI_USERPAGE_OPT6_DSC', 'Se voce escolher esta op��o como verdadeira, n�o esquecer que precisa primeiro escolher (Habilita html ) para Sim tamb�m');
define('_MI_USERPAGE_BNAME1', 'P�ginas Recentes');
define('_MI_USERPAGE_BNAME2', 'P�ginas mais Visitadas');
define('_MI_USERPAGE_BNAME3', 'Paginas aleat�rias');
define('_MI_USERPAGE_MENU1', 'Listar P�ginas Pessoais');

// Added in version 1.1
define("_MI_USERPAGE_FORM_COMPACT","Compacto");
define("_MI_USERPAGE_FORM_DHTML","DHTML");
define("_MI_USERPAGE_FORM_SPAW","Spaw Editor");
define("_MI_USERPAGE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_USERPAGE_FORM_FCK","FCK Editor");
define("_MI_USERPAGE_FORM_KOIVI","Koivi Editor");
define("_MI_USERPAGE_FORM_TINYEDITOR","TinyEditor");
}
?>
