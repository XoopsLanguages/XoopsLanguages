/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting source code
* which is considered copyrighted (c) material of the original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
* @license         http://www.fsf.org/copyleft/gpl.html GNU public license
* @package         modules
* @subpackage      Small World
* @since           1.0.0
* @author          Culex  - homepage.: http://culex.dk		& email.: culex@culex.dk
**/

$(document).ready(function() {

	//When page loads...
	$(".smallworldadmin_tab_content").hide(); //Hide all content
	$("ul.smallworldadmin_tabs li:first").addClass("active").show(); //Activate first tab
	$(".smallworldadmin_tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.smallworldadmin_tabs li").click(function() {

		$("ul.smallworldadmin_tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".smallworldadmin_tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});