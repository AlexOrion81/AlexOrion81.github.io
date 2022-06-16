<?php
if (!empty($_POST[password]) AND !empty($_POST[user])) {
  $user = $_POST[user];
  $password = $_POST[password];
  $encryptedPassword = crypt($password);
}
$script = $_SERVER['SCRIPT_NAME'];
echo "<html>
  <head>
    <title>Password Encryption</title>
  </head>
  <body>
    <form method=post action='$script'>
      <font size=5><b>file.htpasswd File Password Encryption</b></font>
      <br><br>Enter Username<br>
      <input name=user value='$user' size=20>
      <br><br>Enter Password<br>
      <input name=password value='$password' size=20>
      <br><br><input type=submit name=submit value='Encrypt Now'>
      ";
      if (!empty($user) AND !empty($encryptedPassword)) {
        echo "<br><br>.htpasswd File Code<br>$user:$encryptedPassword<br>
      }
      echo "</form>
  </body>
</html>";
?>