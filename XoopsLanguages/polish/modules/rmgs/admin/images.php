<?php
/*******************************************************************
* $Id: images.php,v 0.1.8 24/12/2005 14:47 BitC3R0 Exp $           *
* ------------------------------------------------------           *
* RMSOFT Gallery System 2.0                                        *
* Sistema Avanzado de Galeras                                     *
* CopyRight  2005 - 2006. Red Mxico Soft                         *
* http://www.redmexico.com.mx                                      *
* http://www.xoops-mexico.net                                      *
*                                                                  *
* This program is free software; you can redistribute it and/or    *
* modify it under the terms of the GNU General Public License as   *
* published by the Free Software Foundation; either version 2 of   *
* the License, or (at your option) any later version.              *
*                                                                  *
* This program is distributed in the hope that it will be useful,  *
* but WITHOUT ANY WARRANTY; without even the implied warranty of   *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the     *
* GNU General Public License for more details.                     *
*                                                                  *
* You should have received a copy of the GNU General Public        *
* License along with this program; if not, write to the Free       *
* Software Foundation, Inc., 59 Temple Place, Suite 330, Boston,   *
* MA 02111-1307 USA                                                *
*                                                                  *
* ------------------------------------------------------           *
* images.php:                                                      *
* Control de Imgenes                                              *
* ------------------------------------------------------           *
* @copyright:  2005 - 2006. BitC3R0.                              *
* @autor: BitC3R0                                                  *
* @paquete: RMSOFT GS v2.0                                         *
* @version: 0.1.8                                                  *
* @modificado: 24/12/2005 02:47:35 p.m.                            *
*******************************************************************/

define('_RMGS_LOCATION','imagenes');
include '../../../include/cp_header.php';

/**
 * Nos aseguramos que exista el lenguage buscaado
 */
if (file_exists(XOOPS_ROOT_PATH . '/modules/rmgs/language/' . $xoopsConfig['language'] . '/admin.php')) {
	include_once XOOPS_ROOT_PATH. '/modules/rmgs/language/' . $xoopsConfig['language'] . '/admin.php';
} else {
	include_once XOOPS_ROOT_PATH . '/modules/rmgs/language/spanish/admin.php';
}

$mc =& $xoopsModuleConfig;
include '../include/rmgs_functions.php';

include XOOPS_ROOT_PATH.'/modules/rmgs/include/images_functions.php';
include_once XOOPS_ROOT_PATH.'/modules/rmgs/class/image.class.php';
include_once XOOPS_ROOT_PATH.'/modules/rmgs/class/catego.class.php';
include_once XOOPS_ROOT_PATH.'/modules/rmgs/class/data.class.php';
/**
 * Mostramos las imgenes que pertenecen a una
 * categora o bien la lista completa
 */
