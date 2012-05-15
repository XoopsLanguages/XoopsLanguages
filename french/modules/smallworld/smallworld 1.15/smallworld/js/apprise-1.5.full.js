// Apprise 1.5 by Daniel Raftery
// http://thrivingkings.com/apprise
//
// Button text added by Adam Bezulski
//

function apprise(string, args, callback)
	{
	var default_args =
		{
		'confirm'		:	false, 		// Ok and Cancel buttons
		'verify'		:	false,		// Yes and No buttons
		'input'			:	false, 		// Text input (can be true or string for default text)
		'animate'		:	false,		// Groovy animation (can true or number, default is 400)
		'textOk'		:	'Ok',		// Ok button default text
		'textCancel'	:	'Cancel',	// Cancel button default text
		'textYes'		:	'Yes',		// Yes button default text
		'textNo'		:	'No'		// No button default text
		}
	
	if(args) 
		{
		for(var index in default_args) 
			{ if(typeof args[index] == "undefined") args[index] = default_args[index]; } 
		}
	
	var aHeight = xoops_smallworld(document).height();
	var aWidth = xoops_smallworld(document).width();
	xoops_smallworld('body').append('<div class="appriseOverlay" id="aOverlay"></div>');
	xoops_smallworld('.appriseOverlay').css('height', aHeight).css('width', aWidth).fadeIn(100);
	xoops_smallworld('body').append('<div class="appriseOuter"></div>');
	xoops_smallworld('.appriseOuter').append('<div class="appriseInner"></div>');
	xoops_smallworld('.appriseInner').append(string);
    xoops_smallworld('.appriseOuter').css("left", ( xoops_smallworld(window).width() - xoops_smallworld('.appriseOuter').width() ) / 2+xoops_smallworld(window).scrollLeft() + "px");
    
    if(args)
		{
		if(args['animate'])
			{ 
			var aniSpeed = args['animate'];
			if(isNaN(aniSpeed)) { aniSpeed = 400; }
			xoops_smallworld('.appriseOuter').css('top', '-200px').show().animate({top:"100px"}, aniSpeed);
			}
		else
			{ xoops_smallworld('.appriseOuter').css('top', '100px').fadeIn(200); }
		}
	else
		{ xoops_smallworld('.appriseOuter').css('top', '100px').fadeIn(200); }
    
    if(args)
    	{
    	if(args['input'])
    		{
    		if(typeof(args['input'])=='string')
    			{
    			xoops_smallworld('.appriseInner').append('<div class="aInput"><input type="text" class="aTextbox" t="aTextbox" value="'+args['input']+'" /></div>');
    			}
    		else
    			{
				xoops_smallworld('.appriseInner').append('<div class="aInput"><input type="text" class="aTextbox" t="aTextbox" /></div>');
				}
			xoops_smallworld('.aTextbox').focus();
    		}
    	}
    
    xoops_smallworld('.appriseInner').append('<div class="aButtons"></div>');
    if(args)
    	{
		if(args['confirm'] || args['input'])
			{ 
			xoops_smallworld('.aButtons').append('<button value="ok">'+args['textOk']+'</button>');
			xoops_smallworld('.aButtons').append('<button value="cancel">'+args['textCancel']+'</button>'); 
			}
		else if(args['verify'])
			{
			xoops_smallworld('.aButtons').append('<button value="ok">'+args['textYes']+'</button>');
			xoops_smallworld('.aButtons').append('<button value="cancel">'+args['textNo']+'</button>');
			}
		else
			{ xoops_smallworld('.aButtons').append('<button value="ok">'+args['textOk']+'</button>'); }
		}
    else
    	{ xoops_smallworld('.aButtons').append('<button value="ok">Ok</button>'); }
	
	xoops_smallworld(document).keydown(function(e) 
		{
		if(xoops_smallworld('.appriseOverlay').is(':visible'))
			{
			if(e.keyCode == 13) 
				{ xoops_smallworld('.aButtons > button[value="ok"]').click(); }
			if(e.keyCode == 27) 
				{ xoops_smallworld('.aButtons > button[value="cancel"]').click(); }
			}
		});
	
	var aText = xoops_smallworld('.aTextbox').val();
	if(!aText) { aText = false; }
	xoops_smallworld('.aTextbox').keyup(function()
    	{ aText = xoops_smallworld(this).val(); });
   
    xoops_smallworld('.aButtons > button').click(function()
    	{
    	xoops_smallworld('.appriseOverlay').remove();
		xoops_smallworld('.appriseOuter').remove();
    	if(callback)
    		{
			var wButton = xoops_smallworld(this).attr("value");
			if(wButton=='ok')
				{ 
				if(args)
					{
					if(args['input'])
						{ callback(aText); }
					else
						{ callback(true); }
					}
				else
					{ callback(true); }
				}
			else if(wButton=='cancel')
				{ callback(false); }
			}
		});
	}
