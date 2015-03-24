<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Zona Abonados</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/toaster.css" rel="stylesheet">
    <link href="css/xeditable.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toaster.js"></script>
    <script src="js/xeditable.min.js"></script>
    <!-- Libs -->
    <script src="app/app.js"></script>
    <script src="app/data.js"></script>
    <script src="app/directives.js"></script>
    <script src="app/authCtrl.js"></script>          
    <style>
        a {
            color: green;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]><link href= "css/bootstrap-theme.css"rel= "stylesheet" >

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body ng-cloak="">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header col-md-8">
                    <button type="button" class="navbar-toggle" toggle="collapse" target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" rel="home" title="Zona Abonados">Zona Abonados</a>
                </div>
                <div class="navbar-header col-md-2">
                    <a class="navbar-brand" rel="home" title="AngularJS Authentication Tutorial" href="http://clubsantos.mx">Home</a>
                </div>
                <div class="navbar-header col-md-2">
                    <a class="navbar-brand" rel="home" title="Zona Fan" href="http://clubsantos.mx/contenidos/zonafan">Zona Fan</a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container" style="margin-top:20px;">

            <div data-ng-view="" id="ng-view" class="slide-animation"></div>

        </div>
</body>
<toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
</html>