function rmgsShowImages(){
	global $xoopsDB, $mc;
	
	include_once XOOPS_ROOT_PATH.'/modules/rmgs/class/table.class.php';
	
	$cat = isset($_GET['cat']) ? $_GET['cat'] : 0;
	
	if ($cat<=0){
		redirect_header('categos.php', 2, _AS_RMGS_NOCATEGO);
		die();
	}
	
	$limit = 12;
	
	$pag = isset($_GET['pag']) ? $_GET['pag'] : 0;
	if ($pag > 0){ $pag -= 1; }
	$start = $pag * $limit;
	
	$catego = new GSCategory($cat);
	list($num) = $xoopsDB->fetchRow($xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("rmgs_imglink")." WHERE id_cat='$cat'"));
	$result = $xoopsDB->query("SELECT * FROM ".$xoopsDB->prefix("rmgs_imglink")." WHERE id_cat='$cat' LIMIT $start, $limit");
	$title = sprintf(_AS_RMGS_LISTTILE, $catego->getVar('nombre'));
	
	$rtotal = $num; // Numero total de resultados
	$tpages = (int)($num / $limit);
	if (($num % $limit) > 0){ $tpages++; }
	
	$pactual = $pag + 1;
	
	if ($pactual>$tpages){
		$rest = $pactual - $tpages;
		$pactual = $pactual - $rest + 1;
		$start = ($pactual - 1) * $limit;
	}
	
	xoops_cp_header();
	echo makeNav();
	
	echo "<table width='100%' class='outer' cellspacing='1'>
			<tr class='odd'><td align='left'>".sprintf(_AM_RMDP_PAGELOC, $pactual, $tpages)."</td>
			<td align='right'>"._AM_RMDP_GOPAGE;
		  for ($i=1;$i<=$tpages;$i++){
				echo "<a href='images.php?pag=$i&amp;cat=$cat'>$i</a>&nbsp;";
		  }
	echo "</td></tr></table>";
	
	$table = new GSTable(true);
	$table->setTableClass('outer');
	$table->setCellStyle("border-bottom: 1px solid #0066CC; border-right: 1px solid #0066CC; background: url(../images/bgth.jpg) repeat-x; height: 20px; color: #FFFFFF;");
	$table->openTbl('100%','',1);
	$table->openRow('left');
	$table->addCell($title, 1, 6);
	$table->closeRow();
	$table->setRowClass('head');
	$table->setCellStyle("border-bottom: 1px solid #DBE691; border-right: 1px solid #DBE691; background: url(../images/bghead.jpg) repeat-x; height: 20px; color: #000000;");
	$table->openRow('center');
	$table->addCell(_AS_RMGS_LIMAGE,0,'','center');
	$table->addCell(_AS_RMGS_LTITLE,0,'','center');
	$table->addCell(_AS_RMGS_LUSER,0,'','center');
	$table->addCell(_AS_RMGS_LACCES,0,'','center');
	$table->addCell(_AS_RMGS_LVOTES,0,'','center');
	$table->addCell(_AS_RMGS_LOPTIONS,0,'','center');
	$table->closeRow();
	$table->setRowClass('odd,even', true);
	$table->setCellStyle('');
	
	while ($row = $xoopsDB->fetchArray($result)){
		$table->openRow();
		$image = new GSImage($row['id_img']);
		$dir = rmgsMakeUserDir($image->getVar('uid'));
		$dir = str_replace(XOOPS_ROOT_PATH, "", $dir);
		$table->addCell("<a href='$dir/".$image->getVar('file')."' target='_blank'><img width='60' src='$dir/ths/".$image->getVar('file')."' /></a>",0,'','center');
		$table->addCell($image->getVar('title', 1),0,'','left');
		$xoopsUser = new XoopsUser($image->getVar('uid'));
		$table->addCell($xoopsUser->getVar('uname'));
		$table->addCell($image->getVar('downloads'));
		$table->addCell($image->getVar('votes'));
		if ($mc['othersizes']){
			$others = "&nbsp;<a href='?op=sizes&amp;id=$row[id_img]&amp;cat=$cat' title='"._AS_RMGS_FOTHERS."'><img src='../images/admin/sizes.png' border='0' alt='' /></a>";
		}
		$table->addCell("<a href='?op=edit&amp;id=$row[id_img]&amp;cat=$cat' title='"._AS_RMGS_EDIT."'><img src='../images/admin/edit.png' border='0' alt='' /></a>&nbsp;
					<a href='?op=del&amp;id=$row[id_img]&amp;cat=$cat' title='"._AS_RMGS_DELETE."'><img src='../images/admin/delete.png' border='0' alt='' /></a>" . $others,'0','','center');
		$table->closeRow();
	}
	
	$table->closeTbl();
	echo makeFoot();
	xoops_cp_footer();
}

/**
 * Mostramos la tabla para enviar nuevos archivos
 */
