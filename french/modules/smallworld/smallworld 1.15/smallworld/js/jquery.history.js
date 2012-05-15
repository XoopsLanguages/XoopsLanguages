/*
 * xoops_smallworld history plugin
 * 
 * sample page: http://www.mikage.to/xoops_smallworld/xoops_smallworld_history.html
 *
 * Copyright (c) 2006-2009 Taku Sano (Mikage Sawatari)
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Modified by Lincoln Cooper to add Safari support and only call the callback once during initialization
 * for msie when no initial hash supplied.
 */


xoops_smallworld.extend({
	historyCurrentHash: undefined,
	historyCallback: undefined,
	historyIframeSrc: undefined,
	
	historyInit: function(callback, src){
		xoops_smallworld.historyCallback = callback;
		if (src) xoops_smallworld.historyIframeSrc = src;
		var current_hash = location.hash.replace(/\?.*$/, '');
		
		xoops_smallworld.historyCurrentHash = current_hash;
		// if ((xoops_smallworld.browser.msie) && (xoops_smallworld.browser.version < 8)) {
		if (xoops_smallworld.browser.msie) {
			// To stop the callback firing twice during initilization if no hash present
			if (xoops_smallworld.historyCurrentHash == '') {
			xoops_smallworld.historyCurrentHash = '#';
		}
		
			// add hidden iframe for IE
			xoops_smallworld("body").prepend('<iframe id="xoops_smallworld_history" style="display: none;"'+
				(xoops_smallworld.historyIframeSrc ? ' src="'+xoops_smallworld.historyIframeSrc+'"' : '')
				+'></iframe>'
			);
			var ihistory = xoops_smallworld("#xoops_smallworld_history")[0];
			var iframe = ihistory.contentWindow.document;
			iframe.open();
			iframe.close();
			iframe.location.hash = current_hash;
		}
		else if (xoops_smallworld.browser.safari) {
			// etablish back/forward stacks
			xoops_smallworld.historyBackStack = [];
			xoops_smallworld.historyBackStack.length = history.length;
			xoops_smallworld.historyForwardStack = [];
			xoops_smallworld.lastHistoryLength = history.length;
			
			xoops_smallworld.isFirst = true;
		}
		if(current_hash)
			xoops_smallworld.historyCallback(current_hash.replace(/^#/, ''));
		setInterval(xoops_smallworld.historyCheck, 100);
	},
	
	historyAddHistory: function(hash) {
		// This makes the looping function do something
		xoops_smallworld.historyBackStack.push(hash);
		
		xoops_smallworld.historyForwardStack.length = 0; // clear forwardStack (true click occured)
		this.isFirst = true;
	},
	
	historyCheck: function(){
		// if ((xoops_smallworld.browser.msie) && (xoops_smallworld.browser.version < 8)) {
		if (xoops_smallworld.browser.msie) {
			// On IE, check for location.hash of iframe
			var ihistory = xoops_smallworld("#xoops_smallworld_history")[0];
			var iframe = ihistory.contentDocument || ihistory.contentWindow.document;
			var current_hash = iframe.location.hash.replace(/\?.*$/, '');
			if(current_hash != xoops_smallworld.historyCurrentHash) {
			
				location.hash = current_hash;
				xoops_smallworld.historyCurrentHash = current_hash;
				xoops_smallworld.historyCallback(current_hash.replace(/^#/, ''));
				
			}
		} else if (xoops_smallworld.browser.safari) {
			if(xoops_smallworld.lastHistoryLength == history.length && xoops_smallworld.historyBackStack.length > xoops_smallworld.lastHistoryLength) {
				xoops_smallworld.historyBackStack.shift();
			}
			if (!xoops_smallworld.dontCheck) {
				var historyDelta = history.length - xoops_smallworld.historyBackStack.length;
				xoops_smallworld.lastHistoryLength = history.length;
				
				if (historyDelta) { // back or forward button has been pushed
					xoops_smallworld.isFirst = false;
					if (historyDelta < 0) { // back button has been pushed
						// move items to forward stack
						for (var i = 0; i < Math.abs(historyDelta); i++) xoops_smallworld.historyForwardStack.unshift(xoops_smallworld.historyBackStack.pop());
					} else { // forward button has been pushed
						// move items to back stack
						for (var i = 0; i < historyDelta; i++) xoops_smallworld.historyBackStack.push(xoops_smallworld.historyForwardStack.shift());
					}
					var cachedHash = xoops_smallworld.historyBackStack[xoops_smallworld.historyBackStack.length - 1];
					if (cachedHash != undefined) {
						xoops_smallworld.historyCurrentHash = location.hash.replace(/\?.*$/, '');
						xoops_smallworld.historyCallback(cachedHash);
					}
				} else if (xoops_smallworld.historyBackStack[xoops_smallworld.historyBackStack.length - 1] == undefined && !xoops_smallworld.isFirst) {
					// back button has been pushed to beginning and URL already pointed to hash (e.g. a bookmark)
					// document.URL doesn't change in Safari
					if (location.hash) {
						var current_hash = location.hash;
						xoops_smallworld.historyCallback(location.hash.replace(/^#/, ''));
					} else {
						var current_hash = '';
						xoops_smallworld.historyCallback('');
					}
					xoops_smallworld.isFirst = true;
				}
			}
		} else {
			// otherwise, check for location.hash
			var current_hash = location.hash.replace(/\?.*$/, '');
			if(current_hash != xoops_smallworld.historyCurrentHash) {
				xoops_smallworld.historyCurrentHash = current_hash;
				xoops_smallworld.historyCallback(current_hash.replace(/^#/, ''));
			}
		}
	},
	historyLoad: function(hash){
		var newhash;
		hash = decodeURIComponent(hash.replace(/\?.*$/, ''));
		
		if (xoops_smallworld.browser.safari) {
			newhash = hash;
		}
		else {
			newhash = '#' + hash;
			location.hash = newhash;
		}
		xoops_smallworld.historyCurrentHash = newhash;
		
		// if ((xoops_smallworld.browser.msie) && (xoops_smallworld.browser.version < 8)) {
		if (xoops_smallworld.browser.msie) {
			var ihistory = xoops_smallworld("#xoops_smallworld_history")[0];
			var iframe = ihistory.contentWindow.document;
			iframe.open();
			iframe.close();
			iframe.location.hash = newhash;
			xoops_smallworld.lastHistoryLength = history.length;
			xoops_smallworld.historyCallback(hash);
		}
		else if (xoops_smallworld.browser.safari) {
			xoops_smallworld.dontCheck = true;
			// Manually keep track of the history values for Safari
			this.historyAddHistory(hash);
			
			// Wait a while before allowing checking so that Safari has time to update the "history" object
			// correctly (otherwise the check loop would detect a false change in hash).
			var fn = function() {xoops_smallworld.dontCheck = false;};
			window.setTimeout(fn, 200);
			xoops_smallworld.historyCallback(hash);
			// N.B. "location.hash=" must be the last line of code for Safari as execution stops afterwards.
			//      By explicitly using the "location.hash" command (instead of using a variable set to "location.hash") the
			//      URL in the browser and the "history" object are both updated correctly.
			location.hash = newhash;
		}
		else {
		  xoops_smallworld.historyCallback(hash);
		}
	}
});


