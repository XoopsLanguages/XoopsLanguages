<?php
/**
 * ****************************************************************************
 * boox - MODULE FOR XOOPS
 * Copyright (c) Hervé Thouzard (http://www.herve-thouzard.com)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard (http://www.herve-thouzard.com)
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 * @package         boox
 * @author 			Hervé Thouzard (http://www.herve-thouzard.com)
 *
 * Version : $Id:
 * ****************************************************************************
 */

if (!defined('XOOPS_ROOT_PATH')) {
	die('XOOPS root path not defined');
}

class boox_storage
{
	var $files;		// Holds files
	var $filename;	// Name of the file wich contains all the other files

	function boox_storage()
	{
		$this->filename = XOOPS_UPLOAD_PATH.'/boox_files.php';
	}

	/**
 	 * Get all the files
 	 */
	function getAllFiles()
	{
		$ret = $tbl_files_list = array();
		$myts =& MyTextSanitizer::getInstance();
		if(file_exists($this->filename)) {
			include_once $this->filename;
			foreach($tbl_files_list as $onefile) {
				if(xoops_trim($onefile)!='') {
					$onefile=$myts->htmlSpecialChars($onefile);
					$ret[$onefile]=$onefile;
				}
			}
		}
		asort($ret);
		$this->files=$ret;
		return $ret;
	}

	/**
 	 * Remove one or many files from the list
 	 */
	function delete($file)
	{
		if(is_array($file)) {
			foreach($file as $onefile) {
				if(isset($this->files[$onefile])) {
					unset($this->files[$onefile]);
				}
			}
		} else {
			if(isset($this->files[$file])) {
				unset($this->files[$file]);
			}
		}
	}

	/**
 	 * Add one or many Files
 	 */
	function addfiles($file)
	{
		$myts =& MyTextSanitizer::getInstance();
		if(is_array($file)) {
			foreach($file as $onefile) {
				$onefile=xoops_trim($myts->htmlSpecialChars($onefile));
				$this->files[$onefile]=$onefile;
			}
		} else {
			$file=xoops_trim($myts->htmlSpecialChars($file));
			$this->files[$file]=$file;
		}

	}


	/**
 	 * Save files
 	 */
	function store()
	{
		if(file_exists($this->filename)) {
			unlink($this->filename);
		}
		$fd = fopen($this->filename,'w') or die('Error unable to create storage files list');
		fputs($fd,"<?php\n");
		fputs($fd,'$tbl_files_list = array('."\n");
		foreach($this->files as $onefile) {
			fputs($fd,"\"".$onefile."\",\n");
		}
		fputs($fd,"'');\n");
		fputs($fd,"?>\n");
		fclose($fd);
	}
}
?>