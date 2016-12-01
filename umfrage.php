<?php
session_start();
if(!isset($_SESSION['id'])){
  header ("Location:index.php");
}else{
  $user_id = $_SESSION['id'];
}

require_once ('system/data.php');
require_once ('system/security.php');

$error = false;
$error_msg = "";
$success = false;
$success_msg = "";


$result = get_fragen();

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
<form action="ergebnis.php" method="post">
    <?php
    while($frage = mysqli_fetch_assoc($result)){
        $antworten = get_antworten($frage['f_id']);
    ?>
            <!--Inputfelder-->
            <div class="col-md-offset-2 col-md-8" style="padding-top:10%;">

                <!--Fragen-->

                <div class="radio">

                        <h1>FRAGE <?php echo $frage['f_id']?></h1>
                        <p><?php echo $frage['frage']?></p>


                        <!--Antworten-->

        <?php
        while($antwort = mysqli_fetch_assoc($antworten)){
        ?>
                        <div class="radio">
                        <label><input type="radio" name="atq<?php echo $frage ['f_id']?>" value="<?php echo $antwort['kat_id']?>" required>
                            <?php echo $antwort['antwort']?>
                        </label>
                        </div>
        <?php } ?>

                </div>

            </div>
            <?php
            }
            ?>


                    <!--Buttons-->
                    <div class="col-md-12" style="padding-top:10%;">
                        <div class="col-md-offset-5 col-md-2">
                            <button  type="submit" name="weiter" class="">Weiter</button>
                        </div>
                    </div>
                    </form>

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
