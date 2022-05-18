<?php
echo "PLOP";
echo "<br>email : {$_POST['email']}";
var_dump($_POST);

$email = "olivier@guilben.bzh";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

?>