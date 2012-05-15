<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:            The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:                http://www.fsf.org/copyleft/gpl.html GNU public license
* @module:                Smallworld
* @Author:                Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:            2011 Culex
* @Repository path:        $HeadURL$
* @Last committed:        $Revision$
* @Last changed by:        $Author$
* @Last changed date:    $Date$
* @ID:                    $Id$
**/

 
class SmallWorldForm
{    
    /**
     * @create a dropdown select
     * @param string $name
     * @param array $options
     * @param string $selected (optional)
     * @return string
     */
    function dropdown( $name, array $options, $selected=null ){
        $dropdown = '<select name="'.$name.'" id="'.$name.'">'."<br>";
        $selected = $selected;
        foreach( $options as $key=>$option ) {
            $select = $selected==$key ? ' selected="yes"' : "";
            $dropdown .= '<option value="'.$key.'"'.$select.'>'.$option.'</option>'."<br>";
        }
        $dropdown .= '</select>'."<br>";
        return $dropdown;
    }
    
    /**
     * @create a radio select
     * @param string $name
     * @param array $options
     * @param string $selected (optional)
     * @return string
     */         
    function radio($name, array $options, $selected=null)
    {
        $selected = $selected;
        $form="";
        foreach( $options as $value=>$option) {
        $select = $selected==$value ? ' checked="checked"' : ' checked="unchecked"';
        $form .= '<input type="checkbox" name="'.$name.'[]" id="'.$name.'" value="'.$value.'" '.$select.'> '.$option.'<br/>';
        }
        return $form;
    }
    
