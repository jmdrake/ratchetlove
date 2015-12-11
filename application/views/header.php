<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ratchet Love</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url()?>assets/fonts/stylesheet.css" rel="stylesheet" type="text/css" />
        <!--start slider -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fwslider.css" media="all">
        <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/css3-mediaqueries.js"></script>
        <script src="<?php echo base_url()?>assets/js/fwslider.js"></script>
        <!--end slider -->    
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <img src="<?php echo base_url()?>assets/images/logo_inn.png" width="100px"/>
                </div>
                <div class="navbar navbar-static-top">
                    <div class="navbar-header">
                        <button class="navbar-toggle btn" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <nav class="collapse navbar-collapse" role="navigation">
                        <ul class="nav navbar-nav">
                            <?php $page=$this->uri->segment(1); ?>
                            <li <?php if($page==""){echo 'class="active"';} ?>>
                                <a href="<?php echo site_url('profile')?>/viewprofile"><i class="glyphicon glyphicon-home"></i> Home</a>
                            </li>
                            <li <?php if($page=="messages"){echo 'class="active"';} ?>>
                                <a href="<?php echo site_url('messages')?>"><i class="glyphicon glyphicon-envelope"></i> Mail</a>
                            </li>
                            <li <?php if($page=="viewed_controller"){echo 'class="active"';} ?>>
                                <a href="<?php echo site_url('viewed_controller')?>"><i class="glyphicon glyphicon-eye-open"></i> Views</a>
                            </li>
                            <li <?php if($page=="date_night"){echo 'class="active"';} ?>>
                                <a href="<?php echo site_url('date_night') ?>"><i class="glyphicon glyphicon-calendar"></i> Date Night</a>
                            </li>
                            <li <?php if($page=="search_controller"){echo 'class="active"';} ?>>
                                <a href="<?php echo site_url('search_controller') ?>"><i class="glyphicon glyphicon-search"></i> Search</a> 
                            </li>
                            <li <?php if($page=="online"){echo 'class="active"';} ?>>                        
                                <a href="<?php echo site_url('online') ?>"><i class="fa fa-group"></i> Online</a>
                            </li>                                                
                            <li <?php if($page=="upgrade"){echo 'class="active"';} ?>>
                                <a href="<?php echo site_url('upgrade') ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Upgrade</a>
                            </li>                                                
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>Account</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('profile')?>/edit">Edit Profile</a></li>
                                    <li><a href="#" onclick="alert('logout')">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>                                    
                </div>
            </div>
        </nav>
