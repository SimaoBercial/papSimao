<?php
$con=mysqli_connect();
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Amin Template">
    <meta name="keywords" content="gameOn, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game On</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="onbutton.ico">






</head>

<body>
<!-- Page Preloder -->


<header class="header-section">
    <div class="ht-options">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <div class="ht-widget">
                        <ul class="float-right">
                            <li class="signup-switch signup-open"><i class="fa fa-sign-out"></i> Login / Sign up
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12 col-md-8">
                    <div class="ht-widget">
                        <ul class="float-right">
                            <li><i class="fa fa-shopping-cart"></i>Carrinho &nbsp;<span class="badge badge-danger">0</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="./index.html"><img src="gameOn.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</header>
<div style="height: 60px; width: 100%; background-color: red;"><span style="padding-left: 40%; font-size: 30px; color: #fff; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">Adicionar Novo Produto</span></div>

<section class="store" style="padding:50px">
<form action="ConfirmaNovoJogo.php" method="post" enctype="multipart/form-data">
    <label style="color:white">Nome: </label>
    <input type="text" name="jogoNome"><br>

    <label style="color:white">Imagem:</label>

    <span style="color:white"> <input type="file" name=jogoImagemURL"><br></span>

    <div style="height: 200px; width: 300px; float: right">
        <img src="">
    </div>





    <span style="color:white">Preço:</span>
    <input type="number" name="jogoPreco"><br>

    <input type="Submit" value="Adiciona"><br>
</section>



</body>
</html>