function rmgsUpload(){
	global $mc, $xoopsDB;
	
	xoops_cp_header();
	echo makeNav();
	echo "<form name='frmUpload' method='post' action='images.php' enctype='multipart/form-data'>
			<table width='100%' class='outer' cellspacing='1'>
			<tr><th colspan='3'>".sprintf(_AS_RMGS_UPLOADFORM, $mc['modtitle'])."</th></tr>
			<tr><td class='even' colspan='2'>&nbsp;</td><td rowspan='".($mc['uploads_cant']+1)."' class='odd' width='30%'>
			"._AS_RMGS_INDISC."<br /><br /><br />
			"._AS_RMGS_KEYS."<br /><br />
			<input type='text' name='keys' size='50' /><br /><br />
			"._AS_RMGS_CATEGOSP."<br /><br />
			<select name='cat[]' size='6' multiple='multiple'>";
	
	$dHand = new GSDataHandler($xoopsDB);
	$categos = $dHand->getCategos(0,0,true);
	foreach ($categos as $k){
		echo "<option value='$k[id_cat]'>".str_repeat("-", $k['space'])." $k[name]</option>";
	}
	echo "</select>
			</td></tr>";
			
	for ($i=1;$i<=$mc['uploads_cant'];$i++){
		echo "<tr><td align='right' class='even'>$i.</td>
				<td align='left' class='even'>
				<input type='file' name='img[]' size='40'></td></tr>";
	}
	echo "<tr class='even' align='center'><td colspan='3'>
			<input type='submit' name='sbt' value='"._AS_RMGS_SEND."' />
			<input type='button' name='cancel' value='"._AS_RMGS_CANCEL."' onclick='javascript: history.go(-1);' />
			</td></tr></table>
			<input type='hidden' name='op' value='uploadnow' /></form>";
	echo makeFoot();
	xoops_cp_footer();
}

/**
 * Guardamos las imgenes enviadas
 */
function rmgsSavePics(){
	global $xoopsDB, $xoopsUser, $mc;
	
	$save_dir = rmgsMakeUserDir($xoopsUser->getVar('uid'));
	
	foreach ($_FILES['img']['tmp_name'] as $k => $v){	
		if ($v != ''){
                  /**
		       * Creamos un nombre nico
		       */
			$split_name = explode('.',$_FILES['img']['name'][$k]);
		    $ext = strrchr($_FILES['img']['name'][$k], ".");
			$ext = strtolower($ext);
		    do
		          $newname = rmgsRandomWord(5, $split_name[0].'_') . $ext;
		    while (file_exists($save_dir . '/' . $newname));
		
		    /**
		     * Almacenamos la imgen
		     */
		    if (move_uploaded_file($v, $save_dir . '/' . $newname)){
		          //rmgsMakeFormats($save_dir . '/' , $newname);
                      rmgsImageResize($save_dir . '/' . $newname,$save_dir . '/' . $newname,$mc['imgwidth'],$mc['imgheight']);
                      //rmgsImageResize($save_dir . '/' . $newname,$save_dir . '/ths/' . $newname,$mc['thwidth'], $mc['thheight']);
					  resize_then_crop($save_dir . '/' . $newname,$save_dir . '/ths/' . $newname,$mc['thwidth'],$mc['thheight'],255,255,255);

		    }
		    
			/**
			 * Creamos la nueva imgen
			 */
		    $image = new GSImage();
		    
		    $image->setVar('title','');
		    $image->setVar('file', $newname);
		    $image->setVar('uid', $xoopsUser->getVar('uid'));
		    $image->setVar('date', time());
			$image->setVar('update', time());
		    $image->setVar('votes',0);
		    $image->setVar('downloads',0);
		    if (isset($_POST['cat'])){
            	$image->setVar('categos', $_POST['cat']);
            }
            $image->setVar('stringkeys', $_POST['keys']);
			$image->setVar('minkey',$mc['minkey']);
			$image->setVar('maxkey',$mc['maxkey']);
			$image->save();
		} 
	}
	redirect_header('categos.php', 1, _AS_RMGS_IMGOK);
	die();
}

/**
 * Editamos una imgen
 */
