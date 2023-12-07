<?php
 $id_utilisateur= $_GET['id'];
 require('includes/connections.php');
  if(isset($_POST['submit'])){
  $nom=$_POST['price'];
  $prenom=$_POST['capacity'];
  $email=$_POST['email'];
  $tel=$_POST['tel'];
  $adress=$_POST['adresse'];
  $nom =  validerInput($nom);
  $prenom = validerInput($prenom);
  $email=validerInput($email);
  $tel=validerInput($tel);
  $adress=validerInput( $adress);
  $sql = "INSERT INTO `contact` (nom, prenom, email, tel,adress,id_utilisateur) VALUES ('$nom', '$prenom', '$email', '$tel','$adress','$id_utilisateur')";
  $result = mysqli_query($connect, $sql);
  
  if ($result) {
    
    header("Location: contact.php");
    exit();
  } else {
    header("Location: regester.php");
   
    exit();
  }

  }
 function validerInput($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
 }
?>













<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
    body {
        background-color: #dee9ff;
    }

    .registration-form {
        padding: 50px 0;
    }

    .registration-form form {
        background-color: #fff;
        max-width: 600px;
        margin: auto;
        padding: 50px 70px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
    }

    .registration-form .form-icon {
        text-align: center;
        background-color: #5891ff;
        border-radius: 50%;
        font-size: 40px;
        color: white;
        width: 100px;
        height: 100px;
        margin: auto;
        margin-bottom: 50px;
        line-height: 100px;
    }

    .registration-form .item {
        border-radius: 20px;
        margin-bottom: 25px;
        padding: 10px 20px;
    }

    .registration-form .create-account {
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #5791ff;
        border: none;
        color: white;
        margin-top: 20px;
    }


    @media (max-width: 576px) {
        .registration-form form {
            padding: 50px 20px;
        }

        .registration-form .form-icon {
            width: 70px;
            height: 70px;
            font-size: 30px;
            line-height: 70px;
        }
    }
    </style>

</head>

<body>
    <div class="registration-form">
        <form>
            <div class="form-icon">
                <span><i class="fa-solid fa-bed" style="color: #ffffff;"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="price" placeholder="prix">
            </div>


            <div class="form-group">
                <input type="text" class="form-control item" name="capacity" placeholder="Nombre des persons">
            </div>

            <div class="form-group">
                <input class="form-check-input" type="checkbox" name="dispo">
                <lable> les chambres sont disponebles </lable>
            </div>
            <div class="form-group">
                <input class="form-check-input" type="checkbox" name="nondispo">
                <lable> les chambres sont non disponebles </lable>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="capacity"
                    placeholder="Nombre de champre vous voulez ajouter">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">ajouter </button>
            </div>
        </form>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="assets/js/script.js"></script>
</body>

</html>