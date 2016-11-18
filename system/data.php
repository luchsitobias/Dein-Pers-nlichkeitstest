<?php
    function get_db_connection()
    {
        $db = mysqli_connect('localhost', '717416_3_1', 'T9VXwZxtsGS7', '717416_3_1')
         or die('Fehler beim Verbinden mit dem MySQL-Server.');
        mysqli_query($db, "utf8");
        return $db;
    }

    function get_result()
    {
      $db = get_db_connection();
      $result = mysqli_query($db, $sql);
      mysqli_connect();
      return $result;
    }


    /* *****************************************************************************
    /* Login login.php
    /* ************************************************************************** */

    function login($email, $password)
    {
      $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password';";
      return get_result($sql);
    }











 ?>
