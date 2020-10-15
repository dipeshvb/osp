<!--<?php
##require 'header.php';
?>-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boot
strap/4.3.0/css/bootstrap.min.css" integrity="sha384-
PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" cr
ossorigin="anonymous">
</head>
<body>

<form class="box shadow p-3 mb-5 bgwhite rounded" action="authen_login.php" method="post">
 <img src="avatar.png" class="avatar"><br>
 <h1 class="text-primary">Login</h1>
 <input type="text" name="user_id" placeholder="Username/E-mail">
 <input type="password" name="user_pass" placeholder="Password">
 <button class="btn btn-success" type="submit" name="loginsubmit" value="Login">Login</button>
 <a href="#" target="_blank" ><p>Lost your password?</p></a>
 <a href="pr_signup.php" target="_blank">Don't have an account?
</a>
</form>
<script src="https://code.jquery.com/jquery3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" cr
ossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7
/umd/popper.min.js" integrity="sha384-
UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" cr
ossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/b
ootstrap.min.js" integrity="sha384-
7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" cr
ossorigin="anonymous"></script>
</body>
</html>
