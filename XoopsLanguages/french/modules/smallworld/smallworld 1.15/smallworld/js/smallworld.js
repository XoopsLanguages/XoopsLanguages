/**
 * jQuery configs, selectors and functions for Xoops Smallworld
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * author 2011     Culex - homepage.: http://culex.dk & email.: culex@culex.dk
 */
xoops_smallworld(function() {	
    //Attach function for avatar
    attachAvatarOpen ();
    
    // Get page url and page title (index.php)
    var smallworld_pageUrl = window.location.pathname;
    var smallworld_PageName = smallworld_pageUrl.substring(smallworld_pageUrl.lastIndexOf('/') + 1);   
    
    // GET pop for statistics
    xoops_smallworld('#smallworld_statistics_lnk').live('click',function(e) {
        e.preventDefault();
        if (xoops_smallworld('#smallworld_statistics_lnk').length) { // implies *not* zero
            xoops_smallworld('#smallworldStatsDiv').show();
            xoops_smallworld("#smallworldStatsDiv").load('stats.php');
            xoops_smallworld.fn.colorbox({
                width:"75%", 
                height:"18%",
                inline:true, 
                onCleanup:function() {
                    xoops_smallworld('#smallworldStatsDiv').hide();
                },
                onClosed:function() {
                    xoops_smallworld('#smallworldStatsDiv').hide();
                },
                    href:"#smallworldStatsDiv"
            });
        };
    }); 
    
    // GET pop for recentactivities
    xoops_smallworld('#smallworld_recentactivities').live('click',function(e) {
        e.preventDefault();
        var uname = xoops_smallworld(this).attr('rel');
        if (xoops_smallworld('#smallworld_recentactivities').length) { // implies *not* zero
            xoops_smallworld('#smallworld_recentactivitiesDiv').show();
            xoops_smallworld("#smallworld_recentactivitiesDiv").load('recentactivities.php?username='+uname);
            xoops_smallworld.fn.colorbox({
                width:"35%", 
                height:"50%",
                inline:true, 
                onCleanup:function() {
                    xoops_smallworld('#smallworld_recentactivitiesDiv').hide();
                },
                onClosed:function() {
                    xoops_smallworld('#smallworld_recentactivitiesDiv').hide();
                },
                    href:"#smallworld_recentactivitiesDiv"
            });
        };
    });     

    // Attach colorbox.js to selector in register.php and edit_profile.php
    // If other page / no presence of #smallworld_regform1 then exit function and continue
    xoops_smallworld(document).ready(function(){
        if (xoops_smallworld('#smallworld_regform1').length) { // implies *not* zero
            xoops_smallworld('#smallworld_regform1').show();
            xoops_smallworld.fn.colorbox({
                innerWidth:"75%", 
                height:"70%",
                inline:true, 
                onComplete: function() {
                    smallworld_DoValStart ();
                },
                onCleanup:function() {
                    xoops_smallworld('#smallworld_regform1').hide();
                },
                onClosed:function() {
                    location.href = 'index.php'; 
                },
                href:"#smallworld_regform1"
            });
        };
    }); 

    // Function to make friend invitations form into ui dialog
    xoops_smallworld(function() {
        xoops_smallworld('#friendInvitations_box').css('display','none');
        if (hasmessages > 0) {		
            if (xoops_smallworld('#friendInvitations_box').length) { // implies *not* zero
                xoops_smallworld('#friendInvitations_box').show();
                xoops_smallworld.fn.colorbox({
                    width:"50%", 
                    inline:true, 
                    onCleanup:function() {
                        xoops_smallworld('#friendInvitations_box').hide();
                        xoops_smallworld('#friendInvitations_box').css('display','none');
                    },
                    href:"#friendInvitations_box"
                });
            };
            xoops_smallworld('#smallworldrequestlink').live('click',function() {
                xoops_smallworld('#friendInvitations_box').css('display','none');
                xoops_smallworld.colorbox.close();
            });
        }
    });
	
		// Function to make Edit image descriptions form into ui dialog
    xoops_smallworld(document).ready(function(){
        if (xoops_smallworld('#smallworld_edit_imageform').length) { // implies *not* zero
            xoops_smallworld('#smallworld_edit_imageform').show();
            xoops_smallworld.fn.colorbox({
                innerWidth:"1000px",
                height:"100%",
                inline:true, 
                onCleanup:function() {
                    xoops_smallworld('#smallworld_edit_imageform').hide();
                },
                onClosed:function() {
                    location.href = 'index.php'; 
                }, 
                href:"#smallworld_edit_imageform"
            });
        };
    }); 
	
    // Function to make File upload form into ui dialog
    xoops_smallworld(document).ready(function(){
        if (xoops_smallworld('#file_upload').length) { // implies *not* zero
            xoops_smallworld('#file_upload').show();
            xoops_smallworld.fn.colorbox({
                width:"auto", 
                height:"70%",
                inline:true, 
                onCleanup:function() {
                    xoops_smallworld('#file_upload').hide();
                },
                onClosed:function() {
                    location.href = 'editimages.php'; 
                },
                href:"#file_upload",
                onComplete : function() { 
                    xoops_smallworld(this).colorbox.resize(); 
                }
            });
        };
    }); 
		
    // Function to make Div with id page into ui dialog
    xoops_smallworld(document).ready(function(){
        if (xoops_smallworld('div#page').length) { // implies *not* zero
            xoops_smallworld('div#page').show();
            xoops_smallworld.fn.colorbox({
                innerWidth:"1000px",
                inline:true, 
                onCleanup:function() {
                    xoops_smallworld('div#page').hide();
                },
                onClosed:function() {
                    location.href = 'index.php'; 
                },
                href:"div#page"
            });
        };
    }); 

    // If user does not have a profile in smallworld then goto register.
    // If user has already a profile then goto edit profile dialog
    if (userHasProfile === 0) {
        var buttons = {};
        buttons[_smallworldContinueToReg] = function() { 
            location.href = smallworld_url+'register.php';
        }
        buttons[_smallworldCancel] = function() { 
            xoops_smallworld( this ).dialog( "close" ); 
        } 	
        xoops_smallworld('#smallworld_notyetregistered').dialog({
            minWidth: 500,
            show: "blind",
            hide: "explode",
            width: "550px",
            buttons: buttons
        });	
    }
		
	// Attach jquery-ui datepicker to form.	
	xoops_smallworld("#birthday" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-mm-yy',
		showOn: "button",
		buttonImage: "images/calendar.gif",
		buttonImageOnly: true,
		onClose: function() {
			this.focus(); 
		},
		yearRange: '-100:+0'
	});
	
	// Attach jquery-ui datepicker to form.
	xoops_smallworld(".jobstart" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy',
		yearRange: '-100:+0',         
	});
	
	// Attach jquery-ui datepicker to form.
	xoops_smallworld(".jobstop" ).datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy',
		yearRange: '-100:+0'
	});
	
	// Steps for registration and submitbutton name using
	// formToWizzard.js
	if (xoops_smallworld("#smallworld_profileform").length > 0) {
    xoops_smallworld(function() {
		xoops_smallworld('#smallworld_profileform').stepy({
            backLabel:      SmallworldValidationBackButton,
            block:          true,
            errorImage:     true,
            nextLabel:      SmallworldValidationForwardButton,
            legend:         true,
            description:    true,
            titleClick:     false
		});
	});
    }

    // Attach geolocate autocomplete to forms
        xoops_smallworld(function() {
        if (geoL === 1) {
            if (xoops_smallworld("#birthplace").length > 0) {
                xoops_smallworld('#birthplace').geo_autocomplete();
            }
            if (xoops_smallworld("#present_city").length > 0){
                xoops_smallworld('#present_city').geo_autocomplete_now();
            }
        } else {
         // do something or not
        } 
        });
    

	// Make Textareas elastic
	if (xoops_smallworld(".favourites").length > 0 || 
        xoops_smallworld(".smallworld_comment").length > 0 || 
        xoops_smallworld("#smallworld_update").length > 0 || 
        xoops_smallworld("#smallworld_update_profile").length > 0
    )
    {
        xoops_smallworld(function() {
            xoops_smallworld('.favourites, .smallworld_comment, #smallworld_update, #smallworld_update_profile').elastic(); 
            xoops_smallworld('.smallworld_comment').css('max-width', xoops_smallworld('.smallworld_stcommentbody').outerWidth() - 90 + 'px');
            xoops_smallworld('#smallworld_update').css('max-width', xoops_smallworld('#smallworld_wall_container').outerWidth() - 30 + 'px');

        });
    }
	
    // Toggle the form 'partner' if choosen status is married, in relationship, complicated
	xoops_smallworld(function() {
		if (xoops_smallworld("#relationship").val == '2') {
			xoops_smallworld('#partner').fadeOut('slow');
			xoops_smallworld('.partner').hide();
		}
		xoops_smallworld("#relationship").live('change',function() {
			var val = xoops_smallworld(this).val();
			if (val != '2') {
				xoops_smallworld('#partner').fadeIn('slow');
				xoops_smallworld('.partner').show();
			} else {
				xoops_smallworld('#partner').fadeOut('slow');
				xoops_smallworld('.partner').hide();
			}
		});
	});

	// Search for partner in smallworld users or accept username
    xoops_smallworld(function() {
		xoops_smallworld("#partner").autocomplete({
            source: smallworld_url+ 'partnersearch.php', 
            minLength:1,
            open: function(event, ui){
                xoops_smallworld("ul.ui-autocomplete li a").each(function(){
                    var htmlString = xoops_smallworld(this).html().replace(/&lt;/g, '<');
                    htmlString = htmlString.replace(/&gt;/g, '>');
                    xoops_smallworld(this).html(htmlString);
                    xoops_smallworld('.ui-autocomplete.ui-menu').width(200);
                });
            }
		});
	});
	
	// Keep the searchform empty when clicked
	xoops_smallworld("input#smallworld_searchform").click(function(event) {
		event.preventDefault();
        // Erase text from inside textarea
		xoops_smallworld(this).val("");
		// Disable text erase
		xoops_smallworld(this).unbind(event);
	});
	
	// Search for user in smallworld users or test for new user
	xoops_smallworld(function() {
		xoops_smallworld("#smallworld_searchform").focus().select();
		xoops_smallworld("#smallworld_searchform").autocomplete({
            source: smallworld_url+ 'search.php', 
            minLength:1,
            open: function(event, ui){
                xoops_smallworld("ul.ui-autocomplete li a").each(function(){
                    var htmlString = xoops_smallworld(this).html().replace(/&lt;/g, '<');
                    htmlString = htmlString.replace(/&gt;/g, '>');
                    xoops_smallworld(this).html(htmlString);
                    xoops_smallworld('.ui-autocomplete.ui-menu').width(275);
                });
            },
            select: function(event,ui){
                location.href= smallworld_url+'userprofile.php?username='+ui.item.value;
            }
		});
	});

