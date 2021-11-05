<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>getout</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/getout.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JQuery -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  </head>
  <body>
    <div class="container">
      <form id="shootCommand" class="form-signin" method="post" target="_self">
        <h1 class="display-1">getout
          <small class="text-muted">v0.1</small>
        </h1>
        <br />
        <div class="form-group">
          <label for="inputServer" class="sr-only">Server</label>
          <input type="text" id="inputServer" class="form-control form-control-sm" placeholder="Servername or IP address" value="localhost" required>
          <small id="inputServer" class="form-text text-muted">Multiple servers separate with [ ; ]</small>
        </div>
        <div class="form-group">
          <label for="inputCommand" class="sr-only">Shell Command</label>
          <input type="text" id="inputCommand" class="form-control" placeholder="Shell Command" required autofocus>
          <small id="inputCommand" class="form-text text-muted"> Multiple commands separate with [&&]</small>
        </div>
        <div class="form-inline">
          <label for="inputLogin" class="sr-only">Login</label>
          <input type="login" id="inputLogin" class="form-control" placeholder="Loginname" required>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        <input id="fire" class="btn btn-lg btn-danger btn-block" type="submit" value="FIRE!">
      </form>
      <div id=load></div>
      <div id=success></div>
      <div id=output></div>
    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
    <script src="./bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="./js/shot.js"></script>
  </body>
</html>
