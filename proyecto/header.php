<?php
session_start();
if ($_SESSION['login'] != true) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="./index.php">Inicio</a></li>
                <li><a href="./portafolio.php">Portafolio</a></li>
                <li><a href="./close.php">Cerrar</a></li>
            </ul>
        </div>
    </nav>

    <style>
        .navbar-nav {
            flex-direction: row;
        }

        body {
            background-color: #212529;
        }
        * {
            color: white;

        }
        .bg-light {
            background-color: #212529 !important;
        }
        .card-body {
            background-color: #212529;
        }
    </style>
    <div class="container">
        <!-- <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="./index.php">Inicio</a></li>
                    <li><a href="./portafolio.php">Portafolio</a></li>
                    <li><a href="./close.php">Cerrar</a></li>
                </ul>
            </div>
        </nav> -->

        <!-- <a href="./index.php">Inicio</a> |
        <a href="./portafolio.php">Portafolio</a> |
        <a href="./close.php">Cerrar</a> |
        <br> -->