// Function to reset gender, relationshipstatus,politics an religion select:Selected in forms after send and in pagerefresh
    xoops_smallworld(function() {
        if (smallworld_PageName == 'register.php' || smallworld_PageName == 'editprofile.php') {
            var sw_data;
            xoops_smallworld.ajax({
                url: smallworld_url+"include/getSelects.php?"+ Math.random(),
                cache: false,
                dataType: "json",
                success: function(sw_data) {
                    xoops_smallworld("select[name=gender] option[value="+sw_data.gender+"]").attr("selected", true);
                    xoops_smallworld("select[name=relationship] option[value="+sw_data.relat+"]").attr("selected", true);
                    if (sw_data.relat == 2) { 
                        xoops_smallworld("#partner").hide(); 
                        xoops_smallworld("p.partner").hide();
                    }
                    if (sw_data.relat != 2) { 
                        xoops_smallworld("#partner").show(); 
                        xoops_smallworld("p.partner").show();
                    }
                    xoops_smallworld("select[name=politic] option[value="+sw_data.politic+"]").attr("selected", true);
                    xoops_smallworld("select[name=religion] option[value="+sw_data.religion+"]").attr("selected", true);
                },
                error: function(xhr, status, thrown) {
                    alert(xhr+" "+status+" "+thrown);
                }
            });
        }
	});	
		
		
	// Keep public as default checked in Update field
	xoops_smallworld(function(){
		xoops_smallworld("input[name=updatePublic] option[value='private']").attr('checked', false);
	});
		
	
    // Functions to add fields in screenname, email, education and jobs
	xoops_smallworld('#emailAdd').live('click',function(e){
        e.preventDefault();
        // how many "duplicatable" input fields we currently have
        var num  = xoops_smallworld('input[name="emailtype[]"]').length - 1;
        
        // the numeric ID of the new input field being added
        var newNum  = (num + 1);      
		xoops_smallworld('span#email:last').clone(true).insertBefore(this).find('input').val('').attr('id','email-'+newNum);
		xoops_smallworld('span#emailremove:last').clone(true).insertBefore(this);
	});

	/* Screen names for facebook etc */
	xoops_smallworld('#screennameAdd').live('click',function(e){
        e.preventDefault();
		xoops_smallworld('span#screenname:last').clone(true).insertBefore(this).find('input').val('');
		xoops_smallworld('span#screennameremove:last').clone(true).insertBefore(this);
	});		
	
	/* School */
	xoops_smallworld('#schoolAdd').live('click',function(e){
        e.preventDefault();
		xoops_smallworld('div#school:last').clone(true).insertBefore(this).find('input').val('');
		xoops_smallworld('span#schoolremove:last').clone(true).insertBefore(this);
	});	

	/* Jobs - also remove datepicker from :last and apply on NEW :last */
	xoops_smallworld('#jobAdd').live('click',function(e){
        e.preventDefault();
		xoops_smallworld('div#job:last').clone(true).insertBefore(this).find('input').val('');
		xoops_smallworld('span#jobremove:last').clone(true).insertBefore(this);
		xoops_smallworld('.jobstart').removeClass("hasDatepicker").attr('id',"").datepicker();
		xoops_smallworld('.jobstop').removeClass("hasDatepicker").attr('id',"").datepicker();
	});		
	
	
	// Registerform saveprofile
	xoops_smallworld(".smallworld_finish").click(function(e) {
        e.preventDefault();
		var dataString = xoops_smallworld("#smallworld_profileform").serialize();
		if (dataString == '') {
		} else {
            xoops_smallworld('.smallworld_finish').attr('disabled',true);
			xoops_smallworld.ajax({
				type: "POST",
                //dataType: 'json',
                cache: false,
				url: smallworld_url+"submit.php",
				data: dataString,
				success: function(){
                    alert(SmallworldSavedSuccesMsg);
				},
                complete: function() {
                	location.href = smallworld_url+'index.php';
                }
			});
		}
	});
	
	// Description for images save
	xoops_smallworld('#smallworld_edit_imagesavebtn').live('click',function() {
		var post = xoops_smallworld('#smallworld_edit_imgform').serialize();
		xoops_smallworld.post(smallworld_url+"image_edit_submit.php",
		post,
		function(data) { 
			//alert(data);
			alert(SmallworldSavedSuccesMsg);
			location.href = smallworld_url+'index.php'; 
		});
	    return false;
	});		
	
		// Description for images save
	xoops_smallworld('#smallworld_changeAvatar').live('click',function() {
		xoops_smallworld('.UploadNewAvatar').toggle();
	    return false;
	});

	// Open avatar imagen in new window on click
	xoops_smallworld(function() {
	xoops_smallworld('#smallworld_user_img').css('cursor', 'pointer');
    xoops_smallworld('#smallworld_user_img').css('margin', '0 10%');
	xoops_smallworld('#smallworld_user_img').live('click',function(event) {
	 var url = xoops_smallworld(this).attr('src');
	 image = "<img src ='"+url+"' />";
	 xoops_smallworld('<div id="lookingglassuseravatar">'+image+'</div>').appendTo('body');            
	 event.preventDefault();
		 if (xoops_smallworld('#lookingglassuseravatar').length) { // implies *not* zero
			xoops_smallworld('#lookingglassuseravatar').show();
			xoops_smallworld.fn.colorbox({
				width:"auto", 
				height:"70%",
				inline:true, 
				onCleanup:function() {
					xoops_smallworld('#lookingglassuseravatar').hide();
				},
				onClosed:function() {
					xoops_smallworld("#lookingglassuseravatar").remove();
				},
				onComplete : function() { 
				   xoops_smallworld(this).colorbox.resize(); 
				  },
				href:"#lookingglassuseravatar"
			});
			};
	}); //close click
	});
    
	// Attach on clik open education & work (..more) dialogues
	xoops_smallworld('#_smallworld_workmore').live('click',function(event){	
        event.preventDefault();
        if (xoops_smallworld('#workfull').length) { // implies *not* zero
			xoops_smallworld('#workfull').show();
			xoops_smallworld.fn.colorbox({
				width:"450", 
				height:"300",
				inline:true, 
				onCleanup:function() {
					xoops_smallworld('#workfull').hide();
				},
				onClosed:function() {
				},
				href:"#workfull"
			});
		};
	});
	
	// Show educations in dialog when clicked on more
	xoops_smallworld('#_smallworld_educationmore').live('click',function(event){
        event.preventDefault();
		if (xoops_smallworld('#educationfull').length) { // implies *not* zero
			xoops_smallworld('#educationfull').show();
			xoops_smallworld.fn.colorbox({
				width:"450", 
				height:"300",
				inline:true, 
				onCleanup:function() {
					xoops_smallworld('#educationfull').hide();
				},
				onClosed:function() {
				},
				href:"#educationfull"
			});
		};
	});
	
	// Show more info in dialog
	xoops_smallworld('#_SMALLWORLD_MOREINFO').live('click',function(event){
        event.preventDefault();
		if (xoops_smallworld('#interestsandmore').length) { // implies *not* zero
			xoops_smallworld('#interestsandmore').show();
			xoops_smallworld.fn.colorbox({
				width:"600", 
				height:"300",
				inline:true, 
				onCleanup:function() {
					xoops_smallworld('#interestsandmore').hide();
				},
				onClosed:function() {
				},
				href:"#interestsandmore"
			});
		};	
	});
	
		//Function to show images in birthplace input
		xoops_smallworld('#_smallworld_birthplace_maplink').live('click',function(event){
            event.preventDefault();
            if (xoops_smallworld('#_smallworld_birthplace_map').length) { // implies *not* zero
                xoops_smallworld('#_smallworld_birthplace_map').show();
                xoops_smallworld.fn.colorbox({
                    innerWidth:"550px", 
                    innerHeight:"550px",
                    inline:true, 
                    onCleanup:function() {
                        xoops_smallworld('#_smallworld_birthplace_map').hide();
                    },
                    onComplete:function() {
                        initialize_birthplace(smallworld_birthlng,smallworld_birthlatt);
                        xoops_smallworld('#_smallworld_birthplace_map').show();
                    },
                    title: function() {
                        var title = xoops_smallworld("#_smallworld_birthplace_map").attr( 'title' );
                        return title != 'undefined' ? title : false;
                    },
                    href:"#_smallworld_birthplace_map",
                });
			
            };
		});
	
	//Function to show images in present location input
	xoops_smallworld('#_smallworld_present_maplink').live('click',function(event){
        event.preventDefault();
		if (xoops_smallworld('#_smallworld_present_map').length) { // implies *not* zero
			xoops_smallworld('#_smallworld_present_map').show();
			xoops_smallworld.fn.colorbox({
				innerWidth:"550px", 
				innerHeight:"550px",
				inline:true, 
				onCleanup:function() {
					xoops_smallworld('#_smallworld_present_map').hide();
				},
				onComplete:function(){
					initialize_currplace(smallworld_currlng,smallworld_currlatt);
					xoops_smallworld('#_smallworld_present_map').show();
				},
				title: function() {
					var title = xoops_smallworld("#_smallworld_present_map").attr( 'title' );
					return title != 'undefined' ? title : false;
				},
				href:"#_smallworld_present_map"
			});
		};	
    }); 
	
	
	// Function to rewrite urls used in xoops core for directing to profile.php
	// Sets var uname = link text()
	// removes /userinfo.php?uid=#
	// replaces with /modules/smallworld/userprofile.php?username=uname
	// culex okt 2011
	if (smallworldTakeOverLinks != 0) {
		xoops_smallworld('a[href*="userinfo.php?"]').each(function() {
			var oldurl = xoops_smallworld(this).attr("href");
			var uname = xoops_smallworld(this).text();
			var tempArray = xoops_smallworld(this).attr("href").split("/");
			var baseURL = tempArray[0];
			this.href = this.href.replace(oldurl, smallworld_url + "userprofile.php?username="+uname);
		});
	}

    if (xoops_smallworld("#smallworld_stats_scroller").length > 0) {
        xoops_smallworld('#smallworld_stats_scroller').innerfade({ 
            animationtype: 'fade', 
            speed: 1200, 
            timeout: 10000, 
            type: 'sequence', 
            containerheight: '50px' 
        });
    }

	// Return jSon with count of friends
	smallworld_getCountFriendMessagesEtcJS();
	
	// Sharing bookmarks defines	
	xoops_smallworld(function () {
		xoops_smallworld('.share').live('click',function(e) {
            e.preventDefault();
			var id = xoops_smallworld(this).attr('id'); 
			var ref = xoops_smallworld('span[name="' + id + '"]').attr('rel');
			var desc = xoops_smallworld('span[name="' + id + '"]').attr('rel1');
			var username = xoops_smallworld('span[name="' + id + '"]').attr('rel2');
			xoops_smallworld('[name="' + id + '"]').toggle();
			xoops_smallworld('span[name="' + id + '"]').bookmark({
				onSelect: customBookmark,
				url:ref,
				description:desc,
				title:username
			}).dialog();
			//xoops_smallworld(".ui-dialog-titlebar").hide();
		});
	});
	
	// Donation 
	xoops_smallworld(function () {
		xoops_smallworld('#smallworldDonate').live('click',function() {
			window.open('https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=WKFZBRBGMYKCA&lc=DK"&item_name=Culex%2edk&item_number=culex&currency_code=DKK&bn=PP%2dDonationsBF%3asp%2epng%3aNonHosted', 'blank',	
				'width=600, height=400, menubar=no, toolbar=no, scrollbars=yes');
		});
	});
	

