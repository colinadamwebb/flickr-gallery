<!DOCTYPE html>
<html>
    <head>
        <title>John Does photos</title>
        <link rel="stylesheet" href="includes/styles/style.css" type="text/css">

        <link rel="shortcut icon" href="/includes/images/favicon.ico"/>
        <link rel="apple-touch-icon-precomposed" href="/includes/images/ios/icon.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/includes/images/ios/icon-72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/includes/images/ios/icon@2x.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/includes/images/ios/icon-72@2x.png" />

        <meta name="apple-mobile-web-app-capable" content="yes" />
        
		<!-- Uncomment and replace with your personal profile URLs if you want to  -->
        <!-- <link rel="author" href="https://plus.google.com/123456789">          -->
        <!-- <link rel="author" href="https://facebook.com/johndoe">               -->
    </head>
    <body>
        <div id="container">
            <?php require_once("posts.htm"); ?>
			<?php require_once("footer.htm"); ?>
        </div>
		
		<!-- This would be a good place to insert Google Analytics code -->
		
		<!-- Use high resolution images on Retina Displays-->
        <script>
            var images = document.getElementsByTagName("img");
            if (window.devicePixelRatio > 1.5) {
                for (var i=0; i<images.length; i++) {
                    images[i].src = images[i].id;
                }
            }
        </script>
    </body>
</html>
