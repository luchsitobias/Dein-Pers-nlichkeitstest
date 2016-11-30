<?php
require_once ('system/data.php');
require_once ('system/security.php');

$error = false;
$error_msg = "";
$success = false;
$success_msg = "";

$result = get_fragen($f_id, $frage);

while ($frage) {
    $n_frage = get_fragen();
}

 ?>

<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fragen</title>

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
                <div class="col-md-1">
                    <div id="login" class="btn-group">
                      <a href="index.php"><button  type="button" class="">Home</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content">
        <div class="row">
            <div class="col-md-12">

            <!--Inputfelder-->
            <div class="col-md-offset-2 col-md-8" style="padding-top:10%;">

                <!--Fragen-->
                        <h1>FRAGE 1</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                <div class="radio">

                        <!--Antworten-->
                        <div style="padding-top:5%;">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        </div>
                        <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                        </div>
                        <div class="radio disabled">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                            Option three is disabled
                        </label>
                        </div>
                        <div class="radio disabled">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                            Option three is disabled
                        </label>
                        </div>

                </div>

            </div>

                    <!--Buttons-->
                    <div class="col-md-12" style="padding-top:10%;">
                        <div class="col-md-offset-5 col-md-2">
                            <a href="ergebnis.php"><button  type="button" class="">Weiter</button></a>
                        </div>
                    </div>

            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