function rmgsEdit(){
	global $xoopsDB, $mc, $xoopsUser;
	
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$cat = isset($_GET['cat']) ? $_GET['cat'] : 0;
	if ($id<=0){
		redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_ERRID);
		die();
	}
	
	$image = new GSImage($id);
	if (!$image){
		redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_NOIMAGE);
		die();
	}
	
	// Obtenemos la ruta web
	$dir = rmgsMakeUserDir($xoopsUser->getVar('uid'));
	$dir = str_replace(XOOPS_ROOT_PATH, '', $dir);
	if (substr($dir, strlen($dir) - 1, 1) != '/'){
		$dir .= '/';
	}
	
	xoops_cp_header();
	echo makeNav();
	include_once XOOPS_ROOT_PATH.'/modules/rmgs/common/form.class.php';
	
	$form = new RMForm(_AS_RMGS_EDITIMG, 'frmEdit','images.php');
	$form->setExtra('enctype="multipart/form-data"');
	$form->addElement(new RMText(_AS_RMGS_FTITLE, 'titulo', 50, 150, $image->getVar('title')));
	$select = "<select name='idu'>";
	$result = $xoopsDB->query("SELECT uname, uid FROM ".$xoopsDB->prefix("users")." ORDER BY uname");
	while ($row = $xoopsDB->fetchArray($result)){
		if ($row['uid']==$image->getVar('uid')){
			$select .= "<option value='$row[uid]' selected='selected'>$row[uname]</option>";
		} else {
			$select .= "<option value='$row[uid]'>$row[uname]</option>";
		}
	}
	$select .= "</select>";
	$form->addElement(new RMLabel(_AS_RMGS_FUSER, $select));
	$fElement = new RMFile(_AS_RMGS_FFILE, 'file', 45);
	$fElement->setDescription(_AS_RMGS_FFILEDESC);
	$form->addElement($fElement);
	$form->addElement(new RMLabel(_AS_RMGS_FAFILE, "<a href='$dir".$image->getVar('file')."' target='_blank'>".$image->getVar('file')."</a>"));
	$form->addElement(new RMText(_AS_RMGS_FKEYS, 'keys', 50, '', $image->getVar('stringkeys')));
	// Cargamos las categoras a las que pertence
	$select = "<select name='cats[]' size='8' multiple='multiple'>";
	$dHand = new GSDataHandler($xoopsDB);
	$categos = $dHand->getCategos(0,0,true);
	$imgCat = $image->getVar('categos');
	foreach ($categos as $k => $v){
		if (in_array($v['id_cat'], $imgCat)){
			$select .= "<option value='$v[id_cat]' selected='selected'>".str_repeat('-',$v['space'])." $v[name]</option>";
		} else {
			$select .= "<option value='$v[id_cat]'>".str_repeat('-',$v['space'])." $v[name]</option>";
		}
	}
	$select .= "</select>";
	$form->addElement(new RMLabel(_AS_RMGS_FCATEGOS, $select));
	
	$form->addElement(new RMLabel('',"<input type='submit' name='sbt' value='"._AS_RMGS_SEND."' class='formButton' /> &nbsp;<input type='button' name='cancel' value='"._AS_RMGS_CANCEL."' onclick='javascript: history.go(-1);' />"));
	$form->addElement(new RMHidden('op','saveedit'));
	$form->addElement(new RMHidden('id',$image->getVar('id')));
	$form->addElement(new RMHidden('cat',$cat));
	$form->display();
	echo makeFoot();
	xoops_cp_footer();
	
}

/**
 * Funcin para guardar los cambios realizados a
 * una imgen especifica
 */