    /**
     * @param string $name
     * @param array $options
     * @param array $valuearray
     * @param string $selected (optional)
     * @return string
     */
    function RetrieveRadio($name, $options, $valuearray, $selected=null){
        $form = '';
        $a = count($options)-1;
        for ($i = 0;$i<=$a;$i++) {
            if (in_array($i,$valuearray)) {
                $form .= '<input type="checkbox" id="'.$name.'-'.$i.'" name="'.$name.'[]" value="'.$i.'" checked="checked"/>'.$options[$i]."<br/>";
            } else {
                $form .= '<input type="checkbox" id="'.$name.'-'.$i.'" name="'.$name.'[]" value="'.$i.'" />'.$options[$i]."<br/>";
            }
        }
        return $form;
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $class
     * @param int $size (optional)
     * @param string $preset (optional)
     * @return string
     */     
    function input($name, $id, $class,$size=null, $preset=null) 
    {
        $s = $size ? $size:'50px';
        $data = "<input type='text' size='".$s."' name='".$name."' id='".$id."' class='".$class."' value='".$preset."' />";
        return $data;
    }

    /**
     * @param string $name
     * @param string $id
     * @param string $preset (optional)
     * @return string
     */      
    function hidden($name, $id, $preset=null)
    {
        $data = "<input type='hidden' name='".$name."' value='".$preset."' />";
        return $data;
    }

    /**
     * @param string $value
     * @return string
     */    
    function simpleText ($value) {
        $data = $value;
        return $data;
    }

    /**
     * @return as dropdown
     * @param string $class
     * @param string $name
     * @param string $nametwo
     * @param string $rel
     * @param array $options
     * @param string $textmore
     * @param string $selected (optional)
     * @param string $preset (optional)
     * @return string
     */        
    function dropdown_add ($class, $name, $name2, $rel, array $options, $textmore, $selected = null, $preset = null) 
    {
        $dropdown = '<span id="'.$name.'"><input type="text" name="'.$name2.'[]" value="'.$preset.'"/>';
        $dropdown .= '<select class="smallworld_select" name="'.$name.'[]" id="'.$name.'"></p>'."<br>";
        foreach( $options as $key=>$option ) {
            $select = $selected==$key ? ' selected' : null;
            $dropdown .= '<option value="'.$key.'"'.$select.'>'.$option.'</option>'."<br>";
        }
        $dropdown .= '</select></span>';
        return $dropdown;
    }
        
    /**
     * @return dynamic inputs
     * @param string $class
     * @param string $name
     * @param string $nametwo
     * @param string $rel
     * @param int $size
     * @param string $textmore
     * @param string $preset (optional)
     * @param string $id (optional)
     * @return string
     */  
    function input_add($class, $name, $name2, $rel, $size, $textmore, $preset=null,$id=null) 
    {
        $s = $size ? $size:'50px';
        $i = $id ? $id:'';
        $data = "<span id='".$name."'><input type='text' size='".$s."' name='".$name2."[]' value='".$preset."' id='".$i."'/></span>";
        return $data;
    }

    /**
     * @return textarea
     * @param string $name
     * @param string $id
     * @param string $title
     * @param string $rows
     * @param string $cols
     * @param string $class
     * @param string $preset (optional)
     * @return string
     */        
    function textarea($name, $id, $title, $rows, $cols, $class,$preset = null) {
        return "<textarea name='".$name."' id='".$id."'  title='".$title."' rows='".$rows."' cols='".$cols."' class='".$class."'>".$preset."</textarea>";
    }

    /**
     * @return dynamic dropdown
     * @param string $class
     * @param string $name
     * @param string $name2
     * @param string $rel
     * @param array $options
     * @param string $textmore
     * @param string $selected (optional)
     * @param string $preset (optional)
     * @param string $selectedstart (optional)
     * @param string $selectedstop (optional)
     * @return string
     */       
    function school_add ($class, $name, $name2, $rel, array $options, 
        $textmore, $selected=null,$preset=null,$selectedstart=null,$selectedstop=null
    ) 
    {
        $dropdown = '<div id="'.$name.'"><p class="smallworld_clonebreaker">'._SMALLWORLD_SCHOOLNAME.'<input class="school" type="text" value="'.$preset.'" name="'.$name2.'[]"/>';
        $dropdown .= '<br><br>'._SMALLWORLD_SCHOOLTYPE.'<select class="school" name="'.$name.'[]" id="'.$name.'"">'."<br>";
        foreach( $options as $key=>$option ) {
            $select = $selected==$key ? ' selected="selected"' : null;
            $dropdown .= '<option  class="school" value="'.$key.'"'.$select.'>'.$option.'</option>'."<br>";
        }
        $dropdown .= '</select>';
        $dropdown .= '<br><br>';
        $dropdown .= _SMALLWORLD_START.'<select class="schooltime" name="schoolstart[]" id="schoolstart">';
        $array = SmallworldGetTimestampsToForm();
        foreach ($array as $key=>$option) {
            $selectstart = $selectedstart==$key ? ' selected="selected"' : null;
            $dropdown .= '<option value="'.$key.'"'.$selectstart.'>'.$option.'</option>'."<br>";
        }
        $dropdown .= '</select>';
        $dropdown .= '<br><br>';
        $dropdown .= _SMALLWORLD_STOP.'<select class="schooltime" name="schoolstop[]" id="schoolstop">';
        $array = SmallworldGetTimestampsToForm();
        foreach ($array as $key=>$option) {
            $selectstop = $selectedstop==$key ? ' selected="selected"' : null;
            $dropdown .= '<option value="'.$key.'"'.$selectstop.'>'.$option.'</option>'."<br>";
        }
        $dropdown .= '</select><br></p></div>';
        return $dropdown;
    }

    /**
     * @return dynamic inputs
     * @param string $class
     * @param string $name
     * @param string $nametwo
     * @param string $rel
     * @param string $textmore
     * @param string $employer (optional)
     * @param string $position (optional)
     * @param string $selectedstart (optional)
     * @param string $selectedstop (optional)
     * @param string $description (optional)
     * @return string
     */       
    function job ($class, $name,$name2, $rel, $textmore, $employer=null, 
        $position=null, $selectedstart=null, $selectedstop=null,$description=null
    )
    {
        $text  = '<div id="'.$name.'"><p class="smallworld_clonebreaker">'._SMALLWORLD_EMPLOYER.'<input class="job" id="job" value="'.$employer.'" type="text" name="employer[]"/>';
        $text .= '<br><br>'._SMALLWORLD_POSITION.'<input class="job" type="text" value="'.$position.'" name="position[]"/>';
        $text .= '<br><br>'._SMALLWORLD_JOBSTART.'<input class="jobstart" type="text" value="'.$selectedstart.'" name="jobstart[]"/>';
        $text .= '<br><br>'._SMALLWORLD_JOBSTOP.'<input class="jobstop" value="'.$selectedstop.'" type="text" name="jobstop[]"/>';
        $text .= '<br><br><span class="jobdescText">'._SMALLWORLD_DESCRIPTION.'</span><textarea class="jobdesc" name="description[]" rows="20" cols="20">'.$description.'</textarea><br></p></div>';
        $text .= ""."<br>";
        return $text;
            
    }
    
    /**
     * @return file input
     * @param int $userID
     * @return string
     */   
    function uploadform ($userID) 
    {
        $text  = '<form action="imgupload.php" method="POST" enctype="multipart/form-data">';
        $text .= '<input type="file" name="file[]" multiple>';
        $text .= '<button type="submit">'._SMALLWORLD_UPLOADTEXT.'</button>';
        $text .= '<span class="file_upload_label">'._SMALLWORLD_UPLOADFILESTEXT.'</span>';
        $text .= '</form>';
        return $text;
    }

    /**
     * @return dynamic input
     * @param int $userID
     * @param string $imgurl
     * @param string $imgdesc
     * @param string $id
     * @return string
     */      
    function edit_images ($userID,$imgurl, $imgdesc, $id) 
    {
        global $xoopsUser;
        $text  = '<p class="smallworld_clonebreaker"><br>';
        $text .= '<table class="smallworld_table" border="0" cellspacing="0" cellpadding="0">';
        $text .= '<tr>';        
        $text .= '<td><img class="smallworld_edit_image" src="'.$imgurl.'" height="100px" width="80px;"></td>';
        $text .= '<td><span class="smallworld_editTextSpan">'._SMALLWORLD_UPLOADDESC.'</span><br><br><textarea class="smallworld_edit_desc" name="imgdesc[]" rows="1" cols="1">'.stripslashes($imgdesc).'</textarea><br><br></td>';
        $text .= '<input value="'.$id.'" type="hidden" name="id[]"/></p>';
        $text .= '</tr></table>';
        return $text;
    }
}

?>