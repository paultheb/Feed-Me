// IP-API Geolocation API call
(function () {

	// initialize location object
	var location = new Object();
	$(document).ready(function () {

		// make API call
		$.getJSON("http://ip-api.com/json/?callback=?", function(data) {

			// set location object properties
            location.city = data.city;
            location.state = data.region;

            // set form value for posting = location term
            $('input[name="location"]').val(location.city + ', ' + location.state);
        });
	});
})();

// The "Meat & Potatoes" 
$(document).ready(function () {

	// on click of the "Feed Me!" button
	$(document).on('click', '#submit-btn', function () {

		// display the AJAX loader
		$('#ajax-loader').fadeIn();

		// un-focus the submit button
		$(this).blur();

		// retrieve input values for the $.post
		var term = $('input[name="term"]').val();
		var location = $('input[name="location"]').val();

		// initialize styling on the results panel for this and subsequant API requests
		$('#results').css('min-height', '800px').css('margin-top', '48px');

		// make $.post call to the PHP script
		$.post('php/api_call.php', {term: term, location: location}, function (data) {
			
			// parse returned JSON data into a workable format
			data = JSON.parse(data);

			// initialize payload variable
			var payload = '';

			// cycle through returned JSON data (Array)
			for(var i = 0; i < data.length; i++) {

				// initialize particular variables for google maps use
				var name = data[i].google_maps_name;
				var address = data[i].google_maps_address;

				// construct URL for Google Maps Embed API call
				var url = 'https://www.google.com/maps/embed/v1/place?key=AIzaSyDHziYnV-Wdeie0NwaCZkgQoriHwLGurbk&q=' + name + address;
				
				// build map iframe with corresponding URL
				var map = '<iframe width="362" height="250" frameborder="0" style="border:0" src="' + url + '"></iframe>';

				// for each returned business (3), construct a payload "chunk"
				var chunk = '<div class="row result-row">' + 
								'<div class="pull-left" style="width:362px;">' + map + '</div>' +
									'<div class="pull-right" style="width:243px;">' +
										'<table class="table table-condensed">' +
											'<tr>' + 
												'<td>' + data[i].name + '</td>' +
											'</tr>' +
											'<tr>' + 
												'<td><img src="' + data[i].rating_img_url + '"> based on <b>' + data[i].review_count + '</b> reviews</td>' +
											'</tr>' + 
											'<tr>' + 
												'<td><i>"' + data[i].snippet_text + '"</i><br/><br/><a href="' + data[i].url + '" target="_blank"><img src="media/reviewsFromYelpRED.gif"></a></td>' +
											'</tr>' +
										'</table>' +
									'</div>' +
								'</div>' +
							'</div>';

				// append the chunk to the payload
				payload = payload + chunk;
			}

			// API calls and $.post call complete, fade out AJAX loader
			$('#ajax-loader').fadeOut();

			// add the results to the DOM
			$('#results').html(payload);
		});
	});
});