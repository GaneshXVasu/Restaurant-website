<?php

$user = 0;
$success=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'config.php';

    if(isset($_POST['signup'])){

        $username = $_POST['name'];
        $email = $_POST['email'];
        $password =md5($_POST['password']) ;
        $cpassword =md5($_POST['cpassword']) ;

$query = "SELECT * FROM `data` WHERE username='$username' OR email='$email'";

$result = mysqli_query($con,$query);

if($result){
    $num = mysqli_num_rows($result);

    if($num>0){
       // echo "user already exist";
       $user = 1;
    }else{
        $query = "INSERT INTO `data`(username,email,password) VALUES ('$username','$email','$password')";

        $result = mysqli_query($con,$query);

        if($result){
            //echo "Signup Successful";
            $success=1;
        }else{
            die(mysqli_error($con));
        }
    }
}

    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
     #loginstatus
      {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, .5)), url(./login-img/logbg.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            backdrop-filter: inherit;
            width: 100vw;
            height: 100vh;
            cursor: no-drop;
        }

        .contentoop-body {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 350px;
            height: 250px;
            margin: 0 auto;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            border-radius: 10px;
            box-shadow: 0, 0, 15px, rgba(0, 0, 0, 7);
        }

        .contentoop-body {
            background-image: linear-gradient(rgb(228, 215, 215), rgb(194, 178, 178));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }



        .contentoop-body div {
            width: 100%;
            margin-top: 1rem;
        }



        .contentoop-body h3 {
            text-align: center;
            color: rgb(179, 77, 77);
        }



        .contentoop-body .oopsign {
            position: relative;
            width: 3rem;
            height: 3rem;

        }



        .fa-exclamation-triangle {
            margin-left: -1rem;
            color: rgb(226, 117, 53);
            font-size: 4rem;

        }


        .contentoop-body .btn-danger {
            background-color: rgb(253, 6, 6);
            border: none;
            margin-top: 2.5rem;
        }

        /* success modal */
        .content-body {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 350px;
            height: 250px;
            margin: 0 auto;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            border-radius: 10px;
            box-shadow: 0, 0, 15px, rgba(0, 0, 0, 7);
        }

        .content-body {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content-body div {
            width: 100%;
            margin-top: 1rem;
        }

        .content-body h3 {
            text-align: center;
            color: orange;
        }

        .content-body .ticksign {
            position: absolute;
            left: 42.5%;
            top: -15%;
            width: 4rem;
            height: 4rem;
            background-color: #fff;
            border-radius: 50%;
            ;

        }

        .fa-check-circle {
            color: rgb(88, 238, 88);
            font-size: 4rem;

        }

        .content-body .btn-success {
            background-color:#e67e22;
            border: none;
            margin-top: 2.5rem;
        }

</style>

</head>


<body>
    <?php
if($user){

   echo" <div id='loginstatus' class='container-fluid'>
    <div class='contentoop-body'>
        <div class='oopsign'><span><i class='fas fa-exclamation-triangle'></i></span></div>
        <div>
            <h3>oops! User already exists </h3>
        </div>
        <div><a href='index.php' role='button' class='btn btn-danger btn-block col-8 offset-2'>close</a></div>

    </div>

</div>";

}else{
    if($success){

       echo" <div id='loginstatus' class='container-fluid'>
        <div class='content-body'>
            <div class='ticksign'><span><i class='fas fa-check-circle'></i></span></div>
            <div>
                <h3>Registered Successfully..!</h3>
            </div>
            <div><a href='index.php' role='button' class='btn btn-success btn-block col-8 offset-2'>ok</a></div>
        </div>

    </div>";
        
    }
}
?>
    
</body>
</html>