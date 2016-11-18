<?php
session_start();
  if(isset($_SESSION['id'])) unset($_SESSION['id']);
  session_destroy();

require_once ('system/data.php');
require_once ('system/security.php');

$db = get_db_connection();

$error = false;
$error_msg = "";
$success = false;
$success_msg = "";

if(isset($_POST['login_submit'])){
  if(!empty($_POST['email']) && !empty($_POST['password'])){
    $email = filter_data($_POST['email']);
    $password = filter_data($_POST['password']);

    $result = login($email, $password);

    $row_count = mysqli_num_rows($result);

    if($row_count == 1){
      $admin = mysqli_fetch_assoc($result);
      session_start();
      $_SESSION['id'] = $admin ['admin_id'];
      header("Location:backend_resultate.php");
    }else {
      $error = true;
      $error_msg .= "Leider konnten wir Ihre E-Mailadresse oder ihr Passwort nicht finden.<br/>";
    }
  }else {
    $error = true;
    $error_msg .= "Bitte füllen Sie beide Felder aus.<br/>";
  }
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
                <div class="col-md-12">
                    <div class="col-md-1">
                        <div id="home">
                          <a href="index.php"><button  type="button" class="">Home</button></a>
                        </div>
                    </div>
                </div>


                <!--Inputfelder-->
                <div class="col-md-12">
                    <div class="col-md-offset-3 col-md-6" style="padding-top:10%;">
                        <h1 style="padding-bottom:10%;"> LOGIN </h1>

                                <form class="form-horizontal" action="login.php" method="post">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-8">
                                    <input type="email" name="email" class="" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Passwort </label>
                                    <div class="col-sm-8">
                                    <input type="password" name="password" class="" id="inputPassword3" placeholder="Passwort">
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
                                    <button href="backend_auswerten.php" type="submit" name="login_submit" class="">Anmelden</button>
                                    </div>
                                </div>
                                <div style="margin-top:10%;"</div>
                                </form>

                        </div>
                    </div>

        </div>
    </div>
</div>
<?php
  if($error == true) {
?>
  <div class="col-md-12">
    <div class="col-md-offset-3 col-md-6" >
      <div style="margin-top:10%;" class="alert alert-danger" role="alert"><?php echo $error_msg; ?></div>
    </div>
  </div>
<?php
  }
?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
