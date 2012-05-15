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
include_once("../../mainfile.php");
$xoopsOption['template_main'] = 'smallworld_userprofile_edittemplate.html';
include XOOPS_ROOT_PATH.'/header.php';
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/functions.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/include/arrays.php");
include_once(XOOPS_ROOT_PATH."/modules/smallworld/class/class_collector.php");
global $xoopsUser,$xoopsTpl,$xoopsDB, $xoTheme;

	if ($xoopsUser) {
		$id = $xoopsUser->getVar('uid');
		$check = new SmallWorldUser;
		$profile = $check->CheckIfProfile($id);

		// Check if inspected userid -> redirect to userprofile and show admin countdown
		/*
			$inspect = Smallworld_isInspected ($id);
			if ($inspect['inspect'] == 'yes') {
				redirect_header("userprofile.php?username=".$xoopsUser->getVar('uname'), 1); 
			}
		*/
	if ($profile > 0) {
		$xoopsTpl->assign('check',1);
		$item = new SmallWorldForm;
		$db = new SmallWorldDB;
		
		$cdb = "SELECT * FROM ".$xoopsDB->prefix('smallworld_user')." WHERE userid = '".$id."'";
		$result = $xoopsDB->queryF($cdb);
		$cnt = $xoopsDB->getRowsNum($result);
		while ($r = $xoopsDB->fetchArray($result)) {
			// ------------ PERSONAL INFO ------------ // 
			
			// Real name
			if (smallworldGetValfromArray ('realname', 'smallworldusethesefields') != 0) {
			 $realname = $item->input('realname', 'realname', 'realname',$size=30, $preset=$r['realname']);
			 $xoopsTpl->append('realname',$realname);
			} else {
			 $xoopsTpl->assign('show_realname','no');
			}
			 
			// Dropdown for gender
			if (smallworldGetValfromArray ('gender', 'smallworldusethesefields') != 0) {
			  $gender = $item->dropdown('gender',$arr0,$r['gender']);
			  $xoopsTpl->append('gender', $gender);
			} else {
			 $xoopsTpl->assign('show_gender','no');
			}
			
			// Selectbox for "interested in gender(s)"
			if (smallworldGetValfromArray ('interestedin', 'smallworldusethesefields') != 0) {
				$nr = unserialize($r['intingender']);
				$intInGender = $item->RetrieveRadio('intingender',$arr01,$nr, $selected=null);
				$xoopsTpl->append('intingender',$intInGender);
			} else {
				$xoopsTpl->assign('show_interestedin','no');
			}
			
			// Dropdown for marital status
			if (smallworldGetValfromArray ('relationshipstatus', 'smallworldusethesefields') != 0) {	
				$relationshipstatus = $item->dropdown('relationship',$arr02,0);
				$xoopsTpl->append('relationshipstatus',$relationshipstatus);
			

			// Partner. Only shown if marital status is married, it's complicated, engaged)
			$partner = $item->input('partner', 'partner', 'partner',$size='30', stripslashes($r['partner']));
			 $xoopsTpl->append('partner',$partner); 
			} else {
				$xoopsTpl->assign('show_relationshipstatus','no');
			}
			
			if (smallworldGetValfromArray ('lookingfor', 'smallworldusethesefields') != 0) {	
			$nr1 = unserialize($r['searchrelat']);
			$searchrelat = $item->RetrieveRadio('searchrelat',$arr03,$nr1, $selected=null);
			$xoopsTpl->append('searchrelat',$searchrelat);
			} else {
				$xoopsTpl->assign('show_lookingfor','no');
			}
			
			if (smallworldGetValfromArray ('birthday', 'smallworldusethesefields') != 0) {
			// Select Birthday dd-mm-Y
			$birthday = $item->input('birthday', 'birthday', 'birthday',$size='12', $preset=stripslashes(Smallworld_UsToEuroDate($r['birthday'])));
			 $xoopsTpl->append('birthdaydate',$birthday);
			} else {
				$xoopsTpl->assign('show_birthday','no');
			}
			
			// Select Hometown or Enter new
			if (smallworldGetValfromArray ('birthplace', 'smallworldusethesefields') != 0) {
			$birthplace = $item->input('birthplace', 'birthplace', 'birthplace',$size='50', $preset=stripslashes($r['birthplace']));
			 $xoopsTpl->append('birthplace',$birthplace);
			} else {
				$xoopsTpl->assign('show_birthplace','no');
			}
			
			// Dropdown politics
			if (smallworldGetValfromArray ('politicalview', 'smallworldusethesefields') != 0) {
			$politic = $item->dropdown('politic',$arr04,0);
			 $xoopsTpl->append('politic',$politic);
			} else {
				$xoopsTpl->assign('show_political','no');
			}
			 
			 // Dropdown Religion
			if (smallworldGetValfromArray ('religiousview', 'smallworldusethesefields') != 0) {
			$religion = $item->dropdown('religion',$arr05,0);
			 $xoopsTpl->append('religion',$religion);
			} else {
				$xoopsTpl->assign('show_religion','no');
			}
			
			// ------------ CONTACT INFO ------------ // 		
			// Add email test
			if (smallworldGetValfromArray ('emails', 'smallworldusethesefields') != 0) {
				$nr2 = unserialize($r['emailtype']);
				$emailtext = '';
				foreach ($nr2 as $k => $v) {
				  $nr2id = "email-".$k;
				  $emailtext .= $item->input_add('smallworld_add2','email','emailtype','.smallworld_clone2',20,$addmore=null,$preset=stripslashes($v),$nr2id);
				 // $emailtext .= $item->input_add('smallworld_add2','email','emailtype','.smallworld_clone2',20,$addmore=null,$preset=stripslashes($v));
					$emailtext .= "<span class='smallworld_remove' id='emailremove'><a href='javascript:removelnk (\"#emailremovelnk\",\"input#email\",\"email\");' id='emailremovelnk'>"._SMALLWORLD_REMOVE."</a><br></span>";
				}
				$emailtext .= "<a class='smallworld_addemail' href='javascript:void();' id='emailAdd'>"._SMALLWORLD_ADDMORE."</a><br><br>";
				$xoopsTpl->append('emailtext',$emailtext);
			} else {
				$xoopsTpl->assign('show_emails','no');
			}
				
				
			//Add screen names (usernames for facebook etc etc)
			if (smallworldGetValfromArray ('screennames', 'smallworldusethesefields') != 0) {
				$nr3 = unserialize($r['screenname_type']);
				$nr4 = unserialize($r['screenname']);
				$count1 = count($nr3);
				$cnt1 = 0;
				
				// Drop down for screen names
				$screenname ="";
				foreach ($nr3 as $k => $v) {
					 if ($cnt1 < $count1-1) {$addmore1 ="";} else {$addmore1 = _SMALLWORLD_ADDMORE;}
						$screenname .= $item->dropdown_add('smallworld_add','screenname', 'screenname_type', '.smallworld_clone',$arr06,$addmore1,$selected=stripslashes($nr4[$k]),$preset=stripslashes($v));
						$screenname .= "<span class='smallworld_remove' id='screennameremove'>";
						 $screenname .= "<a href='javascript:removelnk (\"#screennameremovelnk\",\"span#screenname\",\"screenname\");' id='screennameremovelnk'>"._SMALLWORLD_REMOVE."</a><br></span>";
						$cnt1++;
				}
				 $screenname .= "<a class='smallworld_addscreenname' href='javascript:void(0);' id='screennameAdd'>"._SMALLWORLD_ADDMORE."</a><br><br>";
				 $xoopsTpl->append('screenname',$screenname);
			} else {
				$xoopsTpl->assign('show_screennames','no');
			}
			 
			 // Mobilephone
			 if (smallworldGetValfromArray ('mobile', 'smallworldusethesefields') != 0) {
			 $mobile = $item->input('mobile','mobile','mobile',12,$preset=stripslashes($r['mobile']));
			  $xoopsTpl->append('mobile',$mobile);
			 } else {
				$xoopsTpl->assign('show_mobile','no');
			}
			  
			 // Landphone
			 if (smallworldGetValfromArray ('landphone', 'smallworldusethesefields') != 0) {
			 $phone = $item->input('phone','phone','phone',12,$preset=stripslashes($r['phone']));
			  $xoopsTpl->append('phone',$phone);
			 } else {
				$xoopsTpl->assign('show_landphone','no');
			}
			  
			 // Adress
			 if (smallworldGetValfromArray ('streetadress', 'smallworldusethesefields') != 0) {
			  $adress = $item->input('adress','adress','adress',$size='50',$preset=stripslashes($r['adress']));
			  $xoopsTpl->append('adress',$adress);
			 } else {
				$xoopsTpl->assign('show_adress','no');
			 }
			
			if (smallworldGetValfromArray ('presentcity', 'smallworldusethesefields') != 0) {
			 $present_city = $item->input('present_city', 'present_city', 'present_city',50, $preset=stripslashes($r['present_city']));
			 $xoopsTpl->append('present_city',$present_city); 
			 
			 $present_country = $item->input('present_country', 'present_country', 'present_country',$size='50', $preset=stripslashes($r['present_country']));
			 $xoopsTpl->append('present_country',$present_country);
			} else {
				$xoopsTpl->assign('show_city','no');
			}
			
			if (smallworldGetValfromArray ('website', 'smallworldusethesefields') == 0) {
			 $xoopsTpl->assign('show_website','no');
			}
			
			// ------------ INTERESTS ------------ // 
			
			// Textarea for interests
			//textarea($name, $id, $title, $rows, $cols, $class) 
			if (smallworldGetValfromArray ('interests', 'smallworldusethesefields') != 0) {
 			 $interests = $item->textarea('interests','interests',_SMALLWORLD_INTERESTS,1,20,'favourites',$preset=stripslashes($r['interests']));
			 $xoopsTpl->append('interests',$interests);
			} else {
				$xoopsTpl->assign('show_interests','no');
			}
			
			// Textarea for Music
			if (smallworldGetValfromArray ('favouritemusic', 'smallworldusethesefields') != 0) {
			 $music = $item->textarea('music','music',_SMALLWORLD_MUSIC,1,20,'favourites',$preset=stripslashes($r['music']));
			 $xoopsTpl->append('music',$music);
			} else {
				$xoopsTpl->assign('show_music','no');
			}
				
			// Textarea for Tvshow
			if (smallworldGetValfromArray ('favouritetvshows', 'smallworldusethesefields') != 0) {
			 $tvshow = $item->textarea('tvshow','tvshow',_SMALLWORLD_TVSHOW,1,20,'favourites',$preset=stripslashes($r['tvshow']));
			 $xoopsTpl->append('tvshow',$tvshow);	
			} else {
				$xoopsTpl->assign('show_tv','no');
			}
			
			// Textarea for Movie
			if (smallworldGetValfromArray ('favouritemovies', 'smallworldusethesefields') != 0) {
			 $movie = $item->textarea('movie','movie',_SMALLWORLD_MOVIE,1,20,'favourites',$preset=stripslashes($r['movie']));
			 $xoopsTpl->append('movie',$movie);	
			} else {
				$xoopsTpl->assign('show_movies','no');
			}
			 
			// Textarea for Books
			if (smallworldGetValfromArray ('favouritebooks', 'smallworldusethesefields') != 0) {
			 $books = $item->textarea('books','books',_SMALLWORLD_BOOKS,1,20,'favourites',$preset=stripslashes($r['books']));
			 $xoopsTpl->append('books',$books);	
			} else {
				$xoopsTpl->assign('show_books','no');
			}
			 
			// Textarea for About me
			if (smallworldGetValfromArray ('aboutme', 'smallworldusethesefields') != 0) {
			 $aboutme = $item->textarea('aboutme','aboutme',_SMALLWORLD_ABOUTME,2,20,'favourites',$preset=stripslashes($r['aboutme']));
			 $xoopsTpl->append('aboutme',$aboutme);	
			} else {
				$xoopsTpl->assign('show_aboutme','no');
			}
			 
			 
			// ------------ SCHOOL ------------ // 
			
			//School name
			if (smallworldGetValfromArray ('education', 'smallworldusethesefields') != 0) {
				$nr5 = unserialize($r['school_type']);
				$nr6 = unserialize($r['school']);
				$nr7 = unserialize($r['schoolstart']);
				$nr8 = unserialize($r['schoolstop']);
				$school = "";
				foreach ($nr5 as $k => $v) {		 
					$school .= $item->school_add ('smallworld_add3', 'school', 'school_type', 
					 '.smallworld_clone3', $arr7, _SMALLWORLD_ADDMORE, $selected=stripslashes($nr6[$k]),$preset=$v, $selectedstart=date("Y",$nr7[$k]),$selectedstop=date("Y",$nr8[$k]));
					$school .= "<span class='smallworld_remove2' id='schoolremove'>";
					 $school .= "<a href='javascript:removelnk (\"#schoolremovelnk\",\"div#school\",\"school\");' id='schoolremovelnk'>"._SMALLWORLD_REMOVE."</a><br></span>";
				} 
				 $school .= "<a class='smallworld_addschool' href='javascript:void(0);' id='schoolAdd'>"._SMALLWORLD_ADDMORE."</a><br><br>";
				 $xoopsTpl->append('school',$school);
			} else {
				$xoopsTpl->assign('show_school','no');
			}
			 
			 //Jobs
			if (smallworldGetValfromArray ('employment', 'smallworldusethesefields') != 0) {
				$nr9 = unserialize($r['employer']);
				$nr10 = unserialize($r['position']);
				$nr11 = unserialize($r['jobstart']);
				$nr12 = unserialize($r['jobstop']);
				$nr13 = unserialize(stripslashes($r['description']));	
				$job="";
				foreach ($nr9 as $k=>$v) { 
				 $job .= $item->job('smallworld_add4', 'job', 'job_type', '.smallworld_clone4', _SMALLWORLD_ADDMORE, $employer=stripslashes($v), $position=stripslashes($nr10[$k]), 
				 $selectedstart=date("Y",$nr11[$k]), $selectedstop=date("Y",$nr12[$k]),$description=$nr13[$k]);
				  $job .= "<span class='smallworld_remove3' id='jobremove'>";
					$job .= "<a href='javascript:removelnk (\"#jobremovelnk\",\"div#job\",\"job\");' id='jobremovelnk'>"._SMALLWORLD_REMOVE."</a><br></span>";
				} 
				$job .= "<a class='smallworld_addjob' href='javascript:void(0);' id='jobAdd'>"._SMALLWORLD_ADDMORE."</a><br><br>";
				 $xoopsTpl->append('job',$job); 
			} else {
				$xoopsTpl->assign('show_jobs','no');
			}
			 
			// Create hidden forms for birthcity
			$birthplace_lat = $item->hidden('birthplace_lat','birthplace_lat',$preset=stripslashes($r['birthplace_lat']));
			$birthplace_lng = $item->hidden('birthplace_lng','birthplace_lng',$preset=stripslashes($r['birthplace_lng']));
			$birthplace_country = $item->hidden('birthplace_country','birthplace_country',$preset=stripslashes($r['birthplace_country']));
			 $xoopsTpl->append('birthplace_lat',$birthplace_lat);
			 $xoopsTpl->append('birthplace_lng',$birthplace_lng);
			 $xoopsTpl->append('birthplace_country',$birthplace_country);
					
			// Create hidden forms for present city
			$present_lat = $item->hidden('present_lat','present_lat',$preset=stripslashes($r['present_lat']));
			$present_lng = $item->hidden('present_lng','present_lng',$preset=stripslashes($r['present_lng']));
			 $xoopsTpl->append('present_lat',$present_lat);
			 $xoopsTpl->append('present_lng',$present_lng);
			 
			 $xoopsTpl->append('smallworld_register_title',_SMALLWORLD_REGRISTATION_TITLE);
			 $xoopsTpl->assign('smallworld_beforesubmit',_SMALLWORLD_TEXTBEFORESUBMIT);
			 $xoopsTpl->assign('smallworld_save',_SMALLWORLD_SUBMIT);	
             $xoopsTpl->assign('smallworld_user_website',$r['website']);	
			 
		 $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.colorbox.js');
         $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.validate.js');
         $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.validation.functions.js');
         $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.stepy.js');
         $xoTheme->addScript(XOOPS_URL.'/modules/smallworld/js/jquery.elastic.source.js');
		 $xoTheme->addStylesheet(XOOPS_URL.'/modules/smallworld/css/smallworld.css');  
	}	 
		}	else {
			redirect_header("register.php", 1); 
			}
	} else {
		redirect_header(XOOPS_URL . "/user.php", 1, _NOPERM);
	}
include(XOOPS_ROOT_PATH."/footer.php");
?>