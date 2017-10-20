<?php
    session_start();

    if (isset($_SESSION['name'])) {
        $userId         = $_SESSION['userId'];
        $name           = $_SESSION['name'];
        $username       = $_SESSION['username'];
        $email          = $_SESSION['email'];
        $university     = $_SESSION['university'];
        include '../include/db_config.php';
    } else {
        header('Location: ../index.php?message=unableaccess');
        exit(); 
    }
?>


<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CGPA Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/sweetalert.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" href="adminstyle.css">
        
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    </head>
    <body>

        <div class="preloader"><img src="../img/preloader.gif" alt=""></div>

        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="      #bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php"><i class="fa fa-calculator"></i><span class="sitename">CGPA</span></a>
                        </div>
                        
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="../index.php">Visit Website</a></li>
                                <li><a  href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>