function rmgsSaveEdited(){
	global $xoopsDB, $xoopsUser, $mc;
	
	foreach ($_POST  as $k => $v){ $$k = $v; }
	
	if ($id<=0){ redirect_header('categos.php?id='.$cat, 1, _AS_RMGS_ERRID); die(); }
	
	$image = new GSImage($id);
	
	if (!$image){
		redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_NOIMAGE);
		die();
	}
	
	$dir = rmgsMakeUserDir($xoopsUser->getVar('uid'));
	$dir = rmgsAddSlash($dir);
	
	$newname = $image->getVar('file');
	
	if (is_uploaded_file($_FILES['file']['tmp_name'])){
		// Guardamos el archivo
		$split_name = explode('.',$_FILES['file']['name']);
		$ext = strrchr($_FILES['file']['name'], ".");
		do
			$newname = rmgsRandomWord(5, $split_name[0].'_') . $ext;
		while (file_exists($dir  . $newname));
		
		/**
		 * Almacenamos la imgen
		 */
		if (move_uploaded_file($_FILES['file']['tmp_name'], $dir . $newname)){
			//rmgsMakeFormats($save_dir . '/' , $newname);
            rmgsImageResize($dir . $newname, $dir . $newname,$mc['imgwidth'],$mc['imgheight']);
            //rmgsImageResize($dir . $newname, $dir . 'ths/' . $newname,$mc['thwidth'], $mc['thheight']);
			resize_then_crop($dir . '/' . $newname,$dir . '/ths/' . $newname,$mc['thwidth'],$mc['thheight'],255,255,255);
		} else {
			redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_ERRUPLOAD);
			die();
		}
		
		// Eliminamos el archivo anterior
		unlink($dir . $image->getVar('file'));
		unlink($dir . 'ths/' . $image->getVar('file'));
	}
	
	$image->setVar('title', $titulo);
	$image->setVar('file', $newname);
	$image->setVar('uid', $idu);
	$image->setVar('categos', $cats);
	$image->setVar('stringkeys', $keys);
	$image->setVar('maxkey',$mc['maxkey']);
	$image->setVar('minkey',$mc['minkey']);
	if ($image->savechanges()){
		redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_IMGMODOK);
		die();	
	} else {
		redirect_header('images.php?cat='.$cat, 2, sprintf(_AS_RMGS_ERRDB, $xoopsDB->error()));
		die();
	}
	
}

/** 
 * Eliminar una imgen
 */
function rmgsDelete(){
	$id = isset($_GET['id']) ? $_GET['id'] : (isset($_POST['id']) ? $_POST['id'] : 0);
	$cat = isset($_GET['cat']) ? $_GET['cat'] : (isset($_POST['cat']) ? $_POST['cat'] : 0);
	$ok = isset($_POST['ok']) ? $_POST['ok'] : 0;
	
	if ($ok){
		$image = new GSImage($id);
		$image->delete();
		redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_DELOK);
		die();
	} else {
		xoops_cp_header();
		echo makeNav();
		echo "<div class='confirmMsg' align='center'>
				<form name='frmDel' method='post' action='images.php'>
				"._AS_RMGS_DELCONFIRM."<br /><br />
				<input type='submit' name='sbt' value='"._AS_RMGS_SEND."' />
				<input type='button' name='cancel' value='"._AS_RMGS_CANCEL."' onclick='javascript: history.go(-1);' />
				<input type='hidden' name='op' value='del' />
				<input type='hidden' name='ok' value='1' />
				<input type='hidden' name='id' value='$id' />
				<input type='hidden' name='cat' value='$cat' />
				<br /></form></div>";
		echo makeFoot();
		xoops_cp_footer();
	}
	
	if ($id<=0){ header('location: images.php?cat='.$cat); die(); }
	
	
}

/**
 * Mostramos otros tamaos para las imgenes
 */
