<?php
  function get_db_connection()
  {
      $db = mysqli_connect('localhost', '717416_3_1', 'T9VXwZxtsGS7', '717416_3_1')
       or die('Fehler beim Verbinden mit dem MySQL-Server.');
      mysqli_query($db, "utf8");
      return $db;
  }

  function get_result($sql)
  {
    $db = get_db_connection();
  //  echo $sql;
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $result;
    }



/*   **************************************************************** */
/*    index.php
/*   **************************************************************** */



  function get_insert_result($sql)
  {
    $db = get_db_connection();
    echo $sql;
    $result = mysqli_query($db, $sql);
    $last_id = mysqli_insert_id($db);
    mysqli_close($db);
    return $last_id;
  }

  function register($nachname, $vorname, $geburtsdatum, $email)
  {
    $sql = "INSERT INTO user (nachname, vorname, geburtsdatum, email) VALUES ('$nachname', '$vorname', '$geburtsdatum', '$email');";
    return get_insert_result($sql);
  }


/* *****************************************************************************
/* Login login.php
/* ************************************************************************** */


    function login($email, $password)
    {
      $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password';";
      return get_result($sql);
    }




/* *****************************************************************************
/* Fragen umfrage.php
/* ************************************************************************** */


  function get_fragen()
  {
    $sql = "SELECT * FROM fragen;";
    return get_result($sql);
  }

  function get_antworten($f_id)
  {
    $sql = "SELECT * FROM antworten WHERE f_id = $f_id;";
    return get_result($sql);
  }

  /* *****************************************************************************
  /* Antworten umfrage.php zurückschicken
  /* ************************************************************************** */

  function return_antworten($user_id, $kat_id)
  {
    $sql = "INSERT INTO user_antworten(user_id, kat_id) VALUES ($user_id, $kat_id);";
    return get_result();
  }


  /* *****************************************************************************
  /* backend_fragen.php
  /* ************************************************************************** */

  function show_fragen()
  {
    $sql = "SELECT * FROM fragen;";
    return get_result($sql);
  }

  function save_fragen($text, $f_id)
  {
    $sql = "UPDATE fragen SET frage = '$text' WHERE f_id = $f_id;";
    return get_result($sql);
  }

  /* *****************************************************************************
  /* backend_antworten.php
  /* ************************************************************************** */
  function show_antworten()
  {
    $sql = "SELECT * FROM antworten;";
    return get_result($sql);
  }

  function save_antworten($text, $a_id)
  {
    $sql = "UPDATE antworten SET antwort = '$text' WHERE a_id = $a_id;";
    return get_result($sql);
  }

  /* *****************************************************************************
  /* backend_ergebnis.php
  /* ************************************************************************** */

  function show_ergebnis()
  {
    $sql = "SELECT resultat.*, user.email FROM resultat LEFT JOIN user USING(user_id);";
    return get_result($sql);
  }


  function delete_resultat($user_id)
  {
    $sql = "DELETE FROM resultat WHERE user_id = $user_id";
    return get_result($sql);
  }





 ?>