smallworldCheckNumDivs();
    
}); // END OF DOCUMENT READY IN THE START

// function to apply "show more" show less if number of comments
// are more than 2
function smallworldCheckNumDivs() {
    xoops_smallworld(document).ready(function() {  
        xoops_smallworld('.smallworld_commentcontainer').children('div').show();
        xoops_smallworld('.smallworld_CommentShowMoreSpan').remove();
        
        var showText=_smallworldCommentsMoreMore;
        var hideText=_smallworldCommentsMoreLess;

        xoops_smallworld('.smallworld_commentcontainer').each(function(){ 
            var hiddenElements = xoops_smallworld(this).children('div:gt(1)').hide();
            if (hiddenElements.size() > 0) {
                var showCaption = _smallworldCommentsMoreMore;
                xoops_smallworld(this).children('div:gt(1)').hide();
                xoops_smallworld(this).after('<div class="smallworld_CommentShowMoreSpan"><a href="javascript:void(0);" class="smallworld_CommentShowMore">' + showCaption + '</a></div>');
            }
        });

        xoops_smallworld('.smallworld_CommentShowMore').click(function(e) {
            e.preventDefault();
            if (xoops_smallworld(this).text()==showText) {
                xoops_smallworld(this).text(hideText);
            } else {
                xoops_smallworld(this).text(showText);
            }
            xoops_smallworld(this).parent().prev('div.smallworld_commentcontainer').children('div:gt(1)').slideToggle('slow');
        });
    });
}


