/*
 * xoops_smallworlduery geo_autocomplete plugin 2.1.1
 *
 * Copyright (c) 2010 Bob Hitching
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Requires xoops_smallworld.js + jquery UI Autocomplete
 * 
 */

 // Modified ( april 2011 ) by Michael Albertsen <culex@culex.dk> to fetch country.short_name,
 // lat,lng and set a hidden input val
xoops_smallworld.widget( "ui.geo_autocomplete", {
	// setup the element as an autocomplete widget with some geo goodness added
	_init: function() {
		this.options._geocoder = new google.maps.Geocoder; // geocoder object
		this.options._cache = {}; // cache of geocoder responses
		this.element.autocomplete(this.options);		
		// _renderItem is used to prevent the widget framework from escaping the HTML required to show the static map thumbnail
		this.element.data('autocomplete')._renderItem = function(_ul, _item) {
			return xoops_smallworld('<li></li>').data('item.autocomplete', _item).append(this.options.getItemHTML(_item)).appendTo(_ul);
		};
	},
	// default values
	options: {
		geocoder_region: '', // filter to a specific region, e.g. 'Europe'
		geocoder_types: 'locality,sublocality,neighborhood', // array of acceptable location types, see http://code.google.com/apis/maps/documentation/javascript/services.html#GeocodingAddressTypes
		//geocoder_types: 'locality,political,sublocality,neighborhood,country', // array of acceptable location types, see http://code.google.com/apis/maps/documentation/javascript/services.html#GeocodingAddressTypes
		geocoder_address: false, // true = use the full formatted address, false = use only the segment that matches the search term
		mapwidth: 100, // width of static map thumbnail
		mapheight: 100, // height of static map thumbnail
		maptype: 'terrain', // see http://code.google.com/apis/maps/documentation/staticmaps/#MapTypes
		mapsensor: false, // see http://code.google.com/apis/maps/documentation/staticmaps/#Sensor
		minLength: 2, // see http://xoops_smallworldueryui.com/demos/autocomplete/#option-minLength
		delay: 300, // see http://xoops_smallworldueryui.com/demos/autocomplete/#option-delay
		// callback function to get autocomplete results
		source: function(_request, _response) {
			if (_request.term in this.options._cache) {
				_response(this.options._cache[_request.term]);
			} else {
				var self = this;
				var _address = _request.term + (this.options.geocoder_region ? ', ' + this.options.geocoder_region : '');
				this.options._geocoder.geocode({'address': _address}, function(_results, _status) {
					var _parsed = [];
					if (_results && _status && _status == 'OK') {
						var _types = self.options.geocoder_types.split(',');
						xoops_smallworld.each(_results, function(_key, _result) {
							if (xoops_smallworld.map(_result.types, function(_type) {
								return xoops_smallworld.inArray(_type, _types) != -1 ? _type : null;
							}).length && _result.geometry && _result.geometry.viewport) {

								if (self.options.geocoder_address) {
									_place = _result.formatted_address;
								} else {
										// place is first matching segment, or first segment
										var _place_parts = _result.formatted_address.split(',');
										var _place = _place_parts[0];
										// removing number (postal numbers etc) in lower case letters (culex)
										var _place1 = _place.replace(/\d+/g, '').toLowerCase();
											// if not empty the create placeresult (city / country) (culex)
											if (_place_parts[1] != '') {
												var _place2 = _place_parts[1].toLowerCase();
												 var placeresult = xoops_smallworld.trim(_place1);	
											}
												// if not defined country then replace with ??? (culex)
												if (_place_parts[1] == undefined) {
													var _place2 = '???';
													 var placeresult = xoops_smallworld.trim(_place1);											 
												}
										xoops_smallworld.each(_place_parts, function(_key, _part) {
											if (_part.toLowerCase().indexOf(_request.term.toLowerCase()) != -1) {
												_place = xoops_smallworld.trim(_part);
												return false; // break
											}
									});
								  }
								_parsed.push({
									value: placeresult,
									label: _result.formatted_address,
									viewport: _result.geometry.viewport,
									//Getting geometric info // (culex)
									geometry: _result.geometry.location
								});
							}
						});
					}
					self.options._cache[_request.term] = _parsed;
					_response(_parsed);	
				});
			}
		  // Added a select so lat,lng and short_country name is based of selected item (if more than one is suggested) (culex)	
		},select: function(event, ui) { 
			// Calling function codeLatLng to get back info on selected item // (culex)
			var c_code = codeLatLng(ui.item.geometry.lat(),ui.item.geometry.lng());
			xoops_smallworld("input[name=birthplace_country]").val(c_code);
			xoops_smallworld("input[name=birthplace_lat]").val(ui.item.geometry.lat());
			xoops_smallworld("input[name=birthplace_lng]").val(ui.item.geometry.lng());
		},
		// returns the HTML used for each autocomplete list item
		getItemHTML: function(_item) {		
			var _src = 'http://maps.google.com/maps/api/staticmap?visible=' + _item.viewport.getSouthWest().toUrlValue() + '|' + _item.viewport.getNorthEast().toUrlValue() + '&size=' + this.mapwidth + 'x' + this.mapheight + '&maptype=' + this.maptype + '&sensor=' + (this.mapsensor ? 'true' : 'false');		
			return '<a><img style="float:left;margin-right:5px;" src="' + _src + '" width="' + this.mapwidth + '" height="' + this.mapheight + '" /> ' + _item.label.replace(/,/gi, ',<br/>') + '<br clear="both" /></a>'
		}
	}
});


// Function used to iterate through results of adress_components
// in order to find instance of "country". 
// Culex <culex@culex.dk) April 2011
// Input (latitude, longitude)
// Return the value of country.short_name from selected instance
function codeLatLng(lat,lng,txt) {
	var txt;
	var test = new google.maps.Geocoder; // geocoder object
    var latlng = new google.maps.LatLng(lat, lng);
    test.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
		// this is just looking at the first result - > results[0]
		for (var i = 0; i < results[0].address_components.length; i++) {
			var addr = results[0].address_components[i];
			// check if this entry in address_components has a type of country
			if (addr.types[0] == "country") {
				//push values to hidden input fields based on input name (country, lat, lng) (culex)
				xoops_smallworld("input[name=birthplace_country]").val(addr.long_name.toLowerCase());
				// based on short name show image flag in <div#flag> (Culex)
				xoops_smallworld("#flag").html("<img src='"+smallworld_url+"images/flags/"+addr.short_name.toLowerCase()+".gif'");				
				xoops_smallworld("input[name=birthplace_country_img]").val(smallworld_url+"images/flags/"+addr.short_name.toLowerCase()+".gif");

		} else {
      }
		}
	 } 
	  
    });
}