<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META INFORMATION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PAGE TITLE -->
    <title>Feed Me! API Mashup - Privacy Policy</title>

    <!-- STYLES / FONTS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>

	<!-- Container to hold Privacy Policy -->
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1>Privacy Policy</h1>
				<h2><i>Feed Me!</i> API Mashup</h2>
				<p>NO INFORMATION is stored through the use of this website, or used in any capacity other than the steps required to fully complete the service as described below:</p>
				<p style="margin-left: 20px;">
					<ol>
						<li>
							Your IP addresses is accessed by the IP-API Geolocation API and used to compile a JSON object representing your personal geolocation data. Your IP Address is an openly accessible piece of information. If you wish to browse the internet anonymously, I suggest using one of the plethora of proxies available or even the <a href="https://www.torproject.org/">Tor browser</a>
						</li>
						<li>
							The returned geolocation data is used to make a request, along with user input to the Yelp API. This returns an array of JSON objects composed of the three, highest rated locations for your general vicinity.
						</li>
						<li>
							Yelp API data is then used to construct the location listing with a map generated by the Google Maps Embed API, which uses location data for the particular location returned as a result of the Yelp API request.
						</li>
					</ol>
				</p>
				<p>NO COOKIES are generated through the use of this website.</p>
				<p>The IP-API Geolocation API hooks into a database of geolocation data referenced by known IP Addresses managed by <a href="http://ip-api.com" target="_blank">IP-API</a>.</p>
			</div>
		</div>
	</div>
</body>
</html>