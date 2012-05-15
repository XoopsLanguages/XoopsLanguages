<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:			The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:				http://www.fsf.org/copyleft/gpl.html GNU public license
* @module:				Smallworld
* @Author:				Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:			2011 Culex
* @Repository path:		$HeadURL$
* @Last committed:		$Revision$
* @Last changed by:		$Author$
* @Last changed date:	$Date$
* @ID:					$Id$
**/

class SmallworldUploadHandler
{
    private $upload_dir;
    private $upload_url;
    private $thumbnails_dir;
    private $thumbnails_url;
    private $thumbnail_max_width;
    private $thumbnail_max_height;
    private $field_name;
    
    function __construct($options) {
        $this->upload_dir = $options['upload_dir'];
        $this->upload_url = $options['upload_url'];
        $this->thumbnails_dir = $options['thumbnails_dir'];
        $this->thumbnails_url = $options['thumbnails_url'];
        $this->thumbnail_max_width = $options['thumbnail_max_width'];
        $this->thumbnail_max_height = $options['thumbnail_max_height'];
        $this->field_name = $options['field_name'];
    }
    
    private function get_file_object($file_name) {
        $file_path = $this->upload_dir.$file_name;
        if (is_file($file_path) && $file_name[0] !== '.' && $file_name !='index.html' && $file_name !='Thumbs.db') {
            $file = new stdClass();
            $file->name = $file_name;
            $file->size = filesize($file_path);
            $file->url = $this->upload_url.rawurlencode($file->name);
            $file->thumbnail = is_file($this->thumbnails_dir.$file_name) ?
                $this->thumbnails_url.rawurlencode($file->name) : null;
            return $file;
        }
        return null;
    }

    private function create_thumbnail($file_name) {
        $file_path = $this->upload_dir.$file_name;
        $thumbnail_path = $this->thumbnails_dir.$file_name;
        list($img_width, $img_height) = @getimagesize($file_path);
        if (!$img_width || !$img_height) {
            return false;
        }
        $scale = min(
            $this->thumbnail_max_width / $img_width,
            $this->thumbnail_max_height / $img_height
        );
        if ($scale > 1) {
            $scale = 1;
        }
        $thumbnail_width = $img_width * $scale;
        $thumbnail_height = $img_height * $scale;
        $thumbnail_img = @imagecreatetruecolor($thumbnail_width, $thumbnail_height);
        switch (strtolower(substr(strrchr($file_name, '.'), 1))) {
            case 'jpg':
            case 'jpeg':
                $src_img = @imagecreatefromjpeg($file_path);
                $write_thumbnail = 'imagejpeg';
                break;
            case 'gif':
                $src_img = @imagecreatefromgif($file_path);
                $write_thumbnail = 'imagegif';
                break;
            case 'png':
                $src_img = @imagecreatefrompng($file_path);
                $write_thumbnail = 'imagepng';
                break;
            default:
                $src_img = $write_thumbnail = null;
        }
        $success = $src_img && @imagecopyresampled(
            $thumbnail_img,
            $src_img,
            0, 0, 0, 0,
            $thumbnail_width,
            $thumbnail_height,
            $img_width,
            $img_height
        ) && $write_thumbnail($thumbnail_img, $thumbnail_path);
        // Free up memory (imagedestroy does not delete files):
        @imagedestroy($src_img);
        @imagedestroy($thumbnail_img);
        return $success;
    }
    
	//function to return file extension from a path or file name
	function getFileExtension($path){
	  $parts=pathinfo($path);
	  return $parts['extension'];
	}
	
