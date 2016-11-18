<?php
require_once ('system/data.php');
require_once ('system/security.php');

$error = false;
$error_msg = "";
$success = false;
$success_msg = "";

 ?>

<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ergebnis</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">

</head>

<body>

    <!--Home Button-->
    <div class="container content">
        <div class="row">
            <div class="col-md-12">

            <!--Home Button-->
            <div class="col-md-12">
              <div class="">
                  <div id="login" class="btn-group">
                    <a href="index.php"><button  type="button" class="">Home</button></a>
                  </div>
              </div>
            </div>

            <!--Ergebnis-->
            <div class="col-md-12">
              <div class="col-md-offset-3 col-md-6" style="padding-top:20%;">
                  <h1>Du bist...</h1>
                  <h1>xy% (Ergebniss des Tests) </h1>
              </div>
            </div>

            <!--Button-->
            <div class="col-md-offset-3 col-md-6">
                <a href="#berufe" class="page-scroll">
                    <button type="button" class="">Zu den Berufen</button>
                </a>
            </div>


            <!--Berufe-->
            <div id="berufe" class="col-md-12" >
                <div class="col-md-offset-1 col-md-6" style="padding-top:20%;">
                    <h1>Du bist...</h1>
                    <h1>Berufe</h1>
                </div>
            </div>

            <div class="col-md-offset-1 col-md-4 content-box">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>

      </div>
  </div>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
