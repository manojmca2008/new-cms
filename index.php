<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <title>MunchAdo Login</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />        
        <!-- Theme style -->

    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header"  ng-include="'partials/login-header.html'">
        </header>
        <div ng-view></div>

        <script src="js/libs/angular.min.js"></script>
        <script src="js/libs/angular-route.min.js"></script>
        <script src="js/libs/angular-animate.min.js" ></script>
        <script src="js/libs/toaster.js"></script>
        <script src="app/auth/app.js"></script>
        <script src="app/auth/services/data.js"></script>
        <script src="app/auth/directives/directives.js"></script>
        <script src="app/auth/controllers/authCtrl.js"></script>
    </body>
</html>
