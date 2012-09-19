<?php
/*******************************************************************
* $Id: table.class.php,v 1.0.2 24/05/2006 00:42 BitC3R0 Exp $      *
* -----------------------------------------------------------      *
* RMSOFT MyFolder 1.0                                              *
* Módulo para el manejo de un portafolio profesional               *
* CopyRight Š 2006. Red México Soft                                *
* Autor: BitC3R0                                                   *
* http://www.redmexico.com.mx                                      *
* http://www.xoops-mexico.net                                      *
* --------------------------------------------                     *
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
* -----------------------------------------------------------      *
* table.class.php:                                                 *
* Clase para el manejo de tablas HTML                              *
* -----------------------------------------------------------      *
* @copyright: Š 2006. BitC3R0.                                     *
* @autor: BitC3R0                                                  *
* @paquete: RMSOFT MyFolder v1.0                                   *
* @version: 1.0.2                                                  *
* @modificado: 24/05/2006 12:42:03 a.m.                            *
*******************************************************************/

include_once XOOPS_ROOT_PATH.'/modules/rmmf/class/object.class.php';

class MFTable extends MFObject
{
	var $_rows = array();
	var $_current = array();
	var $_display = false;
	
	function MFTable($display=false){
		$this->initVar('style_table','');
		$this->initVar('style_row','');
		$this->initVar('style_cell','');
		$this->initVar('tbl_class','');
		$this->initVar('row_class','');
		$this->initVar('cell_class','');
		$this->initVar('cycle_cell','');
		$this->initVar('cycle_row','');
		
		$this->setTableClass('outer');
		$this->setRowClass('even,odd',true);
		$this->setCellClass('',false);
		$this->_display = $display;
		$this->_current[0] = 0;
		$this->_current[1] = 0;
	}
	
	/**
	 * Modificamos el estilo de la tabla
	 */
	function setTableStyle($style){
		$this->setVar('style_table', $style);
	}
	function getTableStyle(){
		return $this->getVar('style_table');
	}
	/**
	 * Modificamos el estilo de la fila
	 */
	function setRowStyle($style){
		$this->setVar('style_row', $style);
	}
	function getRowStyle(){
		return $this->getVar('style_row');
	}
	/** 
	 * Modificamos el estilo de la celda
	 */
	function setCellStyle($style){
		$this->setVar('style_cell', $style);
	}
	function getCellStyle(){
		return $this->getVar('style_cell');
	}
	/**
	 * Modificamos la clase de los elementos
	 */
	function setTableClass($class){
		$this->setVar('tbl_class',$class);
	}
	function getTableClass(){
		return $this->getVar('tbl_class');
	}
	/**
	 * Modificamos la clase de los elementos
	 * @param string $class Nombre de la clase. Puede ser una lista de nombres
	 *			delimitados por comas
	 * @param boolean $cycle Establece si las clases se intercalan
	 */
	function setRowClass($class, $cycle=false){
		$this->setVar('row_class',$class);
		$this->setVar('cycle_row', $cycle);
	}
	function getRowClass(){
		return $this->getVar('tbl_class');
	}
	/**
	 * Modificamos la clase de los elementos
	 * @param string $class Nombre de la clase. Puede ser una lista de nombres
	 *			delimitados por comas
	 * @param boolean $cycle Establece si las clases se intercalan
	 */
	function setCellClass($class, $cycle=false){
		$this->setVar('cell_class',$class);
		$this->setVar('cycle_cell', $cycle);
	}
	function getCellClass($class){
		return $this->getVar('cell_class');
	}
	/**
	 * Abrimos una tabla
	 */
	function openTbl($width = "100%", $align = "center", $spacing = "1", $padding = "0", $border = "0"){
		$rtn = "<table ";
		if ($this->getVar('tbl_class')!=''){
			$rtn .= "class='".$this->getVar('tbl_class')."' ";
		}
		if ($this->getVar('style_table')!=''){
			$rtn .= 'style="'.$this->getVar('style_table').'" ';
		}
		if ($width!=''){ $rtn .= 'width="'.$width.'" '; }
		if ($align!=''){ $rtn .= 'align="'.$align.'" '; }
		if ($spacing!=''){ $rtn .= 'cellspacing="'.$spacing.'" '; }
		if ($padding!=''){ $rtn .= 'cellpadding="'.$padding.'" '; }
		if ($border!=''){ $rtn .= 'border="'.$border.'" '; }
		$rtn .= '>';
		if ($this->_display){
			echo $rtn;
		} else {
			return $rtn;
		}
	}
	/**
	 * Cerramos una tabla
	 */
	function closeTbl(){
		if ($this->_display){
			echo "</table>";
		} else {
			return "</table>";
		}
	}
	/**
	 * Abrimos una celda
	 */
	function openRow($align=''){
		$rtn = '<tr';
		if ($align!=''){ $rtn .= ' align="'.$align.'"'; }
		if ($this->getVar('style_row')!=''){ $rtn .= ' style="'.$this->getVar('style_row').'"'; }
		$rtn .= $this->generateClass(0) .">";
		if ($this->_display){
			echo $rtn;
		} else {
			return $rtn;
		}
	}
	function closeRow(){
		if ($this->_display){
			echo "</tr>";
		} else {
			return "</tr>";
		}
	}
	/**
	 * Abrimos una celda
	 */
	function addCell($texto, $type=0,$colspan='',$align='left',$valign='middle',$width=''){
		$rtn = '';
		if ($type==0){ $rtn = '<td '; } else { $rtn .= '<th '; }
		if ($colspan!=''){ $rtn .= 'colspan="'.$colspan.'" '; }
		if ($align!=''){ $rtn .= 'align="'.$align.'" '; }
		if ($valign!=''){ $rtn .= 'valign="'.$valign.'" '; }
		if ($width!=''){ $rtn .= 'width="'.$width.'" '; }
		if ($this->getVar('style_cell')!=''){ $rtn .= 'style="'.$this->getVar('style_cell').'" '; }
		$rtn .= $this->generateClass(1) .">$texto</td>";
		
		if ($this->_display){
			echo $rtn;
		} else {
			return $rtn;
		}
	}
	/**
	 * Generamos la clase para un elemento
	 * @param int $q 0 = fila, 1 = celda
	 */
	function generateClass($q){
		if ($q==0){
			$cc = $this->getVar('row_class');
			$cy = $this->getVar('cycle_row');
		} else {
			$cc = $this->getVar('cell_class');
			$cy = $this->getVar('cycle_cell');
		}
		if ($cc==''){ return; }
		
		if (!$cy){ return ' class="'.$cc.'"'; }
		
		$class = explode(",",$cc);
		if (count($class)==1){ return $cc; }
		if ($this->_current[$q] >= count($class) - 1){
			$this->_current[$q] = 0;
		} else {
			$this->_current[$q]++;
		}
		return ' class="'.$class[$this->_current[$q]].'"';
	}
	
}
?>