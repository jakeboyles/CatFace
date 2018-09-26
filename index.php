<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cincy Startup Week</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="https://rawgit.com/kangax/fabric.js/master/dist/fabric.js"></script>
    </head>
    <body>
    <h2>#StartupCincy Profile Generator</h2>

    <div class="wholeContainer">
        <div class="people">
            <h4>Step 1:</h4>
            <a href="#" class="pull-left btn btn-primary" id="upload_widget_opener">Upload Image</a>

            <h4>Step 2</h4> 
            <P>Move and Resize Your Image So Your Face Is In The Middle.</p>

            <h4>Step 3</h4>
            <a href="#" class="pull-left btn btn-primary" id="set">Set Image</a>

            <h4>Step 4</h4>
            <a id="save" href="#" class="pull-left save btn btn-primary">Save Image</a>
        </div>

        <canvas id="c" class="lower-canvas" height="200" width="900" style=" width: 200px; height: 200px; left: 0px; top: 0px; -moz-user-select: none;"></canvas>

        <div id="canvasContainer"></div>

        <div class="saveContainer hide">
            <p>Right Click to Save and Rep #StartupCincy on your Social Accounts!</p>
            <div id="output" class="saved"></div>

            <a class="btn startover">Start Over</a>
        </div>

        <span class="cred">A <a href="http://www.twitter.com/jakeboyles">@JakeBoyles</a> Project. Built In Cincy. </span>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//widget.cloudinary.com/global/all.js" type="text/javascript"></script>  
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    </body>
</html>
