<!DOCTYPE HTML>
<html>
<head>
    <title>Avto Rescue</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]>
    <script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="/assets/css/main.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/assets/css/ie9.css"/><![endif]-->
<!--    My SCSS-->
    <link href="assets/css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <?php use Jenssegers\Agent\Agent; $agent = new Agent();  $agent->isMobile() ? $device = 'mobile' : $device =  'desktop'?>

</head>
<body class="">
<div id="page-wrapper">

    <div id="header-wrapper">
        <div class="container">


            <? include 'nav.php'?>

            <? include "$page.php"?>


        </div>
    </div>


</div>
<? include "footer.php"?>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery.dropotron.min.js"></script>
<script src="/assets/js/skel.min.js"></script>
<script src="/assets/js/skel-viewport.min.js"></script>
<script src="/assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="/assets/js/main.js"></script>

</body>
</html>