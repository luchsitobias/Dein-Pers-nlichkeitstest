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

    <title>Logins</title>

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
                    <div id="home">
                      <a href="index.html"><button  type="button" class="">Home</button></a>
                    </div>
                </div>


                <!--Inputfelder-->
                <div class="col-md-offset-3 col-md-6" style="padding-top:10%;">
                    <h1> LOGIN </h1>

                            <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-8">
                                <input type="email" class="" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="">
                                <label for="inputPassword3" class="col-sm-2 control-label">Passwort </label>
                                <div class="col-sm-8">
                                <input type="password" class="" id="inputPassword3" placeholder="Passwort">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                    <input type="checkbox"> Eingaben speichern
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="">Anmelden</button>
                                </div>
                            </div>
                            </form>

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
