<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ahalogizer</title>
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
    <h2>Ahalogizer</h2>

    <div class="wholeContainer">
        <div class="people">
            <H3>Ahalogy Product</H3>
            <img class="chris person" src="img/chris.png">
            <img class="connor person" src="img/connor.png">
            <img class="joe person" src="img/joe.png">
            <img class="mojita person" src="img/mojita.png">
            <img class="nick person" src="img/nick.png">
            <img class="ross person" src="img/ross.png">
            <img class="kolin person" src="img/kolin.png">
            <a href="#" class="pull-left save btn btn-primary">Save</a>
        </div>

        <canvas id="c" class="lower-canvas" height="200" width="900" style=" width: 200px; height: 200px; left: 0px; top: 0px; -moz-user-select: none;"></canvas>

        <div id="canvasContainer"></div>

        <div class="saveContainer">
            <div id="output" class="saved"></div>
        </div>

        <div class="cats">
            <img class="cat1 cat" src="img/cat1.jpg">
            <img class="cat2 cat" src="img/cat2.png">
            <img class="cat3 cat" src="img/cat3.png">
            <img class="cat4 cat" src="img/cat4.png">
            <img class="cat5 cat" src="img/cat5.png">
            <img class="cat6 cat" src="img/cat6.png">
            <img class="cat7 cat" src="img/cat7.png">
            <!-- <img class="cat8 cat" src="img/cat8.png"> -->
            <img class="cat9 cat" src="img/cat9.jpg">
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
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
