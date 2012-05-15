// Srinivas Tamada http://9lessons.info
// wall.js

xoops_smallworld(document).ready(function() {
	// Update Status
	xoops_smallworld(".smallworld_update_button").click(function(e) {
        e.preventDefault();
		var updateval = xoops_smallworld("#smallworld_update").val();
		var privatestat = xoops_smallworld('input[name=updatePublic]:checked').val();
		var dataString = "update=" + updateval + "&priv=" + privatestat;
		if(updateval=='') {
			alert("Please Enter Some Text");
		} else {
			xoops_smallworld("#smallworld_flash").show();
			xoops_smallworld("#smallworld_flash").fadeIn(400).html('Loading Update...');
			xoops_smallworld.ajax({
				type: "POST",
				url: "message_ajax.php",
				data: dataString,
				cache: false,
					success: function(html) {
						xoops_smallworld("#smallworld_flash").fadeOut('slow');
						xoops_smallworld("#smallworld_content").prepend(html);
						xoops_smallworld("#smallworld_update").val('');	
						xoops_smallworld("#smallworld_update").focus();
						xoops_smallworld("#smallworld_stexpand").oembed(updateval);
                        smallworldCheckNumDivs();
					}
			});
		 }
	});
		
	//commment Submint
	xoops_smallworld('.smallworld_comment_button').live("click",function(e) {
        e.preventDefault();
		var ID = xoops_smallworld(this).attr("id");
		var comment= xoops_smallworld("#smallworld_ctextarea"+ID).val();
		var dataString = 'comment='+ comment + '&msg_id=' + ID;

		if(comment=='') {
			alert("Please Enter Comment Text");
		} else {
			xoops_smallworld.ajax({
				type: "POST",
				url: "comment_ajax.php",
				data: dataString,
				cache: false,
				success: function(html){
				xoops_smallworld("#smallworld_commentload"+ID).append(html);
				xoops_smallworld("#smallworld_ctextarea"+ID).val('');
				xoops_smallworld("#smallworld_ctextarea"+ID).focus();
				 }
			});
		 }
	});

	// commentopen 
	xoops_smallworld('.smallworld_commentopen').live("click",function(e) {
        e.preventDefault();
		var ID = xoops_smallworld(this).attr("id");
		xoops_smallworld("#smallworld_commentbox"+ID).slideToggle('slow');
	});	

	// delete comment
	xoops_smallworld('.smallworld_stcommentdelete').live("click",function(e) {
        e.preventDefault();
		var ID = xoops_smallworld(this).attr("id");
		var msgowner = xoops_smallworld(this).attr("rel");
		var dataString = 'smallworld_com_id='+ ID + '&msgowner='+msgowner;

		if(confirm(SmallworldSureDelete)) {
			xoops_smallworld.ajax({
				type: "POST",
				url: "delete_comment_ajax.php",
				data: dataString,
				cache: false,
				success: function(html){
					xoops_smallworld("#smallworld_stcommentbody"+ID).slideUp();
				}
			});
		}
	});
	// delete update
	xoops_smallworld('.smallworld_stdelete').live("click",function(e) {
        e.preventDefault();
		var ID = xoops_smallworld(this).attr("id");
		var msgowner = xoops_smallworld(this).attr("rel");
		var dataString = 'smallworld_msg_id='+ ID + '&msgowner='+msgowner;

		if(confirm(SmallworldSureDelete)) {
			xoops_smallworld.ajax({
				type: "POST",
				url: "delete_message_ajax.php",
				data: dataString,
				cache: false,
				success: function(html){
					xoops_smallworld("#smallworld_stbody"+ID).slideUp();
				}
			});
		}
	});
});

xoops_smallworld(document).ready(function() {
	xoops_smallworld('.smallworld_msg_counter:last').show();
	xoops_smallworld('.smallworld_msg_counter').live('click', function(e) {
    e.preventDefault();
	xoops_smallworld('#smallworld_moremsg_ajax').show();
	var lastmsg = xoops_smallworld(this).attr("id");
	var page = xoops_smallworld(this).attr("rel");
	var userid = xoops_smallworld(this).attr('rel2');
	if(lastmsg == '') {
		xoops_smallworld('#smallworld_moremsg_ajax').hide();
		xoops_smallworld('.smallworld_msg_counter:last').hide();
	}
	if(lastmsg) {
		 xoops_smallworld.ajax({
			type: "POST",
			url: "loadmore.php",
			data: "last=" + lastmsg + "&page=" + page + "&userid="+userid,
			success: function(html){
				xoops_smallworld("#smallworld_content").append(html);
				xoops_smallworld('#smallworld_moremsg_ajax:first').remove();
				xoops_smallworld(".smallworld_msg_counter:first").remove();
				if(xoops_smallworld.trim(html) === ""){
					xoops_smallworld(".smallworld_msg_counter").remove();
					xoops_smallworld('#smallworld_moremsg_ajax').remove();
				}
			}
		 });
	}
	else {
		
	}
    smallworldCheckNumDivs();
	});
});

// Voting system
// Calls up.php or down.php
xoops_smallworld(document).ready(function() {
	xoops_smallworld(".smallworld_stcomment_vote").live('click',
	function(e) {
        e.preventDefault();
		var id = xoops_smallworld(this).attr("id");
		var name = xoops_smallworld(this).attr("name");
		var type = xoops_smallworld(this).attr("type");
		var owner = xoops_smallworld(this).attr("owner");
		if (type != 'msg') {
			var type2 = xoops_smallworld(this).attr("type2");
		} else {
			var type2 = '0';
		}
		var dataString = 'id='+ id + "&type=" + type + "&type2=" + type2 + "&owner=" + owner;
		var parent = xoops_smallworld(this);
		var span = xoops_smallworld(this).prev('span#smallworld_votenum');

		if (name=='up') {
			xoops_smallworld(this).fadeIn(200).html('<img height="10px" width="10px" src="images/loader.gif" />').fadeOut(500);
			xoops_smallworld.ajax({
				type: "POST",
				url: "up_vote.php",
				data: dataString,
				cache: false,
				success: function(html) {
					span.html(html);
				}
			});
		}
		if (name=='down') {
			xoops_smallworld(this).fadeIn(200).html('<img height="10px" width="10px" src="images/loader.gif" />').fadeOut(500);
			xoops_smallworld.ajax({
				type: "POST",
				url: "down_vote.php",
				data: dataString,
				cache: false,

				success: function(html) {
					span.html(html);
				}
			});
		}
	});
});

xoops_smallworld(document).ready(function() {
	xoops_smallworld(".smallworld_comment_complaint").live('click',
	function(e) {
        e.preventDefault();
		var id = xoops_smallworld(this).attr("id");
		var name = xoops_smallworld(this).attr("name");
		var against_user = xoops_smallworld(this).attr("a_user");
		var against_userid = xoops_smallworld(this).attr("auserid");
		var by_user = xoops_smallworld(this).attr("by_user");
		var dataString = 'id='+ escape(id) + "&name=" + name + "&byuser="+by_user+"&a_user="+against_user+"&auserid="+against_userid;
		var parent = xoops_smallworld(this);

		if (name=='complaint') {
			xoops_smallworld(this).fadeIn(200).html('<img height="10px" width="10px" src="images/loader.gif" />').fadeOut(500);
			xoops_smallworld.ajax({
				type: "POST",
				url: "complaint.php",
				data: dataString,
				cache: false,

				success: function(html) {
					alert(html);
				}
			});
		}
	});
	
});