function rmgsSizes(){
	global $xoopsDB, $mc;
	
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$cat = isset($_GET['cat']) ? $_GET['cat'] : 0;
	
	if (!$mc['sizes_local']){
		header('location: images.php?cat='.$cat);
		die();
	}
	
	if ($id<=0){
		redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_ERRID);
		die();
	}
	
	$image = new GSImage($id);
	if (!$image){
		redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_NOIMAGE);
		die();
	}
	
	xoops_cp_header();
	echo makeNav();
	$dir = rmgsWebDir($image->getVar('uid'));
	$dir = rmgsAddSlash($dir) . 'sizes/';
	echo "<div align='right'><a href='images.php?cat=$cat&amp;id=".$image->getVar('id')."'>"._AS_RMGS_BACK."</a></div>";
	echo "<table width='100%' class='outer' cellspacing='1'>
			<tr><th colspan='4'>".$image->getVar('title')." - "._AS_RMGS_FOTHERS."</th></tr>";
	foreach ($image->getSizes() as $k => $v){
		echo "<tr class='odd'><td align='center' width='28'>";
		if ($v['type']==0){
			echo "<img src='../images/admin/img.png' border='0' />";
		} else {
			echo "<img src='../images/admin/file.png' border='0' />";
		}
		echo "</td><td align='left'>";
		if ($v['type']==0){
			echo "<a target='_blank' href='".$dir.$v['file']."'>$v[titulo]</a>";
		} else {
			echo "<a href='$v[file]' target='_blank'>$v[titulo]</a>";
		}
		echo "</td>
				<td align='center'>".($v['type']==0 ? _AS_RMGS_LOCALSIZE : _AS_RMGS_REMOTESIZE)."</td><td align='center'>
				<a href='?op=delsize&amp;id=$v[id_size]&amp;img=".$image->getVar('id')."&amp;cat=$cat'>"._AS_RMGS_DELETE."</a>
				</td></tr>";
	}
	echo "</table>";
	
	if ($image->getSizesCount()<$mc['sizes']){
		echo "<br /><br />";
		include XOOPS_ROOT_PATH . '/modules/rmgs/common/form.class.php';
		$form = new RMForm(_AS_RMGS_ADDSIZE, 'frmAdd','images.php?op=addsize');
		$form->setExtra('enctype="multipart/form-data"');
		$form->addElement(new RMText(_AS_RMGS_FTITLE, 'titulo', 50, 50));
		if ($mc['sizes_local']){
			$form->addElement(new RMFile(_AS_RMGS_FFILE, 'file', 45));
		}
		$form->addElement(new RMText(_AS_RMGS_FFILE_URL, 'file_url', 50, 255));
		$form->addElement(new RMHidden('img', $image->getVar('id')));
		$form->addElement(new RMHidden('cat', $cat));
		$form->addElement(new RMButton('sbt', _AS_RMGS_SEND));
		$form->display();
	}
	
	echo makeFoot();
	xoops_cp_footer();
	
}

/**
 * Agregamos un nuevo tamao de imgen
 */
function rmgsAddSize(){
	global $xoopsDB, $mc, $xoopsUser;
	
	foreach ($_POST as $k => $v){ $$k = $v; }
	
	if (!$mc['othersizes']){
		header('location: images.php?cat='.$cat);
		die();
	}
	
	if ($img<=0){ redirect_header('categos.php', 1, _AS_RMGS_ERRID); die(); }
	if ($titulo==''){ redirect_header('images.php?op=sizes&amp;id='.$img, 1, _AS_RMGS_ERRTITLE); die(); }
	
	$image = new GSImage($img);
	
	if (!$image){
		redirect_header('categos.php', 1, _AS_RMGS_NOIMAGE);
		die();
	}
	
	/**
	 * Comprobamos que se haya proporcionado un archivo
	 */
	if ($mc['sizes_local'] && $file_url==''){
		$dir = rmgsMakeUserDir($image->getVar('uid'));
		$dir = rmgsAddSlash($dir) . 'sizes/';
	
		if (is_uploaded_file($_FILES['file']['tmp_name'])){
			$split_name = explode(".",$_FILES['file']['name']);
			$ext = $split_name[1];
			do
				$newname = rmgsRandomWord(5, $split_name[0].'_') . "." . $ext;
			while (file_exists($dir  . $newname));
	
			if (!move_uploaded_file($_FILES['file']['tmp_name'], $dir . $newname)){
				redirect_header('images.php?op=sizes&amp;cat='.$cat.'&amp;id='.$img, 1, _AS_RMGS_ERRUPLOAD);
				die();
			}
		} else {
			redirect_header('images.php?op=sizes&amp;cat='.$cat.'&amp;id='.$img, 1, _AS_RMGS_ERRFILE);
			die();
		}
		$type = 0;
	} elseif ($file_url!=''){
		$newname = $file_url;
		$type = 1;
	} else {
		redirect_header('images.php?op=sizes&amp;cat='.$cat.'&amp;id='.$img, 1, _AS_RMGS_ERRFILE);
		die();
	}
	
	if ($image->addSize($titulo, $newname, $type)){
		redirect_header('?op=sizes&amp;cat='.$cat.'&amp;id='.$img, 1, '');
		die();
	} else {
		redirect_header('?op=sizes&amp;cat='.$cat.'&amp;id='.$img, 2, sprintf(_AS_RMGS_ERRDB, $image->errors()));
		die();
	}
	
}

