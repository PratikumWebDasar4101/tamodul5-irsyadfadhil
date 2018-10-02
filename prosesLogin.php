<?php
session_start();
    $user = array(
    	array("admin","admin"),
        array("ichad","12345")
    );
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<center><h1>Selamat Datang</h1></center>
	<hr>
	<center><a href="registrasi.php">Registrasi</a></center>
	<hr>
</body>
</html>
<?php
    if(isset($_POST['user'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['user']= $username;

        $cek=0;
        for ($i=0; $i <count($user) ; $i++) { 
            if($user[$i][0]== $username && $user[$i][1]== $password){
                header("Location: registrasi.php");
                $cek=1;
            }
        }
        if($cek==0){
            echo "Username/Password anda salah!";
        }
    }
?>
