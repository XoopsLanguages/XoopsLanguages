	// AutoSugguest for city / country in forms using geonames
			xoops_smallworld(function() {
				var img;
				xoops_smallworld( "#present_city" ).autocomplete({
					source: function( request, response ) {
						xoops_smallworld.ajax({
							url: "http://ws.geonames.org/searchJSON",
							dataType: "jsonp",
							data: {
								featureClass: "P",
								style: "full",
								maxRows: 10,
								name_startsWith: request.term,
							},
							success: function( data ) {
								response( xoops_smallworld.map( data.geonames, function( item ) {
									img = "<img src='"+smallworld_url+"images/flags/" + item.countryCode+ ".gif'>";
									var lng = item.lng;
									var lat = item.lat;
									return {
										label: img+" "+item.name + " / " + item.countryName,
										value: item.name,
										source: item
									}
								}));
							}
						});
					},
					minLength: 2,
					select: function(event, ui ) {
							if (ui.item) {
							 xoops_smallworld("input[name=present_lat]").val( ui.item.source.lat );
							 xoops_smallworld("input[name=present_lng]").val( ui.item.source.lng );
							 var flag = ui.item.source.countryCode.toLowerCase();
							 xoops_smallworld("#flag").html("<img src='"+smallworld_url+"images/flags/"+flag+".gif'");
							 xoops_smallworld("input[name=present_country]").val(smallworld_url+"images/flags/"+flag+".gif");
							 xoops_smallworld("input[name=present_country_img]").val(smallworld_url+"images/flags/"+flag+".gif");
								xoops_smallworld(this).val(ui.item.value);
						   }
					},
					open: function() {
						xoops_smallworld( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
					},
					close: function() {
						xoops_smallworld( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
					}
				});
				/* this allows us to pass in HTML tags to autocomplete. Without this they get escaped */
				xoops_smallworld[ "ui" ][ "autocomplete" ].prototype["_renderItem"] = function( ul, item) {
				return xoops_smallworld( "<li></li>" ) 
				  .data( "item.autocomplete", item )
				  .append( xoops_smallworld( "<a></a>" ).html( item.label ) )
				  .appendTo( ul );
				};			
			
			
			});