/**
 * Eliminamos un tamao
 */
function rmgsDelSize(){
	global $xoopsDB;
	
	$img = isset($_GET['img']) ? $_GET['img'] : (isset($_POST['img']) ? $_POST['img'] : 0);
	$id = isset($_GET['id']) ? $_GET['id'] : (isset($_POST['id']) ? $_POST['id'] : 0);
	$cat = isset($_GET['cat']) ? $_GET['cat'] : (isset($_POST['cat']) ? $_POST['cat'] : 0);
	$ok = isset($_GET['ok']) ? $_GET['ok'] : (isset($_POST['ok']) ? $_POST['ok'] : 0);
	
	if ($img<=0){ redirect_header('images.php?cat='.$cat, 1, _AS_RMGS_ERRID); die(); }
	if ($id<=0){ redirect_header('images.php?op=sizes&amp;id='.$img.'&amp;cat='.$cat, 1, _AS_RMGS_ERRSIZE); die(); }
	
	if ($ok){
		$xoopsDB->query("DELETE FROM ".$xoopsDB->prefix("rmgs_sizes")." WHERE id_size='$id'");
		redirect_header("images.php?op=sizes&amp;id=$img&amp;cat=$cat", 1, '');
		die();
	} else {
		xoops_cp_header();
		echo makeNav();
		echo "<table width='60%' class='outer' align='center' cellspacing='1'>
				<tr align='center' class='even'><td>
					<form name='frmDel' method='post' action='images.php?op=delsize'>
					<br />"._AS_RMGS_DELELEMENT."<br /><br />
					<input type='submit' name='sbt' value='"._AS_RMGS_SEND."' /> 
					<input type='button' name='cancel' value='"._AS_RMGS_CANCEL."' onclick='javascript: history.go(-1);' />
					<input type='hidden' name='id' value='$id' />
					<input type='hidden' name='img' value='$img' />
					<input type='hidden' name='cat' value='$cat' />
					<input type='hidden' name='ok' value='1' />
					<br /><br /></form></td></tr></table>";
		echo makeFoot();
		xoops_cp_footer();
	}	
	
}

$op = isset($_GET['op']) ? $_GET['op'] : (isset($_POST['op']) ? $_POST['op'] : '');

switch ($op){
	case 'upload':
		rmgsUpload();
		break;
	case 'uploadnow':
		rmgsSavePics();
		break;
	case 'edit':
		rmgsEdit();
		break;
	case 'saveedit':
		rmgsSaveEdited();
		break;
	case 'sizes':
		rmgsSizes();
		break;
	case 'addsize':
		rmgsAddSize();
		break;
	case 'delsize';
		rmgsDelSize();
		break;
	case 'del':
		rmgsDelete();
		break;
	default:
		rmgsShowImages();
		break;
}

?>
