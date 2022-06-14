<?php 

session_start();
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'config.php';

    if(isset($_POST['signin'])){

        $username = $_POST['username'];
        $password =md5($_POST['password']) ;

$query = "SELECT * FROM `data` WHERE username='$username' AND password='$password'";

$result =mysqli_query($con,$query);
if($result){
    $num = mysqli_num_rows($result);

    if($num>0){
        //echo"Login Successful";
        $login=1;
        $_SESSION['username']=$username;
        header('location:./main/registeruser.php');
    }else{
       // echo "Invalid credentials";
       $invalid=1;
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
</head>
<style>

#loginstatus
 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, .5)), url(logbg.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            backdrop-filter: inherit;
            width: 100vw;
            height: 100vh;
            cursor: no-drop;
        }

        .contentinvalid-body {
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

        .contentinvalid-body {
            background-image: linear-gradient(rgb(228, 215, 215), rgb(194, 178, 178));
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }



        .contentinvalid-body div {
            width: 100%;
            margin-top: 1rem;
        }



        .contentinvalid-body h3 {
            text-align: center;
            color: rgb(179, 77, 77);
        }



        .contentinvalid-body .oopsign {
            position: relative;
            width: 3rem;
            height: 3rem;

        }



        .fa-exclamation-triangle {
            margin-left: -1rem;
            color: rgb(226, 117, 53);
            font-size: 4rem;

        }


        .contentinvalid-body .btn-danger {
            background-color: rgb(253, 6, 6);
            border: none;
            margin-top: 2.5rem;
        }

</style>

<body>
<?php

if($login){
    echo" <div class='alert alert-success alert-dismissible fade show'>
     <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
     Login Successfully..!
   </div>";
 }else{
    if($invalid){

     echo"   <div id='loginstatus' class='container-fluid'>
        <div class='contentinvalid-body'>
            <div class='oopsign'><span><i class='fas fa-exclamation-triangle'></i></span></div>
            <div>
                <h3>oops! Invalid credentials </h3>
            </div>
            <div><a href='index.php' role='button' class='btn btn-danger btn-block col-8 offset-2'>Retry</a></div>

        </div>

    </div>";

    }
 } 
 


    ?>
    
</body>
</html>