// Open custom boomark window
function customBookmark(id, display, url) { 
    window.open(url, '_blank', 
        'width=600,height=400,menubar=no,toolbar=no,scrollbars=yes'); 
}

// Init birthplace_map
function initialize_birthplace(smallworld_birthlng,smallworld_birthlatt) {
	
	var birth_myLatlng = new google.maps.LatLng(smallworld_birthlatt, smallworld_birthlng);
	var birth_myOptions = {
	  zoom: 8,
	  center: birth_myLatlng,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var birth_map = new google.maps.Map(document.getElementById("_smallworld_birthplace_map"), birth_myOptions);
	var birth_marker = new google.maps.Marker({
        position: birth_myLatlng, 
        map: birth_map,
        title:"Culex.dk"
    });  
}

// Init currentcity_map
function initialize_currplace(smallworld_currlng,smallworld_currlatt) {
	var currplace_myLatlng = new google.maps.LatLng(smallworld_currlatt, smallworld_currlng);
	var currplace_myOptions = {
	  zoom: 8,
	  center: currplace_myLatlng,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var currplace_map = new google.maps.Map(document.getElementById("_smallworld_present_map"), currplace_myOptions);
	var currplace_marker = new google.maps.Marker({
        position: currplace_myLatlng, 
        map: currplace_map,
        title:"Culex.dk"
    });  
}

// Function to remove spans in editprofile & profile.php
// shooter = link id to press
// target = id of span to remove
// counter = name of item to count items
// Culex april 2011
function removelnk (shooter, target,counter) {
	xoops_smallworld(shooter).live('click',function(event) {
    event.preventDefault();
	if (counter == 'email') {
		var i = xoops_smallworld("input[name='emailtype[]']").length;
	}
	if (counter == 'screenname'){
		var i = xoops_smallworld("input[name='screenname_type[]']").length;
	}
	if (counter == 'school'){
		var i = xoops_smallworld("input[name='school_type[]']").length;
	}
	if (counter == 'job'){
		var i = xoops_smallworld("div#job").length;
	}	
		if(i===1){
          return false;
		}   
		if(i > 1) { // if you have at least 1 input on the form  
			xoops_smallworld(this).parent().prev().andSelf().remove(); //remove the last input 
			 i--; //deduct 1 from i so if i = 3, after i--, i will be i = 2  
		 }
	}); 
}


// Function to send invitation of friendship to userid
//get friends email ids and message to send invitation
function inviteFriends(friendID,myuid) {
	xoops_smallworld('#resultMsg').hide();
	var txtMsgModal = xoops_smallworld('#friendship').text().replace(/\t/g, '');
	var frNa = xoops_smallworld('#smallworld_capname').text();
	apprise(frNa+'... '+txtMsgModal+'<br><br> '+SmallworldConfirmBtnFI+' ?', args, function(r) {
		if(r) {
			// user clicked 'Yes'
			xoops_smallworld.ajax({
				type: 'POST',
				url: smallworld_url+ 'friendinvite.php?' + Math.random(),
				dataType: 'json',
				data: 'invitation=1&friend=' + friendID+'&myUid='+myuid,
				success: function(response){
					xoops_smallworld('#resultMsg').html(response.msg);
					xoops_smallworld('#friendship').html(response.msgChange);
                    return false;
				}
			});
		}
		else {
			// user clicked 'No'
			xoops_smallworld('#resultMsg').dialog('close');
			return false;
		}
	});		
}

// function to follow / unfollow friends
function FollowFriend(friendID,myuid) {
	xoops_smallworld('#resultMsgFollow').hide();	
	xoops_smallworld.ajax({
		type: 'POST',
		url: smallworld_url+ 'friendinvite.php?' + Math.random(),
		dataType: 'json',
		data: 'invitation=2&friend=' + friendID+'&myUid='+myuid,
		success: function(response){
			xoops_smallworld('#followfriend').html(response.msgChange);
			xoops_smallworld('#resultMsgFollow').html(response.msg);
			xoops_smallworld('#resultMsgFollow').dialog({show: "size",hide:"scale"});
            return false;
		}
	});
}

// function to Accept / deny friendships
function AcceptDenyFriend(stat,friendID,myuid,targetID) {
		xoops_smallworld.ajax({
		type: 'POST',
		url: smallworld_url+ 'friendinvite.php?' + Math.random(),
		dataType: 'json',
		data: 'invitation=3&friend=' + friendID+'&myUid='+myuid+'&stat='+stat,
		success: function(response){
			//xoops_smallworld('#comnMsg').show();
			//alert (response.msg);
			xoops_smallworld('tr#'+targetID).hide();
			if (response != null && response != '') {
                xoops_smallworld('#friendship').html(response.msgChange);
            }
            return false;
		}
	});
}

// Function to refresh current page
function smallworldRefresh () {
	location.reload(true);
}

function smallworld_getCountFriendMessagesEtcJS() {
	xoops_smallworld.ajax({
	  url: smallworld_url+"Get_Count.php?SmallworldGetUserMsgCount=1"+"&rndnum="+Math.floor(Math.random()*101),
	  cache: false,
	  dataType: "json",
	  success: function(data) {
		if (data != null && data != '') {
            var newcnt = data.NewUserMsgCount;
            var diff = newcnt-smallworld_getFriendsMsgComCount;
            
            if (diff < 0) {
                var text = smallworldDeletedMessages + diff;
                xoops_smallworld('#smallworld_messagecounter_id').html(text);
                xoops_smallworld('#smallworld_messagecounter_id').show();
            }
            
            if (diff == 0) {
                var text = '';
                xoops_smallworld('#smallworld_messagecounter_id').empty();
                xoops_smallworld('#smallworld_messagecounter_id').hide();
            }
            if (diff > 0) {
                var text = smallworldNewMessages + diff;
                xoops_smallworld('#smallworld_messagecounter_id').html(text);
                xoops_smallworld('#smallworld_messagecounter_id').show();
            }
        }
            return false;
	  }
		});
	setTimeout('smallworld_getCountFriendMessagesEtcJS()',10000);
};

function smallworld_DoValStart () {
		// Attact validation to registeration parts in register form
		if (smallworldvalidationstrenght != 0) {		
			xoops_smallworld("#smallworld_profileform-next-0").hide();
			xoops_smallworld("#smallworld_profileform-next-1").hide();
			
			if(xoops_smallworld.inArray('realname',smallworlduseverification) > -1) {
				
				xoops_smallworld("input#realname").validate({
					expression: "if (VAL) return true; else return false;",
					message: SmallworldValidationNameErrorMsg,
				});
			}
			
			if(xoops_smallworld.inArray('gender',smallworlduseverification) > -1) {
				xoops_smallworld("select#gender").validate({
					expression: "if (VAL != 0) return true; else return false;",
					message: SmallworldValidationGenderErrorMsg
				});
			}
			
			if(xoops_smallworld.inArray('interestedin',smallworlduseverification) > -1) {
				xoops_smallworld("#intingender").validate({
				expression: "if (isChecked(SelfID)) return true; else return false;",
				message: SmallworldValidationIntingenderErrorMsg
				});
				
			}
			
			if(xoops_smallworld.inArray('lookingfor',smallworlduseverification) > -1) {
				xoops_smallworld("#searchrelat").validate({
				expression: "if (isChecked(SelfID)) return true; else return false;",
				message: SmallworldValidationSearchrelatErrorMsg
				});	
			}
			
			if(xoops_smallworld.inArray('emails',smallworlduseverification) > -1) {
				xoops_smallworld('input[name="emailtype[]"]').live('blur',function(){
					var id = xoops_smallworld(this).attr('id');
					xoops_smallworld("#"+id).validate({
						expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9\\_\\-]+(\\.[a-zA-Z0-9\\_\\-]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
						message:"<img src='images/error.png' title='"+SmallworldValidationEmailTitleErrorMsg+"'/>"
					}); 
				});			
			}
			
			if(xoops_smallworld.inArray('birthday',smallworlduseverification) > -1) {
				xoops_smallworld("input[name='birthday']").validate({
					expression: "if (!isValidDate(parseInt(VAL.split('-')[2],10), parseInt(VAL.split('-')[1],10), parseInt(VAL.split('-')[0],10))) return false; else return true;",
					message: SmallworldValidationBirthdayErrorMsg
				});
			}
			
			if(xoops_smallworld.inArray('birthplace',smallworlduseverification) > -1) {
				xoops_smallworld("#birthplace").validate({
					expression: "if (VAL) return true; else return false;",
					message: SmallworldValidationBirthplaceErrorMsg
				});
			}

			if(xoops_smallworld.inArray('birthplace',smallworlduseverification) > -1) {
				xoops_smallworld("input#adress").validate({
					expression: "if (VAL) return true; else return false;",
					message: SmallworldValidationAdressErrorMsg
				}); 	
			}
			
			if(xoops_smallworld.inArray('presentcity',smallworlduseverification) > -1) {
				xoops_smallworld("input#present_city").validate({
					expression: "if (VAL) return true; else return false;",
					message: SmallworldValidationCityErrorMsg
				}); 	
			}
			
			if(xoops_smallworld.inArray('country',smallworlduseverification) > -1) {
				xoops_smallworld("input#present_country").validate({
					expression: "if (VAL) return true; else return false;",
					message: SmallworldValidationCountryErrorMsg
				}); 
			}
			
			
			if(xoops_smallworld.inArray('website',smallworlduseverification) > -1) {
				xoops_smallworld("textarea#website").validate({
					expression: "if (urlCheck(VAL)) return true; else return false;",
					message: SmallworldValidationWebsiteErrorMsg
				}); 
			}
			
			
			// Activation of validations to be filled on initial load
			xoops_smallworld('fieldset:visible').find('input,select,textarea').each(function() {
				xoops_smallworld(this).blur();
			});				

		}	
		
		if (smallworlduseverification.length !=0) {
				xoops_smallworld('#smallworld_profileform-next-0').show();
				xoops_smallworld('#smallworld_profileform-next-1').show();
		}		
        return false;
}

function attachAvatarOpen () {
    // Open comment and update avatar imagen in new window on click
	xoops_smallworld(function() {
        xoops_smallworld('.smallworld_big_face, .smallworld_small_face, .smallworldAttImg').css('cursor', 'pointer');
        xoops_smallworld('.smallworld_big_face, .smallworld_small_face, .smallworldAttImg').live('click',function(event) {
            var url = xoops_smallworld(this).attr('src');
            image = "<img src ='"+url+"' />";
            xoops_smallworld('<div id="lookingglassuseravatar">'+image+'</div>').appendTo('body');            
            event.preventDefault();
                if (xoops_smallworld('#lookingglassuseravatar').length) { // implies *not* zero
                    xoops_smallworld('#lookingglassuseravatar').show();
                    xoops_smallworld.fn.colorbox({
                        width:"auto", 
                        height:"70%",
                        inline:true, 
                        onCleanup:function() {
                            xoops_smallworld('#lookingglassuseravatar').remove();
                        },
                        onClosed:function() {
                            xoops_smallworld("#lookingglassuseravatar").remove();
                        },
                        onComplete : function() { 
                            xoops_smallworld(this).colorbox.resize(); 
                        },
                        href:"#lookingglassuseravatar"
                    });
                };
        }); //close click
	});
    return false;
}