    private function handle_file_upload($uploaded_file, $name, $size, $type, $error) {
        global $xoopsUser;
		$file = new stdClass();
		$db   = new SmallWorldDB;
		$userid = $xoopsUser->getVar('uid');
		
		// Generate new name for file
        //$file->name = basename(stripslashes($name));
		$file->name = time().rand(0,99999).".".$this->getFileExtension($name);			 
        $file->size = intval($size);
        $file->type = $type;
		$img = XOOPS_URL."/uploads/albums_smallworld/".$userid."/".$file->name;
		
		// Save to database for later use
		$db->saveImage ("'', '".$userid."', '".$file->name."', '".addslashes($img)."', '".time()."', ''");
		
        if (!$error && $file->name) {
            if ($file->name[0] === '.') {
                $file->name = substr($file->name, 1);
            }
            $file_path = $this->upload_dir.$file->name;
            $append_file = is_file($file_path) && $file->size > filesize($file_path);
            clearstatcache();
            if ($uploaded_file && is_uploaded_file($uploaded_file)) {
                // multipart/formdata uploads (POST method uploads)
                if ($append_file) {
                    file_put_contents(
                        $file_path,
                        fopen($uploaded_file, 'r'),
                        FILE_APPEND
                    );
                } else {
                    move_uploaded_file($uploaded_file, $file_path);
                }
            } else {
                // Non-multipart uploads (PUT method support)
                file_put_contents(
                    $file_path,
                    fopen('php://input', 'r'),
                    $append_file ? FILE_APPEND : 0
                );
            }
            $file_size = filesize($file_path);
            if ($file_size === $file->size) {
                $file->url = $this->upload_url.rawurlencode($file->name);
                $file->thumbnail = $this->create_thumbnail($file->name) ?
                    $this->thumbnails_url.rawurlencode($file->name) : null;
            }
            $file->size = $file_size;
        } else {
            $file->error = $error;
        }
        return $file;
    }
    
    public function get() {
        $file_name = isset($_REQUEST['file']) ?
            basename(stripslashes($_REQUEST['file'])) : null; 
        if ($file_name) {
            $info = $this->get_file_object($file_name);
        } else {
            $info = array_values(array_filter(array_map(
                array($this, 'get_file_object'),
                scandir($this->upload_dir)
            )));
        }
        header('Cache-Control: no-cache, must-revalidate');
        header('Content-type: application/json');
        echo json_encode($info);
    }
    
    public function post() {
        $upload = isset($_FILES[$this->field_name]) ?
            $_FILES[$this->field_name] : array(
                'tmp_name' => null,
                'name' => null,
                'size' => null,
                'type' => null,
                'error' => null
            );
        if (is_array($upload['tmp_name']) && count($upload['tmp_name']) > 1) {
            $info = array();
            foreach ($upload['tmp_name'] as $index => $value) {
                $info[] = $this->handle_file_upload(
                    $upload['tmp_name'][$index],
                    $upload['name'][$index],
                    $upload['size'][$index],
                    $upload['type'][$index],
                    $upload['error'][$index]
                );
            }
        } else {
            if (is_array($upload['tmp_name'])) {
                $upload = array(
                    'tmp_name' => $upload['tmp_name'][0],
                    'name' => $upload['name'][0],
                    'size' => $upload['size'][0],
                    'type' => $upload['type'][0],
                    'error' => $upload['error'][0]
                );
            }
            $info = $this->handle_file_upload(
                $upload['tmp_name'],
                isset($_SERVER['HTTP_X_FILE_NAME']) ?
                    $_SERVER['HTTP_X_FILE_NAME'] : $upload['name'],
                isset($_SERVER['HTTP_X_FILE_SIZE']) ?
                    $_SERVER['HTTP_X_FILE_SIZE'] : $upload['size'],
                isset($_SERVER['HTTP_X_FILE_TYPE']) ?
                    $_SERVER['HTTP_X_FILE_TYPE'] : $upload['type'],
                $upload['error']
            );
        }
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
                $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            header('Content-type: application/json');
        } else {
            header('Content-type: text/plain');
        }
        echo json_encode($info);
    }
    
    public function delete() {
		global $xoopsUser;
		$userid = $xoopsUser->getVar('uid');
		$db   	= new SmallWorldDB;
        $file_name = isset($_REQUEST['file']) ?
            basename(stripslashes($_REQUEST['file'])) : null;
        $file_path = $this->upload_dir.$file_name;
		$img = XOOPS_URL."/uploads/albums_smallworld/".$userid."/".$file->name;
		
		// Delete file based on user and filename
			$db->DeleteImage ($userid, $file_name);
			$db->DeleteImage ($userid, 'Thumbs.db');
        $thumbnail_path = $this->thumbnails_dir.$file_name;
        $success = is_file($file_path) && $file_name[0] !== '.' && unlink($file_path);
        if ($success && is_file($thumbnail_path)) {
            unlink($thumbnail_path);
        }
        header('Content-type: application/json');
        echo json_encode($success);
    }
}
?>