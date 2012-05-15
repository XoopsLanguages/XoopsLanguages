// Upload new avatar 
xoops_smallworld(function(){
		var btnUpload=xoops_smallworld('#smallworld_avatarupload');
		var status=xoops_smallworld('#smallworld_avatarstatus');
		new AjaxUpload(btnUpload, {
			action: 'avatarupload.php',
			name: 'smallworld_uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status.text('!!!!!!');
					return false;
				}
				//status.text('............');
                status.html('<img src="images/ajaxloader.gif" height="16" width="16">');
			},
			onComplete: function(file, response){
				//On completion clear the status
				status.text('');
				//Add uploaded file to list
				response = xoops_smallworld.parseJSON( response );
				if(response[0]==="success"){
					xoops_smallworld("#smallworld_user_img").attr("src", smallworld_uploaddir+response[1]);
                    xoops_smallworld("#smallworld_user_img").css('height', '100px');
					xoops_smallworld('div .UploadNewAvatar').hide();
					//xoops_smallworld('#smallworld_user_img').replaceWith('<img src="'+smallworld_uploaddir+file+'" id="smallworld_user_img" height="140px" width="100px"'+file);
					//xoops_smallworld('img#smallworld_user_img').appendTo('<img src="'+smallworld_uploaddir+file+'"  id="smallworld_user_img" height="140px" width="100px"'+file).addClass('success');
				} else{
					//xoops_smallworld('<li></li>').appendTo('#smallworld_avatarfiles').text(file).addClass('error');
					alert(response);
				}
			}
		});
		
	});