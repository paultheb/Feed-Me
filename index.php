<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META INFORMATION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PAGE TITLE -->
    <title>Feed Me! API Mashup</title>

    <!-- STYLES / FONTS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Full-Width Jumbotron (Hero Unit) -->
<div class="jumbotron" id="jumbotron">
    <div class="row">
        <!-- Maintain responsiveness of the "main landing" at all page sizes -->
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 content-panel" id="main-panel">
            <h1 class="text-center" id="jumbo-tag">Hello, world!</h1>
            <p class="text-center" id="tag">What are you in the mood for?</p>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <!-- Form - $.post WITH JSON -> Method: POST  Action: php/api_call.php -->
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="text-center input" name="term" placeholder="e.g. mexican">
                            <input type="hidden" name="location" value="">
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="btn-lg btn-submit" id="submit-btn">Feed Me!</button>
                        </div>
                        <div class="form-group text-center" id="loader-bar">
                            <img src="media/ajax-loader.gif" id="ajax-loader">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main container to hold results of API calls -->
<div class="container-fluid" id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="results">
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="container-fluid" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4" id="links-panel">

                <!-- Footer Links -->
                <ul id="links">
                    <li><a href="https://github.com/paultheb" target="_blank">GitHub</a></li>
                    <li><a href="http://www.paultheberge.com" target="_blank">My Site</a></li>
                    <li><a href="privacy.php" target="_blank">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Mashup Description -->
            <div class="col-md-4 col-md-offset-4" id="footer-text">
                <h2>What is <i>Feed Me!</i> ?</h2>
                <p>
                    <i>Feed Me!</i> is a mashup of the Yelp, IP-API Geolocation, and Google Maps Embed APIs. The text field feeds into a PHP script: retrieves the three highest rated locations which serve the type of food, or item of your preference (from Yelp) on the basis of your current location, and lists them with a snippet of their most recent review and rating.
                </p>
                <p>
                    A map is also generated off of the location details provided by Yelp through the Google Maps Embed API. Feel free to check out the <a href="http://www.yelp.com/developers/documentation" target="_blank">Yelp API</a>, <a href="http://ip-api.com/docs/">IP-API Geolocation API</a>, or the <a href="https://developers.google.com/maps/documentation/embed/guide" target="_blank">Google Maps Embed API</a> to learn more.
                </p>
            </div>
        </div>

        <!-- COPYRIGHT -->
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2014 - <a href="http://www.paultheberge.com" target="_blank">Paul Theberge</a></p>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
