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

    <title>Backend - Resultate </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/backend.css" rel="stylesheet">


</head>

<body>

    <!--Navigation-->
    <div class="container content">
        <div class="row">
            <div class="col-md-offset-10 col-md-2 navigation">
                <button href="login.php" class="btn btn-default">Auslogggen</button>
            </div>
            <div class="col-md-12 navigation">
                    <ul class="nav nav-tabs ">
                        <li>
                            <a href="backend_resultate.php" role="button" aria-haspopup="true" aria-expanded="false">
                                Resultate <span class=""></span>
                            </a>
                        </li>
                        <li role="">
                            <a href="backend_fragen.php" role="button" aria-haspopup="true" aria-expanded="false">
                                Fragen <span class=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="backend_antworten.php" role="button" aria-haspopup="true" aria-expanded="false">
                                Antworten<span class=""></span>
                            </a>
                        </li>
                    </ul>
            </div>
            </div>
        </div>
    </div>

    <!--Tabelle-->
    <div class="container content">
        <div class="row">
            <div class="col-md-12 tabelle">

                <!--Titel-->
                <h2>Resultate</h2>

                <!--Tabelle-->
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Anteil Resultat 1</th>
                            <th>Anteil Resultat 2</th>
                            <th>Anteil Resultat 3</th>
                            <th>Anteil Resultat 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">sl.ravasio@hispeed.ch</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">sl.ravasio@hispeed.ch</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">sl.ravasio@hispeed.ch</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

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
