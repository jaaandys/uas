<?php
require'function.php';

//cek login
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");
    // hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
};

if(!isset($_SESSION['loh'])){

} else{
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>
<body>
	<h3>Login</h3>
	    <div class="container_login">
       		<form method="post">
            	<div class="email">
              		<input class="email1" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                    <label for="inputEmail">Email address</label>
                </div>
                <div class="pass">
                    <input class="pass1" name="password" id="inputPassword" type="password" placeholder="Password" />
                    <label for="inputPassword">Password</label>
                </div>
                <div class="button">
                	<button class="button1"  name="login">Login</button>
                </div>
			</form>
    	</div>
</body>
</html>