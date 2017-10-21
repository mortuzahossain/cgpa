<?php
    session_start();
?>
 
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CGPA Calculator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/sweetalert.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    </head>
    <body>

        <div class="preloader"><img src="img/preloader.gif" alt=""></div>

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
                                <li><a data-toggle="modal" data-target="#universal">Universal Calculator</a></li>
                                <li><a data-toggle="modal" data-target="#contact">Contact</a></li>
                                <?php if (!isset($_SESSION['name'])) {?>
                                <li><a  data-toggle="modal" data-target="#login">Login</a></li>
                                <li><a  data-toggle="modal" data-target="#registration">Signup</a></li>
                                <?php } else { ?>
                                <li><a  href="admin/index.php">Admin Penel</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

