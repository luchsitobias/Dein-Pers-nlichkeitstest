<?php

session_start();
if(!isset($_SESSION['id'])){
  header("Location:login.php");
}else{
  $admin_id = $_SESSION['id'];
}

require_once ('system/data.php');
require_once ('system/security.php');

$error = false;
$error_msg = "";
$success = false;
$success_msg = "";

$result = show_fragen();

 ?>

<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Backend - Fragen</title>

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
                <a href="login.php" class="btn btn-default">Ausloggen</a>
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

    <!--Tabelle Fragen bearbeiten -->
    <div class="container content">
        <div class="row">
            <div class="col-md-12 tabelle">

              <!--Titel 1-->
              <h2>Fragen bearbeiten</h2>
              <?php   while($frage = mysqli_fetch_assoc($result)){?>
                        <!--Inputfelder-->

              <table class="table table-bordered ">
                    <!--Fragen-->
                    <tr>
                      <th style="width:100px;" scope="row">FRAGE <?php echo $frage['f_id']?></th>
                      <td style="width:750px;"><p><?php echo $frage['frage']?></p></td>
                      <td style="width:750px;" class="breite"><input type="text" placeholder="Text" class="texteingabe"></td>
                      <td><button>Speichern</button></td>
                    </tr>
                <?php } ?>
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
